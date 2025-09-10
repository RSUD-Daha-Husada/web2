<div id="dashboardSection" class="dashboard-section">
    <header class="modern-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Logo Section -->
                <div class="col-lg-3 col-md-4">
                    <div class="brand-section">
                        <a class="brand-logo" href="#" onclick="showDashboard()">
                            <div class="logo-icon">
                                <img src="logo1.jpeg" alt="Logo" style="width: 40px; height: auto;">
                            </div>
                            <div class="brand-text">
                                <h4>RSUD Daha Husada</h4>
                                <p>Patient Portal</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- User Info Section -->
                <div class="col-lg-6 col-md-5">
                    <div class="user-card">
                        <div class="user-avatar">
                            <div class="avatar-ring">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="status-indicator"></div>
                        </div>
                        <div class="user-details">
                            <div class="welcome-text">
                                <span>Selamat datang,</span>
                                <h3 id="welcomeUser">John Doe</h3>
                            </div>
                            <div class="user-meta">
                                <div class="meta-item">
                                    <i class="fas fa-phone"></i>
                                    <span id="patientPhone">08123456789</span>
                                </div>
                                <div class="meta-divider">|</div>
                                <div class="meta-item">
                                    <i class="fas fa-birthday-cake"></i>
                                    <span id="patientAge">35</span> tahun
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions Section -->
                <div class="col-lg-3 col-md-3">
                    <div class="header-actions">
                        <div class="status-badge">
                            <i class="fas fa-check-circle"></i>
                            <span>Akun Aktif</span>
                        </div>
                        <a href="{{ url('/') }}" class="logout-btn">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <!-- Navigation Tabs -->
        <ul class="nav nav-pills justify-content-center mb-4" id="dashboardTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview"
                    type="button">
                    <i class="fas fa-home me-1"></i> Ringkasan
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="appointments-tab" data-bs-toggle="tab" data-bs-target="#appointments"
                    type="button">
                    <i class="fas fa-calendar-check me-1"></i> Janji Temu
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="medical-tab" data-bs-toggle="tab" data-bs-target="#medical" type="button">
                    <i class="fas fa-file-medical me-1"></i> Rekam Medis
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button">
                    <i class="fas fa-user-edit me-1"></i> Profil
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="news-tab" data-bs-toggle="tab" data-bs-target="#news" type="button">
                    <i class="fas fa-newspaper me-1"></i> Berita
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="doctors-tab" onclick="showDoctorsPage()" type="button">
                    <i class="fas fa-user-md me-1"></i> Tim Dokter
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="instagram-tab" data-bs-toggle="tab" data-bs-target="#instagram"
                    type="button">
                    <i class="fab fa-instagram me-1"></i> Postingan IG
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="dashboardTabsContent">
            <!-- Overview Tab -->
            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                <div class="row g-4 mb-4">
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon bg-primary">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h3 id="upcomingAppointments">2</h3>
                            <p class="text-muted mb-0">Janji Temu</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon bg-success">
                                <i class="fas fa-file-medical"></i>
                            </div>
                            <h3 id="medicalRecords">5</h3>
                            <p class="text-muted mb-0">Rekam Medis</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon bg-warning">
                                <i class="fas fa-flask"></i>
                            </div>
                            <h3 id="labResults">3</h3>
                            <p class="text-muted mb-0">Hasil Lab</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon bg-info">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <h3 id="totalNews">0</h3>
                            <p class="text-muted mb-0">Berita</p>
                        </div>
                    </div>
                </div>

                <!-- SECTION BERITA PREVIEW -->
                <section class="berita-preview mb-5">
                    <div class="berita-header">
                        <h2>Berita Terkini</h2>
                        <p>Tetap update dengan informasi kesehatan terbaru dari RSUD Daha Husada</p>
                    </div>
                    <div class="berita-grid" id="beritaGrid">
                        <!-- Berita akan dimuat secara dinamis di sini -->
                    </div>
                    <div class="berita-more-container">
                        <a href="#" onclick="showNewsTab()" class="berita-more-button">
                            <span>Lihat Semua Berita</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </section>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-calendar-check me-2"></i>Janji Temu Terdekat
                                </h5>
                            </div>
                            <div class="card-body">
                                <div id="upcomingAppointmentsList">
                                    <div class="appointment-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Dr. Darwan Triyono, Sp. M</h6>
                                                <p class="text-muted small mb-0">Spesialis Mata</p>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0"><strong>20 Juni 2023</strong></p>
                                                <p class="text-muted small mb-0">10:00 - 11:00</p>
                                                <span class="status-badge status-confirmed">Dikonfirmasi</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="appointment-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Dr. Anggraini Dian Puspitadewi, Sp. PD</h6>
                                                <p class="text-muted small mb-0">Spesialis Penyakit Dalam</p>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0"><strong>25 Juni 2023</strong></p>
                                                <p class="text-muted small mb-0">14:00 - 15:00</p>
                                                <span class="status-badge status-pending">Menunggu</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-bell me-2"></i>Pengumuman</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="me-3">
                                        <i class="fas fa-info-circle text-primary"></i>
                                    </div>
                                    <div>
                                        <h6>Jam Kunjungan Pasien</h6>
                                        <p class="text-muted small mb-0">11.00 - 13.00 dan 17.00 - 19.00</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <i class="fas fa-hospital text-success"></i>
                                    </div>
                                    <div>
                                        <h6>Fasilitas Baru</h6>
                                        <p class="text-muted small mb-0">Layanan MRI 24 jam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Appointments Tab -->
            <div class="tab-pane fade" id="appointments" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div id="appointmentsList">
                            <div class="appointment-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Dr. Darwan Triyono, Sp. M</h6>
                                        <p class="text-muted small mb-0">Spesialis Mata</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0"><strong>20 Juni 2023</strong></p>
                                        <p class="text-muted small mb-0">10:00 - 11:00</p>
                                        <span class="status-badge status-confirmed">Dikonfirmasi</span>
                                    </div>
                                </div>
                            </div>
                            <div class="appointment-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Dr. Anggraini Dian Puspitadewi, Sp. PD</h6>
                                        <p class="text-muted small mb-0">Spesialis Penyakit Dalam</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0"><strong>25 Juni 2023</strong></p>
                                        <p class="text-muted small mb-0">14:00 - 15:00</p>
                                        <span class="status-badge status-pending">Menunggu</span>
                                    </div>
                                </div>
                            </div>
                            <div class="appointment-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Dr. Solehah Catur Rahayu, Sp.JP</h6>
                                        <p class="text-muted small mb-0">Spesialis Jantung</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0"><strong>10 Juni 2023</strong></p>
                                        <p class="text-muted small mb-0">09:00 - 10:00</p>
                                        <span class="status-badge status-completed">Selesai</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Medical Records Tab -->
            <div class="tab-pane fade" id="medical" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div id="medicalRecordsList">
                            <div class="medical-record-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Pemeriksaan Mata</h6>
                                        <p class="text-muted small mb-0">Dr. Darwan Triyono, Sp. M</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0"><strong>15 Juni 2023</strong></p>
                                        <button class="btn btn-sm btn-outline-primary mt-2">Lihat
                                            Detail</button>
                                    </div>
                                </div>
                            </div>
                            <div class="medical-record-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Pemeriksaan Darah Rutin</h6>
                                        <p class="text-muted small mb-0">Dr. Anggraini Dian Puspitadewi, Sp. PD
                                        </p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0"><strong>10 Juni 2023</strong></p>
                                        <button class="btn btn-sm btn-outline-primary mt-2">Lihat
                                            Detail</button>
                                    </div>
                                </div>
                            </div>
                            <div class="medical-record-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Pemeriksaan Jantung</h6>
                                        <p class="text-muted small mb-0">Dr. Solehah Catur Rahayu, Sp.JP</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0"><strong>5 Juni 2023</strong></p>
                                        <button class="btn btn-sm btn-outline-primary mt-2">Lihat
                                            Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Billing Tab -->
            <div class="tab-pane fade" id="billing" role="tabpanel">
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h6>Total Tagihan</h6>
                                <h3 class="text-primary" id="totalBilling">Rp 1.500.000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h6>Sudah Dibayar</h6>
                                <h3 class="text-success" id="paidBilling">Rp 1.000.000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h6>Menunggu Pembayaran</h6>
                                <h3 class="text-danger" id="pendingBilling">Rp 500.000</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div id="billingList">
                            <div class="billing-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Pemeriksaan Mata</h6>
                                        <p class="text-muted small mb-0">20 Juni 2023</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0"><strong>Rp 500.000</strong></p>
                                        <span class="status-badge status-unpaid">Belum Dibayar</span>
                                        <button class="btn btn-sm btn-primary mt-2">Bayar Sekarang</button>
                                    </div>
                                </div>
                            </div>
                            <div class="billing-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Pemeriksaan Darah Rutin</h6>
                                        <p class="text-muted small mb-0">10 Juni 2023</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0"><strong>Rp 300.000</strong></p>
                                        <span class="status-badge status-paid">Dibayar</span>
                                    </div>
                                </div>
                            </div>
                            <div class="billing-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Pemeriksaan Jantung</h6>
                                        <p class="text-muted small mb-0">5 Juni 2023</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0"><strong>Rp 700.000</strong></p>
                                        <span class="status-badge status-paid">Dibayar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Tab -->
            <div class="tab-pane fade" id="profile" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <form id="profileForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="profileName" value="John Doe" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">No. KTP</label>
                                    <input type="text" class="form-control" id="profileKTP" value="3201011234560001"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="profileDOB" value="1988-05-15" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="profileGender" required>
                                        <option value="L" selected>Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">No. Telepon</label>
                                    <input type="tel" class="form-control" id="profilePhone" value="08123456789"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" id="profileEmail"
                                        value="john.doe@example.com">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Alamat</label>
                                    <textarea class="form-control" id="profileAddress" rows="3"
                                        required>Jl. Contoh No. 123, Jakarta Selatan</textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Alergi</label>
                                    <input type="text" class="form-control" id="profileAllergies"
                                        placeholder="Contoh: Seafood, Penicillin" value="Seafood">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Riwayat Penyakit</label>
                                    <input type="text" class="form-control" id="profileDiseases"
                                        placeholder="Contoh: Diabetes, Hipertensi" value="Hipertensi">
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-2"></i>Simpan Perubahan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="news" role="tabpanel">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4><i class="fas fa-newspaper me-2"></i>Manajemen Berita</h4>
                    <div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewsModal">
                            <i class="fas fa-plus me-2"></i>Tambah Berita
                        </button>
                    </div>
                </div>

                <!-- Filter dan Pencarian -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    <input type="text" class="form-control" id="newsSearch"
                                        placeholder="Cari judul atau konten...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" id="newsCategoryFilter">
                                    <option value="">Semua Kategori</option>
                                    <option value="pengumuman">Pengumuman</option>
                                    <option value="kesehatan">Kesehatan</option>
                                    <option value="event">Event</option>
                                    <option value="fasilitas">Fasilitas</option>
                                    <option value="layanan">Layanan</option>
                                    <option value="prestasi">Prestasi</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" id="newsStatusFilter">
                                    <option value="">Semua Status</option>
                                    <option value="publish">Terbit</option>
                                    <option value="draft">Draft</option>
                                    <option value="archive">Arsip</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-outline-primary w-100" id="applyFilterBtn">
                                    <i class="fas fa-filter me-2"></i>Filter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistik Berita -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6>Total Berita</h6>
                                        <h3 id="totalNewsCount">0</h3>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-newspaper fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6>Terbit</h6>
                                        <h3 id="publishedNewsCount">0</h3>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-check-circle fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6>Draft</h6>
                                        <h3 id="draftNewsCount">0</h3>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-edit fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6>Terbaru</h6>
                                        <h3 id="recentNewsCount">0</h3>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-clock fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabel Berita -->
                <div class="card">
                    <div class="card-body">
                        <!-- Loading Indicator -->
                        <div id="newsLoading" class="text-center py-5" style="display: none;">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <p class="mt-2">Memuat data berita...</p>
                        </div>

                        <!-- Empty State -->
                        <div id="newsEmpty" class="text-center py-5" style="display: none;">
                            <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                            <h5>Belum Ada Berita</h5>
                            <p class="text-muted">Mulai tambahkan berita pertama Anda dengan klik tombol di atas
                            </p>
                        </div>

                        <!-- Tabel Berita -->
                        <div id="newsTableContainer">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="50">
                                                <input type="checkbox" class="form-check-input" id="selectAllNews">
                                            </th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Penulis</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th width="150">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="newsList">
                                        <!-- Data berita akan ditampilkan di sini -->
                                    </tbody>
                                </table>
                            </div>

                            <!-- Bulk Actions -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="d-flex align-items-center">
                                    <select class="form-select form-select-sm me-2" id="bulkActionSelect"
                                        style="width: auto;">
                                        <option value="">Pilih Aksi</option>
                                        <option value="publish">Terbitkan</option>
                                        <option value="draft">Set ke Draft</option>
                                        <option value="archive">Arsipkan</option>
                                        <option value="delete">Hapus</option>
                                    </select>
                                    <button class="btn btn-sm btn-outline-primary" id="applyBulkActionBtn" disabled>
                                        Terapkan
                                    </button>
                                </div>

                                <!-- Pagination -->
                                <nav aria-label="Page navigation">
                                    <ul class="pagination pagination-sm mb-0" id="newsPagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Detail Berita -->
                <div class="modal fade" id="newsDetailModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Berita</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="newsDetailContent">
                                    <!-- Detail berita akan ditampilkan di sini -->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" id="editFromDetailBtn">
                                    <i class="fas fa-edit me-2"></i>Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    // Sample data untuk demonstrasi
                    const sampleNewsData = [
                        {
                            id: 1,
                            title: "RSUD Meluncurkan Layanan Telemedicine",
                            category: "layanan",
                            author: "Admin",
                            date: "2024-01-15",
                            status: "publish",
                            summary: "Layanan telemedicine untuk memudahkan pasien berkonsultasi jarak jauh",
                            content: "Konten lengkap berita..."
                        },
                        {
                            id: 2,
                            title: "Seminar Kesehatan Mental Bulan Ini",
                            category: "event",
                            author: "Humas",
                            date: "2024-01-14",
                            status: "draft",
                            summary: "Seminar tentang pentingnya kesehatan mental",
                            content: "Konten lengkap berita..."
                        },
                        {
                            id: 3,
                            title: "Penghargaan Akreditasi RS",
                            category: "prestasi",
                            author: "Direktur",
                            date: "2024-01-13",
                            status: "publish",
                            summary: "RS mendapatkan penghargaan akreditasi tingkat nasional",
                            content: "Konten lengkap berita..."
                        }
                    ];

                    // Fungsi untuk render tabel berita
                    function renderNewsTable(data = sampleNewsData) {
                        const tbody = document.getElementById('newsList');
                        tbody.innerHTML = '';

                        if (data.length === 0) {
                            document.getElementById('newsEmpty').style.display = 'block';
                            document.getElementById('newsTableContainer').style.display = 'none';
                            return;
                        }

                        document.getElementById('newsEmpty').style.display = 'none';
                        document.getElementById('newsTableContainer').style.display = 'block';

                        data.forEach(news => {
                            const statusBadge = getStatusBadge(news.status);
                            const categoryBadge = getCategoryBadge(news.category);

                            const row = `
                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input news-checkbox" data-id="${news.id}">
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="https://picsum.photos/seed/news${news.id}/40/40" class="rounded me-2" alt="Thumbnail">
                            <div>
                                <div class="fw-bold">${news.title}</div>
                                <small class="text-muted">${news.summary}</small>
                            </div>
                        </div>
                    </td>
                    <td>${categoryBadge}</td>
                    <td>${news.author}</td>
                    <td>${formatDate(news.date)}</td>
                    <td>${statusBadge}</td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-primary" onclick="viewNewsDetail(${news.id})" title="Lihat Detail">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-outline-secondary" onclick="editNews(${news.id})" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-outline-danger" onclick="deleteNews(${news.id})" title="Hapus">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `;
                            tbody.innerHTML += row;
                        });

                        updateStatistics(data);
                    }

                    // Fungsi helper
                    function getStatusBadge(status) {
                        const badges = {
                            'publish': '<span class="badge bg-success">Terbit</span>',
                            'draft': '<span class="badge bg-warning">Draft</span>',
                            'archive': '<span class="badge bg-secondary">Arsip</span>'
                        };
                        return badges[status] || status;
                    }

                    function getCategoryBadge(category) {
                        const badges = {
                            'pengumuman': '<span class="badge bg-info">Pengumuman</span>',
                            'kesehatan': '<span class="badge bg-primary">Kesehatan</span>',
                            'event': '<span class="badge bg-warning text-dark">Event</span>',
                            'fasilitas': '<span class="badge bg-success">Fasilitas</span>',
                            'layanan': '<span class="badge bg-danger">Layanan</span>',
                            'prestasi': '<span class="badge bg-purple">Prestasi</span>',
                            'lainnya': '<span class="badge bg-secondary">Lainnya</span>'
                        };
                        return badges[category] || category;
                    }

                    function formatDate(dateString) {
                        const options = { year: 'numeric', month: 'short', day: 'numeric' };
                        return new Date(dateString).toLocaleDateString('id-ID', options);
                    }

                    // Update statistik
                    function updateStatistics(data) {
                        document.getElementById('totalNewsCount').textContent = data.length;
                        document.getElementById('publishedNewsCount').textContent = data.filter(n => n.status === 'publish').length;
                        document.getElementById('draftNewsCount').textContent = data.filter(n => n.status === 'draft').length;
                        document.getElementById('recentNewsCount').textContent = data.filter(n => {
                            const newsDate = new Date(n.date);
                            const today = new Date();
                            const diffTime = Math.abs(today - newsDate);
                            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                            return diffDays <= 7;
                        }).length;
                    }

                    // Event Listeners
                    document.getElementById('refreshNewsBtn').addEventListener('click', function () {
                        showLoading();
                        setTimeout(() => {
                            renderNewsTable();
                            hideLoading();
                            showToast('Data berita berhasil diperbarui', 'success');
                        }, 1000);
                    });

                    document.getElementById('newsSearch').addEventListener('input', function (e) {
                        const searchTerm = e.target.value.toLowerCase();
                        const filtered = sampleNewsData.filter(news =>
                            news.title.toLowerCase().includes(searchTerm) ||
                            news.summary.toLowerCase().includes(searchTerm)
                        );
                        renderNewsTable(filtered);
                    });

                    document.getElementById('newsCategoryFilter').addEventListener('change', function (e) {
                        const category = e.target.value;
                        const filtered = category ?
                            sampleNewsData.filter(news => news.category === category) :
                            sampleNewsData;
                        renderNewsTable(filtered);
                    });

                    document.getElementById('newsStatusFilter').addEventListener('change', function (e) {
                        const status = e.target.value;
                        const filtered = status ?
                            sampleNewsData.filter(news => news.status === status) :
                            sampleNewsData;
                        renderNewsTable(filtered);
                    });

                    // Select all checkbox
                    document.getElementById('selectAllNews').addEventListener('change', function () {
                        const checkboxes = document.querySelectorAll('.news-checkbox');
                        checkboxes.forEach(cb => cb.checked = this.checked);
                        updateBulkActionButton();
                    });

                    // Bulk action
                    document.addEventListener('change', function (e) {
                        if (e.target.classList.contains('news-checkbox')) {
                            updateBulkActionButton();
                        }
                    });

                    function updateBulkActionButton() {
                        const checkedBoxes = document.querySelectorAll('.news-checkbox:checked');
                        const applyBtn = document.getElementById('applyBulkActionBtn');
                        applyBtn.disabled = checkedBoxes.length === 0;
                    }

                    // Loading functions
                    function showLoading() {
                        document.getElementById('newsLoading').style.display = 'block';
                        document.getElementById('newsTableContainer').style.display = 'none';
                    }

                    function hideLoading() {
                        document.getElementById('newsLoading').style.display = 'none';
                        document.getElementById('newsTableContainer').style.display = 'block';
                    }

                    // Toast notification
                    function showToast(message, type = 'info') {
                        const toastHtml = `
            <div class="toast align-items-center text-white bg-${type} border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        ${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        `;

                        const toastContainer = document.createElement('div');
                        toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
                        toastContainer.innerHTML = toastHtml;
                        document.body.appendChild(toastContainer);

                        const toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                        toast.show();

                        setTimeout(() => toastContainer.remove(), 5000);
                    }

                    // Action functions
                    window.viewNewsDetail = function (id) {
                        const news = sampleNewsData.find(n => n.id === id);
                        if (news) {
                            const detailContent = `
                <h4>${news.title}</h4>
                <div class="mb-3">
                    ${getCategoryBadge(news.category)} ${getStatusBadge(news.status)}
                </div>
                <p><strong>Penulis:</strong> ${news.author}</p>
                <p><strong>Tanggal:</strong> ${formatDate(news.date)}</p>
                <hr>
                <p>${news.content}</p>
            `;
                            document.getElementById('newsDetailContent').innerHTML = detailContent;

                            const modal = new bootstrap.Modal(document.getElementById('newsDetailModal'));
                            modal.show();
                        }
                    };

                    window.editNews = function (id) {
                        // Trigger edit modal
                        const editModal = new bootstrap.Modal(document.getElementById('addNewsModal'));
                        editModal.show();
                    };

                    window.deleteNews = function (id) {
                        if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
                            showToast('Berita berhasil dihapus', 'success');
                            // Remove from data and re-render
                            const index = sampleNewsData.findIndex(n => n.id === id);
                            if (index > -1) {
                                sampleNewsData.splice(index, 1);
                                renderNewsTable();
                            }
                        }
                    };

                    // Initial render
                    renderNewsTable();
                });
            </script>

            <!-- Instagram Tab -->
            <div class="tab-pane fade" id="instagram" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Tambah Postingan Instagram</h5>
                        <div class="mb-4">
                            <label for="igImage" class="form-label">Foto Postingan</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="igImage" accept="image/*">
                                <button class="btn btn-outline-secondary" type="button" id="previewImageBtn">
                                    <i class="fas fa-eye"></i> Preview
                                </button>
                            </div>
                            <div class="form-text">Pilih foto untuk postingan Instagram (maks. 5MB)</div>
                            <!-- Preview gambar -->
                            <div id="imagePreview" class="mt-3" style="display: none;">
                                <img id="previewImg" src="" alt="Preview" class="img-thumbnail"
                                    style="max-width: 300px;">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="igLink" class="form-label">Tautan Konten</label>
                            <div class="input-group">
                                <input type="url" class="form-control" id="igLink"
                                    placeholder="https://example.com/konten">
                                <button class="btn btn-outline-secondary" type="button" id="copyLinkBtn">
                                    <i class="fas fa-copy"></i> Salin
                                </button>
                            </div>
                            <div class="form-text">Salin tautan konten yang ingin dibagikan ke Instagram</div>
                        </div>
                        <div class="mb-4">
                            <label for="igCaption" class="form-label">Caption</label>
                            <textarea class="form-control" id="igCaption" rows="3"
                                placeholder="Tulis caption untuk postingan Instagram..."></textarea>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-primary" id="uploadIgBtn">
                                <i class="fab fa-instagram me-2"></i>Upload ke Instagram
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Postingan Terkini</h5>
                        <div id="instagramPosts">
                            <div class="text-center py-4">
                                <i class="fab fa-instagram fa-3x text-muted mb-3"></i>
                                <p class="text-muted">Belum ada postingan Instagram</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                                <li><a href="#">Rawat Jalan</a></li>
                                <li><a href="#">Rawat Inap</a></li>
                                <li><a href="#">Pemeriksaan Lab</a></li>
                                <li><a href="#">Radiologi</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                            <h5 class="footer-title">Informasi</h5>
                            <ul class="footer-links">
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Fasilitas</a></li>
                                <li><a href="#">Tim Dokter</a></li>
                                <li><a href="#">Karir</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <h5 class="footer-title">Kontak</h5>
                            <ul class="footer-links">
                                <li><i class="fas fa-map-marker-alt me-2"></i> Jl. Sehat No. 123, Jakarta</li>
                                <li><i class="fas fa-phone-alt me-2"></i> (021) 123-4567</li>
                                <li><i class="fas fa-envelope me-2"></i> info@rssehat.com</li>
                                <li><i class="fas fa-clock me-2"></i> 24 Jam</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4" style="background-color: rgba(255,255,255,0.1);">
                    <div class="text-center">
                        <p class="mb-0">&copy; 2023 RSUD Daha Husada. All rights reserved.</p>
                    </div>
                </div>
            </footer>