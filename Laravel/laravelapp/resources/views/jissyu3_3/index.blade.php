@extends('layouts.jissyu')

@section('title', 'Jissyu')
<!-- ___(1)___('___(2)___') -->


@section('menu_content')
<ul>
  <li>特徴</li>
  <li>バージョン</li>
</ul>
@component('components.menu')
<!-- ___(3)___('menu_title') -->
@slot('menu_title')
特徴
<!-- ___(4)___ -->
@endslot

@slot('menu_content')
<p>Laravelは、MVCのWebアプリケーション開発用の無料・オープンソースのPHPで書かれたWebアプリケーションフレームワークである。</p>
@endslot
<!-- ___(5)___ -->
@endcomponent
@endsection

@section('content')
<p>開発元：Taylor Otwell</p>
<p>初版：2011年6月</p>
<p>プログラミング言語：PHP</p>
<p>対応OS：クロスプラットフォーム</p>
<p>公式サイト：laravel.com</p>
<!-- ___(6)___('___(7)___', ['subview_title'=>'バージョン', -->
@include('components.subview', ['subview_title'=>'バージョン',
'subview_content'=>'2020年3月より最新バージョンは7。PHPは7.2.5以上。'])
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校
@endsection