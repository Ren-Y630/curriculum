<?php
require_once("db_connect.php");
#セッションスタート
session_start();

// ログインーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

// #$_POSTがからでない場合
// #つまり、ログインボタンが押された場合のみ、下記の処理を実行する
// if(!empty($_POST)) {
//   #ログイン名が入力された以内場合の処理
//   if(empty($_POST["name"])) {  #「empty」変数が空であるかどうかをチェックする
//     echo "名前が未入力です。";
//   }
//   if(empty($_POST["pass"])) {
//     echo "パスワードが未入力です。";
//   }
//   #両方入力されている場合
//   if(!empty($_POST["name"]) && !empty($_POST["pass"])) { #「!empty」変数がからでない場合をチェックする
//     #ログイン名とパスワードのエスケープ処理
//     $name = htmlspecialchars($_POST["name"], ENT_QUOTES); #「htmlspecialchars」特殊文字を HTML エンティティに変換する
//     $pass = htmlspecialchars($_POST["pass"], ENT_QUOTES);
//     #ログイン処理開始
//     $pdo = db_connect();
//     try {
//       #データーベースアクセスの処理文章。ログイン名があるか判定
//       $sql = "SELECT * FROM users WHERE name = :name";
//       $stmt = $pdo -> prepare($sql);
//       $stmt -> bindParam(":name", $name);
//       $stmt -> execute();
//     } catch(PDOException $e) {
//         echo "Error: " . $e -> getMessage();
//         die();
//     }

//     #結果が1行取得できたら
//     if($row = $stmt -> fetch(PDO::FETCH_ASSOC)) { #if文で先頭1件のみ取得
//       #ハッシュかされたパスワードを判定する定型関数のpassword_verify
//       #「password_verify」入力された値と引っ張ってきた値が同じか判定する
//       if(password_verify($pass, $row["password"])) {
//         #セッションに値を保存(強制的にページを移動させる)
//         $_SESSION["user_id"] = $row["id"];
//         $_SESSION["user_name"] = $row["name"];
//         #main.phpにリダイレクト
//         header("Location:  main.php");
//         exit;
//       } else {
//         #パスワードが違っていたときの処理
//         echo "パスワードに誤りがあります。";
//       }
//     } else {
//       #ログイン名がなかったときの処理
//       echo "ユーザー名かパスワードに誤りがあります。";
//     }
//   }
// }

// ユーザー登録ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

# ログインボタンが押された場合
if (isset($_POST["signUp"])) {   #isset 変数が宣言されていること、そして null とは異なることを検査する
  # ユーザIDの入力チェック
  if (empty($_POST["name"])) {  // 値が空のとき。 empty 変数が空であるかどうかを検査する
      echo "ユーザーIDが未入力です。";
  } elseif (empty($_POST["password"])) {
      echo "パスワードが未入力です。";
  }
  #nameとpassword両方送られてきたら処理実行
  if (!empty($_POST["name"]) && !empty($_POST["password"])) {
      # 入力したユーザIDとパスワードを格納
      $name = $_POST["name"];
      $password = $_POST["password"];

      # ユーザIDとパスワードが入力されていたら認証する
      $dsn = sprintf("mysql:host=localhost;charset=utf8;dbname=" . DB_DATABASE);
      #PDOのインスタンスを取得
      $pdo = db_connect();
      # エラー処理
      try {
          // $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
          $sql = "INSERT INTO users(name, password) VALUES (:name, :password)";
          # 命令をMySQLにわかる形に準備する
          // $stmt = $pdo->prepare("INSERT INTO users(name, password) VALUES (?, ?)"); #prepareは文を実行する準備を行い、文オブジェクトを返す
          $stmt = $pdo->prepare($sql);
          # パスワードのハッシュ化を行う
          $password_hash = password_hash($password, PASSWORD_DEFAULT);
          $stmt->bindParam(':name', $name);
          $stmt->bindParam(':password', $password_hash);
          # 命令を実行する
          $stmt->execute();

          echo $name . "さんの" . "登録が完了しました。";  // ログイン時に使用するIDとパスワード
      } catch (PDOException $e) {
          echo  "データベースエラー" . $e->getMessage();
          # 終了
          die();
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
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
<!-- ログイン画面 -->
<!-- <h1>ログイン画面</h1>
<form method="post" action="">
<input type="submit" value="新規登録" id="signUp" name="signUp"><br>
</form>

<form method="POST" action="">
  <input type="text" name="name" placeholder="ユーザー名" id="name">
  <br>
  <input type="password" name="pass" placeholder="パスワード" id="password"><br>
  <input type="submit" value="ログイン" id="signUp" name="signUp">
</form> -->

<!-- ユーザー登録画面 -->
<h1 class="title">ユーザー登録画面</h1>
<form method="POST" action="">
  <input class="form" type="text" name="name" placeholder="ユーザー名" id="name"><br>
  <input class="form" type="password" name="password" placeholder="パスワード" id="password"><br>
  <input class="under-btn" type="submit" value="新規登録" name="signUp">
</form>
<a href="login.php">ログイン画面に戻る</a>
</body>
</html>