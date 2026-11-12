
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Crave - Minuman</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

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

        /* NAVBAR */
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
            gap: 35px;
        }

        .nav-menu a {
            text-decoration: none;
            font-size: 12px;
            color: #92745e;
            white-space: nowrap;
        }

        .nav-menu a.active {
            background: #70472d;
            color: white;
            padding: 9px 20px;
            border-radius: 30px;
        }

        /* HERO */
        .hero {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: center;
            gap: 35px;
            padding: 40px 5.5%;
        }

        .hero-text p:first-child {
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

        .hero .description {
            max-width: 390px;
            color: #806e5e;
            font-size: 11px;
            line-height: 1.8;
        }

        .hero img {
            width: 100%;
            height: 235px;
            object-fit: cover;
            border-radius: 12px;
        }

        /* CATEGORY */
        .category-bar {
            min-height: 50px;
            padding: 9px 5.5%;
            display: flex;
            align-items: center;
            gap: 9px;
            background: white;
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
            color: white;
        }

        .category-note {
            margin-left: auto;
            color: #9a8a7a;
            font-size: 10px;
            white-space: nowrap;
        }

        /* MENU SECTION */
        .menu-section {
            padding: 30px 5.5% 45px;
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
            gap: 10px;
        }

        /* MENU CARD */
        .menu-card {
            min-height: 116px;
            display: grid;
            grid-template-columns: 155px minmax(0, 1fr) 25px;
            align-items: center;
            gap: 15px;
            padding: 8px 10px 8px 9px;
            background: white;
            border: 1px solid #eee7df;
            border-radius: 9px;
            box-shadow: 0 2px 7px rgba(91, 63, 42, .025);
        }

        .menu-card img {
            display: block;
            width: 100%;
            height: 98px;
            object-fit: cover;
            border-radius: 6px;
        }

        .menu-info h3 {
            color: #554033;
            font-family: 'Playfair Display', serif;
            font-size: 17px;
            font-weight: 400;
            margin-bottom: 3px;
        }

        .price {
            color: #8a6244;
            font-size: 11px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .menu-info p {
            color: #8b8177;
            font-size: 9px;
            line-height: 1.8;
        }

        .add-button {
            width: 27px;
            height: 27px;
            border: 1px solid #eee5d9;
            border-radius: 50%;
            background: #f5f0e8;
            color: #9a785b;
            font-size: 17px;
            cursor: pointer;
        }

        .add-button:hover {
            background: #806044;
            color: white;
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

        .footer-links {
            display: flex;
            gap: 18px;
        }

        footer a {
            color: inherit;
            text-decoration: none;
        }

        /* RESPONSIVE */
        @media (max-width: 700px) {
            .navbar {
                padding: 18px 5%;
                flex-wrap: wrap;
                gap: 18px;
            }

            .nav-menu {
                gap: 15px;
                flex-wrap: wrap;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 25px 5%;
                gap: 20px;
            }

            .hero img {
                height: 200px;
            }

            .category-bar {
                padding: 9px 5%;
                overflow-x: auto;
            }

            .category-note {
                display: none;
            }

            .menu-section {
                padding: 25px 5%;
            }

            .section-heading {
                align-items: start;
                flex-direction: column;
                gap: 5px;
            }

            .menu-card {
                grid-template-columns: 90px minmax(0, 1fr) 25px;
                gap: 10px;
                min-height: 110px;
            }

            .menu-card img {
                height: 90px;
            }

            .menu-info h3 {
                font-size: 14px;
            }

            .menu-info p {
                font-size: 8px;
            }

            footer {
                flex-direction: column;
                align-items: flex-start;
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
            <a href="#">Dessert</a>
        </div>

    </nav>

    <!-- HERO -->
    <section class="hero">

        <div class="hero-text">

            <p>──── MENU DI MEJA ANDA ────</p>

            <h1>
                Rasa yang akrab.<br>
                Momen yang hangat.
            </h1>

            <p class="description">
                Jelajahi pilihan minuman, dan temukan rasa
                yang menyegarkan untuk menemani waktu santai Anda.
            </p>

        </div>

        <img
            src="https://cdn-brilio-net.akamaized.net/news/2021/09/23/214006/2571601-1000xauto-resep-minuman-khas-nusantara.jpg"
            class="hero-image"
            alt="Pilihan minuman Daily Crave">

    </section>

    <!-- CATEGORY -->
    <nav class="category-bar">

        <a href="{{ route('coffeeandtea') }}">Coffee & Tea</a>
        <a href="{{ route('freshJuice') }}">Fresh Juice</a>
        <a href="{{ route('softdrink') }}">Soft Drink</a>

        <span class="category-note">
            DAFTAR MINUMAN DAILY CRAVE
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

                <img src="{{ asset('gambar/coffee/jasmine') }}"
                     alt="Jasmine Tea">

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

                <button class="add-button" type="button">+</button>

            </article>

            <!-- 2 TEH JERUK NIPIS -->
            <article class="menu-card">

                <img src="{{ asset('gambar/minuman/teh-jeruk-nipis.jpg') }}"
                     alt="Teh Jeruk Nipis">

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

                <button class="add-button" type="button">+</button>

            </article>

            <!-- 3 LYCHEE TEA -->
            <article class="menu-card">

                <img src="{{ asset('gambar/minuman/lychee-tea.jpg') }}"
                     alt="Lychee Tea">

                <div class="menu-info">
                    <h3>Lychee Tea [Ice/Hot]</h3>
                    <div class="price">Rp20.000</div>

                    <p>
                        Teh yang dicampur dengan sirup leci dan
                        potongan buah leci, dilengkapi es batu
                        serta irisan buah leci sebagai topping.
                    </p>
                </div>

                <button class="add-button" type="button">+</button>

            </article>

            <!-- 4 AMERICANO -->
            <article class="menu-card">

                <img src="{{ asset('gambar/minuman/americano.jpg') }}"
                     alt="Americano">

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

                <button class="add-button" type="button">+</button>

            </article>

            <!-- 5 COFFEE LATTE -->
            <article class="menu-card">

                <img src="{{ asset('gambar/minuman/coffee-latte.jpg') }}"
                     alt="Coffee Latte">

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

                <button class="add-button" type="button">+</button>

            </article>

            <!-- 6 CAPPUCCINO -->
            <article class="menu-card">

                <img src="{{ asset('gambar/minuman/cappuccino.jpg') }}"
                     alt="Cappuccino">

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

                <button class="add-button" type="button">+</button>

            </article>

            <!-- 7 MOCCACCINO -->
            <article class="menu-card">

                <img src="{{ asset('gambar/minuman/mocaccino.jpg') }}"
                     alt="Mocaccino">

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

                <button class="add-button" type="button">+</button>

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
