<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MiCaSa') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;
        }

        .carousel-item:nth-child(1) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(2) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(3) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }

            #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
                height: 50vh;
            }
        }

        .navbar .nav-link {
            color: #fff !important;
        }
    </style>
    <div id="app">

        <!--Main Navigation-->
        <header>
            <!--nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"-->
            <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ URL::asset('/images/logomicasa2.png') }}" alt="Logo" width="24"
                            height="24" class="d-inline-block align-text-top">
                        {{ config('app.name', 'MiCaSa') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar Sesión') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Carousel wrapper -->
            <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
                    <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
                    <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
                </ol>

                <!-- Inner -->
                <div class="carousel-inner">
                    <!-- Single item -->
                    <div class="carousel-item active">
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="text-white text-center">
                                    <h1 class="mb-3">Iglesia del Nazareno MiCaSa</h1>
                                    <h5 class="mb-4">Ministerios Caminos de Santidad</h5>
                                    <a class="btn btn-outline-light btn-lg m-2" href="#" role="button"
                                        rel="nofollow" target="_blank">Acceder</a>
                                    <a class="btn btn-outline-light btn-lg m-2" href="#" target="_blank"
                                        role="button">Nuestro Equipo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single item -->
                    <div class="carousel-item">
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="text-white text-center">
                                    <h2>¡MiCaSa, un lugar para todos!</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single item -->
                    <div class="carousel-item">
                        <div class="mask"
                            style="
                  background: linear-gradient(
                    45deg,
                    rgba(29, 236, 197, 0.7),
                    rgba(91, 14, 214, 0.7) 100%
                  );
                ">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="text-white text-center">
                                    <h2>Nuestra Misión</h2>
                                    <a class="btn btn-outline-light btn-lg m-2" href="#" target="_blank"
                                        role="button">ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->

                <!-- Controls -->
                <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel wrapper -->
        </header>
        <!--Main Navigation-->

        <!--Main layout-->
        <main class="py-4">
            @yield('content')
        </main>
        <!--Main layout-->

        <!--Footer-->
        <footer class="text-center text-white" style="background-color: #f1f1f1;">
            <!-- Grid container -->
            <div class="container pt-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                    <!-- Github -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-dark" href="">MiCaSa</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!--Footer-->
    </div>
</body>

</html>
