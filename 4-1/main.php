<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');
// 作成したfunction.phpを読み込む
require_once("function.php");
#セッション開始
// session_start();

#訂正後
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

#訂正前
// #セッションにuser _nameの値がなければlogout.phpにリダイレクト
// if(empty($_SESSION["user_name"])){
//   #login.phpにリダイレクト
//   header("Location: login.php");
//   exit;
// }



// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    // 実行したいSQL文を準備
    $sql = "SELECT * FROM posts ORDER BY id DESC";
    #実行する準備
    $stmt = $pdo->prepare($sql);
    #実行
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage(); #例外処理
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
</head>
<body>

  <h1>メインページ</h1>
  <p>ようこそ<?php echo $_SESSION["user_name"]; ?>さん</p>
  <a href="create_post.php">記事投稿画面</a>
  <a href="logout.php">ログアウト</a>
  <table >
    <tr>
        <td>記事ID</td>
        <td>タイトル</td>
        <td>本文</td>
        <td>投稿日</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
     <br><br>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['content']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><a href="detail_post.php?id=<?php echo $row['id']; ?>">詳細</a></td>
            <td><a href="edit_post.php?id=<?php echo $row['id']; ?>">編集</a></td>
            <td><a href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></td>
        </tr>
    <?php } ?>
  </table>
</body>
</html>