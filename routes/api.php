<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ReseniaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bibliotecas',[BibliotecaController::class, 'index']);
Route::get('bibliotecas/{id}',[BibliotecaController::class, 'show']);
Route::post('bibliotecas',[BibliotecaController::class, 'store']);
Route::patch('bibliotecas/{id}',[BibliotecaController::class, 'update']);
Route::delete('bibliotecas/{id}',[BibliotecaController::class, 'destroy']);

Route::get('usuarios',[UsuarioController::class, 'index']);
Route::get('usuarios/{id}',[UsuarioController::class, 'show']);
Route::post('usuarios',[UsuarioController::class, 'store']);
Route::patch('usuarios/{id}',[UsuarioController::class, 'update']);
Route::delete('usuarios/{id}',[UsuarioController::class, 'destroy']);

Route::get('reservas',[ReservaController::class, 'index']);
Route::get('reservas/{id}',[ReservaController::class, 'show']);
Route::post('reservas',[ReservaController::class, 'store']);
Route::patch('reservas/{id}',[ReservaController::class, 'update']);
Route::delete('reservas/{id}',[ReservaController::class, 'destroy']);

Route::get('resenias',[ReseniaController::class, 'index']);
Route::get('resenias/{id}',[ReseniaController::class, 'show']);
Route::post('resenias',[ReseniaController::class, 'store']);
Route::patch('resenias/{id}',[ReseniaController::class, 'update']);
Route::delete('resenias/{id}',[ReseniaController::class, 'destroy']);

Route::get('libros',[LibroController::class, 'index']);
Route::get('libros/{id}',[LibroController::class, 'show']);
Route::post('libros',[LibroController::class, 'store']);
Route::patch('libros/{id}',[LibroController::class, 'update']);
Route::delete('libros/{id}',[LibroController::class, 'destroy']);

Route::get('autores',[AutorController::class, 'index']);
Route::get('autores/{id}',[AutorController::class, 'show']);
Route::post('autores',[AutorController::class, 'store']);
Route::patch('autores/{id}',[AutorController::class, 'update']);
Route::delete('autores/{id}',[AutorController::class, 'destroy']);

Route::get('categorias',[CategoriaController::class, 'index']);
Route::get('categorias/{id}',[CategoriaController::class, 'show']);
Route::post('categorias',[CategoriaController::class, 'store']);
Route::patch('categorias/{id}',[CategoriaController::class, 'update']);
Route::delete('categorias/{id}',[CategoriaController::class, 'destroy']);
