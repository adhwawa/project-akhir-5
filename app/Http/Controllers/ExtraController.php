<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use App\Models\Extra;

class ExtraController extends Controller
{
    // Menampilkan halaman daftar Extra
    public function index()
    {
        $menus = Extra::all();

        return view('auth.extra', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menu = Extra::find($slug);

        abort_unless($menu, 404);
        $menuDatabase = \App\Models\Menu::where('kategori_utama', 'Makanan')
    ->whereHas('subCategory', function ($query) {
        $query->where('nama_sub_kategori', 'Extra');
    })
    ->get()
    ->first(function ($item) use ($slug) {
        return \Illuminate\Support\Str::slug($item->nama_menu) === $slug;
    });

abort_unless($menuDatabase, 404);


return view('detailextra', [
    'menu' => [
        'id' => $menuDatabase->id,
        'nama' => $menuDatabase->nama_menu,
        'kategori' => 'EXTRA',
        'harga' => $menuDatabase->harga,
        'gambar' => $menuDatabase->foto,
        'deskripsi' => $menuDatabase->deskripsi,
    ],
    'slug' => $slug
]);

    }
}
