@extends('template.dashboard')

@section('title','crear Tarjeta')

@section('content')
	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				  			<p class="text-center">Creacion de tarjetas.</p>
  			<hr>
				{!! Form::open(['route'=>'tarjetas.store','method'=>'POST'])!!}

				<div class="form-group">

					<h6>Id:</h4>
					{!! Form::text('id_tarjeta',null,['class'=> 'form-control','placeholder'=>'Ingrese nuero de tarjeta','required'])!!}
					
					<h6>Contraseña:</h4>
					{!! Form::text('psw',null,['class'=> 'form-control','placeholder'=>'Ingrese una contraseña (Opcional)'])!!}
					
					<div class="form-group">
					<h6>Tipo Tarjeta:</h4>
					{!! Form::select('tipo_tarjeta',$tipo,null,['class'=>'form-control','placeholder'=>'seleccione un tipo','required'])!!}
					</div>
					
					<div class="form-group">
					{!! Form::label('email','Ubicacion')!!}
						{!! Form::select('id_ubicacion',$ubica,null,['class'=>'form-control','placeholder'=>'seleccione una ubicacion','required'])!!}
					</div>

					<div class="form-group">
					<h6>Empleado:</h4>
					<select class="form-control" name="ci_empleado">
						<option value="">Selecione un empleado (Opcional) </option>
					    @foreach($empleados as $emp)
					      <option value="{{$emp->ci}}">{{$emp->paterno}} {{$emp->nombre}}</option>
					    @endforeach
				  	</select>
					</div>
					
					
					
				</div>
				
				<div class="form-group">
					{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>
	
@endsection

