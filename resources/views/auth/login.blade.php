<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Klinik Sehat Sentosa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary-color: #6a11cb;
            --secondary-color: #2575fc;
            --light-color: #f8f9fa;
            --dark-color: #333;
            --success-color: #28a745;
            --danger-color: #dc3545;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .login-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            width: 100%;
            max-width: 1000px;
            min-height: 550px;
            animation: fadeIn 0.8s ease-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .login-form {
            padding: 50px 40px;
            position: relative;
        }
        .login-image {
            background: url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') center/cover no-repeat;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            padding: 40px;
            text-align: center;
        }
        .login-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(106, 17, 203, 0.8) 0%, rgba(37, 117, 252, 0.8) 100%);
        }
        .login-image .content {
            position: relative;
            z-index: 1;
        }
        .login-image h1 {
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }
        .login-image p {
            font-size: 1.1rem;
            max-width: 80%;
            margin: 0 auto;
            line-height: 1.6;
        }
        .form-control,
        .input-group-text {
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            padding: 12px 15px;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        .input-group {
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .input-group:focus-within {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(106, 17, 203, 0.2);
        }
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(106, 17, 203, 0.15);
        }
        .input-group-text {
            background-color: var(--light-color);
            border-right: none;
            color: var(--primary-color);
        }
        .input-group .form-control {
            border-left: none;
        }
        .btn-login {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            border-radius: 50px;
            padding: 14px 30px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(106, 17, 203, 0.4);
            color: white;
        }
        .btn-login:active {
            transform: translateY(1px);
        }
        .brand-logo {
            text-align: center;
            margin-bottom: 40px;
        }
        .brand-logo i {
            font-size: 3.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
        .brand-logo h2 {
            font-weight: 700;
            color: var(--dark-color);
            font-size: 1.8rem;
        }
        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--dark-color);
        }
        .alert {
            border-radius: 10px;
            border: none;
            padding: 15px 20px;
            margin-bottom: 25px;
            animation: slideDown 0.5s ease-out;
        }
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .alert-danger {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger-color);
        }
        .alert-success {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .form-check-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(106, 17, 203, 0.25);
        }
        .text-center a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .text-center a:hover {
            color: var(--secondary-color);
            text-decoration: underline;
        }
        .password-toggle {
            cursor: pointer;
            color: #6c757d;
            transition: color 0.3s ease;
        }
        .password-toggle:hover {
            color: var(--primary-color);
        }
        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
        }
        @media (max-width: 767px) {
            .login-container {
                max-width: 450px;
                min-height: auto;
            }
            .login-form {
                padding: 40px 30px;
            }
            .login-image {
                min-height: 200px;
            }
            .login-image h1 {
                font-size: 1.8rem;
            }
            .login-image p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container row g-0">
            <div class="col-md-6 login-image d-none d-md-flex">
                <div class="content">
                    <h1>Selamat Datang Kembali</h1>
                    <p>Masuk ke akun Anda untuk mengakses sistem administrasi Klinik Sehat Sentosa</p>
                </div>
            </div>
            <div class="col-md-6 login-form">
                <div class="brand-logo">
                    <i class="fas fa-heartbeat"></i>
                    <h2>Klinik Sehat Sentosa</h2>
                </div>
                @if(session('error'))
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                    </div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}" id="loginForm">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                                required autocomplete="email" autofocus placeholder="nama@email.com">
                        </div>
                        @error('email')
                            <div class="invalid-feedback d-block">
                                <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" required
                                autocomplete="current-password" placeholder="•••••">
                            <span class="input-group-text password-toggle" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        @error('password')
                            <div class="invalid-feedback d-block">
                                <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">
                                Ingat saya
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="text-muted small" href="{{ route('password.request') }}">
                                Lupa password?
                            </a>
                        @endif
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-login" id="loginButton">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </button>
                    </div>
                </form>
                <!-- Di bagian bawah form login -->
                <div style="margin-top: 20px; padding: 10px; background: #f8f9fa; border-radius: 5px;">
                    <strong>Debug Info:</strong><br>
                    Auth Check: {{ auth()->check() ? 'Yes' : 'No' }}<br>
                    Session ID: {{ session()->getId() }}<br>
                    @if(auth()->check())
                        User: {{ auth()->user()->name }}<br>
                        Is Admin: {{ auth()->user()->is_admin ? 'Yes' : 'No' }}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        // Form submission animation
        document.getElementById('loginForm').addEventListener('submit', function () {
            const button = document.getElementById('loginButton');
            const originalContent = button.innerHTML;
            button.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Memproses...';
            button.disabled = true;
            // Re-enable after 5 seconds in case of network issues
            setTimeout(() => {
                button.innerHTML = originalContent;
                button.disabled = false;
            }, 5000);
        });
        // Add floating animation to input groups on focus
        const inputGroups = document.querySelectorAll('.input-group');
        inputGroups.forEach(group => {
            const input = group.querySelector('.form-control');
            input.addEventListener('focus', function () {
                group.style.transform = 'translateY(-3px)';
            });
            input.addEventListener('blur', function () {
                group.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>