<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Daily Crave</title>

    <link rel="stylesheet" href="{{ asset('css/daily-crave.css') }}">
</head>
<body>

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

<main class="page-main">

    <section class="login-card">

        <p class="eyebrow">GABUNG BERSAMA KAMI</p>

        <h1>Buat akun<br>Daily Crave.</h1>

        <p class="intro">
            Daftar untuk mulai menjelajahi dan memesan menu favorit Anda.
        </p>

        @if ($errors->any())
            <div class="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register.process') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama lengkap</label>
                <input
                    type="text"
                    name="name"
                    placeholder="Masukkan nama lengkap"
                    value="{{ old('name') }}"
                    required
                >
            </div>

            <div class="form-group">
                <label>Alamat surel</label>
                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan alamat surel"
                    value="{{ old('email') }}"
                    required
                >
            </div>

            <div class="form-group">
                <label>Kata sandi</label>
                <input
                    type="password"
                    name="password"
                    placeholder="Minimal 8 karakter"
                    required
                >
            </div>

            <div class="form-group">
                <label>Konfirmasi kata sandi</label>
                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="Ulangi kata sandi"
                    required
                >
            </div>

            <button type="submit" class="submit-button">
                <span>Buat akun</span>
                <span class="arrow">→</span>
            </button>

        </form>

        <div class="separator">
            <span>atau</span>
        </div>

        <p class="register-text">
            Sudah punya akun?
            <a href="{{ route('login') }}">Masuk di sini</a>
        </p>

    </section>

</main>

<footer class="footer-links">
    <a href="#">Kebijakan privasi</a>
    <span>•</span>
    <a href="#">Syarat & ketentuan</a>
</footer>

</body>
</html>
