<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
</head>

<body>
  <h1>test</h1>
  <ul>
    <li>
      氏名<input type="text" name="name" value="{{$name}}">
    </li>
    <li>
      年齢<input type="number" name="age" value="{{$age}}">
    </li>
    <li>
      郵便番号<input type="text" name="post_num" value="{{$post_num}}">
    </li>
    <li>
      性別
      {{Form::radio('sex', '男性')}}
      {{Form::radio('sex', '女性', true)}}
    </li>
    <li>趣味
      <input type="checkbox" name="hobby[]" <?= in_array("音楽", $hobby) ? 'checked' : '' ?> value="音楽">音楽
      <input type="checkbox" name="hobby[]" <?= in_array("映画", $hobby) ? 'checked' : '' ?> value="映画">映画
      <input type="checkbox" name="hobby[]" <?= in_array("ダンス", $hobby) ? 'checked' : '' ?> value="ダンス">ダンス
      <input type="checkbox" name="hobby[]" <?= in_array("料理", $hobby) ? 'checked' : '' ?> value="料理">料理
      <input type="checkbox" name="hobby[]" <?= in_array("スポーツ", $hobby) ? 'checked' : '' ?> value="スポーツ">スポーツ
    </li>
  </ul>
</body>

</html>