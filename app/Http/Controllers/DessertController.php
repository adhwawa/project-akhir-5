<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Dessert;
=======
use App\Models\Menu;
>>>>>>> 71dc92581c64bbb101f73420d45178b8df0b0018

class DessertController extends Controller
{
    // Menampilkan halaman daftar Dessert
    public function index()
    {
<<<<<<< HEAD
        $menus = Dessert::all();

        return view('auth.dessert', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menu = Dessert::find($slug);

        abort_unless($menu, 404);

        return view('detaildessert', [
            'menu' => $menu,
            'slug' => $slug
        ]);
=======
        $menus = Menu::with('subCategory')
            ->whereIn('kategori_utama', ['Desert', 'Dessert'])
            ->where('tampilkan_katalog', true)
            ->oldest('id')
            ->get();

        return view('auth.dessert', compact('menus'));
>>>>>>> 71dc92581c64bbb101f73420d45178b8df0b0018
    }
}
