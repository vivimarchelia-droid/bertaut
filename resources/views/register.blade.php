<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Bertaut</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap"
        rel="stylesheet"
    >

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
        }

        body {
            font-family: "Nunito", sans-serif;
            background: #fffaf3;
            color: #173d75;
            overflow: hidden;
        }

        /* =========================
           HALAMAN REGISTER
        ========================= */

        .register-page {
            position: relative;

            width: 100%;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 12px;

            overflow: hidden;
        }

        /* =========================
           BACKGROUND GAMBAR
        ========================= */

        .register-illustration {
            position: absolute;
            inset: 0;

            width: 100%;
            height: 100%;

            object-fit: cover;
            object-position: center;

            z-index: 1;
            pointer-events: none;
        }

        /* =========================
           KARTU REGISTER
        ========================= */

        .register-card {
            position: relative;
            z-index: 5;

            width: 410px;
            max-width: 94%;

            padding: 16px 30px 14px;

            background: rgba(255, 255, 255, 0.97);

            border: 3px solid #d6e5ff;
            border-radius: 26px;

            text-align: center;

            box-shadow: 0 8px 0 #dce8fa;
        }

        /* =========================
           LOGO
        ========================= */

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;

            gap: 7px;
            margin-bottom: 2px;
        }

        .logo-heart {
            width: 43px;
            height: 36px;
            flex-shrink: 0;
        }

        .logo-text {
            color: #173d75;

            font-size: 30px;
            font-weight: 900;

            line-height: 1;
            letter-spacing: -1.5px;
        }

        .tagline {
            color: #347ee8;

            font-size: 10px;
            font-weight: 800;

            margin-top: 5px;
            margin-bottom: 10px;
        }

        /* =========================
           JUDUL
        ========================= */

        .register-title {
            color: #173d75;

            font-size: 28px;
            font-weight: 900;
            line-height: 1.1;

            margin-bottom: 5px;
        }

        .register-title span {
            color: #347ee8;
        }

        .register-subtitle {
            color: #7b8ca7;

            font-size: 11px;
            line-height: 1.35;

            margin-bottom: 11px;
        }

        /* =========================
           FORM INPUT
        ========================= */

        .form-group {
            text-align: left;
            margin-bottom: 7px;
        }

        .form-group label {
            display: block;

            color: #173d75;

            font-size: 11px;
            font-weight: 900;

            margin-bottom: 3px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;

            top: 50%;
            left: 12px;

            transform: translateY(-50%);

            color: #7ba5e9;
            font-size: 13px;

            pointer-events: none;
        }

        .form-group input {
            width: 100%;
            height: 35px;

            padding: 0 12px 0 35px;

            border: 2px solid #dce8fa;
            border-radius: 11px;

            background: #f7faff;
            color: #173d75;

            outline: none;

            font-family: "Nunito", sans-serif;
            font-size: 11px;

            transition: 0.2s;
        }

        .form-group input:focus {
            border-color: #347ee8;
            background: #ffffff;
        }

        .form-group input::placeholder {
            color: #a4b2c7;
        }

        /* =========================
           IKON MATA PASSWORD
        ========================= */

        .password-input {
            padding-right: 42px !important;
        }

        .password-toggle {
            position: absolute;

            top: 50%;
            right: 10px;

            transform: translateY(-50%);

            border: none;
            background: transparent;

            color: #7ba5e9;
            font-size: 15px;

            cursor: pointer;

            padding: 3px;
            z-index: 2;
        }

        .password-toggle:hover {
            color: #347ee8;
        }

        /* =========================
           PESAN ERROR
        ========================= */

        .error-message {
            background: #ffe5e5;
            color: #c62828;
            border: 1px solid #ffb8b8;
            border-radius: 10px;

            padding: 9px 12px;
            margin-top: 10px;
            margin-bottom: 10px;

            font-size: 11px;
            font-weight: 800;
            text-align: left;
        }

        /* =========================
           TOMBOL REGISTER
        ========================= */

        .register-button {
            width: 100%;
            height: 40px;

            margin-top: 4px;

            border: none;
            border-radius: 11px;

            background: #173d75;
            color: #ffffff;

            font-family: "Nunito", sans-serif;
            font-size: 13px;
            font-weight: 900;

            cursor: pointer;

            box-shadow: 0 4px 0 #0d2b55;

            transition: 0.2s;
        }

        .register-button span {
            color: #ffd044;

            font-size: 17px;
            margin-left: 7px;
        }

        .register-button:hover {
            background: #347ee8;

            transform: translateY(-2px);

            box-shadow: 0 6px 0 #245eaa;
        }

        .register-button:active {
            transform: translateY(2px);

            box-shadow: 0 2px 0 #0d2b55;
        }

        /* =========================
           LINK LOGIN
        ========================= */

        .login-text {
            color: #7b8ca7;

            font-size: 11px;

            margin-top: 10px;
        }

        .login-text a {
            color: #347ee8;

            font-weight: 900;
            text-decoration: none;
        }

        .login-text a:hover {
            text-decoration: underline;
        }

        .bottom-message {
            color: #347ee8;

            font-size: 11px;
            font-weight: 900;

            margin-top: 6px;
        }

        /* =========================
           LAPTOP
        ========================= */

        @media (max-height: 800px) and (min-width: 551px) {
            .register-card {
                width: 400px;
                padding: 13px 27px 11px;
            }

            .logo-heart {
                width: 39px;
                height: 33px;
            }

            .logo-text {
                font-size: 27px;
            }

            .tagline {
                font-size: 9px;
                margin-top: 4px;
                margin-bottom: 7px;
            }

            .register-title {
                font-size: 25px;
                margin-bottom: 4px;
            }

            .register-subtitle {
                font-size: 10px;
                margin-bottom: 8px;
            }

            .form-group {
                margin-bottom: 5px;
            }

            .form-group label {
                font-size: 10px;
                margin-bottom: 2px;
            }

            .form-group input {
                height: 32px;
                font-size: 10px;
                border-radius: 9px;
            }

            .input-icon {
                font-size: 12px;
                left: 10px;
            }

            .password-toggle {
                font-size: 13px;
                right: 8px;
            }

            .register-button {
                height: 36px;
                font-size: 12px;
                border-radius: 9px;
            }

            .register-button span {
                font-size: 15px;
            }

            .login-text {
                font-size: 10px;
                margin-top: 7px;
            }

            .bottom-message {
                font-size: 10px;
                margin-top: 4px;
            }
        }

        /* =========================
           HP
        ========================= */

        @media (max-width: 550px) {
            body {
                overflow: auto;
            }

            .register-page {
                height: auto;
                min-height: 100vh;

                padding: 20px 10px;
                overflow: visible;
            }

            .register-card {
                width: 100%;
                max-width: 420px;

                padding: 22px 22px 18px;
            }

            .register-illustration {
                object-fit: cover;
            }

            .logo-text {
                font-size: 30px;
            }

            .register-title {
                font-size: 28px;
            }

            .form-group input {
                height: 42px;
                font-size: 12px;
            }

            .form-group label {
                font-size: 12px;
            }

            .password-toggle {
                font-size: 17px;
                right: 10px;
            }

            .register-button {
                height: 45px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <main class="register-page">

        <!-- Background ilustrasi -->
        <img
            src="{{ asset('images/login-illustration.png') }}"
            alt="Ilustrasi relawan Bertaut"
            class="register-illustration"
        >

        <!-- Kartu register -->
        <section class="register-card">

            <!-- Logo Bertaut -->
            <div class="logo">

                <svg
                    class="logo-heart"
                    viewBox="0 0 100 85"
                    xmlns="http://www.w3.org/2000/svg"
                    role="img"
                    aria-label="Logo Bertaut"
                >
                    <!-- Hati biru -->
                    <path
                        d="M50 78
                           L13 43
                           C-5 25 8 3 28 5
                           C39 6 47 12 50 21
                           C53 12 61 6 72 5
                           C92 3 105 25 87 43
                           Z"
                        fill="#347EE8"
                    />

                    <!-- Hati kuning -->
                    <path
                        d="M50 78
                           L13 43
                           C-5 25 8 3 28 5
                           C39 6 47 12 50 21
                           C53 12 61 6 72 5
                           C92 3 105 25 87 43
                           Z"
                        fill="#FFD044"
                        transform="translate(20 0) scale(0.82 1)"
                    />
                </svg>

                <div class="logo-text">
                    Bertaut.
                </div>

            </div>

            <p class="tagline">
                Small Actions, Brighter World
            </p>

            <!-- Judul register -->
            <h1 class="register-title">
                Join <span>Bertaut!</span>
            </h1>

            <p class="register-subtitle">
                Create your account and<br>
                start making an impact together!
            </p>

            <!-- Form register -->
            <form action="{{ url('/register') }}" method="POST">
                @csrf

                <!-- Nama lengkap -->
                <div class="form-group">
                    <label for="name">
                        Full name
                    </label>

                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Enter your full name"
                            required
                        >
                    </div>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">
                        Email address
                    </label>

                    <div class="input-wrapper">
                        <span class="input-icon">✉</span>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your email"
                            required
                        >
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">
                        Password
                    </label>

                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="password-input"
                            placeholder="Create a password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            id="passwordToggle"
                            aria-label="Tampilkan password"
                        >
                            👁
                        </button>
                    </div>
                </div>

                <!-- Konfirmasi password -->
                <div class="form-group">
                    <label for="password_confirmation">
                        Confirm password
                    </label>

                    <div class="input-wrapper">
                        <span class="input-icon">🔐</span>

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="password-input"
                            placeholder="Confirm your password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            id="confirmationToggle"
                            aria-label="Tampilkan konfirmasi password"
                        >
                            👁
                        </button>
                    </div>
                </div>

                <!-- Pesan error -->
                @if ($errors->any())
                    <div class="error-message">
                        {{ $errors->first() }}
                    </div>
                @endif

                <!-- Tombol daftar -->
                <button type="submit" class="register-button">
                    Create Account <span>→</span>
                </button>
            </form>

            <!-- Link login -->
            <p class="login-text">
                Already have an account?
                <a href="{{ url('/login') }}">
                    Log in
                </a>
            </p>

            <p class="bottom-message">
                Good people, brighter world ♥
            </p>

        </section>

    </main>

    <script>
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.getElementById('passwordToggle');

        const confirmationInput = document.getElementById('password_confirmation');
        const confirmationToggle = document.getElementById('confirmationToggle');

        passwordToggle.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggle.textContent = '🙈';
                passwordToggle.setAttribute(
                    'aria-label',
                    'Sembunyikan password'
                );
            } else {
                passwordInput.type = 'password';
                passwordToggle.textContent = '👁';
                passwordToggle.setAttribute(
                    'aria-label',
                    'Tampilkan password'
                );
            }
        });

        confirmationToggle.addEventListener('click', function () {
            if (confirmationInput.type === 'password') {
                confirmationInput.type = 'text';
                confirmationToggle.textContent = '🙈';
                confirmationToggle.setAttribute(
                    'aria-label',
                    'Sembunyikan konfirmasi password'
                );
            } else {
                confirmationInput.type = 'password';
                confirmationToggle.textContent = '👁';
                confirmationToggle.setAttribute(
                    'aria-label',
                    'Tampilkan konfirmasi password'
                );
            }
        });
    </script>

</body>
</html>