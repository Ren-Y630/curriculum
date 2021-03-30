<?php
// セッション開始
session_start();
#データベースに接続
# DB名
define("DB_DATABASE", "checktest4");
# MySQLのユーザー名
define("DB_USERNAME", "root");
# MySQLのログインパスワード
define("DB_PASSWORD", "root");
# DSN(データソース名) データベースの接続情報に付けられる、識別用の名前
define("PDO_DSN", "mysql:host=localhost;charset=utf8;dbname=" . DB_DATABASE);


function connect() {
    try { #括弧内の処理を実行
        #PDOインスタンスの作成
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        #エラー処理方法設定(属性を設定する)           #↓例外をスローしてくれる
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
       
    } catch(PDOException $e) { #失敗した場合の処理
        echo "Error: " , $e ->getMessage();#例外メッセージを取得する
        die();
    }
}