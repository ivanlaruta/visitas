<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('visitas/{id}',[
// 	'uses' 	=> 'TestController@view',
// 	'as'	=> 'visitasView'
// ]);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicial', 'ValidarUsuarioController@index');

// Rpara dministradores

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	
	route::resource('users','UsersController');
	
	route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy', 
		'as'   =>	'users.destroy'
	]);
	route::get('users/{id}/update',[
		'uses' => 'UsersController@baja', 
		'as'   =>	'users.baja'
	]);

	route::resource('cargos','CargosController');

	route::get('cargos/{id}/update',[
		'uses' => 'CargosController@baja', 
		'as'   =>	'cargos.baja'
	]);

	route::resource('ubicaciones','UbicacionesController');
	
	route::get('ubicaciones/{id}/update',[
		'uses' => 'UbicacionesController@baja', 
		'as'   =>	'ubicaciones.baja'
	]);

	route::resource('tarjetas','TarjetasController');
	
	route::get('tarjetas/{id}/update',[
		'uses' => 'TarjetasController@baja', 
		'as'   =>	'tarjetas.baja'
	]);

	route::resource('motivos','MotivosController');
	
	route::get('motivos/{id}/update',[
		'uses' => 'MotivosController@baja', 
		'as'   =>	'motivos.baja'
	]);

	route::resource('visitantes','VisitantesController');
	
	route::get('visitantes/{id}/update',[
		'uses' => 'VisitantesController@baja', 
		'as'   =>	'visitantes.baja'
	]);

	
	// ----------VISITAS --------------

	Route::get ('visitas/reportadas',[
		'uses' => 'VisitasController@reportadas', 
		'as'   =>	'visitas.reportadas'
	]);
	
	route::get('visitas/{id}/restaurar',[
		'uses' => 'VisitasController@restaurar', 
		'as'   =>	'visitas.restaurar'
	]);

	route::get('visitas/{id}/baja',[
		'uses' => 'VisitasController@baja', 
		'as'   =>	'visitas.baja'
	]);


	route::get('visitas/{id}/rehabilitar',[
		'uses' => 'VisitasController@rehabilitar', 
		'as'   =>	'visitas.rehabilitar'
	]);

	route::post('visitas/bajaTarjeta',[
		'uses' => 'VisitasController@bajaTarjeta', 
		'as'   =>	'visitas.bajaTarjeta'
	]);

	// **************************************//

	route::resource('empleados','EmpleadosController');
	
	route::get('empleados/{id}/update',[
		'uses' => 'EmpleadosController@baja', 
		'as'   =>	'empleados.baja'
	]);


	route::resource('parametricas','ParametricasController');
	
	route::get('parametricas/{id}/update',[
		'uses' => 'ParametricasController@baja', 
		'as'   =>	'parametricas.baja'
	]);


});

// * para operadores

Route::group(['prefix'=>'ope','middleware'=>'auth'],function(){

	route::get('users/{id}/edit_pass',[
		'uses' => 'UsersController@edit_pass', 
		'as'   =>	'users.edit_pass'
	]);

	route::get('users/{id}/update_pass',[
		'uses' => 'UsersController@update_pass', 
		'as'   =>	'users.update_pass'
	]);

	route::get('visitas/autocomplete',[
		'uses' => 'AutoCompleteController@autocomplete', 
		'as'   =>	'visitas.autocomplete'
	]);
	
	route::get('visitas/{id}/reportar',[
		'uses' => 'VisitasController@reportar', 
		'as'   =>	'visitas.reportar'
	]);

	
	route::get('visitas/{id}/update',[
		'uses' => 'VisitasController@salida', 
		'as'   =>	'visitas.salida'
	]);

	route::post('visitas/ingreso',[
		'uses' => 'VisitasController@ingreso', 
		'as'   =>	'visitas.ingreso'
	]);

	
	route::resource('visitas','VisitasController');

});
Route::group(['prefix'=>'rep','middleware'=>'auth'],function(){


	//=========== administrador=======================

	route::get('reportes/{id}/{id2}/AdminTopEmpleados',[
		'uses' => 'ReportesController@AdminTopEmpleados', 
		'as'   =>	'visitas.AdminTopEmpleados'
	]);
	route::get('reportes/{id}/{id2}/AdminTopMotivos',[
		'uses' => 'ReportesController@AdminTopMotivos', 
		'as'   =>	'visitas.AdminTopMotivos'
	]);
	route::get('reportes/{id}/{id2}/AdminTopVisitantes',[
		'uses' => 'ReportesController@AdminTopVisitantes', 
		'as'   =>	'visitas.AdminTopVisitantes'
	]);


	route::get('reportes/{id}/AdminVisitasRegulares',[
		'uses' => 'ReportesController@AdminVisitasRegulares', 
		'as'   =>	'visitas.AdminVisitasRegulares'
	]);
	route::get('reportes/{id}/AdminVisitasReportadas',[
		'uses' => 'ReportesController@AdminVisitasReportadas', 
		'as'   =>	'visitas.AdminVisitasReportadas'
	]);
	route::get('reportes/{id}/AdminVisitasRegularizadas',[
		'uses' => 'ReportesController@AdminVisitasRegularizadas', 
		'as'   =>	'visitas.AdminVisitasRegularizadas'
	]);
	
	route::get('reportes/{id}/visitasTodoAdmin',[
		'uses' => 'ReportesController@visitasTodoAdmin', 
		'as'   =>	'visitas.visitasTodoAdmin'
	]);

	route::get('reportes/repAdmin',[
		'uses' =>'ReportesController@repAdmin',
		'as'   =>	'reportes.repAdmin'
	]);
	
	//============= PDF ===========================

	route::get('reportes/getPDF',[
		'uses' =>'PDFController@getPDF',
		'as'   =>	'reportes.getPDF'
	]);

	route::get('reportes/visitasFechas',[
		'uses' =>'PDFController@visitasFechas',
		'as'   =>	'reportes.visitasFechas'
	]);

	//============= operadores ===========================

	route::get('reportes/visitasDiarias',[
		'uses' => 'ReportesController@visitasDiarias', 
		'as'   =>	'reportes.visitasDiarias'
	]);

	route::get('reportes/visitasTodo',[
		'uses' => 'ReportesController@visitasTodo', 
		'as'   =>	'reportes.visitasTodo'
	]);


	
	Route::get ('reportes/visitasEntreFechas',[
		'uses' => 'ReportesController@visitasEntreFechas', 
		'as'   =>	'reportes.visitasEntreFechas'
	]);

	route::resource('reportes','ReportesController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');
