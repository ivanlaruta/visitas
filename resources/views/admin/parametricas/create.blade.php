@extends('template.dashboard')

@section('ventana','crear parametrica')

@section('content')
	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				{!! Form::open(['route'=>'parametricas.store','method'=>'POST'])!!}

				<div class="form-group">
						<h6>Parametrica</h6>
						{!! Form::select('nombre_tabla',['ESTADO'=>'Estado','EXPEDIDO'=>'Expedido','ROL'=>'Rol de usuario','TIPO_DOC'=>'Tipos de documento','CIUDAD'=>'Ciudad','E_VISITA'=>'Estado visita','E_PRESTAMO'=>'Estado prestamo de tarjeta','TIPO_TAR'=>'Tipo de tarjeta'],null,['class'=>'form-control','placeholder'=>'seleccione categoria','required'])!!}
					</div>

				<div class="form-group">

					{!! Form::label('id','ID')!!}
					{!! Form::text('id',null,['class'=> 'form-control','0placeholder'=>'ingrese un ID','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('descripcion','Descripcion')!!}
					{!! Form::text('descripcion',null,['class'=> 'form-control','placeholder'=>'Descripcion','required'])!!}

				</div>
				
				<div class="form-group">
					{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>
	
@endsection

