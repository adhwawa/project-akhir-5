<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class FreshJuiceController extends Controller
{
    // Menampilkan halaman daftar Fresh Juice
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Minuman')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'like', '%Juice%');
            })
            ->oldest('id')
            ->get();

        return view('auth.freshjuice', compact('menus'));
    }


public function detail($slug)
{
    $menu = \App\Models\Menu::where('kategori_utama', 'Minuman')
        ->get()
        ->first(function ($item) use ($slug) {
            return \Illuminate\Support\Str::slug($item->nama_menu) === $slug;
        });

    abort_unless($menu, 404);

    return view('detailfreshjuice', [
        'menu' => [
            'id' => $menu->id,
            'nama' => $menu->nama_menu,
            'kategori' => 'FRESH JUICE',
            'harga' => $menu->harga,
            'gambar' => $menu->foto,
            'deskripsi' => $menu->deskripsi,
        ],
        'slug' => $slug,
    ]);
}

}
