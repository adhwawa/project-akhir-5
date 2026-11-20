
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Crave - Data Pesanan</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #fbf9f6;
            color: #3f2b1e;
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 303px;
            min-width: 303px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #f4eee6;
            border-right: 1px solid #e9dfd3;
            padding: 30px 23px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            z-index: 100;
        }

        .sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 8px 45px;
        }

        .brand {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            color: #4b3020;
            line-height: 1.5;
        }

        .brand small {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 8px;
            letter-spacing: 2px;
            color: #967d69;
        }

        .admin-badge {
            background: #e9ded1;
            color: #79583e;
            padding: 6px 13px;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 600;
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
            gap: 16px;
            padding: 17px 21px;
            border-radius: 16px;
            text-decoration: none;
            color: #795f4c;
            font-size: 14px;
            font-weight: 500;
            transition: .3s;
        }

        .nav-item i {
            width: 20px;
            text-align: center;
            font-size: 18px;
        }

        .nav-item:hover {
            background: #eee5da;
            color: #593c29;
        }

        .nav-item.active {
            background: #6b4b34;
            color: white;
            font-weight: 600;
            box-shadow: 0 5px 12px rgba(70, 45, 27, .15);
        }

        /* FOOTER SIDEBAR */
        .sidebar-footer {
            border-top: 1px solid #e4d9cd;
            padding: 22px 7px 0;
        }

        .user-profile {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .avatar-circle {
            width: 44px;
            height: 44px;
            background: #68472f;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            font-weight: 600;
        }

        .user-details h4 {
            font-size: 13px;
            font-weight: 600;
            color: #392719;
        }

        .user-details p {
            font-size: 11px;
            color: #927b67;
            margin-top: 3px;
        }

        .logout-btn {
            background: transparent;
            border: none;
            color: #e34b43;
            font-size: 17px;
            cursor: pointer;
        }

        /* MAIN CONTENT */
        .main {
            margin-left: 303px;
            width: calc(100% - 303px);
            min-height: 100vh;
            padding: 42px 50px;
            display: flex;
            flex-direction: column;
        }

        /* HEADER */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 35px;
            gap: 20px;
        }

        .header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 600;
            color: #342215;
            margin-bottom: 5px;
        }

        .header p {
            font-size: 14px;
            color: #947c69;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .search {
            width: 305px;
            height: 45px;
            border: 1px solid #e8ddd1;
            border-radius: 25px;
            background: #f5efe7;
            padding: 0 20px;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            color: #5b4433;
            outline: none;
        }

        .search:focus {
            border-color: #8a6850;
        }

        .header-right i {
            font-size: 19px;
            color: #684b36;
            cursor: pointer;
        }

        /* CARD PESANAN */
        .content {
            width: 100%;
            min-height: 380px;
            background: #fff;
            border: 1px solid #eee5da;
            border-radius: 23px;
            padding: 35px 37px;
            box-shadow: 0 5px 20px rgba(80, 55, 35, .025);
            overflow-x: auto;
        }

        .content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 600;
            color: #382517;
            margin-bottom: 22px;
        }

        /* TABEL */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            text-align: left;
            padding: 17px 14px;
            border-bottom: 1px solid #eee5da;
            color: #927965;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        tbody td {
            padding: 20px 14px;
            border-bottom: 1px solid #f3eee8;
            font-size: 12px;
            color: #463326;
        }

        tbody tr:hover {
            background: #fcfaf7;
        }

        tbody td:first-child {
            font-weight: 600;
        }

        /* DROPDOWN STATUS */
        .status {
            min-width: 115px;
            padding: 8px 12px;
            border: 1px solid #e8ddd1;
            border-radius: 9px;
            background: white;
            color: #634a37;
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            cursor: pointer;
            outline: none;
        }

        .status:focus {
            border-color: #8a6850;
        }

        /* TOMBOL DETAIL */
        .detail-link {
            color: #79583e;
            text-decoration: none;
            font-size: 12px;
            font-weight: 500;
        }

        .detail-link:hover {
            color: #4b3020;
            text-decoration: underline;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .sidebar {
                width: 220px;
                min-width: 220px;
            }

            .main {
                margin-left: 220px;
                width: calc(100% - 220px);
                padding: 25px;
            }

            table {
                min-width: 750px;
            }
        }

        @media (max-width: 600px) {
            .sidebar {
                width: 75px;
                min-width: 75px;
                padding: 20px 8px;
            }

            .brand,
            .admin-badge,
            .nav-item:not(.active),
            .user-details {
                display: none;
            }

            .nav-item {
                justify-content: center;
                padding: 15px 5px;
            }

            .main {
                margin-left: 75px;
                width: calc(100% - 75px);
                padding: 20px 15px;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .search {
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

                <a href="#" class="nav-item">
                    <i class="fa-regular fa-credit-card"></i>
                    Pembayaran
                </a>

                <a href="#" class="nav-item">
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
