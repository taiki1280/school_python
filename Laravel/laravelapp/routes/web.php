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

Route::get('jissyu10', 'Jissyu4_5Controller@index');
Route::post('jissyu10', 'Jissyu4_5Controller@post');