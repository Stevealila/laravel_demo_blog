<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BlogController::class, 'index']);
Route::get('create', [BlogController::class, 'create']);
Route::post('store', [BlogController::class, 'store']);
Route::get('show/{id}', [BlogController::class, 'show']);
Route::get('edit/{id}', [BlogController::class, 'edit']);
Route::patch('update/{id}', [BlogController::class, 'update']);
Route::delete('destroy/{id}', [BlogController::class, 'destroy']);