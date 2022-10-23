<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PacienteController;

use App\Http\Controllers\ProdutosController;

use App\Http\Controllers\VendasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/imc/{nome}/{massa}/{altura}/{genero}', [PacienteController::class, 'calcularIMC']);

Route::get('/', [ProdutosController::class, 'exibirProdutos']);

Route::get('/novos', [ProdutosController::class, 'exibirProdutosNovos']);

Route::get('/usados', [ProdutosController::class, 'exibirProdutosUsados']);

Route::get('/vendas', [VendasController::class, 'listarVendas']);

Route::get('/vendas/ver/{id}', [VendasController::class, 'verVenda']);

Route::get('/vendas/nova/{produto}/{preco}/{quantidade}', [VendasController::class, 'cadastrarVenda']);

Route::get('/vendas/atualizar/{id}/{produto}/{preco}/{quantidade}', [VendasController::class, 'atualizarVenda']);

Route::get('/vendas/excluir/{id}', [VendasController::class, 'excluirVenda']);

