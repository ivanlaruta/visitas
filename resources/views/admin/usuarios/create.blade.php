@extends('template.dashboard')

@section('title','crear usuario')

@section('content')
	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  			  			<p class="text-center">Creacion de usuarios.</p>
  			<hr>
				{!! Form::open(['route'=>'users.store','method'=>'POST'])!!}

				<div class="form-group">
					{!! Form::label('ci_empleado','Empleado')!!}
					<select class="form-control" name="ci_empleado">
					<option value="">Selecione un empleado</option>
					    @foreach($emp as $emps)
					      <option value="{{$emps->ci}}">{{$emps->paterno}} {{$emps->nombre}}</option>
					    @endforeach
				  	</select>
				</div>

				{{-- <div class="form-group">
					{!! Form::label('ci_empleado','Empleado')!!}
					
						{!! Form::select('ci_empleado',$emp,null,['class'=>'form-control','placeholder'=>'seleccione un empleado','required'])!!}
					</div>
 --}}

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

