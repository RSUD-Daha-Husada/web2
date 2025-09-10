@if (!request()->is('patient-portal'))
        @include('layouts.footer')
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
    @endif