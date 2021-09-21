<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
// return view('welcome');
// });
// existe varias formas de chamar o controller dentro da rota 
//Route::get('/',[HomeController::class.index])->name('homePage'); 
/* esta forma de chamar o controller no router para versão 8, não esta ser reconhecido a sintaxe.
//Route::get('/', 'HomeController@paginaPrincipal'); */

// recebendo paramentro nas rotas 
//Route::get('/test/{var1}/{v2}', [HomeController::class,'soma']);


Route::get('/', [HomeController::class, 'index']);
//Route::fallback('/', [HomeController::class, 'pageNotFound404']);
