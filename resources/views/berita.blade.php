<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSUD Daha Husada - Portal Berita Kesehatan Terkini</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('berita.css') }}">
<body>

<!-- Header -->
<x-berita.header />

<!-- Hero Section -->
<x-berita.hero />

<!-- News Section -->
<x-berita.new_berita />

<!-- Categories Section -->
<x-berita.kategori />

<!-- Footer -->
<x-index.footer />

<!-- Back to Top Button -->
<div class="back-to-top" data-speak="Kembali ke Atas">
    <i class="fas fa-arrow-up"></i>
</div>

<script>
    // Cek dan inisialisasi localStorage
    function initializeNewsStorage() {
        if (!localStorage.getItem('newsList')) {
            // Jika belum ada, buat array kosong
            localStorage.setItem('newsList', JSON.stringify([]));
            console.log('LocalStorage untuk berita diinisialisasi');
        }
    }

    // Fungsi untuk menampilkan berita di grid dashboard
    function loadBeritaGrid() {
        console.log('Memuat berita grid...');

        // Pastikan localStorage terinisialisasi
        initializeNewsStorage();

        const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
        const container = document.getElementById('beritaGrid');

        console.log('Total berita di localStorage:', newsList.length);
        console.log('Data berita:', newsList);

        // Jika tidak ada berita sama sekali, tampilkan pesan
        if (newsList.length === 0) {
            container.innerHTML = `
            <div class="col-12 text-center py-5">
                <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                <h5>Belum Ada Berita</h5>
                <p class="text-muted">Belum ada berita yang tersedia</p>
                <button class="btn btn-primary mt-3" onclick="createSampleNews()">
                    <i class="fas fa-plus me-2"></i>Buat Berita Contoh
                </button>
            </div>
        `;
            return;
        }

        // Filter berita yang statusnya "publish"
        const publishedNews = newsList.filter(news => {
            console.log('Berita:', news.title, 'Status:', news.status);
            // Jika tidak ada field status, anggap sebagai publish
            return !news.status || news.status === 'publish';
        });

        console.log('Jumlah berita yang dipublish:', publishedNews.length);

        if (publishedNews.length === 0) {
            container.innerHTML = `
            <div class="col-12 text-center py-5">
                <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                <h5>Belum Ada Berita Dipublikasikan</h5>
                <p class="text-muted">Ada ${newsList.length} berita tapi belum ada yang dipublikasikan</p>
                <div class="alert alert-info mt-3">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Untuk Admin:</strong> Silakan edit berita dan ubah statusnya menjadi "Publish".
                </div>
            </div>
        `;
            return;
        }

        // Ambil 3 berita terbaru
        const recentNews = publishedNews.slice(0, 3);
        container.innerHTML = recentNews.map(news => {
            const categoryClass = getCategoryClass(news.category);
            return `
            <div class="berita-card">
                <div class="berita-img">
                    <img src="${news.image || 'https://picsum.photos/seed/news' + news.id + '/600/400.jpg'}" alt="${news.title}">
                    <span class="berita-kategori ${categoryClass}">${formatCategoryName(news.category)}</span>
                </div>
                <div class="berita-content">
                    <div class="berita-tanggal">
                        <i class="far fa-calendar-alt"></i>
                        <span>${formatDate(news.date)}</span>
                    </div>
                    <h3>${news.title}</h3>
                    <p>${news.content ? news.content.substring(0, 150) + (news.content.length > 150 ? '...' : '') : ''}</p>
                    <a href="{{ route('berita') }}" onclick="showNewsDetail(${news.id}); return false;" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        `;
        }).join('');

        console.log('Berita berhasil dimuat');
    }

    // Fungsi untuk mendapatkan kelas CSS berdasarkan kategori
    function getCategoryClass(category) {
        const categoryMap = {
            'pengumuman': 'bg-primary',
            'kesehatan': 'bg-success',
            'event': 'bg-warning',
            'pencegahan': 'bg-info',
            'penelitian': 'bg-danger',
            'gizi': 'bg-secondary',
            'fasilitas': 'bg-info',
            'layanan': 'bg-primary',
            'prestasi': 'bg-success'
        };
        return categoryMap[category] || 'bg-secondary';
    }

    // Fungsi untuk memformat nama kategori
    function formatCategoryName(category) {
        const categoryNames = {
            'pengumuman': 'Pengumuman',
            'kesehatan': 'Kesehatan',
            'event': 'Event',
            'pencegahan': 'Pencegahan',
            'penelitian': 'Penelitian',
            'gizi': 'Gizi',
            'fasilitas': 'Fasilitas',
            'layanan': 'Layanan',
            'prestasi': 'Prestasi'
        };
        return categoryNames[category] || category;
    }

    // Fungsi untuk menampilkan detail berita
    function showNewsDetail(newsId) {
        console.log('Menampilkan detail berita ID:', newsId);
        sessionStorage.setItem('selectedNewsId', newsId);
        window.location.href = "{{ route('berita') }}";
    }

    // Format tanggal
    function formatDate(dateString) {
        if (!dateString) return 'Tanggal tidak tersedia';
        const options = { day: 'numeric', month: 'short', year: 'numeric' };
        return new Date(dateString).toLocaleDateString('id-ID', options);
    }

    // Fungsi untuk membuat berita contoh
    function createSampleNews() {
        console.log('Membuat berita contoh...');

        const sampleNews = {
            id: Date.now(),
            title: "RSUD Daha Husada Meluncurkan Layanan Telemedicine",
            category: "layanan",
            content: "RSUD Daha Husada dengan bangga mengumumkan peluncuran layanan telemedicine terbaru. Layanan ini memungkinkan pasien untuk berkonsultasi dengan dokter secara online tanpa harus datang ke rumah sakit. Ini adalah langkah inovatif untuk meningkatkan akses layanan kesehatan bagi masyarakat.",
            date: new Date().toISOString().split('T')[0],
            image: "https://images.unsplash.com/photo-1616281177739-2a8192c2421d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
            author: "Admin RSUD",
            status: "publish",
            createdAt: new Date().toISOString()
        };

        let newsList = JSON.parse(localStorage.getItem('newsList')) || [];
        newsList.unshift(sampleNews);
        localStorage.setItem('newsList', JSON.stringify(newsList));

        console.log('Berita contoh berhasil dibuat');
        alert('Berita contoh berhasil dibuat! Halaman akan di-refresh.');
        location.reload();
    }

    // Event listener
    document.addEventListener('DOMContentLoaded', function () {
        console.log('DOM dimuat, mempersiapkan berita...');

        // Load data saat halaman dimuat
        if (document.getElementById('beritaGrid')) {
            loadBeritaGrid();
        }

        // Cek apakah ada ID berita yang tersimpan (untuk halaman detail)
        const selectedNewsId = sessionStorage.getItem('selectedNewsId');
        if (selectedNewsId && document.getElementById('newsDetailContainer')) {
            console.log('Menampilkan detail berita untuk ID:', selectedNewsId);
            const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
            const news = newsList.find(item => item.id == selectedNewsId);

            if (news) {
                // Tampilkan detail berita
                const categoryClass = getCategoryClass(news.category);
                document.getElementById('newsDetailContainer').innerHTML = `
                <div class="card">
                    <div class="card-header">
                        <h2>${news.title}</h2>
                        <div class="d-flex align-items-center mt-2">
                            <span class="badge ${categoryClass} me-2">${formatCategoryName(news.category)}</span>
                            <small class="text-muted">
                                <i class="far fa-calendar me-1"></i> ${formatDate(news.date)}
                                ${news.author ? `<i class="fas fa-user ms-2 me-1"></i>${news.author}` : ''}
                            </small>
                        </div>
                    </div>
                    <div class="card-body">
                        ${news.image ? `<img src="${news.image}" class="img-fluid rounded mb-4" alt="${news.title}">` : ''}
                        <div class="news-content">
                            ${news.content ? news.content.replace(/\n/g, '<br>') : ''}
                        </div>
                    </div>
                    <div class="card-footer">
                        <button onclick="history.back()" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </button>
                    </div>
                </div>
            `;
            } else {
                document.getElementById('newsDetailContainer').innerHTML = `
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Berita tidak ditemukan
                </div>
            `;
            }

            sessionStorage.removeItem('selectedNewsId');
        }

        // Jika halaman semua berita dimuat, tampilkan semua berita
        if (document.getElementById('allNewsContainer')) {
            loadAllNews();
        }
    });

    // Fungsi untuk menampilkan semua berita di halaman berita
    function loadAllNews() {
        console.log('Memuat semua berita...');
        const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
        const container = document.getElementById('allNewsContainer');

        // Filter berita yang statusnya "publish" atau tidak ada status
        const publishedNews = newsList.filter(news => {
            return !news.status || news.status === 'publish';
        });

        if (publishedNews.length === 0) {
            container.innerHTML = `
            <div class="text-center py-5">
                <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                <h5>Belum Ada Berita</h5>
                <p class="text-muted">Belum ada berita yang dipublikasikan</p>
                <button class="btn btn-primary" onclick="createSampleNews()">
                    <i class="fas fa-plus me-2"></i>Buat Berita Contoh
                </button>
            </div>
        `;
            return;
        }

        container.innerHTML = publishedNews.map(news => {
            const categoryClass = getCategoryClass(news.category);
            return `
            <div class="card mb-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="${news.image || 'https://picsum.photos/seed/news' + news.id + '/600/400.jpg'}" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="${news.title}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title">${news.title}</h5>
                                <span class="badge ${categoryClass}">${formatCategoryName(news.category)}</span>
                            </div>
                            <p class="text-muted small mb-3">
                                <i class="far fa-calendar me-1"></i> ${formatDate(news.date)}
                                ${news.author ? `<i class="fas fa-user ms-2 me-1"></i>${news.author}` : ''}
                            </p>
                            <p class="card-text">${news.content ? news.content.substring(0, 200) + (news.content.length > 200 ? '...' : '') : ''}</p>
                            <a href="#" onclick="showNewsDetail(${news.id}); return false;" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        `;
        }).join('');
    }

    // Fungsi untuk memeriksa dan memperbaiki data berita
    function checkAndFixNewsData() {
        const newsList = JSON.parse(localStorage.getItem('newsList')) || [];

        // Periksa setiap berita
        newsList.forEach(news => {
            // Pastikan ada field status
            if (!news.status) {
                news.status = 'publish';
                console.log('Memperbaiki berita:', news.title, 'menambah status: publish');
            }

            // Pastikan ada field image
            if (!news.image) {
                news.image = 'https://picsum.photos/seed/news' + news.id + '/600/400.jpg';
                console.log('Memperbaiki berita:', news.title, 'menambah gambar default');
            }
        });

        // Simpan kembali
        localStorage.setItem('newsList', JSON.stringify(newsList));
        console.log('Data berita telah diperbaiki');
    }

    // Jalankan pemeriksaan saat halaman dimuat
    checkAndFixNewsData();
</script>
    
    <script>
        // Initialize the speech functionality
        document.addEventListener('DOMContentLoaded', function() {
            const synth = window.speechSynthesis;
            let currentUtterance = null;
            let isProcessing = false;
            
            // Add hover sound effect for interactive elements
            const addHoverSound = () => {
                const elements = document.querySelectorAll('[data-speak]');
                elements.forEach(element => {
                    element.addEventListener('mouseenter', function() {
                        if (!isProcessing && synth) {
                            const text = this.getAttribute('data-speak');
                            speakText(text);
                        }
                    });
                });
            };
            
            // Speak text function
            const speakText = (text) => {
                if (!synth || isProcessing) return;
                
                isProcessing = true;
                currentUtterance = new SpeechSynthesisUtterance(text);
                currentUtterance.lang = 'id-ID';
                currentUtterance.rate = 1.0;
                currentUtterance.volume = 1.0;
                currentUtterance.pitch = 1.0;
                
                currentUtterance.onend = function() {
                    isProcessing = false;
                };
                
                currentUtterance.onerror = function() {
                    isProcessing = false;
                };
                
                try {
                    synth.speak(currentUtterance);
                } catch (e) {
                    console.error('Error speaking:', e);
                    isProcessing = false;
                }
            };
            
            // Initialize on page load
            addHoverSound();
            
            // Show/hide scroll indicator
            const backToTopButton = document.querySelector('.back-to-top');
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('show');
                } else {
                    backToTopButton.classList.remove('show');
                }
            });
            
            // Back to top button functionality
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            // Initialize news section
            initializeNewsSection();
        });
        
        // News section initialization
        function initializeNewsSection() {
            const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
            const container = document.getElementById('beritaGrid');
            
            if (newsList.length === 0) {
                container.innerHTML = `
                    <div class="col-12 text-center py-5">
                        <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                        <h5>Belum Ada Berita</h5>
                        <p class="text-muted">Belum ada berita yang tersedia</p>
                        <button class="btn btn-primary mt-3" onclick="createSampleNews()">
                            <i class="fas fa-plus me-2"></i>Buat Berita Contoh
                        </button>
                    </div>
                `;
                return;
            }
            
            // Filter and show published news
            const publishedNews = newsList.filter(news => !news.status || news.status === 'publish');
            
            if (publishedNews.length === 0) {
                container.innerHTML = `
                    <div class="col-12 text-center py-5">
                        <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                        <h5>Belum Ada Berita Dipublikasikan</h5>
                        <p class="text-muted">Ada ${newsList.length} berita tapi belum ada yang dipublikasikan</p>
                        <div class="alert alert-info mt-3">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Untuk Admin:</strong> Silakan edit berita dan ubah statusnya menjadi "Publish".
                        </div>
                    </div>
                `;
                return;
            }
            
            // Show recent news (first 3 items)
            const recentNews = publishedNews.slice(0, 3);
            container.innerHTML = recentNews.map(news => `
                <div class="berita-card">
                    <div class="berita-img">
                        <img src="${news.image || `https://picsum.photos/seed/news${news.id}/600/400.jpg`}" alt="${news.title}">
                        <span class="berita-kategori bg-${getCategoryClass(news.category)}">${formatCategoryName(news.category)}</span>
                    </div>
                    <div class="berita-content">
                        <div class="berita-tanggal">
                            <i class="far fa-calendar-alt"></i>
                            <span>${formatDate(news.date)}</span>
                        </div>
                        <h3 class="berita-h3">${news.title}</h3>
                        <p class="berita-p">${news.content ? news.content.substring(0, 150) + (news.content.length > 150 ? '...' : '') : ''}</p>
                        <a href="#" onclick="showNewsDetail(${news.id}); return false;" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            `).join('');
        }
        
        // Helper functions
        function getCategoryClass(category) {
            const categoryMap = {
                'pengumuman': 'primary',
                'kesehatan': 'success',
                'event': 'info',
                'pencegahan': 'warning',
                'penelitian': 'danger',
                'gizi': 'secondary',
                'fasilitas': 'info',
                'layanan': 'primary',
                'prestasi': 'success'
            };
            return categoryMap[category] || 'secondary';
        }
        
        function formatCategoryName(category) {
            const categoryNames = {
                'pengumuman': 'Pengumuman',
                'kesehatan': 'Kesehatan',
                'event': 'Event',
                'pencegahan': 'Pencegahan',
                'penelitian': 'Penelitian',
                'gizi': 'Gizi',
                'fasilitas': 'Fasilitas',
                'layanan': 'Layanan',
                'prestasi': 'Prestasi'
            };
            return categoryNames[category] || category;
        }
        
        function formatDate(dateString) {
            if (!dateString) return 'Tanggal tidak tersedia';
            const options = { day: 'numeric', month: 'short', year: 'numeric' };
            return new Date(dateString).toLocaleDateString('id-ID', options);
        }
        
        // Create sample news
        function createSampleNews() {
            const sampleNews = {
                id: Date.now(),
                title: "RSUD Daha Husada Meluncurkan Layanan Telemedicine",
                category: "layanan",
                content: "RSUD Daha Husada dengan bangga mengumumkan peluncuran layanan telemedicine terbaru. Layanan ini memungkinkan pasien untuk berkonsultasi dengan dokter secara online tanpa harus datang ke rumah sakit. Ini adalah langkah inovatif untuk meningkatkan akses layanan kesehatan bagi masyarakat.",
                date: new Date().toISOString().split('T')[0],
                image: "https://images.unsplash.com/photo-1616281177739-2a8192c2421d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                author: "Admin RSUD",
                status: "publish",
                createdAt: new Date().toISOString()
            };
            
            let newsList = JSON.parse(localStorage.getItem('newsList')) || [];
            newsList.unshift(sampleNews);
            localStorage.setItem('newsList', JSON.stringify(newsList));
            
            location.reload();
        }
        
        // Show news detail
        function showNewsDetail(newsId) {
            sessionStorage.setItem('selectedNewsId', newsId);
            window.location.href = "{{ route('berita') }}";
        }
        
        // Check and fix news data
        function checkAndFixNewsData() {
            const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
            
            newsList.forEach(news => {
                if (!news.status) {
                    news.status = 'publish';
                }
                if (!news.image) {
                    news.image = `https://picsum.photos/seed/news${news.id}/600/400.jpg`;
                }
            });
            
            localStorage.setItem('newsList', JSON.stringify(newsList));
        }
        
        // Run data check on page load
        checkAndFixNewsData();
    </script>
</body>
</html>