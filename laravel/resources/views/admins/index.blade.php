<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理画面</title>
  </head>
  <body>
    <div>{{ Auth::user()->name }}</div>

  <form method="post" action="{{ route('admins.logout') }}">
    @csrf
    <button type="submit">ログアウト</button>
  </form>
  </body>
</html>