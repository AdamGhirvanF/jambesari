@extends("layouts.main")

@section("container")

@include("partials.breadcrumb")

<div>
    <h5 class="title text-center mx-4 mt-4">Daftar Kepala Desa Jambesari</h5>
</div>

<!-- Table -->
<div class="table m-4 text-center">
    <table class="kades table table-striped-columns table-bordered table-hover">
        <thead class="thead">
            <tr>
            <th scope="col">NO.</th>
            <th scope="col">Nama Kepala Desa</th>
            <th scope="col">Tahun Menjabat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Kerto</td>
            <td>Masa Penjajahan Belanda</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Karim</td>
            <td>1939-1942</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Sabin Pawironoto</td>
            <td>1942-1987</td>
            </tr>
            <tr>
            <th scope="row">4</th>
            <td>Drs. M. Yahya</td>
            <td>1987-2003</td>
            </tr>
            <tr>
            <th scope="row">5</th>
            <td>Asmad</td>
            <td>2003-2013</td>
            </tr>
            <tr>
            <th scope="row">6</th>
            <td>Imam</td>
            <td>2013-sekarang</td>
            </tr>
        </tbody>
    </table>
</div>
<!-- End Table -->

<div>
    <h5 class="title text-center">Data Wilayah Administrasi Desa Jambesari</h5>
</div>
<!-- Table2 -->

<div class="table m-4 text-center">
    <table class="wilayah table table-striped-columns table-bordered table-hover">
        <tbody>
            <tr>
            <th class="cat">Kabupaten (code)</th>
            <td>Kabupaten Malang (07)</td>
            </tr>
            <tr>
            <th class="cat">Kecamatan (code)</th>
            <td>Kecamatan Poncokusumo (07)</td>
            </tr>
            <tr>
            <th class="cat">Desa (code)</th>
            <td>Desa Jambesari (2008)</td>
            </tr>
            <tr>
            <th class="cat">Jumlah RT</th>
            <td>28</td>
            </tr>
            <tr>
            <th class="cat">Jumlah RW</th>
            <td>6</td>
            </tr>
            <tr>
            <th class="cat">Jumlah Dusun</th>
            <td>3</td>
            </tr>
            <tr>
            <th class="cat">Jumlah Penduduk</th>
            <td>7049</td>
            </tr>   
        </tbody>
    </table>
</div>
<!-- End Table2 -->

<!-- Sejarah -->
<div class="profil">
    <h5 class="title p-2 ps-4">Sejarah</h5>
</div>

{{-- <div class="text-center px-5">
  <img src="{{ URL::asset('img/profil/profil_line.png'); }}" class="profil-line img-fluid">
</div> --}}


<div class="d-inline-flex justify-content-center sejarah m-4">
  <p class="p-4">
    Desa Jambesari awalnya merupakan lahan hasil “babat alas” atau pembukaan lahan baru oleh Sarimah dan Sariami. 
    Penamaan desa Jambesari berasal dari pohon “Jambe” yang banyak tumbuh disekitar desa ini. 
    Kepala desa yang pertama kali menjabat bernama Mbah Kerto, yang ditunjuk masyarakat setempat untuk menjadi pemimpin desa
  </p>
</div>


{{-- <div class="container mb-3">
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
</div> --}}

<!-- End Sejarah -->

<!-- End Profil -->

@endsection