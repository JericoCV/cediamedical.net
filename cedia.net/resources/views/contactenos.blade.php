@extends('layouts.html-body')
@section('title')
Contáctenos
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
    <div class="contact-container bg-white text-left justify-content-center m-auto pt-3">
        <div class="contact-form w-50 ps-4">
            <h2>Contáctenos</h2>
            <p>Nuestros ejecutivos especializados atenderán tus dudas, recibirán tus comentarios y te brindarán el servicio que requieras</p>
            <form action="{{route('consulta.store')}}" method="POST">
                @csrf
                <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos*">
                <input type="text" name="email" placeholder="Correo Electrónico*">
                <input type="number" name="telefono" placeholder="Numero de telefono*">
                <input type="text" name="consulta" placeholder="Consulta*">      
                <p style="font-size: 14px; font-weight:bolder; padding-top:5px">Los campos * son obligatorios para poder procesar tu solicitud</p>
                <button type="submit">enviar</button>
            </form>
        </div>
        <div class="contact-image w-40 d-flex">
            <img src="{{asset('images/cediamedical-logo.png')}}" alt="">
        </div>
    </div>
    @include('layouts.html-footer') 

    <style>
        .contact-container{
            margin-top: 20px !important;
            margin-bottom: 20px !important;
            display: flex;
            width: 90%;
            justify-items: center;
            align-items: center
        }
    
        .contact-form input{
            width: 90%;
            background-color: #ffffff00;
            padding-bottom: 5px;
            padding-top:10px;
            border: 0;
            border-bottom: rgb(65, 161, 252) solid 2px;
            color: rgb(65, 161, 252);
            outline: none
        }
    
        .contact-form input::placeholder{
            color: rgb(65, 161, 252);
            padding-left: 5px;
            border: 0
        }

        .contact-form{
            color: rgb(65, 161, 252);
        }
    
        .contact-form button{
            position: relative;
            background: rgb(65, 161, 252);
            color: #ffff;
            font-weight: bolder;
            border: solid 4px rgb(65, 161, 252);
            border-radius: 12px;
            align-self: center;
            margin-bottom:10px; 
        }
    
        .contact-image{
            background: rgb(65, 161, 252);
        }
    
        .contact-image img{
            width: 100%
        }
        @media(max-width: 910px){
            
            .contact-container{
                display: grid;
            }
            .contact-form{
                width: 100% !important;
            }
            .contact-image{
                width: 100% !important
            }
        }
    </style>
    <style>
        .carousel-fade::after{
            content: 'C O N T Á C T E N O S' !important;
        } 
    </style>
@endsection