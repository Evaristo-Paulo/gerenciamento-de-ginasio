<?php

use App\Models\Municipe;
use Illuminate\Http\Request;
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

Route::get('/', 'mainController@home')->name('home');
/* Logout */
Route::get('/login', 'mainController@loginForm')->name('login.form');
Route::post('/login', 'mainController@login')->name('login.done');
Route::get('/logout', 'mainController@logout')->name('logout');
/* Usuários */
Route::get('/usuarios/registo', 'userController@registerForm')->name('user.register.form');
Route::post('/usuarios/registo', 'userController@register')->name('user.register');
Route::get('/usuarios/{id}/actualizacao', 'userController@editForm')->name('user.edit.form');
Route::put('/usuarios/{id}/actualizacao', 'userController@edit')->name('user.edit');
Route::post('/usuarios/remocao', 'userController@remover')->name('user.remove');
Route::get('/usuarios', 'userController@list')->name('user.list');
Route::Post('/usuarios/actualizacao-de-senha', 'userController@changePassword')->name('user.change.password');
/* Funcionários */
Route::get('/funcionarios/registo', 'workerController@registerForm')->name('worker.register.form');
Route::post('/funcionarios/registo', 'workerController@register')->name('worker.register');
Route::get('/funcionarios', 'workerController@list')->name('worker.list');
Route::post('/funcionarios/remocao', 'workerController@remover')->name('worker.remove');
Route::get('/funcionarios/{id}/actualizacao', 'workerController@editForm')->name('worker.edit.form');
Route::put('/funcionarios/{id}/actualizacao', 'workerController@edit')->name('worker.edit');
Route::Post('/funcionarios/actualizacao-de-fotografia', 'workerController@changePhoto')->name('worker.change.photo');
/* Clientes */
Route::get('/clientes/registo', 'clientController@registerForm')->name('client.register.form');
Route::post('/clientes/registo', 'clientController@register')->name('client.register');
Route::get('/clientes', 'clientController@list')->name('client.list');
Route::post('/clientes/remocao', 'clientController@remover')->name('client.remove');
Route::get('/clientes/{id}/actualizacao', 'clientController@editForm')->name('client.edit.form');
Route::put('/clientes/{id}/actualizacao', 'clientController@edit')->name('client.edit');
Route::get('/pagamentos/registo', 'clientController@paymentRegisterForm')->name('payment.register.form');
Route::post('/pagamentos/registo', 'clientController@paymentRegister')->name('payment.register');
Route::get('/pagamentos', 'clientController@payments')->name('payment.list');
Route::get('/historicos', 'clientController@historics')->name('historic.list');
/* Relatório */
Route::get('/relatorios/cliente', 'clientController@relatoryHome')->name('client.relatory.home');
Route::get('/relatorios/clientes', 'clientController@clientRelatories')->name('client.relatories');
Route::get('/relatorios/pagamentos', 'clientController@paymentRelatories')->name('payment.relatories');
Route::get('/relatorios/historicos', 'clientController@historicRelatories')->name('historic.relatories');
Route::get('/relatorios/funcionarios', 'clientController@relatoryHome')->name('worker.relatory.home');







 /* POPULAR PROVÍNCIA/MUNICÍPIO */
 Route::get('/ajax-subcat', function ( Request $request ) {
    $province_id = $request->input('province_id');
    $subcategoria = Municipe::where('province_id', '=', $province_id)->get();
    return Response::json($subcategoria);
});


