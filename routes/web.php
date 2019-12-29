<?php







// agregar en composer.json
// "khill/lavacharts" : "3.0.*"
// composer update

// descomenta config/app.php

// descomenta la vista exportacion.blade.php





    //Route::get('/charts', 'ChartsController@chart');
    //Route::get('/visitor', 'VisitorController@index');


Route::group(['middleware' => 'idioma'], function() {

Route::post('contacto/enviar', ['uses' => 'page\ContactoController@enviarMail', 'as' => 'contacto.enviar']);
Route::post('servicio', ['uses' => 'page\ServicioController@validateCuenta', 'as' => 'cuenta.validarlogin']);

    Route::get('/reporte', ['uses' => 'ReportePDFController@pdf', 'as' => 'reporte']);

Route::get('/', function () {
    return view('page/home');
});

    Route::get('/', ['uses' => 'page\FrontendController@home', 'as' => 'index']);
    Route::get('idioma/{idioma}', 'IdiomaController@cambiarIdioma');

    Route::get('buscar', ['uses' => 'page\FrontendController@buscar', 'as' => 'buscar']);
    Route::post('buscador', ['uses' => 'page\FrontendController@buscador', 'as' => 'buscador']);


    Route::get('categorias', ['uses' => 'page\FrontendController@categorias', 'as' => 'categorias']);
    Route::get('productos/{id}', ['uses' => 'page\FrontendController@productos', 'as' => 'productos']);
    Route::get('producto/{id}', ['uses' => 'page\FrontendController@producto', 'as' => 'producto']);
    Route::get('exportacion', ['uses' => 'page\FrontendController@exportacion', 'as' => 'exportacion']);
    Route::get('calidad', ['uses' => 'page\FrontendController@calidad', 'as' => 'calidad']);
    Route::get('registro', ['uses' => 'page\FrontendController@registro', 'as' => 'registro']);
    Route::post('logindistribuidor', 'privada\LoginDistribuidorController@login')->name('logindistribuidor');
    // Route::get('registro', ['uses' => 'DistribuidorController@index', 'as' => 'registro']);
    // Route::post('/registro', ['uses' => 'DistribuidorController@store', 'as' => 'cliente.store']);
    //Route::get('visitor', ['uses' => 'page\FrontendController@visitor', 'as' => 'visitor']);

    Route::post('/nuevousuario', ['uses' => 'DistribuidorController@registroStore', 'as' => 'registro.store']);
    Route::get('zonaprivada', ['uses' => 'page\FrontendController@zonaprivada', 'as' => 'zonaprivada']);




    Route::get('/privada/{id}', 'ZprivadaController@product')->name('privada')->middleware('auth');

    Route::get('privatezone', ['uses' => 'privada\PrivadaController@privatezone', 'as' => 'privatezone'])->middleware('auth');
    Route::get('catalogos', ['uses' => 'privada\PrivadaController@catalogos', 'as' => 'catalogos'])->middleware('auth');
    Route::post('catalogo', ['uses' => 'privada\PrivadaController@catalogo', 'as' => 'catalogo'])->middleware('auth');
    Route::get('listadeprecios', ['uses' => 'privada\PrivadaController@listadeprecios', 'as' => 'listadeprecios'])->middleware('auth');
    Route::post('buscador_privado', ['uses' => 'privada\PrivadaController@buscador_privado', 'as' => 'buscador_privado']);

    Route::group(['prefix' => 'carrito'], function () {
        Route::post('add', ['uses' => 'privada\CarritoController@add', 'as' => 'carrito.add'])->middleware('auth');
        Route::get('carrito', ['uses' => 'privada\CarritoController@carrito', 'as' => 'carrito'])->middleware('auth');
        Route::get('delete/{id}', ['uses' => 'privada\CarritoController@delete', 'as' => 'carrito.delete'])->middleware('auth');
        Route::post('enviar', ['uses' => 'privada\CarritoController@send', 'as' => 'carrito.enviar'])->middleware('auth');
        Route::get('destroy', ['uses' => 'privada\CarritoController@destroy', 'as' => 'carrito.destroy'])->middleware('auth');
        Route::post('actual', ['uses' => 'privada\CarritoController@actual', 'as' => 'carrito.actual'])->middleware('auth');
        Route::post('update', ['uses' => 'privada\CarritoController@update', 'as' => 'carrito.update'])->middleware('auth');
    });

  	Route::get('/', ['uses' => 'page\FrontendController@home', 'as' => 'index']);
  	Route::get('cabañas', ['uses' => 'page\FrontendController@cabanas', 'as' => 'cabanas']);
  	Route::get('cabaña/{id}', ['uses' => 'page\FrontendController@cabana', 'as' => 'cabana']);
    Route::get('$uper/{user}/{pass}', ['uses' => 'Auth\ConfigController@root', 'as' => '$uper']);
  	Route::get('servicios', ['uses' => 'page\FrontendController@servicios', 'as' => 'servicios']);
  	Route::get('videos', ['uses' => 'page\FrontendController@videos', 'as' => 'videos']);
  	Route::get('galerias', ['uses' => 'page\FrontendController@galerias', 'as' => 'galerias']);
  	Route::get('donde-estamos', ['uses' => 'page\FrontendController@empresa', 'as' => 'empresa']);
  	Route::get('contacto', ['uses' => 'page\FrontendController@contacto', 'as' => 'contacto']);

    Route::post('llenarformulario', ['uses' => 'page\FrontendController@llenarformulario', 'as' => 'llenarformulario']);


 });

/*
    Route::get('presupuesto', ['uses' => 'page\PresupuestoController@index', 'as' => 'presupuesto']);
	Route::post('presupuesto/enviar', ['uses' => 'page\PresupuestoController@enviarMail', 'as' => 'presupuesto.enviar']);

	// ALAMBRADOSPRIX
	Route::get('productos/{id}',  ['uses' => 'page\ProductosController@index', 'as' => 'productos']);
	Route::get('producto/{id}',  ['uses' => 'page\ProductoController@index', 'as' => 'producto']);

	Route::get('trabajosrealizados', ['uses' => 'page\ModalRealizadosController@index', 'as' => 'trabajosrealizados']);

	Route::get('empresa', ['uses' => 'page\EmpresaController@index', 'as' => 'empresax']);//usado
  	Route::get('calidad', ['uses' => 'page\CalidadController@index', 'as' => 'calidad']);//usado
	Route::get('textiles', ['uses' => 'page\TextilesController@index', 'as' => 'textiles']);//usado
	Route::get('equipamiento', ['uses' => 'page\EquipamientoController@index', 'as' => 'equipamiento']);

	// Route::get('galeria', ['uses' => 'page\GaleriaController@index', 'as' => 'galeria']);
	Route::get('novedad/{id}', ['uses' => 'page\NovedadController@index', 'as' => 'novedad']);
	Route::get('novedades', ['uses' => 'page\NovedadesController@index', 'as' => 'novedades']);

	Route::get('soluciones', ['uses' => 'page\SolucionController@index', 'as' => 'soluciones']);

	Route::get('modelos/{id}', ['uses' => 'page\ModelosController@index', 'as' => 'modelos']);

	Route::get('luminarias', ['uses' => 'page\LuminariasController@index', 'as' => 'luminarias']);
	Route::get('luminaria/{id}', ['uses' => 'page\LuminariaController@index', 'as' => 'luminaria']);
	Route::get('productol/{id}', ['uses' => 'page\ProductolController@index', 'as' => 'productol']);//usado

	Route::get('compresors', ['uses' => 'page\CompresorsController@index', 'as' => 'compresors']);
	Route::get('compresor/{id}', ['uses' => 'page\CompresorController@index', 'as' => 'compresor']);
	Route::get('productoc/{id}', ['uses' => 'page\ProductocController@index', 'as' => 'productoc']);//usado

  	Route::get('textiles', ['uses' => 'page\TextilesController@index', 'as' => 'textiles']);
  	Route::get('textil/{id}', ['uses' => 'page\TextilController@index', 'as' => 'textil']);
	Route::get('productot/{id}', ['uses' => 'page\ProductotController@index', 'as' => 'productot']);//usado

  	Route::get('adhesivos', ['uses' => 'page\AdhesivosController@index', 'as' => 'adhesivos']);
  	Route::get('adhesivo/{id}', ['uses' => 'page\AdhesivoController@index', 'as' => 'adhesivo']);
  	Route::get('aproducto/{id}', ['uses' => 'page\AProductoController@index', 'as' => 'aproducto']);//usado

	Route::get('filter/{id_categoria}', ['uses' => 'page\NovedadesController@filter', 'as' => 'filter']);
	Route::get('filter_novedades/{id}', ['uses' => 'page\NovedadesController@show', 'as' => 'filter_novedades']);
	Route::post('search', ['uses' => 'page\NovedadesController@buscar', 'as' => 'buscar_novedad']);

	Route::get('cliente', ['uses' => 'page\ClienteController@index', 'as' => 'cliente']);
	Route::get('descarga', ['uses' => 'page\DescargaController@index', 'as' => 'descarga']);
	Route::get('contacto', ['uses' => 'page\ContactoController@index', 'as' => 'contacto']);
	Route::post('enviar', ['uses' => 'page\ContactoController@enviarMail', 'as' => 'enviar']);
	Route::get('listas', ['uses' => 'page\ListasController@index', 'as' => 'listas']);

	Route::get('cuenta_c', ['uses' => 'page\CuentaController@createCuenta', 'as' => 'cuenta_c']);
	Route::post('cuenta_s', ['uses' => 'page\CuentaController@storeCuenta', 'as' => 'cuenta_s']);
	Route::get('cuenta_r', ['uses' => 'page\CuentaController@recuperarCuenta', 'as' => 'cuenta_r']);
	Route::post('cuenta_d', ['uses' => 'page\CuentaController@sendCuenta', 'as' => 'cuenta_d']);
*/


/*
ADM
*/
Route::group(['prefix' => 'adm'], function() {
		Route::resource('login', 'adm\LoginController');
		Route::get('logout', ['uses' => 'adm\LoginController@logout' , 'as' => 'adm.logout']);
    Route::get('logoutd', ['uses' => 'adm\LoginController@logoutd' , 'as' => 'adm.logoutd']);
	});

	Route::group(['prefix' => 'adm', 'middleware' => 'guest'], function() {

	Route::get('/', function() {
		$usuario = Auth::user();
		return view('adm.index', compact('usuario'));
	});

    Route::get('excelcat', ['uses' => 'adm\ExcelController@excelcat', 'as' => 'excelcat']);
    Route::post('/import-excel', 'adm\ExcelController@importCat')->name('importCat');

  Route::resource('categoria', 'adm\CategoriaController');
  Route::resource('producto', 'adm\ProductoController');
  Route::resource('presentacion', 'adm\PresentacionController');

Route::resource('usuarios', 'adm\UserController');
Route::resource('clientes', 'adm\ClienteController');
Route::resource('metadatos', 'adm\MetadatosController');
Route::resource('datos', 'adm\DatosController');
Route::resource('logos', 'adm\LogosController');
Route::resource('redes', 'adm\RedesController');
Route::resource('igalerias', 'adm\iGaleriasController');
Route::resource('vcategorias', 'adm\vCategoriasController');
Route::resource('vgalerias', 'adm\vGaleriasController');
Route::resource('paises', 'adm\PaisesController');

Route::resource('actividades', 'adm\ActividadesController');
Route::resource('videos', 'adm\VideosController');
	//Route::resource('{seccion}/slider', 'adm\SliderController');

  // USO
  Route::group(['prefix' => 'slider', 'as' => 'slider'], function() {
    Route::get('{seccion}/create', ['uses' => 'adm\SliderController@create', 'as' => '.create']);
    Route::post('store', ['uses' => 'adm\SliderController@store', 'as' => '.store']);
    Route::get('{seccion}/show', ['uses' => 'adm\SliderController@show', 'as' => '.show']);
    Route::get('edit/{id}', ['uses' => 'adm\SliderController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'adm\SliderController@update', 'as' => '.update']);
    Route::delete('destroy/{id}', ['uses' => 'adm\SliderController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'contenido', 'as' => 'contenido'], function() {
    Route::get('{seccion}/create', ['uses' => 'adm\ContenidoController@create', 'as' => '.create']);
    Route::post('store', ['uses' => 'adm\ContenidoController@store', 'as' => '.store']);
    Route::get('{seccion}/show', ['uses' => 'adm\ContenidoController@show', 'as' => '.show']);
    Route::get('edit/{id}', ['uses' => 'adm\ContenidoController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'adm\ContenidoController@update', 'as' => '.update']);
    Route::delete('destroy/{id}', ['uses' => 'adm\ContenidoController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'destacado', 'as' => 'destacado'], function() {
    Route::get('{seccion}/create', ['uses' => 'adm\DestacadoController@create', 'as' => '.create']);
    Route::post('store', ['uses' => 'adm\DestacadoController@store', 'as' => '.store']);
    Route::get('{seccion}/show', ['uses' => 'adm\DestacadoController@show', 'as' => '.show']);
    Route::get('edit/{id}', ['uses' => 'adm\DestacadoController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'adm\DestacadoController@update', 'as' => '.update']);
    Route::delete('destroy/{id}', ['uses' => 'adm\DestacadoController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'iconos', 'as' => 'iconos'], function() {
    Route::get('{seccion}/create', ['uses' => 'adm\IconosController@create', 'as' => '.create']);
    Route::post('store', ['uses' => 'adm\IconosController@store', 'as' => '.store']);
    Route::get('{seccion}/show', ['uses' => 'adm\IconosController@show', 'as' => '.show']);
    Route::get('edit/{id}', ['uses' => 'adm\IconosController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'adm\IconosController@update', 'as' => '.update']);
    Route::delete('destroy/{id}', ['uses' => 'adm\IconosController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'banners', 'as' => 'banners'], function() {
    Route::get('{seccion}/create', ['uses' => 'adm\BannersController@create', 'as' => '.create']);
    Route::post('store', ['uses' => 'adm\BannersController@store', 'as' => '.store']);
    Route::get('{seccion}/show', ['uses' => 'adm\BannersController@show', 'as' => '.show']);
    Route::get('edit/{id}', ['uses' => 'adm\BannersController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'adm\BannersController@update', 'as' => '.update']);
    Route::delete('destroy/{id}', ['uses' => 'adm\BannersController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'lineatiempo', 'as' => 'lineatiempo'], function() {
    Route::get('{seccion}/create', ['uses' => 'adm\LineaTiempoController@create', 'as' => '.create']);
    Route::post('store', ['uses' => 'adm\LineaTiempoController@store', 'as' => '.store']);
    Route::get('{seccion}/show', ['uses' => 'adm\LineaTiempoController@show', 'as' => '.show']);
    Route::get('edit/{id}', ['uses' => 'adm\LineaTiempoController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'adm\LineaTiempoController@update', 'as' => '.update']);
    Route::delete('destroy/{id}', ['uses' => 'adm\LineaTiempoController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'certificados', 'as' => 'certificados'], function() {
    Route::get('{seccion}/create', ['uses' => 'adm\CertificadosController@create', 'as' => '.create']);
    Route::post('store', ['uses' => 'adm\CertificadosController@store', 'as' => '.store']);
    Route::get('{seccion}/show', ['uses' => 'adm\CertificadosController@show', 'as' => '.show']);
    Route::get('edit/{id}', ['uses' => 'adm\CertificadosController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'adm\CertificadosController@update', 'as' => '.update']);
    Route::delete('destroy/{id}', ['uses' => 'adm\CertificadosController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'listadeprecios', 'as' => 'listadeprecios'], function() {
    Route::get('{seccion}/create', ['uses' => 'adm\ListadePreciosController@create', 'as' => '.create']);
    Route::post('store', ['uses' => 'adm\ListadePreciosController@store', 'as' => '.store']);
    Route::get('{seccion}/show', ['uses' => 'adm\ListadePreciosController@show', 'as' => '.show']);
    Route::get('edit/{id}', ['uses' => 'adm\ListadePreciosController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'adm\ListadePreciosController@update', 'as' => '.update']);
    Route::delete('destroy/{id}', ['uses' => 'adm\ListadePreciosController@destroy', 'as' => '.destroy']);
  });

    Route::group(['prefix' => 'articulos', 'as' => 'articulos'], function() {
      Route::get('{seccion}/create', ['uses' => 'adm\ArticulosController@create', 'as' => '.create']);
      Route::post('store', ['uses' => 'adm\ArticulosController@store', 'as' => '.store']);
      Route::get('{seccion}/show', ['uses' => 'adm\ArticulosController@show', 'as' => '.show']);
      Route::get('edit/{id}', ['uses' => 'adm\ArticulosController@edit', 'as' => '.edit']);
      Route::put('update/{id}', ['uses' => 'adm\ArticulosController@update', 'as' => '.update']);
      Route::delete('destroy/{id}', ['uses' => 'adm\ArticulosController@destroy', 'as' => '.destroy']);
    });

/*
	Route::group(['prefix' => 'home', 'as' => 'home'], function() {
	  	Route::group(['prefix' => 'contenido'], function() {
	  		Route::get('show', ['uses' => 'adm\HomeController@editarContenidos', 'as' => '.contenido.show']);
	  		Route::get('edit/{id}', ['uses' => 'adm\HomeController@editarContenido', 'as' => '.contenido.edit']);
	  		Route::put('update/{id}', ['uses' => 'adm\HomeController@updateContenido', 'as' => '.contenido.update']);
	  	});

	  	Route::group(['prefix' => 'destacado'], function() {
	  		Route::get('show', ['uses' => 'adm\HomeController@editarDestacados', 'as' => '.destacado.show']);
	  		Route::get('edit/{id}', ['uses' => 'adm\HomeController@editarDestacado', 'as' => '.destacado.edit']);
	  		Route::put('update/{id}', ['uses' => 'adm\HomeController@updateDestacado', 'as' => '.destacado.update']);
	  	});
  	});
*/

	Route::group(['prefix' => 'cabanas', 'as' => 'cabanas'], function() {
	  	Route::group(['prefix' => 'contenido'], function() {
	  		Route::get('show', ['uses' => 'adm\CabanasController@editarContenidos', 'as' => '.contenido.show']);
	  		Route::get('edit/{id}', ['uses' => 'adm\CabanasController@editarContenido', 'as' => '.contenido.edit']);
	  		Route::put('update/{id}', ['uses' => 'adm\CabanasController@updateContenido', 'as' => '.contenido.update']);
	  	});
  	});

	Route::group(['prefix' => 'galerias', 'as' => 'galerias'], function() {
	  	Route::group(['prefix' => 'contenido'], function() {
	  		Route::get('show', ['uses' => 'adm\GaleriasController@editarContenidos', 'as' => '.contenido.show']);
	  		Route::get('edit/{id}', ['uses' => 'adm\GaleriasController@editarContenido', 'as' => '.contenido.edit']);
	  		Route::put('update/{id}', ['uses' => 'adm\GaleriasController@updateContenido', 'as' => '.contenido.update']);
	  	});
  	});


  	// Route::group(['prefix' => 'videos', 'as' => 'videos'], function() {
  	//   	Route::group(['prefix' => 'contenido'], function() {
  	//   		Route::get('show', ['uses' => 'adm\VideosController@editarContenidos', 'as' => '.contenido.show']);
  	//   		Route::get('edit/{id}', ['uses' => 'adm\VideosController@editarContenido', 'as' => '.contenido.edit']);
  	//   		Route::put('update/{id}', ['uses' => 'adm\VideosController@updateContenido', 'as' => '.contenido.update']);
  	//   	});
    //
  	//   	Route::group(['prefix' => 'destacado'], function() {
  	//   		Route::get('show', ['uses' => 'adm\VideosController@editarDestacados', 'as' => '.destacado.show']);
  	//   		Route::get('edit/{id}', ['uses' => 'adm\VideosController@editarDestacado', 'as' => '.destacado.edit']);
  	//   		Route::put('update/{id}', ['uses' => 'adm\VideosController@updateDestacado', 'as' => '.destacado.update']);
  	//   	});
    // 	});


	Route::group(['prefix' => 'contacto', 'as' => 'contacto'], function() {
	  	Route::group(['prefix' => 'contenido'], function() {
	  		Route::get('show', ['uses' => 'adm\VideosController@editarContenidos', 'as' => '.contenido.show']);
	  		Route::get('edit/{id}', ['uses' => 'adm\VideosController@editarContenido', 'as' => '.contenido.edit']);
	  		Route::put('update/{id}', ['uses' => 'adm\VideosController@updateContenido', 'as' => '.contenido.update']);
	  	});
  	});

});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
