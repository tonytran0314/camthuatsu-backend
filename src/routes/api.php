<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\SoundController;

Route::prefix('v1')->group(function() {
    // Route::middleware('auth:sanctum')->group(function() {
        Route::apiResource('/sounds', SoundController::class)->only(['index']);
    // });

    // Route::controller(AuthenticationController::class)->group(function() {
    //     Route::post('/login', 'login');
    //     Route::post('/logout', 'logout');
    //     Route::post('/signup', 'signup');
    // });
});