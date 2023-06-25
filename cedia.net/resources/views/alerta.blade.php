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
    <div class="info-container w-80 m-auto d-flex">
        <div class="info-image w-25 bg-light ">
            <img class="w-100" src="{{asset('images/alerta.png')}}" alt="">
        </div>
        <div class="info-text w-75 text-light ps-5 pt-5 border-top border-5 border-white">
            <p>Somos un equipo comprometido en brindar servicios de emergencia y transporte médico confiables y eficientes. En nuestro negocio, nos dedicamos a salvar vidas y proporcionar atención médica oportuna a aquellos que más lo necesitan.<br>

                contamos con un equipo altamente capacitado de paramédicos y conductores de ambulancia, quienes están listos para responder a cualquier emergencia las 24 horas del día, los 7 días de la semana. La seguridad y el bienestar de nuestros pacientes son nuestra máxima prioridad, y nos esforzamos por brindar un cuidado compasivo y profesional en cada situación.<br>
                
                Nuestras ambulancias están equipadas con equipos médicos de última generación y tecnología avanzada para brindar el mejor cuidado posible durante el transporte. Nos aseguramos de que nuestras ambulancias cumplan con los más altos estándares de calidad y estén siempre preparadas para responder a una amplia gama de situaciones médicas y emergencias.<br>
                
                Además de los servicios de emergencia, también ofrecemos servicios de transporte médico programados. Si necesita trasladarse de manera segura y cómoda para recibir tratamientos médicos regulares o para visitar especialistas, nuestro equipo de profesionales estará encantado de ayudarle. Nos aseguramos de que cada viaje sea seguro, confiable y se realice con puntualidad.<br>
                
                La eficiencia y la respuesta rápida son fundamentales en nuestro negocio de ambulancias. Entendemos que cada segundo cuenta en una emergencia, por lo que nos esforzamos por llegar al lugar requerido lo más rápido posible. Nuestros paramédicos están capacitados para brindar atención médica de primeros auxilios en el lugar y estabilizar a los pacientes antes de transportarlos a un centro médico adecuado.<br></p>
        </div>
    </div>
    @include('layouts.html-footer') 
    <style>
        .carousel-fade::after{
            content: 'A L E R T A | H U Á N U C O' !important;
        } 
    </style>
@endsection