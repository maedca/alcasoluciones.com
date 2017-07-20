<!doctype html>
<html lang="en">
<head>
    <title>Alca Soluciones</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('dist/sweetalert.css')}}">

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.0/js/materialize.min.js"></script>
    <script src="{{asset('js/gmaps.js')}}"></script>
    <script src="{{asset('dist/sweetalert.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="row full">
    <div class="col s12 full" id="">
       @include('layout.partials.nav')
        @yield('content')


        @include('layout.partials.footer')
        @include('sweet::alert')
        @include('layout.partials.register')
    </div>
</div>
</body>
</html>