<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class DessertController extends Controller
{
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->whereIn('kategori_utama', ['Desert', 'Dessert'])
            ->where('tampilkan_katalog', true)
            ->oldest('id')
            ->get();

        return view('auth.dessert', compact('menus'));
    }
}