<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu4_5Controller extends Controller
{
  public function index()
  {
    // $data = [
    //   'name' => 'taiki',
    //   'age' => 19,
    //   'post_num' => '000-0000',
    //   'sex' => '男',
    //   'hobby' => ['音楽',''],
    // ];
    $data = [
      'name' => '',
      'age' => '',
      'post_num' => '',
      'sex' => '',
      'hobbies' => [],
    ];
    return view('Jissyu4_5.input', $data);
    // return view('Jissyu4_5.output');
  }
  public function post(Request $request)
  {
    $validate_rule = [
      'name' => 'required',
      'age' => 'required|numeric|between:0,150',
      'post_num' => 'required',
      'sex' => 'required',
      'hobbies' => 'required',
    ];
    $this->validate($request, $validate_rule);
    //全データの取得
    $data = $request->all();
    return view('Jissyu4_5.output', ['data' => $data]);
    // return view('Jissyu4_5.output');
  }
}
