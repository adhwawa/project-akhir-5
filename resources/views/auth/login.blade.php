<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Daily Crave</title>

    <link rel="stylesheet" href="{{ asset('css/daily-crave.css') }}">
</head>

<body>
    <div class="container">

        <div class="logo">
            <h1>Daily Crave</h1>
            <p>Your daily dose of deliciousness</p>
        </div>

        <div class="form-heading">
            <h2 class="form-title">Welcome Back!</h2>
            <p class="form-description">
                Please enter your details to sign in.
            </p>
        </div>

        @if ($errors->any())
            <div class="alert">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email Address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >
            </div>

            <div class="remember">
                <label>
                    <input type="checkbox" name="remember">
                    Remember me
                </label>

                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" class="btn">
                Sign In
            </button>
        </form>

        <div class="footer-text">
            Don't have an account?
            <a href="{{ route('register') }}">Sign Up</a>
        </div>

    </div>
</body>

</html>