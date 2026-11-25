
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daily Crave - Data Pembayaran</title>

    <link rel="icon" type="image/png" href="{{ asset('gambar/favicon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fbf9f6;
            color: #4a3525;
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* ================= SIDEBAR ================= */

        .sidebar {
            width: 260px;
            background-color: #f4eee6;
            border-right: 1px solid #e8dfd3;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 28px 20px;
            flex-shrink: 0;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 8px 32px;
        }

        .brand {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            color: #5c3d28;
            line-height: 1.1;
        }

        .brand small {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 7px;
            letter-spacing: 2px;
            color: #9b826e;
            margin-top: 3px;
        }

        .admin-badge {
            background-color: #e6dcd0;
            color: #7c5c43;
            font-size: 10px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 6px;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 13px 18px;
            border-radius: 14px;
            text-decoration: none;
            color: #7a624f;
            font-size: 13.5px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .nav-item:hover {
            background-color: #ebe2d6;
            color: #4a3525;
        }

        .nav-item.active {
            background-color: #6b4c35;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(107, 76, 53, 0.2);
        }

        .nav-item svg {
            width: 18px;
            height: 18px;
            stroke: currentColor;
            fill: none;
            stroke-width: 1.8;
            flex-shrink: 0;
        }

        /* SIDEBAR FOOTER */

        .sidebar-footer {
            border-top: 1px solid #e5dbd0;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar-circle {
            width: 38px;
            height: 38px;
            background-color: #5c3d28;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
        }

        .user-details h4 {
            font-size: 13px;
            font-weight: 600;
            color: #3d2819;
        }

        .user-details p {
            font-size: 11px;
            color: #8c735f;
        }

        .system-status {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6px;
            font-size: 11.5px;
            color: #7a624f;
        }

        .status-indicator {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background-color: #16a34a;
            border-radius: 50%;
        }

        .version-badge {
            background-color: #e8dfd3;
            color: #7a624f;
            padding: 2px 8px;
            border-radius: 6px;
            font-size: 10.5px;
            font-weight: 500;
        }


        /* ================= MAIN CONTENT ================= */

        .main-content {
            flex: 1;
            padding: 32px 42px;
            display: flex;
            flex-direction: column;
            gap: 28px;
            min-width: 0;
        }

        /* HEADER */

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
        }

        .page-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 600;
            color: #2c1e14;
            margin-bottom: 4px;
        }

        .page-header p {
            font-size: 13px;
            color: #8c735f;
        }

        .topbar-actions {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        /* SEARCH */

        .search-box {
            display: flex;
            align-items: center;
            background-color: #f4eee6;
            border: 1px solid #e6dcd0;
            border-radius: 24px;
            padding: 9px 18px;
            width: 260px;
            gap: 10px;
        }

        .search-box svg {
            width: 16px;
            height: 16px;
            color: #9b826e;
            flex-shrink: 0;
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            font-family: 'Poppins', sans-serif;
            font-size: 12.5px;
            color: #4a3525;
            width: 100%;
        }

        .search-box input::placeholder {
            color: #9b826e;
        }

        /* NOTIFICATION */

        .notif-btn {
            position: relative;
            background: none;
            border: none;
            cursor: pointer;
            color: #6b4c35;
        }

        .notif-dot {
            position: absolute;
            top: 0;
            right: 1px;
            width: 7px;
            height: 7px;
            background-color: #ef4444;
            border-radius: 50%;
            border: 1.5px solid #fbf9f6;
        }

        /* AVATAR HEADER */

        .top-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #3d2819;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        /* ================= ALERT ================= */

        .alert-success {
            background-color: #e6f6ec;
            border: 1px solid #bbf7d0;
            color: #15803d;
            padding: 12px 18px;
            border-radius: 12px;
            font-size: 13px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .alert-error {
            background-color: #fde8e8;
            border: 1px solid #fecaca;
            color: #c53030;
            padding: 12px 18px;
            border-radius: 12px;
            font-size: 13px;
        }


        /* ================= STATISTIK ================= */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .stat-card {
            background-color: #ffffff;
            border: 1px solid #f0e8de;
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 4px 20px rgba(74, 53, 37, 0.03);
        }

        .stat-card p {
            font-size: 12.5px;
            color: #8c735f;
            margin-bottom: 10px;
        }

        .stat-card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 27px;
            font-weight: 600;
            color: #3d2819;
        }


        /* ================= CARD PEMBAYARAN ================= */

        .menu-card {
            background-color: #ffffff;
            border: 1px solid #f0e8de;
            border-radius: 20px;
            padding: 28px 32px;
            box-shadow: 0 4px 20px rgba(74, 53, 37, 0.03);
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 22px;
        }

        .card-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            font-weight: 600;
            color: #2c1e14;
        }

        .card-header p {
            font-size: 12.5px;
            color: #8c735f;
            margin-top: 2px;
        }


        /* ================= FILTER STATUS ================= */

        .filter-bar {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            padding-bottom: 22px;
            border-bottom: 1px solid #f2ebe1;
        }

        .filter-label {
            font-size: 12.5px;
            color: #8c735f;
            margin-right: 4px;
        }

        .filter-pill {
            text-decoration: none;
            font-size: 12.5px;
            font-weight: 500;
            padding: 7px 18px;
            border-radius: 20px;
            background-color: #f4eee6;
            color: #7a624f;
            transition: all 0.2s;
        }

        .filter-pill:hover {
            background-color: #e8dfd3;
            color: #4a3525;
        }

        .filter-pill.active {
            background-color: #6b4c35;
            color: #ffffff;
        }


        /* ================= TABEL PEMBAYARAN ================= */

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1000px;
            border-collapse: collapse;
            text-align: left;
        }

        thead th {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: #8c735f;
            padding: 16px 12px;
            border-bottom: 1px solid #f2ebe1;
            white-space: nowrap;
        }

        thead th:last-child {
            text-align: right;
        }

        tbody tr {
            border-bottom: 1px solid #f7f2ec;
            transition: background 0.15s;
        }

        tbody tr:hover {
            background-color: #fcfaf7;
        }

        tbody td {
            padding: 16px 12px;
            font-size: 13.5px;
            color: #2c1e14;
            vertical-align: middle;
        }

        .order-code {
            font-weight: 500;
            color: #5c3d28;
            white-space: nowrap;
        }

        .cat-badge {
            display: inline-block;
            background-color: #faf3eb;
            border: 1px solid #efe2d3;
            color: #8c6a4f;
            font-size: 12px;
            padding: 4px 12px;
            border-radius: 8px;
        }

        .price-text {
            font-weight: 600;
            white-space: nowrap;
        }


        /* ================= STATUS PEMBAYARAN ================= */

        .status-badge {
            display: inline-block;
            font-size: 11.5px;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 20px;
            white-space: nowrap;
        }

        .status-menunggu {
            background-color: #fff2d9;
            color: #a36b12;
        }

        .status-dikonfirmasi {
            background-color: #e6f6ec;
            color: #16a34a;
        }

        .status-ditolak {
            background-color: #fde8e8;
            color: #dc2626;
        }


        /* ================= TOMBOL AKSI ================= */

        .action-group {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
        }

        .action-group form {
            display: inline-flex;
        }

        .btn-action {
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 9px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            white-space: nowrap;
            transition: all 0.2s;
        }

        .btn-view {
            background-color: #eee7df;
            color: #634a35;
        }

        .btn-view:hover {
            background-color: #e3d7ca;
        }

        .btn-confirm {
            background-color: #e6f6ec;
            color: #168344;
        }

        .btn-confirm:hover {
            background-color: #c9eed6;
        }

        .btn-reject {
            background-color: #fde8e8;
            color: #c53030;
        }

        .btn-reject:hover {
            background-color: #fbd0d0;
        }

        .finished {
            color: #9b826e;
            font-size: 12px;
        }


        /* ================= DATA KOSONG ================= */

        .empty {
            text-align: center;
            padding: 36px !important;
            color: #8c735f;
        }


        /* ================= PAGINATION ================= */
/* PAGINATION */
.pagination {
    margin-top: 25px;
    display: flex;
    justify-content: flex-end;
}

.pagination nav {
    display: flex;
    justify-content: flex-end;
    width: 100%;
}

.pagination nav > div {
    display: flex;
    align-items: center;
    gap: 6px;
}

.pagination nav a,
.pagination nav span {
    min-width: 36px;
    height: 36px;
    padding: 0 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    font-size: 13px;
    text-decoration: none;
    color: #76543c;
    background: #fff;
    border: 1px solid #eadfd3;
}

.pagination nav a:hover {
    background: #f3e9df;
    border-color: #c9a98d;
}

.pagination nav span[aria-current="page"] {
    background: #76543c;
    color: white;
    border-color: #76543c;
}

.pagination nav svg {
    width: 15px;
    height: 15px;
}

.pagination nav span[aria-disabled="true"] {
    color: #c8bdb3;
    background: #f8f6f3;
}

        /* ================= RESPONSIVE ================= */

        @media (max-width: 1100px) {
            .stats {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {

            body {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #e8dfd3;
                padding: 20px;
            }

            .sidebar-header {
                padding-bottom: 20px;
            }

            .sidebar-footer {
                display: none;
            }

            .nav-links {
                flex-direction: row;
                flex-wrap: wrap;
            }

            .nav-item {
                padding: 9px 12px;
                font-size: 11px;
                gap: 7px;
            }

            .main-content {
                padding: 24px 20px;
                gap: 22px;
            }

            .topbar-actions {
                width: 100%;
            }

            .search-box {
                flex: 1;
                width: auto;
            }

            .menu-card {
                padding: 20px;
            }

            .stats {
                gap: 12px;
            }

            .stat-card {
                padding: 16px;
            }

        }

        @media (max-width: 480px) {

            .stats {
                grid-template-columns: 1fr 1fr;
            }

            .page-header h1 {
                font-size: 24px;
            }

            .card-header h2 {
                font-size: 20px;
            }

            .filter-pill {
                padding: 7px 12px;
                font-size: 11px;
            }

        }

    </style>

</head>


<body>

    <!-- ================= SIDEBAR ================= -->

    <aside class="sidebar">

        <div>

            <div class="sidebar-header">

                <div class="brand">
                    ☼ daily crave

                    <small>DAPUR & KOPI INDONESIA</small>
                </div>

                <span class="admin-badge">ADMIN</span>

            </div>


            <nav class="nav-links">

                <a href="{{ route('admin.dashboard') }}" class="nav-item">

                    <svg viewBox="0 0 24 24">
                        <rect x="3" y="3" width="7" height="7" rx="1.5"></rect>
                        <rect x="14" y="3" width="7" height="7" rx="1.5"></rect>
                        <rect x="14" y="14" width="7" height="7" rx="1.5"></rect>
                        <rect x="3" y="14" width="7" height="7" rx="1.5"></rect>
                    </svg>

                    Dashboard

                </a>


                <a href="{{ route('admin.menu.index') }}" class="nav-item">

                    <svg viewBox="0 0 24 24">
                        <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"></path>
                        <path d="M7 2v20"></path>
                        <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"></path>
                    </svg>

                    Menu

                </a>


                {{-- <a href="{{ route('admin.subkategori.index') }}" class="nav-item">

                    <svg viewBox="0 0 24 24">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                    </svg>

                    Sub-Kategori

                </a> --}}


                <a href="{{ route('admin.pesanan') }}" class="nav-item">

                    <svg viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                    </svg>

                    Pesanan

                </a>


                <a href="{{ route('admin.pembayaran.index') }}" class="nav-item active">

                    <svg viewBox="0 0 24 24">
                        <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                        <line x1="2" y1="10" x2="22" y2="10"></line>
                    </svg>

                    Pembayaran

                </a>


                <a href="{{ route('admin.pelanggan.index') }}" class="nav-item">

                    <svg viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>

                    Pelanggan

                </a>

            </nav>

        </div>


        <!-- SIDEBAR FOOTER -->

        <div class="sidebar-footer">

            <div class="user-profile">

                <div class="user-info">

                    <div class="avatar-circle">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </div>

                    <div class="user-details">

                        <h4>{{ auth()->user()->name ?? 'Admin User' }}</h4>

                        <p>Administrator</p>

                    </div>

                </div>

            </div>


            <div class="system-status">

                <div class="status-indicator">

                    <span class="status-dot"></span>

                    <span>Sistem Kasir Online</span>

                </div>

                <span class="version-badge">v2.4</span>

            </div>

        </div>

    </aside>



    <!-- ================= MAIN CONTENT ================= -->

    <main class="main-content">


        <!-- HEADER -->

        <header class="topbar">

            <div class="page-header">

                <h1>Data Pembayaran</h1>

                <p>
                    Kelola dan verifikasi pembayaran pelanggan Daily Crave dengan mudah.
                </p>

            </div>


            <div class="topbar-actions">


                <!-- SEARCH -->

                <form action="{{ route('admin.pembayaran.index') }}"
                      method="GET"
                      class="search-box">

                    @if(request('status'))
                        <input type="hidden"
                               name="status"
                               value="{{ request('status') }}">
                    @endif

                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2">

                        <circle cx="11" cy="11" r="8"></circle>

                        <line x1="21"
                              y1="21"
                              x2="16.65"
                              y2="16.65"></line>

                    </svg>

                    <input type="text"
                           name="cari"
                           value="{{ request('cari') }}"
                           placeholder="Cari pembayaran...">

                </form>


                <!-- NOTIFICATION -->

                <button class="notif-btn" title="Notifikasi">

                    <svg width="20"
                         height="20"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.8">

                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>

                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>

                    </svg>

                    <span class="notif-dot"></span>

                </button>


                <!-- ADMIN AVATAR -->

                <div class="top-avatar" title="Profil Admin">

                    <svg width="18"
                         height="18"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2">

                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>

                        <circle cx="12" cy="7" r="4"></circle>

                    </svg>

                </div>

            </div>

        </header>



        <!-- ================= ALERT ================= -->

        @if(session('success'))

            <div class="alert-success">

                <span>✓ {{ session('success') }}</span>

                <button onclick="this.parentElement.remove()"
                        style="background:none;border:none;font-weight:bold;cursor:pointer;color:#15803d;">

                    &times;

                </button>

            </div>

        @endif


        @if(session('error'))

            <div class="alert-error">

                {{ session('error') }}

            </div>

        @endif


        @if($errors->any())

            <div class="alert-error">

                {{ $errors->first() }}

            </div>

        @endif



        <!-- ================= STATISTIK ================= -->

        <section class="stats">


            <div class="stat-card">

                <p>Total Pembayaran</p>

                <h2>{{ $totalPembayaran }}</h2>

            </div>


            <div class="stat-card">

                <p>Menunggu Konfirmasi</p>

                <h2>{{ $menunggu }}</h2>

            </div>


            <div class="stat-card">

                <p>Pembayaran Dikonfirmasi</p>

                <h2>{{ $dikonfirmasi }}</h2>

            </div>


            <div class="stat-card">

                <p>Pembayaran Ditolak</p>

                <h2>{{ $ditolak }}</h2>

            </div>


        </section>



        <!-- ================= CARD RIWAYAT PEMBAYARAN ================= -->

        <section class="menu-card">


            <div class="card-header">

                <div>

                    <h2>Riwayat Pembayaran</h2>

                    <p>
                        Daftar lengkap transaksi pembayaran pelanggan Daily Crave.
                    </p>

                </div>

            </div>



            <!-- FILTER STATUS -->

            <div class="filter-bar">

                <span class="filter-label">
                    Filter Status:
                </span>


                <a href="{{ route('admin.pembayaran.index', ['cari' => request('cari')]) }}"
                   class="filter-pill {{ !request('status') ? 'active' : '' }}">

                    Semua

                </a>


                <a href="{{ route('admin.pembayaran.index', ['status' => 'Menunggu', 'cari' => request('cari')]) }}"
                   class="filter-pill {{ request('status') == 'Menunggu' ? 'active' : '' }}">

                    Menunggu

                </a>


                <a href="{{ route('admin.pembayaran.index', ['status' => 'Dikonfirmasi', 'cari' => request('cari')]) }}"
                   class="filter-pill {{ request('status') == 'Dikonfirmasi' ? 'active' : '' }}">

                    Dikonfirmasi

                </a>


                <a href="{{ route('admin.pembayaran.index', ['status' => 'Ditolak', 'cari' => request('cari')]) }}"
                   class="filter-pill {{ request('status') == 'Ditolak' ? 'active' : '' }}">

                    Ditolak

                </a>

            </div>



            <!-- ================= TABEL PEMBAYARAN ================= -->

            <div class="table-responsive">

                <table>

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Kode Pesanan</th>

                            <th>Pelanggan</th>

                            <th>Metode Pembayaran</th>

                            <th>Total Pembayaran</th>

                            <th>Bukti</th>

                            <th>Status</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($pembayarans as $index => $pembayaran)

                            <tr>


                                <!-- NOMOR -->

                                <td>
                                    {{ $pembayarans->firstItem() + $index }}
                                </td>


                                <!-- KODE PESANAN -->

                                <td class="order-code">

                                    {{ $pembayaran->pesanan->kode_pesanan ?? '-' }}

                                </td>


                                <!-- NAMA PELANGGAN -->

                                <td>

                                    {{ $pembayaran->pesanan->nama_pelanggan ?? '-' }}

                                </td>


                                <!-- METODE PEMBAYARAN -->

                                <td>

                                    <span class="cat-badge">

                                        {{ $pembayaran->metode_pembayaran }}

                                    </span>

                                </td>


                                <!-- TOTAL PEMBAYARAN -->

                                <td class="price-text">

                                    Rp{{ number_format($pembayaran->total_pembayaran, 0, ',', '.') }}

                                </td>


                                <!-- INFORMASI PEMBAYARAN QRIS -->

                                <td>

                                    <span class="cat-badge">
                                        {{ $pembayaran->metode_pembayaran }}
                                    </span>

                                </td>


                                <!-- STATUS PEMBAYARAN -->

                                <td>

                                    @php
                                        $statusClass = match($pembayaran->status_pembayaran) {
                                            'Menunggu' => 'status-menunggu',
                                            'Dikonfirmasi' => 'status-dikonfirmasi',
                                            'Ditolak' => 'status-ditolak',
                                            default => '',
                                        };
                                    @endphp

                                    <span class="status-badge {{ $statusClass }}">

                                        {{ $pembayaran->status_pembayaran }}

                                    </span>

                                </td>


                                <!-- AKSI -->

                                <td>

                                    <div class="action-group">

                                        @if($pembayaran->status_pembayaran === 'Menunggu')


                                            <!-- KONFIRMASI PEMBAYARAN QRIS -->

                                            <form
                                                action="{{ route('admin.pembayaran.konfirmasi', $pembayaran->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Apakah pembayaran QRIS ini sudah diterima?')">

                                                @csrf

                                                <button type="submit"
                                                        class="btn-action btn-confirm">

                                                    Konfirmasi

                                                </button>

                                            </form>


                                            <!-- TOLAK -->

                                            <button type="button"
                                                    class="btn-action btn-reject"
                                                    onclick="tolakPembayaran({{ $pembayaran->id }})">

                                                Tolak

                                            </button>


                                        @else

                                            <span class="finished">

                                                Selesai

                                            </span>

                                        @endif

                                    </div>

                                </td>


                            </tr>


                        @empty

                            <tr>

                                <td colspan="8" class="empty">

                                    Belum ada data pembayaran.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>



            <!-- PAGINATION -->

            <div class="pagination">

                {{ $pembayarans->links() }}

            </div>


        </section>

    </main>



    <!-- ================= FORM PENOLAKAN ================= -->

    <form
        id="formTolak"
        method="POST"
        style="display:none">

        @csrf

        <input
            type="hidden"
            name="catatan_admin"
            id="catatanAdmin">

    </form>



    <!-- ================= JAVASCRIPT ================= -->

    <script>

        function tolakPembayaran(id) {

            const alasan = prompt(
                'Masukkan alasan penolakan pembayaran:'
            );

            if (!alasan || alasan.trim() === '') {
                return;
            }

            document.getElementById('catatanAdmin').value = alasan.trim();

            document.getElementById('formTolak').action =
                "{{ url('/admin/pembayaran') }}/" + id + "/tolak";

            document.getElementById('formTolak').submit();

        }

    </script>


</body>

</html>
