<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function indexHomepage()
    {
        return view("frontend.index", ["title" => "Website Desa Jambesari"]);
    }

    public function indexBerita()
    {
        return view("frontend.berita", ["title" => "Berita Desa Jambesari"]);
    }

    public function isiBerita()
    {
        return view("frontend.page.berita.one", ["title" => "Berita Desa Jambesari"]);
    }

    public function indexBumdes()
    {
        return view("frontend.page.lembaga.bumdes", ["title" => "BUM Desa Jambesari"]);
    }

    public function indexProgram()
    {
        return view("frontend.program", ["title" => "Program Desa Jambesari"]);
    }
}
