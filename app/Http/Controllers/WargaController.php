<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;

class WargaController extends Controller
{
    public function index()
    {
        return view("cek-nik");
    }

    public function checkNIK(Request $req)
    {
        $nokk = Warga::where('nik', 'LIKE', '%'.$req->search.'%')->orWhere('nama', 'LIKE', '%'.$req->search.'%')->first();
        $warga = Warga::where('nokk', $nokk->nokk)->get();
        return view("cek-nik", ['warga' => $warga]);
    }
}
