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
                <a href="{{route('AdminHome')}}" class="list-group-item list-group-item-action active" aria-current="true">
                <b>Consultas</b> 
                </a>
                <a href="{{route('AdminProfesionals')}}" class="list-group-item list-group-item-action">Profesionales</a>
                <a href="{{route('AdminSettings')}}" class="list-group-item list-group-item-action">Ajustes</a> 
            </div>
            <img src="{{asset('images/undraw_medicine.svg')}}" class="w-100 p-5" style="bottom:0px" alt="">
        </div>
        <div class="admin-lista w-75 bg-white pb-3 rounded-top">
            @include('layouts.html-logout')
            @if(count($consultas)>0)
            <div class="container mt-5">
               <table class="table table-light table-hover w-80 m-auto mb-0 border">
                    <thead>
                        <tr>
                            <th scope="col" width="1%">#</th>
                            <th scope="col" width="10%">Nombre y Apellido</th>
                            <th scope="col" width="10%">Email</th>
                            <th scope="col" width="10%">Telefono</th>
                            <th scope="col">Consulta</th>
                            <th scope="col" width="10%">Fecha</th>
                            <th scope="col" width="10%">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach($consultas as $consulta)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $consulta->nombre_apellido }}</td>
                                <td>{{ $consulta->email }}</td>
                                <td>{{ $consulta->telefono }}</td>
                                <td>{{ $consulta->consulta }}</td>
                                <td>{{ $consulta->created_at }}</td>
                                <td class="text-center">
                                @if($consulta->estado == "pendiente")
                                <form action="{{ route('update-consulta') }}" method="POST">
                                    @csrf
                                    <input type="hidden" id="id" name="id" value="{{$consulta->id}}">
                                    <div class="col-12">
                                    <button type="submit" class="btn btn-danger" style="line-height: 80%;">Marcar como revisado</button>
                                    </div>
                                </form>
                                @else
                                Revisado
                                @endif
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table> 
                <div class="d-flex w-100 justify-content-center mt-1">
                    {!! $consultas->links() !!}
                </div>
            </div>
            @else
            <div class="nothing-here text-center w-50 m-auto">
                <img class="w-80 m-auto" src="{{asset('images/undraw_void.svg')}}" alt="">
                <h2>Aun no hay nada por aqui</h2>
            </div>
            @endif
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