<?php

namespace App\Http\Controllers;

use App\Models\SoftDrink;

class SoftDrinkController extends Controller
{
    // Menampilkan halaman daftar Soft Drink
    public function index()
    {
        $menus = SoftDrink::all();

        return view('auth.softdrink', compact('menus'));
    }


public function detail($slug)
{
    $menu = \App\Models\Menu::where('kategori_utama', 'Minuman')
        ->get()
        ->first(function ($item) use ($slug) {
            $namaSlug = \Illuminate\Support\Str::slug($item->nama_menu);

            // Menyesuaikan nama Mineral Water pada URL
            if ($slug === 'mineral-water' && $namaSlug === 'air-mineral') {
                return true;
            }

            return $namaSlug === $slug;
        });

    abort_unless($menu, 404);

    return view('detailsoftdrink', [
        'menu' => [
            'id' => $menu->id,
            'nama' => $menu->nama_menu,
            'kategori' => 'SOFT DRINK',
            'harga' => $menu->harga,
            'gambar' => $menu->foto,
            'deskripsi' => $menu->deskripsi,
        ],
        'slug' => $slug,
    ]);
}

}
