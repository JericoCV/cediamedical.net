@extends('layouts.html-body')
@php
session_start();
@endphp
@if(!empty($_SESSION['user']))
@php
$users = $_SESSION['user'];
@endphp
@section('title')
HOME+
@endsection
@section('content')
<div class="admin-header w-100 text-center text-white bg-primary">
    <h3 class="mb-0 p-3">HOME+ CEDIAMEDICAL</h3>
</div>

<div class="admin-container d-flex w-100" style="margin-bottom: -16px; min-height:600px">
    <div class="option-list w-25 bg-primary">
        <div class="list-group">
            <a href="{{route('AdminHome')}}" class="list-group-item list-group-item-action" aria-current="true">
                Consultas
            </a>
            <a href="{{route('AdminProfesionals')}}"
                class="list-group-item list-group-item-action active"><b>Profesionales</b></a>
            <a href="{{route('AdminSettings')}}" class="list-group-item list-group-item-action">Ajustes</a>
        </div>
        <img src="{{asset('images/undraw_medicine.svg')}}" class="w-100 p-5" style="bottom:0px" alt="">
    </div>
    <div class="admin-lista w-75 bg-white pb-3 rounded-top">
        @include('layouts.html-logout')
        @if(count($medicos)>0)
           <table class="table table-light table-hover w-80 m-auto mb-0 border">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < count($medicos); $i++)
                        <tr>
                        <th scope="row">{{$i+1}}</th>
                        <td><img src="{{asset($medicos[$i]->foto)}}" alt="" style="width: 100px"></td>
                        <td>{{$medicos[$i]->nombre}}</td>
                        <td>{{$medicos[$i]->apellidos}}</td>
                        <td>{{$medicos[$i]->especialidad}}</td>
                        <td>
                            <div class="dropdown m-auto d-flex">
                                <button class="btn btn-success dropdown-toggle align-self-center m-auto mt-1" type="button" id="dropdownMenuButton12" data-bs-toggle="dropdown" aria-expanded="false">
                                Cambiar
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton12" style="width: 280px !important">
                                    <li >
                                        <form class="p-2" action="{{route('profesionales-update')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombres</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="apellidos" class="form-label">Apellidos</label>
                                                <input type="text" class="form-control" id="apellidos" name="apellidos">
                                            </div>
                                            <div class="mb-3">
                                                <label for="foto" class="form-label">Seleccione una imagen (Dimensiones: 500x500 px)
                                                </label>
                                                <input class="form-control form-control-sm" id="foto" type="file" name="foto"
                                                    accept="image/jpg, image/jpeg,  image/png">
                                                @error('foto')
                                                <br>
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="especialidad" class="form-label">Especialidad</label>
                                                <input type="text" class="form-control" id="especialidad" name="especialidad">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Añadir</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown d-flex ">
                                <button class="btn btn-danger dropdown-toggle align-self-center m-auto mt-1" type="button" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                Eliminar
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                <li class="p-2">
                                    <span>Este proceso es irreversible, ¿Estas seguro?</span><br>
                                    <form action="{{ route('profesionales-delete') }}" method="POST">
                                    @csrf
                                    <input type="hidden" id="id" name="id" value="{{$medicos[$i]->id}}">
                                    <div class="d-flex align-items-center">
                                        <button type="submit" class="btn btn-danger align-self-center m-auto">Borrar</button>
                                    </div>
                                    </form>
                                </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endfor
                    
                </tbody>
            </table> 
            <div class="d-flex w-100 justify-content-center mt-1">
                {!! $medicos->links() !!}
            </div>
            @else
                <div class="nothing-here text-center w-50 m-auto">
                    <img class="w-80 m-auto" src="{{asset('images/undraw_void.svg')}}" alt="">
                    <h2>Aun no hay nada por aqui</h2>
                </div>
            @endif
        
        <div class="form-dropdown w-80 m-auto d-flex">
            <div class="dropdown w-50">
                <button class="btn btn-primary dropdown-toggle m-3" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Agregar
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li >
                        <form class="p-2" action="{{route('profesionales-create')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos">
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Seleccione una imagen (Dimensiones: 500x500 px)
                                </label>
                                <input class="form-control form-control-sm" id="foto" type="file" name="foto"
                                    accept="image/jpg, image/jpeg,  image/png">
                                @error('foto')
                                <br>
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="especialidad" class="form-label">Especialidad</label>
                                <input type="text" class="form-control" id="especialidad" name="especialidad">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Añadir</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@include('layouts.html-footer')
<style>
    body {
        min-width: 800px;
    }
</style>
@endsection

@else
<script>
    window.location = "/";
</script>
@endif