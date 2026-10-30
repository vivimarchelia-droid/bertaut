<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Bertaut</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

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
            font-family: 'Poppins', sans-serif;
            background: #eef7ff;
            color: #073b91;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
            border: none;
        }


        /* =====================================================
           AREA DASHBOARD
        ===================================================== */

        .dashboard-page {
            width: 100%;
            min-height: 100vh;
            padding-left: 195px;
            background: #eef7ff;
        }

        .dashboard-content {
            width: 100%;
            min-height: 100vh;
            padding: 12px 18px 18px;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .dashboard-header {
            width: 100%;
            height: 58px;
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 10px;
        }

        .search-box {
            flex: 1;
            height: 52px;
            background: #dceaff;
            border-radius: 28px;
            display: flex;
            align-items: center;
            padding: 0 18px;
            color: #7c9bd1;
        }

        .search-icon {
            font-size: 20px;
            margin-right: 10px;
            color: #06449d;
        }

        .search-box input {
            width: 100%;
            border: none;
            outline: none;
            background: transparent;
            color: #164d9c;
            font-size: 13px;
            font-family: 'Poppins', sans-serif;
        }

        .search-box input::placeholder {
            color: #7795c7;
        }

        .notification {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            font-size: 22px;
            color: #073b91;
        }

        .notification-dot {
            position: absolute;
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: #ff5d88;
            top: 2px;
            right: 3px;
            border: 2px solid #eef7ff;
        }

        .profile-mini {
            display: flex;
            align-items: center;
            gap: 9px;
            min-width: 185px;
        }

        .profile-photo {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            overflow: hidden;
            background: #ffd5df;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-info {
            line-height: 1.15;
            flex: 1;
        }

        .profile-info strong {
            display: block;
            color: #073b91;
            font-size: 12px;
            font-weight: 700;
        }

        .profile-info span {
            display: block;
            margin-top: 4px;
            color: #7593c1;
            font-size: 10px;
        }

        .profile-arrow {
            color: #073b91;
            font-size: 17px;
        }


        /* =====================================================
           GRID UTAMA
        ===================================================== */

        .dashboard-grid {
            display: grid;
            grid-template-columns: minmax(0, 2.4fr) minmax(300px, 1fr);
            gap: 16px;
            align-items: start;
        }

        .dashboard-left {
            min-width: 0;
        }

        .dashboard-right {
            min-width: 0;
        }


        
/* =====================================================
   HERO SLIDESHOW
===================================================== */

.hero-card {
    height: 238px;
    border-radius: 25px;
    overflow: hidden;
    position: relative;
    padding: 25px 30px;
    background: linear-gradient(135deg, #1396e8, #4d9ee9);
}

/* Tempat gambar slideshow */
.hero-slideshow {
    position: absolute;
    inset: 0;
    overflow: hidden;
}


.hero-slide {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transition: opacity 1.5s ease-in-out;
}

.hero-slide.active {
    opacity: 1;
}


.hero-slide.previous {
    opacity: 0;
    transform: translateX(-100%);
}

/* Lapisan gelap agar tulisan terbaca */
.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        90deg,
        rgba(0, 35, 85, 0.78),
        rgba(0, 35, 85, 0.35),
        rgba(0, 35, 85, 0.08)
    );
    z-index: 1;
}

/* Tulisan tetap di atas gambar */
.hero-content {
    position: relative;
    z-index: 2;
}

.hero-small {
    font-size: 11px;
    color: white;
    font-weight: 600;
    margin-bottom: 4px;
}

.hero-title {
    font-size: 31px;
    line-height: 1.05;
    color: white;
    font-weight: 800;
}

.hero-title span {
    color: #ffd337;
}

.hero-description {
    width: 72%;
    margin-top: 10px;
    color: white;
    font-size: 11px;
    line-height: 1.6;
}

.hero-button {
    display: inline-flex;
    align-items: center;
    margin-top: 13px;
    background: #ffd337;
    color: #073b91;
    border-radius: 20px;
    padding: 11px 17px;
    font-size: 11px;
    font-weight: 700;
    text-decoration: none;
}

.hero-hearts {
    position: absolute;
    right: 25px;
    top: 22px;
    color: #ffd337;
    font-size: 30px;
    z-index: 2;
}


        /* =====================================================
           KARTU KEGIATAN SAYA
        ===================================================== */

        .my-activity {
    min-height: 305px;
    border-radius: 25px;
    background: #fff1cf;
    padding: 20px 18px;
}

.section-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 16px;
}

.section-heading h2 {
    font-size: 16px;
    font-weight: 800;
    color: #073b91;
}

.section-heading a {
    color: #0750b5;
    font-size: 10px;
    font-weight: 700;
}

.empty-activity {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-top: 14px;
}

.my-activity-item {
    display: grid;
    grid-template-columns: 34px 48px minmax(0, 1fr) 14px;
    align-items: center;
    gap: 8px;
    padding: 9px 7px;
    background: rgba(255, 255, 255, 0.65);
    border-radius: 13px;
    text-decoration: none;
    min-width: 0;
}

.my-activity-date {
    background: #e7efff;
    color: #356bc1;
    border-radius: 8px;
    padding: 6px 2px;
    text-align: center;
    font-size: 9px;
    font-weight: 800;
}

.my-activity-photo {
    width: 48px;
    height: 48px;
    border-radius: 9px;
    object-fit: cover;
}

.my-activity-info {
    min-width: 0;
}

.my-activity-info strong {
    display: block;
    font-size: 9px;
    color: #073b91;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.my-activity-info p {
    font-size: 8px;
    color: #8195b7;
    margin: 4px 0;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.my-activity-info span {
    display: inline-block;
    font-size: 7px;
    font-weight: 700;
    color: #38865c;
    background: #d7f5df;
    border-radius: 10px;
    padding: 3px 6px;
}

.my-activity-arrow {
    color: #0750b5;
    font-size: 17px;
    font-weight: bold;
}

.my-activity-empty {
    text-align: center;
    padding: 25px 10px;
    color: #8195b7;
    font-size: 10px;
}      

        /* =====================================================
           QUICK MENU
        ===================================================== */

        .quick-menu {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-top: 12px;
        }

        .quick-card {
            height: 94px;
            border-radius: 18px;
            padding: 13px;
            position: relative;
            overflow: hidden;
        }

        .quick-card.orange {
            background: #ffd2c1;
        }

        .quick-card.purple {
            background: #d9d0ff;
        }

        .quick-card.green {
            background: #b7eee2;
        }

        .quick-card.pink {
            background: #f8bfd7;
        }

        .quick-icon {
            font-size: 23px;
            display: block;
            margin-bottom: 6px;
        }

        .quick-card h3 {
            color: #073b91;
            font-size: 11px;
            line-height: 1.2;
            font-weight: 800;
        }

        .quick-arrow {
            position: absolute;
            right: 9px;
            bottom: 9px;
            width: 36px;
            height: 36px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0750b5;
            font-size: 19px;
        }


        /* =====================================================
           JUDUL KEGIATAN
        ===================================================== */

        .activity-heading {
            display: flex;
            align-items: center;
            gap: 7px;
            margin: 14px 0 9px;
        }

        .activity-heading h2 {
            color: #073b91;
            font-size: 18px;
            font-weight: 800;
        }

        .sparkle {
            font-size: 20px;
        }

        .categories {
            display: flex;
            gap: 7px;
            margin-left: auto;
        }

        .category {
            border-radius: 18px;
            padding: 6px 11px;
            background: #e7effb;
            color: #6d86ae;
            font-size: 8px;
            font-weight: 600;
        }

        .category.active {
            background: #073b91;
            color: white;
        }


        /* =====================================================
           KARTU KEGIATAN
        ===================================================== */

        .activity-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .activity-card {
            background: white;
            border-radius: 17px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(42, 89, 145, .08);
        }

        .activity-image {
            height: 112px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
        }

        .activity-image.green {
            background: #bdeecb;
        }

        .activity-image.orange {
            background: #f1d1aa;
        }

        .activity-image.purple {
            background: #cfc9ff;
        }

        .activity-body {
            padding: 12px;
        }

        .activity-tag {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 15px;
            font-size: 7px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .tag-green {
            background: #c9f1d6;
            color: #299452;
        }

        .tag-orange {
            background: #ffe0ba;
            color: #a96d17;
        }

        .tag-purple {
            background: #ddd8ff;
            color: #6750bd;
        }

        .activity-body h3 {
            color: #073b91;
            font-size: 11px;
            line-height: 1.3;
            margin-bottom: 7px;
        }

        .activity-info {
            font-size: 8px;
            color: #7891b8;
            line-height: 1.7;
        }

        .activity-bottom {
            margin-top: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .participants {
            font-size: 8px;
            color: #7891b8;
        }

        .detail-button {
            padding: 7px 11px;
            border-radius: 18px;
            background: #dcecff;
            color: #0750b5;
            font-size: 8px;
            font-weight: 700;
        }


        /* =====================================================
           PANEL MOTIVASI
        ===================================================== */

        .motivation-card {
    margin-top: 14px;
    min-height: 330px;
    border-radius: 23px;
    background: linear-gradient(135deg, #ffbed7, #ffd5e7);
    padding: 24px;
    position: relative;
    overflow: hidden;
}

        .motivation-card h2 {
            width: 70%;
            color: #073b91;
            font-size: 24px;
            line-height: 1.25;
            font-weight: 800;
        }

        .motivation-card p {
            width: 65%;
            margin-top: 8px;
            color: #3966a4;
            font-size: 9px;
            line-height: 1.6;
        }

        .motivation-button {
            display: inline-block;
            margin-top: 13px;
            padding: 10px 18px;
            border-radius: 20px;
            background: #ffd337;
            color: #073b91;
            font-size: 9px;
            font-weight: 800;
        }

        .motivation-decoration {
            position: absolute;
            right: -5px;
            bottom: -12px;
            font-size: 80px;
        }


        /* =====================================================
           BANNER BAWAH
        ===================================================== */

        .bottom-banner {
            margin-top: 12px;
            min-height: 65px;
            border-radius: 18px;
            padding: 13px 18px;
            background: linear-gradient(90deg, #ffd4e4, #f7c5e8);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .bottom-banner-text {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .bottom-banner-icon {
            font-size: 25px;
        }

        .bottom-banner h3 {
            color: #073b91;
            font-size: 10px;
        }

        .bottom-banner p {
            color: #5575a7;
            font-size: 7px;
            margin-top: 3px;
        }

        .bottom-button {
            background: #073b91;
            color: white;
            padding: 10px 17px;
            border-radius: 20px;
            font-size: 8px;
            font-weight: 700;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1100px) {

            .dashboard-page {
                padding-left: 195px;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .dashboard-right {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 12px;
            }

            .motivation-card {
                margin-top: 0;
            }
        }


        @media (max-width: 800px) {

            .dashboard-page {
                padding-left: 0;
            }

            .dashboard-content {
                padding: 12px;
            }

            .dashboard-header {
                height: auto;
            }

            .profile-mini {
                min-width: auto;
            }

            .profile-info {
                display: none;
            }

            .quick-menu {
                grid-template-columns: repeat(2, 1fr);
            }

            .activity-list {
                grid-template-columns: 1fr;
            }

            .categories {
                overflow-x: auto;
                margin-left: 0;
            }

            .activity-heading {
                flex-wrap: wrap;
            }

            .dashboard-right {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>

<body>

    {{-- SIDEBAR BERTAUT --}}
    @include('layouts.sidebar')


    <main class="dashboard-page">

        <div class="dashboard-content">


            {{-- =================================================
                 HEADER
            ================================================== --}}

            <header class="dashboard-header">

                <form class="search-box" action="{{ route('dashboard') }}" method="GET">
    <span class="search-icon">⌕</span>

    <input
        type="text"
        name="cari"
        value="{{ request('cari') }}"
        placeholder="Cari kegiatan, komunitas, atau lokasi..."
    >

    <button type="submit" style="border:0;background:none;cursor:pointer;">
        🔍
    </button>
</form>


                <div class="notification">

                    ♧

                    <span class="notification-dot"></span>

                </div>


                <div class="profile-mini">

                    <div class="profile-photo">
    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
</div>

<div class="profile-info">
    <strong>Hai, {{ auth()->user()->name }}!</strong>
    <span>Volunteer</span>
</div>

            </header>



            {{-- =================================================
                 GRID DASHBOARD
            ================================================== --}}

            <div class="dashboard-grid">


                {{-- =================================================
                     BAGIAN KIRI
                ================================================== --}}

                <div class="dashboard-left">


                   
{{-- HERO SLIDESHOW --}}
<section class="hero-card">

    <div class="hero-slideshow">
        <div class="hero-slide active"
             style="background-image: url('{{ asset('images/Small Actions, Brighter World.png') }}')">
        </div>

        <div class="hero-slide"
             style="background-image: url('{{ asset('images/Volunteer Tutoring Under Sunlight.png') }}')">
        </div>

        
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-small">SELAMAT DATANG DI BERTAUT</div>

        <h1 class="hero-title">
            Halo,<br>
            <span>{{ auth()->user()->name }}!</span> 💙
        </h1>

        <p class="hero-description">
            Temukan kegiatan volunteer yang sesuai dengan minatmu
            dan mulai berbagi kebaikan bersama Bertaut.
        </p>

        <a href="{{ route('kegiatan') }}" class="hero-button">
            Lihat kegiatan baru →
        </a>
    </div>

    <div class="hero-hearts">✦</div>

</section>




                    {{-- QUICK MENU --}}

                    <section class="quick-menu">

                        <a href="{{ route('kegiatan') }}"
                           class="quick-card orange">

                            <span class="quick-icon">🔭</span>

                            <h3>
                                Jelajahi<br>
                                Kegiatan
                            </h3>

                            <span class="quick-arrow">→</span>

                        </a>


                        <a href="{{ route('kegiatan-saya') }}"
                           class="quick-card purple">

                            <span class="quick-icon">▣</span>

                            <h3>
                                Kegiatan<br>
                                Saya
                            </h3>

                            <span class="quick-arrow">→</span>

                        </a>


                        <a href="{{ route('ruang-aksi') }}"
                           class="quick-card green">

                            <span class="quick-icon">👥</span>

                            <h3>
                                Ruang Aksi
                            </h3>

                            <span class="quick-arrow">→</span>

                        </a>


                        <a href="{{ route('sertifikat') }}"
                           class="quick-card pink">

                            <span class="quick-icon">★</span>

                            <h3>
                                Sertifikat<br>
                                Saya
                            </h3>

                            <span class="quick-arrow">→</span>

                        </a>

                    </section>



                    {{-- KEGIATAN UNTUKMU --}}

                    <section>

                        <div class="activity-heading">

                            <h2>
                                Kegiatan Untukmu
                            </h2>

                            <span class="sparkle">✨</span>


                            <div class="categories">
    @foreach(['Semua', 'Lingkungan', 'Pendidikan', 'Sosial', 'Kesehatan', 'Hewan'] as $kategori)
        <a
            href="{{ route('dashboard', array_filter([
                'kategori' => $kategori,
                'cari' => request('cari')
            ])) }}"
            class="category {{ request('kategori', 'Semua') == $kategori ? 'active' : '' }}"
            style="text-decoration: none;"
        >
            {{ $kategori }}
        </a>
    @endforeach
</div>
                        </div>



                        {{-- CARD KEGIATAN --}}

                        <div class="activity-list">
    @forelse($kegiatans as $item)
        <article class="activity-card">
            <div class="activity-image green">
                @if($item->foto)
                    <img
                        src="{{ asset('storage/' . $item->foto) }}"
                        alt="{{ $item->judul }}"
                        style="width:100%; height:100%; object-fit:cover;"
                    >
                @else
                    🌱
                @endif
            </div>

            <div class="activity-body">
                <span class="activity-tag tag-green">
                    {{ $item->kategori }}
                </span>

                <h3>{{ $item->judul }}</h3>

                <div class="activity-info">
                    📍 {{ $item->lokasi }}<br>
                    📅 {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d M Y') }}
                </div>

                <div class="activity-bottom">
                    <span class="participants">
                        👥 {{ $item->peserta_count }} peserta
                    </span>

                    <a href="{{ route('kegiatan.detail', $item->id) }}"
                       class="detail-button">
                        Lihat Detail →
                    </a>
                </div>
            </div>
        </article>
    @empty
        <p>Belum ada kegiatan yang tersedia.</p>
    @endforelse
</div>

                        
                    </section>


                </div>



                {{-- =================================================
                     BAGIAN KANAN
                ================================================== --}}

                <div class="dashboard-right">


                    {{-- KEGIATAN SAYA --}}

                    <section class="my-activity">

                        <div class="section-heading">

                            <h2>
                                ▣ Kegiatan Saya
                            </h2>

                            <a href="{{ route('kegiatan-saya') }}">
                                Lihat semua →
                            </a>

                        </div>


                        <div class="empty-activity">

    @forelse($kegiatanSaya->take(3) as $item)

        <a href="{{ route('kegiatan.detail', $item->id) }}"
           class="my-activity-item">

            <div class="my-activity-date">
                {{ \Carbon\Carbon::parse($item->tanggal)->format('d') }}
                <br>
                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('M') }}
            </div>

            @if($item->foto)
                <img
                    src="{{ asset('storage/' . $item->foto) }}"
                    class="my-activity-photo"
                    alt="{{ $item->judul }}"
                >
            @else
                <div class="my-activity-photo"
                     style="background:#d7f5df; display:flex; align-items:center; justify-content:center;">
                    🌱
                </div>
            @endif

            <div class="my-activity-info">
                <strong>{{ $item->judul }}</strong>

                <p>📍 {{ $item->lokasi }}</p>

                <span>
                    {{ $item->user_id == auth()->id() ? 'Penyelenggara' : 'Terdaftar' }}
                </span>
            </div>

            <div class="my-activity-arrow">›</div>

        </a>

    @empty

        <div class="my-activity-empty">
            💗
            <p>Belum ada kegiatan yang kamu ikuti.</p>
        </div>

    @endforelse

</div>
                    </section>



                    {{-- MOTIVASI --}}

                    <section class="motivation-card">

                        <h2>
                            Setiap aksi<br>
                            punya arti<br>
                            untuk mereka 💗
                        </h2>

                        <p>
                            Sekecil apa pun kontribusimu,
                            tetap berarti bagi lingkungan
                            dan masyarakat.
                        </p>

                        <a href="{{ route('kegiatan') }}"
                           class="motivation-button">
                            Mulai cari kegiatan →
                        </a>

                        <div class="motivation-decoration">
                            🤝
                        </div>

                    </section>


                </div>

            </div>



            {{-- =================================================
                 BANNER BAWAH
            ================================================== --}}

            <section class="bottom-banner">

                <div class="bottom-banner-text">

                    <span class="bottom-banner-icon">
                        💗
                    </span>

                    <div>

                        <h3>
                            Bersama, kita bisa menciptakan perubahan yang lebih baik!
                        </h3>

                        <p>
                            Satu aksi kecil hari ini dapat memberikan dampak besar.
                        </p>

                    </div>

                </div>


                <a href="{{ route('kegiatan') }}"
                   class="bottom-button">

                    Jelajahi Lebih Banyak →

                </a>

            </section>


        </div>

    </main>

    <script>
document.addEventListener('DOMContentLoaded', function () {
    const categories = document.querySelector('.categories');

    if (!categories) return;

    categories.addEventListener('click', async function (event) {
        const link = event.target.closest('a.category');

        if (!link) return;

        event.preventDefault();

        const activityList = document.querySelector('.activity-list');

        if (!activityList) return;

        try {
            const response = await fetch(link.href, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            if (!response.ok) {
                throw new Error('Gagal memuat kegiatan.');
            }

            const html = await response.text();
            const parser = new DOMParser();
            const newDocument = parser.parseFromString(html, 'text/html');

            const newActivityList =
                newDocument.querySelector('.activity-list');

            const newCategories =
                newDocument.querySelector('.categories');

            if (!newActivityList || !newCategories) {
                throw new Error('Bagian kegiatan tidak ditemukan.');
            }

            activityList.innerHTML = newActivityList.innerHTML;
            categories.innerHTML = newCategories.innerHTML;

            window.history.pushState({}, '', link.href);

        } catch (error) {
            alert(error.message);
        }
    });

    window.addEventListener('popstate', function () {
        window.location.reload();
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.hero-slide');

    if (slides.length < 2) return;

    let currentSlide = 0;

    setInterval(function () {
        slides[currentSlide].classList.remove('active');

        currentSlide = (currentSlide + 1) % slides.length;

        slides[currentSlide].classList.add('active');
    }, 5000);
});
</script>


</body>
</html>