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
Route::get('/', 'App\Http\Controllers\PrincipalController@principal');

Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@sobrenos');

Route::get('/contato', 'App\Http\Controllers\ContatoController@contato');


/**
 * Passando parâmetros através das rotas
 * Aqui é passado um nome e uma mensagem que pode ou não ser passada,
 * caso não seja passada, a mensagem será 'sem texto'
 */
Route::get('/contato/{nome}/{mensagem?}', 
    function(string $nome, string $mensagem = 'sem texto')
    {echo 'passagem de parâmetros via browser: ' .$nome. ' - ' .$mensagem;}
);