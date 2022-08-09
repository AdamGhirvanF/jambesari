@extends ('layouts.main')

@section('container')
        <!-- BUMDES -->
        <!-- Breadcrumb -->
        <div class="path mt-3 px-3 px-md-5">
            <nav style="--bs-breadcrumb-divider: '>';"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/index">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a
                            href="/berita">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$data->judul}}</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->

        <div class="h3 page-title px-3 px-md-5 py-3">Berita</div>

        <div class="detail-berita pb-3">
            <div class="background">
                <img src="{{ URL::asset('img/berita/jumbo/1.png');}}"
                    alt="BUMDes" width="100%" class="my-3">
            </div>
            <div class="container">
                <div class="date my-2 my-md-3">{{Carbon\Carbon::parse($data->created_at)->format('l, d F Y')}}</div>
                <div class="title mb-2">{{$data->judul}}</div>
                <div class="content">{{$data->isi}}</div>
                <hr class="my-3" data-content="Baca berita lainnya">
                <div class="row">
                    @foreach($data2 as $d)
                    <div class="col-md-4">
                        <div class="card d-flex mb-3">
                            <div class="thumbnail">
                                <img src="{{ URL::asset('img/berita/'.$d->foto); }}" alt="Berita 1">
                            </div>
                            <div class="card-body d-flex">
                                <a href="{{$d->id}}" class="stretched-link title">{{$d->judul}}</a>
                                <div class="date">{{Carbon\Carbon::parse($d->created_at)->format('l, d F Y')}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- END BUMDES -->
@endsection