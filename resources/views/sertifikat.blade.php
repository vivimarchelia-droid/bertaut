<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sertifikat | Bertaut</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500;1,600&display=swap" rel="stylesheet">

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

        .certificate-empty-state {
            grid-column: 1 / -1;
            padding: 30px 18px;
            text-align: center;
            background: #f5faff;
            border: 2px dashed #c7dafa;
            border-radius: 16px;
            color: #4380d5;
        }

        .certificate-empty-state .empty-icon {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .certificate-empty-state h3 {
            color: #073b91;
            font-size: 16px;
            margin-bottom: 7px;
        }

        .certificate-empty-state p {
            font-size: 12px;
            line-height: 1.7;
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

            box-shadow:
                0 10px 25px rgba(24, 82, 139, .08),
                inset 0 0 0 7px rgba(255, 255, 255, .72),
                inset 0 0 0 9px rgba(13, 101, 183, .10);
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
            gap: 9px;

            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -.6px;
            color: #073b91;
        }

        .certificate-logo-heart {
            font-size: 27px;
        }

        .certificate-small {
            margin-top: 8px;

            color: #073b91;
            font-family: 'Poppins', sans-serif;
            font-size: 9px;
            font-weight: 600;
            letter-spacing: .35px;
        }

        .certificate-title {
            margin-top: 16px;

            color: #073b91;
            font-family: 'Poppins', sans-serif;
            font-size: clamp(34px, 4vw, 52px);
            line-height: 1.05;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .certificate-subtitle {
            margin-top: 9px;

            padding: 5px 23px;

            border-radius: 20px;

            background: #f5a6cb;

            color: #073b91;
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 3.5px;
            box-shadow: 0 4px 10px rgba(245, 166, 203, .20);
        }

        .given-to {
            margin-top: 14px;

            color: #3267ad;
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            font-weight: 500;
            letter-spacing: .4px;
        }

        .recipient-name {
            margin-top: 5px;

            color: #073b91;
            font-family: 'Poppins', sans-serif;
            font-size: clamp(25px, 2.8vw, 37px);
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: .3px;
            text-align: center;
            overflow-wrap: anywhere;
        }

        .recipient-line {
            width: 58%;
            height: 1px;

            margin-top: 2px;

            background: #073b91;
        }

        .certificate-description {
            max-width: 650px;

            margin-top: 13px;

            color: #244f91;
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            font-weight: 400;
            line-height: 1.65;
            letter-spacing: .05px;
            text-align: center;
        }

        .certificate-message {
            margin-top: 11px;

            padding: 6px 18px;

            border-radius: 20px;

            background: #d9efff;

            color: #073b91;
            font-family: 'Poppins', sans-serif;
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .1px;
            box-shadow: 0 4px 10px rgba(13, 101, 183, .08);
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
            height: 25px;

            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-style: italic;
            font-weight: 600;
            line-height: 1.3;
        }

        .signature-line {
            height: 1px;
            background: #073b91;
        }

        .signature small {
            display: block;
            margin-top: 5px;

            font-family: 'Poppins', sans-serif;
            font-size: 8px;
            font-weight: 500;
            letter-spacing: .15px;
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

                @if (auth()->user()->profile_photo)
                    <img
                        class="profile-photo"
                        src="{{ asset('storage/' . auth()->user()->profile_photo) }}"
                        alt="Foto profil"
                        style="object-fit: cover;"
                    >
                @else
                    <div class="profile-photo">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                @endif

                <div class="profile-info">
                    <strong>Hai, {{ auth()->user()->name }}!</strong>
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

                    <span class="certificate-count" id="certificateCount">
                        {{ $sertifikats->count() }} Sertifikat
                    </span>

                </div>

                @forelse ($sertifikats as $index => $sertifikat)

                    <button
                        type="button"
                        class="certificate-item {{ $index === 0 ? 'active' : '' }}"
                        data-certificate-index="{{ $index }}"
                    >

                        <div class="certificate-thumb">
                            🏅
                        </div>

                        <div class="certificate-detail">
                            <h3>{{ $sertifikat->kegiatan->judul }}</h3>
                            <p>
                                {{ $sertifikat->tanggal_terbit
                                    ? $sertifikat->tanggal_terbit->translatedFormat('d F Y')
                                    : '-' }}
                            </p>
                        </div>

                    </button>

                @empty

                    <div class="certificate-empty-state">
                        <div class="empty-icon">🌱</div>
                        <h3>Belum Ada Sertifikat</h3>
                        <p>
                            Sertifikat akan muncul di sini setelah kamu menyelesaikan
                            kegiatan dan EO memverifikasi keikutsertaanmu.
                        </p>
                    </div>

                @endforelse

            </div>



            {{-- =================================================
                 PREVIEW SERTIFIKAT
            ================================================== --}}
            @if ($sertifikats->isNotEmpty())
            <div class="certificate-preview-card">

                <div class="preview-header">

                    <h2>Pratinjau Sertifikat</h2>

                    <div class="preview-controls">

                        <span class="preview-number" id="previewNumber">
                            1 / 4
                        </span>

                        <button type="button" class="preview-arrow" id="previousCertificate" aria-label="Sertifikat sebelumnya">
                            ‹
                        </button>

                        <button type="button" class="preview-arrow" id="nextCertificate" aria-label="Sertifikat berikutnya">
                            ›
                        </button>

                    </div>

                </div>



                {{-- =================================================
                     KERTAS SERTIFIKAT
                ================================================== --}}
                <div class="certificate-paper" id="certificatePaper">

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
                        <div class="recipient-name" id="recipientName">
                            {{ auth()->user()->name }}
                        </div>

                        <div class="recipient-line"></div>


                        {{-- DESKRIPSI --}}
                        <p class="certificate-description" id="certificateDescription">

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

                                <small id="certificateDate">20 September 2025</small>

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



                    </div>

                </div>



                {{-- =================================================
                     ACTION BUTTONS
                ================================================== --}}
                <div class="certificate-actions">

                    <button type="button" class="certificate-action action-view" id="viewCertificate">
                        👁️
                        Lihat Ukuran Penuh
                    </button>

                    <button type="button" class="certificate-action action-download" id="downloadCertificate">
                        ⬇️
                        Download Sertifikat
                    </button>

                    <button type="button" class="certificate-action action-share" id="shareCertificate">
                        ↗️
                        Bagikan ke Media Sosial
                    </button>

                </div>

            </div>
            @else
                <div class="certificate-preview-card certificate-empty-state">
                    <div class="empty-icon">💙</div>
                    <h3>Perjalanan Aksimu Dimulai dari Sini</h3>
                    <p>
                        Ikuti kegiatan volunteer, selesaikan kegiatan tersebut,
                        lalu tunggu verifikasi dari EO untuk mendapatkan sertifikat.
                    </p>
                </div>
            @endif

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


    <!-- Modal ukuran penuh -->
    <div class="certificate-modal" id="certificateModal" aria-hidden="true">
        <div class="certificate-modal-content" role="dialog" aria-modal="true" aria-label="Pratinjau sertifikat ukuran penuh">
            <button type="button" class="certificate-modal-close" id="closeCertificateModal" aria-label="Tutup">×</button>
            <div id="fullCertificateContainer"></div>
        </div>
    </div>

    <style>
        .certificate-item {
            text-align: left;
            font-family: inherit;
            cursor: pointer;
        }
        /* Modal ukuran penuh: sertifikat ditampilkan utuh tanpa scroll di dalam modal */
        .certificate-modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            padding: 24px;
            background: rgba(5, 25, 62, .82);
            align-items: center;
            justify-content: center;
        }

        .certificate-modal.show {
            display: flex;
        }

        .certificate-modal-content {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: min(1500px, 96vw);
            height: 92vh;
            max-height: 92vh;
            padding: 58px 22px 22px;
            overflow: hidden;
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 24px 70px rgba(0, 0, 0, .25);
        }

        .certificate-modal-content #fullCertificateContainer {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            min-height: 0;
        }

        .certificate-modal-content .certificate-paper {
            /* Batasi ukuran berdasarkan tinggi layar agar seluruh sertifikat muat */
            width: min(100%, calc((92vh - 100px) * 1.67));
            max-width: 100%;
            max-height: calc(92vh - 100px);
            aspect-ratio: 1.67 / 1;
            height: auto;
            flex: 0 1 auto;
            padding: clamp(14px, 2.2vh, 28px) clamp(16px, 2.4vw, 35px);
            overflow: hidden;
        }

        .certificate-modal-close {
            position: absolute;
            top: 14px;
            right: 16px;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #ff5991;
            color: white;
            font-size: 27px;
            line-height: 1;
            box-shadow: 0 4px 12px rgba(255, 89, 145, .25);
        }

        .certificate-modal-close:hover {
            background: #ee3f7d;
            transform: scale(1.05);
        }

        /* Ukuran teks ikut mengecil secara proporsional pada layar yang pendek */
        .certificate-modal-content .certificate-title {
            font-size: clamp(28px, 4vh, 52px);
        }

        .certificate-modal-content .recipient-name {
            font-size: clamp(23px, 2.8vh, 37px);
        }

        .certificate-modal-content .certificate-description {
            font-size: clamp(8px, 1.15vh, 11px);
            line-height: 1.45;
        }

        .certificate-modal-content .certificate-message {
            font-size: clamp(8px, 1vh, 10px);
        }

        .certificate-modal-content .signature-name {
            font-size: clamp(12px, 1.7vh, 16px);
        }

        .certificate-modal-content .signature small {
            font-size: clamp(7px, .9vh, 9px);
        }

        @media (max-width: 700px) {
            .certificate-modal {
                padding: 10px;
            }

            .certificate-modal-content {
                width: 100%;
                height: auto;
                max-height: 94vh;
                padding: 54px 10px 12px;
                border-radius: 14px;
            }

            .certificate-modal-content .certificate-paper {
                width: 100%;
                max-height: none;
                aspect-ratio: 1.25 / 1;
                padding: 14px 10px;
            }

            .certificate-modal-content .certificate-logo {
                font-size: 13px;
            }

            .certificate-modal-content .certificate-logo-heart {
                font-size: 18px;
            }

            .certificate-modal-content .certificate-small {
                font-size: 7px;
            }

            .certificate-modal-content .certificate-title {
                font-size: clamp(22px, 6vw, 34px);
                margin-top: 12px;
            }

            .certificate-modal-content .certificate-subtitle {
                font-size: 8px;
                padding: 3px 12px;
                letter-spacing: 2px;
            }

            .certificate-modal-content .given-to {
                font-size: 8px;
                margin-top: 8px;
            }

            .certificate-modal-content .recipient-name {
                font-size: clamp(18px, 4vw, 25px);
                text-align: center;
            }

            .certificate-modal-content .recipient-line {
                width: 75%;
            }

            .certificate-modal-content .certificate-description {
                max-width: 95%;
                font-size: 7px;
                margin-top: 8px;
            }

            .certificate-modal-content .certificate-message {
                margin-top: 6px;
                font-size: 7px;
                padding: 4px 9px;
            }

            .certificate-modal-content .certificate-footer {
                width: 95%;
                gap: 7px;
            }

            .certificate-modal-content .signature-name {
                font-size: 11px;
            }

            .certificate-modal-content .signature small {
                font-size: 6px;
            }

            .certificate-modal-close {
                top: 9px;
                right: 9px;
                width: 36px;
                height: 36px;
            }
        }
        @media print {
            /* Cetak satu sertifikat penuh pada satu lembar A4 landscape */
            @page {
                size: A4 landscape;
                margin: 0;
            }

            html,
            body {
                width: 297mm !important;
                height: 210mm !important;
                min-height: 0 !important;
                margin: 0 !important;
                padding: 0 !important;
                overflow: hidden !important;
                background: #ffffff !important;
            }

            body * {
                visibility: hidden !important;
            }

            #certificatePaper,
            #certificatePaper * {
                visibility: visible !important;
            }

            #certificatePaper {
                position: fixed !important;
                left: 10mm !important;
                top: 10mm !important;
                display: block !important;
                width: 277mm !important;
                height: 166mm !important;
                min-height: 0 !important;
                max-height: 166mm !important;
                aspect-ratio: auto !important;
                box-sizing: border-box !important;
                margin: 0 !important;
                padding: 10mm 13mm !important;
                overflow: hidden !important;
                border: 1.5mm solid #0d65b7 !important;
                border-radius: 0 !important;
                box-shadow: none !important;
                page-break-before: avoid !important;
                page-break-after: avoid !important;
                page-break-inside: avoid !important;
                break-before: avoid-page !important;
                break-after: avoid-page !important;
                break-inside: avoid-page !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }

            #certificatePaper .certificate-content {
                width: 100% !important;
                height: 100% !important;
            }

            #certificatePaper .certificate-title {
                font-size: 42pt !important;
            }

            #certificatePaper .recipient-name {
                font-size: 34pt !important;
            }

            #certificatePaper .certificate-description {
                max-width: 220mm !important;
                font-size: 9pt !important;
                line-height: 1.4 !important;
            }

            #certificatePaper .certificate-message {
                font-size: 8pt !important;
            }

            #certificatePaper .signature-name {
                font-size: 17pt !important;
            }

            #certificatePaper .signature small {
                font-size: 7pt !important;
            }

            #certificatePaper::before,
            #certificatePaper::after {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Data sertifikat diambil dari database untuk pengguna yang sedang login.
            const certificates = [
                @foreach ($sertifikats as $sertifikat)
                {
                    title: @json($sertifikat->kegiatan->judul),
                    date: @json($sertifikat->tanggal_terbit
                        ? $sertifikat->tanggal_terbit->translatedFormat('d F Y')
                        : '-'),
                    number: @json($sertifikat->nomor_sertifikat),
                    icon: '🏅',
                    description: @json('Atas partisipasi dan kontribusi sebagai relawan dalam kegiatan ' . $sertifikat->kegiatan->judul . ' melalui platform Bertaut. Terima kasih telah menjadi bagian dari perubahan positif.')
                },
                @endforeach
            ];

            if (certificates.length > 0) {
                let activeIndex = 0;
                const items = Array.from(document.querySelectorAll('.certificate-item'));
                const previewNumber = document.getElementById('previewNumber');
                const recipientName = document.getElementById('recipientName');
                const description = document.getElementById('certificateDescription');
                const certificateDate = document.getElementById('certificateDate');
                const modal = document.getElementById('certificateModal');
                const fullContainer = document.getElementById('fullCertificateContainer');
                const paper = document.getElementById('certificatePaper');

                function showCertificate(index) {
                    activeIndex = (index + certificates.length) % certificates.length;
                    const cert = certificates[activeIndex];

                    items.forEach((item, i) => {
                        item.classList.toggle('active', i === activeIndex);
                        item.setAttribute('aria-pressed', i === activeIndex ? 'true' : 'false');
                    });

                    previewNumber.textContent = (activeIndex + 1) + ' / ' + certificates.length;
                    recipientName.textContent = @json(Auth::user()->name ?? '');
                    description.textContent = cert.description;
                    certificateDate.textContent = cert.date;

                    const selectedItem = items[activeIndex];
                    if (selectedItem) {
                        const title = selectedItem.querySelector('.certificate-detail h3');
                        const date = selectedItem.querySelector('.certificate-detail p');
                        if (title) title.setAttribute('aria-label', cert.title);
                        if (date) date.setAttribute('aria-label', cert.date);
                    }
                }

                items.forEach((item, index) => {
                    item.addEventListener('click', () => showCertificate(index));
                });

                document.getElementById('previousCertificate').addEventListener('click', () => {
                    showCertificate(activeIndex - 1);
                });

                document.getElementById('nextCertificate').addEventListener('click', () => {
                    showCertificate(activeIndex + 1);
                });

                document.getElementById('viewCertificate').addEventListener('click', () => {
                    fullContainer.innerHTML = '';
                    const clone = paper.cloneNode(true);
                    clone.removeAttribute('id');
                    fullContainer.appendChild(clone);
                    modal.classList.add('show');
                    modal.setAttribute('aria-hidden', 'false');
                    document.body.style.overflow = 'hidden';
                });

                function closeModal() {
                    modal.classList.remove('show');
                    modal.setAttribute('aria-hidden', 'true');
                    document.body.style.overflow = '';
                }

                document.getElementById('closeCertificateModal').addEventListener('click', closeModal);
                modal.addEventListener('click', event => {
                    if (event.target === modal) closeModal();
                });

                document.addEventListener('keydown', event => {
                    if (event.key === 'Escape' && modal.classList.contains('show')) closeModal();
                });

                document.getElementById('downloadCertificate').addEventListener('click', () => {
                    window.print();
                });

                document.getElementById('shareCertificate').addEventListener('click', async () => {
                    const cert = certificates[activeIndex];
                    const shareText = 'Saya telah menyelesaikan kegiatan ' + cert.title + ' melalui Bertaut. Setiap aksi punya arti! 💙';
                    try {
                        if (navigator.share) {
                            await navigator.share({
                                title: 'Sertifikat Bertaut - ' + cert.title,
                                text: shareText,
                                url: window.location.href
                            });
                        } else if (navigator.clipboard && window.isSecureContext) {
                            await navigator.clipboard.writeText(shareText + ' ' + window.location.href);
                            alert('Teks berbagi berhasil disalin. Kamu bisa menempelkannya ke media sosial.');
                        } else {
                            window.prompt('Salin teks berikut untuk dibagikan:', shareText + ' ' + window.location.href);
                        }
                    } catch (error) {
                        if (error.name !== 'AbortError') {
                            alert('Sertifikat belum dapat dibagikan. Silakan coba lagi.');
                        }
                    }
                });

                showCertificate(0);
            }
        });
    </script>

</body>
</html>