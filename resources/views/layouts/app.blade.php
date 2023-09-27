<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clinica</title>

        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/slicknav.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/jquery.slicknav.min.js"></script>
        <script src="./js/scripts.js"></script>
    </head>

    <body>

    @include('sweetalert::alert')
    
        
    @yield('contenido')

    
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.slicknav.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="{{ asset('/js/scripts.js') }}"></script>

    </body>
</html>
