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
            <div class="card" style="width: 30rem;">
                @if ( $alumno->foto_estudiante !=NULL )
                <img class="card-img-top imgs" src="/fotosAlumnos/{{ $alumno->foto_estudiante }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">
                @else
                <img class="card-img-top imgs" src="{{ asset('images/users.png') }}" alt="Foto-Alumno" style="width:200px; margin: 0 auto;">   
                @endif
                
               <div class="card-body">
                <h6 class="card-title"><strong>Nombre:</strong>
                     {{ $alumno->nombre }} <hr>
                </h6>
                <h5 class="card-title"><strong>Primer Apellido:</strong> 
                    {{ $alumno->primer_apellido }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Segundo Apellido:</strong> 
                    {{ $alumno->segundo_apellido }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Genero:</strong> 
                    {{ $alumno->sexo }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Fecha Nacimiento:</strong> 
                    {{ $alumno->fecha_nacimiento }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>CURP:</strong> 
                    {{ $alumno->curp }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Edad:</strong> 
                    {{ $alumno->edad }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Tipo Sangre:</strong> 
                    {{ $alumno->tipo_sangre }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Nivel Escolar:</strong> 
                    {{ $alumno->nivel_escolar }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Grado:</strong> 
                    {{ $alumno->grado }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Grupo:</strong> 
                    {{ $alumno->grupo }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Periodo escolar:</strong> 
                    {{ $alumno->periodo_escolar }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Domicilio:</strong> 
                    {{ $alumno->domicilio }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>En caso de emergencia hablar a:</strong> 
                    {{ $alumno->nombre_emergencia}} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Tel. emergencia:</strong> 
                    {{ $alumno->tel_emergencia}} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Persona autorizada:</strong> 
                    {{ $alumno->persona_autorizada}} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Parentesco:</strong> 
                    {{ $alumno->parentesco }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Tel. 1 autorizada:</strong> 
                    {{ $alumno->tel1_autorizada }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Tel. 2 autorizada:</strong> 
                    {{ $alumno->tel2_autorizada }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Domicilio persona autorizada:</strong> 
                    {{ $alumno->domicilio_autorizada }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Persona autorizada 2:</strong> 
                    {{ $alumno->persona_autorizada2}} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Parentesco 2:</strong> 
                    {{ $alumno->parentesco2 }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Tel. 1 autorizada 2:</strong> 
                    {{ $alumno->tel1_autorizada2 }} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Tel. 2 autorizada 2:</strong> 
                    {{ $alumno->tel2_autorizada2}} 
                    <hr>
                </h5>

                </h5>
                <h5 class="card-title"><strong>Domicilio persona autorizada 2:</strong> 
                    {{ $alumno->domicilio_autorizada2 }} 
                    <hr>
                </h5>
                
            
                <h5 class="card-title"><strong>Observeción:</strong> 
                    {{ $alumno->observ }} 
                    <hr>
                </h5>
                </div>
            </div>
        </div>

            
@endsection

