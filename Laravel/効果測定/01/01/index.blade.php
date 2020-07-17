{{-- @extends('___(4)___') --}}
@extends('layouts.kouka1_1')

{{-- @section('title', '___(5)___') --}}
@section('title', 'Kouka')

@section('menu_title')
フレームワークについて
@endsection

@section('menu_content')

{{-- @component('___(6)___') --}}
@component('components.menu')
@slot('menu_title')
他のWEBアプリケーションとの比較と動向
@endslot

@slot('menu_content')
<p>バックエンドフレームワークにおいて、PHPのLaravel、PythonのDjango、RubyのRuby on Railsが３大バックエンドフレームワークと見なされることもある。</p>
@endslot
@endcomponent
@endsection

@section('content')

{{-- @___(7)___('___(8)___', ['___(9)___'=>'Laravelの名前の由来', '___(10)___'=>'Laravelの名前は「ナルニア国物語」に登場するナルニア王国の王都、ケア・パラベルにちなむ。']) --}}
@include('components.menu', ['menu_title'=>'Laravelの名前の由来','menu_content'=>'Laravelの名前は「ナルニア国物語」に登場するナルニア王国の王都、ケア・パラベルにちなむ。'])
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection

