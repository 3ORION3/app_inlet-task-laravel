<?php

use App\Models\Entity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\AuthController;

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

///**Public Routes**\\\

Route::resource('/entities', EntityController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::get('/entities', [EntityController::class, 'index']);
Route::get('/entities/{id}', [EntityController::class, 'show']);
Route::get('/entities/search/{name}', [EntityController::class, 'search']);
Route::post('/logout', [AuthController::class, 'logout']);

// 

///**Protected Routes**\\\

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::post('/entities', [EntityController::class, 'store']);
//     Route::put('/entities/{id}', [EntityController::class, 'update']);
//     Route::delete('/entities/{id}', [EntityController::class, 'destroy']);
// });

