@extends('plantilla')
@section('contenido')
@include('assets.nav')


<div class="container bg-white mt-5 p-5 sombra-contenedor ">

    <div class="row border p-3 justify-content-center ">
      <div class="col-12 text-center">
        <h4>CONTRATISTAS DE LA EMPRESA: <br> {{$empresa[0]->nombre}}</h4>
        @if (session('eliminado'))

            {{session('eliminado')}}

        @endif
      </div>
      <div class="col-auto mx-2">
        @if ($empresa[0]->sua == null)
          <small class="text-decoration-underline fw-bold" onclick="alert('Aún no cargan este documento')">
              Aún no se agrega SUA / Pago
          </small>         
        @else
          <a href="{{Storage::url($empresa[0]->sua)}}" target="_blank" class="btn btn-success btn-sm">
            <i class="fa fa-magnifying-glass"></i>
            VER SUA / PAGO
          </a>  
        @endif



      </div>
    </div>
  
  
    {{-- <div class="row border mt-3  p-3 sombra-encabezados">
      <div class="col-auto">
        <input type="search" class="form-control" autofocus>
      </div>
      <div class="col-auto mt-1">
        <button class="btn btn-success btn-sm">
          <i class=" fa fa-magnifying-glass"></i>
          BUSCAR
        </button>
      </div>
    </div> --}}
  
  
  
  @forelse ($contratistas as $contratista)
    @php
        $desautorizado = "";
    @endphp
    @if ($contratista->autorizado_entrar == 0)
        @php
            $desautorizado = 'desautorizado';
        @endphp
    @endif
      
  <div class="row mt-5 border p-3 sombra-filas animate__animated animate__bounceIn {{$desautorizado}}">      
    
 
  
          <div class="col-sm-6 col-md-6  col-lg-3 ">
            <b>Nombre: </b> <br>
            <small>{{$contratista->nombre_completo}}</small>
          </div>
  
          <div class="col-sm-6 col-md-6  col-lg-1">
            <b>NSS: </b> <br>
            <a href="{{Storage::url($contratista->nss)}}" target="_blank">NSS</a>
          </div>
          
  
          <div class="col-sm-12 col-md-6  col-lg-1">
            <b>INE: </b> <br>
            <a href="{{Storage::url($contratista->ine)}}" target="_blank">INE</a>
          </div>
  
  
          <div class="col-sm-12 col-md-6  col-lg-1">
            <b>DC3: </b> <br>
            <a href="{{Storage::url($contratista->dc3)}}" target="_blank">DC3</a>
          </div>

          <div class="col-2"></div>  {{--Para hacer bulto --}}
  
          {{-- <div class="col-sm-12 col-md-6 col-lg-2 text-center">
            <small class="fw-bold">ELIMINAR:</small> <br> 
            <a href="#" class="btn btn-danger btn-sm  w-100 p-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#e{{$contratista->id}}">
            <i class="fa fa-eraser mx-2"></i>
            </a>
          </div> --}}
  
          @if ($contratista->autorizado_entrar == 1)
            <div class="col-sm-12 col-md-6 col-lg-4 text-center">
              <small class="fw-bold">DESAUTORIZAR:</small> <br>
              <a href="#" class="btn btn-danger btn-sm w-100  p-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#un{{$contratista->id}}">
                <i class="fa-solid fa-x  mx-2"></i>
              </a>
            </div>            
          @endif


          @if ($contratista->autorizado_entrar == 0)
            <div class="col-sm-12 col-md-6 col-lg-4 text-center">
              <small class="fw-bold">AUTORIZAR:</small> <br>
              <a href="#" class="btn btn-success btn-sm w-100  p-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#a{{$contratista->id}}"">
                <i class="fa fa-circle-check mx-2"></i>
              </a>
            </div>            
          @endif




          



        
      </div>
  



   <!-- Modal eliminar trabajador -->
   <div class="modal fade" id="e{{$contratista->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿DESEA ELIMINAR AL TRABAJADOR?</h5>
          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border text-center">
          <form action="{{route('delete.contratista.encargado', $contratista->id)}}" method="post">
            @csrf @method('DELETE')
            <button  class="btn btn-danger w-100 mt-3" id="confirma" data-mdb-ripple-init >CONFIRMAR</button>
            </form>
            <br>
            <button type="button" class="btn btn-primary w-100" data-mdb-ripple-init data-mdb-dismiss="modal" >CANCELAR</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal eliminar trabajador -->



     <!-- Modal no autorzar al trabajador -->
     <div class="modal fade" id="un{{$contratista->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿DESEA DESAUTORIZAR AL TRABAJADOR?</h5>
            <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body border text-center">
            <form action="{{route('desautorizar.contratista', $contratista->id)}}" method="post">
              @csrf @method('PATCH')
              <button  class="btn btn-danger w-100 mt-3" id="confirma" data-mdb-ripple-init >CONFIRMAR</button>
              </form>
              <br>
              <button type="button" class="btn btn-primary w-100" data-mdb-ripple-init data-mdb-dismiss="modal" >CANCELAR</button>
          </div>
        </div>
      </div>
    </div>
  
 <!-- Modal no autorzar al trabajador -->




        <!-- Modal autorizar entrada trabajador trabajador -->
        <div class="modal fade" id="a{{$contratista->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿AUTORIZAR ENTRADA AL TRABAJADOR?</h5>
                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body border text-center">
                <button type="button" class="btn btn-primary w-100" data-mdb-ripple-init data-mdb-dismiss="modal" >CANCELAR</button>
                <form action="{{route('autoriza.contratista', $contratista->id)}}" method="POST">
                  @csrf @method('PATCH')
                  <button class="btn btn-success w-100 mt-3" id="confirma" data-mdb-ripple-init >CONFIRMAR</button>
                </form>


              </div>
            </div>
          </div>
        </div>
    
        <!-- Modal autorizar entrada trabajador trabajador -->








      @empty
          <li class="mt-4">No hay registros</li>
      @endforelse
  
  
  
  
  
  
  
  </div>
  
  
  
  
  
  
  
  
  

      
  

  
  
  
  
   
  
  
  
  
  
  
  
  
 
  
  
  <!-- AQUI ESTAN TODOS LOS MODALES -->
  
    
@endsection