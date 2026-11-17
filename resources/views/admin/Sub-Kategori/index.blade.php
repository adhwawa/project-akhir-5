<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Crave - Sub Kategori Admin</title>
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

        .admin-panel-label {
            display: block;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 1.2px;
            color: #8c735f;
            margin-top: 10px;
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
            gap: 14px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 6px;
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

        .logout-link {
            display: flex;
            align-items: center;
            gap: 10px;
            background: none;
            border: none;
            color: #c93b3b;
            font-family: 'Poppins', sans-serif;
            font-size: 12.5px;
            font-weight: 500;
            cursor: pointer;
            padding: 6px 8px;
            border-radius: 8px;
            width: 100%;
            text-align: left;
            transition: background 0.2s;
        }

        .logout-link:hover {
            background-color: #fae6e6;
        }

        .system-status {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 6px 6px 0;
            border-top: 1px solid #e8dfd3;
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
            gap: 26px;
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
            background-color: #f4eee6;
            border: 1px solid #e6dcd0;
            border-radius: 24px;
            padding: 9px 18px;
            width: 270px;
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
            font-size: 13px;
            font-weight: 600;
        }

        /* ALERT SUCCESS */
        .alert-success {
            background-color: #e6f6ec;
            border: 1px solid #bce8cb;
            color: #15803d;
            padding: 12px 18px;
            border-radius: 12px;
            font-size: 13px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* ================= DATA CARD & TABLE ================= */
        .data-card {
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
            gap: 14px;
            margin-bottom: 24px;
        }

        .card-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-weight: 600;
            color: #2c1e14;
        }

        .btn-add {
            background-color: #6b4c35;
            color: #ffffff;
            border: none;
            border-radius: 12px;
            padding: 11px 20px;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 12px rgba(107, 76, 53, 0.18);
            transition: background-color 0.2s, transform 0.1s;
        }

        .btn-add:hover {
            background-color: #583d29;
        }

        .btn-add:active {
            transform: scale(0.98);
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            text-align: left;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.8px;
            color: #9b826e;
            padding: 12px 14px;
            border-bottom: 1px solid #f2ebe1;
            text-transform: uppercase;
        }

        thead th.col-no {
            width: 65px;
        }

        thead th.col-status {
            width: 170px;
            text-align: center;
        }

        thead th.col-aksi {
            width: 120px;
            text-align: right;
        }

        tbody td {
            padding: 18px 14px;
            border-bottom: 1px solid #f6f0e8;
            vertical-align: middle;
        }

        tbody tr:hover {
            background-color: #fdfbf8;
        }

        .td-no {
            font-size: 13px;
            color: #7a624f;
        }

        .sub-title {
            font-size: 14px;
            font-weight: 600;
            color: #2c1e14;
            margin-bottom: 2px;
        }

        .sub-meta {
            font-size: 12px;
            color: #9b826e;
        }

        .td-status {
            text-align: center;
        }

        .status-pill {
            display: inline-block;
            padding: 5px 14px;
            border-radius: 20px;
            font-size: 11.5px;
            font-weight: 500;
        }

        .status-available {
            background-color: #e6f6ec;
            color: #16a34a;
        }

        .status-unavailable {
            background-color: #fde8e8;
            color: #dc2626;
        }

        .td-aksi {
            text-align: right;
        }

        .action-group {
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 6px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: background 0.2s;
        }

        .icon-btn.edit {
            color: #3b82f6;
        }

        .icon-btn.edit:hover {
            background-color: #eff6ff;
        }

        .icon-btn.delete {
            color: #ef4444;
        }

        .icon-btn.delete:hover {
            background-color: #fef2f2;
        }

        /* TABLE FOOTER / PAGINATION */
        .table-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 14px;
            padding-top: 22px;
        }

        .showing-text {
            font-size: 12.5px;
            color: #8c735f;
        }

        .showing-text strong {
            color: #3d2819;
        }

        .pagination-controls {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .page-btn {
            padding: 7px 14px;
            border-radius: 8px;
            border: 1px solid #e6dcd0;
            background-color: #ffffff;
            color: #6b4c35;
            font-size: 12px;
            text-decoration: none;
            transition: all 0.2s;
        }

        .page-btn:hover:not(.disabled) {
            background-color: #f4eee6;
        }

        .page-btn.disabled {
            color: #c2b3a3;
            pointer-events: none;
            background-color: #fcfaf7;
        }

        .page-num {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
            border: 1px solid #e6dcd0;
            color: #6b4c35;
        }

        .page-num.active {
            background-color: #6b4c35;
            color: #ffffff;
            border-color: #6b4c35;
        }

        /* ================= MODALS ================= */
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
            padding: 30px 28px 26px;
            width: 100%;
            max-width: 390px;
            text-align: center;
            position: relative;
            box-shadow: 0 20px 45px rgba(44, 30, 20, 0.15);
            animation: modalPop 0.2s ease;
        }

        @keyframes modalPop {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .modal-close-x {
            position: absolute;
            top: 16px;
            right: 18px;
            background: none;
            border: none;
            font-size: 16px;
            color: #9b826e;
            cursor: pointer;
        }

        .modal-icon-danger {
            width: 46px;
            height: 46px;
            background-color: #fde8e8;
            color: #ef4444;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
        }

        .modal-box h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 600;
            color: #2c1e14;
            margin-bottom: 8px;
        }

        .modal-box p.modal-desc {
            font-size: 12px;
            color: #8c735f;
            line-height: 1.5;
            margin-bottom: 24px;
        }

        .modal-grid-btns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .btn-cancel {
            background-color: #ffffff;
            border: 1px solid #e2d7c8;
            color: #4a3525;
            padding: 10px 18px;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 12.5px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-cancel:hover {
            background-color: #f8f4ef;
        }

        .btn-danger {
            width: 100%;
            background-color: #ef4444;
            border: none;
            color: #ffffff;
            padding: 10px 18px;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 12.5px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-danger:hover {
            background-color: #dc2626;
        }

        @media (max-width: 768px) {
            body { flex-direction: column; }
            .sidebar { width: 100%; border-right: none; border-bottom: 1px solid #e8dfd3; }
            .main-content { padding: 24px 20px; }
            .search-box { width: 100%; }
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
                <span class="admin-panel-label">ADMIN PANEL</span>
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

                <a href="#" class="nav-item">
                    <svg viewBox="0 0 24 24">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    Menu
                </a>

                <a href="{{ route('admin.subkategori.index') }}" class="nav-item active">
                    <svg viewBox="0 0 24 24">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                    </svg>
                    Sub Kategori
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

        <!-- SIDEBAR FOOTER -->
        <div class="sidebar-footer">
            <div class="user-info">
                <div class="avatar-circle">A</div>
                <div class="user-details">
                    <h4>Admin User</h4>
                    <p>Administrator</p>
                </div>
            </div>

            <button type="button" class="logout-link" onclick="openModal('logoutModal')">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                Keluar
            </button>

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
        <header class="topbar">
            <div class="page-header">
                <h1>Sub Kategori</h1>
                <p>Kelola data sub kategori restoran Anda.</p>
            </div>

            <div class="topbar-actions">
                <form action="{{ route('admin.subkategori.index') }}" method="GET" class="search-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari di Sub Kategori...">
                </form>

                <button class="notif-btn" title="Notifikasi">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                    <span class="notif-dot"></span>
                </button>

                <div class="top-avatar" title="Admin User">A</div>
            </div>
        </header>

        @if(session('success'))
        <div class="alert-success">
            <span>{{ session('success') }}</span>
            <button type="button" onclick="this.parentElement.remove()" style="background:none;border:none;color:inherit;cursor:pointer;font-weight:bold;">✕</button>
        </div>
        @endif

        <!-- DATA SUB KATEGORI CARD -->
        <section class="data-card">
            <div class="card-header">
                <h2>Data Sub Kategori</h2>
                <a href="{{ route('admin.subkategori.create') }}" class="btn-add">
                    <span>+</span> Tambah Sub Kategori
                </a>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th class="col-no">NO</th>
                            <th>NAMA SUB KATEGORI</th>
                            <th class="col-status">STATUS</th>
                            <th class="col-aksi">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($subKategoris as $index => $item)
                        <tr>
                            <td class="td-no">{{ $subKategoris->firstItem() + $index }}</td>
                            <td>
                                <div class="sub-title">{{ $item->nama }}</div>
                                <div class="sub-meta">{{ $item->kategori }} &bull; {{ $item->slug }}</div>
                            </td>
                            <td class="td-status">
                                <span class="status-pill {{ $item->status === 'Tersedia' ? 'status-available' : 'status-unavailable' }}">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td class="td-aksi">
                                <div class="action-group">
                                    <a href="{{ route('admin.subkategori.edit', $item->id) }}" class="icon-btn edit" title="Edit">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </a>

                                    <button type="button" class="icon-btn delete" title="Hapus"
                                        onclick="openDeleteModal({{ $item->id }}, '{{ addslashes($item->nama) }}')">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" style="text-align:center; padding:32px; color:#9b826e; font-size:13px;">
                                Belum ada data sub kategori.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- PAGINATION FOOTER -->
            <div class="table-footer">
                <div class="showing-text">
                    Menampilkan <strong>{{ $subKategoris->firstItem() ?? 0 }}–{{ $subKategoris->lastItem() ?? 0 }}</strong> dari <strong>{{ $subKategoris->total() }}</strong> sub kategori
                </div>

                <div class="pagination-controls">
                    <a href="{{ $subKategoris->previousPageUrl() ?? '#' }}"
                       class="page-btn {{ $subKategoris->onFirstPage() ? 'disabled' : '' }}">
                        Sebelumnya
                    </a>

                    @for ($p = 1; $p <= max($subKategoris->lastPage(), 1); $p++)
                        <a href="{{ $subKategoris->url($p) }}"
                           class="page-num {{ $subKategoris->currentPage() === $p ? 'active' : '' }}">
                            {{ $p }}
                        </a>
                    @endfor

                    <a href="{{ $subKategoris->nextPageUrl() ?? '#' }}"
                       class="page-btn {{ !$subKategoris->hasMorePages() ? 'disabled' : '' }}">
                        Berikutnya
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- MODAL KONFIRMASI HAPUS SUB KATEGORI -->
    <div class="modal-overlay" id="deleteModal" onclick="if(event.target === this) closeModal('deleteModal')">
        <div class="modal-box">
            <button type="button" class="modal-close-x" onclick="closeModal('deleteModal')">✕</button>

            <div class="modal-icon-danger">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                </svg>
            </div>

            <h3>Hapus Sub Kategori?</h3>
            <p class="modal-desc">
                Yakin ingin menghapus sub kategori "<strong id="deleteSubName"></strong>"?
            </p>

            <div class="modal-grid-btns">
                <button type="button" class="btn-cancel" onclick="closeModal('deleteModal')">Batal</button>
                <form id="deleteForm" method="POST" style="margin:0;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL KONFIRMASI KELUAR -->
    <div class="modal-overlay" id="logoutModal" onclick="if(event.target === this) closeModal('logoutModal')">
        <div class="modal-box">
            <div class="modal-icon-danger">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
            </div>
            <h3>Yakin ingin keluar dari akun admin?</h3>
            <p class="modal-desc">Sesi Anda saat ini akan diakhiri dan Anda perlu login kembali untuk mengakses panel admin Daily Crave.</p>
            <div class="modal-grid-btns">
                <button type="button" class="btn-cancel" onclick="closeModal('logoutModal')">Batal</button>
                <form action="{{ route('admin.logout') }}" method="POST" style="margin:0;">
                    @csrf
                    <button type="submit" class="btn-danger" style="background-color:#b91c1c;">Keluar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openModal(id) {
            document.getElementById(id).classList.add('show');
        }

        function closeModal(id) {
            document.getElementById(id).classList.remove('show');
        }

        function openDeleteModal(id, nama) {
            document.getElementById('deleteForm').action = `/admin/sub-kategori/${id}`;
            document.getElementById('deleteSubName').textContent = nama;
            openModal('deleteModal');
        }
    </script>

</body>

</html>