<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class Jissyu4_2Controller extends Controller
{
  public function index()
  {
    $data = [
      'msg' => '必要事項を記入してください。',
    ];
    // return view('___(1)___', $data);
    return view('Jissyu4_2.input', $data);
  }
  public function post(Request $request)
  {
    $rules = [
      // 'name' => '___(2)___|max:10',
      'name' => 'required|max:10',
      // 'adress' => 'required|___(3)___',
      'adress' => 'required|max:20',
      // 'login_id' => 'required|numeric|___(4)___',
      'login_id' => 'required|numeric|digits_between:8,16',
      // 'password' => 'required|___(5)___',
      'password' => 'required|between:8,16',
    ];
    $messages = [
      'name.required' => '名前は必ず入力して下さい。',
      // 'name.___(6)___' => '名前は10文字以内で入力して下さい。',
      'name.max' => '名前は10文字以内で入力して下さい。',
      'adress.required'  => '住所は必ず入力して下さい。',
      'adress.max'  => '住所は20文字以内で入力して下さい。',
      'login_id.required' => 'ログインIDは必ず入力して下さい。',
      // 'login_id.___(7)___' => 'ログインIDは数字で入力して下さい。',
      'login_id.numeric' => 'ログインIDは数字で入力して下さい。',
      'login_id.digits_between' => 'ログインIDは8文字以上16文字以内で入力して下さい。',
      // 'password.___(8)___' => 'パスワードは必ず入力して下さい。',
      'password.required' => 'パスワードは必ず入力して下さい。',
      'password.between' => 'パスワードは8文字以上16文字以内で入力して下さい。',
    ];
    // $validator = ___(9)___;
    $validator = Validator::make($request->all(), $rules, $messages);
    // if (___(10)___) {
    if ($validator->fails()) {
      // return redirect('___(11)___')
      return redirect('/jissyu7')
        ->withErrors($validator)
        ->withInput();
    }

    //全データの取得
    $data = $request->all();

    // return view('___(12)___', ['data' => $data]);
    return view('Jissyu4_2.output', ['data' => $data]);
  }
}
