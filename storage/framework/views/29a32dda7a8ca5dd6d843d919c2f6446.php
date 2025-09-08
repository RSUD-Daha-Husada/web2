<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSUD Daha Husada - Portal Berita Kesehatan Terkini</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2196f3;
            --secondary: #26c6da;
            --success: #4caf50;
            --info: #03a9f4;
            --warning: #ff9800;
            --danger: #f44336;
            --dark: #343a40;
            --light: #f8f9fa;
            --gray: #6c757d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
        }
        
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: var(--primary);
            font-weight: 700;
            font-size: 22px;
        }
        
        .logo i {
            margin-right: 10px;
            font-size: 24px;
            color: var(--primary);
        }
        
        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }
        
        nav ul li {
            position: relative;
        }
        
        nav ul li a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            padding: 8px 0;
            display: inline-block;
            transition: color 0.3s;
        }
        
        nav ul li a:hover {
            color: var(--primary);
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            min-width: 180px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s;
        }
        
        .dropdown-menu a {
            display: block;
            padding: 10px 15px;
            color: var(--dark);
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .dropdown-menu a:hover {
            background-color: #f8f9fa;
        }
        
        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .menu-toggle {
            display: none;
            cursor: pointer;
        }
        
        .hero {
            position: relative;
            overflow: hidden;
            background-color: #f8f9fa;
        }
        
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        
        .hero-shape {
            position: absolute;
            background-color: rgba(33, 150, 243, 0.05);
            border-radius: 50%;
            z-index: 1;
        }
        
        .shape-1 {
            width: 300px;
            height: 300px;
            top: -100px;
            left: -100px;
        }
        
        .shape-2 {
            width: 250px;
            height: 250px;
            bottom: -50px;
            right: -50px;
        }
        
        .shape-3 {
            width: 200px;
            height: 200px;
            top: 30%;
            right: 10%;
        }
        
        .shape-4 {
            width: 150px;
            height: 150px;
            bottom: 20%;
            left: 15%;
        }
        
        .hero-dots {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 300px;
            background-image: radial-gradient(circle at 30% 70%, rgba(33, 150, 243, 0.1) 0%, transparent 50%), radial-gradient(circle at 70% 30%, rgba(33, 150, 243, 0.1) 0%, transparent 50%), radial-gradient(circle at 50% 50%, rgba(33, 150, 243, 0.1) 0%, transparent 50%);
            z-index: 1;
        }
        
        .hero-waves {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='rgba(33, 150, 243, 0.1)' d='M0,192L48,186.7C96,181,192,171,288,165.3C384,160,480,160,576,176C672,192,768,224,864,218.7C960,213,1056,171,1152,170.7C1248,171,1344,213,1392,224L1440,235.3L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/svg%3E");
            background-repeat: repeat-x;
            z-index: 1;
        }
        
        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 100px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        
        .hero-content {
            flex: 1;
        }
        
        .hero-badge {
            display: inline-flex;
            align-items: center;
            background-color: var(--primary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            margin-bottom: 30px;
        }
        
        .badge-pulse {
            width: 10px;
            height: 10px;
            background-color: white;
            border-radius: 50%;
            margin-right: 8px;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            
            50% {
                transform: scale(1.5);
                opacity: 0.7;
            }
            
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        .hero h1 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .hero h1 span.highlight {
            color: var(--primary);
        }
        
        .hero p {
            font-size: 18px;
            color: var(--dark);
            margin-bottom: 40px;
            max-width: 600px;
        }
        
        .hero-stats {
            display: flex;
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 36px;
            font-weight: 700;
            color: var(--primary);
            display: block;
        }
        
        .stat-label {
            font-size: 16px;
            color: var(--gray);
        }
        
        .hero-buttons {
            display: flex;
            gap: 20px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        .btn-secondary {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }
        
        .btn i {
            margin-left: 10px;
        }
        
        .hero-trust {
            margin-top: 40px;
        }
        
        .trust-label {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .trust-logos {
            display: flex;
            gap: 15px;
        }
        
        .logo-item {
            width: 80px;
            height: 50px;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: var(--gray);
        }
        
        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .image-card {
            position: relative;
            width: 350px;
            height: 350px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.7));
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .play-button {
            width: 80px;
            height: 80px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .play-button i {
            font-size: 40px;
            color: var(--primary);
        }
        
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .mouse {
            width: 30px;
            height: 50px;
            border: 2px solid var(--dark);
            border-radius: 25px;
            position: relative;
        }
        
        .wheel {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 6px;
            height: 6px;
            background-color: var(--dark);
            border-radius: 50%;
            animation: wheel 1.5s infinite;
        }
        
        .arrows {
            margin-top: 15px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .arrows span {
            width: 10px;
            height: 10px;
            background-color: var(--dark);
            transform: rotate(45deg);
        }
        
        /* News Section */
        .news-section {
            padding: 80px 20px;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-header h2 {
            font-size: 32px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
        }
        
        .section-header p {
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .news-filter {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            padding: 8px 20px;
            border: 2px solid var(--primary);
            background-color: white;
            color: var(--primary);
            border-radius: 25px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .filter-btn.active {
            background-color: var(--primary);
            color: white;
        }
        
        .berita-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .berita-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .berita-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .berita-img {
            position: relative;
            height: 200px;
        }
        
        .berita-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .berita-kategori {
            position: absolute;
            top: 15px;
            left: 15px;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .bg-primary {
            background-color: var(--primary);
        }
        
        .bg-info {
            background-color: var(--info);
        }
        
        .bg-success {
            background-color: var(--success);
        }
        
        .bg-warning {
            background-color: var(--warning);
        }
        
        .bg-danger {
            background-color: var(--danger);
        }
        
        .bg-secondary {
            background-color: var(--gray);
        }
        
        .berita-content {
            padding: 20px;
        }
        
        .berita-tanggal {
            display: flex;
            align-items: center;
            color: var(--gray);
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .berita-tanggal i {
            margin-right: 5px;
        }
        
        .berita-h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .berita-p {
            font-size: 16px;
            color: var(--gray);
            margin-bottom: 15px;
            line-height: 1.5;
        }
        
        .berita-link {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .berita-link:hover {
            color: var(--secondary);
        }
        
        .berita-link i {
            margin-left: 5px;
        }
        
        /* Categories Section */
        .categories-section {
            padding: 80px 20px;
            background-color: #f8f9fa;
        }
        
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .category-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .category-card i {
            font-size: 48px;
            color: var(--secondary);
            margin-bottom: 20px;
        }
        
        .category-card h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .category-card p {
            font-size: 16px;
            color: var(--gray);
            line-height: 1.5;
        }
        
        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding: 60px 20px 30px;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }
        
        .footer-col {
            padding: 0 15px;
        }
        
        .footer-col h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-col h3::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary);
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links ul li {
            margin-bottom: 12px;
        }
        
        .footer-links ul li a {
            display: flex;
            align-items: center;
            color: #adb5bd;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links ul li a i {
            margin-right: 10px;
            width: 20px;
        }
        
        .footer-links ul li a:hover {
            color: white;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
            color: #adb5bd;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 1000;
        }
        
        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background-color: var(--secondary);
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-container {
                flex-direction: column-reverse;
            }
            
            .hero-buttons {
                justify-content: center;
            }
        }
        
        @media (max-width: 768px) {
            nav ul {
                display: none;
            }
            
            .hero h1 {
                font-size: 32px;
            }
            
            .section-header h2 {
                font-size: 28px;
            }
            
            .berita-grid {
                grid-template-columns: 1fr;
            }
            
            .categories-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 576px) {
            .hero-statistics {
                flex-direction: column;
                gap: 20px;
            }
            
            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }
            
            .trust-logos {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .logo-item {
                width: 70px;
                height: 40px;
            }
        }
        
        /* Utility Classes */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .text-center {
            text-align: center;
        }
        
        .mt-5 {
            margin-top: 5rem;
        }
        
        /* Text-to-Speech Functionality */
        [data-speak] {
            cursor: pointer;
            user-select: none;
        }
        
        .speech-indicator {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: var(--primary);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 1000;
        }
        
        .speech-indicator.active {
            opacity: 1;
            visibility: visible;
        }
    </style>

<body>

<!-- Header -->
<header>
    <div class="header-container">
        <a href="#" class="logo" data-speak="RSUD Daha Husada">
            <i class="fas fa-hospital"></i>
            <span>RSUD Daha Husada</span>
        </a>
        <nav>
            <ul>
                <li><a class="nav-link" href="<?php echo e(url('/')); ?>" data-speak="Beranda">Beranda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-speak="Berita">
                        Berita <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="resources/views/berita.blade.php" data-speak="Berita Utama">
                            <i class="fas fa-bullhorn"></i> Berita Utama
                        </a>
                        <a href="#" data-speak="Artikel Kesehatan">
                            <i class="fas fa-newspaper"></i> Artikel Kesehatan
                        </a>
                        <a href="#" data-speak="Penelitian Medis">
                            <i class="fas fa-microscope"></i> Penelitian Medis
                        </a>
                        <a href="#" data-speak="Tips Kesehatan">
                            <i class="fas fa-heartbeat"></i> Tips Kesehatan
                        </a>
                    </div>
                </li>
                <li><a href="#" data-speak="Layanan">Layanan</a></li>
                <li><a href="#" data-speak="Dokter">Dokter</a></li>
                <li><a href="#" data-speak="Kontak">Kontak</a></li>
            </ul>
        </nav>
        <div class="menu-toggle" data-speak="Menu">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-background">
        <div class="hero-shape shape-1"></div>
        <div class="hero-shape shape-2"></div>
        <div class="hero-shape shape-3"></div>
        <div class="hero-shape shape-4"></div>
        <div class="hero-dots"></div>
        <div class="hero-waves"></div>
    </div>
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="badge-pulse"></span>
                <span>Portal Berita #1 di Indonesia</span>
            </div>
            <h1>Portal Berita Kesehatan <span class="highlight">Terpercaya</span></h1>
            <p>Dapatkan informasi kesehatan terkini, tips sehat, dan berita medis terpercaya dari para ahli kami di
                RSUD Daha Husada. Temukan solusi kesehatan yang Anda butuhkan.</p>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number" data-target="5000">0</span>
                    <span class="stat-label">Artikel</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="150">0</span>
                    <span class="stat-label">Ahli Medis</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="50000">0</span>
                    <span class="stat-label">Pembaca Aktif</span>
                </div>
            </div>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary" data-speak="Jelajahi Berita">
                    <span>Jelajahi Berita</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="#" class="btn btn-secondary" data-speak="Layanan Kami">
                    <span>Layanan Kami</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="hero-trust">
                <div class="trust-label">Dipercaya oleh:</div>
                <div class="trust-logos">
                    <div class="logo-item">Logo 1</div>
                    <div class="logo-item">Logo 2</div>
                    <div class="logo-item">Logo 3</div>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <div class="image-card">
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                    alt="Tim Medis Rumah Sakit">
                <div class="image-overlay">
                    <div class="play-button" data-speak="Putar Video">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="section-header">
        <h2>Berita Kesehatan Terkini</h2>
        <p>Tetap update dengan informasi kesehatan terbaru dan tips dari para ahli kami</p>
    </div>
    <div class="news-filter">
        <button class="filter-btn active" data-speak="Semua Kategori">Semua</button>
        <button class="filter-btn" data-speak="Penelitian">Penelitian</button>
        <button class="filter-btn" data-speak="Pencegahan">Pencegahan</button>
        <button class="filter-btn" data-speak="Gizi">Gizi</button>
        <button class="filter-btn" data-speak="Teknologi">Teknologi</button>
    </div>
    </div>
    <div class="berita-grid" id="beritaGrid">
        <!-- Berita akan dimuat di sini melalui JavaScript -->
    </div>
</section>


<!-- Categories Section -->
<section class="categories-section">
    <div class="section-header">
        <h2>Kategori Berita Kesehatan</h2>
        <p>Jelajahi berbagai topik kesehatan sesuai dengan kebutuhan Anda</p>
    </div>
    <div class="categories-grid">
        <div class="category-card" data-speak="Kategori Kesehatan Jantung">
            <i class="fas fa-heartbeat"></i>
            <h3>Kesehatan Jantung</h3>
            <p>Informasi seputar kesehatan jantung dan pembuluh darah</p>
        </div>
        <div class="category-card" data-speak="Kategori Kesehatan Mental">
            <i class="fas fa-brain"></i>
            <h3>Kesehatan Mental</h3>
            <p>Tips dan informasi untuk menjaga kesehatan mental</p>
        </div>
        <div class="category-card" data-speak="Kategori Kesehatan Anak">
            <i class="fas fa-baby"></i>
            <h3>Kesehatan Anak</h3>
            <p>Panduan kesehatan untuk tumbuh kembang anak</p>
        </div>
        <div class="category-card" data-speak="Kategori Gizi dan Diet">
            <i class="fas fa-apple-alt"></i>
            <h3>Gizi & Diet</h3>
            <p>Informasi seputar gizi dan pola makan sehat</p>
        </div>
        <div class="category-card" data-speak="Kategori Olahraga dan Fitnes">
            <i class="fas fa-dumbbell"></i>
            <h3>Olahraga & Fitnes</h3>
            <p>Panduan olahraga untuk kesehatan tubuh yang optimal</p>
        </div>
        <div class="category-card" data-speak="Kategori Penyakit Menular">
            <i class="fas fa-virus"></i>
            <h3>Penyakit Menular</h3>
            <p>Informasi tentang pencegahan dan pengobatan penyakit menular</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-col">
            <h3>RSUD Daha Husada</h3>
            <p>Memberikan pelayanan kesehatan terbaik dengan teknologi modern dan tenaga medis profesional untuk
                kesehatan masyarakat Indonesia.</p>
            <div class="social-links">
                <a href="#" data-speak="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" data-speak="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" data-speak="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" data-speak="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="footer-col">
            <h3>Link Cepat</h3>
            <ul>
                <li><a href="#" data-speak="Tentang Kami"><i class="fas fa-angle-right"></i> Tentang Kami</a></li>
                <li><a href="#" data-speak="Layanan"><i class="fas fa-angle-right"></i> Layanan</a></li>
                <li><a href="#" data-speak="Dokter"><i class="fas fa-angle-right"></i> Dokter</a></li>
                <li><a href="#" data-speak="Fasilitas"><i class="fas fa-angle-right"></i> Fasilitas</a></li>
                <li><a href="#" data-speak="Karir"><i class="fas fa-angle-right"></i> Karir</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Layanan</h3>
            <ul>
                <li><a href="#" data-speak="Rawat Jalan"><i class="fas fa-angle-right"></i> Rawat Jalan</a></li>
                <li><a href="#" data-speak="Rawat Inap"><i class="fas fa-angle-right"></i> Rawat Inap</a></li>
                <li><a href="#" data-speak="Gawat Darurat"><i class="fas fa-angle-right"></i> Gawat Darurat</a></li>
                <li><a href="#" data-speak="Medical Check-up"><i class="fas fa-angle-right"></i> Medical
                        Check-up</a></li>
                <li><a href="#" data-speak="Konsultasi Online"><i class="fas fa-angle-right"></i> Konsultasi
                        Online</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Kontak Kami</h3>
            <ul>
                <li><a href="#" data-speak="Alamat Jl. Kesehatan No. 123, Jakarta"><i
                            class="fas fa-map-marker-alt"></i> Jl. Kesehatan No. 123, Jakarta</a></li>
                <li><a href="#" data-speak="Telepon (021) 1234-5678"><i class="fas fa-phone"></i> (021)
                        1234-5678</a></li>
                <li><a href="#" data-speak="Email info@rumahsakitsehat.com"><i class="fas fa-envelope"></i>
                        info@rumahsakitsehat.com</a></li>
                <li><a href="#" data-speak="Buka 24 Jam Setiap Hari"><i class="fas fa-clock"></i> 24 Jam Setiap
                        Hari</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2023 RSUD Daha Husada. Hak Cipta Dilindungi.</p>
    </div>
</footer>

<!-- Back to Top Button -->
<div class="back-to-top" data-speak="Kembali ke Atas">
    <i class="fas fa-arrow-up"></i>
</div>

<script>
    // Cek dan inisialisasi localStorage
    function initializeNewsStorage() {
        if (!localStorage.getItem('newsList')) {
            // Jika belum ada, buat array kosong
            localStorage.setItem('newsList', JSON.stringify([]));
            console.log('LocalStorage untuk berita diinisialisasi');
        }
    }

    // Fungsi untuk menampilkan berita di grid dashboard
    function loadBeritaGrid() {
        console.log('Memuat berita grid...');

        // Pastikan localStorage terinisialisasi
        initializeNewsStorage();

        const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
        const container = document.getElementById('beritaGrid');

        console.log('Total berita di localStorage:', newsList.length);
        console.log('Data berita:', newsList);

        // Jika tidak ada berita sama sekali, tampilkan pesan
        if (newsList.length === 0) {
            container.innerHTML = `
            <div class="col-12 text-center py-5">
                <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                <h5>Belum Ada Berita</h5>
                <p class="text-muted">Belum ada berita yang tersedia</p>
                <button class="btn btn-primary mt-3" onclick="createSampleNews()">
                    <i class="fas fa-plus me-2"></i>Buat Berita Contoh
                </button>
            </div>
        `;
            return;
        }

        // Filter berita yang statusnya "publish"
        const publishedNews = newsList.filter(news => {
            console.log('Berita:', news.title, 'Status:', news.status);
            // Jika tidak ada field status, anggap sebagai publish
            return !news.status || news.status === 'publish';
        });

        console.log('Jumlah berita yang dipublish:', publishedNews.length);

        if (publishedNews.length === 0) {
            container.innerHTML = `
            <div class="col-12 text-center py-5">
                <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                <h5>Belum Ada Berita Dipublikasikan</h5>
                <p class="text-muted">Ada ${newsList.length} berita tapi belum ada yang dipublikasikan</p>
                <div class="alert alert-info mt-3">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Untuk Admin:</strong> Silakan edit berita dan ubah statusnya menjadi "Publish".
                </div>
            </div>
        `;
            return;
        }

        // Ambil 3 berita terbaru
        const recentNews = publishedNews.slice(0, 3);
        container.innerHTML = recentNews.map(news => {
            const categoryClass = getCategoryClass(news.category);
            return `
            <div class="berita-card">
                <div class="berita-img">
                    <img src="${news.image || 'https://picsum.photos/seed/news' + news.id + '/600/400.jpg'}" alt="${news.title}">
                    <span class="berita-kategori ${categoryClass}">${formatCategoryName(news.category)}</span>
                </div>
                <div class="berita-content">
                    <div class="berita-tanggal">
                        <i class="far fa-calendar-alt"></i>
                        <span>${formatDate(news.date)}</span>
                    </div>
                    <h3>${news.title}</h3>
                    <p>${news.content ? news.content.substring(0, 150) + (news.content.length > 150 ? '...' : '') : ''}</p>
                    <a href="<?php echo e(route('berita')); ?>" onclick="showNewsDetail(${news.id}); return false;" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        `;
        }).join('');

        console.log('Berita berhasil dimuat');
    }

    // Fungsi untuk mendapatkan kelas CSS berdasarkan kategori
    function getCategoryClass(category) {
        const categoryMap = {
            'pengumuman': 'bg-primary',
            'kesehatan': 'bg-success',
            'event': 'bg-warning',
            'pencegahan': 'bg-info',
            'penelitian': 'bg-danger',
            'gizi': 'bg-secondary',
            'fasilitas': 'bg-info',
            'layanan': 'bg-primary',
            'prestasi': 'bg-success'
        };
        return categoryMap[category] || 'bg-secondary';
    }

    // Fungsi untuk memformat nama kategori
    function formatCategoryName(category) {
        const categoryNames = {
            'pengumuman': 'Pengumuman',
            'kesehatan': 'Kesehatan',
            'event': 'Event',
            'pencegahan': 'Pencegahan',
            'penelitian': 'Penelitian',
            'gizi': 'Gizi',
            'fasilitas': 'Fasilitas',
            'layanan': 'Layanan',
            'prestasi': 'Prestasi'
        };
        return categoryNames[category] || category;
    }

    // Fungsi untuk menampilkan detail berita
    function showNewsDetail(newsId) {
        console.log('Menampilkan detail berita ID:', newsId);
        sessionStorage.setItem('selectedNewsId', newsId);
        window.location.href = "<?php echo e(route('berita')); ?>";
    }

    // Format tanggal
    function formatDate(dateString) {
        if (!dateString) return 'Tanggal tidak tersedia';
        const options = { day: 'numeric', month: 'short', year: 'numeric' };
        return new Date(dateString).toLocaleDateString('id-ID', options);
    }

    // Fungsi untuk membuat berita contoh
    function createSampleNews() {
        console.log('Membuat berita contoh...');

        const sampleNews = {
            id: Date.now(),
            title: "RSUD Daha Husada Meluncurkan Layanan Telemedicine",
            category: "layanan",
            content: "RSUD Daha Husada dengan bangga mengumumkan peluncuran layanan telemedicine terbaru. Layanan ini memungkinkan pasien untuk berkonsultasi dengan dokter secara online tanpa harus datang ke rumah sakit. Ini adalah langkah inovatif untuk meningkatkan akses layanan kesehatan bagi masyarakat.",
            date: new Date().toISOString().split('T')[0],
            image: "https://images.unsplash.com/photo-1616281177739-2a8192c2421d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
            author: "Admin RSUD",
            status: "publish",
            createdAt: new Date().toISOString()
        };

        let newsList = JSON.parse(localStorage.getItem('newsList')) || [];
        newsList.unshift(sampleNews);
        localStorage.setItem('newsList', JSON.stringify(newsList));

        console.log('Berita contoh berhasil dibuat');
        alert('Berita contoh berhasil dibuat! Halaman akan di-refresh.');
        location.reload();
    }

    // Event listener
    document.addEventListener('DOMContentLoaded', function () {
        console.log('DOM dimuat, mempersiapkan berita...');

        // Load data saat halaman dimuat
        if (document.getElementById('beritaGrid')) {
            loadBeritaGrid();
        }

        // Cek apakah ada ID berita yang tersimpan (untuk halaman detail)
        const selectedNewsId = sessionStorage.getItem('selectedNewsId');
        if (selectedNewsId && document.getElementById('newsDetailContainer')) {
            console.log('Menampilkan detail berita untuk ID:', selectedNewsId);
            const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
            const news = newsList.find(item => item.id == selectedNewsId);

            if (news) {
                // Tampilkan detail berita
                const categoryClass = getCategoryClass(news.category);
                document.getElementById('newsDetailContainer').innerHTML = `
                <div class="card">
                    <div class="card-header">
                        <h2>${news.title}</h2>
                        <div class="d-flex align-items-center mt-2">
                            <span class="badge ${categoryClass} me-2">${formatCategoryName(news.category)}</span>
                            <small class="text-muted">
                                <i class="far fa-calendar me-1"></i> ${formatDate(news.date)}
                                ${news.author ? `<i class="fas fa-user ms-2 me-1"></i>${news.author}` : ''}
                            </small>
                        </div>
                    </div>
                    <div class="card-body">
                        ${news.image ? `<img src="${news.image}" class="img-fluid rounded mb-4" alt="${news.title}">` : ''}
                        <div class="news-content">
                            ${news.content ? news.content.replace(/\n/g, '<br>') : ''}
                        </div>
                    </div>
                    <div class="card-footer">
                        <button onclick="history.back()" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </button>
                    </div>
                </div>
            `;
            } else {
                document.getElementById('newsDetailContainer').innerHTML = `
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Berita tidak ditemukan
                </div>
            `;
            }

            sessionStorage.removeItem('selectedNewsId');
        }

        // Jika halaman semua berita dimuat, tampilkan semua berita
        if (document.getElementById('allNewsContainer')) {
            loadAllNews();
        }
    });

    // Fungsi untuk menampilkan semua berita di halaman berita
    function loadAllNews() {
        console.log('Memuat semua berita...');
        const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
        const container = document.getElementById('allNewsContainer');

        // Filter berita yang statusnya "publish" atau tidak ada status
        const publishedNews = newsList.filter(news => {
            return !news.status || news.status === 'publish';
        });

        if (publishedNews.length === 0) {
            container.innerHTML = `
            <div class="text-center py-5">
                <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                <h5>Belum Ada Berita</h5>
                <p class="text-muted">Belum ada berita yang dipublikasikan</p>
                <button class="btn btn-primary" onclick="createSampleNews()">
                    <i class="fas fa-plus me-2"></i>Buat Berita Contoh
                </button>
            </div>
        `;
            return;
        }

        container.innerHTML = publishedNews.map(news => {
            const categoryClass = getCategoryClass(news.category);
            return `
            <div class="card mb-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="${news.image || 'https://picsum.photos/seed/news' + news.id + '/600/400.jpg'}" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="${news.title}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title">${news.title}</h5>
                                <span class="badge ${categoryClass}">${formatCategoryName(news.category)}</span>
                            </div>
                            <p class="text-muted small mb-3">
                                <i class="far fa-calendar me-1"></i> ${formatDate(news.date)}
                                ${news.author ? `<i class="fas fa-user ms-2 me-1"></i>${news.author}` : ''}
                            </p>
                            <p class="card-text">${news.content ? news.content.substring(0, 200) + (news.content.length > 200 ? '...' : '') : ''}</p>
                            <a href="#" onclick="showNewsDetail(${news.id}); return false;" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        `;
        }).join('');
    }

    // Fungsi untuk memeriksa dan memperbaiki data berita
    function checkAndFixNewsData() {
        const newsList = JSON.parse(localStorage.getItem('newsList')) || [];

        // Periksa setiap berita
        newsList.forEach(news => {
            // Pastikan ada field status
            if (!news.status) {
                news.status = 'publish';
                console.log('Memperbaiki berita:', news.title, 'menambah status: publish');
            }

            // Pastikan ada field image
            if (!news.image) {
                news.image = 'https://picsum.photos/seed/news' + news.id + '/600/400.jpg';
                console.log('Memperbaiki berita:', news.title, 'menambah gambar default');
            }
        });

        // Simpan kembali
        localStorage.setItem('newsList', JSON.stringify(newsList));
        console.log('Data berita telah diperbaiki');
    }

    // Jalankan pemeriksaan saat halaman dimuat
    checkAndFixNewsData();
</script>
    
    <script>
        // Initialize the speech functionality
        document.addEventListener('DOMContentLoaded', function() {
            const synth = window.speechSynthesis;
            let currentUtterance = null;
            let isProcessing = false;
            
            // Add hover sound effect for interactive elements
            const addHoverSound = () => {
                const elements = document.querySelectorAll('[data-speak]');
                elements.forEach(element => {
                    element.addEventListener('mouseenter', function() {
                        if (!isProcessing && synth) {
                            const text = this.getAttribute('data-speak');
                            speakText(text);
                        }
                    });
                });
            };
            
            // Speak text function
            const speakText = (text) => {
                if (!synth || isProcessing) return;
                
                isProcessing = true;
                currentUtterance = new SpeechSynthesisUtterance(text);
                currentUtterance.lang = 'id-ID';
                currentUtterance.rate = 1.0;
                currentUtterance.volume = 1.0;
                currentUtterance.pitch = 1.0;
                
                currentUtterance.onend = function() {
                    isProcessing = false;
                };
                
                currentUtterance.onerror = function() {
                    isProcessing = false;
                };
                
                try {
                    synth.speak(currentUtterance);
                } catch (e) {
                    console.error('Error speaking:', e);
                    isProcessing = false;
                }
            };
            
            // Initialize on page load
            addHoverSound();
            
            // Show/hide scroll indicator
            const backToTopButton = document.querySelector('.back-to-top');
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('show');
                } else {
                    backToTopButton.classList.remove('show');
                }
            });
            
            // Back to top button functionality
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            // Initialize news section
            initializeNewsSection();
        });
        
        // News section initialization
        function initializeNewsSection() {
            const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
            const container = document.getElementById('beritaGrid');
            
            if (newsList.length === 0) {
                container.innerHTML = `
                    <div class="col-12 text-center py-5">
                        <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                        <h5>Belum Ada Berita</h5>
                        <p class="text-muted">Belum ada berita yang tersedia</p>
                        <button class="btn btn-primary mt-3" onclick="createSampleNews()">
                            <i class="fas fa-plus me-2"></i>Buat Berita Contoh
                        </button>
                    </div>
                `;
                return;
            }
            
            // Filter and show published news
            const publishedNews = newsList.filter(news => !news.status || news.status === 'publish');
            
            if (publishedNews.length === 0) {
                container.innerHTML = `
                    <div class="col-12 text-center py-5">
                        <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                        <h5>Belum Ada Berita Dipublikasikan</h5>
                        <p class="text-muted">Ada ${newsList.length} berita tapi belum ada yang dipublikasikan</p>
                        <div class="alert alert-info mt-3">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Untuk Admin:</strong> Silakan edit berita dan ubah statusnya menjadi "Publish".
                        </div>
                    </div>
                `;
                return;
            }
            
            // Show recent news (first 3 items)
            const recentNews = publishedNews.slice(0, 3);
            container.innerHTML = recentNews.map(news => `
                <div class="berita-card">
                    <div class="berita-img">
                        <img src="${news.image || `https://picsum.photos/seed/news${news.id}/600/400.jpg`}" alt="${news.title}">
                        <span class="berita-kategori bg-${getCategoryClass(news.category)}">${formatCategoryName(news.category)}</span>
                    </div>
                    <div class="berita-content">
                        <div class="berita-tanggal">
                            <i class="far fa-calendar-alt"></i>
                            <span>${formatDate(news.date)}</span>
                        </div>
                        <h3 class="berita-h3">${news.title}</h3>
                        <p class="berita-p">${news.content ? news.content.substring(0, 150) + (news.content.length > 150 ? '...' : '') : ''}</p>
                        <a href="#" onclick="showNewsDetail(${news.id}); return false;" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            `).join('');
        }
        
        // Helper functions
        function getCategoryClass(category) {
            const categoryMap = {
                'pengumuman': 'primary',
                'kesehatan': 'success',
                'event': 'info',
                'pencegahan': 'warning',
                'penelitian': 'danger',
                'gizi': 'secondary',
                'fasilitas': 'info',
                'layanan': 'primary',
                'prestasi': 'success'
            };
            return categoryMap[category] || 'secondary';
        }
        
        function formatCategoryName(category) {
            const categoryNames = {
                'pengumuman': 'Pengumuman',
                'kesehatan': 'Kesehatan',
                'event': 'Event',
                'pencegahan': 'Pencegahan',
                'penelitian': 'Penelitian',
                'gizi': 'Gizi',
                'fasilitas': 'Fasilitas',
                'layanan': 'Layanan',
                'prestasi': 'Prestasi'
            };
            return categoryNames[category] || category;
        }
        
        function formatDate(dateString) {
            if (!dateString) return 'Tanggal tidak tersedia';
            const options = { day: 'numeric', month: 'short', year: 'numeric' };
            return new Date(dateString).toLocaleDateString('id-ID', options);
        }
        
        // Create sample news
        function createSampleNews() {
            const sampleNews = {
                id: Date.now(),
                title: "RSUD Daha Husada Meluncurkan Layanan Telemedicine",
                category: "layanan",
                content: "RSUD Daha Husada dengan bangga mengumumkan peluncuran layanan telemedicine terbaru. Layanan ini memungkinkan pasien untuk berkonsultasi dengan dokter secara online tanpa harus datang ke rumah sakit. Ini adalah langkah inovatif untuk meningkatkan akses layanan kesehatan bagi masyarakat.",
                date: new Date().toISOString().split('T')[0],
                image: "https://images.unsplash.com/photo-1616281177739-2a8192c2421d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                author: "Admin RSUD",
                status: "publish",
                createdAt: new Date().toISOString()
            };
            
            let newsList = JSON.parse(localStorage.getItem('newsList')) || [];
            newsList.unshift(sampleNews);
            localStorage.setItem('newsList', JSON.stringify(newsList));
            
            location.reload();
        }
        
        // Show news detail
        function showNewsDetail(newsId) {
            sessionStorage.setItem('selectedNewsId', newsId);
            window.location.href = "<?php echo e(route('berita')); ?>";
        }
        
        // Check and fix news data
        function checkAndFixNewsData() {
            const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
            
            newsList.forEach(news => {
                if (!news.status) {
                    news.status = 'publish';
                }
                if (!news.image) {
                    news.image = `https://picsum.photos/seed/news${news.id}/600/400.jpg`;
                }
            });
            
            localStorage.setItem('newsList', JSON.stringify(newsList));
        }
        
        // Run data check on page load
        checkAndFixNewsData();
    </script>
</body>
</html><?php /**PATH /Users/bilalabdillah/Documents/klinik-laravel/resources/views/berita.blade.php ENDPATH**/ ?>