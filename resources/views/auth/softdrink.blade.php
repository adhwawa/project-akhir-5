<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Crave - Soft Drink</title>

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
        padding: 0;
        width: 100%;
    }

    .container {
        width: 100%;
        max-width: none;
        min-height: 100vh;
        margin: 0;
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
        flex-direction: row;
        align-items: center;
        justify-content: flex-end;
        gap: 35px;
        margin-left: auto;
    }

    .nav-menu a {
        text-decoration: none;
        font-size: 12px;
        color: #92745e;
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
      grid-template-columns: 1.2fr 0.8fr;
      align-items: center;
      gap: 35px;
      padding: 40px;
    }

    .hero-text p {
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

    .hero-text span {
      max-width: 390px;
      color: #806e5e;
      font-size: 11px;
      line-height: 1.8;
    }

    .hero img {
      width: 100%;
      height: 220px;
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
      background: #fff;
      border: 1px solid #eee7df;
      border-radius: 9px;
      box-shadow: 0 2px 7px rgba(91, 63, 42, .025);
    }

    .menu-card img {
    width: 100%;
    height: 115px;
    object-fit: cover;
    object-position: center;
    border-radius: 6px;
    object-fit: contain;
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
      font-family: 'Poppins', serif;
      font-size: 13px;
      font-weight: 500;
      margin-bottom: 5px;
    }

    .menu-info p {
      color: #8b8177;
      font-size: 11px;
      line-height: 1.65;
    }

    .add-button {
      width: 28px;
      height: 28px;
      border: 0;
      border-radius: 60%;
      background: #f5f0e8;
      color: #9a785b;
      font-family: 'Poppins', sans-serif;
      font-size: 20px;
      line-height: 1;
      cursor: pointer;
    }

    .add-button:hover {
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

    footer .footer-links {
      display: flex;
      gap: 18px;
    }

    footer a {
      color: inherit;
      text-decoration: none;
    }

    /* DESKTOP */
    @media (min-width: 1100px) {
      .hero img {
        height: 235px;
      }

      .menu-card {
        grid-template-columns: 170px minmax(0, 1fr) 25px;
        min-height: 126px;
      }

      .menu-card img {
        height: 108px;
      }
    }

    /* RESPONSIVE */
    @media (max-width: 700px) {
      body {
        padding: 15;
      }

      /* FULL WIDTH DESKTOP */

    @media (min-width: 701px) {

        .navbar {
            width: 100%;
            padding: 25px 5%;
        }

        .hero {
            width: 100%;
            padding: 20px 5% 40px;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 50px;
        }

        .hero img {
            width: 100%;
            height: 270px;
        }

        .category-bar {
            width: 100%;
            padding: 12px 5%;
        }

        .menu-section {
            width: 100%;
            padding: 35px 5% 45px;
        }

        .menu-list {
            width: 100%;
            gap: 14px;
        }

        .menu-card {
            width: 100%;
            min-height: 135px;
            grid-template-columns: 190px minmax(0, 1fr) 30px;
            padding: 10px;
            gap: 18px;
        }

        .menu-card img {
            width: 100%;
            height: 115px;
        }

        .menu-info h3 {
            font-size: 17px;
        }

        .menu-info p {
            font-size: 9px;
            line-height: 1.8;
        }

        .price {
            font-size: 10px;
        }

        footer {
            width: 100%;
            padding: 30px 5%;
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

            <p>──── MENU DAILY CRAVE ────</p>

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
        <a href="{{ route('freshjuice') }}">Fresh Juice</a>
        <a href="{{ route('softdrink') }}" class="active">Soft Drink</a>

        <span class="category-note">
            DAPAT DITAMBAHKAN KE DAFTAR PESANAN
        </span>
    </nav>

    <!-- SOFT DRINK -->
    <section class="menu-section">

        <div class="section-heading">
            <div>
                <p class="section-subtitle">
                    MINUMAN — 04 PILIHAN
                </p>
                <h2 class="section-title">Soft Drink</h2>
            </div>

            <p class="section-hint">
                Temukan pilihan untuk waktu bersantai Anda.
            </p>
        </div>

        <div class="menu-list">

            <!-- MINERAL WATER -->
            <article class="menu-card">
                <img
                    src="{{ asset('gambar/soft drink/mineralwater.png') }}"
                    alt="mineralwater">

                <div class="menu-info">
                    <h3>Mineral Water</h3>
                    <div class="price">Rp8.000</div>
                </div>

                <button class="add-button" type="button">+</button>
            </article>

            <!-- COKE -->
            <article class="menu-card">
                <img
                    src="{{ asset('gambar/soft drink/coke.png') }}"
                    alt="coke">

                <div class="menu-info">
                    <h3>Coke</h3>
                    <div class="price">Rp25.000</div>
                </div>

                <button class="add-button" type="button">+</button>
            </article>

            <!-- SPRITE -->
            <article class="menu-card">
                <img
                    src="{{ asset('gambar/soft drink/sprite.png') }}"
                    alt="sprite">

                <div class="menu-info">
                    <h3>Sprite</h3>
                    <div class="price">Rp25.000</div>
                </div>

                <button class="add-button" type="button">+</button>
            </article>

            <!-- FANTA -->
            <article class="menu-card">
                <img
                    src="{{ asset('gambar/soft drink/fanta.png') }}"
                    alt="Fanta">

                <div class="menu-info">
                    <h3>Fanta</h3>
                    <div class="price">Rp25.000</div>

                </div>

                <button class="add-button" type="button">+</button>
            </article>

        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <span>© 2026 Daily Crave. Good Food, Good Mood.</span>

        <div class="footer-links">
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Syarat &amp; Ketentuan</a>
        </div>
    </footer>

</main>
</body>
</html>
