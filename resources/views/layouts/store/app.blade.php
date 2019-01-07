<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Galindez Travel') }} - @yield('title') </title>

    <link rel="icon" href="{{ asset('store/images/logo/favicon.ico') }}">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('store/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('store/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('store/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('store/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('store/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{ asset('store/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('store/css/style.css')}}">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="url('/')"><img src="{{ asset('store/images/logo/gt1.png')}}" style="width: 300px; height: 100px" alt="Galindez Travel"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse navbar-dark" id="ftco-nav">
                <ul class="navbar-nav ml-auto navbar-dark">
                    <li class="nav-item @if(Route::Is('index')) active @endif"><a href="{{url('/')}}" class="nav-link">Inicio</a></li>
                    <li class="nav-item @if(Route::Is('flight')) active @endif"><a href="{{route('flight')}}" class="nav-link">Vuelos</a></li>
                    <li class="nav-item @if(Route::Is('tours')) active @endif"><a href="{{route('tours')}}" class="nav-link">Paquetes</a></li>
                    <li class="nav-item @if(Route::Is('hotels')) active @endif"><a href="{{route('hotels')}}" class="nav-link">Hoteles</a></li>
                    <li class="nav-item @if(Route::Is('about')) active @endif"><a href="{{route('about')}}" class="nav-link">Sobre Nosostros</a></li>
                    <li class="nav-item @if(Route::Is('contact')) active @endif"><a href="{{route('contact')}}" class="nav-link">Contactos</a></li>
                    <!-- Authentication Links -->
                    @if(!Auth::check())
                        <li class="nav-item cta"><a class="nav-link" href="{{ url('/login') }}"><span>Iniciar Session</span></a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: @if(Route::Is('index')) url('{{ asset("store/images/bg_1.jpg")}}'); @elseif(Route::Is('room-detail')) url('{{ asset("store/images/hotel-room.jpg")}}'); @elseif(Route::Is('about')) url('store/images/bg_2.jpg'); @elseif(Route::Is('contact')) url('store/images/bg_10.jpg'); @elseif(Route::Is('tours')) url('store/images/bg_33.jpg'); @elseif(Route::Is('hotels')) url('store/images/bg_55.jpg'); @elseif(Route::Is('flight')) url('store/images/bg_22.jpg'); @else url('{{ asset("store/images/bg_55.jpg")}}'); @endif {{--   @elseif(Route::Is('p_single')) url('store/images/bg_2.jpg');  @endif--}}">
        <div class="overlay"></div>
        <div class="container">
            @if(Route::Is('index'))
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <br>
                    <br>
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong> <br></strong> <strong> Explore</strong> Su increíble ciudad</h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Encontrar grandes lugares para alojarse, comer, ir de compras o de visita de expertos locales</p>
                    <div class="block-17 my-4">
                        <form action="" method="post" class="d-block d-flex">
                            <div class="fields d-block d-flex">
                                <div class="textfield-search one-third">
                                    <input type="text" class="form-control" placeholder="Ej: comida, servicio, hotel">
                                </div>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control" placeholder="Búsqueda por palabra clave">
                                        <option value="">Lugar</option>
                                        <option value="">San Francisco USA</option>
                                        <option value="">Berlin Germany</option>
                                        <option value="">Lodon United Kingdom</option>
                                        <option value="">Paris Italy</option>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" class="search-submit btn btn-primary" value="Buscar">
                        </form>
                    </div>
                    <p>O navegar por los más destacados</p>
                    <p class="browse d-md-flex">
                        <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="fa fa icon-plane"></i>Vuelos</a></span>
                        <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-fork"></i>Restaurantes</a></span>
                        <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-hotel"></i>Hoteles</a></span>
                        <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-meeting-point"></i>Tours</a></span>
                        <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-meeting-point"></i>Lugares</a></span>
                        <span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i class="flaticon-shopping-bag"></i>Compras</a></span>
                    </p>
                </div>
            </div>
            @endif
            @if(Route::Is('flight'))
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                        <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <br>
                            <br>
                            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong> <br></strong> <strong> Explore</strong> Su increíble Vuelo</h1>
                            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Encontrar los vuelos con las mejores tarifas del mercado.</p>
                        </div>
                    </div>
            @endif
            @if(Route::Is('tours'))
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                        <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <br>
                            <br>
                            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong> <br></strong> <strong> Explore</strong> Su increíble Tour</h1>
                            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Encontrar grandes lugares para alojarse, comer, ir de compras o de visita de expertos locales</p>

                        </div>
                    </div>
            @endif
            @if(Route::Is('hotels'))
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                        <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <br>
                            <br>
                            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong> <br></strong> <strong> Los mejores</strong> hoteles con increibles tarifas</h1>
                            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Encontrar grandes lugares para alojarse, comer, ir de compras o de visita de expertos locales</p>

                        </div>
                    </div>
            @endif
            @if(Route::Is('about'))
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                        <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <br>
                            <br>
                            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong> <br></strong> <strong> Conoce</strong> más acerca de nossotros</h1>
                            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></p>

                        </div>
                    </div>
            @endif
            @if(Route::Is('p_single'))
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                        <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <br>
                            <br>
                            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong> <br></strong> <strong> Detalles </strong> del servio o paquete turistico</h1>
                            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></p>

                        </div>
                    </div>
            @endif
            @if(Route::Is('room-detail'))
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                        <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <br>
                            <br>
                            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong> <br></strong> <strong> Detalles </strong> de la habitacion</h1>
                            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></p>

                        </div>
                    </div>
            @endif
        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">dirEngine</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Service</a></li>
                            <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Become a partner</a></li>
                            <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQ</a></li>
                            <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                            <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                            <li><a href="#" class="py-2 d-block">How it works</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

</div>

<!-- Scripts -->
<script src="{{ asset('store/js/jquery.min.js')}}"></script>
<script src="{{ asset('store/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{ asset('store/js/popper.min.js')}}"></script>
<script src="{{ asset('store/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('store/store/js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('store/js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('store/js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('store/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('store/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('store/js/aos.js')}}"></script>
<script src="{{ asset('store/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{ asset('store/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('store/js/jquery.timepicker.min.js')}}"></script>
<script src="{{ asset('store/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('store/js/google-map.js')}}"></script>
<script src="{{ asset('store/js/main.js')}}"></script>
</body>
</html>