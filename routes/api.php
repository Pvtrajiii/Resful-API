<?php

use Illuminate\Support\Facades\Route;

//posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});