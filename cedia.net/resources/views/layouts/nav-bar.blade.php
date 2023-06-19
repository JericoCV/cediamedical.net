<nav class="nav">
    <div class="logo">
        <h3 class="ps-3 m-0"><a href="{{route('home')}}">
            CEDIAMEDICAL
        </a></h3>
    </div>
    
    <ul class="pe-3">
      <li class="home pt-4 rounded-bottom"><a href="{{route('home')}}" class="text-light">INICIO</a></li>
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
      <li class="pt-4"><a href="{{route('contactenos')}}">CONTÁCTENOS</a></li>
    </ul>
</nav>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" style="min-height: 80px !important">
    <div class="container-fluid m-auto">
      <a class="navbar-brand" href="{{route('home')}}" style="color: #0096fa !important; font-size: 20px !important"><b>CEDIAMEDICAL</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">INICIO</a>
          </li>
          <li class="nav-item">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  NOSOTROS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="{{route('cediamedical')}}">CEDIAMEDICAL</a></li>
                    <li><a class="dropdown-item" href="{{route('mision')}}">MISIÓN</a></li>
                    <li><a class="dropdown-item" href="{{route('vision')}}">VISIÓN</a></li>
                    <li><a class="dropdown-item" href="{{route('valores')}}">VALORES</a></li>
                    <li><a class="dropdown-item" href="{{route('noticias')}}">NOTICIAS</a></li>
                    <li><a class="dropdown-item" href="{{route('mision')}}">MISIÓN</a></li>
                </ul>
              </li>
          </li>
          <li class="nav-item">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  GRUPO
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="{{route('medimagen')}}">MEDIMAGEN</a></li>
                    <li><a class="dropdown-item" href="{{route('alerta')}}">ALERTA HUÁNUCO</a></li>
                    <li><a class="dropdown-item" href="{{route('centromedico')}}">CENTRO MÉDICO LATINO</a></li>
                    <li><a class="dropdown-item" href="{{route('salud')}}">SALUD OCUPACIONAL</a></li>
                </ul>
              </li>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('contactenos')}}" tabindex="-1" aria-disabled="true">CONTÁCTENOS</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<style>
    .navbar{
        display: none !important;
    }
    @media (max-width:800px){
        .nav{
            display: none !important;
        }
        .navbar{
            display: flex !important;
        }
        .dropdown-menu>li>a{
            color: #0096fa !important;
        }
    }
</style>
<script src="{{asset('js/navbar.js')}}"></script>
 