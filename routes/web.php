<?php
use Illuminate\Support\Facades\Route;
Route::post('/test/result', [App\Http\Controllers\TestController::class, 'result']);
Route::match(['get','post'],'/test/form/', [App\Http\Controllers\TestController::class, 'form']);

