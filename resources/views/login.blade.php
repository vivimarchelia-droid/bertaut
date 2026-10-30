<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Bertaut</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">

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
            overflow: hidden;
        }

        body {
            font-family: "Nunito", sans-serif;
            background: #fffaf3;
            color: #173d75;
        }

        .login-page {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 20px;
        }

        /* =========================
           BACKGROUND ILUSTRASI
        ========================= */

        .login-illustration {
            position: absolute;
            inset: 0;

            width: 100%;
            height: 100%;

            object-fit: cover;
            object-position: center center;

            opacity: 1;
            z-index: 1;

            pointer-events: none;
        }

        /* =========================
           LAPISAN PUTIH DI TENGAH
        ========================= */

        .background-softener {
            position: absolute;

            width: 475px;
            height: 680px;

            left: 50%;
            top: 50%;

            transform: translate(-50%, -50%);

            background: rgba(255, 255, 255, 0.94);
            border-radius: 32px;

            z-index: 2;
            pointer-events: none;
        }

        /* =========================
           KARTU LOGIN
        ========================= */

        .login-card {
            position: relative;
            z-index: 10;

            width: 420px;
            max-width: 94%;

            background: #ffffff;

            border: 3px solid #d6e5ff;
            border-radius: 30px;

            padding: 27px 35px 23px;

            text-align: center;

            box-shadow: 0 10px 0 #dce8fa;
        }

        /* =========================
           LOGO BERTAUT
        ========================= */

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;

            gap: 8px;
            margin-bottom: 4px;
        }

        .logo-heart {
            width: 51px;
            height: 43px;

            display: block;
            flex-shrink: 0;
        }

        .logo-text {
            color: #173d75;

            font-size: 34px;
            font-weight: 900;

            line-height: 1;
            letter-spacing: -1.5px;
        }

        .tagline {
            color: #347ee8;

            font-size: 11px;
            font-weight: 800;

            margin-top: 8px;
            margin-bottom: 18px;
        }

        /* =========================
           JUDUL
        ========================= */

        .login-title {
            color: #173d75;

            font-size: 36px;
            font-weight: 900;
            line-height: 1.1;

            margin-bottom: 9px;
        }

        .login-title span {
            color: #347ee8;
        }

        .login-subtitle {
            color: #7b8ca7;

            font-size: 13px;
            line-height: 1.5;

            margin-bottom: 20px;
        }

        /* =========================
           INPUT
        ========================= */

        .form-group {
            text-align: left;
            margin-bottom: 13px;
        }

        .form-group label {
            display: block;

            color: #173d75;

            font-size: 13px;
            font-weight: 900;

            margin-bottom: 6px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;

            top: 50%;
            left: 14px;

            transform: translateY(-50%);

            color: #7ba5e9;
            font-size: 15px;

            pointer-events: none;
        }

        .form-group input {
            width: 100%;
            height: 47px;

            border: 2px solid #dce8fa;
            border-radius: 14px;

            background: #f7faff;
            color: #173d75;

            outline: none;

            padding: 0 14px 0 40px;

            font-family: "Nunito", sans-serif;
            font-size: 13px;

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
           IKON LIHAT PASSWORD
        ========================= */

        .password-toggle {
            position: absolute;

            top: 50%;
            right: 13px;

            transform: translateY(-50%);

            border: none;
            background: transparent;

            color: #7ba5e9;
            font-size: 17px;

            cursor: pointer;

            padding: 3px;
            z-index: 2;
        }

        .password-toggle:hover {
            color: #347ee8;
        }

        .password-input {
            padding-right: 45px !important;
        }

        /* =========================
           PESAN ERROR LOGIN
        ========================= */

        .error-message {
            color: #d9534f;
            background: #fff0f0;
            border: 1px solid #f5b5b5;
            border-radius: 12px;

            font-size: 12px;
            font-weight: 800;

            text-align: left;

            padding: 10px 12px;
            margin-bottom: 14px;
        }

        /* =========================
           FORGOT PASSWORD
        ========================= */

        .forgot-password {
            display: block;

            color: #347ee8;

            text-align: right;

            font-size: 12px;
            font-weight: 800;

            text-decoration: none;

            margin-top: 3px;
            margin-bottom: 17px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        /* =========================
           TOMBOL LOGIN
        ========================= */

        .login-button {
            width: 100%;
            height: 49px;

            border: none;
            border-radius: 14px;

            background: #173d75;
            color: #ffffff;

            font-family: "Nunito", sans-serif;
            font-size: 16px;
            font-weight: 900;

            cursor: pointer;

            box-shadow: 0 5px 0 #0d2b55;

            transition: 0.2s;
        }

        .login-button span {
            color: #ffd044;

            font-size: 21px;
            margin-left: 8px;
        }

        .login-button:hover {
            background: #347ee8;

            transform: translateY(-2px);

            box-shadow: 0 7px 0 #245eaa;
        }

        .login-button:active {
            transform: translateY(3px);

            box-shadow: 0 2px 0 #0d2b55;
        }

        /* =========================
           REGISTER
        ========================= */

        .register-text {
            color: #7b8ca7;

            font-size: 12px;

            margin-top: 18px;
        }

        .register-text a {
            color: #347ee8;

            font-weight: 900;
            text-decoration: none;
        }

        .register-text a:hover {
            text-decoration: underline;
        }

        .bottom-message {
            color: #347ee8;

            font-size: 12px;
            font-weight: 900;

            margin-top: 11px;
        }

        /* =========================
           LAPTOP DENGAN LAYAR PENDEK
        ========================= */

        @media (max-height: 720px) and (min-width: 551px) {
            .login-card {
                padding: 20px 32px 17px;
            }

            .logo-text {
                font-size: 30px;
            }

            .logo-heart {
                width: 45px;
                height: 38px;
            }

            .tagline {
                margin-top: 6px;
                margin-bottom: 12px;
            }

            .login-title {
                font-size: 31px;
            }

            .login-subtitle {
                margin-bottom: 14px;
            }

            .form-group {
                margin-bottom: 9px;
            }

            .form-group input {
                height: 41px;
            }

            .forgot-password {
                margin-bottom: 12px;
            }

            .login-button {
                height: 43px;
            }

            .register-text {
                margin-top: 12px;
            }

            .bottom-message {
                margin-top: 7px;
            }

            .background-softener {
                height: 570px;
            }
        }

        /* =========================
           HP
        ========================= */

        @media (max-width: 550px) {
            html,
            body {
                overflow: auto;
            }

            .login-page {
                height: auto;
                min-height: 100vh;
                padding: 25px 12px;
            }

            .login-card {
                width: 100%;
                max-width: 430px;
                padding: 27px 23px;
            }

            .login-illustration {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .background-softener {
                width: 95%;
                height: 650px;
            }
        }
    </style>
</head>

<body>

    <main class="login-page">

        <!-- Gambar background -->
        <img
            src="{{ asset('images/login-illustration.png') }}"
            alt="Ilustrasi relawan Bertaut"
            class="login-illustration"
        >

        <!-- Lapisan putih di belakang kartu -->
        <div class="background-softener"></div>

        <!-- Kartu login -->
        <section class="login-card">

            <!-- Logo Bertaut -->
            <div class="logo">

                <!-- Logo berbentuk hati biru dan kuning -->
                <svg
                    class="logo-heart"
                    viewBox="0 0 100 85"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-label="Logo Bertaut"
                    role="img"
                >
                    <!-- Bagian hati biru -->
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

                    <!-- Bagian hati kuning -->
                    <path
                        d="M50 78
                           L39 67
                           L62 43
                           C80 25 92 3 72 5
                           C61 6 53 12 50 21
                           C47 12 39 6 28 5
                           C8 3 -5 25 13 43
                           Z"
                        fill="#FFD044"
                        opacity="0"
                    />

                    <!-- Hati kuning yang menyatu dari sisi kanan -->
                    <path
                        d="M50 78
                           L39 67
                           L62 43
                           C80 25 92 3 72 5
                           C61 6 53 12 50 21
                           C47 12 39 6 28 5
                           C8 3 -5 25 13 43
                           L50 78
                           Z"
                        fill="#FFD044"
                        transform="translate(19 0) scale(0.82 1)"
                    />
                </svg>

                <div class="logo-text">
                    Bertaut.
                </div>
            </div>

            <p class="tagline">
                Small Actions, Brighter World
            </p>

            <!-- Judul login -->
            <h1 class="login-title">
                Welcome <span>back!</span>
            </h1>

            <p class="login-subtitle">
                Good to see you again.<br>
                Let's make an impact together!
            </p>

            <!-- Form login -->
            <form action="{{ url('/login') }}" method="POST">
                @csrf

                <!-- Pesan error jika email atau password salah -->
                @if ($errors->any())
                    <div class="error-message">
                        Email atau password yang kamu masukkan salah.
                    </div>
                @endif

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
                            placeholder="Enter your email"
                            value="{{ old('email') }}"
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
                            placeholder="Enter your password"
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

                <!-- Lupa password -->
                <a href="#" class="forgot-password">
                    Forgot password?
                </a>

                <!-- Tombol login -->
                <button type="submit" class="login-button">
                    Log In <span>→</span>
                </button>
            </form>

            <!-- Link register -->
            <p class="register-text">
                Don't have an account?
                <a href="{{ url('/register') }}">
                    Sign up
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
    </script>

</body>
</html>