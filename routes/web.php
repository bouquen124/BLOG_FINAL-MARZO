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

Route::get('/', 'pagina@index');



Auth::routes();




Route::group(['middleware' => 'admin'], function () {


    Route::get('/home', 'HomeController@index');
    Route::get('/blogss/{id}', 'pagina@showpost');
    Route::get('/home', 'HomeController@index')->name('home');
   

Route::resource('tModelos', 't_modelosController');

Route::resource('estados', 'EstadoController');

Route::resource('aliados', 'AliadoController');

Route::resource('clientes', 'ClienteController');

Route::resource('categorias', 'CategoriaController');

Route::resource('servicios', 'ServicioController');

Route::resource('productos', 'ProductoController');

Route::resource('posts', 'PostController');

Route::resource('rols', 'RolController');

Route::resource('galerias', 'GaleriaController');

Route::resource('ilustrables', 'IlustrableController');
Route::resource('modelos', 'ModeloController');


});


Route::resource('blog', 'PostUserController');

Route::get('/blog','PostUserController@index');




//////////////////////////////////

Route::resource('aliado', 'AliadoUserController');



//////////////////////////////////////////////////
Route::resource('servicio', 'ServicioUserController');


////////////////////////////////////////////////////////////////////////

Route::resource('producto', 'ProductoUserController');
//////////////////////////////////////////////////////////////////////////////////////
Route::resource('cliente', 'ClienteUserController');
//////////////////////////////////////////////////////////////////////////////////////
Route::resource('gallery', 'GaleriaUserController');
////////////////////////////////////////////////////////////////////////
Route::resource('ilustrable', 'IlustrableUserController')->middleware('auth');

Route::resource('cont', 'contactanos');

//////////////////////////////////////////////////////////////////////////////



Route::resource('modelos_user', 'Modelos_user');
Auth::routes();

Route::resource('user','user_Controller')->middleware('auth');

