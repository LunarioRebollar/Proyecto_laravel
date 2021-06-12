
<div class="form-group">
	<label for="nombre" class="control-label">{{'Nombre'}}</label>
	<input class="form-control {{$errors->has('nombre')?'is-invalid':''}}" type="text" name="nombre" id="nombre" value="{{isset($empleado->nombre)?$empleado->nombre:''}}">
	{!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}
</div>
	</br>
<div class="form-group">
	<label for="apellido_paterno" class="control-label">{{'Apellido Paterno'}}</label>
	<input class="form-control {{$errors->has('apellido_paterno')?'is-invalid':''}}" type="text" name="apellido_paterno" id="apellido_paterno" value="{{isset($empleado->apellido_paterno)?$empleado->apellido_paterno:''}}">
	{!! $errors->first('apellido_paterno','<div class="invalid-feedback">:message</div>') !!}
</div>
	</br>
<div class="form-group">
	<label for="apellido_materno" class="control-label">{{'Apellido Materno'}}</label>
	<input class="form-control {{$errors->has('apellido_materno')?'is-invalid':''}}" type="text" name="apellido_materno" id="apellido_materno" value="{{isset($empleado->apellido_materno)?$empleado->apellido_materno:''}}">
	{!! $errors->first('apellido_materno','<div class="invalid-feedback">:message</div>') !!}
</div>
	</br>
	<div class="form-group">
		<label for="area_trabajo" class="control-label">{{'Área de Trabajo'}}</label>
		<input class="form-control {{$errors->has('area_trabajo')?'is-invalid':''}}" type="text" name="area_trabajo" id="area_trabajo" value="{{isset($empleado->area_trabajo)?$empleado->area_trabajo:''}}">
		{!! $errors->first('area_trabajo','<div class="invalid-feedback">:message</div>') !!}
	</div>
		</br>
	<div class="form-group">
			<label for="sueldo_dia" class="control-label">{{'Sueldo por dia'}}</label>
			<input class="form-control {{$errors->has('sueldo_dia')?'is-invalid':''}}" type="text" name="sueldo_dia" id="sueldo_dia" value="{{isset($empleado->sueldo_dia)?$empleado->sueldo_dia:''}}">
			{!! $errors->first('sueldo_dia','<div class="invalid-feedback">:message</div>') !!}
</div>
			</br>
<div class="form-group">
	<label for="dias_trabajados" class="control-label">{{'Días trabajados'}}</label>
	<input class="form-control {{$errors->has('dias_trabajados')?'is-invalid':''}}" type="text" name="dias_trabajados" id="dias_trabajados" value="{{isset($empleado->dias_trabajados)?$empleado->dias_trabajados:''}}">
		{!! $errors->first('dias_trabajados','<div class="invalid-feedback">:message</div>') !!}
</div>
</br>
<div class="form-group">
	<label for="dias_trabajados" class="control-label">{{'Total Neto'}}</label>
	<input class="form-control {{$errors->has('total_neto')?'is-invalid':''}}" type="text" name="total_neto" id="total_neto" value="{{isset($empleado->total_neto)?$empleado->total_neto:''}}">
		{!! $errors->first('total_neto','<div class="invalid-feedback">:message</div>') !!}
</div>
</br>
<div class="form-group">
	<label for="total" class="control-label">{{'Total'}}</label>
	<input class="form-control {{$errors->has('total')?'is-invalid':''}}" type="text" name="total" id="total" value="{{isset($empleado->total)?$empleado->total:''}}">
		{!! $errors->first('total','<div class="invalid-feedback">:message</div>') !!}
</div>
</br>
<div class="form-group">
	<label for="bruto" class="control-label">{{'Total Bruto'}}</label>
	<input class="form-control {{$errors->has('bruto')?'is-invalid':''}}" type="text" name="bruto" id="bruto" value="{{isset($empleado->bruto)?$empleado->bruto:''}}">
		{!! $errors->first('bruto','<div class="invalid-feedback">:message</div>') !!}
</div>
</br>

	<input class="btn btn-success" type="submit" value="{{$Modo=='crear' ? 'Agregar empleado':'Modificar'}}">

	<a class="btn btn-primary" href="{{url('empleados')}}">Regresar</a>
