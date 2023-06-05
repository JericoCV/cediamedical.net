<div class="login-container d-flex" id="login-container">
    <div class="login-button rounded-start d-flex">
        <button id="boton" class="rounded-start"> 
            <img src="{{asset('images/left.svg')}}" alt="">
            <p>LOGIN</p>
        </button>
        <button id="boton2" class="login-button-2 rounded-start"> 
            <img src="{{asset('images/right.svg')}}" alt="">
            <p>CERRAR</p>
        </button>
    </div>
    <div class="login-form p-3 rounded-bottom" id="login-form">
        <form action="{{ route('login') }}" method="POST">
            @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" id="usuario" name="user" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Tu información no sera compartida</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        {{-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Recordar mi cuenta</label>
        </div> --}}
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
    </div>   
</div>
<style>
    .login-container{
        width: 30px;
        position: fixed;
        background: none;
        display: flex;
        top: 100px;
        right: 0px;
        z-index: 334;
        transition: 0.5s;
    }
    .login-button{
        width: 30px;
        height: 100px;
        position: relative;
    }
    .login-button>button{
        width: 30px;
        height: 100px;
        border: none;
        background: #0096fa;
        justify-content: center;
        transition: 0.5s;
    }
    .login-button>button>p{
        writing-mode: vertical-lr;
        transform: rotate(180deg);
        color: white;
        margin: 0;
        margin-bottom: 6px;
        margin-top: 6px;
        font-weight: bolder
    }
    .login-form{
        background: whitesmoke;
        width: 300px;
        transition: 0.5s;
    }
    .login-button-2{
        display: none;
    }
    .w-330{
        width: 330px !important;
    }
    .w30{
        width: 30px !important;
    }
    .d-block{
        display: block!important;
    }
    .d-none{
        display: none!important;
    }
</style>
<script>
    function animar(){
        document.getElementById('login-container').classList.toggle('w-330');
        document.getElementById('boton').classList.toggle('d-none');
        document.getElementById('boton2').classList.toggle('d-block');
    }
    function animar2(){
        document.getElementById('login-container').classList.remove('w-330');
        document.getElementById('boton').classList.remove('d-none');
        document.getElementById('boton2').classList.remove('d-block');
    }
    document.getElementById('boton').onclick = function(){
        animar();
    }
    document.getElementById('boton2').onclick = function(){
        animar2();
    }
</script>