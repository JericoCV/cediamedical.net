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
            <a href="{{route('AdminProfesionals')}}" class="list-group-item list-group-item-action">Profesionales</a>
            <a href="{{route('AdminSettings')}}" class="list-group-item list-group-item-action active"><b>Ajustes</b></a> 
        </div>
        <img src="{{asset('images/undraw_medicine.svg')}}" class="w-100 p-5" style="bottom:0px" alt="">
    </div>
    <div class="admin-lista w-75 bg-white pb-3 rounded-top">
        @include('layouts.html-logout')
        <div class="form-group">
            <div class="nothing-here text-center w-50 m-auto">
                <img class="w-80 m-auto" src="{{asset('images/undraw_void.svg')}}" alt="">
                <h2>Aun no hay nada por aqui</h2>
            </div>
        </div>
    </div>
</div>
@include('layouts.html-footer')
<style>
    body{
        min-width: 800px;
    }
</style>
@endsection

@else
<script>
    window.location = "/";
</script>
@endif