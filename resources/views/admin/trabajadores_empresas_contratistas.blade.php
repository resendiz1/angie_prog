@extends('plantilla')
@section('contenido')
@include('assets.nav')


<div class="container bg-white mt-5 p-5 sombra-contenedor ">

    <div class="row border p-3 justify-content-center sombra-encabezados">
      <div class="col-12 text-center">
        <h4>CONTRATISTAS: NOMBRE_EMPRESA</h4>
      </div>
      <div class="col-auto mx-2">
        <button class="btn btn-success btn-sm">
          <i class="fa fa-magnifying-glass"></i>
          VER SUA
        </button>
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
  
  
  
  
    <div class="row justify-content-center mt-5 border p-3 sombra-filas animate__animated animate__bounceIn">      
        <div class="row">
  
          <div class="col-sm-6 col-md-6  col-lg-3 ">
            <b>Nombre: </b> <br>
            <small>Nombre contratista</small>
          </div>
  
          <div class="col-sm-6 col-md-6  col-lg-2">
            <b>NSS: </b> <br>
            <a href="#">NSS</a>
          </div>
          
  
          <div class="col-sm-12 col-md-6  col-lg-2">
            <b>INE: </b> <br>
            <a href="#">INE</a>
          </div>
  
  
          <div class="col-sm-12 col-md-6  col-lg-2">
            <b>DC3: </b> <br>
            <a href="#">DC3</a>
          </div>
  
          <div class="col-sm-12 col-md-6 col-lg-1 text-center">
            <small class="fw-bold">ELIMINAR:</small> <br> 
            <a href="#" class="btn btn-danger btn-sm  w-100 p-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#eliminar">
            <i class="fa fa-eraser mx-2"></i>
            </a>
          </div>
  
          <div class="col-sm-12 col-md-6 col-lg-1 text-center">
            <small class="fw-bold">AUTORIZAR:</small> <br>
            <a href="#" class="btn btn-success btn-sm w-100  p-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#autorizar">
            <i class="fa fa-circle-check mx-2"></i>
            </a>
          </div>
  
  
        </div>
    </div>
  
  
  
  
  
  
  
  
  </div>
  
  
  
  
  
  
  
  
  
  <!-- AQUI ESTAN TODOS LOS MODALES -->
  <div class="container">
    <div class="row">
      
  
      <!-- Modal autorizar entrada trabajador trabajador -->
      <div class="modal fade" id="autorizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¿AUTORIZAR ENTRADA AL TRABAJADOR?</h5>
              <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border text-center">
              <img src="https://media1.tenor.com/m/p3WnkFSc7ZsAAAAC/norbert-dog-high-five.gif" style="display: none;" id="imagen" class="img-fluid" alt="">
              <br><br>
              <button type="button" class="btn btn-primary w-100" data-mdb-ripple-init data-mdb-dismiss="modal" >CANCELAR</button>
              
              <button type="button" class="btn btn-success w-100 mt-3" id="confirma" data-mdb-ripple-init >CONFIRMAR</button>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Modal autorizar entrada trabajador trabajador -->
  
  
  
  
      <!-- Modal autorizar entrada trabajador trabajador -->
      <div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¿DESEA ELIMINAR AL TRABAJADOR?</h5>
              <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border text-center">
              <button type="button" class="btn btn-primary w-100" data-mdb-ripple-init data-mdb-dismiss="modal" >CANCELAR</button>
              
              <button type="button" class="btn btn-danger w-100 mt-3" id="confirma" data-mdb-ripple-init >CONFIRMAR</button>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Modal autorizar entrada trabajador trabajador -->
  
  
  
  
  
  
  
  
  
    </div>
  </div>
  
  
  <!-- AQUI ESTAN TODOS LOS MODALES -->
  
    
@endsection