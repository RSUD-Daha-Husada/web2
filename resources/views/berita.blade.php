<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSUD Daha Husada - Portal Berita Kesehatan Terkini</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght=700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary: #0066ff;
            --secondary: #00c9ff;
            --accent: #ff006e;
            --dark: #1a1a2e;
            --light: #f8f9fa;
            --text: #333;
            --text-light: #777;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: #f5f7fa;
        }
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary);
        }
        /* Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s, visibility 0.5s;
        }
        .preloader.hidden {
            opacity: 0;
            visibility: hidden;
        }
        .loader {
            width: 80px;
            height: 80px;
            border: 8px solid #f3f3f3;
            border-top: 8px solid var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        /* Header Styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 15px 0;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            font-weight: 800;
            font-family: 'Playfair Display', serif;
            color: var(--primary);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .logo i {
            font-size: 2.2rem;
            margin-right: 10px;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .logo:hover {
            transform: scale(1.05);
        }
        nav ul {
            display: flex;
            list-style: none;
        }
        nav ul li {
            margin-left: 30px;
            position: relative;
        }
        nav ul li a {
            text-decoration: none;
            color: var(--text);
            font-weight: 500;
            font-size: 1rem;
            position: relative;
            transition: all 0.3s ease;
            padding: 5px 0;
            display: flex;
            align-items: center;
        }
        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: width 0.3s ease;
        }
        nav ul li a:hover {
            color: var(--primary);
        }
        nav ul li a:hover::after {
            width: 100%;
        }
        /* Dropdown Styles */
        .dropdown {
            position: relative;
        }
        .dropdown-toggle {
            cursor: pointer;
        }
        .dropdown-toggle i {
            margin-left: 5px;
            font-size: 0.8rem;
            transition: transform 0.3s ease;
        }
        .dropdown.active .dropdown-toggle i {
            transform: rotate(180deg);
        }
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 200px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 1000;
            margin-top: 10px;
        }
        .dropdown.active .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .dropdown-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: var(--text);
            text-decoration: none;
            transition: all 0.3s ease;
            border-radius: 0;
        }
        .dropdown-menu a:hover {
            background: rgba(0, 102, 255, 0.05);
            color: var(--primary);
            padding-left: 25px;
        }
        .dropdown-menu a i {
            margin-right: 10px;
            color: var(--primary);
        }
        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--primary);
        }
        /* Hero Section */
        .hero {
            min-height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4ecf7 100%);
            overflow: hidden;
            padding-top: 80px;
        }
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        .hero-dots {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(rgba(41, 128, 185, 0.2) 1px, transparent 1px);
            background-size: 20px 20px;
            z-index: 1;
        }
        .hero-waves {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 120px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1440 120" xmlns="http://www.w3.org/2000/svg"><path fill="rgba(255,255,255,0.5)" d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,85.3C672,75,768,85,864,90.7C960,96,1056,96,1152,90.7C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            z-index: 2;
        }
        .hero-shape {
            position: absolute;
            border-radius: 50%;
            z-index: 1;
        }
        .shape-1 {
            width: 400px;
            height: 400px;
            top: -150px;
            right: -100px;
            background: linear-gradient(45deg, rgba(41, 128, 185, 0.1), rgba(109, 213, 250, 0.1));
            animation: float 8s ease-in-out infinite;
        }
        .shape-2 {
            width: 300px;
            height: 300px;
            bottom: -100px;
            left: -50px;
            background: linear-gradient(45deg, rgba(142, 68, 173, 0.1), rgba(155, 89, 182, 0.1));
            animation: float 10s ease-in-out infinite reverse;
        }
        .shape-3 {
            width: 200px;
            height: 200px;
            top: 50%;
            right: 20%;
            background: linear-gradient(45deg, rgba(26, 188, 156, 0.1), rgba(46, 204, 113, 0.1));
            animation: float 7s ease-in-out infinite 2s;
        }
        .shape-4 {
            width: 150px;
            height: 150px;
            top: 30%;
            left: 10%;
            background: linear-gradient(45deg, rgba(231, 76, 60, 0.1), rgba(241, 196, 15, 0.1));
            animation: float 9s ease-in-out infinite 1s;
        }
        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
            position: relative;
            z-index: 3;
        }
        .hero-content {
            animation: fadeInLeft 1s ease;
        }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.9);
            padding: 8px 16px;
            border-radius: 50px;
            margin-bottom: 25px;
            font-weight: 600;
            color: var(--primary);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
        .badge-pulse {
            display: inline-block;
            width: 8px;
            height: 8px;
            background: var(--primary);
            border-radius: 50%;
            margin-right: 8px;
            position: relative;
        }
        .badge-pulse::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--primary);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }
        .hero-content h1 {
            font-size: 3.8rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 25px;
            color: var(--text-dark);
            font-family: 'Playfair Display', serif;
            position: relative;
        }
        .hero-content h1 .highlight {
            position: relative;
            z-index: 1;
        }
        .hero-content h1 .highlight::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 12px;
            background: rgba(41, 128, 185, 0.2);
            z-index: -1;
            border-radius: 4px;
        }
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 35px;
            color: var(--text-light);
            max-width: 500px;
            line-height: 1.6;
        }
        .hero-stats {
            display: flex;
            gap: 30px;
            margin-bottom: 35px;
        }
        .stat-item {
            text-align: center;
        }
        .stat-number {
            display: block;
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }
        .stat-label {
            font-size: 0.9rem;
            color: var(--text-light);
            font-weight: 500;
        }
        .hero-buttons {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 15px 35px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .btn span {
            position: relative;
            z-index: 2;
        }
        .btn i {
            margin-left: 10px;
            transition: transform 0.3s ease;
        }
        .btn-primary {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
        }
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            z-index: 1;
        }
        .btn-primary:hover::before {
            transform: translateX(0);
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(0, 102, 255, 0.4);
        }
        .btn-primary:hover i {
            transform: translateX(5px);
        }
        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 2px solid var(--primary);
        }
        .btn-secondary:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(0, 102, 255, 0.2);
        }
        .btn-secondary:hover i {
            transform: translateX(5px);
        }
        .hero-trust {
            margin-top: 20px;
        }
        .trust-label {
            font-size: 0.9rem;
            color: var(--text-light);
            margin-bottom: 15px;
            font-weight: 500;
        }
        .trust-logos {
            display: flex;
            gap: 20px;
        }
        .logo-item {
            height: 30px;
            width: 80px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            color: var(--text-light);
        }
        .hero-image {
            position: relative;
            animation: fadeInRight 1s ease;
            z-index: 2;
        }
        .image-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            transition: transform 0.5s ease;
            z-index: 2;
        }
        .image-card:hover {
            transform: translateY(-10px);
        }
        .image-card img {
            width: 100%;
            display: block;
            transition: transform 0.5s ease;
        }
        .image-card:hover img {
            transform: scale(1.05);
        }
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .image-card:hover .image-overlay {
            opacity: 1;
        }
        .play-button {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .play-button:hover {
            transform: scale(1.1);
            background: white;
        }
        .play-button i {
            color: var(--primary);
            font-size: 1.5rem;
            margin-left: 5px;
        }
        .floating-cards {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 3;
            pointer-events: none;
        }
        .floating-card {
            position: absolute;
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 15px;
            z-index: 3;
            pointer-events: auto;
            transition: all 0.3s ease;
        }
        .card-1 {
            top: 15%;
            right: -50px;
            animation: circularMotion1 15s linear infinite;
        }
        .card-2 {
            bottom: 15%;
            left: -50px;
            animation: circularMotion2 18s linear infinite reverse;
        }
        .card-1:hover,
        .card-2:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        .card-icon {
            width: 50px;
            height: 50px;
            background: rgba(41, 128, 185, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .card-icon i {
            font-size: 1.5rem;
            color: var(--primary);
        }
        .card-text h4 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--text-dark);
        }
        .card-text p {
            font-size: 0.85rem;
            color: var(--text-light);
            margin: 0;
        }
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 5;
        }
        .mouse {
            width: 30px;
            height: 50px;
            border: 2px solid rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            position: relative;
            margin: 0 auto 10px;
        }
        .wheel {
            width: 6px;
            height: 6px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            animation: wheel 2s infinite;
        }
        .arrows {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .arrows span {
            width: 10px;
            height: 10px;
            border-right: 2px solid rgba(0, 0, 0, 0.3);
            border-bottom: 2px solid rgba(0, 0, 0, 0.3);
            transform: rotate(45deg);
            margin: -5px 0;
            animation: arrow 1.5s infinite;
        }
        .arrows span:nth-child(2) {
            animation-delay: 0.2s;
        }
        .arrows span:nth-child(3) {
            animation-delay: 0.4s;
        }
        /* Animations */
        @keyframes float {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        @keyframes pulse {
            0% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(41, 128, 185, 0.7);
            }
            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(41, 128, 185, 0);
            }
            100% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(41, 128, 185, 0);
            }
        }
        @keyframes wheel {
            0% {
                top: 10px;
                opacity: 1;
            }
            100% {
                top: 30px;
                opacity: 0;
            }
        }
        @keyframes arrow {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes circularMotion1 {
            0% {
                transform: translate(0, 0) rotate(0deg) translateX(80px) rotate(0deg);
            }
            100% {
                transform: translate(0, 0) rotate(360deg) translateX(80px) rotate(-360deg);
            }
        }
        @keyframes circularMotion2 {
            0% {
                transform: translate(0, 0) rotate(0deg) translateX(80px) rotate(0deg);
            }
            100% {
                transform: translate(0, 0) rotate(360deg) translateX(80px) rotate(-360deg);
            }
        }
        /* News Section */
        .news-section {
            padding: 100px 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        .section-header h2 {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--dark);
            font-family: 'Playfair Display', serif;
            position: relative;
            display: inline-block;
        }
        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 2px;
        }
        .section-header p {
            color: var(--text-light);
            max-width: 700px;
            margin: 20px auto 0;
            font-size: 1.1rem;
        }
        .news-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 15px;
        }
        .filter-btn {
            padding: 8px 20px;
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--text);
        }
        .filter-btn.active {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
            border-color: transparent;
            box-shadow: 0 4px 15px rgba(0, 102, 255, 0.3);
        }
        .filter-btn:hover:not(.active) {
            border-color: var(--primary);
            color: var(--primary);
        }
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }
        .news-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.4s ease;
            position: relative;
        }
        .news-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        .news-card-img {
            height: 220px;
            overflow: hidden;
            position: relative;
        }
        .news-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }
        .news-card:hover .news-card-img img {
            transform: scale(1.1);
        }
        .news-category {
            position: absolute;
            top: 20px;
            left: 20px;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0, 102, 255, 0.3);
        }
        .news-card-content {
            padding: 25px;
        }
        .news-date {
            display: flex;
            align-items: center;
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        .news-date i {
            margin-right: 8px;
            color: var(--primary);
        }
        .news-card-content h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.4;
            color: var(--dark);
            transition: color 0.3s ease;
        }
        .news-card:hover h3 {
            color: var(--primary);
        }
        .news-card-content p {
            color: var(--text-light);
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .read-more {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .read-more i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        .read-more:hover {
            color: var(--secondary);
        }
        .read-more:hover i {
            transform: translateX(5px);
        }
        /* Featured News Section */
        .featured-section {
            padding: 100px 5%;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            position: relative;
            overflow: hidden;
        }
        .featured-container {
            max-width: 1400px;
            margin: 0 auto;
        }
        .featured-news {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            margin-top: 60px;
        }
        .featured-main {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.4s ease;
        }
        .featured-main:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        .featured-main-img {
            height: 400px;
            position: relative;
            overflow: hidden;
        }
        .featured-main-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }
        .featured-main:hover .featured-main-img img {
            transform: scale(1.05);
        }
        .featured-badge {
            position: absolute;
            top: 30px;
            left: 30px;
            background: var(--accent);
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 700;
            box-shadow: 0 4px 15px rgba(255, 0, 110, 0.4);
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 0, 110, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(255, 0, 110, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 0, 110, 0);
            }
        }
        .featured-main-content {
            padding: 30px;
        }
        .featured-main-content h2 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.3;
            color: var(--dark);
            font-family: 'Playfair Display', serif;
        }
        .featured-side {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        .featured-side-item {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            display: flex;
            transition: all 0.4s ease;
        }
        .featured-side-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        .featured-side-img {
            width: 120px;
            height: 120px;
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
        }
        .featured-side-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }
        .featured-side-item:hover .featured-side-img img {
            transform: scale(1.1);
        }
        .featured-side-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .featured-side-content h3 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.3;
            color: var(--dark);
            transition: color 0.3s ease;
        }
        .featured-side-item:hover h3 {
            color: var(--primary);
        }
        .featured-side-content p {
            color: var(--text-light);
            font-size: 0.9rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        /* Categories Section */
        .categories-section {
            padding: 100px 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }
        .category-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: var(--card-shadow);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }
        .category-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            color: white;
        }
        .category-card:hover::before {
            opacity: 1;
        }
        .category-card i {
            font-size: 3.5rem;
            margin-bottom: 20px;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            transition: all 0.3s ease;
        }
        .category-card:hover i {
            color: white;
            background: none;
            transform: scale(1.1);
        }
        .category-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark);
            transition: color 0.3s ease;
        }
        .category-card:hover h3 {
            color: white;
        }
        .category-card p {
            color: var(--text-light);
            transition: color 0.3s ease;
        }
        .category-card:hover p {
            color: rgba(255, 255, 255, 0.9);
        }
        /* Newsletter Section */
        .newsletter-section {
            padding: 100px 5%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            position: relative;
            overflow: hidden;
        }
        .newsletter-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 2;
        }
        .newsletter-container h2 {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 20px;
            color: white;
            font-family: 'Playfair Display', serif;
        }
        .newsletter-container p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: rgba(255, 255, 255, 0.9);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .newsletter-form {
            display: flex;
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        .newsletter-form input {
            flex: 1;
            padding: 20px 25px;
            border: none;
            font-size: 1rem;
            outline: none;
            color: var(--text);
        }
        .newsletter-form button {
            background: var(--accent);
            color: white;
            border: none;
            padding: 0 30px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .newsletter-form button:hover {
            background: #d9005b;
        }
        .newsletter-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            z-index: 1;
        }
        .shape-3 {
            width: 400px;
            height: 400px;
            top: -200px;
            right: -100px;
        }
        .shape-4 {
            width: 300px;
            height: 300px;
            bottom: -150px;
            left: -100px;
        }
        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 80px 5% 30px;
        }
        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }
        .footer-col h3 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 15px;
            font-family: 'Playfair Display', serif;
        }
        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }
        .footer-col p {
            color: #bbb;
            margin-bottom: 20px;
            line-height: 1.8;
        }
        .footer-col ul {
            list-style: none;
        }
        .footer-col ul li {
            margin-bottom: 12px;
        }
        .footer-col ul li a {
            color: #bbb;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }
        .footer-col ul li a:hover {
            color: var(--secondary);
            transform: translateX(5px);
        }
        .footer-col ul li a i {
            margin-right: 10px;
            font-size: 0.9rem;
        }
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: all 0.3s ease;
        }
        .social-links a:hover {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            transform: translateY(-5px);
        }
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bbb;
            font-size: 0.9rem;
        }
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 102, 255, 0.4);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
        }
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 102, 255, 0.5);
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
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
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
            from { background-color: #a8edea; }
            to { background-color: #fed6e3; }
        }
        
        /* Animations */
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-container {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .hero-content {
                max-width: 100%;
                margin-bottom: 40px;
            }
            .hero-content h1 {
                font-size: 2.8rem;
            }
            .hero-buttons {
                justify-content: center;
            }
            .featured-news {
                grid-template-columns: 1fr;
            }
            .news-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }
        @media (max-width: 768px) {
            .header-container {
                padding: 0 3%;
            }
            nav ul {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                transform: translateY(-150%);
                transition: transform 0.3s ease;
                z-index: 100;
            }
            nav ul.active {
                transform: translateY(0);
            }
            nav ul li {
                margin: 10px 0;
                width: 100%;
                text-align: center;
            }
            .dropdown-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                background: rgba(0, 102, 255, 0.05);
                margin-top: 10px;
                border-radius: 10px;
                display: none;
            }
            .dropdown.active .dropdown-menu {
                display: block;
            }
            .menu-toggle {
                display: block;
            }
            .hero {
                padding-top: 80px;
            }
            .hero-content h1 {
                font-size: 2.2rem;
            }
            .section-header h2 {
                font-size: 2.2rem;
            }
            .newsletter-form {
                flex-direction: column;
                border-radius: 20px;
            }
            .newsletter-form input,
            .newsletter-form button {
                width: 100%;
                border-radius: 0;
            }
            .newsletter-form input {
                border-radius: 20px 20px 0 0;
            }
            .newsletter-form button {
                border-radius: 0 0 20px 20px;
                padding: 15px;
            }
            .footer-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }
        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 1.8rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .section-header h2 {
                font-size: 1.8rem;
            }
            .news-grid {
                grid-template-columns: 1fr;
            }
            .categories-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    
    <!-- Speech Indicator -->
    <div id="speechIndicator" class="speech-indicator">🔊 Membaca...</div>
    
    <!-- Header -->
    <header>
        <div class="header-container">
            <a href="#" class="logo" data-speak="RSUD Daha Husada">
                <i class="fas fa-hospital"></i>
                <span>RSUD Daha Husada</span>
            </a>
            <nav>
                <ul>
                    <li><a class="nav-link" href="{{ url('/') }}" data-speak="Beranda">Beranda</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-speak="Berita">
                            Berita <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="resources/views/berita.blade.php" data-speak="Berita Utama">
                                <i class="fas fa-bullhorn"></i> Berita Utama
                            </a>
                            <a href="#" data-speak="Artikel Kesehatan">
                                <i class="fas fa-newspaper"></i> Artikel Kesehatan
                            </a>
                            <a href="#" data-speak="Penelitian Medis">
                                <i class="fas fa-microscope"></i> Penelitian Medis
                            </a>
                            <a href="#" data-speak="Tips Kesehatan">
                                <i class="fas fa-heartbeat"></i> Tips Kesehatan
                            </a>
                        </div>
                    </li>
                    <li><a href="#" data-speak="Layanan">Layanan</a></li>
                    <li><a href="#" data-speak="Dokter">Dokter</a></li>
                    <li><a href="#" data-speak="Kontak">Kontak</a></li>
                </ul>
            </nav>
            <div class="menu-toggle" data-speak="Menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <div class="hero-shape shape-1"></div>
            <div class="hero-shape shape-2"></div>
            <div class="hero-shape shape-3"></div>
            <div class="hero-shape shape-4"></div>
            <div class="hero-dots"></div>
            <div class="hero-waves"></div>
        </div>
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="badge-pulse"></span>
                    <span>Portal Berita #1 di Indonesia</span>
                </div>
                <h1>Portal Berita Kesehatan <span class="highlight">Terpercaya</span></h1>
                <p>Dapatkan informasi kesehatan terkini, tips sehat, dan berita medis terpercaya dari para ahli kami di
                    RSUD Daha Husada. Temukan solusi kesehatan yang Anda butuhkan.</p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number" data-target="5000">0</span>
                        <span class="stat-label">Artikel</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="150">0</span>
                        <span class="stat-label">Ahli Medis</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="50000">0</span>
                        <span class="stat-label">Pembaca Aktif</span>
                    </div>
                </div>
                <div class="hero-buttons">
                    <a href="#" class="btn btn-primary" data-speak="Jelajahi Berita">
                        <span>Jelajahi Berita</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#" class="btn btn-secondary" data-speak="Layanan Kami">
                        <span>Layanan Kami</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="hero-trust">
                    <div class="trust-label">Dipercaya oleh:</div>
                    <div class="trust-logos">
                        <div class="logo-item">Logo 1</div>
                        <div class="logo-item">Logo 2</div>
                        <div class="logo-item">Logo 3</div>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-card">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                        alt="Tim Medis Rumah Sakit">
                    <div class="image-overlay">
                        <div class="play-button" data-speak="Putar Video">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div class="arrows">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </section>
    
    <!-- News Section -->
    <section class="news-section">
        <div class="section-header">
            <h2>Berita Kesehatan Terkini</h2>
            <p>Tetap update dengan informasi kesehatan terbaru dan tips dari para ahli kami</p>
        </div>
        <div class="news-filter">
            <button class="filter-btn active" data-speak="Semua Kategori">Semua</button>
            <button class="filter-btn" data-speak="Penelitian">Penelitian</button>
            <button class="filter-btn" data-speak="Pencegahan">Pencegahan</button>
            <button class="filter-btn" data-speak="Gizi">Gizi</button>
            <button class="filter-btn" data-speak="Teknologi">Teknologi</button>
        </div>
        <div class="news-grid">
            <div class="news-card">
                <div class="news-card-img">
                    <img src="https://images.unsplash.com/photo-1616281177739-2a8192c2421d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                        alt="Berita Kesehatan">
                    <span class="news-category" data-speak="Kategori Pencegahan">Pencegahan</span>
                </div>
                <div class="news-card-content">
                    <div class="news-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>15 Mei 2023</span>
                    </div>
                    <h3 data-speak="Tips Menjaga Kesehatan Jantung di Tengah Kesibukan">Tips Menjaga Kesehatan Jantung di Tengah Kesibukan</h3>
                    <p>Dalam kehidupan modern yang penuh dengan kesibukan, menjaga kesehatan jantung menjadi semakin
                        penting. Berikut adalah beberapa tips sederhana namun efektif untuk menjaga kesehatan jantung
                        Anda...</p>
                    <a href="#" class="read-more" data-speak="Baca Selengkapnya">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="news-card">
                <div class="news-card-img">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                        alt="Berita Kesehatan">
                    <span class="news-category" data-speak="Kategori Penelitian">Penelitian</span>
                </div>
                <div class="news-card-content">
                    <div class="news-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>10 Mei 2023</span>
                    </div>
                    <h3 data-speak="Terobosan Baru dalam Pengobatan Kanker">Terobosan Baru dalam Pengobatan Kanker</h3>
                    <p>Tim peneliti kami berhasil menemukan metode baru dalam pengobatan kanker yang lebih efektif
                        dengan efek samping yang minimal. Penemuan ini diharapkan dapat membantu banyak pasien kanker di
                        seluruh dunia...</p>
                    <a href="#" class="read-more" data-speak="Baca Selengkapnya">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="news-card">
                <div class="news-card-img">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                        alt="Berita Kesehatan">
                    <span class="news-category" data-speak="Kategori Gizi">Gizi</span>
                </div>
                <div class="news-card-content">
                    <div class="news-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>5 Mei 2023</span>
                    </div>
                    <h3 data-speak="Panduan Gizi Seimbang untuk Anak-anak">Panduan Gizi Seimbang untuk Anak-anak</h3>
                    <p>Nutrisi yang tepat sangat penting untuk tumbuh kembang anak. Ahli gizi kami membagikan panduan
                        lengkap tentang cara menyusun menu gizi seimbang untuk anak-anak sesuai dengan usia mereka...
                    </p>
                    <a href="#" class="read-more" data-speak="Baca Selengkapnya">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Featured News Section -->
    <section class="featured-section">
        <div class="featured-container">
            <div class="section-header">
                <h2>Berita Unggulan</h2>
                <p>Jangan lewatkan berita-berita penting dan trending seputar dunia kesehatan</p>
            </div>
            <div class="featured-news">
                <div class="featured-main">
                    <div class="featured-main-img">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            alt="Berita Utama">
                        <span class="featured-badge" data-speak="Berita Terkini">HOT NEWS</span>
                    </div>
                    <div class="featured-main-content">
                        <h2 data-speak="Inovasi Teknologi Medis: Robot Bedah Canggih di RSUD Daha Husada">Inovasi Teknologi Medis: Robot Bedah Canggih di RSUD Daha Husada</h2>
                        <p>RSUD Daha Husada kembali memperkenalkan inovasi terbaru dalam dunia medis dengan
                            menghadirkan sistem robot bedah canggih yang memungkinkan operasi dengan presisi tinggi dan
                            minim invasif. Teknologi ini diharapkan dapat meningkatkan tingkat keberhasilan operasi dan
                            mempercepat pemulihan pasien.</p>
                        <a href="#" class="read-more" data-speak="Baca Selengkapnya">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="featured-side">
                    <div class="featured-side-item">
                        <div class="featured-side-img">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                alt="Berita Side">
                        </div>
                        <div class="featured-side-content">
                            <h3 data-speak="Vaksinasi Anak: Jadwal dan Pentingnya Imunisasi Lengkap">Vaksinasi Anak: Jadwal dan Pentingnya Imunisasi Lengkap</h3>
                            <p>Imunisasi adalah salah satu upaya pencegahan penyakit yang paling efektif bagi
                                anak-anak...</p>
                        </div>
                    </div>
                    <div class="featured-side-item">
                        <div class="featured-side-img">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                alt="Berita Side">
                        </div>
                        <div class="featured-side-content">
                            <h3 data-speak="Mengatasi Stres: Teknik Relaksasi untuk Kesehatan Mental">Mengatasi Stres: Teknik Relaksasi untuk Kesehatan Mental</h3>
                            <p>Dalam kehidupan yang penuh tekanan, mengelola stres menjadi kunci untuk menjaga kesehatan
                                mental...</p>
                        </div>
                    </div>
                    <div class="featured-side-item">
                        <div class="featured-side-img">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                alt="Berita Side">
                        </div>
                        <div class="featured-side-content">
                            <h3 data-speak="Diet Sehat: Menu Seminggu untuk Menurunkan Berat Badan">Diet Sehat: Menu Seminggu untuk Menurunkan Berat Badan</h3>
                            <p>Menurunkan berat badan secara sehat memerlukan pendekatan yang tepat dalam pola makan...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Categories Section -->
    <section class="categories-section">
        <div class="section-header">
            <h2>Kategori Berita Kesehatan</h2>
            <p>Jelajahi berbagai topik kesehatan sesuai dengan kebutuhan Anda</p>
        </div>
        <div class="categories-grid">
            <div class="category-card" data-speak="Kategori Kesehatan Jantung">
                <i class="fas fa-heartbeat"></i>
                <h3>Kesehatan Jantung</h3>
                <p>Informasi seputar kesehatan jantung dan pembuluh darah</p>
            </div>
            <div class="category-card" data-speak="Kategori Kesehatan Mental">
                <i class="fas fa-brain"></i>
                <h3>Kesehatan Mental</h3>
                <p>Tips dan informasi untuk menjaga kesehatan mental</p>
            </div>
            <div class="category-card" data-speak="Kategori Kesehatan Anak">
                <i class="fas fa-baby"></i>
                <h3>Kesehatan Anak</h3>
                <p>Panduan kesehatan untuk tumbuh kembang anak</p>
            </div>
            <div class="category-card" data-speak="Kategori Gizi dan Diet">
                <i class="fas fa-apple-alt"></i>
                <h3>Gizi & Diet</h3>
                <p>Informasi seputar gizi dan pola makan sehat</p>
            </div>
            <div class="category-card" data-speak="Kategori Olahraga dan Fitnes">
                <i class="fas fa-dumbbell"></i>
                <h3>Olahraga & Fitnes</h3>
                <p>Panduan olahraga untuk kesehatan tubuh yang optimal</p>
            </div>
            <div class="category-card" data-speak="Kategori Penyakit Menular">
                <i class="fas fa-virus"></i>
                <h3>Penyakit Menular</h3>
                <p>Informasi tentang pencegahan dan pengobatan penyakit menular</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h3>RSUD Daha Husada</h3>
                <p>Memberikan pelayanan kesehatan terbaik dengan teknologi modern dan tenaga medis profesional untuk
                    kesehatan masyarakat Indonesia.</p>
                <div class="social-links">
                    <a href="#" data-speak="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" data-speak="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" data-speak="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" data-speak="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h3>Link Cepat</h3>
                <ul>
                    <li><a href="#" data-speak="Tentang Kami"><i class="fas fa-angle-right"></i> Tentang Kami</a></li>
                    <li><a href="#" data-speak="Layanan"><i class="fas fa-angle-right"></i> Layanan</a></li>
                    <li><a href="#" data-speak="Dokter"><i class="fas fa-angle-right"></i> Dokter</a></li>
                    <li><a href="#" data-speak="Fasilitas"><i class="fas fa-angle-right"></i> Fasilitas</a></li>
                    <li><a href="#" data-speak="Karir"><i class="fas fa-angle-right"></i> Karir</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Layanan</h3>
                <ul>
                    <li><a href="#" data-speak="Rawat Jalan"><i class="fas fa-angle-right"></i> Rawat Jalan</a></li>
                    <li><a href="#" data-speak="Rawat Inap"><i class="fas fa-angle-right"></i> Rawat Inap</a></li>
                    <li><a href="#" data-speak="Gawat Darurat"><i class="fas fa-angle-right"></i> Gawat Darurat</a></li>
                    <li><a href="#" data-speak="Medical Check-up"><i class="fas fa-angle-right"></i> Medical Check-up</a></li>
                    <li><a href="#" data-speak="Konsultasi Online"><i class="fas fa-angle-right"></i> Konsultasi Online</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Kontak Kami</h3>
                <ul>
                    <li><a href="#" data-speak="Alamat Jl. Kesehatan No. 123, Jakarta"><i class="fas fa-map-marker-alt"></i> Jl. Kesehatan No. 123, Jakarta</a></li>
                    <li><a href="#" data-speak="Telepon (021) 1234-5678"><i class="fas fa-phone"></i> (021) 1234-5678</a></li>
                    <li><a href="#" data-speak="Email info@rumahsakitsehat.com"><i class="fas fa-envelope"></i> info@rumahsakitsehat.com</a></li>
                    <li><a href="#" data-speak="Buka 24 Jam Setiap Hari"><i class="fas fa-clock"></i> 24 Jam Setiap Hari</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2023 RSUD Daha Husada. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
    
    <!-- Back to Top Button -->
    <div class="back-to-top" data-speak="Kembali ke Atas">
        <i class="fas fa-arrow-up"></i>
    </div>
    
    <script>
        // Preloader
        window.addEventListener('load', function () {
            setTimeout(function () {
                document.querySelector('.preloader').classList.add('hidden');
            }, 500);
        });
        
        // Mobile Menu Toggle
        document.querySelector('.menu-toggle').addEventListener('click', function () {
            document.querySelector('nav ul').classList.toggle('active');
        });
        
        // Dropdown Toggle
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                // Close other dropdowns
                document.querySelectorAll('.dropdown').forEach(dropdown => {
                    if (dropdown !== this.parentElement) {
                        dropdown.classList.remove('active');
                    }
                });
                // Toggle current dropdown
                this.parentElement.classList.toggle('active');
            });
        });
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown').forEach(dropdown => {
                    dropdown.classList.remove('active');
                });
            }
        });
        
        // Header Scroll Effect
        window.addEventListener('scroll', function () {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.padding = '10px 0';
                header.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.padding = '15px 0';
                header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            }
            // Back to Top Button
            const backToTop = document.querySelector('.back-to-top');
            if (window.scrollY > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });
        
        // Back to Top
        document.querySelector('.back-to-top').addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Newsletter Form
        document.querySelector('.newsletter-form').addEventListener('submit', function (e) {
            e.preventDefault();
            const email = this.querySelector('input').value;
            if (email) {
                // Create success message
                const successMsg = document.createElement('div');
                successMsg.style.position = 'fixed';
                successMsg.style.top = '50%';
                successMsg.style.left = '50%';
                successMsg.style.transform = 'translate(-50%, -50%)';
                successMsg.style.background = 'white';
                successMsg.style.padding = '30px';
                successMsg.style.borderRadius = '10px';
                successMsg.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.2)';
                successMsg.style.zIndex = '9999';
                successMsg.style.textAlign = 'center';
                successMsg.innerHTML = `
                    <i class="fas fa-check-circle" style="font-size: 3rem; color: #4caf50; margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 10px;">Berhasil!</h3>
                    <p>Terima kasih telah berlangganan newsletter kami.</p>
                `;
                document.body.appendChild(successMsg);
                // Clear input
                this.querySelector('input').value = '';
                // Remove message after 3 seconds
                setTimeout(function () {
                    successMsg.remove();
                }, 3000);
            }
        });
        
        // Filter Buttons
        const filterBtns = document.querySelectorAll('.filter-btn');
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                // In a real application, you would filter the news here
                // For demo purposes, we'll just show a message
                console.log('Filter clicked:', this.textContent);
            });
        });
        
        // Animation on Scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.8s ease forwards';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        document.querySelectorAll('.news-card, .category-card').forEach(card => {
            observer.observe(card);
        });
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
            let hoverTimeout = null;
            
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
                        'home': 'Beranda',
                        'menu': 'Menu',
                        'search': 'Cari',
                        'user': 'Pengguna',
                        'cart': 'Keranjang',
                        'settings': 'Pengaturan',
                        'close': 'Tutup',
                        'back': 'Kembali',
                        'next': 'Selanjutnya',
                        'prev': 'Sebelumnya',
                        'play': 'Main',
                        'pause': 'Jeda',
                        'stop': 'Berhenti',
                        'save': 'Simpan',
                        'edit': 'Edit',
                        'delete': 'Hapus',
                        'add': 'Tambah',
                        'submit': 'Kirim',
                        'cancel': 'Batal',
                        'login': 'Masuk',
                        'logout': 'Keluar',
                        'signup': 'Daftar',
                        'filter-btn': 'Filter',
                        'nav-link': 'Navigasi',
                        'navbar-brand': 'RSUD Daha Husada',
                        'news-card': 'Kartu Berita',
                        'news-category': 'Kategori Berita',
                        'news-date': 'Tanggal Berita',
                        'read-more': 'Baca Selengkapnya',
                        'featured-main': 'Berita Utama',
                        'featured-side': 'Berita Samping',
                        'category-card': 'Kartu Kategori',
                        'social-links': 'Tautan Media Sosial',
                        'back-to-top': 'Kembali ke Atas',
                        'menu-toggle': 'Menu Toggle',
                        'dropdown-toggle': 'Dropdown Toggle',
                        'dropdown-menu': 'Menu Dropdown',
                        'hero-badge': 'Badge Hero',
                        'hero-buttons': 'Tombol Hero',
                        'hero-stats': 'Statistik Hero',
                        'play-button': 'Tombol Putar',
                        'floating-card': 'Kartu Melayang',
                        'card-icon': 'Ikon Kartu',
                        'card-text': 'Teks Kartu',
                        'stat-item': 'Item Statistik',
                        'stat-number': 'Nomor Statistik',
                        'stat-label': 'Label Statistik',
                        'trust-logos': 'Logo Kepercayaan',
                        'newsletter-form': 'Formulir Newsletter',
                        'logo-item': 'Item Logo',
                        'footer-col': 'Kolom Footer',
                        'footer-links': 'Tautan Footer',
                        'copyright': 'Hak Cipta',
                        'preloader': 'Preloader',
                        'loader': 'Loader',
                        'scroll-indicator': 'Indikator Gulir',
                        'mouse': 'Mouse',
                        'wheel': 'Roda',
                        'arrows': 'Panah',
                        'news-filter': 'Filter Berita',
                        'section-header': 'Header Bagian',
                        'featured-news': 'Berita Unggulan',
                        'featured-main': 'Berita Utama',
                        'featured-side': 'Berita Samping',
                        'featured-main-img': 'Gambar Berita Utama',
                        'featured-side-img': 'Gambar Berita Samping',
                        'featured-main-content': 'Konten Berita Utama',
                        'featured-side-content': 'Konten Berita Samping',
                        'featured-badge': 'Badge Berita',
                        'categories-grid': 'Grid Kategori',
                        'newsletter-section': 'Bagian Newsletter',
                        'newsletter-container': 'Kontainer Newsletter',
                        'newsletter-shape': 'Bentuk Newsletter',
                        'testimonial': 'Testimoni',
                        'testimonial-author': 'Penulis Testimoni',
                        'testimonial-img': 'Gambar Testimoni',
                        'testimonial-content': 'Konten Testimoni',
                        'author-info': 'Info Penulis',
                        'testimonial-author img': 'Gambar Penulis Testimoni',
                        'author-info h4': 'Nama Penulis Testimoni',
                        'author-info p': 'Peran Penulis Testimoni'
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
                element.addEventListener('mouseenter', function() {
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
                element.addEventListener('mouseleave', function() {
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
                    '.button',
                    '[onclick]',
                    '[data-bs-toggle]',
                    '[data-bs-target]',
                    'nav a',
                    '.nav-item',
                    '.menu-item',
                    '.tab',
                    '.accordion-header',
                    '.dropdown-toggle',
                    '.filter-btn',
                    '.read-more',
                    '.category-card',
                    '.news-card',
                    '.featured-side-item',
                    '.featured-main',
                    '.social-links a',
                    '.footer-links a',
                    '.logo',
                    '.menu-toggle',
                    '.back-to-top',
                    '.play-button',
                    '.floating-card',
                    '.card-icon',
                    '.card-text',
                    '.stat-item',
                    '.logo-item',
                    '.newsletter-form button',
                    '.hero-buttons .btn'
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
            const observer = new MutationObserver(function(mutations) {
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
            document.addEventListener('mouseup', function() {
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
                currentUtterance.onstart = function() {
                    if (speechIndicator) {
                        speechIndicator.classList.add('active');
                        speechIndicator.textContent = '🔊 Membaca teks...';
                    }
                };
                
                // Event saat selesai
                currentUtterance.onend = function() {
                    isProcessing = false;
                    if (speechIndicator) {
                        speechIndicator.classList.remove('active');
                        speechIndicator.textContent = '🔊 Membaca...';
                    }
                    removeHighlight();
                };
                
                // Event jika error
                currentUtterance.onerror = function() {
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
            document.addEventListener('click', function(e) {
                if (synth.speaking && !e.target.closest('p, h1, h2, h3, h4, h5, h6, span, div')) {
                    synth.cancel();
                    isProcessing = false;
                }
            });
        });
    </script>
</body>
</html>