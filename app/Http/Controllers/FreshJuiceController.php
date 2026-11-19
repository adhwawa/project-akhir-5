<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class FreshJuiceController extends Controller
{
    // Menampilkan halaman daftar Fresh Juice
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Minuman')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'like', '%Juice%');
            })
            ->oldest('id')
            ->get();

        return view('auth.freshjuice', compact('menus'));
    }
}