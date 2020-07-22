<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class Jissyu6_1Controller extends Controller
{
  public function index(Request $request)
  {
    // $items = ___(5)___;
    $items = Person::all();
    // $param = ___(6)___;
    $param = $request->input;
    // return view('jissyu6_1.index', ___(7)___);
    return view('jissyu6_1.index', ["items" => $items, "input" => $param]);
  }
  public function find(Request $request)
  {
    // $item = ___(8)___;
    $item = Person::all()->where("id",$request->input)->first();
    // return view('___(9)___', ['item' => $item]);
    return view('jissyu6_1.show', ['item' => $item]);
  }
}
