<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Konfirmasi Pesanan - Daily Crave</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #292929;
            color: #3f3a35;
        }

        .page {
            width: 92%;
            max-width: 1250px;
            margin: 35px auto;
            background: #fbfaf6;
            border-radius: 10px;
            min-height: 90vh;
            padding: 25px 70px 0;
            box-shadow: 0 10px 40px rgba(0, 0, 0, .25);
        }

        /* HEADER */

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            width: 120px;
        }

        .toggle {
            width: 32px;
            height: 17px;
            background: #fff;
            border: 1px solid #eee8df;
            border-radius: 20px;
        }

        /* BACK */

        .back {
            margin-top: 45px;
            color: #77706a;
            font-size: 12px;
        }

        .back a {
            text-decoration: none;
            color: inherit;
        }

        /* TITLE */

        .title {
            margin-top: 20px;
        }

        .small-title {
            font-size: 11px;
            letter-spacing: 3px;
            font-weight: bold;
            color: #8b6048;
            text-transform: uppercase;
        }

        .title h1 {
            font-family: Georgia, serif;
            font-weight: normal;
            font-size: 44px;
            margin: 10px 0 25px;
            color: #302b27;
        }

        /* ALERT */

        .ready {
            display: flex;
            align-items: center;
            background: #f5ede4;
            border: 1px solid #eee2d5;
            border-radius: 15px;
            padding: 15px 22px;
            margin-bottom: 35px;
        }

        .check {
            width: 31px;
            height: 31px;
            border-radius: 50%;
            background: #634b39;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 15px;
        }

        .ready-text {
            flex: 1;
        }

        .ready-text strong {
            font-size: 12px;
            display: block;
            margin-bottom: 4px;
        }

        .ready-text span {
            font-size: 10px;
            color: #77706a;
        }

        .order-id {
            font-size: 10px;
            color: #80644f;
            font-weight: bold;
        }

        /* CONTENT */

        .content {
            display: grid;
            grid-template-columns: 1.25fr .85fr;
            gap: 30px;
            align-items: start;
        }

        .card {
            background: #fff;
            border: 1px solid #eee8df;
            border-radius: 16px;
            padding: 32px;
        }

        /* LEFT */

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 22px;
            border-bottom: 1px solid #eee8df;
        }

        .section-small {
            font-size: 10px;
            letter-spacing: 2px;
            color: #8b6048;
            font-weight: bold;
        }

        .section-title {
            font-family: Georgia, serif;
            font-size: 27px;
            margin-top: 6px;
        }

        .dine {
            border: 1px solid #eee2d5;
            background: #faf7f2;
            border-radius: 20px;
            padding: 8px 15px;
            font-size: 10px;
        }

        /* FORM */

        .form-group {
            margin-top: 25px;
        }

        .label {
            display: flex;
            justify-content: space-between;
            font-size: 10px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .required {
            color: #a49c95;
            font-weight: normal;
        }

        .input {
            width: 100%;
            height: 44px;
            border: 1px solid #eee8df;
            background: #fbfaf7;
            border-radius: 12px;
            padding: 0 15px;
            font-size: 12px;
            color: #3f3a35;
            outline: none;
        }

        .input-edit {
            position: relative;
        }

        .edit {
            position: absolute;
            right: 15px;
            top: 13px;
            color: #8b6048;
            font-size: 14px;
        }

        .info {
            margin-top: 8px;
            color: #99918a;
            font-size: 9px;
        }

        /* PAYMENT */

        .payment-label {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .verified {
            color: #66816b;
            font-size: 9px;
        }

        .payment {
            margin-top: 8px;
            border: 2px solid #6b503d;
            border-radius: 12px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            background: #fffdf9;
        }

        .qr-icon {
            width: 38px;
            height: 38px;
            background: #634b39;
            color: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
        }

        .payment-info {
            flex: 1;
        }

        .payment-name {
            font-size: 11px;
            font-weight: bold;
        }

        .payment-sub {
            font-size: 9px;
            color: #99918a;
            margin-top: 4px;
        }

        .active {
            display: inline-block;
            background: #779276;
            color: white;
            padding: 3px 8px;
            border-radius: 10px;
            font-size: 8px;
            margin-left: 5px;
        }

        .payment-check {
            width: 22px;
            height: 22px;
            background: #634b39;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* RIGHT */

        .summary-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee8df;
            padding-bottom: 20px;
        }

        .summary-title h2 {
            font-family: Georgia, serif;
            font-size: 27px;
            font-weight: normal;
            margin: 0;
        }

        .menu-count {
            background: #faf7f2;
            border: 1px solid #eee2d5;
            border-radius: 20px;
            padding: 7px 12px;
            font-size: 9px;
            color: #80644f;
        }

        /* MENU */

        .menu {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px 0;
            border-bottom: 1px solid #eee8df;
        }

        .menu-img {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            object-fit: cover;
        }

        .menu-info {
            flex: 1;
        }

        .menu-name {
            font-size: 12px;
            font-weight: bold;
        }

        .menu-note {
            font-size: 9px;
            color: #99918a;
            margin-top: 5px;
        }

        .menu-price {
            font-size: 11px;
            font-weight: bold;
        }

        /* TOTAL */

        .summary {
            padding-top: 20px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 14px;
            font-size: 10px;
        }

        .row span:last-child {
            font-weight: bold;
        }

        .total {
            border-top: 1px solid #eee8df;
            padding-top: 20px;
            margin-top: 5px;
        }

        .total-label {
            font-size: 10px;
            font-weight: bold;
        }

        .total-sub {
            font-size: 9px;
            color: #99918a;
            margin-top: 5px;
        }

        .total-price {
            font-family: Georgia, serif;
            font-size: 29px;
            color: #302b27;
        }

        /* BUTTON */

        .btn {
            width: 100%;
            margin-top: 22px;
            height: 55px;
            border: none;
            border-radius: 11px;
            background: #634b39;
            color: white;
            font-weight: bold;
            font-size: 12px;
            cursor: pointer;
            transition: .2s;
        }

        .btn:hover {
            background: #4f3b2d;
        }

        .secure {
            text-align: center;
            color: #8d9787;
            font-size: 9px;
            margin-top: 16px;
        }

        /* FOOTER */

        footer {
            border-top: 1px solid #eee8df;
            margin-top: 60px;
            padding: 30px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #99918a;
            font-size: 9px;
        }

        .footer-logo {
            color: #3f3a35;
            font-family: Georgia, serif;
            font-size: 16px;
        }

        .quote {
            font-family: Georgia, serif;
            font-style: italic;
        }

        /* RESPONSIVE */

        @media (max-width: 850px) {
            .page {
                width: 95%;
                padding: 25px;
            }

            .content {
                grid-template-columns: 1fr;
            }

            .title h1 {
                font-size: 32px;
            }

            .ready {
                align-items: flex-start;
            }

            .order-id {
                margin-left: 10px;
            }
        }

        @media (max-width: 600px) {
            .page {
                width: 100%;
                margin: 0;
                border-radius: 0;
                padding: 25px 18px;
            }

            .customer {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 22px;
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

<div class="page">

    <!-- HEADER -->
    <div class="header">

        <div class="logo">
            <img src="{{ asset('images/logo-daily-crave.png') }}"
                 alt="Daily Crave">
        </div>

        <div class="toggle"></div>

    </div>


    <!-- BACK -->
    <div class="back">
        <a href="{{ url()->previous() }}">
            ← &nbsp;Kembali ke menu
        </a>
    </div>


    <!-- TITLE -->
    <div class="title">

        <div class="small-title">
            PESANAN ANDA
        </div>

        <h1>
            Satu langkah menuju rasa.
        </h1>

    </div>


    <!-- STATUS -->
    <div class="ready">

        <div class="check">
            ✓
        </div>

        <div class="ready-text">

            <strong>
                Pesanan Siap Diproses
            </strong>

            <span>
                Silakan verifikasi data diri dan meja Anda sebelum konfirmasi akhir.
            </span>

        </div>

        <div class="order-id">
            ID: #{{ $data['nomor_order'] ?? 'DC-8842' }}
        </div>

    </div>


    <!-- CONTENT -->
    <div class="content">


        <!-- LEFT -->
        <div class="card">

            <div class="card-top">

                <div>

                    <div class="section-small">
                        DETAIL PEMESAN
                    </div>

                    <div class="section-title">
                        Informasi & Meja
                    </div>

                </div>

                <div class="dine">
                    🍴 &nbsp; Dine In
                </div>

            </div>


            <!-- NAMA -->
            <div class="form-group">

                <div class="label">

                    <span>
                        ♙ &nbsp; NAMA PELANGGAN
                    </span>

                    <span class="required">
                        Wajib diisi
                    </span>

                </div>

                <div class="input-edit">

                    <input
                        type="text"
                        class="input"
                        value="{{ $data['nama_pemesan'] ?? '' }}"
                        readonly
                    >

                    <span class="edit">
                        ✎
                    </span>

                </div>

            </div>


            <!-- MEJA -->
            <div class="form-group">

                <div class="label">
                    <span>
                        ⚑ &nbsp; NOMOR MEJA
                    </span>
                </div>

                <input
                    type="text"
                    class="input"
                    value="{{ $data['nomor_meja'] ?? '' }}"
                    readonly
                >

                <div class="info">
                    ⓘ Tertera pada barcode kayu di sudut meja Anda.
                </div>

            </div>


            <!-- PEMBAYARAN -->
            <div class="form-group">

                <div class="label payment-label">

                    <span>
                        ▣ &nbsp; METODE PEMBAYARAN
                    </span>

                    <span class="verified">
                        ◉ Terverifikasi Otomatis
                    </span>

                </div>


                <div class="payment">

                    <div class="qr-icon">
                        ▣
                    </div>

                    <div class="payment-info">

                        <div class="payment-name">
                            QRIS Standar Nasional

                            <span class="active">
                                AKTIF
                            </span>
                        </div>

                        <div class="payment-sub">
                            GoPay, OVO, ShopeePay, BCA, DANA & Bank Lainnya
                        </div>

                    </div>

                    <div class="payment-check">
                        ✓
                    </div>

                </div>

                <div class="info">
                    ⓘ Kode QRIS dinamis akan langsung ditampilkan sesaat setelah pesanan dilanjutkan.
                </div>

            </div>

        </div>


        <!-- RIGHT -->
        <div class="card">

            <div class="summary-title">

                <h2>
                    Ringkasan pembayaran
                </h2>

                <span class="menu-count">
                    1 Menu
                </span>

            </div>


            <!-- MENU -->
            <div class="menu">

                <img
                    src="{{ asset('images/chicken-steak.jpg') }}"
                    alt="Chicken Steak"
                    class="menu-img"
                >

                <div class="menu-info">

                    <div class="menu-name">
                        {{ $data['menu'] ?? 'Grill Chicken Steak' }}
                    </div>

                    <div class="menu-note">
                        TIDAK ADA CATATAN
                    </div>

                </div>

                <div class="menu-price">
                    Rp{{ number_format($data['total'] ?? 85000, 0, ',', '.') }}
                </div>

            </div>


            <!-- SUMMARY -->
            <div class="summary">

                <div class="row">

                    <span>
                        Subtotal menu
                    </span>

                    <span>
                        Rp{{ number_format($data['total'] ?? 85000, 0, ',', '.') }}
                    </span>

                </div>


                <div class="row">

                    <span>
                        Pajak Resto (PB1 10%)
                    </span>

                    <span>
                        Termasuk
                    </span>

                </div>


                <div class="total">

                    <div class="row">

                        <div>

                            <div class="total-label">
                                TOTAL TAGIHAN
                            </div>

                            <div class="total-sub">
                                Sudah termasuk pajak & servis
                            </div>

                        </div>

                        <div class="total-price">
                            Rp{{ number_format($data['total'] ?? 85000, 0, ',', '.') }}
                        </div>

                    </div>

                </div>


                <!-- BUTTON -->
                <form action="{{ route('payment') }}" method="GET">

                    <button type="submit" class="btn">
                        Lanjutkan Pesanan &nbsp; →
                    </button>

                </form>


                <div class="secure">
                    ♧ &nbsp; Pembayaran aman & terverifikasi langsung di meja
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

</body>
</html>