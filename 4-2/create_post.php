<?php
// db_connect.phpの読み込み
require_once("db_connect.php");

// function.phpの読み込み
require_once("function.php");

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// 提出ボタンが押された場合
if (!empty($_POST)) {
    // titleとcontentの入力チェック
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo 'コンテンツが未入力です。';
    } elseif (empty($_POST["stock"])) {
        echo '在庫数が未記入です。';
    }

    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {
        // 入力したtitleとcontentを格納
        $title = $_POST["title"];
        $date = $_POST["date"];
        $stock = $_POST["stock"];

        // PDOのインスタンスを取得
        $pdo = db_connect();

        try {
            // SQL文の準備
            $sql = "INSERT INTO books (title, date, stock) VALUES (:title, :date, :stock)";
            // プリペアドステートメントの準備
            $stmt = $pdo -> prepare($sql);
            // タイトルをバインド
            $stmt -> bindParam(":title", $title);
            // 本文をバインド
            $stmt -> bindParam(":date", $date);

            $stmt -> bindParam(":stock", $stock);
            // 実行
            $stmt -> execute();
            // main.phpにリダイレクト
            header("Location:  main.php");
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo "Error: " .  $e -> getMessage();
            // 終了
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
<h2 class="title">本 登録画面</h2>
  <form method="POST" action="">
      <input class="form" type="text" name="title" id="title" placeholder="タイトル"><br>
      <input class="form" type="date" name="date" id="date" placeholder="発売日"><br>
      <label for="stock">在庫数</label><br>
      <div class="container">
        <select class="stock" name="stock" id="stock">
          <?php for ($i=0; $i<=50; $i++) { ?>
          <option hidden>選択してください</option>
            <option value="<?php echo $i; ?>">
              <?php echo $i; ?>
            </option>
          <?php } ?>
        </select><br>
      </div>
      <input class="under-btn" type="submit" value="登録" id="post" name="post">
  </form><br>
  <a href="main.php">メインページに戻る</a>
</body>
</html>