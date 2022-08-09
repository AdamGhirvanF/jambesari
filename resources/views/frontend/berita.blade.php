@extends('layouts.main')

@section('container')
        
        @include("partials.breadcrumb")

        <div class="berita py-3">
            <div class="container">
                <div class="row">
                    @foreach($data as $d)
                    <div class="col-md-4">
                        <div class="card d-flex mb-3">
                            <div class="thumbnail">
                                <img src="{{ URL::asset('img/berita/'. $d->foto);}}" class="card-img-top" alt="Berita 1">
                            </div>
                            <div class="card-body">
                                <div class="date mb-3">{{ \Carbon\Carbon::parse($d->created_at)->format('l, d F Y') }}</div>
                                <a href="/berita/{{$d->id}}" class="stretched-link title">{{$d->judul}}</a>
                                <div class="content mb-3">{{ $d->isi }}</div>
                                <div class="next">
                                    <a href="/berita/{{$d->id}}" class="stretched-link">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- END BUMDES -->
@endsection