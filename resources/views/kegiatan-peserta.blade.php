<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta - Bertaut</title>

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

        .main-content {
            flex: 1;
            min-width: 0;
            padding: 30px;
        }

        .back-link {
            display: inline-block;
            color: #3970c5;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 22px;
        }

        .back-link:hover {
            color: #073b9c;
        }

        .page-header {
            background: linear-gradient(120deg, #d5e9ff, #e9dcff);
            border-radius: 22px;
            padding: 28px;
            margin-bottom: 25px;
        }

        .page-header h1 {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .page-header p {
            font-size: 13px;
            color: #3970c5;
            line-height: 1.7;
        }

        .event-info {
            margin-top: 18px;
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
            font-size: 12px;
            color: #2455ad;
            font-weight: 600;
        }

        .content-panel {
            background: white;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(31, 91, 177, .05);
        }

        .panel-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 22px;
        }

        .panel-heading h2 {
            font-size: 19px;
            font-weight: 800;
        }

        .total {
            background: #dceaff;
            color: #145bc0;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
        }

        .success-message {
            background: #d2f7e5;
            color: #087b55;
            padding: 13px 17px;
            border-radius: 12px;
            font-size: 13px;
            margin-bottom: 18px;
        }

        .participant-list {
            display: flex;
            flex-direction: column;
            gap: 13px;
        }

        .participant-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 17px;
            border: 1px solid #e0ecff;
            border-radius: 15px;
            background: #fbfdff;
        }

        .participant-left {
            display: flex;
            align-items: center;
            gap: 14px;
            min-width: 0;
        }

        .avatar {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #dceaff;
            color: #073b9c;
            border-radius: 50%;
            font-size: 19px;
            font-weight: 800;
        }

        .participant-name {
            font-size: 14px;
            font-weight: 700;
            color: #073b9c;
            overflow-wrap: anywhere;
        }

        .participant-email {
            font-size: 11px;
            color: #7392c5;
            margin-top: 4px;
            overflow-wrap: anywhere;
        }

        .participant-status {
            display: inline-block;
            margin-top: 7px;
            padding: 5px 11px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
        }

        .status-registered {
            background: #fff0c2;
            color: #a36b00;
        }

        .status-completed {
            background: #c8f5df;
            color: #008866;
        }

        .verify-button {
            border: none;
            background: #145bc0;
            color: white;
            padding: 11px 16px;
            border-radius: 20px;
            font-family: inherit;
            font-size: 11px;
            font-weight: 700;
            cursor: pointer;
            white-space: nowrap;
        }

        .verify-button:hover {
            background: #073b9c;
        }

        .verified-label {
            background: #c8f5df;
            color: #008866;
            padding: 10px 14px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
        }

        .empty-state {
            text-align: center;
            padding: 45px 15px;
            background: #f5f9ff;
            border: 2px dashed #c7dafa;
            border-radius: 16px;
        }

        .empty-state .icon {
            font-size: 45px;
            margin-bottom: 10px;
        }

        .empty-state h3 {
            font-size: 17px;
            margin-bottom: 7px;
        }

        .empty-state p {
            color: #7392c5;
            font-size: 12px;
        }

        @media (max-width: 800px) {
            .app-container {
                display: block;
            }

            .main-content {
                padding: 15px;
            }

            .page-header {
                padding: 20px;
            }

            .page-header h1 {
                font-size: 22px;
            }

            .content-panel {
                padding: 15px;
            }

            .participant-card {
                align-items: flex-start;
                flex-direction: column;
            }

            .verify-button,
            .verified-label {
                margin-left: 62px;
            }
        }
    </style>
</head>

<body>

<div class="app-container">

    @include('layouts.sidebar')

    <main class="main-content">

        <a href="{{ route('kegiatan-saya') }}" class="back-link">
            ← Kembali ke Kegiatan Saya
        </a>

        <section class="page-header">

            <h1>👥 Daftar Peserta</h1>

            <p>
                Kelola peserta yang bergabung dan verifikasi
                keikutsertaan mereka dalam kegiatanmu.
            </p>

            <div class="event-info">
                <span>📌 {{ $kegiatan->judul }}</span>
                <span>📅 {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d M Y') }}</span>
                <span>📍 {{ $kegiatan->lokasi }}</span>
            </div>

        </section>

        <section class="content-panel">

            @if (session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <div class="panel-heading">
                <h2>Peserta Kegiatan</h2>

                <span class="total">
                    {{ $kegiatan->peserta->count() }} Peserta
                </span>
            </div>

            <div class="participant-list">

                @forelse ($kegiatan->peserta as $peserta)

                    <div class="participant-card">

                        <div class="participant-left">

                            <div class="avatar">
                                {{ strtoupper(substr($peserta->user->name ?? '?', 0, 1)) }}
                            </div>

                            <div>
                                <div class="participant-name">
                                    {{ $peserta->user->name ?? 'Pengguna tidak ditemukan' }}
                                </div>

                                <div class="participant-email">
                                    {{ $peserta->user->email ?? '-' }}
                                </div>

                                @if ($peserta->status === 'selesai')
                                    <span class="participant-status status-completed">
                                        ✓ Sudah Diverifikasi
                                    </span>
                                @else
                                    <span class="participant-status status-registered">
                                        Menunggu Verifikasi
                                    </span>
                                @endif

                            </div>

                        </div>

                        @if ($peserta->status !== 'selesai')

                            <form
                                action="{{ route('kegiatan.verifikasi-peserta', [
                                    'kegiatanId' => $kegiatan->id,
                                    'pesertaId' => $peserta->id
                                ]) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin memverifikasi peserta ini?')"
                            >
                                @csrf

                                <button type="submit" class="verify-button">
                                    Verifikasi ✓
                                </button>
                            </form>

                        @else

                            <span class="verified-label">
                                ✓ Terverifikasi
                            </span>

                        @endif

                    </div>

                @empty

                    <div class="empty-state">
                        <div class="icon">🌱</div>

                        <h3>Belum Ada Peserta</h3>

                        <p>
                            Belum ada orang yang bergabung dengan kegiatan ini.
                            Peserta yang mendaftar akan muncul di sini.
                        </p>
                    </div>

                @endforelse

            </div>

        </section>

    </main>

</div>

</body>
</html>
