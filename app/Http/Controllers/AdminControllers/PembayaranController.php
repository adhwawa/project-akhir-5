<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::with('pesanan')
            ->latest()
            ->paginate(10);

        return view(
            'admin.pembayaran',
            compact('pembayarans')
        );
    }

    public function konfirmasi($id)
    {
        $pembayaran = Pembayaran::with('pesanan')
            ->findOrFail($id);

        if ($pembayaran->status !== 'menunggu') {
            return back()->with(
                'error',
                'Pembayaran sudah diproses.'
            );
        }

        DB::transaction(function () use ($pembayaran) {
            $pembayaran->update([
                'status' => 'berhasil',
                'tanggal_konfirmasi' => now(),
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

    public function tolak($id)
    {
        $pembayaran = Pembayaran::with('pesanan')
            ->findOrFail($id);

        if ($pembayaran->status !== 'menunggu') {
            return back()->with(
                'error',
                'Pembayaran sudah diproses.'
            );
        }

        DB::transaction(function () use ($pembayaran) {
            $pembayaran->update([
                'status' => 'ditolak',
                'tanggal_konfirmasi' => now(),
                'catatan_admin' => 'Pembayaran belum dapat diverifikasi.',
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
