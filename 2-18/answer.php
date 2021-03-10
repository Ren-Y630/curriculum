<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];

$port = $_POST["port"];
$port_answer = $_POST["port_answer"];
if($port == $port_answer){
  $port_result = "正解！";
} elseif($port == null) {     #選択がなかったときの表示
  $port_result = "選択して下さい！";
} else {
  $port_result = "残念...";
}

$lang = $_POST["lang"];
$lang_answer = $_POST["lang_answer"];
if($lang == $lang_answer){
  $lang_result = "正解!";
} elseif($lang == null) {     #選択がなかったときの表示
  $lang_result = "選択して下さい！";
} else {
  $lang_result = "残念...";
}

$comm = $_POST["comm"];
$comm_answer = $_POST["comm_answer"];
if($comm == $comm_answer){
  $comm_result = "正解!";
} elseif($comm == null) {     #選択がなかったときの表示
  $comm_result = "選択して下さい!";
} else {
  $comm_result = "残念...";
}
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する


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
  
  <p><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p>

  <p>①の答え<br><?php echo $port_result; ?></p>
  <!--作成した関数を呼び出して結果を表示-->
  <p>②の答え<br> <?php echo $lang_result; ?></p>
  <!--作成した関数を呼び出して結果を表示-->
  <p>③の答え<br> <?php echo $comm_result; ?></p>
  <!--作成した関数を呼び出して結果を表示-->



</body>
</html>