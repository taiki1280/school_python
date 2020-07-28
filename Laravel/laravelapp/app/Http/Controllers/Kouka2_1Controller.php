<?php

namespace App\Http\Controllers;

// use App\___(5)___;
use App\Restdata;
use Illuminate\Http\Request;

class Kouka2_1Controller extends Controller
{
  public function index()
  {
    // $items = ___(6)___::all();
    $items = Restdata::all();
    $param = ['input' => '', 'items' => $items];
    return view('kouka2_1.index', $param);
  }
  public function find(Request $request)
  {
    //where()メソッドを利用すること。
    // $item = ___(7)___;
    $item = Restdata::where("message", $request->input)->first();
    // return view('___(8)___', ['item' => $item]);
    return view('kouka2_1.show', ['item' => $item]);
  }
}
