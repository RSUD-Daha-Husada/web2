<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DoctorController extends Controller
{
    /**
     * Halaman admin
     */
    public function admin()
    {
        $doctors = Doctor::all();
        return view('admin.doctors', compact('doctors'));
    }

    /**
     * Show form for creating new doctor
     */
    public function create()
    {
        return view('admin.create_doctor');
    }

    /**
     * Store new doctor
     */
    public function store(Request $request)
    {
        // Debug: Log awal
        Log::debug('=== STORE METHOD STARTED ===');
        
        try {
            // Debug: Log request
            Log::debug('Request data:', $request->all());
            
            // Validasi input
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'specialty' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'phone' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            
            Log::debug('Validation passed:', $validated);
            
            $doctor = new Doctor();
            $doctor->name = $validated['name'];
            $doctor->specialty = $validated['specialty'];
            $doctor->title = $validated['title'];
            $doctor->description = $validated['description'];
            $doctor->phone = $validated['phone'];
            $doctor->email = $validated['email'];
            
            // Handle upload gambar
            if ($request->hasFile('image')) {
                Log::debug('File uploaded detected');
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                
                // Buat folder jika belum ada
                if (!file_exists(public_path('images/doctors'))) {
                    mkdir(public_path('images/doctors'), 0755, true);
                    Log::debug('Created directory: images/doctors');
                }
                
                $image->move(public_path('images/doctors'), $imageName);
                $doctor->image = 'images/doctors/' . $imageName;
                Log::debug('Image saved:', ['path' => $doctor->image]);
            }
            
            $doctor->save();
            Log::debug('Doctor saved:', ['id' => $doctor->id]);
            
            return redirect()->route('admin.doctors.index')
                             ->with('success', 'Dokter berhasil ditambahkan');
                             
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error:', ['errors' => $e->errors()]);
            return redirect()->back()
                             ->withErrors($e->errors())
                             ->withInput();
        } catch (\Exception $e) {
            Log::error('Error saving doctor:', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->back()
                             ->with('error', 'Terjadi kesalahan: ' . $e->getMessage())
                             ->withInput();
        }
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
        
        if (!$doctor) {
            return response()->json(['error' => 'Data dokter tidak ditemukan!'], 404);
        }
        
        return response()->json($doctor);
    }

    /**
     * Halaman user
     */
    public function user()
    {
        $doctors = Doctor::all();
        return view('doctors.debug', compact('doctors'));
    }

    /**
     * API untuk mendapatkan data dokter
     */
    public function getDoctors()
    {
        $doctors = Doctor::all()->map(function ($doctor) {
            return [
                'id' => $doctor->id,
                'name' => $doctor->name,
                'specialty' => $doctor->specialty,
                'title' => $doctor->title,
                'description' => $doctor->description,
                'phone' => $doctor->phone,
                'email' => $doctor->email,
                'image' => $doctor->image ? asset($doctor->image) : 'https://picsum.photos/seed/doctor' . $doctor->id . '/400/400.jpg',
                'education' => $doctor->education ?? 'S1 Kedokteran Universitas Terkemuka',
                'experience' => $doctor->experience ?? '5 tahun',
                'schedule' => $doctor->schedule ?? 'Senin-Jumat: 08:00-16:00'
            ];
        });

        return response()->json($doctors);
    }

    /**
     * API untuk menambah dokter
     */
    public function addDoctor(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->specialty = $request->specialty;
        $doctor->title = $request->title;
        $doctor->description = $request->description;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/doctors'), $imageName);
            $doctor->image = 'images/doctors/' . $imageName;
        }

        $doctor->save();

        return response()->json([
            'success' => true,
            'message' => 'Dokter berhasil ditambahkan',
            'data' => $doctor
        ], 201);
    }

    /**
     * API untuk menghapus dokter
     */
    public function deleteDoctor($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json([
                'success' => false,
                'message' => 'Dokter tidak ditemukan'
            ], 404);
        }

        // Hapus gambar jika ada
        if ($doctor->image && File::exists(public_path($doctor->image))) {
            File::delete(public_path($doctor->image));
        }

        $doctor->delete();

        return response()->json([
            'success' => true,
            'message' => 'Dokter berhasil dihapus'
        ]);
    }


    /**
     * API untuk update dokter
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string',
            'email' => 'required|email|unique:doctors,email,' . $id,
            'phone' => 'required|string|max:20',
            'description' => 'required|string',
            'education' => 'required|string',
            'experience' => 'required|string',
            'schedule' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        // Cari data dokter
        $doctor = Doctor::find($id);
        
        if (!$doctor) {
            return response()->json(['error' => 'Data dokter tidak ditemukan!'], 404);
        }
        
        // Update data
        $doctor->name = $validated['name'];
        $doctor->specialty = $validated['specialty'];
        $doctor->email = $validated['email'];
        $doctor->phone = $validated['phone'];
        $doctor->description = $validated['description'];
        $doctor->education = $validated['education'];
        $doctor->experience = $validated['experience'];
        $doctor->schedule = $validated['schedule'];
        
        // Handle upload foto
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($doctor->image && File::exists(public_path($doctor->image))) {
                File::delete(public_path($doctor->image));
            }
    
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/doctors'), $imageName);
            $doctor->image = 'images/doctors/' . $imageName;
        }
        
        // Simpan perubahan
        $doctor->save();
        
        // Return response JSON untuk AJAX
        return response()->json([
            'success' => true,
            'message' => 'Data dokter berhasil diperbarui!',
            'redirect' => route('doctors.admin')
        ]);
    }
}