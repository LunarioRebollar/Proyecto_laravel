@extends('layouts.app');

@section('content');

<div class="container">
@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
    {{
        Session::get('Mensaje')
    }}
</div>
@endif


<a href="{{url('empleados/create')}}" class="btn btn-success">Agregar Empleado</a>
<br></br>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>Código</th>
            <th>Nombre Completo</th>
            <th>Área de trabajo</th>
            <th>Sueldo por dia</th>
            <th>Días trabajados</th>
            <th>Total Neto</th>
            <th>Total</th>
            <th>Bruto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
   @foreach ($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->nombre}} {{$empleado->apellido_paterno}} {{$empleado->apellido_materno}}</td>
            <td>{{$empleado->area_trabajo}}</td>
            <td>{{$empleado->sueldo_dia}}</td>
            <td>{{$empleado->dias_trabajados}}</td>
            <td>{{$empleado->total_neto}}</td>
            <td>{{$empleado->total}}</td>
            <td>{{$empleado->bruto}}</td>
            <td>
            	<a href="{{url('/empleados/'.$empleado->id.'/edit')}}" class="btn btn-warning">
                 Editar
                </a>

            	<form method="post" action="{{url('/empleados/'.$empleado->id)}}" style="display:inline">
            	{{csrf_field()}}
            	{{method_field('DELETE')}}
            	<button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            	</form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
    {{$empleados->links()}}
</div>
@endsection
