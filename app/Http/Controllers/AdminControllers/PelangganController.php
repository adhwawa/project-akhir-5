<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('pesanans')
            ->leftJoin('users', 'users.id', '=', 'pesanans.user_id')
            ->select(
                'pesanans.user_id',
                'pesanans.nama_pelanggan',
                'users.email',
                DB::raw('COUNT(pesanans.id) as total_pesanan'),
                DB::raw('SUM(pesanans.total_harga) as total_transaksi'),
                DB::raw('MIN(pesanans.created_at) as tanggal_bergabung'),
                DB::raw('MAX(pesanans.created_at) as pesanan_terakhir')
            )
            ->groupBy(
                'pesanans.user_id',
                'pesanans.nama_pelanggan',
                'users.email'
            );

        // Pencarian pelanggan
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where('pesanans.nama_pelanggan', 'like', "%{$search}%");
        }

        $pelanggans = $query
            ->orderBy('pesanan_terakhir', 'desc')
            ->paginate(10)
            ->withQueryString();

        // Statistik pelanggan
        $totalPelanggan = DB::table('pesanans')
            ->select('user_id', 'nama_pelanggan')
            ->groupBy('user_id', 'nama_pelanggan')
            ->get()
            ->count();

        $totalPesanan = DB::table('pesanans')->count();

        $totalTransaksi = DB::table('pesanans')
            ->sum('total_harga');

        return view('admin.pelanggan.index', compact(
            'pelanggans',
            'totalPelanggan',
            'totalPesanan',
            'totalTransaksi'
        ));
    }
}