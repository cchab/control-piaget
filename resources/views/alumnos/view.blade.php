@extends('layouts.app')

@section('content')
<div class="container">
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Sección Alumnos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detalles Alumnos</li>
        </ol>
    </nav>




<div class="row justify-content-center">

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="h5 mb-4">DETALLES DEL ALUMNO<hr></h2>
        <form class="forms-sample" method="post" action="/cargas" enctype="multipart/form-data">
            @csrf



        <div class="row">
            <div class="col-md-6">
                
                @if ( $alumno->foto_estudiante !=NULL )
                <img class="card-img-top imgs" src="/fotosAlumnos/{{ $alumno->foto_estudiante }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">
                @else
                <img class="card-img-top imgs" src="{{ asset('images/users.png') }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">   
                @endif
                
                
                <p class="card-title"><strong>Nombre:</strong> 
                    {{ $alumno->nombre }} 
                </p> 
                
                <p class="card-title"><strong>Primer Apellido:</strong> 
                    {{ $alumno->primer_apellido }} 
                </p> 

                <p class="card-title"><strong>Segundo Apellido:</strong> 
                    {{ $alumno->segundo_apellido}} 
                </p>

                <p class="card-title"><strong>Genero:</strong> 
                    {{ $alumno->sexo }} 
                </p>

                <p class="card-title"><strong>Fecha Nacimiento:</strong> 
                    {{ $alumno->fecha_nacimiento  }} 
                </p>

                <p class="card-title"><strong>CURP:</strong> 
                    {{ $alumno->curp  }} 
                </p>

                <p class="card-title"><strong>Edad:</strong> 
                    {{ $alumno->edad  }} 
                </p>

                <p class="card-title"><strong>Tipo Sangre:</strong> 
                    {{ $alumno->tipo_sangre }} 
                </p>

                <p class="card-title"><strong>Nivel Escolar:</strong> 
                   
                    {{ $alumno->niveles->nombre}} 
                    
                </p>

                <p class="card-title"><strong>Grado:</strong> 
                    {{ $alumno->grados->numero}} 
                </p>

                <p class="card-title"><strong>Grupo:</strong> 
                  {{ $alumno->grupos->letra }}
                </p>

                <p class="card-title"><strong>Periodo escolar:</strong> 
                    {{ $alumno->periodos->nombre }} 
                    
                </p>
                
                <p class="card-title"><strong>Nombre Tutor:</strong> 
                    {{ $alumno->nombre_tutor}} 
                </p>
               
                <p class="card-title"><strong>Parentesco:</strong> 
                    {{ $alumno->parentesco}} 
                </p>

                <p class="card-title"><strong>Tutor principal:</strong> 
                    {{ $alumno->tutor_principal}} 
                </p>

                <p class="card-title"><strong>Dirección:</strong> 
                    {{ $alumno->direccion}} 
                </p>

                <p class="card-title"><strong>Colonia:</strong> 
                    {{ $alumno->colonia}} 
                </p>

                
                <p class="card-title"><strong>Teléfono contacto:</strong> 
                    {{ $alumno->telefono_contacto}} 
                </p>

                <p class="card-title"><strong>En caso de emergencia hablar a:</strong> 
                    {{ $alumno->nombre_emergencia}} 
                </p>

                <p class="card-title"><strong>Parentesco:</strong> 
                    {{ $alumno->parentesco2}} 
                </p>

               

                <p class="card-title"><strong>Tel. 1 Autorizada:</strong> 
                    {{ $alumno->tel1_autorizada}} 
                </p>

                <div class="form-group float-right mt-3" style= "float: right">
            <h2 class="text-center mb-3">
                <a href="/alumno" class="btn btn-primary mr-2 mb-3">
                    <i class="mdi mdi-undo-variant"></i> Volver
                </a> 
            
            </h2>

                
            
               
                </div>
            </div>
        </div>

            
@endsection

