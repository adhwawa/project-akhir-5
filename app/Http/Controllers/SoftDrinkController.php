<?php

namespace App\Http\Controllers;

use App\Models\SoftDrink;

class SoftDrinkController extends Controller
{
    // Menampilkan halaman daftar Soft Drink
    public function index()
    {
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
    }
}
