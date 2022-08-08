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
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
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
                <div class="item">
                    <a href="/lembaga/{{$l->id}}">
                        <img src="{{ URL::asset('img/lembaga/logo/'.$l->logo); }}" class="p-3"
                            alt="1">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <!-- END LEMBAGA -->
@endsection