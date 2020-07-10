<body>
  <h1>Blade/Index</h1>
  <p>&#064;forディレクティブの例</p>
  <ol>
    @for ($i = 1;$i < 100;$i++) @if ($i % 2==1) @continue @elseif ($i <=10) <li>No, {{$i}}
      @else
      @break
      @endif
      @endfor
  </ol>
</body>