<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/", [\App\Http\Controllers\HomeController::class,"index"]);

Route::get("/shop", [\App\Http\Controllers\ShopController::class, "getAllProducts"]);

Route::get("/contact", [\App\Http\Controllers\ContactController::class, "index"]);

Route::view("/about", "about");

Route::get("/admin/all-contacts", [\App\Http\Controllers\ContactController::class, "getAllContacts"]);


