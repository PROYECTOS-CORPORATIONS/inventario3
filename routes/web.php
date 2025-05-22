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
//rutas de cliente
Route::get('/cliente/index', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente/store', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::post('/cliente/update', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('/cliente/delete/{id}', [ClienteController::class, 'delete'])->name('cliente.delete');
Route::post('/cliente/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');


//rutas de productos
Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index');