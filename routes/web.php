<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

// =======================
// HALAMAN UTAMA (Public)
// =======================
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/ketersediaan-bed', function () {
    return view('ketersediaan_bed');
})->name('ketersediaan_bed');

Route::get('/patient-portal', function () {
    return view('patient_portal');
})->name('patient.portal');

Route::get('/hubungi-kami', function () {
    return view('hubungi_kami');
})->name('hubungi.kami');

Route::get('/pengaduan', function () {
    return view('pengaduan'); 
});

// =======================
// DOKTER (Public)
// =======================
Route::get('/doctors', [DoctorController::class, 'user'])->name('doctors.index');

// =======================
// LOGIN / AUTH
// =======================
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// =======================
// API DOCTORS (AJAX fetch JS)
// =======================
Route::prefix('api')->group(function () {
    Route::get('/doctors', [DoctorController::class, 'getDoctors']);
    Route::post('/doctors/add', [DoctorController::class, 'addDoctor']);
    Route::post('/doctors/update', [DoctorController::class, 'updateDoctor']);
    Route::post('/doctors/delete', [DoctorController::class, 'deleteDoctor']);
});

// =======================
// ADMIN ROUTES (hanya bisa login)
// =======================
Route::middleware(['web', 'auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/doctors', [DoctorController::class, 'admin'])->name('doctors.index');
    Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
    Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
    Route::get('/doctors/{id}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
    Route::put('/doctors/{id}', [DoctorController::class, 'update'])->name('doctors.update');
    Route::delete('/doctors/{id}', [DoctorController::class, 'destroy'])->name('doctors.destroy');
});

// =======================
// DEBUG / TESTING
// =======================
Route::get('/debug-doctors', function() {
    $doctors = App\Models\Doctor::all();
    return view('doctors.debug', compact('doctors'));
});

Route::get('/test-upload', function() {
    return view('test-upload');
});

Route::get('/check-admin-status', function() {
    if (auth()->check()) {
        $user = auth()->user();
        return [
            'logged_in' => true,
            'user_id'   => $user->id,
            'user_name' => $user->name,
            'is_admin'  => $user->is_admin,
        ];
    } else {
        return ['logged_in' => false];
    }
})->middleware('web');

Route::get('/test-simple-form', function() {
    return '
        <form method="POST" action="/test-simple-store">
            <input type="hidden" name="_token" value="' . csrf_token() . '">
            <input type="text" name="name" placeholder="Nama" required><br>
            <input type="text" name="specialty" placeholder="Spesialisasi" required><br>
            <input type="text" name="title" placeholder="Jabatan" required><br>
            <textarea name="description" placeholder="Deskripsi" required></textarea><br>
            <input type="text" name="phone" placeholder="Telepon" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <button type="submit">Submit</button>
        </form>
    ';
});

Route::post('/test-simple-store', function(Request $request) {
    Log::debug('Test debug store called', $request->all());
    
    try {
        $doctor = \App\Models\Doctor::create([
            'name'        => $request->name,
            'specialty'   => $request->specialty,
            'title'       => $request->title,
            'description' => $request->description,
            'phone'       => $request->phone,
            'email'       => $request->email,
        ]);
        
        return "SUCCESS: Doctor created with ID " . $doctor->id;
    } catch (\Exception $e) {
        Log::error('Test debug error: ' . $e->getMessage());
        return "ERROR: " . $e->getMessage();
    }
});

// Simple test route
Route::get('/test-debug', function() {
    return "Test route works!";
});