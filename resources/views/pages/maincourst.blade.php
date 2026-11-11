
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Daily Crave - Menu Kami</title>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #f5f4f1;
    font-family: 'DM Sans', sans-serif;
    color: #45372c;
}

.container {
    width: 100%;
    max-width: 100%;
    margin: 0;
    background: #fcfaf6;
    min-height: 100vh;
}

/* ================= NAVBAR ================= */

header {
    width: 100%;
    padding: 25px 7%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fcfaf6;
}

.logo {
    font-family: 'Playfair Display', serif;
    font-size: 24px;
    color: #513d2d;
}

.logo small {
    display: block;
    font-family: 'DM Sans', sans-serif;
    font-size: 7px;
    letter-spacing: 2px;
}

/* NAVBAR DESKTOP */

nav {
    display: flex;
    align-items: center;
    gap: 12px;
}

nav a {
    text-decoration: none;
    color: #98704c;
    font-size: 12px;
    font-weight: 500;
    padding: 9px 20px;
    border-radius: 30px;
    transition: all 0.3s ease;
}

/* MENU AKTIF */

nav a.active {
    background-color: #654321;
    color: #ffffff;
}

/* HOVER */

nav a:hover {
    background-color: #654321;
    color: #ffffff;
}

/* ================= HERO ================= */

.hero {
    padding: 35px 6%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
}

.hero-text {
    flex: 1;
}

.hero-text .subtitle {
    color: #9c7958;
    font-size: 10px;
    margin-bottom: 18px;
    letter-spacing: 1px;
}

.hero-text h1 {
    font-family: 'Playfair Display', serif;
    font-size: 43px;
    font-weight: 400;
    line-height: 1.2;
    margin-bottom: 15px;
}

.hero-text p {
    font-size: 11px;
    color: #8c8177;
    line-height: 1.8;
}

.hero-image {
    flex: 1;
}

.hero-image img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    border-radius: 12px;
}

/* ================= CATEGORY ================= */

.category-nav {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 6%;
    background: white;
    border-top: 1px solid #f0ebe4;
    border-bottom: 1px solid #f0ebe4;
}

.category-nav button {
    border: none;
    background: transparent;
    padding: 9px 18px;
    border-radius: 30px;
    color: #6f5945;
    font-family: inherit;
    font-size: 11px;
    cursor: pointer;
    transition: .3s;
}

.category-nav button.active,
.category-nav button:hover {
    background: #856647;
    color: white;
}

.category-nav span {
    margin-left: auto;
    font-size: 9px;
    color: #a29484;
}

/* ================= MENU SECTION ================= */

.menu-section {
    padding: 35px 6% 65px;
}

.section-label {
    color: #a27e5c;
    font-size: 9px;
    letter-spacing: 1px;
    margin-bottom: 7px;
}

.section-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 22px;
}

.section-heading h2 {
    font-family: 'Playfair Display', serif;
    font-weight: 400;
    font-size: 27px;
}

.section-heading p {
    font-size: 10px;
    color: #9b9085;
}

/* ================= MENU CARD ================= */

.menu-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.menu-card {
    display: flex;
    align-items: center;
    gap: 20px;
    background: white;
    border: 1px solid #eee8df;
    border-radius: 12px;
    padding: 10px;
    transition: .3s;
}

.menu-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 18px rgba(80, 60, 40, .08);
}

.menu-card img {
    width: 190px;
    height: 165px;
    object-fit: cover;
    border-radius: 9px;
}

.menu-info {
    flex: 1;
}

.menu-info h3 {
    font-family: 'Playfair Display', serif;
    font-size: 19px;
    font-weight: 400;
    margin-bottom: 5px;
}

.price {
    font-size: 12px;
    color: #a47b50;
    font-weight: 600;
    margin-bottom: 10px;
}

.description {
    font-size: 10px;
    line-height: 1.8;
    color: #93877c;
}

.add-btn {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: none;
    background: #f4eee6;
    color: #987452;
    font-size: 19px;
    cursor: pointer;
    align-self: flex-start;
    transition: .3s;
}

.add-btn:hover {
    background: #856647;
    color: white;
}

/* ================= FOOTER ================= */

footer {
    background: #f2ebdf;
    padding: 45px 6%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 9px;
    color: #968675;
}

footer a {
    color: #968675;
    text-decoration: none;
    margin-left: 15px;
}

/* ================= RESPONSIVE ================= */

@media (max-width: 650px) {

    header {
        padding: 20px;
        flex-wrap: wrap;
        gap: 15px;
    }

    nav {
        width: 100%;
        gap: 5px;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    nav a {
        font-size: 11px;
        padding: 9px 12px;
    }

    .hero {
        padding: 25px 20px;
        flex-direction: column;
        align-items: stretch;
    }

    .hero-text h1 {
        font-size: 34px;
    }

    .hero-image img {
        height: 200px;
    }

    .category-nav {
        padding: 10px 15px;
        overflow-x: auto;
    }

    .category-nav button {
        white-space: nowrap;
    }

    .category-nav span {
        display: none;
    }

    .menu-section {
        padding: 30px 15px 45px;
    }

    .section-heading {
        align-items: flex-start;
        flex-direction: column;
        gap: 8px;
    }

    .menu-card {
        gap: 12px;
        padding: 8px;
    }

    .menu-card img {
        width: 105px;
        height: 120px;
    }

    .menu-info h3 {
        font-size: 15px;
    }

    .description {
        font-size: 9px;
    }

    .add-btn {
        width: 25px;
        height: 25px;
        flex-shrink: 0;
    }

    footer {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
}

</style>
</head>

<body>

<div class="container">

    <!-- HEADER -->
    <header>

        <div class="logo">
            ☼ daily crave
            <small>DAILY MOMENTS, DAILY TASTE</small>
        </div>

        <nav>
            <a href="#menu">Menu Kami</a>
            <a href="#makanan" class="active">Makanan</a>
            <a href="#minuman">Minuman</a>
            <a href="#dessert">Dessert</a>
        </nav>

    </header>

    <!-- HERO -->
    <section class="hero">

        <div class="hero-text">

            <div class="subtitle">
                ─── DIBUAT DENGAN CINTA
            </div>

            <h1>
                Rasa yang akrab.<br>
                Momen yang hangat.
            </h1>

            <p>
                Jelajahi pilihan makanan, minuman, dan penutup.
                Luangkan waktu, nikmati yang Anda nikmati.
            </p>

        </div>

        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1547592180-85f173990554?w=900"
            alt="Hidangan makanan">
        </div>

    </section>

    <!-- CATEGORY -->
    <div class="category-nav">

        <button class="active" onclick="filterMenu('all', this)">
            Main Course
        </button>

        <button onclick="filterMenu('makanan', this)">
            Nusantara
        </button>

        <button onclick="filterMenu('camilan', this)">
            Camilan
        </button>

        <button onclick="filterMenu('dessert', this)">
            Extra
        </button>

        <span>SETIAP MENU DIBUAT DARI HATI</span>

    </div>

    <!-- MENU -->
    <section class="menu-section" id="menu">

        <div class="section-label">
            MAKANAN ─── 05 PILIHAN
        </div>

        <div class="section-heading">
            <h2>Main Course</h2>
            <p>Temukan pilihan untuk waktu bersantap Anda.</p>
        </div>

        <div class="menu-list">

            <!-- MENU 1 -->
            <div class="menu-card" data-category="makanan">

                <img src="https://images.unsplash.com/photo-1532550907401-a500c9a57435?w=500"
                alt="Grill Chicken Steak">

                <div class="menu-info">
                    <h3>Grill Chicken Steak</h3>
                    <div class="price">Rp85.000</div>

                    <p class="description">
                        Chicken steak menggunakan dada ayam filet pilihan
                        yang dimarinasi dengan bawang putih, lada hitam,
                        garam, dan rempah pilihan. Disajikan dengan
                        sayuran segar, kentang, dan saus spesial.
                    </p>
                </div>

                <button class="add-btn"
                onclick="addMenu('Grill Chicken Steak')">+</button>

            </div>

            <!-- MENU 2 -->
            <div class="menu-card" data-category="makanan">

                <img src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?w=500"
                alt="Spaghetti Bolognese Katsu">

                <div class="menu-info">
                    <h3>Spaghetti Bolognese Katsu</h3>
                    <div class="price">Rp58.000</div>

                    <p class="description">
                        Spaghetti pilihan disajikan dengan saus
                        bolognese berbahan tomat segar, daging sapi cincang,
                        bawang bombay, bawang putih, dan rempah pilihan.
                        Dilengkapi chicken katsu crispy.
                    </p>
                </div>

                <button class="add-btn"
                onclick="addMenu('Spaghetti Bolognese Katsu')">+</button>

            </div>

            <!-- MENU 3 -->
            <div class="menu-card" data-category="makanan">

                <img src="https://images.unsplash.com/photo-1547592180-85f173990554?w=500"
                alt="Sop Iga">

                <div class="menu-info">
                    <h3>Sop Iga</h3>
                    <div class="price">Rp74.000</div>

                    <p class="description">
                        Potongan iga sapi pilihan dimasak perlahan
                        hingga empuk dalam kaldu kaya rempah yang kaya rasa.
                        Dilengkapi dengan wortel, kentang, tomat,
                        daun bawang, seledri, dan taburan bawang goreng.
                    </p>
                </div>

                <button class="add-btn"
                onclick="addMenu('Sop Iga')">+</button>

            </div>

            <!-- MENU 4 -->
            <div class="menu-card" data-category="makanan">

                <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=500"
                alt="Nasi Goreng Katsu">

                <div class="menu-info">
                    <h3>Nasi Goreng Katsu</h3>
                    <div class="price">Rp64.000</div>

                    <p class="description">
                        Nasi putih dimasak dengan bumbu rempah,
                        kecap manis, bawang merah, bawang putih,
                        telur, dan sayuran pilihan hingga harum.
                        Disajikan bersama chicken katsu renyah.
                    </p>
                </div>

                <button class="add-btn"
                onclick="addMenu('Nasi Goreng Katsu')">+</button>

            </div>

            <!-- MENU 5 -->
            <div class="menu-card" data-category="makanan">

                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=500"
                alt="Nasi Timbel Ayam Goreng">

                <div class="menu-info">
                    <h3>Nasi Timbel Ayam Goreng</h3>
                    <div class="price">Rp58.000</div>

                    <p class="description">
                        Nasi putih hangat dibungkus daun pisang
                        untuk menghasilkan aroma khas dan disajikan
                        bersama ayam goreng berbumbu kuning yang
                        meresap hingga ke dalam.
                    </p>
                </div>

                <button class="add-btn"
                onclick="addMenu('Nasi Timbel Ayam Goreng')">+</button>

            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <footer>

        <p>© 2025 Daily Crave. Dibuat dengan sepenuh rasa.</p>

        <div>
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Syarat & Ketentuan</a>
        </div>

    </footer>

</div>

<script>

// FILTER MENU

function filterMenu(category, button) {

    const cards = document.querySelectorAll('.menu-card');

    const buttons = document.querySelectorAll('.category-nav button');

    buttons.forEach(btn => btn.classList.remove('active'));

    button.classList.add('active');

    cards.forEach(card => {

        if (
            category === 'all' ||
            card.dataset.category === category
        ) {

            card.style.display = 'flex';

        } else {

            card.style.display = 'none';

        }

    });

}

// TOMBOL TAMBAH MENU

function addMenu(name) {

    alert(name + ' berhasil ditambahkan!');

}

</script>

</body>
</html>
