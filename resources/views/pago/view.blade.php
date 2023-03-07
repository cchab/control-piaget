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
            <h2 class="h5 mb-4">Detalles de Pago<hr></h2>


        <div class="row">
            <div class="col-md-6">


                <p class="card-title"><strong>Nombre del Alumno:</strong>
                    {{ $p->alumnos->nombre }} {{ $p->alumnos->primer_apellido." ".$p->alumnos->segundo_apellido}}
                </p>
                <p class="card-title"><strong>Matricula:</strong>
                     {{ $p->alumnos->id }}
                </p>
                <p class="card-title"><strong>Mes de pago:</strong>
                    {{ $p->nombre }}
                </p>
                <p class="card-title"><strong>Conceptos:</strong>
                @foreach($p->concepto as $c)
                <BR style="margin-left: 100px;">{{$c->nombre}}
                @endforeach
                </p>
                <p class="card-title"><strong>Total de pago:</strong>
                    {{ $p->importetotal }}
                </P>
                <p class="card-title"><strong>Forma de pago:</strong>
                    {{ $p->formaPago->tipo." ".$p->formaPago->nombre }}
                </p>
                <p class="card-title"><strong>Fecha de pago:</strong>
                    {{ date('d-m-Y', strtotime($p->fecha)) }}
                </p>

                @if ( $p->photo_pago !=NULL )
                <img class="card-img-top imgs" src="/fotosPagos/{{ $p->photo_pago }}" alt="Foto-Alumno" style="width:400px; margin: 0 auto;">
                @else
                <img class="card-img-top imgs" src="{{ asset('images/vacia.png') }}" alt="Foto-Alumno" style="width:400px; margin: 0 auto;">
                @endif

               <div class="card-body">
            </div>
            </div>
            <div class="form-group float-right mt-3" style= "float: right">
            <h2 class="text-center mb-3">
                <a href="/pago" class="btn btn-primary mr-2 mb-3">
                    <i class="mdi mdi-undo-variant"></i> Volver
                </a>

            </h2>
</div>


@endsection
