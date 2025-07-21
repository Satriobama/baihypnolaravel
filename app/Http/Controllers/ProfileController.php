<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showSertifikat()
    {
        $images = ['SertifikatBasic.jpg', 'SertifikatAdvance.jpg', 'SertifikatProfesional.jpg']; // Example array
        return view('profilTerapis', compact('images'));
    }

    public function kontak()
    {
        $waNumber = '6287878571492'; // Ganti dengan nomor WA Anda
        $waUrl = "https://wa.me/{$waNumber}";
        return view('kontak', compact('waUrl'));
    }
}
