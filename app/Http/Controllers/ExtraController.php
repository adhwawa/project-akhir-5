<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use App\Models\Extra;

class ExtraController extends Controller
{
    // Menampilkan halaman daftar Extra
    public function index()
    {
<<<<<<< HEAD
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Makanan')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'Extra');
            })
            ->oldest('id')
            ->get();

        return view('auth.extra', compact('menus'));
=======
        $menus = Extra::all();

        return view('auth.extra', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menu = Extra::find($slug);

        abort_unless($menu, 404);

        return view('detailextra', [
            'menu' => $menu,
            'slug' => $slug
        ]);
>>>>>>> c5063edab9f546212c5069946789d635b86cbbb9
    }
}
