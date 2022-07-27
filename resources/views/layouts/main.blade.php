<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desa Jambesari | {{$title}} </title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}">
    <!-- CSS Flickity -->
    <link rel="stylesheet" href="{{ URL::asset('css/flickity.min.css');}}">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
</head>
<body>
    @include('partials.navbar')

    <div class="container-fluid p-0">
        @yield('container')
    </div>

    @include('partials.footer')

    <!-- JS Bootstrap -->
    <script src="{{ URL::asset('js/bootstrap.min.js');}}"></script>
    <!-- JS Flickity -->
    <script src="{{ URL::asset('js/flickity.min.js');}}"></script>

</body>

</html>
