@extends('template.dashboard')

@section('ventana','Editar usuario')

@section('content')

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				  			
				{!! Form::open(array('route' => ['users.update_pass',$us->usuario], 'method' => 'get')) !!}﻿
				
				<div class="form-group">
					{!! Form::label('Ci empleado')!!}
					{!! Form::text('ci_empleado',  $us->ci_empleado ,['class'=> 'form-control', 'readonly'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('Empleado')!!}
					{!! Form::text('empleado',  $us->empleado-> nombre .' '.$us->empleado-> paterno  ,['class'=> 'form-control', 'readonly'])!!}
				</div>
				
				<div class="form-group">
					{!! Form::label('usuario')!!}
					{!! Form::text('usuario',  $us->usuario ,['class'=> 'form-control', 'readonly'])!!}
				</div>
				
				<div class="form-group">
					{!! Form::label('password',' Ingrese Password Actual')!!}
					{!! Form::password('password_ant',['class'=> 'form-control','placeholder'=>'Ingrese contraseña actual','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('password',' Ingrese Nuevo Password')!!}
					{!! Form::password('password1',['class'=> 'form-control','placeholder'=>'Ingrese nueva contraseña ','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('password',' Repita Nuevo Password')!!}
					{!! Form::password('password2',['class'=> 'form-control','placeholder'=>'Repita nueva contraseña ','required'])!!}
				</div>

							
<hr>
				<div class="form-group">
					{!! Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>

@endsection


