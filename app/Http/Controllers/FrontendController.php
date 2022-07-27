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
}
