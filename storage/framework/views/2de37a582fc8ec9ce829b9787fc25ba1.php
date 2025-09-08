<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Dokter Ahli | RSUD Daha Husada</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
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
        }
        .hero-section {
            background: var(--gradient);
            padding: 80px 0;
            color: white;
        }
        .section-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }
        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--gradient);
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
        }
        .filter-btn:hover,
        .filter-btn.active {
            background: var(--gradient);
            color: white;
        }
        .doctor-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }
        .doctor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .doctor-img {
            height: 250px;
            object-fit: cover;
        }
        .doctor-info {
            padding: 20px;
        }
        .specialty-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 2;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            background: var(--gradient);
            color: white;
        }
        .doctor-name {
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 5px;
            color: var(--dark);
        }
        .doctor-title {
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 15px;
        }
        .btn-profile {
            position: relative;
            overflow: hidden;
            border: none;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
            color: white;
            background: linear-gradient(135deg, #8bc34a 0%, #cddc39 100%);
            box-shadow: 0 4px 15px rgba(139, 195, 74, 0.4);
            transition: all 0.3s ease;
            z-index: 1;
        }
        .btn-profile:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(139, 195, 74, 0.6);
            color: white;
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
        }
        .search-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(65, 88, 208, 0.25);
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
            padding: 25px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }
        .stat-number {
            font-size: 2.2rem;
            font-weight: 700;
            background: var(--gradient);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            margin-bottom: 5px;
        }
        .stat-title {
            color: var(--dark);
            font-weight: 600;
        }
        .testimonial {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }
        .testimonial-content {
            font-style: italic;
            margin-bottom: 15px;
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
        .footer {
            background: var(--dark);
            color: white;
            padding: 50px 0 20px;
        }
        .footer-title {
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        .footer-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--gradient);
        }
        .footer-links {
            list-style: none;
            padding: 0;
        }
        .footer-links li {
            margin-bottom: 8px;
        }
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        .social-icon:hover {
            background: var(--gradient);
            transform: translateY(-3px);
        }
        .modal-header {
            background: var(--gradient);
            color: white;
        }
        .modal-header .btn-close {
            filter: brightness(0) invert(1);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?php echo e(url('/')); ?>">
                <i class="fas fa-heartbeat text-primary me-2"></i>
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
                        <a class="nav-link active" href="<?php echo e(url('/doctors')); ?>">Tim Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-4">Tim Dokter Ahli Terbaik Kami</h1>
                    <p class="lead mb-4">Kami memiliki lebih dari 50 dokter spesialis dengan pengalaman bertahun-tahun untuk melayani Anda dengan terbaik.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-light">
                            <i class="fas fa-user-md me-2"></i>Temukan Dokter
                        </a>
                        <a href="#" class="btn btn-outline-light">
                            <i class="fas fa-phone-alt"></i> Hubungi Kami
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://picsum.photos/seed/doctor-team/600/400.jpg" alt="Tim Dokter" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number"><?php echo e($doctors->count()); ?>+</div>
                        <div class="stat-title">Dokter Ahli</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number">16</div>
                        <div class="stat-title">Spesialisasi</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number">24/7</div>
                        <div class="stat-title">Layanan Darurat</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
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
            <!-- Search and Filter -->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="text-center mb-5" data-aos="fade-up">
                        <h2 class="section-title">Temukan Dokter Spesialis</h2>
                        <p class="lead">Pilih spesialisasi yang Anda butuhkan dari tim dokter kami yang berpengalaman
                        </p>
                    </div>
                    <!-- Search and Filter -->
                    <div class="row mb-5">
                        <div class="col-md-6 mx-auto" data-aos="fade-up">
                            <div class="search-container">
                                <i class="fas fa-search search-icon"></i>
                                <input type="text" class="search-input" id="searchDoctor"
                                    placeholder="Cari nama dokter...">
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

            <!-- Doctor Cards -->
            <div class="row g-4" id="doctorContainer">
                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 doctor-card" data-specialty="<?php echo e(strtolower(str_replace(' ', '-', $doctor->specialty))); ?>">
                    <div class="card h-100">
                        <div class="position-relative">
                            <?php if($doctor->image): ?>
                                <img src="<?php echo e(asset($doctor->image)); ?>" class="card-img-top doctor-img" alt="<?php echo e($doctor->name); ?>">
                            <?php else: ?>
                                <img src="https://picsum.photos/seed/doctor<?php echo e($doctor->id); ?>/400/400.jpg" class="card-img-top doctor-img" alt="<?php echo e($doctor->name); ?>">
                            <?php endif; ?>
                            <span class="badge specialty-badge"><?php echo e($doctor->title); ?></span>
                        </div>
                        <div class="card-body">
                            <h5 class="doctor-name"><?php echo e($doctor->name); ?></h5>
                            <p class="doctor-title"><?php echo e($doctor->title); ?></p>
                            <p class="card-text"><?php echo e($doctor->description); ?></p>
                            <div class="d-flex gap-2 mt-3">
                                <button class="btn-profile" onclick="showDoctorProfile(<?php echo e($doctor->id); ?>)">
                                    <i class="fas fa-user-circle"></i> Lihat Profil
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Apa Kata Pasien Kami</h2>
                <p class="lead">Pengalaman dan testimoni dari pasien yang telah kami layani</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <p>Dokternya sangat ramah dan profesional. Pelayanannya luar biasa dan membuat saya merasa nyaman selama konsultasi.</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="https://picsum.photos/seed/patient1/100/100.jpg" alt="Pasien" class="testimonial-img">
                            <div class="author-info">
                                <h5>Siti Aminah</h5>
                                <p>Pasien Dokter Mata</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <p>Pelayanan yang sangat memuaskan. Dokternya sangat teliti dalam mendiagnosis dan memberikan penjelasan yang jelas.</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="https://picsum.photos/seed/patient2/100/100.jpg" alt="Pasien" class="testimonial-img">
                            <div class="author-info">
                                <h5>Budi Santoso</h5>
                                <p>Pasien Dokter Jantung</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <p>Lingkungan klinik bersih dan nyaman. Tim medisnya sangat responsif dan memberikan perawatan terbaik.</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="https://picsum.photos/seed/patient3/100/100.jpg" alt="Pasien" class="testimonial-img">
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

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h4 class="footer-title">RSUD Daha Husada</h4>
                    <p class="mb-4">Melayani dengan sepenuh hati untuk kesehatan Anda dan keluarga.</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="footer-title">Layanan</h5>
                    <ul class="footer-links">
                        <li><a href="#">Dokter Spesialis</a></li>
                        <li><a href="#">Pelayanan Kesehatan</a></li>
                        <li><a href="#">Pemeriksaan Kesehatan</a></li>
                        <li><a href="#">Program Kesehatan</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="footer-title">Informasi</h5>
                    <ul class="footer-links">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Fasilitas</a></li>
                        <li><a href="#">Tim Dokter</a></li>
                        <li><a href="#">Berita & Artikel</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="footer-title">Kontak</h5>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i> Jl. Kesehatan No. 123, Jakarta</li>
                        <li><i class="fas fa-phone-alt me-2"></i> (021) 123-4567</li>
                        <li><i class="fas fa-envelope me-2"></i> info@kliniksehat.com</li>
                        <li><i class="fas fa-clock me-2"></i> Buka 24 Jam</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="background-color: rgba(255,255,255,0.1);">
            <div class="text-center">
                <p class="mb-0">&copy; 2025 RSUD DAHA HUSADA. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Doctor Profile Modal -->
    <div class="modal fade" id="doctorProfileModal" tabindex="-1" aria-labelledby="doctorProfileModalLabel" aria-hidden="true">
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
                                <img src="" class="img-fluid rounded-circle" width="200" height="200" alt="" style="object-fit: cover;">
                            </div>
                            <div class="doctor-contact-info mt-4">
                                <p class="mb-1"><i class="fas fa-user-md me-2"></i> <span id="modalTitle"></span></p>
                                <p class="mb-1"><i class="fas fa-stethoscope me-2"></i> <span id="modalSpecialty"></span></p>
                                <p class="mb-1"><i class="fas fa-hospital me-2"></i> RSUD Daha Husada</p>
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
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Data dokter dari server
        let doctors = [
            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            {
                id: <?php echo e($doctor->id); ?>,
                name: "<?php echo e($doctor->name); ?>",
                specialty: "<?php echo e(strtolower(str_replace(' ', '-', $doctor->specialty))); ?>",
                title: "<?php echo e($doctor->title); ?>",
                image: "<?php echo e($doctor->image ? asset($doctor->image) : 'https://picsum.photos/seed/doctor' . $doctor->id . '/400/400.jpg'); ?>",
                description: "<?php echo e($doctor->description); ?>",
                phone: "<?php echo e($doctor->phone); ?>",
                email: "<?php echo e($doctor->email); ?>",
                education: "<?php echo e($doctor->education ?? 'S1 Kedokteran Universitas Terkemuka'); ?>",
                experience: "<?php echo e($doctor->experience ?? '5 tahun'); ?>",
                schedule: "<?php echo e($doctor->schedule ?? 'Senin-Jumat: 08:00-16:00'); ?>"
            }<?php echo e(!$loop->last ? ',' : ''); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ];

        // Fungsi untuk menampilkan modal profil dokter
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
            document.querySelector('#doctorProfileModal .doctor-profile-image img').src = doctor.image;
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
            modal.show();
        }

        // Inisialisasi saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Event listener untuk tombol filter
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    // Hapus kelas active dari semua tombol
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                    // Tambahkan kelas active ke tombol yang diklik
                    this.classList.add('active');
                    
                    // Filter dokter
                    const filterValue = this.dataset.filter;
                    const doctorCards = document.querySelectorAll('.doctor-card');
                    
                    doctorCards.forEach(card => {
                        if (filterValue === 'all' || card.dataset.specialty === filterValue) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
            
            // Event listener untuk input pencarian
            const searchInput = document.getElementById('searchDoctor');
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    const doctorCards = document.querySelectorAll('.doctor-card');
                    
                    doctorCards.forEach(card => {
                        const doctorName = card.querySelector('.doctor-name').textContent.toLowerCase();
                        const doctorTitle = card.querySelector('.doctor-title').textContent.toLowerCase();
                        const doctorDescription = card.querySelector('.card-text').textContent.toLowerCase();
                        
                        if (doctorName.includes(searchTerm) || doctorTitle.includes(searchTerm) || doctorDescription.includes(searchTerm)) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            }
        });
    </script>
</body>
</html><?php /**PATH /Users/bilalabdillah/Documents/klinik-laravel/resources/views/doctors/debug.blade.php ENDPATH**/ ?>