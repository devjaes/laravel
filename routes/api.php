<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;

Route::get('/user', [StudentController::class, 'index']);
Route::post('/user', [StudentController::class, 'store']);
Route::delete('/user{id}', [StudentController::class, 'destroy']);
