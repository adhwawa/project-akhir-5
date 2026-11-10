
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daily Crave - Menu Kami</title>

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
    background: #faf8f4;
    color: #553b2b;
    font-family: 'Poppins', sans-serif;
}

.container {
    width: 100%;
    min-height: 100vh;
}

/* HEADER */

.navbar {
    width: 100%;
    padding: 18px 6%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.brand {
    font-family: 'Playfair Display', serif;
    font-size: 21px;
    color: #68452f;
    line-height: 1.1;
}

.brand small {
    display: block;
    font-family: 'Poppins', sans-serif;
    font-size: 6px;
    letter-spacing: 2px;
    margin-top: 3px;
}

.nav-menu {
    display: flex;
    align-items: center;
    gap: 28px;
}

.nav-menu a {
    text-decoration: none;
    font-size: 10px;
    color: #92745e;
    transition: 0.3s;
}

.nav-menu a:hover {
    color: #553b2b;
}

.nav-menu .active {
    background: #70472d;
    color: white;
    padding: 6px 16px;
    border-radius: 20px;
}

/* HERO */

.hero {
    padding: 18px 6% 28px;
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    align-items: center;
    gap: 35px;
}

.hero-text p {
    font-size: 8px;
    color: #a58c76;
    margin-bottom: 10px;
}

.hero-text h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(25px, 4vw, 39px);
    font-weight: 400;
    line-height: 1.15;
    color: #493729;
    margin-bottom: 12px;
}

.hero-text span {
    display: block;
    max-width: 350px;
    font-size: 9px;
    line-height: 1.8;
    color: #887767;
}

.hero img {
    width: 100%;
    height: 155px;
    object-fit: cover;
    border-radius: 9px;
}

/* SUB NAVIGATION */

.subnav {
    width: 100%;
    background: #ffffff;
    padding: 12px 7%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.subnav-left {
    display: flex;
    align-items: center;
    gap: 10px;
}

.subnav a {
    text-decoration: none;
    font-size: 8px;
    color: #624a37;
    padding: 5px 12px;
    border-radius: 20px;
}

.subnav a.active {
    background: #78533a;
    color: white;
}

.subnav-right {
    font-size: 6px;
    letter-spacing: 1px;
    color: #947c66;
}

/* MENU SECTION */

.menu-section {
    padding: 25px 6% 30px;
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: end;
    margin-bottom: 12px;
}

.section-subtitle {
    font-size: 7px;
    letter-spacing: 1.5px;
    color: #a58c76;
    margin-bottom: 3px;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 25px;
    font-weight: 400;
    color: #604431;
}

.section-note {
    font-size: 7px;
    color: #9b8876;
    padding-bottom: 5px;
}

/* FOOD CARD */

.food-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.food-card {
    background: #ffffff;
    border: 1px solid #eee8df;
    border-radius: 9px;
    padding: 6px;
    display: flex;
    align-items: center;
    gap: 12px;
    min-height: 91px;
    transition: 0.3s;
}

.food-card:hover {
    border-color: #c9ad92;
    transform: translateY(-2px);
}

.food-card img {
    width: 96px;
    height: 80px;
    object-fit: cover;
    border-radius: 7px;
    flex-shrink: 0;
}

.food-info {
    flex: 1;
    min-width: 0;
}

.food-info h3 {
    font-family: 'Playfair Display', serif;
    font-size: 14px;
    font-weight: 400;
    color: #624631;
    margin-bottom: 2px;
}

.price {
    font-size: 9px;
    color: #956b43;
    margin-bottom: 5px;
}

.description {
    font-size: 7px;
    line-height: 1.7;
    color: #897b6d;
}

.add-button {
    width: 16px;
    height: 16px;
    border: none;
    border-radius: 50%;
    background: #f3eee7;
    color: #987657;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-shrink: 0;
    margin-right: 5px;
    cursor: pointer;
}

/* FOOTER */

footer {
    margin-top: 0;
    padding: 35px 6%;
    background: #f1eadd;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 7px;
    color: #9b8876;
}

.footer-links {
    display: flex;
    gap: 15px;
}

.footer-links a {
    text-decoration: none;
    color: #927c67;
}

/* RESPONSIVE */

@media (max-width: 600px) {

    .navbar {
        padding: 18px 5%;
        flex-wrap: wrap;
        gap: 15px;
    }

    .brand {
        font-size: 19px;
    }

    .nav-menu {
        gap: 12px;
    }

    .nav-menu a {
        font-size: 9px;
    }

    .hero {
        padding: 15px 5% 25px;
        grid-template-columns: 1fr 0.9fr;
        gap: 15px;
    }

    .hero-text h1 {
        font-size: 25px;
    }

    .hero-text span {
        font-size: 8px;
    }

    .hero img {
        height: 120px;
    }

    .subnav {
        padding: 10px 4%;
    }

    .subnav-left {
        gap: 2px;
    }

    .subnav a {
        font-size: 7px;
        padding: 5px 7px;
    }

    .subnav-right {
        font-size: 5px;
    }

    .menu-section {
        padding: 22px 5% 30px;
    }

    .food-card {
        gap: 9px;
    }

    .food-card img {
        width: 90px;
        height: 76px;
    }

    .food-info h3 {
        font-size: 12px;
    }

    .description {
        font-size: 6.5px;
    }
}

@media (max-width: 380px) {
    .nav-menu {
        gap: 8px;
    }

    .hero-text h1 {
        font-size: 21px;
    }

    .section-note {
        display: none;
    }

    .food-card img {
        width: 78px;
    }
}
</style>
</head>

<body>

<div class="container">

    <!-- HEADER -->

    <nav class="navbar">

        <div class="brand">
            ☼ daily crave
            <small>FOOD & DRINK</small>
        </div>

        <div class="nav-menu">
            <a href="#makanan">Menu Kami</a>
            <a href="#makanan" class="active">Makanan</a>
            <a href="#minuman">Minuman</a>
            <a href="#dessert">Dessert</a>
        </div>

    </nav>

    <!-- HERO -->

    <section class="hero">

        <div class="hero-text">

            <p>──── MENU DAILY CRAVE ────</p>

            <h1>Rasa yang akrab.<br>
                Momen yang hangat.</h1>

            <span>
                Jelajahi pilihan makanan, minuman, dan penutup.
                Lewatkan waktu bersama yang lebih nikmat.
            </span>

        </div>

        <img
        src="https://images.unsplash.com/photo-1547592180-85f173990554?w=900"
        alt="Hidangan Daily Crave">

    </section>

    <!-- SUB NAVIGATION -->

    <div class="subnav">

        <div class="subnav-left">
            <a href="#main-course">Main Course</a>
            <a href="#nusantara" class="active">Nusantara</a>
            <a href="#comfort">Comfort</a>
            <a href="#extra">Extra</a>
        </div>

        <div class="subnav-right">
            DAFTAR MAKANAN DAILY CRAVE
        </div>

    </div>

    <!-- DAFTAR MAKANAN -->

    <section class="menu-section" id="makanan">

        <div class="section-header">

            <div>
                <p class="section-subtitle">
                    NUSANTARA ── 05 PILIHAN
                </p>

                <h2 class="section-title">Nusantara</h2>
            </div>

            <p class="section-note">
                Temukan pilihan untuk waktu bersantap Anda
            </p>

        </div>

        <div class="food-list">

            <!-- FOOD 1 -->

            <div class="food-card">

                <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=400"
                alt="Nasi Iga Bakar">

                <div class="food-info">

                    <h3>Nasi Iga Bakar</h3>

                    <p class="price">Rp72.000</p>

                    <p class="description">
                        Iga sapi pilihan dibakar dengan bumbu kecap manis,
                        berpadu dengan kentang dan sayuran. Disajikan bersama
                        nasi putih hangat, tumis buncis dan wortel.
                    </p>

                </div>

                <button class="add-button">+</button>

            </div>

            <!-- FOOD 2 -->

            <div class="food-card">

                <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=400"
                alt="Nasi Campur Taliwang">

                <div class="food-info">

                    <h3>Nasi Campur Taliwang</h3>

                    <p class="price">Rp66.000</p>

                    <p class="description">
                        Nasi putih hangat disajikan bersama ayam bakar
                        taliwang berbumbu cabai, bawang putih, tomat,
                        dan rempah khas Lombok. Dilengkapi lauk pilihan.
                    </p>

                </div>

                <button class="add-button">+</button>

            </div>

            <!-- FOOD 3 -->

            <div class="food-card">

                <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=400"
                alt="Nasi Goreng Jawa">

                <div class="food-info">

                    <h3>Nasi Goreng Jawa</h3>

                    <p class="price">Rp64.000</p>

                    <p class="description">
                        Nasi putih dimasak dengan bumbu tradisional
                        berupa bawang merah, bawang putih, cabai,
                        kecap, dan rempah pilihan.
                    </p>

                </div>

                <button class="add-button">+</button>

            </div>

            <!-- FOOD 4 -->

            <div class="food-card">

                <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?w=400"
                alt="Mie Goreng Jawa">

                <div class="food-info">

                    <h3>Mie Goreng Jawa</h3>

                    <p class="price">Rp60.000</p>

                    <p class="description">
                        Mie telur dimasak dengan racikan bumbu khas Jawa,
                        kecap manis, bawang merah, bawang putih,
                        dan sayuran segar.
                    </p>

                </div>

                <button class="add-button">+</button>

            </div>

            <!-- FOOD 5 -->

            <div class="food-card">

                <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=400"
                alt="Mie Nyemek Kampung Jawa">

                <div class="food-info">

                    <h3>Mie Nyemek Kampung Jawa</h3>

                    <p class="price">Rp60.000</p>

                    <p class="description">
                        Mie telur dimasak dengan sedikit kuah kental
                        berbumbu bawang putih, kemiri, cabai,
                        dan kecap manis khas Jawa.
                    </p>

                </div>

                <button class="add-button">+</button>

            </div>

        </div>

    </section>

    <!-- FOOTER -->

    <footer>

        <p>© 2026 Daily Crave. Good Food, Good Mood.</p>

        <div class="footer-links">
            <a href="#makanan">Kebijakan Privasi</a>
            <a href="#makanan">Syarat & Ketentuan</a>
        </div>

    </footer>

</div>

</body>
</html>
