<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get("/todo", [TodoController::class, 'index']);
Route::get("/todo/{id}", [TodoController::class, 'show']);
