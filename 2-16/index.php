<?php
// $testFile = "test.txt";
// $contents = "こんにちは！";

// if (is_writable($testFile)) {
//   #書き込み可能な時の処理
//   #とりあえず確認のためechoで表示だけさせる
//   echo "writable!!";
// } else {
//   #書き込み不可の時の処理
//   echo "not writable!";
//   exit;
// }
// echo "<br>";

// if (is_writable($testFile)) {
//   #書き込み可能な時の処理
//   #対象のファイルを開く
//   $fp = fopen($testFile, "a");
//   #対象のファイルを書き込む
//   fwrite($fp, $contents);
//   #ファイルを閉じる
//   fclose($fp);
//   #書き込みした旨の表示
//   echo "finish writing!!";
// } else {
//   #書き込み不可のときの処理
//   echo "not writable!";
// }
// echo "<br><br>";



// $test_file = "test2.txt";

// if (is_readable($test_file)) {
//   #読み込み可能なときの処理
//   #対象のファイルを開く
//   $fp = fopen($test_file, "r");
//   #開いたファイルから1行ずつ読み込む
//   while ($line = fgets($fp)) {
//     #改行コード込みで1行ずつ出力
//     echo $line . "<br>";
//   }
//   #ファイルを閉じる
//   fclose($fp);
// } else {
//   #読み込み不可のときの処理
//   echo "not readable!";
//   exit;
// }



echo "・課題" . "<br><br>";

$testFile = "test.txt";
$contents = "おはようございます!!!";

echo "[書き込み可能か確認]" . "<br>";
if (is_writable($testFile)) {
  echo "書き込み可能です";
} else {
  echo "書き込みできません";
  exit;
}
echo "<br><br>";

echo "[書き込む]" . "<br>";
if (is_writable($testFile)) {
  $fp = fopen ($testFile, "w");
  fwrite ($fp, $contents);
  fclose ($fp);

  echo "書き込み可能です。";
} else {
  echo "書き込み不可能です。";
  exit;
}
echo "<br><br>";

echo "[ファイルの読み込み]" . "<br>";
$test_file = "test2.txt";

if (is_readable($test_file)) {
  $fp = fopen($test_file, "r");
  
  while ($line = fgets($fp)) {
    echo $line . "<br>";
  }
  fclose($fp);
} else {
  echo "読み込み不可能です。";
  exit;
}
echo "<br><br>";

$file3 = "test3.txt";
if (is_readable($file3)) {
  $fp = fopen($file3, "r");
  while($it = fgets($fp)) {
    echo $it. "<br>";
  }
  fclose($fp);
} else {
  echo "not readable";
  exit;
}