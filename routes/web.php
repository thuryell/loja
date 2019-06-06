<?php

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

Route::get('/', function () {
    return redirect()->route('loja');
});

Auth::routes();

Route::get('/loja','ShoppingController@index')->name('loja');
Route::get('/{categoria}/{id}',['as'=>'produto','uses'=>'ShoppingController@produto']);

Route::group(['middleware' => ['UserCheck']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/deletar/{id}','HomeController@deletar')->name("deletar");
    Route::get('/editar/{id}','HomeController@editar')->name("editar");
    Route::get("/inserir_jogo","JogoController@index")->name("inserir_jogo");
    Route::post('/edit_jogo',"JogoController@edit")->name("edit_jogo");

    Route::post("/inserir","JogoController@inserir")->name("inserir");

});
