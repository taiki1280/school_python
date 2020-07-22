<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\HelloMiddleware;

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
  return view('welcome');
});

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

Route::get('jissyu', 'JissyuController@index');

Route::get('Jissyu3_1', 'Jissyu3_1Controller@index');
Route::post('Jissyu3_1', 'Jissyu3_1Controller@post');

Route::get('Jissyu3_2', 'Jissyu3_2Controller@index');
Route::post('Jissyu3_2', 'Jissyu3_2Controller@post');

Route::get('Jissyu5', 'Jissyu3_3Controller@index');

Route::get('Jissyu6', 'Jissyu4_1Controller@index');
Route::post('Jissyu6', 'Jissyu4_1Controller@post');

Route::get('jissyu7', 'Jissyu4_2Controller@index');
Route::post('jissyu7', 'Jissyu4_2Controller@post');

Route::get('jissyu8', 'Jissyu4_3Controller@index');
Route::post('jissyu8', 'Jissyu4_3Controller@post');

Route::get('jissyu9', 'Jissyu4_4Controller@index');
Route::post('jissyu9', 'Jissyu4_4Controller@post');

Route::get('jissyu9_ex', 'Jissyu4_5Controller@index');
Route::post('jissyu9_ex', 'Jissyu4_5Controller@post');

Route::get('kouka1_1', 'Kouka1_1Controller@index');

Route::get('kouka1_2', 'Kouka1_2Controller@index');
Route::post('kouka1_2', 'Kouka1_2Controller@post');

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('/jissyu10', 'Jissyu5_1Controller@index');
Route::get('/jissyu10/show', 'Jissyu5_1Controller@show');

Route::get('hello/show', 'HelloController@show');

Route::get('jissyu11', 'Jissyu5_2Controller@index');
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
Route::get('jissyu11/add', 'Jissyu5_2Controller@add');
Route::post('jissyu11/create', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'Jissyu5_2Controller@edit');
Route::post('jissyu11/update', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', 'Jissyu5_2Controller@del');
Route::post('jissyu11/remove', 'Jissyu5_2Controller@remove');

Route::get('jissyu12', 'Jissyu5_3Controller@index');
Route::get('jissyu12/show', 'Jissyu5_3Controller@show');
Route::get('jissyu12/add', 'Jissyu5_3Controller@add');
Route::post('jissyu12/create', 'Jissyu5_3Controller@create');
Route::get('jissyu12/edit', 'Jissyu5_3Controller@edit');
Route::post('jissyu12/update', 'Jissyu5_3Controller@update');
Route::get('jissyu12/del', 'Jissyu5_3Controller@del');
Route::post('jissyu12/remove', 'Jissyu5_3Controller@remove');

Route::get('person', 'PersonController@index');
