<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Chan´an Ha</title>
    <link rel="stylesheet" href="responsive/css/style.css">
</head>
<body>

<header class="full-width NavBarP">
    <div class="full-width NavBarP-Logo">Chan´an Ha´</div>
    <nav class="full-width NavBarP-Nav">

        <ul class="full-width list-unstyled">
            @if (Route::has('login'))

                @auth
                    <li><a href="{{ url('/home') }}">Inicio </a></li>
                @else
                <!--<li><a href="{{ route('login') }}">Iniciar Sesión</a></li>-->

                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Registro</a></li>
                    @endif
                @endauth

            @endif

        </ul>
    </nav>
    <div class="formulario">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home </a>
                @else
                    <a href="{{ route('login') }}">Iniciar Sesión</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registro</a>
                    @endif
                @endauth
            </div>
        @endif


    </div>
    <i class="fa fa-bars visible-xs btn-menuMobile ShowMenuMobile" aria-hidden="true"></i>


    <div class="logotipo"><!-- parte del logotipo-->
        <img src="img/uac.png" border="1" alt="Logo de la facultad " width="150" height="150">
        Universidad Autónoma de Campeche
    </div>


</header>

<section class="banner">
    <div class="banner-content">
        <h1>Universidad Autónoma De Campeche</h1>

        <a href="{{ route('login') }}">Ingresar</a>
    </div>
</section>

<section class="full-width formated-section">
    <h2 class="text-center font-oswald">SECCIONES</h2><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <img src="responsive/assets/img/graficas.png" alt="Sucursal" class="img-responsive img-rounded">
                <a href="{{route('charts')}}"><h3 class="text-center">Módulo Consumo Del Agua</h3></a>
                <p class="text-center">
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <img src="responsive/assets/img/tubo.jpg" width="190px" alt="Sucursal"
                     class="img-responsive img-rounded">
                <h3 class="text-center">Fugas De Agua</h3>
                <p class="text-center">
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <img src="responsive/assets/img/fugas.jpg" alt="Sucursal" class="img-responsive img-rounded">
                <a href="{{route('reportes.create')}}"><h3 class="text-center">Instalaciones En Malas Condiciones</h3>
                </a>
                <p class="text-center">
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <img src="responsive/assets/img/mapa.png" class="img-responsive img-rounded">
                <a href="{{route('mapa')}}"><h3 class="text-center">Módulo Cuidado Del Agua</h3></a>
                <p class="text-center">
                </p>
            </div>

        </div>
    </div>
</section>
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
