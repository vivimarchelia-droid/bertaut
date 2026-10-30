
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bertaut - Volunteer App</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --navy: #12356b;
            --blue: #347ce8;
            --light-blue: #dcecff;
            --yellow: #ffd447;
            --pink: #ff9fbd;
            --cream: #fffdf8;
            --purple: #8c7cff;
            --red: #ff6f91;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
        }

        body {
            background: var(--cream);
            color: var(--navy);
            font-family: 'Poppins', sans-serif;

            /*
             * Tidak ada scroll pada laptop.
             * Scroll tetap aktif pada tablet dan HP.
             */
            overflow: hidden;
        }

        /* ================= NAVBAR ================= */

        .navbar {
            width: 100%;
            height: 78px;
            padding: 0 6%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background: white;
            position: relative;
            z-index: 20;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .brand-symbol {
            position: relative;
            width: 43px;
            height: 43px;
            flex-shrink: 0;
        }

        .brand-symbol::before,
        .brand-symbol::after {
            content: "";
            position: absolute;
            top: 7px;
            width: 23px;
            height: 34px;
            border-radius: 20px 20px 5px 20px;
        }

        .brand-symbol::before {
            left: 2px;
            background: var(--blue);
            transform: rotate(-42deg);
        }

        .brand-symbol::after {
            right: 2px;
            background: var(--yellow);
            transform: rotate(42deg);
        }

        .brand-name {
            color: var(--navy);
            font-family: 'Baloo 2', cursive;
            font-size: 36px;
            font-weight: 800;
            line-height: 0.9;
        }

        .brand-tagline {
            color: var(--blue);
            font-size: 9px;
            font-weight: 600;
            margin-top: 4px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-menu a {
            color: var(--navy);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: 0.2s ease;
        }

        .nav-menu a:hover {
            color: var(--blue);
        }

        .nav-login {
            padding: 12px 28px;
            border-radius: 30px;
            background: var(--blue);
            color: white !important;
        }

        .nav-login:hover {
            background: var(--navy);
        }

        /* ================= HERO ================= */

        .hero {
            position: relative;

            width: 100%;
            height: calc(100vh - 78px);

            display: grid;
            grid-template-columns: 0.85fr 1.15fr;
            align-items: center;
            gap: 8px;

            padding: 16px 5% 18px;

            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 8;
            min-width: 0;
        }

        .top-label {
            display: inline-block;
            margin-bottom: 12px;
            padding: 8px 18px;

            background: #fff0a6;
            color: var(--navy);
            border-radius: 25px;

            font-family: 'Baloo 2', cursive;
            font-size: 17px;
            font-weight: 700;

            transform: none;
        }

        .hero-title {
            margin-bottom: 17px;

            color: var(--navy);
            font-family: 'Baloo 2', cursive;
            font-size: clamp(62px, 6.2vw, 94px);
            font-weight: 800;
            line-height: 0.84;
            letter-spacing: -2px;
        }

        .hero-title .blue {
            color: var(--blue);
        }

        .hero-description {
            max-width: 490px;
            margin-bottom: 23px;

            color: #526b8e;
            font-size: 13px;
            line-height: 1.75;
        }

        .button-area {
            width: 100%;
            max-width: 455px;
        }

        .get-started {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 28px;

            width: 100%;
            padding: 15px 24px;

            border-radius: 14px;
            background: var(--navy);
            color: white;

            font-size: 16px;
            font-weight: 700;
            text-decoration: none;

            box-shadow: 0 5px 0 #082044;
            transition: 0.2s ease;
        }

        .get-started span {
            color: var(--yellow);
            font-size: 26px;
        }

        .get-started:hover {
            transform: translateY(3px);
            box-shadow: 0 2px 0 #082044;
        }

        .login-text {
            margin-top: 15px;

            color: #71809b;
            font-size: 12px;
            text-align: center;
        }

        .login-text a {
            color: var(--blue);
            font-weight: 700;
            text-decoration: none;
        }

        .bottom-note {
            position: absolute;
            left: 5%;
            bottom: 20px;
            z-index: 10;

            color: var(--blue);
            font-family: 'Baloo 2', cursive;
            font-size: 18px;
            font-weight: 700;
        }

        /* ================= ILUSTRASI ================= */

        .illustration-area {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: visible;
        }

        .main-blob {
            position: absolute;
            z-index: 0;

            width: 96%;
            height: 84%;

            top: 8%;
            left: 2%;

            background: var(--light-blue);
            border-radius: 48% 52% 45% 55%;
        }

        .yellow-blob {
            position: absolute;
            z-index: 1;

            width: 31%;
            height: 25%;

            right: 0;
            bottom: 2%;

            background: var(--yellow);
            border-radius: 55% 45% 55% 45%;
        }

        .pink-blob {
            position: absolute;
            z-index: 1;

            width: 31%;
            height: 25%;

            left: 0;
            bottom: 2%;

            background: var(--pink);
            border-radius: 45% 55% 45% 55%;
        }

        .hero-image {
            position: relative;
            z-index: 3;

            display: block;
            width: 112%;
            max-width: 690px;
            max-height: calc(100vh - 112px);

            object-fit: contain;
        }

        /* ================= DEKORASI UTAMA ================= */

        .doodle {
            position: absolute;
            z-index: 6;
            user-select: none;
            pointer-events: none;
        }

        .heart {
            display: none;
        }

        .star {
            top: 2%;
            right: 7%;

            color: var(--yellow);
            font-size: 64px;
            transform: none;
        }

        .sparkle {
            bottom: 18%;
            left: 0;

            color: var(--purple);
            font-size: 48px;
            transform: none;
        }

        .sun {
            right: 0;
            bottom: 16%;

            color: var(--yellow);
            font-size: 54px;
            transform: none;
        }

        /* ================= DEKORASI TAMBAHAN ================= */

        .extra-decoration {
            position: absolute;
            inset: 0;
            z-index: 2;
            pointer-events: none;
        }

        .hero-content,
        .illustration-area,
        .hero-image {
            position: relative;
        }

        /* Hati tambahan */

        .deco-heart {
            position: absolute;
            color: var(--red);
            font-size: 39px;
            font-weight: bold;
        }

        .heart-one {
            top: 15%;
            left: 48%;
            transform: rotate(-18deg);
        }

        .heart-two {
            bottom: 13%;
            left: 3%;
            color: var(--yellow);
            font-size: 32px;
            transform: rotate(15deg);
        }

        .heart-three {
            top: 28%;
            right: 29%;
            color: var(--red);
            font-size: 43px;
            transform: rotate(14deg);
        }

        /* Bintang tambahan */

        .deco-star {
            position: absolute;
            color: var(--yellow);
            font-size: 58px;
        }

        .star-one {
            top: 10%;
            left: 5%;
            transform: rotate(12deg);
        }

        .star-two {
            bottom: 20%;
            left: 43%;
            color: var(--purple);
            font-size: 43px;
            transform: rotate(-15deg);
        }

        .star-three {
            top: 38%;
            right: 2%;
            color: var(--yellow);
            font-size: 37px;
            transform: rotate(20deg);
        }

        /* Sparkle tambahan */

        .deco-sparkle {
            position: absolute;
            color: var(--blue);
            font-size: 57px;
            font-weight: bold;
        }

        .sparkle-one {
            top: 32%;
            left: 1%;
        }

        .sparkle-two {
            bottom: 8%;
            right: 5%;
            color: var(--pink);
            font-size: 48px;
        }

        .sparkle-three {
            top: 18%;
            right: 37%;
            color: var(--yellow);
            font-size: 32px;
        }

        /* Titik-titik dekorasi */

        .deco-dot {
            position: absolute;
            width: 17px;
            height: 17px;
            border-radius: 50%;
        }

        .dot-one {
            top: 20%;
            left: 43%;
            background: #ffcb45;
        }

        .dot-two {
            bottom: 17%;
            left: 49%;
            width: 13px;
            height: 13px;
            background: var(--pink);
        }

        .dot-three {
            top: 48%;
            right: 1%;
            width: 19px;
            height: 19px;
            background: var(--purple);
        }

        .dot-four {
            top: 42%;
            left: 36%;
            width: 12px;
            height: 12px;
            background: var(--red);
        }

        /* Lingkaran dekorasi */

        .deco-circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.9;
        }

        .circle-one {
            top: 25%;
            left: 47%;
            width: 27px;
            height: 27px;
            border: 5px solid #ffcb45;
        }

        .circle-two {
            bottom: 6%;
            right: 17%;
            width: 32px;
            height: 32px;
            border: 5px solid var(--pink);
        }

        .circle-three {
            top: 50%;
            left: 4%;
            width: 23px;
            height: 23px;
            border: 4px solid var(--blue);
        }

        /* Garis dekoratif kecil */

        .deco-line {
            position: absolute;
            width: 35px;
            height: 7px;
            border-radius: 10px;
            background: var(--yellow);
        }

        .line-one {
            top: 18%;
            left: 38%;
            transform: rotate(-35deg);
        }

        .line-two {
            top: 23%;
            left: 39%;
            transform: rotate(35deg);
            background: var(--pink);
        }

        .line-three {
            bottom: 22%;
            right: 27%;
            transform: rotate(-30deg);
            background: var(--blue);
        }

        /* ================= LAPTOP KECIL ================= */

        @media (max-width: 1200px) {
            .navbar {
                padding: 0 4%;
            }

            .hero {
                grid-template-columns: 0.88fr 1.12fr;
                padding: 14px 4% 18px;
                gap: 4px;
            }

            .nav-menu {
                gap: 20px;
            }

            .hero-title {
                font-size: 72px;
            }

            .brand-name {
                font-size: 32px;
            }

            .brand-tagline {
                display: none;
            }

            .top-label {
                font-size: 14px;
            }

            .hero-description {
                font-size: 12px;
                max-width: 420px;
            }

            .hero-image {
                width: 115%;
                max-width: 650px;
            }

            .deco-heart {
                font-size: 31px;
            }

            .deco-star {
                font-size: 45px;
            }

            .deco-sparkle {
                font-size: 44px;
            }
        }

        /* ================= TABLET DAN HP ================= */

        @media (max-width: 850px) {
            body {
                overflow-y: auto;
            }

            .navbar {
                height: 70px;
                padding: 0 20px;
            }

            .brand-name {
                font-size: 30px;
            }

            .brand-symbol {
                width: 36px;
                height: 36px;
            }

            .nav-menu a:not(.nav-login) {
                display: none;
            }

            .nav-login {
                padding: 10px 20px;
                font-size: 12px !important;
            }

            .hero {
                height: auto;
                min-height: auto;

                display: flex;
                flex-direction: column;
                gap: 8px;

                padding: 15px 20px 35px;
                overflow: visible;
            }

            .illustration-area {
                order: 1;
                width: 100%;
                height: 390px;
                min-height: 390px;
            }

            .hero-content {
                order: 2;
                width: 100%;
                max-width: 560px;
                text-align: center;
            }

            .hero-title {
                font-size: 64px;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
                font-size: 13px;
            }

            .button-area {
                margin: auto;
            }

            .hero-image {
                width: 100%;
                max-width: 480px;
                max-height: 390px;
            }

            .bottom-note {
                display: none;
            }

            .extra-decoration {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .illustration-area {
                height: 285px;
                min-height: 285px;
            }

            .hero-image {
                max-width: 355px;
            }

            .hero-title {
                font-size: 53px;
            }

            .hero-description {
                font-size: 12px;
            }

            .top-label {
                font-size: 12px;
            }

            .get-started {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <nav class="navbar">

        <a href="/" class="brand">
            <div class="brand-symbol"></div>

            <div>
                <div class="brand-name">Bertaut.</div>

                <div class="brand-tagline">
                    Small Actions, Brighter World
                </div>
            </div>
        </a>

        <div class="nav-menu">
            <a href="{{ url('/login') }}" class="nav-login">
                Log In
            </a>
        </div>

    </nav>


    <!-- ================= HERO ================= -->

    <main class="hero" id="home">

        <!-- DEKORASI TAMBAHAN -->
        <div class="extra-decoration" aria-hidden="true">

            <span class="deco-heart heart-one">♥</span>
            <span class="deco-heart heart-two">♥</span>
            <span class="deco-heart heart-three">♥</span>

            <span class="deco-star star-one">✦</span>
            <span class="deco-star star-two">✦</span>
            <span class="deco-star star-three">✦</span>

            <span class="deco-sparkle sparkle-one">✧</span>
            <span class="deco-sparkle sparkle-two">✧</span>
            <span class="deco-sparkle sparkle-three">✧</span>

            <span class="deco-dot dot-one"></span>
            <span class="deco-dot dot-two"></span>
            <span class="deco-dot dot-three"></span>
            <span class="deco-dot dot-four"></span>

            <span class="deco-circle circle-one"></span>
            <span class="deco-circle circle-two"></span>
            

            <span class="deco-line line-one"></span>
            <span class="deco-line line-two"></span>
            <span class="deco-line line-three"></span>

        </div>


        <!-- TEKS DI KIRI -->

        <section class="hero-content">

            <div class="top-label">
                Together, we can make a difference!
            </div>

            <h1 class="hero-title">
                Better<br>
                <span class="blue">Together.</span>
            </h1>

            <p class="hero-description">
                Bertaut adalah platform untuk menemukan kegiatan volunteer,
                bertemu orang-orang baik, dan bersama-sama menciptakan
                perubahan kecil yang berarti.
            </p>

            <div class="button-area">

                <a href="{{ url('/login') }}" class="get-started">
                    Get Started
                    <span>→</span>
                </a>

                <p class="login-text">
                    Already have an account?
                    <a href="{{ url('/login') }}">Log in</a>
                </p>

            </div>

        </section>


        <!-- ILUSTRASI DI KANAN -->

        <section class="illustration-area">

            <div class="main-blob"></div>

            <div class="yellow-blob"></div>

            <div class="pink-blob"></div>

            <div class="doodle heart">♥</div>
            <div class="doodle star">★</div>
            <div class="doodle sparkle">✦</div>
            <div class="doodle sun">☀</div>

            <img
                src="{{ asset('images/volunteer-hero.png') }}"
                alt="Ilustrasi orang-orang sedang melakukan kegiatan volunteer"
                class="hero-image"
            >

        </section>


        <!-- TEKS BAGIAN BAWAH -->

        <div class="bottom-note">
            Good people, brighter world ♥
        </div>

    </main>

</body>
</html>