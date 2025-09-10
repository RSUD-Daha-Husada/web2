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