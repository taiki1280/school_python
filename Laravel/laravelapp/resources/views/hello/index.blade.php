<body>
  <h1>Blade/Index</h1>
  @isset ($msg)
  <p>こんにちは、{{$msg}}さん。</p>
  @else
  <p>何か書いて下さい。</p>
  @endisset
  <form method="POST" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
  </form>
</body>