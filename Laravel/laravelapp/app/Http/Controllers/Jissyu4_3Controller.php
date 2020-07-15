<?php

namespace App\Http\Controllers;

use App\Http\Requests\Jissyu4_3Request;
use Illuminate\Http\Request;
// use ___(1)___;
use App\Rules\Jissyu4_3Myrule;

class Jissyu4_3Controller extends Controller
{
  public function index()
  {
    $data = [
      'msg' => '必要事項を記入してください。',
    ];
    return view('jissyu4_3.input', $data);
  }

  // public function post(___(2)___)
  public function post(Jissyu4_3Request $request)
  {
    //全データの取得
    $data = $request->all();
    return view('jissyu4_3.output', ['data' => $data]);
  }
}
