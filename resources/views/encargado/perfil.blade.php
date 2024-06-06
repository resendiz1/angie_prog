@extends('plantilla')
@include('assets.nav')
@section('contenido')

    <div class="container-fluid bg-white p-5 mt-4  shadow shadow-sm border boder-secondary">

        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-6 menu-contratistas pt-4 px-4 pb-2 text-white">

                <div class="row justify-content-center">
                    <div class="col-7 bg-dark text-center  justify-content-center">
                        <h4 class="mt-2">CONTRATISTAS</h4>
                    </div>
                </div>



                <div class="row mt-4 py-5">

                    <div class="col-sm-12 col-md-12 col-lg-4 px-0 mb-0 " >
                        <a class="btn btn-primary" href="{{route('show.contratistas')}}">
                            Gestionar Empresas
                        </a>
                    </div>


                </div>

            </div>

        </div>

    </div>


@endsection