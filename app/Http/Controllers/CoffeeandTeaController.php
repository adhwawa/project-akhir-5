<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class CoffeeandTeaController extends Controller
{
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Minuman')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
            $q->where(function ($sub) {
                $sub->where('nama_sub_kategori', 'like', '%Coffee%')
                        ->orWhere('nama_sub_kategori', 'like', '%Kopi%')
                        ->orWhere('nama_sub_kategori', 'like', '%Tea%');
                });
            })
            ->oldest('id')
            ->get();

        return view('auth.coffeeandtea', compact('menus'));
    }
}