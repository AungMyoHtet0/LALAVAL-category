<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

//Route::get('category',[CategoryController::class, 'index']);
//Route::get('category/create',[CategoryController::class, 'create']);
//Route::post('category',[CategoryController::class, 'store']);
//Route::get('category/{id}',[CategoryController::class, 'show']);
//Route::get('category/{id}/edit',[CategoryController::class, 'edit']);
//Route::put('category/{id}',[CategoryController::class, 'update']);
//Route::delete('category/{id}',[CategoryController::class, 'destroy']);

Route::resource('category',CategoryController::class);
