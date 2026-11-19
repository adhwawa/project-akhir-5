<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    // Menampilkan semua menu & filter (Semua, Makanan, Minuman, Desert)
    public function index(Request $request)
    {
        $kategoriAktif = $request->query('kategori');
        $search = $request->query('search');

        $query = Menu::with('subCategory')->latest('id');

        if (in_array($kategoriAktif, ['Makanan', 'Minuman', 'Desert'])) {
            $query->where('kategori_utama', $kategoriAktif);
        } else {
            $kategoriAktif = null;
        }

        if ($search) {
            $query->where('nama_menu', 'like', '%' . $search . '%');
        }

        $menus = $query->get();
        $totalSemua = Menu::count();

        return view('admin.menu.index', compact('menus', 'kategoriAktif', 'totalSemua', 'search'));
    }

    // Tambah Menu
    public function create()
    {
        $menu = new Menu([
            'kategori_utama' => 'Makanan',
            'status' => 'Tersedia',
            'tampilkan_katalog' => true,
        ]);
        $subCategories = SubCategory::all();

        return view('admin.menu.edit', compact('menu', 'subCategories'));
    }

    // Menyimpan data menu baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_menu'       => 'required|string|max:255',
            'kategori_utama'  => 'required|in:Makanan,Minuman,Desert',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'harga'           => 'required|numeric|min:0',
            'status'          => 'required|in:Tersedia,Habis',
            'foto'            => 'nullable|image|mimes:jpg,png|max:5120',
            'deskripsi'       => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('menus', 'public');
        }

        $validated['tampilkan_katalog'] = $request->has('tampilkan_katalog');

        Menu::create($validated);

        return redirect()
            ->route('admin.menu.index')
            ->with('success', 'Menu baru berhasil ditambahkan!');
    }

    // Halaman Form Edit Menu (Data lama otomatis terisi)
    public function edit(Menu $menu)
    {
        $subCategories = SubCategory::all();

        return view('admin.menu.edit', compact('menu', 'subCategories'));
    }

    // Menyimpan perubahan edit tanpa membuat data baru
    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'nama_menu'       => 'required|string|max:255',
            'kategori_utama'  => 'required|in:Makanan,Minuman,Desert',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'harga'           => 'required|numeric|min:0',
            'status'          => 'required|in:Tersedia,Habis',
            'foto'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'deskripsi'       => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            if ($menu->foto && Storage::disk('public')->exists($menu->foto)) {
                Storage::disk('public')->delete($menu->foto);
            }
            $validated['foto'] = $request->file('foto')->store('menus', 'public');
        }

        $validated['tampilkan_katalog'] = $request->has('tampilkan_katalog');

        $menu->update($validated);

        return redirect()
            ->route('admin.menu.index')
            ->with('success', 'Data menu berhasil diperbarui!');
    }

    // Menghapus data menu setelah konfirmasi modal
    public function destroy(Menu $menu)
    {
        if ($menu->foto && Storage::disk('public')->exists($menu->foto)) {
            Storage::disk('public')->delete($menu->foto);
        }

        $menu->delete();

        return redirect()
            ->route('admin.menu.index')
            ->with('success', 'Menu berhasil dihapus!');
    }
}