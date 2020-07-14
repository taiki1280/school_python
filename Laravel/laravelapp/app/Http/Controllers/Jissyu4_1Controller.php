<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu4_1Controller extends Controller
{
  public function index()
  {
    $data = [
      'msg' => '必要事項を記入してください。',
    ];
    // return view('___(5)___', $data);
    return view('Jissyu4_1.input', $data);
  }
  public function post(Request $request)
  {
    $validate_rule = [
      // 'name' => '___(6)___',    //必須項目
      'name' => 'required',    //必須項目
      // 'mail' => '___(7)___',    //電子メール形式
      'mail' => 'email',    //電子メール形式
      // 'age' => '___(8)___',    //値が数値、0～150の範囲
      'age' => 'numeric|between:0,150',    //値が数値、0～150の範囲
    ];
    // $this->validate(___(9)___,___(10)___);
    $this->validate($request, $validate_rule);

    //全データの取得
    $data = $request->all();
    // return view('___(11)___', ___(12)___);
    return view('Jissyu4_1.output', ['data' => $data]);
  }
}
