@extends('plantilla')
@section('contenido')
@include('assets.nav')




<div class="container bg-white mt-1 p-5 sombra-contenedor ">

    <div class="row border p-3 justify-content-center sombra-encabezados">
      <div class="col-12 text-center">
        <h4>AGREGAR EMPRESAS CONTRATISTAS</h4>
      </div>
    </div>
  
  
<form action="{{route('empresa.agregar')}}" method="POST">
      @csrf

    <div class="row border mt-1  p-3 sombra-encabezados">


        <div class="col-sm-12 col-md-6 col-lg-3">
            <b>Nombre de la empresa: </b>
            
            <input 
              type="text" 
              name="nombre" 
              placeholder="empresa"
              value="{{old('nombre')}}"
              class=" form-control @if($errors->first('nombre')) {{'is-invalid'}}@endif" >
              {!!$errors->first('nombre', '<small class="text-danger">:message</small>')!!}
            
        </div>



        <div class="col-sm-12 col-md-6 col-lg-3">
            <b>Dirección: </b>

            <input 
              type="text" 
              name="direccion" 
              placeholder="dirección de la empresa"
              value="{{old('direccion')}}"
              class=" form-control @if($errors->first('direccion')) {{'is-invalid'}}@endif" >
              {!!$errors->first('direccion', '<small class="text-danger">:message</small>')!!}

        </div>



        <div class="col-sm-12 col-md-6 col-lg-3">
            <b>Link Google Maps: </b>

            <input 
              type="text" 
              name="maps" 
              placeholder="http://maps...."
              value="{{old('maps')}}"
              class=" form-control @if($errors->first('maps')) {{'is-invalid'}}@endif" >
              {!!$errors->first('maps', '<small class="text-danger">:message</small>')!!}

        </div>




        <div class="col-sm-12 col-md-6 col-lg-3">
            <b>Responsable de la empresa: </b>

            <input 
              type="text" 
              name="responsable" 
              placeholder="nombre completo"
              value="{{old('resposable')}}"
              class=" form-control @if($errors->first('responsable')) {{'is-invalid'}}@endif" >
              {!!$errors->first('responsable', '<small class="text-danger">:message</small>')!!}
              

        </div>



        <div class="col-sm-12 col-md-6 col-lg-3">
            <b>Núm. Teléfono: </b>
            
            <input 
              type="text" 
              name="telefono_responsable" 
              placeholder="telefono del responsable"
              value="{{old('telefono_responsable')}}"
              class=" form-control @if($errors->first('telefono_responsable')) {{'is-invalid'}}@endif" >
              {!!$errors->first('telefono_responsable', '<small class="text-danger">:message</small>')!!}

        </div>





        <div class="col-sm-12 col-md-6 col-lg-3">
            <b>Correo electrónico: </b>

            <input 
              type="text" 
              name="email_responsable" 
              placeholder="Email"
              value="{{old('email_responsable')}}"
              class=" form-control @if($errors->first('email_responsable')) {{'is-invalid'}}@endif" >
              {!!$errors->first('email_responsable', '<small class="text-danger" >:message</small>')!!}

        </div>




        <div class="col-sm-12 col-md-6 col-lg-3">
            <b>Contraseña: </b>
        
            <input 
              type="password" 
              name="password" 
              value="{{old('password')}}"
              class=" form-control @if($errors->first('password')) {{'is-invalid'}}@endif" >
              {!!$errors->first('password', '<small class="text-danger">:message</small>')!!}

        </div>


        <div class="col-sm-12 col-md-6 col-lg-3 mt-4 ">
            <button class="btn btn-success w-100">
              Agregar {{count($errors)}}
            </button>
        </div>
      </div>
</form>
  
  





  
  {{-- Tarjetas con la información de los contratistas --}}
    <div class="row mt-2 border py-5 px-3 shadow justify-content-center">  
      
      <button class="btn btn-dark" onclick="alertify.alert('Mensaje de alerta')" >click me</button>
  
@forelse ($empresas as $empresa)
      
      <div class="col-sm-12 col-md-8 col-lg-3 border p-3 sombra-filas mx-2 my-3  animate__animated animate__zoomInDown">        


          <div class="row">
  
            <div class="col-12">
                <b>Nombre: </b> <br>
                <small>{{$empresa->nombre}}</small>
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