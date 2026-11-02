<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Buat Kegiatan - Bertaut</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #eef7ff;
            color: #123b91;
        }

        /* =========================
           CONTENT
        ========================= */

        .content {
            margin-left: 195px;
            width: calc(100% - 195px);
            min-height: 100vh;
            padding: 32px 42px 50px;
        }

        /* =========================
           HEADER
        ========================= */

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .heading h1 {
            font-size: 38px;
            line-height: 1.2;
            color: #06439e;
            font-weight: 800;
            margin-bottom: 7px;
        }

        .heading p {
            color: #6684ba;
            font-size: 15px;
        }

       .profile {
    display: flex;
    align-items: center;
    gap: 13px;
}

.profile-photo {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: #ffc3dd;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 23px;
    font-weight: 700;
    color: #073b91;
}

.profile-name {
    color: #073b91;
    font-size: 14px;
    font-weight: 700;
}

.profile-role {
    color: #7190bd;
    font-size: 12px;
    margin-top: 2px;
}

        /* =========================
           STEPPER
        ========================= */

        .progress-wrapper {
            background: #ffffff;
            border-radius: 20px;
            padding: 20px 25px;
            margin-bottom: 25px;
            box-shadow: 0 8px 25px rgba(39, 94, 170, 0.07);
        }

        .progress {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            position: relative;
        }

        .progress-line {
            position: absolute;
            top: 22px;
            left: 12%;
            right: 12%;
            height: 3px;
            background: #e1ebfa;
            z-index: 0;
        }

        .progress-item {
            position: relative;
            z-index: 1;
            text-align: center;
            color: #91a9d1;
            font-size: 12px;
            font-weight: 500;
        }

        .progress-number {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: #e4eefc;
            color: #7895c4;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 8px;
            font-size: 16px;
            font-weight: 700;
            border: 4px solid #fff;
            transition: .25s ease;
        }

        .progress-item.active {
            color: #06439e;
            font-weight: 700;
        }

        .progress-item.active .progress-number {
            background: #ffd447;
            color: #06439e;
            transform: scale(1.05);
            box-shadow: 0 5px 12px rgba(255, 212, 71, .25);
        }

        /* =========================
           MAIN GRID
        ========================= */

        .main-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 300px;
            gap: 24px;
            align-items: start;
        }

        /* =========================
           FORM CARD
        ========================= */

        .form-card {
            background: #ffffff;
            border-radius: 24px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(39, 94, 170, 0.08);
        }

        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .step-heading {
            display: flex;
            align-items: center;
            gap: 13px;
            margin-bottom: 7px;
        }

        .step-icon {
            width: 48px;
            height: 48px;
            border-radius: 15px;
            background: #e5f1ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
        }

        .step-heading h2 {
            color: #06439e;
            font-size: 23px;
            font-weight: 800;
        }

        .step-description {
            color: #7691bd;
            font-size: 13px;
            margin-bottom: 27px;
        }

        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 21px;
        }

        .form-group label {
            display: block;
            color: #174697;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            border: 2px solid #e1ebf9;
            border-radius: 13px;
            padding: 13px 15px;
            outline: none;
            color: #31558f;
            font-size: 13px;
            background: #fbfdff;
            transition: .2s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #6da7ff;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(109, 167, 255, .08);
        }

        .form-group textarea {
            min-height: 125px;
            resize: vertical;
        }

        .two-column {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 17px;
        }

        /* =========================
           CATEGORY
        ========================= */

        .category-list {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 9px;
        }

        .category {
            border: 2px solid #e3ecfb;
            border-radius: 14px;
            padding: 13px 5px;
            text-align: center;
            cursor: pointer;
            background: #fff;
            color: #5073b1;
            transition: .2s ease;
        }

        .category:hover {
            border-color: #a9caff;
            transform: translateY(-2px);
        }

        .category input {
            display: none;
        }

        .category span {
            display: block;
            font-size: 23px;
            margin-bottom: 7px;
        }

        .category small {
            font-size: 11px;
            font-weight: 600;
        }

        .category:has(input:checked) {
            border-color: #ffd047;
            background: #fff9df;
            color: #a87500;
            box-shadow: 0 4px 12px rgba(255, 208, 71, .15);
        }

        /* =========================
           BUTTON
        ========================= */

        .button-area {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-top: 28px;
            padding-top: 20px;
            border-top: 1px solid #edf2fa;
        }

        .btn {
            border: none;
            border-radius: 12px;
            padding: 13px 22px;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s ease;
        }

        .btn-next,
        .btn-submit {
            background: #0754c9;
            color: white;
            margin-left: auto;
        }

        .btn-next:hover,
        .btn-submit:hover {
            background: #063d96;
            transform: translateY(-1px);
        }

        .btn-back {
            background: #e8f1ff;
            color: #1850a0;
        }

        .btn-back:hover {
            background: #dbeaff;
        }

        /* =========================
           RIGHT SIDE
        ========================= */

        .side-card {
            background: white;
            border-radius: 22px;
            padding: 23px;
            margin-bottom: 18px;
            box-shadow: 0 8px 25px rgba(39, 94, 170, 0.07);
        }

        .side-card h3 {
            color: #06439e;
            font-size: 17px;
            margin-bottom: 8px;
        }

        .side-card-description {
            color: #7892bd;
            font-size: 12px;
            line-height: 1.7;
            margin-bottom: 15px;
        }

       /* =========================
   UPLOAD FOTO KEGIATAN
========================= */

.upload-box {
    position: relative;
    border: 2px dashed #9bc4ff;
    background: linear-gradient(180deg, #f5faff 0%, #eef7ff 100%);
    border-radius: 22px;
    padding: 26px 16px 22px;
    text-align: center;
    color: #4f79b9;
    cursor: pointer;
    transition: all 0.25s ease;
    overflow: hidden;
}

.upload-box:hover {
    border-color: #5b9cff;
    background: #f0f7ff;
}

/* ICON AWAN */
.upload-cloud {
    width: 100px;
    height: 100px;
    margin: 0 auto 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* SVG ICON */
.upload-cloud svg {
    width: 90px;
    height: 90px;
    display: block;
}

/* JUDUL */
.upload-title {
    display: block;
    color: #1555a5;
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 7px;
}

/* FORMAT FILE */
.upload-info {
    margin: 0 0 18px;
    color: #7892bd;
    font-size: 12px;
}

/* TOMBOL PILIH FOTO */
.upload-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #d8eaff;
    color: #1555a5;
    padding: 11px 22px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.2s ease;
}

.upload-button:hover {
    background: #c6e0ff;
    transform: translateY(-1px);
}

.upload-button svg {
    width: 18px;
    height: 18px;
}

/* INPUT ASLI DISEMBUNYIKAN */
.upload-box input[type="file"] {
    display: none;
}

/* KETERANGAN BAWAH */
.upload-note {
    margin: 16px auto 0;
    max-width: 220px;
    color: #8aa0c3;
    font-size: 11px;
    line-height: 1.5;
}

        /* Tips */

        .tips {
            background: #fff2f8;
        }

        .tips h3 {
            color: #c33f7b;
        }

        .tips ul {
            padding-left: 18px;
            color: #8b5571;
            line-height: 1.8;
            font-size: 12px;
        }

        .tips li {
            margin-bottom: 3px;
        }

        /* Quote */

        .quote {
            background: #eaf9ef;
            color: #28764d;
            font-size: 14px;
            line-height: 1.7;
            font-style: italic;
        }

        /* Summary */

        .summary-item {
            background: #f4f8ff;
            border: 1px solid #e3edfb;
            border-radius: 13px;
            padding: 13px;
            margin-bottom: 10px;
        }

        .summary-item strong {
            display: block;
            color: #164a9e;
            font-size: 12px;
            margin-bottom: 4px;
        }

        .summary-item span {
            color: #6882b5;
            font-size: 12px;
            line-height: 1.6;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1100px) {

            .content {
                padding: 28px;
            }

            .main-grid {
                grid-template-columns: 1fr;
            }

            .side-card {
                margin-bottom: 15px;
            }
        }

        @media (max-width: 700px) {

            .content {
                margin-left: 0;
                width: 100%;
                padding: 20px;
            }

            .page-header {
                flex-direction: column;
                gap: 18px;
            }

            .heading h1 {
                font-size: 30px;
            }

            .progress-wrapper {
                padding: 17px 10px;
            }

            .progress-item {
                font-size: 9px;
            }

            .progress-number {
                width: 37px;
                height: 37px;
                font-size: 13px;
            }

            .form-card {
                padding: 20px;
            }

            .category-list {
                grid-template-columns: repeat(2, 1fr);
            }

            .two-column {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .button-area {
                flex-direction: column;
                align-items: stretch;
            }

            .btn,
            .btn-next,
            .btn-submit {
                width: 100%;
                margin-left: 0;
            }
        }

    </style>
</head>

<body>

    @include('layouts.sidebar')

    <main class="content">

        <!-- HEADER -->

        <div class="page-header">

            <div class="heading">
                <h1>✦ Buat Kegiatan</h1>

                <p>
                    Punya ide untuk membuat dunia lebih baik?
                    Yuk, wujudkan kegiatanmu bersama Bertaut.
                </p>
            </div>

            <div class="profile">

                <div class="profile-photo">
    {{ strtoupper(substr(auth()->user()->name ?? 'V', 0, 1)) }}
</div>

                <div>
                    <div class="profile-name">
                        Hai, {{ auth()->user()->name ?? 'Volunteer' }}!
                    </div>

                    <div class="profile-role">
                        Volunteer
                    </div>
                </div>

            </div>

        </div>


        <!-- PROGRESS 1 2 3 4 -->

        <div class="progress-wrapper">

            <div class="progress">

                <div class="progress-line"></div>

                <div class="progress-item active">

                    <div class="progress-number">
                        1
                    </div>

                    Informasi Dasar

                </div>


                <div class="progress-item">

                    <div class="progress-number">
                        2
                    </div>

                    Detail Kegiatan

                </div>


                <div class="progress-item">

                    <div class="progress-number">
                        3
                    </div>

                    Lokasi & Waktu

                </div>


                <div class="progress-item">

                    <div class="progress-number">
                        4
                    </div>

                    Publikasi

                </div>

            </div>

        </div>


        <!-- MAIN -->

        <div class="main-grid">


            <!-- FORM -->

            <section class="form-card">

                <form id="eventForm" action="{{ route('buat-kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                 @csrf


                    <!-- STEP 1 -->

                    <div class="step active" data-step="1">

                        <div class="step-heading">

                            <div class="step-icon">
                                📝
                            </div>

                            <h2>
                                Informasi Dasar
                            </h2>

                        </div>

                        <p class="step-description">
                            Mulai dengan informasi utama tentang kegiatanmu.
                        </p>


                        <div class="form-group">

                            <label for="judul">
                                Judul Kegiatan *
                            </label>

                            <input
                                type="text"
                                id="judul"
                                name="judul"
                                placeholder="Contoh: Aksi Bersih-Bersih Sungai"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                Pilih Kategori *
                            </label>

                            <div class="category-list">

                                <label class="category">

                                    <input
                                        type="radio"
                                        name="kategori"
                                        value="Lingkungan"
                                        required
                                    >

                                    <span>🌱</span>

                                    <small>
                                        Lingkungan
                                    </small>

                                </label>


                                <label class="category">

                                    <input
                                        type="radio"
                                        name="kategori"
                                        value="Pendidikan"
                                    >

                                    <span>📚</span>

                                    <small>
                                        Pendidikan
                                    </small>

                                </label>


                                <label class="category">

                                    <input
                                        type="radio"
                                        name="kategori"
                                        value="Sosial"
                                    >

                                    <span>🤝</span>

                                    <small>
                                        Sosial
                                    </small>

                                </label>


                                <label class="category">

                                    <input
                                        type="radio"
                                        name="kategori"
                                        value="Kesehatan"
                                    >

                                    <span>💗</span>

                                    <small>
                                        Kesehatan
                                    </small>

                                </label>


                                <label class="category">

                                    <input
                                        type="radio"
                                        name="kategori"
                                        value="Hewan"
                                    >

                                    <span>🐾</span>

                                    <small>
                                        Hewan
                                    </small>

                                </label>

                            </div>

                        </div>


                        <div class="form-group">

                            <label for="deskripsi">
                                Deskripsi Kegiatan *
                            </label>

                            <textarea
                                id="deskripsi"
                                name="deskripsi"
                                placeholder="Ceritakan secara singkat tentang kegiatan yang ingin kamu buat..."
                                required
                            ></textarea>

                        </div>


                        <div class="form-group">

                            <label for="tujuan">
                                Tujuan Kegiatan *
                            </label>

                            <textarea
                                id="tujuan"
                                name="tujuan"
                                placeholder="Apa tujuan yang ingin dicapai dari kegiatan ini?"
                                required
                            ></textarea>

                        </div>


                        <div class="button-area">

                            <button
                                type="button"
                                class="btn btn-next"
                                onclick="nextStep()"
                            >
                                Lanjut ke Detail Kegiatan →
                            </button>

                        </div>

                    </div>


                    <!-- STEP 2 -->

                    <div class="step" data-step="2">

                        <div class="step-heading">

                            <div class="step-icon">
                                📋
                            </div>

                            <h2>
                                Detail Kegiatan
                            </h2>

                        </div>

                        <p class="step-description">
                            Lengkapi informasi agar calon relawan lebih memahami kegiatanmu.
                        </p>


                        <div class="form-group">

                            <label for="manfaat">
                                Manfaat bagi Peserta *
                            </label>

                            <textarea
                                id="manfaat"
                                name="manfaat"
                                placeholder="Apa manfaat yang akan didapatkan oleh relawan?"
                                required
                            ></textarea>

                        </div>


                        <div class="form-group">

                            <label for="persyaratan">
                                Persyaratan Relawan
                            </label>

                            <textarea
                                id="persyaratan"
                                name="persyaratan"
                                placeholder="Contoh: Membawa botol minum pribadi dan memakai pakaian nyaman..."
                            ></textarea>

                        </div>


                        <div class="form-group">

                            <label for="perlengkapan">
                                Perlengkapan yang Dibutuhkan
                            </label>

                            <textarea
                                id="perlengkapan"
                                name="perlengkapan"
                                placeholder="Tuliskan perlengkapan yang perlu dibawa relawan..."
                            ></textarea>

                        </div>


                        <div class="button-area">

                            <button
                                type="button"
                                class="btn btn-back"
                                onclick="prevStep()"
                            >
                                ← Kembali
                            </button>

                            <button
                                type="button"
                                class="btn btn-next"
                                onclick="nextStep()"
                            >
                                Lanjut ke Lokasi & Waktu →
                            </button>

                        </div>

                    </div>


                    <!-- STEP 3 -->

                    <div class="step" data-step="3">

                        <div class="step-heading">

                            <div class="step-icon">
                                📍
                            </div>

                            <h2>
                                Lokasi & Waktu
                            </h2>

                        </div>

                        <p class="step-description">
                            Tentukan kapan dan di mana kegiatan akan dilaksanakan.
                        </p>


                        <div class="two-column">

                            <div class="form-group">

                                <label for="tanggal">
                                    Tanggal Kegiatan *
                                </label>

                                <input
                                    type="date"
                                    id="tanggal"
                                    name="tanggal"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label for="waktu">
                                    Waktu Kegiatan *
                                </label>

                                <input
                                    type="time"
                                    id="waktu"
                                    name="waktu"
                                    required
                                >

                            </div>

                        </div>


                        <div class="form-group">

                            <label for="lokasi">
                                Lokasi Kegiatan *
                            </label>

                            <input
                                type="text"
                                id="lokasi"
                                name="lokasi"
                                placeholder="Contoh: Taman Kota Palembang"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label for="maps">
                                Link Google Maps
                            </label>

                            <input
                                type="url"
                                id="maps"
                                name="maps"
                                placeholder="Tempel link Google Maps di sini"
                            >

                        </div>


                        <div class="form-group">

                            <label for="jumlah_relawan">
                                Jumlah Relawan yang Dibutuhkan *
                            </label>

                            <input
                                type="number"
                                id="jumlah_relawan"
                                name="jumlah_relawan"
                                min="1"
                                placeholder="Contoh: 50"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label for="batas_pendaftaran">
                                Batas Pendaftaran *
                            </label>

                            <input
                                type="date"
                                id="batas_pendaftaran"
                                name="batas_pendaftaran"
                                required
                            >

                        </div>


                        <div class="button-area">

                            <button
                                type="button"
                                class="btn btn-back"
                                onclick="prevStep()"
                            >
                                ← Kembali
                            </button>

                            <button
                                type="button"
                                class="btn btn-next"
                                onclick="nextStep()"
                            >
                                Lanjut ke Publikasi →
                            </button>

                        </div>

                    </div>


                    <!-- STEP 4 -->

                    <div class="step" data-step="4">

                        <div class="step-heading">

                            <div class="step-icon">
                                🚀
                            </div>

                            <h2>
                                Publikasi Kegiatan
                            </h2>

                        </div>

                        <p class="step-description">
                            Periksa kembali informasi kegiatanmu sebelum dipublikasikan.
                        </p>


                        <div id="summary"></div>


                        <div class="button-area">

                            <button
                                type="button"
                                class="btn btn-back"
                                onclick="prevStep()"
                            >
                                ← Kembali
                            </button>

                            <button
                                type="submit"
                                class="btn btn-submit"
                            >
                                Publikasikan Kegiatan 🚀
                            </button>

                        </div>

                    </div>

                </form>

            </section>


            <!-- SIDEBAR KANAN -->

            <aside>


                <!-- FOTO -->

                <div class="side-card">

                    <h3>
                        📸 Foto Kegiatan
                    </h3>

                    <p class="side-card-description">
                        Tambahkan foto agar kegiatanmu lebih menarik dan mudah dikenali oleh calon relawan.
                    </p>

                   <div class="upload-box" onclick="document.getElementById('fotoKegiatan').click()">

    <!-- ICON AWAN + UPLOAD -->
    <div class="upload-cloud">

        <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">

            <!-- awan -->
            <path
                d="M38 82
                   C27 82 19 74 19 64
                   C19 54 27 46 37 46
                   C40 33 51 25 64 25
                   C78 25 89 34 92 47
                   C101 48 108 55 108 65
                   C108 75 100 82 90 82
                   Z"
                fill="#d7e7ff"
            />

            <!-- bagian awan lebih terang -->
            <path
                d="M36 76
                   C29 76 24 71 24 64
                   C24 57 30 52 37 52
                   C40 40 50 33 62 33
                   C73 33 83 40 86 51
                   C94 51 100 57 100 65
                   C100 72 94 76 87 76
                   Z"
                fill="#c8dcff"
            />

            <!-- panah upload -->
            <path
                d="M62 76 V47"
                stroke="#2468d8"
                stroke-width="7"
                stroke-linecap="round"
            />

            <path
                d="M50 59 L62 46 L74 59"
                fill="none"
                stroke="#2468d8"
                stroke-width="7"
                stroke-linecap="round"
                stroke-linejoin="round"
            />

            <!-- kotak kecil bawah -->
            <path
                d="M48 79 H76"
                stroke="#2468d8"
                stroke-width="5"
                stroke-linecap="round"
            />

        </svg>

    </div>


    <!-- TEKS -->
    <span class="upload-title">
        Klik atau seret foto ke sini
    </span>

    <p class="upload-info">
        JPG, PNG, maksimal 5 MB
    </p>


    <!-- TOMBOL -->
    <label
        class="upload-button"
        onclick="event.stopPropagation()"
        for="fotoKegiatan"
    >

        <!-- ICON UPLOAD -->
        <svg viewBox="0 0 24 24" fill="none">

            <path
                d="M12 16V4"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
            />

            <path
                d="M7 9L12 4L17 9"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            />

            <path
                d="M5 20H19"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
            />

        </svg>

        Pilih Foto

    </label>


    <!-- INPUT FILE ASLI -->
    <input
        type="file"
        id="fotoKegiatan"
        name="foto"
        accept="image/png, image/jpeg"
        onchange="showFileName(this)"
        form="eventForm"
    >


    <!-- KETERANGAN -->
    <p class="upload-note" id="fileName">
        Gunakan foto yang jelas dan sesuai dengan kegiatan.
    </p>

</div>
                    

                </div>


                <!-- TIPS -->

                <div class="side-card tips">

                    <h3>
                        💡 Tips Membuat Kegiatan
                    </h3>

                    <ul>

                        <li>
                            Gunakan judul yang jelas.
                        </li>

                        <li>
                            Berikan deskripsi yang lengkap.
                        </li>

                        <li>
                            Pilih kategori yang sesuai.
                        </li>

                        <li>
                            Tambahkan lokasi dan waktu.
                        </li>

                        <li>
                            Pastikan informasi mudah dipahami.
                        </li>

                    </ul>

                </div>


                <!-- QUOTE -->

                <div class="side-card quote">

                    “Satu langkah kecil hari ini
                    bisa memberikan dampak besar
                    untuk banyak orang.”

                </div>

            </aside>

        </div>

    </main>


    <script>

        let currentStep = 1;

        const steps = document.querySelectorAll(".step");

        const progressItems =
            document.querySelectorAll(".progress-item");


        function showStep(stepNumber) {

            steps.forEach(step => {

                step.classList.remove("active");

                if (
                    Number(step.dataset.step) === stepNumber
                ) {
                    step.classList.add("active");
                }

            });


            progressItems.forEach((item, index) => {

                item.classList.remove("active");

                if (index < stepNumber) {
                    item.classList.add("active");
                }

            });


            currentStep = stepNumber;


            if (currentStep === 4) {
                createSummary();
            }


            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

        }


        function nextStep() {

            const currentFormStep =
                document.querySelector(
                    `.step[data-step="${currentStep}"]`
                );


            const requiredFields =
                currentFormStep.querySelectorAll("[required]");


            for (const field of requiredFields) {

                if (!field.checkValidity()) {

                    field.reportValidity();

                    return;
                }

            }


            if (currentStep < 4) {

                showStep(currentStep + 1);

            }

        }


        function prevStep() {

            if (currentStep > 1) {

                showStep(currentStep - 1);

            }

        }


        function getValue(id) {

            const element =
                document.getElementById(id);

            return element
                ? element.value || "-"
                : "-";

        }


        function createSummary() {

            const kategori =
                document.querySelector(
                    'input[name="kategori"]:checked'
                );


            const summary =
                document.getElementById("summary");


            summary.innerHTML = `

                <div class="summary-item">
                    <strong>Judul Kegiatan</strong>
                    <span>
                        ${getValue("judul")}
                    </span>
                </div>


                <div class="summary-item">
                    <strong>Kategori</strong>
                    <span>
                        ${kategori ? kategori.value : "-"}
                    </span>
                </div>


                <div class="summary-item">
                    <strong>Deskripsi</strong>
                    <span>
                        ${getValue("deskripsi")}
                    </span>
                </div>


                <div class="summary-item">
                    <strong>Tujuan Kegiatan</strong>
                    <span>
                        ${getValue("tujuan")}
                    </span>
                </div>


                <div class="summary-item">
                    <strong>Manfaat bagi Peserta</strong>
                    <span>
                        ${getValue("manfaat")}
                    </span>
                </div>


                <div class="summary-item">
                    <strong>Waktu dan Lokasi</strong>
                    <span>
                        ${getValue("tanggal")}
                        pukul
                        ${getValue("waktu")}
                        <br>
                        ${getValue("lokasi")}
                    </span>
                </div>


                <div class="summary-item">
                    <strong>Jumlah Relawan</strong>
                    <span>
                        ${getValue("jumlah_relawan")} orang
                    </span>
                </div>

            `;

        }


    function showFileName(input) {

    const fileName = document.getElementById("fileName");

    if (input.files && input.files.length > 0) {

        fileName.textContent =
            "✓ " + input.files[0].name;

        fileName.style.color = "#1760c7";
        fileName.style.fontWeight = "600";

    }

}

    </script>

</body>
</html>