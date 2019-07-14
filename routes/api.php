<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Francis pon todas tus rutas api dentro de este middleware
Route::group(['middleware' => ['cors']], function(){ 

   Route::resource('debts', 'DebtController');
   Route::resource('payments', 'PaymentController');
   Route::resource('products', 'ProductController');
   Route::resource('purchases', 'PurchaseController');
   Route::resource('sales', 'SaleController');
   Route::resource('sellers', 'SellerController');

});

