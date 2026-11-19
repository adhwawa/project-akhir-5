<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Str;

class MainCourseController extends Controller
{
    // Menampilkan daftar menu Main Course
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->where('sub_category_id', 1)
            ->where('kategori_utama', 'Makanan')
            ->where('status', 'Tersedia')
            ->where('tampilkan_katalog', 1)
            ->latest()
            ->get();

        return view('auth.maincourse', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menus = Menu::where('sub_category_id', 1)
            ->where('kategori_utama', 'Makanan')
            ->where('status', 'Tersedia')
            ->where('tampilkan_katalog', 1)
            ->get();

        $menu = $menus->first(function ($item) use ($slug) {
            return Str::slug($item->nama_menu) === $slug;
        });

        abort_unless($menu, 404);

        return view('detailmaincourse', [
            'menu' => [
                'nama' => $menu->nama_menu,
                'kategori' => 'MAIN COURSE',
                'harga' => $menu->harga,
                'gambar' => $menu->foto,
                'deskripsi' => $menu->deskripsi,
            ],
            'slug' => $slug
        ]);
    }
}
