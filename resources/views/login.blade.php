@extends('plantilla')
@section('contenido')
  


    <!-- Start your project here-->
    <div class="container-fluid mt-0 p-5  fondo-login">
        <div class="row mt-5 justify-content-center">
      
          <div class="col-5 bg-white shadow shadow-sm mt-5 border p-4 text-center sombra-filas">
            <h4 class=" text-center mb-3">Inicio de Sesión</h4>
            <img src="img/angie.png" id="logo" class="img-fluid mb-3 animate__animated " style="width: 100px; height: 100px;" alt="">
          <br>
              @if (session('error_sesion_admin'))
                  <span class="text-center text-danger fw-bold">{{session('error_sesion_admin')}}</span>
              @endif      

              @if (session('error_sesion_encargado'))
                 <span class="text-center text-danger fw-bold"> {{session('error_sesion_encargado')}}</span>
              @endif

              @if (session('error_sesion_contratista'))
                 <span class="text-center text-danger fw-bold"> {{session('error_sesion_contratista')}}</span>
              @endif

            {{-- {{Auth::guard('encargado')->user()->name}} --}}

            <form method="POST" action="{{route('login')}}">
              @csrf
              <small class="text-justify fw-bold" for="">Selecciona tu tipo de usuario </small>
              <div data-mdb-input-init class="form-outline mb-4">
                <select class="form-select" name="rol">
                  <option value="encargado">Encargado de SEH</option>
                  <option value="administrador">Admnistrador</option>
                  <option value="empresa">Empresa</option>
                </select>
              </div>



              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="email" id="form1Example1"  class="form-control border border-light" />
                <label class="form-label" for="form1Example1">Correo Electronico</label>
              </div>
            

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="password" id="form1Example2" class="form-control border border-light" />
                <label class="form-label" for="form1Example2">Contraseña</label>
              </div>

              <button data-mdb-ripple-init type="submit" class="btn btn-danger btn-block mt-4">Entrar</button>
            </form>
      
      
      
      
          </div>
        </div>


<br>
<br>
<br>
<br>
<br>
<br>
      
      </div> {{-- Aqui termina el container del login --}}

      
      
      
      
      
          <script>




            const logo = document.getElementById('logo')

      
            //Codigo para que cada vez que se actualice la pagina se carge una animación nueva
            const animaciones = ['animate__bounce', 'animate__wobble', 'animate__shakeX', 'animate__rubberBand', 'animate__shakeX', 'animate__fadeIn', 'animate__fadeInBottomRight', 'animate__fadeInLeftBig', 'animate__lightSpeedInLeft', 'animate__rotateInUpRight', 'animate__slideInDown', 'animate__slideInLeft', 'animate__slideInRight', 'animate__slideInUp', 'animate__rollIn'   ]
      
            const aleatorio = Math.floor(Math.random() * animaciones.length + 1)
      
      
              logo.classList.add(animaciones[aleatorio])
      
            //Codigo para que cada vez que se actualice la pagina se carge una animación nueva
        
      
      
          </script>



@endsection