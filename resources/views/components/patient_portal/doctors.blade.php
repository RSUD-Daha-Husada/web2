<div id="doctorsSection" style="display: none;">

<!-- Hero Section -->
<a href="#" onclick="showDashboard()" class="btn btn-danger btn-logout-floating">
    <i class="fas fa-sign-out-alt"></i> Kembali
</a>
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="display-4 fw-bold mb-4">Tim Dokter Ahli Terbaik Kami</h1>
                <p class="lead mb-4">Kami memiliki lebih dari 50 dokter spesialis dengan pengalaman
                    bertahun-tahun untuk melayani Anda dengan terbaik.</p>
                <div class="d-flex gap-3">
                    <button class="btn book-btn">
                        <i class="fas fa-user-md me-2"></i>Temukan Dokter
                    </button>
                    <button class="btn-hubungi">
                        <i class="fas fa-phone-alt"></i> Hubungi Kami
                    </button>
                </div>
            </div>
            <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="1000"
                data-aos-delay="300">
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
            <p class="lead">Pilih spesialisasi yang Anda butuhkan dari tim dokter kami yang berpengalaman
            </p>
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

<!-- Add Doctor Button -->
<button class="add-doctor-btn" data-bs-toggle="modal" data-bs-target="#addDoctorModal"
    title="Tambah Dokter Baru">
    <i class="fas fa-plus"></i>
</button>
<!-- Add Doctor Modal -->
<div class="modal fade" id="addDoctorModal" tabindex="-1" aria-labelledby="addDoctorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDoctorModalLabel">
                    <i class="fas fa-user-plus me-2"></i>Tambah Dokter Baru
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addDoctorForm" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="newName" class="form-label">Nama Lengkap & Gelar</label>
                                <input type="text" class="form-control" id="newName"
                                    placeholder="Contoh: Dr. Arsi Widyastriastuti, Sp.A" required>
                            </div>
                            <div class="mb-3">
                                <label for="newTitle" class="form-label">Tulis Spesialis</label>
                                <input type="text" class="form-control" id="newTitle"
                                    placeholder="Contoh: Spesialis Mata" required>
                            </div>
                            <div class="mb-3">
                                <label for="newSpecialty" class="form-label">Spesialisasi</label>
                                <select class="form-select" id="newSpecialty" required>
                                    <option value="" selected disabled>Pilih spesialisasi</option>
                                    <option value="mata">Mata</option>
                                    <option value="penyakit-dalam">Penyakit Dalam</option>
                                    <option value="kulit-kelamin">Kulit & Kelamin</option>
                                    <option value="jantung">Jantung</option>
                                    <option value="bedah">Bedah</option>
                                    <option value="orthopedi">Orthopedi</option>
                                    <option value="tht">THT</option>
                                    <option value="kandungan">Kandungan</option>
                                    <option value="anak">Anak</option>
                                    <option value="umum">Umum</option>
                                    <option value="kusta">Kusta</option>
                                    <option value="gigi">Gigi</option>
                                    <option value="rehabilitasi">Rehabilitasi</option>
                                    <option value="urologi">Urologi</option>
                                    <option value="neurologi">Neurologi</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="newDescription" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="newDescription" rows="3"
                                    placeholder="Deskripsi keahlian dokter..." required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="newPhone" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="newPhone"
                                    placeholder="(021) 123-4567" required>
                            </div>
                            <div class="mb-3">
                                <label for="newEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="newEmail"
                                    placeholder="dokter@rssehat.com" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="newEducation" class="form-label">Pendidikan</label>
                                <input type="text" class="form-control" id="newEducation"
                                    placeholder="Contoh: S1 Kedokteran UI" required>
                            </div>
                            <div class="mb-3">
                                <label for="newExperience" class="form-label">Pengalaman</label>
                                <input type="text" class="form-control" id="newExperience"
                                    placeholder="Contoh: 10 tahun" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="newSchedule" class="form-label">Jadwal Praktik</label>
                                <input type="text" class="form-control" id="newSchedule"
                                    placeholder="Contoh: Senin-Jumat: 08:00-16:00" required>
                            </div>
                            <div class="mb-3">
                                <label for="newImage" class="form-label">Foto Profil</label>
                                <input type="file" class="form-control" id="newImage" accept="image/*">
                                <div class="form-text">Kosongkan jika ingin menggunakan foto default</div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Batal
                </button>
                <button type="button" class="btn book-btn" id="saveNewDoctorBtn">
                    <i class="fas fa-save me-2"></i>Simpan Dokter
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Dokter -->
<div class="modal fade" id="editDoctorModal" tabindex="-1" aria-labelledby="editDoctorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDoctorModalLabel">Edit Data Dokter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editDoctorForm" method="POST" action="" enctype="multipart/form-data">
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit_name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="edit_name" name="name" required>
                                @error('name')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="edit_specialty" class="form-label">Spesialisasi</label>
                                <select class="form-select" id="edit_specialty" name="specialty" required>
                                    <option value="mata">Mata</option>
                                    <option value="penyakit-dalam">Penyakit Dalam</option>
                                    <option value="kulit-kelamin">Kulit & Kelamin</option>
                                    <option value="jantung">Jantung</option>
                                    <option value="bedah">Bedah</option>
                                    <option value="orthopedi">Orthopedi</option>
                                    <option value="tht">THT</option>
                                    <option value="kandungan">Kandungan</option>
                                    <option value="anak">Anak</option>
                                    <option value="umum">Umum</option>
                                    <option value="kusta">Kusta</option>
                                    <option value="gigi">Gigi</option>
                                    <option value="rehabilitasi">Rehabilitasi</option>
                                    <option value="urologi">Urologi</option>
                                    <option value="neurologi">Neurologi</option>
                                </select>
                                @error('specialty')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="edit_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="edit_email" name="email" required>
                                @error('email')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="edit_phone" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="edit_phone" name="phone" required>
                                @error('phone')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit_description" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="edit_description" name="description" rows="3"
                                    required></textarea>
                                @error('description')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="edit_education" class="form-label">Pendidikan</label>
                                <input type="text" class="form-control" id="edit_education" name="education"
                                    required>
                                @error('education')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="edit_experience" class="form-label">Pengalaman</label>
                                <input type="text" class="form-control" id="edit_experience" name="experience"
                                    required>
                                @error('experience')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="edit_schedule" class="form-label">Jadwal Praktik</label>
                                <input type="text" class="form-control" id="edit_schedule" name="schedule"
                                    required>
                                @error('schedule')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="edit_photo" class="form-label">Foto Profil</label>
                                <input type="file" class="form-control" id="edit_photo" name="photo"
                                    accept="image/*">
                                <div class="form-text">Kosongkan jika tidak ingin mengubah foto profil</div>
                                <div id="edit_photo_preview" class="mt-2"></div>
                                @error('photo')
                                    <div class="invalid-feedback d-block">
                                        <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="saveDoctorChanges">Simpan
                    Perubahan</button>
            </div>
        </div>
    </div>
</div>
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
                            <p class="mb-1"><i class="fas fa-user-md me-2"></i> <span id="modalTitle"></span>
                            </p>
                            <p class="mb-1"><i class="fas fa-stethoscope me-2"></i> <span
                                    id="modalSpecialty"></span></p>
                            <p class="mb-1"><i class="fas fa-hospital me-2"></i> RSUD Daha Husada</p>
                            <p class="mb-1"><i class="fas fa-phone-alt me-2"></i> <span id="modalPhone"></span>
                            </p>
                            <p class="mb-0"><i class="fas fa-envelope me-2"></i> <span id="modalEmail"></span>
                            </p>
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
</div>