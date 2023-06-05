@extends('layouts.html-body')
@section('title')
CEDIAMEDICAL
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
    <div class="home-options w-80 m-auto ">
        <div class="item-container w-100 d-flex">
            <div class="home-item rounded w-30 bg-light m-auto d-flex">
                <a class="d-flex w-100" href=""><img class="w-80 self-justify-center m-auto" src="{{asset('images/cmlatino.png')}}" alt=""></a>
            </div>
            <div class="home-item rounded w-30 bg-light m-auto">
                <a href="">Medimagen</a>
            </div>
            <div class="home-item rounded w-30 bg-light m-auto">
                <a href="">Alerta Huánuco</a>
            </div>
        </div>    
    </div>
    <div class="profesionales-container d-flex text-center pt-5 pb-5">
        <div class="profesionales-titulo w-40 m-auto">
            <h1>NUESTRO STAFF DE PROFESIONALES</h1>
            <p>Contamos con el mejor personal, 24 horas a tu disposición</p>
        </div>
        <div class="profesionales-perfil w-40 m-auto rounded bg-white">
            <div id="carouselExampleControls" class="carousel carousel-dark slide p-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="d-flex">
                        <div class="perfil-photo m-auto w-40 rounded d-flex ms-10">
                            <img class="rounded w-100 m-auto" src="{{asset('images/doctor-profile-photo.jpg')}}" alt="">
                        </div>
                        <div class="perfil-info w-40 d-flex me-10">
                            <ul class="list-style-none text-center ps-0 m-auto">
                                <li>
                                    <h3>Nombre y Apellido</h3>
                                </li>
                                <li>
                                    <p>Especializacion</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="d-flex">
                        <div class="perfil-photo m-auto w-40 rounded d-flex ms-10">
                            <img class="rounded w-100 m-auto" src="{{asset('images/doctor-profile-photo.jpg')}}" alt="">
                        </div>
                        <div class="perfil-info w-40 d-flex me-10">
                            <ul class="list-style-none text-center ps-0 m-auto">
                                <li>
                                    <h3>Nombre y Apellido 2</h3>
                                </li>
                                <li>
                                    <p>Especializacion</p>
                                </li>
                            </ul>
                        </div>
                    </div>                   
                  </div>
                  <div class="carousel-item">
                    <div class="d-flex">
                        <div class="perfil-photo m-auto w-40 rounded d-flex ms-10">
                            <img class="rounded w-100 m-auto" src="{{asset('images/doctor-profile-photo.jpg')}}" alt="">
                        </div>
                        <div class="perfil-info w-40 d-flex me-10">
                            <ul class="list-style-none text-center ps-0 m-auto">
                                <li>
                                    <h3>Nombre y Apellido 3</h3>
                                </li>
                                <li>
                                    <p>Especializacion</p>
                                </li>
                            </ul>
                        </div>
                    </div>   
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>  
        </div>
    </div>
   @include('layouts.html-footer') 
@endsection

