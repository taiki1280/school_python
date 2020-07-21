<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jissyu5_2Controller extends Controller
{
  public function index()
  {
    $items = DB::select('select * from people');
    // return view('___(8)___', ['items' => $items]);
    return view('jissyu5_2.index', ['items' => $items]);
  }
  public function show(Request $request)
  {
    // $param = ['id' => ___(9)___];
    $param = ['id' => $request->id];
    $items = DB::select(
      // '___(10)___',
      'select * from people where id = :id',
      $param
    );
    return view('jissyu5_2.show', ['items' => $items]);
  }

  public function add()
  {
    // return view('___(11)___');
    return view('jissyu5_2.add');
  }

  public function create(Request $request)
  {
    $param = [
      'name' => $request->name,
      // 'mail' => ___(12)___,
      'mail' => $request->mail,
      // 'age' => ___(13)___,
      'age' => $request->age,
    ];
    DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
    return redirect('/jissyu11');
  }
  public function edit(Request $request)
  {
    $param = ['id' => $request->id];
    $items = DB::select('select * from people where id = :id', $param);
    // return view('___(14)___', ___(15)___);
    return view('jissyu5_2.edit', ['items' => $items]);
  }

  public function update(Request $request)
  {
    $param = [
      'id' => $request->id,
      'name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
    ];

    // DB::update('___(16)___', $param);
    DB::update('update people set name =:name, mail = :mail, age = :age where id = :id', $param);
    return redirect('/jissyu11');
  }

  public function del(Request $request)
  {
    $param = ['id' => $request->id];
    $items = DB::select('select * from people where id = :id', $param);
    return view('jissyu5_2.del', ['items' => $items]);
  }

  public function remove(Request $request)
  {
    $param = ['id' => $request->id];
    // DB::delete('___(17)___', $param);
    DB::delete('delete from people where id =:id', $param);
    // return redirect('___(18)___');
    return redirect('/jissyu11');
  }
}
