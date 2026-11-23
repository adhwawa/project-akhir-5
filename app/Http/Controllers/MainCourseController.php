<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class MainCourseController extends Controller
{
    // Menampilkan daftar Main Course
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Makanan')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'Main Course');
            })
            ->orderBy('id')
            ->get();

        return view('auth.maincourse', compact('menus'));
    }

    // Menampilkan detail Main Course
public function detail($slug)
{
    $menus = \App\Models\Menu::where('kategori_utama', 'Makanan')
        ->where('sub_category_id', 1)
        ->get();

    $menu = $menus->first(function ($item) use ($slug) {
        return (string) $item->id === (string) $slug
            || \Illuminate\Support\Str::slug($item->nama_menu) === $slug;
    });

    abort_unless($menu, 404);

    return view('detailmaincourse', [
        'menu' => [
            'id' => $menu->id,
            'nama' => $menu->nama_menu,
            'kategori' => 'MAIN COURSE',
            'harga' => $menu->harga,
            'gambar' => $menu->foto,
            'deskripsi' => $menu->deskripsi,
        ],
        'slug' => $slug,
    ]);
}

}
