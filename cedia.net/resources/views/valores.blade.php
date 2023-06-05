@extends('layouts.html-body')
@section('title')
Valores
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
    <div class="info-container w-80 m-auto d-flex">
        <div class="info-image w-25 bg-white d-flex">
            <img class="w-100" src="{{asset('images/cediamedical-logo.png')}}" alt="">
        </div>
        <div class="info-text w-75 text-light ps-5 pt-5 border-top border-5 border-white">
            <p>Nuestros valores son los pilares que sustentan nuestra forma de actuar, trabajar y hacer las cosas. Dicen cómo somos hoy y cómo vamos a ser en el futuro. Hablan sobre nuestra manera de entender la salud y nuestra relación con las personas. Nos hacen diferentes y únicos. Son nuestra identidad:</p>
        </div>
    </div>
    @include('layouts.html-footer')
    <style>
        .carousel-fade::after{
            content: 'V A L O R E S' !important;
        } 
    </style>
@endsection