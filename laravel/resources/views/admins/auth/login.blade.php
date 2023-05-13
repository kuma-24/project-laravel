<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
  </head>
  <body>
    <h1>管理者ログイン</h1>

    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach

    <form method="post" action="{{ route('admins.authentication') }}">
      @csrf 
      <dl class="form-list">
          <dt>社員コード</dt>
          <dd><input type="employee_code" name="employee_code" value="{{ old('employee_code') }}"></dd>

          <dt>パスワード</dt>
          <dd><input type="password" name="password"></dd>
      </dl>
      <button type="submit">ログイン</button>
      <a href="{{ route('admins.top') }}">キャンセル</a>
    </form>
  </body>
</html>