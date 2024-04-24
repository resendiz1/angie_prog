@extends('plantilla')
@section('contenido')
@include('assets.nav')




<div class="container bg-white mt-5 p-5 sombra-contenedor ">

    <div class="row border p-3 justify-content-center sombra-encabezados">
      <div class="col-12 text-center">
        <h4>AGREGAR EMPRESAS CONTRATISTAS</h4>
      </div>
    </div>
  
  
    <div class="row border mt-3  p-3 sombra-encabezados">
        <div class="col-3">
            <b>Nombre de la empresa: </b>
            <input type="text" class="form-control" placeholder="empresa">
        </div>
        <div class="col-3">
            <b>Dirección: </b>
            <input type="text" class="form-control" placeholder="dirección de la empresa">
        </div>
        <div class="col-3">
            <b>Link Google Maps: </b>
            <input type="text" class="form-control" placeholder="http://maps....">
        </div>
        <div class="col-3">
            <b>Responsable de la empresa: </b>
            <input type="text" class="form-control" placeholder="nombre completo">
        </div>
        <div class="col-3">
            <b>Núm. Teléfono: </b>
            <input type="text" class="form-control" placeholder="telefono del responsable">
        </div>
        <div class="col-3">
            <b>Correo electrónico: </b>
            <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="col-3">
            <b>Contraseña: </b>
            <input type="password" class="form-control">
        </div>
        <div class="col-3 mt-4 ">
            <button class="btn btn-success">Agregar</button>
        </div>
    </div>
  
  
  
  
    <div class="row mt-5 border py-5 px-3 shadow justify-content-center">      
  
  
      <div class="col-sm-12 col-md-8 col-lg-3 border p-3 sombra-filas mx-2 my-3  animate__animated animate__zoomInDown">        


          <div class="row">
  
          <div class="col-12">
              <b>Nombre: </b> <br>
              <small>Nombre empresa contratista</small>
          </div>
  
          <div class="col-12 mt-2">
              <b>Email: </b> <br>
              <a href="mailto:empresa@empresa.com">empresa@empresa.com</a>
          </div>
  
          <div class="col-12 mt-2">
              <b>Númer contacto: </b> <br>
              <a href="tel:+522491142812">
                <i class="fa fa-square-phone"></i>
                2491142812
              </a>
          </div>
  
          <div class="col-12 mt-2">
              <b>Dirección: </b> <br>
              <a href="#" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#mapa">
                <i class="fa fa-map-location-dot"></i>
                  Av. Siempre viva, Tehuacan, Puebla
              </a>
          </div>
  
          <hr class="my-3">
          
          <div class="col-6 text-center mt-1">
              <small class="fw-bold">ELIMINAR: </small> <br> 
              <a href="#" class="btn btn-danger btn-sm  w-100 p-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#eliminar">
              <i class="fa fa-eraser mx-2"></i>
              </a>
          </div>
  
          <div class="col-6 text-center mt-1">
              <small class="fw-bold">EDITAR: </small> <br> 
              <a href="#" class="btn btn-primary btn-sm  w-100 p-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#editar">
              <i class="fa fa-edit mx-2"></i>
              </a>
          </div>
  
          </div>
      </div>
  

  
      
  
  
    </div>
  
  
  
  </div>
  
  
  
  
  
  
  
  
  
  <!-- AQUI ESTAN TODOS LOS MODALES -->
  <div class="container">
    <div class="row">
      
  
  

      <!-- Modal m google maps -->
      <div class="modal fade" id="mapa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content ">
            <div class="modal-body text-center">
                <div id="mapContainer" style="height: 100%">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15118.6376684489!2d-97.6482385!3d18.6792733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1713930383331!5m2!1ses-419!2smx" height="600px" width="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


            </div>

          </div>
        </div>
      </div>
  
      <!-- Modal m google maps -->














  
  
  
      <!-- Modal editar empresa -->
      <div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¿DESEA ELIMINAR AL LA EMPRESA?</h5>
              <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border text-center">
              <button type="button" class="btn btn-primary w-100" data-mdb-ripple-init data-mdb-dismiss="modal" >CANCELAR</button>
              
              <button type="button" class="btn btn-danger w-100 mt-3" id="confirma" data-mdb-ripple-init >CONFIRMAR</button>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Modal editar empresa -->
  
  
  
  
          <!-- Modal editar empresa -->
          <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿DESEA ELIMINAR AL LA EMPRESA?</h5>
                    <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body border">
        
                    <div class="form-goup m-2">
                        <label for="">Nombre Empresa: </label>
                        <input type="text" class="form-control">
                    </div>
        
                    <div class="form-goup m-2">
                        <label for="">Email: </label>
                        <input type="text" class="form-control">
                    </div>
        
                    <div class="form-goup m-2">
                        <label for="">Teléfono: </label>
                        <input type="tel" class="form-control">
                    </div>
        
                    <div class="form-goup m-2">
                        <label for="">Dirección: </label>
                        <input type="tel" class="form-control">
                    </div>
        
                    <div class="form-goup m-2">
                        <label for="">Link mapa: </label>
                        <input type="link" class="form-control">
                    </div>
        
                  </div>
        
                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning w-100" data-mdb-ripple-init data-mdb-dismiss="modal" >CANCELAR</button>
                    
                    <button type="button" class="btn btn-success w-100 mt-3" id="confirma" data-mdb-ripple-init >CONFIRMAR</button>
                  </div>
        
                </div>
              </div>
            </div>
        
            <!-- Modal editar empresa -->
        
  
  
  
  
  
    </div>
  </div>
  
  
  <!-- AQUI ESTAN TODOS LOS MODALES -->
  
  
    
@endsection