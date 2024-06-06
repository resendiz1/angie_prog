@extends('plantilla')
@section('contenido')
@include('assets.nav')    



<div class="container bg-white mt-5 p-5 border sombra-contenedor"> <!-- Este DIV cierra todo el documento -->


    <div class="row justify-content-center border p-3 sombra-encabezados">
  
      <!-- <div class="col-4"></div> -->
  
      <div class="col-12 text-center mb-1">
        <h4>{{Auth::guard('empresa')->user()->nombre}}</h4>
        
        @if (session('add_sua'))
            <h6 class="text-success">{{session('add_sua')}}</h6>
        @endif

        @if (session('eliminado'))
        <h6 class="text-danger">{{session('eliminado')}}</h6>
        @endif


      </div>
  
  
  
      <div class="col-1 mb-2">
        <button class=" btn btn-success btn-sm py-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal">
          <i class=" fa fa-user-plus"></i>
        </button>
      </div>
  
      <div class="col-auto mb-2">
      @if (!(Auth::guard('empresa')->user()->sua))
        <button class=" btn btn-info btn-sm py-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#sua">
          <i class="fa fa-file"></i>
          Subir SUA / PAGO 
        </button>
          
      @else
      <a href="{{Storage::url(Auth::guard('empresa')->user()->sua)}}" target="_blank" class=" btn btn-dark btn-sm py-1">
        <i class="fa fa-file"></i>
          Ver SUA / PAGO 
      </a>
      
      <button class=" btn btn-info btn-sm py-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#sua">
        <i class="fa fa-file"></i>
        Actualizar SUA / Pago 
      </button>
      @endif


      </div>
  
  
  
    </div>
  
  
    <hr>

@php
    $id = Auth::guard('empresa')->user()->id;
    $contratistas = DB::select("SELECT*FROM contratistas WHERE id_empresa LIKE $id");
@endphp


@forelse ($contratistas as $contratista)
        
    <div class="row justify-content-center mt-4 border p-3 sombra-filas">
  
      <div class="col-2">
        <b>Nombre: </b> <br>
        <small>{{$contratista->nombre_completo}}</small>
      </div>

      <div class="col-2 text-center">
        <b>NSS: </b> <br>
        <a href="{{Storage::url($contratista->nss)}}" target="_blank">
          <i class="fa fa-eye"></i>
        </a>

      </div>
      

      <div class="col-2 text-center">
        <b>INE: </b> <br>
        <a href="{{Storage::url($contratista->ine)}}" target="_blank">INE</a>
      </div>


      <div class="col-2 text-center">
        <b>DC3: </b> <br>
        <a href="{{Storage::url($contratista->dc3)}}" target="_blank">DC3</a>
      </div>

      <div class="col-2 text-center">
        <b>ELIMINAR: </b> <br>
        <a href="#" class="btn btn-danger btn-sm p-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#e{{$contratista->id}}">
        <i class="fa fa-eraser mx-2"></i>
        </a>
      </div>

    </div>




 <!-- Modal borrar trabajador -->
 <div class="modal fade" id="e{{$contratista->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR A: {{$contratista->nombre_completo}} </h5> <br>

        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body border text-center">
        <form action="{{route('delete.contratista', $contratista->id)}}" method="POST" >
          @csrf @method('DELETE')

      </div>
      <div class="modal-footer">
          <button class="btn btn-danger w-100 mt-3" data-mdb-ripple-init >ELIMINAR</button>
      </form>
          <button type="button" class="btn btn-primary w-100" data-mdb-ripple-init data-mdb-dismiss="modal" >CANCELAR</button>
      </div>

    </div>
  </div>
</div>

 <!-- Modal borrar trabajador -->




    @empty
        
    @endforelse

  
  

  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
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
              
              <form action="{{route('add.contratista')}}" method="POST" enctype="multipart/form-data">
                @csrf

              <div class="form-group border p-3">
                <label for="" class="h6">NOMBRE COMPLETO</label>
                <input type="text" class="form-control" name="nombre_completo">
                <input type="hidden" value="{{Auth::guard('empresa')->user()->id}}" name="id_empresa">
              </div>
  
              <div class="form-group mt-3 border p-3">
                <label for="" class="h6">ALTA DEL IMSS</label>
                <input type="file" class="form-control" name="nss">
              </div>
  
              <div class="form-group mt-3 border p-3">
                <label for="" class="h6">IDENTIFICACIÓN OFICIAL</label>
                <input type="file" class="form-control" name="ine">
              </div>
  
              <div class="form-group mt-3 border p-3">
                <label for="" class="h6">CONSTANCIA DC3</label>
                <input type="file" class="form-control" name="dc3">
              </div>
  
  
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" data-mdb-ripple-init>Guardar</button>
          
             </form>  {{--!del formulario --> --}}
              <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
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
          <h5 class="modal-title" id="exampleModalLabel">
            SUBIR SUA / PAGO
          </h5>
          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border text-center">
          <form action="{{route('sua.empresa', $id)}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PATCH') 
            <input type="file" name="sua" class="form-control">

          </div>
          
          <div class="modal-footer">
          
            <button  class="btn btn-success" data-mdb-ripple-init >GUARDAR</button>
          </form>

          <button type="button" class="btn btn-primary" data-mdb-ripple-init data-mdb-dismiss="modal" >CANCELAR</button>
  
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
