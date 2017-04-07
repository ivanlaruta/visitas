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

	route::get('visitas/diarias',[
		'uses' => 'VisitasController@diarias', 
		'as'   =>	'visitas.diarias'
	]);
});



Route::group(['prefix'=>'ope'],function(){
	route::resource('visitas','VisitasController');
	
	route::get('visitas/{id}/update',[
		'uses' => 'VisitasController@salida', 
		'as'   =>	'visitas.salida'
	]);

	route::post('visitas/ingreso',[
		'uses' => 'VisitasController@ingreso', 
		'as'   =>	'visitas.ingreso'
	]);

	route::get('visitas/diarias',[
		'uses' => 'VisitasController@diarias', 
		'as'   =>	'visitas.diarias'
	]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');
