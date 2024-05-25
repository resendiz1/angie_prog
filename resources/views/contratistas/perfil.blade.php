@extends('plantilla')
@section('contenido')
@include('assets.nav')    



<div class="container bg-white mt-5 p-5 border sombra-contenedor"> <!-- Este DIV cierra todo el documento -->


    <div class="row justify-content-center border p-3 sombra-encabezados">
  
      <!-- <div class="col-4"></div> -->
  
      <div class="col-12 text-center mb-1">
        <h4>{{$empresa[0]->nombre}}</h4>
      </div>
  
  
  
      <div class="col-1 mb-2">
        <button class=" btn btn-success btn-sm py-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal">
          <i class=" fa fa-user-plus"></i>
        </button>
      </div>
  
      <div class="col-auto mb-2">
        <button class=" btn btn-info btn-sm py-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#sua">
          <i class="fa fa-file"></i>
          Subir SUA / PAGO
        </button>
      </div>
  
  
  
    </div>
  
  
    <hr>
  
  
  
  
    <div class="row mt-4">
      <div class="col-12 text-center">
        <h4>TRABAJADORES EN ACTIVO</h4>
      </div>
    </div>
  
  
  
  
  
    <div class="row justify-content-center mt-4 border p-3 sombra-filas">
  
          <div class="col-2">
            <b>Nombre: </b> <br>
            <small>Nombre contratista</small>
          </div>
  
          <div class="col-2">
            <b>NSS: </b> <br>
            <a href="#">NSS</a>
          </div>
          
  
          <div class="col-2">
            <b>INE: </b> <br>
            <a href="#">INE</a>
          </div>
  
  
          <div class="col-2">
            <b>DC3: </b> <br>
            <a href="#">DC3</a>
          </div>
  
          <div class="col-2 text-center">
            <b>ELIMINAR: </b> <br>
            <a href="#" class="btn btn-danger btn-sm p-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#eraser">
            <i class="fa fa-eraser mx-2"></i>
            </a>
          </div>
  
    </div>
  
  
  
  
  
  
  
  
  
  
  <!-- TODOS LOS MOD ESTAN AQUI ABAJO -->
  
  
  
  <div class="container">
    <div class="row">
          <!-- MODALES -->
  
  
      <!-- Modal agregar trabajador -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">AGREGAR TRABAJADOR</h5>
              <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 border">
  
              <div class="form-group border p-3">
                <label for="" class="h6">NOMBRE COMPLETO</label>
                <input type="text" class="form-control">
              </div>
  
              <div class="form-group mt-3 border p-3">
                <label for="" class="h6">ALTA DEL IMSS</label>
                <input type="file" class="form-control">
              </div>
  
              <div class="form-group mt-3 border p-3">
                <label for="" class="h6">IDENTIFICACIÓN OFICIAL</label>
                <input type="file" class="form-control">
              </div>
  
              <div class="form-group mt-3 border p-3">
                <label for="" class="h6">CONSTANCIA DC3</label>
                <input type="file" class="form-control">
              </div>
  
  
  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-mdb-ripple-init>GUARDAR</button>
              <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  
       <!-- Modal agregar trabajador -->
  
  
  
  
  
  
  <!-- Modal agregar trabajador -->
  <div class="modal fade" id="eraser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ELIMINAR TRABAJADOR</h5>
          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border text-center">
          <button type="button" class="btn btn-primary w-100" data-mdb-ripple-init data-mdb-dismiss="modal" >CANCELAR</button>
          
          <button type="button" class="btn btn-danger w-100 mt-3" data-mdb-ripple-init >ELIMINAR</button>
        </div>
      </div>
    </div>
  </div>
  
   <!-- Modal agregar trabajador -->
  
  
  
   <!-- MODAL SUA / PAGO-->
  <div class="modal fade" id="sua" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">SUBIR SUA / PAGO</h5>
          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border text-center">
          <input type="file" class="form-control">
        </div>
  
        <div class="modal-footer">
  
          <button type="button" class="btn btn-primary" data-mdb-ripple-init data-mdb-dismiss="modal" >CANCELAR</button>
          <button type="button" class="btn btn-success" data-mdb-ripple-init >GUARDAR</button>
  
        </div>
       
      </div>
    </div>
  </div>
  
   <!--MODAL SUA / PAGO -->
  
  
  
  
  
  
  
  
    </div>
  </div>  
  
  
  
  
    
  
  </div>
  <!-- Este DIV cierra todo el documento -->
  



@endsection
