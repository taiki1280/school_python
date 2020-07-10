<body>
  <h1>Blade/Index</h1>
  <p>&#064;whileディレクティブの例</p>
  <ol>
    @php
    $counter = 0;
    @endphp
    @while ($counter < count($data)) <li>{{$data[$counter]}}</li>
      @php
      $counter++;
      @endphp
      @endwhile
  </ol>
</body>