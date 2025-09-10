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
                            <a href="<?php echo e(url('/')); ?>" class="logout-btn">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>


    </div><?php /**PATH /Users/bilalabdillah/Documents/klinik-laravel/resources/views/components/patient_portal/header.blade.php ENDPATH**/ ?>