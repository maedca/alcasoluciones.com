<!doctype html>
<html lang="en">
<head>
    <title>Alca Soluciones</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/materialize.min.js')}}"></script>
    <script src="{{asset('js/gmaps.js')}}"></script>
    <title>Document</title>
</head>
<body>
<div class="row full">
    <div class="col s12 full">
       @include('layout.partials.nav')
        @yield('content')
        <div id="map" class="col l12 m12 s12"></div>
        @include('layout.partials.footer')
    </div>
</div>
</body>
</html>