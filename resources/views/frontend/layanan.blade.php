@extends("layouts.main")

@section("container")

    @include("partials.breadcrumb")

    <!-- Layanan -->
    <div class="layanan">
        <h5 class="title p-2 ps-4">Layanan</h5>
    </div>

    <div class="cek-data ps-4">
        <h5 class="title pt-2">Cek Data Kependudukan</h5>
        <p class="text-start">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna Lorem ipsum dolor sit amet.</p>
    </div>

    <div class="form-layanan p-4">
      <div class="forms">
        <form>
            <input class="form-control border-form" type="text" placeholder="Masukkan NIK atau Nama">
        </form>

        <button type="submit" class="btn btn-forms mt-3">Submit</button>
        <button type="submit" class="btn bg-white btn-forms mt-3 reset" onclick="resetInput()">Reset</button>
      </div>
    </div>
    <!-- End Layanan -->

    <!-- Table -->
        <div class="table-responsive text-center">
            <table class="table  table-bordered table-hover">
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
                    <tr>
                    <th scope="row">1</th>
                    <td>NIK</td>
                    <td>NO. KK</td>
                    <td>NMKK</td>
                    <td>NAMA</td>
                    <td>JK</td>
                    <td>TMP_LAHIR</td>
                    <td>TGL_LAHI</td>
                    <td>GDR</td>
                    <td>AGAMA</td>
                    <td>15543</td>
                    <td>ST_KAWIN</td>
                    <td>SHDRT</td>
                    <td>PDDKN</td>
                    <td>PRKJAAN</td>
                    <td>IBU</td>
                    <td>AYAH</td>
                    <td>NO_HP</td>
                    <td>DUSUN</td>
                    <td>RT</td>
                    <td>RW</td>
                    </tr>
                <!-- EXAMPLE -->
                    <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                <!-- END EXAMPLE -->
                </tbody>
            </table>
        </div>
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