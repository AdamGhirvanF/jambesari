@extends("layouts.main")

@section("container")

        @include("partials.breadcrumb")

        <div class="struktur">
            <div class="container mb-3">
                <table class="table table-bordered table-hover">
                    <tbody>
                      <tr>
                        <td>Nama</td>
                        <td>lorem</td>
                      </tr>
                      <tr>
                        <td>Jabatan</td>
                        <td>lorem</td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>lorem</td>
                      </tr>
                      <tr>
                        <td>Telp.</td>
                        <td>lorem</td>
                      </tr>
                      <tr>
                        <td>Website</td>
                        <td>lorem</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>lorem</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="foto text-center">
                <img class="img-fluid p-4" src="{{ URL::asset('img/struktur/struktur.png');}}" alt="Struktur">
            </div>
        </div>

@endsection