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
            <li class="breadcrumb-item"><a href="#">Sección de Carga Academica</a></li>
            <li class="breadcrumb-item"><a href="#">Lista de cargas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detalles carga academica</li>

        </ol>
    </nav>



<div class="row justify-content-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h2 class="h5 mb-4">DETALLES DE CARGAS<hr></h2>
            <form class="forms-sample" method="post" action="/cargas" enctype="multipart/form-data">
                @csrf


        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 30rem;">


                <div class="card-body">
                <p class="card-title"><strong>Grupo:</strong>
                     {{ $carga->grupos->letra }}
                </p>


                <p class="card-title"><strong>Grado:</strong>
                    {{ $carga->grados->numero}}
                </p>


                <p class="card-title"><strong>Nivel:</strong>
                    {{ $carga->niveles->nombre}}
                </p>


                <p class="card-title"><strong>Periodo:</strong>
                    {{ $carga->periodos->nombre }}
                </p>


                <p class="card-title"><strong>Asignatura:</strong>
                    {{ $carga->materias }}
                </p>


                <p class="card-title"><strong>Bimestre:</strong>
                    {{ $carga->bimestres->numero }}
                </p>


                <p class="card-title"><strong>Alumnos:</strong>
                    {{ $carga->alumnado}}
                </p>


                <div class="form-group float-right mt-3" style="float: right">

                    <a href="/cargas"  class="btn btn-primary btn-fw mb-3">Regresar</a>
                </div>

                </div>
            </div>
            </div>


@endsection
