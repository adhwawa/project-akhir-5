<?php

namespace App\Http\Controllers;

use App\Models\CoffeeandTea;

class CoffeeandTeaController extends Controller
{
    // Menampilkan halaman daftar Coffee and Tea
    public function index()
    {
        $menus = CoffeeandTea::all();

        return view('auth.coffeeandtea', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menu = CoffeeandTea::find($slug);

        abort_unless($menu, 404);

        return view('detailcoffeeandtea', [
            'menu' => $menu,
            'slug' => $slug
        ]);
    }
}
