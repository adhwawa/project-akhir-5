<?php

namespace App\Http\Controllers;

use App\Models\Dessert;

class DessertController extends Controller
{
    // Menampilkan halaman daftar Dessert
    public function index()
    {
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
    }
}
