@extends('admin.template.main')

@section('title','Editar usuario')

@section('content')

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				
				{!! Form::open(array('route' => ['users.update',$us->usuario], 'method' => 'put')) !!}﻿
				
				<div class="form-group">
					{!! Form::label('id_rol','Rol')!!}
					{!! Form::select('id_rol',['0'=>'Operador','1'=>'Administrador'], $us -> id_rol ,['class'=>'form-control'])!!}
				</div>

				

				<div class="form-group">
					{!! Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>

@endsection


