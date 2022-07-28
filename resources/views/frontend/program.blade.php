@extends ('layouts.main')
@section('container')
        @include("partials.breadcrumb")

        <div class="program py-3">
            <div class="container">
                <div class="row">
                    @foreach($data as $d)
                    <div class="col-md-4">
                        <div class="card d-flex mb-3">
                            <div class="thumbnail">   
                                <img src="{{ URL::asset('img/program/'. $d->foto);}}"  class="card-img-top" alt="Berita 1">
                            </div>
                            <div class="card-body">
                                <div class="title mb-3">{{$d->title}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- END BUMDES -->
        <!-- anjay -->
@endsection