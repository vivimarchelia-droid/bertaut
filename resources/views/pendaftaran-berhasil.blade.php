
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil - Bertaut</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f0f6ff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .success-card {
            background: white;
            width: 100%;
            max-width: 520px;
            padding: 45px 35px;
            border-radius: 22px;
            text-align: center;
            box-shadow: 0 10px 35px rgba(50, 90, 150, 0.09);
        }

        .success-icon {
            width: 85px;
            height: 85px;
            margin: 0 auto 22px;
            background: #dcf8e9;
            color: #20a568;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 42px;
        }

        h2 {
            color: #263653;
            font-size: 23px;
            margin-bottom: 12px;
        }

        .description {
            color: #78869b;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 22px;
        }

        .event-name {
            background: #eaf3ff;
            color: #3478d4;
            padding: 15px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 15px;
            background: #4389e8;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 14px;
            transition: 0.2s;
        }

        .btn:hover {
            background: #286fcf;
        }

        .back-link {
            display: inline-block;
            margin-top: 18px;
            color: #7b8799;
            text-decoration: none;
            font-size: 13px;
        }
    </style>
</head>

<body>

    <div class="success-card">

        <div class="success-icon">✓</div>

        <h2>Pendaftaran Berhasil!</h2>

        <p class="description">
            Yeay! Data pendaftaran kamu berhasil disimpan.
            Sekarang kamu sudah terdaftar sebagai peserta kegiatan ini.
        </p>

        <div class="event-name">
            {{ $kegiatan->judul }}
        </div>

        <a href="{{ route('ruang-aksi.detail', $kegiatan->id) }}" class="btn">
            💬 Masuk Ruang Aksi
        </a>

        <a href="{{ route('kegiatan') }}" class="back-link">
            Kembali ke daftar kegiatan
        </a>

    </div>

</body>
</html>
