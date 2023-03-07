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
            <li class="breadcrumb-item"><a href="#">Sección de Pagos</a></li>
            <li class="breadcrumb-item"><a href="#">Historial de Pagos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detalles de Pago</li>
        </ol>
    </nav>

<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="text-center mb-3">
                <a href="/profesor" class="btn btn-primary">
                    <i class="mdi mdi-undo-variant"></i> Volver
                </a> 
                DETALLES DE PAGO<hr>
            </h2>

        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 30rem;">
              
                
                <div class="card-body">
                <h5 class="card-title"><strong>Nombre del Alumno:</strong> 
                    {{ $alumno[0]->nombre }} 
                    <hr>
                </h5>
                
                <h5 class="card-title"><strong>Apellido:</strong> 
                    {{ $p->primer_apellido." ".$p->alumnos->segundo_apellido}} 
                    <hr>
                </h5>
                <h6 class="card-title"><strong>Matricula</strong>
                     {{ $alumno[0]->id }} <hr>
                </h6>
                <h5 class="card-title"><strong>Nombre</strong> 
                    {{ $p->nombre }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Total:</strong> 
                    {{ $p->importetotal }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Forma de pago:</strong> 
                    {{ $p->tipo }} 
                    <hr>
                </h5>
                <h5 class="card-title"><strong>Fecha de pago</strong> 
                    {{ date('d-m-Y', strtotime($p->fecha)) }} 
                    <hr>
                </h5>
                <div class="card" style="width: 30rem;">
                @if ( $p->photo_pago !=NULL )
                <img class="card-img-top imgs" src="/fotosPagos/{{ $p->photo_pago }}" alt="Foto-Alumno" style="width:400px; margin: 0 auto;">
                @else
                <img class="card-img-top imgs" src="{{ asset('images/vacia.png') }}" alt="Foto-Alumno" style="width:400px; margin: 0 auto;">   
                @endif
                
               <div class="card-body">

                
            
                </div>
            </div>
            </div>

            
@endsection