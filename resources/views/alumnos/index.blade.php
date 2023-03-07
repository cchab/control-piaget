
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
            <li class="breadcrumb-item active" aria-current="page">Lista de alumnos</li>
        </ol>
    </nav>

<div class="row justify-content-end";>

</div>

<div class="card">
    <div class="card-body">
        <h2 class="h5 mb-4">LISTA DE ALUMNOS<hr></h2>
        <div class="table-responsive">
        <table class="table table-centered table-nowrap mb-0 rounded">
        <thead class="thead-light">
            <tr>
            <th class="border-0 rounded-start">Nombre del alumno</th>
            <th class="border-0">Tutor</th>
            <th class="border-0">Teléfono </th>

            <th class="border-0">En caso de emergencia hablar a</th>
            <th class="border-0">Parentesco</th>
            <th class="border-0">Teléfono </th>

            <th class="border-0 rounded-end">Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>

            @foreach ($alumnos as $alumno)

                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->nombre_tutor }}</td>
                <td>{{ $alumno->telefono_contacto}}</td>

                <td>{{ $alumno->nombre_emergencia}}</td>
                <td>{{ $alumno->parentesco2}}</td>
                <td>{{ $alumno->tel1_autorizada}}</td>
                <td>
                    <form action="/alumno/{{$alumno->id}}}" method="post">
                        @method('DELETE')
                        @csrf
                         <a class="btn btn-secondary" href="{{ route('alumno.show',$alumno->id) }}"  style="padding: 2px 5px;  margin-right: 3px" title="Ver Detalles">
                            <i class="mdi mdi-account-card-details"></i> Ver
                        </a>

                        <a class="btn btn-secondary" href="{{ route('alumno.edit',$alumno->id) }}"  style="padding: 2px 5px; margin-right: 3px" title="Actualizar Registro">
                            <i class="mdi mdi-autorenew"></i>Actualizar
                        </a>

                            <button type="submit" class="btn btn-primary" onclick="return confirm('Estas seguro que deseas borrar el alumno: {{ $alumno->nombre }} ?');"  style="padding: 2px 5px;" title="Borrar Alumno">
                            <i class="mdi mdi-delete-sweep"></i>Borrar
                        </button>
                    </form>


                </td>
            </tr>
            @endforeach

        </tbody>
</hr>
</table>

</div>


@endsection

</div>


