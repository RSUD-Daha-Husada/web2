
// Inisialisasi AOS (Animate On Scroll)
AOS.init({
    duration: 1000,
    once: true,
    offset: 120
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

// Data berita contoh
const sampleNews = [
    {
        id: 1,
        title: "Tips Menjaga Kesehatan Jantung di Tengah Kesibukan",
        category: "pencegahan",
        content: "Dalam kehidupan modern yang penuh dengan kesibukan, menjaga kesehatan jantung menjadi semakin penting. Berikut adalah beberapa tips sederhana namun efektif untuk menjaga kesehatan jantung Anda. Pertama, lakukan olahraga teratur setidaknya 30 menit setiap hari. Kedua, perhatikan pola makan dengan mengurangi garam dan lemak jenuh. Ketiga, kelola stres dengan baik melalui meditasi atau hobi yang menyenangkan.",
        date: "2023-05-15",
        image: "https://images.unsplash.com/photo-1616281177739-2a8192c2421d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
        author: "Admin",
        createdAt: new Date().toISOString()
    },
    {
        id: 2,
        title: "Terobosan Baru dalam Pengobatan Kanker",
        category: "penelitian",
        content: "Tim peneliti kami berhasil menemukan metode baru dalam pengobatan kanker yang lebih efektif dengan efek samping yang minimal. Penemuan ini diharapkan dapat membantu banyak pasien kanker di seluruh dunia. Metode ini menggunakan pendekatan imunoterapi yang lebih spesifik dalam menargetkan sel kanker tanpa merusak sel sehat di sekitarnya.",
        date: "2023-05-10",
        image: "https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
        author: "Dr. Ahmad Fauzi",
        createdAt: new Date().toISOString()
    },
    {
        id: 3,
        title: "Panduan Gizi Seimbang untuk Anak-anak",
        category: "gizi",
        content: "Nutrisi yang tepat sangat penting untuk tumbuh kembang anak. Ahli gizi kami membagikan panduan lengkap tentang cara menyusun menu gizi seimbang untuk anak-anak sesuai dengan usia mereka. Panduan ini mencakup kebutuhan kalori, vitamin, dan mineral yang diperlukan anak dalam setiap tahap pertumbuhan.",
        date: "2023-05-05",
        image: "https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
        author: "Dr. Siti Rahayu",
        createdAt: new Date().toISOString()
    }
];

// Fungsi utilitas
function formatDate(dateString) {
    const options = { day: 'numeric', month: 'short', year: 'numeric' };
    return new Date(dateString).toLocaleDateString('id-ID', options);
}

function getCategoryClass(category) {
    const categoryMap = {
        'pengumuman': 'bg-primary',
        'kesehatan': 'bg-success',
        'event': 'bg-warning',
        'pencegahan': 'bg-info',
        'penelitian': 'bg-danger',
        'gizi': 'bg-secondary'
    };
    return categoryMap[category] || 'bg-secondary';
}

function showToast(message, type = 'success') {
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
    
    const toastElement = toastContainer.querySelector('.toast');
    const toast = new bootstrap.Toast(toastElement, { autohide: true, delay: 5000 });
    toast.show();
    
    toastElement.addEventListener('hidden.bs.toast', function () {
        toastContainer.remove();
    });
}

// Fungsi untuk dokter
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

// Fungsi untuk berita
function loadBeritaGrid() {
    const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
    const container = document.getElementById('beritaGrid');
    
    if (newsList.length === 0) {
        container.innerHTML = getSampleBeritaHTML();
        return;
    }
    
    const recentNews = newsList.slice(0, 3);
    container.innerHTML = recentNews.map(news => {
        const categoryClass = getCategoryClass(news.category);
        return `
            <div class="berita-card">
                <div class="berita-img">
                    <img src="${news.image}" alt="${news.title}">
                    <span class="berita-kategori ${categoryClass}">${news.category}</span>
                </div>
                <div class="berita-content">
                    <div class="berita-tanggal">
                        <i class="far fa-calendar-alt"></i>
                        <span>${formatDate(news.date)}</span>
                    </div>
                    <h3>${news.title}</h3>
                    <p>${news.content.substring(0, 150)}${news.content.length > 150 ? '...' : ''}</p>
                    <a href="{{ route('berita') }}" onclick="showNewsTab()" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        `;
    }).join('');
}

function getSampleBeritaHTML() {
    return `
        <div class="berita-card">
            <div class="berita-img">
                <img src="https://images.unsplash.com/photo-1616281177739-2a8192c2421d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Berita Kesehatan">
                <span class="berita-kategori bg-info">Pencegahan</span>
            </div>
            <div class="berita-content">
                <div class="berita-tanggal">
                    <i class="far fa-calendar-alt"></i>
                    <span>15 Mei 2023</span>
                </div>
                <h3>Tips Menjaga Kesehatan Jantung di Tengah Kesibukan</h3>
                <p>Dalam kehidupan modern yang penuh dengan kesibukan, menjaga kesehatan jantung menjadi semakin penting. Berikut adalah beberapa tips sederhana namun efektif untuk menjaga kesehatan jantung Anda...</p>
                <a href="{{ route('berita') }}" onclick="showNewsTab()" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="berita-card">
            <div class="berita-img">
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Berita Kesehatan">
                <span class="berita-kategori bg-danger">Penelitian</span>
            </div>
            <div class="berita-content">
                <div class="berita-tanggal">
                    <i class="far fa-calendar-alt"></i>
                    <span>10 Mei 2023</span>
                </div>
                <h3>Terobosan Baru dalam Pengobatan Kanker</h3>
                <p>Tim peneliti kami berhasil menemukan metode baru dalam pengobatan kanker yang lebih efektif dengan efek samping yang minimal. Penemuan ini diharapkan dapat membantu banyak pasien kanker di seluruh dunia...</p>
                <a href="{{ route('berita') }}" onclick="showNewsTab()" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="berita-card">
            <div class="berita-img">
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Berita Kesehatan">
                <span class="berita-kategori bg-secondary">Gizi</span>
            </div>
            <div class="berita-content">
                <div class="berita-tanggal">
                    <i class="far fa-calendar-alt"></i>
                    <span>5 Mei 2023</span>
                </div>
                <h3>Panduan Gizi Seimbang untuk Anak-anak</h3>
                <p>Nutrisi yang tepat sangat penting untuk tumbuh kembang anak. Ahli gizi kami membagikan panduan lengkap tentang cara menyusun menu gizi seimbang untuk anak-anak sesuai dengan usia mereka...</p>
                <a href="{{ route('berita') }}" onclick="showNewsTab()" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    `;
}

function loadRecentNews() {
    const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
    const container = document.getElementById('recentNewsList');
    
    if (newsList.length === 0) {
        container.innerHTML = `
            <div class="text-center py-4">
                <i class="fas fa-newspaper fa-2x text-muted mb-2"></i>
                <p class="text-muted mb-0">Belum ada berita terkini</p>
            </div>
        `;
        return;
    }
    
    const recentNews = newsList.slice(0, 3);
    container.innerHTML = recentNews.map(news => {
        const categoryClass = getCategoryClass(news.category);
        return `
            <div class="news-item mb-3 pb-3 border-bottom">
                <div class="d-flex justify-content-between align-items-start">
                    <div class="flex-grow-1">
                        <h6 class="mb-1">${news.title}</h6>
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge ${categoryClass} me-2">${news.category}</span>
                            <small class="text-muted">
                                <i class="far fa-calendar me-1"></i> ${formatDate(news.date)}
                                ${news.author ? `<i class="fas fa-user ms-2 me-1"></i>${news.author}` : ''}
                            </small>
                        </div>
                        <p class="mb-0 text-muted">${news.content.substring(0, 100)}${news.content.length > 100 ? '...' : ''}</p>
                    </div>
                    ${news.image ? `<img src="${news.image}" alt="${news.title}" class="img-thumbnail ms-3" style="width: 80px; height: 80px; object-fit: cover;">` : ''}
                </div>
            </div>
        `;
    }).join('');
}

function updateNewsStats() {
    const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
    document.getElementById('totalNews').textContent = newsList.length;
}

function showNewsTab() {
    document.getElementById('news-tab').click();
}

function saveNews() {
    const newsId = document.getElementById('newsId').value;
    const title = document.getElementById('newsTitle').value;
    const category = document.getElementById('newsCategory').value;
    const content = document.getElementById('newsContent').value;
    const date = document.getElementById('newsDate').value;
    const imageInput = document.getElementById('newsImage');
    
    if (!title || !category || !content || !date) {
        showToast('Harap lengkapi semua field yang diperlukan', 'danger');
        return;
    }
    
    if (imageInput.files && imageInput.files[0]) {
        if (imageInput.files[0].size > 2 * 1024 * 1024) {
            showToast('Ukuran gambar maksimal 2MB', 'danger');
            return;
        }
        
        const reader = new FileReader();
        reader.onload = function (e) {
            const imageData = e.target.result;
            if (newsId) {
                updateNews(newsId, title, category, content, date, imageData);
            } else {
                addNews(title, category, content, date, imageData);
            }
        };
        reader.readAsDataURL(imageInput.files[0]);
    } else {
        if (newsId) {
            updateNews(newsId, title, category, content, date, null);
        } else {
            addNews(title, category, content, date, null);
        }
    }
}

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
        author: currentUser.name
    };
    
    newsList.unshift(newNews);
    localStorage.setItem('newsList', JSON.stringify(newsList));
    
    const modalElement = document.getElementById('addNewsModal');
    const modal = bootstrap.Modal.getInstance(modalElement);
    modal.hide();
    
    document.getElementById('newsForm').reset();
    document.getElementById('newsImagePreview').style.display = 'none';
    
    showToast('Berita berhasil ditambahkan!', 'success');
    
    loadNewsList();
    loadRecentNews();
    loadBeritaGrid();
    updateNewsStats();
}

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
        const categoryClass = getCategoryClass(news.category);
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
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-outline-danger" onclick="deleteNews(${news.id})">
                                        <i class="fas fa-trash"></i>
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

function editNews(id) {
    const newsList = JSON.parse(localStorage.getItem('newsList')) || [];
    const news = newsList.find(item => item.id == id);
    
    if (!news) {
        showToast('Berita tidak ditemukan', 'danger');
        return;
    }
    
    document.getElementById('newsId').value = news.id;
    document.getElementById('newsTitle').value = news.title;
    document.getElementById('newsCategory').value = news.category;
    document.getElementById('newsContent').value = news.content;
    document.getElementById('newsDate').value = news.date;
    
    const previewContainer = document.getElementById('newsImagePreview');
    const previewImg = document.getElementById('previewNewsImg');
    if (previewContainer && previewImg) {
        previewImg.src = news.image;
        previewContainer.style.display = 'block';
    }
    
    document.getElementById('addNewsModalLabel').innerHTML = '<i class="fas fa-edit me-2"></i>Edit Berita';
    
    const modalElement = document.getElementById('addNewsModal');
    const modal = new bootstrap.Modal(modalElement);
    modal.show();
}

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
        
        const modalElement = document.getElementById('addNewsModal');
        const modal = bootstrap.Modal.getInstance(modalElement);
        modal.hide();
        
        document.getElementById('newsForm').reset();
        document.getElementById('newsImagePreview').style.display = 'none';
        
        showToast('Berita berhasil diperbarui!', 'success');
        
        loadNewsList();
        loadRecentNews();
        loadBeritaGrid();
    }
}

function deleteNews(id) {
    if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
        let newsList = JSON.parse(localStorage.getItem('newsList')) || [];
        newsList = newsList.filter(news => news.id != id);
        localStorage.setItem('newsList', JSON.stringify(newsList));
        
        showToast('Berita berhasil dihapus!', 'success');
        
        loadNewsList();
        loadRecentNews();
        loadBeritaGrid();
        updateNewsStats();
    }
}

// Fungsi untuk Instagram
function addNewPostToCarousel(post) {
    const postsWrapper = document.getElementById('postsWrapper');
    if (!postsWrapper) return;
    
    const postElement = document.createElement('div');
    postElement.className = 'post-container';
    postElement.setAttribute('data-timestamp', post.date);
    
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
    
    postsWrapper.insertBefore(postElement, postsWrapper.firstChild);
    
    totalPosts = document.querySelectorAll('.post-container').length;
    maxPosition = -(totalPosts - visiblePosts) * postWidth;
    
    sortPostsByDate();
    
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

function loadInstagramPosts() {
    const savedPosts = JSON.parse(localStorage.getItem('instagramPosts')) || [];
    return savedPosts;
}

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

// Fungsi untuk suara dan aksesibilitas
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

function speakText(text) {
    currentUtterance = new SpeechSynthesisUtterance(text);
    currentUtterance.lang = 'id-ID';
    currentUtterance.rate = 1.0;
    currentUtterance.pitch = 1.0;
    currentUtterance.volume = 1.0;
    
    currentUtterance.onstart = function () {
        if (speechIndicator) {
            speechIndicator.classList.add('active');
        }
    };
    
    currentUtterance.onend = function () {
        isProcessing = false;
        if (speechIndicator) {
            speechIndicator.classList.remove('active');
        }
        removeHighlight();
    };
    
    currentUtterance.onerror = function () {
        isProcessing = false;
        if (speechIndicator) {
            speechIndicator.classList.remove('active');
        }
        removeHighlight();
    };
    
    synth.speak(currentUtterance);
}

function highlightSelectedText() {
    if (!selectedTextRange) return;
    
    try {
        const span = document.createElement('span');
        span.className = 'speaking';
        removeHighlight();
        selectedTextRange.surroundContents(span);
    } catch (e) {
        console.log('Highlight error:', e);
    }
}

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

// Inisialisasi saat DOM dimuat
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
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
    
    // Typing effect for hero title
    const text = "Rumah Sakit Daha Husada!";
    const typingElement = document.getElementById('typing-effect');
    if (typingElement) {
        let index = 0;
        function typeText() {
            if (index < text.length) {
                typingElement.textContent += text.charAt(index);
                index++;
                setTimeout(typeText, 100);
            }
        }
        typeText();
    }
    
    // Animasi untuk floating elements
    const floatingIcons = document.querySelectorAll('.floating-icon');
    floatingIcons.forEach((icon, index) => {
        icon.style.left = `${Math.random() * 100}%`;
        icon.style.top = `${Math.random() * 100}%`;
        const duration = 15 + Math.random() * 10;
        icon.style.animationDuration = `${duration}s`;
        icon.style.animationDelay = `${index * 2}s`;
    });
    
    // Animasi untuk doctor cards
    const doctorCards = document.querySelectorAll('.doctor-card');
    doctorCards.forEach((card, index) => {
        card.addEventListener('mouseenter', function () {
            this.querySelector('.doctor-overlay').style.opacity = '1';
        });
        card.addEventListener('mouseleave', function () {
            this.querySelector('.doctor-overlay').style.opacity = '0';
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
    
    handleScrollAnimation();
    
    // Inisialisasi suara
    const trigger = document.getElementById('soundTrigger');
    let hasSpoken = false;
    
    setTimeout(() => {
        if (!hasSpoken) {
            speakWelcome();
        }
    }, 500);
    
    const events = ['click', 'touchstart', 'scroll', 'keydown'];
    events.forEach(event => {
        document.addEventListener(event, function initSound() {
            if (!hasSpoken) {
                speakWelcome();
                events.forEach(e => {
                    document.removeEventListener(e, initSound);
                });
            }
        }, { once: true });
    });
    
    // Inisialisasi text-to-speech
    if ('speechSynthesis' in window) {
        const synth = window.speechSynthesis;
        const speechIndicator = document.getElementById('speechIndicator');
        let currentUtterance = null;
        let selectedTextRange = null;
        let isProcessing = false;
        
        let selectionTimeout;
        document.addEventListener('mouseup', function () {
            clearTimeout(selectionTimeout);
            selectionTimeout = setTimeout(() => {
                if (isProcessing) return;
                
                const selection = window.getSelection();
                const selectedText = selection.toString().trim();
                
                if (selectedText) {
                    isProcessing = true;
                    selectedTextRange = selection.getRangeAt(0);
                    
                    if (synth.speaking) {
                        synth.cancel();
                    }
                    
                    removeHighlight();
                    highlightSelectedText();
                    speakText(selectedText);
                }
            }, 300);
        });
        
        document.addEventListener('click', function (e) {
            if (synth.speaking && !e.target.closest('p, h1, h2, h3, h4, h5, h6, span, div')) {
                synth.cancel();
                isProcessing = false;
            }
        });
        
        const interactiveElements = document.querySelectorAll('button, a, [role="button"]');
        interactiveElements.forEach(element => {
            const getTextToSpeak = (el) => {
                if (el.getAttribute('data-speak')) {
                    return el.getAttribute('data-speak');
                }
                return el.textContent.trim() || el.getAttribute('aria-label') || el.getAttribute('title');
            };
            
            element.addEventListener('mouseenter', function () {
                if (isProcessing) return;
                
                const textToSpeak = getTextToSpeak(this);
                if (textToSpeak) {
                    if (synth.speaking && !currentUtterance?.isBlockText) {
                        synth.cancel();
                    }
                    
                    const hoverUtterance = new SpeechSynthesisUtterance(textToSpeak);
                    hoverUtterance.lang = 'id-ID';
                    hoverUtterance.rate = 1;
                    hoverUtterance.volume = 5;
                    hoverUtterance.isBlockText = false;
                    
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
            
            element.addEventListener('mouseleave', function () {
                if (synth.speaking && !currentUtterance?.isBlockText) {
                    synth.cancel();
                    if (speechIndicator) {
                        speechIndicator.classList.remove('active');
                        speechIndicator.innerHTML = '🔊 Membaca...';
                    }
                }
            });
        });
    }
    
    // Inisialisasi Instagram posts
    const savedPosts = loadInstagramPosts();
    const postsWrapper = document.getElementById('postsWrapper');
    if (postsWrapper && savedPosts.length > 0) {
        savedPosts.forEach(post => {
            addNewPostToCarousel(post);
        });
    }
    
    window.addEventListener('instagramPostAdded', function (event) {
        addNewPostToCarousel(event.detail);
    });
    
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
    
    // Inisialisasi berita
    if (!localStorage.getItem('newsList')) {
        localStorage.setItem('newsList', JSON.stringify(sampleNews));
    }
    
    if (document.getElementById('beritaGrid')) {
        loadBeritaGrid();
    }
    
    if (document.getElementById('recentNewsList')) {
        loadRecentNews();
    }
    
    if (document.getElementById('newsList')) {
        loadNewsList();
    }
    
    updateNewsStats();
    
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
    
    // Load dashboard
    if (typeof loadDashboard === 'function') {
        loadDashboard();
    }
});