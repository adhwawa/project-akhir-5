<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Crave - Comfort</title>

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
      display: block;
      width: 100%;
      height: 98px;
      object-fit: cover;
      border-radius: 6px;
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
            <a href="{{ route('maincourse') }}" class="active">Makanan</a>
            <a href="{{ route('coffeeandtea') }}">Minuman</a>
            <a href='{{ route('dessert') }}'>Dessert</a>
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
                 Jelajahi pilihan makanan, minuman, dan dessert.
          Pilihan rasa yang pas untuk menemani harimu
          dengan cita rasa yang istimewa..
            </p>

        </div>

        <img
            src="https://images.unsplash.com/photo-1547592180-85f173990554?w=1000"
            alt="Hidangan Daily Crave">

    </section>

    <!-- CATEGORY -->
    <nav class="category-bar">

        <a href="{{ route('maincourse') }}">Main Course</a>
        <a href="{{ route('nusantara') }}">Nusantara</a>
        <a href="{{ route('comfort') }}" class="active">Comfort</a>
        <a href="{{ route('extra') }}">Extra</a>

        <span class="category-note">
        DAPAT DITAMBAHKAN KE DAFTAR PESANAN
        </span>

    </nav>

    <!-- COMFORT MENU -->
    <section class="menu-section">

        <div class="section-heading">

            <div>
                <p class="section-subtitle">
                    MAKANAN &nbsp;—&nbsp; 09 PILIHAN
                </p>

                <h2 class="section-title">Comfort</h2>
            </div>

            <p class="section-hint">
                Temukan pilihan untuk waktu bersantap Anda.
            </p>

        </div>

        <div class="menu-list">

            <!-- MENDOAN -->
            <article class="menu-card">

                <img src="{{ asset('gambar/comfort/mendoan.png') }}"
                     alt="Mendoan">

                <div class="menu-info">
                    <h3>Mendoan</h3>
                    <div class="price">Rp30.000</div>

                    <p>
                        Tempe pilihan dilapisi adonan tepung berbumbu
                        dengan irisan daun bawang, kemudian digoreng
                        hingga bagian luar renyah. Disajikan bersama
                        sambal kecap manis dan cabai rawit.
                    </p>
                </div>

                <button class="add-button" type="button">+</button>

            </article>

            <!-- TAHU CRISPY -->
            <article class="menu-card">

                <img src="{{ asset('gambar/comfort/tahu.png') }}"
                     alt="Tahu Crispy">

                <div class="menu-info">
                    <h3>Tahu Crispy</h3>
                    <div class="price">Rp30.000</div>

                    <p>
                        Potongan tahu pilihan dibalut tepung berbumbu
                        dan digoreng hingga menghasilkan lapisan luar
                        yang renyah dengan bagian dalam lembut.
                        Disajikan dengan taburan bumbu serta saus.
                    </p>
                </div>

                <button class="add-button" type="button">+</button>

            </article>

            <!-- BAKWAN JAGUNG -->
            <article class="menu-card">

                <img src="{{ asset('gambar/comfort/bakwajagung.png') }}"
                     alt="Bakwan Jagung">

                <div class="menu-info">
                    <h3>Bakwan Jagung</h3>
                    <div class="price">Rp30.000</div>

                    <p>
                        Jagung manis dipadukan dengan tepung,
                        irisan daun bawang, wortel, bawang putih,
                        dan bumbu pilihan. Digoreng hingga keemasan
                        dan disajikan bersama cabai rawit.
                    </p>
                </div>

                <button class="add-button" type="button">+</button>

            </article>

            <!-- SINGKONG CRISPY -->
            <article class="menu-card">

                <img src="{{ asset('gambar/comfort/singkong.png') }}"
                     alt="Singkong Crispy">

                <div class="menu-info">
                    <h3>Singkong Crispy</h3>
                    <div class="price">Rp30.000</div>

                    <p>
                        Singkong pilihan dipotong memanjang,
                        direbus hingga empuk, kemudian digoreng
                        dengan balutan tepung berbumbu hingga
                        bagian luarnya renyah. Disajikan dengan
                        saus sambal sebagai pelengkap.
                    </p>
                </div>

                <button class="add-button" type="button">+</button>

            </article>

            <!-- CIRENG CRISPY -->
            <article class="menu-card">

                <img src="{{ asset('gambar/comfort/cireng.png') }}"
                     alt="Cireng Crispy">

                <div class="menu-info">
                    <h3>Cireng Crispy</h3>
                    <div class="price">Rp32.000</div>

                    <p>
                        Cireng dibuat dari tepung tapioka dengan
                        campuran bawang putih, daun bawang,
                        dan bumbu pilihan yang menghasilkan
                        tekstur kenyal di dalam serta renyah
                        di luar. Disajikan dengan saus cocolan.
                    </p>
                </div>

                <button class="add-button" type="button">+</button>

            </article>

            <!-- FRENCH FRIES -->
            <article class="menu-card">

                <img src="{{ asset('gambar/comfort/frenchfries.png') }}"
                     alt="French Fries">

                <div class="menu-info">
                    <h3>French Fries</h3>
                    <div class="price">Rp25.000</div>

                    <p>
                        Kentang pilihan dipotong memanjang
                        dan digoreng hingga berwarna keemasan
                        dengan tekstur renyah di luar dan lembut
                        di dalam. Disajikan dengan taburan
                        garam dan saus sambal.
                    </p>
                </div>

                <button class="add-button" type="button">+</button>

            </article>

            <!-- ROTI BAKAR -->
            <article class="menu-card">

                <img src="{{ asset('gambar/comfort/rotibakar.png') }}"
                     alt="Roti Bakar Coklat Keju">

                <div class="menu-info">
                    <h3>Roti Bakar Coklat Keju</h3>
                    <div class="price">Rp35.000</div>

                    <p>
                        Roti tawar tebal dipanggang dengan
                        olesan margarin hingga berwarna
                        kecokelatan dan renyah di bagian luar.
                        Diberi topping meses cokelat, parutan
                        keju cheddar, serta susu kental manis.
                    </p>
                </div>

                <button class="add-button" type="button">+</button>

            </article>

            <!-- PISANG GORENG -->
            <article class="menu-card">

                <img src="{{ asset('gambar/comfort/pisanggoreng.png') }}"
                     alt="Pisang Goreng Crispy">

                <div class="menu-info">
                    <h3>Pisang Goreng Crispy</h3>
                    <div class="price">Rp32.000</div>

                    <p>
                        Pisang pilihan dibalut adonan tepung
                        renyah dan digoreng hingga keemasan
                        dengan bagian dalam yang lembut.
                        Disajikan dengan topping keju,
                        meses cokelat, atau susu kental manis.
                    </p>
                </div>

                <button class="add-button" type="button">+</button>

            </article>

            <!-- MIX PLATTER -->
            <article class="menu-card">

                <img src="{{ asset('gambar/comfort/mixplatter.png') }}"
                     alt="Mix Platter">

                <div class="menu-info">
                    <h3>Mix Platter</h3>
                    <div class="price">Rp45.000</div>

                    <p>
                        Sajian aneka camilan dalam satu piring
                        yang terdiri dari french fries,
                        chicken nuggets, sosis goreng,
                        onion rings, dan chicken wings.
                        Dilengkapi saus sambal, saus tomat,
                        dan mayonnaise sebagai pelengkap.
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
            <a href="#">Syarat &amp; Ketentuan</a>
        </div>

    </footer>

</main>

</body>
</html>
