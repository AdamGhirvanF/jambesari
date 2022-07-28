@extends("layouts.main")

@section("container")

    @include("partials.breadcrumb")

    <div class="container galeri p-4 my-4 mx-auto">
    <div class="row">
    <div class="column">
      @for($i = 0; $i < count($data); $i += 4)
        <img src="{{ URL::asset('img/galeri/'. $data[$i]->foto);}}">
      @endfor
    </div>

    <div class="column">
      @for($i = 1; $i < count($data); $i += 4)
        <img src="{{ URL::asset('img/galeri/'. $data[$i]->foto);}}">
      @endfor
    </div>

    <div class="column">
    @for($i = 2; $i < count($data); $i += 4)
        <img src="{{ URL::asset('img/galeri/'. $data[$i]->foto);}}">
      @endfor
    </div>

    <div class="column">
    @for($i = 3; $i < count($data); $i += 4)
        <img src="{{ URL::asset('img/galeri/'. $data[$i]->foto);}}">
      @endfor
    </div>

    </div>
    </div>
    
    <!-- End Galeri -->

    <p class="text-center mb-4">Lihat selengkapnya di IG
        <a href="http://instagram.com/">@jambesari</a>
    </p>
      
@endsection