<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Crave - Dashboard Admin</title>
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

        .logout-btn {
            background: none;
            border: none;
            color: #c93b3b;
            cursor: pointer;
            padding: 8px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s, transform 0.1s;
        }

        .logout-btn:hover {
            background-color: #fae6e6;
        }

        .logout-btn:active {
            transform: scale(0.95);
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
            animation: pulseDot 2s infinite;
        }

        @keyframes pulseDot {
            0% { box-shadow: 0 0 0 0 rgba(22, 163, 74, 0.5); }
            70% { box-shadow: 0 0 0 6px rgba(22, 163, 74, 0); }
            100% { box-shadow: 0 0 0 0 rgba(22, 163, 74, 0); }
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
        }

        /* TOPBAR */
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

        .notif-btn {
            position: relative;
            background: none;
            border: none;
            cursor: pointer;
            color: #6b4c35;
            display: flex;
            align-items: center;
            justify-content: center;
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

        .top-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #3d2819;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        /* ================= STATS CARDS ================= */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .stat-card {
            background-color: #ffffff;
            border: 1px solid #f0e8de;
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 4px 20px rgba(74, 53, 37, 0.03);
            transition: transform 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
        }

        .stat-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            background-color: #f4eee6;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #7c5c43;
        }

        .stat-icon svg {
            width: 19px;
            height: 19px;
            stroke: currentColor;
            fill: none;
            stroke-width: 1.8;
        }

        .badge {
            font-size: 11px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .badge-green {
            background-color: #e6f6ec;
            color: #16a34a;
        }

        .badge-red {
            background-color: #fde8e8;
            color: #dc2626;
        }

        .badge-brown {
            background-color: #f4eee6;
            color: #8c6a4f;
        }

        .stat-label {
            font-size: 12.5px;
            color: #8c735f;
            margin-bottom: 6px;
        }

        .stat-value {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            font-weight: 700;
            color: #24180f;
            transition: color 0.3s ease;
        }

        /* ================= ANALYTICS SECTION ================= */
        .analytics-card {
            background-color: #ffffff;
            border: 1px solid #f0e8de;
            border-radius: 20px;
            padding: 28px 32px;
            box-shadow: 0 4px 20px rgba(74, 53, 37, 0.03);
        }

        .analytics-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-weight: 600;
            color: #2c1e14;
            margin-bottom: 4px;
        }

        .analytics-header p {
            font-size: 12.5px;
            color: #8c735f;
            margin-bottom: 22px;
        }

        .chart-container {
            border: 1px solid #f2ebe1;
            border-radius: 16px;
            padding: 22px 26px;
            background-color: #fffdfb;
        }

        .chart-controls {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 25px;
        }

        .filter-tabs {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .filter-btn {
            background: transparent;
            border: 1px solid transparent;
            padding: 6px 14px;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            color: #8c735f;
            cursor: pointer;
            transition: all 0.2s;
        }

        .filter-btn.active {
            background-color: #ffffff;
            border-color: #e2d7c8;
            color: #4a3525;
            font-weight: 500;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
        }

        .chart-legend {
            display: flex;
            align-items: center;
            gap: 18px;
            font-size: 12px;
            color: #7a624f;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .dot-dark {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #6b4c35;
        }

        .dot-light {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #d6c8b8;
        }

        /* SVG CHART AREA */
        .svg-wrapper {
            position: relative;
            width: 100%;
            height: 220px;
        }

        .svg-wrapper svg {
            width: 100%;
            height: 100%;
            overflow: visible;
        }

        .pulse-watermark {
            position: absolute;
            top: 48%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #d8cfc4;
            pointer-events: none;
        }

        .chart-days {
            display: flex;
            justify-content: space-between;
            padding: 14px 20px 0;
            border-top: 1px solid #f4eee6;
            font-size: 12px;
            color: #8c735f;
        }

        .chart-days span.active-day {
            color: #3d2819;
            font-weight: 600;
        }

        /* ================= MODAL LOGOUT ================= */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background-color: rgba(44, 30, 20, 0.35);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            padding: 20px;
        }

        .modal-overlay.show {
            display: flex;
        }

        .modal-box {
            background-color: #ffffff;
            border: 1px solid #f0e8de;
            border-radius: 20px;
            padding: 32px 28px 26px;
            width: 100%;
            max-width: 390px;
            text-align: center;
            box-shadow: 0 20px 45px rgba(44, 30, 20, 0.15);
            animation: modalPop 0.2s ease;
        }

        @keyframes modalPop {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .modal-icon-box {
            width: 46px;
            height: 46px;
            background-color: #fde8e8;
            color: #dc2626;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
        }

        .modal-box h3 {
            font-size: 16px;
            font-weight: 600;
            color: #2c1e14;
            margin-bottom: 8px;
        }

        .modal-box p {
            font-size: 12px;
            color: #8c735f;
            line-height: 1.5;
            margin-bottom: 24px;
        }

        .modal-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .btn-batal {
            background-color: #ffffff;
            border: 1px solid #e2d7c8;
            color: #4a3525;
            padding: 10px 16px;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 12.5px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-batal:hover {
            background-color: #f8f4ef;
        }

        .btn-keluar-confirm {
            width: 100%;
            background-color: #b91c1c;
            border: none;
            color: #ffffff;
            padding: 10px 16px;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 12.5px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-keluar-confirm:hover {
            background-color: #991b1b;
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 1100px) {
            .stats-grid {
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
            }

            .main-content {
                padding: 24px 20px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .search-box {
                width: 100%;
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
                <a href="{{ route('admin.dashboard') }}" class="nav-item active">
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

                <a href="#" class="nav-item">
                    <svg viewBox="0 0 24 24">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                    </svg>
                    Sub-Kategori
                </a>

                <a href="#" class="nav-item">
                    <svg viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                    </svg>
                    Pesanan
                </a>

                <a href="#" class="nav-item">
                    <svg viewBox="0 0 24 24">
                        <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                        <line x1="2" y1="10" x2="22" y2="10"></line>
                    </svg>
                    Pembayaran
                </a>

                <a href="#" class="nav-item">
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

        <!-- SIDEBAR BOTTOM -->
        <div class="sidebar-footer">
            <div class="user-profile">
                <div class="user-info">
                    <div class="avatar-circle">A</div>
                    <div class="user-details">
                        <h4>Admin User</h4>
                        <p>Administrator</p>
                    </div>
                </div>
                <button type="button" class="logout-btn" title="Keluar" onclick="openLogoutModal()">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                </button>
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
                <h1>Dashboard</h1>
                <p>Kelola data dashboard restoran Anda.</p>
            </div>

            <div class="topbar-actions">
                <div class="search-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="text" placeholder="Cari di Dashboard...">
                </div>

                <button class="notif-btn" title="Notifikasi">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                    <span class="notif-dot"></span>
                </button>

                <div class="top-avatar" title="Profil Admin">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
            </div>
        </header>

        <!-- 4 STAT CARDS (REALTIME) -->
        <section class="stats-grid">
            <!-- Card 1 -->
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                    </div>
                    <span class="badge badge-green" id="badge-pesanan">0%</span>
                </div>
                <p class="stat-label">Total Pesanan Hari Ini</p>
                <div class="stat-value" id="stat-pesanan">0</div>
            </div>

            <!-- Card 2 -->
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                            <polyline points="17 6 23 6 23 12"></polyline>
                        </svg>
                    </div>
                    <span class="badge badge-green" id="badge-pendapatan">0%</span>
                </div>
                <p class="stat-label">Pendapatan Hari Ini</p>
                <div class="stat-value" id="stat-pendapatan">Rp 0</div>
            </div>

            <!-- Card 3 -->
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <span class="badge badge-green" id="badge-pelanggan">0</span>
                </div>
                <p class="stat-label">Pelanggan Aktif</p>
                <div class="stat-value" id="stat-pelanggan">0</div>
            </div>

            <!-- Card 4 -->
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                            <line x1="2" y1="10" x2="22" y2="10"></line>
                        </svg>
                    </div>
                    <span class="badge badge-brown">Perlu Konfirmasi</span>
                </div>
                <p class="stat-label">Menunggu Pembayaran</p>
                <div class="stat-value" id="stat-pending">0</div>
            </div>
        </section>

        <!-- AKTIVITAS TERKINI & GRAFIK REALTIME -->
        <section class="analytics-card">
            <div class="analytics-header">
                <h2>Aktivitas Terkini</h2>
                <p>Grafik analitik dan ringkasan harian ditampilkan secara realtime.</p>
            </div>

            <div class="chart-container">
                <div class="chart-controls">
                    <div class="filter-tabs">
                        <button class="filter-btn active" onclick="changePeriod(this, 'week')">Minggu Ini</button>
                        <button class="filter-btn" onclick="changePeriod(this, 'month')">Bulan Ini</button>
                        <button class="filter-btn" onclick="changePeriod(this, 'year')">Tahun Ini</button>
                    </div>

                    <div class="chart-legend">
                        <div class="legend-item">
                            <span class="dot-dark"></span>
                            <span>Pendapatan</span>
                        </div>
                        <div class="legend-item">
                            <span class="dot-light"></span>
                            <span>Pesanan</span>
                        </div>
                    </div>
                </div>

                <!-- GRAFIK KURVA HALUS REALTIME -->
                <div class="svg-wrapper">
                    <div class="pulse-watermark">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </div>

                    <svg viewBox="0 0 800 180" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="chartGradient" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#6b4c35" stop-opacity="0.22" />
                                <stop offset="100%" stop-color="#6b4c35" stop-opacity="0.0" />
                            </linearGradient>
                        </defs>

                        <!-- Area bayangan di bawah garis Pendapatan -->
                        <path id="chart-area" d="M 0,165 L 800,165 L 800,180 L 0,180 Z" fill="url(#chartGradient)" />

                        <!-- Garis kurva Pesanan (warna terang putus-putus) -->
                        <path id="chart-line-pesanan" d="M 0,165 L 800,165" fill="none" stroke="#d6c8b8"
                              stroke-width="2" stroke-dasharray="4 4" stroke-linecap="round" />

                        <!-- Garis kurva utama Pendapatan (warna cokelat tua) -->
                        <path id="chart-line-pendapatan" d="M 0,165 L 800,165" fill="none" stroke="#6b4c35"
                              stroke-width="2.5" stroke-linecap="round" />

                        <!-- Titik-titik data interaktif -->
                        <g id="chart-dots"></g>
                    </svg>
                </div>

                <div class="chart-days" id="chart-labels">
                    <span>Sen</span>
                    <span>Sel</span>
                    <span>Rab</span>
                    <span class="active-day">Kam</span>
                    <span>Jum</span>
                    <span>Sab</span>
                    <span>Min</span>
                </div>
            </div>
        </section>
    </main>

    <!-- MODAL KONFIRMASI KELUAR -->
    <div class="modal-overlay" id="logoutModal" onclick="if(event.target === this) closeLogoutModal()">
        <div class="modal-box">
            <div class="modal-icon-box">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
            </div>
            <h3>Yakin ingin keluar dari akun admin?</h3>
            <p>Sesi Anda saat ini akan diakhiri dan Anda perlu login kembali untuk mengakses panel admin Daily Crave.</p>

            <div class="modal-actions">
                <button type="button" class="btn-batal" onclick="closeLogoutModal()">Batal</button>
                <form action="{{ route('admin.logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="btn-keluar-confirm">Keluar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Modal Logout
        function openLogoutModal() {
            document.getElementById('logoutModal').classList.add('show');
        }

        function closeLogoutModal() {
            document.getElementById('logoutModal').classList.remove('show');
        }

        // Filter Grafik
        let currentPeriod = 'week';

        function changePeriod(button, period) {
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            currentPeriod = period;
            updateDashboardStats();
        }

        // Membuat kurva bezier halus dari array titik koordinat
        function buildSmoothPath(points) {
            if (points.length === 0) return '';
            if (points.length === 1) return `M ${points[0].x},${points[0].y}`;

            let d = `M ${points[0].x},${points[0].y}`;
            for (let i = 0; i < points.length - 1; i++) {
                const p0 = points[i];
                const p1 = points[i + 1];
                const cpX1 = p0.x + (p1.x - p0.x) * 0.45;
                const cpX2 = p1.x - (p1.x - p0.x) * 0.45;
                d += ` C ${cpX1},${p0.y} ${cpX2},${p1.y} ${p1.x},${p1.y}`;
            }
            return d;
        }

        // Render ulang grafik SVG secara realtime
        function renderRealtimeChart(chart) {
            const width = 800;
            const topPad = 25;
            const bottomY = 165;
            const usableHeight = bottomY - topPad;
            const count = chart.labels.length;

            const maxPendapatan = Math.max(...chart.pendapatan, 1);
            const maxPesanan = Math.max(...chart.pesanan, 1);

            const ptsPendapatan = [];
            const ptsPesanan = [];

            for (let i = 0; i < count; i++) {
                const x = count === 1 ? width / 2 : (i / (count - 1)) * width;
                const yPendapatan = bottomY - (chart.pendapatan[i] / maxPendapatan) * usableHeight;
                const yPesanan = bottomY - (chart.pesanan[i] / maxPesanan) * (usableHeight * 0.85);

                ptsPendapatan.push({ x, y: yPendapatan, val: chart.pendapatan[i], label: chart.labels[i] });
                ptsPesanan.push({ x, y: yPesanan, val: chart.pesanan[i], label: chart.labels[i] });
            }

            const linePendapatan = buildSmoothPath(ptsPendapatan);
            const linePesanan = buildSmoothPath(ptsPesanan);
            const areaPendapatan = `${linePendapatan} L ${width},180 L 0,180 Z`;

            document.getElementById('chart-line-pendapatan').setAttribute('d', linePendapatan);
            document.getElementById('chart-area').setAttribute('d', areaPendapatan);
            document.getElementById('chart-line-pesanan').setAttribute('d', linePesanan);

            // Render titik data + tooltip saat diarahkan kursor
            const dotsGroup = document.getElementById('chart-dots');
            dotsGroup.innerHTML = ptsPendapatan.map((pt, idx) => `
                <circle cx="${pt.x}" cy="${pt.y}" r="4" fill="#6b4c35" stroke="#ffffff" stroke-width="1.5">
                    <title>${pt.label}: Rp ${pt.val.toLocaleString('id-ID')} (${ptsPesanan[idx].val} pesanan)</title>
                </circle>
            `).join('');

            // Render label hari/minggu/bulan di bawah grafik
            const labelsContainer = document.getElementById('chart-labels');
            labelsContainer.innerHTML = chart.labels.map((lbl, idx) =>
                `<span class="${idx === chart.active_index ? 'active-day' : ''}">${lbl}</span>`
            ).join('');
        }

        // Fungsi mengambil data realtime dari server
        async function updateDashboardStats() {
            try {
                const response = await fetch(`{{ route('admin.dashboard.stats') }}?period=${currentPeriod}`);
                if (!response.ok) return;
                const data = await response.json();

                // Update Angka Utama
                document.getElementById('stat-pesanan').textContent = data.total_pesanan;
                document.getElementById('stat-pendapatan').textContent = data.pendapatan;
                document.getElementById('stat-pelanggan').textContent = data.pelanggan_aktif;
                document.getElementById('stat-pending').textContent = data.menunggu_pembayaran;

                // Update Badge Persentase & Warna Otomatis
                const badgePesanan = document.getElementById('badge-pesanan');
                badgePesanan.textContent = data.persen_pesanan;
                badgePesanan.className = 'badge ' + (data.is_pesanan_up ? 'badge-green' : 'badge-red');

                const badgePendapatan = document.getElementById('badge-pendapatan');
                badgePendapatan.textContent = data.persen_pendapatan;
                badgePendapatan.className = 'badge ' + (data.is_pendapatan_up ? 'badge-green' : 'badge-red');

                const badgePelanggan = document.getElementById('badge-pelanggan');
                badgePelanggan.textContent = data.selisih_pelanggan;
                badgePelanggan.className = 'badge ' + (data.is_pelanggan_up ? 'badge-green' : 'badge-red');

                // Update Grafik Realtime
                if (data.chart) {
                    renderRealtimeChart(data.chart);
                }
            } catch (error) {
                console.error('Gagal mengambil data terbaru:', error);
            }
        }

        // Jalankan langsung saat halaman dibuka, lalu perbarui otomatis tiap 3 detik
        updateDashboardStats();
        setInterval(updateDashboardStats, 3000);
    </script>

</body>

</html>