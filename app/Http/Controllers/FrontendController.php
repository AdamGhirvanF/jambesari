<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function indexHomepage()
    {
        return view("frontend.index", ["title" => "Beranda"]);
    }

    public function profilDesa() {
        return view("frontend.profil", ["title" => "Profil Desa"]);
    }

    public function strukturDesa() {
        return view("frontend.struktur", ["title" => "Struktur Desa"]);
    }

    public function galeriDesa() {
        return view("frontend.galeri", ["title" => "Galeri"]);
    }

    public function layananDesa() {
        return view("frontend.layanan", ["title" => "Layanan NIK"]);
    }

    public function kontakDesa() {
        return view("frontend.kontak", ["title" => "Kontak"]);
    }
}
