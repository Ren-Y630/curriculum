<?php
require_once("db_connect.php");
#セッションスタート
session_start();

//セッションにuser_nameの値がなければlogin.phpにリダイレクト
if(empty($_SESSION["user_name"])) {
  header("Location: login.php");
  exit;
}

// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
  #実行したいSQL文を準備
  $sql = "SELECT * FROM books";
  #実行する準備
  $stmt = $pdo -> prepare($sql);
  #実行
  $stmt -> execute();
} catch (PDOException $e) {
  echo "Error :" . $e -> getMessage();
  die();
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メイン</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>

  <h1 class="title">在庫一覧画面</h1>

  <div class="main-wrapper">
    <form action="create_post.php">
      <input class="main-post-btn" type="submit" value="新規投稿" name="create">
    </form>
    <form action="logout.php">
      <input class="main-logout-btn" type="submit" value="ログアウト" name="logout">
    </form>
  </div>

  <table class="table" border="1">
    <tr>
        <th>タイトル</th>
        <th>発売日</th>
        <th>在庫数</th>
        <th></th>
    </tr>

    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td>
              <a class="main-delete-btn" href="delete.php?id=<?php echo $row['id']; ?>">削除</a>
            </td>
        </tr>
    <?php } ?>
  </table>
</body>
</html>