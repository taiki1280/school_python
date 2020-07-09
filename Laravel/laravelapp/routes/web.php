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

Route::get('/', function () {
  return view('welcome');
});

// Route::get('hello', function () {
//   return view('hello');
// });

Route::get('hello/{msg?}', 'HelloController@index');
// Route::get('hello/{msg?}', function ($msg = 'メッセージ内容はありません') {
//   $html = <<<EOF
//     <html>
//     <head>
//       <title>Hello</title>
//       <style>
//         body {
//           font-size: 16pt;
//           color: #999;
//         }
//         h1 {
//           font-size: 100pt;
//           text-align: right;
//           margin: -40px 0px -50px 0px;
//           color: #eee;
//         }
//         h2 {
//           font-size: 80pt;
//           text-align: center;
//           margin: auto;
//           color: #955
//         }
//       </style>
//     </head>
//     <body>
//       <h1>Hello</h1>
//       <h2>{$msg}</h2>
//       <p>This is samplepage.</p>
//       <p>これは、サンプルで作ったページです。</p>
//     </body>
//     </html>
//   EOF;
//   return $html;
// });
