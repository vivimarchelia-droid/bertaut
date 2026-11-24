<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kegiatan - Bertaut</title>

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

       .main-content {
    padding: 30px 25px 30px 15px;
    width: calc(100% - 222px);
    max-width: none;
    margin-left: 222px;
}

.page-header,
.form-panel {
    width: 100%;
}

        .page-header {
            margin-bottom: 22px;
        }

        .page-header h1 {
            font-size: 30px;
            font-weight: 800;
        }

        .page-header p {
            color: #3970c5;
            font-size: 13px;
            margin-top: 7px;
        }

        .form-panel {
            background: #fff4d8;
            padding: 28px;
            border-radius: 22px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        .full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        input, select, textarea {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #c9dcf8;
            border-radius: 11px;
            background: white;
            color: #073b9c;
            font-family: inherit;
            font-size: 13px;
            outline: none;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #7150df;
        }

        .current-photo {
            width: 180px;
            height: 120px;
            object-fit: cover;
            border-radius: 12px;
            display: block;
            margin-bottom: 12px;
        }

        .error {
            color: #d83d80;
            font-size: 11px;
            margin-top: 5px;
        }

        .form-actions {
            display: flex;
            gap: 12px;
            justify-content: flex-end;
            margin-top: 15px;
            flex-wrap: wrap;
        }

        .button {
            border: none;
            border-radius: 25px;
            padding: 13px 23px;
            font-family: inherit;
            font-weight: 700;
            font-size: 13px;
            text-decoration: none;
            cursor: pointer;
        }

        .save-button {
            background: #7150df;
            color: white;
        }

        .cancel-button {
            background: #dceaff;
            color: #073b9c;
        }

        .alert {
            background: #ffe0ec;
            color: #b52b68;
            border-radius: 10px;
            padding: 13px;
            margin-bottom: 18px;
            font-size: 12px;
        }

        @media(max-width: 650px) {
            .main-content {
                padding: 15px;
            }

            .form-panel {
                padding: 17px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .page-header h1 {
                font-size: 23px;
            }
        }

        /* CUSTOM UPLOAD FOTO */
.upload-box {
    width: 100%;
    min-height: 100px;
    border: 2px dashed #9bbcf2;
    border-radius: 16px;
    background: #f5f8ff;
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 18px;
    transition: .2s ease;
}

.upload-box:hover {
    border-color: #7150df;
    background: #f0edff;
}

.upload-icon {
    width: 52px;
    height: 52px;
    flex-shrink: 0;
    background: #ded7ff;
    color: #6241d5;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 25px;
}

.upload-info {
    flex: 1;
    min-width: 0;
}

.upload-info strong {
    display: block;
    font-size: 13px;
    color: #073b9c;
}

.upload-info small {
    display: block;
    font-size: 11px;
    color: #7892bd;
    margin-top: 5px;
}

.upload-button {
    display: inline-block;
    background: #7150df;
    color: white;
    padding: 11px 18px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 700;
    cursor: pointer;
    white-space: nowrap;
    transition: .2s ease;
}

.upload-button:hover {
    background: #5935c7;
}

#foto {
    display: none;
}

@media(max-width: 550px) {
    .upload-box {
        flex-wrap: wrap;
    }

    .upload-button {
        width: 100%;
        text-align: center;
    }
}
    </style>
</head>

<body>

@include('layouts.sidebar')

<main class="main-content">

    <div class="page-header">
        <h1>✏️ Edit Kegiatan</h1>
        <p>Perbarui informasi kegiatan yang kamu selenggarakan.</p>
    </div>

    <div class="form-panel">

        @if ($errors->any())
            <div class="alert">
                <strong>Periksa kembali data yang kamu masukkan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('kegiatan.update', $kegiatan->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="form-grid">

                <div class="form-group full">
                    <label>Nama Kegiatan</label>
                    <input type="text" name="judul"
                           value="{{ old('judul', $kegiatan->judul) }}" required>
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori"
                           value="{{ old('kategori', $kegiatan->kategori) }}" required>
                </div>

                <div class="form-group">
                    <label>Jumlah Relawan yang Dibutuhkan</label>
                    <input type="number" name="jumlah_relawan" min="1"
                           value="{{ old('jumlah_relawan', $kegiatan->jumlah_relawan) }}" required>
                </div>

                <div class="form-group full">
                    <label>Deskripsi Kegiatan</label>
                    <textarea name="deskripsi" required>{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
                </div>

                <div class="form-group full">
                    <label>Tujuan Kegiatan</label>
                    <textarea name="tujuan" required>{{ old('tujuan', $kegiatan->tujuan) }}</textarea>
                </div>

                <div class="form-group full">
                    <label>Manfaat Kegiatan</label>
                    <textarea name="manfaat" required>{{ old('manfaat', $kegiatan->manfaat) }}</textarea>
                </div>

                <div class="form-group full">
                    <label>Persyaratan Peserta</label>
                    <textarea name="persyaratan">{{ old('persyaratan', $kegiatan->persyaratan) }}</textarea>
                </div>

                <div class="form-group full">
                    <label>Perlengkapan yang Dibutuhkan</label>
                    <textarea name="perlengkapan">{{ old('perlengkapan', $kegiatan->perlengkapan) }}</textarea>
                </div>

                <div class="form-group">
                    <label>Tanggal Kegiatan</label>
                    <input type="date" name="tanggal"
                           value="{{ old('tanggal', \Carbon\Carbon::parse($kegiatan->tanggal)->format('Y-m-d')) }}"
                           required>
                </div>

                <div class="form-group">
                    <label>Waktu Kegiatan</label>
                    <input type="time" name="waktu"
                           value="{{ old('waktu', $kegiatan->waktu) }}" required>
                </div>

                <div class="form-group full">
                    <label>Lokasi Kegiatan</label>
                    <input type="text" name="lokasi"
                           value="{{ old('lokasi', $kegiatan->lokasi) }}" required>
                </div>

                <div class="form-group full">
                    <label>Link Google Maps</label>
                    <input type="url" name="maps"
                           value="{{ old('maps', $kegiatan->maps) }}">
                </div>

                <div class="form-group">
                    <label>Batas Pendaftaran</label>
                    <input type="date" name="batas_pendaftaran"
                           value="{{ old('batas_pendaftaran', \Carbon\Carbon::parse($kegiatan->batas_pendaftaran)->format('Y-m-d')) }}"
                           required>
                </div>

                <div class="form-group full">
    <label>Foto Kegiatan</label>

    @if ($kegiatan->foto)
        <img
            class="current-photo"
            src="{{ str_starts_with($kegiatan->foto, 'images/') ? asset($kegiatan->foto) : asset('storage/' . $kegiatan->foto) }}"
            alt="Foto kegiatan saat ini">
    @endif

    <div class="upload-box">

        <div class="upload-icon">📷</div>

        <div class="upload-info">
            <strong id="fileName">Pilih foto kegiatan baru</strong>
            <small>JPG atau PNG · Maksimal 5 MB</small>
        </div>

        <label for="foto" class="upload-button">
            Pilih Foto
        </label>

        <input
            type="file"
            id="foto"
            name="foto"
            accept="image/jpeg,image/png"
            onchange="updateFileName(this)">
    </div>

    <small style="display:block; margin-top:10px; color:#7892bd;">
        Foto lama tetap digunakan jika kamu tidak memilih foto baru.
    </small>
</div>
                    

            </div>

            <div class="form-actions">
                <a href="{{ route('kegiatan-saya') }}" class="button cancel-button">
                    Batal
                </a>

                <button type="submit" class="button save-button">
                    Simpan Perubahan
                </button>
            </div>

        </form>
    </div>

</main>
<script>
function updateFileName(input) {
    const fileName = document.getElementById('fileName');

    if (input.files.length > 0) {
        fileName.textContent = input.files[0].name;
    } else {
        fileName.textContent = 'Pilih foto kegiatan baru';
    }
}
</script>
</body>
</html>