<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'getAll']);
Route::post('/tasks', [TaskController::class, 'createTask']);