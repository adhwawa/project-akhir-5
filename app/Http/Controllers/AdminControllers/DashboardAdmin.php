<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAdmin extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function getStats(Request $request)
    {
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();
        $period = $request->query('period', 'week'); // week, month, year

        // 1. TOTAL PESANAN
        $pesananHariIni = Order::whereDate('created_at', $today)->count();
        $pesananKemarin = Order::whereDate('created_at', $yesterday)->count();
        $persenPesanan = $this->hitungPersentase($pesananHariIni, $pesananKemarin);

        // 2. PENDAPATAN
        $pendapatanHariIni = Order::whereDate('created_at', $today)
            ->whereIn('status', ['paid', 'completed'])
            ->sum('total_price');
        $pendapatanKemarin = Order::whereDate('created_at', $yesterday)
            ->whereIn('status', ['paid', 'completed'])
            ->sum('total_price');
        $persenPendapatan = $this->hitungPersentase($pendapatanHariIni, $pendapatanKemarin);

        // 3. PELANGGAN AKTIF
        $pelangganHariIni = Order::whereDate('created_at', $today)
            ->distinct('customer_name')
            ->count('customer_name');
        $pelangganKemarin = Order::whereDate('created_at', $yesterday)
            ->distinct('customer_name')
            ->count('customer_name');
        $selisihPelanggan = $pelangganHariIni - $pelangganKemarin;

        // 4. MENUNGGU PEMBAYARAN
        $menungguPembayaran = Order::where('status', 'pending')->count();

        // 5. DATA GRAFIK REALTIME
        $chartData = $this->getChartData($period);

        return response()->json([
            'total_pesanan' => $pesananHariIni,
            'persen_pesanan' => ($persenPesanan >= 0 ? '+' : '') . round($persenPesanan, 1) . '%',
            'is_pesanan_up' => $persenPesanan >= 0,

            'pendapatan' => 'Rp ' . number_format($pendapatanHariIni, 0, ',', '.'),
            'persen_pendapatan' => ($persenPendapatan >= 0 ? '+' : '') . round($persenPendapatan, 1) . '%',
            'is_pendapatan_up' => $persenPendapatan >= 0,

            'pelanggan_aktif' => $pelangganHariIni,
            'selisih_pelanggan' => ($selisihPelanggan >= 0 ? '+' : '') . $selisihPelanggan,
            'is_pelanggan_up' => $selisihPelanggan >= 0,

            'menunggu_pembayaran' => $menungguPembayaran,

            'chart' => $chartData,
        ]);
    }

    private function getChartData($period)
    {
        $labels = [];
        $pendapatan = [];
        $pesanan = [];
        $activeIndex = 0;

        if ($period === 'week') {
            $startOfWeek = Carbon::now()->startOfWeek(Carbon::MONDAY);
            $hariIndo = ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'];
            $activeIndex = Carbon::now()->dayOfWeekIso - 1;

            for ($i = 0; $i < 7; $i++) {
                $date = $startOfWeek->copy()->addDays($i);
                $labels[] = $hariIndo[$i];
                $pendapatan[] = (int) Order::whereDate('created_at', $date)
                    ->whereIn('status', ['paid', 'completed'])
                    ->sum('total_price');
                $pesanan[] = Order::whereDate('created_at', $date)->count();
            }
        } elseif ($period === 'month') {
            $activeIndex = (int) ceil(Carbon::now()->day / 7) - 1;
            for ($w = 1; $w <= 4; $w++) {
                $startDay = ($w - 1) * 7 + 1;
                $endDay = $w === 4 ? Carbon::now()->daysInMonth : $w * 7;
                $startDate = Carbon::now()->startOfMonth()->day($startDay);
                $endDate = Carbon::now()->startOfMonth()->day($endDay)->endOfDay();

                $labels[] = 'Minggu ' . $w;
                $pendapatan[] = (int) Order::whereBetween('created_at', [$startDate, $endDate])
                    ->whereIn('status', ['paid', 'completed'])
                    ->sum('total_price');
                $pesanan[] = Order::whereBetween('created_at', [$startDate, $endDate])->count();
            }
        } else {
            $bulanIndo = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
            $activeIndex = Carbon::now()->month - 1;
            for ($m = 1; $m <= 12; $m++) {
                $labels[] = $bulanIndo[$m - 1];
                $pendapatan[] = (int) Order::whereYear('created_at', Carbon::now()->year)
                    ->whereMonth('created_at', $m)
                    ->whereIn('status', ['paid', 'completed'])
                    ->sum('total_price');
                $pesanan[] = Order::whereYear('created_at', Carbon::now()->year)
                    ->whereMonth('created_at', $m)
                    ->count();
            }
        }

        return [
            'labels' => $labels,
            'pendapatan' => $pendapatan,
            'pesanan' => $pesanan,
            'active_index' => $activeIndex,
        ];
    }

    private function hitungPersentase($hariIni, $kemarin)
    {
        if ($kemarin == 0) {
            return $hariIni > 0 ? 100 : 0;
        }
        return (($hariIni - $kemarin) / $kemarin) * 100;
    }
}