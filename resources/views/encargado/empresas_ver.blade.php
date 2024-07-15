@extends('plantilla')
@section('contenido')
@include('assets.nav')


<!-- NOTIFICACIONES -->
@if (session('eliminado'))
<div class="bg-danger text-white notificacion p-3 text-center">
  <span class=" fw-bold"> {!!session('eliminado')!!} </span> <br> 
  <i class="fa fa-trash fa-2x animate__animated animate__wobble animate__infinite mt-2"></i>
</div>   
@endif

@if (session('editado'))
<div class="bg-success text-white notificacion p-3 text-center">
  <span class=" fw-bold"> {!!session('editado')!!} </span> <br> 
  <i class="fa fa-edit fa-2x animate__animated animate__wobble animate__infinite mt-2"></i>
</div>   
@endif

<div class="container bg-white mt-3 sombra-contenedor " style="height: 3000px">

  
  {{-- Tarjetas con la información de los contratistas --}}
    <div class="row mt-4 justify-content-center">  
      <div class="col-12 bg-dark text-white text-center">
        <h3 class="mt-2">EMPRESAS INSCRITAS</h3>
      </div>
  
@forelse ($empresas as $empresa)
      
      <div class="col-sm-12 col-md-8 col-lg-3 border p-3 sombra-filas mx-2 my-3  animate__animated animate__zoomInDown">        


          <div class="row">
  
            <div class="col-12 text-center mb-2">
                  <a class="fw-bold" href="{{route('trabajadores.empresas.contratistas', $empresa->id)}}">{{$empresa->nombre}}</a>
            </div>
    
            <div class="col-12 mt-2">
                <b>Email: </b> <br>
                <a href="mailto:{{$empresa->email}}">{{$empresa->email}}</a>
            </div>
    
            <div class="col-12 mt-2">
                <b>Númer contacto: </b> <br>
                <a href="tel:+52{{$empresa->telefono}}">
                  <i class="fa fa-square-phone"></i>
                  {{$empresa->telefono}}
                </a>
            </div>
    
            <div class="col-12 mt-2">
                <b>Dirección: </b> <br>
                <a href="#" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#map{{$empresa->id}}">
                  <i class="fa fa-map-location-dot"></i>
                    {{$empresa->direccion}}
                </a>
            </div>
 
          </div>
      </div>


      <!-- Modal m google maps -->
      <div class="modal fade" id="map{{$empresa->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content ">
            <div class="modal-body text-center">

                <div id="mapContainer" class="my-1 mx-0" style="height: 100%">
                  {!! $empresa->maps !!}
                </div>
                
            </div>
          </div>
        </div>
      </div>
      <!-- Modal m google maps -->












@empty
<li>No hay registros</li>
      
@endforelse 

  
      
  
  
    </div>
  
    {{-- Tarjetas con la información de los contratistas --}}
  
  </div>
  
  
  
  
  
  
  
  


  
  <!-- AQUI ESTAN TODOS LOS MODALES -->



  







  {{-- SCRIPTS --}}




    
@endsection
