<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ringkasan Pelanggan | Daily Crave</title>

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

        .header-pill {
            width: 32px;
            height: 17px;
            border: 1px solid #eee7df;
            border-radius: 20px;
            background: white;
        }

        /* NAVIGASI */
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

        /* JUDUL */
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

        /* NOTIFIKASI */
        .notification {
            background: #f4eee6;
            border: 1px solid #eee5db;
            padding: 15px 22px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 34px;
            min-height: 64px;
        }

        .notification-icon {
            width: 31px;
            height: 31px;
            background: #654a37;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            flex-shrink: 0;
        }

        .notification-text strong {
            display: block;
            font-size: 11px;
            font-weight: 500;
            color: #403329;
        }

        .notification-text small {
            display: block;
            color: #95877b;
            font-size: 9px;
            margin-top: 2px;
        }

        .order-id {
            margin-left: auto;
            background: white;
            border: 1px solid #eee5db;
            border-radius: 20px;
            padding: 5px 11px;
            font-size: 9px;
            color: #79563f;
            white-space: nowrap;
        }

        /* LAYOUT UTAMA */
        .content {
            display: grid;
            grid-template-columns: 1.35fr 0.95fr;
            gap: 30px;
            align-items: start;
            margin-bottom: 60px;
        }

        .card {
            background: white;
            border: 1px solid #eee8e1;
            border-radius: 16px;
            padding: 32px 34px;
            box-shadow: 0 10px 30px rgba(75, 55, 38, 0.025);
        }

        .section-label {
            color: #926d50;
            font-size: 9px;
            letter-spacing: 1.8px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .title-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 18px;
            border-bottom: 1px solid #eee8e1;
            margin-bottom: 22px;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 400;
        }

        .dine-badge {
            background: #faf5ef;
            border: 1px solid #eee5db;
            color: #79563f;
            border-radius: 20px;
            padding: 5px 12px;
            font-size: 9px;
            white-space: nowrap;
        }

        /* FORM PELANGGAN */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 7px;
            font-size: 10px;
            font-weight: 500;
            color: #403329;
        }

        .form-label small {
            font-size: 9px;
            font-weight: 300;
            color: #a09387;
        }

        .form-control {
            width: 100%;
            height: 44px;
            border: 1px solid #eee8e1;
            border-radius: 12px;
            background: #fdfcfb;
            padding: 0 15px;
            color: #403329;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            outline: none;
        }

        .form-control:focus {
            border-color: #79563f;
        }

        .table-input {
            max-width: 255px;
        }

        .helper-text {
            margin-top: 7px;
            font-size: 9px;
            color: #a09387;
        }

        /* METODE PEMBAYARAN */
        .payment-label-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }

        .verified {
            color: #6d866d;
            font-size: 9px;
        }

        .payment-method {
            border: 2px solid #6b4e39;
            background: #fbf7f2;
            border-radius: 12px;
            padding: 14px 15px;
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .qris-icon {
            width: 39px;
            height: 39px;
            background: #654a37;
            color: white;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .method-info {
            flex: 1;
        }

        .method-info strong {
            display: block;
            font-size: 10px;
            font-weight: 500;
        }

        .method-info small {
            display: block;
            font-size: 9px;
            color: #938477;
            margin-top: 4px;
        }

        .active-badge {
            background: #6f896d;
            color: white;
            border-radius: 10px;
            padding: 3px 7px;
            font-size: 7px;
            margin-left: 6px;
        }

        .check-icon {
            width: 23px;
            height: 23px;
            background: #654a37;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        /* RINGKASAN PEMBAYARAN */
        .payment-card {
            padding: 27px 30px;
        }

        .payment-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 17px;
            border-bottom: 1px solid #eee8e1;
        }

        .payment-heading h2 {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 400;
        }

        .menu-count {
            color: #8d715b;
            background: #faf5ef;
            border: 1px solid #eee5db;
            border-radius: 20px;
            padding: 5px 10px;
            font-size: 9px;
            white-space: nowrap;
        }

        .order-item {
            display: grid;
            grid-template-columns: 46px 1fr auto;
            align-items: center;
            gap: 11px;
            padding: 18px 0;
            border-bottom: 1px solid #f0e9df;
        }

        .item-icon {
            width: 46px;
            height: 46px;
            border-radius: 11px;
            background: #f4eee6;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #654a37;
            font-size: 18px;
        }

        .item-info strong {
            display: block;
            font-size: 10px;
            font-weight: 500;
        }

        .item-info small {
            display: block;
            font-size: 8px;
            color: #96897e;
            margin-top: 4px;
        }

        .item-price {
            font-size: 10px;
            font-weight: 500;
            white-space: nowrap;
        }

        .payment-row {
            display: flex;
            justify-content: space-between;
            margin-top: 13px;
            font-size: 10px;
            color: #96897e;
        }

        .payment-row strong {
            color: #403329;
            font-weight: 400;
        }

        .payment-total {
            border-top: 1px solid #eee8e1;
            margin-top: 25px;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        .total-note {
            font-size: 8px;
            color: #a09387;
            margin-top: 3px;
        }

        .checkout {
            display: block;
            width: 100%;
            padding: 17px 12px;
            border: none;
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
            transition: 0.3s;
        }

        .checkout:hover {
            background: #503927;
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
            margin-top: 14px;
        }

        /* FOOTER */
        footer {
            border-top: 1px solid #f1ebe3;
            padding: 28px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        @media (max-width: 900px) {
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

        @media (max-width: 600px) {
            .container {
                width: 92%;
            }

            .card {
                padding: 23px 19px;
            }

            .heading h1 {
                font-size: 30px;
            }

            .notification {
                padding: 13px;
                gap: 9px;
            }

            .order-id {
                font-size: 8px;
                padding: 5px 7px;
            }

            .payment-card {
                padding: 22px 18px;
            }

            .payment-heading h2 {
                font-size: 21px;
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
    </style>
</head>

<body>
@php
    $cart = session()->get('cart', []);

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

    foreach ($cart as $slug => $item) {
        if (isset($menuData[$slug])) {
            $subtotal += $menuData[$slug]['harga'] * $item['jumlah'];
            $totalJumlah += $item['jumlah'];
        }
    }

    $namaPelanggan = old('nama_pelanggan', session('nama_pelanggan', ''));
    $nomorMeja = old('nomor_meja', session('nomor_meja', '03'));
    $kodePesanan = session('kode_pesanan', 'DC-8842');
@endphp

<div class="container">

    <!-- NAVBAR -->
    <header>
        <div class="logo">
            ☼ daily crave
            <small>DAPUR & RUANG TEMU</small>
        </div>
        <div class="header-pill"></div>
    </header>

    <!-- NAVIGASI -->
    <div class="navigation">
        <a href="{{ route('maincourse') }}">← Kembali ke menu</a>
        <span>/ /</span>
    </div>

    <!-- JUDUL -->
    <div class="heading">
        <p>PESANAN ANDA</p>
        <h1>Satu langkah menuju rasa.</h1>
    </div>

    <!-- NOTIFIKASI -->
    <div class="notification">
        <div class="notification-icon">✓</div>
        <div class="notification-text">
            <strong>Pesanan Siap Diproses</strong>
            <small>Silakan verifikasi data diri dan meja Anda sebelum konfirmasi akhir.</small>
        </div>
        <div class="order-id">ID : #{{ $kodePesanan }}</div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- DETAIL PELANGGAN -->
        <div class="card">
            <div class="section-label">DETAIL PEMESAN</div>

            <div class="title-row">
                <h2 class="card-title">Informasi &amp; Meja</h2>
                <span class="dine-badge">♜ &nbsp; Dine In</span>
            </div>

            <form action="#" method="POST" id="confirmationForm">
                @csrf

                <div class="form-group">
                    <label class="form-label" for="nama_pelanggan">
                        <span>♙ &nbsp; NAMA PELANGGAN</span>
                        <small>Wajib diisi</small>
                    </label>
                    <input
                        type="text"
                        name="nama_pelanggan"
                        id="nama_pelanggan"
                        class="form-control"
                        value="{{ $namaPelanggan }}"
                        placeholder="Masukkan nama pelanggan"
                        required
                    >
                </div>

                <div class="form-group">
                    <label class="form-label" for="nomor_meja">
                        <span>♧ &nbsp; NOMOR MEJA</span>
                    </label>
                    <input
                        type="text"
                        name="nomor_meja"
                        id="nomor_meja"
                        class="form-control table-input"
                        value="{{ $nomorMeja }}"
                        placeholder="Contoh: 03"
                        required
                    >
                    <p class="helper-text">ⓘ Tertera pada barcode kayu di sudut meja Anda.</p>
                </div>

                <div class="form-group">
                    <div class="payment-label-row">
                        <label class="form-label" style="margin-bottom:0;">
                            <span>▣ &nbsp; METODE PEMBAYARAN</span>
                        </label>
                        <span class="verified">◉ Terverifikasi Otomatis</span>
                    </div>

                    <div class="payment-method">
                        <div class="qris-icon">▦</div>
                        <div class="method-info">
                            <strong>
                                QRIS Standar Nasional
                                <span class="active-badge">AKTIF</span>
                            </strong>
                            <small>GoPay, OVO, ShopeePay, BCA, Dana &amp; Bank Lainnya</small>
                        </div>
                        <div class="check-icon">✓</div>
                    </div>
                    <p class="helper-text">ⓘ Kode QRIS dinamis akan langsung ditampilkan sesaat setelah pesanan dilanjutkan.</p>
                    <input type="hidden" name="metode_pembayaran" value="QRIS">
                </div>
            </form>
        </div>

        <!-- RINGKASAN PEMBAYARAN -->
        <div class="card payment-card">
            <div class="payment-heading">
                <h2>Ringkasan pembayaran</h2>
                <span class="menu-count">{{ $totalJumlah }} Menu</span>
            </div>

            @forelse($cart as $slug => $item)
                @if(isset($menuData[$slug]))
                    @php
                        $menu = $menuData[$slug];
                        $jumlah = $item['jumlah'] ?? 1;
                        $catatan = $item['catatan'] ?? '';
                    @endphp

                    <div class="order-item">
                        <div class="item-icon">♜</div>
                        <div class="item-info">
                            <strong>{{ $menu['nama'] }}</strong>
                            <small>{{ $catatan ? $catatan : 'TIDAK ADA CATATAN' }}</small>
                            @if($jumlah > 1)
                                <small>{{ $jumlah }} porsi</small>
                            @endif
                        </div>
                        <div class="item-price">
                            Rp{{ number_format($menu['harga'] * $jumlah, 0, ',', '.') }}
                        </div>
                    </div>
                @endif
            @empty
                <div style="padding:25px 0; color:#96897e; font-size:11px;">
                    Keranjang Anda masih kosong.
                </div>
            @endforelse

            <div class="payment-row">
                <span>Subtotal menu</span>
                <strong>Rp{{ number_format($subtotal, 0, ',', '.') }}</strong>
            </div>

            <div class="payment-row">
                <span>Pajak Resto (PB1 10%)</span>
                <strong>Termasuk</strong>
            </div>

            <div class="payment-total">
                <div>
                    <span>TOTAL TAGIHAN</span>
                    <p class="total-note">Sudah termasuk pajak &amp; servis</p>
                </div>
                <strong>Rp{{ number_format($subtotal, 0, ',', '.') }}</strong>
            </div>

            <button
                type="submit"
                form="confirmationForm"
                class="checkout"
                {{ count($cart) == 0 ? 'disabled' : '' }}
            >
                Lanjutkan Pesanan &nbsp; →
            </button>

            <p class="payment-note">
                ♧ &nbsp; Pembayaran aman &amp; terverifikasi langsung di meja
            </p>
        </div>

    </div>

    <!-- FOOTER -->
    <footer>
        <div class="logo">
            ☼ daily crave
            <small>DAPUR & RUANG TEMU</small>
        </div>

        <p class="tagline">"Rasa yang dekat, cerita yang hangat."</p>

        <small>© 2026 Daily Crave</small>
    </footer>

</div>
</body>
</html>
