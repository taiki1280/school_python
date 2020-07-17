@extends('layouts.jissyu10')
@section('method','POST')
@section('list')
<li>
  氏名
  {{Form::text('name',$name)}}
</li>
@if ($errors->has('name'))
  <li>
    <font color="red">{{$errors->first('name')}}</font>
  </li>
@endif
<li>
  年齢
  {{Form::number('age',$age)}}
</li>
@if ($errors->has('age'))
  <li>
    <font color="red">{{$errors->first('age')}}</font>
  </li>
@endif
<li>
  郵便番号
  {{Form::text('post_num',$post_num)}}
</li>
@if ($errors->has('post_num'))
  <li>
    <font color="red">{{$errors->first('post_num')}}</font>
  </li>
@endif
<li>
  性別
  {{Form::radio('sex', '男性',true)}}男性
  {{Form::radio('sex', '女性')}}女性
</li>
@if ($errors->has('sex'))
  <li>
    <font color="red">{{$errors->first('sex')}}</font>
  </li>
@endif
<li>趣味
  <?php $values = ["音楽","映画","ダンス","料理","スポーツ"] ?>
  @for ($i = 0; $i < count($values); $i++)
  {{Form::checkbox('hobbies[]', $values[$i], in_array($values[$i], $hobbies))}}{{$values[$i]}}
  @endfor
</li>
@if ($errors->has('hobbies'))
  <li>
    <font color="red">{{$errors->first('hobbies')}}</font>
  </li>
@endif
<li><button type="submit">送信する</button></li>
@endsection