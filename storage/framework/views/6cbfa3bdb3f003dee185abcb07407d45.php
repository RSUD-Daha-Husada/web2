<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ketersediaan Tempat Tidur - RSUD Daha Husada</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #0d6e0d;
            /* Hijau tua */
            --secondary-color: #28a745;
            /* Hijau menengah */
            --accent-color: #5cb85c;
            /* Hijau muda */
            --success-color: #28a745;
            /* Hijau success */
            --warning-color: #ffc107;
            /* Kuning (tetap) */
            --danger-color: #dc3545;
            /* Merah (tetap) */
            --dark-color: #1f2937;
            /* Gelap (tetap) */
            --light-color: #f3f4f6;
            /* Terang (tetap) */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e8f5e9 100%);
            /* Latar hijau sangat muda */
            color: var(--dark-color);
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            color: var(--primary-color) !important;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-brand i {
            font-size: 2rem;
            color: var(--secondary-color);
        }

        .nav-link {
            font-weight: 600;
            color: var(--dark-color) !important;
            margin: 0 10px;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--secondary-color) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--secondary-color);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,133.3C960,128,1056,96,1152,90.7C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.2s;
            animation-fill-mode: both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Stats Cards */
        .stats-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
        }

        .stats-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .stats-icon {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .stats-number {
            font-size: 2.5rem;
            font-weight: 800;
            margin: 10px 0;
        }

        /* Filter Section */
        .filter-section {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        .filter-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .form-control,
        .form-select {
            border-radius: 10px;
            border: 2px solid #e5e7eb;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

        /* Bed Cards */
        .bed-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            margin-bottom: 30px;
        }

        .bed-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .bed-card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        .bed-card-header::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(45deg);
        }

        .bed-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        .bed-count {
            font-size: 3rem;
            font-weight: 800;
            margin: 10px 0;
        }

        .availability-badge {
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            display: inline-block;
            margin-top: 10px;
        }

        .availability-high {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }

        .availability-medium {
            background: rgba(255, 193, 7, 0.1);
            color: var(--warning-color);
        }

        .availability-low {
            background: rgba(220, 53, 69, 0.1);
            color: var(--danger-color);
        }

        /* Progress Bar */
        .progress {
            height: 12px;
            border-radius: 10px;
            background: #e5e7eb;
            overflow: visible;
            margin: 20px 0;
        }

        .progress-bar {
            border-radius: 10px;
            position: relative;
            overflow: visible;
        }

        .progress-bar::after {
            content: attr(data-percent);
            position: absolute;
            right: -30px;
            top: -10px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* Real-time Updates Section */
        .updates-section {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        .updates-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }

        .updates-title i {
            margin-right: 10px;
            color: var(--secondary-color);
        }

        .update-item {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
            border-left: 4px solid var(--secondary-color);
            background: rgba(40, 167, 69, 0.05);
        }

        .update-time {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 5px;
        }

        .update-content {
            font-weight: 500;
        }

        /* Reservation Form */
        /* Stepper Styles */
        .stepper {
            position: relative;
            display: flex;
            justify-content: space-between;
            max-width: 600px;
            margin: 0 auto;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 8px;
            transition: all 0.3s ease;
        }

        .step.active .step-circle {
            background: var(--secondary-color);
            color: white;
        }

        .step.completed .step-circle {
            background: var(--success-color);
            color: white;
        }

        .step-label {
            font-size: 0.875rem;
            color: #6c757d;
            text-align: center;
        }

        .step.active .step-label {
            color: var(--secondary-color);
            font-weight: 600;
        }

        .step-connector {
            flex: 1;
            height: 2px;
            background: #e9ecef;
            margin: 20px -10px 0;
            z-index: 0;
        }

        .step.completed+.step-connector {
            background: var(--success-color);
        }

        /* Form Steps */
        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        /* Facility Item */
        .facility-item {
            transition: all 0.3s ease;
        }

        .facility-item:hover {
            background: rgba(40, 167, 69, 0.1) !important;
            transform: translateY(-2px);
        }

        /* Form Styling */
        .form-control:focus,
        .form-select:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

        .input-group-text {
            background-color: var(--secondary-color);
            color: white;
            border: none;
        }

        .card-header {
            border-bottom: 2px solid var(--secondary-color);
        }

        /* Summary Styling */
        .summary-item {
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .summary-item:last-child {
            border-bottom: none;
        }

        .summary-label {
            font-weight: 600;
            color: #6c757d;
        }

        .summary-value {
            font-weight: 500;
        }

        /* Live Chat */
        .chat-widget {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
        }

        .chat-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            font-size: 1.5rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .chat-button:hover {
            transform: scale(1.1);
        }

        .chat-box {
            position: absolute;
            bottom: 80px;
            right: 0;
            width: 350px;
            height: 450px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            display: none;
            flex-direction: column;
            overflow: hidden;
        }

        .chat-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 15px 20px;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        .chat-input {
            padding: 15px;
            border-top: 1px solid #e5e7eb;
        }

        /* Footer */
        footer {
            background: var(--dark-color);
            color: white;
            padding: 60px 0 30px;
            margin-top: 100px;
        }

        .footer-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .footer-links a {
            color: #9ca3af;
            text-decoration: none;
            display: block;
            padding: 5px 0;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .bed-count {
                font-size: 2rem;
            }
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Notification */
        .notification {
            position: fixed;
            top: 100px;
            right: 30px;
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            display: none;
            align-items: center;
            gap: 15px;
            z-index: 1001;
            max-width: 350px;
            animation: slideIn 0.5s ease;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .notification-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .notification.success .notification-icon {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }

        .notification.error .notification-icon {
            background: rgba(220, 53, 69, 0.1);
            color: var(--danger-color);
        }

        /* Tombol Reservasi yang Lebih Menarik */
        .btn-success {
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            border: none;
            border-radius: 10px;
            padding: 8px 15px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(40, 167, 69, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(40, 167, 69, 0.4);
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }

        .btn-success:active {
            transform: translateY(0);
        }

        /* Efek shine pada tombol */
        .btn-success:hover span {
            transform: translateX(100%);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-hospital"></i>
                RSUD Daha Husada
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/')); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#availability">Ketersediaan Bed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#doctors">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#facilities">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="hero-title">Ketersediaan Tempat Tidur</h1>
                <p class="hero-subtitle">Pantau ketersediaan bed di seluruh ruangan rumah sakit kami dengan mudah</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <button class="btn btn-light btn-lg px-4 py-3" onclick="scrollToSection('availability')">
                        <i class="fas fa-bed me-2"></i>Cek Ketersediaan
                    </button>
                    <button class="btn btn-outline-light btn-lg px-4 py-3" onclick="scrollToSection('reservation')">
                        <i class="fas fa-calendar-check me-2"></i>Reservasi Online
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Section -->
    <section class="container my-5">
        <div class="row g-4" data-aos="fade-up">
            <div class="col-md-3 col-sm-6">
                <div class="stats-card text-center">
                    <div class="stats-icon mx-auto"
                        style="background: rgba(40, 167, 69, 0.1); color: var(--secondary-color);">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h3 class="stats-number" data-target="251">0</h3>
                    <p class="text-muted">Total Tempat Tidur</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stats-card text-center">
                    <div class="stats-icon mx-auto"
                        style="background: rgba(40, 167, 69, 0.1); color: var(--success-color);">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="stats-number" data-target="106">0</h3>
                    <p class="text-muted">Tersedia</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stats-card text-center">
                    <div class="stats-icon mx-auto"
                        style="background: rgba(220, 53, 69, 0.1); color: var(--danger-color);">
                        <i class="fas fa-user-injured"></i>
                    </div>
                    <h3 class="stats-number" data-target="145">0</h3>
                    <p class="text-muted">Terisi</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stats-card text-center">
                    <div class="stats-icon mx-auto"
                        style="background: rgba(255, 193, 7, 0.1); color: var(--warning-color);">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="stats-number">24/7</h3>
                    <p class="text-muted">Layanan</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Filter Section -->
    <section class="container mb-5" id="availability">
        <div class="filter-section" data-aos="fade-up">
            <h2 class="filter-title"><i class="fas fa-filter me-2"></i>Filter Ketersediaan</h2>
            <div class="row g-3">
                <div class="col-md-3">
                    <select class="form-select" id="roomFilter">
                        <option value="all">Semua Ruangan</option>
                        <option value="icu">ICU</option>
                        <option value="vip">VIP</option>
                        <option value="kelas1">Kelas 1</option>
                        <option value="kelas2">Kelas 2</option>
                        <option value="kelas3">Kelas 3</option>
                        <option value="bayi">Bayi</option>
                        <option value="isolasi">Isolasi</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" id="availabilityFilter">
                        <option value="all">Semua Ketersediaan</option>
                        <option value="high">Tersedia (>50%)</option>
                        <option value="medium">Terbatas (20-50%)</option>
                        <option value="low">Penuh (<20%)< /option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" id="priceFilter">
                        <option value="all">Semua Harga</option>
                        <option value="low">Ekonomis</option>
                        <option value="medium">Menengah</option>
                        <option value="high">Premium</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary w-100" onclick="applyFilters()">
                        <i class="fas fa-search me-2"></i>Terapkan Filter
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Bed Cards Section -->
    <section class="container mb-5">
        <div class="row g-4" id="bedCards">
            <!-- Cards will be generated by JavaScript -->
        </div>
    </section>

    <!-- Real-time Updates Section -->
    <section class="container mb-5">
        <div class="updates-section" data-aos="fade-up">
            <h2 class="updates-title"><i class="fas fa-sync-alt me-2"></i>Update Ketersediaan Real-Time</h2>
            <div id="updatesList">
                <!-- Updates will be generated by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Reservation Form -->
    <section class="container mb-5" id="reservation">
        <div class="reservation-form" data-aos="fade-up">
            <div class="form-header text-center mb-5">
                <h2 class="form-title"><i class="fas fa-calendar-plus me-2"></i>Reservasi Tempat Tidur</h2>
                <p class="text-muted">Isi formulir berikut untuk melakukan reservasi tempat tidur di rumah sakit kami
                </p>

                <!-- Stepper -->
                <div class="stepper d-flex justify-content-center mb-4">
                    <div class="step active" data-step="1">
                        <div class="step-circle">1</div>
                        <div class="step-label">Data Pasien</div>
                    </div>
                    <div class="step-connector"></div>
                    <div class="step" data-step="2">
                        <div class="step-circle">2</div>
                        <div class="step-label">Detail Reservasi</div>
                    </div>
                    <div class="step-connector"></div>
                    <div class="step" data-step="3">
                        <div class="step-circle">3</div>
                        <div class="step-label">Konfirmasi</div>
                    </div>
                </div>
            </div>

            <form id="reservationForm">
                <!-- Step 1: Data Pasien -->
                <div class="form-step active" id="step1">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0"><i class="fas fa-user me-2 text-primary"></i>Informasi Pasien</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Masukkan nama lengkap"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">No. KTP <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                        <input type="text" class="form-control" placeholder="Masukkan nomor KTP"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">No. Telepon <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        <input type="tel" class="form-control" placeholder="Masukkan nomor telepon"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Masukkan email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                                        <input type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                        <select class="form-select" required>
                                            <option value="">Pilih jenis kelamin</option>
                                            <option value="l">Laki-laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0"><i class="fas fa-file-medical me-2 text-primary"></i>Informasi Medis</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label">Keluhan Utama <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="3"
                                        placeholder="Jelaskan keluhan atau kondisi medis saat ini" required></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Riwayat Penyakit</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="diabetes">
                                        <label class="form-check-label" for="diabetes">Diabetes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="hipertensi">
                                        <label class="form-check-label" for="hipertensi">Hipertensi</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="jantung">
                                        <label class="form-check-label" for="jantung">Penyakit Jantung</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="lainnya">
                                        <label class="form-check-label" for="lainnya">Lainnya</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Alergi</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="obat">
                                        <label class="form-check-label" for="obat">Obat-obatan</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="makanan">
                                        <label class="form-check-label" for="makanan">Makanan</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="lingkungan">
                                        <label class="form-check-label" for="lingkungan">Lingkungan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-primary" onclick="nextStep(1)">
                            Lanjut <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Detail Reservasi -->
                <div class="form-step" id="step2">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0"><i class="fas fa-bed me-2 text-primary"></i>Detail Reservasi</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Jenis Ruangan <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-hospital"></i></span>
                                        <select class="form-select" id="roomType" required>
                                            <option value="">Pilih ruangan</option>
                                            <option value="icu">ICU - Intensive Care Unit</option>
                                            <option value="vip">VIP - Very Important Person</option>
                                            <option value="kelas1">Kelas 1</option>
                                            <option value="kelas2">Kelas 2</option>
                                            <option value="kelas3">Kelas 3</option>
                                            <option value="bayi">Bayi</option>
                                            <option value="isolasi">Isolasi</option>
                                        </select>
                                    </div>
                                    <div class="form-text">Pilih jenis ruangan sesuai kebutuhan medis</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Tanggal Masuk <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        <input type="date" class="form-control" id="admissionDate" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Perkiraan Lama Rawat <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        <select class="form-select" required>
                                            <option value="">Pilih lama rawat</option>
                                            <option value="1">1 Hari</option>
                                            <option value="2">2 Hari</option>
                                            <option value="3">3 Hari</option>
                                            <option value="5">5 Hari</option>
                                            <option value="7">1 Minggu</option>
                                            <option value="14">2 Minggu</option>
                                            <option value="30">1 Bulan</option>
                                            <option value="more">Lebih dari 1 bulan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Dokter Penanggung Jawab</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                                        <select class="form-select">
                                            <option value="">Pilih dokter (opsional)</option>
                                            <option value="dr1">Dr. Ahmad Sp.PD</option>
                                            <option value="dr2">Dr. Siti Sp.JP</option>
                                            <option value="dr3">Dr. Budi Sp.An</option>
                                            <option value="dr4">Dr. Dewi Sp.OG</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0"><i class="fas fa-shield-alt me-2 text-primary"></i>Informasi Asuransi</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Memiliki Asuransi?</label>
                                    <div class="btn-group w-100" role="group">
                                        <input type="radio" class="btn-check" name="insurance" id="insuranceYes"
                                            value="yes">
                                        <label class="btn btn-outline-primary" for="insuranceYes">Ya</label>

                                        <input type="radio" class="btn-check" name="insurance" id="insuranceNo"
                                            value="no" checked>
                                        <label class="btn btn-outline-primary" for="insuranceNo">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-md-6" id="insuranceDetails" style="display: none;">
                                    <label class="form-label">Nama Asuransi</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-file-invoice"></i></span>
                                        <select class="form-select">
                                            <option value="">Pilih asuransi</option>
                                            <option value="bpjs">BPJS Kesehatan</option>
                                            <option value="allianz">Allianz</option>
                                            <option value="prudential">Prudential</option>
                                            <option value="aia">AIA</option>
                                            <option value="other">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="insuranceNumber" style="display: none;">
                                    <label class="form-label">Nomor Asuransi</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
                                        <input type="text" class="form-control" placeholder="Masukkan nomor asuransi">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" onclick="prevStep(2)">
                            <i class="fas fa-arrow-left me-2"></i> Kembali
                        </button>
                        <button type="button" class="btn btn-primary" onclick="nextStep(2)">
                            Lanjut <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 3: Konfirmasi -->
                <div class="form-step" id="step3">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0"><i class="fas fa-check-circle me-2 text-primary"></i>Konfirmasi Reservasi
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                Silakan periksa kembali data reservasi Anda sebelum mengirimkan.
                            </div>

                            <div id="reservationSummary">
                                <!-- Summary will be generated by JavaScript -->
                            </div>

                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    Saya menyetujui <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#termsModal">syarat dan ketentuan</a> yang berlaku
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="privacy">
                                <label class="form-check-label" for="privacy">
                                    Saya menyetujui <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#privacyModal">kebijakan privasi</a> rumah sakit
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" onclick="prevStep(3)">
                            <i class="fas fa-arrow-left me-2"></i> Kembali
                        </button>
                        <button type="submit" class="btn btn-success btn-lg">
                            <i class="fas fa-paper-plane me-2"></i> Kirim Reservasi
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Terms Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Syarat dan Ketentuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6>1. Pendaftaran</h6>
                    <p>Pasien atau keluarga pasien wajib mengisi formulir pendaftaran dengan data yang benar dan
                        lengkap.</p>

                    <h6>2. Pembayaran</h6>
                    <p>Pembayaran dapat dilakukan secara tunai atau menggunakan asuransi yang bekerja sama dengan rumah
                        sakit.</p>

                    <h6>3. Pembatalan</h6>
                    <p>Pembatalan reservasi dapat dilakukan paling lambat 24 jam sebelum tanggal masuk yang telah
                        ditentukan.</p>

                    <h6>4. Perubahan Jadwal</h6>
                    <p>Perubahan jadwal dapat dilakukan dengan menghubungi admin rumah sakit.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Privacy Modal -->
    <div class="modal fade" id="privacyModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kebijakan Privasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6>1. Pengumpulan Data</h6>
                    <p>Kami mengumpulkan data pribadi Anda untuk keperluan pelayanan medis dan administrasi.</p>

                    <h6>2. Penggunaan Data</h6>
                    <p>Data Anda akan digunakan untuk memberikan pelayanan terbaik dan tidak akan dibagikan kepada pihak
                        ketiga tanpa izin.</p>

                    <h6>3. Keamanan Data</h6>
                    <p>Kami menjaga keamanan data Anda dengan sistem enkripsi dan keamanan yang ketat.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="footer-title">RSUD Daha Husada</h5>
                    <p>Melayani dengan hati, menyembuhkan dengan ilmu. Rumah sakit terpercaya untuk keluarga Indonesia.
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-white fs-5"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Link Cepat</h5>
                    <div class="footer-links">
                        <a href="#">Tentang Kami</a>
                        <a href="#">Fasilitas</a>
                        <a href="#">Dokter Spesialis</a>
                        <a href="#">Karir</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Layanan</h5>
                    <div class="footer-links">
                        <a href="#">Rawat Inap</a>
                        <a href="#">Rawat Jalan</a>
                        <a href="#">IGD</a>
                        <a href="#">Laboratorium</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="footer-title">Newsletter</h5>
                    <p>Dapatkan informasi kesehatan terbaru dari kami</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email Anda">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-white">
            <div class="text-center">
                <p class="mb-0">&copy; 2023 RSUD Daha Husada. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
    <!-- Live Chat Widget -->
    <div class="chat-widget">
        <button class="chat-button" onclick="toggleChat()">
            <i class="fas fa-comments"></i>
        </button>
        <div class="chat-box" id="chatBox">
            <div class="chat-header">
                <span>Live Chat Admin</span>
                <button class="btn btn-sm btn-link text-white" onclick="toggleChat()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="chat-messages" id="chatMessages">
                <div class="mb-3">
                    <div class="d-flex align-items-start">
                        <div class="bg-light rounded p-3" style="max-width: 80%;">
                            <small class="text-muted">Admin</small>
                            <p class="mb-0">Selamat datang di RSUD Daha Husada! Ada yang bisa kami bantu?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-input">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ketik pesan..." id="chatInput">
                    <button class="btn btn-primary" onclick="sendMessage()">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Notification -->
    <div class="notification" id="notification">
        <div class="notification-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <div>
            <h6 class="mb-1">Berhasil!</h6>
            <p class="mb-0 text-muted">Data telah diperbarui</p>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });
        // Bed Data
        const bedData = [
            { id: 'icu', name: 'ICU', total: 24, available: 8, price: 'high', icon: 'fa-heart-pulse', color: '#ef4444' },
            { id: 'vip', name: 'VIP', total: 15, available: 12, price: 'high', icon: 'fa-star', color: '#f59e0b' },
            { id: 'kelas1', name: 'Kelas 1', total: 40, available: 25, price: 'medium', icon: 'fa-bed', color: '#3b82f6' },
            { id: 'kelas2', name: 'Kelas 2', total: 60, available: 18, price: 'medium', icon: 'fa-bed', color: '#3b82f6' },
            { id: 'kelas3', name: 'Kelas 3', total: 80, available: 35, price: 'low', icon: 'fa-bed', color: '#3b82f6' },
            { id: 'bayi', name: 'Bayi', total: 20, available: 5, price: 'medium', icon: 'fa-baby', color: '#8b5cf6' },
            { id: 'isolasi', name: 'Isolasi', total: 12, available: 3, price: 'high', icon: 'fa-shield-virus', color: '#6b7280' }
        ];

        // Render bed cards
        function renderBedCards(data) {
            const container = document.getElementById('bedCards');
            container.innerHTML = '';

            data.forEach((room, index) => {
                const percentage = Math.round((room.available / room.total) * 100);
                let availabilityClass = '';
                let availabilityText = '';

                if (percentage > 50) {
                    availabilityClass = 'availability-high';
                    availabilityText = 'Tersedia';
                } else if (percentage >= 20) {
                    availabilityClass = 'availability-medium';
                    availabilityText = 'Terbatas';
                } else {
                    availabilityClass = 'availability-low';
                    availabilityText = 'Penuh';
                }

                const card = `
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="${index * 100}">
                        <div class="bed-card">
                            <div class="bed-card-header text-center">
                                <i class="fas ${room.icon} bed-icon"></i>
                                <h4>${room.name}</h4>
                            </div>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="bed-count ${availabilityClass}">${room.available}</div>
                                    <p class="text-muted">Tersedia dari ${room.total} bed</p>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: ${100 - percentage}%; background-color: ${room.color};" 
                                             data-percent="${100 - percentage}%"></div>
                                    </div>
                                    <span class="availability-badge ${availabilityClass}">${availabilityText} (${percentage}%)</span>
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-outline-success btn-sm w-100 mb-2" onclick="showDetails('${room.id}')">
                                             <i class="fas fa-info-circle me-1"></i> Detail
                                    </button>
                                    <button class="btn btn-success btn-sm w-100 mb-2 position-relative overflow-hidden" onclick="reserveBed('${room.id}')">
                                              <i class="fas fa-calendar-check me-1"></i> Reservasi
                                             <span class="position-absolute top-0 start-0 w-100 h-100 bg-white opacity-25" style="transform: translateX(-100%); transition: transform 0.6s;"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                container.innerHTML += card;
            });

            updateStats(data);
        }

        // Update statistics
        function updateStats(data) {
            const total = data.reduce((sum, room) => sum + room.total, 0);
            const available = data.reduce((sum, room) => sum + room.available, 0);
            const occupied = total - available;

            animateValue('totalBeds', 0, total, 2000);
            animateValue('availableBeds', 0, available, 2000);
            animateValue('occupiedBeds', 0, occupied, 2000);
        }

        // Animate numbers
        function animateValue(id, start, end, duration) {
            const element = document.querySelector(`[data-target="${end}"]`);
            if (!element) return;

            const range = end - start;
            const increment = end > start ? 1 : -1;
            const stepTime = Math.abs(Math.floor(duration / range));
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                element.textContent = current;
                if (current === end) {
                    clearInterval(timer);
                }
            }, stepTime);
        }

        // Apply filters
        function applyFilters() {
            const roomFilter = document.getElementById('roomFilter').value;
            const availabilityFilter = document.getElementById('availabilityFilter').value;
            const priceFilter = document.getElementById('priceFilter').value;

            let filteredData = [...bedData];

            if (roomFilter !== 'all') {
                filteredData = filteredData.filter(room => room.id === roomFilter);
            }

            if (availabilityFilter !== 'all') {
                filteredData = filteredData.filter(room => {
                    const percentage = (room.available / room.total) * 100;

                    if (availabilityFilter === 'high') return percentage > 50;
                    if (availabilityFilter === 'medium') return percentage >= 20 && percentage <= 50;
                    if (availabilityFilter === 'low') return percentage < 20;

                    return true;
                });
            }

            if (priceFilter !== 'all') {
                filteredData = filteredData.filter(room => room.price === priceFilter);
            }

            renderBedCards(filteredData);
            showNotification('Filter berhasil diterapkan!', 'success');
        }

        // Show room details
        function showDetails(roomId) {
            const room = bedData.find(r => r.id === roomId);
            if (room) {
                const percentage = Math.round((room.available / room.total) * 100);
                let availabilityClass = '';
                let availabilityText = '';
                let availabilityIcon = '';

                if (percentage > 50) {
                    availabilityClass = 'text-success';
                    availabilityText = 'Tersedia';
                    availabilityIcon = 'fa-check-circle';
                } else if (percentage >= 20) {
                    availabilityClass = 'text-warning';
                    availabilityText = 'Terbatas';
                    availabilityIcon = 'fa-exclamation-circle';
                } else {
                    availabilityClass = 'text-danger';
                    availabilityText = 'Penuh';
                    availabilityIcon = 'fa-times-circle';
                }

                const priceText = room.price === 'high' ? 'Premium' : room.price === 'medium' ? 'Menengah' : 'Ekonomis';
                const priceIcon = room.price === 'high' ? 'fa-crown' : room.price === 'medium' ? 'fa-star' : 'fa-tag';
                const priceColor = room.price === 'high' ? 'text-warning' : room.price === 'medium' ? 'text-info' : 'text-success';

                const details = `
            <div class="room-detail-header text-center mb-4">
                <div class="room-icon mx-auto mb-3" style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); display: flex; align-items: center; justify-content: center;">
                    <i class="fas ${room.icon} text-white" style="font-size: 2.5rem;"></i>
                </div>
                <h3 class="mb-1">${room.name}</h3>
                <span class="badge ${availabilityClass} bg-light fs-6">
                    <i class="fas ${availabilityIcon} me-1"></i> ${availabilityText} (${percentage}%)
                </span>
            </div>
            
            <div class="row mb-4">
                <div class="col-6 text-center">
                    <div class="stat-box p-3 bg-light rounded">
                        <div class="text-muted small">Total Bed</div>
                        <div class="fs-4 fw-bold">${room.total}</div>
                    </div>
                </div>
                <div class="col-6 text-center">
                    <div class="stat-box p-3 bg-light rounded">
                        <div class="text-muted small">Tersedia</div>
                        <div class="fs-4 fw-bold ${availabilityClass}">${room.available}</div>
                    </div>
                </div>
            </div>
            
            <div class="mb-4">
                <div class="d-flex justify-content-between mb-1">
                    <span class="text-muted">Keterisian</span>
                    <span class="fw-bold">${100 - percentage}%</span>
                </div>
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar ${percentage < 20 ? 'bg-danger' : percentage < 50 ? 'bg-warning' : 'bg-success'}" 
                         style="width: ${100 - percentage}%"></div>
                </div>
            </div>
            
            <div class="mb-4">
                <h5 class="mb-3"><i class="fas fa-concierge-bell me-2 text-primary"></i>Fasilitas</h5>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="facility-item d-flex align-items-center p-2 bg-light rounded">
                            <i class="fas fa-snowflake text-primary me-2"></i>
                            <span>AC</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="facility-item d-flex align-items-center p-2 bg-light rounded">
                            <i class="fas fa-tv text-primary me-2"></i>
                            <span>TV</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="facility-item d-flex align-items-center p-2 bg-light rounded">
                            <i class="fas fa-bath text-primary me-2"></i>
                            <span>Kamar Mandi Dalam</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="facility-item d-flex align-items-center p-2 bg-light rounded">
                            <i class="fas fa-wifi text-primary me-2"></i>
                            <span>WiFi Gratis</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="facility-item d-flex align-items-center p-2 bg-light rounded">
                            <i class="fas fa-phone-alt text-primary me-2"></i>
                            <span>Telepon</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="facility-item d-flex align-items-center p-2 bg-light rounded">
                            <i class="fas fa-user-md text-primary me-2"></i>
                            <span>Layanan 24 Jam</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mb-4">
                <h5 class="mb-3"><i class="fas fa-info-circle me-2 text-primary"></i>Informasi Tambahan</h5>
                <div class="info-item d-flex justify-content-between align-items-center p-3 bg-light rounded mb-2">
                    <div><i class="fas ${priceIcon} ${priceColor} me-2"></i> Kategori Harga</div>
                    <div class="fw-bold ${priceColor}">${priceText}</div>
                </div>
                <div class="info-item d-flex justify-content-between align-items-center p-3 bg-light rounded">
                    <div><i class="fas fa-clock text-primary me-2"></i> Estimasi Check-in</div>
                    <div class="fw-bold">14:00 WIB</div>
                </div>
                <div class="info-item d-flex justify-content-between align-items-center p-3 bg-light rounded">
                    <div><i class="fas fa-user-friends text-primary me-2"></i> Pengunjung Maks</div>
                    <div class="fw-bold">2 Orang</div>
                </div>
            </div>
            
            <div class="alert alert-info d-flex align-items-center" role="alert">
                <i class="fas fa-info-circle me-2"></i>
                <div>
                    Untuk informasi lebih lanjut atau reservasi, silakan hubungi admin kami melalui live chat atau formulir reservasi.
                </div>
            </div>
        `;

                // Create modal
                const modal = document.createElement('div');
                modal.className = 'modal fade';
                modal.innerHTML = `
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <h5 class="modal-title">Detail Ruangan ${room.name}</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        ${details}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-times me-1"></i> Tutup
                        </button>
                        <button type="button" class="btn btn-primary" onclick="reserveBed('${roomId}')">
                            <i class="fas fa-calendar-check me-1"></i> Reservasi Sekarang
                        </button>
                    </div>
                </div>
            </div>
        `;

                document.body.appendChild(modal);
                const bsModal = new bootstrap.Modal(modal);
                bsModal.show();

                modal.addEventListener('hidden.bs.modal', () => {
                    modal.remove();
                });
            }
        }

        // Reserve bed
        // Form step navigation
        function nextStep(currentStep) {
            // Validate current step
            if (validateStep(currentStep)) {
                document.getElementById(`step${currentStep}`).classList.remove('active');
                document.getElementById(`step${currentStep + 1}`).classList.add('active');

                // Update stepper
                document.querySelector(`.step[data-step="${currentStep}"]`).classList.add('completed');
                document.querySelector(`.step[data-step="${currentStep + 1}"]`).classList.add('active');

                // If moving to step 3, generate summary
                if (currentStep === 2) {
                    generateSummary();
                }
            }
        }

        function prevStep(currentStep) {
            document.getElementById(`step${currentStep}`).classList.remove('active');
            document.getElementById(`step${currentStep - 1}`).classList.add('active');

            // Update stepper
            document.querySelector(`.step[data-step="${currentStep}"]`).classList.remove('active');
            document.querySelector(`.step[data-step="${currentStep - 1}"]`).classList.remove('completed');
        }

        function validateStep(step) {
            let isValid = true;
            const currentStepElement = document.getElementById(`step${step}`);
            const requiredFields = currentStepElement.querySelectorAll('[required]');

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                showNotification('Harap lengkapi semua field yang wajib diisi', 'error');
            }

            return isValid;
        }

        // Generate reservation summary
        function generateSummary() {
            const formData = new FormData(document.getElementById('reservationForm'));
            const summaryContainer = document.getElementById('reservationSummary');

            const roomType = document.getElementById('roomType');
            const admissionDate = document.getElementById('admissionDate');

            const summary = `
        <div class="summary-item">
            <div class="row">
                <div class="col-md-4 summary-label">Nama Pasien:</div>
                <div class="col-md-8 summary-value">${formData.get('fullName') || '-'}</div>
            </div>
        </div>
        <div class="summary-item">
            <div class="row">
                <div class="col-md-4 summary-label">No. Telepon:</div>
                <div class="col-md-8 summary-value">${formData.get('phone') || '-'}</div>
            </div>
        </div>
        <div class="summary-item">
            <div class="row">
                <div class="col-md-4 summary-label">Jenis Ruangan:</div>
                <div class="col-md-8 summary-value">${roomType.options[roomType.selectedIndex].text}</div>
            </div>
        </div>
        <div class="summary-item">
            <div class="row">
                <div class="col-md-4 summary-label">Tanggal Masuk:</div>
                <div class="col-md-8 summary-value">${formatDate(admissionDate.value)}</div>
            </div>
        </div>
        <div class="summary-item">
            <div class="row">
                <div class="col-md-4 summary-label">Perkiraan Biaya:</div>
                <div class="col-md-8 summary-value">Rp ${calculateEstimatedCost(roomType.value)}</div>
            </div>
        </div>
    `;

            summaryContainer.innerHTML = summary;
        }

        // Calculate estimated cost
        function calculateEstimatedCost(roomType) {
            const costs = {
                'icu': 2500000,
                'vip': 1500000,
                'kelas1': 1000000,
                'kelas2': 750000,
                'kelas3': 500000,
                'bayi': 800000,
                'isolasi': 2000000
            };

            return (costs[roomType] || 0).toLocaleString('id-ID');
        }

        // Handle insurance radio buttons
        document.addEventListener('DOMContentLoaded', () => {
            const insuranceYes = document.getElementById('insuranceYes');
            const insuranceNo = document.getElementById('insuranceNo');
            const insuranceDetails = document.getElementById('insuranceDetails');
            const insuranceNumber = document.getElementById('insuranceNumber');

            insuranceYes.addEventListener('change', () => {
                if (insuranceYes.checked) {
                    insuranceDetails.style.display = 'block';
                    insuranceNumber.style.display = 'block';
                }
            });

            insuranceNo.addEventListener('change', () => {
                if (insuranceNo.checked) {
                    insuranceDetails.style.display = 'none';
                    insuranceNumber.style.display = 'none';
                }
            });

            // Set minimum date to today
            const dateInputs = document.querySelectorAll('input[type="date"]');
            const today = new Date().toISOString().split('T')[0];
            dateInputs.forEach(input => {
                input.setAttribute('min', today);
            });
        });

        // Update form submission
        document.getElementById('reservationForm')?.addEventListener('submit', (e) => {
            e.preventDefault();

            // Check if terms and privacy are accepted
            const termsChecked = document.getElementById('terms').checked;
            const privacyChecked = document.getElementById('privacy').checked;

            if (!termsChecked || !privacyChecked) {
                showNotification('Harap setujui syarat dan ketentuan serta kebijakan privasi', 'error');
                return;
            }

            // Show success message
            showNotification('Reservasi berhasil dikirim! Kami akan menghubungi Anda segera.', 'success');

            // Reset form
            e.target.reset();

            // Reset stepper
            document.querySelectorAll('.step').forEach(step => {
                step.classList.remove('active', 'completed');
            });
            document.querySelector('.step[data-step="1"]').classList.add('active');

            // Reset form steps
            document.querySelectorAll('.form-step').forEach(step => {
                step.classList.remove('active');
            });
            document.getElementById('step1').classList.add('active');

            // Reset insurance fields
            document.getElementById('insuranceDetails').style.display = 'none';
            document.getElementById('insuranceNumber').style.display = 'none';
        });

        // Toggle chat
        function toggleChat() {
            const chatBox = document.getElementById('chatBox');
            chatBox.style.display = chatBox.style.display === 'flex' ? 'none' : 'flex';
        }

        // Send chat message
        function sendMessage() {
            const input = document.getElementById('chatInput');
            const message = input.value.trim();

            if (message) {
                const messagesContainer = document.getElementById('chatMessages');

                // Add user message
                const userMessage = `
                    <div class="mb-3">
                        <div class="d-flex align-items-start justify-content-end">
                            <div class="bg-primary text-white rounded p-3" style="max-width: 80%;">
                                <small class="text-white-50">Anda</small>
                                <p class="mb-0">${message}</p>
                            </div>
                        </div>
                    </div>
                `;

                messagesContainer.innerHTML += userMessage;
                input.value = '';
                messagesContainer.scrollTop = messagesContainer.scrollHeight;

                // Simulate admin response
                setTimeout(() => {
                    const adminResponse = `
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <div class="bg-light rounded p-3" style="max-width: 80%;">
                                    <small class="text-muted">Admin</small>
                                    <p class="mb-0">Terima kasih atas pesan Anda. Kami akan segera membantu Anda. harap tunggu admin kami</p>
                                </div>
                            </div>
                        </div>
                    `;

                    messagesContainer.innerHTML += adminResponse;
                    messagesContainer.scrollTop = messagesContainer.scrollHeight;
                }, 1000);
            }
        }

        // Show notification
        function showNotification(message, type = 'success') {
            const notification = document.getElementById('notification');
            notification.className = `notification ${type}`;
            notification.querySelector('p').textContent = message;
            notification.style.display = 'flex';

            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
        }

        // Scroll to section
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Handle reservation form
        document.getElementById('reservationForm')?.addEventListener('submit', (e) => {
            e.preventDefault();
            showNotification('Reservasi berhasil dikirim! Kami akan menghubungi Anda segera.', 'success');
            e.target.reset();
        });

        // Handle chat input enter key
        document.getElementById('chatInput')?.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // Generate real-time updates
        function generateUpdates() {
            const updatesList = document.getElementById('updatesList');
            updatesList.innerHTML = '';

            const updates = [
                { time: 'Baru saja', content: 'Ruangan VIP tersedia 12 bed dari total 15 bed' },
                { time: '5 menit yang lalu', content: 'Ruangan Kelas 1 tersedia 25 bed dari total 40 bed' },
                { time: '12 menit yang lalu', content: 'Ruangan ICU tersedia 8 bed dari total 24 bed' },
                { time: '20 menit yang lalu', content: 'Ruangan Isolasi tersedia 3 bed dari total 12 bed' },
                { time: '30 menit yang lalu', content: 'Ruangan Bayi tersedia 5 bed dari total 20 bed' }
            ];

            updates.forEach(update => {
                const updateItem = `
                    <div class="update-item">
                        <div class="update-time">${update.time}</div>
                        <div class="update-content">${update.content}</div>
                    </div>
                `;
                updatesList.innerHTML += updateItem;
            });
        }

        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            renderBedCards(bedData);
            generateUpdates();
            initMap();

            // Auto refresh data every 30 seconds
            setInterval(() => {
                // Simulate data changes
                bedData.forEach(room => {
                    const change = Math.floor(Math.random() * 5) - 2;
                    room.available = Math.max(0, Math.min(room.total, room.available + change));
                });

                renderBedCards(bedData);
                generateUpdates();
                showNotification('Data telah diperbarui otomatis', 'success');
            }, 30000);
        });

        // Add smooth reveal animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });


        // Fungsi reserveBed yang diperbarui
        function reserveBed(roomId) {
            const room = bedData.find(r => r.id === roomId);
            if (room) {
                // Scroll ke bagian reservasi
                scrollToSection('reservation');

                // Tunggu sebentar agar halaman selesai scroll
                setTimeout(() => {
                    // Pilih jenis ruangan yang sesuai
                    const roomSelect = document.getElementById('roomType');
                    if (roomSelect) {
                        roomSelect.value = roomId;

                        // Tambahkan efek highlight pada elemen yang dipilih
                        roomSelect.classList.add('border-success', 'border-2');
                        setTimeout(() => {
                            roomSelect.classList.remove('border-success', 'border-2');
                        }, 2000);
                    }

                    // Fokus ke nama pasien untuk memudahkan pengisian
                    const nameInput = document.querySelector('#step1 input[type="text"]');
                    if (nameInput) {
                        nameInput.focus();
                    }

                    // Tampilkan notifikasi
                    showNotification(`Silakan lengkapi form reservasi untuk ruangan ${room.name}`, 'success');
                }, 500);
            }
        }
    </script>

    <script>

        
        document.addEventListener('DOMContentLoaded', function() {
  // Cek dukungan browser
  if (!('speechSynthesis' in window)) {
    console.log('Browser tidak mendukung Web Speech API');
    return;
  }

  const synth = window.speechSynthesis;
  const speechIndicator = document.getElementById('speechIndicator');
  let currentUtterance = null;
  let selectedTextRange = null;
  let isProcessing = false;
  let hoverTimeout = null;

  // Fungsi untuk mendapatkan teks dari elemen
  function getElementText(element) {
    // 1. Cek data-speak attribute
    if (element.hasAttribute('data-speak')) {
      return element.getAttribute('data-speak');
    }
    
    // 2. Cek aria-label
    if (element.hasAttribute('aria-label')) {
      return element.getAttribute('aria-label');
    }
    
    // 3. Cek title attribute
    if (element.hasAttribute('title')) {
      return element.getAttribute('title');
    }
    
    // 4. Cek teks dalam elemen
    let text = element.textContent || element.innerText || '';
    text = text.trim();
    
    // 5. Jika masih kosong, cek children
    if (!text && element.children.length > 0) {
      // Cari elemen dengan teks
      for (let child of element.children) {
        const childText = getElementText(child);
        if (childText) return childText;
      }
    }
    
    // 6. Untuk ikon, cek class atau id
    if (!text) {
      const classList = Array.from(element.classList);
      const id = element.id;
      
      // Mapping class/id ke teks
      const iconMap = {
        'home': 'Beranda',
        'menu': 'Menu',
        'search': 'Cari',
        'user': 'Pengguna',
        'cart': 'Keranjang',
        'settings': 'Pengaturan',
        'close': 'Tutup',
        'back': 'Kembali',
        'next': 'Selanjutnya',
        'prev': 'Sebelumnya',
        'play': 'Main',
        'pause': 'Jeda',
        'stop': 'Berhenti',
        'save': 'Simpan',
        'edit': 'Edit',
        'delete': 'Hapus',
        'add': 'Tambah',
        'submit': 'Kirim',
        'cancel': 'Batal',
        'login': 'Masuk',
        'logout': 'Keluar',
        'signup': 'Daftar'
      };
      
      // Cek class
      for (let cls of classList) {
        if (iconMap[cls]) return iconMap[cls];
      }
      
      // Cek id
      if (iconMap[id]) return iconMap[id];
    }
    
    return text || 'Tombol';
  }

  // Fungsi untuk menambahkan hover sound ke elemen
  function addHoverSound(element) {
    // Skip jika sudah memiliki event listener
    if (element.hasAttribute('data-hover-sound-added')) return;
    
    element.setAttribute('data-hover-sound-added', 'true');
    
    const textToSpeak = getElementText(element);
    if (!textToSpeak) return;
    
    // Saat hover masuk
    element.addEventListener('mouseenter', function() {
      // Jangan bicara jika sedang membaca teks blok
      if (isProcessing) return;
      
      // Clear timeout sebelumnya
      clearTimeout(hoverTimeout);
      
      // Tunda sedikit untuk mencegah spam
      hoverTimeout = setTimeout(() => {
        // Hentikan pembacaan hover sebelumnya jika ada
        if (synth.speaking && !currentUtterance?.isBlockText) {
          synth.cancel();
        }
        
        // Tandai ini sebagai pembicaraan hover
        const hoverUtterance = new SpeechSynthesisUtterance(textToSpeak);
        hoverUtterance.lang = 'id-ID';
        hoverUtterance.rate = 0.50;
        hoverUtterance.volume = 0.8;
        hoverUtterance.isBlockText = false;
        
        // Event listeners
        hoverUtterance.onstart = () => {
          if (speechIndicator) {
            speechIndicator.classList.add('active');
            speechIndicator.textContent = `🔊 ${textToSpeak}`;
          }
        };
        
        hoverUtterance.onend = () => {
          if (speechIndicator) {
            speechIndicator.classList.remove('active');
            speechIndicator.textContent = '🔊 Membaca...';
          }
        };
        
        synth.speak(hoverUtterance);
      }, 100);
    });
    
    // Saat hover keluar
    element.addEventListener('mouseleave', function() {
      clearTimeout(hoverTimeout);
      
      // Hanya hentikan jika ini pembicaraan hover
      if (synth.speaking && !currentUtterance?.isBlockText) {
        synth.cancel();
        if (speechIndicator) {
          speechIndicator.classList.remove('active');
          speechIndicator.textContent = '🔊 Membaca...';
        }
      }
    });
  }

  // Fungsi untuk memindai semua elemen interaktif
  function scanInteractiveElements() {
    // Selector untuk semua elemen interaktif
    const selectors = [
      'button',
      'a[href]',
      '[role="button"]',
      '[role="link"]',
      'input[type="button"]',
      'input[type="submit"]',
      'input[type="reset"]',
      '.btn',
      '.button',
      '[onclick]',
      '[data-toggle]',
      '[data-target]',
      'nav a',
      '.nav-item',
      '.menu-item',
      '.tab',
      '.accordion-header',
      '.dropdown-toggle'
    ];
    
    const elements = document.querySelectorAll(selectors.join(', '));
    
    elements.forEach(element => {
      addHoverSound(element);
    });
  }

  // Scan saat halaman dimuat
  scanInteractiveElements();

  // Observasi perubahan DOM untuk elemen dinamis
  const observer = new MutationObserver(function(mutations) {
    mutations.forEach(mutation => {
      if (mutation.addedNodes.length) {
        // Scan ulang untuk elemen baru
        scanInteractiveElements();
      }
    });
  });

  // Mulai observasi
  observer.observe(document.body, {
    childList: true,
    subtree: true
  });

  // ======================
  // FITUR BLOK TEKS
  // ======================
  
  let selectionTimeout;
  document.addEventListener('mouseup', function() {
    clearTimeout(selectionTimeout);
    
    selectionTimeout = setTimeout(() => {
      if (isProcessing) return;
      
      const selection = window.getSelection();
      const selectedText = selection.toString().trim();
      
      if (selectedText) {
        isProcessing = true;
        
        // Simpan range seleksi
        selectedTextRange = selection.getRangeAt(0);
        
        // Hentikan pembacaan sebelumnya
        if (synth.speaking) {
          synth.cancel();
        }
        
        // Hapus highlight sebelumnya
        removeHighlight();
        
        // Highlight teks
        highlightSelectedText();
        
        // Baca teks
        speakText(selectedText);
      }
    }, 300);
  });

  // Fungsi untuk membaca teks
  function speakText(text) {
    currentUtterance = new SpeechSynthesisUtterance(text);
    
    // Atur pengaturan
    currentUtterance.lang = 'id-ID';
    currentUtterance.rate = 1.0;
    currentUtterance.pitch = 1.0;
    currentUtterance.volume = 1.0;
    currentUtterance.isBlockText = true;
    
    // Event saat mulai
    currentUtterance.onstart = function() {
      if (speechIndicator) {
        speechIndicator.classList.add('active');
        speechIndicator.textContent = '🔊 Membaca teks...';
      }
    };
    
    // Event saat selesai
    currentUtterance.onend = function() {
      isProcessing = false;
      if (speechIndicator) {
        speechIndicator.classList.remove('active');
        speechIndicator.textContent = '🔊 Membaca...';
      }
      removeHighlight();
    };
    
    // Event jika error
    currentUtterance.onerror = function() {
      isProcessing = false;
      if (speechIndicator) {
        speechIndicator.classList.remove('active');
        speechIndicator.textContent = '🔊 Membaca...';
      }
      removeHighlight();
    };
    
    // Mulai pembacaan
    synth.speak(currentUtterance);
  }

  // Highlight teks yang dibaca
  function highlightSelectedText() {
    if (!selectedTextRange) return;
    
    try {
      const span = document.createElement('span');
      span.className = 'speaking';
      
      // Hapus highlight yang ada sebelumnya
      removeHighlight();
      
      // Wrap seleksi dengan span
      selectedTextRange.surroundContents(span);
    } catch (e) {
      console.log('Highlight error:', e);
    }
  }

  // Hapus highlight
  function removeHighlight() {
    const highlightedElements = document.querySelectorAll('.speaking');
    highlightedElements.forEach(el => {
      const parent = el.parentNode;
      if (parent) {
        while (el.firstChild) {
          parent.insertBefore(el.firstChild, el);
        }
        parent.removeChild(el);
      }
    });
  }

  // Hentikan saat klik di luar
  document.addEventListener('click', function(e) {
    if (synth.speaking && !e.target.closest('p, h1, h2, h3, h4, h5, h6, span, div')) {
      synth.cancel();
      isProcessing = false;
    }
  });
});


    </script>
</body>

</html><?php /**PATH /Users/bilalabdillah/Documents/klinik-laravel/resources/views/ketersediaan_bed.blade.php ENDPATH**/ ?>