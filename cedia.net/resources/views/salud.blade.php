@extends('layouts.html-body')
@section('title')
Salud Ocupacional
@endsection
@include('layouts.html-links')
@section('content')
@parent
    @extends('layouts.nav-bar')
    @include('layouts.html-login') 
    <div id="carouselExampleFade w-100" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner-home-1 w-100 d-block">   
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner-home-2 w-100 d-block">   
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner-home-3 w-100 d-block">   
                </div>
            </div>
        </div>
    </div> 
    {{-- <div class="info-container w-80 m-auto d-flex">
        <div class="info-image w-25 bg-white d-flex">
            <img class="w-100" src="{{asset('images/cediamedical-logo.png')}}" alt="">
        </div>
        <div class="info-text w-75 text-light ps-5 pt-5 border-top border-5 border-white">
            <p>Nuestra misión es cuidar la salud y bienestar de las personas poniendo a su disposición servicios sanitarios de máxima calidad, una moderna estructura hospitalaria y unos avanzados medios tecnológicos.<br>

            Buscamos desarrollar nuestra actividad con la máxima profesionalidad, respeto y eficacia a través de personal competitivo, vocacional y comprometido.<br>
                
            Damos una gran importancia y valor a la labor docente e investigadora, para transferir los resultados de nuestros avances al conjunto de la sociedad.<br>
                
            Y creemos que el eje en torno al que debe girar toda nuestra actividad es la persona. Por eso somos la salud persona a persona.</p>
        </div>
    </div> --}}
    @include('layouts.html-footer') 
    <style>
        .carousel-fade::after{
            content: 'SALUD OCUPACIONAL' !important;
        } 
    </style>
@endsection