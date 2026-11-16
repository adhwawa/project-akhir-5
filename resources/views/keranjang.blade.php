<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang | Daily Crave</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f8f5ef;
            color: #403329;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            width: 84%;
            max-width: 1400px;
            margin: auto;
        }

        /* NAVBAR */

        header {
            height: 95px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: #403329;
        }

        .logo small {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 7px;
            letter-spacing: 3px;
            text-align: center;
        }

        .cart-button {
            text-decoration: none;
            color: #704c36;
            background: white;
            border: 1px solid #eadfd2;
            padding: 10px 18px;
            border-radius: 30px;
            font-size: 12px;
        }

        #cart-count {
            background: #f0e9df;
            padding: 3px 7px;
            border-radius: 50%;
            margin-left: 5px;
        }

        /* JUDUL */

        .navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            font-size: 10px;
            color: #967f6d;
        }

        .navigation a {
            text-decoration: none;
            color: #79563f;
        }

        .heading {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .heading p {
            font-size: 9px;
            letter-spacing: 2px;
            color: #926d50;
            margin-bottom: 5px;
        }

        .heading h1 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 400;
        }

        /* NOTIFIKASI */

        .notification {
            background: #f0e9df;
            padding: 15px;
            border-radius: 7px;
            font-size: 11px;
            margin-bottom: 20px;
        }

        .notification span {
            background: #79563f;
            color: white;
            padding: 3px 7px;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* CONTENT */

        .content {
            display: grid;
            grid-template-columns: 2fr 0.95fr;
            gap: 23px;
            align-items: start;
        }

        .card {
            background: white;
            border: 1px solid #eadfd2;
            border-radius: 12px;
            padding: 20px;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 21px;
            font-weight: 400;
            padding-bottom: 17px;
            border-bottom: 1px solid #eee5dc;
        }

        .title-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-more {
            color: #79563f;
            text-decoration: none;
            font-size: 10px;
        }

        /* ITEM KERANJANG */

        .cart-item {
            display: grid;
            grid-template-columns: 105px 1fr auto;
            align-items: center;
            gap: 16px;
            padding-top: 18px;
            padding-bottom: 18px;
            border-bottom: 1px solid #f0e9df;
        }

        .cart-item img {
            width: 105px;
            height: 105px;
            object-fit: cover;
            border-radius: 9px;
        }

        .item-info h3 {
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 8px;
        }

        .item-info p {
            color: #896448;
            font-size: 10px;
        }

        .item-info small {
            display: block;
            margin-top: 13px;
            color: #9a8a7d;
            font-size: 9px;
        }

        .item-action {
            text-align: right;
        }

        .item-price {
            color: #79563f;
            font-weight: 600;
            font-size: 12px;
            margin-bottom: 25px;
        }

        .quantity {
            display: flex;
            align-items: center;
            border: 1px solid #eee3d8;
            border-radius: 30px;
            padding: 4px;
            gap: 12px;
        }

        .quantity button {
            border: none;
            background: #f0e9df;
            color: #79563f;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            cursor: pointer;
        }

        .quantity span {
            font-size: 11px;
        }

        .remove {
            display: block;
            background: none;
            border: none;
            color: #a47b62;
            font-size: 10px;
            margin-top: 8px;
            cursor: pointer;
            width: 100%;
            text-align: right;
        }

        /* PEMBAYARAN */

        .payment {
            position: sticky;
            top: 20px;
        }

        .payment-row {
            display: flex;
            justify-content: space-between;
            margin-top: 18px;
            font-size: 10px;
            color: #897b70;
        }

        .payment-row strong {
            color: #403329;
            font-weight: 400;
        }

        .payment-total {
            border-top: 1px solid #eee5dc;
            margin-top: 20px;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .payment-total span {
            font-size: 11px;
            font-weight: 500;
        }

        .payment-total strong {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            color: #79563f;
            font-weight: 400;
        }

        .checkout {
            width: 100%;
            padding: 14px;
            border: none;
            background: #79563f;
            color: white;
            border-radius: 30px;
            margin-top: 20px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
        }

        .checkout:hover {
            background: #5d402e;
        }

        .payment-note {
            text-align: center;
            color: #97887d;
            font-size: 9px;
            line-height: 1.8;
            margin-top: 18px;
        }

        /* REKOMENDASI */

        .recommend {
            margin-top: 25px;
        }

        .recommend h2 {
            font-family: 'Playfair Display', serif;
            font-size: 21px;
            font-weight: 400;
        }

        .recommend > p {
            font-size: 10px;
            color: #97887d;
            margin-top: 5px;
        }

        .recommend-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 12px;
        }

        .recommend-item {
            background: white;
            border: 1px solid #eadfd2;
            border-radius: 11px;
            padding: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .recommend-item img {
            width: 72px;
            height: 76px;
            object-fit: cover;
            border-radius: 8px;
        }

        .recommend-info {
            flex: 1;
        }

        .recommend-info h3 {
            font-family: 'Playfair Display', serif;
            font-size: 14px;
            font-weight: 400;
        }

        .recommend-info p {
            font-size: 10px;
            color: #79563f;
            margin-top: 8px;
        }

        .recommend-item button {
            border: none;
            background: #f0e9df;
            color: #79563f;
            width: 23px;
            height: 23px;
            border-radius: 50%;
            cursor: pointer;
        }

        /* KOSONG */

        .empty {
            text-align: center;
            padding: 50px 10px;
            color: #897b70;
            font-size: 12px;
        }

        .empty h3 {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .empty a {
            display: inline-block;
            margin-top: 15px;
            background: #79563f;
            color: white;
            padding: 10px 22px;
            text-decoration: none;
            border-radius: 30px;
        }

        /* FOOTER */

        footer {
            margin-top: 100px;
            padding: 30px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        footer .tagline {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            color: #a18d7d;
            font-size: 13px;
        }

        footer small {
            font-size: 9px;
            color: #97887d;
        }

        @media(max-width: 768px) {
            .container {
                width: 92%;
            }

            .content {
                grid-template-columns: 1fr;
            }

            .payment {
                position: static;
            }

            .recommend-list {
                grid-template-columns: 1fr;
            }

            .cart-item {
                grid-template-columns: 75px 1fr;
            }

            .cart-item img {
                width: 75px;
                height: 85px;
            }

            .item-action {
                grid-column: 2;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .item-price {
                margin-bottom: 0;
            }

            footer {
                flex-wrap: wrap;
                gap: 15px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- NAVBAR -->
    <header>
        <div class="logo">
            ☼ daily crave
            <small>DAPUR & RUANG TEMU</small>
        </div>

        <a href="{{ route('keranjang') }}" class="cart-button">
            ♧ Keranjang
            <span id="cart-count">0</span>
        </a>
    </header>

    <!-- NAVIGASI -->
    <div class="navigation">
        <a href="{{ route('detailmenu', ['slug' => 'grill-chicken-steak']) }}">← Kembali ke menu</a>
        <span>Menu / Keranjang</span>
    </div>

    <!-- JUDUL -->
    <div class="heading">
        <p>PESANAN ANDA</p>
        <h1>Satu langkah menuju rasa.</h1>
    </div>

    <!-- NOTIFIKASI -->
    <div class="notification" id="notification">
        <span>✓</span>
        Pesanan berhasil ditambahkan ke keranjang.
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="left-content">

            <!-- RINGKASAN PESANAN -->
            <div class="card">
                <div class="title-row">
                    <h2 class="card-title">Ringkasan pesanan</h2>
                    <a href="{{ url('/menu') }}" class="add-more">
                        + Tambah pesanan
                    </a>
                </div>

                <div id="cart-items"></div>
            </div>

            <!-- REKOMENDASI -->
            <div class="recommend">

                <h2>Teman untuk hidangan Anda</h2>
                <p>Jelajahi rasa lainnya dari dapur Serambi.</p>

                <div class="recommend-list">

                    <div class="recommend-item">
                        <img src="{{ asset('images/spaghetti.jpg') }}" alt="Spaghetti Bolognese Katsu">

                        <div class="recommend-info">
                            <h3>Spaghetti Bolognese Katsu</h3>
                            <p>Rp58.000</p>
                        </div>

                        <button onclick="addRecommendation('Spaghetti Bolognese Katsu',58000,'{{ asset('images/spaghetti.jpg') }}')">
                            +
                        </button>
                    </div>

                    <div class="recommend-item">
                        <img src="{{ asset('images/sop-iga.jpg') }}" alt="Sop Iga">

                        <div class="recommend-info">
                            <h3>Sop Iga</h3>
                            <p>Rp74.000</p>
                        </div>

                        <button onclick="addRecommendation('Sop Iga',74000,'{{ asset('images/sop-iga.jpg') }}')">
                            +
                        </button>
                    </div>

                </div>
            </div>

        </div>

        <!-- RINGKASAN PEMBAYARAN -->
        <div class="card payment">

            <h2 class="card-title">Ringkasan pembayaran</h2>

            <div class="payment-row">
                <span id="subtotal-label">Subtotal · 0 menu</span>
                <strong id="subtotal">Rp0</strong>
            </div>

            <div class="payment-row">
                <span>Pajak Resto (PB1 10%)</span>
                <strong>Termasuk</strong>
            </div>

            <div class="payment-row">
                <span>Biaya Layanan Meja</span>
                <strong style="color:green">GRATIS</strong>
            </div>

            <div class="payment-total">
                <span>Total</span>
                <strong id="total">Rp0</strong>
            </div>

            <button class="checkout" onclick="checkout()">
                Lanjutkan Pesanan &nbsp; →
            </button>

            <p class="payment-note">
                Periksa menu dan catatan Anda sebelum
                melanjutkan ke konfirmasi pesanan.
            </p>

        </div>

    </div>

    <!-- FOOTER -->
    <footer>
        <div class="logo">
            ☼ daily crave
            <small>DAPUR & RUANG TEMU</small>
        </div>

        <p class="tagline">
            Rasa yang dekat, cerita yang hangat.
        </p>

        <small>© 2026 Daily Crave</small>
    </footer>

</div>

<script>

let cart = JSON.parse(localStorage.getItem('dailyCraveCart')) || [];

function formatRupiah(number) {
    return 'Rp' + number.toLocaleString('id-ID');
}

function saveCart() {
    localStorage.setItem('dailyCraveCart', JSON.stringify(cart));
}

function renderCart() {

    const container = document.getElementById('cart-items');

    container.innerHTML = '';

    let subtotal = 0;
    let totalQty = 0;

    if (cart.length === 0) {

        container.innerHTML = `
            <div class="empty">
                <h3>Keranjang Anda masih kosong.</h3>
                <p>Silakan pilih hidangan favorit Anda.</p>
                <a href="{{ url('/menu') }}">Jelajahi Menu</a>
            </div>
        `;

    }

    cart.forEach((item, index) => {

        subtotal += item.price * item.qty;
        totalQty += item.qty;

        container.innerHTML += `
            <div class="cart-item">

                <img src="${item.image}" alt="${item.name}">

                <div class="item-info">
                    <h3>${item.name}</h3>
                    <p>${formatRupiah(item.price)}</p>

                    <small>
                        ${item.note ? 'Catatan: ' + item.note : '1 porsi'}
                    </small>
                </div>

                <div class="item-action">

                    <p class="item-price">
                        ${formatRupiah(item.price * item.qty)}
                    </p>

                    <div class="quantity">

                        <button onclick="changeQty(${index},-1)">−</button>

                        <span>${item.qty}</span>

                        <button onclick="changeQty(${index},1)">+</button>

                    </div>

                    <button class="remove"
                        onclick="removeItem(${index})">
                        Hapus
                    </button>

                </div>

            </div>
        `;
    });

    document.getElementById('cart-count').textContent = totalQty;

    document.getElementById('subtotal-label').textContent =
        'Subtotal · ' + totalQty + ' menu';

    document.getElementById('subtotal').textContent =
        formatRupiah(subtotal);

    document.getElementById('total').textContent =
        formatRupiah(subtotal);

    saveCart();
}

function changeQty(index, amount) {

    cart[index].qty += amount;

    if (cart[index].qty <= 0) {
        cart.splice(index, 1);
    }

    renderCart();
}

function removeItem(index) {

    cart.splice(index, 1);

    renderCart();
}

function addRecommendation(name, price, image) {

    const existing = cart.find(item => item.name === name);

    if (existing) {
        existing.qty++;
    } else {
        cart.push({
            name: name,
            price: price,
            image: image,
            qty: 1,
            note: ''
        });
    }

    renderCart();

    document.getElementById('notification').style.display = 'block';
}

function checkout() {

    if (cart.length === 0) {
        alert('Keranjang Anda masih kosong!');
        return;
    }

    alert('Pesanan Anda siap dilanjutkan ke konfirmasi!');
}

renderCart();

</script>

</body>
</html>
