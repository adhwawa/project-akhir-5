<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Support\Str;

class NusantaraController extends Controller
{
    // Menampilkan daftar menu Nusantara
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->where('sub_category_id', 1)
            ->where('kategori_utama', 'Makanan')
            ->where('status', 'Tersedia')
            ->where('tampilkan_katalog', 1)
            ->latest()

            ->where('kategori_utama', 'Makanan')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'Nusantara');
            })
            ->oldest('id')
            ->get();

        return view('auth.nusantara', compact('menus'));
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

        return view('detailnusantara', [
            'menu' => [
                'nama' => $menu->nama_menu,
                'kategori' => 'NUSANTARA',
                'harga' => $menu->harga,
                'gambar' => $menu->foto,
                'deskripsi' => $menu->deskripsi,
            ],
            'slug' => $slug
        ]);
    }
}
