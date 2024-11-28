<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibController;

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

Route::get('/home', [LibController::class, 'home']);
Route::get('/cadastroUsuario', [LibController::class, 'cadastroUsuario']);
Route::get('/lista', [LibController::class, 'lista']);
Route::get('/cadastroLivro', [LibController::class, 'cadastroLivro']);
Route::get('/editar', [LibController::class, 'editar']);
Route::get('/deletar', [LibController::class, 'deletar']);
