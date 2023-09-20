<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\folioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [folioController::class, "index"]);

Route::get("/", [folioController::class, "create"])->name("contact");
Route::post("/", [folioController::class, "store"])->name("contact");