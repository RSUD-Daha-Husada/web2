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