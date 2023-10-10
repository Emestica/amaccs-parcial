<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function GetProductos(){
        return view('productos');
    }
    public function GetClientes(){
        return view('clientes');
    }
    public function GetSucursales(){
        return view('sucursales');
    }
    public function GetCobro(){
        return view('cobro');
    }
}
