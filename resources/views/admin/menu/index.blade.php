<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Crave - Data Menu</title>
    <link rel="icon" type="image/png" href="{{ asset('gambar/favicon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

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

        .nav-links { display: flex; flex-direction: column; gap: 8px; }

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

        .nav-item:hover { background-color: #ebe2d6; color: #4a3525; }

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

        .user-info { display: flex; align-items: center; gap: 12px; }

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

        .user-details h4 { font-size: 13px; font-weight: 600; color: #3d2819; }
        .user-details p { font-size: 11px; color: #8c735f; }

        .logout-btn {
            background: none;
            border: none;
            color: #c93b3b;
            cursor: pointer;
            padding: 6px;
            border-radius: 8px;
        }

        .system-status {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6px;
            font-size: 11.5px;
            color: #7a624f;
        }

        .status-indicator { display: flex; align-items: center; gap: 8px; }

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

        .page-header p { font-size: 13px; color: #8c735f; }

        .topbar-actions { display: flex; align-items: center; gap: 18px; }

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

        .search-box svg { width: 16px; height: 16px; color: #9b826e; }

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

        /* ================= ALERT NOTIFIKASI ================= */
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

        /* ================= MENU CARD & TABLE ================= */
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

        .card-header p { font-size: 12.5px; color: #8c735f; margin-top: 2px; }

        .btn-primary {
            background-color: #6b4c35;
            color: #ffffff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            padding: 11px 20px;
            border-radius: 12px;
            transition: background 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary:hover { background-color: #543b28; }

        /* FILTER KATEGORI */
        .filter-bar {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            padding-bottom: 22px;
            border-bottom: 1px solid #f2ebe1;
        }

        .filter-label { font-size: 12.5px; color: #8c735f; margin-right: 4px; }

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

        .filter-pill:hover { background-color: #e8dfd3; color: #4a3525; }

        .filter-pill.active {
            background-color: #6b4c35;
            color: #ffffff;
        }

        /* TABEL DATA MENU */
        .table-responsive { overflow-x: auto; }

        table { width: 100%; border-collapse: collapse; text-align: left; }

        thead th {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: #8c735f;
            padding: 16px 12px;
            border-bottom: 1px solid #f2ebe1;
        }

        thead th:last-child { text-align: right; }

        tbody tr {
            border-bottom: 1px solid #f7f2ec;
            transition: background 0.15s;
        }

        tbody tr:hover { background-color: #fcfaf7; }

        tbody td {
            padding: 16px 12px;
            font-size: 13.5px;
            color: #2c1e14;
        }

        .menu-name { font-weight: 500; }

        .cat-badge {
            display: inline-block;
            background-color: #faf3eb;
            border: 1px solid #efe2d3;
            color: #8c6a4f;
            font-size: 12px;
            padding: 4px 12px;
            border-radius: 8px;
        }

        .price-text { font-weight: 600; }

        .status-badge {
            display: inline-block;
            font-size: 11.5px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
        }

        .status-tersedia { background-color: #e6f6ec; color: #16a34a; }
        .status-habis { background-color: #fde8e8; color: #dc2626; }

        .action-group {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 12px;
        }

        .btn-icon {
            background: none;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 4px;
            transition: transform 0.15s;
        }

        .btn-icon:hover { transform: scale(1.12); }
        .btn-edit { color: #3b82f6; }
        .btn-delete { color: #ef4444; }

        /* ================= MODAL HAPUS ================= */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background-color: rgba(44, 30, 20, 0.35);
            backdrop-filter: blur(3px);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 999;
            padding: 20px;
        }

        .modal-overlay.show { display: flex; }

        .modal-box {
            background-color: #ffffff;
            border-radius: 20px;
            max-width: 400px;
            width: 100%;
            padding: 30px 28px;
            text-align: center;
            position: relative;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .modal-close {
            position: absolute;
            top: 16px;
            right: 20px;
            background: none;
            border: none;
            font-size: 20px;
            color: #9b826e;
            cursor: pointer;
        }

        .modal-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fde8e8;
            color: #ef4444;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
        }

        .modal-box h3 { font-size: 18px; font-weight: 600; color: #2c1e14; margin-bottom: 8px; }
        .modal-box p { font-size: 13px; color: #8c735f; line-height: 1.5; }
        .modal-box p strong { color: #2c1e14; }

        .modal-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 24px;
        }

        .btn-cancel {
            padding: 10px 16px;
            border-radius: 12px;
            border: 1px solid #e6dcd0;
            background-color: #ffffff;
            color: #4a3525;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
        }

        .btn-cancel:hover { background-color: #f4eee6; }

        .btn-danger {
            padding: 10px 16px;
            border-radius: 12px;
            border: none;
            background-color: #ef4444;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
        }

        .btn-danger:hover { background-color: #dc2626; }

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

                <a href="{{ route('admin.menu.index') }}" class="nav-item active">
                    <svg viewBox="0 0 24 24">
                        <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"></path>
                        <path d="M7 2v20"></path>
                        <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"></path>
                    </svg>
                    Menu
                </a>

                <a href="{{ route('admin.subkategori') }}" class="nav-item">
                    <svg viewBox="0 0 24 24">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                    </svg>
                    Sub-Kategori
                </a>

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

        <div class="sidebar-footer">
            <div class="user-profile">
                <div class="user-info">
                    <div class="avatar-circle">A</div>
                    <div class="user-details">
                        <h4>Admin User</h4>
                        <p>Administrator</p>
                    </div>
                </div>
                <button class="logout-btn" title="Keluar">
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
        <header class="topbar">
            <div class="page-header">
                <h1>Data Menu</h1>
                <p>Kelola sajian menu restoran Anda dengan mudah.</p>
            </div>

            <div class="topbar-actions">
                <form action="{{ route('admin.menu.index') }}" method="GET" class="search-box">
                    @if(request('kategori'))
                        <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                    @endif
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari data menu...">
                </form>

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

        @if(session('success'))
            <div class="alert-success">
                <span>✓ {{ session('success') }}</span>
                <button onclick="this.parentElement.remove()" style="background:none;border:none;font-weight:bold;cursor:pointer;color:#15803d;">&times;</button>
            </div>
        @endif

        <section class="menu-card">
            <div class="card-header">
                <div>
                    <h2>Data Menu</h2>
                    <p>Daftar lengkap sajian makanan, minuman, dan camilan resto.</p>
                </div>

                <a href="{{ route('admin.menu.create') }}" class="btn-primary">
                    + Tambah Menu
                </a>
            </div>

            <!-- FILTER KATEGORI -->
            <div class="filter-bar">
                <span class="filter-label">Filter Kategori:</span>

                <a href="{{ route('admin.menu.index') }}"
                   class="filter-pill {{ is_null($kategoriAktif) ? 'active' : '' }}">
                    Semua ({{ $totalSemua }})
                </a>

                @foreach(['Makanan', 'Minuman', 'Desert'] as $kat)
                    <a href="{{ route('admin.menu.index', ['kategori' => $kat]) }}"
                       class="filter-pill {{ $kategoriAktif === $kat ? 'active' : '' }}">
                        {{ $kat }}
                    </a>
                @endforeach
            </div>

            <!-- TABEL MENU -->
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Nama Menu</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($menus as $menu)
                            <tr>
                                <td class="menu-name">{{ $menu->nama_menu }}</td>
                                <td>
                                    <span class="cat-badge">
                                        {{ $menu->subCategory->nama_sub_kategori ?? $menu->kategori_utama }}
                                    </span>
                                </td>
                                <td class="price-text">{{ $menu->harga_format }}</td>
                                <td>
                                    <span class="status-badge {{ $menu->status === 'Tersedia' ? 'status-tersedia' : 'status-habis' }}">
                                        {{ $menu->status }}
                                    </span>
                                </td>
                                <td>
                                    <div class="action-group">
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn-icon btn-edit" title="Edit Menu">
                                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </a>

                                        <!-- Tombol Hapus -->
                                        <button type="button"
                                                onclick="openDeleteModal({{ $menu->id }}, '{{ addslashes($menu->nama_menu) }}')"
                                                class="btn-icon btn-delete" title="Hapus Menu">
                                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" style="text-align:center; padding: 36px; color:#8c735f;">
                                    Belum ada data menu untuk kategori ini.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- MODAL KONFIRMASI HAPUS -->
    <div id="deleteModal" class="modal-overlay">
        <div class="modal-box">
            <button type="button" class="modal-close" onclick="closeDeleteModal()">&times;</button>

            <div class="modal-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                </svg>
            </div>

            <h3>Hapus Menu?</h3>
            <p>Yakin ingin menghapus menu "<strong id="deleteMenuName"></strong>"?</p>

            <form id="deleteForm" method="POST" class="modal-actions">
                @csrf
                @method('DELETE')
                <button type="button" class="btn-cancel" onclick="closeDeleteModal()">Batal</button>
                <button type="submit" class="btn-danger">Hapus</button>
            </form>
        </div>
    </div>

    <script>
        function openDeleteModal(id, namaMenu) {
            document.getElementById('deleteForm').action = `/admin/menu/${id}`;
            document.getElementById('deleteMenuName').textContent = namaMenu;
            document.getElementById('deleteModal').classList.add('show');
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.remove('show');
        }
    </script>
</body>
</html>