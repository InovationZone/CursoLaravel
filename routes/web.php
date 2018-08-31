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

//criando um grupo de rotas que passa pelo auth
//defino um namespace para nao ficar repetindo
//prefix ja implementa os nomes antes da /
$this->group(['middleware' => ['auth'], 'namespace' => 'Admin' , 'prefix' => 'admin'], function() {

    //rota de recaraga
    $this->get('balance/deposit', 'BalanceController@deposit')->name('balance.deposit');

    //rota que acessa o saldo
    $this->get('balance' , 'BalanceController@index')->name('admin.balance');



    $this->get('/', 'AdminController@index')->name('admin.home');

});

Route::get('/', 'Site\SiteController@index');

Auth::routes();


