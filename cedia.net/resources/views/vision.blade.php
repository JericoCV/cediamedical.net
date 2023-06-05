@extends('layouts.html-body')
@section('title')
VISIÓN
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
            <img class="w-100" src="{{asset('images/cediamedical-logo.png')}}" alt="">
        </div>
        <div class="info-text w-75 text-light ps-5 pt-5 border-top border-5 border-white">
            <p>Ser el grupo hospitalario líder en España y un referente a nivel nacional, siendo reconocidos por pacientes, profesionales médicos e instituciones como entidad de confianza y garantía de calidad asistencial.<br>
            Desarrollar un grupo líder de provisión sanitaria con una identidad sólida y una imagen propia, que genere reconocimiento y orgullo de pertenencia.<br>
            Tener una red eficiente de centros y hospitales, que ofrezcan una atención integral a las necesidades de todos los pacientes basada en la igualdad y el respeto, y sustentada en la excelencia asistencial, tecnológica y humana.<br>
            Gestionar los centros, empresas y servicios del grupo de manera que creen valor para la compañía a la vez que para la sociedad.<br>
            Colaborar con el Sistema Público de Salud para tener una red eficiente de hospitales que satisfagan las necesidades de todos los ciudadanos.<br>
            Promover la innovación, la investigación.<br>
            Buscar la mejora constante de la calidad en el equipamiento tecnológico, humano y asistencial de todos nuestros centros.<br>
                Cuidar y preservar el entorno que nos rodea, a través de iniciativas medioambientales.</p>
        </div>
    </div>
    @include('layouts.html-footer')
    <style>
        .carousel-fade::after{
            content: 'V I S I Ó N' !important;
        } 
    </style>
@endsection