<?php

use App\Http\Controllers\IndicacaoController;

Route::get('/listar_indicacao', 'IndicacaoController@index')->name('listar');

Route::get('/adicionar_indicacao', 'IndicacaoController@adicionar')
   ->name('adicionar')
   ->middleware('autenticador');
Route::post('/adicionar_indicacao', 'IndicacaoController@salvar')
   ->name('salvar')
   ->middleware('autenticador');
Route::delete('/listar_indicacao/{id}', 'IndicacaoController@excluir')
   ->name('excluir')
   ->middleware('autenticador');
Route::get('/editar_indicacao/{id}', 'IndicacaoController@edit')
   ->name('editar')
   ->middleware('autenticador');
Route::post('/update_indicacao/{id}', 'IndicacaoController@update')
    ->name('update')
    ->middleware('autenticador');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/entrar', 'EntrarController@index');
Route::post('/entrar', 'EntrarController@entrar');
Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');

Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/entrar');
});
