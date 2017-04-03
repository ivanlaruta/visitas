@extends('ope.template.main')

@section('title','visitas')

@section('content')
	
	<div class="row">
		{!! Form::open(['route'=>'visitas.store','method'=>'POST'])!!}
		
		<div class="col-md-4">

			<div class="row">
		      	<div class="col-md-5">
					<div class="form-group">
						<h6>Nro. Documento</h4>
						{!! Form::text('ci_visitante',null,['class'=> 'form-control','placeholder'=>'Nro doc','required'])!!}
					</div>
		      	</div>
		      	<div class="col-md-3">
					<div class="form-group">
						<h6>Expendido</h4>
						{!! Form::select('id_rol',['LP','OR','PT','CH','CH','TJ','BN','PA','SC'],null,['class'=>'form-control'])!!}
					</div>
		      	</div>
		      	<div class="col-md-4">
					<div class="form-group">
					<h6>Tipo Documento</h4>
						{!! Form::select('tipo_doc',['ci'=>'Cedula de identidad','lic'=>'Licencia de conducir'],null,['class'=>'form-control'])!!}
					</div>
		      	</div>
	   		</div>
		</div>

		<div class="col-md-4">
			
			<div class="form-group">
				<h6>Nombre:</h4>
				{!! Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingrese nombre de visitante','required'])!!}
			</div>
			<div class="form-group">
				<h6>Paterno:</h4>
				{!! Form::text('paterno',null,['class'=> 'form-control','placeholder'=>'Ingrese apellido paterno','required'])!!}
			</div>
			<div class="form-group">
				<h6>Materno:</h4>
				{!! Form::text('materno',null,['class'=> 'form-control','placeholder'=>'Ingrese apellido materno','required'])!!}
			</div>
			<div class="form-group">
				<h6>Telefono:</h4>
				{!! Form::text('telefono',null,['class'=> 'form-control','placeholder'=>'Ingrese telefono','required'])!!}
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="form-group">
				<h6>Motivo:</h4>
				{!! Form::select('id_motivo',['1'=>'Entrevista','2'=>'Visita'],null,['class'=>'form-control'])!!}
			</div>
			<div class="form-group">
				<h6>Empleado Visitado:</h4>
				{!! Form::select('ci_empleado',['8264209'=>'Ivan Laruta','12345678'=>'Maria Tarifa'],null,['class'=>'form-control'])!!}
			</div>
			<div class="form-group">
				<h6>Obervaciones:</h4>
				{!! Form::text('observaciones',null,['class'=> 'form-control','placeholder'=>'observacion','required'])!!}
			</div>
			<div class="form-group">
				<h6>Tarejeta asignada:</h4>
				{!! Form::select('id_tarjeta',['1'=>'Visita','2'=>'Personal autorizado'],null,['class'=>'form-control'])!!}
			</div>
			<div class="form-group">
				<div class="col-md-6">
				<h6>Fecha:</h4>
				{{-- {!! Form::label('fecha', \Carbon\Carbon::now())!!} --}}
				{!! Form::date('fecha', \Carbon\Carbon::now()); !!}
				</div>
				<div class="col-md-6">
				<h6>Hora:</h4>

				{!! Form::text('hora_entrada',null,['class'=> 'form-control','placeholder'=>'15:00:25','required'])!!}
				</div>
			</div>
		     			 
		</div>	
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-group">
				{!! Form::submit('Marcar Ingreso visita',['class'=>'btn btn-primary'])!!}
			</div>
			{!! Form::close()!!}
		</div>	
	</div>
	
@endsection

