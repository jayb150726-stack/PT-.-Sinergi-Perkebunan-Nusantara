<?php
// Pengaturan Data Perusahaan
$companyName     = "PT. Sinar Putra Nusantara (SPN) Sulteng";
$tagline1        = "Tidak Sebatas Yang Terbesar";
$subTagline1     = "Kami Hadir Untuk Tumbuh Bersama";
$tagline2        = "transformasi agribisnis digital";
$subTagline2     = "menuingkatkan mutu menumbuhkan kepercayaan";
$tagline3        = "menanam harapan menuai keberlanjutan";
$subTagline3     = "mewariskan bumi lestari dan sejahtera";

// Menu dengan dropdown (judul => array of [label, url (optional), description (optional), icon (optional class)])
$menu = [
    "Tentang Kami" => [
        ["Sejarah", "#", "Sejarah perusahaan dan perjalanan kami", "bi bi-building"],
        ["Visi & Misi", "#", "Arah dan tujuan jangka panjang", "bi bi-bullseye"],
        ["Tim Manajemen", "#", "Kenali tim kami", "bi bi-people"]
    ],
    "Bisnis Kami" => [
        ["Perkebunan", "#", "Kegiatan budidaya dan produksi", "bi bi-tree"],
        ["Pengolahan", "#", "Fasilitas pengolahan & produk", "bi bi-box-seam"],
        ["Rantai Pasok", "#", "Distribusi & logistik", "bi bi-truck"]
    ],
    "Keberlanjutan" => [
        ["Lingkungan", "#", "Inisiatif lingkungan hidup", "bi bi-leaf"],
        ["Sosial", "#", "Program sosial dan komunitas", "bi bi-people-fill"],
        ["Laporan Keberlanjutan", "#", "Laporan tahunan & KPI", "bi bi-file-earmark-text"]
    ],
    "PPID" => [
        ["Informasi Publik", "#", "Dokumen informasi publik", "bi bi-info-circle"],
        ["Permintaan Informasi", "#", "Prosedur permintaan informasi", "bi bi-envelope"],
        ["Kontak PPID", "#", "Hubungi petugas PPID", "bi bi-telephone"]
    ],
    "Layanan Investor" => [
        ["Laporan Keuangan", "#", "Laporan & presentasi keuangan", "bi bi-graph-up"],
        ["RUPS", "#", "Informasi RUPS dan dokumen", "bi bi-people"],
        ["Hubungi Investor Relations", "#", "Kontak & permintaan", "bi bi-person-lines-fill"]
    ],
    "Media" => [
        ["Berita", "#", "Update dan artikel", "bi bi-newspaper"],
        ["Galeri", "#", "Foto dan video kegiatan", "bi bi-images"],
        ["Publikasi", "#", "Publikasi resmi", "bi bi-journal-text"]
    ]
];

function make_id($title) {
    return 'menu_' . preg_replace('/[^a-z0-9_]+/', '_', strtolower($title));
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title data-i18n-key="company_name"><?php echo htmlspecialchars($companyName, ENT_QUOTES); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root{
            --accent: #35ee82;
            --accent-600: #28c567;
            --glass-bg: rgba(255,255,255,0.12);
            --glass-border: rgba(255,255,255,0.08);
            --text-dark: #0f1720;
            --nav-height: 88px;
            --nav-height-shrink: 64px;
            --transition-fast: 180ms;
        }

        html,body{
            height:100%;
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            margin:0;
            background: #ffffff;
            color: var(--text-dark);
            -webkit-font-smoothing:antialiased;
            -moz-osx-font-smoothing:grayscale;
        }

        /* Header - modern glass */
        .header-wrapper{
            position: fixed;
            inset: 0 0 auto 0;
            top: 16px;
            left: 16px;
            right: 16px;
            z-index: 1100;
            display:flex;
            align-items:center;
            gap:12px;
            padding:10px 18px;
            border-radius:14px;
            background: linear-gradient(180deg, rgba(255,255,255,0.60), rgba(255,255,255,0.35));
            box-shadow: 0 6px 30px rgba(16,24,40,0.08);
            backdrop-filter: blur(8px) saturate(120%);
            border: 1px solid var(--glass-border);
            height: var(--nav-height);
            transition: all 220ms ease;
        }

        /* Shrink state */
        .header-wrapper.shrink{
            height: var(--nav-height-shrink);
            transform: translateY(-6px);
            padding:6px 14px;
            border-radius:10px;
            box-shadow: 0 10px 30px rgba(16,24,40,0.10);
        }

        /* Logo */
        .logo-circle{
            width:200px;
            height:64px;
            min-width:100px;
            border-radius:14px;
            overflow:hidden;
            display:flex;
            align-items:center;
            justify-content:center;
            background: linear-gradient(135deg, var(--accent), var(--accent-600));
            color:white;
            font-weight:800;
            font-size:0.95rem;
            box-shadow: 0 6px 18px rgba(40,167,69,0.16);
            transition: transform var(--transition-fast) ease;
        }
        .header-wrapper.shrink .logo-circle{ transform: scale(.86); }

        .logo-circle img{ width:60%; height:auto; display:block; }

        /* Nav pill (modern) */
        .nav-pill-wrapper{
            display:flex;
            align-items:center;
            gap:8px;
            padding:6px 10px;
            border-radius:999px;
            background: rgba(255,255,255,0.06);
            flex:1;
            justify-content: center;
        }

        .navbar{
            width:100%;
            padding:0;
        }

        .navbar-nav{
            display:flex;
            gap:6px;
            align-items:center;
        }

        .nav-link{
            color:var(--text-dark) !important;
            font-weight:700;
            padding:8px 14px;
            border-radius:10px;
            transition: all 160ms ease;
            font-size:0.95rem;
            letter-spacing: .2px;
        }

        .nav-link:focus, .nav-link:hover{
            background: linear-gradient(90deg, rgba(0,0,0,0.03), rgba(0,0,0,0.02));
            color:var(--text-dark) !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(16,24,40,0.06);
        }

        /* Dropdown modern card */
        .dropdown-menu{
            border-radius:12px;
            border: none;
            padding:10px;
            min-width:260px;
            box-shadow: 0 10px 30px rgba(2,6,23,0.08);
            transform-origin: top center;
            transition: transform 180ms ease, opacity 180ms ease;
            opacity:0;
            transform: translateY(6px) scale(.98);
            visibility:hidden;
        }
        .dropdown.show > .dropdown-menu, /* bootstrap's open state */
        .dropdown:hover > .dropdown-menu { /* allow hover open on desktop via CSS */
            opacity:1;
            transform: translateY(0) scale(1);
            visibility:visible;
        }

        .dropdown-item{
            display:flex;
            gap:10px;
            align-items:flex-start;
            padding:10px 12px;
            border-radius:8px;
            color:var(--text-dark);
        }
        .dropdown-item .bi{
            font-size:1.15rem;
            color:var(--accent-600);
            margin-top:2px;
            min-width:20px;
        }
        .dropdown-item small{
            display:block;
            color: #445060;
            font-size:0.80rem;
            margin-top:2px;
        }
        .dropdown-item:hover{
            background: rgba(0,0,0,0.035);
        }

        /* Search / lang */
        .search-lang-zone{
            display:flex;
            align-items:center;
            gap:10px;
            margin-left:12px;
        }
        .search-btn{
            background:transparent;
            border:1px solid rgba(15,23,32,0.06);
            padding:8px 10px;
            border-radius:10px;
            display:flex;
            gap:8px;
            align-items:center;
            cursor:pointer;
        }
        .search-input{
            width:0;
            opacity:0;
            padding:6px 8px;
            border-radius:8px;
            border:1px solid rgba(15,23,32,0.06);
            transition: all 220ms ease;
            outline:none;
            background:white;
        }
        .search-open .search-input{
            width:200px;
            opacity:1;
        }

        .lang-box{
            display:flex;
            gap:6px;
            background: rgba(255,255,255,0.06);
            padding:6px;
            border-radius:8px;
            border:1px solid rgba(0,0,0,0.03);
        }
        .lang-box button{
            background:transparent;
            border:0;
            padding:6px 8px;
            font-weight:700;
            color:var(--text-dark);
            border-radius:6px;
            cursor:pointer;
        }
        .lang-box button.active{
            background:var(--accent);
            color:white;
        }

        /* Offcanvas for mobile */
        @media (max-width: 991px){
            .nav-pill-wrapper{ padding:4px; }
            .navbar-nav{ gap:0; }
            .nav-link{ padding:10px 12px; }
            .dropdown-menu{ position:static; transform:none; opacity:1; visibility:visible; box-shadow:none; background:transparent; padding:0; }
            .dropdown-item{ padding:10px 12px; border-radius:0; }
            .header-wrapper{ top:10px; left:10px; right:10px; }
        }

        /* Hero / Carousel modern tweaks */
        .hero-carousel{ position:relative; height:100vh; margin-top: calc(var(--nav-height) + 18px); overflow:hidden; }
        .carousel-item{ position:relative; height:100vh; }
        .carousel-item img{ height:100vh; object-fit:cover; width:100%; filter: saturate(1.02) contrast(0.95); display:block; }

        /* soft overlay for better contrast */
        .carousel-item::before{
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(2,6,23,0.35) 10%, rgba(2,6,23,0.45) 45%, rgba(2,6,23,0.55) 100%);
            z-index: 1;
            pointer-events: none;
        }

        .carousel-caption{ left:6%; bottom:18%; text-align:left; transform:none; z-index:2; max-width:48rem; padding:1rem; }
        .hero-title{ font-size: clamp(2rem, 4.5vw, 4.25rem); font-weight:800; color:white; text-shadow: 0 10px 30px rgba(2,6,23,0.55); margin:0; line-height:1.03; }
        .hero-subtitle{ font-size: clamp(1rem, 1.7vw, 1.45rem); color: #e9f7ee; margin-top:12px; text-shadow:0 6px 20px rgba(2,6,23,0.45); }

        /* caption animation */
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(12px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .carousel-caption .hero-title,
        .carousel-caption .hero-subtitle {
            opacity: 0;
            transform: translateY(12px);
            animation: slideUp 560ms cubic-bezier(.2,.9,.2,1) forwards;
        }
        .carousel-item.active .carousel-caption .hero-title { animation-delay: 220ms; }
        .carousel-item.active .carousel-caption .hero-subtitle { animation-delay: 420ms; }

        /* faded transition between slides */
        .carousel.carousel-fade .carousel-item {
            transition-property: opacity;
        }

        /* indicators & control tweaks */
        .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            border-radius: 999px;
            background-color: rgba(255,255,255,0.5);
            transition: transform 180ms ease, background-color 180ms ease;
        }
        .carousel-indicators .active {
            transform: scale(1.25);
            background-color: var(--accent);
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 48px;
            height: 48px;
            background: rgba(0,0,0,0.35);
            border-radius: 999px;
            display:flex;
            align-items:center;
            justify-content:center;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.95;
            transition: background 160ms ease, transform 160ms ease;
        }
        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: rgba(0,0,0,0.5);
            transform: translateY(-50%) scale(1.03);
        }
        .carousel-control-prev .bi,
        .carousel-control-next .bi { font-size: 1.25rem; color: #fff; }

        /* Page content */
        main{ padding:140px 32px 80px; background:#fff; color:var(--text-dark); min-height:100vh; }

        /* ========== TUJUAN KAMI (Goals) Background Style ========== */
        .goals-section{
            position: relative;
            overflow: visible; /* allow decorative shapes to overflow */
            padding: 48px 28px;
            border-radius: 14px;
            /* layered subtle gradients for depth */
            background:
                radial-gradient(800px 300px at 10% 20%, rgba(40,197,103,0.06), transparent 18%),
                linear-gradient(180deg, rgba(255,255,255,0.98) 0%, rgba(250,255,250,0.98) 100%);
            border: 1px solid rgba(40,197,103,0.06);
            box-shadow: 0 10px 30px rgba(40,167,69,0.04);
            margin-bottom: 28px;
        }
        .goals-section .goals-inner{
            max-width: 1180px;
            margin: 0 auto;
            position: relative;
            z-index: 3; /* place above decorative SVGs */
        }
        .goals-section h1{
            color: var(--text-dark);
            margin-bottom: 8px;
        }
        .goals-section p{
            color: #42515a;
            font-size: 1.05rem;
            margin-bottom: 0;
        }

        /* Modern decorative SVG blob placed visually */
        .goals-decor{
            position: absolute;
            right: -6%;
            top: -10%;
            width: 480px;
            height: 480px;
            pointer-events: none;
            filter: blur(18px) saturate(120%);
            opacity: 0.95;
            transform: rotate(12deg);
            z-index: 1;
        }
        .goals-decor .blob-1{ mix-blend-mode: screen; }
        .goals-decor .blob-2{ mix-blend-mode: screen; }

        /* subtle textured overlay */
        .goals-section::after{
            content: "";
            position: absolute;
            inset: 0;
            z-index: 2;
            pointer-events: none;
            background-image:
                radial-gradient(circle at 10% 10%, rgba(255,255,255,0.6), transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(255,255,255,0.35), transparent 25%);
            opacity: 0.95;
            mix-blend-mode: overlay;
        }

        /* New styles for goals section layout */
        .goals-inner.d-flex {
            display: flex;
            gap: 32px;
            align-items: center;
        }
        .goals-media {
            flex: 0 0 420px;
            max-width: 420px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .goals-media .goals-img{
            width: 100%;
            max-width: 420px;
            height: auto;
            object-fit: contain;
            border-radius: 12px;
            box-shadow: 0 14px 40px rgba(2,6,23,0.08);
            background: linear-gradient(180deg, #f8fffb, #f2fff6);
            padding: 12px;
            border: 1px solid rgba(15,23,32,0.04);
            display: block;
        }
        .goals-content { flex: 1 1 auto; }

        /* UPDATED: logo placed under the goals box as full photo with dark gradient overlay */
        .goals-logo-wrap{
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 4;
            /* slight overlap to visually attach to box on larger screens */
            margin-top: -56px;
            padding-bottom: 8px;
        }
        .goals-logo{
            width: 100%;
            max-width: 1180px; /* match goals-inner max-width for a full-width feel */
            height: 360px;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 18px 48px rgba(2,6,23,0.10);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            border: 1px solid rgba(15,23,32,0.04);
        }
        /* dark gradient overlay to slightly darken the photo */
        .goals-logo::after{
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: linear-gradient(180deg, rgba(2,6,23,0.28), rgba(2,6,23,0.08));
            mix-blend-mode: multiply;
            opacity: 1;
        }
        /* hide any img inside (we rely on background-image for full-cover) */
        .goals-logo img{ display: none; }

        /* responsive adjustments */
        @media (max-width: 1200px){
            .goals-media { flex: 0 0 360px; max-width: 360px; }
            .goals-media .goals-img{ max-width: 360px; padding:10px; }
            .goals-logo{ height: 300px; }
        }
        @media (max-width: 991px){
            .goals-media { flex: 0 0 300px; max-width: 300px; }
            .goals-media .goals-img { max-width: 300px; padding:10px; }
            .goals-logo{ height: 240px; margin-top: 12px; }
            .nav-pill-wrapper{ padding:4px; }
            .navbar-nav{ gap:0; }
            .nav-link{ padding:10px 12px; }
            .dropdown-menu{ position:static; transform:none; opacity:1; visibility:visible; box-shadow:none; background:transparent; padding:0; }
            .dropdown-item{ padding:10px 12px; border-radius:0; }
            .header-wrapper{ top:10px; left:10px; right:10px; }
        }
        @media (max-width: 767px){
            .goals-section{ padding: 32px 18px; }
            .goals-decor{ right: -18%; top: -22%; width: 320px; height: 320px; filter: blur(14px) saturate(110%); }
            .goals-section::after{ opacity: 0.9; }
            .goals-inner.d-flex { flex-direction: column; align-items: flex-start; gap: 16px; }
            .goals-media { width: 100%; flex: 0 0 auto; display: block; text-align: left; }
            .goals-media .goals-img{ width: 140px; max-width: 140px; padding:8px; }
            /* Remove overlap on small screens so logo sits below the box cleanly */
            .goals-logo-wrap{ margin-top: 12px; }
            .goals-logo{ height: 160px; border-radius: 10px; }
        }
    </style>
</head>

<body>

    <header class="header-wrapper" id="mainHeader">
        <div class="logo-circle" aria-hidden="true">
            <!-- replace with svg/img file if available -->
            <img src="img/logo.png" alt="Logo">
        </div>

        <div class="nav-pill-wrapper">
            <nav class="navbar navbar-expand-lg px-2">
                <div class="container-fluid p-0">
                    <button class="btn d-lg-none p-2 me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav" aria-controls="mobileNav" aria-label="Buka menu" data-i18n-aria="open_menu">
                        <i class="bi bi-list" style="font-size:1.25rem;"></i>
                    </button>

                    <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <?php foreach ($menu as $title => $items):
                                $id = make_id($title);
                                $slug = preg_replace('/[^a-z0-9]+/','_',strtolower($title));
                            ?>
                                <li class="nav-item dropdown px-1">
                                    <a class="nav-link dropdown-toggle" href="#" id="<?php echo $id; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-i18n-key="<?php echo 'menu_'.$slug.'_title'; ?>">
                                        <?php echo htmlspecialchars($title, ENT_QUOTES); ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="<?php echo $id; ?>">
                                        <?php foreach ($items as $idx => $it):
                                            $label = htmlspecialchars($it[0], ENT_QUOTES);
                                            $url = isset($it[1]) ? htmlspecialchars($it[1], ENT_QUOTES) : '#';
                                            $desc = isset($it[2]) ? htmlspecialchars($it[2], ENT_QUOTES) : '';
                                            $icon = isset($it[3]) ? htmlspecialchars($it[3], ENT_QUOTES) : 'bi bi-circle';
                                            $item_label_key = "menu_{$slug}_item_{$idx}_label";
                                            $item_desc_key  = "menu_{$slug}_item_{$idx}_desc";
                                        ?>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo $url; ?>">
                                                    <i class="<?php echo $icon; ?>" aria-hidden="true"></i>
                                                    <div>
                                                        <div data-i18n-key="<?php echo $item_label_key; ?>" style="font-weight:700;"><?php echo $label; ?></div>
                                                        <?php if ($desc): ?><small data-i18n-key="<?php echo $item_desc_key; ?>"><?php echo $desc; ?></small><?php endif; ?>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="d-flex align-items-center search-lang-zone">
                        <div class="search-btn" id="searchBtn" aria-expanded="false" title="Cari">
                            <i class="bi bi-search"></i>
                            <input class="search-input" id="searchInput" placeholder="Cari..." aria-label="Cari" data-i18n-key="search_placeholder">
                        </div>

                        <div class="lang-box" role="tablist" aria-label="Bahasa">
                            <button class="active" id="lang-id" aria-pressed="true" data-i18n-key="lang_id">ID</button>
                            <button id="lang-en" aria-pressed="false" data-i18n-key="lang_en">EN</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Offcanvas Mobile Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="mobileNavLabel" data-i18n-key="company_name"><?php echo htmlspecialchars($companyName, ENT_QUOTES); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Tutup" data-i18n-aria="close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="list-group">
                <?php foreach ($menu as $title => $items):
                    $id = make_id($title);
                    $slug = preg_replace('/[^a-z0-9]+/','_',strtolower($title));
                ?>
                    <div class="mb-2">
                        <button class="btn btn-outline-secondary w-100 text-start d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>_mob" aria-expanded="false" data-i18n-key="<?php echo 'menu_'.$slug.'_title'; ?>">
                            <span><?php echo htmlspecialchars($title, ENT_QUOTES); ?></span>
                            <i class="bi bi-chevron-down"></i>
                        </button>
                        <div class="collapse mt-2" id="<?php echo $id; ?>_mob">
                            <div class="list-group">
                                <?php foreach ($items as $idx => $it):
                                    $label = htmlspecialchars($it[0], ENT_QUOTES);
                                    $url = isset($it[1]) ? htmlspecialchars($it[1], ENT_QUOTES) : '#';
                                    $item_label_key = "menu_{$slug}_item_{$idx}_label";
                                ?>
                                    <a href="<?php echo $url; ?>" class="list-group-item list-group-item-action" data-i18n-key="<?php echo $item_label_key; ?>"><?php echo $label; ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- HERO: Carousel 3 Foto (modern + crossfade, auto 5s, pause disabled) -->
    <section class="hero-carousel" aria-label="Slaid utama">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="false">
            <div class="carousel-indicators" style="z-index:3;">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bg1.JPG" class="d-block w-100" alt="Hero 1" loading="eager">
                    <div class="carousel-caption d-md-block">
                        <h1 class="hero-title" data-i18n-key="hero_1_title"><?php echo $tagline1; ?></h1>
                        <p class="hero-subtitle" data-i18n-key="hero_1_sub"><?php echo $subTagline1; ?></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/bg2.JPG" class="d-block w-100" alt="Hero 2" loading="lazy">
                    <div class="carousel-caption d-md-block">
                        <h1 class="hero-title" data-i18n-key="hero_2_title"><?php echo $tagline2; ?></h1>
                        <p class="hero-subtitle" data-i18n-key="hero_2_sub"><?php echo $subTagline2; ?></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/bg3.JPG" class="d-block w-100" alt="Hero 3" loading="lazy">
                    <div class="carousel-caption d-md-block">
                        <h1 class="hero-title" data-i18n-key="hero_3_title"><?php echo $tagline3; ?></h1>
                        <p class="hero-subtitle" data-i18n-key="hero_3_sub"><?php echo $subTagline3; ?></p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Sebelumnya" data-i18n-aria="prev">
                <span class="bi bi-chevron-left" aria-hidden="true"></span>
                <span class="visually-hidden" data-i18n-key="control_prev">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Berikutnya" data-i18n-aria="next">
                <span class="bi bi-chevron-right" aria-hidden="true"></span>
                <span class="visually-hidden" data-i18n-key="control_next">Next</span>
            </button>
        </div>
    </section>

    <main>
        <section class="goals-section" aria-labelledby="goalsHeading">
            <!-- Decorative SVG blobs for modern background (no external file needed) -->
            <svg class="goals-decor" viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" aria-hidden="true" focusable="false">
                <defs>
                    <linearGradient id="g1" x1="0" x2="1" y1="0" y2="1">
                        <stop offset="0" stop-color="#35ee82" stop-opacity="0.9"/>
                        <stop offset="1" stop-color="#28c567" stop-opacity="0.9"/>
                    </linearGradient>
                    <linearGradient id="g2" x1="0" x2="1" y1="0" y2="1">
                        <stop offset="0" stop-color="#66f19a" stop-opacity="0.75"/>
                        <stop offset="1" stop-color="#aaf5d2" stop-opacity="0.6"/>
                    </linearGradient>
                </defs>

                <!-- larger soft blob -->
                <path class="blob-1" d="M120,30 C200,-10 340,10 430,80 C520,150 520,300 440,370 C360,440 220,470 140,400 C60,330 40,120 120,30 Z" fill="url(#g1)"></path>

                <!-- smaller accent blob -->
                <path class="blob-2" d="M380,320 C420,260 500,250 540,300 C580,350 560,410 520,440 C480,470 420,460 380,420 C340,380 360,360 380,320 Z" fill="url(#g2)"></path>
            </svg>

            <div class="goals-inner d-flex">
                <div class="goals-media">
                    <!-- optional image inside media column (kept empty for presentational balance) -->
                </div>

                <div class="goals-content">
                    <h1 id="goalsHeading" class="fw-bold" data-i18n-key="main_goal_title">TUJUAN KAMI</h1>
                    <p class="text-muted" data-i18n-key="main_goal_desc">Menjadi organisasi agribisnis yang berkelanjutan, inovatif, dan berdampak positif bagi masyarakat serta lingkungan.</p>
                </div>
            </div>
        </section>

        <!-- NEW: logo placed under the goals box as full/photo background with dark gradient -->
        <div class="goals-logo-wrap" aria-hidden="false">
            <div class="goals-logo" role="img" aria-label="Logo Sinergi Perkebunan Nusantara" style="background-image: url('img/logo.png');"></div>
        </div>
        
        <section style="height: 1000px; background:#fff; padding:32px;">
            <!-- konten placeholder -->
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        /**
         * Simple client-side translation mechanism.
         * - All translatable nodes include a `data-i18n-key` attribute.
         * - aria labels to update include `data-i18n-aria` attribute with a key.
         * - Translations object below contains 'id' and 'en' strings for each key.
         * - Language toggles are the two buttons with id "lang-id" and "lang-en".
         * - Selected language is stored in localStorage ('site_lang').
         */

        const translations = {
            // company / general
            "company_name": {
                "id": "<?php echo htmlspecialchars($companyName, ENT_QUOTES); ?>",
                "en": "<?php echo htmlspecialchars($companyName, ENT_QUOTES); ?>"
            },
            "search_placeholder": {
                "id": "Cari...",
                "en": "Search..."
            },
            "lang_id": {"id":"ID","en":"ID"},
            "lang_en": {"id":"EN","en":"EN"},
            // hero
            "hero_1_title": {"id": "<?php echo htmlspecialchars($tagline1, ENT_QUOTES); ?>", "en": "More than Just Being the Largest"},
            "hero_1_sub": {"id": "<?php echo htmlspecialchars($subTagline1, ENT_QUOTES); ?>", "en": "We are here to grow together"},
            "hero_2_title": {"id": "<?php echo htmlspecialchars($tagline2, ENT_QUOTES); ?>", "en": "Digital agribusiness transformation"},
            "hero_2_sub": {"id": "<?php echo htmlspecialchars($subTagline2, ENT_QUOTES); ?>", "en": "Improving quality, fostering trust"},
            "hero_3_title": {"id": "<?php echo htmlspecialchars($tagline3, ENT_QUOTES); ?>", "en": "Planting hopes, harvesting sustainability"},
            "hero_3_sub": {"id": "<?php echo htmlspecialchars($subTagline3, ENT_QUOTES); ?>", "en": "Leaving a thriving and sustainable earth"},
            // main content
            "main_goal_title": {"id":"TUJUAN KAMI","en":"OUR MISSION"},
            "main_goal_desc": {"id":"Menjadi organisasi agribisnis yang berkelanjutan, inovatif, dan berdampak positif bagi masyarakat serta lingkungan.","en":"To be a sustainable, innovative agribusiness organization that creates positive impact for society and the environment."},
            // controls / aria
            "control_prev": {"id":"Sebelumnya","en":"Previous"},
            "control_next": {"id":"Berikutnya","en":"Next"},
            "open_menu": {"id":"Buka menu","en":"Open menu"},
            "close": {"id":"Tutup","en":"Close"},
            "prev": {"id":"Sebelumnya","en":"Previous"},
            "next": {"id":"Berikutnya","en":"Next"}
        };

        // Add menu translations (generated in PHP by using the same keys we emitted)
        (function addMenuTranslations() {
            <?php
            // We'll output JS that adds translations for each menu key to `translations`.
            foreach ($menu as $title => $items) {
                $slug = preg_replace('/[^a-z0-9]+/','_',strtolower($title));
                $menu_title_key = "menu_{$slug}_title";
                // english menu title mapping
                $title_en_map = [
                    "tentang kami" => "About Us",
                    "bisnis kami" => "Our Business",
                    "keberlanjutan" => "Sustainability",
                    "ppid" => "PPID",
                    "layanan investor" => "Investor Relations",
                    "media" => "Media"
                ];
                $title_lower = strtolower($title);
                $title_en = isset($title_en_map[$title_lower]) ? $title_en_map[$title_lower] : $title;
                // output JS assignment
                echo "translations['{$menu_title_key}'] = {id: " . json_encode($title) . ", en: " . json_encode($title_en) . "};\n";

                foreach ($items as $idx => $it) {
                    $label = $it[0];
                    $desc = isset($it[2]) ? $it[2] : "";
                    $item_label_key = "menu_{$slug}_item_{$idx}_label";
                    $item_desc_key  = "menu_{$slug}_item_{$idx}_desc";

                    // map English labels/descriptions (simple mapping; fallback to original if not listed)
                    $label_map = [
                        // Tentang Kami
                        "Sejarah" => "History",
                        "Visi & Misi" => "Vision & Mission",
                        "Tim Manajemen" => "Management Team",
                        // Bisnis Kami
                        "Perkebunan" => "Plantation",
                        "Pengolahan" => "Processing",
                        "Rantai Pasok" => "Supply Chain",
                        // Keberlanjutan
                        "Lingkungan" => "Environment",
                        "Sosial" => "Social",
                        "Laporan Keberlanjutan" => "Sustainability Report",
                        // PPID
                        "Informasi Publik" => "Public Information",
                        "Permintaan Informasi" => "Information Request",
                        "Kontak PPID" => "PPID Contact",
                        // Layanan Investor
                        "Laporan Keuangan" => "Financial Reports",
                        "RUPS" => "AGM & Documents",
                        "Hubungi Investor Relations" => "Contact Investor Relations",
                        // Media
                        "Berita" => "News",
                        "Galeri" => "Gallery",
                        "Publikasi" => "Publications"
                    ];
                    $label_en = isset($label_map[$label]) ? $label_map[$label] : $label;

                    // description translations (some examples)
                    $desc_map = [
                        "Sejarah perusahaan dan perjalanan kami" => "Company history and our journey",
                        "Arah dan tujuan jangka panjang" => "Long-term direction and objectives",
                        "Kenali tim kami" => "Meet our team",
                        "Kegiatan budidaya dan produksi" => "Cultivation and production activities",
                        "Fasilitas pengolahan & produk" => "Processing facilities & products",
                        "Distribusi & logistik" => "Distribution & logistics",
                        "Inisiatif lingkungan hidup" => "Environmental initiatives",
                        "Program sosial dan komunitas" => "Social and community programs",
                        "Laporan tahunan & KPI" => "Annual reports & KPIs",
                        "Dokumen informasi publik" => "Public information documents",
                        "Prosedur permintaan informasi" => "Information request procedures",
                        "Hubungi petugas PPID" => "Contact PPID officer",
                        "Laporan & presentasi keuangan" => "Reports & financial presentations",
                        "Informasi RUPS dan dokumen" => "GMS/AGM information and documents",
                        "Kontak & permintaan" => "Contacts & inquiries",
                        "Update dan artikel" => "Updates and articles",
                        "Foto dan video kegiatan" => "Photos and videos of activities",
                        "Publikasi resmi" => "Official publications"
                    ];
                    $desc_en = isset($desc_map[$desc]) ? $desc_map[$desc] : $desc;

                    // Emit JS assignments
                    echo "translations['{$item_label_key}'] = {id: " . json_encode($label) . ", en: " . json_encode($label_en) . "};\n";
                    if ($desc !== "") {
                        echo "translations['{$item_desc_key}'] = {id: " . json_encode($desc) . ", en: " . json_encode($desc_en) . "};\n";
                    }
                }
            }
            ?>
        })();

        // Utility to apply translations
        function applyTranslations(lang) {
            // elements with data-i18n-key: set textContent or placeholder depending on element
            document.querySelectorAll('[data-i18n-key]').forEach(el => {
                const key = el.getAttribute('data-i18n-key');
                if (!key) return;
                const entry = translations[key];
                if (!entry) return;
                const text = entry[lang] ?? entry['id'] ?? '';
                if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                    el.setAttribute('placeholder', text);
                } else {
                    el.textContent = text;
                }
            });

            // elements with data-i18n-aria: set aria-label
            document.querySelectorAll('[data-i18n-aria]').forEach(el => {
                const key = el.getAttribute('data-i18n-aria');
                if (!key) return;
                const entry = translations[key];
                if (!entry) return;
                const text = entry[lang] ?? entry['id'] ?? '';
                el.setAttribute('aria-label', text);
            });

            // update <title> element (if it has data-i18n-key)
            const titleEl = document.querySelector('title[data-i18n-key]');
            if (titleEl) {
                const key = titleEl.getAttribute('data-i18n-key');
                const entry = translations[key];
                if (entry) {
                    document.title = entry[lang] ?? entry['id'] ?? document.title;
                }
            }

            // update language button active state
            const idBtn = document.getElementById('lang-id');
            const enBtn = document.getElementById('lang-en');
            if (lang === 'id') {
                idBtn.classList.add('active');
                idBtn.setAttribute('aria-pressed','true');
                enBtn.classList.remove('active');
                enBtn.setAttribute('aria-pressed','false');
            } else {
                enBtn.classList.add('active');
                enBtn.setAttribute('aria-pressed','true');
                idBtn.classList.remove('active');
                idBtn.setAttribute('aria-pressed','false');
            }

            // Also update visually-hidden text inside controls if present
            // (already handled by data-i18n-key)
        }

        // Init language from localStorage or default 'id'
        (function(){
            const saved = localStorage.getItem('site_lang') || 'id';
            applyTranslations(saved);
        })();

        // Wire up buttons
        (function(){
            const idBtn = document.getElementById('lang-id');
            const enBtn = document.getElementById('lang-en');

            idBtn.addEventListener('click', () => {
                localStorage.setItem('site_lang', 'id');
                applyTranslations('id');
            });
            enBtn.addEventListener('click', () => {
                localStorage.setItem('site_lang', 'en');
                applyTranslations('en');
            });
        })();

        // Shrink header on scroll (kept from previous)
        (function(){
            const header = document.getElementById('mainHeader');
            const offset = 60;
            window.addEventListener('scroll', () => {
                if (window.scrollY > offset) header.classList.add('shrink');
                else header.classList.remove('shrink');
            });
        })();

        // Search toggle (kept)
        (function(){
            const btn = document.getElementById('searchBtn');
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                btn.classList.toggle('search-open');
                const input = document.getElementById('searchInput');
                if (btn.classList.contains('search-open')) {
                    input.focus();
                } else {
                    input.blur();
                    input.value = '';
                }
            });
            // close search when clicking outside
            document.addEventListener('click', (e) => {
                if (!btn.contains(e.target)) {
                    btn.classList.remove('search-open');
                }
            });
        })();

        // Enable hover to open dropdown on devices that support hover (kept)
        (function(){
            const mq = window.matchMedia('(hover: hover) and (pointer: fine)');
            function enableHoverDropdown(enable){
                const dropdowns = document.querySelectorAll('.nav-item.dropdown');
                dropdowns.forEach(dd => {
                    const menu = dd.querySelector('.dropdown-menu');
                    if(!menu) return;
                    if(enable){
                        dd.classList.remove('no-hover');
                    } else {
                        dd.classList.add('no-hover');
                    }
                });
            }
            enableHoverDropdown(mq.matches);
            if (mq.addEventListener) mq.addEventListener('change', (e) => enableHoverDropdown(e.matches));
        })();

        // Ensure carousel uses desired options (interval=5000ms, don't pause on hover)
        (function(){
            const el = document.getElementById('heroCarousel');
            if(el && bootstrap && bootstrap.Carousel){
                try {
                    const existing = bootstrap.Carousel.getInstance(el);
                    if(existing) existing.dispose();
                } catch(e){}
                new bootstrap.Carousel(el, {
                    interval: 5000,
                    ride: 'carousel',
                    pause: false,
                    touch: true,
                    wrap: true
                });
            }
        })();
    </script>
</body>

</html>