
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minuman - Daily Crave</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

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
            width: 100%;
            min-height: 100vh;
            background: #f3f1ed;
            color: #553b2b;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            width: 100%;
            min-height: 100vh;
            background: #fdfbf8;
        }

        /* NAVBAR */
        .navbar {
            width: 100%;
            min-height: 76px;
            padding: 20px 5.5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .brand {
            color: #68452f;
            font-family: 'Playfair Display', serif;
            font-size: 21px;
            line-height: 1.1;
            white-space: nowrap;
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
            gap: 30px;
            margin-left: auto;
        }

        .nav-menu a {
            color: #92745e;
            text-decoration: none;
            font-size: 12px;
            white-space: nowrap;
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

        .small-title {
            color: #a58c76;
            font-size: 10px;
            letter-spacing: 1.5px;
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

        .hero-text p {
            max-width: 440px;
            color: #806e5e;
            font-size: 11px;
            line-height: 1.8;
        }

        .hero-image {
            display: block;
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 18px;
        }

        /* CATEGORY BAR */
        .category-bar {
            min-height: 58px;
            width: 100%;
            padding: 8px 5.5%;
            display: flex;
            align-items: center;
            gap: 12px;
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
        }

        .category-bar a.active {
            background: #806044;
            color: #fff;
        }

        .category-note {
            margin-left: auto;
            color: #9a8a7a;
            font-size: 9px;
            letter-spacing: 1.5px;
            white-space: nowrap;
        }

        /* MENU */
        .menu-section {
            padding: 30px 5.5% 40px;
            background: #fdfbf8;
        }

        .section-heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 17px;
        }

        .section-subtitle {
            color: #a58c76;
            font-size: 11px;
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
            grid-template-columns: 1fr;
            gap: 10px;
        }

        /* DRINK CARD */
        .drink-card {
            min-height: 116px;
            display: grid;
            grid-template-columns: 155px minmax(0, 1fr) 28px;
            align-items: center;
            gap: 15px;
            padding: 8px 10px 8px 9px;
            background: #fff;
            border: 1px solid #eee7df;
            border-radius: 9px;
            box-shadow: 0 2px 7px rgba(91, 63, 42, .025);
            transition: .2s;
        }

        .drink-card:hover {
            box-shadow: 0 5px 15px rgba(100, 70, 45, .10);
            transform: translateY(-1px);
        }

        .drink-image {
            display: block;
            width: 100%;
            height: 98px;
            object-fit: cover;
            border-radius: 6px;
        }

        .drink-info {
            min-width: 0;
        }

        .drink-name {
            color: #554033;
            font-family: 'Playfair Display', serif;
            font-size: 19px;
            margin-bottom: 4px;
        }

        .price {
            color: #8a6244;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .description {
            color: #8b8177;
            font-size: 11px;
            line-height: 1.65;
        }

        .plus {
            width: 28px;
            height: 28px;
            border: 0;
            border-radius: 50%;
            background: #f5f0e8;
            color: #9a785b;
            font-size: 20px;
            line-height: 1;
            cursor: pointer;
        }

        .plus:hover {
            background: #806044;
            color: #fff;
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

        /* DESKTOP */
        @media (min-width: 1100px) {
            .hero-image {
                height: 250px;
            }

            .drink-card {
                grid-template-columns: 180px minmax(0, 1fr) 30px;
                min-height: 126px;
            }

            .drink-image {
                height: 108px;
            }
        }

        /* RESPONSIVE */
        @media (max-width: 700px) {
            .navbar {
                padding: 17px 5%;
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-menu {
                width: 100%;
                justify-content: flex-start;
                gap: 17px;
                flex-wrap: wrap;
                margin: 5px 0 0;
            }

            .nav-menu a {
                font-size: 11px;
            }

            .nav-menu a.active {
                padding: 7px 13px;
            }

            .hero {
                grid-template-columns: 1fr;
                gap: 20px;
                padding: 25px 5% 30px;
            }

            .hero-image {
                height: 190px;
            }

            .category-bar {
                min-height: 54px;
                padding: 7px 4%;
                gap: 3px;
                overflow-x: auto;
            }

            .category-bar a {
                padding: 8px 10px;
                font-size: 10px;
            }

            .category-note {
                font-size: 7px;
                letter-spacing: .7px;
            }

            .menu-section {
                padding: 25px 5% 35px;
            }

            .section-heading {
                align-items: flex-start;
                flex-direction: column;
                gap: 5px;
            }

            .section-title {
                font-size: 24px;
            }

            .drink-card {
                grid-template-columns: 100px minmax(0, 1fr) 25px;
                gap: 10px;
                min-height: 100px;
                padding: 8px;
            }

            .drink-image {
                width: 100px;
                height: 82px;
            }

            .drink-name {
                font-size: 15px;
            }

            .price {
                font-size: 11px;
            }

            .description {
                font-size: 9px;
                line-height: 1.5;
            }

            .plus {
                width: 25px;
                height: 25px;
                font-size: 18px;
            }

            footer {
                padding: 22px 5%;
                font-size: 9px;
            }
        }

        @media (max-width: 380px) {
            .category-note {
                display: none;
            }

            .drink-card {
                grid-template-columns: 85px minmax(0, 1fr) 23px;
                gap: 8px;
            }

            .drink-image {
                width: 85px;
                height: 75px;
            }

            .drink-name {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<div class="container">

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="brand">
            ☼ daily crave
            <small>FOOD & DRINK</small>
        </div>


        <div class="nav-menu">
            <a href="{{ route('dashboard') }}">Menu Kami</a>
            <a href="{{ route('maincourse') }}">Makanan</a>
            <a href="{{ route('coffeandtea') }}" class="active">Minuman</a>
            <a href="{{ route('dashboard') }}#dessert">Dessert</a>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-text">
            <div class="small-title">MENU DI MEJA ANDA</div>

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
            src="https://cdn-brilio-net.akamaized.net/news/2021/09/23/214006/2571601-1000xauto-resep-minuman-khas-nusantara.jpg"
            class="hero-image"
            alt="Pilihan minuman Daily Crave">
    </section>

    <!-- CATEGORY BAR -->
    <div class="category-bar">
        <a href="{{ route('coffeandtea') }}" class="active">Coffee & Tea</a>
        <a href="#fresh-juice">Fresh Juice</a>
        <a href="#soft-drink">Soft Drink</a>

        <span class="category-note">
            DAFTAR MINUMAN DAILY CRAVE
        </span>
    </div>

    <!-- DAFTAR MINUMAN -->
    <section class="menu-section">

        <div class="section-heading">
            <div>
                <div class="section-subtitle">
                    MINUMAN 07 PILIHAN
                </div>

                <h2 class="section-title">
                    Coffee & Tea
                </h2>
            </div>

            <div class="section-hint">
                Temukan pilihan minuman hangat dan menyegarkan.
            </div>
        </div>

        <div class="menu-list">

            <!-- JASMINE TEA -->
            <div class="drink-card">
                <img
                    src="{{ ('public/gambar/coffe tea/estea.png') }}"
                    class="drink-image"
                    alt="Jasmine Tea">

                <div class="drink-info">
                    <div class="drink-name">Jasmine Tea [Ice/Hot]</div>
                    <div class="price">Rp8.000</div>
                    <p>
                        Teh melati yang diseduh dari daun teh pilihan
                        dengan aroma bunga yang lembut. Disajikan dingin
                        dengan es batu atau hangat.
                    </p>
                </div>

                <button class="plus" type="button"
                    aria-label="Tambah Jasmine Tea">+</button>
            </div>

            <!-- TEH JERUK NIPIS -->
            <div class="drink-card">
                <img
                    src="{{ asset('public/gambar/coffe tea/tehjeruknipis.png') }}"
                    class="drink-image"
                    alt="Teh Jeruk Nipis">

                <div class="drink-info">
                    <div class="drink-name">Teh Jeruk Nipis [Ice/Hot]</div>
                    <div class="price">Rp9.000</div>
                    <div class="description">
                        Teh dengan rasa segar jeruk nipis yang memberikan
                        sensasi menyegarkan dan cocok dinikmati kapan saja.
                    </div>
                </div>

                <button class="plus" type="button"
                    aria-label="Tambah Teh Jeruk Nipis">+</button>
            </div>

            <!-- LYCHEE TEA -->
            <div class="drink-card">
                <img
                    src="{{ asset('public/gambar/coffe tea/lecitea.png') }}"
                    class="drink-image"
                    alt="Lychee Tea">

                <div class="drink-info">
                    <div class="drink-name">Lychee Tea [Ice/Hot]</div>
                    <div class="price">Rp10.000</div>
                    <div class="description">
                        Teh yang dipadukan dengan lychee dan sirup buah
                        yang lembut, menghasilkan rasa manis dan segar.
                    </div>
                </div>

                <button class="plus" type="button"
                    aria-label="Tambah Lychee Tea">+</button>
            </div>

            <!-- AMERICANO -->
            <div class="drink-card">
                <img
                    src="{{ asset('public/gambar/coffe tea/americano.png') }}"
                    class="drink-image"
                    alt="Americano">

                <div class="drink-info">
                    <div class="drink-name">Americano [Ice/Hot]</div>
                    <div class="price">Rp15.000</div>
                    <div class="description">
                        Espresso dengan air yang memberikan cita rasa
                        kopi lebih ringan namun tetap memiliki rasa
                        khas kopi.
                    </div>
                </div>

                <button class="plus" type="button"
                    aria-label="Tambah Americano">+</button>
            </div>

            <!-- COFFEE LATTE -->
            <div class="drink-card">
                <img
                    src="{{ asset('public/gambar/coffe tea/latte.png') }}"
                    class="drink-image"
                    alt="Coffee Latte">

                <div class="drink-info">
                    <div class="drink-name">Coffee Latte [Ice/Hot]</div>
                    <div class="price">Rp15.000</div>
                    <div class="description">
                        Perpaduan espresso dengan susu steamed yang
                        menghasilkan rasa lembut dan creamy dengan
                        aroma kopi yang khas.
                    </div>
                </div>

                <button class="plus" type="button"
                    aria-label="Tambah Coffee Latte">+</button>
            </div>

            <!-- CAPPUCCINO -->
            <div class="drink-card">
                <img
                    src="{{ asset('public/gambar/coffe tea/cappuccino.png') }}"
                    class="drink-image"
                    alt="Cappuccino">

                <div class="drink-info">
                    <div class="drink-name">Cappuccino [Ice/Hot]</div>
                    <div class="price">Rp16.000</div>
                    <div class="description">
                        Minuman kopi dengan perpaduan espresso, susu,
                        dan foam lembut yang menghasilkan rasa creamy
                        dan nikmat.
                    </div>
                </div>

                <button class="plus" type="button"
                    aria-label="Tambah Cappuccino">+</button>
            </div>

            <!-- MOCACCINO -->
            <div class="drink-card">
                <img
                    src="{{ asset('public/gambar/coffe tea/mocaccino.png') }}"
                    class="drink-image"
                    alt="Mocaccino">

                <div class="drink-info">
                    <div class="drink-name">Mocaccino [Ice/Hot]</div>
                    <div class="price">Rp17.000</div>
                    <div class="description">
                        Perpaduan espresso, cokelat, dan susu dengan
                        rasa manis dan aroma kopi yang nikmat.
                    </div>
                </div>

                <button class="plus" type="button"
                    aria-label="Tambah Mocaccino">+</button>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <span>© 2026 Daily Crave — Food & Drink</span>
    </footer>

</div>
</body>
</html>
