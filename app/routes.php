<?php

//RUTA RAIZ

Route::get('/', function(){
	
	if (Auth::check()) {
		
		return Redirect::to('/admin');
	}

	else {

	return View::make('usuarios.index'); }
});

//RUTA DE LOGIN

Route::post('/login',array('uses'=>'AuthController@logIn','before'=>'guest'));

//GRUPO DE RUTAS DEL ADMINISTRADOR

Route::group(array('before'=>'auth'),function(){

	//RUTA CON VISTA PRINCIPAL

		Route::get('/admin', 'AdminController@index');

	//RUTA DE LOGOUT

		Route::get('/logout', 'AuthController@logOut');

	//RUTAS DE LA ASIGNATURA

		Route::get('/asignatura/create', 'AsignaturaController@create');
		
		Route::get('/asignatura/show', 'AsignaturaController@show');
		
		Route::post('/asignatura/store', 'AsignaturaController@store');
		
		Route::get('/asignatura/edit/{id}', 'AsignaturaController@edit');
		
		Route::post('/asignatura/update/{id}', 'AsignaturaController@update');

		Route::get('/asignatura/destroy/{id}', 'AsignaturaController@destroy');

		//AJAX PARA SELECCIONAR LA RETICULA

		Route::get('/asignatura/reticula/{carrera}', 'AsignaturaController@reticula');

	//RUTAS DE LA RETICULA

		Route::get('/reticula/create', 'ReticulaController@create');
		
		Route::get('/reticula/show', 'ReticulaController@show');
		
		Route::post('/reticula/store', 'ReticulaController@store');
		
		Route::get('/reticula/edit/{id}', 'ReticulaController@edit');
		
		Route::post('/reticula/update/{id}', 'ReticulaController@update');

		Route::get('/reticula/destroy/{id}', 'ReticulaController@destroy');

	//RUTA DE LA PROYECCION DE LAS ASIGNATURAS

		Route::get('/ofertar_materias', 'OfertarMateriasController@index');				
		
		Route::post('/ofertar_materias/create', 'OfertarMateriasController@create');
		
		Route::post('/ofertar_materias/store', 'OfertarMateriasController@store');
		
		Route::get('/ofertar_materias/search', 'OfertarMateriasController@search');
		
		Route::post('/ofertar_materias/show', 'OfertarMateriasController@show');
});

//ERROR 404

App::missing(function($exeption){

	return Response::view('error404', array(), 404);

} );