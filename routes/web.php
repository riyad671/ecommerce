<?php

use Illuminate\Support\Facades\Route;

// Backend
use App\Http\Controllers\AdminController;

// Forntend
use App\Http\Controllers\HomeController;

// Backend
Route::get('/admin',[AdminController::class,'index']);
Route::get('/dashboard',[AdminController::class,'dashboard']);

// Frontend
Route::get('/',[HomeController::class,'index']);
