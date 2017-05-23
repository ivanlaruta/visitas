@extends('template.dashboard')
@section('ventana','Lista de tarjetas')

@section('content')
{{-- <div class="navbar-form pull-right">
		<button type="button" class="btn btn-danger pdf" data-toggle="tooltip" title="Generar PDF" aria-label="Left Align">
		  <span class="fa fa-file-pdf-o"  aria-hidden="true"></span>
		</button>

							
							<div class="form-group">
							<div class="navbar-form pull-right">
							{{ Form::button('<i class="fa fa-file-excel-o"></i>', ['type' => 'submit', 'class' => 'btn btn-success miboton', 'data-toggle'=> 'tooltip', 'data-placement'=>'bottom', 'title'=>'Generar Excel' ] )  }}
							</div>	
							</div>	
						
</div> --}}
    	<div class="row">
  			<div class="col-md-12 ">
				<a href="{{ route('tarjetas.create')}}" class="btn btn-success">Registrar nueva tarjeta</a><hr>
				 <div class="table-responsive">
				<table width="100%" class="table table-striped table-bordered mitabla" id="algo">

					<thead>
						<th>ID</th>
						<th>Tipo tarjeta</th>
						<th>Contraseña</th>
						<th>Ubicacion</th>
						<th>Empleado asignado</th>
						<th></th>
					</thead>
					<tbody>
						@foreach($ta as $tar)
							<tr>								
								<td>{{ $tar-> id_tarjeta }}</td>
								<td>{{ $tar -> tipo_tarjeta }}</td>
								@if(is_null($tar -> ci_empleado))
									<td> --- </td>
								@else
									<td>{{ $tar -> psw }}</td>
								@endif

								@if(is_null($tar -> id_ubicacion))
									<td> --- </td>
								@else
									<td>{{ $tar -> ubicacion -> nombre }}</td>
								@endif


								@if(is_null($tar -> ci_empleado))
									<td>No asignado</td>
								@else
									<td>{{ $tar -> empleado -> nombre}} {{ $tar -> empleado -> paterno}}</td>
								@endif

								<td>
								<div class="row">
									<div class="col-md-6">
									<a href="{{ route('tarjetas.edit',$tar -> id_tarjeta )}}" class="btn btn-warning" title="Modificar"><span class="fa fa-edit "></span></a>
									</div>
									<div class="col-md-6">
									<a href="{{ route('tarjetas.baja',$tar -> id_tarjeta )}}" onclick ="return confirm('¿Desea Dar de baja?')" class="btn btn-danger" title="Eliminar"><span class="fa fa-trash-o"></span></a>
									</div>
								</div>
								</td>

							</tr>
						@endforeach
					</tbody>
				</table>
{{-- 				{{ $ta->Links() }} 
 --}} 			</div>
 			</div>	
		</div>
@endsection
@section('scripts')
<script>


$(document).ready(function() {    // alert('1');
		$("#algo").DataTable({

		  dom: "Bfrtip",
		  buttons: [
			{
			  extend: "csv",
			  className: "btn-sm"
			},
			
			{
			  extend: "print",
			  className: "btn-sm"
			},
		  ],
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





 //    $(document).ready(function(e) {
        
 //        $('.miboton').click(function(e) {
 //          $('.mitabla').table2excel({
 //            name:"toyosa",
 //            filename:"Reporte personalizado ",
 //            fileext:".xls"
 //          });         
 //        });
 //    });

 //    $(document).ready(function() {    // alert('1');
 //        $('#todo').DataTable({ 
 //            responsive: true
 //        });
 //    });

	




 //    function printData()
	// {
	// 	var	html = "";
	    
	// 	html+='<!DOCTYPE html>';
	// 	html+='<html lang="en">';
	// 	html+='<head>';
	// 	html+='<meta charset="UTF-8">';
	// 	html+='<title></title>';
	// 	html+='<style>';
	// 	html+='body {';
	// 	html+='font-family: Arial, Helvetica, sans-serif;';
	// 	html+='}';
	// 	html+='table {';
	// 	html+='border-collapse: collapse;';
	// 	html+='width: 100%;';
	// 	html+='}';
	// 	html+='th, td {';
	// 	html+='text-align: left;';
	// 	html+='padding: 6px;';
	// 	html+='font-size: xx-small;';
	// 	html+='}';
	// 	html+='tr:nth-child(even){background-color: #f2f2f2}';
	// 	html+='th {';
	// 	html+='background-color: #000;';
	// 	html+='color: white;';
	// 	html+='}';
	// 	html+='';
	// 	html+='td {';
	// 	html+='font-weight: lighter !important;';
	// 	html+='}';
	// 	html+='.text-success {';
	// 	html+='color: #3c763d;';
	// 	html+='}';
	// 	html+='.text-primary {';
	// 	html+='color: #428bca;';
	// 	html+='}';
	// 	html+='.text-info {';
	// 	html+='color: #31708f;';
	// 	html+='}';
	// 	html+='.text-danger {';
	// 	html+='color: #a94442;';
	// 	html+='}';
	// 	html+='.text-warning {';
	// 	html+='color: #8a6d3b;';
	// 	html+='}';
	// 	html+='.cabecera {';
	// 	html+='background-color: #dedede;';
	// 	html+='';
	// 	html+='}';
	// 	html+='.secundario {';
	// 	html+='color: #428bca;';
	// 	html+='text-align: right;';
	// 	html+='font-size: xx-small;';
	// 	html+='}';
	// 	html+='.filtro {';
	// 	html+='color: #787878;';
	// 	html+='text-align: center;';
	// 	html+='font-size: xx-small;';
	// 	html+='}';
	// 	html+='.tituloRep {';
	// 	html+='text-align: center;';
	// 	html+='}';
	// 	html+='.titulo{';
	// 	html+='color: red;';
	// 	html+='text-align: right;';
	// 	html+='font-weight: bold;';
	// 	html+='}';
	// 	html+='</style>';
	// 	html+='</head>';
	// 	html+='<body>';
	// 	html+='<div>';
	// 	html+='<div class="titulo">TOYOSA S.A.</div>';
	// 	html+='<div class="secundario">{{ Auth::user()->empleado->ubicacion->nombre }}  |  <?php date_default_timezone_set('America/La_Paz'); $time = time(); echo date("d-m-Y H:i:s", $time);?>';
	// 	html+='</div>';
	// 	html+='</div>';
	// 	html+='<hr>';
	// 	html+='<section >';

	// 	html+='<div><div class="tituloRep"> REPORTE PERSONALIZADO TARJETAS</div></div><hr>';


	//    var divToPrint=document.getElementById("todo");
	//    newWin= window.open("");
	//    newWin.document.write(html+divToPrint.outerHTML);
	//    newWin.print();
	//    newWin.close();
	// }

	// $('.pdf').on('click',function(){
	// printData();
	// })
</script> 
@endsection