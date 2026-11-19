<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Menu;
=======
use App\Models\Dessert;
>>>>>>> c5063edab9f546212c5069946789d635b86cbbb9

class DessertController extends Controller
{
    // Menampilkan halaman daftar Dessert
    public function index()
    {
<<<<<<< HEAD
        $menus = Menu::with('subCategory')
            ->whereIn('kategori_utama', ['Desert', 'Dessert'])
            ->where('tampilkan_katalog', true)
            ->oldest('id')
            ->get();

        return view('auth.dessert', compact('menus'));
=======
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
>>>>>>> c5063edab9f546212c5069946789d635b86cbbb9
    }
}