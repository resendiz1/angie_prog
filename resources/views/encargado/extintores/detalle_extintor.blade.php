@extends('plantilla')
@section('contenido')


<div class="container mt-2 border p-5">
    <div class="row sombra-encabezados mb-4 border">
        <div class="col-12 text-center">
            <h1>Extintor: #{{$id->numero}}</h1>
        </div>
    </div>

    <div class="row justify-content-around d-flex align-items-center py-5 sombra-encabezados border">

        <div class="col-3 p-2 text-center border">
            <img src="{{Storage::url($id->foto3)}}" class="img-fluid" alt="">
        </div>
        <div class="col-3 p-2  text-center border">
            <img src="{{Storage::url($id->foto2)}}" class="img-fluid " alt="">
        </div>
        <div class="col-3 p-2 text-center border">
            <img src="{{Storage::url($id->foto1)}}" class="img-fluid " alt="">
        </div>
        
    </div>



    <div class="row ">

    </div>

</div>



@endsection