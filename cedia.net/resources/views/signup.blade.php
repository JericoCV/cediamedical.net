@extends('layouts.html-body')
@section('title')
SIGNUP
@endsection
@section('content')
<div class="login-container w-25 m-auto bg-white rounded p-5 mt-5">
    <div class="login-logo w-100 d-flex justify-content-center">
      <a class="navbar-brand" href="{{ route('home') }}"><img class="m-auto" src="{{asset('images/cediamedical-logo.png')}}" alt="" height="120"
      class="d-inline-block align-text-top ps-3" /></a>
    </div>
    <h4 class="text-center">Inicio de Sesión</h4>
    <form action="{{ route('signup') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="user">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Registrarme</button>
      </div>
    </form>
</div>
<style>
    @media (max-width: 768px) {
      .login-container{
        width: 90% !important;
      }
    }
  </style>
@endsection