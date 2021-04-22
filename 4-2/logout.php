<?php
#セッション開始
session_start();

#セッション変数のクリア
$_SESSION = array();

#セッションクリア
session_destroy(); #セッションに登録されたデータを全て破棄する


?>




<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログアウト</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <h1>ログアウト画面</h1>
  <div>ログアウトしました</div>
  <form action="login.php">
      <input class="logout-btn" type="submit" value="ログイン画面に戻る" name="logout">
  </form>
</body>
</html>