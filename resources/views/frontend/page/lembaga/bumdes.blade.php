@extends ('layouts.main')
@section('container')
        <!-- BUMDES -->

            <!-- Breadcrumb -->
            <div class="path mt-3 px-3 px-md-5">
                <nav style="--bs-breadcrumb-divider: '>';"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a
                                href="/#lembaga">Lembaga Desa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $data->nama }}</li>
                    </ol>
                </nav>
            </div>
            <!-- End Breadcrumb -->

        <div class="h3 page-title px-3 px-md-5 py-3">Lembaga Desa</div>

        <div class="bumdes">
            <div class="background">
                <img src="{{ URL::asset('img/lembaga/jumbotron/'.$data->foto_jumbotron);}}"
                    alt="BUMDes" width="100%" class="my-3">
            </div>
            <div class="container">
                <div class="h2 text-center my-3">{{ $data-> nama}}</div>
                <div class="container">
                    <div class="row d-flex mb-3">
                        <div class="col col-md-3">
                            <img src="{{ URL::asset('img/lembaga/logo/'.$data->logo);}}"
                                class="logo mb-3">
                        </div>
                        <div class="col content">
                            {{$data->deskripsi}}
                        </div>
                    </div>
                </div>
                <h2 class="p-3">Program</h2>

                <!-- to-do accordion -->
                <div class="accordion px-3 mb-4">
                    @foreach($data2 as $pl)
                    <button class="item p-3 mt-3 d-flex
                        justify-content-between">{{$pl->title}}
                        <div class="icon">
                            <img src="{{ URL::asset('icon/lembaga/Arrow.svg')}}">
                        </div>
                    </button>
                    <div class="panel px-3 pb-3">{{$pl->description}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- END BUMDES -->
        <script>
            // accordion item
            let acc = document.getElementsByClassName("item")

            for (let i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active")

                    let panel = this.nextElementSibling
                    let icon = this.children

                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                        panel.style.color = "#F1ECE4"
                        icon[0].style.transform = "rotate(0deg)"
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                        panel.style.color = "#000"
                        icon[0].style.transform = "rotate(90deg)"
                    } 
                }) 
            }
        </script>
@endsection