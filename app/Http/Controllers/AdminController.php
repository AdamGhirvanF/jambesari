<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use App\Models\Berita;
use App\Models\Program;
use App\Models\Lembaga;
use App\Models\Galeri;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexWarga()
    {
        $data = Warga::all();

        return view('admin.warga.index', ['data' => $data]);
    }

    public function indexBerita()
    {
        $data = Berita::all();

        return view('admin.berita.index', ['data' => $data]);
    }

    public function indexProgram()
    {
        $data = Program::all();

        return view('admin.program.index', ['data' => $data]);
    }

    public function indexGaleri()
    {
        $data = Galeri::all();

        return view('admin.galeri.index', ['data' => $data]);
    }

    public function indexLembaga()
    {
        $data = Lembaga::all();

        return view('admin.lembaga.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createWarga()
    {
        return view('admin.warga.create');
    }

    public function createBerita()
    {
        return view('admin.berita.create');
    }

    public function createProgram()
    {
        return view('admin.program.create');
    }

    public function createLembaga()
    {
        return view('admin.lembaga.create');
    }

    public function createGaleri()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeWarga(Request $req)
    {
        $data = new Warga;
        $data->nokk = $req->nokk;
        $data->nik = $req->nik;
        $data->nmkk = $req->nmkk;
        $data->nama = $req->nama;
        $data->jk = $req->jk;
        $data->tmp_lahir = $req->tmp_lahir;
        $data->tgl_lahir = $req->tgl_lahir;
        $data->gdr = $req->gdr;
        $data->agama = $req->agama;
        $data->satulimalima = $req->satulimalima;
        $data->st_kawin = $req->st_kawin;
        $data->shdrt = $req->shdrt;
        $data->pddkn = $req->pddkn;
        $data->pkrjaan = $req->pkrjaan;
        $data->ibu = $req->ibu;
        $data->ayah = $req->ayah;
        $data->no_hp = $req->no_hp;
        $data->dusun = $req->dusun;
        $data->rt = $req->rt;
        $data->rw = $req->rw;
        $data->save();

        return redirect('admin/warga');
    }

    public function storeBerita(Request $req)
    {
        $data = new Berita;
        $data->judul = $req->judul;
        $data->isi = $req->isi;
        $image = $req->file('foto');
        $fileName = $image->getClientOriginalName();
        $image->move(public_path('img/berita/'), $fileName);
        $data->foto = $fileName;
        $data->save();

        return redirect('admin/berita');
    }

    public function storeProgram(Request $req)
    {
        $data = new Program;
        $data->title = $req->title;
        $image = $req->file('foto');
        $fileName = $image->getClientOriginalName();
        $image->move(public_path('img/program/'), $fileName);
        $data->foto = $fileName;
        $data->save();

        return redirect('admin/program');
    }

    public function storeGaleri(Request $req)
    {
        $data = new Galeri;
        $image = $req->file('foto');
        $fileName = $image->getClientOriginalName();
        $image->move(public_path('img/galeri/'), $fileName);
        $data->foto = $fileName;
        $data->save();

        return redirect('admin/galeri');
    }

    public function storeLembaga(Request $req)
    {
        $data = new Lembaga;
        $data->nama = $req->nama;
        $data->deskripsi = $req->deskripsi;
        $data->program_kerja = $req->program_kerja;
        $image = $req->file('logo');
        $fileName = $image->getClientOriginalName();
        $image->move(public_path('img/lembaga/logo/'), $fileName);
        $data->logo = $fileName;
        $image = $req->file('foto_jumbotron');
        $fileName = $image->getClientOriginalName();
        $image->move(public_path('img/lembaga/jumbotron/'), $fileName);
        $data->foto_jumbotron = $fileName;
        $data->save();

        return redirect('admin/lembaga');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editWarga($id)
    {
        $data = Warga::find($id);
        
        return view('admin.warga.edit', ['data' => $data]);
    }

    public function editBerita($id)
    {
        $data = Berita::find($id);
        
        return view('admin.berita.edit', ['data' => $data]);
    }

    public function editProgram($id)
    {
        $data = Program::find($id);
        
        return view('admin.program.edit', ['data' => $data]);
    }

    public function editGaleri($id)
    {
        $data = Galeri::find($id);
        
        return view('admin.galeri.edit', ['data' => $data]);
    }

    public function editLembaga($id)
    {
        $data = Lembaga::find($id);
        
        return view('admin.lembaga.edit', ['data' => $data]);
    }

    public function storeEditWarga(Request $req, $id)
    {
        $data = Warga::find($id);
        $data->nokk = $req->nokk;
        $data->nik = $req->nik;
        $data->nmkk = $req->nmkk;
        $data->nama = $req->nama;
        $data->jk = $req->jk;
        $data->tmp_lahir = $req->tmp_lahir;
        $data->tgl_lahir = $req->tgl_lahir;
        $data->gdr = $req->gdr;
        $data->agama = $req->agama;
        $data->satulimalima = $req->satulimalima;
        $data->st_kawin = $req->st_kawin;
        $data->shdrt = $req->shdrt;
        $data->pddkn = $req->pddkn;
        $data->pkrjaan = $req->pkrjaan;
        $data->ibu = $req->ibu;
        $data->ayah = $req->ayah;
        $data->no_hp = $req->no_hp;
        $data->dusun = $req->dusun;
        $data->rt = $req->rt;
        $data->rw = $req->rw;
        $data->save();

        return redirect('admin/warga');
    }

    public function storeEditBerita(Request $req, $id)
    {
        $data = Berita::find($id);
        $data->judul = $req->judul;
        $data->isi = $req->isi;
        if($req->file('foto') != null) {
            $image = $req->file('foto');
            $fileName = $image->getClientOriginalName();
            $image->move(public_path('img/berita/'), $fileName);
            $data->foto = $fileName;
        }

        $data->save();

        return redirect('admin/berita');
    }

    public function storeEditProgram(Request $req, $id)
    {
        $data = Program::find($id);
        $data->title = $req->title;
        if($req->file('foto') != null) {
            $image = $req->file('foto');
            $fileName = $image->getClientOriginalName();
            $image->move(public_path('img/program/'), $fileName);
            $data->foto = $fileName;
        }

        $data->save();

        return redirect('admin/program');
    }

    public function storeEditGaleri(Request $req, $id)
    {
        $data = Galeri::find($id);
        if($req->file('foto') != null) {
            $image = $req->file('foto');
            $fileName = $image->getClientOriginalName();
            $image->move(public_path('img/galeri/'), $fileName);
            $data->foto = $fileName;
        }
        $data->save();

        return redirect('admin/galeri');
    }

    public function storeEditLembaga(Request $req, $id)
    {
        $data = Lembaga::find($id);
        $data->nama = $req->nama;
        $data->deskripsi = $req->deskripsi;
        $data->program_kerja = $req->program_kerja;
        
        if($req->file('logo') != null) {
            $image = $req->file('logo');
            $fileName = $image->getClientOriginalName();
            $image->move(public_path('img/lembaga/logo/'), $fileName);
            $data->logo = $fileName;
        } 
        
        if($req->file('foto_jumbotron') != null) {
            $image = $req->file('foto_jumbotron');
            $fileName = $image->getClientOriginalName();
            $image->move(public_path('img/lembaga/jumbotron/'), $fileName);
            $data->foto_jumbotron = $fileName;
        }

        $data->save();

        return redirect('admin/lembaga');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteWarga($id)
    {
        $data = Warga::where('nik', $id)->first();
        $data->delete();

        return redirect('/admin/warga');
    }

    public function deleteBerita($id)
    {
        $data = Berita::find($id);
        $data->delete();

        return redirect('/admin/berita');
    }

    public function deleteProgram($id)
    {
        $data = Program::find($id);
        $data->delete();

        return redirect('/admin/program');
    }

    public function deleteGaleri($id)
    {
        $data = Galeri::find($id);
        $data->delete();

        return redirect('/admin/galeri');
    }

    public function deleteLembaga($id)
    {
        $data = Lembaga::find($id);
        $data->delete();

        return redirect('/admin/lembaga');
    }
}
