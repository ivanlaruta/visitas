@extends('template.dashboard')

@section('title','Editar usuario')

@section('content')
	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				
				{!! Form::open(array('route' => ['usuarios.update',$us->usuario], 'method' => 'put')) !!}﻿
				
				<div class="form-group">
					{!! Form::label('id_rol','Rol')!!}
					{!! Form::select('id_rol',['2'=>'Operador','1'=>'Administrador'],null,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					{!! Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>
	
@endsection


