<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use App\Models\Berita;
use App\Models\Program;
use App\Models\Lembaga;
use App\Models\Galeri;

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
        $data = Galeri::all();
        return view("frontend.galeri", ["title" => "Galeri", 'data' => $data]);
    }

    public function layananDesa() {
        return view("frontend.layanan", ["title" => "Layanan NIK"]);
    }

    public function kontakDesa() {
        return view("frontend.kontak", ["title" => "Kontak"]);
    }

    public function indexBerita()
    {
        $data = Berita::paginate(6);
        return view("frontend.berita", ["title" => "Berita", "data" => $data]);
    }

    // satu berita
    public function isiBerita()
    {
        return view("frontend.page.berita.one", ["title" => "Judul Berita"]);
    }

    public function indexBumdes()
    {
        return view("frontend.page.lembaga.bumdes", ["title" => "BUMDes"]);
    }

    public function indexProgram()
    {
        $data = Program::all();
        return view("frontend.program", ["title" => "Program Desa", 'data' => $data]);
    }
}
