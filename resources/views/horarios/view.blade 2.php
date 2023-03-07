@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="text-center mb-3">
                <a href="/profesor" class="btn btn-primary">
                    <i class="mdi mdi-undo-variant"></i> Volver
                </a> 
                DETALLES DEL HORARIO<hr>
            </h2>

        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 30rem;">
              
                
                <div class="card-body">
                <h6 class="card-title"><strong>Nombre:</strong>
                     {{ $horario->nombre }} <hr>
                </h6>
                <h5 class="card-title"><strong>Aula:</strong> 
                    {{ $horario->aula }} 
                    <hr>
                </h5>


             <!--   <h5 class="card-title"><strong>Edad:</strong> 
                    {{ $profesor->edad }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Genero:</strong> 
                    {{ $profesor->genero }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Correo Electronico:</strong> 
                    {{ $profesor->email }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Telefono:</strong> 
                    {{ $profesor->telefono }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Localidad:</strong> 
                    {{ $profesor->localidad }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Domicilio:</strong> 
                    {{ $profesor->domicilio }} 
                    <hr>
                </h5> -->

                
            
                </div>
            </div>
            </div>

            
@endsection