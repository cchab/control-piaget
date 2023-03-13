@extends('layouts.app')

@section('content')

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Seccion de Docentes</a></li>
            <li class="breadcrumb-item"><a href="#">Registrar docente</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detalles del docente</li>
            
        </ol>
    </nav>
  
  


<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="h5 mb-4">DETALLES DOCENTES<hr></h2>
          
        


        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 30rem;">
              
                
                <div class="card-body">
                <p class="card-title"><strong>Nombre completo:</strong>
                     {{ $profesores->nombre}} 
                </p>


                <p class="card-title"><strong>Fecha de nacimiento:</strong> 
                    {{ $profesores->fecha_nacimiento}} 
                </p>


                <p class="card-title"><strong>Edad:</strong> 
                    {{ $profesores->edad}} 
                </p>


                <p class="card-title"><strong>Genero:</strong> 
                    {{ $profesores->genero }} 
                </p>


                <p class="card-title"><strong>Nivel Academico:</strong> 
                    {{ $profesores->nivel}} 
                </p>


                <p class="card-title"><strong>Correo electronico:</strong> 
                    {{ $profesores->email }} 
                </p>


                <p class="card-title"><strong>Telefono:</strong> 
                    {{ $profesores->telefono }} 
                </p>


                <p class="card-title"><strong>Localidad:</strong> 
                    {{ $profesores->localidad}} 
                </p>


                <p class="card-title"><strong>Domicilio:</strong> 
                    {{ $profesores->domicilio}} 
                </p>
                

                <p class="card-title"><strong>Tipo:</strong> 
                    {{ $profesores->tipo}} 
                </p>

                @if ( $profesores->foto_profesor !=NULL )
                <img class="card-img-top imgs" src="/fotosProfesor/{{ $profesores->foto_profesor }}" alt="Foto-Profesor" style="width:400px; margin: 0 auto;">
                @else
                <img class="card-img-top imgs" src="{{ asset('images/vacia.png') }}" alt="Foto-Profesor" style="width:400px; margin: 0 auto;">   
                @endif

                
                <div class="form-group float-right mt-3" style="float: right">
                    <a href="/profes"  class="btn btn-primary btn-fw mb-3">Regresar</a>
                </div>

                </div>
            </div>
        </div>

            
@endsection 