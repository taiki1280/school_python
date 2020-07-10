<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu3_2Controller extends Controller
{
  public function index()
  {
    $data = [
      // 'msg' => '___(5)___',
      'msg' => '必要事項を記入してください',
    ];
    // return view('___(6)___', $data);
    return view('jissyu3_2.input', $data);
  }

  public function post(Request $request)
  {
    $data = [
      'name' => $request->name,
      // ___(7)___,
      'mail' => $request->mail,
      // ___(8)___
      'age' => $request->age
    ];
    // return view('___(9)___', ___(10)___);
    return view('jissyu3_2.output', ['data' => $data]);
  }
}
