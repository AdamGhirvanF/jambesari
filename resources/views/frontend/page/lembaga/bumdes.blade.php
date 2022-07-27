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
                                href="#">Lembaga Desa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">BUMDes</li>
                    </ol>
                </nav>
            </div>
            <!-- End Breadcrumb -->

        <div class="h3 page-title px-3 px-md-5 py-3">Lembaga Desa</div>

        <div class="bumdes">
            <div class="background">
                <img src="{{ URL::asset('img/lembaga/bumdes/background.png')}}"
                    alt="BUMDes" width="100%" class="my-3">
            </div>
            <div class="container">
                <div class="h2 text-center my-3">Badan Usaha Milik Desa</div>
                <div class="container">
                    <div class="row d-flex mb-3">
                        <div class="col col-md-3">
                            <img src="{{ URL::asset('img/index/lembaga/bumdes.png')}}"
                                class="logo mb-3">
                        </div>
                        <div class="col content">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Sapiente, veritatis. Perspiciatis itaque dolore
                            adipisci
                            aliquam, voluptates nemo nisi ratione ea suscipit
                            esse
                            quam odit culpa dolor ut soluta placeat nihil! Lorem
                            ipsum dolor sit amet consectetur adipisicing elit.
                            Quibusdam in laboriosam ipsam numquam delectus nihil
                            at
                            nostrum rerum eum illum facilis, architecto ut
                            laborum
                            quasi. Esse rem quibusdam perferendis ab!
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Eveniet cupiditate provident velit voluptates
                            maiores eligendi, doloribus quaerat ipsa molestias,
                            debitis dolores fugit placeat sapiente dolorem unde
                            eius
                            voluptate repudiandae ipsum!
                        </div>
                    </div>
                </div>
                <h2 class="p-3">Program</h2>

                <!-- to-do accordion -->
                <div class="accordion px-3 mb-4">
                    <button class="item p-3 mt-3 d-flex
                        justify-content-between">Pengenalan
                        Internet
                        <div class="icon">
                            <img src="{{ URL::asset('icon/lembaga/Arrow.svg')}}">
                        </div>
                    </button>
                    <div class="panel px-3 pb-3">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Minus, sapiente. Explicabo
                        corporis reprehenderit tenetur expedita labore nobis
                        animi
                        magni optio, commodi iure recusandae? Ipsam quibusdam
                        nostrum sequi dolorem cupiditate explicabo?</div>
                    <button class="item p-3 mt-3 d-flex
                        justify-content-between">Pelatihan
                        Pembuatan Bricket
                        <div class="icon">
                            <img src="{{ URL::asset('icon/lembaga/Arrow.svg')}}">
                        </div>
                    </button>
                    <div class="panel px-3 pb-3">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Minus, sapiente. Explicabo
                        corporis reprehenderit tenetur expedita labore nobis
                        animi
                        magni optio, commodi iure recusandae? Ipsam quibusdam
                        nostrum sequi dolorem cupiditate explicabo?
                        <br>
                        <div class="mt-4 d-flex justify-content-between">
                            <img src="{{ URL::asset('img/lembaga/bumdes/1.png')}}"
                                alt="1"
                                width="30%"><img
                                src="{{ URL::asset('img/lembaga/bumdes/2.png')}}" alt="2"
                                width="30%"><img
                                src="{{ URL::asset('img/lembaga/bumdes/3.png')}}" alt="3"
                                width="30%"></div>
                        <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        At
                        voluptatum necessitatibus pariatur repudiandae
                        consequuntur
                        placeat quis, aperiam ab porro labore perferendis,
                        libero,
                        quidem sed. Odio ut voluptate non maiores repellat.
                    </div>
                    <button class="item p-3 mt-3 d-flex
                        justify-content-between">Pengajian
                        Wirausaha
                        <div class="icon">
                            <img src="{{ URL::asset('icon/lembaga/Arrow.svg')}}">
                        </div>
                    </button>
                    <div class="panel px-3 pb-3">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Minus, sapiente. Explicabo
                        corporis reprehenderit tenetur expedita labore nobis
                        animi
                        magni optio, commodi iure recusandae? Ipsam quibusdam
                        nostrum sequi dolorem cupiditate explicabo?</div>
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