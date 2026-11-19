<?php

namespace App\Http\Controllers;

use App\Models\FreshJuice;

class FreshJuiceController extends Controller
{
    // Menampilkan halaman daftar Fresh Juice
    public function index()
    {
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
    }
}
