<body>
  <h1>Blade/Index</h1>
  <p>&#064;forディレクティブの例</p>
  @foreach ($data as $item)
  @if ($loop->first)
  <p>※データ一覧</p>
  <ul>
    @endif
    <li>No,{{$loop->iteration}}. {{$item}}</li>
    @if ($loop->last)
  </ul>
  <p>――ここまで</p>
  @endif
  @endforeach
</body>