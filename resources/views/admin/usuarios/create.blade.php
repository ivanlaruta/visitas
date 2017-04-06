@extends('admin.template.main')

@section('title','crear usuario')

@section('content')
	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				{!! Form::open(['route'=>'users.store','method'=>'POST'])!!}

				<div class="form-group">
					{!! Form::label('ci_empleado','Empleado')!!}
					{!! Form::text('ci_empleado',null,['class'=> 'form-control','placeholder'=>'CI empleado','required'])!!}
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
					{!! Form::label('id_rol','Rol')!!}
					{!! Form::select('id_rol',['0'=>'Operador','1'=>'Administrador'],null,['class'=>'form-control','placeholder'=>'seleccione un rol','required'])!!}
				</div>
				<div class="form-group">
					{!! Form::submit('registrar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>

@endsection

