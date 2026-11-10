
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Daily Crave</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: #f5eee5;
            color: #49372b;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* HEADER */

        .navbar {
            height: 70px;
            padding: 0 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            color: #513b2d;
            line-height: 1.1;
        }

        .brand small {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 9px;
            letter-spacing: 3px;
            color: #96745c;
        }

        .brand-icon {
            color: #b77d50;
            font-family: 'Poppins', sans-serif;
            font-size: 27px;
            margin-right: 5px;
        }

        .nav-menu {
            display: flex;
            gap: 25px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #966b4b;
            font-size: 11px;
            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: #593b27;
        }

        /* REGISTER AREA */

        .register-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 20px;
        }

        .register-card {
            width: 100%;
            max-width: 430px;
            padding: 30px 35px;
            background: transparent;
        }

        .subtitle {
            font-size: 11px;
            letter-spacing: 1px;
            color: #a46d48;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .register-card h1 {
            font-size: 30px;
            line-height: 1.15;
            font-weight: 600;
            color: #49372b;
            margin-bottom: 10px;
        }

        .description {
            font-size: 11px;
            color: #8c7766;
            margin-bottom: 22px;
        }

        /* FORM */

        .form-group {
            margin-bottom: 13px;
        }

        .form-group label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            color: #594331;
            margin-bottom: 6px;
        }

        .form-group input {
            width: 100%;
            height: 41px;
            padding: 0 13px;
            border: 1px solid #e1d5c8;
            border-radius: 7px;
            background: #fffdfb;
            outline: none;
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            color: #49372b;
            transition: 0.3s;
        }

        .form-group input::placeholder {
            color: #b8a697;
        }

        .form-group input:focus {
            border-color: #a9683e;
            box-shadow: 0 0 0 3px rgba(169, 104, 62, 0.10);
        }

        /* BUTTON */

        .register-button {
            width: 100%;
            height: 42px;
            margin-top: 3px;
            border: none;
            border-radius: 7px;
            background: #a85f32;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .register-button span {
            margin-left: 8px;
            font-size: 15px;
        }

        .register-button:hover {
            background: #874a28;
            box-shadow: 0 6px 15px rgba(115, 66, 36, 0.15);
        }

        /* DIVIDER */

        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 17px 0;
            color: #9b8877;
            font-size: 10px;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #dfd2c4;
        }

        /* LOGIN LINK */

        .login-link {
            text-align: center;
            font-size: 11px;
            color: #8b7664;
        }

        .login-link a {
            color: #a45c31;
            font-weight: 600;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* FOOTER */

        footer {
            min-height: 58px;
            padding: 10px 7%;
            border-top: 1px solid #e8ddd1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-brand {
            font-family: 'Playfair Display', serif;
            font-size: 14px;
            font-weight: 600;
            color: #9b6746;
        }

        .footer-brand small {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 7px;
            font-weight: 400;
            letter-spacing: 1.5px;
            margin-top: 3px;
        }

        .footer-links {
            display: flex;
            gap: 12px;
            align-items: center;
            font-size: 9px;
            color: #a07859;
        }

        .footer-links a {
            color: #a07859;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: #68452e;
        }

        /* RESPONSIVE */

        @media (max-width: 600px) {

            .navbar {
                padding: 0 20px;
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

            .register-wrapper {
                padding: 20px 15px;
            }

            .register-card {
                padding: 25px 15px;
            }

            .register-card h1 {
                font-size: 27px;
            }

            footer {
                padding: 12px 20px;
                gap: 15px;
            }

            .footer-links {
                gap: 7px;
                font-size: 8px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- HEADER -->

        <nav class="navbar">

            <div class="brand">
                <span class="brand-icon">☼</span> daily crave
                <small>DAPUR & RUANG TEMU</small>
            </div>

            <div class="nav-menu">
                <a href="#">Cerita kami</a>
                <a href="#">Butuh bantuan?</a>
            </div>

        </nav>


        <!-- REGISTER FORM -->

        <main class="register-wrapper">

            <div class="register-card">

                <p class="subtitle">GABUNG BERSAMA KAMI</p>

                <h1>
                    Buat akun<br>
                    Daily Crave.
                </h1>

                <p class="description">
                    Daftar untuk mulai menjelajahi dan memesan menu favorit Anda.
                </p>


                <form action="{{ route('register.process') }}" method="POST">

                    @csrf

                    <!-- NAMA -->

                    <div class="form-group">

                        <label for="name">Nama lengkap</label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Masukkan nama lengkap"
                            value="{{ old('name') }}"
                            required>

                    </div>


                    <!-- EMAIL -->

                    <div class="form-group">

                        <label for="email">Alamat surel</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Masukkan alamat surel"
                            value="{{ old('email') }}"
                            required>

                    </div>


                    <!-- PASSWORD -->

                    <div class="form-group">

                        <label for="password">Kata sandi</label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Buat kata sandi"
                            required>

                    </div>


                    <!-- KONFIRMASI PASSWORD -->

                    <div class="form-group">

                        <label for="password_confirmation">
                            Konfirmasi kata sandi
                        </label>

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Ulangi kata sandi"
                            required>

                    </div>


                    <!-- BUTTON -->

                    <button type="submit" class="register-button">
                        Buat akun <span>→</span>
                    </button>

                </form>


                <!-- DIVIDER -->

                <div class="divider">
                    atau
                </div>


                <!-- LOGIN LINK -->

                <p class="login-link">
                    Sudah punya akun?
                    <a href="{{ route('login') }}">Masuk di sini</a>
                </p>

            </div>

        </main>


        <!-- FOOTER -->

        <footer>

            <div class="footer-brand">
                ☼ daily crave
                <small>DAPUR & RUANG TEMU</small>
            </div>

            <div class="footer-links">

                <span>© 2026 Daily Crave</span>

                <a href="#">Kebijakan privasi</a>

                <span>•</span>

                <a href="#">Syarat & ketentuan</a>

            </div>

        </footer>

    </div>

</body>
</html>
