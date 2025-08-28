@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Edit Dokter</h1>
        <a href="{{ route('doctors.admin') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Kembali
        </a>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Edit Data Dokter</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('doctors.update', $doctor->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $doctor->name }}" required>
                            @error('name')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="specialty" class="form-label">Spesialisasi</label>
                            <select class="form-select" id="specialty" name="specialty" required>
                                <option value="mata" {{ $doctor->specialty == 'mata' ? 'selected' : '' }}>Mata</option>
                                <option value="penyakit-dalam" {{ $doctor->specialty == 'penyakit-dalam' ? 'selected' : '' }}>Penyakit Dalam</option>
                                <option value="kulit-kelamin" {{ $doctor->specialty == 'kulit-kelamin' ? 'selected' : '' }}>Kulit & Kelamin</option>
                                <option value="jantung" {{ $doctor->specialty == 'jantung' ? 'selected' : '' }}>Jantung</option>
                                <option value="bedah" {{ $doctor->specialty == 'bedah' ? 'selected' : '' }}>Bedah</option>
                                <option value="orthopedi" {{ $doctor->specialty == 'orthopedi' ? 'selected' : '' }}>Orthopedi</option>
                                <option value="tht" {{ $doctor->specialty == 'tht' ? 'selected' : '' }}>THT</option>
                                <option value="kandungan" {{ $doctor->specialty == 'kandungan' ? 'selected' : '' }}>Kandungan</option>
                                <option value="anak" {{ $doctor->specialty == 'anak' ? 'selected' : '' }}>Anak</option>
                                <option value="umum" {{ $doctor->specialty == 'umum' ? 'selected' : '' }}>Umum</option>
                                <option value="kusta" {{ $doctor->specialty == 'kusta' ? 'selected' : '' }}>Kusta</option>
                                <option value="gigi" {{ $doctor->specialty == 'gigi' ? 'selected' : '' }}>Gigi</option>
                                <option value="rehabilitasi" {{ $doctor->specialty == 'rehabilitasi' ? 'selected' : '' }}>Rehabilitasi</option>
                                <option value="urologi" {{ $doctor->specialty == 'urologi' ? 'selected' : '' }}>Urologi</option>
                                <option value="neurologi" {{ $doctor->specialty == 'neurologi' ? 'selected' : '' }}>Neurologi</option>
                            </select>
                            @error('specialty')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $doctor->email }}" required>
                            @error('email')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $doctor->phone }}" required>
                            @error('phone')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $doctor->description }}</textarea>
                            @error('description')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="education" class="form-label">Pendidikan</label>
                            <input type="text" class="form-control" id="education" name="education" value="{{ $doctor->education }}" required>
                            @error('education')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="experience" class="form-label">Pengalaman</label>
                            <input type="text" class="form-control" id="experience" name="experience" value="{{ $doctor->experience }}" required>
                            @error('experience')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="schedule" class="form-label">Jadwal Praktik</label>
                            <input type="text" class="form-control" id="schedule" name="schedule" value="{{ $doctor->schedule }}" required>
                            @error('schedule')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="photo" class="form-label">Foto Profil</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                            <div class="form-text">Kosongkan jika tidak ingin mengubah foto profil</div>
                            @if ($doctor->photo)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $doctor->photo) }}" alt="Foto Profil" class="img-thumbnail" style="max-height: 100px;">
                                </div>
                            @endif
                            @error('photo')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-triangle me-1"></i>{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('doctors.admin') }}" class="btn btn-secondary me-2">
                        <i class="fas fa-times me-2"></i>Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection