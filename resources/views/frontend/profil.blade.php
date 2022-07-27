@extends("layouts.main")

@section("container")

@include("partials.breadcrumb")

<div>
    <h5 class="title text-center p-2">Daftar Kepala Desa Jambesari</h5>
</div>

<!-- Table -->
<div class="table pt-3 pb-4 p-5 text-center">
    <table class="kades table table-striped-columns table-bordered table-hover">
        <thead class="thead">
            <tr>
            <th scope="col">NO.</th>
            <th scope="col" class="text-white">Tahun Menjabat</th>
            <th scope="col">Nama Kepala Desa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <th scope="row">4</th>
            <td></td>
            <td></td>
            </tr>
        </tbody>
    </table>
</div>
<!-- End Table -->

<div>
    <h5 class="title text-center p-2">Data Wilayah Administrasi Desa Jambesari</h5>
</div>
<!-- Table2 -->

<div class="table pt-3 pb-4 p-5 text-center">
    <table class="wilayah table table-striped-columns table-bordered table-hover">
        <tbody>
            <tr>
            <th class="cat">Kabupaten (Kode)</th>
            <td>TES</td>
            </tr>
            <tr>
            <th class="cat">Kecamatan (Kode)</th>
            <td></td>
            </tr>
            <tr>
            <th class="cat">Desa (Kode)</th>
            <td></td>
            </tr>
            <tr>
            <th class="cat">Jumlah RT</th>
            <td></td>
            </tr>
            <tr>
            <th class="cat">Jumlah RW</th>
            <td></td>
            </tr>
            <tr>
            <th class="cat">Jumlah Dusun</th>
            <td></td>
            </tr>
            <tr>
            <th class="cat">Jumlah Penduduk</th>
            <td></td>
            </tr>   
        </tbody>
    </table>
</div>
<!-- End Table2 -->

<!-- Sejarah -->
<div class="profil">
    <h5 class="title p-2 ps-4">Sejarah</h5>
</div>

<div class="text-center px-5">
  <img src="{{ URL::asset('img/profil/profil_line.png'); }}" class="profil-line img-fluid">
</div>


<div class="container mb-3">
  <div class="row">
    <div class="col-sm">
      <div class="d-flex w-100 justify-content-between px-5 pb-2 pt-4">
        <div class="card profil border-light">
            <div class="card-body text-center">
                <h6 class="card-title">01 Januari 2000</h6>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
            </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="d-flex w-100 justify-content-between px-5 pb-2 pt-4">
        <div class="card profil border-light">
            <div class="card-body text-center">
                <h6 class="card-title">01 Januari 2000</h6>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
            </div>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="d-flex w-100 justify-content-between px-5 pb-2 pt-4">
        <div class="card profil border-light">
            <div class="card-body text-center">
                <h6 class="card-title">01 Januari 2000</h6>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Sejarah -->

<!-- End Profil -->

@endsection