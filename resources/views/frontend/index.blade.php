<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desa Jambesari</title>

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}">
        <!-- CSS Flickity -->
        <link rel="stylesheet" href="{{ URL::asset('css/flickity.min.css');}}">
        <!-- Custom Style -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
    </head>

    <body>
        <!-- HEADER -->
        <div class="header d-flex justify-content-between">
            <div class="menu">
                <a href="#navbar" class="text-white p-4"
                    data-bs-toggle="offcanvas">
                    <img src="{{ URL::asset('icon/navbar/Hamburger.svg'); }}" alt="">
                    Menu
                </a>
                <div class="offcanvas offcanvas-start" tabindex="-1"
                    id="navbar">
                    <div class="offcanvas-header justify-content-end">
                        <button type="button" class="btn-close"
                            data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="nav">
                            <div class="nav-link pb-2">
                                <img src="{{ URL::asset('icon/navbar/Profil.svg'); }}"
                                    width="18px" class="me-2">
                                <a href="/profil.html">Profil Desa</a>
                            </div>
                            <div class="nav-link pb-2">
                                <img src="{{ URL::asset('icon/navbar/Struktur.svg'); }}"
                                    width="18px" class="me-2">
                                <a href="/struktur.html">Struktur Desa</a>
                            </div>
                            <div class="nav-link pb-2">
                                <img src="{{ URL::asset('icon/navbar/Program.svg'); }}"
                                    width="18px" class="me-2">
                                <a href="/program.html">Program</a>
                            </div>
                            <div class="nav-link pb-2">
                                <img src="{{ URL::asset('icon/navbar/Berita.svg'); }}"
                                    width="18px" class="me-2">
                                <a href="/berita.html">Berita</a>
                            </div>
                            <div class="nav-link pb-2">
                                <img src="{{ URL::asset('icon/navbar/Galeri.svg'); }}"
                                    width="18px" class="me-2">
                                <a href="/galeri.html">Galeri</a>
                            </div>
                            <div class="nav-link pb-2">
                                <img src="{{ URL::asset('icon/navbar/Layanan.svg'); }}"
                                    width="18px" class="me-2">
                                <a href="/layanan.html">Layanan</a>
                            </div>
                            <div class="nav-link pb-2">
                                <img src="{{ URL::asset('icon/navbar/Kontak.svg'); }}"
                                    width="18px" class="me-2">
                                <a href="/kontak.html">Kontak</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="logo bg-white p-3">
                <a href="#"><img src="{{ URL::asset('img/logo-header.png'); }}" alt="Logo"></a>
            </div>
        </div>
        <!-- END HEADER -->

        <!-- BANNER -->
        <div class="banner">
            <img src="{{ URL::asset ('img/index/banner.png'); }}" alt="Banner" width="100%">
            <div class="h1 welcome text-white">Laman Resmi<br>Desa Jambesari</div>
            <a href="/layanan.html">
                <div class="btn link-layanan text-white text-center">
                    Lihat Semua Layanan
                    <img src="{{ URL::asset('icon/banner/Category.svg'); }} class="ms-2">
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
            <div class="carousel web" data-flickity='{"wrapAround" : true,"autoPlay" : true }'>
                <div class="carousel-cell">
                    <img src="{{ URL::asset('img/index/galeri/1.png'); }}" alt="" width="100%">
                </div>
                <div class="carousel-cell">
                    <img src="{{ URL::asset('img/index/galeri/2.png'); }}" alt="" width="100%">
                </div>
                <div class="carousel-cell">
                    <img src="{{ URL::asset('img/index/galeri/1.png'); }}" alt="" width="100%">
                </div>
                <div class="carousel-cell">
                    <img src="{{ URL::asset('img/index/galeri/2.png'); }}" alt="" width="100%">
                </div>
                <div class="carousel-cell">
                    <img src="{{ URL::asset('img/index/galeri/1.png'); }}" alt="" width="100%">
                </div>
                <div class="carousel-cell">
                    <img src="{{ URL::asset('img/index/galeri/2.png'); }}" alt="" width="100%">
                </div>
            </div>
            <div id="galeri-jambesari" class="carousel slide mobile"
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
                        <img src="{{ URL::asset('img/index/galeri/1.png'); }}" class="d-block
                            w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('img/index/galeri/2.png'); }}" class="d-block
                            w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('img/index/galeri/1.png'); }}" class="d-block
                            w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('img/index/galeri/2.png'); }}" class="d-block
                            w-100" alt="...">
                    </div>
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
                <div class="item me-2">
                    <a href="/page/lembaga/bumdes.html">
                        <img src="{{ URL::asset('img/index/lembaga/bumdes.png'); }}" class="p-3"
                            alt="1">
                    </a>
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="1">
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="2">
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="3">
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="4">
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="1">
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="2">
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="3">
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="4">
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="1">
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="2">
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="3">
                </div>
                <div class="item me-2">
                    <img src="{{ URL::asset('img/index/lembaga/1.png'); }}" class="p-3" alt="4">
                </div>
            </div>
        </div>
        <!-- END LEMBAGA -->

        <!-- FOOTER -->
        <footer class="text-white p-4">
            <div class="d-flex justify-content-between">
                <div class="detail">
                    <img src="{{ URL::asset('img/footer/logo-web.png'); }}" alt="Desa
                        Jambesari" class="ps-3">
                    <div class="address mt-3">
                        Krajan, Jambesari, Kec. Jambesari Darus Sholah, <br>Kabupaten
                        Bondowoso, Jawa Timur 68263
                    </div>
                </div>
                <div class="my-4 social-media d-flex">
                    <h4>Media Center</h4>
                    <div id="facebook">
                        <img src="{{ URL::asset('icon/footer/facebook.svg'); }}" width="15px"
                            class="me-2">
                        <a href="#">Facebook</a>
                    </div>
                    <div id="twitter">
                        <img src="{{ URL::asset('icon/footer/twitter.svg'); }}" width="15px"
                            class="me-2">
                        <a href="#">Twitter</a>
                    </div>
                    <div id="instagram">
                        <img src="{{ URL::asset('icon/footer/instagram.svg'); }}" width="15px"
                            class="me-2">
                        <a href="#">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                Copyright © 2020. KKNFILKOMUB. All rights reserved.
            </div>
        </footer>
        <!-- END FOOTER -->

        <!-- JS Bootstrap -->
        <script src="{{ URL::asset('js/bootstrap.min.js');}}"></script>
        <!-- JS Flickity -->
        <script src="{{ URL::asset('js/flickity.min.js');}}"></script>
    </body>

</html>