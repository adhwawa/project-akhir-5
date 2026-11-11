
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Daily Crave</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            min-height: 100%;
        }

        body {
            background: #fdfbf8;
            color: #493a30;
            font-family: 'Poppins', sans-serif;
        }

        /* CONTAINER */

        .container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: #fdfbf8;
        }

        /* HEADER */

        .navbar {
            width: 100%;
            min-height: 85px;
            padding: 0 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 500;
            color: #503b2e;
            line-height: 1.2;
        }

        .brand small {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 9px;
            font-weight: 400;
            letter-spacing: 3px;
            color: #806b58;
            margin-top: 5px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-menu a {
            text-decoration: none;
            font-size: 11px;
            font-weight: 400;
            color: #705943;
            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: #684a34;
        }

        /* LOGIN AREA */

        .login-wrapper {
            flex: 1;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px 20px;
        }

        /* LOGIN CARD */

        .login-card {
            width: 440px;
            min-height: 510px;
            background: #f1eadd;
            border-radius: 12px;
            padding: 50px 65px;

            box-shadow:
                0 8px 20px rgba(92, 66, 43, 0.08),
                0 20px 45px rgba(92, 66, 43, 0.06),
                0 2px 6px rgba(92, 66, 43, 0.04);

            border: 1px solid rgba(255, 255, 255, 0.65);
        }

        .subtitle {
            font-size: 10px;
            font-weight: 500;
            letter-spacing: 2px;
            color: #805a38;
            margin-bottom: 12px;
        }

        .login-card h1 {
            font-family: 'Playfair Display', serif;
            font-size: 33px;
            font-weight: 500;
            line-height: 1.25;
            color: #382c24;
            margin-bottom: 14px;
        }

        .description {
            font-size: 11px;
            font-weight: 400;
            line-height: 1.8;
            color: #806b58;
            margin-bottom: 25px;
        }

        /* FORM */

        .form-group {
            margin-bottom: 17px;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 8px;
            color: #45352a;
        }

        .form-group input {
            width: 100%;
            height: 43px;
            padding: 0 13px;
            border: 1px solid #ded3c5;
            border-radius: 7px;
            background: #fff;
            outline: none;

            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            font-weight: 400;
            color: #49372a;

            transition: 0.3s;
        }

        .form-group input::placeholder {
            color: #a58d78;
            font-size: 11px;
            font-weight: 300;
        }

        .form-group input:focus {
            border-color: #98714e;
            box-shadow: 0 0 0 3px rgba(152, 113, 78, 0.10);
        }

        /* PASSWORD */

        .password-wrapper {
            position: relative;
            width: 100%;
        }

        .password-wrapper input {
            padding-right: 45px;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);

            border: none;
            background: transparent;
            cursor: pointer;
            color: #805b3d;

            font-size: 19px;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 3px;
            transition: 0.3s;
        }

        .toggle-password:hover {
            color: #49372b;
        }

        /* OPTIONS */

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 5px 0 20px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 10px;
            font-weight: 400;
            color: #79583b;
        }

        .remember input {
            width: 13px;
            height: 13px;
            accent-color: #805b3e;
            cursor: pointer;
        }

        .form-options a {
            font-size: 10px;
            font-weight: 400;
            color: #79583b;
            text-decoration: none;
        }

        .form-options a:hover {
            text-decoration: underline;
        }

        /* LOGIN BUTTON */

        .login-button {
            width: 100%;
            height: 44px;
            border: none;
            border-radius: 7px;
            background: #846044;
            color: white;

            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            font-weight: 500;

            padding: 0 15px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            cursor: pointer;
            transition: 0.3s;
        }

        .login-button:hover {
            background: #684a34;
            box-shadow: 0 5px 12px rgba(74, 48, 29, 0.15);
        }

        /* DIVIDER */

        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 22px 0 18px;
            color: #805b3d;
            font-size: 10px;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #d9cbbb;
        }

        /* REGISTER */

        .register-link {
            text-align: center;
            font-size: 11px;
            font-weight: 400;
            color: #79583b;
        }

        .register-link a {
            color: #63432d;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        /* FOOTER */

        footer {
            width: 100%;
            min-height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 10px;
            font-weight: 400;
            color: #796b5c;
            padding: 10px;
        }

        footer span {
            margin: 0 12px;
        }

        footer a {
            color: #796b5c;
            text-decoration: none;
        }

        footer a:hover {
            color: #503b2e;
        }

        /* RESPONSIVE */

        @media (max-width: 500px) {

            .navbar {
                padding: 0 20px;
                min-height: 75px;
            }

            .brand {
                font-size: 22px;
            }

            .brand small {
                font-size: 7px;
            }

            .nav-menu {
                gap: 12px;
            }

            .nav-menu a {
                font-size: 9px;
            }

            .login-wrapper {
                padding: 20px;
            }

            .login-card {
                width: 100%;
                max-width: 440px;
                min-height: 0;
                padding: 40px 30px;
            }

            .login-card h1 {
                font-size: 29px;
            }

            .description {
                font-size: 10px;
            }

            footer {
                font-size: 9px;
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
                <small>DAPUR & RUANG TEMU</small>
            </div>

            <div class="nav-menu">
                <a href="#">Cerita kami</a>
                <a href="#">☏ &nbsp; Butuh bantuan?</a>
            </div>

        </nav>

        <!-- LOGIN -->

        <main class="login-wrapper">

            <div class="login-card">

                <p class="subtitle">MENU DI MEJA ANDA</p>

                <h1>
                    Selamat datang<br>
                    di Daily Crave.
                </h1>

                <p class="description">
                    Masuk untuk menjelajahi menu, menyimpan favorit,
                    dan memesan hidangan pilihan Anda.
                </p>

                <form action="{{ route('login.process') }}" method="POST">

                    @csrf

                    <!-- EMAIL -->

                    <div class="form-group">

                        <label for="email">
                            Alamat surel
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Masukkan alamat surel Anda"
                            value="{{ old('email') }}"
                            required>

                    </div>

                    <!-- PASSWORD -->

                    <div class="form-group">

                        <label for="password">
                            Kata sandi
                        </label>

                        <div class="password-wrapper">

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Masukkan kata sandi Anda"
                                required>

                            <button
                                type="button"
                                class="toggle-password"
                                id="togglePassword"
                                aria-label="Tampilkan kata sandi">

                                <span id="eyeIcon">◉</span>

                            </button>

                        </div>

                    </div>

                    <!-- REMEMBER & FORGOT -->

                    <div class="form-options">

                        <label class="remember">

                            <input
                                type="checkbox"
                                name="remember">

                            Ingat saya

                        </label>

                        <a href="#">
                            Lupa kata sandi?
                        </a>

                    </div>

                    <!-- BUTTON -->

                    <button type="submit" class="login-button">

                        <span>Masuk & lihat menu</span>

                        <span>→</span>

                    </button>

                </form>

                <!-- DIVIDER -->

                <div class="divider">
                    atau
                </div>

                <!-- REGISTER -->

                <p class="register-link">

                    Belum punya akun?

                    <a href="{{ route('register') }}">
                        Daftar di sini
                    </a>

                </p>

            </div>

        </main>

        <!-- FOOTER -->

        <footer>

            <a href="#">
                Kebijakan privasi
            </a>

            <span>•</span>

            <a href="#">
                Syarat & ketentuan
            </a>

        </footer>

    </div>

    <!-- JAVASCRIPT -->

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const password = document.getElementById('password');
            const toggleButton = document.getElementById('togglePassword');
            const eyeIcon = document.getElementById('eyeIcon');

            if (!password || !toggleButton || !eyeIcon) {
                return;
            }

            toggleButton.addEventListener('click', function () {

                if (password.type === 'password') {

                    // Tampilkan kata sandi

                    password.type = 'text';
                    eyeIcon.textContent = '◎';

                    toggleButton.setAttribute(
                        'aria-label',
                        'Sembunyikan kata sandi'
                    );

                } else {

                    // Sembunyikan kata sandi

                    password.type = 'password';
                    eyeIcon.textContent = '◉';

                    toggleButton.setAttribute(
                        'aria-label',
                        'Tampilkan kata sandi'
                    );

                }

            });

        });

    </script>

</body>
</html>
