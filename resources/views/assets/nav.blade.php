
<!-- barra de navegacion -->
<div class="container-fluid bg-white p-3  border-info border-2 border-bottom">
    <div class="row ">
      
      <div class="col-1 mx-3 d-flex align-items-center">
        <img src="{{asset('img/angie.png')}}"  class="img-fluid w-50" alt="">
      </div>
  


      @authGuard('encargado')
      <div class="col-2 mt-3 fw-bold">
        <a href="{{route('trabajadores.empresas.contratistas')}}">Trabajadores</a>
      </div>
      
      
      <div class="col-2 mt-3 fw-bold">
        <a href="{{route('show.contratistas')}}">Show contratistas</a>
      </div>
      @endauthGuard
      









  
    </div>
  </div>
  <!-- barra de navegacion -->