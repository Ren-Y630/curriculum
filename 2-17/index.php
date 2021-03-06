<?php
$x = 0; #合計
$y = 0; #ループ回数

while ($x < 40) {
  $dice = mt_rand(1,6);
  $x = $x + $dice;
  $y++;
  echo $y."回目＝".$dice."<br>";
} 
echo "合計".$y."回目でゴールしました";
echo "<br><br>";


$sum = 0;
$count = 0;

while ($sum < 40) {
$dice = mt_rand(1,6);
$sum = $sum + $dice;
$count++;
echo $count."回目＝".$dice."<br>";
}
echo "合計".$count."回目でゴールしました"."<br><br>";




#現在の時間を取得
date_default_timezone_set("Asia/Tokyo");
$time = intval(date("H"));

if (4 <= $time && $time <= 12) { #4時から12時前の時間
  echo "今".$time."時台です"."<br>";
  echo "おはようございます！！！";
} elseif (12 <= $time && $time <= 18) { #12時から18時の時間
  echo "今".$time."時台です"."<br>";
  echo "こんにちは！！";
} else {                               #それ以外の時間
  echo "今".$time."時台です"."<br>";
  echo "こんばんは！";
}
echo "<br><br>";


date_default_timezone_set ("Asia/Tokyo");
$time = intval(date("H"));

switch ($time) {
  case 0;
  print "0時台です。"."<br>"."こんばんは。";
  break;
  case 1;
  print "1時台です。"."<br>"."こんばんは。";
  break;
  case 2;
  print "2時台です。"."<br>"."こんばんは。";
  break;
  case 3;
  print "3時台です。"."<br>"."こんばんは。";
  break;
  case 4;
  print "4時台です。"."<br>"."おはようございます。";
  break;
  case 5;
  print "5時台です。"."<br>"."おはようございます。";
  break;
  case 6;
  print "6時台です。"."<br>"."おはようございます。";
  break;
  case 7;
  print "7時台です。"."<br>"."おはようございます。";
  break;
  case 8;
  print "8時台です。"."<br>"."おはようございます。";
  break;
  case 9;
  print "9時台です。"."<br>"."おはようございます。";
  break;
  case 10;
  print "10時台です。"."<br>"."おはようございます。";
  break;
  case 11;
  print "11時台です。"."<br>"."こんにちは。";
  break;
  case 12;
  print "12時台です。"."<br>"."こんにちは。";
  break;
  case 13;
  print "13時台です。"."<br>"."こんにちは。";
  break;
  case 14;
  print "14時台です。"."<br>"."こんにちは。";
  break;
  case 15;
  print "15時台です。"."<br>"."こんにちは。";
  break;
  case 16;
  print "16時台です。"."<br>"."こんにちは。";
  break;
  case 17;
  print "17時台です。"."<br>"."こんにちは。";
  break;
  case 18;
  print "18時台です。"."<br>"."こんばんは。";
  break;
  case 19;
  print "19時台です。"."<br>"."こんばんは。";
  break;
  case 20;
  print "20時台です。"."<br>"."こんばんは。";
  break;
  case 21;
  print "21時台です。"."<br>"."こんばんは。";
  break;
  case 22;
  print "22時台です。"."<br>"."こんばんは。";
  break;
  case 23;
  print "23時台です。"."<br>"."こんばんは。";
  break;
  case 24;
  print "24時台です。"."<br>"."こんばんは。";
  break;
  default:
  echo "時間を選択して下さい。";
}


echo "<br><br>";

$day_week = intval(date("w"));

switch($day_week) {
  case 0;
  print "日曜日です!!!"."<br>"."今日は休みです！！！";
  break;
  case 1;
  print "月曜日です!!!"."<br>"."今週も頑張りましょう！！！";
  break;
  case 2;
  print "火曜日です!!!"."<br>"."今日も頑張りましょう！！！";
  break;
  case 3;
  print "水曜日です!!!"."<br>"."今日も頑張りましょう！！！";
  break;
  case 4;
  print "木曜日です!!!"."<br>"."今日も頑張りましょう！！！";
  break;
  case 5;
  print "金曜日です!!!"."<br>"."今日も頑張りましょう！！！"."<br>"."明日はおやすみです。";
  break;
  case 6;
  print "土曜日です!!!"."<br>"."今日は休みです！！！"."<br>"."今週もお疲れ様でした。";
  break;
  default:
  echo "曜日を選択してくだい。";
}



