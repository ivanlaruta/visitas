@extends('template.dashboard')

@section('title','Datos de pago')

@section('content')
@section('ventana','Datos de pago')
    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				{!! Form::open(['route'=>'visitas.bajaTarjeta','method'=>'POST'])!!}
				
				<div class="form-group">

					{!! Form::label('Boleta','Boleta de deposito')!!}
					{!! Form::text('boleta_deposito',null,['class'=> 'form-control','placeholder'=>'Boleta de deposito','required'])!!}

					{!! Form::label('cuenta','Cuenta bancaria')!!}
					{!! Form::text('cuenta',null,['class'=> 'form-control','placeholder'=>'Cuenta bancaria','required'])!!}	

					{!! Form::label('monto','Monto de deposito')!!}
					{!! Form::text('monto',null,['class'=> 'form-control','placeholder'=>'monto de deposito','required'])!!}

					{!! Form::label('ci_visitante','Visitante')!!}
					{!! Form::text('ci_visitante',null,['class'=> 'form-control', 'readonly'])!!}	

					{!! Form::label('fecha','fecha de deposito')!!}

                    <div class="form-group date prueba">
		                
		                <div class='input-group'>
		               		{!! Form::text('fecha_deposito',null,['class'=> 'form-control','placeholder'=>'DD-MM-YYYY','aria-describedby'=>'seacrch'])!!}
		                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		                </div>
		            </div>

				<div class="form-group">
					{!! Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
				</div>
				{!! Form::close()!!}
			</div>	
		</div>

@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        $('.prueba').datepicker({
	    format: "dd-mm-yyyy",
	    endDate: "today",
	    todayBtn: "linked",
	    language: "es"
        });
    });
</script> 
@endsection