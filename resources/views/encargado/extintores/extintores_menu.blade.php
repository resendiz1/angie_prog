@extends('plantilla')
@section('contenido')
@include('assets.nav_encargado')

<div class="container mt-3 bg-white border border-5" style="height: 1000px;">
    


    <div class="row justify-content-center border border-bottom text-white mb-3" style="background-color: rgb(106, 87, 192)">  

        <div class="col-12 p-1">
            <div class="row d-flex align-items-center">
                <div class="col-4">
                    {{-- <img src="/img/extintor.webp" class="img-fluid" alt="" style="height: 100px"> --}}
                </div>
                <div class="col-4 text-center">
                    <h2  class="mt-2 mx-2">EXTINTORES</h2>
                    <strong class="mx-2">PLANTA 3</strong> <br>
                    <a href="{{route('perfil.encargado')}}" class="text-white" >regresar</a>
                </div>
                <div class="col-4"></div> {{--colabora a hacer esopacio de momento --}}
            </div>
        </div>
    </div>

    


    <div class="row mt-5  m-2">
        <div class="col-12">
            <div class="row">
                
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <form action="{{route('buscar.extintor')}}" method="POST">
                        @csrf
                     <input type="search" placeholder="Agente extintor o ubicación" name="query" class="form-control border border-5">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2 mb-3">
                    <button class="btn text-white mt-1 w-100" style="background-color: rgb(114, 89, 224)">
                        <i class="fa fa-search"></i>
                        buscar
                    </button>
                    </form>
                </div>


               <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                    @if ($errors->any())
                        <strong class="text-danger">Errores al llenar formulario: </strong>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
               </div>   {{--Esta para hacer espacio --}}



               <div class="col-sm-12 col-md-6 col-lg-1">
                <a href="#" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#agregar" class="btn btn-dark  mt-1 w-100">
                    <i class="fa-solid fa-charging-station"></i>
                    <i class="fa fa-plus"></i>
                </a>
               </div>
            </div>
        </div>
    </div>

    <div class="row my-4 p-5 d-flex justify-content-center border border-top" >

        <div class="col-12 text-center mb-4">
               <strong class="h5 fw-bold" style="text-decoration: underline"> Pagina: {{ $extintores->currentPage() }}  </strong>

        </div>

        @forelse ($extintores as $extintor)
        <div class="col-sm-12 col-md-6 col-lg-3  sombra-encabezados p-2 border mx-3 my-2">  {{-- all card extintores --}}

            {{-- Este es el row de los datos de la tarjeta del extintor --}}
            <div class="row">

                <div class="col-3 text-center my-2">
                    <strong class="h5"> #{{$extintor->numero}}</strong>
                </div>

             <div class="col-9 text-end mt-2">    {{-- Todo el dropdown de las opciones  --}}
                    <button class="btn btn-light btn-sm dropdown-toggle  " type="button" id="dropdownMenuButton" data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                    <i class="fa fa-bars"></i>
                  </button>
  
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="cursor: pointer">
                    <li>
                      <a class="dropdown-item" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#el{{$extintor->id}}">
                          <i class="fa fa-trash mx-2"></i>
                          Eliminar
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#ed{{$extintor->id}}">
                          <i class="fa-regular fa-pen-to-square mx-2"></i>
                          Actualizar
                      </a>
                     </li>
                     <li>
                      <a class="dropdown-item" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#ma{{$extintor->id}}">
                          <i class="fa fa-gear mx-2"></i>
                          Registrar mantenimiento
                      </a>
                     </li>
                     <li>
                      <a class="dropdown-item" href="{{route('detalle.extintor', $extintor->id)}}">
                          <i class="fa fa-eye mx-2"></i>
                          Detalles
                      </a>
                     </li>
                     <li>
                      <a class="dropdown-item" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#re{{$extintor->id}}">
                          <i class="fa-solid fa-charging-station mx-2"></i>
                          Registrar recarga
                      </a>
                     </li>
                  </ul>

                </div>



                <hr>
                <div class="col-12 text-center">
                    <div class="slider-container">
                        <div >
                            <img src="{{Storage::url($extintor->foto1)}}" class="img-fluid" alt="" >
                        </div>
                        <div ">
                            <img src="{{Storage::url($extintor->foto2)}}" class="img-fluid" alt="" >
                        </div>
                        <div> 
                            <img src="{{Storage::url($extintor->foto3)}}" class="img-fluid" alt="" >
                        </div>
                    </div>
                </div>
                

                <div class="col-12 mt-3">
                    <i class="fa fa-flask mx-2 "></i>
                    {{$extintor->agente_extintor}}
                </div>
                <div class="col-12 ">
                    <i class="fa fa-location-dot mx-2 "></i>
                    {{$extintor->ubicacion}}
                </div>
                <div class="col-12">
                    <i class="fa-solid fa-weight-scale mx-2 "></i>
                    {{$extintor->capacidad}} Kg
                </div>
            </div>

            
            {{-- Este es el row de los datos de la tarjeta del extintor --}}



        </div>  {{-- all card extintores --}}       

        @empty
        <div class="row justify-content-center mt-5">
            <div class="col-3 text-center">
              <img src="/img/img/vacio.png" class="img-fluid" alt="">
            </div>
            <div class="col-12 text-center">
              <h3>No hay datos por aqui</h3>
            </div>
          </div>
        @endforelse

    </div>


    <div class="row justify-content-center">
        <div class="col-3 text-center">
            <h6>{{$extintores->links()}} </h6>
        </div>
    </div>






    
</div> {{--  el que cierra todo el contenedor --}}
    
    



  









{{-- LOS MODALES LA CTM --}}





<!-- Modal registro de extintor  -->
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <div class="modal-header p-4  text-white" style="background-color: rgb(103, 87, 171)">
                <h3 class="text-center">Agregar Extintor</h3>
            </div>
            <div class="modal-body">

                <form action="{{route('agregar.extintor')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-2">
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Número de extintor</label>
                            <input type="number" name="numero" value="{{old('numero')}}" class="form-control">
                            
                            <input type="hidden" name="planta" value="{{Auth::user()->id}}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Ubicación</label>
                            <input type="text" name="ubicacion" value="{{old('ubicacion')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Agente extintor</label>
                            <input type="text" name="agente_extintor" value="{{old('agente_extintor')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Capacidad Kg</label>
                            <input type="text" name="capacidad" value="{{old('agente_extintor')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Tipo</label>
                            <input type="text" name="tipo" value="{{old('tipo')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Ultima recarga</label>
                            <input type="date" name="ultima_recarga" value="{{old('ultima_recarga')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Proxima recarga</label>
                            <input type="date" name="proxima_recarga" value="{{old('proxima_recarga')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Ultimo mantenimiento</label>
                            <input type="date" name="ultimo_mantenimiento" value="{{old('ultimo_mantenimiento')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Próximo mantenimiento</label>
                            <input type="date" name="proximo_mantenimiento" value="{{old('proximo_mantenimiento')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Ultima prueba hidrostatica</label>
                            <input type="date" name="ultima_prueba" value="{{old('ultima_prueba')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Proxima prueba hidrostatica</label>
                            <input type="date" name="proxima_prueba" value="{{old('proxima_prueba')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Señaletica</label>
                            <input type="text" name="letrero" value="{{old('letrero')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Fecha de fabricación</label>
                            <input type="date" name="fecha_fabricacion" value="{{old('fecha_fabricacion')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Vencimiento por antiguedad</label>
                            <input type="date" name="vencimiento_antiguedad" value="{{old('vencimiento_antiguedad')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Estado</label>
                            <input type="text" name="estado_actual" value="{{old('estado_actual')}}" class="form-control">
                        </div>
                        <div class="col-12 my-2">
                            <label for="" class="fw-bold">Observaciones</label>
                            <input type="text" name="observaciones" value="{{old('observaciones')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Foto 1</label>
                            <input type="file" name="foto1" value="{{old('foto1')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Foto 2</label>
                            <input type="file" name="foto2" value="{{old('foto2')}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Foto 3</label>
                            <input type="file" name="foto3" value="{{old('foto3')}}" class="form-control">
                        </div>
                    </div>   
                    
                    <div class="row mt-2">
                        <div class="col-12 text-center">
                            <button class="btn text-white  w-50" style="background-color: rgb(114, 89, 224)">
                                <i class="fa fa-save mx-2"></i>
                                Guardar
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- Modal registro de extintor  -->




@forelse ($extintores as $modal)
    

{{-- Modal que confirma eliminacion del extintor --}}
<div class="modal fade" id="el{{$modal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="exampleModalLabel">¿ELIMINAR EXTINTOR?</h5>

          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border text-center">

            <h5>Extintor: {{$modal->numero}}</h5>
          <form action="{{route('eliminar.extintor', $modal->id)}}" method="POST">
            @csrf @method('DELETE')

            <button  class="btn btn-danger w-100 mt-3" >Eliminar</button>

          </form>          
        </div>
      </div>
    </div>
</div>
{{-- Modal que confirma eliminacion del extintor --}}




{{-- Modal que registra el mantenimiento del extintor --}}
<div class="modal fade" id="ma{{$modal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white fw-bold">
          <small class="modal-title" id="exampleModalLabel">REGISTRAR MANTENIMIENTO</small>

          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('mantenimiento.extintor', $modal->id)}}" method="POST">
            @csrf @method('PATCH')
            <div class="form-group my-3">
                <label for="" class="fw-bold">Fecha del ultimo mantenimiento</label>
                <input type="date" name="ultimo_mantenimiento" value="{{$modal->ultimo_mantenimiento}}" class="form-control form-control">
            </div>
            <div class="form-group my-3">
                <label for="" class="fw-bold">Fecha del proximo mantenimiento</label>
                <input type="date" name="proximo_mantenimiento" value="{{$modal->proximo_mantenimiento}}" class="form-control form-control">
            </div>

            <button  class="btn btn-success w-100 mt-3" >CONFIRMAR</button>

          </form>
        </div>
      </div>
    </div>
</div>
{{-- Modal que registra el mantenimiento del extintor --}}





{{-- Modal que registra el relleno del extintor --}}
<div class="modal fade" id="re{{$modal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header bg-dark text-white">
          <small class="modal-title" id="exampleModalLabel">REGISTRAR RECARGA DE EXTINTOR</small>

          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('recarga.extintor', $modal->id)}}" method="POST">
            @csrf @method('PATCH')
            <div class="form-group my-3">
                <label for="" class="fw-bold">Fecha del ultimo relleno</label>
                <input type="date" value="{{$modal->ultima_recarga}}" name="ultima_recarga" class="form-control ">
            </div>
            <div class="form-group my-3">
                <label for="" class="fw-bold">Fecha del proximo relleno</label>
                <input type="date" value="{{$modal->proxima_recarga}}" name="proxima_recarga" class="form-control ">
            </div>
            <button  class="btn btn-success w-100 mt-3" >CONFIRMAR</button>
          </form>
        </div>
      </div>
    </div>
</div>
{{-- Modal que registra el relleno del extintor --}}











<!-- Modal edicion  de extintor  -->
<div class="modal fade" id="ed{{$modal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <div class="modal-header p-4  text-white" style="background-color:rgb(104, 90, 166)">
                <h5 class="text-center">Editar extintor</h5>
            </div>
            <div class="modal-body">

                <form action="{{route('editar.extintor', $modal->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PATCH')
                    <div class="row p-2">
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Número de extintor</label>
                            <input type="text" name="numero" value="{{$modal->numero}}" class="form-control">
                            <input type="hidden" name="planta" value="{{Auth::user()->planta}}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Ubicación</label>
                            <input type="text" name="ubicacion" value="{{$modal->ubicacion}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Agente extintor</label>
                            <input type="text" name="agente_extintor" value="{{$modal->agente_extintor}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Capacidad</label>
                            <input type="text" name="capacidad" value="{{$modal->capacidad}}" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Tipo</label>
                            <input type="text" name="tipo" class="form-control" value="{{$modal->tipo}}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Ultima recarga</label>
                            <input type="date" name="ultima_recarga" class="form-control" value="{{$modal->ultima_recarga}}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Proxima recarga</label>
                            <input type="date" name="proxima_recarga" class="form-control" value="{{$modal->proxima_recarga}}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Ultimo mantenimiento</label>
                            <input type="date" name="ultimo_mantenimiento" class="form-control" value="{{$modal->ultimo_mantenimiento}}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Próximo mantenimiento</label>
                            <input type="date" name="proximo_mantenimiento" class="form-control" value="{{$modal->proximo_mantenimiento}}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Ultima prueba hidrostatica</label>
                            <input type="date" name="ultima_prueba" class="form-control" value="{{$modal->ultima_prueba}}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Señaletica</label>
                            <input type="text" name="letrero" class="form-control" value="{{$modal->letrero}}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Fecha de fabricación</label>
                            <input type="date" name="fecha_fabricacion" class="form-control" value="{{$modal->fecha_fabricacion}}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Vencimiento por antiguedad</label>
                            <input type="date" name="vencimiento_antiguedad" class="form-control" value="{{$modal->vencimiento_antiguedad}}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Estado</label>
                            <input type="text" name="estado" class="form-control" value="{{$modal->estado_actual}}">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 my-2">
                            <label for="" class="fw-bold">Observaciones</label>
                            <textarea name="observaciones" class="form-control w-100 h-50">{{$modal->observaciones}}</textarea>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Foto 1</label>
                            <input type="file" name="foto1" value="{{$modal->foto1}}" class="form-control">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Foto 2</label>
                            <input type="file" name="foto2" value="{{$modal->foto2}}" class="form-control">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                            <label for="" class="fw-bold">Foto 3</label>
                            <input type="file" name="foto3" value="{{$modal->foto3}}" class="form-control">
                        </div>

                    </div>   
                
                    <div class="row justify-content-center my-3">
                        <div class="col-8 text-center">
                            <button class="btn w-100 text-center text-white" style="background-color: rgb(131, 73, 185)">Confirmar</button>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</div>
<!-- Modal edicion  de extintor  -->



@empty
    
@endforelse

{{-- LOS MODALES LA CTM --}}









{{-- scripts de notificaciones  --}}

<script>


document.addEventListener('DOMContentLoaded', function(){


    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "700",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    @if(session('actualizado'))
        toastr.success("{{session('actualizado')}}")
    @endif
    
    @if(session('recarga'))
        toastr.success("{{session('recarga')}}")
    @endif

    @if(session('mantenimiento'))
        toastr.success("{{session('mantenimiento')}}")
    @endif
   

    
    @if(session('extintor_agregado'))
        toastr.success("{{session('extintor_agregado')}}")
    @endif
    
    @if(session('eliminado'))
        toastr.error("{{session('eliminado')}}")
    @endif

    @if(session('error'))
        toasttr.error({{session('error')}})
    @endif




})



</script>

{{-- scripts de notificaciones  --}}

@endsection