<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Kouka1_2Request;

class Kouka1_2Controller extends Controller
{
  public function index()
  {
    // return view('___(5)___');
    return view('kouka1_2.input');
  }

  // public function post(___(6)___ $request)
  public function post(Kouka1_2Request $request)
  {
    //全データの取得
    $data = $request->all();
    // return view('___(7)___', ['data' => $data]);
    return view('kouka1_2.output', ['data' => $data]);
  }
}
