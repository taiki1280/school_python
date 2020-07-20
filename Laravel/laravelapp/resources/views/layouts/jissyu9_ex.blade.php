<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>jissyu9_ex</title>
</head>

<body>
  <h1>test</h1>
  <form action="/jissyu9_ex" method=@yield('method')>
    @csrf
    <ul>
      @yield('list')
    </ul>
  </form>
</body>

</html>