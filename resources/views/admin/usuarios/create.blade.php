@extends('admin.template.main')

@section('title','crear usuario')

@section('content')
	{!! Form::open(['route'=>'usuarios.store','method'=>'POST'])!!}

		<div class="form-group">
			{!! Form::label('empleado','Empleado')!!}
			{!! Form::text('empleado',null,['class'=> 'form-control','placeholder'=>'CI empleado','required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('usuario','Usuario')!!}
			{!! Form::text('usuario',null,['class'=> 'form-control','placeholder'=>'Ingrese nombre de Usuario','required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('password','Password')!!}
			{!! Form::password('password',['class'=> 'form-control','placeholder'=>'Ingrese una contraseña','required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('rol','Rol')!!}
			{!! Form::select('rol',['2'=>'Operador','1'=>'Administrador'],null,['class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			
			{!! Form::submit('registrar',['class'=>'btn btn-primary'])!!}
		</div>

	{!! Form::close()!!}

@endsection
