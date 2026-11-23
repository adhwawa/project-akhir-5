<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Menu | Daily Crave</title>
    <link rel="icon" type="image/png" href="{{ asset('gambar/favicon.png') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">

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
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #f1ebe3;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            color: #403329;
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
            margin-top: 25px;
            font-size: 10px;
            color: #967f6d;
        }

        .navigation a {
            text-decoration: none;
            color: #79563f;
        }

        .heading {
            margin-top: 24px;
            margin-bottom: 25px;
        }

        .heading p {
            font-size: 9px;
            letter-spacing: 2px;
            color: #926d50;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .heading h1 {
            font-family: 'Playfair Display', serif;
            font-size: 42px;
            font-weight: 400;
            line-height: 1.2;
        }

        .content {
            display: grid;
            grid-template-columns: 1.35fr 0.95fr;
            gap: 30px;
            align-items: start;
            margin-bottom: 60px;
        }

        .left-content {
            min-width: 0;
        }

        .card {
            background: white;
            border: 1px solid #eee8e1;
            border-radius: 16px;
            padding: 32px 34px;
            box-shadow: 0 10px 30px rgba(75, 55, 38, .025);
        }

        .title-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 18px;
            border-bottom: 1px solid #eee8e1;
            margin-bottom: 22px;
            gap: 10px;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 400;
        }

        .add-more {
            color: #79563f;
            text-decoration: none;
            font-size: 10px;
            white-space: nowrap;
        }

        .section-label {
            color: #926d50;
            font-family: 'Poppins', sans-serif;
            font-size: 9px;
            letter-spacing: 1.8px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .payment-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 17px;
            border-bottom: 1px solid #eee8e1;
            gap: 10px;
        }

        .menu-count {
            color: #8d715b;
            background: #faf5ef;
            border: 1px solid #eee5db;
            border-radius: 20px;
            padding: 5px 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 9px;
            white-space: nowrap;
        }

        .cart-item {
            display: grid;
            grid-template-columns: 95px minmax(0, 1fr) auto;
            align-items: center;
            gap: 16px;
            padding: 18px 0;
            border-bottom: 1px solid #f0e9df;
        }

        .cart-item:last-child {
            border-bottom: 0;
        }

        .cart-item img {
            width: 95px;
            height: 95px;
            object-fit: cover;
            border-radius: 11px;
        }

        .item-info {
            min-width: 0;
        }

        .item-info h3 {
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 7px;
        }

        .item-info p {
            color: #896448;
            font-size: 11px;
        }

        .item-info small {
            display: block;
            margin-top: 8px;
            color: #9a8a7d;
            font-size: 9px;
        }

        .note-form {
            margin-top: 12px;
        }

        .note-input {
            display: block;
            width: 100%;
            min-height: 55px;
            padding: 10px 12px;
            border: 1px solid #eee8e1;
            border-radius: 12px;
            background: #fdfcfb;
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            color: #403329;
            outline: none;
            resize: vertical;
        }

        .note-input:focus {
            border-color: #79563f;
        }

        .save-note {
            margin-top: 8px;
            padding: 8px 15px;
            border: 0;
            border-radius: 20px;
            background: #79563f;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            cursor: pointer;
        }

        .save-note:hover {
            background: #654a37;
        }

        .item-action {
            text-align: right;
        }

        .item-price {
            color: #79563f;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 15px;
            white-space: nowrap;
        }

        .quantity {
            display: inline-flex;
            align-items: center;
            gap: 13px;
            padding: 6px 12px;
            border: 1px solid #eee8e1;
            border-radius: 30px;
            font-size: 11px;
        }

        .quantity button {
            border: 0;
            background: transparent;
            color: #79563f;
            font-size: 17px;
            cursor: pointer;
        }

        .quantity span {
            min-width: 15px;
            text-align: center;
        }

        .remove-button {
            margin-top: 10px;
            padding: 7px 14px;
            border: 1px solid #eee8e1;
            border-radius: 20px;
            background: white;
            color: #a15e4d;
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            cursor: pointer;
        }

        .remove-button:hover {
            background: #a15e4d;
            color: white;
        }

        .recommend {
            margin-top: 30px;
        }

        .recommend h2 {
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            font-weight: 400;
        }

        .recommend>p {
            font-size: 10px;
            color: #97887d;
            margin-top: 6px;
        }

        .recommend-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
            margin-top: 15px;
        }

        .recommend-item {
            background: white;
            border: 1px solid #eee8e1;
            border-radius: 12px;
            padding: 10px;
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 0;
        }

        .recommend-item img {
            width: 72px;
            height: 76px;
            object-fit: cover;
            border-radius: 9px;
            flex-shrink: 0;
        }

        .recommend-info {
            flex: 1;
            min-width: 0;
        }

        .recommend-info h3 {
            font-family: 'Playfair Display', serif;
            font-size: 14px;
            font-weight: 400;
        }

        .recommend-info p {
            color: #79563f;
            font-size: 10px;
            margin-top: 7px;
        }

        .recommend-item button {
            border: 0;
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

        .payment {
            padding: 27px 30px;
        }

        .payment .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 400;
            padding-bottom: 0;
        }

        .payment-row {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 13px;
            font-size: 10px;
            color: #96897e;
        }

        .payment-row strong {
            color: #403329;
            font-weight: 400;
            white-space: nowrap;
        }

        .payment-total {
            border-top: 1px solid #eee8e1;
            margin-top: 25px;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .payment-total span {
            font-size: 10px;
            font-weight: 500;
        }

        .payment-total strong {
            font-family: 'Playfair Display', serif;
            font-size: 31px;
            color: #79563f;
            font-weight: 400;
            white-space: nowrap;
        }

        .checkout {
            display: block;
            width: 100%;
            padding: 17px 12px;
            border: 0;
            background: #654a37;
            color: white;
            border-radius: 12px;
            margin-top: 22px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            font-weight: 500;
            text-align: center;
            text-decoration: none;
            transition: .3s;
        }

        .checkout:hover {
            background: #503927;
        }

        .checkout:disabled {
            opacity: .5;
            cursor: not-allowed;
        }

        .payment-note {
            text-align: center;
            color: #97887d;
            font-size: 9px;
            line-height: 1.8;
            margin-top: 14px;
        }

        footer {
            border-top: 1px solid #f1ebe3;
            padding: 28px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 0;
        }

        footer .logo {
            font-size: 19px;
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

        @media(max-width:1100px) {
            .cart-item {
                grid-template-columns: 85px minmax(0, 1fr);
            }

            .cart-item img {
                width: 85px;
                height: 85px;
            }

            .item-action {
                grid-column: 2;
                text-align: left;
            }

            .recommend-list {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width:900px) {
            .container {
                width: 90%;
            }

            .content {
                grid-template-columns: 1fr;
            }

            .heading h1 {
                font-size: 34px;
            }
        }

        @media(max-width:600px) {
            .container {
                width: 92%;
            }

            .card {
                padding: 23px 19px;
            }

            .payment {
                padding: 22px 18px;
            }

            .heading h1 {
                font-size: 30px;
            }

            .cart-item {
                grid-template-columns: 75px minmax(0, 1fr);
                gap: 12px;
            }

            .cart-item img {
                width: 75px;
                height: 85px;
            }

            .payment-total strong {
                font-size: 26px;
            }

            footer {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
        }

        .notification {
            display: flex;
            align-items: center;
            gap: 14px;
            background-color: #f4eee6;
            border: 1px solid #eee5db;
            border-radius: 15px;
            padding: 15px 22px;
            margin-bottom: 34px;
            min-height: 64px;
        }

        .notification .notification-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            width: 27px;
            height: 27px;
            border-radius: 50%;
            background-color: #654a37;
            color: #ffffff;
            font-size: 15px;
            margin: 0;
            padding: 0;
        }

        .notification .notification-text {
            display: flex;
            align-items: baseline;
            flex-wrap: wrap;
            gap: 4px;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            line-height: 1.6;
            color: #403329;
        }

        .notification .notification .notification-text strong {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 600;
        }

        .notification .notification-text span {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 400;
            color: #403329;
            height: auto;
            padding: 0;
        }
    </style>
</head>

<body>


    @php
        $cart = session()->get('cart', []);

        $menuIds = collect(array_keys($cart))->filter(fn($key) => ctype_digit((string) $key))->values();

        $databaseMenus = \App\Models\Menu::whereIn('id', $menuIds)->get()->keyBy('id');

        $pesanan = [];
        $subtotal = 0;
        $totalJumlah = 0;

        foreach ($cart as $key => $item) {
            $menu = $databaseMenus->get($key);
            $jumlah = (int) ($item['jumlah'] ?? 0);

            if (!$menu || $jumlah <= 0) {
                continue;
            }
            $foto = ltrim($menu->foto ?? '', '/');

            if (preg_match('/^https?:\/\//i', $foto)) {
                $gambar = $foto;
            } elseif (str_starts_with($foto, 'gambar/')) {
                $gambar = asset($foto);
            } elseif ($foto !== '') {
                $pathFoto = preg_replace('#^(storage/|public/)#', '', $foto);
                $gambar = asset('storage/' . $pathFoto);
            } else {
                $gambar = asset('gambar/makanan.png');
            }

            $pesanan[$key] = [
                'nama' => $menu->nama_menu,
                'harga' => (int) $menu->harga,
                'gambar' => $gambar,
                'jumlah' => $jumlah,
                'catatan' => $item['catatan'] ?? '',
                'suhu' => $item['suhu'] ?? '',
            ];

            $subtotal += $menu->harga * $jumlah;
            $totalJumlah += $jumlah;
        }

        // Foto cadangan untuk file upload lama yang tidak bisa diakses (403/404).
        // Foto upload admin yang valid tetap dipakai secara otomatis.
        $fotoCadangan = [
            'grill chicken steak' => 'gambar/maincourse/grillchikensteak.png',
            'spaghetti bolognise katsu' => 'gambar/maincourse/speagetibolokatsu.png',
            'spaghetti bolognese katsu' => 'gambar/maincourse/speagetibolokatsu.png',
            'sop iga' => 'gambar/maincourse/supiga.png',
            'nasi goreng katsu' => 'gambar/maincourse/nasgorkatsu.png',
            'nasi timbel ayam goreng' => 'gambar/maincourse/nTimbel.png',
        ];

        $rekomendasi = \App\Models\Menu::whereIn('id', [2, 3])->get();
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
            <span class="notification-icon">✓</span>
            <div class="notification-text">
                <strong>Periksa Kembali Pesanan Anda</strong>
                <span>
                    Pastikan menu, jumlah porsi, dan catatan
                    sudah sesuai sebelum melanjutkan.
                </span>
            </div>
        </div>

        <div class="content">
            <div class="left-content">

                <div class="card" id="daftar-pesanan">
                    <div class="section-label">DETAIL PESANAN</div>

                    <div class="title-row">
                        <h2 class="card-title">Ringkasan pesanan</h2>

                        <a href="{{ route('maincourse') }}" class="add-more">
                            + Tambah pesanan
                        </a>
                    </div>

                    @if ($totalJumlah > 0)

                        @foreach ($pesanan as $key => $item)
                            @php
                                $menu = [
                                    'nama' => $item['nama'],
                                    'harga' => $item['harga'],
                                    'gambar' => $item['gambar'],
                                ];

                                $jumlah = $item['jumlah'];
                            @endphp
                            @if ($menu && $jumlah > 0)
                                <div class="cart-item">

                                    <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}"
                                        onerror="this.onerror=null; this.src='{{ asset($fotoCadangan[mb_strtolower(trim($item['nama']))] ?? 'gambar/makanan.png') }}';">

                                    <div class="item-info">
                                        <h3>{{ $menu['nama'] }}</h3>

                                        <p>
                                            Rp{{ number_format($menu['harga'], 0, ',', '.') }}
                                        </p>

                                        @if (!empty($item['suhu']))
                                            <small>
                                                Penyajian: {{ $item['suhu'] }}
                                            </small>
                                        @endif

                                        <form action="{{ route('detailmenu.catatan') }}" method="POST"
                                            class="note-form">
                                            @csrf

                                            <input type="hidden" name="menu" value="{{ $key }}">

                                            <textarea name="catatan" class="note-input" maxlength="500" rows="2" placeholder="Tulis catatan pesanan...">{{ $item['catatan'] ?? '' }}</textarea>

                                            <button type="submit" class="save-note">
                                                Simpan Catatan
                                            </button>
                                        </form>
                                    </div>

                                    <div class="item-action">
                                        <p class="item-price">
                                            Rp{{ number_format($menu['harga'] * $jumlah, 0, ',', '.') }}
                                        </p>

                                        <div class="quantity">
                                            <form action="{{ route('detailmenu.kurang') }}" method="POST">
                                                @csrf

                                                <input type="hidden" name="menu" value="{{ $key }}">

                                                <button type="submit">−</button>
                                            </form>

                                            <span>{{ $jumlah }}</span>

                                            <form action="{{ route('detailmenu.add') }}" method="POST">
                                                @csrf

                                                <input type="hidden" name="menu" value="{{ $key }}">

                                                <input type="hidden" name="jumlah" value="1">

                                                <button type="submit">+</button>
                                            </form>
                                        </div>

                                        <form action="{{ route('detailmenu.hapus', $key) }}" method="POST"
                                            onsubmit="return confirm('Hapus pesanan ini?')">
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
                            <p>Yuk, pilih hidangan favorit Anda!</p>

                            <a href="{{ route('maincourse') }}">
                                Jelajahi Menu
                            </a>
                        </div>
                    @endif
                </div>

                <div class="recommend">
                    <h2>Teman untuk hidangan Anda</h2>
                    <p>Jelajahi rasa lainnya dari dapur daily crave.</p>

                    <div class="recommend-list">
                        @foreach ($rekomendasi as $menu)
                            @if (!isset($cart[$menu->id]))
                                @php
                                    $fotoRekomendasi = $menu->foto;

                                    $gambarRekomendasi = $fotoRekomendasi
                                        ? (\Illuminate\Support\Str::startsWith($fotoRekomendasi, 'gambar/')
                                            ? asset($fotoRekomendasi)
                                            : asset('storage/' . $fotoRekomendasi))
                                        : asset('gambar/makanan.png');
                                @endphp

                                <div class="recommend-item">
                                    <img src="{{ $gambarRekomendasi }}" alt="{{ $menu->nama_menu }}"
                                        onerror="this.onerror=null;this.src='{{ asset($fotoCadangan[mb_strtolower(trim($menu->nama_menu))] ?? 'gambar/makanan.png') }}';">

                                    <div class="recommend-info">
                                        <h3>{{ $menu->nama_menu }}</h3>
                                        <p>Rp{{ number_format($menu->harga, 0, ',', '.') }}</p>
                                    </div>

                                    <form action="{{ route('detailmenu.add') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="menu" value="{{ $menu->id }}">
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
                <div class="payment-heading">
                    <h2 class="card-title">
                        Ringkasan pembayaran
                    </h2>

                    <span class="menu-count">
                        {{ $totalJumlah }} Menu
                    </span>
                </div>

                <div class="payment-row">
                    <span>Subtotal menu</span>

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
                    <span>TOTAL TAGIHAN</span>

                    <strong>
                        Rp{{ number_format($subtotal, 0, ',', '.') }}
                    </strong>
                </div>

                @if ($totalJumlah > 0)
                    <a href="{{ route('ringkasanpelanggan') }}" class="checkout">
                        Lanjutkan Ke Ringkasan Pelanggan &nbsp; →
                    </a>
                @else
                    <button class="checkout" disabled>
                        Lanjutkan Ke Ringkasan Pelanggan &nbsp; →
                    </button>
                @endif

                <p class="payment-note">
                    Periksa menu dan catatan Anda sebelum
                    melanjutkan ke konfirmasi pesanan.
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

            <small>©️ 2026 Daily Crave</small>
        </footer>

    </div>
</body>

</html>
