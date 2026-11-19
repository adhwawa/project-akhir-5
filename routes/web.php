<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainCourseController;
use App\Http\Controllers\NusantaraController;
use App\Http\Controllers\CoffeeandTeaController;
use App\Http\Controllers\AdminControllers\DashboardAdmin;
use App\Http\Controllers\AdminControllers\MenuController;
use App\Http\Controllers\ComfortController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\FreshJuiceController;
use App\Http\Controllers\SoftDrinkController;
use App\Http\Controllers\DessertController;
use App\Http\Controllers\PembayaranPelangganController;
use App\Http\Controllers\AdminControllers\PembayaranController
    as PembayaranAdminController;
use App\Http\Controllers\RingkasanPelangganController;
use App\Http\Controllers\AdminControllers\SubKategoriController;

// HALAMAN AWAL
Route::get('/', function () {
    return redirect()->route('login');
});

// LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

// REGISTER
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.process');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

// DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

// MAIN COURSE
Route::get('/maincourse', [MainCourseController::class, 'index'])
    ->name('maincourse');

// DETAIL MAIN COURSE
Route::get('/detail-maincourse/{slug}', [MainCourseController::class, 'detail'])
    ->name('detailmaincourse');

// NUSANTARA
Route::get('/nusantara', [NusantaraController::class, 'index'])
    ->name('nusantara');

//DETAIL NUSANTARA
Route::get('/detail-nusantara/{slug}', [NusantaraController::class, 'detail'])
    ->name('detailnusantara');

// COMFORT
Route::get('/comfort', [ComfortController::class, 'index'])
    ->name('comfort');

//DETAIL COMFORT
Route::get('/detail-comfort/{slug}', [ComfortController::class, 'detail'])
    ->name('detailcomfort');

// EXTRA
Route::get('/extra', [ExtraController::class, 'index'])
    ->name('extra');

//DETAIL EXTRA
Route::get('/detail-extra/{slug}', [ExtraController::class, 'detail'])
    ->name('detailextra');

// COFFEE AND TEA
Route::get('/coffeeandtea', [CoffeeandTeaController::class, 'index'])
    ->name('coffeeandtea');

//DETAIL COFFEE AND TEA
Route::get('/detail-coffeeandtea/{slug}', [CoffeeandTeaController::class, 'detail'])
    ->name('detailcoffeeandtea');

// FRESH JUICE
Route::get('/freshjuice', [FreshJuiceController::class, 'index'])
    ->name('freshjuice');

//DETAIL FRESH JUICE
Route::get('/detail-freshjuice/{slug}', [FreshJuiceController::class, 'detail'])
    ->name('detailfreshjuice');

// SOFT DRINK
Route::get('/softdrink', [SoftDrinkController::class, 'index'])
    ->name('softdrink');

//DETAIL SOFT DRINK
Route::get('/detail-softdrink/{slug}', [SoftDrinkController::class, 'detail'])
    ->name('detailsoftdrink');

// MENU DESSERT
Route::get('/dessert', [DessertController::class, 'index'])
    ->name('dessert');

//DETAIL DESSERT
Route::get('/detail-dessert/{slug}', [DessertController::class, 'detail'])
    ->name('detaildessert');

// ADMIN DASHBOARD & LOGOUT
Route::get('/admin/dashboard', [DashboardAdmin::class, 'index'])
    ->name('admin.dashboard');

Route::get('/admin/dashboard/stats', [DashboardAdmin::class, 'getStats'])
    ->name('admin.dashboard.stats');

Route::post('/admin/logout', [DashboardAdmin::class, 'logout'])
    ->name('admin.logout');

// ADMIN MENU
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('menu', MenuController::class)->except(['show']);
});

// DATA MAINCOURSE
Route::get('/detail-maincourse/{slug}', function ($slug) {
    $menus = [
        'grill-chicken-steak' => [
            'nama' => 'Grill Chicken Steak',
            'kategori' => 'MAIN COURSE',
            'harga' => 85000,
            'gambar' => 'gambar/maincourse/grillchikensteak.png',
            'deskripsi' => 'Chicken steak menggunakan dada ayam filet pilihan yang dimarinasi dengan bawang putih, lada hitam, garam, dan rempah pilihan, kemudian dipanggang hingga matang sempurna. Disajikan dengan saus mushroom atau black pepper serta sayuran dan kentang pilihan.'
        ],
        'spaghetti-bolognese-katsu' => [
            'nama' => 'Spaghetti Bolognese Katsu',
            'kategori' => 'MAIN COURSE',
            'harga' => 58000,
            'gambar' => 'gambar/maincourse/speagetibolokatsu.png',
            'deskripsi' => 'Spaghetti pilihan disajikan dengan saus bolognese berbahan tomat segar, daging sapi cincang, bawang bombay, bawang putih, dan rempah pilihan. Dilengkapi chicken katsu crispy, taburan keju parmesan, potongan tomat cherry, parsley, serta sedikit oregano untuk menambah aroma.'
        ],
        'sop-iga' => [
            'nama' => 'Sop Iga',
            'kategori' => 'MAIN COURSE',
            'harga' => 74000,
            'gambar' => 'gambar/maincourse/supiga.png',
            'deskripsi' => 'Potongan iga sapi pilihan dimasak perlahan hingga empuk dalam kuah kaldu rempah yang kaya rasa. Dilengkapi wortel, kentang, tomat, daun bawang, seledri, dan taburan bawang goreng. Disajikan dengan nasi putih hangat.'
        ],
        'nasi-goreng-katsu' => [
            'nama' => 'Nasi Goreng Katsu',
            'kategori' => 'MAIN COURSE',
            'harga' => 64000,
            'gambar' => 'gambar/maincourse/nasgorkatsu.png',
            'deskripsi' => 'Nasi putih dimasak dengan bumbu rempah, kecap manis, bawang merah, bawang putih, telur, dan sayuran pilihan hingga harum. Disajikan bersama chicken katsu renyah, telur, irisan mentimun, tomat segar, acar, serta taburan daun bawang.'
        ],
        'nasi-timbel-ayam-goreng' => [
            'nama' => 'Nasi Timbel Ayam Goreng',
            'kategori' => 'MAIN COURSE',
            'harga' => 58000,
            'gambar' => 'gambar/maincourse/nTimbel.png',
            'deskripsi' => 'Nasi putih hangat dibungkus daun pisang untuk menghasilkan aroma khas dan disajikan bersama ayam goreng berbumbu kuning. Dilengkapi tahu goreng, tempe goreng, lalapan segar, mentimun, kol, daun kemangi, serta sambal terasi.'
        ],
    ];

    abort_unless(isset($menus[$slug]), 404);

    return view('detailmaincourse', [
        'menu' => $menus[$slug],
        'slug' => $slug
    ]);
})->name('detailmaincourse');

// DETAIL NUSANTARA
Route::get('/detail-nusantara/{slug}', function ($slug) {
    $menus = [
        'nasi-iga-bakar' => [
            'nama' => 'Nasi Iga Bakar',
            'kategori' => 'NUSANTARA',
            'harga' => 72000,
            'gambar' => 'gambar/nusantara/n.igabakar.png',
            'deskripsi' => 'Iga sapi pilihan dibakar dengan bumbu kecap manis, berpadu dengan kentang dan sayuran. Disajikan bersama nasi putih hangat, tumis buncis dan wortel.'
        ],
        'nasi-campur-taliwang' => [
            'nama' => 'Nasi Campur Taliwang',
            'kategori' => 'NUSANTARA',
            'harga' => 66000,
            'gambar' => 'gambar/nusantara/taliwang.png',
            'deskripsi' => 'Nasi putih hangat disajikan bersama ayam bakar taliwang berbumbu cabai, bawang putih, tomat, dan rempah khas Lombok. Dilengkapi lauk pilihan.'
        ],
        'nasi-goreng-jawa' => [
            'nama' => 'Nasi Goreng Jawa',
            'kategori' => 'NUSANTARA',
            'harga' => 64000,
            'gambar' => 'gambar/nusantara/nasgorjawa.png',
            'deskripsi' => 'Nasi putih dimasak dengan bumbu tradisional berupa bawang merah, bawang putih, cabai, kecap, dan rempah pilihan.'
        ],
        'mie-goreng-jawa' => [
            'nama' => 'Mie Goreng Jawa',
            'kategori' => 'NUSANTARA',
            'harga' => 60000,
            'gambar' => 'gambar/nusantara/miegoreng.png',
            'deskripsi' => 'Mie telur dimasak dengan racikan bumbu khas Jawa, kecap manis, bawang merah, bawang putih, dan sayuran segar.'
        ],
        'mie-nyemek-kampung-jawa' => [
            'nama' => 'Mie Nyemek Kampung Jawa',
            'kategori' => 'NUSANTARA',
            'harga' => 60000,
            'gambar' => 'gambar/nusantara/mienyemek.png',
            'deskripsi' => 'Mie telur dimasak dengan sedikit kuah kental berbumbu bawang putih, kemiri, cabai, dan kecap manis khas Jawa.'
        ],
    ];

    abort_unless(isset($menus[$slug]), 404);

    return view('detailnusantara', [
        'menu' => $menus[$slug],
        'slug' => $slug
    ]);
})->name('detailnusantara');


// HALAMAN DETAILMENU (KERANJANG)
Route::get('/detailmenu', function () {
    return view('detailmenu');
})->name('detailmenu');


// HALAMAN KERANJANG
// TAMBAH MENU
Route::post('/keranjang/tambah', function (Request $request) {
    $data = $request->validate([
        'menu' => 'required|string',
        'jumlah' => 'required|integer|min:1',
        'catatan' => 'nullable|string|max:500',
    ]);

    $cart = session()->get('cart', []);
    $slug = $data['menu'];
    $jumlah = (int) $data['jumlah'];

    if (isset($cart[$slug])) {
        $cart[$slug]['jumlah'] = (int) ($cart[$slug]['jumlah'] ?? 0) + $jumlah;
        if ($request->filled('catatan')) {
            $cart[$slug]['catatan'] = $data['catatan'];
        }
    } else {
        $cart[$slug] = [
            'jumlah' => $jumlah,
            'catatan' => $data['catatan'] ?? '',
        ];
    }

    session()->put('cart', $cart);

    return redirect()
        ->back()
        ->with('success', 'Menu berhasil ditambahkan ke keranjang!');
})->name('detailmenu.add');

Route::post('/detailmenu/add', function () {
    return redirect()->route('detailmenu', ['#' => 'daftar-pesanan'])
        ->with('success', 'Menu berhasil ditambahkan!');
})->name('detailmenu.add');

// PAYMENT
Route::get('/Qris', [QrisController::class, 'index'])
    ->name('Qris');

Route::get('/pembayaran-berhasil', function () {
    return view('pembayaranberhasil');
})->name('pembayaran.berhasil');

// ADMIN SUB KATEGORI
Route::get('/admin/sub-kategori', [SubKategoriController::class, 'index'])->name('admin.subkategori.index');
Route::get('/admin/sub-kategori/tambah', [SubKategoriController::class, 'create'])->name('admin.subkategori.create');
Route::post('/admin/sub-kategori', [SubKategoriController::class, 'store'])->name('admin.subkategori.store');
Route::get('/admin/sub-kategori/{id}/edit', [SubKategoriController::class, 'edit'])->name('admin.subkategori.edit');
Route::put('/admin/sub-kategori/{id}', [SubKategoriController::class, 'update'])->name('admin.subkategori.update');
Route::delete('/admin/sub-kategori/{id}', [SubKategoriController::class, 'destroy'])->name('admin.subkategori.destroy');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/pembayaran', [PembayaranController::class, 'index'])
        ->name('pembayaran.index');

    Route::get('/pembayaran/bukti/{id}', [PembayaranController::class, 'bukti'])
        ->name('pembayaran.bukti');

    Route::post('/pembayaran/{id}/konfirmasi', [PembayaranController::class, 'konfirmasi'])
        ->name('pembayaran.konfirmasi');

    Route::post('/pembayaran/{id}/tolak', [PembayaranController::class, 'tolak'])
        ->name('pembayaran.tolak');

=======
// ADMIN PESANAN
Route::get('/admin/pesanan', function () {
    return view('admin.pesanan.index');
})->name('admin.pesanan');

// MELIHAT DETAIL PESANAN ADMIN
Route::get('/admin/pesanan/{id}', function ($id) {
    return view('admin.pesanan.form');
})->name('admin.pesanan.form');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [DashboardAdmin::class, 'index'])
        ->name('admin.dashboard');

});