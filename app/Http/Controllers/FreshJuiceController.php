<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\FreshJuice;
=======
use App\Models\Menu;
>>>>>>> 71dc92581c64bbb101f73420d45178b8df0b0018

class FreshJuiceController extends Controller
{
    // Menampilkan halaman daftar Fresh Juice
    public function index()
    {
<<<<<<< HEAD
        $menus = FreshJuice::all();

        return view('auth.freshjuice', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menu = FreshJuice::find($slug);

        abort_unless($menu, 404);

        return view('detailfreshjuice', [
            'menu' => $menu,
            'slug' => $slug
        ]);
=======
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Minuman')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'like', '%Juice%');
            })
            ->oldest('id')
            ->get();

        return view('auth.freshjuice', compact('menus'));
>>>>>>> 71dc92581c64bbb101f73420d45178b8df0b0018
    }
}
