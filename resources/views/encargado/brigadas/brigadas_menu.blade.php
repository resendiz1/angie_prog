@extends('plantilla')
@section('contenido')
@include('assets.nav_encargado')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
                        <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3 text-dark fw-bold" id="ex1" role="tablist">

                <li class="nav-item" role="presentation">
                    <a data-mdb-pill-init class="nav-link active" id="ex3-tab-1" href="#ex3-pills-1" role="tab" aria-controls="ex3-pills-1" aria-selected="true">Combate contra Incendios</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a data-mdb-pill-init class="nav-link active" id="ex3-tab-2" href="#ex3-pills-2" role="tab" aria-controls="ex3-pills-2" aria-selected="false">Primeros Auxilios</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a data-mdb-pill-init class="nav-link" id="ex3-tab-3" href="#ex3-pills-3" role="tab" aria-controls="ex3-pills-3" aria-selected="false" >Busqueda y rescate</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a data-mdb-pill-init class="nav-link" id="ex3-tab-3" href="#ex3-pills-3" role="tab" aria-controls="ex3-pills-3" aria-selected="false" >Evacuación</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a data-mdb-pill-init class="nav-link" id="ex3-tab-3" href="#ex3-pills-3" role="tab" aria-controls="ex3-pills-3" aria-selected="false" >Comunicación</a>
                </li>
            </ul>
            <!-- Pills navs -->
            
            <!-- Pills content -->
            <div class="tab-content" id="ex2-content">
                
                <div class="tab-pane fade show active bg-white p-5 rounded shadow-sm" id="ex3-pills-1" role="tabpanel" aria-labelledby="ex3-tab-1" > 
                
                    <div class="row">

                        <div class="col-12 text-center mb-5">
                            <h4>Agregar a la brigada de combate contra incendios</h4>
                        </div>


                        <div class="col-2 border border-4 p-3">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="" class="fw-bold"> Nombre completo
                                        <input type="text" class="form-control">
                                    </label>
                                </div>
        
                                <div class="col-12 mb-3">
                                    <label for="" class="fw-bold"> Area
                                        <input type="text" class="form-control">
                                    </label>
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <label for="" class="fw-bold"> Fotografía
                                        <input type="file" class="form-control">
                                        <img src="/img/img/user.png" class="img-fluid mt-3" alt="">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>



                
                </div>





                <div class="tab-pane fade" id="ex3-pills-2" role="tabpanel" aria-labelledby="ex3-tab-2" > 
                    Tab 2 content
                </div>
                <div class="tab-pane fade" id="ex3-pills-3" role="tabpanel" aria-labelledby="ex3-tab-3" > 
                    Tab 3 content
                </div>
            </div>
            <!-- Pills content -->
        </div>
    </div>
</div>




@endsection