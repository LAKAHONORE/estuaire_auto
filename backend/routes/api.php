<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/


Route::get("/listAll", [ApiController::class,"listAll"]);
Route::post("/contact/store", [ApiController::class,"store"]);