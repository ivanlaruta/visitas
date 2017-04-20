@extends('template.dashboard')
@section('title','Lista de visitas')
@section('content')
@section('ventana','Visitas por fecha')

			

<div class="col-md-12">
		<div class="row">
  		<div class="col-md-10">
		{!! Form::open (['route' => 'reportes.visitasEntreFechas','method' => 'GET','class' => 'navbar-form pull-left'])!!}
			<div class="form-group date prueba">
                <label>Fecha inicial: </label>
                <div class='input-group'>
               		{!! Form::text('inicial',$recuperado -> inicial,['class'=> 'form-control','placeholder'=>'DD-MM-YYYY','aria-describedby'=>'seacrch'])!!}
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
            </div>
            <div class="form-group date prueba">
                <label>Fecha final: </label>
                <div class='input-group'>
                   	{!! Form::text('fin',$recuperado -> fin ,['class'=> 'form-control','placeholder'=>'DD-MM-YYYY','aria-describedby'=>'seacrch'])!!}
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
            </div>
            <div class="form-group">
					{!! Form::submit('Buscar',['class'=>'btn btn-info'])!!}
			</div>
		{!! Form::close()!!}
		
		</div>
		<div class="col-md-2">
			<div class="col-md-6">
				{!! Form::open (['route' => 'reportes.visitasFechas','method' => 'GET','class' => 'navbar-form pull-right'])!!}
					{!! Form::hidden('inicial',$recuperado -> inicial)!!}
					{!! Form::hidden('fin',$recuperado -> fin)!!}
					<div class="input-group">
					{{ Form::button('<i class="fa fa-file-pdf-o"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'data-toggle'=> 'tooltip', 'data-placement'=>'bottom', 'title'=>'Generar PDF'] )  }}
									
					</div>
				{!! Form::close()!!}
			</div>
			<div class="col-md-6">
				{!! Form::open (['route' => 'reportes.visitasFechas','method' => 'GET','class' => 'navbar-form pull-right'])!!}
					{!! Form::hidden('inicial',$recuperado -> inicial)!!}
					{!! Form::hidden('fin',$recuperado -> fin)!!}
					<div class="input-group">
					{{ Form::button('<i class="fa fa-file-excel-o"></i>', ['type' => 'submit', 'class' => 'btn btn-success', 'data-toggle'=> 'tooltip', 'data-placement'=>'bottom', 'title'=>'Generar excel' ] )  }}
									
					</div>
				{!! Form::close()!!}
			</div>
		</div>
	</div>	
	<hr>
	<div class="row">
		<div class="table-responsive">
                <table class="table table-hover table-striped">
			    <thead>
			        <tr>
			            <th>Documento</th>
						<th>Ex</th>
						<th>Doc</th>
						<th>Visitante</th>
						<th>Fecha Entrada</th>
						<th>Fecha Salida</th>
						<th>Motivo</th>
						<th>Vistado</th>
						<th>Tarjeta</th>
						<th>Obs</th>
						<th>Estado</th>
			        </tr>
			    </thead>
			    <tbody>	        
					@foreach($vi as $vis)
					@if($vis -> fecha_entrada < $vis -> fecha_salida)
						<tr class="warning">
					@else
						@if(is_null($vis -> hora_salida))
							<tr class="danger">
						@else
							<tr class="success">	
						@endif
					@endif
						<td>{{ $vis -> ci_visitante }}</td>
						<td>{{ $vis -> visitante -> ex}}</td>
						<td>{{ $vis -> tipo_doc }}</td>
						<td>{{ $vis -> visitante -> nombre }}  {{ $vis -> visitante -> paterno }}</td>	
						<td><span class="text-success">{{ date('d-m-Y', strtotime($vis -> fecha_entrada ))}} {{ $vis -> hora_entrada }}</span></td>	
						@if(is_null($vis -> hora_salida))
							<td>-- : -- : --</td>
						@else
							<td><span class="text-danger">{{ date('d-m-Y', strtotime($vis -> fecha_salida)) }} {{ $vis -> hora_salida }}</span></td>
						@endif	
						<td>{{ $vis -> motivo -> descripcion}}</td>
						<td>{{ $vis -> empleado -> nombre }}  {{ $vis -> empleado -> paterno }}
						<td><span class="text-info">{{ $vis -> id_tarjeta }}</td>
						<td>{{ $vis -> observaciones }}</td>
						@if($vis -> fecha_entrada < $vis -> fecha_salida)
							<td><span class="text-warning">Observado</span></td>
						@else
							@if(is_null($vis -> hora_salida))
								<td><span class="text-danger">En curso</span></td>
							@else
								<td><span class="text-success">Finalizado</span></td>
							@endif
						@endif
					</tr>
					@endforeach
			    </tbody>
			</table>
		</div>
		{{ $vi->links() }}
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
});
@endsection