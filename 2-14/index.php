<?php
#count (要素の数を数える)
$members = ["tanaka", "sasaki", "kimura", "yosida", "uctida"];
echo count($members);
echo "<br><br>";

#sort (要素の並べ替え)
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
sort($members);
var_dump($members);
echo "<br>";
echo "「string」は変数が文字列であることを示し、( )内にはそのバイト数が表示されます。";
echo "<br><br>";

$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);
echo "<br>";
echo "「int」は変数が整数型であることを示し、( )内にはその数値が表示されます。";
echo "<br><br>";

#in_array (配列の中にある要素が存在しているか)
$numbers = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
var_dump(in_array("tanaka", $numbers));
echo "<br><br>";

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
if (in_array("tanaka", $members)) {
  echo "田中さんはいるよ！";
} else {
  echo "田中さんはいないよ！";
}
echo "<br><br>";

#implode (配列を結合して文字列に変換)
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br><br>";

#explode (文字列を指定の区切りで配列にする)
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";

$re_members = explode("@", $atstr);
var_dump($re_members);
echo "<br>";

$str = "1, 2, 3, 4, 5, ";
$array = explode(",", $ststr);
var_dump($array);
echo "<br><br>";


echo "・課題" . "<br>";
echo "count" . "<br>";
$members = ["suzuki", "yamada", "satou", "watanabe"];
echo count($members);
echo "<br><br>";

echo "sort" . "<br>";
$members = ["suzuki", "yamada", "satou", "watanabe"];
sort($members);
var_dump($members);
echo "<br><br>";

$numbers = [34, 644, 87, 21, 99];
sort($numbers);
var_dump($numbers);
echo "<br><br>";

echo "in_array" . "<br>";
$members = ["suzuki", "yamada", "satou", "watanabe"];
var_dump(in_array("yamada", $members));
echo "<br><br>";

$members = ["suzuki", "yamada", "satou", "watanabe"];
if (in_array("yamada", $members)) {
  echo "山田さんはいるよ";
} else {
  echo "山田さんはいないよ";
}
echo "<br><br>";

echo "implode" . "<br><br>";
$members = ["suzuki", "yamada", "satou", "watanabe"];
$mem = implode("@", $members);
var_dump($mem);
echo "<br>";
$mem = implode($members);
var_dump($mem);
echo "<br><br>";

echo "explode" . "<br>";
$members = ["suzuki", "yamada", "satou", "watanabe"];
$mem = implode("@", $members);
var_dump($mem);
echo "<br>";
$re_members = explode("@", $mem);
var_dump($re_members);
echo "<br><br>";

$num = "1,2,3,4,5";
$array = explode("", $num);
var_dump($array);
echo "<br><br>";

echo "・要件定義（要求仕様書）"."<br>";
echo "システム開発における工程のひとつ"."<br>";
echo "顧客が望んでいる機能や仕様などの概略をまとめたもののこと。";
echo "<br><br>";

echo "・単体テスト・結合テスト"."<br>";
echo "単体テスト：機能ごとに独立したプログラムを単体でテストすること。" . "<br>";
echo "結合テスト：それぞれの機能が連携しても、システムとしてきちんと動くかを確認するテスト。";
echo "<br><br>";

echo "・テスト仕様書（どのようなもの、項目）";
echo "テストするポイントをまとめたもの。";
