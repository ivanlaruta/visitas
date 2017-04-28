@extends('template.dashboard')

@section('title','crear empleado')

@section('content')
@section('ventana','Creacion de empleados')	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				{!! Form::open(['route'=>'empleados.store','method'=>'POST'])!!}

				
				<div class="form-group">
					<div class="form-group">
					{!! Form::label('id','CI')!!}
					</div>
		        			<div class="form-group">
					{!! Form::text('ci',null,['class'=> 'form-control','placeholder'=>'ci','required'])!!}
					</div>
					
					<div class="form-group">
						<h6>Expedido</h6>
						{!! Form::select('ex',$expe,null,['class'=>'form-control','placeholder'=>'Expedido','required'])!!}
					</div>
		      
					<div class="form-group">
					{!! Form::label('nom','Nombre')!!}
					</div>
					<div class="form-group">
					{!! Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingrese Nombre','required'])!!}
					</div>
					<div class="form-group">
					{!! Form::label('pat','Paterno')!!}
					</div>
					<div class="form-group">
					{!! Form::text('paterno',null,['class'=> 'form-control','placeholder'=>'Ingrese apellido Paterno','required'])!!}
					</div>
					<div class="form-group">
					{!! Form::label('materno','Materno')!!}
					</div>
					<div class="form-group">
					{!! Form::text('materno',null,['class'=> 'form-control','placeholder'=>'ingrese apellido Materno'])!!}
					</div>

					<div class="form-group">
					{!! Form::label('email','Correo')!!}
					</div>
					<div class="form-group">
					{!! Form::email('email',null,['class'=> 'form-control','placeholder'=>'ejemplo@toyosa.com'])!!}
					</div>

					<div class="form-group">
					{!! Form::label('cargo','Cargo')!!}
					{!! Form::select('id_cargo',$cargos,null,['class'=>'form-control cargos','data-width'=>"100%",'placeholder'=>'seleccione un cargo','required'])!!}
					</div>
					
					<div class="form-group" >
					{!! Form::label('email','Ubicacion')!!}
						{!! Form::select('id_ubicacion',$ubica,null,['class'=>'form-control','placeholder'=>'seleccione una ubicacion','required'])!!}
					</div>


					<div class="form-group">
					{!! Form::label('te','Telefono')!!}
					</div>
					<div class="form-group">
					{!! Form::text('telefono',null,['class'=> 'form-control','placeholder'=>'77712345'])!!}
					</div>

				</div>

				<div class="form-group">
					{!! Form::submit('registrar',['class'=>'btn btn-primary'])!!}
				</div>



				{!! Form::close()!!}
			</div>	
		</div>

@endsection

@section('scripts')
<script>


$(document).ready(function() {
  $('.cargos').select2({
  	theme: "bootstrap"
  });

});
	
</script> 
@endsection