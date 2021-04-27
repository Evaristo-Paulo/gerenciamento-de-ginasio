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






 /* POPULAR PROVÍNCIA/MUNICÍPIO */
 Route::get('/ajax-subcat', function ( Request $request ) {
    $province_id = $request->input('province_id');
    $subcategoria = Municipe::where('province_id', '=', $province_id)->get();
    return Response::json($subcategoria);
});


