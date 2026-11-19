<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan | Daily Crave</title>

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
        }

        .main {
            margin-left: 303px;
            padding: 42px 50px;
            min-height: 100vh;
        }

        .header {
            margin-bottom: 30px;
        }

        .header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            color: #342215;
        }

        .header p {
            font-size: 13px;
            color: #947c69;
            margin-top: 5px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: #795f4c;
            text-decoration: none;
            font-size: 13px;
            margin-bottom: 22px;
        }

        .back-button:hover {
            color: #4b3020;
        }

        .detail-card {
            background: white;
            border: 1px solid #eee5da;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 22px;
        }

        .detail-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 21px;
            margin-bottom: 22px;
            color: #4b3020;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
        }

        .detail-item p {
            font-size: 11px;
            color: #927965;
            margin-bottom: 6px;
        }

        .detail-item h4 {
            font-size: 13px;
            font-weight: 500;
            color: #463326;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 13px;
            color: #927965;
            font-size: 11px;
            border-bottom: 1px solid #eee5da;
        }

        td {
            padding: 16px 13px;
            font-size: 12px;
            border-bottom: 1px solid #f3eee8;
        }

        .total {
            display: flex;
            justify-content: space-between;
            margin-top: 22px;
            padding-top: 17px;
            border-top: 1px solid #eee5da;
            font-size: 14px;
            font-weight: 600;
        }

        .status {
            display: inline-block;
            padding: 7px 13px;
            background: #f4eee6;
            color: #79583e;
            border-radius: 8px;
            font-size: 11px;
        }

        @media(max-width: 900px) {
            .main {
                margin-left: 220px;
                padding: 25px;
            }
        }

        @media(max-width: 600px) {
            .main {
                margin-left: 75px;
                padding: 20px;
            }

            .detail-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <!-- Gunakan sidebar yang sama dari index.blade.php -->

    <main class="main">

        <a href="{{ route('admin.pesanan') }}" class="back-button">
            <i class="fa-solid fa-arrow-left"></i>
            Kembali ke Pesanan
        </a>

        <div class="header">
            <h1>Detail Pesanan</h1>
            <p>Informasi lengkap pesanan pelanggan Daily Crave.</p>
        </div>

        <!-- INFORMASI PESANAN -->
        <div class="detail-card">

            <h3>Informasi Pesanan</h3>

            <div class="detail-grid">

                <div class="detail-item">
                    <p>ID Pesanan</p>
                    <h4>#ORD-092</h4>
                </div>

                <div class="detail-item">
                    <p>Tanggal Pesanan</p>
                    <h4>18 November 2026</h4>
                </div>

                <div class="detail-item">
                    <p>Nama Pelanggan</p>
                    <h4>Budi Santoso</h4>
                </div>

                <div class="detail-item">
                    <p>Status Pesanan</p>
                    <span class="status">Menunggu</span>
                </div>

            </div>

        </div>

        <!-- DETAIL MENU -->
        <div class="detail-card">

            <h3>Detail Menu Pesanan</h3>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Nama Menu</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Nasi Goreng Rempah</td>
                            <td>2</td>
                            <td>Rp45.000</td>
                            <td>Rp90.000</td>
                        </tr>

                        <tr>
                            <td>Es Kopi Susu</td>
                            <td>2</td>
                            <td>Rp28.000</td>
                            <td>Rp56.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="total">
                <span>Total Pembayaran</span>
                <span>Rp146.000</span>
            </div>

        </div>

    </main>

</body>
</html>