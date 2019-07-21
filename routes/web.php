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
    return view('home');
});
Route::post('/prueba', 'ProductController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('my-theme', function () {

    return view('welcome2');

});
Route::get('/products', function () {
    return view('product/product');
})
->name('products');


Route::get('login2', function () {
    return view('login2');
});

