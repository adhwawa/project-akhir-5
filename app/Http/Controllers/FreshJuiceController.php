<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Menu;
=======
use App\Models\FreshJuice;
>>>>>>> c5063edab9f546212c5069946789d635b86cbbb9

class FreshJuiceController extends Controller
{
    // Menampilkan halaman daftar Fresh Juice
    public function index()
    {
<<<<<<< HEAD
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Minuman')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'like', '%Juice%');
            })
            ->oldest('id')
            ->get();

        return view('auth.freshjuice', compact('menus'));
=======
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
>>>>>>> c5063edab9f546212c5069946789d635b86cbbb9
    }
}