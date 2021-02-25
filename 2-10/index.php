<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>関数</title>
</head>
<body>
<!-- 関数とはあるデータを受け取り、定められた独自の処理を実行し、その結果を返す命令のこと。
関数を使うメリットはよく使う処理をまとめることにより、コード量の削減ができることと保守や改修が容易になること -->
<?PHP
echo "例題" . "<br><br>";

echo "1) 底面10cm 高さ5cm" . "<br>";
$bottom1 = 10;
$height1 = 5;
echo $bottom1 * $height1 / 2;
echo "<br><br>";

echo "2) 底面15cm 高さ8cm" . "<br>";
$bottom2 = 15;
$height2 = 8;
echo $bottom2 * $height2 / 2;
echo "<br><br>"; 

echo "3) 底面8cm   高さ6cm" . "<br>"; 
$bottom3 = 8;
$height3 = 6;
echo $bottom3 * $height3 / 2;
echo "<br><br>";

function getTriangleArea ($bottom, $height) {
  $area = $bottom * $height / 2;
  print "三角形の面積は" .$area. "だよ。";
  echo "<br>";
}

getTriangleArea (10,5);
getTriangleArea (15,8);
getTriangleArea (8,6);

echo "<br><br>";


// function sayHi($name = "goto") {
//   //関数の中で定義する変数 => ローカル変数
//   $myName = "php";
//   return "Hi!" .$name. "from" .$maName;
// }
// echo $myName;
$myName = "ruby";

function sayHi($name = "goto") {
  $myName ="php";
  return "Hi!" . $name . "from" . $myName;
}
echo sayHi();
echo "<br><br>";
echo $myName;
echo "<br><br>";


echo "課題" . "<br>";
echo "縦=5cm、横=10cm、高さ=8cmの直方体の体積を求めてください。"."<br>";

function rectangularArea($vertical, $side, $height) {
  $area = $vertical * $side * $height;
  print "直方体の体積は".$area."㎤です。";
}
rectangularArea(5, 10, 8);
echo "<br><br>";


echo "ハッシュ化"."<br>";
echo "元の値をハッシュ関数に入れることで元の値に見合った適当な値「ハッシュ値」に変換してくれ、この一連の流れ。"."<br>";
echo "通信の安全性を高める技術の一つ。" . "<br><br>";

echo "総合テスト"."<br>";
echo "開発者側の最終テストのこと。"."<br><br>";

echo "デバッグ"."<br>";
echo "プログラムのミスや欠陥をチェックして、修正する作業のこと。"."<br><br>";


?>
  
</body>
</html>