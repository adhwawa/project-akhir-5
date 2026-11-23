{{-- <!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Crave - {{ $mode === 'edit' ? 'Edit' : 'Tambah' }} Sub Kategori</title>
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
            gap: 20px;
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

        .notif-btn {
            position: relative;
            background: none;
            border: none;
            cursor: pointer;
            color: #6b4c35;
            display: flex;
            align-items: center;
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

        /* BACK LINK */
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            font-size: 12.5px;
            font-weight: 500;
            color: #7a624f;
            width: fit-content;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: #3d2819;
        }

        /* FORM CARD */
        .form-card {
            background-color: #ffffff;
            border: 1px solid #f0e8de;
            border-radius: 20px;
            padding: 32px 36px;
            box-shadow: 0 4px 20px rgba(74, 53, 37, 0.03);
        }

        .form-card-header {
            margin-bottom: 26px;
        }

        .form-card-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-weight: 600;
            color: #2c1e14;
            margin-bottom: 4px;
        }

        .form-card-header p {
            font-size: 12.5px;
            color: #8c735f;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            font-size: 12.5px;
            font-weight: 500;
            color: #3d2819;
            margin-bottom: 8px;
        }

        .form-group label span.req {
            color: #dc2626;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e2d7c8;
            border-radius: 12px;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            color: #3d2819;
            background-color: #ffffff;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-control:focus {
            border-color: #6b4c35;
            box-shadow: 0 0 0 3px rgba(107, 76, 53, 0.08);
        }

        .form-control[readonly] {
            background-color: #f5f2ed;
            color: #7a624f;
            border-color: #ebe3d8;
            cursor: not-allowed;
        }

        .field-hint {
            display: block;
            font-size: 11px;
            color: #9b826e;
            margin-top: 6px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 12px;
            margin-top: 32px;
            padding-top: 20px;
            border-top: 1px solid #f4eee6;
        }

        .btn-batal {
            padding: 11px 22px;
            border-radius: 10px;
            border: 1px solid #e2d7c8;
            background-color: #ffffff;
            color: #4a3525;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-batal:hover {
            background-color: #f8f4ef;
        }

        .btn-submit {
            padding: 11px 24px;
            border-radius: 10px;
            border: none;
            background-color: #6b4c35;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(107, 76, 53, 0.18);
            transition: background 0.2s;
        }

        .btn-submit:hover {
            background-color: #583d29;
        }

        @media (max-width: 768px) {
            body { flex-direction: column; }
            .sidebar { width: 100%; border-right: none; border-bottom: 1px solid #e8dfd3; }
            .main-content { padding: 24px 20px; }
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

        <div class="sidebar-footer">
            <div class="user-info">
                <div class="avatar-circle">A</div>
                <div class="user-details">
                    <h4>Admin User</h4>
                    <p>Administrator</p>
                </div>
            </div>

            <form action="{{ route('admin.logout') }}" method="POST" style="margin:0;">
                @csrf
                <button type="submit" class="logout-link">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    Keluar
                </button>
            </form>

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
                <p>{{ $mode === 'edit' ? 'Perbarui data sub kategori restoran Anda.' : 'Kelola struktur menu restoran Anda.' }}</p>
            </div>

            <div class="topbar-actions">
                <form action="{{ route('admin.subkategori.index') }}" method="GET" class="search-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="text" name="search" placeholder="Cari di Sub Kategori...">
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

        <a href="{{ route('admin.subkategori.index') }}" class="back-link">
            <span>&larr;</span> Kembali ke Daftar Sub Kategori
        </a>

        <!-- FORM CARD -->
        <section class="form-card">
            <div class="form-card-header">
                <h2>{{ $mode === 'edit' ? 'Edit Sub Kategori' : 'Tambah Sub Kategori' }}</h2>
                <p>
                    @if($mode === 'edit')
                        Perbarui rincian informasi untuk sub kategori "{{ $subKategori->nama }}".
                    @else
                        Isi rincian informasi sub kategori di bawah ini.
                    @endif
                </p>
            </div>

            <form action="{{ $mode === 'edit' ? route('admin.subkategori.update', $subKategori->id) : route('admin.subkategori.store') }}" method="POST">
                @csrf
                @if($mode === 'edit')
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label>Kategori Utama <span class="req">*</span></label>
                    <select name="kategori" class="form-control" required>
                        <option value="" disabled {{ old('kategori', $subKategori->kategori ?? '') === '' ? 'selected' : '' }}>Pilih Kategori Induk</option>
                        <option value="Makanan" {{ old('kategori', $subKategori->kategori ?? '') === 'Makanan' ? 'selected' : '' }}>Makanan</option>
                        <option value="Minuman" {{ old('kategori', $subKategori->kategori ?? '') === 'Minuman' ? 'selected' : '' }}>Minuman</option>
                        <option value="Dessert" {{ old('kategori', $subKategori->kategori ?? '') === 'Dessert' ? 'selected' : '' }}>Dessert</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Sub Kategori <span class="req">*</span></label>
                    <input type="text" id="namaInput" name="nama" class="form-control"
                           value="{{ old('nama', $subKategori->nama ?? '') }}"
                           placeholder="Contoh: Comfort Food" required>
                </div>

                <div class="form-group">
                    <label>URL (Otomatis)</label>
                    <input type="text" id="slugInput" name="slug" class="form-control"
                           value="{{ old('slug', isset($subKategori->slug) ? ltrim($subKategori->slug, '/') : '') }}"
                           readonly>
                    <span class="field-hint">URL digunakan untuk tautan pada website pelanggan dan dibuat secara otomatis.</span>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="Tersedia" {{ old('status', $subKategori->status ?? 'Tersedia') === 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="Tidak Tersedia" {{ old('status', $subKategori->status ?? '') === 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-actions">
                    <a href="{{ route('admin.subkategori.index') }}" class="btn-batal">Batal</a>
                    <button type="submit" class="btn-submit">
                        {{ $mode === 'edit' ? 'Simpan Perubahan' : 'Simpan Sub Kategori' }}
                    </button>
                </div>
            </form>
        </section>
    </main>

    <script>
        const namaInput = document.getElementById('namaInput');
        const slugInput = document.getElementById('slugInput');

        namaInput.addEventListener('input', function () {
            const slug = this.value
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');
            slugInput.value = slug;
        });
    </script>

</body>

</html> --}}