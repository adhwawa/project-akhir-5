<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Makanan')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'Extra');
            })
            ->oldest('id')
            ->get();

        return view('auth.extra', compact('menus'));
    }
}
