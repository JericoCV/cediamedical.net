<div class="logout justify-content-center text-center m-2 bg-white">
    <p>Hola, Actualmente te encuentras en modo administrador, una vez hayas realizado los cambios necesarios y hayas revisado las <a href="{{route('home')}}" class="link-primary">consultas</a>, no te olvides de cerrar sesion </p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary m-3">Cerrar Sesión</button>
    </form> 
</div>