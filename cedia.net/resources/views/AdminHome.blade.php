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
        Hola {{$users->user}}
        @include('layouts.html-logout')
        @endsection
    
    @else
    <script>window.location = "/";</script>
@endif
