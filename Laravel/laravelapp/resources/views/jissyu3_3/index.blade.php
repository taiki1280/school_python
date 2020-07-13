<!-- extends('___(4)___') -->
@extends('layouts.jissyu')

<!-- section('title', '___(5)___') -->
@section('title', 'Jissyu')

<!-- ___(6)___('menu_title') -->
@section('menu_title')
Laravelについて
<!-- ___(7)___ -->
@endsection

<!-- section('___(8)___') -->
@section('menu_content')
<ul>
  <li>特徴</li>
  <li>バージョン</li>
</ul>
@endsection

<!-- section('___(9)___') -->
@section('content')
<p>開発元：Taylor Otwell</p>
<p>初版：2011年6月</p>
<p>プログラミング言語：PHP</p>
<p>対応OS：クロスプラットフォーム</p>
<p>公式サイト：laravel.com</p>
@endsection

@section('footer')
<!-- ___(10)___ -->
copyright 2020 東京情報クリエイター工学院専門学校
@endsection