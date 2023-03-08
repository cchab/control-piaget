
@extends('layouts.app')

@section('content')
<div class="container">



<div style="text-align:center; " >



</div>
</hr>


<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Horarios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de horarios</li>
        </ol>
    </nav>




<div class="row justify-content-end";>

</div>

<div class="card">
    <div class="card-body">
        <h2 class="h5 mb-4">LISTA DE HORARIOS<hr></h2>
<div class="table-responsive">
        <table class="table table-centered table-nowrap mb-0 rounded">
        <thead class="thead-light">
            <tr>

            <th class="border-0 rounded-start">Grupo</th>
            <th class="border-0">Grado</th>
            <th class="border-0">Aula</th>
            <th class="border-0">Dia</th>
            <th class="border-0">Hora inicio</th>
            <th class="border-0">Hora fin</th>
            <th class="border-0">Asignatura</th>
            <th class="border-0">Docente</th>
            <th class="border-0 rounded-end">Acción</th>
            </tr>
            </thead>
            <tbody>
    <tr>

    @foreach($Horarios as $h)

        <td>{{$h->grupos->letra}}</td>

        <td>{{$h->grados->numero}}</td>

        <td>{{$h->aula}}</td>

        <td>{{$h->diaS}}</td>

        <td>{{$h->hora}}</td>

        <td>{{$h->hora_fin}}</td>

        <td>{{$h->materias}}</td>

        <td>{{$h->profesores->nombre}}</td>

        <td>
            <form action="/profes/{{$h->id}}}" method="post">
                @method('DELETE')
                @csrf
                <a href="/profes/{{$h->id}}/edit" class="btn btn-secondary"  style="padding: 2px 5px;  margin-right: 3px" title="Actualizar Registro">
                    <i class="mdi mdi-autorenew"></i>Actualizar
                </a>

                <a class="btn btn-secondary" href="{{ route('profe.show',$h->id) }}"  style="padding: 2px 5px;  margin-right: 3px" title="Ver Detalles">
                    <i class="mdi mdi-account-card-details"></i>Ver</a>

                <button type="submit" class="btn btn-primary"  style="padding: 2px 5px;" title="Borrar docente">
                    <i class="mdi mdi-delete-sweep"></i>Borrar
                </button>


            </form>
    </tr>
    @endforeach


</tbody>
</hr>


</table>

</div>

<div class="form-group float-right mt-3" style="float: right">
    <a href="/horarios/create"  class="btn btn-primary btn-fw mb-3">Regresar</a>
</div>

@endsection

</div>
