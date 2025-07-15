@extends('plantilla')
@section('contenido')
@include('assets.nav_encargado')

<style>
    body{
      background-image: url('/img/fondo_contraistas.jpg');
      background-size: cover
      background-repeat: no-repeat;
      background-position: center center;
      height: 100vh;
      margin: 0;
      padding:0;
      overflow: hidden;
    }
  </style>



<div class="container-fluid">

  <div class="row justify-content-center p-0">

    <div class="btn-group p-0 m-0">
      <button class="btn btn-primary button-zoom" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#agregar_manual">
        <i class="fa fa-plus-square mx-2"></i>
        Agregar Trabajadores Manualmente
      </button>

      <button class="btn btn-success button-zoom" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#agregar_excel">
        <i class="fa fa-file-excel mx-2"></i>
        Agregar Trabajadores con un Excel
      </button>
    </div>

  </div>


</div>


<div class="container-fluid " >

  <div class="row justify-content-center bg-white mt-5 mx-3 py-4 shadow-sm rounded" style="min-height: 1000px">

    <div class="col-12">

      <div class="row">

      @if (session('agregado'))
        <div class="col-12">
              <div class="alert alert-success notificaciones border border-3 border-success fw-bold d-flex align-items-center">
                <i class="fa fa-info-circle fa-2x me-3"></i>
                {{session('agregado')}}
              </div> 
        </div>
      @endif

          <div class="col-12 text-center border-bottom ">
              <h3>Trabajadores - {{Auth::guard('encargado')->user()->planta}}</h3>
          </div>
      </div>

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Nombre Completo</th>
              <th>Teléfono</th>
              <th>Contacto de Emergencia</th>
              <th>Puesto</th>
              <th>Enfermedades cronicas</th>
              <th class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($trabajadores as $trabajador)
              <tr>
                <td>{{$trabajador->nombre}}</td>
                <td>{{$trabajador->telefono}}</td>
                <td>{{$trabajador->contacto_emergencia}}</td>
                <td>{{$trabajador->puesto}}</td>
                <td>{{$trabajador->enfermedad_cronica}}</td>
                <td class="text-center">
                  <button class="btn btn-primary btn-sm m-1">Editar</button>
                  <button class="btn btn-danger btn-sm m-1" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#eli{{$trabajador->id}}">Eliminar</button>
                </td>
              </tr>    
            @empty
            
            @endforelse

          </tbody>
        </table>
    </div>
  </div>

</div>






{{-- aqui van los modales  --}}

<!-- Modal -->
<div class="modal fade" id="agregar_manual" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title  text-white" id="exampleModalLabel">Agregar Trabajador</h5>
        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div >
        <form class="row p-3 justify-content-center" enctype="multipart/form-data" action="{{route('agregar.trabajador')}}" method="POST">
          @csrf
          <div class="mt-2 col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="">Nombre completo</label>
            <input type="text" class="form-control" name="nombre">
          </div>

          <div class="mt-2 col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="">Puesto</label>
            <input type="text" class="form-control" name="puesto">
          </div>

          <div class="mt-2 col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="">Teléfono</label>
            <input type="text" class="form-control" name="telefono">
          </div>

          <div class="mt-2 col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="">Contacto de emergencia</label>
            <input type="text" class="form-control" name="contacto_emergencia">
          </div>

          <div class="mt-2 col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="">Enfermedades cronicas</label>
            <input type="text" class="form-control" name="enfermedad_cronica">
          </div>

          <div class="mt-2 col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="">Planta: </label>
            <select name="planta" class="form-control" id="">
              <option value="Planta 1" {{Auth::guard('encargado')->user()->planta == 'Planta 1' ? 'selected' : ''}}>
                Planta 1
              </option>
              <option value="Planta 2" {{Auth::guard('encargado')->user()->planta == 'Planta 2' ? 'selected' : ''}}>
                Planta 2
              </option>
              <option value="Planta 3" {{Auth::guard('encargado')->user()->planta == 'Planta 3' ? 'selected' : ''}}>Planta 3</option>
            </select>
          </div>

          <div class="mt-2 col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="">Brigada</label>
            <select name="brigada" class="form-control" id="">
              <option value="Comunicación">Comunicación</option>
              <option value="Primeros Auxilios">Primeros Auxilios</option>
              <option value="Busqueda y Rescate">Busqueda y Rescate</option>
              <option value="Evacuación">Evacuación</option>
            </select>
          </div>


          <div class="mt-2 col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="">Comisión</label>
            <select name="comision" class="form-control" id="">
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          </div>


          <div class="mt-2 col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="">Enfermedades cronicas</label>
            <input type="text" class="form-control" name="enfermedad_cronica">
          </div>

          <div class="mt-2 col-12 col-sm-12 col-md-6 col-lg-6">
            <label for="">Observaciones</label>
            <input type="text" class="form-control" name="observaciones">
          </div>

          <div class="mt-4 col-12">
            <input type="file" name="fotografia" class="form-control">
          </div>

          <div class="mt-4 col-4 shadow">
            <img src="/img/user.webp" class="img-fluid" alt="">
          </div>


        </div>
        <div class="modal-footer">
          <button  class="btn btn-primary" data-mdb-ripple-init>Guardar</button>
         </form> {{-- aqui esta el ciere del form --}}
        <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>




@forelse ($trabajadores as $trabajador)
    
{{-- modal para agregar a los trabajadores desde un excel. --}}
<div class="modal fade" id="eli{{$trabajador->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title  text-white" id="exampleModalLabel">Eliminar Trabajador</h5>
        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>¿Éliminar a {{$trabajador->nombre}}?</h2>
      </div>

      <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-mdb-ripple-init>Guardar</button>
         </form> {{-- aqui esta el ciere del form --}}
        <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>

@empty
    
@endforelse




@endsection