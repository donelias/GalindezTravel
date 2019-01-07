@extends('layouts.store.app')
@section('title', "Inicio")
@section('content')


    <section class="ftco-section services-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Garantía del mejor precio</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Nuestros clientes nos aman</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">El mejor agente de viajes</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Atención personalizada</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-destination">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Destacados</span>
                    <h2 class="mb-4"><strong>Destinos</strong> Destacados</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="destination-slider owl-carousel ftco-animate">
                        @foreach($featured_destination as $featured_destination)
                            <div class="item">
                                <div class="destination">
                                    <a href="{{url('/p-single/' . $featured_destination->slug)}}" class="img d-flex justify-content-center align-items-center" style="background-image: url({{$featured_destination->image}});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <h3><a href="#">{{$featured_destination->city->city}}, {{$featured_destination->city->country->country}}</a></h3>
                                        <span class="listing">15 Listing</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tour Packages --}}
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Ofertas especiales</span>
                    <h2 class="mb-4"><strong>Top</strong> Paquetes Turisticos</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach($tour_packages as $tour_packages)
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="{{url('/p-single/' . $tour_packages->slug)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{$tour_packages->image}});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="{{url('/p-single/' . $tour_packages->slug)}}">{{$cadena =str_limit($tour_packages->title, 10)}}, {{$tour_packages->city->country->country}}</a></h3>
                                    <p class="rate">
                                        @if($tour_packages->category_service_id == 1 )
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                        @elseif($tour_packages->category_service_id == 2)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                        @elseif($tour_packages->category_service_id == 3)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                        @elseif($tour_packages->category_service_id == 4)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i>
                                        @elseif($tour_packages->category_service_id == 5)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        @else
                                            {{$tour_packages->category_service->category_service}}
                                        @endif
                                        <span>Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price">${{number_format($tour_packages->price, 2)}}</span>
                                </div>
                            </div>
                            <p style="text-align: justify">{{$cadena =str_limit($tour_packages->content, 30)}}</p>
                            <p class="days"><span>Valido hasta:</span> {{ \Carbon\Carbon::parse($tour_packages->expiration_date)->format('d-m-Y')}} </p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> {{$tour_packages->city->city}}, {{$tour_packages->city->country->country}}</span>
                                <span class="ml-auto"><a href="{{url('/p-single/' . $tour_packages->slug)}}">Detalles</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4">Algunos hechos divertidos</h2>
                    <span class="subheading">Más de 100.000 hoteles alojados</span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100000">0</strong>
                                    <span>Clientes satisfechos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="40000">0</strong>
                                    <span>Lugares de destino</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="87000">0</strong>
                                    <span>Hoteles</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="56400">0</strong>
                                    <span>Vuelos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Hotels &amp; Rooms --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Ofertas especiales</span>
                    <h2 class="mb-4"><strong>Populares</strong> Hoteles &amp; Habitaciones</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach($hotel_rooms as $hotel_rooms)
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="{{url('/room/details/' . $hotel_rooms->room->slug)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(store/images/hotel-1.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><i class="fa fa icon-bed"></i> <a href="{{url('/room/details/' . $hotel_rooms->room->slug)}}">{{$hotel_rooms->room->name}} - {{$cadena =str_limit($hotel_rooms->company->name, 10)}}, {{$hotel_rooms->company->city->country->country}}</a></h3>
                                    <p class="rate">
                                        @if($hotel_rooms->company->category_service_id == 1 )
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                        @elseif($hotel_rooms->company->category_service_id == 2)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                        @elseif($hotel_rooms->company->category_service_id == 3)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i>
                                            <i class="icon-star-o"></i>
                                        @elseif($hotel_rooms->company->category_service_id == 4)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i>
                                        @elseif($hotel_rooms->company->category_service_id == 5)
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        @else
                                            {{$hotel_rooms->company->category_service->category_service}}
                                        @endif
                                        <span>8 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price per-price">$40<br><small>/noche</small></span>
                                </div>
                            </div>
                            <p>{{$cadena =str_limit($hotel_rooms->room->description,20)}}</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> {{$hotel_rooms->company->city->city}}</span>
                                <span class="ml-auto"><a href="{{url('/room/details/' . $hotel_rooms->room->slug)}}">Reserve ahora</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Suscríbase a nuestro boletín</h2>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Introduzca dirección correo electrónico">
                                        <input type="submit" value="Enviar" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
