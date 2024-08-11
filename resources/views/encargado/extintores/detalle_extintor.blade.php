@extends('plantilla')
@section('contenido')


<div class="container mt-2 border p-5 bg-white" style="height: 1000px">
    <div class="row  mb-4">
        <div class="col-12 text-center">
            <h1>Extintor: #{{$id->numero}}</h1>
        </div>
    </div>

    <div class="row justify-content-around d-flex align-items-center py-5 r">

        <div class="col-3 p-2 text-center border">
            <img src="{{Storage::url($id->foto3)}}" class="img-fluid image-magnifique" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#a{{$id->id}}" alt="">
        </div>
        <div class="col-3 p-2  text-center border">
            <img src="{{Storage::url($id->foto2)}}" class="img-fluid image-magnifique" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#b{{$id->id}}" alt="">
        </div>
        <div class="col-3 p-2 text-center border">
            <img src="{{Storage::url($id->foto1)}}" class="img-fluid image-magnifique " data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#c{{$id->id}}" alt="">
        </div>
        
    </div>



    <div class="row d-flex justify-content-around">
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Ubicación: </span> <br>
            <span>{{$id->ubicacion}}</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Agente Extintor: </span> <br>
            <span>{{$id->agente_extintor}}</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Capacidad: </span> <br>
            <span>{{$id->capacidad}} Kg</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Tipo</span> <br>
            <span>{{$id->tipo}}</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Ultima recarga: </span> <br>
            <span>{{$id->ultima_recarga}}</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Proxima recarga</span> <br>
            <span>{{$id->proxima_recarga}}</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Ultimo mantenimiento: </span> <br>
            <span>{{$id->ultimo_mantenimiento}}</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Proximo mantenimientp</span> <br>
            <span>{{$id->proximo_mantenimiento}}</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Ultima prueba hidrostatica: </span> <br>
            <span>{{$id->ultima_prueba}}</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Señaletica: </span> <br>
            <span>{{$id->letrero}}</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Fecha de fabricación: </span> <br>
            <span>{{$id->fecha_fabricacion}}</span>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Vencimiento por antiguedad: </span> <br>
            <span>{{$id->vencimiento_antiguedad}}</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Estado: </span> <br>
            <span>{{$id->estado}}</span>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 m-2 border p-2">
            <span class="fw-bold py-0 my-0">Observaciones: </span> <br>
            <span>{{$id->observaciones}}</span>
        </div>

    </div>

</div>












{{-- los modales de la imgenes van aqui --}}
<div class="modal fade" id="a{{$id->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <img src="{{Storage::url($id->foto1)}}" class="img-fluid" alt="">
      </div>
    </div>
</div>



<div class="modal fade" id="b{{$id->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <img src="{{Storage::url($id->foto2)}}" class="img-fluid" alt="">
      </div>
    </div>
</div>

<div class="modal fade" id="c{{$id->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <img src="{{Storage::url($id->foto3)}}" class="img-fluid" alt="">
      </div>
    </div>
</div>
{{-- los modales de la imgenes van aqui --}}

@endsection