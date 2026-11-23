<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daily Crave - Daftar Menu</title>
    <link rel="icon" type="image/png" href="{{ asset('gambar/favicon.png') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <style>
        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

        }

        body {

            background: #f8f6f1;

            color: #553b2b;

            font-family: 'Poppins', sans-serif;

        }

        .container {
            width: 100%;
            max-width: none;
            margin: 0;
            padding: 25px 4%;
        }

        .page-title {

            font-size: 13px;

            color: #999;

            margin-bottom: 25px;

        }

        /* HEADER */

        .navbar {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 45px;

        }

        .brand {
            font-family: 'Playfair Display', serif;
            font-size: 21px;
            line-height: 1.1;
            color: #68452f;
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

            grid-template-columns: 1.2fr 0.8fr;

            align-items: center;

            gap: 35px;

            margin-bottom: 40px;

        }

        .hero-text p {

            font-size: 11px;

            color: #a58c76;

            margin-bottom: 10px;

        }

        .hero-text h1 {

            font-family: 'Playfair Display', serif;

            font-size: clamp(30px, 4vw, 48px);

            line-height: 1.1;

            font-weight: 400;

            color: #a17d63;

            margin-bottom: 15px;

        }

        .hero-text span {

            font-size: 11px;

            line-height: 1.8;

            color: #806e5e;

        }

        .hero img {

            width: 100%;

            height: 220px;

            object-fit: cover;

            border-radius: 18px;

        }

        /* SECTION MENU */

        .menu-section {

            padding: 35px;

            margin-bottom: 0;

        }

        .food-section {

            background: #754a2c;

            color: #f8eee2;

        }

        .drink-section {

            background: #ead9c5;

            color: #654630;

        }

        .dessert-section {

            background: #fdfbf7;

            color: #654630;

        }

        .section-subtitle {

            font-size: 9px;

            letter-spacing: 2px;

            opacity: 0.8;

            margin-bottom: 3px;

        }

        .section-title {

            font-family: 'Playfair Display', serif;

            font-size: 30px;

            font-weight: 400;

            margin-bottom: 30px;

        }

        .menu-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 40px;

        }

        .category h3 {

            font-family: 'Playfair Display', serif;

            font-size: 17px;

            font-weight: 400;

            padding-bottom: 10px;

            border-bottom: 1px solid currentColor;

            margin-bottom: 10px;

        }

        .category ul {

            list-style: none;

        }

        .category li {

            font-size: 11px;

            padding: 8px 0;

            border-bottom: 1px solid rgba(120, 90, 65, 0.25);

        }

        .food-section .category li {

            border-color: rgba(255, 255, 255, 0.25);

        }

        .drink-section .category li {

            border-color: rgba(100, 70, 45, 0.2);

        }

        /* FOOTER */

        footer {

            text-align: center;

            padding: 30px 10px;

            font-size: 10px;

            color: #9b8068;

        }

        /* RESPONSIVE */

        @media (max-width: 700px) {

            .container {

                padding: 15px;

            }

            .navbar {

                align-items: flex-start;

                gap: 20px;

                flex-direction: column;

            }

            .nav-menu {

                gap: 18px;

                flex-wrap: wrap;

            }

            .hero {

                grid-template-columns: 1fr;

            }

            .hero img {

                height: 200px;

            }

            .menu-grid {

                grid-template-columns: 1fr;

                gap: 25px;

            }

            .menu-section {

                padding: 25px 20px;

            }

        }

        html,
        body {
            width: 100%;
            min-height: 100%;
            margin: 0 !important;
            padding: 0 !important;
            overflow-x: hidden;
        }

        .container {
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .page-title {
            display: none;
        }

        .navbar {
            width: 100%;
            padding: 25px 5%;
            margin: 0;
        }

        .hero {
            width: 100%;
            padding: 20px 5% 40px;
            margin: 0;
        }

        .menu-section {
            width: 100%;
            margin: 0;
            padding: 40px 5%;
        }
    </style>

</head>

<body>

    @php
        // Kelompokkan menu berdasarkan subkategori yang dipilih admin.
        $menuGroups = $menus->groupBy(fn ($menu) => $menu->subCategory?->slug);
        $foodSlugs = ['main-course', 'nusantara', 'comfort', 'extra'];
        $drinkSlugs = ['coffe-tea', 'coffee-tea', 'fresh-juice', 'soft-drink'];
        $dessertMenus = $menuGroups->get('desert', collect())
            ->concat($menuGroups->get('dessert', collect()))->values();
        $foodCount = collect($foodSlugs)->sum(fn ($slug) => $menuGroups->get($slug, collect())->count());
        $drinkCount = collect($drinkSlugs)->sum(fn ($slug) => $menuGroups->get($slug, collect())->count());
    @endphp

    <div class="container">

        <!-- HEADER -->
        <nav class="navbar">
            <div class="brand">
                ☼ daily crave
                <small>FOOD & DRINK</small>
            </div>

            <div class="nav-menu">

                <a href="{{ route('dashboard') }}" class="active">Menu Kami</a>
                <a href="{{ route('maincourse') }}">Makanan</a>

                <a href="{{ route('coffeeandtea') }}">Minuman</a>

                <a href="{{ route('dessert') }}">Dessert</a>


            </div>

        </nav>

        <!-- HERO -->

        <section class="hero">

            <div class="hero-text">

                <p>──── Menu Daily Crave ────</p>

                <h1>Rasa yang akrab.<br> Momen yang hangat.</h1>

                <span>

                    Jelajahi pilihan makanan, minuman, dan dessert.

                    Pilihan rasa yang pas untuk menemani harimu.

                </span>

            </div>

            <img src="https://images.unsplash.com/photo-1547592180-85f173990554?w=900" alt="Hidangan Daily Crave">

        </section>

        <!-- MAKANAN -->

        <section class="menu-section food-section" id="makanan">

            <p class="section-subtitle">01 - {{ $foodCount }} PILIHAN</p>

            <h2 class="section-title">Makanan</h2>

            <div class="menu-grid">

                <div class="category">

                    <h3>Main Course</h3>

                    <ul>
                        @foreach ($menuGroups->get('main-course', collect()) as $menu)
                            <li>{{ $menu->nama_menu }}</li>
                        @endforeach
                    </ul>

                </div>

                <div class="category">

                    <h3>Nusantara</h3>

                    <ul>
                        @foreach ($menuGroups->get('nusantara', collect()) as $menu)
                            <li>{{ $menu->nama_menu }}</li>
                        @endforeach
                    </ul>

                </div>

                <div class="category">

                    <h3>Comfort</h3>

                    <ul>
                        @foreach ($menuGroups->get('comfort', collect()) as $menu)
                            <li>{{ $menu->nama_menu }}</li>
                        @endforeach
                    </ul>

                </div>

            </div>

            <div style="max-width: 300px; margin-top: 30px;">

                <div class="category">

                    <h3>Extra</h3>

                    <ul>
                        @foreach ($menuGroups->get('extra', collect()) as $menu)
                            <li>{{ $menu->nama_menu }}</li>
                        @endforeach
                    </ul>

                </div>

            </div>

        </section>

        <!-- MINUMAN -->

        <section class="menu-section drink-section" id="minuman">

            <p class="section-subtitle">02 - {{ $drinkCount }} PILIHAN</p>

            <h2 class="section-title">Minuman</h2>

            <div class="menu-grid">

                <div class="category">

                    <h3>Coffee & Tea</h3>

                    <ul>
                        @foreach ($menuGroups->get('coffe-tea', collect())->concat($menuGroups->get('coffee-tea', collect())) as $menu)
                            <li>{{ $menu->nama_menu }}</li>
                        @endforeach
                    </ul>

                </div>

                <div class="category">

                    <h3>Fresh Juice</h3>

                    <ul>
                        @foreach ($menuGroups->get('fresh-juice', collect()) as $menu)
                            <li>{{ $menu->nama_menu }}</li>
                        @endforeach
                    </ul>

                </div>

                <div class="category">

                    <h3>Soft Drink</h3>

                    <ul>
                        @foreach ($menuGroups->get('soft-drink', collect()) as $menu)
                            <li>{{ $menu->nama_menu }}</li>
                        @endforeach
                    </ul>

                </div>

            </div>

        </section>

        <!-- DESSERT -->

        <section class="menu-section dessert-section">

            <p class="section-subtitle">03 - {{ $dessertMenus->count() }} PILIHAN</p>

            <h2 class="section-title">Dessert</h2>

            <div class="menu-grid">

                <div class="category">

                    <ul>
                        @foreach ($dessertMenus as $index => $menu)
                            @if ($index % 3 === 0)
                                <li>{{ $menu->nama_menu }}</li>
                            @endif
                        @endforeach
                    </ul>

                </div>

                <div class="category">

                    <ul>
                        @foreach ($dessertMenus as $index => $menu)
                            @if ($index % 3 === 1)
                                <li>{{ $menu->nama_menu }}</li>
                            @endif
                        @endforeach
                    </ul>

                </div>

                <div class="category">

                    <ul>
                        @foreach ($dessertMenus as $index => $menu)
                            @if ($index % 3 === 2)
                                <li>{{ $menu->nama_menu }}</li>
                            @endif
                        @endforeach
                    </ul>

                </div>

            </div>

        </section>

        <footer>

            © 2026 Daily Crave. Good Food, Good Mood.

        </footer>

    </div>

</body>

</html>
