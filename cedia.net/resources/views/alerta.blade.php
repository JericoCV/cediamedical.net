@extends('layouts.html-body')
@section('title')
Alerta Húanuco
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
        <div class="info-image w-25 bg-light d-flex">
            <img class="w-100" src="{{asset('images/cediamedical-logo.png')}}" alt="">
        </div>
        <div class="info-text w-75 text-light ps-5 pt-5 border-top border-5 border-white">
            <p>Es la compañía líder en Perú en prestación de servicios sanitarios. Somos una marca joven, con más de 10 años de experiencia en el cuidado de la salud y bienestar de las personas.<br>

            Cubrimos todas las especialidades médicas para ofrecer una atención integral al paciente. Para ello, contamos con un prestigioso equipo de profesionales, la tecnología más avanzada, una valiosa vocación investigadora y docente, y un modelo de gestión basado en un sólido compromiso con la calidad.<br>
                
            Un cuidado experto y una visión de la medicina basada en la personalización, la cercanía y la conexión por el paciente. Porque entendemos la salud persona a persona.</p>
        </div>
    </div> --}}
    @include('layouts.html-footer') 
    <style>
        .carousel-fade::after{
            content: 'A L E R T A | H U Á N U C O' !important;
        } 
    </style>
@endsection