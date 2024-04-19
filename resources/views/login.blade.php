
@extends('plantilla')
@section('contenido')
@include('assets.nav')
    


    <!-- Start your project here-->
    <div class="container mt-5">
        <div class="row mt-5 justify-content-center">
      
          <div class="col-5 bg-white shadow shadow-sm mt-5 border p-5 text-center sombra-filas">
            <h4 class=" text-center">Inicio de Sesión</h4>
            <img src="img/angie.png" id="logo" class="img-fluid mb-5 animate__animated " style="width: 100px; height: 100px;" alt="">
      
      
      
            <form>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Correo Electronico</label>
              </div>
            

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form1Example2" class="form-control" />
                <label class="form-label" for="form1Example2">Contraseña</label>
              </div>

              <button data-mdb-ripple-init type="submit" class="btn btn-danger btn-block mt-4">Entrar</button>
            </form>
      
      
      
      
          </div>
        </div>
      </div>

      
      
      
      
      
      
          <script>
      
            //Codigo para que cada vez que se actualice la pagina se carge una animación nueva
            const animaciones = ['animate__bounce', 'animate__wobble', 'animate__shakeX', 'animate__rubberBand', 'animate__shakeX', 'animate__fadeIn', 'animate__fadeInBottomRight', 'animate__fadeInLeftBig', 'animate__lightSpeedInLeft', 'animate__rotateInUpRight', 'animate__slideInDown', 'animate__slideInLeft', 'animate__slideInRight', 'animate__slideInUp', 'animate__rollIn'   ]
      
            const aleatorio = Math.floor(Math.random() * animaciones.length)
            const logo = document.getElementById('logo')
      
      
              logo.classList.add(animaciones[aleatorio])
      
            //Codigo para que cada vez que se actualice la pagina se carge una animación nueva
        
      
      
          </script>



@endsection