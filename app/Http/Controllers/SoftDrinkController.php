<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Menu;
=======
use App\Models\SoftDrink;
>>>>>>> c5063edab9f546212c5069946789d635b86cbbb9

class SoftDrinkController extends Controller
{
    // Menampilkan halaman daftar Soft Drink
    public function index()
    {
<<<<<<< HEAD
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Minuman')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'like', '%Soft%');
            })      
            ->oldest('id')
            ->get();

        return view('auth.softdrink', compact('menus'));
=======
        $menus = SoftDrink::all();

        return view('auth.softdrink', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menu = SoftDrink::find($slug);

        abort_unless($menu, 404);

        return view('detailsoftdrink', [
            'menu' => $menu,
            'slug' => $slug
        ]);
>>>>>>> c5063edab9f546212c5069946789d635b86cbbb9
    }
}