@extends('layouts.app')

@section('content')

</hr>
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Seccion pagos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de conceptos</li>
        </ol>
    </nav>

<div class="row justify-content-end";>
<a href="/concepto/create"  class="btn btn-secondary" style=" width: 100px; height: 40px;">
            Registar 
        </a>
</div>

<div class="row justify-content-end";>

</div>
<div class="card">
    <div class="card-body">
        <h2 class="h5 mb-4">LISTA DE CONCEPTOS<hr></h2>
        <div class="table-responsive">
        <table class="table table-centered table-nowrap mb-0 rounded">
        <thead class="thead-light">
            <tr>
            <th class="border-0 rounded-start">Concepto</th>
            <th class="border-0">Monto</th>
            <th class="border-0">Creacion</th>
            <th class="border-0 rounded-end">Acción</th>
</tr>
</thead>
<tbody>
    <tr>
        
    @foreach($Conceptos as $c)
    <td>{{$c->nombre}}</td>

        <td>{{$c->monto}}</td>
        <td>{{ date('d-m-Y', strtotime($c->fecha))}}</td>
        <td style="padding-right: 60px;">
                        <a href="/concepts/{{$c->id}}/edit" class="btn btn-secondary"  style="float: left; padding: 2px 5px;  margin-right: 3px" title="Actualizar Registro">
                            <i class="mdi mdi-autorenew"></i>Actualizar
                        </a>
                        <form action="/concepts/{{$c->id}}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-primary"  style="padding: 2px 5px;" title="Borrar Concepto">
                            <i class="mdi mdi-delete-sweep"></i>Borrar
                        </button>
                    </form>
                </td>
            </td>
    </tr>
    @endforeach
        
</tbody>
</hr>
</table>
</div>


@endsection

</div>