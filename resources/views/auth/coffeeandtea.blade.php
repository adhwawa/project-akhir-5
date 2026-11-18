<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daily Crave - Main Course</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #f3f1ed;
            color: #553b2b;
            font-family: 'Poppins', sans-serif;
            width: 100%;
        }

        .container {
            width: 100%;
            min-height: 100vh;
            background: #fdfbf8;
            overflow: hidden;
        }

        /* HEADER */

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 5.5%;
            min-height: 76px;
        }

        .brand {
            color: #68452f;
            font-family: 'Playfair Display', serif;
            font-size: 21px;
            line-height: 1.1;
        }

        .brand small {
            display: block;
            margin-top: 3px;
            font-family: 'Poppins', sans-serif;
            font-size: 6px;
            letter-spacing: 2px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 35px;
        }

        .nav-menu a {
            text-decoration: none;
            font-size: 12px;
            color: #92745e;
            transition: .3s;
            white-space: nowrap;
        }

        .nav-menu a:hover {
            color: #49372b;
        }

        .nav-menu a.active {
            background: #70472d;
            color: #fff;
            padding: 9px 20px;
            border-radius: 30px;
        }

        /* HERO */

        .hero {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            align-items: center;
            gap: 35px;
            padding: 35px 5.5% 40px;
        }

        .hero-text .eyebrow {
            color: #a58c76;
            font-size: 11px;
            margin-bottom: 10px;
        }

        .hero h1 {
            color: #4d382b;
            font-family: 'Playfair Display', serif;
            font-size: clamp(30px, 4vw, 48px);
            font-weight: 400;
            line-height: 1.1;
            margin-bottom: 15px;
        }

        .hero-text .description {
            max-width: 390px;
            color: #806e5e;
            font-size: 11px;
            line-height: 1.8;
        }

        .hero img {
            width: 100%;
            height: 235px;
            object-fit: cover;
            border-radius: 18px;
        }

        /* CATEGORY NAVIGATION */

        .category-bar {
            min-height: 50px;
            padding: 9px 5.5%;
            display: flex;
            align-items: center;
            gap: 9px;
            background: #fff;
            border-top: 1px solid #f5f0e9;
            border-bottom: 1px solid #f5f0e9;
        }

        .category-bar a {
            color: #8a715c;
            text-decoration: none;
            font-size: 12px;
            white-space: nowrap;
            padding: 9px 15px;
            border-radius: 20px;
            transition: .3s;
        }

        .category-bar a:hover {
            background: #f5f0e8;
        }

        .category-bar a.active {
            background: #806044;
            color: #fff;
        }

        .category-note {
            margin-left: auto;
            color: #9a8a7a;
            font-size: 10px;
            white-space: nowrap;
        }

        /* MAIN COURSE */

        .menu-section {
            padding: 30px 5.5% 40px;
            background: #fdfbf8;
        }

        .section-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 17px;
        }

        .section-subtitle {
            color: #a58c76;
            font-size: 13px;
            letter-spacing: 1.4px;
            margin-bottom: 3px;
        }

        .section-title {
            color: #4d382b;
            font-family: 'Playfair Display', serif;
            font-size: 27px;
            font-weight: 400;
        }

        .section-hint {
            color: #9a8a7a;
            font-size: 10px;
            padding-bottom: 5px;
        }

        .menu-list {
            display: grid;
            gap: 14px;
        }

        /* MENU CARD */

        .menu-card {
            min-height: 135px;
            display: grid;
            grid-template-columns: 170px minmax(0, 1fr) 45px;
            align-items: center;
            gap: 18px;
            padding: 10px;
            background: #fff;
            border: 1px solid #eee7df;
            border-radius: 12px;
            box-shadow: 0 2px 7px rgba(91, 63, 42, .025);
        }

        .menu-card img {
            display: block;
            width: 100%;
            height: 108px;
            object-fit: cover;
            border-radius: 7px;
        }

        .menu-info h3 {
            color: #554033;
            font-family: 'Playfair Display', serif;
            font-size: 19px;
            font-weight: 400;
            margin-bottom: 4px;
        }

        .price {
            color: #8a6244;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .menu-info p {
            color: #8b8177;
            font-size: 11px;
            line-height: 1.65;
        }

        /* PLUS BUTTON */

        .add-button {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: none;
            border-radius: 50%;

            background-color: #f5f0e8;

            color: #9a785b;
            font-family: 'Poppins', sans-serif;
            font-size: 25px;
            font-weight: 300;
            line-height: 1;

            text-decoration: none;
            cursor: pointer;

            justify-self: center;
            flex-shrink: 0;

            transition: .3s;
        }

        .add-button:hover {
            background-color: #806044;
            color: white;
            transform: scale(1.08);
        }

        /* FOOTER */

        footer {
            min-height: 72px;
            padding: 25px 5.5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            background: #f2eadc;
            color: #9b8068;
            font-size: 10px;
        }

        footer .footer-links {
            display: flex;
            gap: 18px;
        }

        footer a {
            color: inherit;
            text-decoration: none;
        }

        footer a:hover {
            color: #60442f;
        }

        /* RESPONSIVE MOBILE */

        @media (max-width: 700px) {

            .navbar {
                padding: 18px 5%;
                flex-wrap: wrap;
                gap: 15px;
            }

            .nav-menu {
                gap: 13px;
                flex-wrap: wrap;
            }

            .nav-menu a {
                font-size: 10px;
            }

            .nav-menu a.active {
                padding: 7px 12px;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 25px 5%;
                gap: 20px;
            }

            .hero img {
                height: 190px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .category-bar {
                padding: 10px 4%;
                overflow-x: auto;
            }

            .category-note {
                display: none;
            }

            .menu-section {
                padding: 25px 4% 35px;
            }

            .section-heading {
                align-items: flex-start;
                flex-direction: column;
                gap: 7px;
            }

            .section-title {
                font-size: 25px;
            }

            .menu-card {
                grid-template-columns: 100px minmax(0, 1fr) 35px;
                min-height: 115px;
                gap: 10px;
                padding: 8px;
            }

            .menu-card img {
                height: 95px;
            }

            .menu-info h3 {
                font-size: 14px;
            }

            .menu-info p {
                font-size: 9px;
                line-height: 1.5;
            }

            .price {
                font-size: 11px;
            }

            .add-button {
                width: 32px;
                height: 32px;
                font-size: 21px;
            }

            footer {
                flex-direction: column;
                text-align: center;
                padding: 22px 5%;
            }

        }
    </style>
</head>

<body>

    <main class="container">

        <!-- NAVBAR -->
        <nav class="navbar">

            <div class="brand">
                ☼ daily crave
                <small>FOOD & DRINK</small>
            </div>

            <div class="nav-menu">
                <a href="{{ route('dashboard') }}">Menu Kami</a>
                <a href="{{ route('maincourse') }}">Makanan</a>
                <a href="{{ route('coffeeandtea') }}" class="active">Minuman</a>
                <a href='{{ route('dessert') }}'>Dessert</a>
            </div>

        </nav>

        <!-- HERO -->
        <section class="hero">

            <div class="hero-text">

                <p class="eyebrow">──── MENU DAILY CRAVE ────</p>

                <h1>
                    Rasa yang akrab.<br>
                    Momen yang hangat.
                </h1>

                <p class="description">
                    Jelajahi pilihan minuman, dan temukan rasa
                    yang menyegarkan untuk menemani waktu santai Anda.
                </p>

            </div>

            <img src="https://cdn-brilio-net.akamaized.net/news/2021/09/23/214006/2571601-1000xauto-resep-minuman-khas-nusantara.jpg"
                class="hero-image" alt="Pilihan minuman Daily Crave">

        </section>

        <!-- CATEGORY -->
        <nav class="category-bar">

            <a href="{{ route('coffeeandtea') }}" class="active">Coffee & Tea</a>
            <a href="{{ route('freshjuice') }}">Fresh Juice</a>
            <a href="{{ route('softdrink') }}">Soft Drink</a>

            <span class="category-note">
                DAPAT DITAMBAHKAN KE DAFTAR PESANAN
            </span>

        </nav>

        <!-- COFFEE & TEA -->
        <section class="menu-section" id="coffee-tea">

            <div class="section-heading">

                <div>
                    <p class="section-subtitle">
                        MINUMAN &nbsp;—&nbsp; 07 PILIHAN
                    </p>

                    <h2 class="section-title">Coffee & Tea</h2>
                </div>

                <p class="section-hint">
                    Temukan pilihan untuk waktu bersantai Anda.
                </p>

            </div>

            <div class="menu-list">

                <!-- 1 JASMINE TEA -->
                <article class="menu-card">

                    <img src="{{ asset('gambar/coffee tea/estea.png') }}" alt="Jasmine Tea">

                    <div class="menu-info">
                        <h3>Jasmine Tea [Ice/Hot]</h3>
                        <div class="price">Rp18.000</div>

                        <p>
                            Teh melati yang diseduh dari daun teh pilihan
                            dengan aroma bunga melati. Disajikan dingin
                            dengan es batu atau hangat tanpa es,
                            cocok dinikmati sebagai minuman pendamping makanan.
                        </p>
                    </div>

                    <a href="{{ route('detailcoffeeandtea', 'jasmine-tea') }}" class="add-button">+</a>

                </article>

                <!-- 2 TEH JERUK NIPIS -->
                <article class="menu-card">

                    <img src="{{ asset('gambar/coffee tea/tehjeruknipis.png') }}" alt="Teh Jeruk Nipis">

                    <div class="menu-info">
                        <h3>Teh Jeruk Nipis [Ice/Hot]</h3>
                        <div class="price">Rp20.000</div>

                        <p>
                            Teh yang dipadukan dengan perasan jeruk nipis
                            segar dan tambahan irisan jeruk nipis.
                            Disajikan dingin dengan es batu atau hangat
                            untuk memberikan sensasi segar.
                        </p>
                    </div>

                    <a href="{{ route('detailcoffeeandtea', 'teh-jeruk-nipis') }}" class="add-button">+</a>

                </article>

                <!-- 3 LYCHEE TEA -->
                <article class="menu-card">

                    <img src="{{ asset('gambar/coffee tea/lecitea.png') }}" alt="Lychee Tea">

                    <div class="menu-info">
                        <h3>Lychee Tea [Ice/Hot]</h3>
                        <div class="price">Rp20.000</div>

                        <p>
                            Teh yang dicampur dengan sirup leci dan
                            potongan buah leci, dilengkapi es batu
                            serta irisan buah leci sebagai topping.
                        </p>
                    </div>

                    <a href="{{ route('detailcoffeeandtea', 'lychee-tea') }}" class="add-button">+</a>

                </article>

                <!-- 4 AMERICANO -->
                <article class="menu-card">

                    <img src="{{ asset('gambar/coffee tea/americano.png') }}" alt="Americano">

                    <div class="menu-info">
                        <h3>Americano [Ice/Hot]</h3>
                        <div class="price">Rp25.000</div>

                        <p>
                            Minuman kopi yang diseduh dari satu atau
                            dua shot espresso yang dicampur dengan air
                            panas. Untuk versi dingin, disajikan dengan
                            es batu dan air tanpa tambahan susu.
                        </p>
                    </div>

                    <a href="{{ route('detailcoffeeandtea', 'americano') }}" class="add-button">+</a>

                </article>

                <!-- 5 COFFEE LATTE -->
                <article class="menu-card">

                    <img src="{{ asset('gambar/coffee tea/latte.png') }}" alt="Coffee Latte">

                    <div class="menu-info">
                        <h3>Coffee Latte [Ice/Hot]</h3>
                        <div class="price">Rp32.000</div>

                        <p>
                            Perpaduan espresso dengan susu steamed
                            yang menghasilkan tekstur lembut dan creamy.
                            Pada versi dingin, menggunakan susu dingin
                            dan es batu dengan lapisan foam susu
                            sebagai pelengkap.
                        </p>
                    </div>

                    <a href="{{ route('detailcoffeeandtea', 'coffee-latte') }}" class="add-button">+</a>

                </article>

                <!-- 6 CAPPUCCINO -->
                <article class="menu-card">

                    <img src="{{ asset('gambar/coffee tea/cappucino.png') }}" alt="Cappuccino">

                    <div class="menu-info">
                        <h3>Cappuccino [Ice/Hot]</h3>
                        <div class="price">Rp32.000</div>

                        <p>
                            Minuman kopi berbahan dasar espresso
                            yang dipadukan dengan steamed milk
                            dan lapisan foam susu tebal di bagian atas.
                            Dapat dinikmati dengan taburan bubuk cokelat
                            sebagai topping.
                        </p>
                    </div>

                    <a href="{{ route('detailcoffeeandtea', 'cappuccino') }}" class="add-button">+</a>

                </article>

                <!-- 7 MOCCACCINO -->
                <article class="menu-card">

                    <img src="{{ asset('gambar/coffee tea/mocacinno.png') }}" alt="Mocaccino">

                    <div class="menu-info">
                        <h3>Mocaccino [Ice/Hot]</h3>
                        <div class="price">Rp32.000</div>

                        <p>
                            Perpaduan espresso, susu, dan cokelat
                            yang menghasilkan rasa kopi dan cokelat.
                            Disajikan dengan kombinasi foam susu
                            serta taburan bubuk cokelat
                            atau saus cokelat sebagai topping.
                        </p>
                    </div>

                    <a href="{{ route('detailcoffeeandtea', 'mocaccino') }}" class="add-button">+</a>

                </article>

            </div>

        </section>

        <!-- FOOTER -->
        <footer>

            <span>
                © 2026 Daily Crave. Good Food, Good Mood.
            </span>

            <div class="footer-links">
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat & Ketentuan</a>
            </div>

        </footer>

    </main>

</body>

</html>
