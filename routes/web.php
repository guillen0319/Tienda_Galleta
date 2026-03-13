<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalletaController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CreditoController;
use App\Http\Controllers\ReporteController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('galletas', GalletaController::class);
Route::resource('ventas', VentaController::class);
Route::get('/creditos',[CreditoController::class,'index']);
Route::get('/creditos/pagar/{id}',[CreditoController::class,'pagar']);
Route::post('/creditos/pagar',[CreditoController::class,'guardarPago']);
Route::get('/reportes',[ReporteController::class,'index']);
