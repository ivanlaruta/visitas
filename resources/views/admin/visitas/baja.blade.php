@extends('template.dashboard')

@section('title','Baja')

@section('content')
@section('ventana','Confirmacion de pago y baja de tarjeta')
    	<div class="row">
  			<div class="col-md-12">
  				{!! Form::open(['route'=>'visitas.bajaTarjeta','method'=>'POST'])!!}
				
				<div class="form-group">
				<div class="col-md-12">

					<div class="row">
						<input id="id_visita" name="id_visita" type="hidden" value="{{ $vi->id_visita }}">

						<div class="col-md-4">
						{!! Form::label('nom','Nombre')!!}
						{!! Form::text('nombre',$vi->visitante->nombre ." ". $vi->visitante->paterno ." " .$vi->visitante->materno,['class'=> 'form-control', 'readonly'])!!}
						</div>	

						<div class="col-md-2">
						{!! Form::label('ci_visitante','CI Visitante')!!}
						{!! Form::text('ci_visitante',$vi->ci_visitante,['class'=> 'form-control', 'readonly'])!!}
						</div>
						<div class="col-md-1">
						{!! Form::label('ex','Ex')!!}
						{!! Form::text('ex',$vi->visitante->ex,['class'=> 'form-control', 'readonly'])!!}
						</div>			
						
						<div class="col-md-2">
						{!! Form::label('te','Telefono')!!}
						{!! Form::text('te',$vi->visitante->telefono,['class'=> 'form-control', 'readonly'])!!}
						</div>
						<div class="form-group has-error">   
						<div class="col-md-3">
						{!! Form::label('ta','Tarjeta Observada')!!}
						{!! Form::text('id_tarjeta',$vi->id_tarjeta,['class'=> 'form-control', 'readonly'])!!}
						</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
						{!! Form::label('Boleta','Boleta de deposito')!!}
						{!! Form::text('boleta_deposito',null,['class'=> 'form-control','placeholder'=>'Boleta de deposito','required'])!!}
						</div>
						<div class="col-md-6">
						{!! Form::label('cuenta','Cuenta bancaria')!!}
						{!! Form::text('cuenta',null,['class'=> 'form-control','placeholder'=>'Cuenta bancaria','required'])!!}	
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
						{!! Form::label('monto','Monto de deposito')!!}
						{!! Form::text('monto',null,['class'=> 'form-control','placeholder'=>'monto de deposito','required'])!!}
						</div>
						<div class="col-md-6">
						
						{!! Form::label('fecha','fecha de deposito')!!}
		                    <div class="form-group date prueba">
				                <div class='input-group'>
				               		{!! Form::text('fecha_deposito',null,['class'=> 'form-control','placeholder'=>'DD-MM-YYYY','aria-describedby'=>'seacrch','required'])!!}
				                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
				                </div>
				            </div>
						</div>
					</div>
					<hr>
				</div>

					<div class="form-group">
						<div class="col-md-5 col-md-offset-5">
						{!! Form::submit('Dar de baja tarjeta',['class'=>'btn btn-danger'])!!}
						</div>
					</div>
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