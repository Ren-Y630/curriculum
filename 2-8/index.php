<?php
$fruits = ["りんご", "みかん", "もも"];
echo $fruits[0]. "<br>"; 
echo $fruits[1]. "<br>"; 
echo $fruits[2]. "<br><br>"; 

//foreach文
echo "foreach文" . "<br>";
//与えられた要素全てに対して処理を行う事ができる。
$fruits = ["りんご", "みかん", "もも"];
foreach ($fruits as $value) {
  echo $value . "<br>";
}
echo "<br><br>";
// foreachの構文
// foreach (配列変数 as 変数) {
//   実行する処理;
// }
// 1 $fruitsの配列を持ってきて、そこから1個取り出して$valueに入れる。
// 2 $valueに関して、処理を実行する。
// 3 処理が終わったら、次の1個を持ってきて、また$valueに入れる。
// 4 1〜3を配列の全ての要素に対してループさせる。
 
// 連想配列の場合
echo "連想配列" . "<br>";
$fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];
foreach ($fruits as $key => $value) {
  echo $key;
  echo $value;
  echo "<br>";
}
echo "<br><br>";

//課題
echo "課題" . "<br>";

$fruits = ["apple" => "といったらりんご", "orange" => "といったらみかん", "peach" => "といったらもも"];
foreach ($fruits as $key => $value) {
  echo $key;
  echo $value;
  echo "<br>";
}
echo "<br><br>";

echo "トランザクション" . "<br>";
echo "ソフトウェアの処理方式の一つで、複数の処理を一つにまとめたもの。";
echo "<br><br>";

echo "排他ロック" . "<br>";
echo "同時更新させないための仕組み。";
echo "<br><br>";

echo "チューニング" ."<br>";
echo "システムやプログラミングなどを改良し、パフォーマンスの向上を図ること。";