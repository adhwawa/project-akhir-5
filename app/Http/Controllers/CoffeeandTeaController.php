<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Menu;
=======
use App\Models\CoffeeandTea;
>>>>>>> c5063edab9f546212c5069946789d635b86cbbb9

class CoffeeandTeaController extends Controller
{
    // Menampilkan halaman daftar Coffee and Tea
    public function index()
    {
<<<<<<< HEAD
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
=======
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
>>>>>>> c5063edab9f546212c5069946789d635b86cbbb9
    }
}