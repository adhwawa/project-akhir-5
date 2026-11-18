<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Crave - Pembayaran Berhasil & Konfirmasi Pesanan</title>
    <link rel="icon" type="image/png" href="{{ asset('gambar/favicon.png') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --ink: #241d18;
            --muted: #8b8178;
            --paper: #faf7f2;
            --line: #ece8e1;
            --blue: #afc9f5
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: #faf7f2;
            color: var(--ink);
            font-family: 'DM Sans', sans-serif;
            font-size: 13px
        }

        .wrap {
            max-width: 1140px;
            margin: auto;
            padding: 26px 42px 0
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 52px
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-family: 'Playfair Display', serif;
            font-size: 21px
        }

        .brand .sun {
            font-size: 30px;
            color: #9e7659
        }

        .brand small {
            display: block;
            font: 7px 'DM Sans', sans-serif;
            letter-spacing: 2.5px;
            margin-top: 2px
        }

        .cart {
            border: 1px solid var(--line);
            border-radius: 25px;
            padding: 8px 16px;
            font-size: 11px
        }

        .steps {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 68px;
            padding: 16px 20px 23px;
            border-bottom: 1px solid var(--line);
            margin-bottom: 36px
        }

        .step {
            display: flex;
            align-items: center;
            gap: 12px;
            white-space: nowrap
        }

        .step .circle {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            border: 1px solid #f1eee9;
            color: #5d5045
        }

        .step.current .circle {
            border: 3px solid var(--blue);
            font-size: 16px;
            color: #3763a0
        }

        .step small {
            font-size: 11px;
            letter-spacing: 1px
        }

        .step strong {
            display: block;
            font-size: 12px;
            font-weight: 600
        }

        .success {
            border: 1px solid #f0ece6;
            border-radius: 12px;
            display: grid;
            grid-template-columns: 1.5fr .8fr;
            gap: 28px;
            padding: 35px;
            margin-bottom: 26px;
            align-items: center
        }

        .success-left {
            display: flex;
            align-items: flex-start;
            gap: 19px
        }

        .check {
            width: 65px;
            height: 65px;
            flex-shrink: 0;
            border: 6px solid var(--blue);
            border-radius: 50%;
            display: grid;
            place-items: center;
            font-size: 19px
        }

        .eyebrow {
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 12px
        }

        .success h1 {
            font: normal 26px 'Playfair Display', serif;
            margin: 12px 0 9px
        }

        .success p {
            line-height: 1.6;
            margin: 0;
            max-width: 510px
        }

        .transaction {
            border: 1px solid #f0ece6;
            border-radius: 12px;
            padding: 22px 18px;
            font-size: 12px
        }

        .transaction div {
            display: flex;
            justify-content: space-between;
            gap: 14px;
            margin-bottom: 14px
        }

        .transaction div:last-child {
            margin-bottom: 0
        }

        .transaction strong {
            text-align: right
        }

        .main {
            display: grid;
            grid-template-columns: 1.15fr .82fr;
            gap: 22px
        }

        .food-hero {
            position: relative;
            height: 190px;
            border-radius: 10px;
            overflow: hidden;
            background: #ded8d0
        }

        .food-hero img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .food-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 24px 20px 18px;
            color: white;
            background: linear-gradient(transparent, rgba(0, 0, 0, .6))
        }

        .food-overlay strong {
            font: normal 20px 'Playfair Display', serif
        }

        .food-overlay .tag {
            float: right;
            font-size: 11px;
            background: #ffffff70;
            padding: 6px;
            border-radius: 20px
        }

        .ticket {
            margin-top: 20px;
            border: 1px solid #efebe5;
            border-radius: 12px;
            padding: 27px 28px 32px
        }

        .ticket-heading {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 35px
        }

        .ticket-heading small {
            display: block;
            margin-top: 5px
        }

        .item {
            display: grid;
            grid-template-columns: 28px 1fr auto;
            gap: 10px;
            margin-bottom: 36px;
            line-height: 1.55
        }

        .item strong {
            white-space: nowrap;
            align-self: center
        }

        .item small {
            display: block
        }

        .amounts {
            display: grid;
            grid-template-columns: 1fr auto;
            row-gap: 13px
        }

        .amounts>div:nth-child(even) {
            text-align: right
        }

        .total {
            font-weight: 700;
            margin-top: 25px
        }

        .receipt-foot {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            margin-top: 43px;
            font-size: 11px
        }

        .receipt-foot span {
            display: block;
            letter-spacing: 1px
        }

        .status {
            border: 1px solid #efebe5;
            border-radius: 12px;
            padding: 28px 30px
        }

        .status-heading {
            display: flex;
            gap: 14px;
            margin-bottom: 26px
        }

        .timeline {
            display: grid;
            grid-template-columns: 25px 1fr;
            gap: 12px;
            margin: 20px 0
        }

        .timeline .mark {
            color: #6b91d0
        }

        .timeline strong {
            font-size: 12px
        }

        .timeline p {
            margin: 7px 0;
            line-height: 1.6;
            color: #6f6760
        }

        .timeline.inactive {
            color: #a9a29b
        }

        .timeline.inactive p {
            color: #a9a29b
        }

        .wait {
            margin: 35px 0 4px 38px;
            font-size: 11px;
            letter-spacing: 1px
        }

        .wait strong {
            display: block;
            font-size: 13px;
            letter-spacing: 0;
            margin-top: 5px
        }

        .actions {
            margin-top: 35px;
            text-align: center
        }

        .actions .primary {
            display: block;
            border: 1px solid #eee9e3;
            padding: 14px;
            border-radius: 10px;
            color: inherit;
            text-decoration: none;
            font-weight: 600
        }

        .links {
            display: flex;
            justify-content: space-around;
            gap: 12px;
            margin-top: 20px
        }

        .links a,
        .help {
            color: inherit;
            text-decoration: none;
            font-size: 11px
        }

        .help {
            display: block;
            margin: 30px 0;
            border: 1px solid #eee9e3;
            padding: 13px;
            border-radius: 10px
        }

        .wifi {
            margin: 45px 10px;
            display: flex;
            gap: 15px;
            align-items: center;
            font-size: 12px
        }

        .wifi small {
            display: block;
            margin-top: 4px
        }

        .footer {
            border-top: 1px solid #f0ece6;
            margin-top: 65px;
            padding: 26px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #a49a90;
            font-size: 10px
        }

        .footer em {
            font-family: 'Playfair Display', serif;
            font-size: 12px
        }

        @media(max-width:750px) {
            .wrap {
                padding: 20px 18px 0
            }

            .header {
                margin-bottom: 25px
            }

            .steps {
                gap: 12px;
                justify-content: space-between;
                padding: 12px 0 20px
            }

            .step {
                gap: 5px
            }

            .step small {
                font-size: 8px
            }

            .step strong {
                font-size: 9px
            }

            .step .circle {
                width: 22px;
                height: 22px
            }

            .success,
            .main {
                grid-template-columns: 1fr
            }

            .success {
                padding: 20px;
                gap: 18px
            }

            .success-left {
                gap: 10px
            }

            .check {
                width: 44px;
                height: 44px;
                border-width: 4px
            }

            .success h1 {
                font-size: 23px
            }

            .status {
                padding: 22px
            }

            .ticket {
                padding: 20px
            }

            .footer {
                gap: 15px;
                flex-wrap: wrap
            }
        }
    </style>
</head>

<body>
    @php
        // $pesanan wajib berasal dari controller setelah verifikasi pembayaran oleh admin.
        $pesanan = $pesanan ?? null;
        $statusPembayaran = strtolower((string) data_get($pesanan, 'status_pembayaran', ''));
        $terverifikasi = in_array($statusPembayaran, ['verified', 'terverifikasi', 'paid', 'lunas', 'berhasil'], true);

        $nomor = data_get($pesanan, 'nomor_transaksi', data_get($pesanan, 'id', '-'));
        $meja = data_get($pesanan, 'nomor_meja', '-');
        $nama = data_get($pesanan, 'nama_pelanggan', 'Pelanggan');
        $items = data_get($pesanan, 'items', []);
        $subtotal = collect($items)->sum(
            fn($item) => (int) data_get($item, 'harga', 0) * (int) data_get($item, 'jumlah', 0),
        );
        $total = data_get($pesanan, 'total', $subtotal);
        $waktu = data_get($pesanan, 'waktu_pembayaran', '-');
        $status = strtolower((string) data_get($pesanan, 'status_dapur', 'menunggu'));
        $gambar = data_get($items, '0.gambar');
        $estimasi = data_get($pesanan, 'estimasi_menit');
        $rrn = data_get($pesanan, 'nomor_referensi');
        $nmid = data_get($pesanan, 'nmid_merchant');
    @endphp
    @if (!$pesanan || !$terverifikasi)
        <main class="wrap" style="min-height:65vh;display:grid;place-items:center;text-align:center">
            <div>
                <h1 style="font:normal 28px 'Playfair Display',serif">Pembayaran Belum Terverifikasi</h1>
                <p>Halaman ini tersedia setelah admin mengonfirmasi pembayaran QRIS pesanan Anda.</p>
                @if (Route::has('dashboard'))
                    <p><a href="{{ route('dashboard') }}" style="color:inherit">Kembali ke Menu</a></p>
                @endif
            </div>
        </main>
    @else
        <div class="wrap">
            <header class="header">
                <div class="brand"><span class="sun">☼</span>
                    <div>daily crave<small>DAPUR & RUANG TEMU</small></div>
                </div><span class="cart">♧ &nbsp; Keranjang &nbsp; ●</span>
            </header>
            <div class="steps">
                <div class="step"><span class="circle">✓</span>
                    <div><small>LANGKAH 01</small><strong>Pilih Menu</strong></div>
                </div>
                <div class="step"><span class="circle">✓</span>
                    <div><small>LANGKAH 02</small><strong>QRIS Dinamis</strong></div>
                </div>
                <div class="step current"><span class="circle">✓</span>
                    <div><small>LANGKAH 03</small><strong>Terverifikasi</strong></div>
                </div>
            </div>
            <section class="success">
                <div class="success-left">
                    <div class="check">✔</div>
                    <div>
                        <div class="eyebrow">PEMBAYARAN BERHASIL & TERVERIFIKASI</div>
                        <h1>Pesanan Anda Sedang Disiapkan</h1>
                        <p>Terima kasih, <strong>{{ $nama }}</strong>! Pembayaran via QRIS telah dikonfirmasi.
                            Dapur artisanal kami sedang meracik hidangan hangat untuk Anda di <strong>Meja
                                {{ $meja }}</strong>.</p>
                    </div>
                </div>
                <div class="transaction">
                    <div><span>ID Transaksi</span><strong>#{{ $nomor }}</strong></div>
                    <div><span>Waktu</span><span>{{ $waktu }}</span></div>
                    <div><span>STATUS KDS</span><span>DITERUSKAN KE DAPUR</span></div>
                </div>
            </section>
            <div class="main">
                <div>
                    <div class="food-hero">
                        @if ($gambar)
                            <img src="{{ asset($gambar) }}"
                            alt="{{ data_get($items, '0.nama', 'Hidangan pesanan') }}">@else<div
                                style="height:100%;display:grid;place-items:center;color:#69594d">Daily Crave • Pesanan
                                Anda</div>
                        @endif
                        <div class="food-overlay">
                            <div>MEJA {{ $meja }} • SANTAP DI TEMPAT @if ($estimasi)
                                    <span class="tag">◷ Estimasi {{ $estimasi }} Mnt</span>
                                @endif
                            </div>
                            <strong>{{ data_get($items, '0.nama', 'Pesanan Daily Crave') }}</strong>
                        </div>
                    </div>
                    <section class="ticket">
                        <div class="ticket-heading">
                            <div>▤ &nbsp; Rincian Tiket Pesanan<small>Pemesanan Mandiri Meja
                                    {{ $meja }}</small></div>
                            <div>LUNAS • QRIS</div>
                        </div>
                        @foreach ($items as $item)
                            <div class="item"><span>{{ data_get($item, 'jumlah', 1) }}x</span>
                                <div>
                                    {{ data_get($item, 'nama', 'Menu') }}<small>{{ data_get($item, 'detail', '') }}</small>
                                    @if (data_get($item, 'catatan'))
                                        <small>CATATAN: {{ data_get($item, 'catatan') }}</small>
                                    @endif
                                </div>
                                <strong>Rp{{ number_format(data_get($item, 'harga', 0) * data_get($item, 'jumlah', 1), 0, ',', '.') }}</strong>
                            </div>
                        @endforeach
                        <div class="amounts">
                            <div>Subtotal Menu</div>
                            <div>Rp{{ number_format($subtotal, 0, ',', '.') }}</div>
                            <div>Pajak Restoran PB1 (10%) ⓘ</div>
                            <div>Termasuk</div>
                            <div>Biaya Layanan QRIS</div>
                            <div>Gratis (Rp0)</div>
                            <div class="total">Total Pembayaran<small style="display:block;font-weight:400">Dibayar
                                    melalui QRIS Interaktif</small></div>
                            <div class="total">Rp{{ number_format($total, 0, ',', '.') }}</div>
                        </div>
                        <div class="receipt-foot">
                            <div><span>NMID MERCHANT</span>{{ $nmid ?: 'Belum tersedia' }}</div>
                            <div><span>NOMOR REFERENSI (RRN)</span>{{ $rrn ?: 'Belum tersedia' }}</div>
                        </div>
                    </section>
                </div>
                <div>
                    <section class="status">
                        <div class="status-heading"><span>♨</span>
                            <div>Status Dapur Real-time<br>Kitchen Display System (KDS)</div>
                        </div>
                        <div class="timeline"><span class="mark">✓</span>
                            <div><strong>1. Pembayaran Berhasil</strong>
                                <p>Saldo terverifikasi melalui konfirmasi admin.<br>{{ $waktu }} • Selesai</p>
                            </div>
                        </div>
                        <div
                            class="timeline {{ in_array($status, ['diterima', 'diproses', 'disiapkan', 'selesai', 'diantar']) ? '' : 'inactive' }}">
                            <span class="mark">◉</span>
                            <div><strong>2. Diterima Dapur & Diramu &nbsp; @if (in_array($status, ['diterima', 'diproses', 'disiapkan']))
                                        AKTIF
                                    @endif
                                </strong>
                                <p>Koki Daily Crave sedang menyiapkan pesanan Anda dengan sepenuh hati.</p>
                            </div>
                        </div>
                        <div class="timeline {{ in_array($status, ['selesai', 'diantar']) ? '' : 'inactive' }}">
                            <span>⌂</span>
                            <div><strong>3. Penyajian ke Meja {{ $meja }}</strong>
                                <p>Pelayan ramah kami akan mengantarkan pesanan langsung ke meja Anda.</p>
                            </div>
                        </div>
                        @if ($estimasi)
                            <div class="wait">⌛ &nbsp; ESTIMASI WAKTU TUNGGU<strong>{{ $estimasi }}
                                    menit</strong></div>
                        @endif
                    </section>
                    <div class="actions">
                        <div class="primary">♧ &nbsp; Status Pesanan: {{ ucfirst($status) }}</div>
                        <div class="links"><a href="#" onclick="window.print();return false">♧ &nbsp; Unduh
                                E-Receipt</a><a href="{{ Route::has('dashboard') ? route('dashboard') : '#' }}">▣
                                &nbsp; Pesan Tambahan</a></div>
                        <div class="help">♧ &nbsp; Bantuan Meja {{ $meja }}: Hubungi staf restoran</div>
                    </div>
                    <div class="wifi">⌁ <div>KONEKSI SANTAI<small>WiFi: DailyCrave–Guest • Tanyakan kata sandi kepada
                                staf</small></div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="brand" style="font-size:13px"><span class="sun" style="font-size:20px">☼</span>
                    <div>daily crave<small style="font-size:5px">DAPUR & RUANG TEMU</small></div>
                </div><em>“Rasa yang dekat, cerita yang hangat.”</em><span>© 2026 Daily Crave</span>
            </footer>
        </div>
    @endif
</body>

</html>
