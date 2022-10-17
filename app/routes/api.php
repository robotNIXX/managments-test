<?php

use App\Http\Controllers\EmployeersController;
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

Route::prefix('employees')->group(function() {
    Route::get('/{id}', [EmployeersController::class, 'get']);
    Route::get('/', [EmployeersController::class, 'index']);
    Route::get('/{id}/command', [EmployeersController::class, 'getTheCommand']);
    Route::post('/', [EmployeersController::class, 'store']);
    Route::put('/{id}', [EmployeersController::class, 'update']);
    Route::delete('/{id}', [EmployeersController::class, 'delete']);
});
