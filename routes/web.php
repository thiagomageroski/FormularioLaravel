<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LandingPageController::class, "index"]);
Route::post('/contato',[LandingPageController::class, "enviarContato"]);