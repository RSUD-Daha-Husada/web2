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
                </div>
            </div>
        </div>
    </div>