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

Route::get('/', 'mainController@home')->name('home');
/* Logout */
Route::get('/login', 'mainController@loginForm')->name('login.form');
Route::post('/login', 'mainController@login')->name('login.done');
Route::get('/logout', 'mainController@logout')->name('logout');
/* Usuários */
Route::get('/usuarios/registo', 'userController@registerForm')->name('user.register.form');
Route::post('/usuarios/registo', 'userController@register')->name('user.register');
Route::get('/usuarios', 'userController@list')->name('user.list');
/* Funcionários */
Route::get('/funcionarios/registo', 'workerController@registerForm')->name('worker.register.form');
Route::post('/funcionarios/registo', 'workerController@register')->name('worker.register');

