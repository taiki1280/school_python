@extends('layouts.jissyu')
<style>
  .pagination {
    font-size: 10pt;
  }

  .pagination li {
    display: inline-block
  }

  tr th a:link {
    color: white;
  }

  tr th a:visited {
    color: white;
  }

  tr th a:hover {
    color: white;
  }

  tr th a:active {
    color: white;
  }
</style>
@section('title', 'Jissyu')

@section('menu_title')
ユーザ情報一覧画面
@endsection

@section('content')
<form action="/jissyu7_1/find" method="post">
  @csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="検索">
</form>
@if($errors->has('input'))
<font color="red">{{$errors->first('input')}}</font><br>
@endif
<a href="/jissyu7_1/create">新規登録</a>
<table>
  <tr>
    {{-- <th><a href="___(4)___">id</a></th> --}}
    <th><a href="/jissyu7_1?sort=id">id</a></th>
    <th><a href="/jissyu7_1?sort=name">name</a></th>
    <th><a href="/jissyu7_1?sort=mail">mail</a></th>
    <th><a href="/jissyu7_1?sort=age">age</a></th>
    <th>Select</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    {{-- <td>___(7)___</td> --}}
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
    <td><a href="/jissyu7_1/{{$item->id}}">詳細</a></td>
    <td><a href="/jissyu7_1/{{$item->id}}/edit">更新</a></td>
    <td><a href="/jissyu7_1/{{$item->id}}/del">削除</a></td>
    <!--GET送信に注意。テキスト299Pを参考のうえ、作成すること。 -->
  </tr>
  @endforeach
</table>
{{-- {{___(8)___}} --}}
{{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection