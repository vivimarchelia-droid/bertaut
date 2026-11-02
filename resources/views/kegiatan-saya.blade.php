<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan Saya - Bertaut</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #edf7ff;
            color: #073b9c;
        }

        .app-container {
            display: flex;
            min-height: 100vh;
        }

        

        /* MAIN */
        .main-content {
            flex: 1;
            min-width: 0;
            padding: 18px 28px 28px;
        }

        .topbar {
            display: flex;
            align-items: center;
            gap: 22px;
            margin-bottom: 25px;
        }

        .search-box {
            flex: 1;
            height: 52px;
            background: #dceaff;
            border-radius: 28px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 22px;
            color: #7392c5;
            font-size: 13px;
        }

        .search-icon {
            font-size: 25px;
            color: #073b9c;
        }

        .search-box input {
    width: 100%;
    border: none;
    outline: none;
    background: transparent;
    color: #073b9c;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
}

.search-box input::placeholder {
    color: #7392c5;
}

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .topbar-right {
    display: flex;
    align-items: center;
    gap: 15px;
}

.bell {
    font-size: 25px;
    color: #073b9c;
    position: relative;
}

.bell::after {
    content: "";
    position: absolute;
    width: 7px;
    height: 7px;
    background: #ff7188;
    border-radius: 50%;
    top: 2px;
    right: 0;
}

.profile {
    display: flex;
    align-items: center;
    gap: 12px;
}

.profile-photo {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    background: #ffc4dc;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #073b9c;
    font-size: 23px;
    font-weight: 700;
}

.profile-placeholder {
    background: #ffc4dc;
}

.profile-name {
    font-size: 14px;
    font-weight: 800;
    color: #073b9c;
}

.profile-role {
    font-size: 12px;
    color: #7892bd;
}

        /* PAGE HEADER */
      .page-header {
    display: flex;
    align-items: center;
    min-height: auto;
    padding: 5px 15px 15px;
    margin-bottom: 0;
}

        .page-title-area {
            max-width: 650px;
        }

        .page-title {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 32px;
    font-weight: 800;
    color: #073b9c;
    letter-spacing: -1px;
}

       .calendar-icon {
    font-size: 30px;
}

.page-description {
    margin-top: 5px;
    font-size: 13px;
    line-height: 1.5;
    color: #3970c5;
}

        .header-illustration {
            display: flex;
            align-items: flex-end;
            gap: 20px;
            padding-right: 25px;
        }

        .header-note {
            font-size: 18px;
            color: #2455ad;
            font-weight: 600;
            line-height: 1.4;
            transform: rotate(-7deg);
            max-width: 150px;
        }

        .header-person {
            font-size: 130px;
            line-height: 1;
        }

        /* CONTENT PANEL */
        .content-panel {
            background: #fff4d8;
            border-radius: 24px;
            padding: 18px;
        }

        .tabs {
    display: flex;
    width: 100%;
    gap: 8px;
    margin-bottom: 24px;
}

.tab {
    flex: 1;
    text-align: center;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    border-radius: 12px;
    background: #ded7ff;
    color: #5935db;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 700;
}

.tab.active {
    background: linear-gradient(90deg, #8660ed, #7150df);
    color: white;
}

        .tab {
            border: none;
            font-family: inherit;
            cursor: pointer;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .section {
            margin-bottom: 26px;
        }

        .section-title {
            font-size: 25px;
            font-weight: 800;
            color: #073b9c;
            margin-bottom: 5px;
        }

        .section-description {
            color: #3970c5;
            font-size: 13px;
            margin-bottom: 17px;
        }

        /* GRID KARTU */
        .activities-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 17px;
        }

        .activity-card {
            background: white;
            border-radius: 18px;
            padding: 12px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 0 rgba(31, 91, 177, .04);
        }

        .activity-image-wrapper {
            position: relative;
        }

        .activity-image {
            width: 100%;
            height: 145px;
            object-fit: cover;
            border-radius: 13px;
            display: block;
        }

        .heart {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: white;
            color: #ff7190;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .category {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 13px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
        }

        .category.green {
            background: #c6f5df;
            color: #008b68;
        }

        .category.purple {
            background: #dcd2ff;
            color: #6241d5;
        }

        .category.blue {
            background: #cfe5ff;
            color: #145bc0;
        }

        .category.yellow {
            background: #ffe18a;
            color: #a36b00;
        }

        .category.pink {
            background: #ffd2e6;
            color: #d83d80;
        }

        .activity-title {
            color: #073b9c;
            font-size: 15px;
            font-weight: 800;
            line-height: 1.4;
            margin-top: 8px;
            min-height: 42px;
        }

        .activity-info {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            color: #3970c5;
            font-size: 12px;
            margin-top: 8px;
            line-height: 1.4;
        }

        .activity-info span:first-child {
            width: 17px;
            flex-shrink: 0;
        }

        .status {
            display: inline-block;
            margin-top: 14px;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
        }

        .status.registered {
            background: #c8f5df;
            color: #008866;
        }

        .status.scheduled {
            background: #cfe5ff;
            color: #145bc0;
        }

        .status.ongoing {
            background: #ffe18a;
            color: #a36b00;
        }

        .status.created {
            background: #ffd2e6;
            color: #d83d80;
        }

        .empty-state {
            grid-column: 1 / -1;
            background: #ffffff;
            border: 2px dashed #c7dafa;
            border-radius: 18px;
            padding: 34px 20px;
            text-align: center;
            color: #3970c5;
        }

        .empty-icon {
            font-size: 42px;
            margin-bottom: 8px;
        }

        .empty-state h3 {
            color: #073b9c;
            font-size: 17px;
            margin-bottom: 7px;
        }

        .empty-state p {
            font-size: 12px;
            line-height: 1.7;
            margin: 0 auto 16px;
            max-width: 480px;
        }

        .empty-state .create-button {
            display: inline-block;
        }

        /* FOOTER BANNER */
        .footer-banner {
            margin-top: 24px;
            background: linear-gradient(90deg, #ffb6d7, #ffc7e2);
            border-radius: 20px;
            padding: 23px 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .footer-text {
            color: #073b9c;
            font-size: 19px;
            font-weight: 700;
            line-height: 1.5;
        }

        .create-button {
            text-decoration: none;
            background: #0647ad;
            color: white;
            padding: 15px 24px;
            border-radius: 28px;
            font-size: 13px;
            font-weight: 700;
            white-space: nowrap;
        }

        .create-button:hover {
            background: #052f78;
        }

        .manage-button {
            display: inline-block;
            margin-top: 12px;
            padding: 9px 14px;
            border-radius: 20px;
            background: #dceaff;
            color: #073b9c;
            text-decoration: none;
            font-size: 11px;
            font-weight: 700;
            transition: .2s ease;
        }

        .manage-button:hover {
            background: #c5dcff;
        }

        /* RESPONSIVE TABLET */
        @media (max-width: 1150px) {
            

            .main-content {
                padding: 18px;
            }

            .page-title {
                font-size: 35px;
            }

            .header-person {
                font-size: 95px;
            }

            .header-note {
                font-size: 14px;
            }

            .activities-grid {
                gap: 12px;
            }

            .activity-image {
                height: 125px;
            }
        }

        /* RESPONSIVE HP */
        @media (max-width: 800px) {
            .app-container {
                display: block;
            }

            

            .main-content {
                padding: 12px;
            }

            .topbar {
                gap: 8px;
            }

            .search-box {
                height: 43px;
                padding: 0 12px;
                font-size: 10px;
            }

            .topbar-right {
                gap: 8px;
            }

            .bell {
                font-size: 23px;
            }

            .profile-photo {
                width: 37px;
                height: 37px;
            }

            .profile-name,
            .profile-role,
            .profile-arrow {
                display: none;
            }

            .page-header {
    display: flex;
    align-items: center;
    min-height: auto;
    padding: 12px 15px 25px;
}

.page-title-area {
    max-width: 650px;
}

.page-title {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 32px;
    font-weight: 800;
    color: #073b9c;
    letter-spacing: -1px;
}

.calendar-icon {
    font-size: 34px;
}

.page-description {
    margin-top: 8px;
    font-size: 13px;
    line-height: 1.6;
    color: #7892bd;
}

            .content-panel {
                padding: 10px;
                border-radius: 18px;
            }

            .tabs {
                gap: 5px;
            }

            .tab {
                flex: 1;
                padding: 11px 5px;
                font-size: 10px;
            }

            .section-title {
                font-size: 18px;
            }

            .section-description {
                font-size: 10px;
                margin-bottom: 12px;
            }

            .activities-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .activity-card {
                padding: 8px;
                border-radius: 13px;
            }

            .activity-image {
                height: 100px;
                border-radius: 9px;
            }

            .heart {
                width: 27px;
                height: 27px;
                font-size: 16px;
                top: 6px;
                right: 6px;
            }

            .category {
                font-size: 9px;
                padding: 4px 8px;
                margin-top: 7px;
            }

            .activity-title {
                font-size: 11px;
                min-height: 32px;
            }

            .activity-info {
                font-size: 9px;
                gap: 4px;
                margin-top: 5px;
            }

            .status {
                font-size: 9px;
                padding: 6px 8px;
                margin-top: 9px;
            }

            .footer-banner {
                padding: 15px;
                flex-direction: column;
                align-items: stretch;
                text-align: center;
            }

            .footer-text {
                font-size: 14px;
            }

            .create-button {
                text-align: center;
                font-size: 11px;
            }
        }

        @media (max-width: 430px) {
            .menu {
                grid-template-columns: repeat(4, 1fr);
            }

            .menu-item:nth-child(5),
            .menu-item:nth-child(6),
            .menu-item:nth-child(7),
            .menu-item:nth-child(8) {
                display: none;
            }

            .page-title {
                font-size: 23px;
            }

            .header-person {
                font-size: 52px;
            }

            .activities-grid {
                grid-template-columns: 1fr 1fr;
            }

            .activity-image {
                height: 85px;
            }
        }
    </style>
</head>

<body>
<div class="app-container">

     @include('layouts.sidebar')

    <!-- MAIN CONTENT -->
    <main class="main-content">

 <!-- TOPBAR -->
<div class="topbar">

    <form action="{{ route('kegiatan-saya') }}" method="GET" class="search-box">
        <span class="search-icon">⌕</span>

        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Cari kegiatan, komunitas, atau lokasi..."
        >
    </form>

    <div class="topbar-right">

        <div class="bell">♧</div>

        <div class="profile">
            @if (auth()->user()->profile_photo)
                <img
                    class="profile-photo"
                    src="{{ asset('storage/' . auth()->user()->profile_photo) }}"
                    alt="Foto profil">
            @else
                <div class="profile-photo profile-placeholder">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
            @endif

            <div>
                <div class="profile-name">
                    Hai, {{ auth()->user()->name }}!
                </div>

                <div class="profile-role">Volunteer</div>
            </div>
        </div>

    </div>

</div>

        <!-- HEADER HALAMAN -->
       <section class="page-header">
    <div class="page-title-area">
        <h1 class="page-title">
            <span class="calendar-icon">📅</span>
            Kegiatan Saya
        </h1>

        <p class="page-description">
            Semua kegiatan yang kamu ikuti maupun yang kamu buat,
            ada di sini. Teruslah berkontribusi, karena setiap aksi berarti!
        </p>
    </div>
</section>

        <!-- CONTENT -->
        <section class="content-panel">

            <div class="tabs">
    <button type="button" class="tab active" data-tab="diikuti">
        Kegiatan yang Diikuti
    </button>

    <button type="button" class="tab" data-tab="dibuat">
        Kegiatan yang Saya Buat
    </button>
</div>

<!-- KEGIATAN YANG DIIKUTI -->
<div class="section tab-content active" id="section-diikuti">

    <h2 class="section-title">Kegiatan yang Diikuti</h2>

    <p class="section-description">
        Berikut adalah kegiatan yang sudah kamu ikuti.
    </p>

    <div class="activities-grid">

        @forelse ($kegiatanDiikuti as $kegiatan)
            @php
                $categoryClass = match (strtolower($kegiatan->kategori)) {
                    'lingkungan' => 'green',
                    'sosial' => 'purple',
                    'pendidikan' => 'blue',
                    'hewan' => 'yellow',
                    default => 'pink',
                };
            @endphp

            <div class="activity-card">
                <div class="activity-image-wrapper">
                    @if ($kegiatan->foto)
                        <img
                            class="activity-image"
                            src="{{ asset('storage/' . $kegiatan->foto) }}"
                            alt="{{ $kegiatan->judul }}">
                    @else
                        <div class="activity-image" style="background:#dceaff; display:flex; align-items:center; justify-content:center; font-size:45px;">
                            🌱
                        </div>
                    @endif

                    <div class="heart">♡</div>
                </div>

                <span class="category {{ $categoryClass }}">
                    {{ $kegiatan->kategori }}
                </span>

                <h3 class="activity-title">
                    {{ $kegiatan->judul }}
                </h3>

                <div class="activity-info">
                    <span>▣</span>
                    <span>
                        {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d M Y') }}
                    </span>
                </div>

                <div class="activity-info">
                    <span>⌖</span>
                    <span>{{ $kegiatan->lokasi }}</span>
                </div>

                <span class="status registered">
                    Sudah Terdaftar
                </span>
            </div>

        @empty
            <div class="empty-state">
                <div class="empty-icon">🌱</div>
                <h3>Belum Ada Kegiatan</h3>
                <p>
                    Kamu belum bergabung dengan kegiatan apa pun.
                    Yuk, temukan kegiatan dan mulai berkontribusi!
                </p>
                <a href="{{ route('kegiatan') }}" class="create-button">
                    Jelajahi Kegiatan →
                </a>
            </div>
        @endforelse

    </div>
</div>

<!-- KEGIATAN YANG DIBUAT -->
<div class="section tab-content" id="section-dibuat">

    <h2 class="section-title">Kegiatan yang Saya Buat</h2>

    <p class="section-description">
        Berikut adalah kegiatan yang kamu buat sendiri.
    </p>

    <div class="activities-grid">

        @forelse ($kegiatanDibuat as $kegiatan)
            @php
                $categoryClass = match (strtolower($kegiatan->kategori)) {
                    'lingkungan' => 'green',
                    'sosial' => 'purple',
                    'pendidikan' => 'blue',
                    'hewan' => 'yellow',
                    default => 'pink',
                };
            @endphp

            <div class="activity-card">
                <div class="activity-image-wrapper">
                    @if ($kegiatan->foto)
                        <img
                            class="activity-image"
                            src="{{ asset('storage/' . $kegiatan->foto) }}"
                            alt="{{ $kegiatan->judul }}">
                    @else
                        <div class="activity-image" style="background:#dceaff; display:flex; align-items:center; justify-content:center; font-size:45px;">
                            💗
                        </div>
                    @endif

                    <div class="heart">♡</div>
                </div>

                <span class="category {{ $categoryClass }}">
                    {{ $kegiatan->kategori }}
                </span>

                <h3 class="activity-title">
                    {{ $kegiatan->judul }}
                </h3>

                <div class="activity-info">
                    <span>▣</span>
                    <span>
                        {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d M Y') }}
                    </span>
                </div>

                <div class="activity-info">
                    <span>⌖</span>
                    <span>{{ $kegiatan->lokasi }}</span>
                </div>

                <span class="status created">
                    Dibuat oleh Saya
                </span>

                <a
                    href="{{ route('kegiatan.peserta', $kegiatan->id) }}"
                    class="manage-button">
                    Kelola Peserta →
                </a>
            </div>

        @empty
            <div class="empty-state">
                <div class="empty-icon">💗</div>
                <h3>Belum Ada Kegiatan yang Dibuat</h3>
                <p>
                    Kamu belum membuat kegiatan sendiri.
                    Ayo buat kegiatan dan ajak orang lain berbuat kebaikan!
                </p>
                <a href="{{ route('buat-kegiatan') }}" class="create-button">
                    Buat Kegiatan →
                </a>
            </div>
        @endforelse

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabButtons = document.querySelectorAll('.tab[data-tab]');

        const tabSections = {
            diikuti: document.getElementById('section-diikuti'),
            dibuat: document.getElementById('section-dibuat')
        };

        tabButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const selected = button.dataset.tab;

                tabButtons.forEach(function (tab) {
                    tab.classList.toggle('active', tab === button);
                });

                Object.entries(tabSections).forEach(function ([key, section]) {
                    if (section) {
                        section.classList.toggle('active', key === selected);
                    }
                });
            });
        });
    });
</script>

</body>
</html>