<?php

use App\Models\Sound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function() {
    // Route::middleware('auth:sanctum')->group(function() {
        Route::apiResource('/sounds', Sound::class)->only(['index']);
    // });

    // Route::controller(AuthenticationController::class)->group(function() {
    //     Route::post('/login', 'login');
    //     Route::post('/logout', 'logout');
    //     Route::post('/signup', 'signup');
    // });
});