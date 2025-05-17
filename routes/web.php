<?php

use App\Models\Cliente;
use App\Models\Producto;
use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Protucto\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //$cliente = new Cliente();
    
    /*
    $cliente = Cliente::create([
        'nombres'=>'Richar',
        'pri_ape'=>'Meza',
        'seg_ape'=>'Soto',
        'docu_tip'=>'M',
        'docu_num'=>'52589658',

    ]);
    return $cliente->nombre." ".$cliente->pri_ape;*/


   /* $producto = new Producto();

    $producto = Producto::create([
        'nombre' => 'Pantalon',
        'marca' => 'Temu',
        'talla' => 'S',
        'precio' => 150,
        'descripcion' => 'Hanchos',

    ]);
    return $producto->nombre." ".$producto->marca;*/

    return view('welcome');

});

Route::get('/cliente/index', [ClienteController::class, 'index'])->name('cliente.index');

Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index');
