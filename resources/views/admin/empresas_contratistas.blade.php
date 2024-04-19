@extends('plantilla')
@section('contenido')
@include('assets.nav')



<div class="container bg-white mt-5 p-5 sombra-contenedor ">

    <div class="row border p-3 justify-content-center sombra-encabezados">
      <div class="col-12 text-center">
        <h4>EMPRESAS CONTRATISTAS</h4>
      </div>
    </div>
  
  
    <div class="row border mt-3  p-3 sombra-encabezados">
      <div class="col-auto">
        <input type="search" class="form-control" autofocus>
      </div>
      <div class="col-auto mt-1">
        <button class="btn btn-success btn-sm">
          <i class=" fa fa-magnifying-glass"></i>
          BUSCAR
        </button>
      </div>
    </div>
  
  
  
  
    <div class="row mt-5 border py-5 px-3 shadow justify-content-center">      
  
  
      <div class="col-sm-12 col-md-8 col-lg-3 border p-3 sombra-filas mx-2">        
          <div class="row">
  
          <div class="col-12">
              <b>Nombre: </b> <br>
              <small>Nombre empresa contratista</small>
          </div>
  
          <div class="col-12 mt-2">
              <b>Email: </b> <br>
              <small>empresa@empresa.com</small>
          </div>
  
          <div class="col-12 mt-2">
              <b>Númer contacto: </b> <br>
              <a href="tel:+522491142812">2491142812</a>
          </div>
  
          <div class="col-12 mt-2">
              <b>Dirección: </b> <br>
              <a href="https://maps.app.goo.gl/4nstns5ujvvmwrc3A">Av. Siempre viva, Tehuacan, Puebla</a>
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