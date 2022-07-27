@extends('layouts.main')

@section('container')
        <!-- BUMDES -->

        <!-- Breadcrumb -->
        <div class="path mt-3 px-3 px-md-5">
            <nav style="--bs-breadcrumb-divider: '>';"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->

        <div class="h3 page-title px-3 px-md-5 py-3">Berita</div>

        <div class="berita py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card d-flex mb-3">
                            <div class="thumbnail">
                                <img src="{{ URL::asset('img/berita/thumbnail/1.png'); }}" alt="Berita 1">
                            </div>
                            <div class="card-body">
                                <div class="date mb-3">Senin, 22 Juni 2022</div>
                                <a href="/berita/one" class="stretched-link title">Ada Apa
                                    Dengan Cinta?</a>
                                <div class="content mb-3">Lorem ipsum dolor sit,
                                    amet
                                    consectetur adipisicing elit. Omnis eius
                                    voluptatibus deserunt iusto praesentium
                                    neque perferendis blanditiis vero maxime
                                    minima nihil tempore, a excepturi, culpa
                                    repudiandae dolores assumenda suscipit
                                    officiis?</div>
                                <div class="next">
                                    <a href="/berita/one" class="stretched-link">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="card d-flex mb-3">
                            <div class="thumbnail">
                                <img src="{{ URL::asset('img/berita/thumbnail/1.png'); }}" alt="Berita 1">
                            </div>
                            <div class="card-body">
                                <div class="date mb-3">Senin, 22 Juni 2022</div>
                                <a href="/berita/one" class="stretched-link title">Ada Apa
                                    Dengan Cinta?</a>
                                <div class="content mb-3">Lorem ipsum dolor sit,
                                    amet
                                    consectetur adipisicing elit. Omnis eius
                                    voluptatibus deserunt iusto praesentium
                                    neque perferendis blanditiis vero maxime
                                    minima nihil tempore, a excepturi, culpa
                                    repudiandae dolores assumenda suscipit
                                    officiis?</div>
                                <div class="next">
                                    <a href="/berita/one" class="stretched-link">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card d-flex mb-3">
                            <div class="thumbnail">
                                <img src="{{ URL::asset('img/berita/thumbnail/1.png'); }}" alt="Berita 1">
                            </div>
                            <div class="card-body">
                                <div class="date mb-3">Senin, 22 Juni 2022</div>
                                <a href="/berita/one" class="stretched-link title">Ada Apa
                                    Dengan Cinta?</a>
                                <div class="content mb-3">Lorem ipsum dolor sit,
                                    amet
                                    consectetur adipisicing elit. Omnis eius
                                    voluptatibus deserunt iusto praesentium
                                    neque perferendis blanditiis vero maxime
                                    minima nihil tempore, a excepturi, culpa
                                    repudiandae dolores assumenda suscipit
                                    officiis?</div>
                                <div class="next">
                                    <a href="/berita/one" class="stretched-link">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div></div>
                    <div class="col-md-4">
                        <div class="card d-flex mb-3">
                            <div class="thumbnail">
                                <img src="{{ URL::asset('img/berita/thumbnail/1.png'); }}" alt="Berita 1">
                            </div>
                            <div class="card-body">
                                <div class="date mb-3">Senin, 22 Juni 2022</div>
                                <a href="/berita/one" class="stretched-link title">Ada Apa
                                    Dengan Cinta?</a>
                                <div class="content mb-3">Lorem ipsum dolor sit,
                                    amet
                                    consectetur adipisicing elit. Omnis eius
                                    voluptatibus deserunt iusto praesentium
                                    neque perferendis blanditiis vero maxime
                                    minima nihil tempore, a excepturi, culpa
                                    repudiandae dolores assumenda suscipit
                                    officiis?</div>
                                <div class="next">
                                    <a href="/berita/one" class="stretched-link">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div></div>
                    <div class="col-md-4">
                        <div class="card d-flex mb-3">
                            <div class="thumbnail">
                                <img src="{{ URL::asset('img/berita/thumbnail/1.png'); }}" alt="Berita 1">
                            </div>
                            <div class="card-body">
                                <div class="date mb-3">Senin, 22 Juni 2022</div>
                                <a href="/berita/one" class="stretched-link title">Ada Apa
                                    Dengan Cinta?</a>
                                <div class="content mb-3">Lorem ipsum dolor sit,
                                    amet
                                    consectetur adipisicing elit. Omnis eius
                                    voluptatibus deserunt iusto praesentium
                                    neque perferendis blanditiis vero maxime
                                    minima nihil tempore, a excepturi, culpa
                                    repudiandae dolores assumenda suscipit
                                    officiis?</div>
                                <div class="next">
                                    <a href="/berita/one" class="stretched-link">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div></div>
                    <div class="col-md-4">
                        <div class="card d-flex mb-3">
                            <div class="thumbnail">
                                <img src="{{ URL::asset('img/berita/thumbnail/1.png'); }}" alt="Berita 1">
                            </div>
                            <div class="card-body">
                                <div class="date mb-3">Senin, 22 Juni 2022</div>
                                <a href="/berita/one" class="stretched-link title">Ada Apa
                                    Dengan Cinta?</a>
                                <div class="content mb-3">Lorem ipsum dolor sit,
                                    amet
                                    consectetur adipisicing elit. Omnis eius
                                    voluptatibus deserunt iusto praesentium
                                    neque perferendis blanditiis vero maxime
                                    minima nihil tempore, a excepturi, culpa
                                    repudiandae dolores assumenda suscipit
                                    officiis?</div>
                                <div class="next">
                                    <a href="/berita/one" class="stretched-link">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div></div>
                </div>
            </div>
        </div>
        <!-- END BUMDES -->
@endsection