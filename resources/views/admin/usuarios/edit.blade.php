@extends('template.dashboard')

@section('ventana','Editar usuario')

@section('content')

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				  			
				{!! Form::open(array('route' => ['users.update',$us->usuario], 'method' => 'put')) !!}﻿
				
				<div class="form-group">
					{!! Form::label('Ci empleado')!!}
					{!! Form::text('ci_empleado',  $us->ci_empleado ,['class'=> 'form-control', 'readonly'])!!}
				</div>
				
				<div class="form-group">
					{!! Form::label('usuario')!!}
					{!! Form::text('usuario',  $us->usuario ,['class'=> 'form-control', 'readonly'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('password',' Nuevo Password')!!}
					{!! Form::password('password',['class'=> 'form-control','placeholder'=>'Ingrese nueva contraseña (Opcional)'])!!}
				</div>

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


