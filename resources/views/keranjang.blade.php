    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Keranjang | Daily Crave</title>

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

            /* NAVBAR */
            header {
                height: 95px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .logo {
                font-family: 'Playfair Display', serif;
                font-size: 28px;
                color: #403329;
            }

            .logo small {
                display: block;
                font-family: 'Poppins', sans-serif;
                font-size: 7px;
                letter-spacing: 3px;
                text-align: center;
            }

            .cart-button {
                text-decoration: none;
                color: #704c36;
                background: white;
                border: 1px solid #eadfd2;
                padding: 10px 18px;
                border-radius: 30px;
                font-size: 12px;
            }

            .cart-count {
                background: #f0e9df;
                padding: 3px 7px;
                border-radius: 50%;
                margin-left: 5px;
            }

            /* NAVIGASI */
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

            /* JUDUL */
            .heading {
                margin-top: 20px;
                margin-bottom: 20px;
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

            /* NOTIFIKASI */
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

            /* LAYOUT */
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

            /* ITEM PESANAN */
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
                padding-bottom: 0;
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
                margin-bottom: 25px;
            }

            .quantity {
                display: inline-flex;
                align-items: center;
                border: 1px solid #eee3d8;
                border-radius: 30px;
                padding: 7px 15px;
                gap: 15px;
                font-size: 11px;
            }

            /* PEMBAYARAN */
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

            .payment-note {
                text-align: center;
                color: #97887d;
                font-size: 9px;
                line-height: 1.8;
                margin-top: 18px;
            }

            /* REKOMENDASI */
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

            .recommend-item a {
                text-decoration: none;
                background: #f0e9df;
                color: #79563f;
                width: 23px;
                height: 23px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
            }

            /* KERANJANG KOSONG */
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

            /* FOOTER */
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

            /* TOMBOL HAPUS - BERLAKU DI LAPTOP DAN HP */
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
                transition: 0.3s;
            }

            .remove-button:hover {
                background: #a15e4d;
                color: white;
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
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                .item-price {
                    margin-bottom: 0;
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
        // Mengambil data keranjang dari session Laravel
        $cart = session()->get('cart', []);

        // Data informasi menu berdasarkan slug
        $menuData = [
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
        ];

        $subtotal = 0;
        $totalJumlah = 0;
    @endphp

    <div class="container">

        <!-- NAVBAR -->
        <header>
            <div class="logo">
                ☼ daily crave
                <small>DAPUR & RUANG TEMU</small>
            </div>

            <a href="{{ route('keranjang') }}" class="cart-button">
                ♧ Keranjang
                <span class="cart-count">
                    {{ collect($cart)->sum('jumlah') }}
                </span>
            </a>
        </header>

        <!-- NAVIGASI -->
        <div class="navigation">
            <a href="{{ route('maincourse') }}">
                ← Kembali ke menu
            </a>

            <span>Menu / Keranjang</span>
        </div>

        <!-- JUDUL -->
        <div class="heading">
            <p>PESANAN ANDA</p>
            <h1>Satu langkah menuju rasa.</h1>
        </div>

        @if(session('success'))
            <div class="notification">
                <span>✓</span>
                {{ session('success') }}
            </div>
        @else
            <div class="notification">
                <span>✓</span>
                Periksa kembali pesanan Anda.
            </div>
        @endif

        <!-- CONTENT -->
        <div class="content">

            <div class="left-content">

                <!-- RINGKASAN PESANAN -->
                <div class="card">

                    <div class="title-row">
                        <h2 class="card-title">
                            Ringkasan pesanan
                        </h2>

                        <a href="{{ route('maincourse') }}"
                        class="add-more">
                            + Tambah pesanan
                        </a>
                    </div>

                    @if(count($cart) > 0)

                        @foreach($cart as $slug => $item)

                            @php
                                $menu = $menuData[$slug] ?? null;

                                if ($menu) {
                                    $subtotal += $menu['harga'] * $item['jumlah'];
                                    $totalJumlah += $item['jumlah'];
                                }
                            @endphp

                            @if($menu)
                                <div class="cart-item">

                                    <img
                                        src="{{ asset($menu['gambar']) }}"
                                        alt="{{ $menu['nama'] }}"
                                    >

                                    <div class="item-info">

                                        <h3>{{ $menu['nama'] }}</h3>

                                        <p>
                                            {{ 'Rp' . number_format($menu['harga'], 0, ',', '.') }}
                                        </p>

                                        <small>
                                            {{ $item['catatan'] ?: $item['jumlah'] . ' porsi' }}
                                        </small>

                                    </div>

                                    <div class="item-action">

                                        <p class="item-price">
                                            Rp{{ number_format($menu['harga'] * $item['jumlah'], 0, ',', '.') }}
                                        </p>

                                        <div class="quantity">
                                            <span>{{ $item['jumlah'] }}</span>
                                            <span>porsi</span>
                                        </div>

                                        <form action="{{ route('keranjang.hapus', $slug) }}"
                                            method="POST"
                                            onsubmit="return confirm('Apakah kamu yakin ingin menghapus pesanan ini?')">
                                            @csrf
                                            <button type="submit" class="remove-button">
                                                Hapus Pesanan
                                            </button>
                                        </form>

                                    </div>

                                </div>
                            @endif

                        @endforeach

                    @else

                        <div class="empty">
                            <h3>Keranjang Anda masih kosong.</h3>

                            <p>
                                Yuk, pilih hidangan favorit Anda!
                            </p>

                            <a href="{{ route('maincourse') }}">
                                Jelajahi Menu
                            </a>
                        </div>

                    @endif

                </div>

                <!-- REKOMENDASI MENU -->
                <div class="recommend">

                    <h2>Teman untuk hidangan Anda</h2>

                    <p>
                        Jelajahi rasa lainnya dari dapur Serambi.
                    </p>

                    <div class="recommend-list">

                        <div class="recommend-item">

                            <img
                                src="{{ asset('gambar/maincourse/speagetibolokatsu.png') }}"
                                alt="Spaghetti Bolognese Katsu"
                            >

                            <div class="recommend-info">
                                <h3>Spaghetti Bolognese Katsu</h3>
                                <p>Rp58.000</p>
                            </div>

                            <a href="{{ route('detailmenu', ['slug' => 'spaghetti-bolognese-katsu']) }}">
                                +
                            </a>

                        </div>

                        <div class="recommend-item">

                            <img
                                src="{{ asset('gambar/maincourse/supiga.png') }}"
                                alt="Sop Iga"
                            >

                            <div class="recommend-info">
                                <h3>Sop Iga</h3>
                                <p>Rp74.000</p>
                            </div>

                            <a href="{{ route('detailmenu', ['slug' => 'sop-iga']) }}">
                                +
                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- RINGKASAN PEMBAYARAN -->
            <div class="card payment">

                <h2 class="card-title">
                    Ringkasan pembayaran
                </h2>

                <div class="payment-row">

                    <span>
                        Subtotal · {{ collect($cart)->sum('jumlah') }} menu
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

                <button
                    class="checkout"
                    onclick="alert('Silakan lanjutkan ke proses konfirmasi pesanan.')"
                    @if(count($cart) == 0) disabled @endif
                >
                    Lanjutkan Pesanan &nbsp; →
                </button>

                <p class="payment-note">
                    Periksa menu dan catatan Anda sebelum
                    melanjutkan ke konfirmasi pesanan.
                </p>

            </div>

        </div>

        <!-- FOOTER -->
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