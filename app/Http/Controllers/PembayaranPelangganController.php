<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PembayaranPelangganController extends Controller
{
    // MEMBUAT PESANAN DAN DATA PEMBAYARAN
    public function checkout(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'nomor_meja' => 'required|string|max:50',
            'metode_pembayaran' => 'required|in:QRIS',
        ]);

        $cart = session('cart', []);

        if (empty($cart)) {
            return back()->with('error', 'Keranjang masih kosong.');
        }

        $menuIds = collect(array_keys($cart))
            ->filter(fn ($id) => ctype_digit((string) $id))
            ->map(fn ($id) => (int) $id)
            ->values();

        $menus = Menu::whereIn('id', $menuIds)
            ->where('status', 'Tersedia')
            ->get()
            ->keyBy('id');

        $detailMenu = [];
        $subtotal = 0;

        foreach ($cart as $id => $item) {
            $menu = $menus->get((int) $id);
            $jumlah = (int) ($item['jumlah'] ?? 0);

            if (!$menu || $jumlah < 1) {
                continue;
            }

            $harga = (int) $menu->harga;
            $totalItem = $harga * $jumlah;

            $detailMenu[] = [
                'id' => $menu->id,
                'nama' => $menu->nama_menu,
                'harga' => $harga,
                'jumlah' => $jumlah,
                'subtotal' => $totalItem,
                'catatan' => $item['catatan'] ?? '',
                'suhu' => $item['suhu'] ?? '',
            ];

            $subtotal += $totalItem;
        }

        if (empty($detailMenu)) {
            return back()->with(
                'error',
                'Menu dalam keranjang tidak tersedia. Silakan periksa kembali pesanan.'
            );
        }

        // Total mengikuti tampilan ringkasan saat ini.
        // Di halaman ringkasan, pajak ditampilkan sudah termasuk.
        $total = $subtotal;

        $pesanan = DB::transaction(function () use (
            $request,
            $detailMenu,
            $subtotal,
            $total
        ) {
            $pesanan = Pesanan::create([
                'kode_pesanan' => 'DC-' . strtoupper(Str::random(8)),
                'user_id' => auth()->id(),
                'nama_pelanggan' => $request->nama_pelanggan,
                'nomor_meja' => $request->nomor_meja,
                'detail_menu' => $detailMenu,
                'subtotal' => $subtotal,
                'total_harga' => $total,
                'status_pesanan' => 'menunggu_pembayaran',
            ]);

            Pembayaran::create([
                'pesanan_id' => $pesanan->id,
                'metode_pembayaran' => 'QRIS',
                'total_pembayaran' => $total,
                'jumlah_transfer' => $total,
                'status_pembayaran' => 'Menunggu',
            ]);

            return $pesanan;
        });

        session()->forget('cart');

        return redirect()->route(
            'pembayaran.qris',
            $pesanan->kode_pesanan
        );
    }

    // MENAMPILKAN HALAMAN QRIS
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

    // MENGECEK STATUS PEMBAYARAN SECARA BERKALA
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
            'status_pembayaran' =>
                $pesanan->pembayaran->status_pembayaran ?? 'Menunggu',

            'status_pesanan' => $pesanan->status_pesanan,

            'catatan_admin' =>
                $pesanan->pembayaran->catatan_admin ?? null,
        ]);
    }

    // MENAMPILKAN HALAMAN PEMBAYARAN BERHASIL
    public function berhasil($kode)
    {
        $pesanan = Pesanan::with('pembayaran')
            ->where('kode_pesanan', $kode)
            ->firstOrFail();

        abort_unless(
            $pesanan->user_id === auth()->id(),
            403
        );

        if (!$pesanan->pembayaran ||
            $pesanan->pembayaran->status_pembayaran !== 'Dikonfirmasi') {
            return redirect()->route(
                'pembayaran.qris',
                $pesanan->kode_pesanan
            );
        }

        return view('pembayaranberhasil', [
            'pesanan' => $pesanan,
        ]);
    }
}
