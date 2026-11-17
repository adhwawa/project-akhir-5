
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Menu | Daily Crave</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f8f5ef;
            color: #403329;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            width: 84%;
            max-width: 1400px;
            margin: auto;
        }

        header {
            height: 95px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
        }

        .logo small {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 7px;
            letter-spacing: 3px;
            text-align: center;
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            font-size: 10px;
            color: #967f6d;
        }

        .navigation a {
            text-decoration: none;
            color: #79563f;
        }

        .heading {
            margin: 20px 0;
        }

        .heading p {
            font-size: 9px;
            letter-spacing: 2px;
            color: #926d50;
            margin-bottom: 5px;
        }

        .heading h1 {
            font-family: 'Playfair Display', serif;
            font-size: 34px;
            font-weight: 400;
        }

        .notification {
            background: #f0e9df;
            padding: 15px;
            border-radius: 7px;
            font-size: 11px;
            margin-bottom: 20px;
        }

        .notification span {
            background: #79563f;
            color: white;
            padding: 3px 7px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .content {
            display: grid;
            grid-template-columns: 2fr 0.95fr;
            gap: 23px;
            align-items: start;
        }

        .card {
            background: white;
            border: 1px solid #eadfd2;
            border-radius: 12px;
            padding: 20px;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 21px;
            font-weight: 400;
            padding-bottom: 17px;
            border-bottom: 1px solid #eee5dc;
        }

        .title-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-more {
            color: #79563f;
            text-decoration: none;
            font-size: 10px;
        }

        .cart-item {
            display: grid;
            grid-template-columns: 105px 1fr auto;
            align-items: center;
            gap: 16px;
            padding: 18px 0;
            border-bottom: 1px solid #f0e9df;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item img {
            width: 105px;
            height: 105px;
            object-fit: cover;
            border-radius: 9px;
        }

        .item-info h3 {
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 8px;
        }

        .item-info p {
            color: #896448;
            font-size: 11px;
        }

        .item-info small {
            display: block;
            margin-top: 13px;
            color: #9a8a7d;
            font-size: 9px;
        }

        .item-action {
            text-align: right;
        }

        .item-price {
            color: #79563f;
            font-weight: 600;
            font-size: 12px;
            margin-bottom: 15px;
        }

        .quantity {
            display: inline-flex;
            align-items: center;
            border: 1px solid #eee3d8;
            border-radius: 30px;
            padding: 6px 12px;
            gap: 13px;
            font-size: 11px;
        }

        .quantity button {
            border: none;
            background: none;
            color: #79563f;
            font-size: 17px;
            cursor: pointer;
        }

        .quantity span {
            min-width: 15px;
            text-align: center;
        }

        .remove-button {
            display: inline-block;
            margin-top: 10px;
            padding: 7px 14px;
            border: 1px solid #eadfd2;
            background: white;
            color: #a15e4d;
            border-radius: 20px;
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            cursor: pointer;
        }

        .remove-button:hover {
            background: #a15e4d;
            color: white;
        }

        .payment {
            position: sticky;
            top: 20px;
        }

        .payment-row {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            font-size: 10px;
            color: #897b70;
        }

        .payment-row strong {
            color: #403329;
            font-weight: 400;
        }

        .payment-total {
            border-top: 1px solid #eee5dc;
            margin-top: 20px;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .payment-total span {
            font-size: 11px;
            font-weight: 500;
        }

        .payment-total strong {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            color: #79563f;
            font-weight: 400;
        }

        .checkout {
            display: block;
            width: 100%;
            padding: 14px;
            border: none;
            background: #79563f;
            color: white;
            border-radius: 30px;
            margin-top: 20px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            text-align: center;
            text-decoration: none;
        }

        .checkout:hover {
            background: #5d402e;
        }

        .checkout:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .payment-note {
            text-align: center;
            color: #97887d;
            font-size: 9px;
            line-height: 1.8;
            margin-top: 18px;
        }

        .recommend {
            margin-top: 25px;
        }

        .recommend h2 {
            font-family: 'Playfair Display', serif;
            font-size: 21px;
            font-weight: 400;
        }

        .recommend > p {
            font-size: 10px;
            color: #97887d;
            margin-top: 5px;
        }

        .recommend-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 12px;
        }

        .recommend-item {
            background: white;
            border: 1px solid #eadfd2;
            border-radius: 11px;
            padding: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .recommend-item img {
            width: 72px;
            height: 76px;
            object-fit: cover;
            border-radius: 8px;
        }

        .recommend-info {
            flex: 1;
        }

        .recommend-info h3 {
            font-family: 'Playfair Display', serif;
            font-size: 14px;
            font-weight: 400;
        }

        .recommend-info p {
            font-size: 10px;
            color: #79563f;
            margin-top: 8px;
        }

        .recommend-item button {
            border: none;
            background: #f0e9df;
            color: #79563f;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
            font-size: 18px;
        }

        .recommend-item button:hover {
            background: #79563f;
            color: white;
        }

        .empty {
            text-align: center;
            padding: 50px 10px;
            color: #897b70;
            font-size: 12px;
        }

        .empty h3 {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .empty a {
            display: inline-block;
            margin-top: 15px;
            background: #79563f;
            color: white;
            padding: 10px 22px;
            text-decoration: none;
            border-radius: 30px;
        }

        footer {
            margin-top: 100px;
            padding: 30px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        footer .tagline {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            color: #a18d7d;
            font-size: 13px;
        }

        footer small {
            font-size: 9px;
            color: #97887d;
        }

        @media(max-width: 768px) {
            .container {
                width: 92%;
            }

            .content {
                grid-template-columns: 1fr;
            }

            .payment {
                position: static;
            }

            .recommend-list {
                grid-template-columns: 1fr;
            }

            .cart-item {
                grid-template-columns: 75px 1fr;
            }

            .cart-item img {
                width: 75px;
                height: 85px;
            }

            .item-action {
                grid-column: 2;
                text-align: left;
            }

            footer {
                flex-wrap: wrap;
                gap: 15px;
            }
        }
    </style>
</head>

<body>

@php
    $cart = session()->get('cart', []);

    $menuData = [
        //MAINCOURSE
        'grill-chicken-steak' => [
            'nama' => 'Grill Chicken Steak',
            'harga' => 85000,
            'gambar' => 'gambar/maincourse/grillchikensteak.png'
        ],
        'spaghetti-bolognese-katsu' => [
            'nama' => 'Spaghetti Bolognese Katsu',
            'harga' => 58000,
            'gambar' => 'gambar/maincourse/speagetibolokatsu.png'
        ],
        'sop-iga' => [
            'nama' => 'Sop Iga',
            'harga' => 74000,
            'gambar' => 'gambar/maincourse/supiga.png'
        ],
        'nasi-goreng-katsu' => [
            'nama' => 'Nasi Goreng Katsu',
            'harga' => 64000,
            'gambar' => 'gambar/maincourse/nasgorkatsu.png'
        ],
        'nasi-timbel-ayam-goreng' => [
            'nama' => 'Nasi Timbel Ayam Goreng',
            'harga' => 58000,
            'gambar' => 'gambar/maincourse/nTimbel.png'
        ],
//NUSANTARA
'nasi-iga-bakar' => [
    'nama' => 'Nasi Iga Bakar',
    'harga' => 72000,
    'gambar' => 'gambar/nusantara/n.igabakar.png'
],

'nasi-campur-taliwang' => [
    'nama' => 'Nasi Campur Taliwang',
    'harga' => 66000,
    'gambar' => 'gambar/nusantara/taliwang.png'
],

'nasi-goreng-jawa' => [
    'nama' => 'Nasi Goreng Jawa',
    'harga' => 64000,
    'gambar' => 'gambar/nusantara/nasgorjawa.jpeg'
],

'mie-goreng-jawa' => [
    'nama' => 'Mie Goreng Jawa',
    'harga' => 60000,
    'gambar' => 'gambar/nusantara/miegoreng.png'
],

'mie-nyemek-kampung-jawa' => [
    'nama' => 'Mie Nyemek Kampung Jawa',
    'harga' => 60000,
    'gambar' => 'gambar/nusantara/mienyemek.png'
],
//COMFORT
'mendoan' => [
    'nama' => 'Mendoan',
    'harga' => 30000,
    'gambar' => 'gambar/comfort/mendoan.png'
],

'tahu-crispy' => [
    'nama' => 'Tahu Crispy',
    'harga' => 30000,
    'gambar' => 'gambar/comfort/tahu.png'
],

'bakwan-jagung' => [
    'nama' => 'Bakwan Jagung',
    'harga' => 30000,
    'gambar' => 'gambar/comfort/bakwajagung.png'
],

'singkong-crispy' => [
    'nama' => 'Singkong Crispy',
    'harga' => 30000,
    'gambar' => 'gambar/comfort/singkong.png'
],

'cireng-crispy' => [
    'nama' => 'Cireng Crispy',
    'harga' => 32000,
    'gambar' => 'gambar/comfort/cireng.png'
],

'french-fries' => [
    'nama' => 'French Fries',
    'harga' => 25000,
    'gambar' => 'gambar/comfort/frenchfries.png'
],

'roti-bakar-coklat-keju' => [
    'nama' => 'Roti Bakar Coklat Keju',
    'harga' => 35000,
    'gambar' => 'gambar/comfort/rotibakar.png'
],

'pisang-goreng-crispy' => [
    'nama' => 'Pisang Goreng Crispy',
    'harga' => 32000,
    'gambar' => 'gambar/comfort/pisanggoreng.png'
],

'mix-platter' => [
    'nama' => 'Mix Platter',
    'harga' => 45000,
    'gambar' => 'gambar/comfort/mixplatter.png'
],
//EXTRA
'nasi-putih' => [
    'nama' => 'Nasi Putih',
    'harga' => 12000,
    'gambar' => 'gambar/extra/nasiputih.png'
],

'telur' => [
    'nama' => 'Telur',
    'harga' => 11000,
    'gambar' => 'gambar/extra/telur.png'
],
//COFFE AND TEA
'jasmine-tea' => [
    'nama' => 'Jasmine Tea',
    'harga' => 18000,
    'gambar' => 'gambar/coffee tea/estea.png'
],

'teh-jeruk-nipis' => [
    'nama' => 'Teh Jeruk Nipis',
    'harga' => 20000,
    'gambar' => 'gambar/coffee tea/tehjeruknipis.png'
],

'lychee-tea' => [
    'nama' => 'Lychee Tea',
    'harga' => 20000,
    'gambar' => 'gambar/coffee tea/lecitea.png'
],

'americano' => [
    'nama' => 'Americano',
    'harga' => 25000,
    'gambar' => 'gambar/coffee tea/americano.png'
],

'coffee-latte' => [
    'nama' => 'Coffee Latte',
    'harga' => 32000,
    'gambar' => 'gambar/coffee tea/latte.png'
],

'cappuccino' => [
    'nama' => 'Cappuccino',
    'harga' => 32000,
    'gambar' => 'gambar/coffee tea/cappucino.png'
],

'mocaccino' => [
    'nama' => 'Mocaccino',
    'harga' => 32000,
    'gambar' => 'gambar/coffee tea/mocacinno.png'
],
//FRESH JUICE
'fresh-orange' => [
    'nama' => 'Fresh Orange',
    'harga' => 28000,
    'gambar' => 'gambar/fresh juice/orange.png'
],

'watermelon' => [
    'nama' => 'Watermelon',
    'harga' => 28000,
    'gambar' => 'gambar/fresh juice/watermelon.png'
],

'strawberry' => [
    'nama' => 'Strawberry',
    'harga' => 28000,
    'gambar' => 'gambar/fresh juice/strawberry.png'
],

'apple' => [
    'nama' => 'Apple',
    'harga' => 28000,
    'gambar' => 'gambar/fresh juice/apple.png'
],
//SOFT DRINK
'mineral-water' => [
    'nama' => 'Mineral Water',
    'harga' => 8000,
    'gambar' => 'gambar/soft drink/mineralwater.png'
],

'coke' => [
    'nama' => 'Coke',
    'harga' => 25000,
    'gambar' => 'gambar/soft drink/coke.png'
],

'sprite' => [
    'nama' => 'Sprite',
    'harga' => 25000,
    'gambar' => 'gambar/soft drink/sprite.png'
],

'fanta' => [
    'nama' => 'Fanta',
    'harga' => 25000,
    'gambar' => 'gambar/soft drink/fanta.png'
],
//DESERT
'buah-potong' => [
    'nama' => 'Buah Potong',
    'harga' => 48000,
    'gambar' => 'gambar/dessert/buahpotong.png'
],

'ice-buah' => [
    'nama' => 'Ice Buah',
    'harga' => 38000,
    'gambar' => 'gambar/dessert/icebuah.png'
],

'slice-cake' => [
    'nama' => 'Slice Cake',
    'harga' => 38000,
    'gambar' => 'gambar/dessert/slicecake.png'
],


    ];

    $subtotal = 0;
    $totalJumlah = 0;

    foreach ($cart as $slug => $item) {
        if (isset($menuData[$slug])) {
            $jumlah = (int) ($item['jumlah'] ?? 0);
            $subtotal += $menuData[$slug]['harga'] * $jumlah;
            $totalJumlah += $jumlah;
        }
    }

    $rekomendasi = [
        'spaghetti-bolognese-katsu',
        'sop-iga'
    ];
@endphp

<div class="container">

    <header>
        <div class="logo">
            ☼ daily crave
            <small>DAPUR & RUANG TEMU</small>
        </div>
    </header>

    <div class="navigation">
        <a href="{{ route('maincourse') }}">
            ← Kembali ke menu
        </a>
        <span>Menu/Pesanan</span>
    </div>

    <div class="heading">
        <p>PESANAN ANDA</p>
        <h1>Satu langkah menuju rasa.</h1>
    </div>

    <div class="notification">
        <span>✓</span>
        {{ session('success', 'Periksa kembali pesanan Anda.') }}
    </div>

    <div class="content">

        <div class="left-content">

            <div class="card">

                <div class="title-row">
                    <h2 class="card-title">
                        Ringkasan pesanan
                    </h2>

                    <a href="{{ route('maincourse') }}" class="add-more">
                        + Tambah pesanan
                    </a>
                </div>

                @if($totalJumlah > 0)

                    @foreach($cart as $slug => $item)

                        @php
                            $menu = $menuData[$slug] ?? null;
                            $jumlah = (int) ($item['jumlah'] ?? 0);
                        @endphp

                        @if($menu && $jumlah > 0)

                            <div class="cart-item">

                                <img
                                    src="{{ asset($menu['gambar']) }}"
                                    alt="{{ $menu['nama'] }}"
                                >

                                <div class="item-info">

                                    <h3>{{ $menu['nama'] }}</h3>

                                    <p>
                                        Rp{{ number_format($menu['harga'], 0, ',', '.') }}
                                    </p>

                                    <small>
                                        {{ $item['catatan'] ?? '' }}
                                    </small>

                                </div>

                                <div class="item-action">

                                    <p class="item-price">
                                        Rp{{ number_format($menu['harga'] * $jumlah, 0, ',', '.') }}
                                    </p>

                                    <div class="quantity">

                                        <form action="{{ route('detailmenu.kurang') }}" method="POST">
                                            @csrf

                                            <input type="hidden" name="menu" value="{{ $slug }}">

                                            <button type="submit">−</button>
                                        </form>

                                        <span>{{ $jumlah }}</span>

                                        <form action="{{ route('detailmenu.add') }}" method="POST">
                                            @csrf

                                            <input type="hidden" name="menu" value="{{ $slug }}">
                                            <input type="hidden" name="jumlah" value="1">

                                            <button type="submit">+</button>
                                        </form>

                                    </div>

                                    <div>
                                        <form
                                            action="{{ route('detailmenu.hapus', $slug) }}"
                                            method="POST"
                                            onsubmit="return confirm('Hapus pesanan ini?')"
                                        >
                                            @csrf

                                            <button type="submit" class="remove-button">
                                                Hapus Pesanan
                                            </button>
                                        </form>
                                    </div>

                                </div>

                            </div>

                        @endif

                    @endforeach

                @else

                    <div class="empty">

                        <h3>Keranjang Anda masih kosong.</h3>

                        <p>Yuk, pilih hidangan favorit Anda!</p>

                        <a href="{{ route('maincourse') }}">
                            Jelajahi Menu
                        </a>

                    </div>

                @endif

            </div>

            <div class="recommend">

                <h2>Teman untuk hidangan Anda</h2>

                <p>Jelajahi rasa lainnya dari dapur Serambi.</p>

                <div class="recommend-list">

                    @foreach($rekomendasi as $slug)

                        @if(!isset($cart[$slug]) && isset($menuData[$slug]))

                            @php
                                $menu = $menuData[$slug];
                            @endphp

                            <div class="recommend-item">

                                <img
                                    src="{{ asset($menu['gambar']) }}"
                                    alt="{{ $menu['nama'] }}"
                                >

                                <div class="recommend-info">

                                    <h3>{{ $menu['nama'] }}</h3>

                                    <p>
                                        Rp{{ number_format($menu['harga'], 0, ',', '.') }}
                                    </p>

                                </div>

                                <form action="{{ route('detailmenu.add') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="menu" value="{{ $slug }}">
                                    <input type="hidden" name="jumlah" value="1">

                                    <button type="submit">+</button>
                                </form>

                            </div>

                        @endif

                    @endforeach

                </div>

            </div>

        </div>

        <div class="card payment">

            <h2 class="card-title">
                Ringkasan pesanan
            </h2>

            <div class="payment-row">

                <span>
                    Subtotal · {{ $totalJumlah }} menu
                </span>

                <strong>
                    Rp{{ number_format($subtotal, 0, ',', '.') }}
                </strong>

            </div>

            <div class="payment-row">
                <span>Pajak Resto (PB1 10%)</span>
                <strong>Termasuk</strong>
            </div>

            <div class="payment-row">
                <span>Biaya Layanan Meja</span>
                <strong style="color: green;">GRATIS</strong>
            </div>

            <div class="payment-total">

                <span>Total</span>

                <strong>
                    Rp{{ number_format($subtotal, 0, ',', '.') }}
                </strong>

            </div>

            @if($totalJumlah > 0)

                <a href="{{ route('ringkasanpelanggan') }}" class="checkout">
                    Lanjutkan Ke Ringkasan Pelanggan &nbsp; →
                </a>

            @else

                <button class="checkout" disabled>
                    Lanjutkan Ke Ringkasan Pelanggan &nbsp; →
                </button>

            @endif

            <p class="payment-note">
                Periksa menu dan catatan Anda sebelum melanjutkan ke konfirmasi pesanan.
            </p>

        </div>

    </div>

    <footer>

        <div class="logo">
            ☼ daily crave
            <small>DAPUR & RUANG TEMU</small>
        </div>

        <p class="tagline">
            Rasa yang dekat, cerita yang hangat.
        </p>

        <small>© 2026 Daily Crave</small>

    </footer>

</div>

</body>
</html>
