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



<div class="container">

  <div class="row justify-content-center">

    <div class="col-sm-12 col-md-6 col-lg-4 text-center m-2">
      <button class="btn btn-primary image-magnifique" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#agregar_manual">
        <i class="fa fa-plus-square mx-2"></i>
        Agregar Trabajadores Manualmente
      </button>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4 text-center m-2">
      <button class="btn btn-success image-magnifique" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#agregar_excel">
        <i class="fa fa-file-excel mx-2"></i>
        Agregar Trabajadores con un Excel
      </button>
    </div>

  </div>


</div>


<div class="container bg-white mt-5 p-3 shadow-sm">

  <div class="row justify-content-center">
    <div class="col-12">
      @if (session('agregado'))
        <div class="alert alert-success notificaciones">
          {{session('agregado')}}
        </div> 
      @endif
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
            @forelse ($operadores as $operador)
              <tr>
                <td>{{$operador->nombre}}</td>
                <td>{{$operador->telefono}}</td>
                <td>{{$operador->contacto_emergencia}}</td>
                <td>{{$operador->puesto}}</td>
                <td>{{$operador->enfermedad_cronica}}</td>
                <td class="text-center">
                  <button class="btn btn-primary btn-sm m-1">Editar</button>
                  <button class="btn btn-danger btn-sm m-1">Eliminar</button>
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
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title  text-white" id="exampleModalLabel">Agregar Trabajador</h5>
        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('agregar.operador')}}" method="POST">
          @csrf
          <div class="form-group m-2">
            <label for="">Nombre completo</label>
            <input type="text" class="form-control" name="nombre">
          </div>

          <div class="form-group m-2">
            <label for="">Puesto</label>
            <input type="text" class="form-control" name="puesto">
          </div>

          <div class="form-group m-2">
            <label for="">Teléfono</label>
            <input type="text" class="form-control" name="telefono">
          </div>

          <div class="form-group m-2">
            <label for="">Contacto de emergencia</label>
            <input type="text" class="form-control" name="contacto_emergencia">
          </div>

          <div class="form-group m-2">
            <label for="">Enfermedades cronicas</label>
            <input type="text" class="form-control" name="enfermedad_cronica">
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






{{-- modal para agregar a los trabajadores desde un excel. --}}
<div class="modal fade" id="agregar_excel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title  text-white" id="exampleModalLabel">Agregar Trabajador</h5>
        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#">

          <div class="form-group m-2">
            <label for="">Cragar archivo de excel</label>
            <input type="file" class="form-control" name="excel_trabajadores">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-mdb-ripple-init>Guardar</button>
         </form> {{-- aqui esta el ciere del form --}}
        <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


@endsection