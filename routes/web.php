<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalletaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('galletas', GalletaController::class);