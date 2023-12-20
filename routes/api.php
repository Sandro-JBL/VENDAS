<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PedidoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

// Rotas para Produto
Route::resource('produtos', ProdutoController::class);

// Rotas para Categoria
Route::resource('categorias', CategoriaController::class);

// Rotas para Pedido
Route::resource('pedidos', PedidoController::class);
Route::post('calcular-frete', [PedidoController::class, 'calcularFrete']);

    return $request->user();
});
