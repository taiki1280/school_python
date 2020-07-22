<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Validator;

class Jissyu7_1Controller extends Controller
{
  public function index()
  {
    $items = Person::all();
    $param = ['input' => '', 'items' => $items];
    return view('jissyu7_1.index', $param);
  }

  // public function find(Request $request)
  // {
  //     $rules = [
  //         'input' => 'required',
  //     ];
  //     $messages = [
  //         'input.required' => '文字を入力してください。',
  //     ];
  //     $validator = Validator::make(___(7)___,___(8)___,___(9)___);
  //     if($validator->fails()){
  //         return redirect('/jissyu7_1')
  //         ->withErrors($validator)
  //         ->withInput();
  //     }
  //     $item = Person::where('name',$request->input)->first();
  //     return view('jissyu7_1.show', ['item' => $item]);
  // }

  // public function create()
  // {
  //     return view('jissyu7_1.create');
  // }

  // public function store(Request $request)
  // {
  //     $this->validate(___(10)___, Person::___(11)___);
  //     $person = new Person;
  //     $form = $request->all();
  //     unset($form['_token']);
  //     $person->fill($form)->save();
  //     return redirect('/jissyu7_1');
  // }

  // public function show(___(12)___) 
  // {
  //     $item = Person::find($id);
  //     return view('jissyu7_1.show', ['item' => $item]);
  // }

  // public function edit($id) 
  // {
  //     $item = Person::find(___(13)___);
  //     return view('jissyu7_1.edit', ['item' => $item]);
  // }

  // public function update(Request $request, ___(14)___)
  // {
  //     $this->validate($request, Person::$rules);
  //     $person = Person::find($id);
  //     $form = $request->all();
  //     unset($form['_token']);
  //     $person->fill($form)->save();
  //     return redirect('/jissyu7_1');
  // }

  // public function del(___(15)___) 
  // {
  //     $item = Person::find($id);
  //     return view('jissyu7_1.del', ['item' => $item]);
  // }
  // public function destroy($id) 
  // {
  //     Person::find(___(16)___)->delete();
  //     return redirect('/jissyu7_1');
  // }
}
