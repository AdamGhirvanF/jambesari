@extends ('layouts.main')

@section('container')
        <!-- BANNER -->
        <div class="banner">
            <img src="{{ URL::asset ('img/index/banner.png'); }}" alt="Banner" width="100%">
            <div class="h1 welcome text-white">Laman Resmi<br>Desa Jambesari</div>
            <a href="/layanan">
                <div class="btn link-layanan text-white text-center">
                    Lihat Semua Layanan
                    <img src="{{ URL::asset('icon/banner/Category.svg'); }}" class="ms-2">
                </div>
            </a>
        </div>
        <!-- END BANNER -->

        <!-- DESCRIPTION -->
        <div class="desc">
            <div class="container">
                Desa Jambesari adalah salah satu desa pendukung ibukota Kecamatan Poncokusumo, Kabupaten Malang dalam lingkup Provinsi Jawa Timur. Secara geografis, Desa Jambesari berada pada koordinat antara 112 44'-23" LS dan 80 04'004" BT. Desa Jambesari memiliki luas 600 Ha.
                <br>Adapun batas-batas wilayah Desa Jambesari yaitu :
                <br>- Utara : Desa Ngebruk, Kecamatan Poncokusumo
                <br>- Timur : Desa Karanganyar, Kecamatan Poncokusumo
                <br>- Selatan : Desa Ngembal, Kecamatan Wajak
                <br>- Barat : Desa Ngembal, Kecamatan Wajak
            </div>
        </div>
        <!-- END DESCRIPTION -->

        <!-- GALERI -->
        <div class="galeri px-md-5 py-4">
            <div class="h5 mb-4 section-title">Seputar Jambesari</div>
            <div class="carousel" data-flickity='{"wrapAround" : true,"autoPlay" : true }'>
                @foreach($carousel as $c)
                <div class="carousel-cell">
                    <img src="{{ URL::asset('img/galeri/'.$c->foto); }}">
                </div>
                @endforeach
            </div>
            <!-- <div id="galeri-jambesari" class="carousel slide mobile"
                data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#galeri-jambesari"
                        data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#galeri-jambesari"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#galeri-jambesari"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="{{ URL::asset('img/galeri/1.png'); }}" class="d-block
                            w-100 h-100" alt="...">
                    </div>
                    @foreach($carousel as $c)
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="{{ URL::asset('img/galeri/1.png'); }}" class="d-block
                            w-100" alt="...">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button"
                    data-bs-target="#galeri-jambesari" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    data-bs-target="#galeri-jambesari" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
        </div>
        <!-- END GALERI -->

        <!-- STATISTIK -->
        <div class="statistik px-md-5 py-4">
            <div class="h5 mb-4 section-title">Statistik Desa</div>
            <div class="container-fluid">
                <div class="row d-flex justify-content-between">
                    <div class="col col-6 col-md-4">
                        <div class="card mb-3 text-white">
                            <div class="card-body text-center">
                                <div class="icon">
                                    <img src="{{ URL::asset('icon/statistik/College.svg'); }}"
                                        alt="Pendidikan">
                                </div>
                                <div class="count h4">15</div>
                                <div class="name">Jumlah Sekolah</div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-6 col-md-4">
                        <div class="card mb-3 text-white">
                            <div class="card-body text-center">
                                <div class="icon">
                                    <img src="{{ URL::asset('icon/statistik/Village.svg'); }}"
                                        alt="RT RW">
                                </div>
                                <div class="count h4">15</div>
                                <div class="name">Jumlah RT/RW</div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card mb-3 text-white">
                            <div class="card-body text-center">
                                <div class="icon">
                                    <img src="{{ URL::asset('icon/statistik/Peoples.svg');}}"
                                        alt="Penduduk">
                                </div>
                                <div class="count h4">15</div>
                                <div class="name">Jumlah Penduduk</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END STATISTIK -->

        <!-- LEMBAGA -->
        <div class="lembaga px-md-5 py-4">
            <div class="h5 mb-4 section-title">Lembaga Desa</div>
            <div class="wrapper">
                @foreach($lembaga as $l)
                <div class="item me-2">
                    <a href="/lembaga/{{$l->id}}">
                        <img src="{{ URL::asset('img/lembaga/jumbotron/'.$l->foto_jumbotron); }}" class="p-3"
                            alt="1">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <!-- END LEMBAGA -->
@endsection