<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return response()->json([
            ['id' => 1, 'judul' => 'Judul 1', 'konten' => 'Konten berita 1'],
            ['id' => 2, 'judul' => 'Judul 2', 'konten' => 'Konten berita 2'],
        ]);
    }
}