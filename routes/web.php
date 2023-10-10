<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/usuarios', [
    UsuariosController::class, 'GetUsuario'
]);

Route::get('/productos', [
    ProductosController::class, 'GetProductos'
]);

Route::get('/clientes', [
    ProductosController::class, 'GetClientes'
]);

Route::get('/sucursales', [
    ProductosController::class, 'GetSucursales'
]);

Route::get('/cobro', [
    ProductosController::class, 'GetCobro'
]);