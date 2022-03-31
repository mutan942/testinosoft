<?php
namespace App\Http\Controllers;
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
//Route::resource('/mobil', MobilController::class);
Route::get('/getstok', [KendaraanController::class, 'index']);
Route::post('/simpanmopbil', [KendaraanController::class, 'store']);
Route::post('/penjualan', [PenjualanController::class, 'store']);
Route::post('/laporan', [PenjualanController::class, 'laporan']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});