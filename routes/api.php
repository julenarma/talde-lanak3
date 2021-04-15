<?php
// Use App\Proyectos;
// Use App\Registros;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Rutas para proyectos
Route::get('proyectos', 'ProyectosController@index');
Route::get('proyectos/{proyecto}', 'ProyectosController@show');
Route::post('proyectos', 'ProyectosController@store');
Route::put('proyectos/{proyecto}', 'ProyectosController@update');
Route::delete('proyectos/{proyecto}', 'ProyectosController@delete');

//Rutas para registros
Route::get('registros', 'RegistrosController@index');
Route::get('registros/{registro}', 'RegistrosController@show');
Route::post('registros', 'RegistrosController@store');
Route::put('registros/{registro}', 'RegistrosController@update');
Route::delete('registros/{registro}', 'RegistrosController@delete');


//Rutas para subproyectos
Route::get('subproyectos', 'SubproyectosController@index');
Route::get('subproyectos/{subproyecto}', 'SubproyectosController@show');
Route::post('subproyectos', 'SubproyectosController@store');
Route::put('subproyectos/{subproyecto}', 'SubproyectosController@update');
Route::delete('subproyectos/{subproyecto}', 'SubproyectosController@delete');


//Rutas para festivosarticletivosController@show');
Route::post('festivos', 'FestivosController@store');
Route::put('festivos/{festivo}', 'FestivosController@update');
Route::delete('festivos/{festivo}', 'FestivosController@delete');


//Rutas para usuarios
Route::get('usuarios', 'UsuariosController@index');
Route::get('usuarios/{usuario}', 'UsuariosController@show');
Route::post('usuarios', 'UsuariosController@store');
Route::put('usuarios/{usuario}', 'UsuariosController@update');
Route::delete('usuarios/{usuario}', 'UsuariosController@delete');


//Rutas para settings
Route::get('settings', 'SettingsController@index');
Route::get('settings/{setting}', 'SettingsController@show');
Route::post('settings', 'SettingsController@store');
Route::put('settings/{setting}', 'SettingsController@update');
Route::delete('settings/{setting}', 'SettingsController@delete');





