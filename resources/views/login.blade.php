
@extends('plantilla')
@section('contenido')
@include('assets.nav')
    


    <!-- Start your project here-->
    <div class="container mt-5">
        <div class="row mt-5 justify-content-center">
      
          <div class="col-5 bg-white shadow shadow-sm mt-5 border p-5 text-center sombra-filas">
            <h4 class=" text-center">Inicio de Sesión</h4>
            <img src="img/angie.png" id="logo" class="img-fluid mb-5 animate__animated " style="width: 100px; height: 100px;" alt="">
             <br>
              @if (session('error_sesion_admin'))
                  {{session('error_sesion_admin')}}
              @endif      

              @if (session('error_sesion_encargado'))
                  {{session('error_sesion_encargado')}}
              @endif

              @if (session('error_sesion_contratista'))
                  {{session('error_sesion_contratista')}}
              @endif

            {{Auth::guard('encargado')->user()->name}}

            <form method="POST" action="{{route('login')}}">
              @csrf
              <div data-mdb-input-init class="form-outline mb-4 border">
                <select class="form-control" name="rol">
                  <option value="Encargado">Encargado de SEH</option>
                  <option value="Administrador">Admnistrador</option>
                  <option value="Contratista">Contratista</option>
                </select>
              </div>



              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="email" id="form1Example1"  class="form-control" />
                <label class="form-label" for="form1Example1">Correo Electronico</label>
              </div>
            

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="password" id="form1Example2" class="form-control" />
                <label class="form-label" for="form1Example2">Contraseña</label>
              </div>

              <button data-mdb-ripple-init type="submit" class="btn btn-danger btn-block mt-4">Entrar</button>
            </form>
      
      
      
      
          </div>
        </div>
      </div>

      
      
      
      
      
      
          <script>




            const logo = document.getElementById('logo')

      
            //Codigo para que cada vez que se actualice la pagina se carge una animación nueva
            const animaciones = ['animate__bounce', 'animate__wobble', 'animate__shakeX', 'animate__rubberBand', 'animate__shakeX', 'animate__fadeIn', 'animate__fadeInBottomRight', 'animate__fadeInLeftBig', 'animate__lightSpeedInLeft', 'animate__rotateInUpRight', 'animate__slideInDown', 'animate__slideInLeft', 'animate__slideInRight', 'animate__slideInUp', 'animate__rollIn'   ]
      
            const aleatorio = Math.floor(Math.random() * animaciones.length + 1)
      
      
              logo.classList.add(animaciones[aleatorio])
      
            //Codigo para que cada vez que se actualice la pagina se carge una animación nueva
        
      
      
          </script>



@endsection