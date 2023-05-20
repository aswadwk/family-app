<?php

use App\Http\Controllers\Api\FamilyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::controller(FamilyController::class)->group(function () {
    Route::get('families', 'index');
    Route::get('families/{id}', 'show');
    Route::post('families', 'store');
    Route::put('families/{id}', 'update');
    Route::delete('families/{id}', 'destroy');
});
