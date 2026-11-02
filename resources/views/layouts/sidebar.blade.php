<style>
    /* =========================================================
       SIDEBAR BERTAUT
       HTML + CSS DALAM SATU FILE
       ========================================================= */

    * {
        box-sizing: border-box;
    }

    .sidebar-bertaut {
        width: 195px;
        min-width: 195px;
        max-width: 195px;
        height: calc(100vh - 5px);

        position: fixed;
        top: 5px;
        left: 0;
        z-index: 1000;

        background: linear-gradient(
            180deg,
            #073b91 0%,
            #063486 100%
        );

        color: #ffffff;

        padding: 13px 11px 8px;

        display: flex;
        flex-direction: column;

        overflow: hidden;

        font-family: "Poppins", Arial, sans-serif;
    }


    /* =========================================================
       LOGO / BRAND
       ========================================================= */

    .bertaut-brand {
        width: 100%;

        display: flex;
        align-items: center;

        padding: 2px 4px 10px;

        flex-shrink: 0;
    }

    .bertaut-logo {
        width: 31px;
        height: 31px;

        position: relative;

        flex-shrink: 0;

        margin-right: 7px;
    }

    /* bentuk logo biru muda */
    .bertaut-logo::before {
        content: "";

        position: absolute;

        width: 17px;
        height: 25px;

        left: 2px;
        top: 3px;

        background: #49c9f5;

        border-radius: 12px 12px 12px 3px;

        transform: rotate(-35deg);
    }

    /* bentuk logo kuning */
    .bertaut-logo::after {
        content: "";

        position: absolute;

        width: 13px;
        height: 18px;

        left: 16px;
        top: 1px;

        background: #ffd329;

        border-radius: 50%;

        transform: rotate(25deg);
    }

    .bertaut-brand-text {
        min-width: 0;
        line-height: 1;
    }

    .bertaut-brand-text h2 {
        margin: 0;

        font-size: 20px;
        line-height: 22px;

        font-weight: 700;

        color: #ffffff;

        letter-spacing: -0.5px;
    }

    .bertaut-brand-text p {
        margin: 2px 0 0;

        font-size: 6px;
        line-height: 8px;

        color: #ffffff;

        white-space: nowrap;
    }


    /* =========================================================
       NAVIGATION
       ========================================================= */

    .bertaut-navigation {
        width: 100%;

        display: flex;
        flex-direction: column;

        gap: 3px;

        margin-top: 3px;

        flex-shrink: 0;
    }


    /* =========================================================
       MENU
       ========================================================= */

    .bertaut-menu {
    width: 100%;
    height: 40px;

    display: flex;
    align-items: center;

    position: relative;

    padding: 0 9px;

    border-radius: 7px;

    color: #ffffff;

    text-decoration: none;

    font-size: 12px;
    font-weight: 500;

    transition:
        background 0.2s ease,
        color 0.2s ease;
}

.bertaut-menu:hover {
    background: rgba(255, 255, 255, 0.10);
    color: #ffffff;
}

.bertaut-menu.active {
    background: #ffd54f;

    color: #063b91;

    font-weight: 600;

    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
}


    /* =========================================================
       ICON
       ========================================================= */

 .bertaut-menu-icon {
    width: 21px;
    height: 21px;

    flex-shrink: 0;

    margin-right: 10px;

    display: flex;
    align-items: center;
    justify-content: center;
}

.bertaut-menu-icon svg {
    width: 20px;
    height: 20px;

    display: block;

    stroke: currentColor;

    fill: none;

    stroke-width: 1.8;

    stroke-linecap: round;
    stroke-linejoin: round;
}


    /* =========================================================
       TEXT MENU
       ========================================================= */

    .bertaut-menu-text {
        white-space: nowrap;

        overflow: hidden;

        text-overflow: ellipsis;

        line-height: 1;
    }


    /* =========================================================
       BADGE
       ========================================================= */

    .bertaut-badge {
        margin-left: auto;

        min-width: 17px;
        height: 17px;

        padding: 0 4px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #ff557c;

        color: #ffffff;

        font-size: 8px;
        font-weight: 600;

        line-height: 1;
    }


    /* =========================================================
       DIVIDER
       ========================================================= */

    .bertaut-divider {
        width: calc(100% - 10px);

        height: 1px;

        margin: 6px 5px 5px;

        background: rgba(255, 255, 255, 0.22);

        flex-shrink: 0;
    }


    /* =========================================================
       LOGOUT
       ========================================================= */

    /* =========================================================
   LOGOUT
   ========================================================= */

.bertaut-logout {
    width: 100%;
    height: 40px;

    display: flex;
    align-items: center;

    padding: 0 9px;

    color: #ffffff;

    text-decoration: none;

    border-radius: 7px;

    font-size: 12px;
    font-weight: 500;

    line-height: 1.2;

    flex-shrink: 0;

    transition: background 0.2s ease;
}

.bertaut-logout:hover {
    background: rgba(255, 255, 255, 0.10);
}

.bertaut-logout .bertaut-menu-icon {
    margin-right: 10px;
}



/* =========================================================
   BAGIAN BAWAH SIDEBAR
   ========================================================= */

/* =========================================================
   BAGIAN BAWAH SIDEBAR
   ========================================================= */

.bertaut-sidebar-bottom {
    width: 100%;

    margin-top: auto;

    padding: 0;

    position: relative;

    flex-shrink: 0;

    overflow: hidden;
}


/* =========================================================
   ILUSTRASI SIDEBAR
   ========================================================= */

.bertaut-sidebar-illustration {
    width: 100%;

    margin: 0;

    padding: 0;

    display: block;

    position: relative;

    overflow: visible;
}

.bertaut-sidebar-illustration img {
    width: 100%;

    height: auto;

    display: block;

    margin: 0;

    padding: 0;
}

/* =========================================================
   FIX ILUSTRASI SIDEBAR - FULL & TIDAK TERPOTONG
========================================================= */

.sidebar-bertaut .bertaut-sidebar-bottom {
    width: 100% !important;
    flex: 1 1 auto !important;
    min-height: 0 !important;

    margin: 0 !important;
    padding: 0 !important;

    display: flex !important;
    align-items: flex-end !important;
    justify-content: center !important;

    overflow: hidden !important;
}

.sidebar-bertaut .bertaut-sidebar-illustration {
    width: 100% !important;
    height: auto !important;

    margin: 0 !important;
    padding: 0 !important;

    display: flex !important;
    align-items: flex-end !important;
    justify-content: center !important;

    position: relative !important;
    left: 0 !important;
    bottom: 0 !important;

    overflow: visible !important;
}

.sidebar-bertaut .bertaut-sidebar-illustration img {
    width: 100% !important;
    height: auto !important;

    max-width: 100% !important;
    max-height: 185px !important;

    margin: 0 !important;
    padding: 0 !important;

    display: block !important;

    object-fit: contain !important;
    object-position: bottom center !important;
}
    


    /* =========================================================
       RESPONSIVE LAPTOP KECIL
       ========================================================= */

    @media (min-width: 1001px) and (max-height: 850px) {

        .sidebar-bertaut {
            width: 195px;
            min-width: 195px;
            max-width: 195px;

            height: calc(100vh - 5px);

            padding: 11px 10px 6px;
        }

        .bertaut-brand {
            padding-bottom: 7px;
        }

        .bertaut-brand-text h2 {
            font-size: 19px;
        }

        .bertaut-navigation {
            gap: 2px;
        }

        .bertaut-menu,
        .bertaut-logout {
            height: 40px;
        }

        

        .bertaut-sidebar-bottom p {
            font-size: 14px;
            line-height: 15px;
        }
    }


    /* =========================================================
       TABLET
       ========================================================= */

    @media (max-width: 1000px) {

        .sidebar-bertaut {
            position: relative;

            top: 0;
            left: 0;

            width: 100%;
            min-width: 100%;
            max-width: 100%;

            height: auto;

            padding: 15px;

            overflow: visible;
        }

        .bertaut-navigation {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 6px;
        }

        .bertaut-menu,
        .bertaut-logout {
            height: 45px;
        }

        .bertaut-sidebar-bottom {
            display: none;
        }

        .bertaut-divider {
            display: none;
        }
    }


    /* =========================================================
       HP
       ========================================================= */

    @media (max-width: 600px) {

        .bertaut-navigation {
            grid-template-columns: repeat(2, 1fr);
        }

        .bertaut-menu,
        .bertaut-logout {
            height: 43px;
        }
    }

/* =========================================================
   MEMBERI RUANG UNTUK SIDEBAR
   ========================================================= */

.dashboard-layout {
    width: 100%;
    min-height: 100vh;
}

.dashboard-layout > .main-content {
    margin-left: 195px;

    width: calc(100% - 195px);

    min-height: 100vh;
}

/* =========================================================
   FONT SIDEBAR BERTAUT
   Dibuat lebih tipis dan elegan
========================================================= */

.sidebar-bertaut .bertaut-menu,
.sidebar-bertaut .bertaut-logout {
    font-family: "Poppins", Arial, sans-serif !important;
    font-weight: 400 !important;
}

.sidebar-bertaut .bertaut-menu-text {
    font-family: "Poppins", Arial, sans-serif !important;
    font-weight: 400 !important;
}

.sidebar-bertaut .bertaut-menu.active {
    font-weight: 500 !important;
}

.sidebar-bertaut .bertaut-menu.active .bertaut-menu-text {
    font-weight: 500 !important;
}

.sidebar-bertaut .bertaut-logout .bertaut-menu-text {
    font-weight: 400 !important;
}


/* =========================================================
   BRAND BERTAUT
========================================================= */

.sidebar-bertaut .bertaut-brand-text h2 {
    font-family: "Poppins", Arial, sans-serif !important;
    font-size: 19px !important;
    font-weight: 700 !important;
    letter-spacing: -0.4px !important;
}

.sidebar-bertaut .bertaut-brand-text p {
    font-family: "Poppins", Arial, sans-serif !important;
    font-size: 8px !important;
    font-weight: 400 !important;
    letter-spacing: 0 !important;
}

.bertaut-logout-form {
    width: 100%;
    margin: 0;
    padding: 0;
}

.bertaut-logout-form .bertaut-logout {
    width: 100%;
    border: none;
    cursor: pointer;
    font-family: inherit;
}


/* FIX LOGOUT BUTTON */
.bertaut-logout-form {
    width: 100%;
    margin: 0;
    padding: 0;
}

.bertaut-logout-form .bertaut-logout {
    width: 100%;
    height: 40px;
    min-height: 40px;

    display: flex;
    align-items: center;

    padding: 0 9px;
    margin: 0;

    border: none;
    outline: none;

    background: transparent !important;
    color: #fff !important;

    border-radius: 7px;

    font-family: inherit;
    font-size: 12px;
    font-weight: 500;

    cursor: pointer;
    text-align: left;
}

.bertaut-logout-form .bertaut-logout:hover {
    background: rgba(255,255,255,.10) !important;
    color: #fff !important;
}

.bertaut-logout-form .bertaut-menu-icon {
    color: #fff !important;
}

.bertaut-logout-form .bertaut-menu-text {
    color: #fff !important;
}

/* =========================================================
   SMOOTH PAGE TRANSITION
   Membuat perpindahan antar halaman lebih halus
========================================================= */

@view-transition {
    navigation: auto;
}

::view-transition-old(root) {
    animation: page-out 0.18s ease both;
}

::view-transition-new(root) {
    animation: page-in 0.22s ease both;
}

@keyframes page-out {
    from {
        opacity: 1;
    }

    to {
        opacity: 0;
    }
}

@keyframes page-in {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

/* =========================================================
   JARAK CONTENT DARI SIDEBAR
========================================================= */

.app-container {
    width: 100%;
    min-height: 100vh;
}

.app-container > .main-content {
    margin-left: 195px;
    width: calc(100% - 195px);
    min-height: 100vh;
}

</style>


<!-- =========================================================
     HTML SIDEBAR BERTAUT
     ========================================================= -->

<aside class="sidebar-bertaut">

    <!-- LOGO -->
    <div class="bertaut-brand">

        <div class="bertaut-logo"></div>

        <div class="bertaut-brand-text">
            <h2>Bertaut.</h2>
            <p>Small Actions, Brighter World</p>
        </div>

    </div>


    <!-- NAVIGATION -->
    <nav class="bertaut-navigation">


        <!-- DASHBOARD -->
        <a
            href="{{ route('dashboard') }}"
            class="bertaut-menu {{ request()->routeIs('dashboard') ? 'active' : '' }}"
        >

            <span class="bertaut-menu-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M3 10.5L12 3l9 7.5"></path>
                    <path d="M5 9.5V21h14V9.5"></path>
                    <path d="M9 21v-6h6v6"></path>
                </svg>
            </span>

            <span class="bertaut-menu-text">
                Dashboard
            </span>

        </a>


        <!-- JELAJAHI KEGIATAN -->
        <a
            href="{{ route('kegiatan') }}"
            class="bertaut-menu {{ request()->routeIs('kegiatan') ? 'active' : '' }}"
        >

            <span class="bertaut-menu-icon">
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="8"></circle>
                    <path d="M14.5 9.5L10 14l-4.5 1.5L10 11l4.5-1.5z"></path>
                </svg>
            </span>

            <span class="bertaut-menu-text">
                Jelajahi Kegiatan
            </span>

        </a>


        <!-- KEGIATAN SAYA -->
        <a
            href="{{ route('kegiatan-saya') }}"
            class="bertaut-menu {{ request()->routeIs('kegiatan-saya') ? 'active' : '' }}"
        >

            <span class="bertaut-menu-icon">
                <svg viewBox="0 0 24 24">
                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                    <path d="M8 3v4"></path>
                    <path d="M16 3v4"></path>
                    <path d="M4 10h16"></path>
                    <path d="M9 15l2 2 4-4"></path>
                </svg>
            </span>

            <span class="bertaut-menu-text">
                Kegiatan Saya
            </span>

        </a>

        <a href="{{ route('buat-kegiatan') }}" class="bertaut-menu {{ request()->routeIs('buat-kegiatan') ? 'active' : '' }}">
    <span class="bertaut-menu-icon">
        <svg viewBox="0 0 24 24">
            <path d="M12 5v14M5 12h14"></path>
        </svg>
    </span>

    <span class="bertaut-menu-text">Buat Kegiatan</span>
</a>

        <!-- RUANG AKSI -->
<a
    href="{{ route('ruang-aksi') }}"
    class="bertaut-menu {{ request()->routeIs('ruang-aksi*') ? 'active' : '' }}"
>
    <span class="bertaut-menu-icon">
        <svg viewBox="0 0 24 24">
            <path d="M20 11.5a7.5 7.5 0 0 1-7.5 7.5H8l-4 3v-5.2A7.5 7.5 0 1 1 20 11.5z"></path>
            <path d="M8 11h.01"></path>
            <path d="M12 11h.01"></path>
            <path d="M16 11h.01"></path>
        </svg>
    </span>

    <span class="bertaut-menu-text">Ruang Aksi</span>

</a>

        <!-- SERTIFIKAT -->
        <a
            href="{{ route('sertifikat') }}"
            class="bertaut-menu {{ request()->routeIs('sertifikat') ? 'active' : '' }}"
        >

            <span class="bertaut-menu-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M12 3l2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3 6.4 20.2l1.1-6.2L3 9.6l6.2-.9L12 3z"></path>
                </svg>
            </span>

            <span class="bertaut-menu-text">
                Sertifikat
            </span>

        </a>


        <!-- PROFIL -->
        <a
            href="{{ route('profil') }}"
            class="bertaut-menu {{ request()->routeIs('profil') ? 'active' : '' }}"
        >

            <span class="bertaut-menu-icon">
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="8" r="4"></circle>
                    <path d="M4 21c0-4.2 3.6-7 8-7s8 2.8 8 7"></path>
                </svg>
            </span>

            <span class="bertaut-menu-text">
                Profil
            </span>

        </a>


    </nav>


    <!-- GARIS -->
    <div class="bertaut-divider"></div>


    <!-- LOGOUT -->
    <form action="{{ route('logout') }}" method="POST" class="bertaut-logout-form">
    @csrf

    <button type="submit" class="bertaut-logout">
        <span class="bertaut-menu-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M10 17l5-5-5-5"></path>
                <path d="M15 12H3"></path>
                <path d="M21 3v18"></path>
            </svg>
        </span>

        <span class="bertaut-menu-text">Logout</span>
    </button>
</form>


    <!-- BAGIAN BAWAH -->
    <div class="bertaut-sidebar-bottom">


        <!--
            ILUSTRASI SIDEBAR

            Simpan gambar ilustrasi kamu di:
            public/images/sidebar-illustration.png
        -->

        <div class="bertaut-sidebar-illustration">

           <div class="bertaut-sidebar-illustration">
    <img
        src="{{ asset('images/kucing.png') }}"
        alt="Bertaut Illustration"
        loading="eager"
        decoding="async"
    >
</div>

        </div>

    </div>

</aside>