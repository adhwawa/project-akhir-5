<?php

use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
use App\Http\Controllers\AdminControllers\PelangganController;

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

 // HALAMAN DETAIL MENU / KERANJANG
Route::get('/detailmenu', function () {
    return view('detailmenu');
})->name('detailmenu');

// TAMBAH MENU
Route::post('/keranjang/tambah', function (Request $request) {
    $data = $request->validate([
'menu' => 'required|integer|exists:menus,id',
        'jumlah' => 'required|integer|min:1',
        'catatan' => 'nullable|string|max:500',
        'suhu' => 'nullable|string|max:50',
    ]);

    $menu = \App\Models\Menu::findOrFail($data['menu']);

    $key = (string) $menu->id;
    $cart = session()->get('cart', []);

    if (isset($cart[$key])) {
        $cart[$key]['jumlah'] += (int) $data['jumlah'];
    } else {
        $cart[$key] = [
            'id' => $menu->id,
            'jumlah' => (int) $data['jumlah'],
            'catatan' => '',
            'suhu' => '',
        ];
    }

    if ($request->filled('catatan')) {
        $cart[$key]['catatan'] = $data['catatan'];
    }

    if ($request->filled('suhu')) {
        $cart[$key]['suhu'] = $data['suhu'];
    }

    session()->put('cart', $cart);

    return redirect()->route('detailmenu')
        ->with('success', 'Pesanan berhasil ditambahkan!');
})->name('detailmenu.add');

// KURANGI JUMLAH
Route::post('/detailmenu/kurang', function (Request $request) {
    $data = $request->validate([
        'menu' => 'required|string',
    ]);

    $cart = session()->get('cart', []);
    $slug = $data['menu'];

    if (isset($cart[$slug])) {
        $cart[$slug]['jumlah']--;

        if ($cart[$slug]['jumlah'] <= 0) {
            unset($cart[$slug]);
        }
    }

    session()->put('cart', $cart);

    return redirect()->route('detailmenu');
})->name('detailmenu.kurang');

// SIMPAN CATATAN
Route::post('/detailmenu/catatan', function (Request $request) {
    $data = $request->validate([
        'menu' => 'required|string',
        'catatan' => 'nullable|string|max:500',
    ]);

    $cart = session()->get('cart', []);

    if (isset($cart[$data['menu']])) {
        $cart[$data['menu']]['catatan'] = $data['catatan'] ?? '';
    }

    session()->put('cart', $cart);

    return redirect()->route('detailmenu')
        ->with('success', 'Catatan berhasil disimpan!');
})->name('detailmenu.catatan');

// HAPUS PESANAN
Route::post('/detailmenu/hapus/{menu}', function ($menu) {
    $cart = session()->get('cart', []);

    unset($cart[$menu]);

    session()->put('cart', $cart);

    return redirect()->route('detailmenu')
        ->with('success', 'Pesanan berhasil dihapus!');
})->name('detailmenu.hapus');

// HALAMAN RINGKASAN PELANGGAN
Route::get('/ringkasanpelanggan', function () {
    return view('ringkasanpelanggan');
})->name('ringkasanpelanggan');


// PEMBAYARAN PELANGGAN
Route::middleware('auth')->group(function () {

    // Proses checkout
    Route::post('/checkout/qris', [
        PembayaranPelangganController::class,
        'checkout'
    ])->name('pembayaran.checkout');

    // Menampilkan halaman QRIS
    Route::get('/qris/{kode}', [
        PembayaranPelangganController::class,
        'qris'
    ])->name('pembayaran.qris');

    // Mengecek status pembayaran
    Route::get('/pembayaran/{kode}/status', [
        PembayaranPelangganController::class,
        'status'
    ])->name('pembayaran.status');

    // Menampilkan struk pembayaran
    Route::get('/pembayaran/{kode}/berhasil', [
        PembayaranPelangganController::class,
        'berhasil'
    ])->name('pembayaran.berhasil');

});

// PEMBAYARAN ADMIN
// PEMBAYARAN ADMIN
Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

        // Menampilkan data pembayaran
        Route::get('/pembayaran', [
            PembayaranAdminController::class,
            'index'
        ])->name('pembayaran.index');

        // Konfirmasi pembayaran
        Route::post('/pembayaran/{id}/konfirmasi', [
            PembayaranAdminController::class,
            'konfirmasi'
        ])->name('pembayaran.konfirmasi');

        // Menolak pembayaran
        Route::post('/pembayaran/{id}/tolak', [
            PembayaranAdminController::class,
            'tolak'
        ])->name('pembayaran.tolak');

    });

// ADMIN SUB KATEGORI
Route::get('/admin/sub-kategori', [SubKategoriController::class, 'index'])->name('admin.subkategori.index');
Route::get('/admin/sub-kategori/tambah', [SubKategoriController::class, 'create'])->name('admin.subkategori.create');
Route::post('/admin/sub-kategori', [SubKategoriController::class, 'store'])->name('admin.subkategori.store');
Route::get('/admin/sub-kategori/{id}/edit', [SubKategoriController::class, 'edit'])->name('admin.subkategori.edit');
Route::put('/admin/sub-kategori/{id}', [SubKategoriController::class, 'update'])->name('admin.subkategori.update');
Route::delete('/admin/sub-kategori/{id}', [SubKategoriController::class, 'destroy'])->name('admin.subkategori.destroy');

// ADMIN PESANAN
Route::get('/admin/pesanan', function () {
    return view('admin.pesanan.index');
})->name('admin.pesanan');

// MELIHAT DETAIL PESANAN ADMIN
Route::get('/admin/pesanan/{id}', function ($id) {
    return view('admin.pesanan.form');
})->name('admin.pesanan.form');


// ADMIN PELANGGAN
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/pelanggan', [PelangganController::class, 'index'])
        ->name('pelanggan.index');

});
