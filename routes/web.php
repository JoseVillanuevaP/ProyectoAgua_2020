<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
PARA CREAR UN PROYECTO NUEVO INTRODUCIMOS
 *
 * laravel new roles
*/


/*para realizar la autenticación en laravel 6 necesitamos

composer require laravel/ui

 * php artisan ui vue --auth
 * npm i
npm run dev
php artisan serve
 *  */

use Illuminate\Support\Facades\Route;
use Yajra\DataTables\DataTables;

Route::get('/', function () {

    return view('welcome');

});


Route::view('/', 'welcome')->name('welcome');

Route::get('mapa','MapaController@index')->name('mapa');

Route::get('charts','ChartController@index')->name('charts');
Route::post('chart/fetch_data', 'ChartController@fetch_data');
Route::get('charts/{id}', 'ChartController@getEdif');


Route::resource('edif','ChartController');
Route::get('anuals/{id}','ChartController@getEdif');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Crear reporte sin permisos
Route::post('reportes/store','ReporteController@store')->name('reportes.store');

Route::get('reportes/store','ReporteController@create')->name('reportes.create');

Route::get('reportes','ReporteController@index')->name('reportes.index');


//Routes

Route::middleware(['auth'])->group(function (){

    //roles
    Route::post('roles/store','RoleController@store')->name('roles.store')
        ->middleware('can:roles.create');

    Route::get('roles','RoleController@index')->name('roles.index')
        ->middleware('can:roles.index');

    Route::get('roles/store','RoleController@create')->name('roles.create')
        ->middleware('can:roles.create');

    Route::put('roles/{role}','RoleController@update')->name('roles.update')
        ->middleware('can:roles.edit');

    Route::get('roles/{role}','RoleController@show')->name('roles.show')
        ->middleware('can:roles.show');

    Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
        ->middleware('can:roles.destroy');

    Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
        ->middleware('can:roles.edit');


    //Edificios
    Route::post('edificios/store','EdificiosController@store')->name('edificios.store')
        ->middleware('can:edificios.create');

    Route::get('edificios','EdificiosController@index')->name('edificios.index')
        ->middleware('can:edificios.index');

    Route::get('edificios/store','EdificiosController@create')->name('edificios.create')
        ->middleware('can:edificios.create');

    Route::put('edificios/{edificios}','EdificiosController@update')->name('edificios.update')
        ->middleware('can:edificios.edit');

    Route::get('edificios/{edificios}','EdificiosController@show')->name('edificios.show')
        ->middleware('can:edificios.show');

    Route::delete('edificios/{edificios}','EdificiosController@destroy')->name('edificios.destroy')
        ->middleware('can:edificios.destroy');

    Route::get('edificios/{edificios}/edit','EdificiosController@edit')->name('edificios.edit')
        ->middleware('can:edificios.edit');



    //Productos



    Route::post('products/store','ProductController@store')->name('products.store')
        ->middleware('can:products.create');

    Route::get('products','ProductController@index')->name('products.index')
        ->middleware('can:products.index');

    Route::get('products/store','ProductController@create')->name('products.create')
        ->middleware('can:products.create');

    Route::put('products/{product}','ProductController@update')->name('products.update')
        ->middleware('can:products.edit');

    Route::get('products/{product}','ProductController@show')->name('products.show')
        ->middleware('can:products.show');

    Route::delete('products/{product}','ProductController@destroy')->name('products.destroy')
        ->middleware('can:products.destroy');

    Route::get('products/{product}/edit','ProductController@edit')->name('products.edit')
        ->middleware('can:products.edit');

    //Reportes




    Route::put('reportes/{reporte}','ReporteController@update')->name('reportes.update')
        ->middleware('can:reportes.edit');

    Route::get('reportes/{reporte}','ReporteController@show')->name('reportes.show')
        ->middleware('can:reportes.show');

    Route::delete('reportes/{reporte}','ReporteController@destroy')->name('reportes.destroy')
        ->middleware('can:reportes.destroy');

    Route::get('reportes/{reporte}/edit','ReporteController@edit')->name('reportes.edit')
        ->middleware('can:reportes.edit');

    //Users

    Route::get('users','UserController@index')->name('users.index')
        ->middleware('can:users.index');

    Route::put('users/{user}','UserController@update')->name('users.update')
        ->middleware('can:users.edit');

    Route::get('users/{user}','UserController@show')->name('users.show')
        ->middleware('can:users.show');

    Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
        ->middleware('can:users.destroy');

    Route::get('users/{user}/edit','UserController@edit')->name('users.edit')
        ->middleware('can:users.edit');


});
