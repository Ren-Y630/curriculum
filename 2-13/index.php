<?php
// //計算に使う便利なメソッド
// echo "ceil（切り上げ）" . "<br>";
// $x = 5.2;
// echo ceil($x);
// echo "<br><br>";


// echo "floor (切り捨て)" . "<br>";
// $x = 5.2;
// echo floor($x);
// echo "<br><br>";


// echo "round(四捨五入)" . "<br>";
// echo round($x);
// echo "<br><br>";


// echo "pi(円周率)" . "<br>";
// echo pi();

// function circleArea($r) {
//   $circle_area = $r * $r * pi();
//   echo $circle_area;
// }
// circleArea(2);
// echo "<br><br>";


// echo "mt_rand(乱数)" . "<br>";
// echo mt_rand(1,100);
// echo "<br><br>";

// //文字列に関する関数
// echo "strlen(文字列の長さ)" . "<br>";
// $str = "hogehoge";
// echo strlen($str);
// echo "<br><br>";

// echo "strpos(検索)" . "<br>";
// $str = "yoneyama";
// echo strpos($str, "a");
// //プログラミングにおいて、順番は0から始まるので、6文字目は 5 で返却される。
// echo "<br><br>";



// echo "substr(文字の切り取り)" . "<br>";
// $str = "yoneyama";
// echo substr($str, -2, 2);
// echo "<br><br>";


// echo "str_replace(置換)" . "<br>";
// $str = "yoneyama";
// echo str_replace("neya" , "NEYA" , $str);
// echo "<br><br>";

// $str = "I am Yoneyama";
// echo str_replace(" " , "" , $str);
// echo "<br><br>";


// echo "日本語において、文字列操作の関数を使用する場合" . "<br>";
// $str = "あいうえお";
// echo strlen($str);
// echo "<br><br>";

// echo "mbを使った場合" . "<br>";
// $str = "あいうえお";
// echo mb_strlen($str);
// echo "<br><br>";


// echo "printf(フォーマット化した文字列を出力)" . "<br>";
// $name  = "米山さん";
// $limit_number = 40;

// #連結演算子を使用した場合
// echo $name . "の残り時間はあと" . $limit_number . "時間です";
// echo "<br><br>";


// #printfを使用した場合
// printf("%sの残り時間はあと%d時間です" , $name , $limit_number);
// echo "<br><br>";

// # %s,%dは％記法と呼び、何のデータ型で入るか指定してあげる。
// # %s 文字列
// # %d 数値

// $name = "米山さん";
// $limit_time = 40;
// $price = 4000;
// printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price);
// echo "<br><br>";

// #2桁で表示したい場合
// $limit_hour = 20;
// $limit_minute = 10;
// printf ("残り%02d時間%02d分", $limit_hour, $limit_minute);
// echo "<br><br>";

// $limit_hour = 4;
// $limit_minute = 4;
// printf ("残り%02d時間%02d分", $limit_hour, $limit_minute);
// echo "<br><br>";

// echo "sprintf(変数に代入できるprintf)" . "<br>";
// echo "printf" . "<br>";
// $limit_hour = 4;
// $limit_minute = 4;
// printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
// echo "<br><br>";

// # sprintfだけでは出力されない
// echo "sprintf" . "<br>";
// $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
// echo $limit_time;
// echo "<br><br>";

echo "課題" . "<br><br>";

echo "ceil(切り上げ)" . "<br>";
$x = 4.1;
echo ceil($x);
echo "<br><br>";

echo "floor(切り捨て)" . "<br>";
$x = 9.9;
echo floor($x);
echo "<br><br>";

echo "round(四捨五入)" . "<br>";
$x = 7.4;
$y = 7.5;
echo round($x);
echo "<br>";
echo round($y);

echo "pi(円周率)" . "<br>";
echo pi();
function circleArea($r) {
  $circle_area = $r * $r * pi();
  echo $circle_area;
}
# 半径が３cmの円の面積の計算
circleArea(2);
echo "<br><br>";

echo "mt_rand(乱数)" . "<br>";
echo mt_rand(1,6);
echo "<br>";
echo mt_rand(1,6);
echo "<br><br>";

echo "strlen(文字列の長さ)" . "<br>";
$str = "おはようございます";
echo strlen($str);
echo "<br><br>";

echo "strpos(検索)" . "<br>";
$str = "yamashiro";
echo strpos($str, "a");
echo "<br><br>";

echo "substr(文字の切り取り)" . "<br>";
$str = "yamashiro";
echo substr($str, -3, 3);
echo "<br><br>";

echo "str_replace(置換)" . "<br>";
$str = "I am yamashiro";
echo str_replace("ya", "YA", $str);
echo "<br>";
echo str_replace(" ", "", $str);
echo "<br><br>";

echo "日本語の文字列操作の関数を使用する場合" . "<br>";
$str = "やましろれん";
echo strlen($str);
echo "<br>";
echo mb_strlen($str);
echo "<br><br>";

echo "表示に関する関数" . "<br>";
$name = "山城";
$limit_number = 3;
printf("%sさんの締め切りはあと%d日です。", $name, $limit_number);
echo "<br>";

$name = "山城さん"; $limit_days = 3; $limit_clock = 12; printf("%sは%d日後の%d時集合です。", $name, $limit_days, $limit_clock);
echo "<br><br>";

echo "2桁の表示" . "<br>";
$limit_days = 20;
$limit_clock = 10;
printf("残り%02d日と%02d時間", $limit_days, $limit_clock);
echo "<br>";

$name = "山城";
$limit_time = 30;
printf("%sさんの残り時間は%02d分です。", $name, $limit_time);
echo "<br><br>";

echo "sprintf(変数に代入できるprintf)" . "<br>";
$name = "山城";
$limit_hour = 5;
$limit_time = sprintf("%sさんの残り時間は%02d時間です。", $name, $limit_hour);
echo $limit_time;



?>
<h1>・IT用語</h1>

<h4>・PostgreSQL・Oracle SQL</h4>
<p>Oracle社が管理しているリレーショナルデータベース(RDBMS)</p>

<h4>・TortoiseGit・TortoiseSVN</h4>
<p>バージョン管理システム</p>

<h4>・外部設計・内部設計</h4>
<p>外部設計：「基本設計」のこと。要件定義と詳細設計の中継ぎ的なポジションで行う設計。</p>
<p>内部設計：「詳細設計」のこと。基本設計と実際のプログラミングの中継ぎ的なポジションで行う設計。</p>