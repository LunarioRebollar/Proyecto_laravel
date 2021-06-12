@extends('layouts.app');

@section('content');

<div class="container">

<form action="{{url('/empleados/'.$empleado->id_empleado)}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	{{method_field('PATCH')}}
	@include('empleados.form',['Modo'=>'editar'])

</form>
</div>
@endsection
