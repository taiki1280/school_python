@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
ユーザ情報一覧画面
@endsection

@section('content')
    {{-- <form action="___(17)___" method="post"> --}}
    <form action="___(17)___" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </form>
    @if($errors->has('input'))
    <font color="red">{{$errors->first('input')}}</font><br>
    @endif
   <a href="___(18)___">新規登録</a>
   <table>
   <tr><th>Name(Age)</th><th>Mail</th><th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->getData()}}</td>
           <td>{{$item->mail}}</td>
           <td><a href="___(19)___">詳細</a></td>
           <td><a href="/jissyu7_1/{{$item->id}}/edit">更新</a></td>
           <td><a href="___(20)___">削除</a></td>
                 <!--GET送信に注意。テキスト299Pを参考のうえ、作成すること。 -->
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
