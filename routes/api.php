<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::post('/register', [UserController::class, 'create']);


Route::get('/filament/all', [App\Http\Controllers\FilamentController::class, 'index']);
Route::post('/filament/new', [App\Http\Controllers\FilamentController::class, 'create']);
Route::put('/filament/update/{id}', [App\Http\Controllers\FilamentController::class, 'update']);
Route::delete('/filament/delete/{id}', [App\Http\Controllers\FilamentController::class, 'delete']);
