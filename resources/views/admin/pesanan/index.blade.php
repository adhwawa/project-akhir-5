
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Crave - Data Pesanan</title>
    
    <link rel="icon" type="image/png" href="{{ asset('gambar/favicon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
        
        /* ===== TABEL PESANAN ===== */

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
        }

        table th:nth-child(1),
        table td:nth-child(1) {
            width: 12%;
        }

        table th:nth-child(2),
        table td:nth-child(2) {
            width: 14%;
        }

        table th:nth-child(3),
        table td:nth-child(3) {
            width: 32%;
        }

        table th:nth-child(4),
        table td:nth-child(4) {
            width: 14%;
        }

        table th:nth-child(5),
        table td:nth-child(5) {
            width: 16%;
        }

        table th:nth-child(6),
        table td:nth-child(6) {
            width: 12%;
        }

        /* Header tabel */
        table thead th {
            padding: 16px 12px;
            text-align: left;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            color: #987b64;
            border-bottom: 1px solid #eee4da;
            white-space: nowrap;
        }

        /* Isi tabel */
        table tbody td {
            padding: 19px 12px;
            font-size: 14px;
            color: #382719;
            border-bottom: 1px solid #f0e9e2;
            vertical-align: middle;
        }

        /* Baris tabel */
        table tbody tr {
            height: 70px;
        }

        /* Nama item */
        table tbody td:nth-child(3) {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* Dropdown status */
        table select {
            width: 135px;
            padding: 10px 12px;
            border: 1px solid #eadbcd;
            border-radius: 10px;
            background: white;
            color: #65452f;
            font-size: 13px;
        }

        /* Tombol detail */
        table td a {
            color: #704b32;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        table td a:hover {
            color: #a47750;
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
                    <i class="fa-solid fa-border-all"></i>
                    Dashboard
                </a>

                <a href="{{ route('admin.menu.index') }}" class="nav-item">
                    <i class="fa-solid fa-utensils"></i>
                    Menu
                </a>

                <a href="{{ route('admin.subkategori.index') }}" class="nav-item">
                    <i class="fa-solid fa-tags"></i>
                    Sub-Kategori
                </a>

                <a href="{{ route('admin.pesanan') }}" class="nav-item active">
                    <i class="fa-regular fa-clipboard"></i>
                    Pesanan
                </a>

                <a href="{{ route('admin.pembayaran.index') }}" class="nav-item">
                    <i class="fa-regular fa-credit-card"></i>
                    Pembayaran
                </a>

                <a href="{{ route('admin.pelanggan.index') }}" class="nav-item">
                    <i class="fa-solid fa-users"></i>
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
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </div>
        </div>
    </aside>

    <!-- HALAMAN UTAMA -->
    <main class="main">

        <!-- HEADER -->
        <div class="header">

            <div>
                <h1>Pesanan</h1>
                <p>Kelola data pesanan restoran Anda.</p>
            </div>

            <div class="header-right">
                <input type="text"
                    class="search"
                    id="searchInput"
                    placeholder="⌕  Cari di Pesanan...">

                <i class="fa-regular fa-bell"></i>
                <i class="fa-solid fa-circle-user"></i>
            </div>

        </div>

        <!-- TABEL PESANAN -->
        <section class="content">

            <h3>Kelola Pesanan</h3>

            <table id="orderTable">

                <thead>
                    <tr>
                        <th>ID Pesanan</th>
                        <th>Pelanggan</th>
                        <th>Item</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>#ORD-092</td>
                        <td>Budi Santoso</td>
                        <td>Nasi Goreng Rempah (x2), Es Kopi Susu...</td>
                        <td>Rp146.000</td>
                        <td>
                            <select class="status">
                                <option selected>Menunggu</option>
                                <option>Diproses</option>
                                <option>Selesai</option>
                                <option>Dibatalkan</option>
                            </select>
                        </td>
                        <td>
                            <a href="{{ route('admin.pesanan.form', ['id' => 92]) }}" class="detail-link">
                                Lihat Detail
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>#ORD-091</td>
                        <td>Siti Aminah</td>
                        <td>Pasta Truffle, Lemonade</td>
                        <td>Rp105.000</td>
                        <td>
                            <select class="status">
                                <option>Menunggu</option>
                                <option selected>Diproses</option>
                                <option>Selesai</option>
                                <option>Dibatalkan</option>
                            </select>
                        </td>
                        <td>
                            <a href="{{ route('admin.pesanan.form', ['id' => 91]) }}" class="detail-link">
                                Lihat Detail
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>#ORD-090</td>
                        <td>Andi Wijaya</td>
                        <td>Croissant Butter, Hot Cappuccino</td>
                        <td>Rp60.000</td>
                        <td>
                            <select class="status">
                                <option>Menunggu</option>
                                <option>Diproses</option>
                                <option selected>Selesai</option>
                                <option>Dibatalkan</option>
                            </select>
                        </td>
                        <td>
                            <a href="{{ route('admin.pesanan.form', ['id' => 90]) }}" class="detail-link">
                                Lihat Detail
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>#ORD-089</td>
                        <td>Rina Melati</td>
                        <td>Matcha Latte (x3)</td>
                        <td>Rp105.000</td>
                        <td>
                            <select class="status">
                                <option>Menunggu</option>
                                <option>Diproses</option>
                                <option>Selesai</option>
                                <option selected>Dibatalkan</option>
                            </select>
                        </td>
                        <td>
                            <a href="{{ route('admin.pesanan.form', ['id' => 89]) }}" class="detail-link">
                                Lihat Detail
                            </a>
                        </td>
                    </tr>

                </tbody>

            </table>

        </section>

    </main>

    <!-- FITUR PENCARIAN -->
    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {

            let keyword = this.value.toLowerCase();

            let rows = document.querySelectorAll('#orderTable tbody tr');

            rows.forEach(function(row) {

                let data = row.innerText.toLowerCase();

                row.style.display = data.includes(keyword) ? '' : 'none';

            });

        });
    </script>

</body>
</html>
