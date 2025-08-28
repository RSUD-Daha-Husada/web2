<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - RSUD Daha Husada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a4f72;
            --secondary-color: #10b981;
            --accent-color: #25D366;
            --dark-color: #1a1a1a;
            --light-color: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }


        /* Exit Button */
        .exit-button {
            position: fixed;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.9);
            color: var(--primary-color);
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 1001;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .exit-button:hover {
            background: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        /* Hero Section */
        .contact-hero {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .contact-hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none"/><path d="M0,0 L100,100 M100,0 L0,100" stroke="rgba(255,255,255,0.05)" stroke-width="2"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Home Button in Hero */
        .home-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid white;
            border-radius: 50px;
            padding: 12px 25px;
            font-weight: 600;
            text-decoration: none;
            margin-top: 30px;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .home-button:hover {
            background: white;
            color: var(--primary-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        @keyframes wave {
            0% {
                background-position-x: 0;
            }

            100% {
                background-position-x: 1440px;
            }
        }

        /* Contact Info Cards - Dengan Animasi Baru */
        .contact-section {
            padding: 80px 0;
            background-color: white;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 50px;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--secondary-color);
            border-radius: 2px;
        }

        .contact-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .contact-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .contact-card:hover::before {
            transform: scaleX(1);
        }

        .contact-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: white;
            transition: all 0.5s ease;
            position: relative;
            z-index: 1;
            box-shadow: 0 5px 15px rgba(26, 79, 114, 0.3);
        }

        .contact-card:hover .contact-icon {
            transform: rotate(360deg) scale(1.1);
            box-shadow: 0 8px 25px rgba(26, 79, 114, 0.4);
        }

        .contact-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--primary-color);
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .contact-info {
            flex-grow: 1;
            position: relative;
            z-index: 1;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            padding: 12px;
            border-radius: 10px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .contact-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .contact-item:hover {
            background-color: rgba(26, 79, 114, 0.05);
            transform: translateX(5px);
        }

        .contact-item:hover::before {
            left: 100%;
        }

        .contact-item i {
            width: 30px;
            color: var(--secondary-color);
            font-size: 1.2rem;
            margin-top: 3px;
            transition: all 0.3s ease;
        }

        .contact-item:hover i {
            transform: rotate(15deg);
        }

        .contact-item a {
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .contact-item a:hover {
            color: var(--primary-color);
        }

        /* WhatsApp Cards */
        .wa-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .wa-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border-left: 5px solid var(--accent-color);
        }

        .wa-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .wa-icon {
            width: 70px;
            height: 70px;
            background: rgba(37, 211, 102, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.8rem;
            color: var(--accent-color);
            transition: all 0.3s ease;
        }

        .wa-card:hover .wa-icon {
            background: var(--accent-color);
            color: white;
            transform: scale(1.1);
        }

        .wa-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--accent-color);
            text-align: center;
        }

        .wa-button {
            background: var(--accent-color);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 12px 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            margin-top: 15px;
            align-self: center;
        }

        .wa-button:hover {
            background: #128C7E;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(37, 211, 102, 0.3);
            color: white;
        }

        /* Contact Form */
        .form-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .form-container {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 25px;
            text-align: center;
        }

        .form-control,
        .form-select {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(26, 79, 114, 0.25);
        }

        .btn-submit {
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: block;
            margin: 30px auto 0;
        }

        .btn-submit:hover {
            background: #123952;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(26, 79, 114, 0.3);
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-reset:hover {
            background: #5a6268;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(108, 117, 125, 0.3);
        }

        /* Footer */
        .footer {
            background: var(--dark-color);
            color: white;
            padding: 60px 0 0;
            position: relative;
        }

        .footer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        .footer-bottom {
            background: rgba(0, 0, 0, 0.3);
            padding: 20px 0;
            margin-top: 40px;
            text-align: center;
        }

        /* Floating WhatsApp Button */
        .floating-wa {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            animation: pulse 2s infinite;
            transition: all 0.3s ease;
        }

        .floating-wa:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .contact-card,
            .wa-card {
                margin-bottom: 30px;
            }

            .form-container {
                padding: 30px 20px;
            }

            .form-actions {
                flex-direction: column;
                gap: 10px;
            }

            .btn-submit,
            .btn-reset {
                width: 100%;
            }
        }

        /* Speech Indicator Styles */
        .speech-indicator {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #4caf50;
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            display: none;
            z-index: 9999;
            font-weight: 500;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            max-width: 300px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .speech-indicator.active {
            display: block !important;
        }

        /* Highlight for selected text */
        .speaking {
            background: linear-gradient(120deg, #a8edea 0%, #fed6e3 100%);
            padding: 2px 4px;
            border-radius: 3px;
            animation: highlight 1s ease-in-out infinite alternate;
            display: inline !important;
        }

        /* Mencegah layout shift saat highlight */
        .speaking * {
            display: inline !important;
        }

        @keyframes highlight {
            from {
                background-color: #a8edea;
            }

            to {
                background-color: #fed6e3;
            }
        }
    </style>
</head>

<body>
    <!-- Exit Button -->
    <button class="exit-button" onclick="window.history.back()">
        <i class="fas fa-times"></i> Keluar
    </button>

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="hero-content text-center" data-aos="fade-up">
                <h1 class="hero-title">Hubungi Kami</h1>
                <p class="hero-subtitle">Untuk informasi lanjut, silakan hubungi RSUD Daha Husada melalui berbagai
                    saluran komunikasi yang tersedia</p>
            </div>
        </div>
    </section>

    <!-- Contact Info Section - Dengan Animasi Baru -->
    <section class="contact-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Informasi Kontak</h2>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="contact-title">Alamat</h3>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-hospital"></i>
                                <div>
                                    <strong>RSUD Daha Husada</strong><br>
                                    Jl. Veteran no. 48<br>
                                    Kota Kediri 64112 – Jawa Timur
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="contact-title">Telepon & Fax</h3>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <strong>Telepon:</strong><br>
                                    0354 – 771062<br>
                                    0354 – 774266
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-fax"></i>
                                <div>
                                    <strong>Fax:</strong><br>
                                    0354 – 773479
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="contact-title">Email</h3>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-inbox"></i>
                                <div>
                                    <strong>Email:</strong><br>
                                    <a
                                        href="mailto:komplain-dahahusada@jatimprov.go.id">komplain-dahahusada@jatimprov.go.id</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WhatsApp Section -->
    <section class="wa-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">WhatsApp Kami</h2>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="wa-card">
                        <div class="wa-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h3 class="wa-title">Pendaftaran</h3>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-calendar-check"></i>
                                <div>0821 4007 8338</div>
                            </div>
                        </div>
                        <a href="https://wa.me/6282140078338?text=Halo%20RSUD%20Daha%20Husada%2C%20saya%20ingin%20mendaftar%20layanan%20kesehatan"
                            class="wa-button" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i> Chat Sekarang
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="wa-card">
                        <div class="wa-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h3 class="wa-title">Humas / Pengaduan</h3>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-comments"></i>
                                <div>081 382 300 900</div>
                            </div>
                        </div>
                        <a href="https://wa.me/6281382300900?text=Halo%20RSUD%20Daha%20Husada%2C%20saya%20ingin%20mengajukan%20pengaduan"
                            class="wa-button" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i> Chat Sekarang
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="wa-card">
                        <div class="wa-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h3 class="wa-title">Ambulan</h3>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-ambulance"></i>
                                <div>0857 0745 6682</div>
                            </div>
                        </div>
                        <a href="https://wa.me/6285707456682?text=Halo%20RSUD%20Daha%20Husada%2C%20saya%20membutuhkan%20bantuan%20ambulan"
                            class="wa-button" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i> Chat Sekarang
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="wa-card">
                        <div class="wa-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h3 class="wa-title">Info Umum</h3>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-info-circle"></i>
                                <div>0354 – 771062</div>
                            </div>
                        </div>
                        <a href="https://wa.me/6285707456682?text=Halo%20RSUD%20Daha%20Husada%2C%20saya%20membutuhkan%20informasi%20umum"
                            class="wa-button" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i> Chat Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="form-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Kirim Pesan</h2>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-container" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="form-title">Formulir Kontak</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Masukkan nama lengkap Anda">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Masukkan email Anda">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">No. Telepon</label>
                                    <input type="tel" class="form-control" id="phone"
                                        placeholder="Masukkan no. telepon Anda">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="subject" class="form-label">Subjek</label>
                                    <select class="form-select" id="subject">
                                        <option selected>Pilih subjek</option>
                                        <option value="1">Pendaftaran Pasien</option>
                                        <option value="2">Konsultasi Medis</option>
                                        <option value="3">Pengaduan</option>
                                        <option value="4">Informasi Umum</option>
                                        <option value="5">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea class="form-control" id="message" rows="5"
                                    placeholder="Tulis pesan Anda di sini"></textarea>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn-submit">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h4>RSUD Daha Husada</h4>
                    <p>Rumah sakit umum daerah yang berkomitmen memberikan pelayanan kesehatan terbaik dengan standar
                        internasional dan teknologi medis modern.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="me-2 text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-2 text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-2 text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-2 text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <h4>Link Cepat</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50">Tentang Kami</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">Layanan</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">Dokter</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">Artikel</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">Karir</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h4>Newsletter</h4>
                    <p>Dapatkan informasi terbaru dari kami</p>
                    <form class="mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email Anda">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="mb-0">&copy; 2023 RSUD Daha Husada. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6282140078338?text=Halo%20RSUD%20Daha%20Husada%2C%20saya%20membutuhkan%20bantuan"
        class="floating-wa" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        // Back to top button
        const backToTopButton = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });

        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Form reset functionality
        document.querySelector('.btn-reset').addEventListener('click', function () {
            document.querySelector('form').reset();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
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

            // Buat indikator suara jika belum ada
            if (!speechIndicator) {
                const indicator = document.createElement('div');
                indicator.id = 'speechIndicator';
                indicator.className = 'speech-indicator';
                indicator.style.cssText = 'position: fixed; bottom: 20px; right: 20px; background: #4caf50; color: white; padding: 12px 20px; border-radius: 25px; display: none; z-index: 9999; font-weight: 500; box-shadow: 0 4px 12px rgba(0,0,0,0.15); max-width: 300px;';
                document.body.appendChild(indicator);
            }

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
                        'exit-button': 'Keluar',
                        'home-button': 'Beranda',
                        'contact-icon': 'Ikon Kontak',
                        'contact-title': 'Judul Kontak',
                        'contact-item': 'Item Kontak',
                        'wa-icon': 'Ikon WhatsApp',
                        'wa-title': 'Judul WhatsApp',
                        'wa-button': 'Tombol WhatsApp',
                        'form-control': 'Input Formulir',
                        'form-select': 'Pilih Formulir',
                        'btn-submit': 'Kirim Pesan',
                        'btn-reset': 'Reset Formulir',
                        'floating-wa': 'WhatsApp Mengambang',
                        'social-links': 'Tautan Media Sosial',
                        'footer': 'Footer',
                        'backToTop': 'Kembali ke Atas',
                        'section-title': 'Judul Bagian',
                        'form-title': 'Judul Formulir',
                        'newsletter': 'Newsletter',
                        'hero-title': 'Judul Hero',
                        'hero-subtitle': 'Subjudul Hero'
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
                element.addEventListener('mouseenter', function () {
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
                        hoverUtterance.rate = 0.7; // Kecepatan lebih lambat
                        hoverUtterance.volume = 0.8;
                        hoverUtterance.pitch = 1.0;
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

                        hoverUtterance.onerror = () => {
                            if (speechIndicator) {
                                speechIndicator.classList.remove('active');
                                speechIndicator.textContent = '🔊 Membaca...';
                            }
                        };

                        // Mulai pembicaraan
                        try {
                            synth.speak(hoverUtterance);
                        } catch (e) {
                            console.error('Error speaking:', e);
                        }
                    }, 200); // Tunda 200ms untuk mencegah spam
                });

                // Saat hover keluar
                element.addEventListener('mouseleave', function () {
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
                    '.btn-reset',
                    '.btn-submit',
                    '.contact-item',
                    '.wa-button',
                    '.floating-wa',
                    '.social-links a',
                    '.exit-button',
                    '.home-button',
                    '.backToTop',
                    'form label',
                    '.form-control',
                    '.form-select'
                ];

                const elements = document.querySelectorAll(selectors.join(', '));
                console.log(`Ditemukan ${elements.length} elemen interaktif`);

                elements.forEach(element => {
                    addHoverSound(element);
                });
            }

            // Scan saat halaman dimuat
            scanInteractiveElements();

            // Observasi perubahan DOM untuk elemen dinamis
            const observer = new MutationObserver(function (mutations) {
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
            document.addEventListener('mouseup', function () {
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
                currentUtterance.onstart = function () {
                    if (speechIndicator) {
                        speechIndicator.classList.add('active');
                        speechIndicator.textContent = '🔊 Membaca teks...';
                    }
                };

                // Event saat selesai
                currentUtterance.onend = function () {
                    isProcessing = false;
                    if (speechIndicator) {
                        speechIndicator.classList.remove('active');
                        speechIndicator.textContent = '🔊 Membaca...';
                    }
                    removeHighlight();
                };

                // Event jika error
                currentUtterance.onerror = function () {
                    isProcessing = false;
                    if (speechIndicator) {
                        speechIndicator.classList.remove('active');
                        speechIndicator.textContent = '🔊 Membaca...';
                    }
                    removeHighlight();
                };

                // Mulai pembacaan
                try {
                    synth.speak(currentUtterance);
                } catch (e) {
                    console.error('Error speaking:', e);
                }
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
            document.addEventListener('click', function (e) {
                if (synth.speaking && !e.target.closest('p, h1, h2, h3, h4, h5, h6, span, div')) {
                    synth.cancel();
                    isProcessing = false;
                }
            });

            // Tambahkan atribut data-speak ke elemen penting yang tidak memiliki teks yang jelas
            document.addEventListener('DOMContentLoaded', function () {
                // Tambahkan data-speak untuk tombol exit
                const exitButton = document.querySelector('.exit-button');
                if (exitButton && !exitButton.hasAttribute('data-speak')) {
                    exitButton.setAttribute('data-speak', 'Keluar dari halaman kontak');
                }

                // Tambahkan data-speak untuk tombol home
                const homeButton = document.querySelector('.home-button');
                if (homeButton && !homeButton.hasAttribute('data-speak')) {
                    homeButton.setAttribute('data-speak', 'Kembali ke beranda');
                }

                // Tambahkan data-speak untuk tombol WhatsApp mengambang
                const floatingWa = document.querySelector('.floating-wa');
                if (floatingWa && !floatingWa.hasAttribute('data-speak')) {
                    floatingWa.setAttribute('data-speak', 'WhatsApp layanan pelanggan');
                }

                // Tambahkan data-speak untuk judul-judul section
                const sectionTitles = document.querySelectorAll('.section-title');
                sectionTitles.forEach(title => {
                    if (!title.hasAttribute('data-speak')) {
                        title.setAttribute('data-speak', title.textContent);
                    }
                });
            });
        });
    </script>
</body>

</html>