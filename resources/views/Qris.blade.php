<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>QRIS - Daily Crave</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #403a35;

            background-color: #252525;

            /* titik-titik seperti screenshot */
            background-image:
                radial-gradient(#777 1px, transparent 1px);
            background-size: 18px 18px;

            min-height: 100vh;
        }

        .wrapper {
            width: 90%;
            max-width: 1180px;
            margin: 35px auto;
            background: #faf8f3;

            border-radius: 8px;

            min-height: 92vh;

            padding: 30px 55px 25px;

            box-shadow:
                0 15px 45px rgba(0, 0, 0, 0.35);
        }


        /* =========================
           HEADER
        ========================= */

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
            font-size: 20px;
            color: #856348;
        }

        .logo-text {
            font-family: Georgia, serif;
            font-size: 20px;
            color: #403a35;
            line-height: 1;
        }

        .logo-sub {
            font-size: 6px;
            letter-spacing: 2px;
            color: #81776f;
            margin-top: 4px;
        }

        .back {
            color: #82786f;
            font-family: Georgia, serif;
            font-size: 10px;
            text-decoration: none;
        }

        .back:hover {
            color: #604936;
        }


        /* =========================
           STATUS ATAS
        ========================= */

        .top-status {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 16px 25px;

            border-top: 1px solid #eee9df;
            border-bottom: 1px solid #eee9df;

            margin-bottom: 20px;
        }

        .status-title {
            font-size: 11px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .status-description {
            font-size: 9px;
            color: #817a73;
            line-height: 1.5;
        }

        .expired {
            font-size: 9px;
            font-weight: bold;
            color: #625b55;
        }

        .expired span {
            margin-left: 5px;
        }


        /* =========================
           MAIN GRID
        ========================= */

        .main {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 20px;
        }


        /* =========================
           LEFT
        ========================= */

        .left {
            padding: 5px 20px;
        }

        .table-info {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 10px 0 15px;

            border-bottom: 1px solid #eee9df;
        }

        .table-title {
            font-size: 10px;
            font-weight: bold;
        }

        .table-number {
            font-size: 9px;
            color: #817a73;
            margin-top: 6px;
        }

        .nmid {
            font-size: 9px;
            color: #756c65;
        }

        .nmid strong {
            color: #4b443e;
        }


        /* =========================
           QRIS BOX
        ========================= */

        .qris-box {
            width: 350px;
            max-width: 100%;
            margin: 25px auto 15px;

            border: 1px solid #eee9df;
            border-radius: 8px;

            padding: 20px 25px 18px;

            text-align: center;

            background: #fcfaf6;
        }

        .qris-header {
            display: flex;
            justify-content: center;
            gap: 25px;

            font-size: 9px;
            font-weight: bold;

            margin-bottom: 20px;
        }

        .qris-header span:last-child {
            font-weight: normal;
        }

        .qr-image {
            width: 185px;
            height: 185px;

            margin: auto;

            object-fit: contain;

            display: block;
        }

        .merchant {
            margin-top: 13px;

            font-size: 8px;
            color: #8b827a;

            line-height: 1.5;
        }

        .merchant strong {
            color: #403a35;
            font-size: 9px;
        }

        .merchant-id {
            color: #625b55;
        }

        .amount {
            display: flex;
            justify-content: space-between;

            border-top: 1px solid #eee9df;

            margin-top: 15px;
            padding-top: 15px;

            font-size: 9px;
        }

        .amount strong {
            font-size: 10px;
        }


        /* =========================
           BUTTON QR
        ========================= */

        .qris-buttons {
            display: flex;
            justify-content: center;
            gap: 8px;

            margin-top: 12px;
        }

        .qris-btn {
            border: 1px solid #e8e0d5;
            background: #fffdf9;

            border-radius: 5px;

            padding: 8px 13px;

            color: #665c54;

            font-size: 8px;

            cursor: pointer;
        }

        .qris-btn:hover {
            background: #f1e9df;
        }


        /* =========================
           BANK
        ========================= */

        .support {
            text-align: center;

            margin: 25px 0;

            font-size: 8px;
            color: #817a73;
        }

        .banks {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;

            gap: 20px;

            margin-top: 13px;

            font-size: 8px;
            color: #514a44;
        }


        /* =========================
           RIGHT
        ========================= */

        .right {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }


        /* STATUS TRANSAKSI */

        .transaction-status {
            border: 1px solid #a9c1dc;

            border-radius: 7px;

            padding: 20px;

            background: #fffefa;
        }

        .status-heading {
            display: flex;
            justify-content: space-between;

            font-size: 9px;
            font-weight: bold;

            padding-bottom: 17px;
            border-bottom: 1px solid #eee9df;
        }

        .success {
            color: #4d4a43;
        }

        .success-content {
            display: flex;
            gap: 12px;

            padding-top: 18px;
        }

        .success-icon {
            width: 20px;
            height: 20px;

            border: 1.5px solid #514a44;

            border-radius: 50%;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 10px;
        }

        .success-title {
            font-size: 9px;
            font-weight: bold;

            margin-bottom: 5px;
        }

        .success-text {
            font-size: 8px;
            color: #766e67;
            line-height: 1.55;
        }

        .manual {
            margin-top: 20px;

            font-size: 8px;
            color: #716961;
        }

        .help {
            margin-top: 12px;

            font-size: 8px;
            color: #817970;
        }

        .help strong {
            color: #544b44;
        }


        /* =========================
           TICKET
        ========================= */

        .ticket {
            border: 1px solid #eee8df;

            border-radius: 7px;

            background: #fffefa;

            padding: 20px;
        }

        .ticket-header {
            display: flex;
            justify-content: space-between;

            border-bottom: 1px solid #eee9df;

            padding-bottom: 15px;

            margin-bottom: 17px;
        }

        .ticket-title {
            font-size: 9px;
            font-weight: bold;
        }

        .ticket-sub {
            font-size: 7px;
            color: #9a928a;

            margin-top: 4px;
        }

        .order-id {
            font-size: 8px;
            color: #625951;
        }


        /* CUSTOMER */

        .customer {
            display: grid;
            grid-template-columns: 1fr 1fr;

            gap: 20px;

            margin-bottom: 18px;
        }

        .customer-label {
            font-size: 7px;
            color: #9a928a;

            margin-bottom: 5px;
        }

        .customer-value {
            font-size: 8px;
            font-weight: bold;
        }


        /* MENU */

        .menu {
            display: flex;
            gap: 10px;
            align-items: center;

            padding-bottom: 16px;

            border-bottom: 1px solid #eee9df;
        }

        .menu-image {
            width: 42px;
            height: 42px;

            object-fit: cover;

            border-radius: 4px;

            background: #e8ded1;
        }

        .menu-info {
            flex: 1;
        }

        .menu-name {
            font-size: 9px;
            font-weight: bold;
        }

        .menu-note {
            font-size: 7px;
            color: #9a928a;

            margin-top: 5px;
        }

        .menu-price {
            font-size: 9px;
            font-weight: bold;
        }


        /* TOTAL */

        .summary {
            padding-top: 15px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;

            margin-bottom: 10px;

            font-size: 8px;

            color: #756d65;
        }

        .summary-row strong {
            color: #514a44;
        }

        .total-row {
            border-top: 1px solid #eee9df;

            margin-top: 12px;

            padding-top: 15px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-label {
            font-size: 8px;
            font-weight: bold;
        }

        .total-sub {
            font-size: 7px;
            color: #9b938b;

            margin-top: 5px;
        }

        .total-price {
            font-family: Georgia, serif;

            font-size: 17px;
        }


        /* SAFE */

        .safe {
            display: flex;
            gap: 8px;

            margin-top: 20px;

            padding-top: 15px;

            border-top: 1px solid #eee9df;

            font-size: 7px;

            color: #837b74;

            line-height: 1.5;
        }


        /* =========================
           GUIDE
        ========================= */

        .guide {
            margin-top: 20px;

            border-top: 1px solid #eee9df;

            padding: 20px;
        }

        .guide-title {
            font-family: Georgia, serif;

            font-size: 10px;

            color: #766c64;

            margin-bottom: 18px;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);

            gap: 25px;
        }

        .step-number {
            font-family: Georgia, serif;

            font-size: 12px;

            margin-bottom: 10px;
        }

        .step-title {
            font-size: 8px;
            font-weight: bold;

            margin-bottom: 7px;
        }

        .step-text {
            font-size: 7px;
            line-height: 1.5;

            color: #817971;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            border-top: 1px solid #eee9df;

            margin-top: 25px;

            padding-top: 20px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            color: #9a928a;

            font-size: 7px;
        }

        .footer-logo {
            font-family: Georgia, serif;

            font-size: 12px;

            color: #514a44;
        }

        .quote {
            font-family: Georgia, serif;

            font-style: italic;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .wrapper {
                width: 95%;
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
                margin: 0;
                border-radius: 0;
                padding: 20px 15px;
            }

            .top-status {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .customer {
                grid-template-columns: 1fr;
            }

            .steps {
                grid-template-columns: 1fr;
            }

            .header {
                margin-bottom: 20px;
            }

            .qris-box {
                width: 100%;
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

<div class="wrapper">


    <!-- =========================
         HEADER
    ========================= -->

    <div class="header">

        <div class="logo">

            <div class="logo-symbol">
                ☼
            </div>

            <div>
                <div class="logo-text">
                    daily crave
                </div>

                <div class="logo-sub">
                    DAPUR & RUANG TEMU
                </div>
            </div>

        </div>

        <a href="{{ route('Payment') }}" class="back">
            ← Kembali ke Konfirmasi Pesanan
        </a>

    </div>


    <!-- =========================
         TOP STATUS
    ========================= -->

    <div class="top-status">

        <div>

            <div class="status-title">
                Menunggu Pembayaran QRIS
            </div>

            <div class="status-description">
                Buka aplikasi e-wallet atau mobile-banking Anda untuk memindai kode QRIS di bawah ini.
            </div>

        </div>


        <div class="expired">
            ◷ Kedaluwarsa dalam <span id="countdown">02:48</span>
        </div>

    </div>


    <!-- =========================
         MAIN
    ========================= -->

    <div class="main">


        <!-- =====================
             LEFT
        ====================== -->

        <div class="left">


            <!-- TABLE INFO -->

            <div class="table-info">

                <div>

                    <div class="table-title">
                        MEJA PELANGGAN
                    </div>

                    <div class="table-number">
                        Meja {{ $data['nomor_meja'] ?? '03' }} · Dine-in
                    </div>

                </div>


                <div class="nmid">
                    🔒 NMID:
                    <strong>
                        {{ $data['nmid'] ?? 'ID10200492817' }}
                    </strong>
                </div>

            </div>


            <!-- QRIS -->

            <div class="qris-box">

                <div class="qris-header">
                    <span>QRIS STANDAR NASIONAL</span>
                    <span>ASPI / BI</span>
                </div>


                <!--
                    Letakkan gambar QRIS di:
                    public/images/qris.png
                -->

                <img
                    src="{{ asset('images/qris.png') }}"
                    alt="QRIS Daily Crave"
                    class="qr-image"
                >


                <div class="merchant">

                    MERCHANT RESMI

                    <br>

                    <strong>
                        DAILY CRAVE INDONESIA
                    </strong>

                    <br>

                    <span class="merchant-id">
                        ID: DC-8842 · Terminal 01-JKT
                    </span>

                </div>


                <div class="amount">

                    <span>
                        Nominal Transaksi
                    </span>

                    <strong>
                        Rp{{ number_format($data['total'] ?? 85000, 0, ',', '.') }}
                    </strong>

                </div>

            </div>


            <!-- QR BUTTON -->

            <div class="qris-buttons">

                <button class="qris-btn"
                        onclick="downloadQR()">
                    ↓ &nbsp; Unduh QRIS
                </button>

                <button class="qris-btn"
                        onclick="copyNMID()">
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


        <!-- =====================
             RIGHT
        ====================== -->

        <div class="right">


            <!-- TRANSACTION STATUS -->

            <div class="transaction-status">

                <div class="status-heading">

                    <span>
                        STATUS TRANSAKSI
                    </span>

                    <span class="success">
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
                            Rp{{ number_format($data['total'] ?? 85000, 0, ',', '.') }}
                            oleh {{ $data['nama_pemesan'] ?? 'Riska' }}
                            telah terverifikasi via QRIS.
                            Dapur Daily Crave sedang menyiapkan
                            Grill Chicken Steak Anda.

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


            <!-- TICKET -->

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
                        #{{ $data['nomor_order'] ?? 'DC-8842' }}
                    </div>

                </div>


                <!-- CUSTOMER -->

                <div class="customer">

                    <div>

                        <div class="customer-label">
                            NAMA PEMESAN
                        </div>

                        <div class="customer-value">
                            {{ $data['nama_pemesan'] ?? 'Riska' }}
                        </div>

                    </div>


                    <div>

                        <div class="customer-label">
                            NOMOR MEJA
                        </div>

                        <div class="customer-value">
                            Meja {{ $data['nomor_meja'] ?? '03' }} (Dine-in)
                        </div>

                    </div>

                </div>


                <!-- MENU -->

                <div class="menu">

                    <img
                        src="{{ asset('images/chicken-steak.jpg') }}"
                        alt="Grill Chicken Steak"
                        class="menu-image"
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

                    <div class="summary-row">

                        <span>
                            Subtotal Menu
                        </span>

                        <strong>
                            Rp{{ number_format($data['total'] ?? 85000, 0, ',', '.') }}
                        </strong>

                    </div>


                    <div class="summary-row">

                        <span>
                            Pajak Restoran PB1 (10%)
                        </span>

                        <strong>
                            Termasuk
                        </strong>

                    </div>


                    <div class="summary-row">

                        <span>
                            Biaya Layanan & Transaksi QRIS
                        </span>

                        <strong>
                            Gratis (Rp0)
                        </strong>

                    </div>


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
                            Rp{{ number_format($data['total'] ?? 85000, 0, ',', '.') }}
                        </div>

                    </div>


                    <div class="safe">

                        <span>
                            ♧
                        </span>

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


    <!-- =========================
         GUIDE
    ========================= -->

    <div class="guide">

        <div class="guide-title">
            Panduan Cepat Membayar
        </div>


        <div class="steps">

            <div class="step">

                <div class="step-number">
                    1
                </div>

                <div class="step-title">
                    Buka Aplikasi
                </div>

                <div class="step-text">
                    Buka e-wallet atau mobile-banking favorit Anda.
                </div>

            </div>


            <div class="step">

                <div class="step-number">
                    2
                </div>

                <div class="step-title">
                    Pindai QRIS
                </div>

                <div class="step-text">
                    Arahkan kamera ke kode QRIS di layar meja Anda.
                </div>

            </div>


            <div class="step">

                <div class="step-number">
                    3
                </div>

                <div class="step-title">
                    Cek Nominal
                </div>

                <div class="step-text">
                    Pastikan nominal sesuai yaitu Rp{{ number_format($data['total'] ?? 85000, 0, ',', '.') }}.
                </div>

            </div>


            <div class="step">

                <div class="step-number">
                    4
                </div>

                <div class="step-title">
                    Konfirmasi PIN
                </div>

                <div class="step-text">
                    Masukkan PIN transaksi Anda untuk menyelesaikan pembayaran.
                </div>

            </div>

        </div>

    </div>


    <!-- =========================
         FOOTER
    ========================= -->

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


<script>
    // Countdown 2 menit 48 detik
    let seconds = 168;

    const countdown = document.getElementById('countdown');

    setInterval(function () {

        if (seconds <= 0) {
            countdown.textContent = '00:00';
            return;
        }

        seconds--;

        let minutes = Math.floor(seconds / 60);
        let secs = seconds % 60;

        countdown.textContent =
            String(minutes).padStart(2, '0') +
            ':' +
            String(secs).padStart(2, '0');

    }, 1000);


    // Salin NMID
    function copyNMID() {

        const nmid = @json($data['nmid'] ?? 'ID10200492817');

        navigator.clipboard.writeText(nmid);

        alert('NMID berhasil disalin.');
    }


    // Download QRIS
    function downloadQR() {

        const image = document.querySelector('.qr-image');

        const link = document.createElement('a');

        link.href = image.src;

        link.download = 'QRIS-Daily-Crave.png';

        link.click();
    }
</script>

</body>

</html>