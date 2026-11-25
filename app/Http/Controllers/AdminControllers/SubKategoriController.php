<?php

// namespace App\Http\Controllers\AdminControllers;

// use App\Http\Controllers\Controller;
// use App\Models\SubCategory;
// use Illuminate\Http\Request;
// use Illuminate\Support\Str;

// class SubKategoriController extends Controller
// {
//     public function index(Request $request)
//     {
//         $search = $request->query('search');

//         $subKategoris = SubCategory::when($search, function ($query, $search) {
//                 $query->where('nama_sub_kategori', 'like', "%{$search}%")
//                       ->orWhere('kategori_utama', 'like', "%{$search}%")
//                       ->orWhere('slug', 'like', "%{$search}%");
//             })
//             ->orderBy('id', 'asc')
//             ->paginate(8)
//             ->withQueryString();

//         return view('admin.Sub-Kategori.index', compact('subKategoris', 'search'));
//     }

//     public function create()
//     {
//         return view('admin.Sub-Kategori.form', [
//             'mode' => 'create',
//             'subKategori' => null,
//         ]);
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'nama' => 'required|string|max:100',
//             'kategori' => 'required|string|max:50',
//             'slug' => 'nullable|string|max:100',
//             'status' => 'required|in:Tersedia,Tidak Tersedia',
//         ]);

//         $slug = $request->slug
//             ? '/' . ltrim($request->slug, '/')
//             : '/' . Str::slug($request->nama);

//         SubCategory::create([
//             'nama' => $request->nama,
//             'kategori' => $request->kategori,
//             'slug' => $slug,
//             'status' => $request->status,
//         ]);

//         return redirect()->route('admin.subkategori.index')
//             ->with('success', 'Sub kategori berhasil ditambahkan!');
//     }

//     public function edit($id)
//     {
//         $subKategori = SubCategory::findOrFail($id);

//         return view('admin.Sub-Kategori.form', [
//             'mode' => 'edit',
//             'subKategori' => $subKategori,
//         ]);
//     }

//     public function update(Request $request, $id)
//     {
//         $subKategori = SubCategory::findOrFail($id);

//         $request->validate([
//             'nama' => 'required|string|max:100',
//             'kategori' => 'required|string|max:50',
//             'slug' => 'nullable|string|max:100',
//             'status' => 'required|in:Tersedia,Tidak Tersedia',
//         ]);

//         $slug = $request->slug
//             ? '/' . ltrim($request->slug, '/')
//             : '/' . Str::slug($request->nama);

//         $subKategori->update([
//             'nama' => $request->nama,
//             'kategori' => $request->kategori,
//             'slug' => $slug,
//             'status' => $request->status,
//         ]);

//         return redirect()->route('admin.subkategori.index')
//             ->with('success', 'Sub kategori berhasil diperbarui!');
//     }

//     public function destroy($id)
//     {
//         SubCategory::findOrFail($id)->delete();

//         return redirect()->route('admin.subkategori.index')
//             ->with('success', 'Sub kategori berhasil dihapus!');
//     }
// }
