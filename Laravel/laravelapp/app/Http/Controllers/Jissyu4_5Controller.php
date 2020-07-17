<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu4_5Controller extends Controller
{
  public function index()
  {
    $data = [
      'name' => 'taiki',
      'age' => 19,
      'post_num' => '000-0000',
      'sex' => '男',
      'hobby' => ['音楽',''],
    ];
    return view('Jissyu4_5.input', $data);
  }
  public function post(Request $request)
  {
    $validate_rule = [
      'name' => 'required',
      'mail' => 'email',
      'age' => 'numeric|between:0,150',
    ];
    $this->validate($request, $validate_rule);
    //全データの取得
    $data = $request->all();
    return view('Jissyu4_5.output', ['data' => $data]);
  }
}
