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
    </div><?php /**PATH /Users/bilalabdillah/Documents/klinik-laravel/resources/views/components/index/doctors.blade.php ENDPATH**/ ?>