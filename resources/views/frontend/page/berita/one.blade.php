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
                    <li class="breadcrumb-item active" aria-current="page">One</li>
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
                <div class="date my-2 my-md-3">Selasa, 24 Maret 2022</div>
                <div class="title mb-2">Adaptasi Kebiasaan Baru di Luar Ruangan Selama Pandemi</div>
                <div class="author mb-3">
                    <img src="{{ URL::asset('icon/berita/Author.svg');}} ">
                    Ditulis oleh Novan Immanuel
                </div>
                <div class="content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis officia, aspernatur esse provident iusto aliquam velit illum veritatis animi omnis nemo harum natus molestiae, nostrum inventore voluptates eveniet! Deserunt, quo?
                    Sit sed hic vel ipsa, voluptatum voluptatibus consequuntur blanditiis temporibus velit numquam placeat deleniti a deserunt suscipit minima, quia aliquid repudiandae? Maiores, eaque. Corrupti nemo maiores alias repellat tenetur asperiores.
                    Modi maxime eos, optio dolorum expedita obcaecati vel. Magni placeat harum doloremque, quia temporibus sed doloribus architecto maiores assumenda. Expedita hic, adipisci facilis porro in facere ab repudiandae nesciunt qui?
                    Molestiae eaque ducimus fugit libero corrupti dolores quos consectetur officiis quas, tempora repellendus quisquam molestias et, natus nesciunt quis voluptatibus quod. Asperiores praesentium ipsam veritatis dignissimos quae ea dolores doloribus.
                    Cupiditate quia autem sunt ipsa distinctio dolor, quo ipsum nam. Voluptatem dignissimos eum eos iure, consectetur eaque placeat natus obcaecati beatae culpa inventore delectus unde, quia exercitationem cupiditate libero! Atque?
                    Dicta exercitationem ducimus quidem labore tenetur recusandae consectetur nulla itaque illo tempora unde inventore laborum esse aperiam, perspiciatis eligendi deleniti aspernatur dolorum doloribus iusto ratione temporibus est possimus! Dignissimos, dolor.
                    Temporibus cupiditate similique accusantium molestias, nulla doloribus deserunt sapiente quidem officia debitis culpa voluptas, rem molestiae error amet, laboriosam a assumenda cumque at labore eius itaque unde alias ab? Fugiat.
                    Quos, provident neque? Officia ipsa magni modi officiis neque saepe mollitia ea nobis doloremque, nisi perferendis magnam, dicta libero, earum sint? Earum dicta asperiores in iste dolorem vero tempora modi.
                    Sapiente recusandae id est quo ad maiores blanditiis, fuga excepturi, delectus quisquam ullam facere, cupiditate maxime a temporibus veniam vel nisi eligendi? Consequuntur, molestiae temporibus nobis enim minima error fuga.
                    Ratione aliquam consequatur blanditiis labore, excepturi veritatis perspiciatis mollitia laboriosam suscipit non, esse voluptatem! Id, minus asperiores? Eos, sapiente maiores, non suscipit cupiditate veniam corporis quam, provident quod molestiae quo!
                    Vero reiciendis, eos nihil maiores voluptas illo placeat adipisci cupiditate nisi inventore, voluptatibus veritatis quam aut voluptatem eaque ipsa ullam quod, impedit error corrupti. Tempore qui nisi repellendus facere facilis!
                    Repellendus delectus deserunt natus aspernatur, reprehenderit tempora molestias eaque corporis recusandae aperiam dolore nisi rerum aut, excepturi dicta nostrum. Fuga, accusamus nesciunt? Suscipit, odio? Odit cumque dolorem nostrum commodi harum.
                </div>
                <hr class="my-3" data-content="Baca berita lainnya">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card d-flex mb-3">
                            <div class="thumbnail">
                                <img src="{{ URL::asset('img/berita/thumbnail/1.png'); }}" alt="Berita 1">
                            </div>
                            <div class="card-body d-flex">
                                <a href="berita/one" class="stretched-link title">Ada Apa
                                    Dengan Cinta?</a>
                                <div class="date">Senin, 22 Juni 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card d-flex mb-3">
                            <div class="thumbnail">
                                <img src="{{ URL::asset('img/berita/thumbnail/1.png'); }}" alt="Berita 1">
                            </div>
                            <div class="card-body d-flex">
                                <a href="berita/one" class="stretched-link title">Ada Apa
                                    Dengan Cinta?</a>
                                <div class="date">Senin, 22 Juni 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card d-flex mb-3">
                            <div class="thumbnail">
                                <img src="{{ URL::asset('img/berita/thumbnail/1.png'); }}" alt="Berita 1">
                            </div>
                            <div class="card-body d-flex">
                                <a href="berita/one" class="stretched-link title">Ada Apa
                                    Dengan Cinta?</a>
                                <div class="date">Senin, 22 Juni 2022</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END BUMDES -->
@endsection