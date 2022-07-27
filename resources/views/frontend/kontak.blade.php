@extends("layouts.main")

@section("container")

    @include("partials.breadcrumb")

    <!-- Kontak -->
    <div class="kontak p-2 ps-4">
        <h5 class="title">Kontak</h5>  
    </div>
    
  <div class="my-4">
    <!--Google map-->
    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
      <iframe src="https://maps.google.com/maps?q=Jambesari%20Malang&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
        style="border:0" allowfullscreen></iframe>
    </div>
<!--Google Maps-->
  </div>
    <!-- end kontak -->

    <!-- hubungi kami -->
    <div class="px-md-4 py-2 hub-kontak">
        <div class="desc">
            <h5>Hubungi Kami</h5>
            Kantor Desa Jambesari <br>
            Sumberjambe, Jambesari, Kec. Poncokusumo, <br>
            Kabupaten Malang, Jawa Timur <br>
            Telp. 0888 8888 8888 <br>
            E-mail: Namaemaildesa@gmail.com
            <br><br>
            Atau melalui form :
        </div>
    </div>

    <div class="hubungi px-4 pb-2" style="background-color: #F1ECE4">
        <form style="background-color: #F1ECE4" class="pb-2 pt-2">
            <div class="form-group">
                <label for="exampleInputName">Nama <span>*</span></label>
                <input type="text" class="form-control" id="exampleInputName" required>
              </div>
            <div class="form-group">
              <label for="exampleInputEmail">Email <span>*</span></label>
              <input type="email" class="form-control" id="exampleInputEmail" required>
            </div>
            <div class="form-group">
                <label for="exampleInputWebsite">Website (jika ada)</label>
                <input type="text" class="form-control" id="exampleInputWebsite">
            </div>
            <div class="form-group">
                <label for="exampleInputPerihal">Perihal <span>*</span></label>
                <input type="text" class="form-control" id="exampleInputPerihal" required>
            </div>
            <div class="form-group">
                <label for="FormControlPesan">Pesan <span>*</span></label>
                <textarea class="form-control" id="FormControlPesan" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn ms-2">Submit</button>
        </form>
    </div>
    <!-- end hubungi kami -->

@endsection