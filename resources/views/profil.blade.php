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

            margin-bottom: 20px;
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

            margin-bottom: 12px;
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
            min-height: 85px;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 10px 22px;

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

        /* Wrapper terpisah supaya tombol kamera tidak terpotong lingkaran foto. */
        .profile-photo-wrap {
            position: relative;
            width: 210px;
            height: 210px;
            flex: 0 0 210px;
        }

        .profile-photo {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #ffb7d0;
            overflow: hidden;
            border: 8px solid #fff;
            box-shadow: 0 5px 18px rgba(0,0,0,.08);
        }

        .profile-photo img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
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
            right: 5px;
            bottom: 7px;
            z-index: 2;
            width: 46px;
            height: 46px;
            padding: 0;
            border-radius: 50%;
            background: #258df0;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            line-height: 1;
            border: 4px solid #fff;
            box-shadow: 0 3px 10px rgba(7,59,145,.20);
            cursor: pointer;
            transition: transform .18s ease, background .18s ease;
        }

        .camera-button:hover {
            background: #1268d4;
            transform: scale(1.06);
        }

        .camera-button:focus-visible {
            outline: 3px solid rgba(37,141,240,.35);
            outline-offset: 3px;
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

        .account-action {
            width: 100%;
            font: inherit;
            color: inherit;
            text-align: left;
            cursor: pointer;
        }

        button.account-action {
            border-top: 0;
            border-left: 0;
            border-right: 0;
        }

        .account-action:hover {
            background-color: #f3f7ff;
        }

        .account-logout-form {
            width: 100%;
        }

        .account-logout-form .account-logout {
            border: 0;
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
                padding: 18px 15px 5px;
            }

            .profile-photo-wrap {
                width: 165px;
                height: 165px;
                flex-basis: 165px;
            }

            .camera-button {
                width: 42px;
                height: 42px;
                right: 3px;
                bottom: 5px;
                font-size: 18px;
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


        /* =========================================================
           MODAL EDIT PROFIL
        ========================================================= */
        .profile-modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            padding: 20px;
            background: rgba(7, 35, 82, .45);
            align-items: center;
            justify-content: center;
        }

        .profile-modal.active {
            display: flex;
        }

        .profile-modal-content {
            width: 100%;
            max-width: 520px;
            max-height: 90vh;
            overflow-y: auto;
            padding: 28px;
            background: #fff;
            border-radius: 22px;
            box-shadow: 0 15px 45px rgba(7, 59, 145, .18);
        }

        .profile-modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 22px;
        }

        .profile-modal-title {
            color: #073b91;
            font-size: 23px;
            font-weight: 700;
        }

        .profile-modal-close {
            width: 36px;
            height: 36px;
            border: 0;
            border-radius: 50%;
            background: #eaf3ff;
            color: #1268d4;
            font-size: 22px;
            cursor: pointer;
        }

        .profile-form-group {
            margin-bottom: 16px;
        }

        .profile-form-group label {
            display: block;
            margin-bottom: 7px;
            color: #174e9d;
            font-size: 13px;
            font-weight: 600;
        }

        .profile-form-control {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #dce8f8;
            border-radius: 11px;
            outline: none;
            color: #073b91;
            background: #fbfdff;
            font: inherit;
            font-size: 13px;
        }

        .profile-form-control:focus {
            border-color: #258df0;
            box-shadow: 0 0 0 3px rgba(37, 141, 240, .10);
        }

        .profile-form-group textarea {
            min-height: 105px;
            resize: vertical;
        }

        .profile-form-error {
            margin-top: 5px;
            color: #dc3545;
            font-size: 11px;
        }

        .profile-modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 22px;
        }

        .profile-modal-actions button {
            padding: 11px 19px;
            border-radius: 22px;
            font: inherit;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
        }

        .profile-cancel-button {
            border: 1px solid #dce8f8;
            color: #174e9d;
            background: #fff;
        }

        .profile-save-button {
            border: 1px solid #258df0;
            color: #fff;
            background: #258df0;
        }

        .profile-alert {
            margin-bottom: 18px;
            padding: 12px 16px;
            border-radius: 12px;
            font-size: 13px;
        }

        .profile-alert-success {
            color: #176b43;
            background: #e5f7ed;
        }

        .profile-alert-error {
            color: #a52834;
            background: #fdebed;
        }

        .profile-photo-preview {
            display: block;
            width: 82px;
            height: 82px;
            margin-bottom: 10px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #eaf3ff;
        }

        @media (max-width: 600px) {
            .profile-modal-content {
                padding: 22px 18px;
            }

            .profile-modal-title {
                font-size: 20px;
            }
        }

        .profile-search {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0;
}

.profile-search input {
    width: 100%;
    border: none;
    outline: none;
    box-shadow: none;
    background: transparent;
    padding: 0;
    margin: 0;
    appearance: none;
    font-family: inherit;
    font-size: inherit;
    color: inherit;
}

.profile-search input::placeholder {
    color: inherit;
    opacity: 0.8;
}

    </style>
</head>


<body>

    @php($user = Auth::user())

    <div class="profile-wrapper">

        {{-- SIDEBAR BERTAUT --}}
        @include('layouts.sidebar')


        <!-- =====================================================
             MAIN PROFILE
        ====================================================== -->

        <main class="profile-main">

            @if(session('success'))
                <div class="profile-alert profile-alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="profile-alert profile-alert-error">
                    Periksa kembali data yang dimasukkan. Ada bagian yang belum sesuai.
                </div>
            @endif

            <!-- =================================================
                 TOPBAR
            ================================================== -->

            <header class="profile-topbar">

                <form action="{{ route('kegiatan') }}" method="GET" class="profile-search">
    <span class="profile-search-icon">⌕</span>

    <input
        type="text"
        name="q"
        placeholder="Cari kegiatan, komunitas, atau lokasi..."
    >
</form>


                <div class="profile-user">

                    <div class="profile-user-photo">
                        @if($user && $user->profile_photo)
                            <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Foto profil">
                        @else
                            <span>👩🏻</span>
                        @endif
                    </div>

                    <div class="profile-user-info">

                        <div class="profile-user-name">
                            Hai, {{ $user->name ?? 'Pengguna Bertaut' }}!
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

                    <div class="profile-photo-wrap">
                        <div class="profile-photo">
                            @if($user && $user->profile_photo)
                                <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Foto profil">
                            @else
                                <div class="profile-photo-placeholder">👩🏻</div>
                            @endif
                        </div>

                        <button type="button" class="camera-button" id="openEditProfile" aria-label="Ganti foto profil" title="Ganti foto profil">
                            📷
                        </button>
                    </div>

                </div>



                <!-- INFORMASI -->

                <div class="profile-information">

                    <h2 class="profile-name">
                        {{ $user->name ?? 'Pengguna Bertaut' }}
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
                                {{ $user->email ?? '-' }}
                            </span>
                        </div>

                        <div class="profile-detail">
                            <span class="detail-icon">⌖</span>
                            <span>
                                {{ $user->location ?: 'Lokasi belum diatur' }}
                            </span>
                        </div>

                        <div class="profile-detail">
                            <span class="detail-icon">▣</span>
                            <span>
                                Bergabung sejak {{ $user->created_at ? $user->created_at->translatedFormat('d F Y') : '-' }}
                            </span>
                        </div>

                    </div>

                </div>



                <!-- DEKORASI -->

                <div class="profile-decoration">

                    <button type="button" class="edit-profile" id="openEditProfileMain">
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

                        <button type="button" class="panel-edit" id="openEditProfileAbout" aria-label="Edit tentang saya">
                            ✎
                        </button>

                    </div>


                    <p class="about-text">
                        {{ $user->about ?: 'Belum ada informasi tentang diri Anda. Klik Edit Profil untuk menambahkan deskripsi.' }}
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

                        <button type="button" class="account-item account-action" id="openEmailSettings">

                            <div class="account-icon">✉</div>

                            <div class="account-content">
                                <div class="account-label">Email</div>
                                <div class="account-value">{{ $user->email ?? '-' }}</div>
                            </div>

                            <div class="account-arrow">›</div>

                        </button>



                        <!-- PASSWORD -->

                        <button type="button" class="account-item account-action" id="openPasswordModal">

                            <div class="account-icon">🔒</div>

                            <div class="account-content">
                                <div class="account-label">Password</div>
                                <div class="account-value">********</div>
                            </div>

                            <div class="account-arrow">›</div>

                        </button>



                        <!-- UBAH PROFIL -->

                        <button type="button" class="account-item" id="openEditProfileAccount"
                                style="background:transparent;border-left:0;border-right:0;border-top:0;text-align:left;cursor:pointer;">

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

                        </button>



                        <!-- LOGOUT -->

                        <form action="{{ route('logout') }}" method="POST" class="account-logout-form"
                              onsubmit="return confirm('Yakin ingin logout dari Bertaut?');">
                            @csrf
                            <button type="submit" class="account-item account-logout account-action">

                                <div class="account-icon">⇥</div>

                                <div class="account-content">
                                    <div class="account-label">Logout</div>
                                </div>

                                <div class="account-arrow">›</div>

                            </button>
                        </form>


                    </div>

                </div>

            </section>



            <!-- =================================================
                 BACKGROUND DECORATION
            ================================================== -->

            <div class="background-shape shape-pink"></div>
            <div class="background-shape shape-yellow"></div>
            <div class="background-shape shape-mint"></div>


            <!-- =================================================
                 MODAL EDIT PROFIL
            ================================================== -->
            <div class="profile-modal" id="profileEditModal" aria-hidden="true">
                <div class="profile-modal-content" role="dialog" aria-modal="true" aria-labelledby="profileModalTitle">
                    <div class="profile-modal-header">
                        <h2 class="profile-modal-title" id="profileModalTitle">Edit Profil</h2>
                        <button type="button" class="profile-modal-close" id="closeProfileModal" aria-label="Tutup">&times;</button>
                    </div>

                    <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="profile-form-group">
                            <label for="profile_name">Nama Lengkap</label>
                            <input class="profile-form-control" type="text" id="profile_name" name="name"
                                   value="{{ old('name', $user->name) }}" required maxlength="255">
                            @error('name') <div class="profile-form-error">{{ $message }}</div> @enderror
                        </div>

                        <div class="profile-form-group">
                            <label for="profile_email">Email</label>
                            <input class="profile-form-control" type="email" id="profile_email" name="email"
                                   value="{{ old('email', $user->email) }}" required maxlength="255">
                            @error('email') <div class="profile-form-error">{{ $message }}</div> @enderror
                        </div>

                        <div class="profile-form-group">
                            <label for="profile_location">Lokasi</label>
                            <input class="profile-form-control" type="text" id="profile_location" name="location"
                                   value="{{ old('location', $user->location) }}" maxlength="255"
                                   placeholder="Contoh: Palembang, Indonesia">
                            @error('location') <div class="profile-form-error">{{ $message }}</div> @enderror
                        </div>

                        <div class="profile-form-group">
                            <label for="profile_about">Tentang Saya</label>
                            <textarea class="profile-form-control" id="profile_about" name="about"
                                      maxlength="1000" placeholder="Ceritakan sedikit tentang dirimu...">{{ old('about', $user->about) }}</textarea>
                            @error('about') <div class="profile-form-error">{{ $message }}</div> @enderror
                        </div>

                        <div class="profile-form-group">
                            <label for="profile_photo">Foto Profil</label>
                            @if($user->profile_photo)
                                <img class="profile-photo-preview" id="profilePhotoPreview"
                                     src="{{ asset('storage/' . $user->profile_photo) }}" alt="Preview foto profil">
                            @else
                                <img class="profile-photo-preview" id="profilePhotoPreview"
                                     src="" alt="Preview foto profil" style="display:none;">
                            @endif
                            <input class="profile-form-control" type="file" id="profile_photo" name="profile_photo"
                                   accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">
                            <small style="display:block;margin-top:6px;color:#7290bd;font-size:11px;">
                                Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                            </small>
                            @error('profile_photo') <div class="profile-form-error">{{ $message }}</div> @enderror
                        </div>

                        <div class="profile-modal-actions">
                            <button type="button" class="profile-cancel-button" id="cancelProfileEdit">Batal</button>
                            <button type="submit" class="profile-save-button">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- MODAL UBAH PASSWORD --}}
            <div class="profile-modal" id="passwordModal" aria-hidden="true">
                <div class="profile-modal-content" role="dialog" aria-modal="true" aria-labelledby="passwordModalTitle">
                    <div class="profile-modal-header">
                        <h2 class="profile-modal-title" id="passwordModalTitle">Ubah Password</h2>
                        <button type="button" class="profile-modal-close" id="closePasswordModal" aria-label="Tutup">&times;</button>
                    </div>

                    @if(session('password_success'))
                        <div class="profile-alert profile-alert-success">{{ session('password_success') }}</div>
                    @endif

                    @if($errors->getBag('password')->any())
                        <div class="profile-alert profile-alert-error">
                            @foreach($errors->getBag('password')->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('profil.password.update') }}" method="POST">
                        @csrf

                        <div class="profile-form-group">
                            <label for="current_password">Password Lama</label>
                            <input class="profile-form-control" type="password" id="current_password"
                                   name="current_password" autocomplete="current-password" required>
                        </div>

                        <div class="profile-form-group">
                            <label for="new_password">Password Baru</label>
                            <input class="profile-form-control" type="password" id="new_password"
                                   name="new_password" autocomplete="new-password" minlength="8" required>
                        </div>

                        <div class="profile-form-group">
                            <label for="new_password_confirmation">Konfirmasi Password Baru</label>
                            <input class="profile-form-control" type="password" id="new_password_confirmation"
                                   name="new_password_confirmation" autocomplete="new-password" minlength="8" required>
                        </div>

                        <div class="profile-modal-actions">
                            <button type="button" class="profile-cancel-button" id="cancelPasswordModal">Batal</button>
                            <button type="submit" class="profile-save-button">Simpan Password</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Form khusus untuk mengganti foto lewat icon kamera tanpa membuka modal Edit Profil. --}}
            <form id="quickPhotoForm" action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data" style="position:fixed;left:-10000px;top:0;width:1px;height:1px;overflow:hidden;">
                @csrf
                @method('PUT')
                <input type="hidden" name="name" value="{{ $user->name }}">
                <input type="hidden" name="email" value="{{ $user->email }}">
                <input type="hidden" name="location" value="{{ $user->location }}">
                <input type="hidden" name="about" value="{{ $user->about }}">
                <input type="file" id="quickProfilePhoto" name="profile_photo" accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">
            </form>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const modal = document.getElementById('profileEditModal');
                    const passwordModal = document.getElementById('passwordModal');
                    const cameraButton = document.getElementById('openEditProfile');
                    const openButtons = [
                        document.getElementById('openEditProfileMain'),
                        document.getElementById('openEditProfileAbout'),
                        document.getElementById('openEditProfileAccount'),
                        document.getElementById('openEmailSettings')
                    ];
                    const closeButtons = [
                        document.getElementById('closeProfileModal'),
                        document.getElementById('cancelProfileEdit')
                    ];

                    function openModal() {
                        modal.classList.add('active');
                        modal.setAttribute('aria-hidden', 'false');
                    }

                    function closeModal() {
                        modal.classList.remove('active');
                        modal.setAttribute('aria-hidden', 'true');
                    }

                    function openPasswordModal() {
                        passwordModal.classList.add('active');
                        passwordModal.setAttribute('aria-hidden', 'false');
                    }

                    function closePasswordModal() {
                        passwordModal.classList.remove('active');
                        passwordModal.setAttribute('aria-hidden', 'true');
                    }

                    openButtons.forEach(function (button) {
                        if (button) {
                            button.addEventListener('click', function () {
                                openModal();
                                if (button.id === 'openEmailSettings') {
                                    setTimeout(function () {
                                        const emailField = document.getElementById('profile_email');
                                        if (emailField) emailField.focus();
                                    }, 50);
                                }
                            });
                        }
                    });

                    const openPasswordButton = document.getElementById('openPasswordModal');
                    const closePasswordButtons = [
                        document.getElementById('closePasswordModal'),
                        document.getElementById('cancelPasswordModal')
                    ];

                    if (openPasswordButton) {
                        openPasswordButton.addEventListener('click', openPasswordModal);
                    }

                    closePasswordButtons.forEach(function (button) {
                        if (button) button.addEventListener('click', closePasswordModal);
                    });

                    if (passwordModal) {
                        passwordModal.addEventListener('click', function (event) {
                            if (event.target === passwordModal) closePasswordModal();
                        });
                    }

                    // Tombol kamera hanya memilih dan menyimpan foto; tidak membuka modal Edit Profil.
                    const photoInput = document.getElementById('profile_photo');
                    const photoPreview = document.getElementById('profilePhotoPreview');
                    const quickPhotoInput = document.getElementById('quickProfilePhoto');
                    const quickPhotoForm = document.getElementById('quickPhotoForm');

                    if (cameraButton && quickPhotoInput) {
                        cameraButton.addEventListener('click', function () {
                            quickPhotoInput.click();
                        });
                    }

                    if (quickPhotoInput && quickPhotoForm) {
                        quickPhotoInput.addEventListener('change', function () {
                            const file = quickPhotoInput.files && quickPhotoInput.files[0];
                            if (!file) return;

                            const allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
                            const maxSize = 2 * 1024 * 1024;

                            if (!allowedTypes.includes(file.type)) {
                                alert('Pilih foto berformat JPG, PNG, atau WEBP.');
                                quickPhotoInput.value = '';
                                return;
                            }

                            if (file.size > maxSize) {
                                alert('Ukuran foto maksimal 2 MB.');
                                quickPhotoInput.value = '';
                                return;
                            }

                            quickPhotoForm.submit();
                        });
                    }

                    closeButtons.forEach(function (button) {
                        if (button) button.addEventListener('click', closeModal);
                    });

                    modal.addEventListener('click', function (event) {
                        if (event.target === modal) closeModal();
                    });

                    document.addEventListener('keydown', function (event) {
                        if (event.key === 'Escape') {
                            closeModal();
                            closePasswordModal();
                        }
                    });

                    if (photoInput && photoPreview) {
                        photoInput.addEventListener('change', function (event) {
                            const file = event.target.files && event.target.files[0];
                            if (!file) return;

                            const allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
                            const maxSize = 2 * 1024 * 1024;

                            if (!allowedTypes.includes(file.type)) {
                                alert('Pilih foto berformat JPG, PNG, atau WEBP.');
                                photoInput.value = '';
                                return;
                            }

                            if (file.size > maxSize) {
                                alert('Ukuran foto maksimal 2 MB.');
                                photoInput.value = '';
                                return;
                            }

                            photoPreview.src = URL.createObjectURL(file);
                            photoPreview.style.display = 'block';
                        });
                    }

                    // Buka kembali modal jika validasi Laravel gagal.
                    @if($errors->any() && !$errors->getBag('password')->any())
                        openModal();
                    @endif

                    @if(session('open_password_modal') || session('password_success') || $errors->getBag('password')->any())
                        openPasswordModal();
                    @endif
                });
            </script>


        </main>

    </div>

</body>

</html>