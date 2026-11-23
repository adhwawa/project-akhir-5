<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function index(Request $request)
    {
        $query = Pembayaran::with('pesanan')
            ->latest();

        if ($request->filled('status')) {
            $query->where(
                'status_pembayaran',
                $request->status
            );
        }

        if ($request->filled('cari')) {
            $cari = $request->cari;

            $query->whereHas('pesanan', function ($q) use ($cari) {
                $q->where('kode_pesanan', 'like', "%{$cari}%")
                  ->orWhere('nama_pelanggan', 'like', "%{$cari}%");
            });
        }

        $pembayarans = $query->paginate(10)->withQueryString();

        $totalPembayaran = Pembayaran::count();

        $menunggu = Pembayaran::where(
            'status_pembayaran', 'Menunggu'
        )->count();

        $dikonfirmasi = Pembayaran::where(
            'status_pembayaran', 'Dikonfirmasi'
        )->count();

        $ditolak = Pembayaran::where(
            'status_pembayaran', 'Ditolak'
        )->count();

        return view('admin.pembayaran.index', compact(
            'pembayarans',
            'totalPembayaran',
            'menunggu',
            'dikonfirmasi',
            'ditolak'
        ));
    }

    public function bukti($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        if (!$pembayaran->bukti_pembayaran) {
            return back()->with(
                'error',
                'Bukti pembayaran belum diunggah.'
            );
        }

        $path = storage_path(
            'app/public/' . $pembayaran->bukti_pembayaran
        );

        abort_unless(file_exists($path), 404);

        return response()->file($path);
    }

    public function konfirmasi($id)
    {
        DB::transaction(function () use ($id) {
            $pembayaran = Pembayaran::with('pesanan')
                ->lockForUpdate()
                ->findOrFail($id);

            if ($pembayaran->status_pembayaran !== 'Menunggu') {
                abort(422, 'Pembayaran sudah diproses.');
            }

            if (!$pembayaran->bukti_pembayaran) {
                abort(422, 'Bukti pembayaran belum tersedia.');
            }

            $pembayaran->update([
                'status_pembayaran' => 'Dikonfirmasi',
                'catatan_admin' => null,
            ]);

            $pembayaran->pesanan->update([
                'status_pesanan' => 'diproses',
            ]);
        });

        return back()->with(
            'success',
            'Pembayaran berhasil dikonfirmasi.'
        );
    }

    public function tolak(Request $request, $id)
    {
        $request->validate([
            'catatan_admin' => 'required|string|max:500',
        ]);

        DB::transaction(function () use ($request, $id) {
            $pembayaran = Pembayaran::with('pesanan')
                ->lockForUpdate()
                ->findOrFail($id);

            if ($pembayaran->status_pembayaran !== 'Menunggu') {
                abort(422, 'Pembayaran sudah diproses.');
            }

            $pembayaran->update([
                'status_pembayaran' => 'Ditolak',
                'catatan_admin' => $request->catatan_admin,
            ]);

            $pembayaran->pesanan->update([
                'status_pesanan' => 'menunggu_pembayaran',
            ]);
        });

        return back()->with(
            'success',
            'Pembayaran ditolak.'
        );
    }
}
