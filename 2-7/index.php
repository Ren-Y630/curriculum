<?PHP
// 配列
$country_1 = "America";
$country_2 = "japan";
$country_3 = "China";
$country_4 = "Korea";

echo $country_1;
echo "<br>";
echo $country_2;
echo "<br>";
echo $country_3;
echo "<br>";
echo $country_4;
echo "<br><br>";


$countries = ["America", "japan", "China", "Korea"];

echo $countries[0];
echo "<br>";
echo $countries[1];
echo "<br>";
echo $countries[2];
echo "<br>";
echo $countries[3];
echo "<br>";

var_dump($countries);
echo "<br><br>";

//連想配列
$fruits = ["りんご", "みかん", "ぶどう"];

//0番目のリンゴを出力
echo $fruits[0];
echo "<br>";
//1番目のみかんを出力
echo $fruits[1];
echo "<br>";
//2番目のぶどうを出力
echo $fruits[2];
echo "<br>";
//配列全体を出力
var_dump($fruits);

$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];
echo "<br><br>";

//連想配列の宣言
//りんごの出力
echo $fruits["apple"];
echo "<br>";
//みかんを出力
echo $fruits["orange"];
echo "<br>";
//ぶどうを出力
echo $fruits["grape"];
echo "<br><br>";

var_dump($fruits);
echo "<br><br>";
//機械的に順番に処理する → 配列
//特定の要素にアクセスする場合があるとき → 連想配列


//配列、連想配列、への要素の追加
//配列の場合
echo "配列の場合"."<br>";
$fruits = ["りんご", "みかん", "ぶどう"];
//0,1,2番はもう使われてるから3番に追加をする
$fruits [3] = "もも";
//指定しなくても連番であればプログラムが勝手に判断して順番をつけてくれる
$fruits[] = "もも";
var_dump($fruits);
echo "<br><br>";

//連想配列の場合
echo "連想配列の場合"."<br>";
$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];
$fruits["peach"] = "もも";
var_dump($fruits);
echo "<br><br>";

//課題
echo "課題";
echo "<br>";
$color = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($color);
echo "<br><br>";
$color[yellow] = "黄色";
var_dump($color);
echo "<br><br>";

echo "プルリクエスト（マージリクエスト）"."<br>";
echo "自分が変更したコードをリポジトリに取り込んでもらえるよう依頼する機能。". "<br>";
echo "簡単に言うと他の人に自分の加えた変更を見てもらいフィードバックをもらうこと。";
echo "<br><br>";

echo "Git Flow". "<br>";
echo "Gitのブランチ構成のルール、及びそのルールを実現するためのツール名。". "<br>";
echo "簡単に言うとGitのブランチを活用したGitの開発手法。" . "<br>";
echo "1.フィーチャー......開発を行うためのブランチ。用途は個々の機能の実装やバグの解決。"."<br>";
echo "2.デベロップ..........開発を行うためのブランチ。"."<br>";
echo "3.リリース.............リリース前に準備、微調整を行うブランチ。"."<br>";
echo "4.マスター............リリースしたデータをおいておくブランチ。"."<br>";
echo "5.ホットフィックス......リリースされたデータに緊急の修正をするためのブランチ。"."<br>";
echo "<br><br>";

echo "CRON" . "<br>";
echo "設定したスケジュールに従って指定されたプログラムを定期的に起動してくれるもの。";
echo "<br><br>";
