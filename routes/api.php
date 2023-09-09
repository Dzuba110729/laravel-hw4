<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['auth:sanctum'])->group(function () {
    // Ваши защищенные маршруты здесь
});

// Добавьте маршрут для создания токенов
Route::post('/tokens/create', 'AuthController@createToken');
Route::middleware('auth:api')->post('/tokens/create', 'AuthController@createToken');

// Добавьте маршрут для вывода информации об авторизованном пользователе
Route::middleware('auth:api')->get('/user', 'UserController@show');

// Защищенный маршрут для ресурсного контроллера CarsController
Route::apiResource('cars', CarsController::class)->middleware('auth:api');

Route::apiResource('cars', CarsController::class)->middleware('auth:sanctum');