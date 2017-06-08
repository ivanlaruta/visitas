@extends('template.dashboard')

@section('ventana','crear Tarjeta')

@section('content')
	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
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
					<h6>Ubicacion:</h4>
					
						{!! Form::select('id_ubicacion',$ubica,null,['class'=>'form-control','placeholder'=>'seleccione una ubicacion','required'])!!}
					</div>

					<div class="form-group">
					<h6>Empleado Asignado:</h4>
					<select class="form-control select2" data-width="100%" name="ci_empleado" id="empleados" >
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



@section('scripts')
<script>

$(document).ready(function() {
  $('#empleados').select2({
  	theme: "bootstrap"
  });

});

	
</script> 
@endsection