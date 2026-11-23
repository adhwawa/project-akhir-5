<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class DessertController extends Controller
{
    // Menampilkan halaman daftar Dessert
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->whereIn('kategori_utama', ['Desert', 'Dessert'])
            ->where('tampilkan_katalog', true)
            ->oldest('id')
            ->get();

        return view('auth.dessert', compact('menus'));
    }


public function detail($slug)
{
    $menu = \App\Models\Menu::where('kategori_utama', 'Desert')
        ->get()
        ->first(function ($item) use ($slug) {
            return \Illuminate\Support\Str::slug($item->nama_menu) === $slug;
        });

    abort_unless($menu, 404);

    return view('detaildessert', [
        'menu' => [
            'id' => $menu->id,
            'nama' => $menu->nama_menu,
            'kategori' => 'DESSERT',
            'harga' => $menu->harga,
            'gambar' => $menu->foto,
            'deskripsi' => $menu->deskripsi,
        ],
        'slug' => $slug,
    ]);
}

}
