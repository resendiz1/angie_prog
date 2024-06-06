@extends('plantilla')
@include('assets.nav')
@section('contenido')

    <div class="container-fluid bg-white p-5 mt-4  shadow shadow-sm border boder-secondary">

        <div class="row justify-content-around">

            <div class="col-sm-12 col-md-12 col-lg-5 menu-contratistas pt-4 px-4 pb-2 text-white">

                <div class="row justify-content-center">
                    <div class="col-7 bg-dark text-center  justify-content-center">
                        <h4 class="mt-2">CONTRATISTAS</h4>
                    </div>
                </div>



                <div class="row mt-5 py-5 justify-content-center"  >

                    <div class="col-sm-12 col-md-12 col-lg-5  p-2 mb-0 " >
                        <a  class="btn btn-success" href="{{route('show.contratistas')}}" style="color:white;">
                            <i class="fa fa-building fa-2x"></i>
                            <h6 class="mt-2">Gestionar Empresas</h6>
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-5  p-2 mb-0 " >
                        <a  class="btn btn-primary" href="{{route('show.contratistas')}}" style="color:white;">
                            <i class="fa fa-eye fa-2x"></i>
                            <h6 class="mt-2">Contratistas Autorizados</h6>
                        </a>
                    </div>


                </div>

            </div>



                {{-- Menu del los extintores --}}
            <div class="col-sm-12 col-md-12 col-lg-5 menu-extintores pt-4 px-4 pb-2 text-white">

                <div class="row justify-content-center">
                    <div class="col-7 text-center  justify-content-center" style="background-color: rgb(184, 16, 16)">
                        <h4 class="mt-2">EXTINTORES</h4>
                    </div>
                </div>



                <div class="row mt-5 py-5 justify-content-center"  >

                    <div class="col-sm-12 col-md-12 col-lg-5  p-2 mb-0 " >
                        <a  class="btn btn-danger" href="#" style="color:white;">
                            <i class="fa-solid fa-fire-extinguisher fa-2x"></i>
                            <h6 class="mt-2">Gestionar Extintores</h6>
                        </a>
                    </div>


                </div>

            </div>
            {{-- Menu del los extintores --}}



        </div>

    </div>


@endsection