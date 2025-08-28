<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan RSUD Daha Husada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a4f72;
            --secondary-color: #10b981;
            --accent-color: #f59e0b;
            --danger-color: #ef4444;
            --dark-color: #1a1a1a;
            --light-color: #f8f9fa;
            --gradient: linear-gradient(135deg, #1a4f72 0%, #10b981 100%);
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
        .complaint-hero {
            background: linear-gradient(135deg, #1a4f72 0%, #10b981 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .complaint-hero::before {
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

        /* Floating Elements Animation */
        .floating-element {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            left: 80%;
            animation-delay: 1s;
        }

        .floating-element:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 80%;
            left: 20%;
            animation-delay: 2s;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(10deg);
            }

            100% {
                transform: translateY(0) rotate(0deg);
            }
        }

        /* Complaint Types Section */
        .complaint-types {
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

        .complaint-type-card {
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
            cursor: pointer;
        }

        .complaint-type-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--gradient);
            transform: scaleY(0);
            transform-origin: top;
            transition: transform 0.4s ease;
        }

        .complaint-type-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .complaint-type-card:hover::before {
            transform: scaleY(1);
        }

        .complaint-type-card.selected {
            background: linear-gradient(135deg, rgba(26, 79, 114, 0.05) 0%, rgba(16, 185, 129, 0.05) 100%);
            border: 1px solid var(--secondary-color);
        }

        .complaint-type-card.selected::before {
            transform: scaleY(1);
        }

        .complaint-icon {
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

        .complaint-type-card:hover .complaint-icon {
            transform: rotate(360deg) scale(1.1);
            box-shadow: 0 8px 25px rgba(26, 79, 114, 0.4);
        }

        .complaint-type-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary-color);
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .complaint-type-description {
            color: #666;
            text-align: center;
            flex-grow: 1;
        }

        /* Complaint Form Section */
        .complaint-form-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .form-container {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .form-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
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

        .form-label {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 8px;
        }

        .btn-submit {
            background: var(--gradient);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: block;
            margin: 30px auto 0;
            position: relative;
            overflow: hidden;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(26, 79, 114, 0.3);
        }

        .btn-submit::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }

        .btn-submit:hover::before {
            left: 100%;
        }

        /* File Upload Styling */
        .file-upload {
            position: relative;
            display: inline-block;
            cursor: pointer;
            width: 100%;
        }

        .file-upload input[type=file] {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            border: 2px dashed #ddd;
            border-radius: 8px;
            background: #f9f9f9;
            transition: all 0.3s ease;
        }

        .file-upload:hover .file-upload-label {
            border-color: var(--primary-color);
            background: rgba(26, 79, 114, 0.05);
        }

        .file-upload-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-right: 15px;
        }

        .file-upload-text {
            color: #666;
        }

        .file-name {
            margin-top: 10px;
            font-style: italic;
            color: var(--secondary-color);
        }

        /* Progress Steps */
        .progress-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            position: relative;
        }

        .progress-steps::before {
            content: "";
            position: absolute;
            top: 20px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #e9ecef;
            z-index: 1;
        }

        .progress-step {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 120px;
        }

        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            border: 2px solid #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: #999;
            transition: all 0.3s ease;
        }

        .progress-step.active .step-circle {
            border-color: var(--primary-color);
            color: white;
            background: var(--primary-color);
        }

        .progress-step.completed .step-circle {
            border-color: var(--secondary-color);
            color: white;
            background: var(--secondary-color);
        }

        .step-label {
            margin-top: 10px;
            font-size: 0.9rem;
            color: #666;
            text-align: center;
        }

        .progress-step.active .step-label {
            color: var(--primary-color);
            font-weight: 600;
        }

        .progress-step.completed .step-label {
            color: var(--secondary-color);
            font-weight: 600;
        }

        /* Success Message */
        .success-message {
            display: none;
            text-align: center;
            padding: 40px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 3rem;
            color: white;
            animation: scaleIn 0.5s ease-out;
        }

        @keyframes scaleIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .success-title {
            font-size: 2rem;
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 15px;
        }

        .success-text {
            color: #666;
            margin-bottom: 30px;
        }

        /* Accessibility Features */
        .accessibility-controls {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 15px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .accessibility-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .accessibility-btn:hover {
            background: #123952;
        }

        .accessibility-btn.active {
            background: var(--secondary-color);
        }

        /* Speech Indicator */
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
        }

        .speech-indicator.active {
            display: block;
        }

        /* High Contrast Mode */
        body.high-contrast {
            background-color: #000;
            color: #fff;
        }

        body.high-contrast .complaint-hero {
            background: #222;
        }

        body.high-contrast .complaint-type-card,
        body.high-contrast .form-container {
            background: #111;
            color: #fff;
            border: 2px solid #fff;
        }

        body.high-contrast .form-control,
        body.high-contrast .form-select {
            background: #222;
            color: #fff;
            border: 2px solid #fff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .complaint-type-card {
                margin-bottom: 30px;
            }

            .form-container {
                padding: 30px 20px;
            }

            .accessibility-controls {
                flex-direction: row;
                bottom: 10px;
                left: 10px;
                right: 10px;
                justify-content: center;
            }

            .progress-steps {
                flex-wrap: wrap;
                gap: 20px;
            }

            .progress-steps::before {
                display: none;
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
    <section class="complaint-hero">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="container">
            <div class="hero-content text-center" data-aos="fade-up">
                <h1 class="hero-title">Pengaduan RSUD Daha Husada</h1>
                <p class="hero-subtitle">Kami siap melayani dan menindaklanjuti setiap pengaduan Anda untuk meningkatkan
                    kualitas pelayanan kami</p>
            </div>
        </div>
    </section>

    <!-- Complaint Types Section -->
    <section class="complaint-types">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Pilih Jenis Pengaduan</h2>
            <div class="row" id="complaintTypes">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="complaint-type-card" data-type="pelayanan">
                        <div class="complaint-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3 class="complaint-type-title">Pelayanan</h3>
                        <p class="complaint-type-description">Pengaduan terkait kualitas pelayanan medis, perilaku staf,
                            atau prosedur pelayanan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="complaint-type-card" data-type="fasilitas">
                        <div class="complaint-icon">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <h3 class="complaint-type-title">Fasilitas</h3>
                        <p class="complaint-type-description">Pengaduan terkait kondisi fasilitas, kebersihan, atau
                            ketersediaan peralatan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="complaint-type-card" data-type="administrasi">
                        <div class="complaint-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3 class="complaint-type-title">Administrasi</h3>
                        <p class="complaint-type-description">Pengaduan terkait proses administrasi, pembayaran, atau
                            dokumen medis</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="complaint-type-card" data-type="lainnya">
                        <div class="complaint-icon">
                            <i class="fas fa-comment-alt"></i>
                        </div>
                        <h3 class="complaint-type-title">Lainnya</h3>
                        <p class="complaint-type-description">Pengaduan lainnya yang tidak termasuk dalam kategori di
                            atas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Complaint Form Section -->
    <section class="complaint-form-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Formulir Pengaduan</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-container" data-aos="fade-up" data-aos-delay="200">
                        <!-- Progress Steps -->
                        <div class="progress-steps">
                            <div class="progress-step active" data-step="1">
                                <div class="step-circle">1</div>
                                <div class="step-label">Jenis Pengaduan</div>
                            </div>
                            <div class="progress-step" data-step="2">
                                <div class="step-circle">2</div>
                                <div class="step-label">Data Pelapor</div>
                            </div>
                            <div class="progress-step" data-step="3">
                                <div class="step-circle">3</div>
                                <div class="step-label">Detail Pengaduan</div>
                            </div>
                            <div class="progress-step" data-step="4">
                                <div class="step-circle">4</div>
                                <div class="step-label">Konfirmasi</div>
                            </div>
                        </div>

                        <!-- Form Steps -->
                        <div id="step1" class="form-step">
                            <h3 class="form-title">Pilih Jenis Pengaduan</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="complaintType"
                                            id="typePelayanan" value="pelayanan">
                                        <label class="form-check-label" for="typePelayanan">Pelayanan</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="complaintType"
                                            id="typeFasilitas" value="fasilitas">
                                        <label class="form-check-label" for="typeFasilitas">Fasilitas</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="complaintType"
                                            id="typeAdministrasi" value="administrasi">
                                        <label class="form-check-label" for="typeAdministrasi">Administrasi</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="complaintType"
                                            id="typeLainnya" value="lainnya">
                                        <label class="form-check-label" for="typeLainnya">Lainnya</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="window.history.back()">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextStep(2)">Lanjut</button>
                            </div>
                        </div>

                        <div id="step2" class="form-step" style="display: none;">
                            <h3 class="form-title">Data Pelapor</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="fullName" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="fullName"
                                        placeholder="Masukkan nama lengkap Anda">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Masukkan email Anda">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">No. Telepon</label>
                                    <input type="tel" class="form-control" id="phone"
                                        placeholder="Masukkan no. telepon Anda">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="identity" class="form-label">No. Identitas (KTP/SIM/Paspor)</label>
                                    <input type="text" class="form-control" id="identity"
                                        placeholder="Masukkan no. identitas Anda">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="address" rows="3"
                                        placeholder="Masukkan alamat lengkap Anda"></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary" onclick="prevStep(1)">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextStep(3)">Lanjut</button>
                            </div>
                        </div>

                        <div id="step3" class="form-step" style="display: none;">
                            <h3 class="form-title">Detail Pengaduan</h3>
                            <div class="mb-3">
                                <label for="complaintDate" class="form-label">Tanggal Kejadian</label>
                                <input type="date" class="form-control" id="complaintDate">
                            </div>
                            <div class="mb-3">
                                <label for="complaintLocation" class="form-label">Lokasi Kejadian</label>
                                <input type="text" class="form-control" id="complaintLocation"
                                    placeholder="Masukkan lokasi kejadian">
                            </div>
                            <div class="mb-3">
                                <label for="complaintSubject" class="form-label">Subjek Pengaduan</label>
                                <input type="text" class="form-control" id="complaintSubject"
                                    placeholder="Masukkan subjek pengaduan">
                            </div>
                            <div class="mb-3">
                                <label for="complaintDetail" class="form-label">Detail Pengaduan</label>
                                <textarea class="form-control" id="complaintDetail" rows="5"
                                    placeholder="Jelaskan detail pengaduan Anda secara lengkap"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="expectedSolution" class="form-label">Solusi yang Diharapkan</label>
                                <textarea class="form-control" id="expectedSolution" rows="3"
                                    placeholder="Jelaskan solusi yang Anda harapkan"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload Bukti Pendukung (Opsional)</label>
                                <div class="file-upload">
                                    <input type="file" id="evidence" multiple>
                                    <label for="evidence" class="file-upload-label">
                                        <i class="fas fa-cloud-upload-alt file-upload-icon"></i>
                                        <div class="file-upload-text">
                                            <div>Klik atau seret file ke sini</div>
                                            <small>Format: JPG, PNG, PDF (Maks. 5MB)</small>
                                        </div>
                                    </label>
                                </div>
                                <div id="fileName" class="file-name"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary" onclick="prevStep(2)">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextStep(4)">Lanjut</button>
                            </div>
                        </div>

                        <div id="step4" class="form-step" style="display: none;">
                            <h3 class="form-title">Konfirmasi Pengaduan</h3>
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                Pastikan semua data yang Anda masukkan sudah benar sebelum mengirimkan pengaduan.
                            </div>
                            <div class="mb-3">
                                <h5>Jenis Pengaduan</h5>
                                <p id="confirmType">-</p>
                            </div>
                            <div class="mb-3">
                                <h5>Data Pelapor</h5>
                                <p id="confirmReporter">-</p>
                            </div>
                            <div class="mb-3">
                                <h5>Detail Pengaduan</h5>
                                <p id="confirmDetail">-</p>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="declaration">
                                <label class="form-check-label" for="declaration">
                                    Saya menyatakan bahwa semua informasi yang saya berikan adalah benar dan dapat
                                    dipertanggungjawabkan.
                                </label>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary" onclick="prevStep(3)">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="submitComplaint()">Kirim
                                    Pengaduan</button>
                            </div>
                        </div>

                        <!-- Success Message -->
                        <div id="successMessage" class="success-message">
                            <div class="success-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <h3 class="success-title">Pengaduan Berhasil Dikirim!</h3>
                            <p class="success-text">Terima kasih atas pengaduan Anda. Kami akan segera menindaklanjuti
                                pengaduan Anda dalam waktu 3x24 jam.</p>
                            <p class="success-text">Nomor pengaduan Anda: <strong id="complaintNumber"></strong></p>
                            <button type="button" class="btn btn-primary"
                                onclick="window.history.back()">Selesai</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accessibility Controls -->
    <div class="accessibility-controls">
        <button class="accessibility-btn" id="textToSpeechBtn" title="Mode Text-to-Speech">
            <i class="fas fa-volume-up"></i> Suara
        </button>
        <button class="accessibility-btn" id="highContrastBtn" title="Mode Kontras Tinggi">
            <i class="fas fa-adjust"></i> Kontras
        </button>
        <button class="accessibility-btn" id="fontSizeBtn" title="Perbesar Teks">
            <i class="fas fa-text-height"></i> Font
        </button>
    </div>

    <!-- Speech Indicator -->
    <div id="speechIndicator" class="speech-indicator">
        🔊 Membaca...
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Current step
        let currentStep = 1;

        // Complaint type selection
        document.querySelectorAll('.complaint-type-card').forEach(card => {
            card.addEventListener('click', function () {
                // Remove selected class from all cards
                document.querySelectorAll('.complaint-type-card').forEach(c => c.classList.remove('selected'));

                // Add selected class to clicked card
                this.classList.add('selected');

                // Set radio button value
                const type = this.getAttribute('data-type');
                document.querySelector(`input[name="complaintType"][value="${type}"]`).checked = true;

                // Scroll to form
                document.querySelector('.complaint-form-section').scrollIntoView({ behavior: 'smooth' });

                // Play sound
                playSound('select');

                // Speak text if text-to-speech is enabled
                if (document.getElementById('textToSpeechBtn').classList.contains('active')) {
                    speakText(`Anda memilih jenis pengaduan: ${this.querySelector('.complaint-type-title').textContent}`);
                }
            });
        });

        // Navigation functions
        function nextStep(step) {
            // Validate current step
            if (currentStep === 1) {
                const selectedType = document.querySelector('input[name="complaintType"]:checked');
                if (!selectedType) {
                    alert('Silakan pilih jenis pengaduan terlebih dahulu');
                    return;
                }
            } else if (currentStep === 2) {
                const fullName = document.getElementById('fullName').value;
                const phone = document.getElementById('phone').value;
                if (!fullName || !phone) {
                    alert('Silakan lengkapi data pelapor');
                    return;
                }
            } else if (currentStep === 3) {
                const complaintDetail = document.getElementById('complaintDetail').value;
                if (!complaintDetail) {
                    alert('Silakan isi detail pengaduan');
                    return;
                }
            }

            // Hide current step
            document.getElementById(`step${currentStep}`).style.display = 'none';

            // Update progress steps
            document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.remove('active');
            document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.add('completed');

            // Show next step
            currentStep = step;
            document.getElementById(`step${currentStep}`).style.display = 'block';
            document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.add('active');

            // Play sound
            playSound('next');

            // Speak text if text-to-speech is enabled
            if (document.getElementById('textToSpeechBtn').classList.contains('active')) {
                speakText(`Langkah ${currentStep} dari 4: ${document.querySelector(`#step${currentStep} .form-title`).textContent}`);
            }

            // If step 4, populate confirmation data
            if (currentStep === 4) {
                populateConfirmation();
            }
        }

        function prevStep(step) {
            // Hide current step
            document.getElementById(`step${currentStep}`).style.display = 'none';
            document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.remove('active');

            // Show previous step
            currentStep = step;
            document.getElementById(`step${currentStep}`).style.display = 'block';
            document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.remove('completed');
            document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.add('active');

            // Play sound
            playSound('prev');

            // Speak text if text-to-speech is enabled
            if (document.getElementById('textToSpeechBtn').classList.contains('active')) {
                speakText(`Langkah ${currentStep} dari 4: ${document.querySelector(`#step${currentStep} .form-title`).textContent}`);
            }
        }

        // Populate confirmation data
        function populateConfirmation() {
            const type = document.querySelector('input[name="complaintType"]:checked').value;
            const typeText = document.querySelector(`label[for="type${type.charAt(0).toUpperCase() + type.slice(1)}"]`).textContent;
            document.getElementById('confirmType').textContent = typeText;

            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            document.getElementById('confirmReporter').textContent = `${fullName} - ${email} - ${phone}`;

            const complaintSubject = document.getElementById('complaintSubject').value;
            const complaintDetail = document.getElementById('complaintDetail').value;
            document.getElementById('confirmDetail').textContent = `${complaintSubject}: ${complaintDetail}`;
        }

        // Submit complaint
        function submitComplaint() {
            const declaration = document.getElementById('declaration').checked;
            if (!declaration) {
                alert('Silakan centang pernyataan terlebih dahulu');
                return;
            }

            // Play sound
            playSound('submit');

            // Show loading
            const submitBtn = document.querySelector('#step4 .btn-primary');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Mengirim...';
            submitBtn.disabled = true;

            // Simulate API call
            setTimeout(() => {
                // Generate complaint number
                const complaintNumber = 'PGD-' + Date.now();
                document.getElementById('complaintNumber').textContent = complaintNumber;

                // Hide form and show success message
                document.querySelector('.form-step').style.display = 'none';
                document.getElementById('successMessage').style.display = 'block';

                // Speak text if text-to-speech is enabled
                if (document.getElementById('textToSpeechBtn').classList.contains('active')) {
                    speakText(`Pengaduan berhasil dikirim. Nomor pengaduan Anda adalah ${complaintNumber}. Terima kasih atas pengaduan Anda.`);
                }

                // Play success sound
                playSound('success');
            }, 2000);
        }

        // File upload handling
        document.getElementById('evidence').addEventListener('change', function () {
            const fileName = document.getElementById('fileName');
            if (this.files.length > 0) {
                const fileNames = Array.from(this.files).map(file => file.name).join(', ');
                fileName.textContent = `File yang dipilih: ${fileNames}`;
            } else {
                fileName.textContent = '';
            }
        });

        // Accessibility features
        document.getElementById('textToSpeechBtn').addEventListener('click', function () {
            this.classList.toggle('active');
            const isActive = this.classList.contains('active');

            if (isActive) {
                speakText('Mode text-to-speech diaktifkan');
            } else {
                // Stop any ongoing speech
                if ('speechSynthesis' in window) {
                    window.speechSynthesis.cancel();
                }
            }
        });

        document.getElementById('highContrastBtn').addEventListener('click', function () {
            this.classList.toggle('active');
            document.body.classList.toggle('high-contrast');

            const isActive = this.classList.contains('active');
            if (isActive && document.getElementById('textToSpeechBtn').classList.contains('active')) {
                speakText('Mode kontras tinggi diaktifkan');
            }
        });

        document.getElementById('fontSizeBtn').addEventListener('click', function () {
            this.classList.toggle('active');
            document.body.classList.toggle('large-font');

            const isActive = this.classList.contains('active');
            if (isActive && document.getElementById('textToSpeechBtn').classList.contains('active')) {
                speakText('Ukuran font diperbesar');
            }
        });

        // Text-to-speech functionality
        function speakText(text) {
            if ('speechSynthesis' in window && document.getElementById('textToSpeechBtn').classList.contains('active')) {
                const utterance = new SpeechSynthesisUtterance(text);
                utterance.lang = 'id-ID';
                utterance.rate = 0.9;
                utterance.pitch = 1;
                utterance.volume = 1;

                // Show speech indicator
                const indicator = document.getElementById('speechIndicator');
                indicator.textContent = `🔊 ${text}`;
                indicator.classList.add('active');

                utterance.onend = function () {
                    indicator.classList.remove('active');
                };

                window.speechSynthesis.speak(utterance);
            }
        }

        // Sound effects
        function playSound(type) {
            // Create audio context for sound effects
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();

            // Create oscillator
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();

            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);

            // Set different sounds for different actions
            switch (type) {
                case 'select':
                    oscillator.frequency.value = 523.25; // C5
                    gainNode.gain.value = 0.2;
                    oscillator.type = 'sine';
                    break;
                case 'next':
                    oscillator.frequency.value = 659.25; // E5
                    gainNode.gain.value = 0.2;
                    oscillator.type = 'sine';
                    break;
                case 'prev':
                    oscillator.frequency.value = 493.88; // B4
                    gainNode.gain.value = 0.2;
                    oscillator.type = 'sine';
                    break;
                case 'submit':
                    oscillator.frequency.value = 783.99; // G5
                    gainNode.gain.value = 0.3;
                    oscillator.type = 'sine';
                    break;
                case 'success':
                    oscillator.frequency.value = 1046.50; // C6
                    gainNode.gain.value = 0.3;
                    oscillator.type = 'sine';
                    break;
            }

            oscillator.start();
            oscillator.stop(audioContext.currentTime + 0.2);
        }

        // Add hover sound for interactive elements
        document.addEventListener('DOMContentLoaded', function () {
            const interactiveElements = document.querySelectorAll('button, .complaint-type-card, .form-check-input, .form-control, .form-select');

            interactiveElements.forEach(element => {
                element.addEventListener('mouseenter', function () {
                    if (document.getElementById('textToSpeechBtn').classList.contains('active')) {
                        let textToSpeak = '';

                        if (this.classList.contains('complaint-type-card')) {
                            textToSpeak = this.querySelector('.complaint-type-title').textContent;
                        } else if (this.tagName === 'BUTTON') {
                            textToSpeak = this.textContent;
                        } else if (this.type === 'radio' || this.type === 'checkbox') {
                            textToSpeak = this.nextElementSibling.textContent;
                        } else if (this.classList.contains('form-control') || this.classList.contains('form-select')) {
                            const label = document.querySelector(`label[for="${this.id}"]`);
                            if (label) {
                                textToSpeak = label.textContent;
                            }
                        }

                        if (textToSpeak) {
                            speakText(textToSpeak);
                        }
                    }
                });
            });
        });

        // Add large font styles
        const style = document.createElement('style');
        style.textContent = `
            body.large-font {
                font-size: 1.2rem;
            }
            body.large-font .form-control,
            body.large-font .form-select {
                font-size: 1.2rem;
                height: auto;
                padding: 15px;
            }
            body.large-font .btn {
                font-size: 1.2rem;
                padding: 15px 30px;
            }
            body.large-font .form-label {
                font-size: 1.2rem;
                margin-bottom: 10px;
            }
            body.large-font .form-check-label {
                font-size: 1.2rem;
            }
            body.large-font .accessibility-btn {
                font-size: 1.2rem;
                padding: 10px 15px;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>

</html>