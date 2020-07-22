<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class Jissyu6_3Controller extends Controller
{
  public function index()
  {
    $items = Person::all();
    $param = ['input' => '', 'items' => $items];
    return view('jissyu6_3.index', $param);
  }

  public function find(Request $request)
  {
    $item = Person::where('name', $request->input)->first();
    return view('jissyu6_3.show', ['item' => $item]);
  }


  public function show(Request $request)
  {
    // $item = ___(1)___;
    $item = Person::where('id', $request->id)->first();
    // $item = Person;
    // return view('___(2)___', ['item' => $item]);
    return view('jissyu6_3.show', ['item' => $item]);
  }

  public function add()
  {
    return view('jissyu6_3.add');
  }

  public function create(Request $request)
  {
    // $this->validate(___(3)___);
    $this->validate($request, Person::$rules);
    // $person = new ___(4)___;
    $person = new Person;
    // $form = ___(5)___;
    $form = $request->all();
    // unset(___(6)___);
    unset($form['_token']);
    // $person->___(7)___;
    $person->fill($form)->save();
    return redirect('/jissyu14');
  }

  public function edit(Request $request)
  {
    $item = Person::find($request->id);
    return view('jissyu6_3.edit', ['item' => $item]);
  }

  public function update(Request $request)
  {
    $this->validate($request, Person::$rules);
    // $person = ___(8)___;
    $person = Person::find($request->id);
    $form = $request->all();
    unset($form['_token']);
    // $person->___(9)___;
    $person->fill($form)->save();
    return redirect('/jissyu14');
  }



  public function del(Request $request)
  {
    $item = Person::find($request->id);
    return view('jissyu6_3.del', ['item' => $item]);
  }

  public function remove(Request $request)
  {
      // Person::___(10)___;
      Person::find($request->id)->delete();
      return redirect('/jissyu14');
  }
}
