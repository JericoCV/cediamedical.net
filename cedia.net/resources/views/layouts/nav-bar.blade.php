<nav>
    <div class="logo">
        <h3 class="ps-3 m-0"><a href="{{route('home')}}">
            CEDIAMEDICAL
        </a></h3>
    </div>
    
    <ul class="pe-3">
      <li class="home pt-4 rounded-bottom"><a href="{{route('home')}}">HOME</a></li>
      <li class="dropdown pt-4">
        <p class="drodown-activator">NOSOTROS</p>
        <div class="dropdown-content rounded">
            <div class="item">
                <a href="{{route('cediamedical')}}">CEDIAMEDICAL</a>
            </div>
            <div class="item">
                <a href="{{route('mision')}}">MISIÓN</a>
            </div>
            <div class="item">
                <a href="{{route('vision')}}">VISIÓN</a>
            </div>
            <div class="item">
                <a href="{{route('valores')}}">VALORES</a>
            </div>
            <div class="item">
                <a href="{{route('noticias')}}">NOTICIAS</a>
            </div>
        </div>
      </li>
      <li class="dropdown pt-4">
        <p class="drodown-activator">GRUPO</p>
        <div class="dropdown-content rounded">
            <div class="item">
                <a href="{{route('medimagen')}}">MEDIMAGEN</a>
            </div>
            <div class="item">
                <a href="{{route('alerta')}}">ALERTA HUÁNUCO</a>
            </div>
            <div class="item">
                <a href="{{route('centromedico')}}">CENTRO MÉDICO LATINO</a>
            </div>
            <div class="item">
                <a href="{{route('salud')}}">SALUD OCUPACIONAL</a>
            </div>
        </div>
      </li>
      <li class="pt-4"><a href="{{route('contactenos')}}">CONTACTENOS</a></li>
    </ul>
</nav>
<script src="{{asset('js/navbar.js')}}"></script>
 