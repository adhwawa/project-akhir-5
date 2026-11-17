<?php

namespace App\Http\Controllers;

use App\Models\Extra;

class ExtraController extends Controller
{
    // Menampilkan halaman daftar Extra
    public function index()
    {
        $menus = Extra::all();

        return view('auth.extra', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menu = Extra::find($slug);

        abort_unless($menu, 404);

        return view('detailextra', [
            'menu' => $menu,
            'slug' => $slug
        ]);
    }
}
