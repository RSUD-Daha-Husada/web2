<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    document.addEventListener('DOMContentLoaded', function () {
        // Animasi footer widget saat scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        const footerWidgets = document.querySelectorAll('.footer-widget');
        footerWidgets.forEach(widget => {
            observer.observe(widget);
        });

        // Form newsletter
        const newsletterForm = document.querySelector('.footer-newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function (e) {
                e.preventDefault();
                const emailInput = this.querySelector('.footer-newsletter-input');
                const email = emailInput.value;

                if (email) {
                    // Simulasi pengiriman form
                    const button = this.querySelector('.footer-newsletter-btn');
                    const originalText = button.textContent;
                    button.textContent = 'Subscribing...';
                    button.disabled = true;

                    setTimeout(() => {
                        button.textContent = 'Subscribed!';
                        emailInput.value = '';

                        setTimeout(() => {
                            button.textContent = originalText;
                            button.disabled = false;
                        }, 2000);
                    }, 1500);
                }
            });
        }
    });


    // Data dokter
    const doctors = [
        {
            name: "dr. Andi Prasetyo, Sp.PD",
            title: "Spesialis Penyakit Dalam",
            image: "https://randomuser.me/api/portraits/men/11.jpg",
            specialty: "Penyakit Dalam",
            description: "Spesialis dalam diagnosis dan pengobatan penyakit organ dalam seperti diabetes, hipertensi, dan gangguan pencernaan.",
            experience: "15 tahun",
            schedule: "Senin-Jumat: 09.00-14.00"
        },
        {
            name: "dr. Nina Kartika, Sp.JP",
            title: "Spesialis Jantung & Pembuluh Darah",
            image: "https://randomuser.me/api/portraits/women/12.jpg",
            specialty: "Jantung & Pembuluh Darah",
            description: "Ahli dalam pemeriksaan jantung, kateterisasi jantung, dan pengelolaan penyakit jantung koroner.",
            experience: "12 tahun",
            schedule: "Selasa-Kamis: 10.00-15.00"
        },
        {
            name: "dr. Rahman Fadli, Sp.OG",
            title: "Spesialis Kandungan & Kebidanan",
            image: "https://randomuser.me/api/portraits/men/15.jpg",
            specialty: "Kandungan & Kebidanan",
            description: "Spesialis dalam kehamilan, persalinan, dan kesehatan reproduksi wanita.",
            experience: "18 tahun",
            schedule: "Senin, Rabu, Jumat: 08.00-13.00"
        },
    ];

    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 120
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.custom-navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add active state to current page
    document.addEventListener('DOMContentLoaded', function () {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    });

    // Typing effect for hero title
    document.addEventListener('DOMContentLoaded', function () {
        const text = "Rumah Sakit Daha Husada!";
        const typingElement = document.getElementById('typing-effect');
        let index = 0;

        function typeText() {
            if (index < text.length) {
                typingElement.textContent += text.charAt(index);
                index++;
                setTimeout(typeText, 100);
            }
        }

        typeText();
    });

    // Fungsi untuk menampilkan profil dokter
    function showDoctorProfile(index) {
        const doctor = doctors[index];

        document.getElementById('modalDoctorImage').src = doctor.image;
        document.getElementById('modalDoctorImage').alt = doctor.name;
        document.getElementById('modalDoctorName').textContent = doctor.name;
        document.getElementById('modalDoctorTitle').textContent = doctor.title;
        document.getElementById('modalDoctorSpecialty').textContent = doctor.specialty;
        document.getElementById('modalDoctorDescription').textContent = doctor.description;
        document.getElementById('modalDoctorExperience').textContent = doctor.experience;
        document.getElementById('modalDoctorSchedule').textContent = doctor.schedule;

        const modal = new bootstrap.Modal(document.getElementById('doctorProfileModal'));
        modal.show();
    }

    // Animasi untuk floating elements
    document.addEventListener('DOMContentLoaded', function () {
        const floatingIcons = document.querySelectorAll('.floating-icon');

        floatingIcons.forEach((icon, index) => {
            // Set random position
            icon.style.left = `${Math.random() * 100}%`;
            icon.style.top = `${Math.random() * 100}%`;

            // Set random animation duration
            const duration = 15 + Math.random() * 10;
            icon.style.animationDuration = `${duration}s`;

            // Set random delay
            icon.style.animationDelay = `${index * 2}s`;
        });
    });

    // Animasi untuk doctor cards
    document.addEventListener('DOMContentLoaded', function () {
        const doctorCards = document.querySelectorAll('.doctor-card');

        doctorCards.forEach((card, index) => {
            card.addEventListener('mouseenter', function () {
                this.querySelector('.doctor-overlay').style.opacity = '1';
            });

            card.addEventListener('mouseleave', function () {
                this.querySelector('.doctor-overlay').style.opacity = '0';
            });
        });
    });

    // Scroll Animation
    const scrollElements = document.querySelectorAll(".scroll-animate");
    const elementInView = (el, offset = 100) => {
        const elementTop = el.getBoundingClientRect().top;
        return (
            elementTop <= (window.innerHeight || document.documentElement.clientHeight) - offset
        );
    };
    const displayScrollElement = (element) => {
        element.classList.add("active");
    };
    const hideScrollElement = (element) => {
        element.classList.remove("active");
    };
    const handleScrollAnimation = () => {
        scrollElements.forEach((el) => {
            if (elementInView(el, 100)) {
                displayScrollElement(el);
            } else {
                hideScrollElement(el);
            }
        });
    };
    window.addEventListener("scroll", () => {
        handleScrollAnimation();
    });
    // Trigger once on load
    handleScrollAnimation();




    document.addEventListener('DOMContentLoaded', function () {
        const trigger = document.getElementById('soundTrigger');
        let hasSpoken = false;

        function speakWelcome() {
            if (hasSpoken) return;

            const welcomeText = "Selamat Datang di Website Resmi Daerah Umum Rumah Sakit Daha Husada!";
            const utterance = new SpeechSynthesisUtterance(welcomeText);
            utterance.lang = 'id-ID';
            utterance.rate = 0.9;

            utterance.onstart = () => {
                hasSpoken = true;
                console.log("Suara dimulai");
            };

            utterance.onerror = (e) => {
                console.error("Gagal:", e);
            };

            speechSynthesis.speak(utterance);
        }

        // Coba autoplay terlebih dahulu
        setTimeout(() => {
            if (!hasSpoken) {
                speakWelcome();
            }
        }, 500);

        // Jika autoplay gagal, aktifkan saat pengguna berinteraksi
        const events = ['click', 'touchstart', 'scroll', 'keydown'];

        events.forEach(event => {
            document.addEventListener(event, function initSound() {
                if (!hasSpoken) {
                    speakWelcome();

                    // Hapus event listener setelah suara bermain
                    events.forEach(e => {
                        document.removeEventListener(e, initSound);
                    });
                }
            }, { once: true });
        });
    });


    let currentPosition = 0;
    const postWidth = 380; // 350px + 30px margin
    let totalPosts = 5;
    const visiblePosts = 3;
    let maxPosition = -(totalPosts - visiblePosts) * postWidth;

    // Fungsi untuk mengurutkan postingan berdasarkan timestamp (terbaru dulu)
    function sortPostsByDate() {
        const postsWrapper = document.getElementById('postsWrapper');
        const posts = Array.from(postsWrapper.querySelectorAll('.post-container'));

        // Urutkan postingan berdasarkan timestamp (terbaru dulu)
        posts.sort((a, b) => {
            const dateA = new Date(a.getAttribute('data-timestamp'));
            const dateB = new Date(b.getAttribute('data-timestamp'));
            return dateB - dateA; // Urutkan dari terbaru ke terlama
        });

        // Kosongkan wrapper
        postsWrapper.innerHTML = '';

        // Tambahkan kembali postingan yang sudah diurutkan
        posts.forEach(post => {
            postsWrapper.appendChild(post);
        });

        // Reset carousel position setelah pengurutan
        currentPosition = 0;
        updateCarousel();
        updateIndicators();
    }

    // Panggil fungsi pengurutan saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function () {
        sortPostsByDate();
    });

    function moveCarousel(direction) {
        currentPosition -= direction * postWidth; // Perbaikan arah
        // Boundary checks
        if (currentPosition > 0) {
            currentPosition = 0;
        } else if (currentPosition < maxPosition) {
            currentPosition = maxPosition;
        }
        updateCarousel();
        updateIndicators();
    }

    function updateCarousel() {
        const postsWrapper = document.getElementById('postsWrapper');
        postsWrapper.style.transform = `translateX(${currentPosition}px)`;
    }

    function goToSlide(slideIndex) {
        currentPosition = -slideIndex * postWidth;
        // Boundary checks
        if (currentPosition > 0) {
            currentPosition = 0;
        } else if (currentPosition < maxPosition) {
            currentPosition = maxPosition;
        }
        updateCarousel();
        updateIndicators();
    }

    function updateIndicators() {
        const indicators = document.querySelectorAll('.indicator');
        const activeIndex = Math.abs(Math.round(currentPosition / postWidth));
        indicators.forEach((indicator, index) => {
            if (index === activeIndex) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }

    // Fungsi untuk menambahkan postingan baru ke carousel
    function addNewPostToCarousel(post) {
        const postsWrapper = document.getElementById('postsWrapper');
        if (!postsWrapper) return;

        // Buat elemen post-container baru
        const postElement = document.createElement('div');
        postElement.className = 'post-container';
        postElement.setAttribute('data-timestamp', post.date);

        // Isi HTML untuk postingan baru
        postElement.innerHTML = `
    <div class="new-post-indicator">BARU</div>
    <div class="post-header">
        <div class="ig-profile">
            <a href="https://www.instagram.com/rsud.dahahusada" target="_blank">
                <img src="ig.png" alt="RSUD Daha Husada" class="profile-pic">
            </a>
            <div class="user-info">
                <a href="https://www.instagram.com/rsud.dahahusada" target="_blank" class="username">
                    RSUD Daha Husada
                </a>
                <div class="description">
                    <i class="fas fa-hospital description-icon"></i>
                    <span>RSUD Daha Husada Kediri</span>
                </div>
            </div>
        </div>
        <button class="view-profile"
            onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')">
            Lihat Profil
        </button>
    </div>
    <a href="${post.link}" target="_blank" style="display:block;">
        <div class="post-image-container">
            <img src="${post.image}" alt="${post.caption}" class="post-image">
        </div>
    </a>
    <div class="post-actions">
        <div class="flex">
            <i class="far fa-heart"
                onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')"></i>
            <i class="far fa-comment"
                onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')"></i>
            <i class="far fa-paper-plane"
                onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')"></i>
        </div>
        <i class="far fa-bookmark"
            onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')"></i>
    </div>
    <div class="engagement">
        <span>${Math.floor(Math.random() * 100) + 50} suka</span>
    </div>
    <div class="comment-section">
        <div class="comment">
            <span class="comment-username">rsud.dahahusada</span>
            <span class="comment-text collapsed" id="comment-text-${post.id}">
                ${post.caption}
                            <span class="hashtag">#Rumahsakitumumdahahusada</span>
                            <span class="hashtag">#RSUDAHAHUSADA</span>
                            <span class="hashtag">#RSUDH</span>
                            <span class="hashtag">#Rumahsakitdahahusada</span>
                            <span class="hashtag">#RSDAHAHUSADA</span>
                            <span class="hashtag">#RSDH</span>
                            <span class="hashtag">#rumahsakit</span>
                            <span class="hashtag">#kediri</span>
                            <span class="hashtag">#kedirihits</span>
                            <span class="hashtag">#kedirilagi</span>
                            <span class="hashtag">#kediriku</span>
                            <span class="hashtag">#kedirikeren</span>
                            <span class="hashtag">#kedirikekinian</span>
                            <span class="hashtag">#infokediri</span>
                            <span class="hashtag">#nawabaktisatya</span>
                            <span class="hashtag">#mendukungastacita</span>
                            <span class="hashtag">#sinergimembangunnegeri</span>
            </span>
            <span class="more-less-btn" onclick="toggleComment(${post.id})">more</span>
        </div>
        <div class="add-comment">
            <input type="text" placeholder="Tambahkan komentar...">
            <button>
                <i class="fab fa-instagram" style="font-size:25px; color:#E1306C;"
                    onclick="window.open('https://www.instagram.com/rsud.dahahusada', '_blank')"></i>
            </button>
        </div>
    </div>
`;

        // Tambahkan postingan di awal wrapper
        postsWrapper.insertBefore(postElement, postsWrapper.firstChild);

        // Update totalPosts untuk carousel
        totalPosts = document.querySelectorAll('.post-container').length;
        maxPosition = -(totalPosts - visiblePosts) * postWidth;

        // Urutkan postingan berdasarkan tanggal
        sortPostsByDate();

        // Hapus indikator "BARU" setelah 10 detik
        setTimeout(() => {
            const indicator = postElement.querySelector('.new-post-indicator');
            if (indicator) {
                indicator.style.transition = 'opacity 0.5s';
                indicator.style.opacity = '0';
                setTimeout(() => {
                    indicator.remove();
                }, 500);
            }
        }, 10000);
    }

    // Fungsi untuk memuat postingan Instagram dari localStorage
    function loadInstagramPosts() {
        const savedPosts = JSON.parse(localStorage.getItem('instagramPosts')) || [];
        return savedPosts;
    }

    // Modifikasi fungsi toggleComment untuk menangani ID unik
    function toggleComment(id) {
        const commentText = document.getElementById(`comment-text-${id}`);
        if (!commentText) return;

        const moreLessBtn = commentText.nextElementSibling;
        if (commentText.classList.contains('collapsed')) {
            commentText.classList.remove('collapsed');
            moreLessBtn.textContent = 'less';
        } else {
            commentText.classList.add('collapsed');
            moreLessBtn.textContent = 'more';
        }
    }

    // Inisialisasi saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function () {
        // Muat postingan dari localStorage
        const savedPosts = loadInstagramPosts();
        const postsWrapper = document.getElementById('postsWrapper');

        if (postsWrapper && savedPosts.length > 0) {
            // Tambahkan postingan dari localStorage ke carousel
            savedPosts.forEach(post => {
                addNewPostToCarousel(post);
            });
        }

        // Dengarkan event ketika postingan baru ditambahkan
        window.addEventListener('instagramPostAdded', function (event) {
            addNewPostToCarousel(event.detail);
        });

        // Hapus indikator "BARU" setelah 10 detik
        setTimeout(() => {
            const indicators = document.querySelectorAll('.new-post-indicator');
            indicators.forEach(indicator => {
                indicator.style.transition = 'opacity 0.5s';
                indicator.style.opacity = '0';
                setTimeout(() => {
                    indicator.remove();
                }, 500);
            });
        }, 10000);
    });



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
