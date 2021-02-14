<?php

use App\Http\Controllers\Ajax\ItemsController;
use App\Http\Controllers\ItemController;
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

Route::get('/items', [ItemController::class, 'index']);
Route::prefix('/item')->group( function () {
    Route::post('/store', [ItemsController::class, 'store']);
    Route::put('/{id}', [ItemsController::class, 'update']);
    Route::delete('/{id}', [ItemsController::class, 'destroy']);
    }
);