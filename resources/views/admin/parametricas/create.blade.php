@extends('template.dashboard')

@section('ventana','crear parametrica')

@section('content')
	

    	<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				{!! Form::open(['route'=>'parametricas.store','method'=>'POST'])!!}

				<div class="form-group">
						<h6>Parametrica</h6>
						{!! Form::select('nombre_tabla',['EXPEDIDO'=>'EXPEDIDO','TIPO_DOC'=>'TIPO DE DOCUMENTO','CIUDAD'=>'CIUDAD','TIPO_TAR'=>'TIPO DE TARJETA'],null,['class'=>'form-control','placeholder'=>'seleccione categoria','required'])!!}
					</div>

				<div class="form-group">

					{!! Form::label('id','ID')!!}
					{!! Form::text('id',null,['class'=> 'form-control','0placeholder'=>'ID para parametrica ej: LIC','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('descripcion','Descripcion')!!}
					{!! Form::text('descripcion',null,['class'=> 'form-control','placeholder'=>'Descripcion ejemplo: Licencia de conducir','required'])!!}

				</div>
				
				<div class="form-group">
					{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				</div>

				{!! Form::close()!!}
			</div>	
		</div>
	
@endsection

