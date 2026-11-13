
<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainCourseController;
use App\Http\Controllers\NusantaraController;
use App\Http\Controllers\ComfortController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\CoffeeandTeaController;
use App\Http\Controllers\FreshJuiceController;
use App\Http\Controllers\SoftDrinkController;
use App\Http\Controllers\DessertController;

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

// MENU MAKANAN
Route::get('/maincourse', [MainCourseController::class, 'index'])
    ->name('maincourse');

Route::get('/nusantara', [NusantaraController::class, 'index'])
    ->name('nusantara');

// MINUMAN
Route::get('/coffeandtea', [CoffeandTeaController::class, 'index'])
    ->name('coffeandtea');
    
Route::get('/comfort', [ComfortController::class, 'index'])
    ->name('comfort');

Route::get('/extra', [ExtraController::class, 'index'])
    ->name('extra');

// MENU MINUMAN
Route::get('/coffeeandtea', [CoffeeandTeaController::class, 'index'])
    ->name('coffeeandtea');

Route::get('/freshjuice', [FreshJuiceController::class, 'index'])
    ->name('freshjuice');

Route::get('/softdrink', [SoftDrinkController::class, 'index'])
    ->name('softdrink');

// MENU DESSERT
Route::get('/dessert', [DessertController::class, 'index'])
    ->name('dessert');

// DETAIL MAINCOURSE
Route::get('/detail-menu/{slug}', function ($slug) {
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
    return view('detailmenu', [
        'menu' => $menus[$slug],
        'slug' => $slug
    ]);
})->name('detailmenu');

Route::post('/keranjang/tambah', function (Request $request) {
    $request->validate([
        'menu' => 'required|string',
        'jumlah' => 'required|integer|min:1',
        'catatan' => 'nullable|string|max:500',
    ]);
    $cart = session()->get('cart', []);
    $slug = $request->menu;
    if (isset($cart[$slug])) {
        $cart[$slug]['jumlah'] += $request->jumlah;
        $cart[$slug]['catatan'] = $request->catatan;
    } else {
        $cart[$slug] = [
            'jumlah' => $request->jumlah,
            'catatan' => $request->catatan,
        ];
    }
    session()->put('cart', $cart);
    return redirect()
        ->route('maincourse')
        ->with('success', 'Menu berhasil ditambahkan ke keranjang!');
})->name('keranjang.add');
