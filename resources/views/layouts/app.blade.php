<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Control Gasto') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->   
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body style="background:#161925">
    <div id="app">
        <nav class="navbar navbar-expand navbar-light shadow-sm text-white" style="background:#23395B;" >
            <div class="container text-white" >
                
                @guest
                    <img src="https://www.pngkit.com/png/full/232-2323280_games-trivia-pin-icon-iconos-de-juegos-png.png" width="70" height="60" alt="">&nbsp;<h5> VENTA DE VIDEOJUEGOS</h5>
                @else
                <img src="https://www.pngkit.com/png/full/232-2323280_games-trivia-pin-icon-iconos-de-juegos-png.png" width="80" height="80" class="d-inline-block align-top" alt="">&nbsp;&nbsp;<h5> VENTA DE VIDEOJUEGOS</h5> &nbsp; &nbsp; &nbsp; &nbsp;
                
                            <a class="btn btn-default text-white" href="{{route('usuarios')}}">Usuarios</a>
                            <a class="btn btn-default text-white" href="{{route('categorias')}}">Categoria</a>
                            <a class="btn btn-default text-white" href="{{route('clientes')}}">Clientes</a>
                            <a class="btn btn-default text-white" href="{{route('provedor')}}">Provedor</a>
                            <a class="btn btn-default text-white" href="{{route('productos')}}">Productos</a>
                            <a class="btn btn-default text-white" href="{{route('facturas.index')}}">Facturas</a>



                @endguest

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrase') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="background:#FFFFFF; " class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="https://c.tenor.com/5wdslJBsaVcAAAAC/ryu-street-fighter.gif" width="100px">&nbsp

                                    {{ Auth::user()->usu_name  }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" style="background:#FFFFFF;" aria-labelledby="navbarDropdown">
                                    <div>
                                        <h6 style="text-align: center;font-size: 10pt;font-family: BlackWay;">{{ Auth::user()->usu_nombre }}</h6>
                                    </div>
                                     <a style="text-align: center;" class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <img src="https://cdn-icons-png.flaticon.com/512/35/35702.png" width="15px">

                                        Cerrar Session
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
