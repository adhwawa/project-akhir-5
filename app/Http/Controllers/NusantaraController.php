<?php

namespace App\Http\Controllers;

use App\Models\Nusantara;

class NusantaraController extends Controller
{
    // Menampilkan halaman daftar Nusantara
    public function index()
    {
        $menus = Nusantara::all();

        return view('auth.nusantara', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menu = Nusantara::find($slug);

        abort_unless($menu, 404);

        return view('detailnusantara', [
            'menu' => $menu,
            'slug' => $slug
        ]);
    }
}
