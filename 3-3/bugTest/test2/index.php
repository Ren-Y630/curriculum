<?php
require 'dbconnect.php'; #ファイルが無い場合に処理を停止する

// セッション開始
// session_start();
// include_once("dbconnect.php"); #指定されたファイルを読み込み、そのファイルに書いてある処理を実行

// エラーメッセージ、登録完了メッセージの初期化
#入れ物を作るイメージ
$errorMessage = "";
$signUpMessage = "";

// // セッション開始
// session_start();

// ログインボタンが押された場合
if (isset($_POST["signUp"])) {   #isset 変数が宣言されていること、そして null とは異なることを検査する
    // 1. ユーザIDの入力チェック
    if (empty($_POST)) {  // 値が空のとき。 empty 変数が空であるかどうかを検査する
        $errorMessage = 'ユーザーIDが未入力です。';
    } else if (empty($_POST["password"])) {
        $errorMessage = 'パスワードが未入力です。';
    } else if (empty($_POST["password2"])) {
        $errorMessage = 'パスワードが未入力です。';
    }

    if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["password2"]) && $_POST["password"] === $_POST["password2"]) {
        // 入力したユーザIDとパスワードを格納
        $username = $_POST["username"];
        $password = $_POST["password"];

        // 2. ユーザIDとパスワードが入力されていたら認証する
        $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);

        // 3. エラー処理
        try {
            $pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                        #prepareは文を実行する準備を行い、文オブジェクトを返す
            $stmt = $pdo->prepare("INSERT INTO user(name, password) VALUES (?, ?)"); #prepareは文を実行する準備を行い、文オブジェクトを返す

            $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT)));  // パスワードのハッシュ化を行う（今回は文字列のみなのでbindValue(変数の内容が変わらない)を使用せず、直接excuteに渡しても問題ない）
            $userid = $pdo->lastinsertid();  // 登録した(DB側でauto_incrementした)IDを$useridに入れる

            $signUpMessage = '登録が完了しました。あなたの登録IDは ' . $userid . ' です。パスワードは ' . $password . ' です。';  // ログイン時に使用するIDとパスワード
        } catch (PDOException $e) {
            $errorMessage = 'データベースエラー';
            // $e->getMessage() でエラー内容を参照可能（デバック時のみ表示）
            // echo $e->getMessage();
        }
    } else if ($_POST["password"] != $_POST["password2"]) {
        $errorMessage = 'パスワードに誤りがあります。';
    }
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>新規登録</title>
    </head>
    <body>
        <h1>新規登録画面</h1>
        <form id="loginForm" name="loginForm" action="" method="POST">
            <fieldset>
                <legend>新規登録フォーム</legend>
                <div><font color="#ff0000"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></font></div>
                <div><font color="#0000ff"><?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?></font></div>
                <label for="username">ユーザー名</label><input type="text" id="username" name="username" placeholder="ユーザー名を入力" value="<?php if (!empty($_POST["username"])) {
                        echo htmlspecialchars($_POST["username"], ENT_QUOTES);
                        } ?>">
                <br>
                <label for="password">パスワード</label><input type="password" id="password" name="password" value="" placeholder="パスワードを入力">
                <br>
                <label for="password2">パスワード(確認用)</label><input type="password" id="password2" name="password2" value="" placeholder="再度パスワードを入力">
                <br>
                <input type="submit" id="signUp" name="signUp" value="登録">
            </fieldset>
        </form>
    </body>
</html>
