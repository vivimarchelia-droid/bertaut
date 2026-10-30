<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Aksi | Bertaut</title>
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
            color: #073b91;
        }

        a {
            text-decoration: none;
        }

        button,
        input {
            font-family: inherit;
        }

        .app-container {
            display: flex;
            min-height: 100vh;
        }

        /* MAIN CONTENT */
        .main-content {
            width: calc(100% - 280px);
            margin-left: 280px;
            padding: 25px 28px;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 22px;
        }

        .search-box {
            flex: 1;
            max-width: 700px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px 20px;
            border-radius: 22px;
            background: #dceaff;
            color: #6685ba;
        }

        .search-box span {
            font-size: 22px;
        }

        .search-box input {
            width: 100%;
            border: none;
            outline: none;
            background: transparent;
            color: #073b91;
            font-size: 14px;
        }

        .profile-area {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .notification {
            font-size: 25px;
            position: relative;
        }

        .notification::after {
            content: "";
            width: 9px;
            height: 9px;
            background: #ff719d;
            border: 2px solid white;
            border-radius: 50%;
            position: absolute;
            top: 0;
            right: -2px;
        }

        .profile-avatar {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: #ffc3dd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }

        .profile-text strong {
            display: block;
            color: #073b91;
            font-size: 14px;
        }

        .profile-text small {
            color: #7190bd;
            font-size: 12px;
        }

        /* HERO */
        .hero {
            min-height: 245px;
            padding: 32px 42px;
            border-radius: 30px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(110deg, #c8efff, #eaf9ff);
            margin-bottom: 24px;
        }

        .hero::before,
        .hero::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
        }

        .hero::before {
            width: 180px;
            height: 180px;
            right: 250px;
            top: -100px;
        }

        .hero::after {
            width: 120px;
            height: 120px;
            right: 40px;
            bottom: -65px;
        }

        .hero-content {
            max-width: 540px;
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-family: 'Baloo 2', cursive;
            font-size: clamp(40px, 5vw, 66px);
            line-height: 0.9;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .hero-title .blue {
            color: #08459d;
        }

        .hero-title .pink {
            color: #f65d9d;
        }

        .hero-description {
            max-width: 480px;
            font-size: 15px;
            line-height: 1.7;
            color: #1855a2;
        }

        .hero-stickers {
            position: absolute;
            right: 40px;
            top: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 65px;
            z-index: 2;
        }

        .speech-bubble {
            position: absolute;
            right: 42px;
            bottom: 22px;
            padding: 13px 18px;
            border-radius: 20px;
            background: #fff0a7;
            color: #073b91;
            font-family: 'Baloo 2', cursive;
            font-size: 18px;
            font-weight: 700;
            transform: rotate(4deg);
            z-index: 3;
        }

        /* CHAT AREA */
        .section-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 16px;
        }

        .section-heading h2 {
            font-family: 'Baloo 2', cursive;
            font-size: 32px;
            font-weight: 800;
            color: #08459d;
        }

        .room-count {
            padding: 10px 18px;
            border-radius: 25px;
            background: #ffc6df;
            color: #073b91;
            font-weight: 700;
            font-size: 13px;
        }

        .chat-layout {
            display: grid;
            grid-template-columns: 0.9fr 1.35fr;
            gap: 18px;
        }

        .room-panel,
        .chat-panel {
            background: #ffffff;
            border: 2px solid #d5eaff;
            border-radius: 25px;
            overflow: hidden;
            min-width: 0;
        }

        .panel-title {
            padding: 22px 23px 15px;
            font-family: 'Baloo 2', cursive;
            font-size: 25px;
            font-weight: 800;
            color: #08459d;
        }

        .room-list {
            padding: 0 13px 15px;
        }

        .room-card {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 13px;
            margin-bottom: 10px;
            border: 2px solid transparent;
            border-radius: 19px;
            background: #f3f9ff;
            cursor: pointer;
            text-align: left;
            transition: 0.25s ease;
        }

        .room-card:hover {
            border-color: #9acbff;
            transform: translateY(-2px);
        }

        .room-card.active {
            background: #e6f3ff;
            border-color: #168cff;
        }

        .room-image {
            width: 105px;
            height: 105px;
            flex-shrink: 0;
            border-radius: 16px;
            object-fit: cover;
        }

        .room-info {
            min-width: 0;
            flex: 1;
        }

        .room-info h3 {
            color: #08459d;
            font-size: 15px;
            line-height: 1.3;
            margin-bottom: 7px;
        }

        .room-info p {
            color: #6382b4;
            font-size: 12px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 10px;
        }

        .room-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
        }

        .avatars {
            display: flex;
        }

        .mini-avatar {
            width: 27px;
            height: 27px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: -7px;
            border: 2px solid white;
            border-radius: 50%;
            background: #ffc5df;
            font-size: 15px;
        }

        .member-count {
            color: #6382b4;
            font-size: 11px;
            margin-left: 12px;
        }

        .room-arrow {
            width: 39px;
            height: 39px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #d9efff;
            color: #08459d;
            font-size: 25px;
            flex-shrink: 0;
        }

        /* CHAT PANEL */
        .chat-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 17px 20px;
            background: #f0f8ff;
            border-bottom: 2px solid #e0efff;
        }

        .chat-header-info {
            display: flex;
            align-items: center;
            gap: 13px;
            min-width: 0;
        }

        .chat-header-image {
            width: 62px;
            height: 62px;
            object-fit: cover;
            border-radius: 17px;
        }

        .chat-header h3 {
            color: #08459d;
            font-size: 17px;
            margin-bottom: 6px;
        }

        .chat-header p {
            color: #6a88b8;
            font-size: 12px;
        }

        .chat-actions {
            display: flex;
            gap: 8px;
        }

        .chat-action {
            width: 39px;
            height: 39px;
            border: none;
            border-radius: 50%;
            background: #dcefff;
            color: #08459d;
            cursor: pointer;
            font-size: 20px;
        }

        .messages {
            height: 380px;
            padding: 25px 20px;
            overflow-y: auto;
            background: #ffffff;
        }

        .message-row {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            align-items: flex-end;
        }

        .message-row.right {
            justify-content: flex-end;
        }

        .message-avatar {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border-radius: 50%;
            background: #ffc7df;
            font-size: 23px;
        }

        .message-content {
            max-width: 78%;
        }

        .message-name {
            font-size: 12px;
            font-weight: 700;
            color: #08459d;
            margin-bottom: 5px;
        }

        .message-bubble {
            padding: 13px 17px;
            border-radius: 18px 18px 18px 4px;
            background: #e8f4ff;
            color: #174c9c;
            font-size: 13px;
            line-height: 1.6;
        }

        .message-row.right .message-bubble {
            border-radius: 18px 18px 4px 18px;
            background: #d9f6e8;
        }

        .message-time {
            margin-top: 5px;
            color: #91a8c9;
            font-size: 10px;
        }

        .message-row.right .message-time {
            text-align: right;
        }

        .chat-input-area {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px;
            background: #f0f8ff;
            border-top: 2px solid #e0efff;
        }

        .plus-button {
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 50%;
            background: #ffc6df;
            color: #08459d;
            font-size: 27px;
            cursor: pointer;
        }

        .chat-input {
            flex: 1;
            min-width: 0;
            padding: 14px 18px;
            border: none;
            outline: none;
            border-radius: 25px;
            background: #dceeff;
            color: #08459d;
        }

        .send-button {
            width: 48px;
            height: 48px;
            border: none;
            border-radius: 50%;
            background: #08459d;
            color: white;
            font-size: 21px;
            cursor: pointer;
        }

        /* FOOTER CARD */
        .bottom-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-top: 22px;
            padding: 24px 30px;
            border-radius: 25px;
            background: linear-gradient(100deg, #ffc6e0, #e5d5ff);
            overflow: hidden;
        }

        .bottom-card h3 {
            font-family: 'Baloo 2', cursive;
            font-size: 27px;
            line-height: 1.1;
            color: #08459d;
        }

        .bottom-card p {
            margin-top: 8px;
            color: #315d9e;
            font-size: 13px;
        }

        .bottom-illustration {
            font-size: 65px;
            white-space: nowrap;
        }

        /* RESPONSIVE */
        @media (max-width: 1100px) {

            .main-content {
                width: calc(100% - 230px);
                margin-left: 230px;
                padding: 20px;
            }

            .brand-name {
                font-size: 23px;
            }

            .hero-stickers {
                right: 20px;
                font-size: 48px;
            }

            .chat-layout {
                grid-template-columns: 1fr;
            }

            .room-list {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .room-card {
                margin-bottom: 0;
            }
        }

        @media (max-width: 760px) {
            .app-container {
                display: block;
            }
           

            .main-content {
                width: 100%;
                margin-left: 0;
                padding: 16px;
            }

            .topbar {
                align-items: stretch;
                flex-direction: column;
            }

            .search-box {
                max-width: none;
            }

            .profile-area {
                justify-content: flex-end;
            }

            .hero {
                padding: 28px 22px;
            }

            .hero-title {
                font-size: 43px;
            }

            .hero-description {
                max-width: 100%;
                font-size: 13px;
            }

            .hero-stickers,
            .speech-bubble {
                display: none;
            }

            .section-heading h2 {
                font-size: 26px;
            }

            .room-list {
                display: block;
            }

            .room-card {
                margin-bottom: 10px;
            }

            .bottom-card {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        @media (max-width: 450px) {
            .menu-list {
                grid-template-columns: 1fr;
            }

            .room-image {
                width: 85px;
                height: 85px;
            }

            .chat-header h3 {
                font-size: 14px;
            }

            .messages {
                height: 350px;
            }

            .bottom-illustration {
                font-size: 45px;
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

            <div class="search-box">
                <span>⌕</span>

                <input
                    type="text"
                    placeholder="Cari kegiatan, topik, atau pesan..."
                >
            </div>

            <div class="profile-area">
                <div class="notification">♧</div>

                <div class="profile-avatar">👩🏻</div>

                <div class="profile-text">
                    <strong>Hai, Salsabila!</strong>
                    <small>Volunteer</small>
                </div>

                <span>⌄</span>
            </div>

        </div>


        <!-- HERO -->
        <section class="hero">

            <div class="hero-content">

                <h1 class="hero-title">
                    <span class="blue">Ruang</span>
                    <span class="pink">Aksi</span>
                </h1>

                <p class="hero-description">
                    Tempat kita berkabar, berdiskusi, dan berkoordinasi
                    untuk setiap langkah baik yang sudah kamu ikuti.
                </p>

            </div>

            <div class="hero-stickers">
                👩🏻‍🤝‍👨🏽 💬 🌱
            </div>

            <div class="speech-bubble">
                Diskusi bareng, yuk! 💙
            </div>

        </section>


        <!-- JUDUL -->
        <div class="section-heading">
            <h2>Room Chat Saya ✨</h2>
            <div class="room-count">💬 3 Room</div>
        </div>


        <!-- CHAT AREA -->
        <section class="chat-layout">

            <!-- DAFTAR ROOM -->
<div class="room-panel">

    <div class="panel-title">
        Pilih Kegiatan
    </div>

    <div class="room-list">

        @forelse($kegiatans as $item)

    <a
        href="{{ route('ruang-aksi.detail', $item->id) }}"
        class="room-card {{ isset($kegiatan) && $kegiatan->id == $item->id ? 'active' : '' }}"
        style="text-decoration:none; color:inherit;"
    >

        @if($item->foto)

            <img
                class="room-image"
                src="{{ asset('storage/' . $item->foto) }}"
                alt="{{ $item->judul }}"
            >

        @else

            <div
                class="room-image"
                style="display:flex;align-items:center;justify-content:center;background:#dceeff;font-size:40px;"
            >
                🌱
            </div>

        @endif

        <div class="room-info">

            <h3>{{ $item->judul }}</h3>

            <p>📍 {{ $item->lokasi }}</p>

            <div class="room-bottom">

                <div class="avatars">
                    <span class="mini-avatar">👩🏻</span>
                    <span class="mini-avatar">👨🏻</span>
                    <span class="mini-avatar">👩🏽</span>
                </div>

                <span class="member-count">Anggota</span>

            </div>

        </div>

        <span class="room-arrow">›</span>

    </a>

@empty

    <div style="padding:25px;text-align:center;color:#7190bd;">
        <div style="font-size:40px;margin-bottom:10px;">💬</div>

        <strong>Belum ada room aksi</strong>

        <p style="font-size:12px;margin-top:5px;">
            Ikuti kegiatan terlebih dahulu untuk masuk ke Ruang Aksi.
        </p>
    </div>

@endforelse

    </div>

</div>

<!-- ROOM CHAT -->
<div class="chat-panel">

    <div class="chat-header">

        <div class="chat-header-info">

            @if(isset($kegiatan) && $kegiatan->foto)

                <img
                    id="chatImage"
                    class="chat-header-image"
                    src="{{ asset('storage/' . $kegiatan->foto) }}"
                    alt="{{ $kegiatan->judul }}"
                >

            @else

                <div
                    id="chatImage"
                    class="chat-header-image"
                    style="display:flex;align-items:center;justify-content:center;background:#dceeff;font-size:30px;"
                >
                    🌱
                </div>

            @endif

            <div>

                <h3 id="chatTitle">

                    @if(isset($kegiatan))
                        {{ $kegiatan->judul }}
                    @else
                        Pilih Kegiatan
                    @endif

                </h3>

                <p id="chatDetails">

                    @if(isset($kegiatan))

                        📍 {{ $kegiatan->lokasi }}
                        &nbsp; | &nbsp;
                        📅 {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('l, d F Y') }}

                    @else

                        Pilih kegiatan untuk membuka room chat.

                    @endif

                </p>

            </div>

        </div>

        <div class="chat-actions">

            <button class="chat-action" type="button">
                ⌕
            </button>

            <button class="chat-action" type="button">
                ⋮
            </button>

        </div>

    </div>


<!-- PESAN -->
<div class="messages" id="messages">

    @if(isset($kegiatan))
        @forelse($pesans as $pesan)
            <div class="message-row {{ $pesan->user_id == auth()->id() ? 'right' : '' }}">

                @if($pesan->user_id != auth()->id())
                    <div class="message-avatar">😊</div>
                @endif

                <div class="message-content">
                    <div class="message-name">
                        {{ $pesan->user->name }}
                    </div>

                    <div class="message-bubble">
                        {{ $pesan->pesan }}
                    </div>

                    <div class="message-time">
                        {{ $pesan->created_at->format('H:i') }}
                    </div>
                </div>

                @if($pesan->user_id == auth()->id())
                    <div class="message-avatar">😊</div>
                @endif

            </div>
        @empty
            <div style="text-align:center; color:#7190bd; padding:30px;">
                <div style="font-size:50px;">💬</div>
                <strong>Belum ada pesan.</strong>
                <p>Yuk mulai berdiskusi dengan anggota kegiatan!</p>
            </div>
        @endforelse
    @else
        <div style="text-align:center; color:#7190bd; padding:30px;">
            Pilih kegiatan untuk mulai berdiskusi 💬
        </div>
    @endif

</div>

    <!-- INPUT CHAT -->
@if(isset($kegiatan))
    <form
        class="chat-input-area"
        id="chatForm"
        action="{{ route('ruang-aksi.pesan.store', $kegiatan->id) }}"
        method="POST"
    >
        @csrf

        <button
            class="plus-button"
            type="button"
        >
            +
        </button>

        <input
            class="chat-input"
            id="chatInput"
            name="pesan"
            type="text"
            placeholder="Ketik pesan..."
            autocomplete="off"
            required
        >

        <button
            class="send-button"
            type="submit"
        >
            ➤
        </button>
    </form>
@endif

</div>
        </section>



        <!-- FOOTER CARD -->
        <section class="bottom-card">

            <div>
                <h3>
                    Setiap obrolan bisa<br>
                    menjadi langkah perubahan 💗
                </h3>

                <p>
                    Bersama-sama, kita ciptakan dunia yang lebih baik.
                </p>
            </div>

            <div class="bottom-illustration">
                🌱 💛 🌈
            </div>

            

        </section>

    </main>

</div>


<script>
    const messages = document.getElementById('messages');
    const chatForm = document.getElementById('chatForm');
    const chatInput = document.getElementById('chatInput');

    if (messages) {
        messages.scrollTop = messages.scrollHeight;
    }

    if (chatForm) {
        chatForm.addEventListener('submit', async function (event) {
            event.preventDefault();

            const pesan = chatInput.value.trim();

            if (!pesan) return;

            const tombolKirim = chatForm.querySelector('.send-button');
            tombolKirim.disabled = true;

            try {
                const response = await fetch(chatForm.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': chatForm.querySelector('[name="_token"]').value,
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ pesan: pesan })
                });

                const data = await response.json();

                if (!response.ok) {
                    throw new Error(data.message || 'Pesan gagal dikirim.');
                }

                const newMessage = document.createElement('div');
                newMessage.className = 'message-row right';

                const content = document.createElement('div');
                content.className = 'message-content';

                const name = document.createElement('div');
                name.className = 'message-name';
                name.textContent = 'Kamu';

                const bubble = document.createElement('div');
                bubble.className = 'message-bubble';
                bubble.textContent = pesan;

                const time = document.createElement('div');
                time.className = 'message-time';
                time.textContent = data.waktu;

                const avatar = document.createElement('div');
                avatar.className = 'message-avatar';
                avatar.textContent = '😊';

                content.append(name, bubble, time);
                newMessage.append(content, avatar);
                messages.appendChild(newMessage);

                chatInput.value = '';
                messages.scrollTop = messages.scrollHeight;

            } catch (error) {
                alert(error.message);
            } finally {
                tombolKirim.disabled = false;
            }
        });
    }
</script>

</body>
</html>