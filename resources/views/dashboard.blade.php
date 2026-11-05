<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Daily Crave</title>
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

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="submit-button" type="submit">Logout →</button>
    </form>
</header>

<main class="page-main">
    <section class="login-card">
        <p class="eyebrow">DAILY CRAVE</p>

        <h1>Halo, {{ Auth::user()->name }}!</h1>

        <p class="intro">
            Selamat datang di Daily Crave.
            Yuk, temukan hidangan favoritmu hari ini!
        </p>

        @if(session('status'))
            <p>{{ session('status') }}</p>
        @endif
    </section>
</main>

</body>
</html>