@extends('template.dashboard')
@section('title','Lista de visitas')
@section('content')
@section('ventana','Todas las Visitas de su ubicacion actual')

<div class="navbar-form pull-right">
		<button type="button" class="btn btn-danger pdf" data-toggle="tooltip" title="Generar PDF" aria-label="Left Align">
		  <span class="fa fa-file-pdf-o"  aria-hidden="true"></span>
		</button>

							
							<div class="form-group">
							<div class="navbar-form pull-right">
							{{ Form::button('<i class="fa fa-file-excel-o"></i>', ['type' => 'submit', 'class' => 'btn btn-success miboton', 'data-toggle'=> 'tooltip', 'data-placement'=>'bottom', 'title'=>'Generar Excel' ] )  }}
							</div>	
							</div>	
						
</div>

<div>
	<table width="100%" class="table table-hover table-striped mitabla" id="todo">
	    <thead>
	        <tr>
	            <th>Documento</th>
				<th>Ex</th>
				<th>Doc</th>
				<th>Visitante</th>
				<th>Entrada</th>
				<th>Salida</th>
				<th>Motivo</th>
				<th>Vistado</th>
				<th>Tarjeta</th>
				<th>Obs</th>
				<th>Estado</th>
	        </tr>
	    </thead>
	    <tbody>	        
			@foreach($vi as $vis)
				@if($vis -> estado_visita == 1)
						<tr class="warning">
				@else
					@if($vis -> estado_visita == 2)
						<tr class="danger">
					@else
						@if($vis -> estado_visita == 3)
							<tr class="info">
						@else
							@if($vis -> estado_visita == 4)
								<tr class="orange">
							@else
								<tr class="success">
							@endif	
						@endif		
					@endif
				@endif
				<td>{{ $vis -> ci_visitante }}</td>
				<td>{{ $vis -> visitante -> ex}}</td>
				<td>{{ $vis -> tipo_doc }}</td>
				<td>{{ $vis -> visitante -> nombre }}  {{ $vis -> visitante -> paterno }}
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

				@if($vis -> estado_visita == 1)
					<td><span class="text-warning">En curso</span></td>	
				@else
					@if($vis -> estado_visita == 2)
						<td><span class="text-danger">Reportada</span></td>
					@else
						@if($vis -> estado_visita == 3)
							<td><span class="text-info">Regularizando</span></td>
						@else
							@if($vis -> estado_visita == 4)
								<td><span class="text-danger">Finalizada con tarjeta extraviada</span></td>
							@else
								<td><span class="text-danger">Finalizada</span></td>
							@endif
						@endif		
					@endif
				@endif
			

				{{-- @if($vis -> fecha_entrada < $vis -> fecha_salida)
					<td><span class="text-warning">Observado</span></td>
				@else
					@if(is_null($vis -> hora_salida))
						<td><span class="text-danger">En curso</span></td>
					@else
						<td><span class="text-success">Finalizado</span></td>
					@endif
				@endif --}}

			</tr>
			@endforeach
	    </tbody>
	</table>
</div>


@endsection

@section('scripts')
<script>

	$(document).ready(function(e) {
        
        $('.miboton').click(function(e) {
          $('.mitabla').table2excel({
            name:"toyosa",
            filename:"Reporte personalizado ",
            fileext:".xls"
          });         
        });
    });

    $(document).ready(function() {
        // alert('1');
        $('#todo').DataTable({
             "language": {
            
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }

        },
            responsive: true

        });
    });


    function printData()
	{
		var	html = "";
	    
		html+='<!DOCTYPE html>';
		html+='<html lang="en">';
		html+='<head>';
		html+='<meta charset="UTF-8">';
		html+='<title></title>';
		html+='<style>';
		html+='body {';
		html+='font-family: Arial, Helvetica, sans-serif;';
		html+='}';
		html+='table {';
		html+='border-collapse: collapse;';
		html+='width: 100%;';
		html+='}';
		html+='th, td {';
		html+='text-align: left;';
		html+='padding: 6px;';
		html+='font-size: xx-small;';
		html+='}';
		html+='tr:nth-child(even){background-color: #f2f2f2}';
		html+='th {';
		html+='background-color: #000;';
		html+='color: white;';
		html+='}';
		html+='';
		html+='td {';
		html+='font-weight: lighter !important;';
		html+='}';
		html+='.text-success {';
		html+='color: #3c763d;';
		html+='}';
		html+='.text-primary {';
		html+='color: #428bca;';
		html+='}';
		html+='.text-info {';
		html+='color: #31708f;';
		html+='}';
		html+='.text-danger {';
		html+='color: #a94442;';
		html+='}';
		html+='.text-warning {';
		html+='color: #8a6d3b;';
		html+='}';
		html+='.cabecera {';
		html+='background-color: #dedede;';
		html+='';
		html+='}';
		html+='.secundario {';
		html+='color: #428bca;';
		html+='text-align: right;';
		html+='font-size: xx-small;';
		html+='}';
		html+='.filtro {';
		html+='color: #787878;';
		html+='text-align: center;';
		html+='font-size: xx-small;';
		html+='}';
		html+='.tituloRep {';
		html+='text-align: center;';
		html+='}';
		html+='.titulo{';
		html+='color: red;';
		html+='text-align: right;';
		html+='font-weight: bold;';
		html+='}';
		html+='</style>';
		html+='</head>';
		html+='<body>';
		html+='<div>';
		html+='<div class="titulo">TOYOSA S.A.</div>';
		html+='<div class="secundario">{{ Auth::user()->empleado->ubicacion->nombre }}  |  <?php date_default_timezone_set('America/La_Paz'); $time = time(); echo date("d-m-Y H:i:s", $time);?>';
		html+='</div>';
		html+='</div>';
		html+='<hr>';
		html+='<section >';

		html+='<div><div class="tituloRep"> REPORTE PERSONALIZADO VISITAS</div></div><hr>';


	   var divToPrint=document.getElementById("todo");
	   newWin= window.open("");
	   newWin.document.write(html+divToPrint.outerHTML);
	   newWin.print();
	   newWin.close();
	}

	$('.pdf').on('click',function(){
	printData();
	})

    </script> 
@endsection