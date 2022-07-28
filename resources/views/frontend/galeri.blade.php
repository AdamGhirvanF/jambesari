@extends("layouts.main")

@section("container")

    @include("partials.breadcrumb")

    <div class="container galeri p-4 my-4 mx-auto">
    <div class="row">
    @foreach($data as $d)
      <div class="column">
        <img src="{{ URL::asset('img/galeri/'. $d->foto);}}">
      </div>
    @endforeach
    </div>
    </div>
    
    <!-- End Galeri -->

    <p class="text-center mb-4">Lihat selengkapnya di IG
        <a href="http://instagram.com/">@jambesari</a>
    </p>
      
@endsection