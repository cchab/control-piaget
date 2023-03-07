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
                DETALLES DEL DOCENTE<hr>
            </h2>

        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 30rem;">
              
                
                <div class="card-body">
                <h6 class="card-title"><strong>Grupo:</strong>
                     {{ $carga->nombre }} <hr>
                </h6>
                <h5 class="card-title"><strong>Grado:</strong> 
                    {{ $carga->fecha_nacimiento }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Nivel:</strong> 
                    {{ $carga->edad }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Periodo:</strong> 
                    {{ $carga->genero }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Docente:</strong> 
                    {{ $carga->email }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Asignatura:</strong> 
                    {{ $carga->telefono }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Bimestre:</strong> 
                    {{ $carga->localidad }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Alumnos:</strong> 
                    {{ $carga->domicilio }} 
                    <hr>
                </h5>

                
            
                </div>
            </div>
            </div>

            
@endsection