<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <h1>会員登録</h1>

    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>

    <form action="{{ route('signup') }}" method="post">
        @csrf 
        <dl class="form-list">
            <dt>名前</dt>
            <dd><input type="text" name="name" value="{{ old('name') }}"></dd>
            <dt>メールアドレス</dt>
            <dd><input type="email" name="email" value="{{ old('email') }}"></dd>
            <dt>パスワード</dt>
            <dd><input type="password" name="password"></dd>
            <dt>パスワード（確認用）</dt>
            <dd><input type="password" name="password_confirmation" placeholder="もう一度入力"></dd>
        </dl>
    <button type="submit">登録する</button>
    <a href="{{ route('users.top') }}">キャンセル</a>
    </form>
  </body>
</html>