<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jissyu5_1Controller extends Controller
{
  public function index()
  {
    $items = DB::select('select * from people');
    // return view('___(1)___', ['items' => $items]);
    return view('Jissyu5_1.index', ['items' => $items]);
  }
  public function show(Request $request)
  {
    if (isset($request->id)) {
      // $param = ['id' => ___(2)___];
      $param = ['id' => $request->id];
      $items = DB::select(
        // '___(3)___',
        'select * from people where id = :id',
        $param
      );
    } else {
      $items = DB::select('select * from people');
    }
    // return view('___(4)___', ['items' => $items]);
    return view('Jissyu5_1.show', ['items' => $items]);
  }
}
