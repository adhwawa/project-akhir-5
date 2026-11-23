<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daily Crave - Data Pelanggan</title>

    <link rel="icon" href="{{ asset('gambar/favicon.png') }}">

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

        /* SIDEBAR - UKURAN MENGIKUTI REFERENSI */

        .sidebar {
            width: 260px;
            min-width: 260px;
            min-height: 100vh;
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
            transition: all .2s ease;
        }

        .nav-item:hover {
            background-color: #ebe2d6;
            color: #4a3525;
        }

        .nav-item.active {
            background-color: #6b4c35;
            color: white;
            box-shadow: 0 4px 12px rgba(107,76,53,.2);
        }

        .nav-item svg {
            width: 18px;
            height: 18px;
            stroke: currentColor;
            fill: none;
            stroke-width: 1.8;
            flex-shrink: 0;
        }

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
            background: #5c3d28;
            color: white;
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
            background: #16a34a;
            border-radius: 50%;
        }

        .version-badge {
            background: #e8dfd3;
            color: #7a624f;
            padding: 2px 8px;
            border-radius: 6px;
            font-size: 10.5px;
        }

        /* MAIN */

        .main-content {
            flex: 1;
            padding: 32px 42px;
            display: flex;
            flex-direction: column;
            gap: 28px;
            min-width: 0;
        }

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

        .search-box {
            display: flex;
            align-items: center;
            background: #f4eee6;
            border: 1px solid #e6dcd0;
            border-radius: 24px;
            padding: 9px 18px;
            width: 260px;
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

        .notif-btn {
            background: none;
            border: none;
            color: #6b4c35;
            font-size: 20px;
        }

        .top-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #3d2819;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* STATISTIK */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .stat-card {
            background: white;
            border: 1px solid #f0e8de;
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 4px 20px rgba(74,53,37,.03);
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

        /* CARD PELANGGAN */

        .menu-card {
            background: white;
            border: 1px solid #f0e8de;
            border-radius: 20px;
            padding: 28px 32px;
            box-shadow: 0 4px 20px rgba(74,53,37,.03);
        }

        .card-header {
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

        /* TABEL */

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 750px;
            border-collapse: collapse;
            text-align: left;
        }

        thead th {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .8px;
            text-transform: uppercase;
            color: #8c735f;
            padding: 16px 12px;
            border-bottom: 1px solid #f2ebe1;
            white-space: nowrap;
        }

        tbody tr {
            border-bottom: 1px solid #f7f2ec;
            transition: background .15s;
        }

        tbody tr:hover {
            background: #fcfaf7;
        }

        tbody td {
            padding: 16px 12px;
            font-size: 13px;
            color: #2c1e14;
            vertical-align: middle;
        }

        .customer-name {
            font-weight: 600;
            color: #5c3d28;
        }

        .price-text {
            font-weight: 600;
            white-space: nowrap;
        }

        .order-badge {
            display: inline-block;
            background: #faf3eb;
            border: 1px solid #efe2d3;
            color: #8c6a4f;
            font-size: 12px;
            padding: 4px 12px;
            border-radius: 8px;
        }

        .empty {
            text-align: center;
            padding: 36px !important;
            color: #8c735f;
        }

        .pagination {
            margin-top: 22px;
            font-size: 12px;
        }

        .pagination nav {
            display: flex;
            justify-content: flex-end;
        }

        .pagination a,
        .pagination span {
            color: #6b4c35;
        }

        /* RESPONSIVE */

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
                min-width: 0;
                min-height: auto;
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
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->

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


                <a href="{{ route('admin.pembayaran.index') }}" class="nav-item">

                    <svg viewBox="0 0 24 24">
                        <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                        <line x1="2" y1="10" x2="22" y2="10"></line>
                    </svg>

                    Pembayaran

                </a>


                <a href="{{ route('admin.pelanggan.index') }}" class="nav-item active">

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


    <!-- MAIN CONTENT -->

    <main class="main-content">

        <!-- HEADER -->

        <header class="topbar">

            <div class="page-header">
                <h1>Data Pelanggan</h1>
                <p>Kelola dan pantau informasi pelanggan Daily Crave.</p>
            </div>

            <div class="topbar-actions">

                <form action="{{ route('admin.pelanggan.index') }}"
                      method="GET"
                      class="search-box">

                    <input
                        type="text"
                        name="cari"
                        value="{{ request('cari') }}"
                        placeholder="Cari pelanggan..."
                    >

                </form>

                <button class="notif-btn" title="Notifikasi">♧</button>

                <div class="top-avatar">
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>

            </div>

        </header>


        <!-- STATISTIK -->

        <section class="stats">

            <div class="stat-card">
                <p>Total Pelanggan</p>
                <h2>{{ number_format($totalPelanggan, 0, ',', '.') }}</h2>
            </div>

            <div class="stat-card">
                <p>Total Pesanan</p>
                <h2>{{ number_format($totalPesanan, 0, ',', '.') }}</h2>
            </div>

            <div class="stat-card">
                <p>Total Transaksi</p>
                <h2>Rp{{ number_format($totalTransaksi, 0, ',', '.') }}</h2>
            </div>

        </section>


        <!-- TABEL PELANGGAN -->

        <section class="menu-card">

            <div class="card-header">
                <h2>Daftar Pelanggan</h2>
                <p>Daftar pelanggan berdasarkan riwayat pesanan yang masuk.</p>
            </div>

            <div class="table-responsive">

                <table>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Jumlah Pesanan</th>
                            <th>Total Transaksi</th>
                            <th>Pesanan Terakhir</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($pelanggans as $index => $pelanggan)

                            <tr>

                                <td>
                                    {{ $pelanggans->firstItem() + $index }}
                                </td>

                                <td class="customer-name">
                                    {{ $pelanggan->nama_pelanggan }}
                                </td>

                                <td>
                                    <span class="order-badge">
                                        {{ $pelanggan->total_pesanan }} Pesanan
                                    </span>
                                </td>

                                <td class="price-text">
                                    Rp{{ number_format($pelanggan->total_transaksi, 0, ',', '.') }}
                                </td>

                                <td>
                                    {{ $pelanggan->pesanan_terakhir
                                        ? \Carbon\Carbon::parse($pelanggan->pesanan_terakhir)->format('d/m/Y')
                                        : '-' }}
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="empty">
                                    Belum ada data pelanggan.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <div class="pagination">
                {{ $pelanggans->links() }}
            </div>

        </section>

    </main>

</body>
</html>