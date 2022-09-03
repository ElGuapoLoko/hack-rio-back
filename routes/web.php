<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\UsersController;
use \App\Http\Controllers\VideosController;
use \App\Http\Controllers\AccountController;


Route::get('/', function () {
    return 'Educação de qualidade - Desafio Petrobras Back' . app()->version();
});

Route::middleware('cors')->group(function () {


//    Route::controller(UsersController::class)->prefix('users')->group(function () {
//        Route::get('/index', 'index');
//        Route::get('/show', 'show');
//        Route::post('/store', 'store');
//        Route::put('/update', 'update');
//        Route::delete('/delete/{id}', 'destroy');
//    });
//
});
