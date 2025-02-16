<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/equipo/{id}', [EquipoController::class, 'mostrarEquipos']);

Route::get('/equipo/{id}/comentario/{comment}', function($id, $comentario){
    return 'Equipo '.$id.', Excelente Trabajo '.$comentario;
});

Route::get('/usuario/{nombre?}', function($nombre = 'Aiub'){
    return '<h1>Nombre </h1>'.$nombre;
});

Route::get('/producto', [ProductController::class, 'index']);
Route::get('/producto/{id}', [ProductController::class, 'verProducto']);
Route::get('/producto/nombre/{nombre}', [ProductController::class, 'verNombreProducto']);