@extends("layouts.main")

@section("container")

    @include("partials.breadcrumb")

    <div class="cek-data ps-4">
        <h5 class="title pt-2">Cek Data Kependudukan</h5>
        <p class="text-start">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna Lorem ipsum dolor sit amet.</p>
    </div>

    <div class="form-layanan p-4">
      <div class="forms">
        <form action="/cek-nik-store" method="post">
          @csrf
            <input class="form-control border-form" type="text" name="nik" placeholder="Masukkan NIK atau Nama">
            <div class="text-center">
              <button type="submit" class="btn btn-forms mt-3">Submit</button>
              <a href="/layanan" class="btn bg-white btn-forms mt-3 reset" onclick="resetInput()" style="color: #A3AAD1">Reset</a>
            </div>
        </form>
      </div>
    </div>
    <!-- End Layanan -->

    <!-- Table -->
    @if(isset($warga))
        <div class="table-responsive text-center">
            <table class="table table-bordered table-hover">
                <thead class="thead">
                    <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NIK</th>
                    <th scope="col">NO. KK</th>
                    <th scope="col">NMKK</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">JK</th>
                    <th scope="col">TMP_LAHIR</th>
                    <th scope="col">TGL_LAHIR</th>
                    <th scope="col">GDR</th>
                    <th scope="col">AGAMA</th>
                    <th scope="col">15543</th>
                    <th scope="col">ST_KAWIN</th>
                    <th scope="col">SHDRT</th>
                    <th scope="col">PDDKN</th>
                    <th scope="col">PRKJAAN</th>
                    <th scope="col">IBU</th>
                    <th scope="col">AYAH</th>
                    <th scope="col">NO_HP</th>
                    <th scope="col">DUSUN</th>
                    <th scope="col">RT</th>
                    <th scope="col">RW</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($warga as $key => $w)
                    <tr>
                      <td>{{$key+=1}}</td>
                      <td>{{substr($w->nik, 0, 8)}}********</td>
                      <td>{{substr($w->nokk, 0, 8)}}********</td>
                      <td>{{$w->nmkk}}</td>
                      <td>{{$w->nama}}</td>
                      <td>{{$w->jk}}</td>
                      <td>{{$w->tmp_lahir}}</td>
                      <td>{{$w->tgl_lahir}}</td>
                      <td>{{$w->gdr}}</td>
                      <td>{{$w->agama}}</td>
                      <td>{{$w->satulimalima}}</td>
                      <td>{{$w->st_kawin}}</td>
                      <td>{{$w->shdrt}}</td>
                      <td>{{$w->pddkn}}</td>
                      <td>{{$w->pkrjaan}}</td>
                      <td>{{$w->ibu}}</td>
                      <td>{{$w->ayah}}</td>
                      <td>{{$w->no_hp}}</td>
                      <td>{{$w->dusun}}</td>
                      <td>{{$w->rt}}</td>
                      <td>{{$w->rw}}</td>
                    </tr>
                    @endforeach
                  
                </tbody>
            </table>
        </div>
        @endif
    <!-- End Table -->
    
    <!-- Pengajuan -->
    <div class="pengajuan mt-3 pt-3 pb-3 text-center">
        <h5>Pengajuan Pembuatan / Perbaikan</h5>
    <!-- CARD -->
          <div class="container">
            <div class="row">
              <div class="col-6 col-md-2 my-2">
                <div class="card">
                  <div class="card-body">
                    <div class="stat-icon">
                      <img src="{{ URL::asset('icon/pengajuan/KTP.png');}}" alt="KTP" width="50">
                    </div>
                    <div class="pengajuan-name mt-2">KTP</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-2 my-2">
                <div class="card">
                  <div class="card-body">
                    <div class="stat-icon">
                      <img src="{{ URL::asset('icon/pengajuan/KK.png');}}" alt="KK" width="50">
                    </div>
                    <div class="pengajuan-name mt-2">KK</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-2 my-2">
                <div class="card">
                  <div class="card-body">
                    <div class="stat-icon">
                      <img src="{{ URL::asset('icon/pengajuan/KTP.png');}}" alt="KIA" width="50">
                    </div>
                  <div class="pengajuan-name mt-2">KIA</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-2 my-2">
                <div class="card">
                  <div class="card-body">
                    <div class="stat-icon">
                      <img src="{{ URL::asset('icon/pengajuan/KK.png');}}" alt="AKTA KELAHIRAN" width="50">
                    </div>
                  <div class="pengajuan-name mt-2 ">AKTA LAHIR</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-2 my-2">
                <div class="card">
                  <div class="card-body">
                    <div class="stat-icon">
                      <img src="{{ URL::asset('icon/pengajuan/KTP.png');}}" alt="AKTA KEMATIAN" width="50">
                  </div>
                  <div class="pengajuan-name mt-2">AKTA KEMATIAN</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-2 my-2">
                <div class="card">
                  <div class="card-body">
                    <div class="stat-icon">
                      <img src="{{ URL::asset('icon/pengajuan/KK.png');}}" alt="SURAT UMUM" width="50">
                  </div>
                  <div class="pengajuan-name mt-2">SURAT UMUM</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <!-- END CARD -->
    </div>
    <!-- End Pengajuan -->


    <script>
        function resetInput() {
        document.getElementsByClassName("form-control")[0].value = ""
        }
    </script>
@endsection