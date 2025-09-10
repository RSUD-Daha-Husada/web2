<div id="loginSection" class="login-section">
    <div class="login-card">
            <div class="login-header">
                <i class="fas fa-user-md" style="font-size: 3rem;"></i>
                <h2 class="mt-3">Patient Portal</h2>
                <p class="mb-0">RSUD Daha Husada</p>
            </div>
            <div class="login-body">
                <form id="loginForm">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" id="fullName" placeholder="Masukkan nama lengkap"
                                required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            <input type="date" class="form-control" id="loginDOB" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">No. Telepon</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            <input type="tel" class="form-control" id="phoneNumber" placeholder="Masukkan no. telepon"
                                required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 btn-lg">
                        <i class="fas fa-sign-in-alt me-2"></i>Login
                    </button>
                </form>
                <div class="text-center mt-3">
                    <small class="text-muted">Data uji coba:</small>
                    <div class="mt-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary me-2"
                            onclick="fillTest('Ahmad Fauzi')">
                            Ahmad Fauzi
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary"
                            onclick="fillTest('Siti Rahayu')">
                            Siti Rahayu
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary"
                            onclick="fillTest('Budi Santoso')">
                            Budi Santoso
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>