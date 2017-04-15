@extends('template.dashboard')

@section('ventana','Editar Tarjeta')

@section('content')

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				{!! Form::open(array('route' => ['tarjetas.update',$ta->id_tarjeta], 'method' => 'put')) !!}﻿
				
				<div class="form-group">

					<h6>Id:</h4>
					{!! Form::text('id_tarjeta',$ta->id_tarjeta,['class'=> 'form-control','placeholder'=>'Ingrese nuero de tarjeta','required'])!!}
					
					<h6>PSW:</h4>
					{!! Form::text('psw',$ta->id_psw,['class'=> 'form-control','placeholder'=>'Ingrese un PSW'])!!}
					
					<div class="form-group">
					<h6>Tipo Tarjeta:</h4>
					{!! Form::select('tipo_tarjeta',$tipo,$ta->tipo_tarjeta,['class'=>'form-control','placeholder'=>'seleccione un tipo','required'])!!}
					</div>
					
					<div class="form-group">
					<h6>Ubicacion:</h4>
						{!! Form::select('id_ubicacion',$ubica,$ta->id_ubicacion,['class'=>'form-control','placeholder'=>'seleccione una ubicacion','required'])!!}
					</div>

					<div class="form-group">
					<h6>Empleado:</h4>
					<select class="form-control" name="ci_empleado">
						<option value="">Selecione un empleado</option>
					    @foreach($empleados as $emp)
					      <option value="{{$emp->ci}}">{{$emp->paterno}} {{$emp->nombre}}</option>
					    @endforeach
				  	</select>
					</div>





				</div>
				<div class="form-group">
					{!! Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>

@endsection


