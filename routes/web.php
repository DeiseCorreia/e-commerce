<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;

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

//Route::match(['get','post'] , '/', [ProdutoController::class, 'index']);//pode dar erro com o . de concatenação
  //->name('inicio');
  Route::resource('/produtos', 'ProdutoController');
  Route::resource('/categorias', 'CategoriaController');

  

 // Route::resource('users', 'AdminUserController')->parameters([
    //'users' => 'admin_user'
  //]);//exemplo

  //Route::resource('/categorias', 'ProdutoController')->names([
    //'create' => 'index'
 // ]);
   // Route::post('/categorias','ProdutoController');
  
  //Route::match(['get','post'] , '/categoria', 
  //[ProdutoController::class, 'categoria'])//pode dar erro com o . de concatenação
   // ->name('categoria');
 /* Route::match(['get','post'] , '{idcategoria}/categoria', 
  [ProdutoController::class, 'categoria'])
    ->name('categoria_id');
*/ 
  Route::match(['get','post'] , '/cadastro', 
  [ClienteController::class, 'cadastro'])
    ->name('cadastro');
  Route::match(['get','post'] , '/contato', 
  [ClienteController::class, 'contato'])
    ->name('contato');
//propriedade match(posso passar varios protocolos http)
  






  /*
Route::get('/', function () { 
 
    return view('produtos');
});

Route::get('/categoria', function (){
    return view('categoria');
});

Route::get('/cadastro', function (){
  return view('cadastro');
});
Route::get('/contato', function (){
    return view('contato');
  });
  Route::get('/produtos', function (){
    return view('produtos');
  });*/
