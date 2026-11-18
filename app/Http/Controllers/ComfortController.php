<?php

namespace App\Http\Controllers;

use App\Models\Comfort;

class ComfortController extends Controller
{
    // Menampilkan halaman daftar Comfort
    public function index()
    {
        $menus = Comfort::all();

        return view('auth.comfort', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menu = Comfort::find($slug);

        abort_unless($menu, 404);

        return view('detailcomfort', [
            'menu' => $menu,
            'slug' => $slug
        ]);
    }
}
