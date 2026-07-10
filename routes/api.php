<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/admin/login",[AuthController::class, 'authenticate']);
Route::group(['middleware'=>'auth:sanctum'],function(){
    // Route::get('categories',[CategoryController::class, 'index']);
    //  Route::post('categories',[CategoryController::class, 'store']);
    //  Route::put('categories/{id}',[CategoryController::class, 'update']);
    //   Route::get('categories/{id}',[CategoryController::class, 'show']);
    //   Route::delete('categories/{id}',[CategoryController::class, 'destroy']);
    Route::resource('categories',CategoryController::class);//php artisan route:list
    Route::resource('brands',BrandController::class);

});

