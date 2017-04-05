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

// Route::group(['prefix'=>'admin'],function(){

	
// 	route::resource('usuarios','UsuariosController');
// 	route::get('usuarios/{id}/destroy',[
// 		'uses' => 'UsuariosController@destroy', 
// 		'as'   =>	'usuarios.destroy'
// 	]);
// 	route::get('usuarios/{id}/update',[
// 		'uses' => 'UsuariosController@baja', 
// 		'as'   =>	'usuarios.baja'
// 	]);

// 	route::resource('cargos','CargosController');
// 	route::get('cargos/{id}/update',[
// 		'uses' => 'CargosController@baja', 
// 		'as'   =>	'cargos.baja'
// 	]);
// });

Route::group(['prefix'=>'admin'],function(){

	
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
});

Route::group(['prefix'=>'ope'],function(){
	route::resource('visitas','VisitasController');
	route::get('visitas/{id}/update',[
		'uses' => 'VisitasController@salida', 
		'as'   =>	'visitas.salida'
	]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
