<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dessert - Daily Crave</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f5ef;
            color: #5d4635;
        }


        /*NAVBAR*/

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


        /*HERO */

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

            line-height: 1.6;
        }

        .hero-image {
            width: 39%;

            height: 245px;

            object-fit: cover;

            border-radius: 13px;
        }


        /*CATEGORY BAR*/

        .hero-buttons {
            min-height: 45px;

            display: flex;

            align-items: center;

            padding: 0 7%;

            background: white;

            border-top: 1px solid #eee7df;

            border-bottom: 1px solid #eee7df;
        }

        .hero-buttons a {
            text-decoration: none;

            color: #5d4635;

            padding: 8px 18px;

            border-radius: 20px;

            font-size: 10px;

            margin-right: 10px;
        }

        .hero-buttons a.active {
            color: white;

            background: #71482d;
        }

        .category-note {
            margin-left: auto;

            font-size: 7px;

            letter-spacing: 2px;

            color: #9b8879;
        }


        /*CONTENT*/

        .content {
            padding: 25px 7% 70px;

            background: #faf8f4;
        }


        /* DESSERT PANEL*/

        .category-section {
            background: #f4eadc;

            border-radius: 18px;

            padding: 24px 28px 18px;

            margin-bottom: 22px;
        }


        /*SECTION HEADER*/

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


        /*DESSERT CARD*/

        .drink-card {
            background: white;

            border: 1px solid #e7ddd2;

            border-radius: 7px;

            min-height: 110px;

            margin-bottom: 9px;

            padding: 9px;

            display: flex;

            align-items: center;

            position: relative;
        }


        /* IMAGE*/

        .drink-image {
            width: 120px;

            height: 92px;

            object-fit: cover;

            border-radius: 5px;

            flex-shrink: 0;
        }


        /*INFORMATION*/

        .drink-info {
            padding-left: 15px;

            padding-right: 40px;
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


        /*PLUS BUTTON*/

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


        /* FOOTER*/

        footer {
            background: #f0e9dc;

            padding: 30px 7%;

            font-size: 8px;

            color: #9c8879;
        }


        /*RESPONSIVE*/

        @media (max-width: 768px) {

            .hero {
                flex-direction: column;

                gap: 30px;
            }

            .hero-text,
            .hero-image {
                width: 100%;
            }

            .nav-menu {
                gap: 10px;
            }

            .category-section {
                padding: 20px 15px;
            }

            .section-header {
                display: block;
            }

            .section-description {
                margin-top: 8px;
            }

            .drink-image {
                width: 90px;

                height: 80px;
            }

        }

    </style>

</head>


<body>


<!-- NAVBAR -->

<nav>

    <div class="logo">

        daily crave

        <small>
            FOOD & DRINK
        </small>

    </div>


    <div class="nav-menu">

        <a href="{{ route('dashboard') }}">
            Menu Kami
        </a>


        <a href="{{ route('dashboard') }}#makanan">
            Makanan
        </a>


        <a href="{{ route('minuman.index') }}">
            Minuman
        </a>


        <a href="{{ route('dessert.index') }}" class="active">
            Dessert
        </a>

    </div>

</nav>



<!--HERO-->

<section class="hero">

    <div class="hero-text">

        <div class="small-title">
            MENU DI MEJA ANDA
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
        src="{{ asset('images/minuman-hero.jpg') }}"
        class="hero-image"
        alt="Daily Crave">

</section>



<!-- CATEGORY BAR-->

<div class="hero-buttons">

    <a
        href="{{ route('dessert.index') }}"
        class="active">

        Dessert

    </a>


    <span class="category-note">
        DAFTAR DESSERT DAILY CRAVE
    </span>

</div>



<!-- =========================
     DESSERT
========================= -->

<section class="content">

    <div class="category-section">


        <!-- HEADER -->

        <div class="section-header">

            <div>

                <div class="small-title">
                    DESSERT — 03 PILIHAN
                </div>

                <h2 class="category">
                    Dessert
                </h2>

            </div>


            <div class="section-description">
                Temukan pilihan penutup untuk waktu bersantai Anda.
            </div>

        </div>



        <!--BUAH POTONG-->

        <div class="drink-card">

            <img
                src="{{ asset('images/buah-potong.jpg') }}"
                class="drink-image"
                alt="Buah Potong">


            <div class="drink-info">

                <div class="drink-name">
                    Buah Potong
                </div>


                <div class="price">
                    Rp48.000
                </div>


                <div class="description">
                    Aneka buah segar yang dipotong kecil dan
                    disajikan dalam satu piring. Terdiri dari
                    apel, strawberry, jeruk, anggur, mangga
                    dan buah musiman lainnya.
                </div>

            </div>


            <button class="plus">
                +
            </button>

        </div>



        <!-- ICE BUAH-->

        <div class="drink-card">

            <img
                src="{{ asset('images/ice-buah.jpg') }}"
                class="drink-image"
                alt="Ice Buah">


            <div class="drink-info">

                <div class="drink-name">
                    Ice Buah
                </div>


                <div class="price">
                    Rp38.000
                </div>


                <div class="description">
                    Campuran aneka buah segar seperti melon,
                    semangka, pepaya, nanas dan alpukat yang
                    dipotong kecil. Dilengkapi dengan kolang-kaling,
                    nata de coco, sirup, susu kental manis,
                    dan es batu.
                </div>

            </div>


            <button class="plus">
                +
            </button>

        </div>



        <!-- SLICE CAKE-->

        <div class="drink-card">

            <img
                src="{{ asset('images/slice-cake.jpg') }}"
                class="drink-image"
                alt="Slice Cake">


            <div class="drink-info">

                <div class="drink-name">
                    Slice Cake
                </div>


                <div class="price">
                    Rp28.000
                </div>


                <div class="description">
                    Potongan kue dengan berbagai pilihan rasa
                    dan jenis, seperti cokelat, vanilla,
                    atau red velvet. Disajikan per potong
                    dengan lapisan krim atau filling di bagian
                    tengah serta topping sesuai pilihan.
                </div>

            </div>


            <button class="plus">
                +
            </button>

        </div>


    </div>

</section>



<!-- FOOTER-->

<footer>

    © 2026 Daily Crave — Food & Drink

</footer>


</body>

</html>