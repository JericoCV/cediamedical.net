<div class="logout justify-content-center text-center bg-white pt-3 w-80 m-auto">
    <p>Hola, Actualmente te encuentras en modo administrador, una vez hayas realizado los cambios necesarios y hayas revisado las <a href="{{route('AdminHome')}}" class="link-primary">consultas</a>, no te olvides de cerrar sesion </p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary m-3">Cerrar Sesión</button>
    </form> 
</div>