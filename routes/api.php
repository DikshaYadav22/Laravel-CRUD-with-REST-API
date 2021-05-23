<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::resource('forms', FormController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
