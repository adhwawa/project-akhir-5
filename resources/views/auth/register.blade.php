
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Daily Crave</title>

    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

    <!-- HEADER -->
    <header class="topbar">
        <a href="/" class="brand">
            <span class="brand-mark">☼</span>

            <span class="brand-copy">
                <span class="brand-name">daily crave</span>
                <span class="brand-tagline">DAPUR & RUANG TEMU</span>
            </span>
        </a>

        <nav class="top-links">
            <a href="#">Cerita kami</a>
            <a href="#">Butuh bantuan?</a>
        </nav>
    </header>


    <!-- MAIN REGISTER -->
    <main class="page-main">

        <section class="login-card">

            <p class="eyebrow">GABUNG BERSAMA KAMI</p>

            <h1>
                Buat akun<br>
                Daily Crave.
            </h1>

            <p class="intro">
                Daftar untuk mulai menjelajahi dan memesan menu favorit Anda.
            </p>


            <!-- ERROR VALIDATION -->
            @if ($errors->any())
                <div class="alert">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif


            <!-- FORM -->
            <form action="{{ route('register.process') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nama lengkap</label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Masukkan nama lengkap"
                        value="{{ old('name') }}"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="email">Alamat surel</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan alamat surel"
                        value="{{ old('email') }}"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="password">Kata sandi</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Minimal 8 karakter"
                        minlength="8"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="password_confirmation">
                        Konfirmasi kata sandi
                    </label>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Ulangi kata sandi"
                        minlength="8"
                        required
                    >
                </div>


                <button type="submit" class="submit-button">
                    <span>Buat akun</span>
                    <span class="arrow">→</span>
                </button>

            </form>


            <!-- SEPARATOR -->
            <div class="separator">
                <span>atau</span>
            </div>


            <!-- LOGIN LINK -->
            <p class="register-text">
                Sudah punya akun?
                <a href="{{ route('login') }}">Masuk di sini</a>
            </p>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="footer-links">

        <div class="footer-brand">
            <span>☼ daily crave</span>
            <small>DAPUR & RUANG TEMU</small>
        </div>

        <div class="footer-right">
            <span>© {{ date('Y') }} Daily Crave</span>

            <div class="footer-menu">
                <a href="#">Kebijakan privasi</a>
                <span>•</span>
                <a href="#">Syarat & ketentuan</a>
            </div>
        </div>

    </footer>

</body>
</html>
