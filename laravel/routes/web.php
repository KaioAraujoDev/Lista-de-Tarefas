<?php

use Illuminate\Support\Facades\Route;

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

//Login
Route::get('/',function(){
    return view('Paginas.login.login');
});
Route::post('/user','user_controller@buscar')->name('user.buscar');

//Cadastro

Route::get('/cadastro',function(){
    return view('Paginas.cadastro.cadastro');
})->name('user.cadastro');

Route::post('/cadastro/validacao','CadastroUser@validar')->name('user.validar');

//Route::get('/cadastro/efetivar','CadastroUser@cadastrar')->name('user.cadastrar');

//SucessoCadastro
Route::get('/cadastro/sucesso',function(){
    return view('Paginas.cadastro.sucessocad');
})->name('user.sucesso');

