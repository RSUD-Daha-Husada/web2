<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container-fluid">
        <div class="col-2 col-sm-2 col-md-1 d-flex justify-content-center align-items-center mb-3 mb-sm-0">
            <div class="logo-container">
                <img src="img/logo1.jpeg" alt="Logo Rumah Sakit" class="logo-image" />
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
</nav><?php /**PATH /Users/bilalabdillah/Documents/klinik-laravel/resources/views/components/index/navbar.blade.php ENDPATH**/ ?>