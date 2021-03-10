<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$port = array();
$port = array(80,22,20,21);
// $port_answer = $port[0];   #下にまとめて記載
shuffle($port);



$lang = array();
$lang = array("PHP","Python","JAVA","HTML");
// $lang_answer = $lang[3];   #下にまとめて記載
shuffle($lang);


$comm = array();
$comm = array("join","select","insert","update");
// $comm_answer = $comm[1];   #下にまとめて記載
shuffle($comm);

//② ①で作成した、配列から正解の選択肢の変数を作成してください
#答えが固定されてしまった
// $port_answer = $port[0]; 
// $lang_answer = $lang[3];
// $comm_answer = $comm[1];

$port_answer = 80;
$lang_answer = "HTML";
$comm_answer = "select";

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

  <p>お疲れ様です<?php echo $name; ?><!--POST通信で送られてきた名前を出力-->さん</p>
  <!--フォームの作成 通信はPOST通信で-->

  <form action="answer.php" method="post">

    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($port as $value) { ?>
    <input type="radio" name="port" value="<?php echo $value; ?>" /><?php echo $value ?>
    <?php  } ?>
    <input type="hidden" name="port_answer" value="<?php echo $port_answer ?>">
    <!-- <input type="radio" name="port" value="80">80
    <input type="radio" name="port" value="22">22
    <input type="radio" name="port" value="20">20
    <input type="radio" name="port" value="21">21 -->


    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($lang as $value) { ?>
    <input type="radio" name="lang" value="<?php echo $value; ?>" /><?php echo $value ?>
    <?php  } ?>
    <input type="hidden" name="lang_answer" value="<?php echo $lang_answer ?>">
    <!-- <input type="radio" name="lang" value="PHP">PHP
    <input type="radio" name="lang" value="Python">Python
    <input type="radio" name="lang" value="JAVA">JAVA
    <input type="radio" name="lang" value="HTML">HTML -->
    

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <?php foreach($comm as $value) { ?>
        <input type="radio" name="comm" value="<?php echo $value; ?>" /><?php echo $value ?>
     <?php } ?>
        <input type="hidden" name="comm_answer" value="<?php echo $comm_answer ?>">
    <!-- <input type="radio" name="comm" value="join">join
    <input type="radio" name="comm" value="select">select
    <input type="radio" name="comm" value="insert">insert
    <input type="radio" name="comm" value="update">update
   -->


    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->

    <br>
    <!-- 送信ボタン -->
    <input class="btn" type="submit" value="回答する">
    <input class="btn" type="reset" value="リセットする">
    <!-- 名前を次のページに引き継ぐ -->
    <input type="hidden" name="name" value="<?php echo $name; ?>"> 
  </form>


  </body>
</html>
