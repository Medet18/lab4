<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//0
use App\Http\Controllers\ApiController;
//0_1
use App\Http\Controllers\ApiPostController;

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
//1
Route::get('/clients', [ApiController::class, 'index']);
//2
Route::post('/clients/details',[ApiController::class,'get_client']);//client_id ->


//////////////////////////////////////
//lab7
//1   php artisan make:controller ApiPostController
//1
Route::get('/post2', [ApiPostController::class, 'index']);
//2
Route::post('/post2/details2',[ApiPostController::class,'get_post']);//client_id ->