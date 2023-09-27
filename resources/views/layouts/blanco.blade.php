<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.8/sweetalert2.min.css" integrity="sha512-InYSgxgTnnt8BG3Yy0GcpSnorz5gxHvT6OEoRWj91Gg+RvNdCiAharnBe+XFIDS754Kd9TekdjXw3V7TAgh6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    

</head>
<body class="fondo-pagina-paciente">

    @include('sweetalert::alert')

    <header class="menu-paciente">
        <nav class="navbar navbar-expand-xl w-100">
            <div class="container-fluid p-4">
        
                <a class="navbar-brand" href="#">LOGO</a>
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end navbarNav" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="{{ route('busqueda') }}">Búsqueda de pacientes</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('paciente') }}">Agregar paciente</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('consulta') }}">Consulta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link orilla">Ingresar</a>
                        </li>
                      </ul>
                </div>
        
            </div>
            
        </nav>
    </header>

    @yield('contenido')



    
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/jquery.slicknav.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<script src="{{ asset('/js/scripts.js') }}"></script>

@yield('scrips')
</body>
</html>