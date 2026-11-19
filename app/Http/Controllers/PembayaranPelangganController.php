<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PembayaranPelangganController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = session('cart', []);

        if (empty($cart)) {
            return back()->with('error', 'Keranjang masih kosong.');
        }

        /*
         * Data menu dan harga harus berasal dari
         * daftar menu asli Daily Crave.
         *
         * Jangan menggunakan harga dari input browser.
         */

        $menuData = config('dailycrave.menu', []);

        $detailMenu = [];
        $subtotal = 0;

        foreach ($cart as $slug => $item) {

            if (!isset($menuData[$slug])) {
                continue;
            }

            $jumlah = (int) ($item['jumlah'] ?? 1);

            if ($jumlah < 1) {
                continue;
            }

            $menu = $menuData[$slug];
            $harga = (int) $menu['harga'];

            $detailMenu[] = [
                'slug' => $slug,
                'nama' => $menu['nama'],
                'harga' => $harga,
                'jumlah' => $jumlah,
                'subtotal' => $harga * $jumlah,
            ];

            $subtotal += $harga * $jumlah;
        }

        if (empty($detailMenu)) {
            return back()->with(
                'error',
                'Data menu tidak ditemukan.'
            );
        }

        // Sesuaikan pajak dengan perhitungan checkout aslimu.
        $total = $subtotal;

        $nama = auth()->user()->name;
        $meja = session('nomor_meja');

        $pesanan = DB::transaction(function () use (
            $nama,
            $meja,
            $detailMenu,
            $subtotal,
            $total
        ) {
            $pesanan = Pesanan::create([
                'kode_pesanan' => 'DC-' . strtoupper(Str::random(8)),
                'user_id' => auth()->id(),
                'nama_pelanggan' => $nama,
                'nomor_meja' => $meja,
                'detail_menu' => $detailMenu,
                'subtotal' => $subtotal,
                'total_harga' => $total,
                'status_pesanan' => 'menunggu_pembayaran',
            ]);

            Pembayaran::create([
                'pesanan_id' => $pesanan->id,
                'metode_pembayaran' => 'QRIS',
                'jumlah_transfer' => $total,
                'status' => 'menunggu',
            ]);

            return $pesanan;
        });

        return redirect()->route(
            'pembayaran.qris',
            $pesanan->kode_pesanan
        );
    }

    public function qris($kode)
    {
        $pesanan = Pesanan::with('pembayaran')
            ->where('kode_pesanan', $kode)
            ->firstOrFail();

        abort_unless(
            $pesanan->user_id === auth()->id(),
            403
        );

        return view('Qris', [
            'pesanan' => $pesanan,
            'pembayaran' => $pesanan->pembayaran,
            'data' => [
                'nama_pemesan' => $pesanan->nama_pelanggan,
                'nomor_meja' => $pesanan->nomor_meja,
                'nomor_order' => $pesanan->kode_pesanan,
            ],
        ]);
    }

    public function status($kode)
    {
        $pesanan = Pesanan::with('pembayaran')
            ->where('kode_pesanan', $kode)
            ->firstOrFail();

        abort_unless(
            $pesanan->user_id === auth()->id(),
            403
        );

        return response()->json([
            'status_pembayaran' => $pesanan->pembayaran->status,
            'status_pesanan' => $pesanan->status_pesanan,
        ]);
    }
}
