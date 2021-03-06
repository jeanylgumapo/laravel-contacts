<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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
Route::get('contacts',[ContactsController::class, 'index']);
Route::get('contacts/{id}',[ContactsController::class, 'show']);
Route::post('contacts',[ContactsController::class, 'store']);
Route::put('contacts/{id}',[ContactsController::class, 'update']);
Route::delete('contacts/{id}',[ContactsController::class, 'destroy']);