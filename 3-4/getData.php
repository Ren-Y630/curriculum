<?php
# ファイルを読み込む
require_once("pdo.php");

class getData{      #クラス

    public $pdo;   #プロパティ（クラス内で定義される変数）
    public $data;  #プロパティ（クラス内で定義される変数）

    //コンストラクタ #インスタンスが生成される時に呼ばれる関数（初期化のようなもの）
    function __construct()  {    
        #$thisは「このクラスの」という意味
        $this->pdo = connect();
    }

    /**
     * ユーザ情報の取得
     *
     * @param 
     * @return array $users_data ユーザ情報
     */
    #メソッド
    public function getUserData(){
        #「users」テーブルのデータを取得し「$getusers_sql」に格納
        $getusers_sql = "SELECT * FROM users limit 1"; #「limit」で取得するデータの行数の上限を設定
        ##SQL文を実行するコードを変数に格納   #[fetch(PDO::FETCH_ASSOC);]カラム名（あるいはフィールド名とも言いますか）を配列のキー文字列として使って値を格納した配列を返す、という意味
        # $this->pdo の query($getusers_sql) を fetch(PDO::FETCH_ASSOC); で返す
        $users_data = $this->pdo->query($getusers_sql)->fetch(PDO::FETCH_ASSOC);
       
        return $users_data;
    }
    
    /**
     * 記事情報の取得
     *
     * @param 
     * @return array $post_data 記事情報
     */
    #メソッド
    public function getPostData(){
        # 「posts」テーブルのデータを取得して「$getposts_sql」に格納
        $getposts_sql = "SELECT * FROM posts ORDER BY id desc"; #「ORDER BY id desc」で取得するデータを降順で取得
        #SQL文を実行するコードを変数に格納
        $post_data = $this->pdo->query($getposts_sql);

        return $post_data;
    }
}
