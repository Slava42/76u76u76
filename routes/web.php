<?php
use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'catalog']);
Route::get('/info', [App\Http\Controllers\InfoController::class, 'info']);
Route::get('/map', [App\Http\Controllers\MapController::class, 'map']);
?>
