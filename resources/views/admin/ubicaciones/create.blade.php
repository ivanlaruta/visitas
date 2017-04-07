@extends('admin.template.main')

@section('title','crear Ubicacion')

@section('content')
	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  			  			<p class="text-center">Creacion de ubicaciones.</p>
  			<hr>
				{!! Form::open(['route'=>'ubicaciones.store','method'=>'POST'])!!}

				<div class="form-group">

					{!! Form::label('id','ID')!!}
					{!! Form::text('id_ubicacion',null,['class'=> 'form-control','placeholder'=>'Ingrese un Identificador','required'])!!}
					{!! Form::label('nombre','Nombre del lugar')!!}
					{!! Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingrese el nombre del lugar','required'])!!}
					
					<div class="form-group">
						{!! Form::label('ciu','Ciudad')!!}
						{!! Form::select('ciudad',['LP'=>'La Paz','CB'=>'Cochabamba','SC'=>'Santa Cruz','PT'=>'Potosi','SC'=>'Sucre','OR'=>'Oruro'],null,['class'=>'form-control','placeholder'=>'seleccione una ciudad','required'])!!}
					</div>
					
				</div>
				
				<div class="form-group">
					{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>
	
@endsection

