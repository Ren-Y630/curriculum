<?php
# db_connect.phpの読み込み
require_once("db_connect.php");
#セッションスタート
session_start();


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
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>新規登録</h1>
<form method="POST" action="">
user:<br>
<input type="text" name="name" id="name">
<br>
password:<br>
<input type="password" name="password" id="password"><br>
<input type="submit" value="submit" id="signUp" name="signUp">

</form>
</body>
</html>
