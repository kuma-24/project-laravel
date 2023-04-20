<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>

    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    
    <form method="post" action="{{ route('signin') }}">
        @csrf 
        <dl class="form-list">
            <dt>メールアドレス</dt>
            <dd><input type="email" name="email" value="{{ old('email') }}"></dd>

            <dt>パスワード</dt>
            <dd><input type="password" name="password"></dd>

            <dt>remember_me</dt>
            <dd><input id="remember_me" type="checkbox"></dd>
        </dl>
        <button type="submit">ログイン</button>
        <a href="{{ route('users.top') }}">キャンセル</a>
    </form>
  </body>
</html>