<?php

use Illuminate\Http\Request;

//API Routes

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Francis pon todas tus rutas api dentro de este middleware
Route::group(['middleware' => ['cors']], function(){ 
  
   Route::apiResource('users', 'UserController');
   Route::apiResource('debts', 'DebtController');
   Route::apiResource('payments', 'PaymentController');
   Route::apiResource('products', 'ProductController');
   Route::apiResource('purchases', 'PurchaseController');
   Route::apiResource('sales', 'SaleController');
   Route::apiResource('sellers', 'SellerController');
   /*Route::resource('debts', 'DebtController');
   Route::resource('payments', 'PaymentController');
   Route::resource('products', 'ProductController');
   Route::resource('purchases', 'PurchaseController');
   Route::resource('sales', 'SaleController');
   Route::resource('sellers', 'SellerController');*/

});


