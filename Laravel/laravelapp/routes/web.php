<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('hello', 'HelloController@index')
  ->middleware(HelloMiddleware::class);

Route::post('hello', 'HelloController@post');

Route::get('jissyu', 'JissyuController@index');

Route::get('Jissyu3_1', 'Jissyu3_1Controller@index');
Route::post('Jissyu3_1', 'Jissyu3_1Controller@post');

Route::get('Jissyu3_2', 'Jissyu3_2Controller@index');
Route::post('Jissyu3_2', 'Jissyu3_2Controller@post');
