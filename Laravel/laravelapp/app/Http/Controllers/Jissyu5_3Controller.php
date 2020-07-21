<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jissyu5_3Controller extends Controller
{
  public function index()
  {
    // $items = ___(1)___;
    $items = DB::table("people")->get();
    return view('jissyu5_3.index', ['items' => $items]);
  }
  public function show(Request $request)
  {
    $id = $request->id;
    // $item = ___(2)___;
    $item = DB::table("people")->where("id", $id)->first();
    return view('jissyu5_3.show', ['item' => $item]);
  }
  public function add()
  {
    // return view('___(3)___');
    return view('jissyu5_3.add');
  }
  public function create(Request $request)
  {
    $param = [
      'name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
    ];
    // ___(4)___;
    DB::table('people')->insert($param);
    return redirect('/jissyu12');
  }
  public function edit(Request $request)
  {
    // $item = ___(5)___;
    $item = DB::table('people')->where('id', $request->id)->first();
    return view('jissyu5_3.edit', ['item' => $item]);
  }
  public function update(Request $request)
  {
    $param = [
      // ___(6)___,
      'name' => $request->name,
      // ___(7)___,
      'mail' => $request->mail,
      // ___(8)___,
      'age' => $request->age,
    ];
    // ___(9)___;
    DB::table('people')->where('id', $request->id)->update($param);
    return redirect('/jissyu12');
  }
  public function del(Request $request)
  {
    // $item = ____(10)___;
    $item = DB::table('people')->where('id', $request->id)->first();
    return view('jissyu5_3.del', ['item' => $item]);
  }
  public function remove(Request $request)
  {
    // ___(11)___;
    DB::table('people')->where('id', $request->id)->delete();
    return redirect('/jissyu12');
  }
}
