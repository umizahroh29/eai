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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('vendor', \App\Http\Controllers\Api\VendorController::class);
Route::resource('warehouse', \App\Http\Controllers\Api\WarehouseController::class);
Route::resource('rak-penyimpanan', \App\Http\Controllers\Api\RakPenyimpananController::class);
Route::resource('barang', \App\Http\Controllers\Api\BarangController::class);

Route::post('barang/request', [\App\Http\Controllers\Api\BarangController::class, 'request']);
Route::put('barang/approve/{requestBarang}', [\App\Http\Controllers\Api\BarangController::class, 'approve']);
Route::put('barang/update-quantity/{barang}', [\App\Http\Controllers\Api\BarangController::class, 'updateQuantity']);
