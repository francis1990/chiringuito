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


Route::get('/', function () {
    return view('welcome');
});
Route::post('/prueba', 'ProductController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('my-theme', function () {

    return view('welcome2');

});

//D:\Software_instalados\laragon\www\chiringuito\vendor\jeroennoten\laravel-adminlte\resources\views
Route::get('login2', function () {

    return view('login2');

});
