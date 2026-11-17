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

Route::get('/comfort', [ComfortController::class, 'index'])
    ->name('comfort');

Route::get('/extra', [ExtraController::class, 'index'])
    ->name('extra');

// MENU MINUMAN
Route::get('/coffeandtea', [CoffeandTeaController::class, 'index'])
    ->name('coffeandtea');

Route::get('/coffeeandtea', [CoffeeandTeaController::class, 'index'])
    ->name('coffeeandtea');

Route::get('/comfort', [ComfortController::class, 'index'])
    ->name('comfort');

Route::get('/extra', [ExtraController::class, 'index'])
    ->name('extra');

Route::get('/freshjuice', [FreshJuiceController::class, 'index'])
    ->name('freshjuice');

Route::get('/softdrink', [SoftDrinkController::class, 'index'])
    ->name('softdrink');

// MENU DESSERT
Route::get('/dessert', [DessertController::class, 'index'])
    ->name('dessert');

// ADMIN DASHBOARD & LOGOUT
Route::get('/admin/dashboard', [DashboardAdmin::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard/stats', [DashboardAdmin::class, 'getStats'])->name('admin.dashboard.stats');
Route::post('/admin/logout', [DashboardAdmin::class, 'logout'])->name('admin.logout');

//ADMIN MENU
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

// HALAMAN & PROSES KERANJANG
Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang');

// Halaman Keranjang
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
        ->back()
        ->with('success', 'Menu berhasil ditambahkan ke keranjang!');
})->name('keranjang.add');

// TAMBAH PESANAN
Route::post('/keranjang/tambah', function (Request $request) {
    // Isi proses tambah pesanan kamu
})->name('keranjang.add');

// HAPUS PESANAN
Route::post('/keranjang/hapus/{slug}', function ($slug) {
    $cart = session()->get('cart', []);

    if (isset($cart[$slug])) {
        unset($cart[$slug]);
        session()->put('cart', $cart);
    }

    return redirect()->route('keranjang')
        ->with('success', 'Pesanan berhasil dihapus!');
})->name('keranjang.hapus');

// HALAMAN KERANJANG
Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang');

// RINGKASAN PELANGGAN
Route::get('/ringkasanpelanggan', function () {
    return view('ringkasanpelanggan');
})->name('ringkasanpelanggan');

// DATA COMFORT
Route::get('/detail-comfort/{slug}', function ($slug) {
    $menus = [
        'mendoan' => [
            'nama' => 'Mendoan',
            'kategori' => 'COMFORT',
            'harga' => 30000,
            'gambar' => 'gambar/comfort/mendoan.png',
            'deskripsi' => 'Tempe pilihan dilapisi adonan tepung berbumbu dengan irisan daun bawang, kemudian digoreng hingga bagian luar renyah. Disajikan bersama sambal kecap manis dan cabai rawit.'
        ],
        'tahu-crispy' => [
            'nama' => 'Tahu Crispy',
            'kategori' => 'COMFORT',
            'harga' => 30000,
            'gambar' => 'gambar/comfort/tahu.png',
            'deskripsi' => 'Potongan tahu pilihan dibalut tepung berbumbu dan digoreng hingga menghasilkan lapisan luar yang renyah dengan bagian dalam lembut. Disajikan dengan taburan bumbu serta saus.'
        ],
        'bakwan-jagung' => [
            'nama' => 'Bakwan Jagung',
            'kategori' => 'COMFORT',
            'harga' => 30000,
            'gambar' => 'gambar/comfort/bakwajagung.png',
            'deskripsi' => 'Jagung manis dipadukan dengan tepung, irisan daun bawang, wortel, bawang putih, dan bumbu pilihan. Digoreng hingga keemasan dan disajikan bersama cabai rawit.'
        ],
        'singkong-crispy' => [
            'nama' => 'Singkong Crispy',
            'kategori' => 'COMFORT',
            'harga' => 30000,
            'gambar' => 'gambar/comfort/singkong.png',
            'deskripsi' => 'Singkong pilihan dipotong memanjang, direbus hingga empuk, kemudian digoreng dengan balutan tepung berbumbu hingga bagian luarnya renyah. Disajikan dengan saus sambal sebagai pelengkap.'
        ],
        'cireng-crispy' => [
            'nama' => 'Cireng Crispy',
            'kategori' => 'COMFORT',
            'harga' => 32000,
            'gambar' => 'gambar/comfort/cireng.png',
            'deskripsi' => 'Cireng dibuat dari tepung tapioka dengan campuran bawang putih, daun bawang, dan bumbu pilihan yang menghasilkan tekstur kenyal di dalam serta renyah di luar. Disajikan dengan saus cocolan.'
        ],
        'french-fries' => [
            'nama' => 'French Fries',
            'kategori' => 'COMFORT',
            'harga' => 25000,
            'gambar' => 'gambar/comfort/frenchfries.png',
            'deskripsi' => 'Kentang dipotong menjadi bentuk batang dan digoreng hingga keemasan. Disajikan dengan saus ketchup atau mayonnaise.'
        ],
        'roti-bakar-coklat-keju' => [
            'nama' => 'Roti Bakar Coklat Keju',
            'kategori' => 'COMFORT',
            'harga' => 35000,
            'gambar' => 'gambar/comfort/rotibakar.png',
            'deskripsi' => 'Roti tawar tebal dipanggang dengan olesan margarin hingga berwarna kecokelatan dan renyah di bagian luar. Diberi topping meses cokelat, parutan keju cheddar, serta susu kental manis.'
        ],
        'pisang-goreng-crispy' => [
            'nama' => 'Pisang Goreng Crispy',
            'kategori' => 'COMFORT',
            'harga' => 32000,
            'gambar' => 'gambar/comfort/pisanggoreng.png',
            'deskripsi' => 'Pisang pilihan dibalut adonan tepung renyah dan digoreng hingga keemasan dengan bagian dalam yang lembut. Disajikan dengan topping keju, meses cokelat, atau susu kental manis.'
        ],
        'mix-platter' => [
            'nama' => 'Mix Platter',
            'kategori' => 'COMFORT',
            'harga' => 45000,
            'gambar' => 'gambar/comfort/mixplatter.png',
            'deskripsi' => 'Sajian aneka camilan dalam satu piring yang terdiri dari french fries, chicken nuggets, sosis goreng, onion rings, dan chicken wings. Dilengkapi saus sambal, saus tomat, dan mayonnaise sebagai pelengkap.'
        ],
    ];
    abort_unless(isset($menus[$slug]), 404);
    return view('detailcomfort', [
        'menu' => $menus[$slug],
        'slug' => $slug
    ]);
})->name('detailcomfort');

// DATA EXTRA
Route::get('/detail-extra/{slug}', function ($slug) {
    $menus = [
        'nasi-putih' => [
            'nama' => 'Nasi Putih',
            'kategori' => 'EXTRA',
            'harga' => 12000,
            'gambar' => 'gambar/extra/nasiputih.png',
            'deskripsi' => 'Nasi putih pilihan dimasak hingga pulen dengan tekstur lembut dan aroma yang harum. Disajikan hangat dalam mangkuk khusus sebagai pelengkap berbagai hidangan utama.'
        ],
        'telur' => [
            'nama' => 'Telur',
            'kategori' => 'EXTRA',
            'harga' => 11000,
            'gambar' => 'gambar/extra/telur.png',
            'deskripsi' => 'Pilihan olahan telur meliputi omelet, telur ceplok, dan telur dadar yang dimasak menggunakan mentega atau minyak dengan tambahan bumbu pilihan. Tersedia tingkat kematangan sesuai permintaan, mulai dari setengah matang, ¾ matang, hingga matang sempurna.'
        ],
    ];
    abort_unless(isset($menus[$slug]), 404);
    return view('detailextra', [
        'menu' => $menus[$slug],
        'slug' => $slug
    ]);
})->name('detailextra');

<<<<<<< HEAD

=======
// DATA COFFEE AND TEA
Route::get('/detail-coffeeandtea/{slug}', function ($slug) {
    $menus = [
        'jasmine-tea' => [
            'nama' => 'Jasmine Tea',
            'kategori' => 'COFFEE AND TEA',
            'harga' => 18000,
            'gambar' => 'gambar/coffee tea/estea.png',
            'deskripsi' => 'Teh melati yang diseduh dari daun teh pilihan dengan aroma bunga melati. Disajikan dingin dengan es batu atau hangat tanpa es, cocok dinikmati sebagai minuman pendamping makanan.'
        ],
        'teh-jeruk-nipis' => [
            'nama' => 'Teh Jeruk Nipis',
            'kategori' => 'COFFEE AND TEA',
            'harga' => 20000,
            'gambar' => 'gambar/coffee tea/tehjeruknipis.png',
            'deskripsi' => 'Teh yang dipadukan dengan perasan jeruk nipis segar dan tambahan irisan jeruk nipis. Disajikan dingin dengan es batu atau hangat untuk memberikan sensasi segar.'
        ],
        'lychee-tea' => [
            'nama' => 'Lychee Tea',
            'kategori' => 'COFFEE AND TEA',
            'harga' => 20000,
            'gambar' => 'gambar/coffee tea/lecitea.png',
            'deskripsi' => 'Teh yang dicampur dengan sirup leci dan potongan buah leci, dilengkapi es batu serta irisan buah leci sebagai topping.'
        ],
        'americano' => [
            'nama' => 'Americano',
            'kategori' => 'COFFEE AND TEA',
            'harga' => 25000,
            'gambar' => 'gambar/coffee tea/americano.png',
            'deskripsi' => 'Minuman kopi yang diseduh dari satu atau dua shot espresso yang dicampur dengan air panas. Untuk versi dingin, disajikan dengan es batu dan air tanpa tambahan susu.'
        ],
        'coffee-latte' => [
            'nama' => 'Coffee Latte',
            'kategori' => 'COFFEE AND TEA',
            'harga' => 32000,
            'gambar' => 'gambar/coffee tea/latte.png',
            'deskripsi' => 'Perpaduan espresso dengan susu steamed yang menghasilkan tekstur lembut dan creamy. Pada versi dingin, menggunakan susu dingin dan es batu dengan lapisan foam susu sebagai pelengkap.'
        ],
        'cappuccino' => [
            'nama' => 'Cappuccino',
            'kategori' => 'COFFEE AND TEA',
            'harga' => 32000,
            'gambar' => 'gambar/coffee tea/cappuccino.png',
            'deskripsi' => 'Minuman kopi berbahan dasar espresso yang dipadukan dengan steamed milk dan lapisan foam susu tebal di bagian atas. Dapat dinikmati dengan taburan bubuk cokelat sebagai topping.'
        ],
        'mocaccino' => [
            'nama' => 'Mocaccino',
            'kategori' => 'COFFEE AND TEA',
            'harga' => 32000,
            'gambar' => 'gambar/coffee tea/mocaccino.png',
            'deskripsi' => 'Minuman kopi berbahan dasar espresso yang dipadukan dengan susu panas dan cokelat. Disajikan dingin atau panas sesuai pilihan.'
        ],
    ];
    abort_unless(isset($menus[$slug]), 404);
    return view('detailcoffeeandtea', [
        'menu' => $menus[$slug],
        'slug' => $slug
    ]);
})->name('detailcoffeeandtea');
>>>>>>> 6fe8676a8da9b48a799d56af46770317dc6dea38
