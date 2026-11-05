
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jelajahi Kegiatan | Bertaut</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* =========================================================
           RESET
        ========================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: #f3f7ff;
            color: #073b91;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
            cursor: pointer;
        }

        /* =========================================================
           LAYOUT UTAMA
        ========================================================= */

        .dashboard-layout {
            display: flex;
            min-height: 100vh;
            width: 100%;
        }

        /* =========================================================
           AREA KONTEN
        ========================================================= */

        .main-content {
            flex: 1;
            min-width: 0;
            padding: 25px 30px 40px;
            overflow-x: hidden;
        }

        /* =========================================================
           HEADER
        ========================================================= */

        .top-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 25px;
        }

        .search-box {
            flex: 1;
            max-width: 650px;
            height: 52px;
            background: #e8f0ff;
            border-radius: 17px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 18px;
            color: #8aa2ca;
        }

        .search-box span {
            font-size: 20px;
        }

        .search-box input {
            width: 100%;
            border: none;
            outline: none;
            background: transparent;
            color: #073b91;
            font-size: 14px;
        }

        .search-box input::placeholder {
            color: #8aa2ca;
        }

        .profile-area {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .notification-icon {
            position: relative;
            font-size: 25px;
            color: #073b91;
            margin-right: 8px;
        }

        .notification-icon span {
            position: absolute;
            top: 0;
            right: 0;
            width: 7px;
            height: 7px;
            background: #ff4f87;
            border-radius: 50%;
        }

        .profile-avatar {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: #ffc4dc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            font-weight: 600;
            color: #073b91;
        }

        .profile-info h4 {
            font-size: 14px;
            color: #073b91;
            margin-bottom: 4px;
            font-weight: 800;
        }

        .profile-info p {
            font-size: 12px;
            color: #7892bd;
        }

        /* =========================================================
           JUDUL HALAMAN
        ========================================================= */

        .page-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 18px;
        }

        .page-heading h1 {
            font-size: 30px;
            font-weight: 900;
            color: #073b91;
        }

        .page-heading p {
            color: #7892bd;
            font-size: 13px;
            margin-top: 8px;
        }

        .page-count {
            background: #ffd447;
            color: #073b91;
            padding: 10px 16px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 900;
            white-space: nowrap;
        }

        /* =========================================================
           ILUSTRASI ATAS
        ========================================================= */

        .events-hero {
            min-height: 190px;
            border-radius: 25px;
            padding: 28px 32px;

            background:
                linear-gradient(
                    90deg,
                    rgba(0, 0, 0, 0.35),
                    rgba(0, 0, 0, 0.05)
                ),
                url('{{ asset("images/Volunteer Tutoring Under Sunlight.png") }}');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
            overflow: hidden;
            margin-bottom: 28px;
        }

        .events-hero h1,
        .events-hero h2,
        .events-hero h3,
        .events-hero p,
        .events-hero span,
        .events-hero .hero-small,
        .events-hero * {
            color: #ffffff !important;
        }

        .events-hero h1,
        .events-hero h2 {
            font-size: 30px;
            line-height: 1.25;
            margin: 8px 0;
            font-weight: 800;
        }

        .events-hero p {
            font-size: 14px;
            line-height: 1.5;
            font-weight: 400;
            margin-top: 10px;
        }

        .events-hero .hero-small {
            font-size: 13px;
            font-weight: 700;
        }

        /* =========================================================
           DAFTAR KEGIATAN
        ========================================================= */

        .events-section-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 18px;
        }

        .events-section-title h2 {
            font-size: 23px;
            font-weight: 900;
            color: #073b91;
        }

        .events-section-title span {
            color: #7892bd;
            font-size: 12px;
        }

        /* GRID KARTU */

        .events-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
            align-items: stretch;
        }

        /* KARTU KEGIATAN */

        .event-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #e4ecfa;
            box-shadow: 0 5px 15px rgba(7, 59, 145, 0.04);
            transition: 0.2s ease;

            display: flex;
            flex-direction: column;
            height: 100%;
            min-width: 0;
        }

        .event-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(7, 59, 145, 0.10);
        }

        /* GAMBAR KEGIATAN */

        .event-image {
            height: 165px;
            flex: 0 0 165px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 75px;
            overflow: hidden;
        }

        .event-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .event-image.green {
            background: linear-gradient(135deg, #91e0bc, #d5f4c7);
        }

        .event-image.yellow {
            background: linear-gradient(135deg, #f2d09f, #ffe8c5);
        }

        .event-image.purple {
            background: linear-gradient(135deg, #b7d8fa, #d6c9ff);
        }

        .event-image.pink {
            background: linear-gradient(135deg, #ffc1d8, #ffdce9);
        }

        .event-image.blue {
            background: linear-gradient(135deg, #a9d5ff, #d0e8ff);
        }

        .event-image.orange {
            background: linear-gradient(135deg, #ffd0b9, #ffe5c8);
        }

        /* ISI KARTU */

        .event-body {
            padding: 18px;

            display: grid;

            /* Kategori | Judul | Deskripsi | Informasi | Tombol */
            grid-template-rows: 29px 44px 108px 105px 52px;

            gap: 10px;
            flex: 1;
            min-width: 0;
        }

        /* KATEGORI */

        .event-tag {
            display: inline-flex;
            align-items: center;
            justify-self: start;

            width: fit-content;
            max-width: 100%;
            height: 29px;

            background: #e8effb;
            color: #5076b4;

            border-radius: 20px;
            padding: 6px 10px;

            font-size: 10px;
            font-weight: 800;
            margin: 0;

            overflow: hidden;
        }

        /* JUDUL KEGIATAN */

        .event-body h3 {
            color: #073b91;
            font-size: 16px;
            line-height: 1.35;
            font-weight: 900;

            height: 44px;
            min-height: 0;
            margin: 0;

            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        /* DESKRIPSI */

        .event-description {
            color: #7892bd;
            font-size: 12px;
            line-height: 1.5;

            height: 108px;
            min-height: 0;
            margin: 0;

            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 6;
        }

        /* INFORMASI LOKASI, TANGGAL, WAKTU */

        .event-info {
            display: grid;

            /* Lokasi | Tanggal | Waktu */
            grid-template-rows: 36px 18px 18px;

            gap: 8px;

            height: 105px;
            min-height: 0;

            border-top: 1px solid #edf2fb;
            padding-top: 13px;
            margin: 0;

            overflow: hidden;
        }

        .event-info-row {
            display: flex;
            align-items: center;
            gap: 8px;

            color: #7892bd;
            font-size: 11px;
            line-height: 18px;

            min-width: 0;
            min-height: 0;
            overflow: hidden;
        }

        .event-info-row:first-child {
            height: 36px;
            align-items: flex-start;
        }

        .event-info-row strong {
            color: #073b91;
            font-weight: 800;

            min-width: 0;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        /* TOMBOL KEGIATAN */

        .event-button {
            display: flex;
            align-items: center;
            justify-content: center;

            width: 100%;
            height: 52px;
            min-height: 52px;

            border: none;
            border-radius: 12px;

            background: #ffd447;
            color: #073b91;

            font-size: 12px;
            font-weight: 900;

            transition: 0.2s ease;
            margin: 0;
        }

        .event-button:hover {
            background: #ffca1c;
        }

        /* =========================================================
           PAGINATION
        ========================================================= */

        .pagination {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 35px;
            margin-bottom: 20px;
        }

        .pagination a,
        .pagination button {
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 11px;
            background: white;
            color: #6482b5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 900;
            border: 1px solid #e1eafb;
        }

        .pagination a:hover,
        .pagination button:hover {
            background: #e8effb;
        }

        .pagination .active {
            background: #073b91;
            color: white;
            border-color: #073b91;
        }

        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 1200px) {
            .sidebar-bertaut {
                width: 225px;
                min-width: 225px;
            }

            .main-content {
                padding: 22px;
            }

            .events-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .events-hero-illustration {
                font-size: 58px;
            }
        }

        @media (max-width: 850px) {
            .dashboard-layout {
                flex-direction: column;
            }

            .sidebar-bertaut {
                width: 100%;
                min-width: 0;
                min-height: auto;
                padding: 15px;
            }

            .bertaut-brand {
                margin-bottom: 15px;
            }

            .bertaut-navigation {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .bertaut-sidebar-bottom {
                display: none;
            }

            .top-header {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                max-width: none;
            }

            .profile-area {
                justify-content: flex-end;
            }

            .events-hero {
                flex-direction: column;
                align-items: flex-start;
            }

            .events-hero-illustration {
                align-self: center;
            }
        }

        @media (max-width: 600px) {
            .main-content {
                padding: 16px;
            }

            .page-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .page-heading h1 {
                font-size: 25px;
            }

            .events-hero {
                padding: 24px;
            }

            .events-hero-text h2 {
                font-size: 25px;
            }

            .events-grid {
                grid-template-columns: 1fr;
            }

            .bertaut-navigation {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="dashboard-layout">

        @include('layouts.sidebar')

        <!-- =====================================================
             KONTEN UTAMA
        ====================================================== -->

        <main class="main-content">

            <!-- HEADER -->

            <header class="top-header">

                <form action="{{ route('kegiatan') }}" method="GET" class="search-box">

                    <span>⌕</span>

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari kegiatan, komunitas, atau lokasi..."
                    >

                </form>

                <div class="profile-area">

                    <div class="notification-icon">
                        ♧
                        <span></span>
                    </div>

                    <div class="profile-avatar">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>

                    <div class="profile-info">
                        <h4>Hai, {{ auth()->user()->name }}!</h4>
                        <p>Volunteer</p>
                    </div>

                </div>

            </header>

            <!-- HERO KEGIATAN -->

            <section class="events-hero">

                <div class="events-hero-text">

                    <small>BERBAGI KEBAIKAN BERSAMA BERTAUT</small>

                    <h2>
                        Satu langkah kecil,<br>
                        <span>berarti untuk banyak orang.</span>
                    </h2>

                    <p>
                        Jelajahi berbagai kegiatan sosial, lingkungan,
                        pendidikan, kesehatan, dan kegiatan positif lainnya.
                        Pilih kegiatan yang menarik bagimu dan mulai berkontribusi.
                    </p>

                </div>

            </section>

            <!-- DAFTAR KEGIATAN -->

            <div class="events-section-title">

                <h2>Temukan Kegiatan Untukmu ✨</h2>

                <span>Pilih kegiatan yang ingin kamu ikuti</span>

            </div>

            <section class="events-grid">

                @forelse($kegiatan as $item)

                    <article class="event-card">

                        <div class="event-image green">

                            @if($item->foto)

                                <img
                                    src="{{ str_starts_with($item->foto, 'images/') ? asset($item->foto) : asset('storage/' . $item->foto) }}"
                                    alt="{{ $item->judul }}"
                                >

                            @else

                                🌱

                            @endif

                        </div>

                        <div class="event-body">

                            <span class="event-tag">
                                {{ $item->kategori }}
                            </span>

                            <h3>
                                {{ $item->judul }}
                            </h3>

                            <p class="event-description">
                                {{ $item->deskripsi }}
                            </p>

                            <div class="event-info">

                                <div class="event-info-row">
                                    📍 <strong>{{ $item->lokasi }}</strong>
                                </div>

                                <div class="event-info-row">
                                    📅 {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                                </div>

                                <div class="event-info-row">
                                    ⏰ {{ \Carbon\Carbon::parse($item->waktu)->format('H:i') }}
                                </div>

                            </div>

                            <a href="{{ route('kegiatan.detail', $item->id) }}" class="event-button">
                                Ikut Kegiatan →
                            </a>

                        </div>

                    </article>

                @empty

                    <div style="grid-column: 1 / -1; text-align: center; padding: 50px;">
                        <h3>Belum ada kegiatan</h3>
                        <p>Belum ada kegiatan volunteer yang dipublikasikan.</p>
                    </div>

                @endforelse

            </section>

        </main>

    </div>

</body>
</html>
