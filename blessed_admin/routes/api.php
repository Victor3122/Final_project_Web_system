<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\EmployeeApiController;
use App\Http\Controllers\Api\LocationApiController;

Route::prefix('products')->group(function () {
    Route::get('/', [ProductApiController::class, 'index']);
    Route::get('/{id}', [ProductApiController::class, 'show']);
    Route::post('/', [ProductApiController::class, 'store']);
    Route::put('/{id}', [ProductApiController::class, 'update']);
    Route::delete('/{id}', [ProductApiController::class, 'destroy']);
});

Route::prefix('employees')->group(function () {
    Route::get('/', [EmployeeApiController::class, 'index']);
    Route::get('/{id}', [EmployeeApiController::class, 'show']);
    Route::post('/', [EmployeeApiController::class, 'store']);
    Route::put('/{id}', [EmployeeApiController::class, 'update']);
    Route::delete('/{id}', [EmployeeApiController::class, 'destroy']);
});

Route::prefix('locations')->group(function () {
    Route::get('/', [LocationApiController::class, 'index']);
    Route::get('/{id}', [LocationApiController::class, 'show']);
    Route::post('/', [LocationApiController::class, 'store']);
    Route::put('/{id}', [LocationApiController::class, 'update']);
    Route::delete('/{id}', [LocationApiController::class, 'destroy']);
});
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
