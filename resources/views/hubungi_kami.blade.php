<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - RSUD Daha Husada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('hubungi_kami.css') }}" rel="stylesheet">


</head>

<body>
    <!-- Exit Button -->
    <button class="exit-button" onclick="window.history.back()">
        <i class="fas fa-times"></i> Keluar
    </button>

    <!-- Hero Section -->
     <x-hubungi.hero />

    <!-- WhatsApp Section -->
<x-hubungi.WA />

    <!-- Contact Form Section -->
<x-hubungi.contact />

    <!-- Footer -->
<x-hubungi.footer />



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        // Back to top button
        const backToTopButton = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });

        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Form reset functionality
        document.querySelector('.btn-reset').addEventListener('click', function () {
            document.querySelector('form').reset();
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
            let isProcessing = false;
            let hoverTimeout = null;

            // Buat indikator suara jika belum ada
            if (!speechIndicator) {
                const indicator = document.createElement('div');
                indicator.id = 'speechIndicator';
                indicator.className = 'speech-indicator';
                indicator.style.cssText = 'position: fixed; bottom: 20px; right: 20px; background: #4caf50; color: white; padding: 12px 20px; border-radius: 25px; display: none; z-index: 9999; font-weight: 500; box-shadow: 0 4px 12px rgba(0,0,0,0.15); max-width: 300px;';
                document.body.appendChild(indicator);
            }

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
                        'exit-button': 'Keluar',
                        'home-button': 'Beranda',
                        'contact-icon': 'Ikon Kontak',
                        'contact-title': 'Judul Kontak',
                        'contact-item': 'Item Kontak',
                        'wa-icon': 'Ikon WhatsApp',
                        'wa-title': 'Judul WhatsApp',
                        'wa-button': 'Tombol WhatsApp',
                        'form-control': 'Input Formulir',
                        'form-select': 'Pilih Formulir',
                        'btn-submit': 'Kirim Pesan',
                        'btn-reset': 'Reset Formulir',
                        'floating-wa': 'WhatsApp Mengambang',
                        'social-links': 'Tautan Media Sosial',
                        'footer': 'Footer',
                        'backToTop': 'Kembali ke Atas',
                        'section-title': 'Judul Bagian',
                        'form-title': 'Judul Formulir',
                        'newsletter': 'Newsletter',
                        'hero-title': 'Judul Hero',
                        'hero-subtitle': 'Subjudul Hero'
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
                element.addEventListener('mouseenter', function () {
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
                element.addEventListener('mouseleave', function () {
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
                    '.btn-reset',
                    '.btn-submit',
                    '.contact-item',
                    '.wa-button',
                    '.floating-wa',
                    '.social-links a',
                    '.exit-button',
                    '.home-button',
                    '.backToTop',
                    'form label',
                    '.form-control',
                    '.form-select'
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
            const observer = new MutationObserver(function (mutations) {
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
                currentUtterance.onstart = function () {
                    if (speechIndicator) {
                        speechIndicator.classList.add('active');
                        speechIndicator.textContent = '🔊 Membaca teks...';
                    }
                };

                // Event saat selesai
                currentUtterance.onend = function () {
                    isProcessing = false;
                    if (speechIndicator) {
                        speechIndicator.classList.remove('active');
                        speechIndicator.textContent = '🔊 Membaca...';
                    }
                    removeHighlight();
                };

                // Event jika error
                currentUtterance.onerror = function () {
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
            document.addEventListener('click', function (e) {
                if (synth.speaking && !e.target.closest('p, h1, h2, h3, h4, h5, h6, span, div')) {
                    synth.cancel();
                    isProcessing = false;
                }
            });

            // Tambahkan atribut data-speak ke elemen penting yang tidak memiliki teks yang jelas
            document.addEventListener('DOMContentLoaded', function () {
                // Tambahkan data-speak untuk tombol exit
                const exitButton = document.querySelector('.exit-button');
                if (exitButton && !exitButton.hasAttribute('data-speak')) {
                    exitButton.setAttribute('data-speak', 'Keluar dari halaman kontak');
                }

                // Tambahkan data-speak untuk tombol home
                const homeButton = document.querySelector('.home-button');
                if (homeButton && !homeButton.hasAttribute('data-speak')) {
                    homeButton.setAttribute('data-speak', 'Kembali ke beranda');
                }

                // Tambahkan data-speak untuk tombol WhatsApp mengambang
                const floatingWa = document.querySelector('.floating-wa');
                if (floatingWa && !floatingWa.hasAttribute('data-speak')) {
                    floatingWa.setAttribute('data-speak', 'WhatsApp layanan pelanggan');
                }

                // Tambahkan data-speak untuk judul-judul section
                const sectionTitles = document.querySelectorAll('.section-title');
                sectionTitles.forEach(title => {
                    if (!title.hasAttribute('data-speak')) {
                        title.setAttribute('data-speak', title.textContent);
                    }
                });
            });
        });
    </script>
</body>

</html>