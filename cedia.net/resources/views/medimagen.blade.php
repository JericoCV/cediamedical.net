@extends('layouts.html-body')
@section('title')
MEDIMAGEN
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
        <div class="info-image w-25 bg-white">
            <img style="max-width: 100%;
            height: auto;" src="{{asset('images/medimagen.png')}}" alt="">
        </div>
        <div class="info-text w-75 text-light ps-5 pt-5 border-top border-5 border-white">
            <h2 class="text-center pb-2">MEDIMAGEN</h2>
            <p>Bienvenido a nuestro negocio de radiografías de vanguardia. En nuestro establecimiento, nos enorgullece ofrecer servicios de diagnóstico por imágenes de alta calidad y precisión. Nuestro objetivo principal es proporcionar un entorno cómodo y seguro para que nuestros pacientes se sometan a radiografías con confianza y tranquilidad.<br>

                En nuestro negocio de radiografías, contamos con un equipo de radiólogos altamente capacitados y tecnología de última generación. Nuestros profesionales expertos en radiología están comprometidos con la excelencia médica y se aseguran de que cada radiografía se realice con la máxima precisión y atención a los detalles.<br>
                
                Además, nos preocupamos por el bienestar y la comodidad de nuestros pacientes. Nuestras instalaciones están diseñadas para brindar un ambiente relajante y acogedor. Nuestro personal amable y atento se esfuerza por garantizar que cada paciente se sienta cómodo durante todo el proceso de radiografía.<br>
                
                Valoramos la eficiencia y la puntualidad en nuestro negocio. Trabajamos diligentemente para minimizar los tiempos de espera y asegurarnos de que los resultados de las radiografías estén disponibles lo más rápido posible. Entendemos la importancia de un diagnóstico oportuno y nos esforzamos por proporcionar resultados rápidos y precisos a los médicos y especialistas.<br>
                
                Además, nos mantenemos actualizados con los avances tecnológicos y los desarrollos en el campo de la radiología. Esto nos permite ofrecer una amplia gama de servicios de radiografía, incluyendo radiografías digitales de alta resolución, radiografías especializadas y estudios contrastados.</p>
        </div>
    </div>
    @include('layouts.html-footer') 
    <style>
        .carousel-fade::after{
            content: 'M E D I M A G E N' !important;
        } 
    </style>
@endsection