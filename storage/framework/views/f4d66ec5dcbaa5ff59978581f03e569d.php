<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <title>Rumah Sakit Daha Husada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Website RS Daha Husada" name="description" />
    <meta content="Daha Husada" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <!-- Tambahkan di <head> -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Tambahkan sebelum </body> -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true  // supaya animasi hanya jalan sekali saat scroll
        });
    </script>
    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
<!-- Modern RS Daha Husada Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container-fluid">
        <div class="col-2 col-sm-2 col-md-1 d-flex justify-content-center align-items-center mb-3 mb-sm-0">
            <div class="logo-container">
                <img src="logo1.jpeg" alt="Logo Rumah Sakit" class="logo-image" />
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 1.1rem; font-weight: 500;">
                        Beranda
                    </a>
                </li>
                <!-- Profil Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1.1rem; font-weight: 500;">
                        Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Tentang Kami</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-sitemap me-2"></i>Struktur Organisasi</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-tasks me-2"></i>Tugas Pokok & Fungsi</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-users me-2"></i>Direktur & Jajaran</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-map-marker-alt me-2"></i>Alamat &
                                Lokasi</a></li>
                    </ul>
                </li>
                <!-- Pelayanan Medik Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1rem; font-weight: 500;">
                        Pelayanan medik
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="medikDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-ambulance me-2"></i>IGD</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-clinic-medical me-2"></i>Rawat Jalan</a>
                        </li>
                </li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2"></i>Rawat Inap Intensif</a>
                </li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-user-md me-2"></i>Pelayanan Bedah</a>
                </li>
            </ul>
            </li>
            <!-- Penunjang Medik Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="font-size: 1rem; font-weight: 500;">
                    Penunjang mendik
                </a>
                <ul class="dropdown-menu" aria-labelledby="penunjangDropdown">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-vial me-2"></i>Lab Patologi Klinik</a>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-x-ray me-2"></i>Radiologi</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-dumbbell me-2"></i>Rehabilitasi Medik</a>
                    </li>
                </ul>
            </li>
            <!-- Informasi Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="font-size: 1rem; font-weight: 500;">
                    Informasi
                </a>
                <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-calendar-plus me-2"></i>Pendaftaran
                            Online</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('ketersediaan_bed')); ?>"><i class="fas fa-bed me-2"></i>
                            Ketersediaan Bed</a>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-money-bill me-2"></i>Tarif Dasar</a></li>
                    <li><a class="dropdown-item" href="/doctors"><i class="fas fa-user-doctor me-2"></i>Dokter</a>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-newspaper me-2"></i>Artikel Kesehatan</a>
                    </li>
                    <li><a class="dropdown-item" href="<?php echo e(route('berita')); ?>"><i
                                class="fas fa-bullhorn me-2"></i>Berita</a></li>
                </ul>
            </li>
            <!-- PPID -->
            <li class="nav-item">
                <a class="nav-link" href="https://ppid.rsuddahahusada.jatimprov.go.id"
                    style="font-size: 1.1rem; font-weight: 500;">
                    PPID
                </a>
            </li>
            <!-- Inovasi Daha -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="inovasiDropdown" role="button">
                    Inovasi Daha
                </a>
                <ul class="dropdown-menu" aria-labelledby="inovasiDropdown">
                    <!-- Submenu LAYANAN -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" href="#">LAYANAN</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">HALO AMDA</a></li>
                            <li><a class="dropdown-item" href="#">SI DAMPING</a></li>
                            <li><a class="dropdown-item" href="#">MAKASI MAMI</a></li>
                            <li><a class="dropdown-item" href="#">INSAP</a></li>
                            <li><a class="dropdown-item" href="#">SI IMUT</a></li>
                            <li><a class="dropdown-item" href="#">DATAJAKA</a></li>
                            <li><a class="dropdown-item" href="#">BUDAYA KESELAMATAN KERJA</a></li>
                            <li><a class="dropdown-item" href="#">PADUAN</a></li>
                        </ul>
                    </li>

                    <!-- Submenu INFORMASI -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" href="#">INFORMASI</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">SI PANDAKITA</a></li>
                            <li><a class="dropdown-item" href="#">SI DWOR</a></li>
                            <li><a class="dropdown-item" href="#">PANDUAN SI PANDA KITA DAN SI DWOR</a></li>
                            <li><a class="dropdown-item" href="#">SKDR</a></li>
                            <li><a class="dropdown-item" href="#">LAPORAN SI IKM</a></li>
                            <li><a class="dropdown-item" href="#">JADWAL DOKTER</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- Pengaduan -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/pengaduan')); ?>" style="font-size: 1.1rem; font-weight: 500;">
                    Pengaduan
                </a>
            </li>
            </ul>
            <!-- Action Buttons -->
            <div class="header-btn-grp ms-lg-4 d-flex flex-row gap-2 flex-wrap">
                <div class="header-btn-grp ms-lg-4 d-flex flex-row gap-2 flex-wrap">
                    <a href="#" class="btn-custom btn-success-custom">
                        <i class="fas fa-calendar-check me-2"></i> Daftar Online
                    </a>
                    <a href="<?php echo e(route('hubungi.kami')); ?>" class="btn-custom btn-primary-custom">
                        <i class="fab fa-whatsapp me-2"></i> Hubungi Kami
                    </a>
                </div>
                <a href="<?php echo e(route('patient.portal')); ?>" style="
      background:#1E90FF; /* biru elegan */
      border:none;
      color:white;
      padding:10px 28px; /* lebih kecil dari sebelumnya */
      font-size:1rem; /* lebih kecil biar pas */
      font-weight:600;
      border-radius:10px;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      text-transform:uppercase;
      text-decoration:none;
      margin-left:100px; 
      box-shadow:0 3px 8px rgba(0,0,0,0.25);
      transition:all 0.3s ease;
   " onmouseover="this.style.background='#187bcd'; this.style.boxShadow='0 5px 12px rgba(0,0,0,0.35)';"
                    onmouseout="this.style.background='#1E90FF'; this.style.boxShadow='0 3px 8px rgba(0,0,0,0.25)';">
                    <i class="fas fa-user-md me-2"></i> PATIENT PORTAL
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="hero-overlay"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content" data-aos="fade-right" data-aos-duration="1000">
                    <div class="hero-badge mb-4">
                        <span class="badge">
                            <i class="fas fa-award"></i>
                            69+ Tahun Pengalaman
                        </span>
                    </div>
                    <h1 class="hero-title mb-4 text-white">
                        <span class="text-white">Selamat Datang</span> di Website Resmi Daerah Umum
                        <span id="typing-effect" class="typing-effect text-warning"></span>
                    </h1>
                    <p class="hero-description">
                        Memberikan pelayanan kesehatan terbaik dengan teknologi modern dan tenaga medis berpengalaman
                        untuk keluarga Indonesia.
                    </p>
                    <div class="hero-actions d-flex flex-wrap gap-3">
                        <a href="#register" class="btn btn-primary" data-aos="fade-up" data-aos-delay="200">
                            <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
                        </a>
                        <a href="#appointment" class="btn btn-outline-primary" data-aos="fade-up" data-aos-delay="400">
                            <i class="fas fa-calendar-check me-2"></i>Book Appointment
                        </a>
                    </div>
                    <div class="trust-indicators mt-5" data-aos="fade-up" data-aos-delay="600">
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="trust-item">
                                    <h4 class="text-warning mb-1">24/7</h4>
                                    <small>Emergency Care</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="trust-item">
                                    <h4 class="text-success mb-1">100+</h4>
                                    <small>Expert Doctors</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="trust-item">
                                    <h4 class="text-warning mb-1">50K+</h4>
                                    <small>Happy Patients</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image-wrapper position-relative" data-aos="fade-left" data-aos-duration="1000">
                    <img src="https://images.unsplash.com/photo-1551190822-a9333d879b1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Daha Husada Hospital" class="img-fluid hero-main-image zoom-in-out">

                    <!-- Floating Cards -->
                    <div class="floating-card floating-card-1" data-aos="fade-up" data-aos-delay="300">
                        <div class="card border-0">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-circle bg-success me-3">
                                        <i class="fas fa-heartbeat text-white"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Heart Rate</h6>
                                        <small class="text-muted">98 BPM</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="floating-card floating-card-2" data-aos="fade-up" data-aos-delay="500">
                        <div class="card border-0">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon-circle bg-primary me-3">
                                        <i class="fas fa-user-md text-white"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Available Now</h6>
                                        <small class="text-muted">15 Doctors Online</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Animated Background Elements -->
    <div class="hero-shapes">
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="shape-3"></div>
    </div>
</section>

<!-- Doctors Section -->
<section class="doctors-section py-5" id="doctors">
    <div class="container">
        <div class="floating-elements">
            <i class="fas fa-stethoscope floating-icon"></i>
            <i class="fas fa-heartbeat floating-icon"></i>
            <i class="fas fa-user-md floating-icon"></i>
            <i class="fas fa-hospital floating-icon"></i>
        </div>

        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">Dokter Spesialis Rumah Sakit Daha Husada
            </h2>
            <p class="section-description" data-aos="fade-up" data-aos-delay="200">
                Berikut adalah daftar dokter spesialis yang siap melayani Anda dengan keahlian dan pengalaman terbaik
                untuk kesehatan optimal keluarga.
            </p>
        </div>
        <div class="doctors-grid">
            <!-- Dokter 1 -->
            <div class="doctor-card" data-aos="zoom-in" data-aos-delay="100">
                <div class="doctor-image-wrapper">
                    <img src="https://randomuser.me/api/portraits/men/11.jpg" class="doctor-image"
                        alt="dr. Andi Prasetyo">
                    <div class="doctor-overlay">
                        <button class="btn btn-light view-profile-btn" onclick="showDoctorProfile(0)">
                            <i class="fas fa-eye me-2"></i>Lihat Profil
                        </button>
                    </div>
                </div>
                <div class="doctor-info">
                    <h5>dr. Andi Prasetyo, Sp.PD</h5>
                    <p class="doctor-specialty">Spesialis Penyakit Dalam</p>
                </div>
            </div>
            <!-- Dokter 2 -->
            <div class="doctor-card" data-aos="zoom-in" data-aos-delay="200">
                <div class="doctor-image-wrapper">
                    <img src="https://randomuser.me/api/portraits/women/12.jpg" class="doctor-image"
                        alt="dr. Nina Kartika">
                    <div class="doctor-overlay">
                        <button class="btn btn-light view-profile-btn" onclick="showDoctorProfile(1)">
                            <i class="fas fa-eye me-2"></i>Lihat Profil
                        </button>
                    </div>
                </div>
                <div class="doctor-info">
                    <h5>dr. Nina Kartika, Sp.JP</h5>
                    <p class="doctor-specialty">Spesialis Jantung & Pembuluh Darah</p>
                </div>
            </div>
            <!-- Dokter 3 -->
            <div class="doctor-card" data-aos="zoom-in" data-aos-delay="300">
                <div class="doctor-image-wrapper">
                    <img src="https://randomuser.me/api/portraits/men/15.jpg" class="doctor-image"
                        alt="dr. Rahman Fadli">
                    <div class="doctor-overlay">
                        <button class="btn btn-light view-profile-btn" onclick="showDoctorProfile(2)">
                            <i class="fas fa-eye me-2"></i>Lihat Profil
                        </button>
                    </div>
                </div>
                <div class="doctor-info">
                    <h5>dr. Rahman Fadli, Sp.OG</h5>
                    <p class="doctor-specialty">Spesialis Kandungan & Kebidanan</p>
                </div>
            </div>
        </div>
        <!-- Ubah dari -->
        <div class="text-center mt-3">
            <a href="/doctors" class="view-all-btn btn btn-primary">
                <i class="fas fa-users me-2"></i> Lihat Semua Dokter
            </a>
        </div>
    </div>
</section>

<!-- Instagram Posts -->

<body>
    <div class="center-container">
        <h1 class="page-title">
            <i class="fab fa-instagram"></i>Instagram Posts
        </h1>

        <div class="carousel-container">
            <div class="carousel-nav prev" onclick="moveCarousel(-1)">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="carousel-nav next" onclick="moveCarousel(1)">
                <i class="fas fa-chevron-right"></i>
            </div>

            <div class="posts-wrapper" id="postsWrapper">



            </div>
        </div>
    </div>

    <!-- Berita terkini -->
    <section class="berita-preview">
        <div class="berita-header">
            <h2>Berita Terkini</h2>
            <p>Tetap update dengan informasi kesehatan terbaru dari RSUD Daha Husada</p>
        </div>
        <div class="berita-grid" id="beritaGrid">
            <!-- Berita akan dimuat di sini melalui JavaScript -->
        </div>
        <div class="berita-more-container">
            <a href="<?php echo e(route('berita')); ?>" class="berita-more-button" style="
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 14px 32px;
        border-radius: 50px;
        font-size: 1rem;
        font-weight: 600;
        background: linear-gradient(45deg, #0066ff, #00c9ff);
        color: white;
        text-decoration: none;
        box-shadow: 0 4px 15px rgba(0, 102, 255, 0.2);
    ">
                <span>Lihat Semua Berita</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <!-- Easy Solution Section -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">4 Langkah Mudah Mendapat Perawatan Terbaik</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="solution-card">
                        <div class="card">
                            <div class="icon-box mx-auto mb-4">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4>Registrasi Online</h4>
                            <p>Daftarkan diri Anda dengan mudah melalui sistem online kami yang aman dan terpercaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="solution-card">
                        <div class="card">
                            <div class="icon-box mx-auto mb-4">
                                <i class="fas fa-headphones-simple"></i>
                            </div>
                            <h4>Konsultasi</h4>
                            <p>Dapatkan konsultasi awal dengan tim medis profesional kami kapan saja Anda butuhkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="solution-card">
                        <div class="card">
                            <div class="icon-box mx-auto mb-4">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <h4>Jadwal Appointment</h4>
                            <p>Atur jadwal kunjungan Anda dengan fleksibel sesuai ketersediaan dokter spesialis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="solution-card">
                        <div class="card">
                            <div class="icon-box mx-auto mb-4">
                                <i class="fas fa-check-double"></i>
                            </div>
                            <h4>Perawatan Terbaik</h4>
                            <p>Dapatkan perawatan medis terbaik dengan teknologi canggih dan pelayanan prima.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="about-count">
                                <h3 class="text-green">250+</h3>
                                <h6>Tempat Tidur Pasien</h6>
                            </div>
                        </div>
                        <div class="col-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                            <div class="about-count">
                                <h3 class="text-pink">150+</h3>
                                <h6>Dokter & Perawat</h6>
                            </div>
                        </div>
                        <div class="col-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="about-count">
                                <h3 class="text-primary">50K+</h3>
                                <h6>Pasien Bahagia</h6>
                            </div>
                        </div>
                        <div class="col-6 mb-4" data-aos="zoom-in" data-aos-delay="400">
                            <div class="about-count">
                                <h3 class="text-blue">25+</h3>
                                <h6>Tahun Pengalaman</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div data-aos="fade-left" data-aos-duration="1000">
                        <h6 class="section-subtitle">Tentang Kami</h6>
                        <h2 class="section-title">Rumah Sakit Terpercaya dengan Pelayanan Prima</h2>
                        <p class="section-description text-start">
                            Dengan pengalaman lebih dari 25 tahun, Rumah Sakit Daha Husada telah menjadi pilihan utama
                            masyarakat untuk mendapatkan pelayanan kesehatan terbaik. Kami dilengkapi dengan teknologi
                            medis
                            terdepan dan tenaga medis yang berpengalaman.
                        </p>
                        <a href="#appointment" class="btn btn-primary">
                            <i class="fas fa-calendar-check me-2"></i>Book Appointment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section service-section" id="services">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-white">Kami Menawarkan Berbagai Layanan untuk Kesehatan Anda</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Kardiologi</h4>
                        <p>Pemeriksaan dan perawatan jantung oleh ahli kardiologi profesional dengan peralatan mutakhir.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4>Neurologi</h4>
                        <p>Pelayanan untuk kelainan sistem saraf dengan teknologi dan tim medis yang berpengalaman.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h4>Rawat Jalan</h4>
                        <p>Pelayanan rawat jalan yang cepat dan efisien untuk kebutuhan medis harian Anda.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <h4>Gawat Darurat</h4>
                        <p>Layanan darurat 24/7 untuk menangani berbagai kasus medis mendesak dan kritis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mitra kerjasama  -->
    <section class="section partners-section" id="partners">
        <div class="container">
            <h2 class="trusted-title">Mitra Kerjasama</h2>

            <!-- Baris 1: Bergerak ke kanan -->
            <div class="trusted-row">
                <div class="trusted-track trusted-track-right">
                    <!-- Set pertama -->
                    <div class="trusted-item">
                        <img src="/bpjs-ketenagakerjaan-seeklogo.png" alt="BPJS" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BPJS</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/bri-life-seeklogo.png" alt="BRI" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BRI</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Admedika.png" alt="Admedika" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Admedika</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Biakes Maskin.png" alt="Biakes" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Biakes</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Jasa Raharja.png" alt="Jasa Raharja" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Jasa Raharja</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Taspen.png" alt="Taspen" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Taspen</div>
                    </div>

                    <!-- Set kedua (duplikat persis) -->
                    <div class="trusted-item">
                        <img src="/bpjs-ketenagakerjaan-seeklogo.png" alt="BPJS" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BPJS</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/bri-life-seeklogo.png" alt="BRI" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BRI</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Admedika.png" alt="Admedika" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Admedika</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Biakes Maskin.png" alt="Biakes" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Biakes</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Jasa Raharja.png" alt="Jasa Raharja" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Jasa Raharja</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Taspen.png" alt="Taspen" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Taspen</div>
                    </div>
                </div>
            </div>

            <!-- Baris 2: Bergerak ke kiri -->
            <div class="trusted-row">
                <div class="trusted-track trusted-track-left">
                    <!-- Set pertama -->
                    <div class="trusted-item">
                        <img src="/bpjs-ketenagakerjaan-seeklogo.png" alt="BPJS" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BPJS</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/bri-life-seeklogo.png" alt="BRI" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BRI</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Admedika.png" alt="Admedika" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Admedika</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Biakes Maskin.png" alt="Biakes" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Biakes</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Jasa Raharja.png" alt="Jasa Raharja" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Jasa Raharja</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Taspen.png" alt="Taspen" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Taspen</div>
                    </div>

                    <!-- Set kedua (duplikat persis) -->
                    <div class="trusted-item">
                        <img src="/bpjs-ketenagakerjaan-seeklogo.png" alt="BPJS" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BPJS</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/bri-life-seeklogo.png" alt="BRI" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BRI</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Admedika.png" alt="Admedika" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Admedika</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Biakes Maskin.png" alt="Biakes" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Biakes</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Jasa Raharja.png" alt="Jasa Raharja" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Jasa Raharja</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Taspen.png" alt="Taspen" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Taspen</div>
                    </div>
                </div>
            </div>

            <!-- Baris 3: Bergerak ke kanan -->
            <div class="trusted-row">
                <div class="trusted-track trusted-track-right">
                    <!-- Set pertama -->
                    <div class="trusted-item">
                        <img src="/bri-life-seeklogo.png" alt="BRI" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BRI</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Admedika.png" alt="Admedika" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Admedika</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Biakes Maskin.png" alt="Biakes" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Biakes</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Jasa Raharja.png" alt="Jasa Raharja" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Jasa Raharja</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Taspen.png" alt="Taspen" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Taspen</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/bpjs-ketenagakerjaan-seeklogo.png" alt="BPJS" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BPJS</div>
                    </div>

                    <!-- Set kedua (duplikat persis) -->
                    <div class="trusted-item">
                        <img src="/bri-life-seeklogo.png" alt="BRI" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BRI</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Admedika.png" alt="Admedika" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Admedika</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Biakes Maskin.png" alt="Biakes" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Biakes</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Jasa Raharja.png" alt="Jasa Raharja" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Jasa Raharja</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/Logo Taspen.png" alt="Taspen" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">Taspen</div>
                    </div>
                    <div class="trusted-item">
                        <img src="/bpjs-ketenagakerjaan-seeklogo.png" alt="BPJS" class="trusted-logo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="trusted-fallback" style="display: none;">BPJS</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="section py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-4 fw-bold text-success" data-aos="fade-up">Pertanyaan yang Sering
                Diajukan</h2>
            <div class="accordion" id="faqAccordion">
                <!-- Pertanyaan 1 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            Jam berapa layanan kunjungan pasien dibuka?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kunjungan pasien dibuka setiap hari dari pukul <strong>09.00 hingga 20.00 WIB</strong>,
                            dengan tetap memperhatikan protokol kesehatan.
                        </div>
                    </div>
                </div>
                <!-- Pertanyaan 2 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Apakah rumah sakit menerima BPJS dan asuransi lainnya?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ya, kami menerima <strong>BPJS Kesehatan</strong> dan berbagai jenis asuransi swasta
                            yang telah bekerja sama dengan rumah sakit kami.
                        </div>
                    </div>
                </div>
                <!-- Pertanyaan 3 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            Bagaimana cara mendaftar layanan rawat jalan?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Pendaftaran dapat dilakukan secara langsung di bagian pendaftaran atau melalui sistem
                            <strong>pendaftaran online</strong> di website resmi kami.
                        </div>
                    </div>
                </div>
                <!-- Pertanyaan 4 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="faq4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            Apakah tersedia layanan IGD 24 jam?
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ya, Instalasi Gawat Darurat (IGD) Rumah Sakit Daha Husada buka <strong>24 jam setiap
                                hari</strong>, termasuk hari libur nasional.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- Widget 1: About -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="100">
                            <div class="footer-logo">
                                <img src="logo.png" alt="RSUD Daha Husada Logo">
                            </div>
                            <div class="footer-about">
                                <p>RSUD Daha Husada adalah rumah sakit umum daerah yang berkomitmen memberikan pelayanan
                                    kesehatan terbaik dengan standar internasional dan teknologi medis modern.</p>
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/rsud.dh/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://x.com/search?q=%23RSUDAHAHUSADA&src=hashtag_click"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/rsud.dahahusada" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="https://www.tiktok.com/@rsud.dahahusada" target="_blank"><i
                                            class="fab fa-tiktok"></i></a>
                                    <a href="https://www.youtube.com/@rsuddahahusada6821"><i
                                            class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Widget 2: Services -->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="footer-heading">Layanan</h3>
                            <ul class="footer-links">
                                <li><a href="#">Rawat Inap</a></li>
                                <li><a href="#">Rawat Jalan</a></li>
                                <li><a href="#">IGD 24 Jam</a></li>
                                <li><a href="#">Laboratorium</a></li>
                                <li><a href="#">Radiologi</a></li>
                                <li><a href="#">Farmasi</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Widget 3: Contact & Newsletter -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="footer-heading">Kontak Kami</h3>
                            <div class="footer-contact">
                                <div class="footer-contact-item">
                                    <div class="footer-contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="footer-contact-text">
                                        Jl. Veteran No.48, Mojoroto, Kota Kediri, Jawa Timur 64112
                                    </div>
                                </div>
                                <div class="footer-contact-item">
                                    <div class="footer-contact-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="footer-contact-text">
                                        (0354) 771062
                                    </div>
                                </div>
                                <div class="footer-contact-item">
                                    <div class="footer-contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="footer-contact-text">
                                        rsuddahahusada@jatimprov.go.id
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Widget 4: Lokasi Kami -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="footer-heading">Lokasi Kami</h3>
                            <div class="footer-map">
                                <div class="map-responsive"
                                    style="border: 1px solid rgba(255,255,255,0.2); border-radius: 10px; overflow: hidden; height: 200px;">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.132245550842!2d111.9970426!3d-7.8109804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857159a94a805%3A0x7c99d01a424a2de3!2sRSUD%20DAHA%20HUSADA!5e0!3m2!1sen!2sid!4v1721800000000!5m2!1sen!2sid"
                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                                <div class="map-info mt-3">
                                    <p class="text-light mb-0"><i class="fas fa-map-marker-alt me-2"></i> Jl. Veteran
                                        No.48,
                                        Mojoroto, Kota Kediri</p>
                                    <p class="text-light mb-0"><i class="fas fa-phone-alt me-2"></i> (0354) 771062</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <div class="footer-copyright">
                        &copy; 2025/2026 RSUD Daha Husada. All Rights Reserved.
                        <a href="https://portofolio-bilaldev.netlify.app/" target="_blank"
                            style="text-decoration: none;">
                            <span style="background: linear-gradient(135deg, #4facfe, #00f2fe);
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;
       font-weight: bold;">
                                By Bilal
                            </span>
                        </a>
                    </div>
                    <div class="footer-bottom-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Doctor Profile Modal -->
    <div class="modal fade" id="doctorProfileModal" tabindex="-1" aria-labelledby="doctorProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="doctorProfileModalLabel">Profil Dokter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <img id="modalDoctorImage" src="" class="rounded-circle" width="150" height="150" alt="">
                        <h4 id="modalDoctorName" class="mt-3"></h4>
                        <span id="modalDoctorTitle" class="badge bg-primary"></span>
                    </div>
                    <div class="doctor-details">
                        <div class="mb-3">
                            <h6>Spesialisasi</h6>
                            <p id="modalDoctorSpecialty"></p>
                        </div>
                        <div class="mb-3">
                            <h6>Deskripsi</h6>
                            <p id="modalDoctorDescription"></p>
                        </div>
                        <div class="mb-3">
                            <h6>Pengalaman</h6>
                            <p id="modalDoctorExperience"></p>
                        </div>
                        <div class="mb-3">
                            <h6>Jadwal Praktik</h6>
                            <p id="modalDoctorSchedule"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Jadwal Janji</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JavaScript untuk animasi footer saat scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Animasi footer widget saat scroll
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                    }
                });
            }, observerOptions);

            const footerWidgets = document.querySelectorAll('.footer-widget');
            footerWidgets.forEach(widget => {
                observer.observe(widget);
            });

            // Form newsletter
            const newsletterForm = document.querySelector('.footer-newsletter-form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function (e) {
                    e.preventDefault();
                    const emailInput = this.querySelector('.footer-newsletter-input');
                    const email = emailInput.value;

                    if (email) {
                        // Simulasi pengiriman form
                        const button = this.querySelector('.footer-newsletter-btn');
                        const originalText = button.textContent;
                        button.textContent = 'Subscribing...';
                        button.disabled = true;

                        setTimeout(() => {
                            button.textContent = 'Subscribed!';
                            emailInput.value = '';

                            setTimeout(() => {
                                button.textContent = originalText;
                                button.disabled = false;
                            }, 2000);
                        }, 1500);
                    }
                });
            }
        });
    </script>
    <script>
        // Data dokter
        const doctors = [
            {
                name: "dr. Andi Prasetyo, Sp.PD",
                title: "Spesialis Penyakit Dalam",
                image: "https://randomuser.me/api/portraits/men/11.jpg",
                specialty: "Penyakit Dalam",
                description: "Spesialis dalam diagnosis dan pengobatan penyakit organ dalam seperti diabetes, hipertensi, dan gangguan pencernaan.",
                experience: "15 tahun",
                schedule: "Senin-Jumat: 09.00-14.00"
            },
            {
                name: "dr. Nina Kartika, Sp.JP",
                title: "Spesialis Jantung & Pembuluh Darah",
                image: "https://randomuser.me/api/portraits/women/12.jpg",
                specialty: "Jantung & Pembuluh Darah",
                description: "Ahli dalam pemeriksaan jantung, kateterisasi jantung, dan pengelolaan penyakit jantung koroner.",
                experience: "12 tahun",
                schedule: "Selasa-Kamis: 10.00-15.00"
            },
            {
                name: "dr. Rahman Fadli, Sp.OG",
                title: "Spesialis Kandungan & Kebidanan",
                image: "https://randomuser.me/api/portraits/men/15.jpg",
                specialty: "Kandungan & Kebidanan",
                description: "Spesialis dalam kehamilan, persalinan, dan kesehatan reproduksi wanita.",
                experience: "18 tahun",
                schedule: "Senin, Rabu, Jumat: 08.00-13.00"
            },
        ];

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 120
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.custom-navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add active state to current page
        document.addEventListener('DOMContentLoaded', function () {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });

        // Typing effect for hero title
        document.addEventListener('DOMContentLoaded', function () {
            const text = "Rumah Sakit Daha Husada!";
            const typingElement = document.getElementById('typing-effect');
            let index = 0;

            function typeText() {
                if (index < text.length) {
                    typingElement.textContent += text.charAt(index);
                    index++;
                    setTimeout(typeText, 100);
                }
            }

            typeText();
        });

        // Fungsi untuk menampilkan profil dokter
        function showDoctorProfile(index) {
            const doctor = doctors[index];

            document.getElementById('modalDoctorImage').src = doctor.image;
            document.getElementById('modalDoctorImage').alt = doctor.name;
            document.getElementById('modalDoctorName').textContent = doctor.name;
            document.getElementById('modalDoctorTitle').textContent = doctor.title;
            document.getElementById('modalDoctorSpecialty').textContent = doctor.specialty;
            document.getElementById('modalDoctorDescription').textContent = doctor.description;
            document.getElementById('modalDoctorExperience').textContent = doctor.experience;
            document.getElementById('modalDoctorSchedule').textContent = doctor.schedule;

            const modal = new bootstrap.Modal(document.getElementById('doctorProfileModal'));
            modal.show();
        }

        // Animasi untuk floating elements
        document.addEventListener('DOMContentLoaded', function () {
            const floatingIcons = document.querySelectorAll('.floating-icon');

            floatingIcons.forEach((icon, index) => {
                // Set random position
                icon.style.left = `${Math.random() * 100}%`;
                icon.style.top = `${Math.random() * 100}%`;

                // Set random animation duration
                const duration = 15 + Math.random() * 10;
                icon.style.animationDuration = `${duration}s`;

                // Set random delay
                icon.style.animationDelay = `${index * 2}s`;
            });
        });

        // Animasi untuk doctor cards
        document.addEventListener('DOMContentLoaded', function () {
            const doctorCards = document.querySelectorAll('.doctor-card');

            doctorCards.forEach((card, index) => {
                card.addEventListener('mouseenter', function () {
                    this.querySelector('.doctor-overlay').style.opacity = '1';
                });

                card.addEventListener('mouseleave', function () {
                    this.querySelector('.doctor-overlay').style.opacity = '0';
                });
            });
        });

        // Scroll Animation
        const scrollElements = document.querySelectorAll(".scroll-animate");
        const elementInView = (el, offset = 100) => {
            const elementTop = el.getBoundingClientRect().top;
            return (
                elementTop <= (window.innerHeight || document.documentElement.clientHeight) - offset
            );
        };
        const displayScrollElement = (element) => {
            element.classList.add("active");
        };
        const hideScrollElement = (element) => {
            element.classList.remove("active");
        };
        const handleScrollAnimation = () => {
            scrollElements.forEach((el) => {
                if (elementInView(el, 100)) {
                    displayScrollElement(el);
                } else {
                    hideScrollElement(el);
                }
            });
        };
        window.addEventListener("scroll", () => {
            handleScrollAnimation();
        });
        // Trigger once on load
        handleScrollAnimation();
    </script>
    <!-- Elemen interaksi tersembunyi -->
    <div id="soundTrigger"
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; cursor: pointer;"></div>
    <div id="speechIndicator"
        style="position: fixed; bottom: 20px; right: 20px; background: #4caf50; color: white; padding: 10px 15px; border-radius: 20px; display: none; z-index: 9999;">
        🔊 Membaca...
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const trigger = document.getElementById('soundTrigger');
            let hasSpoken = false;

            function speakWelcome() {
                if (hasSpoken) return;

                const welcomeText = "Selamat Datang di Website Resmi Daerah Umum Rumah Sakit Daha Husada!";
                const utterance = new SpeechSynthesisUtterance(welcomeText);
                utterance.lang = 'id-ID';
                utterance.rate = 0.9;

                utterance.onstart = () => {
                    hasSpoken = true;
                    console.log("Suara dimulai");
                };

                utterance.onerror = (e) => {
                    console.error("Gagal:", e);
                };

                speechSynthesis.speak(utterance);
            }

            // Coba autoplay terlebih dahulu
            setTimeout(() => {
                if (!hasSpoken) {
                    speakWelcome();
                }
            }, 500);

            // Jika autoplay gagal, aktifkan saat pengguna berinteraksi
            const events = ['click', 'touchstart', 'scroll', 'keydown'];

            events.forEach(event => {
                document.addEventListener(event, function initSound() {
                    if (!hasSpoken) {
                        speakWelcome();

                        // Hapus event listener setelah suara bermain
                        events.forEach(e => {
                            document.removeEventListener(e, initSound);
                        });
                    }
                }, { once: true });
            });
        });
    </script>


    <script>

        let currentPosition = 0;
        const postWidth = 380; // 350px + 30px margin
        let totalPosts = 5;
        const visiblePosts = 3;
        let maxPosition = -(totalPosts - visiblePosts) * postWidth;

        // Fungsi untuk mengurutkan postingan berdasarkan timestamp (terbaru dulu)
        function sortPostsByDate() {
            const postsWrapper = document.getElementById('postsWrapper');
            const posts = Array.from(postsWrapper.querySelectorAll('.post-container'));

            // Urutkan postingan berdasarkan timestamp (terbaru dulu)
            posts.sort((a, b) => {
                const dateA = new Date(a.getAttribute('data-timestamp'));
                const dateB = new Date(b.getAttribute('data-timestamp'));
                return dateB - dateA; // Urutkan dari terbaru ke terlama
            });

            // Kosongkan wrapper
            postsWrapper.innerHTML = '';

            // Tambahkan kembali postingan yang sudah diurutkan
            posts.forEach(post => {
                postsWrapper.appendChild(post);
            });

            // Reset carousel position setelah pengurutan
            currentPosition = 0;
            updateCarousel();
            updateIndicators();
        }

        // Panggil fungsi pengurutan saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function () {
            sortPostsByDate();
        });

        function moveCarousel(direction) {
            currentPosition -= direction * postWidth; // Perbaikan arah
            // Boundary checks
            if (currentPosition > 0) {
                currentPosition = 0;
            } else if (currentPosition < maxPosition) {
                currentPosition = maxPosition;
            }
            updateCarousel();
            updateIndicators();
        }

        function updateCarousel() {
            const postsWrapper = document.getElementById('postsWrapper');
            postsWrapper.style.transform = `translateX(${currentPosition}px)`;
        }

        function goToSlide(slideIndex) {
            currentPosition = -slideIndex * postWidth;
            // Boundary checks
            if (currentPosition > 0) {
                currentPosition = 0;
            } else if (currentPosition < maxPosition) {
                currentPosition = maxPosition;
            }
            updateCarousel();
            updateIndicators();
        }

        function updateIndicators() {
            const indicators = document.querySelectorAll('.indicator');
            const activeIndex = Math.abs(Math.round(currentPosition / postWidth));
            indicators.forEach((indicator, index) => {
                if (index === activeIndex) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }

        // Fungsi untuk menambahkan postingan baru ke carousel
        function addNewPostToCarousel(post) {
            const postsWrapper = document.getElementById('postsWrapper');
            if (!postsWrapper) return;

            // Buat elemen post-container baru
            const postElement = document.createElement('div');
            postElement.className = 'post-container';
            postElement.setAttribute('data-timestamp', post.date);

            // Isi HTML untuk postingan baru
            postElement.innerHTML = `
        <div class="new-post-indicator">BARU</div>
        <div class="post-header">
            <div class="ig-profile">
                <a href="https://www.instagram.com/rsud.dahahusada" target="_blank">
                    <img src="ig.png" alt="RSUD Daha Husada" class="profile-pic">
                </a>
                <div class="user-info">
                    <a href="https://www.instagram.com/rsud.dahahusada" target="_blank" class="username">
                        RSUD Daha Husada
                    </a>
                    <div class="description">
                        <i class="fas fa-hospital description-icon"></i>
                        <span>RSUD Daha Husada Kediri</span>
                    </div>
                </div>
            </div>
            <button class="view-profile"
                onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')">
                Lihat Profil
            </button>
        </div>
        <a href="${post.link}" target="_blank" style="display:block;">
            <div class="post-image-container">
                <img src="${post.image}" alt="${post.caption}" class="post-image">
            </div>
        </a>
        <div class="post-actions">
            <div class="flex">
                <i class="far fa-heart"
                    onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')"></i>
                <i class="far fa-comment"
                    onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')"></i>
                <i class="far fa-paper-plane"
                    onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')"></i>
            </div>
            <i class="far fa-bookmark"
                onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')"></i>
        </div>
        <div class="engagement">
            <span>${Math.floor(Math.random() * 100) + 50} suka</span>
        </div>
        <div class="comment-section">
            <div class="comment">
                <span class="comment-username">rsud.dahahusada</span>
                <span class="comment-text collapsed" id="comment-text-${post.id}">
                    ${post.caption}
                                <span class="hashtag">#Rumahsakitumumdahahusada</span>
                                <span class="hashtag">#RSUDAHAHUSADA</span>
                                <span class="hashtag">#RSUDH</span>
                                <span class="hashtag">#Rumahsakitdahahusada</span>
                                <span class="hashtag">#RSDAHAHUSADA</span>
                                <span class="hashtag">#RSDH</span>
                                <span class="hashtag">#rumahsakit</span>
                                <span class="hashtag">#kediri</span>
                                <span class="hashtag">#kedirihits</span>
                                <span class="hashtag">#kedirilagi</span>
                                <span class="hashtag">#kediriku</span>
                                <span class="hashtag">#kedirikeren</span>
                                <span class="hashtag">#kedirikekinian</span>
                                <span class="hashtag">#infokediri</span>
                                <span class="hashtag">#nawabaktisatya</span>
                                <span class="hashtag">#mendukungastacita</span>
                                <span class="hashtag">#sinergimembangunnegeri</span>
                </span>
                <span class="more-less-btn" onclick="toggleComment(${post.id})">more</span>
            </div>
            <div class="add-comment">
                <input type="text" placeholder="Tambahkan komentar...">
                <button>
                    <i class="fab fa-instagram" style="font-size:25px; color:#E1306C;"
                        onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')"></i>
                </button>
            </div>
        </div>
    `;

            // Tambahkan postingan di awal wrapper
            postsWrapper.insertBefore(postElement, postsWrapper.firstChild);

            // Update totalPosts untuk carousel
            totalPosts = document.querySelectorAll('.post-container').length;
            maxPosition = -(totalPosts - visiblePosts) * postWidth;

            // Urutkan postingan berdasarkan tanggal
            sortPostsByDate();

            // Hapus indikator "BARU" setelah 10 detik
            setTimeout(() => {
                const indicator = postElement.querySelector('.new-post-indicator');
                if (indicator) {
                    indicator.style.transition = 'opacity 0.5s';
                    indicator.style.opacity = '0';
                    setTimeout(() => {
                        indicator.remove();
                    }, 500);
                }
            }, 10000);
        }

        // Fungsi untuk memuat postingan Instagram dari localStorage
        function loadInstagramPosts() {
            const savedPosts = JSON.parse(localStorage.getItem('instagramPosts')) || [];
            return savedPosts;
        }

        // Modifikasi fungsi toggleComment untuk menangani ID unik
        function toggleComment(id) {
            const commentText = document.getElementById(`comment-text-${id}`);
            if (!commentText) return;

            const moreLessBtn = commentText.nextElementSibling;
            if (commentText.classList.contains('collapsed')) {
                commentText.classList.remove('collapsed');
                moreLessBtn.textContent = 'less';
            } else {
                commentText.classList.add('collapsed');
                moreLessBtn.textContent = 'more';
            }
        }

        // Inisialisasi saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function () {
            // Muat postingan dari localStorage
            const savedPosts = loadInstagramPosts();
            const postsWrapper = document.getElementById('postsWrapper');

            if (postsWrapper && savedPosts.length > 0) {
                // Tambahkan postingan dari localStorage ke carousel
                savedPosts.forEach(post => {
                    addNewPostToCarousel(post);
                });
            }

            // Dengarkan event ketika postingan baru ditambahkan
            window.addEventListener('instagramPostAdded', function (event) {
                addNewPostToCarousel(event.detail);
            });

            // Hapus indikator "BARU" setelah 10 detik
            setTimeout(() => {
                const indicators = document.querySelectorAll('.new-post-indicator');
                indicators.forEach(indicator => {
                    indicator.style.transition = 'opacity 0.5s';
                    indicator.style.opacity = '0';
                    setTimeout(() => {
                        indicator.remove();
                    }, 500);
                });
            }, 10000);
        });
    </script>

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

</body>

</html><?php /**PATH /Users/bilalabdillah/Documents/klinik-laravel/resources/views/index.blade.php ENDPATH**/ ?>