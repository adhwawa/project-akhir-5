<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Minuman - Daily Crave</title>
<style>
 {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background: #f8f5ef;
    color: #5d4635;
}

/* =========================
   NAVBAR
========================= */

nav {
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 7%;
    background: #faf8f4;
}

.logo {
    font-family: Georgia, serif;
    font-size: 25px;
    color: #68452f;
}

.logo small {
    display: block;
    font-family: Arial, sans-serif;
    font-size: 9px;
    letter-spacing: 4px;
    color: #9a7459;
    margin-top: 2px;
}

.nav-menu {
    display: flex;
    gap: 38px;
    align-items: center;
}

.nav-menu a {
    text-decoration: none;
    color: #8c6b55;
    font-size: 13px;
}

.nav-menu a.active {
    background: #71482d;
    color: white;
    padding: 13px 25px;
    border-radius: 25px;
}

/* =========================
   HERO
========================= */

.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;

    padding: 55px 7% 40px;

    background: #faf8f4;
}

.hero-text {
    width: 50%;
}

.small-title {
    font-size: 10px;
    letter-spacing: 3px;
    color: #a0785b;
    margin-bottom: 18px;
}

.small-title::before {
    content: "";
    display: inline-block;

    width: 35px;

    border-top: 1px solid #a0785b;

    margin-right: 8px;
    vertical-align: middle;
}

.hero h1 {
    font-family: Georgia, serif;
    font-weight: normal;

    font-size: 43px;
    line-height: 1.1;

    color: #684b37;
}

.hero p {
    margin-top: 20px;

    color: #8c7768;

    font-size: 13px;
    line-height: 1.7;
}

.hero-image {
    width: 39%;
    height: 245px;

    object-fit: cover;

    border-radius: 13px;
}


.hero-buttons {
    padding: 0 7% 25px;

    background: #faf8f4;
}

.hero-buttons a {
    display: inline-block;

    text-decoration: none;

    color: #71482d;
    background: #f0e5d7;

    padding: 8px 18px;

    border-radius: 20px;

    font-size: 10px;

    margin-right: 8px;

    transition: 0.2s;
}

.hero-buttons a:first-child {
    background: #71482d;
    color: white;
}

.hero-buttons a:hover {
    background: #71482d;
    color: white;
}

.content {
    padding: 25px 7% 70px;

    background: #faf8f4;
}

.section-header {
    display: flex;

    justify-content: space-between;
    align-items: center;

    margin-bottom: 15px;
}

.category {
    font-family: Georgia, serif;

    font-size: 25px;

    font-weight: normal;

    color: #624633;
}

.section-description {
    font-size: 9px;

    color: #a08a7b;
}

/* =========================
   DRINK CARD
========================= */

/* =========================
   DRINK CARD
========================= */

.drink-card {
    background: white;
    border: 1px solid #e7ddd2;
    border-radius: 7px;

    min-height: 110px;
    margin-bottom: 9px;
    padding: 9px;

    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;

    position: relative;
    transition: 0.2s;
}

.drink-card:hover {
    box-shadow: 0 5px 15px rgba(100, 70, 45, 0.10);
    transform: translateY(-1px);
}

/* GAMBAR DI SEBELAH KIRI */
.drink-image {
    display: block;

    width: 120px;
    height: 92px;

    object-fit: cover;
    border-radius: 5px;

    flex: 0 0 120px;
}

/* TULISAN DI SEBELAH KANAN */
.drink-info {
    flex: 1;
    min-width: 0;

    padding-left: 15px;
    padding-right: 45px;
}



.drink-name {
    font-family: Georgia, serif;

    font-size: 15px;

    color: #523b2c;

    margin-bottom: 3px;
}

.price {
    font-size: 10px;

    color: #704c35;

    margin-bottom: 9px;
}

.description {
    font-size: 9px;

    line-height: 1.5;

    color: #927e70;

    max-width: 800px;
}

/* =========================
   PLUS BUTTON
========================= */

.plus {
    position: absolute;

    right: 15px;
    top: 50%;

    transform: translateY(-50%);

    width: 21px;
    height: 21px;

    border: 1px solid #e2d8ce;

    border-radius: 50%;

    background: white;

    color: #8c6a53;

    cursor: pointer;
}

.plus:hover {
    background: #71482d;
    color: white;
}



footer {
    background: #f0e9dc;

    padding: 30px 7%;

    font-size: 8px;

    color: #9c8879;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 768px) {

    nav {
        height: auto;
        min-height: 80px;
        padding: 20px 5%;

        flex-direction: column;
        align-items: flex-start;

        gap: 18px;
    }

    .nav-menu {
        gap: 10px;
        flex-wrap: wrap;
    }

    .nav-menu a {
        font-size: 11px;
    }

    .nav-menu a.active {
        padding: 9px 15px;
    }

    .hero {
        flex-direction: column;

        gap: 30px;

        padding: 40px 5%;
    }

    .hero-text {
        width: 100%;
    }

    .hero h1 {
        font-size: 35px;
    }

    .hero-image {
        width: 100%;
        height: 200px;
    }

    .hero-buttons {
        padding: 0 5% 25px;
    }

    .content {
        padding: 25px 5% 50px;
    }

    .section-header {
        display: block;
    }

    .section-description {
        margin-top: 7px;
    }

    .drink-image {
        width: 100px;
        height: 82px;
    }

    .drink-info {
        padding-left: 12px;
        padding-right: 35px;
    }

    .drink-name {
        font-size: 14px;
    }

    .description {
        font-size: 8px;
    }
}
</style>

</head>

<body>

<!-- NAVBAR -->
<nav>

    <div class="logo">
        daily crave
        <small>FOOD & DRINK</small>
    </div>

    <div class="nav-menu">
        <a href="{{ route('dashboard') }}">Menu Kami</a>

        <a href="{{ route('dashboard') }}#makanan">
            Makanan
        </a>

        <a href="{{ route('minuman.index') }}" class="active">
            Minuman
        </a>

        <a href="{{ route('dashboard') }}#dessert">
            Desert
        </a>
    </div>

</nav>


<!-- HERO -->
<section class="hero">

    <div class="hero-text">

        <div class="small-title">
            MENU DIMEJA ANDA
        </div>

        <h1>
            Rasa yang akrab.<br>
            Momen yang hangat.
        </h1>

        <p>
            Jelajahi pilihan makanan, minuman, dan dessert.
            Pilihan rasa yang pas untuk menemani harimu.
        </p>

    </div>

    <img
        src="{{ asset('https://cdn-brilio-net.akamaized.net/news/2021/09/23/214006/2571601-1000xauto-resep-minuman-khas-nusantara.jpg') }}"
        class="hero-image"
        alt="Daily Crave">
</section>


<!-- BUTTON -->
<div class="hero-buttons">

    <a href="{{ route('minuman.index') }}">
        Coffee & Tea
        <span style="font-size: 7px; margin-left: 6px;">
            07
        </span>
    </a>


    <a href="#">
        Fresh Juice
    </a>


    <a href="#">
        Soft Drink
    </a>


    <span style="
        margin-left: auto;
        font-size: 7px;
        letter-spacing: 2px;
        color: #9b8879;
    ">
        DAFTAR MINUMAN DAILY CRAVE
    </span>

</div>


<!-- DAFTAR MINUMAN -->
<section class="content">

    <div class="section-header">

        <div>
            
            <div class="small-title">
                MINUMAN 05 PILIHAN
            </div>

            <h2 class="category">
                Coffee & Tea
            </h2>
        </div>

        <div class="section-description">
            Temukan pilihan minuman hangat dan menyegarkan.
        </div>

    </div>


    <!-- Jasmine Tea -->
    <div class="drink-card">

        <img
            src="{{ asset('images/jasmine-tea.jpg') }}"
            class="drink-image"
            alt="Jasmine Tea">

        <div class="drink-info">

            <div class="drink-name">
                Jasmine Tea [Ice/Hot]
            </div>

            <div class="price">
                Rp8.000
            </div>

            <div class="description">
                Teh melati yang diseduh dari daun teh pilihan dengan aroma bunga
                yang lembut. Disajikan dingin dengan es batu atau hangat.
            </div>

        </div>

        <button class="plus">+</button>

    </div>


    <!-- Teh Jeruk Nipis -->
    <div class="drink-card">

        <img
            src="{{ asset('images/teh-jeruk-nipis.jpg') }}"
            class="drink-image"
            alt="Teh Jeruk Nipis">

        <div class="drink-info">

            <div class="drink-name">
                Teh Jeruk Nipis [Ice/Hot]
            </div>

            <div class="price">
                Rp9.000
            </div>

            <div class="description">
                Teh dengan rasa segar jeruk nipis yang memberikan sensasi
                menyegarkan dan cocok dinikmati kapan saja.
            </div>

        </div>

        <button class="plus">+</button>

    </div>


    <!-- Lychee Tea -->
    <div class="drink-card">

        <img
            src="{{ asset('images/lychee-tea.jpg') }}"
            class="drink-image"
            alt="Lychee Tea">

        <div class="drink-info">

            <div class="drink-name">
                Lychee Tea [Ice/Hot]
            </div>

            <div class="price">
                Rp10.000
            </div>

            <div class="description">
                Teh yang dipadukan dengan lychee dan sirup buah yang lembut,
                menghasilkan rasa manis dan segar.
            </div>

        </div>

        <button class="plus">+</button>

    </div>


    <!-- Americano -->
    <div class="drink-card">

        <img
            src="{{ asset('images/americano.jpg') }}"
            class="drink-image"
            alt="Americano">

        <div class="drink-info">

            <div class="drink-name">
                Americano [Ice/Hot]
            </div>

            <div class="price">
                Rp15.000
            </div>

            <div class="description">
                Espresso dengan air yang memberikan cita rasa kopi yang
                lebih ringan namun tetap memiliki rasa khas kopi.
            </div>

        </div>

        <button class="plus">+</button>

    </div>


    <!-- Coffee Latte -->
    <div class="drink-card">

        <img
            src="{{ asset('images/coffee-latte.jpg') }}"
            class="drink-image"
            alt="Coffee Latte">

        <div class="drink-info">

            <div class="drink-name">
                Coffee Latte [Ice/Hot]
            </div>

            <div class="price">
                Rp15.000
            </div>

            <div class="description">
                Perpaduan espresso dengan susu steamed yang menghasilkan
                rasa lembut dan creamy dengan aroma kopi yang khas.
            </div>

        </div>

        <button class="plus">+</button>

    </div>


    <!-- Cappuccino -->
    <div class="drink-card">

        <img
            src="{{ asset('images/cappuccino.jpg') }}"
            class="drink-image"
            alt="Cappuccino">

        <div class="drink-info">

            <div class="drink-name">
                Cappuccino [Ice/Hot]
            </div>

            <div class="price">
                Rp16.000
            </div>

            <div class="description">
                Minuman kopi dengan perpaduan espresso, susu dan foam
                lembut yang menghasilkan rasa creamy dan nikmat.
            </div>

        </div>

        <button class="plus">+</button>

    </div>


    <!-- Mocaccino -->
    <div class="drink-card">

        <img
            src="{{ asset('images/mocaccino.jpg') }}"
            class="drink-image"
            alt="Mocaccino">

        <div class="drink-info">

            <div class="drink-name">
                Mocaccino [Ice/Hot]
            </div>

            <div class="price">
                Rp17.000
            </div>

            <div class="description">
                Perpaduan espresso, cokelat dan susu dengan rasa manis
                dan aroma kopi yang nikmat.
            </div>

        </div>

        <button class="plus">+</button>

    </div>

</section>


<footer>
    © 2026 Daily Crave — Food & Drink
</footer>

</body>
</html>