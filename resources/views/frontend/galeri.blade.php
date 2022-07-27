@extends("layouts.main")

@section("container")

    @include("partials.breadcrumb")

    <div class="container galeri p-4 my-4 mx-auto">
    <div class="row">
      <div class="column">

        <img src="{{ URL::asset('img/gallery/gal_1.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_2.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_3.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_4.png');}}">
      </div>
      <div class="column">
        <img src="{{ URL::asset('img/gallery/gal_3.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_1.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_2.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_4.png');}}">
      </div>
      <div class="column">
        <img src="{{ URL::asset('img/gallery/gal_2.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_4.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_3.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_1.png');}}">
      </div>
      <div class="column">
        <img src="{{ URL::asset('img/gallery/gal_3.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_4.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_2.png');}}">
        <img src="{{ URL::asset('img/gallery/gal_1.png');}}">
      </div>
    </div>
    </div>
    
    <!-- End Galeri -->

    <p class="text-center mb-4">Lihat selengkapnya di IG
        <a href="http://instagram.com/">@jambesari</a>
    </p>
      
@endsection