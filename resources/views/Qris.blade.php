
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRIS - Daily Crave</title>
    <link rel="icon" type="image/png" href="{{ asset('gambar/favicon.png') }}">


    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #403a35;
            background-color: #faf8f3;
            background-image: none;
            width: 100%;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .wrapper {
            width: 100%;
            max-width: none;
            margin: 0;
            background: #faf8f3;
            min-height: 100vh;
            padding: 30px clamp(20px, 4vw, 65px) 25px;
        }

        /* HEADER */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 35px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-symbol {
            font-size: 25px;
            color: #856348;
        }

        .logo-text {
            font-family: Georgia, serif;
            font-size: 25px;
            color: #403a35;
            line-height: 1;
        }

        .logo-sub {
            font-size: 7px;
            letter-spacing: 2px;
            color: #81776f;
            margin-top: 5px;
        }

        .back {
            color: #82786f;
            font-family: Georgia, serif;
            font-size: 12px;
            text-decoration: none;
        }

        /* TOP STATUS */
        .top-status {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            border-top: 1px solid #eee9df;
            border-bottom: 1px solid #eee9df;
            margin-bottom: 25px;
        }

        .status-title {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .status-description {
            font-size: 11px;
            color: #817a73;
            line-height: 1.5;
        }

        .expired {
            font-size: 11px;
            font-weight: bold;
        }

        /* MAIN */
        .main {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 35px;
        }

        .left {
            padding: 5px 20px;
        }

        .table-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee9df;
        }

        .table-title {
            font-size: 12px;
            font-weight: bold;
        }

        .table-number {
            font-size: 11px;
            color: #817a73;
            margin-top: 6px;
        }

        .nmid {
            font-size: 10px;
            color: #756c65;
        }

        /* QRIS */
        .qris-box {
            width: 440px;
            max-width: 100%;
            margin: 30px auto 18px;
            border: 1px solid #eee9df;
            border-radius: 9px;
            padding: 25px 30px;
            text-align: center;
            background: #fcfaf6;
        }

        .qris-header {
            display: flex;
            justify-content: center;
            gap: 30px;
            font-size: 11px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .qr-image {
            width: 220px;
            height: 220px;
            margin: auto;
            object-fit: contain;
            display: block;
        }
        .merchant {
            margin-top: 15px;
            font-size: 10px;
            color: #8b827a;
            line-height: 1.6;
        }

        .merchant strong {
            color: #403a35;
            font-size: 11px;
        }

        .amount {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #eee9df;
            margin-top: 18px;
            padding-top: 18px;
            font-size: 11px;
        }

        .amount strong {
            font-size: 13px;
        }

        .qris-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }

        .qris-btn {
            border: 1px solid #e8e0d5;
            background: #fffdf9;
            border-radius: 5px;
            padding: 10px 15px;
            color: #665c54;
            font-size: 10px;
            cursor: pointer;
        }

        .qris-btn:hover {
            background: #f1e9df;
        }

        /* BANK */
        .support {
            text-align: center;
            margin: 30px 0;
            font-size: 10px;
            color: #817a73;
        }

        .banks {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 22px;
            margin-top: 15px;
            font-size: 10px;
            color: #514a44;
        }

        /* RIGHT */
        .right {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .transaction-status {
            border: 1px solid #a9c1dc;
            border-radius: 8px;
            padding: 22px;
            background: #fffefa;
        }

        .status-heading {
            display: flex;
            justify-content: space-between;
            font-size: 11px;
            font-weight: bold;
            padding-bottom: 18px;
            border-bottom: 1px solid #eee9df;
        }

        .success-content {
            display: flex;
            gap: 15px;
            padding-top: 20px;
        }

        .success-icon {
            width: 23px;
            height: 23px;
            border: 1px solid #514a44;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
            flex-shrink: 0;
        }

        .success-title {
            font-size: 11px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .success-text {
            font-size: 10px;
            color: #766e67;
            line-height: 1.6;
        }

        .manual, .help {
            margin-top: 18px;
            font-size: 10px;
            color: #716961;
        }

        /* TICKET */
        .ticket {
            border: 1px solid #eee8df;
            border-radius: 8px;
            background: #fffefa;
            padding: 22px;
        }

        .ticket-header {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #eee9df;
            padding-bottom: 18px;
            margin-bottom: 20px;
        }

        .ticket-title {
            font-size: 11px;
            font-weight: bold;
        }

        .ticket-sub {
            font-size: 9px;
            color: #9a928a;
            margin-top: 5px;
        }

        .order-id {
            font-size: 10px;
            color: #625951;
        }

        /* CUSTOMER */
        .customer {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .customer-label {
            font-size: 9px;
            color: #9a928a;
            margin-bottom: 6px;
        }

        .customer-value {
            font-size: 10px;
            font-weight: bold;
        }

        /* MENU */
        .menu {
            display: flex;
            gap: 12px;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee9df;
        }

        .menu-image {
            width: 65px;
            height: 65px;
            flex-shrink: 0;
            object-fit: cover;
            border-radius: 5px;
            background: #e8ded1;
        }

        .menu-info {
            flex: 1;
            min-width: 0;
        }

        .menu-name {
            font-size: 11px;
            font-weight: bold;
        }

        .menu-note {
            font-size: 9px;
            color: #9a928a;
            margin-top: 5px;
        }

        .menu-price {
            font-size: 11px;
            font-weight: bold;
            white-space: nowrap;
        }

        /* SUMMARY */
        .summary {
            padding-top: 18px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 12px;
            font-size: 10px;
            color: #756d65;
        }

        .summary-row strong {
            color: #514a44;
        }

        .total-row {
            border-top: 1px solid #eee9df;
            margin-top: 15px;
            padding-top: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-label {
            font-size: 10px;
            font-weight: bold;
        }

        .total-sub {
            font-size: 9px;
            color: #9b938b;
            margin-top: 5px;
        }

        .total-price {
            font-family: Georgia, serif;
            font-size: 23px;
        }

        .safe {
            display: flex;
            gap: 10px;
            margin-top: 22px;
            padding-top: 18px;
            border-top: 1px solid #eee9df;
            font-size: 9px;
            color: #837b74;
            line-height: 1.5;
        }

        /* GUIDE */
        .guide {
            margin-top: 25px;
            border-top: 1px solid #eee9df;
            padding: 22px;
        }

        .guide-title {
            font-family: Georgia, serif;
            font-size: 13px;
            color: #766c64;
            margin-bottom: 20px;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .step-number {
            font-family: Georgia, serif;
            font-size: 15px;
            margin-bottom: 10px;
        }

        .step-title {
            font-size: 10px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .step-text {
            font-size: 9px;
            line-height: 1.5;
            color: #817971;
        }

        /* FOOTER */
        footer {
            border-top: 1px solid #eee9df;
            margin-top: 25px;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #9a928a;
            font-size: 9px;
        }

        .footer-logo {
            font-family: Georgia, serif;
            font-size: 15px;
            color: #514a44;
        }

        .quote {
            font-family: Georgia, serif;
            font-style: italic;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .wrapper {
                width: 100%;
                padding: 25px;
            }

            .main {
                grid-template-columns: 1fr;
            }

            .steps {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .wrapper {
                width: 100%;
                padding: 20px 15px;
            }

            .header {
                margin-bottom: 20px;
            }

            .top-status {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .table-info {
                flex-wrap: wrap;
                gap: 10px;
            }

            .customer {
                grid-template-columns: 1fr 1fr;
            }

            .steps {
                grid-template-columns: 1fr 1fr;
            }

            .qris-box {
                width: 100%;
            }

            .menu {
                flex-wrap: wrap;
            }

            .menu-price {
                margin-left: auto;
            }

            footer {
                flex-direction: column;
                gap: 12px;
                text-align: center;
            }
        }
    </style>
</head>

<body>

@php
    $data = $data ?? [];

    // Keranjang menggunakan ID menu dari database, bukan slug.
    $cart = session()->get('cart', []);
    $ids = collect(array_keys($cart))->filter(fn ($id) => ctype_digit((string) $id))->values();
    $databaseMenus = \App\Models\Menu::whereIn('id', $ids)->get()->keyBy('id');

    $menuData = [];
    $subtotal = 0;
    $totalJumlah = 0;

    $fotoCadangan = [
        'Grill Chicken Steak' => 'gambar/maincourse/grillchikensteak.png',
        'Spaghetti Bolognise Katsu' => 'gambar/maincourse/speagetibolokatsu.png',
        'Spaghetti Bolognese Katsu' => 'gambar/maincourse/speagetibolokatsu.png',
        'Sop Iga' => 'gambar/maincourse/supiga.png',
        'Nasi Goreng Katsu' => 'gambar/maincourse/nasgorkatsu.png',
        'Nasi Timbel Ayam Goreng' => 'gambar/maincourse/nTimbel.png',
    ];

    foreach ($cart as $id => $item) {
        $menu = $databaseMenus->get($id);
        $jumlah = (int) ($item['jumlah'] ?? 0);
        if (!$menu || $jumlah <= 0) continue;

        $foto = $menu->foto;
        $cadangan = asset($fotoCadangan[$menu->nama_menu] ?? 'gambar/makanan.png');
        if (!$foto) {
            $gambar = $cadangan;
        } elseif (\Illuminate\Support\Str::startsWith($foto, ['http://', 'https://'])) {
            $gambar = $foto;
        } elseif (\Illuminate\Support\Str::startsWith($foto, 'gambar/')) {
            $gambar = asset($foto);
        } elseif (\Illuminate\Support\Str::startsWith($foto, 'storage/')) {
            $gambar = asset($foto);
        } else {
            $gambar = asset('storage/' . ltrim($foto, '/'));
        }

        $menuData[$id] = [
            'nama' => $menu->nama_menu,
            'harga' => (int) $menu->harga,
            'gambar' => $gambar,
            'cadangan' => $cadangan,
            'jumlah' => $jumlah,
            'catatan' => $item['catatan'] ?? '',
            'suhu' => $item['suhu'] ?? '',
        ];
        $subtotal += (int) $menu->harga * $jumlah;
        $totalJumlah += $jumlah;
    }

    // Ambil nama dan meja dari formulir Ringkasan Pelanggan.
    $namaPelanggan = request()->query('nama_pelanggan')
        ?? $data['nama_pemesan']
        ?? session('nama_pelanggan', '');
    $nomorMeja = request()->query('nomor_meja')
        ?? $data['nomor_meja']
        ?? session('nomor_meja', '03');

    $kodePesanan = $data['nomor_order']
        ?? session('kode_pesanan', 'DC-8842');

    $nmid = $data['nmid']
        ?? 'ID10200492817';

@endphp


<div class="wrapper">

    <!-- HEADER -->

    <div class="header">

        <div class="logo">

            <div class="logo-symbol">☼</div>

            <div>
                <div class="logo-text">daily crave</div>

                <div class="logo-sub">
                    DAPUR & RUANG TEMU
                </div>
            </div>

        </div>

        <a href="{{ route('ringkasanpelanggan') }}" class="back">
            ← Kembali ke Konfirmasi Pesanan
        </a>

    </div>


    <!-- STATUS PEMBAYARAN -->

    <div class="top-status">

        <div>
            <div class="status-title">
                Menunggu Pembayaran QRIS
            </div>

            <div class="status-description">
                Buka aplikasi e-wallet atau mobile-banking Anda
                untuk memindai kode QRIS di bawah ini.
            </div>
        </div>

        <div class="expired">
            ◷ Kedaluwarsa dalam
            <span id="countdown">02:48</span>
        </div>

    </div>


    <!-- MAIN -->

    <div class="main">

        <!-- BAGIAN KIRI -->

        <div class="left">

            <div class="table-info">

                <div>
                    <div class="table-title">
                        MEJA PELANGGAN
                    </div>

                    <div class="table-number">
                        Meja {{ $nomorMeja }} · Dine-in
                    </div>
                </div>

                <div class="nmid">
                    🔒 NMID:
                    <strong>{{ $nmid }}</strong>
                </div>

            </div>


            <!-- QRIS -->

            <div class="qris-box">

                <div class="qris-header">
                    <span>QRIS STANDAR NASIONAL</span>
                    <span>ASPI / BI</span>
                </div>

             <img
                src="{{ asset('gambar/Qris/qris_pembayaran.png') }}"
                alt="QRIS Daily Crave"
                class="qr-image"
            >

                <div class="merchant">

                    MERCHANT RESMI

                    <br>

                    <strong>DAILY CRAVE INDONESIA</strong>

                    <br>

                    <span class="merchant-id">
                        ID: DC-8842 · Terminal 01-JKT
                    </span>

                </div>

                <div class="amount">

                    <span>Nominal Transaksi</span>

                    <strong>
                        Rp{{ number_format($subtotal, 0, ',', '.') }}
                    </strong>

                </div>

            </div>


            <!-- TOMBOL QRIS -->

            <div class="qris-buttons">

                <button class="qris-btn" onclick="downloadQR()">
                    ↓ &nbsp; Unduh QRIS
                </button>

                <button class="qris-btn" onclick="copyNMID()">
                    □ &nbsp; Salin NMID / Kode
                </button>

            </div>


            <!-- BANK -->

            <div class="support">

                MENDUKUNG SELURUH APLIKASI PEMBAYARAN

                <div class="banks">
                    <span>BCA</span>
                    <span>Livin' Mandiri</span>
                    <span>BRImo</span>
                    <span>GoPay</span>
                    <span>OVO</span>
                    <span>ShopeePay</span>
                    <span>DANA</span>
                    <span>LinkAja</span>
                </div>

            </div>

        </div>


        <!-- BAGIAN KANAN -->

        <div class="right">


            <!-- STATUS TRANSAKSI -->

            <div class="transaction-status">

                <div class="status-heading">

                    <span>STATUS TRANSAKSI</span>

                    <span>
                        Lunas Terverifikasi
                    </span>

                </div>

                <div class="success-content">

                    <div class="success-icon">
                        ✓
                    </div>

                    <div>

                        <div class="success-title">
                            Pembayaran Berhasil Diterima!
                        </div>

                        <div class="success-text">

                            Transaksi
                            Rp{{ number_format($subtotal, 0, ',', '.') }}
                            oleh {{ $namaPelanggan ?: 'Pelanggan' }}
                            telah terverifikasi via QRIS.

                            Dapur Daily Crave sedang menyiapkan
                            pesanan Anda.

                            @if($totalJumlah > 0)
                                Total {{ $totalJumlah }} porsi menu.
                            @endif

                        </div>

                    </div>

                </div>

                <div class="manual">
                    ♧ &nbsp; Cek Status Pembayaran Manual
                </div>

                <div class="help">
                    Ada kendala saat memindai?
                    <strong>→ Panggil Bantuan</strong>
                </div>

            </div>


            <!-- RINCIAN TIKET -->

            <div class="ticket">

                <div class="ticket-header">

                    <div>
                        <div class="ticket-title">
                            RINCIAN TIKET
                        </div>

                        <div class="ticket-sub">
                            Ringkasan Pesanan
                        </div>
                    </div>

                    <div class="order-id">
                        #{{ $kodePesanan }}
                    </div>

                </div>


                <!-- DATA PELANGGAN -->

                <div class="customer">

                    <div>
                        <div class="customer-label">
                            NAMA PEMESAN
                        </div>

                        <div class="customer-value">
                            {{ $namaPelanggan ?: 'Pelanggan' }}
                        </div>
                    </div>

                    <div>
                        <div class="customer-label">
                            NOMOR MEJA
                        </div>

                        <div class="customer-value">
                            Meja {{ $nomorMeja }} (Dine-in)
                        </div>
                    </div>

                </div>


                <!-- DAFTAR MENU -->

                @forelse($menuData as $id => $menu)
                    <div class="menu">
                        <img
                            src="{{ $menu['gambar'] }}"
                            alt="{{ $menu['nama'] }}"
                            class="menu-image"
                            onerror="this.onerror=null;this.src=@js($menu['cadangan']);"
                        >
                        <div class="menu-info">
                            <div class="menu-name">{{ $menu['nama'] }}</div>
                            <div class="menu-note">{{ $menu['catatan'] ?: 'TIDAK ADA CATATAN' }}</div>
                            @if(!empty($menu['suhu']))
                                <div class="menu-note">Penyajian: {{ $menu['suhu'] }}</div>
                            @endif
                            <div class="menu-note">{{ $menu['jumlah'] }} porsi</div>
                        </div>
                        <div class="menu-price">
                            Rp{{ number_format($menu['harga'] * $menu['jumlah'], 0, ',', '.') }}
                        </div>
                    </div>
                @empty
                    <div class="menu-note" style="padding:15px 0;">
                        Belum ada menu dalam pesanan.
                    </div>
                @endforelse


                <!-- RINGKASAN PEMBAYARAN -->

                <div class="summary">

                    <div class="summary-row">

                        <span>Subtotal Menu</span>

                        <strong>
                            Rp{{ number_format($subtotal, 0, ',', '.') }}
                        </strong>

                    </div>

                    <div class="summary-row">

                        <span>Pajak Restoran PB1 (10%)</span>

                        <strong>Termasuk</strong>

                    </div>

                    <div class="summary-row">

                        <span>Biaya Layanan & Transaksi QRIS</span>

                        <strong>Gratis (Rp0)</strong>

                    </div>


                    <!-- TOTAL -->

                    <div class="total-row">

                        <div>

                            <div class="total-label">
                                TOTAL TAGIHAN BERSIH
                            </div>

                            <div class="total-sub">
                                Total Pembayaran
                            </div>

                        </div>

                        <div class="total-price">
                            Rp{{ number_format($subtotal, 0, ',', '.') }}
                        </div>

                    </div>


                    <div class="safe">

                        <span>♧</span>

                        <span>
                            Transaksi aman terverifikasi otomatis oleh
                            Bank Indonesia & Asosiasi Sistem Pembayaran
                            Indonesia (ASPI).
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- PANDUAN PEMBAYARAN -->

    <div class="guide">

        <div class="guide-title">
            Panduan Cepat Membayar
        </div>

        <div class="steps">

            <div class="step">
                <div class="step-number">1</div>

                <div class="step-title">
                    Buka Aplikasi
                </div>

                <div class="step-text">
                    Buka e-wallet atau mobile-banking favorit Anda.
                </div>
            </div>

            <div class="step">
                <div class="step-number">2</div>

                <div class="step-title">
                    Pindai QRIS
                </div>

                <div class="step-text">
                    Arahkan kamera ke kode QRIS di layar meja Anda.
                </div>
            </div>

            <div class="step">
                <div class="step-number">3</div>

                <div class="step-title">
                    Cek Nominal
                </div>

                <div class="step-text">
                    Pastikan nominal sesuai yaitu
                    Rp{{ number_format($subtotal, 0, ',', '.') }}.
                </div>
            </div>

            <div class="step">
                <div class="step-number">4</div>

                <div class="step-title">
                    Konfirmasi PIN
                </div>

                <div class="step-text">
                    Masukkan PIN transaksi Anda untuk
                    menyelesaikan pembayaran.
                </div>
            </div>

        </div>

    </div>


    <!-- FOOTER -->

    <footer>

        <div>

            <div class="footer-logo">
                ☼ &nbsp; daily crave
            </div>

            <div>
                DAPUR & RUANG TEMU
            </div>

        </div>

        <div class="quote">
            "Rasa yang dekat, cerita yang hangat."
        </div>

        <div>
            © 2026 Daily Crave
        </div>

    </footer>

</div>


<!-- JAVASCRIPT -->

<script>
document.addEventListener('DOMContentLoaded', function () {

    const kodePesanan = @json($pesanan->kode_pesanan);

    const statusUrl = @json(
        route('pembayaran.status', $pesanan->kode_pesanan)
    );

    const berhasilUrl = @json(
        route('pembayaran.berhasil', $pesanan->kode_pesanan)
    );

    let sudahDialihkan = false;

    async function cekStatusPembayaran() {

        if (sudahDialihkan) return;

        try {
            const response = await fetch(statusUrl, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                cache: 'no-store'
            });

            if (!response.ok) {
                return;
            }

            const data = await response.json();

            if (
                data.status_pembayaran === 'Dikonfirmasi'
            ) {
                sudahDialihkan = true;

                window.location.href = berhasilUrl;
            }

        } catch (error) {
            console.error(
                'Gagal mengecek status pembayaran:',
                error
            );
        }
    }

    // Cek status pertama kali
    cekStatusPembayaran();

    // Cek kembali setiap 3 detik
    setInterval(cekStatusPembayaran, 3000);

});
</script>

</body>
</html>
