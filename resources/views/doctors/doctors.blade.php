@extends('layouts.app')

@section('content')
@php
    // Cara yang lebih pasti untuk mendapatkan status admin
    $is_admin = false;
    if (auth()->check()) {
        $user = auth()->user();
        // Karena tipe data integer, kita cek dengan 1
        if ($user->is_admin == 1) {
            $is_admin = true;
        }
    }
@endphp

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="display-4 fw-bold mb-4">Tim Dokter Ahli Terbaik Kami</h1>
                <p class="lead mb-4">Kami memiliki lebih dari 50 dokter spesialis dengan pengalaman bertahun-tahun
                    untuk melayani Anda dengan terbaik.</p>
                <div class="d-flex gap-3">
                    <button class="btn book-btn">
                        <i class="fas fa-user-md me-2"></i>Temukan Dokter
                    </button>
                    <button class="btn-hubungi">
                        <i class="fas fa-phone-alt"></i> Hubungi Kami
                    </button>
                </div>
            </div>
            <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                <img src="https://picsum.photos/seed/doctor-team/600/400.jpg" alt="Tim Dokter"
                    class="img-fluid rounded-3 shadow floating">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="stat-card">
                    <div class="stat-number">29+</div>
                    <div class="stat-title">Dokter Ahli</div>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                <div class="stat-card">
                    <div class="stat-number">16</div>
                    <div class="stat-title">Spesialisasi</div>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <div class="stat-title">Layanan Darurat</div>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                <div class="stat-card">
                    <div class="stat-number">100%</div>
                    <div class="stat-title">Pasien Puas</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Doctor Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Temukan Dokter Spesialis</h2>
            <p class="lead">Pilih spesialisasi yang Anda butuhkan dari tim dokter kami yang berpengalaman</p>
        </div>
        
        <!-- Search and Filter -->
        <div class="row mb-5">
            <div class="col-md-6 mx-auto" data-aos="fade-up">
                <div class="search-container">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="search-input" id="searchDoctor" placeholder="Cari nama dokter...">
                </div>
            </div>
        </div>
        
        <div class="row mb-4 justify-content-center" data-aos="fade-up">
            <div class="col-12 d-flex flex-wrap justify-content-center">
                <button class="filter-btn active" data-filter="all">Semua Dokter</button>
                <button class="filter-btn" data-filter="mata">Dokter Mata</button>
                <button class="filter-btn" data-filter="penyakit-dalam">Dokter Penyakit Dalam</button>
                <button class="filter-btn" data-filter="kulit-kelamin">Dokter Kulit Kelamin</button>
                <button class="filter-btn" data-filter="jantung">Dokter Jantung</button>
                <button class="filter-btn" data-filter="bedah">Dokter Bedah</button>
                <button class="filter-btn" data-filter="orthopedi">Dokter Orthopedi</button>
                <button class="filter-btn" data-filter="tht">Dokter THT</button>
                <button class="filter-btn" data-filter="kandungan">Dokter Kandungan</button>
                <button class="filter-btn" data-filter="anak">Dokter Anak</button>
                <button class="filter-btn" data-filter="umum">Dokter Umum</button>
                <button class="filter-btn" data-filter="kusta">Dokter Kusta</button>
                <button class="filter-btn" data-filter="gigi">Dokter Gigi</button>
                <button class="filter-btn" data-filter="rehabilitasi">Dokter Rehabilitasi</button>
                <button class="filter-btn" data-filter="urologi">Klinik Urologi</button>
                <button class="filter-btn" data-filter="neurologi">Klinik Neurologi</button>
            </div>
        </div>
        
        <!-- Doctor Cards -->
        <div class="row g-4" id="doctorContainer">
            <!-- Doctor cards will be dynamically loaded here -->
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Apa Kata Pasien Kami</h2>
            <p class="lead">Pengalaman dan testimoni dari pasien yang telah kami layani</p>
        </div>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>Dokternya sangat ramah dan profesional. Pelayanannya luar biasa dan membuat saya merasa
                            nyaman selama konsultasi.</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://picsum.photos/seed/patient1/100/100.jpg" alt="Pasien"
                            class="testimonial-img">
                        <div class="author-info">
                            <h5>Siti Aminah</h5>
                            <p>Pasien Dokter Mata</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>Pelayanan yang sangat memuaskan. Dokternya sangat teliti dalam mendiagnosis dan
                            memberikan penjelasan yang jelas.</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://picsum.photos/seed/patient2/100/100.jpg" alt="Pasien"
                            class="testimonial-img">
                        <div class="author-info">
                            <h5>Budi Santoso</h5>
                            <p>Pasien Dokter Jantung</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>Lingkungan klinik bersih dan nyaman. Tim medisnya sangat responsif dan memberikan
                            perawatan terbaik.</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://picsum.photos/seed/patient3/100/100.jpg" alt="Pasien"
                            class="testimonial-img">
                        <div class="author-info">
                            <h5>Anita Wijaya</h5>
                            <p>Pasien Dokter Anak</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Doctor Profile Modal -->
<div class="modal fade" id="doctorProfileModal" tabindex="-1" aria-labelledby="doctorProfileModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctorProfileModalLabel">
                    <i class="fas fa-user-md me-2"></i>Profil Dokter
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="doctor-profile-image mb-3">
                            <img src="" class="img-fluid rounded-circle" width="200" height="200" alt=""
                                style="object-fit: cover;">
                        </div>
                        <div class="doctor-contact-info mt-4">
                            <p class="mb-1"><i class="fas fa-user-md me-2"></i> <span id="modalTitle"></span></p>
                            <p class="mb-1"><i class="fas fa-stethoscope me-2"></i> <span
                                    id="modalSpecialty"></span></p>
                            <p class="mb-1"><i class="fas fa-hospital me-2"></i> Klinik Sehat Sentosa</p>
                            <p class="mb-1"><i class="fas fa-phone-alt me-2"></i> <span id="modalPhone"></span></p>
                            <p class="mb-0"><i class="fas fa-envelope me-2"></i> <span id="modalEmail"></span></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="doctor-details">
                            <h4 class="mb-3" id="modalName"></h4>
                            <div class="mb-4">
                                <h6 class="fw-bold">Spesialisasi</h6>
                                <p id="modalSpecialtyDetail"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="fw-bold">Deskripsi</h6>
                                <p id="modalDescription"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="fw-bold">Pendidikan</h6>
                                <p id="modalEducation"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="fw-bold">Pengalaman</h6>
                                <p id="modalExperience"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="fw-bold">Jadwal Praktik</h6>
                                <p id="modalSchedule"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Tutup
                </button>
                <button type="button" class="btn book-btn" id="scheduleAppointmentBtn">
                    <i class="fas fa-calendar-check me-2"></i>Jadwal Janji
                </button>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    :root {
        --primary: #4158D0;
        --secondary: #C850C0;
        --gradient: linear-gradient(135deg, rgba(6, 182, 212, 0.98) 0%, rgba(34, 197, 94, 0.96) 50%, rgba(132, 204, 22, 0.93) 100%);
        --light: #f8f9fa;
        --dark: #212529;
    }
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        overflow-x: hidden;
    }
    .hero-section {
        background: var(--gradient);
        padding: 100px 0;
        color: white;
        position: relative;
        overflow: hidden;
    }
    .hero-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://picsum.photos/seed/medical-pattern/1200/800.jpg');
        opacity: 0.1;
        mix-blend-mode: overlay;
    }
    .section-title {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        position: relative;
        display: inline-block;
        margin-bottom: 30px;
    }
    .section-title::after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 50px;
        height: 3px;
        background: var(--gradient);
        background-size: 200% 200%;
        animation: gradient 5s ease infinite;
    }
    .filter-btn {
        border-radius: 30px;
        padding: 8px 20px;
        margin: 5px;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        background: white;
        color: var(--dark);
        font-weight: 500;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .filter-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 7px 20px rgba(0, 0, 0, 0.15);
    }
    .filter-btn.active {
        background: var(--gradient);
        background-size: 200% 200%;
        color: white;
        animation: gradient 5s ease infinite;
        border-color: transparent;
    }
    .doctor-card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
        margin-bottom: 30px;
        position: relative;
        z-index: 1;
    }
    .doctor-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }
    .doctor-img {
        height: 250px;
        object-fit: cover;
        transition: all 0.5s ease;
    }
    .doctor-card:hover .doctor-img {
        transform: scale(1.05);
    }
    .doctor-info {
        padding: 25px;
    }
    .specialty-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 2;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        background: var(--gradient);
        background-size: 200% 200%;
        animation: gradient 5s ease infinite;
        color: white;
    }
    .doctor-name {
        font-weight: 700;
        font-size: 1.4rem;
        margin-bottom: 5px;
        color: var(--dark);
    }
    .doctor-title {
        color: var(--secondary);
        font-weight: 600;
        margin-bottom: 15px;
    }
    .doctor-detail {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
        color: #6c757d;
    }
    .doctor-detail i {
        margin-right: 10px;
        color: var(--primary);
    }
    /* Tombol Utama - Gradient */
    .book-btn {
        background: linear-gradient(135deg, #4158D0 0%, #C850C0 50%, #FFCC70 100%);
        background-size: 200% 200%;
        color: white;
        border: none;
        border-radius: 50px;
        padding: 12px 30px;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }
    .book-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        background-position: right center;
    }
    .book-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: all 0.6s;
    }
    .book-btn:hover::before {
        left: 100%;
    }
    /* Tombol Kontak - Glass Morphism */
    .contact-btn {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 50px;
        padding: 12px 30px;
        color: white;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.4s ease;
        border: 2px solid transparent;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.2) 100%);
    }
    .contact-btn:hover {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.4) 100%);
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.5);
    }
    .btn-hubungi {
        background: linear-gradient(135deg, #4158D0 0%, #C850C0 50%, #FFCC70 100%);
        color: #fff;
        padding: 12px 24px;
        font-size: 16px;
        border: none;
        border-radius: 50px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        display: inline-flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .btn-hubungi:hover {
        background: linear-gradient(135deg, rgba(65, 89, 208, 0.83) 0%, rgb(198, 93, 191) 50%, rgb(244, 185, 77) 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }
    .btn-hubungi i {
        font-size: 18px;
    }
    .search-container {
        position: relative;
        margin-bottom: 30px;
    }
    .search-input {
        border-radius: 30px;
        padding: 12px 20px;
        padding-left: 50px;
        border: 2px solid #e9ecef;
        width: 100%;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    .search-input:focus {
        border-color: var(--primary);
        box-shadow: 0 5px 20px rgba(65, 88, 208, 0.2);
        outline: none;
    }
    .search-icon {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: #adb5bd;
    }
    .stat-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }
    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        background: var(--gradient);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        margin-bottom: 10px;
    }
    .stat-title {
        color: var(--dark);
        font-weight: 600;
    }
    .testimonial {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        position: relative;
    }
    .testimonial::before {
        content: "" ";
        position: absolute;
        top: -20px;
        left: 20px;
        font-size: 5rem;
        color: var(--secondary);
        opacity: 0.1;
        font-family: 'Playfair Display', serif;
    }
    .testimonial-content {
        font-style: italic;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }
    .testimonial-author {
        display: flex;
        align-items: center;
    }
    .testimonial-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 15px;
        object-fit: cover;
    }
    .author-info h5 {
        margin-bottom: 0;
        font-weight: 600;
    }
    .author-info p {
        margin-bottom: 0;
        color: #6c757d;
        font-size: 0.9rem;
    }
    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
    .floating {
        animation: floating 3s ease-in-out infinite;
    }
    @keyframes floating {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
        100% {
            transform: translateY(0px);
        }
    }
    .modal-header {
        background: var(--gradient);
        color: white;
    }
    .modal-header .btn-close {
        filter: brightness(0) invert(1);
    }
</style>
@endpush

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Inisialisasi AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 120
    });
    
    // Data dokter
    const doctors = [
        {
            id: 1,
            name: "Dr. Darwan Triyono, Sp. M",
            specialty: "mata",
            title: "Spesialis Mata",
            image: "https://picsum.photos/seed/doctor1/400/400.jpg",
            description: "Ahli dalam pengobatan penyakit mata dan pembedahan katarak.",
            phone: "(021) 555-1234",
            email: "darwan.triyono@kliniksehat.com",
            education: "S1 Kedokteran UI, Spesialis Mata UGM",
            experience: "8 tahun",
            schedule: "Senin-Jumat: 08:00-16:00"
        },
        {
            id: 2,
            name: "Dr. Anggraini Dian Puspitadewi, Sp. PD",
            specialty: "penyakit-dalam",
            title: "Spesialis Penyakit Dalam",
            image: "https://picsum.photos/seed/doctor2/400/400.jpg",
            description: "Spesialis dalam pengobatan diabetes dan hipertensi.",
            phone: "(021) 555-5678",
            email: "anggraini.dian@kliniksehat.com",
            education: "S1 Kedokteran Unpad, Spesialis Penyakit Dalam",
            experience: "10 tahun",
            schedule: "Senin-Kamis: 09:00-17:00"
        },
        {
            id: 3,
            name: "Dr. R. Dwi Hendradianko, Sp.PD",
            specialty: "penyakit-dalam",
            title: "Spesialis Penyakit Dalam",
            image: "https://picsum.photos/seed/doctor3/400/400.jpg",
            description: "Spesialis dalam pengobatan diabetes dan hipertensi.",
            phone: "(021) 555-0000",
            email: "example@kliniksehat.com",
            education: "S1 Kedokteran Umum, Spesialis dari Universitas Terkemuka",
            experience: "10 tahun",
            schedule: "Senin-Jumat: 08:00-16:00"
        },
        {
            id: 4,
            name: "Dr. Zahrudin Ahmad, SpDVE, M.Ked. Klin.",
            specialty: "kulit-kelamin",
            title: "Spesialis Kulit dan Kelamin",
            image: "https://picsum.photos/seed/doctor4/400/400.jpg",
            description: "Ahli dalam penanganan jerawat dan penyakit kulit berbahaya.",
            phone: "(021) 555-4567",
            email: "zahrudin.ahmad@kliniksehat.com",
            education: "S1 Kedokteran UGM, Spesialis UNHAS",
            experience: "11 tahun",
            schedule: "Senin, Rabu, Jumat: 10:00-17:00"
        },
        {
            id: 5,
            name: "Dr. Niluh Wijayanti, SpDV",
            specialty: "kulit-kelamin",
            title: "Spesialis Kulit dan Kelamin",
            image: "https://picsum.photos/seed/doctor5/400/400.jpg",
            description: "Ahli dalam penanganan jerawat dan penyakit kulit berbahaya.",
            phone: "(021) 555-5678",
            email: "niluh.wijayanti@kliniksehat.com",
            education: "S1 UNUD, Spesialis UI",
            experience: "7 tahun",
            schedule: "Selasa-Kamis: 09:00-14:00"
        },
        {
            id: 6,
            name: "Dr. Solehah Catur Rahayu, Sp.JP",
            specialty: "jantung",
            title: "Spesialis Jantung",
            image: "https://picsum.photos/seed/doctor6/400/400.jpg",
            description: "Spesialis dalam pembedahan jantung dan penyakit jantung koroner.",
            phone: "(021) 555-6789",
            email: "solehah.rahayu@kliniksehat.com",
            education: "S1 UNS, Spesialis Jantung UI",
            experience: "12 tahun",
            schedule: "Senin-Jumat: 07:30-13:00"
        },
        {
            id: 7,
            name: "Dr. Jody Hernanto, Sp. B",
            specialty: "bedah",
            title: "Spesialis Bedah Umum",
            image: "https://picsum.photos/seed/doctor7/400/400.jpg",
            description: "Ahli dalam pembedahan pencernaan dan laparoskopi.",
            phone: "(021) 555-7890",
            email: "jody.hernanto@kliniksehat.com",
            education: "S1 UNDIP, Spesialis Bedah UGM",
            experience: "10 tahun",
            schedule: "Senin-Rabu: 09:00-15:00"
        },
        {
            id: 8,
            name: "Dr. Ariya Maulana Nasution, Sp. OT",
            specialty: "orthopedi",
            title: "Spesialis Orthopedi",
            image: "https://picsum.photos/seed/doctor8/400/400.jpg",
            description: "Spesialis dalam pengobatan cedera tulang dan sendi.",
            phone: "(021) 555-8910",
            email: "ariya.nasution@kliniksehat.com",
            education: "S1 UNAND, Spesialis OT UI",
            experience: "8 tahun",
            schedule: "Selasa-Jumat: 08:30-14:30"
        },
        {
            id: 9,
            name: "Dr. Sujut Winartoyo, Sp. THT-KL",
            specialty: "tht",
            title: "Spesialis THT",
            image: "https://picsum.photos/seed/doctor9/400/400.jpg",
            description: "Ahli dalam pengobatan penyakit telinga, hidung, dan tenggorokan.",
            phone: "(021) 555-9101",
            email: "sujut.winartoyo@kliniksehat.com",
            education: "S1 UGM, Spesialis THT UI",
            experience: "9 tahun",
            schedule: "Senin-Jumat: 10:00-17:00"
        },
        {
            id: 10,
            name: "Dr. Jonathan Chandra N., Sp.OG",
            specialty: "kandungan",
            title: "Spesialis Kandungan",
            image: "https://picsum.photos/seed/doctor10/400/400.jpg",
            description: "Spesialis dalam kehamilan berisiko tinggi dan operasi sesar.",
            phone: "(021) 555-1122",
            email: "jonathan.chandra@kliniksehat.com",
            education: "S1 UNDIP, Spesialis Obgyn UI",
            experience: "10 tahun",
            schedule: "Senin, Kamis, Sabtu: 08:00-14:00"
        },
        {
            id: 11,
            name: "Dr. Eka Rendy W. K., Sp.A",
            specialty: "anak",
            title: "Spesialis Anak",
            image: "https://picsum.photos/seed/doctor11/400/400.jpg",
            description: "Ahli dalam penanganan penyakit infeksi pada anak.",
            phone: "(021) 555-1235",
            email: "eka.rendy@kliniksehat.com",
            education: "S1 Kedokteran UNAIR, Spesialis Anak UGM",
            experience: "9 tahun",
            schedule: "Senin-Kamis: 08:00-14:00"
        },
        {
            id: 12,
            name: "Dr. Arsi Widyastriastuti, Sp.A",
            specialty: "anak",
            title: "Dokter Anak",
            image: "https://picsum.photos/seed/doctor12/400/400.jpg",
            description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
            phone: "(021) 555-1236",
            email: "arsi.widyastri@kliniksehat.com",
            education: "S1 Kedokteran UGM, Spesialis Anak UI",
            experience: "7 tahun",
            schedule: "Selasa-Jumat: 10:00-16:00"
        },
        {
            id: 13,
            name: "Dr. As.ad Pratama putra",
            specialty: "umum",
            title: "Dokter Umum",
            image: "https://picsum.photos/seed/doctor13/400/400.jpg",
            description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
            phone: "(021) 555-1237",
            email: "asad.pratama@kliniksehat.com",
            education: "S1 Kedokteran UII",
            experience: "5 tahun",
            schedule: "Senin-Sabtu: 08:00-13:00"
        },
        {
            id: 14,
            name: "Dr. Dwi Rahmat Lutfiani",
            specialty: "umum",
            title: "Dokter Umum",
            image: "https://picsum.photos/seed/doctor14/400/400.jpg",
            description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
            phone: "(021) 555-1238",
            email: "dwi.lutfiani@kliniksehat.com",
            education: "S1 Kedokteran Unair",
            experience: "6 tahun",
            schedule: "Senin-Jumat: 09:00-15:00"
        },
        {
            id: 15,
            name: "Drg. Sinta Kurniawati",
            specialty: "umum",
            title: "Dokter Umum",
            image: "https://picsum.photos/seed/doctor15/400/400.jpg",
            description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
            phone: "(021) 555-1239",
            email: "sinta.kurniawati@kliniksehat.com",
            education: "S1 Kedokteran Gigi UI",
            experience: "8 tahun",
            schedule: "Senin-Jumat: 08:00-12:00"
        },
        {
            id: 16,
            name: "Dr. Yayik Andini Ekowati",
            specialty: "umum",
            title: "Dokter Umum",
            image: "https://picsum.photos/seed/doctor16/400/400.jpg",
            description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
            phone: "(021) 555-1240",
            email: "yayik.ekowati@kliniksehat.com",
            education: "S1 Kedokteran UMY",
            experience: "4 tahun",
            schedule: "Senin-Kamis: 08:00-14:00"
        },
        {
            id: 17,
            name: "Dr. Yunita Wulansari",
            specialty: "umum",
            title: "Dokter Umum",
            image: "https://picsum.photos/seed/doctor17/400/400.jpg",
            description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
            phone: "(021) 555-1241",
            email: "yunita.wulansari@kliniksehat.com",
            education: "S1 Kedokteran UIN Malang",
            experience: "5 tahun",
            schedule: "Selasa-Jumat: 09:00-14:00"
        },
        {
            id: 18,
            name: "Dr. Christophorus N. H.",
            specialty: "umum",
            title: "Dokter Umum",
            image: "https://picsum.photos/seed/doctor18/400/400.jpg",
            description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
            phone: "(021) 555-1242",
            email: "christo.nh@kliniksehat.com",
            education: "S1 Kedokteran Atma Jaya",
            experience: "6 tahun",
            schedule: "Senin-Sabtu: 07:30-12:30"
        },
        {
            id: 19,
            name: "Dr. Tatit Syahadani Alfirdausi",
            specialty: "umum",
            title: "Dokter Umum",
            image: "https://picsum.photos/seed/doctor19/400/400.jpg",
            description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
            phone: "(021) 555-1243",
            email: "tatit.alfirdausi@kliniksehat.com",
            education: "S1 Kedokteran Universitas Airlangga",
            experience: "7 tahun",
            schedule: "Senin-Jumat: 08:00-14:00"
        },
        {
            id: 20,
            name: "Dr. Zahrudin Ahmad, SpDVE, M.Ked. Klin.",
            specialty: "kusta",
            title: "Spesialis Kusta",
            image: "https://picsum.photos/seed/doctor20/400/400.jpg",
            description: "Ahli dalam pengobatan penyakit kusta dan penyakit kulit menular.",
            phone: "(021) 555-1244",
            email: "zahrudin.kusta@kliniksehat.com",
            education: "Spesialis Kulit UNHAS",
            experience: "11 tahun",
            schedule: "Rabu-Jumat: 10:00-15:00"
        },
        {
            id: 21,
            name: "Dr. Niluh Wijayanti, SpDV",
            specialty: "kusta",
            title: "Spesialis Kusta",
            image: "https://picsum.photos/seed/doctor21/400/400.jpg",
            description: "Ahli dalam pengobatan penyakit kusta dan penyakit kulit menular.",
            phone: "(021) 555-1245",
            email: "niluh.kusta@kliniksehat.com",
            education: "Spesialis Kulit UI",
            experience: "7 tahun",
            schedule: "Selasa & Jumat: 13:00-17:00"
        },
        {
            id: 22,
            name: "Drg. Sinta Kurniawati",
            specialty: "gigi",
            title: "Dokter Gigi Umum",
            image: "https://picsum.photos/seed/doctor22/400/400.jpg",
            description: "Spesialis dalam perawatan gigi dan pencegahan penyakit gigi.",
            phone: "(021) 555-1246",
            email: "sinta.gigi@kliniksehat.com",
            education: "S1 Kedokteran Gigi UI",
            experience: "8 tahun",
            schedule: "Senin-Jumat: 08:00-13:00"
        },
        {
            id: 23,
            name: "Dr. Yunita Dwi Anggarini, Sp.K.F.R., M.Ked.Klin.",
            specialty: "rehabilitasi",
            title: "Dokter Rehabilitasi Medik",
            image: "https://picsum.photos/seed/doctor23/400/400.jpg",
            description: "Ahli dalam rehabilitasi pasca operasi dan cedera.",
            phone: "(021) 555-1247",
            email: "yunita.rehab@kliniksehat.com",
            education: "S1 Kedokteran UGM, Spesialis Rehabilitasi Unair",
            experience: "9 tahun",
            schedule: "Senin & Rabu: 08:00-12:00"
        },
        {
            id: 24,
            name: "Dr. Gunandar Rachmadi, Sp.U",
            specialty: "urologi",
            title: "Spesialis Urologi",
            image: "https://picsum.photos/seed/doctor24/400/400.jpg",
            description: "Spesialis dalam pengobatan penyakit ginjal dan sistem kemih.",
            phone: "(021) 555-1248",
            email: "gunandar.rachmadi@kliniksehat.com",
            education: "S1 Kedokteran UGM, Spesialis Urologi UI",
            experience: "12 tahun",
            schedule: "Kamis-Sabtu: 09:00-14:00"
        },
        {
            id: 25,
            name: "Dr. Indrawan Tri Purnomo, Sp.N",
            specialty: "neurologi",
            title: "Spesialis Neurologi",
            image: "https://picsum.photos/seed/doctor25/400/400.jpg",
            description: "Ahli dalam pengobatan stroke dan penyakit saraf.",
            phone: "(021) 555-1249",
            email: "indrawan.purnomo@kliniksehat.com",
            education: "S1 Kedokteran UGM, Spesialis Saraf Unair",
            experience: "10 tahun",
            schedule: "Senin-Kamis: 08:00-12:00"
        },
        {
            id: 26,
            name: "Drg. Fepta Dea Anggini, Sp.KG",
            specialty: "gigi",
            title: "Dokter Konservasi Gigi",
            image: "https://picsum.photos/seed/doctor26/400/400.jpg",
            description: "Spesialis dalam perawatan saluran akar dan konservasi gigi.",
            phone: "(021) 555-1250",
            email: "fepta.anggini@kliniksehat.com",
            education: "S1 Kedokteran Gigi UI, Spesialis Konservasi Gigi UGM",
            experience: "9 tahun",
            schedule: "Selasa-Kamis: 10:00-15:00"
        }
    ];
    
    // Inisialisasi saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        // Tampilkan semua dokter (hanya untuk user biasa)
        displayDoctors();
        
        // Event listener untuk tombol filter
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Hapus kelas active dari semua tombol
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                // Tambahkan kelas active ke tombol yang diklik
                this.classList.add('active');
                // Tampilkan dokter yang difilter
                displayDoctors();
            });
        });
        
        // Event listener untuk input pencarian
        const searchInput = document.getElementById('searchDoctor');
        if (searchInput) {
            searchInput.addEventListener('input', displayDoctors);
        }
    });
    
    /**
     * Menampilkan dokter dengan filter dan pencarian
     */
    function displayDoctors() {
        const container = document.getElementById('doctorContainer');
        if (!container) {
            console.error("Container dengan ID 'doctorContainer' tidak ditemukan!");
            return;
        }
        
        let filteredDoctors = [...doctors];
        
        // Filter aktif
        const activeFilter = document.querySelector('.filter-btn.active');
        if (activeFilter && activeFilter.dataset.filter !== 'all') {
            const filterValue = activeFilter.dataset.filter;
            filteredDoctors = filteredDoctors.filter(d => d.specialty === filterValue);
        }
        
        // Pencarian
        const searchTerm = document.getElementById('searchDoctor').value.toLowerCase();
        if (searchTerm) {
            filteredDoctors = filteredDoctors.filter(d =>
                d.name.toLowerCase().includes(searchTerm) ||
                d.title.toLowerCase().includes(searchTerm) ||
                d.specialty.toLowerCase().includes(searchTerm) ||
                d.description.toLowerCase().includes(searchTerm)
            );
        }
        
        // Jika tidak ada hasil
        if (filteredDoctors.length === 0) {
            container.innerHTML = `
                <div class="col-12 text-center py-5">
                    <i class="fas fa-search fa-3x mb-3 text-muted"></i>
                    <h4>Tidak ada dokter yang ditemukan</h4>
                    <p class="text-muted">Coba kata kunci lain atau pilih spesialisasi berbeda.</p>
                </div>
            `;
            return;
        }
        
        // Render kartu dokter untuk user biasa (tanpa tombol edit/hapus)
        container.innerHTML = filteredDoctors.map(d => `
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="doctor-card">
                    <div class="position-relative">
                        <img src="${d.image || 'https://picsum.photos/seed/doctor/400/400'}" class="card-img-top doctor-img" alt="${d.name}">
                        <span class="badge specialty-badge">${d.title}</span>
                    </div>
                    <div class="doctor-info">
                        <h5 class="doctor-name">${d.name}</h5>
                        <p class="doctor-title">${d.title}</p>
                        <p class="card-text">${d.description}</p>
                        <div class="d-flex gap-2 mt-3">
                            <button class="btn btn-sm btn-outline-success" onclick="showDoctorProfile(${d.id})">
                                <i class="fas fa-user me-1"></i> Profil
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `).join('');
        
        // Refresh animasi AOS untuk elemen baru
        AOS.refresh();
    }
    
    /**
     * Menampilkan modal profil dokter
     * @param {number} id - ID dokter
     */
    function showDoctorProfile(id) {
        const doctor = doctors.find(d => d.id == id);
        if (!doctor) {
            console.error('Doctor not found:', id);
            return;
        }
        
        // Format spesialisasi dengan huruf kapital di setiap kata
        const formattedSpecialty = doctor.specialty
            .split('-')
            .map(word => word.charAt(0).toUpperCase() + word.slice(1))
            .join(' - ');
        
        // Isi data modal
        document.querySelector('#doctorProfileModal .doctor-profile-image img').src = doctor.image || 'https://picsum.photos/seed/doctor' + id + '/400/400.jpg';
        document.querySelector('#doctorProfileModal .doctor-profile-image img').alt = doctor.name;
        document.getElementById('modalName').textContent = doctor.name;
        document.getElementById('modalTitle').textContent = doctor.title;
        document.getElementById('modalSpecialty').textContent = formattedSpecialty;
        document.getElementById('modalSpecialtyDetail').textContent = formattedSpecialty;
        document.getElementById('modalDescription').textContent = doctor.description;
        document.getElementById('modalPhone').textContent = doctor.phone;
        document.getElementById('modalEmail').textContent = doctor.email;
        document.getElementById('modalEducation').textContent = doctor.education;
        document.getElementById('modalExperience').textContent = doctor.experience;
        document.getElementById('modalSchedule').textContent = doctor.schedule;
        
        // Tampilkan modal
        const modalElement = document.getElementById('doctorProfileModal');
        const modal = new bootstrap.Modal(modalElement);
        
        // Tambahkan event listener untuk tombol jadwal janji
        const scheduleBtn = document.getElementById('scheduleAppointmentBtn');
        if (scheduleBtn) {
            scheduleBtn.onclick = function () {
                // Tutup modal profil
                modal.hide();
                // Tampilkan notifikasi sukses
                showToast(`Janji dengan Dr. ${doctor.name.split(',')[0]} telah berhasil diatur!`, 'success');
            };
        }
        
        // Tampilkan modal
        modal.show();
    }
    
    /**
     * Menampilkan notifikasi toast
     * @param {string} message - Pesan yang akan ditampilkan
     * @param {string} type - Tipe notifikasi ('success', 'danger', 'warning', 'info')
     */
    function showToast(message, type = 'success') {
        // Hapus toast yang sudah ada
        const existingToast = document.querySelector('.toast-container');
        if (existingToast) {
            existingToast.remove();
        }
        
        // Buat elemen toast
        const toastContainer = document.createElement('div');
        toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
        toastContainer.style.zIndex = '1050';
        
        const toastHTML = `
            <div class="toast align-items-center text-white bg-${type}" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2"></i>
                        ${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        `;
        
        toastContainer.innerHTML = toastHTML;
        document.body.appendChild(toastContainer);
        
        // Tampilkan toast
        const toastElement = toastContainer.querySelector('.toast');
        const toast = new bootstrap.Toast(toastElement, { autohide: true, delay: 5000 });
        toast.show();
        
        // Hapus container toast setelah toast ditutup
        toastElement.addEventListener('hidden.bs.toast', function () {
            toastContainer.remove();
        });
    }
</script>
@endpush
@endsection