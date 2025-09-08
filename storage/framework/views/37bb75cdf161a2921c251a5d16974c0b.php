<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Portal - RSUD Daha Husada</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary-color: #0d6e0d;
            --secondary-color: #28a745;
            --accent-color: #5cb85c;
            --primary: #4158D0;
            --secondary: #C850C0;
            --tertiary: #FFCC70;
            --gradient: linear-gradient(135deg, rgba(6, 182, 212, 0.98) 0%, rgba(34, 197, 94, 0.96) 50%, rgba(132, 204, 22, 0.93) 100%);
            --gradient-three: linear-gradient(135deg, #4158D0 0%, #C850C0 50%, #FFCC70 100%);
            --light: #f8f9fa;
            --dark: #212529;
            --text-light: #6c757d;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }



        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e8f5e9 100%);
            min-height: 100vh;
            overflow-y: auto;
        }

        .login-section {
    position: relative;
    z-index: 10;
    height: 100vh;         
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    overflow: hidden;     
}

        .dashboard-section {
            display: none;
            min-height: 100vh;     

        }

        .login-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 30px;
            text-align: center;
        }

        .login-body {
            padding: 30px;
        }

        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
        }


        /* TAMBAHKAN CSS MODERN HEADER */
        .modern-header {
            background: var(--gradient);
            padding: 25px 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .modern-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://picsum.photos/seed/medical-pattern/1920/300.jpg');
            opacity: 0.05;
            mix-blend-mode: overlay;
        }

        .brand-section {
            display: flex;
            align-items: center;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            transition: all 0.3s ease;
        }

        .brand-logo:hover {
            transform: translateY(-2px);
        }

        .logo-icon {
            width: 60px;
            /* samakan */
            height: 60px;
            /* samakan */
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            /* opsional */
        }

        .logo-icon img {
            width: 100%;
            height: auto;
            /* jaga proporsi */
            object-fit: contain;
        }

        .brand-text h4 {
            margin: 0;
            margin-left: 15px;
            /* geser ke kanan */
            font-size: 1.8rem;
            /* perbesar dari 1.3 jadi 1.8 */
            font-weight: 700;
        }

        .brand-text p {
            margin: 0;
            margin-left: 15px;
            /* geser ke kanan juga */
            font-size: 1rem;
            /* perbesar dari 0.8 jadi 1 */
            opacity: 0.8;
        }

        .user-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 20px;
            display: flex;
            align-items: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .user-avatar {
            position: relative;
            margin-right: 20px;
        }

        .avatar-ring {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            position: relative;
            z-index: 1;
        }

        .avatar-ring::before {
            content: "";
            position: absolute;
            top: -3px;
            left: -3px;
            right: -3px;
            bottom: -3px;
            background: var(--gradient);
            border-radius: 50%;
            z-index: -1;
        }

        .status-indicator {
            position: absolute;
            bottom: 5px;
            right: 5px;
            width: 12px;
            height: 12px;
            background: #4ade80;
            border-radius: 50%;
            border: 2px solid white;
        }

        .user-details {
            flex: 1;
        }

        .welcome-text {
            margin-bottom: 8px;
        }

        .welcome-text span {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .welcome-text h3 {
            margin: 0;
            font-size: 1.4rem;
            font-weight: 700;
            color: white;
        }

        .user-meta {
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }

        .meta-item {
            display: flex;
            align-items: center;
        }

        .meta-item i {
            margin-right: 5px;
        }

        .meta-divider {
            margin: 0 10px;
            opacity: 0.5;
        }

        .header-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 15px;
        }

        .status-badge {
            background: rgba(74, 222, 128, 0.2);
            border: 1px solid rgba(74, 222, 128, 0.3);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            backdrop-filter: blur(10px);
        }

        .status-badge i {
            margin-right: 5px;
        }

        .logout-btn {
            background: rgba(239, 68, 68, 0.2);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .logout-btn:hover {
            background: rgba(239, 68, 68, 0.3);
            transform: translateY(-2px);
            color: white;
        }

        .logout-btn i {
            margin-right: 8px;
        }

        /* Modern Navigation */
        .modern-nav {
            background: white;
            padding: 15px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .modern-nav .nav-pills .nav-link {
            border-radius: 30px;
            padding: 10px 20px;
            margin: 0 5px;
            color: var(--text-light);
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .modern-nav .nav-pills .nav-link::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: var(--gradient);
            transition: width 0.3s ease;
            z-index: -1;
        }

        .modern-nav .nav-pills .nav-link:hover {
            color: var(--primary);
            transform: translateY(-2px);
        }

        .modern-nav .nav-pills .nav-link.active {
            background: var(--gradient);
            color: white;
        }

        .modern-nav .nav-pills .nav-link.active::before {
            width: 100%;
        }


        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: white;
            font-size: 1.5rem;
        }

        .stat-card h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            font-weight: 600;
        }

        .btn-primary {
            background: var(--gradient);
            border: none;
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-outline-danger {
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-danger:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.2);
        }

        .appointment-item,
        .medical-record-item,
        .billing-item {
            padding: 15px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .appointment-item:hover,
        .medical-record-item:hover,
        .billing-item:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }

        .appointment-item:last-child,
        .medical-record-item:last-child,
        .billing-item:last-child {
            border-bottom: none;
        }

        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status-confirmed {
            background-color: rgba(25, 135, 84, 0.1);
            color: #198754;
        }

        .status-pending {
            background-color: rgba(255, 193, 7, 0.1);
            color: #ffc107;
        }

        .status-completed {
            background-color: rgba(13, 110, 253, 0.1);
            color: #0d6efd;
        }

        .status-paid {
            background-color: rgba(25, 135, 84, 0.1);
            color: #198754;
        }

        .status-unpaid {
            background-color: rgba(220, 53, 69, 0.1);
            color: #dc3545;
        }

        .footer {
            display: none;
            background: var(--dark);
            color: white;
            padding: 40px 0 20px;
            margin-top: auto;
            flex-shrink: 0;
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
            margin-bottom: 10px;
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

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .toast-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1050;
        }

        /* Gaya untuk halaman dokter */
        .hero-section {
            background: var(--gradient);
            padding: 100px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://picsum.photos/seed/medical-pattern/1200/800.jpg');
            opacity: 0.1;
            mix-blend-mode: overlay;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            position: relative;
            display: inline-block;
            margin-bottom: 30px;
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--gradient);
            background-size: 200% 200%;
            animation: gradient 5s ease infinite;
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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .filter-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(0, 0, 0, 0.15);
        }

        .filter-btn.active {
            background: var(--gradient);
            background-size: 200% 200%;
            color: white;
            animation: gradient 5s ease infinite;
            border-color: transparent;
        }

        .doctor-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
        }

        .doctor-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .doctor-img {
            height: 250px;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .doctor-card:hover .doctor-img {
            transform: scale(1.05);
        }

        .doctor-info {
            padding: 25px;
        }

        .specialty-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 2;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            background: var(--gradient);
            background-size: 200% 200%;
            animation: gradient 5s ease infinite;
            color: white;
        }

        .doctor-name {
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .doctor-title {
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .doctor-detail {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            color: #6c757d;
        }

        .doctor-detail i {
            margin-right: 10px;
            color: var(--primary);
        }

        .book-btn {
            background: linear-gradient(135deg, #4158D0 0%, #C850C0 50%, #FFCC70 100%);
            background-size: 200% 200%;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .book-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            background-position: right center;
        }

        .book-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s;
        }

        .book-btn:hover::before {
            left: 100%;
        }

        .btn-hubungi {
            background: linear-gradient(135deg, #4158D0 0%, #C850C0 50%, #FFCC70 100%);
            color: #fff;
            padding: 12px 24px;
            font-size: 16px;
            border: none;
            border-radius: 50px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-hubungi:hover {
            background: linear-gradient(135deg, rgba(65, 89, 208, 0.83) 0%, rgb(198, 93, 191) 50%, rgb(244, 185, 77) 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .btn-hubungi i {
            font-size: 18px;
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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .search-input:focus {
            border-color: var(--primary);
            box-shadow: 0 5px 20px rgba(65, 88, 208, 0.2);
            outline: none;
        }

        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #adb5bd;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--gradient);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            margin-bottom: 10px;
        }

        .stat-title {
            color: var(--dark);
            font-weight: 600;
        }

        .testimonial {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            position: relative;
        }

        .testimonial::before {
            content: "" ";  
 position: absolute;
            top: -20px;
            left: 20px;
            font-size: 5rem;
            color: var(--secondary);
            opacity: 0.1;
            font-family: 'Playfair Display', serif;
        }

        .testimonial-content {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
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

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .add-doctor-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, .2);
            z-index: 1000;
            background: var(--gradient);
            color: white;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .add-doctor-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .3);
        }

        .modal-header {
            background: var(--gradient);
            color: white;
        }

        .modal-header .btn-close {
            filter: brightness(0) invert(1);
        }

        .news-item {
            transition: all 0.3s ease;
        }

        .news-item:hover {
            background-color: rgba(0, 0, 0, 0.02);
            border-radius: 8px;
            padding: 10px;
            margin: -10px;
        }

        .news-item img {
            transition: transform 0.3s ease;
        }

        .news-item:hover img {
            transform: scale(1.05);
        }

        .news-item h5 {
            color: var(--dark);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .news-item p {
            color: #6c757d;
            line-height: 1.5;
        }

        .btn-group-sm .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
            border-radius: 0.2rem;
        }

        /* CSS untuk Berita Preview */
        .berita-preview {
            padding: 40px 0;
            background-color: #f8f9fa;
            border-radius: 15px;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
        }

        .berita-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .berita-header h2 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .berita-header h2::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--gradient);
        }

        .berita-header p {
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto;
        }

        .berita-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .berita-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .berita-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .berita-img {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .berita-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .berita-card:hover .berita-img img {
            transform: scale(1.05);
        }

        .berita-kategori {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--gradient);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .berita-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .berita-tanggal {
            display: flex;
            align-items: center;
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .berita-tanggal i {
            margin-right: 8px;
        }

        .berita-content h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark);
            line-height: 1.4;
        }

        .berita-content p {
            color: #6c757d;
            margin-bottom: 20px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .berita-link {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-top: auto;
        }

        .berita-link:hover {
            color: var(--secondary);
        }

        .berita-link i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .berita-link:hover i {
            transform: translateX(5px);
        }

        .berita-more-container {
            text-align: center;
        }

        .berita-more-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 32px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            background: linear-gradient(45deg, #0066ff, #00c9ff);
            color: white;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0, 102, 255, 0.2);
            transition: all 0.3s ease;
        }

        .berita-more-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 102, 255, 0.3);
            color: white;
        }

        .berita-more-button i {
            margin-left: 10px;
        }

        /* Pastikan container memiliki padding yang cukup */
        .container {
            padding-bottom: 50px;
        }

        /* Atur jarak dengan footer */
        .tab-content {
            padding-bottom: 40px;
        }

        .btn-logout-floating {
            position: fixed;
            top: 100px;
            /* jarak dari atas */
            right: 20px;
            /* jarak dari kanan */
            z-index: 9999;

            background: rgba(255, 255, 255, 0.8);
            /* transparan lembut */
            color: #333;
            border: 1px solid #ddd;
            padding: 10px 18px;
            border-radius: 50px;

            font-size: 15px;
            font-weight: 500;

            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);

            transition: all 0.3s ease;
        }

        /* efek hover */
        .btn-logout-floating:hover {
            background: #f0f0f0;
            color: #007bff;
            /* berubah biru lembut saat hover */
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>


<body>
    <!-- Login Section -->


    <!-- Login Section (Hanya untuk Login) -->
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



    <!-- Dashboard Section (Berisi Header Modern + Konten Dashboard) -->
    <div id="dashboardSection" class="dashboard-section">
    <!-- Modern Header (Pindahkan ke sini) -->
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
                    <button class="nav-link" id="medical-tab" data-bs-toggle="tab" data-bs-target="#medical"
                        type="button">
                        <i class="fas fa-file-medical me-1"></i> Rekam Medis
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="billing-tab" data-bs-toggle="tab" data-bs-target="#billing"
                        type="button">
                        <i class="fas fa-file-invoice-dollar me-1"></i> Tagihan
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button">
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
                                        <input type="text" class="form-control" id="profileName" value="John Doe"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">No. KTP</label>
                                        <input type="text" class="form-control" id="profileKTP" value="3201011234560001"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="profileDOB" value="1988-05-15"
                                            required>
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
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
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

    <!-- Modal untuk Tambah/Edit Berita -->
    <div class="modal fade" id="addNewsModal" tabindex="-1" aria-labelledby="addNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewsModalLabel">
                        <i class="fas fa-newspaper me-2"></i>Edit Berita
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="newsForm">
                        <input type="hidden" id="newsId">

                        <!-- Bagian 1: Informasi Utama -->
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Informasi Utama</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="newsTitle" class="form-label">Judul Berita <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="newsTitle" required>
                                    <div class="form-text">Judul yang jelas dan informatif (maks. 100 karakter)
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newsCategory" class="form-label">Kategori <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="newsCategory" required>
                                                <option value="">Pilih Kategori</option>
                                                <option value="pengumuman">Pengumuman</option>
                                                <option value="kesehatan">Kesehatan</option>
                                                <option value="event">Event</option>
                                                <option value="fasilitas">Fasilitas</option>
                                                <option value="layanan">Layanan</option>
                                                <option value="prestasi">Prestasi</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newsDate" class="form-label">Tanggal Publikasi <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="newsDate" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="newsSummary" class="form-label">Ringkasan Berita <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" id="newsSummary" rows="2" required
                                        placeholder="Tuliskan ringkasan singkat (maks. 200 karakter)"></textarea>
                                    <div class="form-text">Ringkasan akan muncul di halaman utama</div>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian 2: Konten Berita -->
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Konten Berita</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="newsContent" class="form-label">Isi Berita <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" id="newsContent" rows="8" required></textarea>
                                    <div class="form-text">Gunakan paragraf pendek untuk kemudahan pembaca</div>
                                </div>

                                <div class="mb-3">
                                    <label for="newsTags" class="form-label">Tag/Kata Kunci</label>
                                    <input type="text" class="form-control" id="newsTags"
                                        placeholder="Contoh: vaksinasi, covid, anak">
                                    <div class="form-text">Pisahkan dengan koma (,)</div>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian 3: Media & Lampiran -->
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Media & Lampiran</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="newsImage" class="form-label">Gambar Utama <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="newsImage" accept="image/*" required>
                                    <div class="form-text">Format: JPG/PNG, maks. 2MB, rasio 16:9 disarankan</div>
                                    <div id="newsImagePreview" class="mt-2" style="display: none;">
                                        <img id="previewNewsImg" src="" alt="Preview" class="img-thumbnail"
                                            style="max-width: 300px;">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="newsImageCaption" class="form-label">Keterangan Gambar</label>
                                    <input type="text" class="form-control" id="newsImageCaption"
                                        placeholder="Keterangan untuk gambar utama">
                                </div>

                                <div class="mb-3">
                                    <label for="newsAttachments" class="form-label">Lampiran Tambahan</label>
                                    <input type="file" class="form-control" id="newsAttachments" multiple>
                                    <div class="form-text">PDF, DOC, atau gambar pendukung (maks. 5MB per file)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian 4: Informasi Publikasi -->
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Informasi Publikasi</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newsAuthor" class="form-label">Penulis <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="newsAuthor" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newsSource" class="form-label">Sumber Berita</label>
                                            <input type="text" class="form-control" id="newsSource"
                                                placeholder="Contoh: Humas RS, Dinkes, dll">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newsStatus" class="form-label">Status <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="newsStatus" required>
                                                <option value="draft">Draft</option>
                                                <option value="publish">Terbit</option>
                                                <option value="archive">Arsip</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="newsPriority" class="form-label">Prioritas</label>
                                            <select class="form-select" id="newsPriority">
                                                <option value="normal">Normal</option>
                                                <option value="high">Tinggi</option>
                                                <option value="headline">Headline</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="newsShowHomepage">
                                        <label class="form-check-label" for="newsShowHomepage">
                                            Tampilkan di halaman utama
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="newsNotes" class="form-label">Catatan Internal</label>
                                    <textarea class="form-control" id="newsNotes" rows="2"
                                        placeholder="Catatan untuk tim redaksi"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="saveNewsBtn">Simpan Berita</button>
                    <button type="button" class="btn btn-success" id="publishNewsBtn">Simpan & Terbitkan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Instagram Post Modal -->
    <div class="modal fade" id="editInstagramPostModal" tabindex="-1" aria-labelledby="editInstagramPostModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editInstagramPostModalLabel">
                        <i class="fab fa-instagram me-2"></i>Edit Postingan Instagram
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editInstagramPostForm">
                        <input type="hidden" id="editPostId">

                        <!-- Informasi Postingan -->
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Informasi Postingan</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editPostDate" class="form-label">Tanggal Posting</label>
                                            <input type="datetime-local" class="form-control" id="editPostDate"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editPostStatus" class="form-label">Status</label>
                                            <select class="form-select" id="editPostStatus">
                                                <option value="published">Terbit</option>
                                                <option value="scheduled">Terjadwal</option>
                                                <option value="draft">Draft</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editPostCategory" class="form-label">Kategori</label>
                                            <select class="form-select" id="editPostCategory">
                                                <option value="">Pilih Kategori</option>
                                                <option value="promo">Promo</option>
                                                <option value="informasi">Informasi</option>
                                                <option value="event">Event</option>
                                                <option value="kesehatan">Kesehatan</option>
                                                <option value="pengumuman">Pengumuman</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editPostVisibility" class="form-label">Visibilitas</label>
                                            <select class="form-select" id="editPostVisibility">
                                                <option value="public">Publik</option>
                                                <option value="followers">Pengikut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Konten Postingan -->
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Konten Postingan</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label for="editPostImage" class="form-label">Ganti Foto
                                                (Opsional)</label>
                                            <input type="file" class="form-control" id="editPostImage" accept="image/*">
                                            <div class="form-text">Format: JPG/PNG, rasio 1:1 (square) disarankan
                                            </div>

                                            <div id="editImagePreview" class="mt-3">
                                                <img id="editPreviewImg" src="" alt="Preview"
                                                    class="img-fluid rounded border">
                                            </div>

                                            <div class="form-check mt-3">
                                                <input class="form-check-input" type="checkbox"
                                                    id="editKeepOriginalImage">
                                                <label class="form-check-label" for="editKeepOriginalImage">
                                                    Pertahankan gambar asli
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="mb-3">
                                            <label for="editPostCaption" class="form-label">Caption <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" id="editPostCaption" rows="6"
                                                required></textarea>
                                            <div class="d-flex justify-content-between">
                                                <div class="form-text">Maks. 2.200 karakter</div>
                                                <div class="form-text"><span id="captionCharCount">0</span>/2200
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="editPostHashtags" class="form-label">Hashtag</label>
                                            <textarea class="form-control" id="editPostHashtags" rows="2"
                                                placeholder="#rumahsakit #kesehatan #promo"></textarea>
                                            <div class="form-text">Pisahkan dengan spasi atau koma</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="editPostTagAccounts" class="form-label">Tag Akun</label>
                                            <input type="text" class="form-control" id="editPostTagAccounts"
                                                placeholder="@akun1 @akun2">
                                            <div class="form-text">Tag akun Instagram terkait</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tautan & Jadwal -->
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Tautan & Jadwal</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editPostLink" class="form-label">Tautan Konten</label>
                                            <input type="url" class="form-control" id="editPostLink"
                                                placeholder="https://example.com">
                                            <div class="form-text">Link ke artikel, pendaftaran, atau informasi
                                                lengkap</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editPostLinkText" class="form-label">Teks Tautan</label>
                                            <input type="text" class="form-control" id="editPostLinkText"
                                                placeholder="Daftar Sekarang">
                                            <div class="form-text">Teks yang akan ditampilkan pada tautan</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editRescheduleDate" class="form-label">Jadwalkan Ulang
                                                (Opsional)</label>
                                            <input type="datetime-local" class="form-control" id="editRescheduleDate">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editPostExpiry" class="form-label">Kedaluwarsa
                                                (Opsional)</label>
                                            <input type="date" class="form-control" id="editPostExpiry">
                                            <div class="form-text">Tanggal otomatis hapus/unpublish</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Analitik & Metadata -->
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <h6 class="mb-0">Analitik & Metadata</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3 text-center">
                                            <div class="fw-bold" id="editPostLikes">0</div>
                                            <div class="small text-muted">Likes</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3 text-center">
                                            <div class="fw-bold" id="editPostComments">0</div>
                                            <div class="small text-muted">Komentar</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3 text-center">
                                            <div class="fw-bold" id="editPostShares">0</div>
                                            <div class="small text-muted">Shares</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3 text-center">
                                            <div class="fw-bold" id="editPostReach">0</div>
                                            <div class="small text-muted">Jangkauan</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="editPostNotes" class="form-label">Catatan Internal</label>
                                    <textarea class="form-control" id="editPostNotes" rows="2"
                                        placeholder="Catatan untuk tim media sosial"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between w-100">
                        <div>
                            <button type="button" class="btn btn-outline-danger me-2" id="deletePostBtn">
                                <i class="fas fa-trash-alt me-2"></i>Hapus
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times me-2"></i>Batal
                            </button>
                            <button type="button" class="btn btn-primary" id="saveEditedPostBtn">
                                <i class="fas fa-save me-2"></i>Simpan Perubahan
                            </button>
                            <button type="button" class="btn btn-success" id="publishEditedPostBtn">
                                <i class="fas fa-paper-plane me-2"></i>Simpan & Terbitkan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="editPostToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Notifikasi</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="editPostToastMessage">
                Perubahan berhasil disimpan!
            </div>
        </div>
    </div>


    <!-- Doctors Section (Hidden by default) -->
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
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

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
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="edit_name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="edit_name" name="name" required>
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback d-block">
                                                <i class="fas fa-exclamation-triangle me-1"></i><?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                        <?php $__errorArgs = ['specialty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback d-block">
                                                <i class="fas fa-exclamation-triangle me-1"></i><?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="edit_email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="edit_email" name="email" required>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback d-block">
                                                <i class="fas fa-exclamation-triangle me-1"></i><?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="edit_phone" class="form-label">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="edit_phone" name="phone" required>
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback d-block">
                                                <i class="fas fa-exclamation-triangle me-1"></i><?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="edit_description" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="edit_description" name="description" rows="3"
                                            required></textarea>
                                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback d-block">
                                                <i class="fas fa-exclamation-triangle me-1"></i><?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="edit_education" class="form-label">Pendidikan</label>
                                        <input type="text" class="form-control" id="edit_education" name="education"
                                            required>
                                        <?php $__errorArgs = ['education'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback d-block">
                                                <i class="fas fa-exclamation-triangle me-1"></i><?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="edit_experience" class="form-label">Pengalaman</label>
                                        <input type="text" class="form-control" id="edit_experience" name="experience"
                                            required>
                                        <?php $__errorArgs = ['experience'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback d-block">
                                                <i class="fas fa-exclamation-triangle me-1"></i><?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="edit_schedule" class="form-label">Jadwal Praktik</label>
                                        <input type="text" class="form-control" id="edit_schedule" name="schedule"
                                            required>
                                        <?php $__errorArgs = ['schedule'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback d-block">
                                                <i class="fas fa-exclamation-triangle me-1"></i><?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="mb-3">
                                        <label for="edit_photo" class="form-label">Foto Profil</label>
                                        <input type="file" class="form-control" id="edit_photo" name="photo"
                                            accept="image/*">
                                        <div class="form-text">Kosongkan jika tidak ingin mengubah foto profil</div>
                                        <div id="edit_photo_preview" class="mt-2"></div>
                                        <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback d-block">
                                                <i class="fas fa-exclamation-triangle me-1"></i><?php echo e($message); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
    <?php if(!request()->is('patient-portal')): ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <?php endif; ?>

    <!-- Toast Container -->
    <div class="toast-container"></div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>

        // Dapatkan CSRF token dari meta tag
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Inisialisasi variabel global
        let currentUser = null;
        let isProcessing = false;

        // Inisialisasi AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 120
        });

        // Database pasien yang lebih lengkap
        const patients = {
            'Ahmad Fauzi': {
                name: 'Ahmad Fauzi',
                phone: '081234567890',
                dob: '1985-05-15',
                gender: 'L',
                email: 'ahmad@example.com',
                address: 'Jl. Merdeka No. 123, Jakarta',
                ktp: '1234567890123456',
                allergies: 'Seafood',
                diseases: 'Diabetes',
                appointments: [
                    { id: 1, date: '2023-11-15', time: '09:00', doctor: 'Dr. Siti Rahayu, Sp.OG', clinic: 'Poli Kandungan', status: 'confirmed' },
                    { id: 2, date: '2023-10-20', time: '14:00', doctor: 'Dr. Budi Santoso, Sp.PD', clinic: 'Poli Penyakit Dalam', status: 'completed' }
                ],
                medicalRecords: [
                    { id: 1, date: '2023-10-20', doctor: 'Dr. Budi Santoso, Sp.PD', diagnosis: 'Diabetes Mellitus Tipe 2', treatment: 'Metformin 500mg' },
                    { id: 2, date: '2023-09-15', doctor: 'Dr. Ahmad Fauzi, Sp.JP', diagnosis: 'Hipertensi', treatment: 'Amlodipine 10mg' }
                ],
                billing: [
                    { id: 1, date: '2023-10-20', description: 'Konsultasi Poli Penyakit Dalam', amount: 250000, status: 'paid' },
                    { id: 2, date: '2023-11-15', description: 'Konsultasi Poli Kandungan', amount: 300000, status: 'pending' }
                ]
            },
            'Siti Rahayu': {
                name: 'Siti Rahayu',
                phone: '089876543210',
                dob: '1990-08-22',
                gender: 'P',
                email: 'siti@example.com',
                address: 'Jl. Sudirman No. 456, Jakarta',
                ktp: '2345678901234567',
                allergies: 'Penicillin',
                diseases: 'Alergi',
                appointments: [
                    { id: 1, date: '2023-11-20', time: '10:00', doctor: 'Dr. Dewi Lestari, Sp.M', clinic: 'Poli Mata', status: 'confirmed' },
                    { id: 2, date: '2023-10-25', time: '11:00', doctor: 'Dr. Ahmad Fauzi, Sp.JP', clinic: 'Poli Jantung', status: 'completed' }
                ],
                medicalRecords: [
                    { id: 1, date: '2023-10-25', doctor: 'Dr. Ahmad Fauzi, Sp.JP', diagnosis: 'Alergi Mata', treatment: 'Obat tetes mata' },
                    { id: 2, date: '2023-09-20', doctor: 'Dr. Siti Rahayu, Sp.OG', diagnosis: 'Check-up Kehamilan', treatment: 'Vitamin prenatal' }
                ],
                billing: [
                    { id: 1, date: '2023-10-25', description: 'Konsultasi Poli Jantung', amount: 350000, status: 'paid' },
                    { id: 2, date: '2023-11-20', description: 'Konsultasi Poli Mata', amount: 200000, status: 'pending' }
                ]
            },
            'Budi Santoso': {
                name: 'Budi Santoso',
                phone: '087654321098',
                dob: '1978-12-03',
                gender: 'L',
                email: 'budi@example.com',
                address: 'Jl. Gatot Subroto No. 789, Jakarta',
                ktp: '3456789012345678',
                allergies: '-',
                diseases: 'Hipertensi',
                appointments: [
                    { id: 1, date: '2023-11-18', time: '08:00', doctor: 'Dr. Ahmad Fauzi, Sp.JP', clinic: 'Poli Jantung', status: 'confirmed' },
                    { id: 2, date: '2023-10-15', time: '15:00', doctor: 'Dr. Budi Santoso, Sp.PD', clinic: 'Poli Penyakit Dalam', status: 'completed' }
                ],
                medicalRecords: [
                    { id: 1, date: '2023-10-15', doctor: 'Dr. Budi Santoso, Sp.PD', diagnosis: 'Hipertensi', treatment: 'Amlodipin 10mg' },
                    { id: 2, date: '2023-09-10', doctor: 'Dr. Dewi Lestari, Sp.M', diagnosis: 'Check-up Mata', treatment: 'Tetes mata vitamin' }
                ],
                billing: [
                    { id: 1, date: '2023-10-15', description: 'Konsultasi Poli Penyakit Dalam', amount: 300000, status: 'paid' },
                    { id: 2, date: '2023-11-18', description: 'Konsultasi Poli Jantung', amount: 400000, status: 'pending' }
                ]
            }
        };

        let doctors = [
            {
                id: 1,
                name: "Dr. Darwan Triyono, Sp. M",
                specialty: "mata",
                title: "Spesialis Mata",
                image: "https://picsum.photos/seed/doctor1/400/400.jpg",
                description: "Ahli dalam pengobatan penyakit mata dan pembedahan katarak.",
                phone: "(021) 555-1234",
                email: "darwan.triyono@kliniksehat.com",
                education: "S1 Kedokteran UI, Spesialis Mata UGM",
                experience: "8 tahun",
                schedule: "Senin-Jumat: 08:00-16:00"
            },
            {
                id: 2,
                name: "Dr. Anggraini Dian Puspitadewi, Sp. PD",
                specialty: "penyakit-dalam",
                title: "Spesialis Penyakit Dalam",
                image: "https://picsum.photos/seed/doctor2/400/400.jpg",
                description: "Spesialis dalam pengobatan diabetes dan hipertensi.",
                phone: "(021) 555-5678",
                email: "anggraini.dian@kliniksehat.com",
                education: "S1 Kedokteran Unpad, Spesialis Penyakit Dalam",
                experience: "10 tahun",
                schedule: "Senin-Kamis: 09:00-17:00"
            },
            {
                id: 3,
                name: "Dr. R. Dwi Hendradianko, Sp.PD",
                specialty: "penyakit-dalam",
                title: "Spesialis Penyakit Dalam",
                image: "https://picsum.photos/seed/doctor3/400/400.jpg",
                description: "Spesialis dalam pengobatan diabetes dan hipertensi.",
                phone: "(021) 555-0000",
                email: "example@kliniksehat.com",
                education: "S1 Kedokteran Umum, Spesialis dari Universitas Terkemuka",
                experience: "10 tahun",
                schedule: "Senin-Jumat: 08:00-16:00"
            },
            {
                id: 4,
                name: "Dr. Zahrudin Ahmad, SpDVE, M.Ked. Klin.",
                specialty: "kulit-kelamin",
                title: "Spesialis Kulit dan Kelamin",
                image: "https://picsum.photos/seed/doctor4/400/400.jpg",
                description: "Ahli dalam penanganan jerawat dan penyakit kulit berbahaya.",
                phone: "(021) 555-4567",
                email: "zahrudin.ahmad@kliniksehat.com",
                education: "S1 Kedokteran UGM, Spesialis UNHAS",
                experience: "11 tahun",
                schedule: "Senin, Rabu, Jumat: 10:00-17:00"
            },
            {
                id: 5,
                name: "Dr. Niluh Wijayanti, SpDV",
                specialty: "kulit-kelamin",
                title: "Spesialis Kulit dan Kelamin",
                image: "https://picsum.photos/seed/doctor5/400/400.jpg",
                description: "Ahli dalam penanganan jerawat dan penyakit kulit berbahaya.",
                phone: "(021) 555-5678",
                email: "niluh.wijayanti@kliniksehat.com",
                education: "S1 UNUD, Spesialis UI",
                experience: "7 tahun",
                schedule: "Selasa-Kamis: 09:00-14:00"
            },
            {
                id: 6,
                name: "Dr. Solehah Catur Rahayu, Sp.JP",
                specialty: "jantung",
                title: "Spesialis Jantung",
                image: "https://picsum.photos/seed/doctor6/400/400.jpg",
                description: "Spesialis dalam pembedahan jantung dan penyakit jantung koroner.",
                phone: "(021) 555-6789",
                email: "solehah.rahayu@kliniksehat.com",
                education: "S1 UNS, Spesialis Jantung UI",
                experience: "12 tahun",
                schedule: "Senin-Jumat: 07:30-13:00"
            },
            {
                id: 7,
                name: "Dr. Jody Hernanto, Sp. B",
                specialty: "bedah",
                title: "Spesialis Bedah Umum",
                image: "https://picsum.photos/seed/doctor7/400/400.jpg",
                description: "Ahli dalam pembedahan pencernaan dan laparoskopi.",
                phone: "(021) 555-7890",
                email: "jody.hernanto@kliniksehat.com",
                education: "S1 UNDIP, Spesialis Bedah UGM",
                experience: "10 tahun",
                schedule: "Senin-Rabu: 09:00-15:00"
            },
            {
                id: 8,
                name: "Dr. Ariya Maulana Nasution, Sp. OT",
                specialty: "orthopedi",
                title: "Spesialis Orthopedi",
                image: "https://picsum.photos/seed/doctor8/400/400.jpg",
                description: "Spesialis dalam pengobatan cedera tulang dan sendi.",
                phone: "(021) 555-8910",
                email: "ariya.nasution@kliniksehat.com",
                education: "S1 UNAND, Spesialis OT UI",
                experience: "8 tahun",
                schedule: "Selasa-Jumat: 08:30-14:30"
            },
            {
                id: 9,
                name: "Dr. Sujut Winartoyo, Sp. THT-KL",
                specialty: "tht",
                title: "Spesialis THT",
                image: "https://picsum.photos/seed/doctor9/400/400.jpg",
                description: "Ahli dalam pengobatan penyakit telinga, hidung, dan tenggorokan.",
                phone: "(021) 555-9101",
                email: "sujut.winartoyo@kliniksehat.com",
                education: "S1 UGM, Spesialis THT UI",
                experience: "9 tahun",
                schedule: "Senin-Jumat: 10:00-17:00"
            },
            {
                id: 10,
                name: "Dr. Jonathan Chandra N., Sp.OG",
                specialty: "kandungan",
                title: "Spesialis Kandungan",
                image: "https://picsum.photos/seed/doctor10/400/400.jpg",
                description: "Spesialis dalam kehamilan berisiko tinggi dan operasi sesar.",
                phone: "(021) 555-1122",
                email: "jonathan.chandra@kliniksehat.com",
                education: "S1 UNDIP, Spesialis Obgyn UI",
                experience: "10 tahun",
                schedule: "Senin, Kamis, Sabtu: 08:00-14:00"
            },
            {
                id: 11,
                name: "Dr. Eka Rendy W. K., Sp.A",
                specialty: "anak",
                title: "Spesialis Anak",
                image: "https://picsum.photos/seed/doctor11/400/400.jpg",
                description: "Ahli dalam penanganan penyakit infeksi pada anak.",
                phone: "(021) 555-1235",
                email: "eka.rendy@kliniksehat.com",
                education: "S1 Kedokteran UNAIR, Spesialis Anak UGM",
                experience: "9 tahun",
                schedule: "Senin-Kamis: 08:00-14:00"
            },
            {
                id: 12,
                name: "Dr. Arsi Widyastriastuti, Sp.A",
                specialty: "anak",
                title: "Dokter Anak",
                image: "https://picsum.photos/seed/doctor12/400/400.jpg",
                description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
                phone: "(021) 555-1236",
                email: "arsi.widyastri@kliniksehat.com",
                education: "S1 Kedokteran UGM, Spesialis Anak UI",
                experience: "7 tahun",
                schedule: "Selasa-Jumat: 10:00-16:00"
            },
            {
                id: 13,
                name: "Dr. As.ad Pratama putra",
                specialty: "umum",
                title: "Dokter Umum",
                image: "https://picsum.photos/seed/doctor13/400/400.jpg",
                description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
                phone: "(021) 555-1237",
                email: "asad.pratama@kliniksehat.com",
                education: "S1 Kedokteran UII",
                experience: "5 tahun",
                schedule: "Senin-Sabtu: 08:00-13:00"
            },
            {
                id: 14,
                name: "Dr. Dwi Rahmat Lutfiani",
                specialty: "umum",
                title: "Dokter Umum",
                image: "https://picsum.photos/seed/doctor14/400/400.jpg",
                description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
                phone: "(021) 555-1238",
                email: "dwi.lutfiani@kliniksehat.com",
                education: "S1 Kedokteran Unair",
                experience: "6 tahun",
                schedule: "Senin-Jumat: 09:00-15:00"
            },
            {
                id: 15,
                name: "Drg. Sinta Kurniawati",
                specialty: "umum",
                title: "Dokter Umum",
                image: "https://picsum.photos/seed/doctor15/400/400.jpg",
                description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
                phone: "(021) 555-1239",
                email: "sinta.kurniawati@kliniksehat.com",
                education: "S1 Kedokteran Gigi UI",
                experience: "8 tahun",
                schedule: "Senin-Jumat: 08:00-12:00"
            },
            {
                id: 16,
                name: "Dr. Yayik Andini Ekowati",
                specialty: "umum",
                title: "Dokter Umum",
                image: "https://picsum.photos/seed/doctor16/400/400.jpg",
                description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
                phone: "(021) 555-1240",
                email: "yayik.ekowati@kliniksehat.com",
                education: "S1 Kedokteran UMY",
                experience: "4 tahun",
                schedule: "Senin-Kamis: 08:00-14:00"
            },
            {
                id: 17,
                name: "Dr. Yunita Wulansari",
                specialty: "umum",
                title: "Dokter Umum",
                image: "https://picsum.photos/seed/doctor17/400/400.jpg",
                description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
                phone: "(021) 555-1241",
                email: "yunita.wulansari@kliniksehat.com",
                education: "S1 Kedokteran UIN Malang",
                experience: "5 tahun",
                schedule: "Selasa-Jumat: 09:00-14:00"
            },
            {
                id: 18,
                name: "Dr. Christophorus N. H.",
                specialty: "umum",
                title: "Dokter Umum",
                image: "https://picsum.photos/seed/doctor18/400/400.jpg",
                description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
                phone: "(021) 555-1242",
                email: "christo.nh@kliniksehat.com",
                education: "S1 Kedokteran Atma Jaya",
                experience: "6 tahun",
                schedule: "Senin-Sabtu: 07:30-12:30"
            },
            {
                id: 19,
                name: "Dr. Tatit Syahadani Alfirdausi",
                specialty: "umum",
                title: "Dokter Umum",
                image: "https://picsum.photos/seed/doctor19/400/400.jpg",
                description: "Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.",
                phone: "(021) 555-1243",
                email: "tatit.alfirdausi@kliniksehat.com",
                education: "S1 Kedokteran Universitas Airlangga",
                experience: "7 tahun",
                schedule: "Senin-Jumat: 08:00-14:00"
            },
            {
                id: 20,
                name: "Dr. Zahrudin Ahmad, SpDVE, M.Ked. Klin.",
                specialty: "kusta",
                title: "Spesialis Kusta",
                image: "https://picsum.photos/seed/doctor20/400/400.jpg",
                description: "Ahli dalam pengobatan penyakit kusta dan penyakit kulit menular.",
                phone: "(021) 555-1244",
                email: "zahrudin.kusta@kliniksehat.com",
                education: "Spesialis Kulit UNHAS",
                experience: "11 tahun",
                schedule: "Rabu-Jumat: 10:00-15:00"
            },
            {
                id: 21,
                name: "Dr. Niluh Wijayanti, SpDV",
                specialty: "kusta",
                title: "Spesialis Kusta",
                image: "https://picsum.photos/seed/doctor21/400/400.jpg",
                description: "Ahli dalam pengobatan penyakit kusta dan penyakit kulit menular.",
                phone: "(021) 555-1245",
                email: "niluh.kusta@kliniksehat.com",
                education: "Spesialis Kulit UI",
                experience: "7 tahun",
                schedule: "Selasa & Jumat: 13:00-17:00"
            },
            {
                id: 22,
                name: "Drg. Sinta Kurniawati",
                specialty: "gigi",
                title: "Dokter Gigi Umum",
                image: "https://picsum.photos/seed/doctor22/400/400.jpg",
                description: "Spesialis dalam perawatan gigi dan pencegahan penyakit gigi.",
                phone: "(021) 555-1246",
                email: "sinta.gigi@kliniksehat.com",
                education: "S1 Kedokteran Gigi UI",
                experience: "8 tahun",
                schedule: "Senin-Jumat: 08:00-13:00"
            },
            {
                id: 23,
                name: "Dr. Yunita Dwi Anggarini, Sp.K.F.R., M.Ked.Klin.",
                specialty: "rehabilitasi",
                title: "Dokter Rehabilitasi Medik",
                image: "https://picsum.photos/seed/doctor23/400/400.jpg",
                description: "Ahli dalam rehabilitasi pasca operasi dan cedera.",
                phone: "(021) 555-1247",
                email: "yunita.rehab@kliniksehat.com",
                education: "S1 Kedokteran UGM, Spesialis Rehabilitasi Unair",
                experience: "9 tahun",
                schedule: "Senin & Rabu: 08:00-12:00"
            },
            {
                id: 24,
                name: "Dr. Gunandar Rachmadi, Sp.U",
                specialty: "urologi",
                title: "Spesialis Urologi",
                image: "https://picsum.photos/seed/doctor24/400/400.jpg",
                description: "Spesialis dalam pengobatan penyakit ginjal dan sistem kemih.",
                phone: "(021) 555-1248",
                email: "gunandar.rachmadi@kliniksehat.com",
                education: "S1 Kedokteran UGM, Spesialis Urologi UI",
                experience: "12 tahun",
                schedule: "Kamis-Sabtu: 09:00-14:00"
            },
            {
                id: 25,
                name: "Dr. Indrawan Tri Purnomo, Sp.N",
                specialty: "neurologi",
                title: "Spesialis Neurologi",
                image: "https://picsum.photos/seed/doctor25/400/400.jpg",
                description: "Ahli dalam pengobatan stroke dan penyakit saraf.",
                phone: "(021) 555-1249",
                email: "indrawan.purnomo@kliniksehat.com",
                education: "S1 Kedokteran UGM, Spesialis Saraf Unair",
                experience: "10 tahun",
                schedule: "Senin-Kamis: 08:00-12:00"
            },
            {
                id: 26,
                name: "Drg. Fepta Dea Anggini, Sp.KG",
                specialty: "gigi",
                title: "Dokter Konservasi Gigi",
                image: "https://picsum.photos/seed/doctor26/400/400.jpg",
                description: "Spesialis dalam perawatan saluran akar dan konservasi gigi.",
                phone: "(021) 555-1250",
                email: "fepta.anggini@kliniksehat.com",
                education: "S1 Kedokteran Gigi UI, Spesialis Konservasi Gigi UGM",
                experience: "9 tahun",
                schedule: "Selasa-Kamis: 10:00-15:00"
            }
        ];

        // Load doctors dari API
        // Fungsi untuk memuat data dokter dari database
        // Ganti fungsi loadDoctors di bagian paling bawah script
        async function loadDoctors() {
            try {
                const response = await fetch('get_doctors.php');
                const data = await response.json();

                // Update array doctors dengan data dari database
                doctors = data;

                // Tampilkan data
                displayDoctors();
            } catch (error) {
                console.error('Error loading doctors:', error);
                showToast('Gagal memuat data dari database', 'danger');
                // Tampilkan data default jika gagal
                displayDoctors();
            }
        }

        // Pastikan loadDoctors() dipanggil saat DOM dimuat
        document.addEventListener('DOMContentLoaded', function () {
            loadDoctors();
            console.log("Memuat data dari database...");

            // ... event listener lainnya tetap sama ...
        });

        // Fungsi untuk mengisi form dengan data uji
        function fillTest(name) {
            const patient = patients[name];
            if (patient) {
                document.getElementById('fullName').value = patient.name;
                document.getElementById('loginDOB').value = patient.dob;
                document.getElementById('phoneNumber').value = patient.phone;
            }
        }

        // Fungsi login
        function login() {
            const name = document.getElementById('fullName').value.trim();
            const dob = document.getElementById('loginDOB').value;
            const phone = document.getElementById('phoneNumber').value.trim();

            console.log('Login attempt:', { name, dob, phone });

            if (!name || !dob || !phone) {
                showToast('Harap isi semua field', 'danger');
                return;
            }

            if (patients[name] && patients[name].dob === dob && patients[name].phone === phone) {
                currentUser = patients[name];

                // Tampilkan dashboard
                document.getElementById('loginSection').style.display = 'none';
                document.getElementById('dashboardSection').style.display = 'block';

                // Load data dashboard
                loadDashboard();

                showToast('Login berhasil! Selamat datang ' + currentUser.name, 'success');
            } else {
                showToast('Login gagal! Periksa kembali data Anda.', 'danger');
            }
        }

        // Load data dashboard
        function loadDashboard() {
            // Update info user
            document.getElementById('welcomeUser').textContent = currentUser.name;
            document.getElementById('patientName').textContent = currentUser.name;
            document.getElementById('patientPhone').textContent = currentUser.phone;
            document.getElementById('patientAge').textContent = calculateAge(currentUser.dob);
            document.getElementById('patientEmail').textContent = currentUser.email;

            // Update statistik
            document.getElementById('upcomingAppointments').textContent = currentUser.appointments.filter(a => a.status === 'confirmed').length;
            document.getElementById('medicalRecords').textContent = currentUser.medicalRecords.length;
            document.getElementById('labResults').textContent = '3';
            document.getElementById('pendingBills').textContent = currentUser.billing.filter(b => b.status === 'pending').length;

            // Load janji temu
            loadAppointments();

            // Load rekam medis
            loadMedicalRecords();

            // Load tagihan
            loadBilling();

            // Load profil
            loadProfile();
        }

        // Hitung umur
        function calculateAge(birthDate) {
            const today = new Date();
            const birth = new Date(birthDate);
            let age = today.getFullYear() - birth.getFullYear();
            const monthDiff = today.getMonth() - birth.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birth.getDate())) {
                age--;
            }
            return age;
        }

        // Load janji temu
        function loadAppointments() {
            const container = document.getElementById('appointmentsList');
            const appointments = currentUser.appointments;

            if (appointments.length === 0) {
                container.innerHTML = '<p class="text-muted text-center py-4">Tidak ada janji temu</p>';
                return;
            }

            container.innerHTML = appointments.map(app => {
                const statusClass = app.status === 'confirmed' ? 'bg-success' : 'bg-info';
                const statusText = app.status === 'confirmed' ? 'Dikonfirmasi' : 'Selesai';

                return `
                    <div class="appointment-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">${app.doctor}</h6>
                                <p class="mb-0 text-muted">${app.clinic}</p>
                            </div>
                            <div class="text-end">
                                <div class="fw-bold">${formatDate(app.date)} ${app.time}</div>
                                <span class="status-badge ${statusClass}">${statusText}</span>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        // Load rekam medis
        function loadMedicalRecords() {
            const container = document.getElementById('medicalRecordsList');
            const records = currentUser.medicalRecords;

            if (records.length === 0) {
                container.innerHTML = '<p class="text-muted text-center py-4">Tidak ada rekam medis</p>';
                return;
            }

            container.innerHTML = records.map(record => `
                <div class="record-item">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="mb-1">${record.doctor}</h6>
                            <p class="mb-1"><strong>Diagnosis:</strong> ${record.diagnosis}</p>
                            <p class="mb-0"><strong>Treatment:</strong> ${record.treatment}</p>
                        </div>
                        <small class="text-muted">${formatDate(record.date)}</small>
                    </div>
                </div>
            `).join('');
        }

        // Load tagihan
        function loadBilling() {
            const container = document.getElementById('billingList');
            const bills = currentUser.billing;

            // Update total
            const total = bills.reduce((sum, bill) => sum + bill.amount, 0);
            const paid = bills.filter(b => b.status === 'paid').reduce((sum, bill) => sum + bill.amount, 0);
            const pending = total - paid;

            document.getElementById('totalBilling').textContent = formatCurrency(total);
            document.getElementById('paidBilling').textContent = formatCurrency(paid);
            document.getElementById('pendingBilling').textContent = formatCurrency(pending);

            // Load daftar tagihan
            if (bills.length === 0) {
                container.innerHTML = '<p class="text-muted text-center py-4">Tidak ada tagihan</p>';
                return;
            }

            container.innerHTML = bills.map(bill => {
                const statusClass = bill.status === 'paid' ? 'bg-success' : 'bg-warning';
                const statusText = bill.status === 'paid' ? 'Lunas' : 'Menunggu';

                return `
                    <div class="record-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">${bill.description}</h6>
                                <small class="text-muted">${formatDate(bill.date)}</small>
                            </div>
                            <div class="text-end">
                                <div class="fw-bold">${formatCurrency(bill.amount)}</div>
                                <span class="status-badge ${statusClass}">${statusText}</span>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        // Load profil
        function loadProfile() {
            document.getElementById('profileName').value = currentUser.name;
            document.getElementById('profileKTP').value = currentUser.ktp;
            document.getElementById('profileDOB').value = currentUser.dob;
            document.getElementById('profileGender').value = currentUser.gender;
            document.getElementById('profilePhone').value = currentUser.phone;
            document.getElementById('profileEmail').value = currentUser.email;
            document.getElementById('profileAddress').value = currentUser.address;
            document.getElementById('profileAllergies').value = currentUser.allergies;
            document.getElementById('profileDiseases').value = currentUser.diseases;
        }

        // Format currency
        function formatCurrency(amount) {
            return 'Rp ' + amount.toLocaleString('id-ID');
        }

        // Format date
        function formatDate(dateString) {
            const options = { day: 'numeric', month: 'short', year: 'numeric' };
            return new Date(dateString).toLocaleDateString('id-ID', options);
        }

        // Fungsi logout
        function logout() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                currentUser = null;
                document.getElementById('loginSection').style.display = 'flex';
                document.getElementById('dashboardSection').style.display = 'none';
                document.getElementById('loginForm').reset();
                showToast('Anda telah berhasil logout', 'success');
            }
        }

        // Fungsi untuk menampilkan dashboard
        function showDashboard() {
            document.getElementById('dashboardSection').style.display = 'block';
            document.getElementById('doctorsSection').style.display = 'none';

            // Reset tab aktif ke Ringkasan
            document.getElementById('overview-tab').click();
        }

        // Fungsi untuk menampilkan halaman dokter
        function showDoctorsPage() {
            document.getElementById('dashboardSection').style.display = 'none';
            document.getElementById('doctorsSection').style.display = 'block';

            // Tampilkan data dokter
            displayDoctors();

            // Refresh animasi AOS
            AOS.refresh();
        }

        // Fungsi untuk menampilkan dokter dengan filter dan pencarian
        function displayDoctors() {
            const container = document.getElementById('doctorContainer');

            if (!container) {
                console.error("Container dengan ID 'doctorContainer' tidak ditemukan!");
                return;
            }

            let filteredDoctors = [...doctors];

            // Filter aktif
            const activeFilter = document.querySelector('.filter-btn.active');
            if (activeFilter && activeFilter.dataset.filter !== 'all') {
                const filterValue = activeFilter.dataset.filter;
                filteredDoctors = filteredDoctors.filter(d => d.specialty === filterValue);
            }

            // Pencarian
            const searchTerm = document.getElementById('searchDoctor').value.toLowerCase();
            if (searchTerm) {
                filteredDoctors = filteredDoctors.filter(d =>
                    d.name.toLowerCase().includes(searchTerm) ||
                    d.title.toLowerCase().includes(searchTerm) ||
                    d.specialty.toLowerCase().includes(searchTerm) ||
                    d.description.toLowerCase().includes(searchTerm)
                );
            }

            // Jika tidak ada hasil
            if (filteredDoctors.length === 0) {
                container.innerHTML = `
            <div class="col-12 text-center py-5">
                <i class="fas fa-search fa-3x mb-3 text-muted"></i>
                <h4>Tidak ada dokter yang ditemukan</h4>
                <p class="text-muted">Coba kata kunci lain atau pilih spesialisasi berbeda.</p>
            </div>
        `;
                return;
            }

            // Render kartu dokter
            container.innerHTML = filteredDoctors.map(d => `
        <div class="col-lg-3 col-md-6" data-aos="fade-up">
            <div class="doctor-card">
                <div class="position-relative">
                    <img src="${d.image || 'https://picsum.photos/seed/doctor/400/400'}" class="card-img-top doctor-img" alt="${d.name}">
                    <span class="badge specialty-badge">${d.title}</span>
                </div>
                    <div class="doctor-info">
                        <h5 class="doctor-name">${d.name}</h5>
                        <p class="doctor-title">${d.title}</p>
                        <p class="card-text">${d.description}</p>
                        <div class="d-flex gap-2 mt-3">
                            <button class="btn btn-sm btn-outline-success" onclick="showDoctorProfile(${d.id})">
                                <i class="fas fa-user me-1"></i> Profil
                            </button>
                            <button class="btn btn-sm btn-outline-primary" onclick="showEditProfileModal(${d.id})">
                                <i class="fas fa-edit me-1"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteDoctor(${d.id})">
                                <i class="fas fa-trash me-1"></i> Hapus
                            </button>
                        </div>
                    </div>
            </div>
        </div>
        `).join('');

            // Refresh animasi AOS untuk elemen baru
            AOS.refresh();
        }

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
            document.querySelector('#doctorProfileModal .doctor-profile-image img').src = doctor.image || 'https://picsum.photos/seed/doctor' + id + '/400/400.jpg';
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

            // Tambahkan event listener untuk tombol jadwal janji
            const scheduleBtn = document.getElementById('scheduleAppointmentBtn');
            if (scheduleBtn) {
                scheduleBtn.onclick = function () {
                    // Tutup modal profil
                    modal.hide();

                    // Tampilkan notifikasi sukses
                    showToast(`Janji dengan Dr. ${doctor.name.split(',')[0]} telah berhasil diatur!`, 'success');
                };
            }

            // Tampilkan modal
            modal.show();
        }

        // Fungsi untuk menampilkan notifikasi toast
        function showToast(message, type = 'success') {
            // Hapus toast yang sudah ada
            const existingToast = document.querySelector('.toast-container');
            if (existingToast) {
                existingToast.remove();
            }

            // Buat elemen toast
            const toastContainer = document.createElement('div');
            toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
            toastContainer.style.zIndex = '1050';

            const toastHTML = `
                <div class="toast align-items-center text-white bg-${type}" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2"></i>
                            ${message}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            `;

            toastContainer.innerHTML = toastHTML;
            document.body.appendChild(toastContainer);

            // Tampilkan toast
            const toastElement = toastContainer.querySelector('.toast');
            const toast = new bootstrap.Toast(toastElement, { autohide: true, delay: 5000 });
            toast.show();

            // Hapus container toast setelah toast ditutup
            toastElement.addEventListener('hidden.bs.toast', function () {
                toastContainer.remove();
            });
        }

        // Fungsi untuk menampilkan modal edit profil dokter
        <?php $__env->startSection('scripts'); ?>

            function showEditProfileModal(doctorId) {
                console.log('Opening edit modal for doctor ID:', doctorId); // Debug

                // Ambil data dokter dari server
                fetch(`/doctors/${doctorId}/edit`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Data tidak ditemukan');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Doctor data:', data); // Debug

                        // Isi form dengan data dokter
                        document.getElementById('edit_name').value = data.name || '';
                        document.getElementById('edit_specialty').value = data.specialty || '';
                        document.getElementById('edit_email').value = data.email || '';
                        document.getElementById('edit_phone').value = data.phone || '';
                        document.getElementById('edit_description').value = data.description || '';
                        document.getElementById('edit_education').value = data.education || '';
                        document.getElementById('edit_experience').value = data.experience || '';
                        document.getElementById('edit_schedule').value = data.schedule || '';

                        // Tampilkan foto jika ada
                        if (data.photo) {
                            document.getElementById('edit_photo_preview').innerHTML =
                                `<img src="/storage/${data.photo}" alt="Foto Profil" class="img-thumbnail" style="max-height: 100px;">`;
                        } else {
                            document.getElementById('edit_photo_preview').innerHTML = '';
                        }

                        // Set action form dengan ID dokter
                        const form = document.getElementById('editDoctorForm');
                        form.action = `/doctors/${doctorId}`;

                        // Tambahkan input hidden untuk method spoofing
                        if (!document.getElementById('_method')) {
                            const methodInput = document.createElement('input');
                            methodInput.type = 'hidden';
                            methodInput.name = '_method';
                            methodInput.id = '_method';
                            methodInput.value = 'PUT';
                            form.appendChild(methodInput);
                        } else {
                            document.getElementById('_method').value = 'PUT';
                        }

                        // Tampilkan modal
                        const modal = new bootstrap.Modal(document.getElementById('editDoctorModal'));
                        modal.show();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Gagal memuat data dokter. Silakan coba lagi.');
                    });
            }

            document.getElementById('saveDoctorChanges').addEventListener('click', function () {
                const form = document.getElementById('editDoctorForm');
                const formData = new FormData(form);

                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Tutup modal
                            const modal = bootstrap.Modal.getInstance(document.getElementById('editDoctorModal'));
                            modal.hide();

                            // Tampilkan pesan sukses
                            alert(data.message);

                            // Redirect ke halaman admin
                            window.location.href = data.redirect;
                        } else {
                            alert('Terjadi kesalahan: ' + (data.message || 'Silakan coba lagi.'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
                    });
            });

        <?php $__env->stopSection(); ?>

        // Event listener untuk tombol simpan
        document.getElementById('saveDoctorChanges').addEventListener('click', function () {
            const form = document.getElementById('editDoctorForm');
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Tutup modal
                        const modal = bootstrap.Modal.getInstance(document.getElementById('editDoctorModal'));
                        modal.hide();

                        // Tampilkan pesan sukses
                        alert(data.message);

                        // Redirect ke halaman admin
                        window.location.href = data.redirect;
                    } else {
                        alert('Terjadi kesalahan: ' + (data.message || 'Silakan coba lagi.'));
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
                });
        });

        // Fungsi untuk menyimpan perubahan data dokter
        async function saveDoctorChanges() {
            const id = document.getElementById('editDoctorId').value;
            const name = document.getElementById('editName').value;
            const title = document.getElementById('editTitle').value;
            const specialty = document.getElementById('editSpecialty').value;
            const description = document.getElementById('editDescription').value;
            const phone = document.getElementById('editPhone').value;
            const email = document.getElementById('editEmail').value;
            const education = document.getElementById('editEducation').value;
            const experience = document.getElementById('editExperience').value;
            const schedule = document.getElementById('editSchedule').value;

            if (!name || !title || !specialty || !description || !phone || !email || !education || !experience || !schedule) {
                showToast('Harap lengkapi semua field yang diperlukan', 'danger');
                return;
            }

            // Buat FormData untuk mengirim file gambar
            const formData = new FormData();
            formData.append('id', id);
            formData.append('name', name);
            formData.append('title', title);
            formData.append('specialty', specialty);
            formData.append('description', description);
            formData.append('phone', phone);
            formData.append('email', email);
            formData.append('education', education);
            formData.append('experience', experience);
            formData.append('schedule', schedule);

            // Tambahkan file gambar jika ada
            const imageInput = document.getElementById('editImage');
            if (imageInput.files && imageInput.files[0]) {
                formData.append('image', imageInput.files[0]);
            }

            try {
                const response = await fetch('/api/doctors/update', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    // Reload data dari database
                    await loadDoctors();

                    // Tutup modal
                    const modalElement = document.getElementById('editProfileModal');
                    const modal = bootstrap.Modal.getInstance(modalElement);
                    modal.hide();

                    showToast(`Profil Dr. ${name.split(',')[0]} berhasil diperbarui!`, 'success');
                } else {
                    showToast(result.message, 'danger');
                }
            } catch (error) {
                console.error('Error updating doctor:', error);
                showToast('Terjadi kesalahan saat memperbarui data dokter', 'danger');
            }
        }

        // Fungsi untuk menambah dokter baru
        // Fungsi untuk menambah dokter baru
        async function addNewDoctor() {
            const name = document.getElementById('newName').value;
            const title = document.getElementById('newTitle').value;
            const specialty = document.getElementById('newSpecialty').value;
            const description = document.getElementById('newDescription').value;
            const phone = document.getElementById('newPhone').value;
            const email = document.getElementById('newEmail').value;
            const education = document.getElementById('newEducation').value;
            const experience = document.getElementById('newExperience').value;
            const schedule = document.getElementById('newSchedule').value;

            if (!name || !title || !specialty || !description || !phone || !email || !education || !experience || !schedule) {
                showToast('Harap lengkapi semua field yang diperlukan', 'danger');
                return;
            }

            // Buat FormData untuk mengirim file gambar
            const formData = new FormData();
            formData.append('name', name);
            formData.append('title', title);
            formData.append('specialty', specialty);
            formData.append('description', description);
            formData.append('phone', phone);
            formData.append('email', email);
            formData.append('education', education);
            formData.append('experience', experience);
            formData.append('schedule', schedule);

            // Tambahkan file gambar jika ada
            const imageInput = document.getElementById('newImage');
            if (imageInput.files && imageInput.files[0]) {
                formData.append('image', imageInput.files[0]);
            }

            try {
                const response = await fetch('/api/doctors/add', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    // Reload data dari database
                    await loadDoctors();

                    // Tutup modal dan reset form
                    const modalElement = document.getElementById('addDoctorModal');
                    const modal = bootstrap.Modal.getInstance(modalElement);
                    modal.hide();
                    document.getElementById('addDoctorForm').reset();

                    showToast(`Dokter ${name.split(',')[0]} berhasil ditambahkan!`, 'success');
                } else {
                    showToast(result.message, 'danger');
                }
            } catch (error) {
                console.error('Error adding doctor:', error);
                showToast('Terjadi kesalahan saat menambah dokter', 'danger');
            }
        }

        // Fungsi untuk menghapus dokter
        async function deleteDoctor(id) {
            if (!confirm('Apakah Anda yakin ingin menghapus data dokter ini?')) return;

            try {
                const formData = new FormData();
                formData.append('_token', csrfToken);
                formData.append('id', id);

                const response = await fetch('/api/doctors/delete', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    // Reload data dari database
                    await loadDoctors();

                    showToast('Dokter berhasil dihapus', 'success');
                } else {
                    showToast(result.message, 'danger');
                }
            } catch (error) {
                console.error('Error deleting doctor:', error);
                showToast('Terjadi kesalahan saat menghapus dokter', 'danger');
            }
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function () {
            loadDoctors();
            console.log("DOM telah dimuat");

            // Handle login form
            const loginForm = document.getElementById('loginForm');
            loginForm.addEventListener('submit', function (e) {
                e.preventDefault();
                login();
            });

            // Handle profile form
            const profileForm = document.getElementById('profileForm');
            profileForm.addEventListener('submit', function (e) {
                e.preventDefault();

                // Update data user
                currentUser.name = document.getElementById('profileName').value;
                currentUser.phone = document.getElementById('profilePhone').value;
                currentUser.email = document.getElementById('profileEmail').value;
                currentUser.address = document.getElementById('profileAddress').value;
                currentUser.allergies = document.getElementById('profileAllergies').value;
                currentUser.diseases = document.getElementById('profileDiseases').value;

                // Update tampilan
                document.getElementById('welcomeUser').textContent = currentUser.name;
                document.getElementById('patientName').textContent = currentUser.name;

                showToast('Profil berhasil diperbarui', 'success');
            });

            // Event listener untuk tombol filter
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    // Hapus kelas active dari semua tombol
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));

                    // Tambahkan kelas active ke tombol yang diklik
                    this.classList.add('active');

                    // Tampilkan dokter yang difilter
                    displayDoctors();
                });
            });

            // Event listener untuk input pencarian
            const searchInput = document.getElementById('searchDoctor');
            if (searchInput) {
                searchInput.addEventListener('input', displayDoctors);
            }

            // Event listener untuk tombol simpan dokter baru
            const saveNewDoctorBtn = document.getElementById('saveNewDoctorBtn');
            if (saveNewDoctorBtn) {
                saveNewDoctorBtn.addEventListener('click', addNewDoctor);
            }

            // Preview gambar untuk modal edit
            const editImageInput = document.getElementById('editImage');
            const editImagePreview = document.getElementById('editImagePreview');
            const editPreviewImg = document.getElementById('editPreviewImg');

            if (editImageInput && editPreviewImg) {
                editImageInput.addEventListener('change', function () {
                    if (this.files && this.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            editPreviewImg.src = e.target.result;
                            editImagePreview.style.display = 'block';
                        }
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            }
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
            let isProcessing = false; // Flag untuk mencegah multiple trigger
            // Deteksi seleksi teks dengan debouncing
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
                }, 300); // Debounce 300ms
            });
            // Fungsi untuk membaca teks
            function speakText(text) {
                currentUtterance = new SpeechSynthesisUtterance(text);
                // Atur pengaturan
                currentUtterance.lang = 'id-ID';
                currentUtterance.rate = 1.0;
                currentUtterance.pitch = 1.0;
                currentUtterance.volume = 1.0;
                // Event saat mulai
                currentUtterance.onstart = function () {
                    if (speechIndicator) {
                        speechIndicator.classList.add('active');
                    }
                };
                // Event saat selesai
                currentUtterance.onend = function () {
                    isProcessing = false;
                    if (speechIndicator) {
                        speechIndicator.classList.remove('active');
                    }
                    removeHighlight();
                };
                // Event jika error
                currentUtterance.onerror = function () {
                    isProcessing = false;
                    if (speechIndicator) {
                        speechIndicator.classList.remove('active');
                    }
                    removeHighlight();
                };
                // Mulai pembacaan
                synth.speak(currentUtterance);
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
            // Hapus highlight dengan lebih aman
            function removeHighlight() {
                const highlightedElements = document.querySelectorAll('.speaking');
                highlightedElements.forEach(el => {
                    const parent = el.parentNode;
                    if (parent) {
                        // Pindahkan semua child node ke parent
                        while (el.firstChild) {
                            parent.insertBefore(el.firstChild, el);
                        }
                        // Hapus span yang kosong
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
            // ======================
            // FITUR HOVER SOUND
            // ======================
            // Tambahkan event listener untuk semua tombol dan link
            const interactiveElements = document.querySelectorAll('button, a, [role="button"]');
            interactiveElements.forEach(element => {
                // Ambil teks dari elemen atau atribut khusus
                const getTextToSpeak = (el) => {
                    // Prioritaskan atribut data-speak jika ada
                    if (el.getAttribute('data-speak')) {
                        return el.getAttribute('data-speak');
                    }
                    // Gunakan teks dari elemen
                    return el.textContent.trim() || el.getAttribute('aria-label') || el.getAttribute('title');
                };
                // Saat hover masuk
                element.addEventListener('mouseenter', function () {
                    // Jangan bicara jika sedang membaca teks blok
                    if (isProcessing) return;
                    const textToSpeak = getTextToSpeak(this);
                    if (textToSpeak) {
                        // Hentikan pembacaan hover sebelumnya jika ada
                        if (synth.speaking && !currentUtterance?.isBlockText) {
                            synth.cancel();
                        }
                        // Tandai ini sebagai pembicaraan hover
                        const hoverUtterance = new SpeechSynthesisUtterance(textToSpeak);
                        hoverUtterance.lang = 'id-ID';
                        hoverUtterance.rate = 1; // Sedikit lebih cepat untuk hover
                        hoverUtterance.volume = 5; // Volume lebih rendah
                        hoverUtterance.isBlockText = false; // Tandai bukan teks blok
                        // Event listeners
                        hoverUtterance.onstart = () => {
                            if (speechIndicator) {
                                speechIndicator.classList.add('active');
                                speechIndicator.innerHTML = '🔊 ' + textToSpeak.substring(0, 20) + '...';
                            }
                        };
                        hoverUtterance.onend = () => {
                            if (speechIndicator) {
                                speechIndicator.classList.remove('active');
                                speechIndicator.innerHTML = '🔊 Membaca...';
                            }
                        };
                        synth.speak(hoverUtterance);
                    }
                });
                // Saat hover keluar - hentikan pembacaan
                element.addEventListener('mouseleave', function () {
                    // Hanya hentikan jika ini pembicaraan hover
                    if (synth.speaking && !currentUtterance?.isBlockText) {
                        synth.cancel();
                        if (speechIndicator) {
                            speechIndicator.classList.remove('active');
                            speechIndicator.innerHTML = '🔊 Membaca...';
                        }
                    }
                });
            });
        });
    </script>
    <script>
        // Fungsi untuk menangani upload foto dan edit postingan
        document.addEventListener('DOMContentLoaded', function () {
            // Preview gambar
            const imageInput = document.getElementById('igImage');
            const previewBtn = document.getElementById('previewImageBtn');
            const imagePreview = document.getElementById('imagePreview');
            const previewImg = document.getElementById('previewImg');

            if (previewBtn && imageInput) {
                previewBtn.addEventListener('click', function () {
                    if (imageInput.files && imageInput.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            previewImg.src = e.target.result;
                            imagePreview.style.display = 'block';
                        }
                        reader.readAsDataURL(imageInput.files[0]);
                    } else {
                        showToast('Silakan pilih foto terlebih dahulu', 'warning');
                    }
                });
            }

            // Auto preview saat file dipilih
            if (imageInput && previewImg) {
                imageInput.addEventListener('change', function () {
                    if (this.files && this.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            previewImg.src = e.target.result;
                            imagePreview.style.display = 'block';
                        }
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            }

            // Salin tautan
            const copyLinkBtn = document.getElementById('copyLinkBtn');
            if (copyLinkBtn) {
                copyLinkBtn.addEventListener('click', function () {
                    const linkInput = document.getElementById('igLink');
                    if (linkInput) {
                        linkInput.select();
                        document.execCommand('copy');
                        // Tampilkan notifikasi
                        showToast('Tautan berhasil disalin!', 'success');
                    }
                });
            }

            // Upload ke Instagram
            // Tambahkan di paling atas JavaScript
            let isProcessing = false;

            // Upload ke Instagram
            const uploadIgBtn = document.getElementById('uploadIgBtn');
            if (uploadIgBtn) {
                uploadIgBtn.addEventListener('click', function (e) {
                    e.preventDefault();

                    const linkInput = document.getElementById('igLink');
                    const captionInput = document.getElementById('igCaption');
                    const imageInput = document.getElementById('igImage');
                    const imagePreview = document.getElementById('imagePreview');
                    const previewImg = document.getElementById('previewImg');

                    // Validasi link
                    if (!linkInput || !linkInput.value) {
                        showToast('Harap masukkan tautan konten', 'danger');
                        return;
                    }

                    // Validasi gambar
                    if (!imageInput || !imageInput.files || !imageInput.files[0]) {
                        showToast('Harap pilih foto postingan', 'danger');
                        return;
                    }

                    const link = linkInput.value;
                    const caption = captionInput ? captionInput.value : '';
                    const imageFile = imageInput.files[0];

                    // Validasi ukuran file (maks 5MB)
                    if (imageFile.size > 5 * 1024 * 1024) {
                        showToast('Ukuran foto maksimal 5MB', 'danger');
                        return;
                    }

                    // Baca file sebagai base64
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const imageData = e.target.result;

                        // Simpan postingan ke localStorage
                        const newPost = saveInstagramPost(link, caption, imageData);

                        // Tambahkan postingan ke daftar di dashboard (HANYA SEKALI)
                        addInstagramPostToDashboard(newPost);

                        // Reset form dengan benar
                        linkInput.value = '';
                        captionInput.value = '';
                        imageInput.value = '';

                        // Reset preview gambar
                        if (imagePreview) {
                            imagePreview.style.display = 'none';
                            if (previewImg) {
                                previewImg.src = '';
                            }
                        }

                        // Tampilkan notifikasi
                        showToast('Postingan berhasil diupload ke Instagram!', 'success');
                    };
                    reader.readAsDataURL(imageFile);
                });
            }

            // Preview gambar untuk modal edit
            const editPostImage = document.getElementById('editPostImage');
            const editImagePreview = document.getElementById('editImagePreview');
            const editPreviewImg = document.getElementById('editPreviewImg');

            if (editPostImage && editPreviewImg) {
                editPostImage.addEventListener('change', function () {
                    if (this.files && this.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            editPreviewImg.src = e.target.result;
                            editImagePreview.style.display = 'block';
                        }
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            }

            // Event listener untuk tombol simpan perubahan
            const saveEditedPostBtn = document.getElementById('saveEditedPostBtn');
            if (saveEditedPostBtn) {
                saveEditedPostBtn.addEventListener('click', saveEditedPost);
            }

            // Muat postingan yang ada saat halaman dimuat
            loadInstagramPostsToDashboard();
        });

        // Fungsi untuk menyimpan postingan Instagram ke localStorage
        function saveInstagramPost(link, caption, imageData = null) {
            let instagramPosts = JSON.parse(localStorage.getItem('instagramPosts')) || [];

            const now = new Date();
            const formattedDate = now.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            });

            const newPost = {
                id: Date.now(), // ID unik
                link: link,
                caption: caption,
                image: imageData || `https://picsum.photos/seed/ig${Date.now()}/400/400.jpg`,
                date: now.toISOString(),
                formattedDate: formattedDate
            };

            // Tambahkan postingan baru di awal array
            instagramPosts.unshift(newPost);

            // Simpan ke localStorage
            localStorage.setItem('instagramPosts', JSON.stringify(instagramPosts));

            // HAPUS BARIS INI ↓
            // window.dispatchEvent(new CustomEvent('instagramPostAdded', { detail: newPost }));

            return newPost;
        }

        // Fungsi untuk menambahkan postingan ke daftar di dashboard
        // Fungsi untuk menambahkan postingan ke daftar di dashboard
        function addInstagramPostToDashboard(post) {
            const postsContainer = document.getElementById('instagramPosts');
            if (!postsContainer) return;

            // Cek apakah postingan sudah ada
            const existingPost = document.querySelector(`[data-post-id="${post.id}"]`);
            if (existingPost) {
                console.log('Postingan sudah ada di dashboard');
                return;
            }

            // Hapus pesan kosong jika ada
            const emptyMessage = postsContainer.querySelector('.text-center');
            if (emptyMessage) {
                emptyMessage.remove();
            }

            // Buat elemen postingan baru
            const postElement = document.createElement('div');
            postElement.className = 'card mb-3';
            postElement.setAttribute('data-post-id', post.id);

            postElement.innerHTML = `
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-start mb-2">
                <h6 class="card-title mb-0">Postingan Instagram</h6>
                <div>
                    <small class="text-muted me-2">${post.formattedDate}</small>
                    <div class="btn-group btn-group-sm" role="group">
                        <button class="btn btn-outline-primary" onclick="editInstagramPost(${post.id})" title="Edit">
                            <i class="fas fa-edit"></i>Edit
                        </button>
                        <button class="btn btn-outline-danger" onclick="deleteInstagramPost(${post.id})" title="Hapus">
                            <i class="fas fa-trash"></i>Hapus
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <img src="${post.image}" alt="Preview" class="img-fluid rounded">
                </div>
                <div class="col-md-8">
                    <p class="card-text">${post.caption || 'Tanpa caption'}</p>
                    <a href="${post.link}" target="_blank" class="btn btn-sm btn-outline-primary me-2">
                        <i class="fas fa-external-link-alt me-1"></i> Lihat Konten
                    </a>
                </div>
            </div>
            <div class="mt-2">
                <span class="badge bg-success">Telah diupload</span>
            </div>
        </div>
    `;

            // Tambahkan postingan di awal daftar
            postsContainer.insertBefore(postElement, postsContainer.firstChild);
        }

        // Fungsi untuk membuka modal edit postingan
        function editInstagramPost(postId) {
            // Ambil data postingan dari localStorage
            const instagramPosts = JSON.parse(localStorage.getItem('instagramPosts')) || [];
            const post = instagramPosts.find(p => p.id === postId);

            if (!post) {
                showToast('Postingan tidak ditemukan', 'danger');
                return;
            }

            // Isi form dengan data postingan
            document.getElementById('editPostId').value = post.id;
            document.getElementById('editPostLink').value = post.link;
            document.getElementById('editPostCaption').value = post.caption;

            // Tampilkan preview gambar saat ini
            const editImagePreview = document.getElementById('editImagePreview');
            const editPreviewImg = document.getElementById('editPreviewImg');
            if (editImagePreview && editPreviewImg) {
                editPreviewImg.src = post.image;
                editImagePreview.style.display = 'block';
            }

            // Tampilkan modal
            const modalElement = document.getElementById('editInstagramPostModal');
            const modal = new bootstrap.Modal(modalElement);
            modal.show();
        }

        // Fungsi untuk menyimpan perubahan postingan
        function saveEditedPost() {
            const postId = parseInt(document.getElementById('editPostId').value);
            const link = document.getElementById('editPostLink').value;
            const caption = document.getElementById('editPostCaption').value;
            const imageInput = document.getElementById('editPostImage');

            // Validasi form
            if (!link || !caption) {
                showToast('Harap lengkapi semua field yang diperlukan', 'danger');
                return;
            }

            // Ambil data postingan dari localStorage
            let instagramPosts = JSON.parse(localStorage.getItem('instagramPosts')) || [];
            const postIndex = instagramPosts.findIndex(p => p.id === postId);

            if (postIndex === -1) {
                showToast('Postingan tidak ditemukan', 'danger');
                return;
            }

            // Update data postingan
            instagramPosts[postIndex].link = link;
            instagramPosts[postIndex].caption = caption;

            // Jika ada gambar baru, proses gambar
            if (imageInput.files && imageInput.files[0]) {
                // Validasi ukuran file (maks 5MB)
                if (imageInput.files[0].size > 5 * 1024 * 1024) {
                    showToast('Ukuran foto maksimal 5MB', 'danger');
                    return;
                }

                // Baca file sebagai base64
                const reader = new FileReader();
                reader.onload = function (e) {
                    const imageData = e.target.result;
                    instagramPosts[postIndex].image = imageData;

                    // Simpan ke localStorage
                    localStorage.setItem('instagramPosts', JSON.stringify(instagramPosts));

                    // Update tampilan
                    updatePostInDashboard(postId, instagramPosts[postIndex]);

                    // Tutup modal
                    const modalElement = document.getElementById('editInstagramPostModal');
                    const modal = bootstrap.Modal.getInstance(modalElement);
                    modal.hide();

                    // Tampilkan notifikasi
                    showToast('Postingan berhasil diperbarui!', 'success');
                };
                reader.readAsDataURL(imageInput.files[0]);
            } else {
                // Simpan ke localStorage tanpa mengubah gambar
                localStorage.setItem('instagramPosts', JSON.stringify(instagramPosts));

                // Update tampilan
                updatePostInDashboard(postId, instagramPosts[postIndex]);

                // Tutup modal
                const modalElement = document.getElementById('editInstagramPostModal');
                const modal = bootstrap.Modal.getInstance(modalElement);
                modal.hide();

                // Tampilkan notifikasi
                showToast('Postingan berhasil diperbarui!', 'success');
            }
        }

        // Fungsi untuk update postingan di tampilan dashboard
        function updatePostInDashboard(postId, updatedPost) {
            const postElement = document.querySelector(`[data-post-id="${postId}"]`);
            if (postElement) {
                // Update HTML elemen
                postElement.innerHTML = `
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h6 class="card-title mb-0">Postingan Instagram</h6>
<div>
    <small class="text-muted me-2">${updatedPost.formattedDate}</small>
    <div class="btn-group btn-group-sm" role="group">
        <button class="btn btn-outline-primary" onclick="editInstagramPost(${updatedPost.id})" title="Edit">
            <i class="fas fa-edit me-1"></i> Edit
        </button>
        <button class="btn btn-outline-danger" onclick="deleteInstagramPost(${updatedPost.id})" title="Hapus">
            <i class="fas fa-trash me-1"></i> Hapus
        </button>
    </div>
</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <img src="${updatedPost.image}" alt="Preview" class="img-fluid rounded">
                    </div>
                    <div class="col-md-8">
                        <p class="card-text">${updatedPost.caption || 'Tanpa caption'}</p>
                        <a href="${updatedPost.link}" target="_blank" class="btn btn-sm btn-outline-primary me-2">
                            <i class="fas fa-external-link-alt me-1"></i> Lihat Konten
                        </a>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="badge bg-success">Telah diupload</span>
                </div>
            </div>
        `;
            }

            // Trigger event untuk update halaman utama
            window.dispatchEvent(new CustomEvent('instagramPostUpdated', { detail: { postId: postId, post: updatedPost } }));
        }

        // Fungsi untuk menghapus postingan Instagram
        function deleteInstagramPost(postId) {
            if (confirm('Apakah Anda yakin ingin menghapus postingan ini?')) {
                // Hapus dari localStorage
                let instagramPosts = JSON.parse(localStorage.getItem('instagramPosts')) || [];
                instagramPosts = instagramPosts.filter(post => post.id !== postId);
                localStorage.setItem('instagramPosts', JSON.stringify(instagramPosts));

                // Hapus elemen dari tampilan
                const postElement = document.querySelector(`[data-post-id="${postId}"]`);
                if (postElement) {
                    postElement.remove();
                }

                // Cek apakah masih ada postingan
                const postsContainer = document.getElementById('instagramPosts');
                if (postsContainer && postsContainer.children.length === 0) {
                    postsContainer.innerHTML = `
                <div class="text-center py-4">
                    <i class="fab fa-instagram fa-3x text-muted mb-3"></i>
                    <p class="text-muted">Belum ada postingan Instagram</p>
                </div>
            `;
                }

                // Trigger event untuk update halaman utama
                window.dispatchEvent(new CustomEvent('instagramPostDeleted', { detail: { postId: postId } }));

                // Tampilkan notifikasi
                showToast('Postingan berhasil dihapus!', 'success');
            }
        }

        // Fungsi untuk memuat semua postingan di dashboard admin
        function loadInstagramPostsToDashboard() {
            const savedPosts = JSON.parse(localStorage.getItem('instagramPosts')) || [];
            const postsContainer = document.getElementById('instagramPosts');

            if (savedPosts.length === 0) {
                postsContainer.innerHTML = `
            <div class="text-center py-4">
                <i class="fab fa-instagram fa-3x text-muted mb-3"></i>
                <p class="text-muted">Belum ada postingan Instagram</p>
            </div>
        `;
                return;
            }

            // Kosongkan container
            postsContainer.innerHTML = '';

            // Tambahkan semua postingan
            savedPosts.forEach(post => {
                addInstagramPostToDashboard(post);
            });
        }

        // Fungsi untuk menampilkan notifikasi toast
        function showToast(message, type = 'success') {
            // Buat elemen toast
            const toastContainer = document.createElement('div');
            toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
            toastContainer.style.zIndex = '1050';

            const toastHTML = `
        <div class="toast align-items-center text-white bg-${type}" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2"></i>
                    ${message}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    `;

            toastContainer.innerHTML = toastHTML;
            document.body.appendChild(toastContainer);

            // Tampilkan toast
            const toastElement = toastContainer.querySelector('.toast');
            const toast = new bootstrap.Toast(toastElement, { autohide: true, delay: 5000 });
            toast.show();

            // Hapus container toast setelah toast ditutup
            toastElement.addEventListener('hidden.bs.toast', function () {
                toastContainer.remove();
            });
        }

        // Fungsi untuk membuka modal edit postingan
        function editInstagramPost(postId) {
            // Ambil data postingan dari localStorage
            const instagramPosts = JSON.parse(localStorage.getItem('instagramPosts')) || [];
            const post = instagramPosts.find(p => p.id === postId);

            if (!post) {
                showToast('Postingan tidak ditemukan', 'danger');
                return;
            }

            // Isi form dengan data postingan
            document.getElementById('editPostId').value = post.id;
            document.getElementById('editPostLink').value = post.link;
            document.getElementById('editPostCaption').value = post.caption;

            // Tampilkan preview gambar saat ini
            const editImagePreview = document.getElementById('editImagePreview');
            const editPreviewImg = document.getElementById('editPreviewImg');
            if (editImagePreview && editPreviewImg) {
                editPreviewImg.src = post.image;
                editImagePreview.style.display = 'block';
            }

            // Tampilkan modal
            const modalElement = document.getElementById('editInstagramPostModal');
            const modal = new bootstrap.Modal(modalElement);
            modal.show();
        }

        // Fungsi untuk menyimpan perubahan postingan
        function saveEditedPost() {
            const postId = parseInt(document.getElementById('editPostId').value);
            const link = document.getElementById('editPostLink').value;
            const caption = document.getElementById('editPostCaption').value;
            const imageInput = document.getElementById('editPostImage');

            // Validasi form
            if (!link || !caption) {
                showToast('Harap lengkapi semua field yang diperlukan', 'danger');
                return;
            }

            // Ambil data postingan dari localStorage
            let instagramPosts = JSON.parse(localStorage.getItem('instagramPosts')) || [];
            const postIndex = instagramPosts.findIndex(p => p.id === postId);

            if (postIndex === -1) {
                showToast('Postingan tidak ditemukan', 'danger');
                return;
            }

            // Update data postingan
            instagramPosts[postIndex].link = link;
            instagramPosts[postIndex].caption = caption;

            // Jika ada gambar baru, proses gambar
            if (imageInput.files && imageInput.files[0]) {
                // Validasi ukuran file (maks 5MB)
                if (imageInput.files[0].size > 5 * 1024 * 1024) {
                    showToast('Ukuran foto maksimal 5MB', 'danger');
                    return;
                }

                // Baca file sebagai base64
                const reader = new FileReader();
                reader.onload = function (e) {
                    const imageData = e.target.result;
                    instagramPosts[postIndex].image = imageData;

                    // Simpan ke localStorage
                    localStorage.setItem('instagramPosts', JSON.stringify(instagramPosts));

                    // Update tampilan
                    updatePostInDashboard(postId, instagramPosts[postIndex]);

                    // Tutup modal
                    const modalElement = document.getElementById('editInstagramPostModal');
                    const modal = bootstrap.Modal.getInstance(modalElement);
                    modal.hide();

                    // Tampilkan notifikasi
                    showToast('Postingan berhasil diperbarui!', 'success');
                };
                reader.readAsDataURL(imageInput.files[0]);
            } else {
                // Simpan ke localStorage tanpa mengubah gambar
                localStorage.setItem('instagramPosts', JSON.stringify(instagramPosts));

                // Update tampilan
                updatePostInDashboard(postId, instagramPosts[postIndex]);

                // Tutup modal
                const modalElement = document.getElementById('editInstagramPostModal');
                const modal = bootstrap.Modal.getInstance(modalElement);
                modal.hide();

                // Tampilkan notifikasi
                showToast('Postingan berhasil diperbarui!', 'success');
            }
        }

        // Fungsi untuk update postingan di tampilan dashboard
        function updatePostInDashboard(postId, updatedPost) {
            const postElement = document.querySelector(`[data-post-id="${postId}"]`);
            if (postElement) {
                // Update HTML elemen
                postElement.innerHTML = `
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h6 class="card-title mb-0">Postingan Instagram</h6>
                    <div>
                        <small class="text-muted me-2">${updatedPost.formattedDate}</small>
                        <div>
                            <button class="btn btn-sm btn-outline-primary me-1" onclick="editInstagramPost(${updatedPost.id})">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteInstagramPost(${updatedPost.id})">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <img src="${updatedPost.image}" alt="Preview" class="img-fluid rounded">
                    </div>
                    <div class="col-md-8">
                        <p class="card-text">${updatedPost.caption || 'Tanpa caption'}</p>
                        <a href="${updatedPost.link}" target="_blank" class="btn btn-sm btn-outline-primary me-2">
                            <i class="fas fa-external-link-alt me-1"></i> Lihat Konten
                        </a>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="badge bg-success">Telah diupload</span>
                </div>
            </div>
        `;
            }

            // Trigger event untuk update halaman utama
            window.dispatchEvent(new CustomEvent('instagramPostUpdated', { detail: { postId: postId, post: updatedPost } }));
        }


    </script>
    <script>
        // Fungsi untuk menyimpan berita
        function saveNews() {
            const newsId = document.getElementById('newsId').value;
            const title = document.getElementById('newsTitle').value;
            const category = document.getElementById('newsCategory').value;
            const content = document.getElementById('newsContent').value;
            const date = document.getElementById('newsDate').value;
            const imageInput = document.getElementById('newsImage');

            // Validasi form
            if (!title || !category || !content || !date) {
                showToast('Harap lengkapi semua field yang diperlukan', 'danger');
                return;
            }

            // Ambil data berita dari localStorage
            let newsList = JSON.parse(localStorage.getItem('newsList')) || [];

            // Proses gambar jika ada
            if (imageInput.files && imageInput.files[0]) {
                // Validasi ukuran file (maks 2MB)
                if (imageInput.files[0].size > 2 * 1024 * 1024) {
                    showToast('Ukuran gambar maksimal 2MB', 'danger');
                    return;
                }

                // Baca file sebagai base64
                const reader = new FileReader();
                reader.onload = function (e) {
                    const imageData = e.target.result;

                    if (newsId) {
                        // Update berita yang ada
                        updateNews(newsId, title, category, content, date, imageData);
                    } else {
                        // Tambah berita baru
                        addNews(title, category, content, date, imageData);
                    }
                };
                reader.readAsDataURL(imageInput.files[0]);
            } else {
                if (newsId) {
                    // Update berita yang ada tanpa mengubah gambar
                    updateNews(newsId, title, category, content, date, null);
                } else {
                    // Tambah berita baru tanpa gambar
                    addNews(title, category, content, date, null);
                }
            }
        }

        // Fungsi untuk menambah berita baru
        function addNews(title, category, content, date, image) {
            let newsList = JSON.parse(localStorage.getItem('newsList')) || [];

            const newNews = {
                id: Date.now(),
                title,
                category,
                content,
                date,
                image: image || `https://picsum.photos/seed/news${Date.now()}/600/400.jpg`,
                createdAt: new Date().toISOString(),
                author: currentUser.name // Tambahkan author
            };

            newsList.unshift(newNews);
            localStorage.setItem('newsList', JSON.stringify(newsList));

            // Tutup modal
            const modalElement = document.getElementById('addNewsModal');
            const modal = bootstrap.Modal.getInstance(modalElement);
            modal.hide();

            // Reset form
            document.getElementById('newsForm').reset();
            document.getElementById('newsImagePreview').style.display = 'none';

            // Tampilkan notifikasi
            showToast('Berita berhasil ditambahkan!', 'success');

            // Refresh tampilan
            loadNewsList();
            loadRecentNews();
            updateNewsStats();
        }

        // Fungsi untuk menampilkan daftar berita di tab Berita
        function loadNewsList() {
            const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
            const container = document.getElementById('newsList');

            if (newsList.length === 0) {
                container.innerHTML = `
            <div class="text-center py-4">
                <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                <p class="text-muted">Belum ada berita</p>
            </div>
        `;
                return;
            }

            container.innerHTML = newsList.map(news => {
                const categoryClass = {
                    'pengumuman': 'bg-primary',
                    'kesehatan': 'bg-success',
                    'event': 'bg-warning',
                    'lainnya': 'bg-info'
                }[news.category] || 'bg-secondary';

                return `
            <div class="news-item mb-4 pb-4 border-bottom">
                <div class="row">
                    <div class="col-md-3">
                        <img src="${news.image}" alt="${news.title}" class="img-fluid rounded">
                    </div>
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5>${news.title}</h5>
                            <div>
                                <span class="badge ${categoryClass} me-2">${news.category}</span>
                                <div class="btn-group btn-group-sm">
                                    <button class="btn btn-outline-primary" onclick="editNews(${news.id})">
                                        <i class="fas fa-edit"></i>Edit
                                    </button>
                                    <button class="btn btn-outline-danger" onclick="deleteNews(${news.id})">
                                        <i class="fas fa-trash"></i>Hapus
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted small mb-2">
                            <i class="far fa-calendar me-1"></i> ${formatDate(news.date)}
                            ${news.author ? `<i class="fas fa-user ms-2 me-1"></i>${news.author}` : ''}
                        </p>
                        <p>${news.content.substring(0, 200)}${news.content.length > 200 ? '...' : ''}</p>
                    </div>
                </div>
            </div>
        `;
            }).join('');
        }

        // Fungsi untuk edit berita
        function editNews(id) {
            const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
            const news = newsList.find(item => item.id == id);

            if (!news) {
                showToast('Berita tidak ditemukan', 'danger');
                return;
            }

            // Isi form dengan data berita
            document.getElementById('newsId').value = news.id;
            document.getElementById('newsTitle').value = news.title;
            document.getElementById('newsCategory').value = news.category;
            document.getElementById('newsContent').value = news.content;
            document.getElementById('newsDate').value = news.date;

            // Tampilkan preview gambar
            const previewContainer = document.getElementById('newsImagePreview');
            const previewImg = document.getElementById('previewNewsImg');
            if (previewContainer && previewImg) {
                previewImg.src = news.image;
                previewContainer.style.display = 'block';
            }

            // Ubah judul modal
            document.getElementById('addNewsModalLabel').innerHTML = '<i class="fas fa-edit me-2"></i>Edit Berita';

            // Tampilkan modal
            const modalElement = document.getElementById('addNewsModal');
            const modal = new bootstrap.Modal(modalElement);
            modal.show();
        }

        // Fungsi untuk update berita
        function updateNews(id, title, category, content, date, image) {
            let newsList = JSON.parse(localStorage.getItem('newsList')) || [];
            const newsIndex = newsList.findIndex(news => news.id == id);

            if (newsIndex !== -1) {
                newsList[newsIndex] = {
                    ...newsList[newsIndex],
                    title,
                    category,
                    content,
                    date,
                    image: image || newsList[newsIndex].image,
                    updatedAt: new Date().toISOString()
                };

                localStorage.setItem('newsList', JSON.stringify(newsList));

                // Tutup modal
                const modalElement = document.getElementById('addNewsModal');
                const modal = bootstrap.Modal.getInstance(modalElement);
                modal.hide();

                // Reset form
                document.getElementById('newsForm').reset();
                document.getElementById('newsImagePreview').style.display = 'none';

                // Tampilkan notifikasi
                showToast('Berita berhasil diperbarui!', 'success');

                // Refresh tampilan
                loadNewsList();
                loadRecentNews();
            }
        }

        // Fungsi untuk menghapus berita
        function deleteNews(id) {
            if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
                let newsList = JSON.parse(localStorage.getItem('newsList')) || [];
                newsList = newsList.filter(news => news.id != id);
                localStorage.setItem('newsList', JSON.stringify(newsList));

                // Tampilkan notifikasi
                showToast('Berita berhasil dihapus!', 'success');

                // Refresh tampilan
                loadNewsList();
                loadRecentNews();
                updateNewsStats();
            }
        }

        // Tambahkan di event listener
        document.addEventListener('DOMContentLoaded', function () {
            // Preview gambar berita
            const newsImageInput = document.getElementById('newsImage');
            const newsImagePreview = document.getElementById('newsImagePreview');
            const previewNewsImg = document.getElementById('previewNewsImg');

            if (newsImageInput && previewNewsImg) {
                newsImageInput.addEventListener('change', function () {
                    if (this.files && this.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            previewNewsImg.src = e.target.result;
                            newsImagePreview.style.display = 'block';
                        }
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            }

            // Reset form saat modal ditutup
            const addNewsModal = document.getElementById('addNewsModal');
            if (addNewsModal) {
                addNewsModal.addEventListener('hidden.bs.modal', function () {
                    document.getElementById('newsForm').reset();
                    document.getElementById('newsImagePreview').style.display = 'none';
                    document.getElementById('addNewsModalLabel').innerHTML = '<i class="fas fa-newspaper me-2"></i>Tambah Berita Baru';
                });
            }

            // Event listener untuk tombol simpan berita
            const saveNewsBtn = document.getElementById('saveNewsBtn');
            if (saveNewsBtn) {
                saveNewsBtn.addEventListener('click', saveNews);
            }

            // Load data saat halaman dimuat
            if (document.getElementById('recentNewsList')) {
                loadRecentNews();
            }
            if (document.getElementById('newsList')) {
                loadNewsList();
            }
            updateNewsStats();
        });
    </script>

</body>

</html><?php /**PATH /Users/bilalabdillah/Documents/klinik-laravel/resources/views/patient_portal.blade.php ENDPATH**/ ?>