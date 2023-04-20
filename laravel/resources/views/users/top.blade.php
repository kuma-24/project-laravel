<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poi Activity!</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/users/top/pc/top.css">
    <link rel="stylesheet" href="css/users/top/sp/top.css">
  </head>

  <body>
    <header class="header-top">
      <a class="header-link" href="#">
        <img class="header-top-logo" src="images/users/top-logo.png">
        <h1 class="header-top-name">Poi Activity!</h1>
      </a>
    </header>

    <main class="content-top">
      <div class="content-top-images">
        <img src="images/events/test_1.jpg">
        <img src="images/events/test_2.jpg">
        <img src="images/events/test_3.jpg">
        <img src="images/events/test_4.jpg">
      </div>
      <p class="content-top-phrase">Let's get started, point activities!</p>
      <div class="content-top-actions">
        <a class="content-top-signup button" href="{{ route('users.signup') }}">SingUp</a>
        <a class="content-top-signin button" href="{{ route('users.signin') }}">SingIn</a>
      </div>
    </main>
  </body>
</html>