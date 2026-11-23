<?php
namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Str;

class ComfortController extends Controller
{
    // Menampilkan daftar menu Comfort
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Makanan')
            ->where('status', 'Tersedia')
            ->where('tampilkan_katalog', 1)
            ->whereHas('subCategory', function ($query) {
                $query->where('nama_sub_kategori', 'Comfort');
            })
            ->orderBy('id')
            ->get();

        return view('auth.comfort', compact('menus'));
    }

    // Menampilkan detail menu Comfort
    public function detail($slug)
    {
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Makanan')
            ->where('status', 'Tersedia')
            ->where('tampilkan_katalog', 1)
            ->whereHas('subCategory', function ($query) {
                $query->where('nama_sub_kategori', 'Comfort');
            })
            ->get();

        $menu = $menus->first(function ($item) use ($slug) {
            return Str::slug($item->nama_menu) === $slug;
        });

        abort_unless($menu, 404);

        return view('detailcomfort', [
            'menu' => [
                'id' => $menu->id,
                'nama' => $menu->nama_menu,
                'kategori' => 'COMFORT',
                'harga' => $menu->harga,
                'gambar' => $menu->foto,
                'deskripsi' => $menu->deskripsi,
            ],
            'slug' => $slug
        ]);
    }
}
