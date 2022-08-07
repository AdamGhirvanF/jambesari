<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Warga;
use App\Models\Keluhan;

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
        return view("frontend.layanan", ['title' => 'Layanan NIK', 'warga' => $warga]);
    }

    public function storeKeluhan(Request $req)
    {
        $data = new Keluhan;
        $data->nama = $req->nama;
        $data->email = $req->email;
        $data->perihal = $req->perihal;
        $data->pesan = $req->pesan;
        $data->save();

        Session::flash('alert', 'Berhasil mengirim keluhan');
        return redirect()->back();
    }
}
