
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Crave - Extra</title>

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
      padding: 40px 5.5%;
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
      border-radius: 12px;
    }

    /* CATEGORY */
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

    /* MENU */
    .menu-section {
      padding: 35px 5.5% 65px;
      background: #fdfbf8;
    }

    .section-heading {
      display: flex;
      align-items: end;
      justify-content: space-between;
      gap: 20px;
      margin-bottom: 20px;
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
      gap: 14px;
    }

    /* MENU CARD */
    .menu-card {
      min-height: 165px;
      display: grid;
      grid-template-columns: 190px minmax(0, 1fr) 30px;
      align-items: center;
      gap: 18px;
      padding: 10px;
      background: #fff;
      border: 1px solid #eee7df;
      border-radius: 10px;
      box-shadow: 0 2px 7px rgba(91, 63, 42, .025);
    }

    .menu-card img {
      display: block;
      width: 100%;
      height: 135px;
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
      margin-bottom: 8px;
    }

    .menu-info p {
      color: #8b8177;
      font-size: 11px;
      line-height: 1.8;
    }

    /* TOMBOL PLUS */
    .add-button {
      width: 28px;
      height: 28px;
      border: 1px solid #eee5d9;
      border-radius: 50%;
      background: #f5f0e8;
      color: #9a785b;
      font-family: 'Poppins', sans-serif;
      font-size: 17px;
      line-height: 1;
      cursor: pointer;
      align-self: start;
      margin-top: 15px;
    }

    .add-button:hover {
      background: #806044;
      color: #fff;
    }

    /* FOOTER */
    footer {
      min-height: 112px;
      padding: 30px 5.5%;
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
        gap: 12px;
        flex-wrap: wrap;
      }

      .nav-menu a {
        font-size: 10px;
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
        padding: 10px 3%;
        overflow-x: auto;
      }

      .category-bar a {
        font-size: 10px;
        padding: 8px 10px;
      }

      .category-note {
        display: none;
      }

      .menu-section {
        padding: 25px 5% 40px;
      }

      .section-title {
        font-size: 23px;
      }

      .section-hint {
        display: none;
      }

      .menu-card {
        grid-template-columns: 105px minmax(0, 1fr) 25px;
        gap: 10px;
        min-height: 125px;
      }

      .menu-card img {
        height: 105px;
      }

      .menu-info h3 {
        font-size: 14px;
      }

      .menu-info p {
        font-size: 9px;
        line-height: 1.6;
      }

      .price {
        font-size: 11px;
      }

      .add-button {
        width: 24px;
        height: 24px;
        font-size: 15px;
      }

      footer {
        flex-direction: column;
        align-items: flex-start;
        padding: 25px 5%;
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
      <a href="minuman.html">Minuman</a>
      <a href="dessert.html">Dessert</a>
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
        Luangkan waktu, temukan yang ingin Anda nikmati
        dengan cita rasa istimewa.
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
<a href="{{ url('/comfort') }}">Comfort</a>
<a href="{{ route('extra') }}" class="active">Extra</a>

    <span class="category-note">
      DAFTAR MAKANAN DAILY CRAVE
    </span>

  </nav>

  <!-- EXTRA MENU -->
  <section class="menu-section">

    <div class="section-heading">

      <div>
        <p class="section-subtitle">
          MAKANAN &nbsp;—&nbsp; 02 PILIHAN
        </p>

        <h2 class="section-title">Extra</h2>
      </div>

      <p class="section-hint">
        Temukan pilihan untuk waktu bersantap Anda.
      </p>

    </div>

    <div class="menu-list">

      <!-- NASI PUTIH -->
      <article class="menu-card">

        <img
          src="{{ asset('gambar/extra/nasiputih.jpg') }}"
          alt="Nasi Putih">

        <div class="menu-info">

          <h3>Nasi Putih</h3>

          <div class="price">Rp12.000</div>

          <p>
            Nasi putih pilihan dimasak hingga pulen dengan
            tekstur lembut dan aroma yang harum. Disajikan
            hangat dalam mangkuk khusus sebagai pelengkap
            berbagai hidangan utama.
          </p>

        </div>

        <button type="button" class="add-button">+</button>

      </article>

      <!-- TELUR -->
      <article class="menu-card">

        <img
          src="{{ asset('gambar/extra/telur.jpg') }}"
          alt="Telur">

        <div class="menu-info">

          <h3>Telur</h3>

          <div class="price">Rp11.000</div>

          <p>
            Pilihan olahan telur meliputi omelet, telur ceplok,
            dan telur dadar yang dimasak menggunakan mentega
            atau minyak dengan tambahan bumbu pilihan.
            Tersedia tingkat kematangan sesuai permintaan,
            mulai dari setengah matang, ¾ matang,
            hingga matang sempurna.
          </p>

        </div>

        <button type="button" class="add-button">+</button>

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
