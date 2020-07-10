<body>
  <h1>Blade/Index</h1>
  @if ($msg != '')
  <p>こんにちは、{{$msg}}さん。</p>
  @else
  <p>何か書いて下さい。</p>
  @endif
  <form method="POST" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
  </form>
</body>