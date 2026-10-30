<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil | Bertaut</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
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
            min-height: 100%;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: #fffaf7;
            color: #073b91;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button,
        input {
            font-family: inherit;
        }


        /* =========================================================
           LAYOUT
        ========================================================= */

        .profile-wrapper {
            width: 100%;
            min-height: 100vh;
        }

        .profile-main {
            margin-left: 195px;
            width: calc(100% - 195px);
            min-height: 100vh;
            padding: 20px 28px 35px;
            position: relative;
            overflow: hidden;

            background:
                radial-gradient(
                    circle at 18% 8%,
                    rgba(255, 205, 226, .42) 0,
                    rgba(255, 205, 226, 0) 22%
                ),
                radial-gradient(
                    circle at 90% 23%,
                    rgba(255, 224, 144, .30) 0,
                    rgba(255, 224, 144, 0) 20%
                ),
                #fffaf7;
        }


        /* =========================================================
           TOPBAR
        ========================================================= */

        .profile-topbar {
            width: 100%;
            height: 52px;

            display: flex;
            align-items: center;
            gap: 20px;

            margin-bottom: 30px;
        }

        .profile-search {
            flex: 1;
            height: 52px;

            display: flex;
            align-items: center;
            gap: 13px;

            padding: 0 20px;

            background: #e5efff;
            border: 1px solid rgba(255,255,255,.8);
            border-radius: 28px;

            color: #82a0d0;
        }

        .profile-search-icon {
            font-size: 23px;
            line-height: 1;
        }

        .profile-search span {
            font-size: 13px;
            font-weight: 400;
        }

        .profile-user {
            display: flex;
            align-items: center;
            gap: 11px;

            min-width: 245px;
        }

        .profile-user-photo {
            width: 48px;
            height: 48px;

            border-radius: 50%;

            background: #ffb5cf;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;
            flex-shrink: 0;
        }

        .profile-user-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-user-photo span {
            font-size: 25px;
        }

        .profile-user-info {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .profile-user-name {
            font-size: 15px;
            font-weight: 600;
            color: #073b91;
        }

        .profile-user-role {
            margin-top: 4px;
            font-size: 12px;
            color: #7290bd;
            font-weight: 400;
        }

        .profile-user-arrow {
            margin-left: auto;
            font-size: 20px;
            color: #073b91;
        }


        /* =========================================================
           TITLE
        ========================================================= */

        .profile-heading {
            position: relative;

            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 25px;
            padding: 0 5px;
        }

        .profile-heading-left {
            position: relative;
        }

        .profile-heading-left::before,
        .profile-heading-left::after {
            content: "";
            position: absolute;

            width: 30px;
            height: 6px;

            border-radius: 10px;
            background: #ffd447;
        }

        .profile-heading-left::before {
            left: -38px;
            top: 25px;
            transform: rotate(28deg);
        }

        .profile-heading-left::after {
            left: -31px;
            top: 48px;
            transform: rotate(-15deg);
        }

        .profile-title {
            font-size: 42px;
            line-height: 1.05;
            font-weight: 700;
            letter-spacing: -1.4px;
            color: #073b91;
        }

        .profile-subtitle {
            margin-top: 7px;

            font-size: 15px;
            font-weight: 400;

            color: #255aa7;
        }

        .profile-heading-note {
            width: 245px;
            min-height: 105px;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 15px 25px;

            background: #ffeaa9;
            border-radius: 45% 55% 48% 52%;

            color: #073b91;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.35;
            text-align: center;

            transform: rotate(-2deg);
        }

        .profile-heading-note span {
            color: #ff5e8a;
            font-size: 25px;
            margin-left: 7px;
        }


        /* =========================================================
           PROFILE CARD
        ========================================================= */

        .profile-card {
            width: 100%;
            min-height: 300px;

            display: grid;
            grid-template-columns: 230px minmax(0, 1fr) 300px;

            background: rgba(255,255,255,.95);

            border-radius: 22px;

            box-shadow:
                0 8px 28px rgba(55, 91, 143, .08);

            overflow: hidden;

            margin-bottom: 22px;
        }


        /* =========================================================
           PROFILE PHOTO
        ========================================================= */

        .profile-photo-section {
            display: flex;
            align-items: center;
            justify-content: center;

            padding: 28px;
        }

        .profile-photo {
            width: 190px;
            height: 190px;

            border-radius: 50%;

            background: #ffb7d0;

            overflow: hidden;

            position: relative;

            border: 8px solid #fff;

            box-shadow:
                0 5px 18px rgba(0,0,0,.08);
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-photo-placeholder {
            width: 100%;
            height: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 75px;
        }

        .camera-button {
            position: absolute;

            right: 2px;
            bottom: 8px;

            width: 48px;
            height: 48px;

            border-radius: 50%;

            background: #258df0;
            color: #fff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;

            border: 4px solid #fff;
        }


        /* =========================================================
           PROFILE INFORMATION
        ========================================================= */

        .profile-information {
            padding: 32px 25px 25px 0;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .profile-name {
            font-size: 31px;
            font-weight: 700;
            line-height: 1.1;

            color: #073b91;
        }

        .volunteer-badge {
            display: inline-flex;
            align-items: center;

            width: fit-content;

            margin-top: 10px;
            padding: 7px 14px;

            border-radius: 20px;

            background: #ffe0ed;
            color: #ff4f89;

            font-size: 12px;
            font-weight: 600;
        }

        .volunteer-badge span {
            margin-right: 6px;
            font-size: 15px;
        }

        .profile-quote {
            margin-top: 14px;

            font-size: 14px;
            line-height: 1.5;

            color: #164c9d;
            font-weight: 400;
        }

        .profile-details {
            margin-top: 17px;

            display: flex;
            flex-direction: column;
            gap: 11px;
        }

        .profile-detail {
            display: flex;
            align-items: center;
            gap: 12px;

            font-size: 13px;
            color: #174e9d;
        }

        .detail-icon {
            width: 25px;
            min-width: 25px;

            font-size: 20px;

            text-align: center;
        }


        /* =========================================================
           PROFILE DECORATION
        ========================================================= */

        .profile-decoration {
            position: relative;

            margin: 28px 28px 28px 0;

            border-left: 1px solid #dce8f8;

            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .edit-profile {
            align-self: flex-end;

            padding: 10px 19px;

            border: 2px solid #258df0;
            border-radius: 22px;

            color: #1268d4;
            background: #fff;

            font-size: 12px;
            font-weight: 600;
        }

        .edit-profile span {
            margin-right: 5px;
        }

        .profile-leaf {
            margin-top: 25px;

            font-size: 75px;
            line-height: 1;

            transform: rotate(-10deg);
        }

        .profile-message {
            margin-top: -8px;

            padding: 16px 25px;

            border-radius: 45% 55% 50% 48%;

            background: #ffd9eb;

            color: #073b91;

            font-size: 17px;
            font-weight: 600;
            line-height: 1.35;

            text-align: center;

            transform: rotate(-3deg);
        }

        .profile-message span {
            color: #ff5b91;
            font-size: 23px;
        }


        /* =========================================================
           BOTTOM GRID
        ========================================================= */

        .profile-bottom {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);

            gap: 22px;

            position: relative;
            z-index: 2;
        }

        .profile-panel {
            min-height: 275px;

            background: rgba(255,255,255,.96);

            border-radius: 20px;

            padding: 25px 28px;

            box-shadow:
                0 8px 25px rgba(55, 91, 143, .07);
        }

        .panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 22px;
        }

        .panel-title {
            font-size: 22px;
            font-weight: 700;
            color: #073b91;
        }

        .panel-edit {
            width: 40px;
            height: 40px;

            border-radius: 50%;

            background: #e9f3ff;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #1268d4;

            font-size: 19px;
        }


        /* =========================================================
           TENTANG SAYA
        ========================================================= */

        .about-text {
            font-size: 14px;
            line-height: 1.7;

            color: #174e9d;

            max-width: 610px;
        }

        .about-quote {
            margin-top: 20px;

            padding: 15px 20px;

            background: #eaf5ff;

            border-radius: 15px;

            color: #1654a2;

            font-size: 13px;
            line-height: 1.5;
            font-style: italic;
        }

        .about-quote::before {
            content: "“";

            font-size: 34px;
            font-weight: 700;

            color: #72b3ff;

            vertical-align: -8px;

            margin-right: 6px;
        }


        /* =========================================================
           INFORMASI AKUN
        ========================================================= */

        .account-list {
            width: 100%;
        }

        .account-item {
            width: 100%;
            min-height: 58px;

            display: flex;
            align-items: center;

            border-bottom: 1px solid #e7eef8;

            gap: 15px;
        }

        .account-item:last-child {
            border-bottom: none;
        }

        .account-icon {
            width: 28px;
            min-width: 28px;

            font-size: 22px;

            text-align: center;

            color: #073b91;
        }

        .account-content {
            flex: 1;

            display: flex;
            align-items: center;
            gap: 20px;
        }

        .account-label {
            width: 105px;

            font-size: 13px;
            font-weight: 500;

            color: #174e9d;
        }

        .account-value {
            flex: 1;

            font-size: 12px;
            font-weight: 400;

            color: #6383b4;
        }

        .account-arrow {
            font-size: 22px;
            color: #073b91;
        }

        .account-logout {
            background: #f7f9fd;
            border-radius: 12px;

            margin-top: 7px;

            border-bottom: none;
        }

        .account-logout .account-label {
            color: #073b91;
            font-weight: 500;
        }


        /* =========================================================
           BACKGROUND DECORATION
        ========================================================= */

        .background-shape {
            position: absolute;
            pointer-events: none;
            z-index: 0;
        }

        .shape-pink {
            width: 270px;
            height: 95px;

            right: -45px;
            bottom: 20px;

            background: #ffd1e3;

            border-radius: 50%;

            transform: rotate(-7deg);
            opacity: .65;
        }

        .shape-yellow {
            width: 250px;
            height: 95px;

            left: -80px;
            bottom: -25px;

            background: #ffe49a;

            border-radius: 50%;

            opacity: .65;
        }

        .shape-mint {
            width: 270px;
            height: 100px;

            right: 120px;
            bottom: -45px;

            background: #c9f1e4;

            border-radius: 50%;

            opacity: .7;
        }


        /* =========================================================
           TABLET
        ========================================================= */

        @media (max-width: 1000px) {

            .profile-main {
                margin-left: 0;
                width: 100%;
                padding: 18px;
            }

            .profile-topbar {
                margin-bottom: 25px;
            }

            .profile-user {
                min-width: auto;
            }

            .profile-heading-note {
                display: none;
            }

            .profile-card {
                grid-template-columns: 190px minmax(0, 1fr);
            }

            .profile-decoration {
                display: none;
            }

            .profile-bottom {
                grid-template-columns: 1fr;
            }
        }


        /* =========================================================
           MOBILE
        ========================================================= */

        @media (max-width: 600px) {

            .profile-main {
                padding: 15px;
            }

            .profile-topbar {
                height: auto;
                flex-wrap: wrap;
            }

            .profile-search {
                order: 2;
                flex-basis: 100%;
            }

            .profile-user {
                margin-left: auto;
            }

            .profile-user-name {
                font-size: 13px;
            }

            .profile-user-role {
                font-size: 10px;
            }

            .profile-heading {
                margin-top: 10px;
            }

            .profile-title {
                font-size: 31px;
            }

            .profile-subtitle {
                font-size: 12px;
            }

            .profile-card {
                grid-template-columns: 1fr;
            }

            .profile-photo-section {
                padding-bottom: 5px;
            }

            .profile-photo {
                width: 155px;
                height: 155px;
            }

            .profile-information {
                padding: 15px 22px 25px;
            }

            .profile-name {
                font-size: 25px;
            }

            .profile-quote {
                font-size: 12px;
            }

            .profile-detail {
                font-size: 11px;
            }

            .profile-panel {
                padding: 20px;
            }

            .panel-title {
                font-size: 19px;
            }

            .about-text {
                font-size: 12px;
            }

            .account-content {
                gap: 8px;
            }

            .account-label {
                width: 75px;
                font-size: 11px;
            }

            .account-value {
                font-size: 10px;
            }
        }

    </style>
</head>


<body>

    <div class="profile-wrapper">

        {{-- SIDEBAR BERTAUT --}}
        @include('layouts.sidebar')


        <!-- =====================================================
             MAIN PROFILE
        ====================================================== -->

        <main class="profile-main">


            <!-- =================================================
                 TOPBAR
            ================================================== -->

            <header class="profile-topbar">

                <div class="profile-search">
                    <span class="profile-search-icon">⌕</span>
                    <span>Cari kegiatan, komunitas, atau lokasi...</span>
                </div>


                <div class="profile-user">

                    <div class="profile-user-photo">
                        <span>👩🏻</span>
                    </div>

                    <div class="profile-user-info">

                        <div class="profile-user-name">
                            Hai, {{ Auth::user()->name ?? 'Vivi Marchelia' }}!
                        </div>

                        <div class="profile-user-role">
                            Volunteer
                        </div>

                    </div>

                    <div class="profile-user-arrow">
                       ⌄
                    </div>

                </div>

            </header>



            <!-- =================================================
                 JUDUL
            ================================================== -->

            <section class="profile-heading">

                <div class="profile-heading-left">

                    <h1 class="profile-title">
                        Profil Saya
                    </h1>

                    <p class="profile-subtitle">
                        Kelola informasi pribadimu di sini.
                    </p>

                </div>


                <div class="profile-heading-note">
                    Karena Setiap Aksi
                    <br>
                    Punya Arti
                    <span>♥</span>
                </div>

            </section>



            <!-- =================================================
                 PROFILE CARD
            ================================================== -->

            <section class="profile-card">


                <!-- FOTO -->

                <div class="profile-photo-section">

                    <div class="profile-photo">

                        <div class="profile-photo-placeholder">
                            👩🏻
                        </div>

                        <div class="camera-button">
                            📷
                        </div>

                    </div>

                </div>



                <!-- INFORMASI -->

                <div class="profile-information">

                    <h2 class="profile-name">
                        {{ Auth::user()->name ?? 'Vivi Marchelia' }}
                    </h2>


                    <div class="volunteer-badge">
                        <span>♥</span>
                        Volunteer
                    </div>


                    <p class="profile-quote">
                        “Karena setiap aksi kecil, bisa membawa perubahan besar.”
                        💙
                    </p>


                    <div class="profile-details">

                        <div class="profile-detail">
                            <span class="detail-icon">✉</span>
                            <span>
                                {{ Auth::user()->email ?? 'vivi.marchelia@example.com' }}
                            </span>
                        </div>

                        <div class="profile-detail">
                            <span class="detail-icon">⌖</span>
                            <span>
                                Jakarta, Indonesia
                            </span>
                        </div>

                        <div class="profile-detail">
                            <span class="detail-icon">▣</span>
                            <span>
                                Bergabung sejak 12 Juni 2025
                            </span>
                        </div>

                    </div>

                </div>



                <!-- DEKORASI -->

                <div class="profile-decoration">

                    <button class="edit-profile">
                        <span>✎</span>
                        Edit Profil
                    </button>


                    <div class="profile-leaf">
                        🌿
                    </div>


                    <div class="profile-message">
                        Terus
                        <br>
                        Menebar Kebaikan
                        <span>♥</span>
                    </div>

                </div>

            </section>



            <!-- =================================================
                 BOTTOM CONTENT
            ================================================== -->

            <section class="profile-bottom">


                <!-- =================================================
                     TENTANG SAYA
                ================================================== -->

                <div class="profile-panel">

                    <div class="panel-header">

                        <h2 class="panel-title">
                            Tentang Saya
                        </h2>

                        <div class="panel-edit">
                            ✎
                        </div>

                    </div>


                    <p class="about-text">

                        Halo! Saya Vivi, seorang mahasiswa yang tertarik dalam
                        bidang lingkungan dan kesejahteraan hewan. Saya percaya
                        bahwa hal-hal kecil yang kita lakukan bersama bisa membawa
                        dampak besar untuk masa depan yang lebih baik. 🌱

                    </p>


                    <div class="about-quote">

                        Bersama, kita bisa menciptakan dunia
                        yang lebih baik. 💗

                    </div>

                </div>



                <!-- =================================================
                     INFORMASI AKUN
                ================================================== -->

                <div class="profile-panel">

                    <div class="panel-header">

                        <h2 class="panel-title">
                            Informasi Akun
                        </h2>

                    </div>


                    <div class="account-list">


                        <!-- EMAIL -->

                        <div class="account-item">

                            <div class="account-icon">
                                ✉
                            </div>

                            <div class="account-content">

                                <div class="account-label">
                                    Email
                                </div>

                                <div class="account-value">
                                    {{ Auth::user()->email ?? 'vivi.marchelia@example.com' }}
                                </div>

                            </div>

                            <div class="account-arrow">
                                ›
                            </div>

                        </div>



                        <!-- PASSWORD -->

                        <div class="account-item">

                            <div class="account-icon">
                                🔒
                            </div>

                            <div class="account-content">

                                <div class="account-label">
                                    Password
                                </div>

                                <div class="account-value">
                                    ********
                                </div>

                            </div>

                            <div class="account-arrow">
                                ›
                            </div>

                        </div>



                        <!-- UBAH PROFIL -->

                        <div class="account-item">

                            <div class="account-icon">
                                ♙
                            </div>

                            <div class="account-content">

                                <div class="account-label">
                                    Ubah Informasi Profil
                                </div>

                            </div>

                            <div class="account-arrow">
                                ›
                            </div>

                        </div>



                        <!-- LOGOUT -->

                        <div class="account-item account-logout">

                            <div class="account-icon">
                                ⇥
                            </div>

                            <div class="account-content">

                                <div class="account-label">
                                    Logout
                                </div>

                            </div>

                            <div class="account-arrow">
                                ›
                            </div>

                        </div>


                    </div>

                </div>

            </section>



            <!-- =================================================
                 BACKGROUND DECORATION
            ================================================== -->

            <div class="background-shape shape-pink"></div>
            <div class="background-shape shape-yellow"></div>
            <div class="background-shape shape-mint"></div>


        </main>

    </div>

</body>

</html>