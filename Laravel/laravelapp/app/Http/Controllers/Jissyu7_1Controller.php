<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Validator;

class Jissyu7_1Controller extends Controller
{
  public function index(Request $request)
  {
    //$items = Person::all();
    //$param = ['input' => '','items' => $items];
    if ($request->has('sort')) {
      // $sort = ___(1)___;
      $sort = $request->sort;
    } else {
      $sort = 'id';
    }
    // $items = ___(2)___;
    $items = Person::orderBy($sort, 'asc')
      ->simplePaginate(5);
    // $param = ['input' => '','items' => $items,___(3)___];
    $param = ['input' => '', 'items' => $items, 'sort' => $sort];
    return view('jissyu7_1.index', $param);
  }

  public function find(Request $request)
  {
    $rules = [
      'input' => 'required',
    ];
    $messages = [
      'input.required' => '文字を入力してください。',
    ];
    $validator = Validator::make($request->all(), $rules, $messages);
    if ($validator->fails()) {
      return redirect('/jissyu7_1')
        ->withErrors($validator)
        ->withInput();
    }
    $item = Person::where('name', $request->input)->first();
    return view('jissyu7_1.show', ['item' => $item]);
  }

  public function create()
  {
    return view('jissyu7_1.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, Person::$rules);
    $person = new Person;
    $form = $request->all();
    unset($form['_token']);
    $person->fill($form)->save();
    return redirect('/jissyu7_1');
  }

  public function show($id)
  {
    $item = Person::find($id);
    return view('jissyu7_1.show', ['item' => $item]);
  }

  public function edit($id)
  {
    $item = Person::find($id);
    return view('jissyu7_1.edit', ['item' => $item]);
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, Person::$rules);
    $person = Person::find($id);
    $form = $request->all();
    unset($form['_token']);
    $person->fill($form)->save();
    return redirect('/jissyu7_1');
  }

  public function del($id)
  {
    $item = Person::find($id);
    return view('jissyu7_1.del', ['item' => $item]);
  }
  public function destroy($id)
  {
    Person::find($id)->delete();
    return redirect('/jissyu7_1');
  }
}
