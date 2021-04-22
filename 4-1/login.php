<?php
require_once("db_connect.php");
#セッションスタート
session_start();

#$_POSTがからでない場合
#つまり、ログインボタンが押された場合のみ、下記の処理を実行する
if(!empty($_POST)) {
  #ログイン名が入力された以内場合の処理
  if(empty($_POST["name"])) {  #「empty」変数が空であるかどうかをチェックする
    echo "名前が未入力です。";
  }
  if(empty($_POST["pass"])) {
    echo "パスワードが未入力です。";
  }
  #両方入力されている場合
  if(!empty($_POST["name"]) && !empty($_POST["pass"])) { #「!empty」変数がからでない場合をチェックする
    #ログイン名とパスワードのエスケープ処理
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES); #「htmlspecialchars」特殊文字を HTML エンティティに変換する
    $pass = htmlspecialchars($_POST["pass"], ENT_QUOTES);
    #ログイン処理開始
    $pdo = db_connect();
    try {
      #データーベースアクセスの処理文章。ログイン名があるか判定
      $sql = "SELECT * FROM users WHERE name = :name";
      $stmt = $pdo -> prepare($sql);
      $stmt -> bindParam(":name", $name);
      $stmt -> execute();
    } catch(PDOException $e) {
        echo "Error: " . $e -> getMessage();
        die();
    }

    #結果が1行取得できたら
    if($row = $stmt -> fetch(PDO::FETCH_ASSOC)) { #if文で先頭1件のみ取得
      #ハッシュかされたパスワードを判定する定型関数のpassword_verify
      #「password_verify」入力された値と引っ張ってきた値が同じか判定する
      if(password_verify($pass, $row["password"])) {
        #セッションに値を保存(強制的にページを移動させる)
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_name"] = $row["name"];
        #main.phpにリダイレクト
        header("Location:  main.php");
        exit;
      } else {
        #パスワードが違っていたときの処理
        echo "パスワードに誤りがあります。";
      }
    } else {
      #ログイン名がなかったときの処理
      echo "ユーザー名かパスワードに誤りがあります。";
    }
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログインページ</title>
</head>
<body>
  <h2>ログイン画面</h2>
    <form action="" method="post">
  <table border="0">
  <tr align="right">
    <td><b>名前：</b></td>
    <td><input type="text" name="name" size="15"></td>
  </tr>
  <tr align="right">
    <td><b>パスワード：</b></td>
    <td><input type="text" name="pass" size="15"></td>
  </tr>
    <td></td>
    <td>
      <input type="submit" value="ログイン">
      <input type="reset" value="リセット">
    </td>
  </table>
  </form>
</body>
</html>