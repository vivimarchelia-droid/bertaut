<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $kegiatan->judul }} | Bertaut</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: #f3f7ff;
            color: #073b91;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .page {
            width: 100%;
            min-height: 100vh;
            padding: 35px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            color: #073b91;
            font-size: 14px;
            font-weight: 700;

            margin-bottom: 25px;
        }

        .detail-container {
            max-width: 1100px;
            margin: auto;

            background: white;
            border-radius: 25px;
            overflow: hidden;

            box-shadow: 0 10px 30px rgba(7, 59, 145, 0.08);
        }

        .detail-image {
            width: 100%;
            height: 330px;
            background: linear-gradient(
                135deg,
                #91e0bc,
                #d5f4c7
            );

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;
        }

        .detail-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .detail-placeholder {
            font-size: 90px;
        }

        .detail-content {
            padding: 35px;
        }

        .event-tag {
            display: inline-block;

            background: #e8effb;
            color: #5076b4;

            border-radius: 20px;

            padding: 7px 13px;

            font-size: 12px;
            font-weight: 800;

            margin-bottom: 15px;
        }

        .detail-title {
            font-size: 32px;
            line-height: 1.25;
            font-weight: 900;

            color: #073b91;

            margin-bottom: 15px;
        }

        .detail-description {
            color: #7892bd;
            font-size: 14px;
            line-height: 1.8;

            margin-bottom: 30px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;

            margin-bottom: 30px;
        }

        .info-box {
            background: #f5f8ff;
            border-radius: 15px;
            padding: 17px;
        }

        .info-label {
            display: block;

            color: #7892bd;
            font-size: 11px;

            margin-bottom: 5px;
        }

        .info-value {
            color: #073b91;
            font-size: 13px;
            font-weight: 800;
        }

        .section {
            margin-bottom: 28px;
        }

        .section h2 {
            color: #073b91;
            font-size: 18px;
            font-weight: 900;

            margin-bottom: 10px;
        }

        .section p {
            color: #7892bd;
            font-size: 13px;
            line-height: 1.8;
        }

       .join-area {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 15px;
}

#joinMessage {
    width: 100%;
    text-align: left;
    margin-top: 0 !important;
}

        .join-button {
    display: inline-block;
    text-decoration: none;
    text-align: center;

    border: none;
    background: #ffd447;
    color: #073b91;

    padding: 14px 30px;
    border-radius: 13px;

    font-family: inherit;
    font-size: 14px;
    font-weight: 900;

    cursor: pointer;
}

        .join-button:hover {
            background: #ffca1c;
        }

        @media (max-width: 700px) {

            .page {
                padding: 18px;
            }

            .detail-content {
                padding: 22px;
            }

            .detail-image {
                height: 230px;
            }

            .detail-title {
                font-size: 25px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .join-area {
                display: block;
            }

            .join-button {
                width: 100%;
            }

        }

    </style>
</head>


<body>

<div class="page">

    <a href="{{ route('kegiatan') }}" class="back-button">
        ← Kembali ke Jelajahi Kegiatan
    </a>


    <div class="detail-container">


        {{-- FOTO --}}

        <div class="detail-image">

            @if($kegiatan->foto)

                <img
                    src="{{ asset('storage/' . $kegiatan->foto) }}"
                    alt="{{ $kegiatan->judul }}"
                >

            @else

                <div class="detail-placeholder">
                    🌱
                </div>

            @endif

        </div>


        {{-- KONTEN --}}

        <div class="detail-content">


            <span class="event-tag">
                {{ $kegiatan->kategori }}
            </span>


            <h1 class="detail-title">
                {{ $kegiatan->judul }}
            </h1>


            <p class="detail-description">
                {{ $kegiatan->deskripsi }}
            </p>


            {{-- INFORMASI --}}

            <div class="info-grid">


                <div class="info-box">

                    <span class="info-label">
                        📍 Lokasi
                    </span>

                    <span class="info-value">
                        {{ $kegiatan->lokasi }}
                    </span>

                </div>


                <div class="info-box">

                    <span class="info-label">
                        📅 Tanggal
                    </span>

                    <span class="info-value">
                        {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d F Y') }}
                    </span>

                </div>


                <div class="info-box">

                    <span class="info-label">
                        ⏰ Waktu
                    </span>

                    <span class="info-value">
                        {{ \Carbon\Carbon::parse($kegiatan->waktu)->format('H:i') }}
                    </span>

                </div>


                <div class="info-box">

                    <span class="info-label">
                        👥 Relawan Dibutuhkan
                    </span>

                    <span class="info-value">
                        {{ $kegiatan->jumlah_relawan }} orang
                    </span>

                </div>


            </div>


            {{-- TUJUAN --}}

            <div class="section">

                <h2>
                    🎯 Tujuan Kegiatan
                </h2>

                <p>
                    {{ $kegiatan->tujuan }}
                </p>

            </div>


            {{-- MANFAAT --}}

            <div class="section">

                <h2>
                    🎁 Manfaat bagi Peserta
                </h2>

                <p>
                    {{ $kegiatan->manfaat }}
                </p>

            </div>


            {{-- PERSYARATAN --}}

            @if($kegiatan->persyaratan)

            <div class="section">

                <h2>
                    📋 Persyaratan Relawan
                </h2>

                <p>
                    {{ $kegiatan->persyaratan }}
                </p>

            </div>

            @endif


            {{-- PERLENGKAPAN --}}

            @if($kegiatan->perlengkapan)

            <div class="section">

                <h2>
                    🧰 Perlengkapan
                </h2>

                <p>
                    {{ $kegiatan->perlengkapan }}
                </p>

            </div>

            @endif
@if(session('error'))
    <div style="
        background: #ffe0e0;
        color: #c62828;
        padding: 15px 20px;
        border-radius: 12px;
        margin-bottom: 20px;
        font-weight: 600;
    ">
        ⚠️ {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div style="
        background: #d8f5e5;
        color: #087443;
        padding: 15px 20px;
        border-radius: 12px;
        margin-bottom: 20px;
        font-weight: 600;
    ">
        ✓ {{ session('success') }}
    </div>
@endif

            {{-- TOMBOL JOIN --}}

<div class="join-area">

    <a href="{{ route('kegiatan.daftar', $kegiatan->id) }}"
       class="join-button">
        🤝 Saya Mau Ikut
    </a>

</div>
</div>


<script>
document.getElementById('joinForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = this;
    const button = form.querySelector('button');
    const message = document.getElementById('joinMessage');

    button.disabled = true;
    button.textContent = 'Memproses...';

    try {
        const response = await fetch(form.action, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: new FormData(form)
        });

        const data = await response.json();

        message.style.display = 'block';
message.textContent = data.message;

        if (response.ok) {
            message.style.background = '#d8f5e5';
            message.style.color = '#087443';

            window.location.href = '/ruang-aksi/' + {{ $kegiatan->id }};
        } else {
            message.style.background = '#ffe0e0';
            message.style.color = '#c62828';

            button.disabled = false;
            button.textContent = '🤝 Saya Mau Ikut';
        }

    } catch (error) {
        message.style.display = 'block';
        message.style.background = '#ffe0e0';
        message.style.color = '#c62828';
        message.textContent = 'Terjadi kesalahan. Silakan coba lagi.';

        button.disabled = false;
        button.textContent = '🤝 Saya Mau Ikut';
    }
});
</script>

</body>

</html>