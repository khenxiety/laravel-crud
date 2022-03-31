<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/customers', 'App\Http\Controllers\CustomerController@getCustomer');

// get by id
Route::get('/customers/{id}', 'App\Http\Controllers\CustomerController@getCustomerById');

// add customer
Route::post('/addcustomer', 'App\Http\Controllers\CustomerController@addCustomer');
// update customer
Route::post('/updatecustomer/{id}', 'App\Http\Controllers\CustomerController@updateCustomer');
// delete customer
Route::delete('/deletecustomer/{id}', 'App\Http\Controllers\CustomerController@deleteCustomer');