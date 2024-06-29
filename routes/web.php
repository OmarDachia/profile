<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [GeneralController::class, "index"])->name("index");
Route::get('/about', [GeneralController::class, "about"])->name("about");
Route::get('/projects', [GeneralController::class, "projects"])->name("projects");
Route::get('/photos', [GeneralController::class, "photos"])->name("photos");
