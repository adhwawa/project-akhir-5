<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use App\Models\Nusantara;

class NusantaraController extends Controller
{
    // Menampilkan halaman daftar Nusantara
    public function index()
    {
<<<<<<< HEAD
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Makanan')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'Nusantara');
            })
            ->oldest('id')
            ->get();
=======
        $menus = Nusantara::all();
>>>>>>> c5063edab9f546212c5069946789d635b86cbbb9

        return view('auth.nusantara', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menu = Nusantara::find($slug);

        abort_unless($menu, 404);

        return view('detailnusantara', [
            'menu' => $menu,
            'slug' => $slug
        ]);
    }
}
