<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DelitoController;
use App\Http\Controllers\MapController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/login', [UsuarioController::class, 'loginIndex']);
Route::post('/api/loginIn', [UsuarioController::class, 'loginIn']);
Route::get('/api/usuarios', [UsuarioController::class, 'usuariosIndex']);
Route::get('/api/crearUsuario', function () {
    return view('crearUsuario');
});
Route::post('/api/usuarioCreate', [UsuarioController::class, 'crearUsuario'])->name('usuarioCreate');

Route::get('/api/casos', [DelitoController::class, 'casosIndex']);
Route::get('/api/crearCaso', function () {
    return view('crearCaso');
});
Route::post('/api/casoCreate', [DelitoController::class, 'crearCaso'])->name('casoCreate');

Route::post('/procesar-formulario', [MapController::class, 'procesarFormulario'])->name('procesarFormulario');