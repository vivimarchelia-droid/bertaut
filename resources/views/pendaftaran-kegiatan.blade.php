
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran - Bertaut</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f0f6ff;
            padding: 40px 20px;
            color: #263653;
        }

        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(50, 90, 150, 0.08);
        }

        h2 {
            color: #3478d4;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #7b8799;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .event-name {
            background: #eaf3ff;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 25px;
            color: #3478d4;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #dce5f1;
            border-radius: 10px;
            font-family: inherit;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #5594e8;
        }

        .error {
            color: #e04444;
            font-size: 12px;
            margin-top: 5px;
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }

        .btn {
            flex: 1;
            padding: 13px;
            border: none;
            border-radius: 10px;
            font-family: inherit;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-back {
            background: #edf2f8;
            color: #53647c;
        }

        .btn-submit {
            background: #4389e8;
            color: white;
        }

        @media(max-width: 500px) {
            .container {
                padding: 24px 18px;
            }

            .buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulir Pendaftaran 🤝</h2>
    <p class="subtitle">Lengkapi data diri kamu sebelum bergabung dengan kegiatan.</p>

    <div class="event-name">
        {{ $kegiatan->judul }}
    </div>

    <form action="{{ route('kegiatan.daftar.store', $kegiatan->id) }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama Lengkap *</label>
            <input type="text" name="nama_lengkap"
                value="{{ old('nama_lengkap', auth()->user()->name) }}"
                placeholder="Masukkan nama lengkap">
            @error('nama_lengkap')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Email *</label>
            <input type="email" name="email"
                value="{{ old('email', auth()->user()->email) }}"
                placeholder="Masukkan email aktif">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Nomor HP *</label>
            <input type="text" name="no_hp"
                value="{{ old('no_hp') }}"
                placeholder="Contoh: 081234567890">
            @error('no_hp')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Asal Instansi / Universitas</label>
            <input type="text" name="instansi"
                value="{{ old('instansi') }}"
                placeholder="Masukkan asal instansi">
            @error('instansi')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="buttons">
            <a href="{{ route('kegiatan.detail', $kegiatan->id) }}" class="btn btn-back">
                Kembali
            </a>

            <button type="submit" class="btn btn-submit">
                Kirim Pendaftaran
            </button>
        </div>
    </form>
</div>

</body>
</html>
