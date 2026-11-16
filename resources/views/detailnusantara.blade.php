
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $menu['nama'] }} - Daily Crave</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f3f1ed;
            color: #553b2b;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            min-height: 100vh;
            background: #f8f5f0;
            padding: 0 5.5%;
        }

        /* HEADER */

        .navbar {
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            color: #68452f;
            font-family: 'Playfair Display', serif;
            font-size: 21px;
        }

        .brand small {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 6px;
            letter-spacing: 2px;
        }

        .cart-button {
            background: white;
            border: 1px solid #eee5da;
            border-radius: 30px;
            padding: 9px 17px;
            color: #76543d;
            font-size: 11px;
            text-decoration: none;
        }

        /* BREADCRUMB */

        .breadcrumb {
            display: flex;
            justify-content: space-between;
            margin: 8px 0 30px;
            font-size: 10px;
            color: #987d67;
        }

        .breadcrumb a {
            color: #806044;
            text-decoration: none;
        }

        /* PAGE TITLE */

        .page-heading {
            margin-bottom: 18px;
        }

        .page-heading p {
            color: #a58c76;
            font-size: 10px;
            letter-spacing: 2px;
            margin-bottom: 5px;
        }

        .page-heading h1 {
            font-family: 'Playfair Display', serif;
            font-size: 27px;
            font-weight: 400;
            color: #4d382b;
        }

        /* DETAIL CARD */

        .detail-card {
            display: grid;
            grid-template-columns: 45% 55%;
            background: white;
            border: 1px solid #eee5da;
            border-radius: 17px;
            overflow: hidden;
            min-height: 395px;
        }

        .food-image {
            width: 100%;
            height: 100%;
            min-height: 395px;
            object-fit: cover;
        }

        .detail-content {
            padding: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .category {
            font-size: 9px;
            letter-spacing: 2px;
            color: #9a7658;
            margin-bottom: 5px;
        }

        .category::before {
            content: "";
            display: inline-block;
            width: 15px;
            height: 1px;
            background: #a98b70;
            vertical-align: middle;
            margin-right: 7px;
        }

        .food-name {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            font-weight: 400;
            color: #49372b;
            margin-bottom: 4px;
        }

        .food-price {
            font-size: 16px;
            font-weight: 600;
            color: #895d40;
            margin-bottom: 12px;
        }

        .description {
            font-size: 11px;
            line-height: 1.9;
            color: #81756a;
            padding-bottom: 16px;
            border-bottom: 1px solid #eee6dd;
        }

        /* NOTES */

        .note-section {
            margin-top: 15px;
        }

        .note-heading {
            display: flex;
            justify-content: space-between;
            margin-bottom: 7px;
            font-size: 10px;
        }

        .note-heading span:last-child {
            color: #a89a8c;
            font-size: 9px;
        }

        textarea {
            width: 100%;
            height: 65px;
            resize: none;
            padding: 12px;
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            color: #604733;
            background: #fcfaf7;
            border: 1px solid #eee4d9;
            border-radius: 7px;
            outline: none;
        }

        textarea:focus {
            border-color: #a98b70;
        }

        textarea::placeholder {
            color: #b9aa9b;
        }

        /* QUANTITY */

        .order-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 15px 0;
        }

        .order-section label {
            font-size: 10px;
        }

        .quantity {
            display: flex;
            align-items: center;
            gap: 17px;
            background: white;
            border: 1px solid #eee5da;
            border-radius: 30px;
            padding: 5px 9px;
        }

        .quantity button {
            width: 18px;
            height: 18px;
            border: none;
            border-radius: 50%;
            background: #f5f0e8;
            color: #806044;
            font-size: 13px;
            cursor: pointer;
        }

        .quantity span {
            font-size: 11px;
            min-width: 10px;
            text-align: center;
        }

        /* ADD TO CART */

        .add-cart {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: none;
            border-radius: 30px;
            background: #79543b;
            color: white;
            padding: 12px 17px;
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            cursor: pointer;
            transition: .3s;
        }

        .add-cart:hover {
            background: #5d3d2a;
        }

        /* FOOTER */

        footer {
            text-align: center;
            padding: 23px 0;
            color: #a18a75;
            font-family: 'Playfair Display', serif;
            font-size: 13px;
            font-style: italic;
        }

        /* RESPONSIVE */

        @media(max-width: 700px) {

            .container {
                padding: 0 18px;
            }

            .breadcrumb {
                flex-direction: column;
                gap: 8px;
            }

            .page-heading h1 {
                font-size: 23px;
            }

            .detail-card {
                grid-template-columns: 1fr;
            }

            .food-image {
                height: 260px;
                min-height: 260px;
            }

            .detail-content {
                padding: 22px;
            }

            .food-name {
                font-size: 23px;
            }

            footer {
                font-size: 11px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- HEADER -->

    <nav class="navbar">

        <div class="brand">
            ☼ daily crave
            <small>FOOD & DRINK</small>
        </div>

        <a href="#" class="cart-button">
            ♧ &nbsp; Keranjang &nbsp; 0
        </a>

    </nav>


    <!-- BREADCRUMB -->

    <div class="breadcrumb">

        <a href="{{ route('maincourse') }}">
            ← &nbsp; Kembali ke menu
        </a>

        <span>
            Menu / Hidangan Utama / {{ $menu['nama'] }}
        </span>

    </div>


    <!-- PAGE HEADING -->

    <div class="page-heading">

        <p>DARI DAPUR SERAMBI</p>

        <h1>Pilihan yang menggugah selera.</h1>

    </div>


    <!-- DETAIL MENU -->

    <form action="{{ route('keranjang.add') }}" method="POST" id="orderForm">

        @csrf

        <input type="hidden" name="menu" value="{{ $slug }}">
        <input type="hidden" name="jumlah" id="quantityInput" value="1">

        <div class="detail-card">

            <!-- FOOD IMAGE -->

            <img
                src="{{ asset($menu['gambar']) }}"
                alt="{{ $menu['nama'] }}"
                class="food-image"
            >


            <!-- MENU INFORMATION -->

            <div class="detail-content">

                <div class="category">
                    {{ $menu['kategori'] }}
                </div>

                <h2 class="food-name">
                    {{ $menu['nama'] }}
                </h2>

                <div class="food-price">
                    Rp{{ number_format($menu['harga'], 0, ',', '.') }}
                </div>

                <p class="description">
                    {{ $menu['deskripsi'] }}
                </p>


                <!-- NOTES -->

                <div class="note-section">

                    <div class="note-heading">

                        <label for="catatan">
                            **Catatan untuk dapur
                        </label>

                        <span>Opsional</span>

                    </div>

                    <textarea
                        name="catatan"
                        id="catatan"
                        placeholder="Contoh: saus dipisah, ya."
                    ></textarea>

                </div>


                <!-- QUANTITY -->

                <div class="order-section">

                    <label>Jumlah pesanan</label>

                    <div class="quantity">

                        <button type="button" onclick="changeQty(-1)">
                            −
                        </button>

                        <span id="quantity">1</span>

                        <button type="button" onclick="changeQty(1)">
                            +
                        </button>

                    </div>

                </div>


                <!-- ADD TO CART -->

                <button type="submit" class="add-cart">

                    <span>＋ &nbsp; Tambah ke Keranjang</span>

                    <strong id="totalPrice">
                        Rp{{ number_format($menu['harga'], 0, ',', '.') }}
                    </strong>

                </button>

            </div>

        </div>

    </form>


    <!-- FOOTER -->

    <footer>
        ♧ &nbsp; Disiapkan dengan sepenuh hati, untuk setiap momen di Daily Crave.
    </footer>

</div>


<!-- QUANTITY SCRIPT -->

<script>

    const price = {{ $menu['harga'] }};
    let qty = 1;

    function changeQty(value) {

        qty += value;

        if (qty < 1) {
            qty = 1;
        }

        document.getElementById('quantity').innerText = qty;

        document.getElementById('quantityInput').value = qty;

        document.getElementById('totalPrice').innerText =
            'Rp' + (price * qty).toLocaleString('id-ID');

    }

</script>

</body>
</html>
