<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Dokter - Admin Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-hospital"></i> Klinik Indonesia
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/admin/doctors') }}">Admin</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fas fa-user"></i> {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a></li>
                        </ul>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5>Menu Admin</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="{{ url('/admin/doctors') }}" class="list-group-item list-group-item-action active">
                                <i class="fas fa-user-md"></i> Manajemen Dokter
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-calendar-alt"></i> Janji Temu
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-users"></i> Pasien
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-file-medical"></i> Rekam Medis
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-bed"></i> Ketersediaan Bed
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Manajemen Dokter</h4>
                        <a href="{{ route('admin.doctors.create') }}" class="btn btn-light">
                            <i class="fas fa-plus"></i> Tambah Dokter
                        </a>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Spesialisasi</th>
                                        <th>Jadwal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($doctors as $doctor)
                                        <tr>
                                            <td>{{ $doctor->id }}</td>
                                            <td>
                                                @if($doctor->photo)
                                                    <img src="{{ asset($doctor->photo) }}" alt="{{ $doctor->name }}"
                                                        class="img-thumbnail" style="max-width: 50px;">
                                                @else
                                                    <img src="{{ asset('images/default-doctor.jpg') }}" alt="Default"
                                                        class="img-thumbnail" style="max-width: 50px;">
                                                @endif
                                            </td>
                                            <td>{{ $doctor->name }}</td>
                                            <td>{{ $doctor->specialization }}</td>
                                            <td>{{ $doctor->schedule }}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{ url('/admin/doctors/' . $doctor->id . '/edit') }}"
                                                        class="btn btn-info">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ url('/admin/doctors/' . $doctor->id) }}" method="POST"
                                                        style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data dokter</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>