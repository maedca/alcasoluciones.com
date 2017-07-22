<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('send', 'MailController@send');
Route::get('/redirect', function(){

    alert()->success('Envio Exitoso', 'Gracias!!!');
    return redirect('/');
});

Route::get('/admin', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'auth.login'
]);
Route::post('/admin', [
    'uses' => 'Auth\AuthController@postLogin',
    'as' => 'auth.login'
]);

Route::get('/admin/logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'auth.logout'
]);

//Ruta para el registro de clientes

Route::post('/cliente/registro', [
    'uses' => 'PersonasController@store',
    'as' => 'public.registro'
]);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/home', [
        'uses' => 'adminController@index',
        'as' => 'admin.home'
    ]);

    Route::get('/admin/excel', [
        'uses' => 'ExcelController@index',
        'as' => 'admin.excel'
    ]);
    Route::resource('admin/personas', 'personasController');
    Route::get('personas/{id}/destroy', [
        'uses' => 'personasController@destroy',
        'as' => 'admin.personas.destroy'
    ]);
});