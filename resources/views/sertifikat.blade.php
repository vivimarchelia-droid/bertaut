<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sertifikat | Bertaut</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #073b91;
            background:
                radial-gradient(circle at 80% 10%, #ffe5a8 0, #ffe5a8 90px, transparent 91px),
                radial-gradient(circle at 92% 75%, #b9f1df 0, #b9f1df 120px, transparent 121px),
                linear-gradient(135deg, #fffdf8 0%, #fff5f7 48%, #f1fff9 100%);
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
            border: none;
            cursor: pointer;
        }


        /* =========================================================
           HALAMAN UTAMA
        ========================================================= */

        .sertifikat-page {
            margin-left: 195px;
            width: calc(100% - 195px);
            min-height: 100vh;
            padding: 18px 24px 25px;
            position: relative;
            overflow: hidden;
        }


        /* =========================================================
           DEKORASI BACKGROUND
        ========================================================= */

        .bg-shape {
            position: absolute;
            pointer-events: none;
            z-index: 0;
        }

        .bg-yellow {
            width: 230px;
            height: 90px;
            background: #ffe38c;
            border-radius: 0 0 70px 70px;
            top: -25px;
            left: 30%;
            transform: rotate(-4deg);
            opacity: .75;
        }

        .bg-pink {
            width: 210px;
            height: 90px;
            background: #ffb6d4;
            border-radius: 80px;
            top: -25px;
            left: 48%;
            transform: rotate(-5deg);
            opacity: .65;
        }

        .bg-green {
            width: 170px;
            height: 170px;
            background: #b8ead9;
            border-radius: 50%;
            right: -65px;
            bottom: 70px;
            opacity: .55;
        }


        /* =========================================================
           TOPBAR
        ========================================================= */

        .sertifikat-topbar {
            position: relative;
            z-index: 2;

            width: 100%;
            min-height: 58px;

            display: flex;
            align-items: center;
            gap: 18px;

            margin-bottom: 22px;
        }

        .sertifikat-search {
            flex: 1;
            height: 54px;

            display: flex;
            align-items: center;
            gap: 13px;

            padding: 0 20px;

            background: rgba(226, 237, 255, .88);
            border-radius: 18px;
        }

        .sertifikat-search-icon {
            font-size: 25px;
            color: #0b55ad;
        }

        .sertifikat-search input {
            width: 100%;
            border: none;
            outline: none;
            background: transparent;

            color: #073b91;
            font-size: 15px;
        }

        .sertifikat-search input::placeholder {
            color: #7699d3;
        }

        .topbar-notification {
            width: 45px;
            height: 45px;

            display: flex;
            align-items: center;
            justify-content: center;

            position: relative;

            font-size: 25px;
            color: #073b91;
        }

        .notification-dot {
            position: absolute;
            top: 4px;
            right: 5px;

            width: 10px;
            height: 10px;

            background: #ff557c;
            border: 2px solid white;
            border-radius: 50%;
        }

        .topbar-profile {
            display: flex;
            align-items: center;
            gap: 11px;

            min-width: 220px;
        }

        .profile-photo {
            width: 48px;
            height: 48px;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #ffb5cf;
            font-size: 25px;
        }

        .profile-info strong {
            display: block;
            color: #073b91;
            font-size: 15px;
            font-weight: 700;
            white-space: nowrap;
        }

        .profile-info span {
            display: block;
            margin-top: 3px;
            color: #7291c6;
            font-size: 13px;
        }

        .profile-arrow {
            margin-left: auto;
            font-size: 18px;
        }


        /* =========================================================
           JUDUL
        ========================================================= */

        .sertifikat-heading {
            position: relative;
            z-index: 2;

            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 20px;
        }

        .heading-left {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .heading-icon {
            width: 62px;
            height: 62px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #ffd83d;
            border-radius: 18px;

            font-size: 35px;

            transform: rotate(-5deg);

            box-shadow: 0 8px 18px rgba(255, 197, 45, .25);
        }

        .heading-text h1 {
            color: #073b91;
            font-size: 40px;
            line-height: 1;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .heading-text p {
            margin-top: 8px;
            color: #4f79bd;
            font-size: 14px;
        }

        .heading-decoration {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .speech-bubble {
            padding: 14px 24px;

            background: #cfe9ff;
            border-radius: 35px;

            color: #073b91;
            font-size: 17px;
            font-weight: 700;
            font-style: italic;

            transform: rotate(-3deg);
        }

        .speech-bubble.yellow {
            background: #fff0b6;
            transform: rotate(3deg);
        }


        /* =========================================================
           AREA SERTIFIKAT
        ========================================================= */

        .certificate-layout {
            position: relative;
            z-index: 2;

            display: grid;
            grid-template-columns: 300px minmax(0, 1fr);
            gap: 16px;

            width: 100%;
        }


        /* =========================================================
           DAFTAR SERTIFIKAT
        ========================================================= */

        .certificate-list {
            background: rgba(255, 255, 255, .92);

            border: 1px solid rgba(255,255,255,.9);
            border-radius: 22px;

            padding: 18px;

            box-shadow: 0 12px 35px rgba(44, 84, 145, .08);
        }

        .list-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 14px;
        }

        .list-header h2 {
            font-size: 19px;
            color: #073b91;
        }

        .certificate-count {
            padding: 6px 11px;

            border-radius: 20px;

            background: #ffd8ec;
            color: #f04b8d;

            font-size: 11px;
            font-weight: 700;
        }

        .certificate-item {
            width: 100%;
            min-height: 92px;

            display: flex;
            align-items: center;
            gap: 11px;

            padding: 10px;

            margin-bottom: 10px;

            border: 2px solid transparent;
            border-radius: 16px;

            background: #fff;

            transition: .2s ease;
        }

        .certificate-item:hover {
            transform: translateY(-2px);
        }

        .certificate-item.active {
            background: #e8f5ff;
            border-color: #199cff;
        }

        .certificate-thumb {
            width: 67px;
            height: 67px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 12px;

            overflow: hidden;

            background: linear-gradient(135deg, #ffdca7, #9ee5d2);

            font-size: 30px;
        }

        .certificate-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .certificate-detail {
            min-width: 0;
        }

        .certificate-detail h3 {
            color: #073b91;
            font-size: 13px;
            line-height: 1.35;
        }

        .certificate-detail p {
            margin-top: 6px;
            color: #4380d5;
            font-size: 11px;
        }


        /* =========================================================
           PREVIEW
        ========================================================= */

        .certificate-preview-card {
            background: rgba(255,255,255,.95);

            border-radius: 22px;

            padding: 18px;

            box-shadow: 0 12px 35px rgba(44, 84, 145, .09);
        }

        .preview-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 12px;
        }

        .preview-header h2 {
            color: #073b91;
            font-size: 19px;
        }

        .preview-controls {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .preview-number {
            color: #4380d5;
            font-size: 13px;
            font-weight: 700;
        }

        .preview-arrow {
            width: 34px;
            height: 34px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #e5f1ff;
            color: #1261b4;

            font-size: 17px;
        }


        /* =========================================================
           SERTIFIKAT
        ========================================================= */

        .certificate-paper {
            width: 100%;
            aspect-ratio: 1.67 / 1;

            position: relative;
            overflow: hidden;

            border: 2px solid #0d65b7;

            background:
                radial-gradient(circle at 12% 17%, #d9f3ff 0 45px, transparent 46px),
                radial-gradient(circle at 91% 20%, #ffe48c 0 55px, transparent 56px),
                radial-gradient(circle at 14% 88%, #b7eadc 0 65px, transparent 66px),
                linear-gradient(135deg, #fffdf8, #fffefb);

            padding: 28px 35px;

            box-shadow: 0 10px 25px rgba(24, 82, 139, .08);
        }

        .certificate-paper::before {
            content: "";
            position: absolute;

            width: 210px;
            height: 210px;

            left: -90px;
            bottom: -100px;

            background: #65b9f0;
            border-radius: 50%;
            opacity: .8;
        }

        .certificate-paper::after {
            content: "";
            position: absolute;

            width: 130px;
            height: 130px;

            right: -55px;
            top: 15px;

            background: #9fe6d1;
            border-radius: 50%;
            opacity: .6;
        }

        .certificate-content {
            position: relative;
            z-index: 2;

            width: 100%;
            height: 100%;

            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .certificate-logo {
            align-self: flex-start;

            display: flex;
            align-items: center;
            gap: 8px;

            font-size: 19px;
            font-weight: 800;
            color: #073b91;
        }

        .certificate-logo-heart {
            font-size: 27px;
        }

        .certificate-small {
            margin-top: 7px;

            color: #073b91;
            font-size: 9px;
            font-weight: 600;
        }

        .certificate-title {
            margin-top: 15px;

            color: #073b91;
            font-size: clamp(32px, 4vw, 54px);
            line-height: .9;
            font-weight: 900;
            letter-spacing: -1px;
        }

        .certificate-subtitle {
            margin-top: 7px;

            padding: 4px 20px;

            border-radius: 20px;

            background: #f5a6cb;

            color: #073b91;

            font-size: 11px;
            font-weight: 800;
            letter-spacing: 3px;
        }

        .given-to {
            margin-top: 13px;

            color: #073b91;
            font-size: 10px;
        }

        .recipient-name {
            margin-top: 3px;

            color: #073b91;
            font-family: "Brush Script MT", "Segoe Script", cursive;
            font-size: clamp(28px, 3.3vw, 48px);
            font-weight: 500;
        }

        .recipient-line {
            width: 58%;
            height: 1px;

            margin-top: 2px;

            background: #073b91;
        }

        .certificate-description {
            max-width: 610px;

            margin-top: 11px;

            color: #073b91;

            font-size: 10px;
            line-height: 1.5;
            text-align: center;
        }

        .certificate-message {
            margin-top: 9px;

            padding: 5px 15px;

            border-radius: 20px;

            background: #d9efff;

            color: #073b91;

            font-size: 9px;
            font-weight: 700;
        }

        .certificate-footer {
            width: 75%;

            margin-top: auto;

            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            align-items: end;
            gap: 20px;
        }

        .signature {
            text-align: center;
            color: #073b91;
        }

        .signature-name {
            height: 22px;

            font-family: "Brush Script MT", "Segoe Script", cursive;
            font-size: 21px;
        }

        .signature-line {
            height: 1px;
            background: #073b91;
        }

        .signature small {
            display: block;
            margin-top: 4px;

            font-size: 8px;
        }

        .certificate-decoration-left {
            position: absolute;
            left: 20px;
            bottom: 25px;

            font-size: 42px;
            z-index: 3;
        }

        .certificate-decoration-right {
            position: absolute;
            right: 22px;
            bottom: 25px;

            font-size: 42px;
            z-index: 3;
        }


        /* =========================================================
           BUTTON
        ========================================================= */

        .certificate-actions {
            display: grid;
            grid-template-columns: .9fr 1.25fr 1.25fr;
            gap: 12px;

            margin-top: 13px;
        }

        .certificate-action {
            min-height: 48px;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            padding: 10px 14px;

            border-radius: 15px;

            font-size: 12px;
            font-weight: 700;
        }

        .action-view {
            background: #e6f2ff;
            color: #0755a5;
        }

        .action-download {
            background: #56c995;
            color: #073b91;
        }

        .action-share {
            background: #ff5991;
            color: white;
        }

        .certificate-action:hover {
            transform: translateY(-2px);
        }


        /* =========================================================
           BANNER BAWAH
        ========================================================= */

        .bottom-message {
            position: relative;
            z-index: 2;

            width: 100%;

            margin-top: 16px;

            min-height: 88px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 17px 25px;

            border-radius: 22px;

            background:
                linear-gradient(
                    100deg,
                    #ffd4e7 0%,
                    #fff0a9 52%,
                    #c9f0df 100%
                );

            overflow: hidden;
        }

        .bottom-message-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .bottom-plant {
            font-size: 37px;
        }

        .bottom-message h3 {
            color: #073b91;
            font-size: 17px;
        }

        .bottom-message p {
            margin-top: 4px;
            color: #3267ad;
            font-size: 11px;
        }

        .bottom-message-right {
            color: #073b91;
            font-size: 17px;
            font-weight: 800;
            font-style: italic;
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 1200px) {

            .sertifikat-page {
                padding: 16px 18px;
            }

            .certificate-layout {
                grid-template-columns: 270px minmax(0, 1fr);
            }

            .heading-decoration {
                display: none;
            }

            .topbar-profile {
                min-width: 190px;
            }

            .certificate-paper {
                padding: 22px 27px;
            }
        }


        @media (max-width: 900px) {

            .sertifikat-page {
                margin-left: 0;
                width: 100%;
                padding: 15px;
            }

            .certificate-layout {
                grid-template-columns: 1fr;
            }

            .certificate-list {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .list-header {
                grid-column: 1 / -1;
                margin-bottom: 0;
            }

            .certificate-item {
                margin-bottom: 0;
            }

            .topbar-profile {
                min-width: auto;
            }

            .profile-info {
                display: none;
            }
        }


        @media (max-width: 600px) {

            .sertifikat-page {
                padding: 12px;
            }

            .sertifikat-topbar {
                flex-wrap: wrap;
            }

            .sertifikat-search {
                flex-basis: 100%;
            }

            .topbar-notification {
                margin-left: auto;
            }

            .sertifikat-heading {
                margin-top: 10px;
            }

            .heading-icon {
                width: 50px;
                height: 50px;
                font-size: 27px;
            }

            .heading-text h1 {
                font-size: 30px;
            }

            .heading-text p {
                font-size: 11px;
            }

            .certificate-list {
                grid-template-columns: 1fr;
            }

            .certificate-paper {
                aspect-ratio: auto;
                min-height: 420px;
                padding: 22px 17px;
            }

            .certificate-title {
                font-size: 34px;
                margin-top: 22px;
            }

            .recipient-name {
                font-size: 31px;
            }

            .certificate-description {
                font-size: 9px;
                max-width: 90%;
            }

            .certificate-footer {
                width: 90%;
            }

            .certificate-actions {
                grid-template-columns: 1fr;
            }

            .bottom-message {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }

            .bottom-message-right {
                align-self: flex-end;
            }
        }
    </style>
</head>


<body>

    {{-- BACKGROUND DECORATION --}}
    <div class="bg-shape bg-yellow"></div>
    <div class="bg-shape bg-pink"></div>
    <div class="bg-shape bg-green"></div>


    {{-- =========================================================
         SIDEBAR
    ========================================================== --}}
    @include('layouts.sidebar')


    {{-- =========================================================
         HALAMAN SERTIFIKAT
    ========================================================== --}}
    <main class="sertifikat-page">


        {{-- =====================================================
             TOPBAR
        ====================================================== --}}
        <header class="sertifikat-topbar">

            <div class="sertifikat-search">
                <span class="sertifikat-search-icon">⌕</span>

                <input
                    type="text"
                    placeholder="Cari kegiatan, komunitas, atau lokasi..."
                >
            </div>


            <div class="topbar-notification">
                ♧
                <span class="notification-dot"></span>
            </div>


            <div class="topbar-profile">

                <div class="profile-photo">
                    👩🏻
                </div>

                <div class="profile-info">
                    <strong>Hai, Vivi Marchelia!</strong>
                    <span>Volunteer</span>
                </div>

                <div class="profile-arrow">
                   ⌄
                </div>

            </div>

        </header>



        {{-- =====================================================
             JUDUL
        ====================================================== --}}
        <section class="sertifikat-heading">

            <div class="heading-left">

                <div class="heading-icon">
                    ⭐
                </div>

                <div class="heading-text">

                    <h1>Sertifikat</h1>

                    <p>
                        Setiap aksi akan selalu berarti.
                        Lihat dan simpan sertifikatmu di sini!
                    </p>

                </div>

            </div>


            <div class="heading-decoration">

                <div class="speech-bubble">
                    Langkah Kecil,<br>
                    Dampak Besar 💗
                </div>

                <div class="speech-bubble yellow">
                    Aksi Kecil<br>
                    Dampak Besar 💛
                </div>

            </div>

        </section>



        {{-- =====================================================
             CERTIFICATE CONTENT
        ====================================================== --}}
        <section class="certificate-layout">


            {{-- =================================================
                 DAFTAR SERTIFIKAT
            ================================================== --}}
            <div class="certificate-list">

                <div class="list-header">

                    <h2>Daftar Sertifikat</h2>

                    <span class="certificate-count">
                        4 Sertifikat
                    </span>

                </div>


                {{-- ITEM 1 --}}
                <a href="#" class="certificate-item active">

                    <div class="certificate-thumb">
                        🏖️
                    </div>

                    <div class="certificate-detail">

                        <h3>
                            Bersih-Bersih<br>
                            Pantai Kuta
                        </h3>

                        <p>
                            20 September 2025
                        </p>

                    </div>

                </a>


                {{-- ITEM 2 --}}
                <a href="#" class="certificate-item">

                    <div class="certificate-thumb">
                        🌳
                    </div>

                    <div class="certificate-detail">

                        <h3>
                            Penanaman Pohon<br>
                            Bersama
                        </h3>

                        <p>
                            12 Agustus 2025
                        </p>

                    </div>

                </a>


                {{-- ITEM 3 --}}
                <a href="#" class="certificate-item">

                    <div class="certificate-thumb">
                        📚
                    </div>

                    <div class="certificate-detail">

                        <h3>
                            Edukasi Lingkungan<br>
                            di Sekolah
                        </h3>

                        <p>
                            5 Juli 2025
                        </p>

                    </div>

                </a>


                {{-- ITEM 4 --}}
                <a href="#" class="certificate-item">

                    <div class="certificate-thumb">
                        🐶
                    </div>

                    <div class="certificate-detail">

                        <h3>
                            Donasi & Perawatan<br>
                            Hewan
                        </h3>

                        <p>
                            18 Mei 2025
                        </p>

                    </div>

                </a>

            </div>



            {{-- =================================================
                 PREVIEW SERTIFIKAT
            ================================================== --}}
            <div class="certificate-preview-card">

                <div class="preview-header">

                    <h2>Pratinjau Sertifikat</h2>

                    <div class="preview-controls">

                        <span class="preview-number">
                            1 / 4
                        </span>

                        <button class="preview-arrow">
                            ‹
                        </button>

                        <button class="preview-arrow">
                            ›
                        </button>

                    </div>

                </div>



                {{-- =================================================
                     KERTAS SERTIFIKAT
                ================================================== --}}
                <div class="certificate-paper">

                    <div class="certificate-content">


                        {{-- LOGO --}}
                        <div class="certificate-logo">

                            <span class="certificate-logo-heart">
                                💙💛
                            </span>

                            <span>
                                Bertaut.
                            </span>

                        </div>

                        <div class="certificate-small">
                            Small Actions, Brighter World
                        </div>


                        {{-- TITLE --}}
                        <div class="certificate-title">
                            SERTIFIKAT
                        </div>


                        <div class="certificate-subtitle">
                            APRESIASI
                        </div>


                        <div class="given-to">
                            Diberikan kepada
                        </div>


                        {{-- NAMA PESERTA --}}
                        <div class="recipient-name">
                            Vivi Marchelia
                        </div>

                        <div class="recipient-line"></div>


                        {{-- DESKRIPSI --}}
                        <p class="certificate-description">

                            Atas partisipasi dan kontribusi sebagai relawan
                            dalam kegiatan Bersih-Bersih Pantai Kuta
                            yang diselenggarakan melalui platform Bertaut.
                            Terima kasih telah menjadi bagian dari perubahan
                            positif untuk lingkungan yang lebih bersih dan sehat.

                        </p>


                        <div class="certificate-message">
                            Kebaikan kecil, perubahan besar. 💙
                        </div>


                        {{-- FOOTER --}}
                        <div class="certificate-footer">

                            <div class="signature">

                                <div class="signature-name">
                                    Ayu Pratama
                                </div>

                                <div class="signature-line"></div>

                                <small>
                                    Founder Bertaut
                                </small>

                            </div>


                            <div class="signature">

                                <div style="height:22px;"></div>

                                <div class="signature-line"></div>

                                <small>
                                    17 September 2026
                                </small>

                            </div>


                            <div class="signature">

                                <div class="signature-name">
                                    Arul.
                                </div>

                                <div class="signature-line"></div>

                                <small>
                                    Tim Bertaut
                                </small>

                            </div>

                        </div>


                        {{-- DEKORASI --}}
                        <div class="certificate-decoration-left">
                            🌎🌿
                        </div>

                        <div class="certificate-decoration-right">
                            🐶🐱
                        </div>

                    </div>

                </div>



                {{-- =================================================
                     ACTION BUTTONS
                ================================================== --}}
                <div class="certificate-actions">

                    <button class="certificate-action action-view">
                        👁️
                        Lihat Ukuran Penuh
                    </button>

                    <button class="certificate-action action-download">
                        ⬇️
                        Download Sertifikat
                    </button>

                    <button class="certificate-action action-share">
                        ↗️
                        Bagikan ke Media Sosial
                    </button>

                </div>

            </div>

        </section>



        {{-- =====================================================
             BANNER BAWAH
        ====================================================== --}}
        <section class="bottom-message">

            <div class="bottom-message-left">

                <div class="bottom-plant">
                    🌱
                </div>

                <div>

                    <h3>
                        Koleksi setiap pengalaman baikmu
                    </h3>

                    <p>
                        Simpan, bagikan, dan jadikan inspirasi
                        untuk lebih banyak aksi di masa depan.
                    </p>

                </div>

            </div>


            <div class="bottom-message-right">
                Karena Setiap Aksi Punya Arti 💗
            </div>

        </section>

    </main>

</body>
</html>