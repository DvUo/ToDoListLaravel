<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


    Route::get('/tasks', [TaskController::class, 'getTasks']);

    Route::post('/tasks', [TaskController::class, 'saveTask']);

    Route::delete('/tasks/{id}', [TaskController::class, 'deleteTask']);

    Route::put('/tasks', [TaskController::class, 'editTask']);