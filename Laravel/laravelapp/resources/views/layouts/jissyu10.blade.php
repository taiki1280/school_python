<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>jissyu10</title>
</head>

<body>
  <h1>test</h1>
  <form action="/jissyu10" method=@yield('method')>
    @csrf
    <ul>
      @yield('list')
    </ul>
  </form>
</body>

</html>