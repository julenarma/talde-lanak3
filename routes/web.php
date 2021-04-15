<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// \Carbon\Carbon::macro('myWeek', function(){
//     $carbon = \Carbon\Carbon::now();
//     $map = [
//         0 => 'sun',
//         1 => 'mon',
//         4 => 'thurs',
//     ];
//     return $map[$carbon->dayOfWeek];
// });

Auth::routes();
Route::get('/', function () {
    return view('auth.login');
    // return \Carbon\Carbon::myDay();
});


Route::get('/user', 'UserController@index')->name('user');

Route::get('/admin', 'Controller@index')->name('admin');





Route::get('/admin', function () {
    return view('auth.login');
});

//Restrict the the access for users

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin', 'AdminController@index');
});


