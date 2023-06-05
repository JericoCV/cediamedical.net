@extends('layouts.html-body')
@section('title')
NOTICIAS
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
    <div class="feed w-80 m-auto pb-3">
        <a class="twitter-timeline" data-lang="es" data-height="600" href="https://twitter.com/Minsa_Peru?ref_src=twsrc%5Etfw">CARGANDO...</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    @include('layouts.html-footer') 
    <style>
        .feed>a{
            text-decoration: none;
            color: white;
            font-weight: bolder
        }
        .carousel-fade::after{
            content: 'N O T I C I A S' !important;
        } 
    </style>
@endsection