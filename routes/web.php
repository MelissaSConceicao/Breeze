<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


/**
 * Essas rotas exibem as páginas através do caminho para os 
 * controllers e chamando as funções que vão mostrar as telas
 */
Route::get('/', 'App\Http\Controllers\PrincipalController@index')->name('site.principal');
Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
//Rota para os dados serem enviado ao controller
Route::post('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');


/**
 * Passando parâmetros através das rotas
 * Aqui é passado um nome e uma mensagem que pode ou não ser passada,
 * caso não seja passada, a mensagem será 'sem texto'
 * 
 * Route::get('/contato/{nome}/{mensagem?}', 
 *   function(string $nome, string $mensagem = 'sem texto')
 *   {echo 'passagem de parâmetros via browser: ' .$nome. ' - ' .$mensagem;}
 * );
 */



Route::prefix('/app')-> group (function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

//redireciona quando não encontra parâmetros
Route::fallback(function(){
    echo 'a rota não exite <a href="'.route('site.principal').'"> Clique aqui </a>';
});

