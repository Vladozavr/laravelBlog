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

//Маршруты административной части. Префикс для маршрута - админ, 
//пространство имён - админ, т.к. контроллер в папке Admin
//middleware что-бы не писать в контроллерах и каждой строчке, пишем один раз
Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
    //роут к данному методу контроллера
    Route::get('/','DashboardController@dashboard')->name('admin.index');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
