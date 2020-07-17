<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kouka1_2Request extends FormRequest
{
  public function authorize()
  {
    // if ($this->path() ==  '___(8)___') {
    if ($this->path() ==  'kouka1_2') {
      return true;
    } else {
      return false;
    }
  }

  public function rules()
  {
    return [
      'name' => 'required|max:10',
      // 'age' => '___(9)___',
      'age' => 'required|numeric|between:0,150',
      'mail' => 'required|email',
      // 'school' => '___(10)___',
      'school' => 'required|max:20',
    ];
  }

  public function messages()
  {
    return [
      // '___(11)___' => '名前は必ず入力して下さい。',
      'name.required' => '名前は必ず入力して下さい。',
      'name.max' => '名前は10文字以内で入力して下さい。',
      'age.required'  => '年齢は必ず入力して下さい。',
      // '___(12)___'  => '年齢は整数で入力して下さい。',
      'age.numeric'  => '年齢は整数で入力して下さい。',
      'age.between'  => '年齢は0～150の間で入力して下さい。',
      'mail.required' => 'メールは必ず入力して下さい。',
      // '___(13)___' => 'メールアドレスが必要です。',
      'mail.email' => 'メールアドレスが必要です。',
      'school.required' => '学校名は必ず入力して下さい。',
      'school.max' => '学校名は20文字以内で入力して下さい。',
    ];
  }
}
