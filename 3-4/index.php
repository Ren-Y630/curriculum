<?php
# ファイルを読み込む
require_once("getData.php");
$u_data = new getData();
$users = $u_data -> getUserData();
// var_dump($users);

echo "<br>";

$p_data = new getData();
$posts = $p_data -> getPostData();
// var_dump($posts);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<header class= "clearfix" >
<div class="header-left">
<img src="./Y&I logo.png" alt="" >
</div>

<div class="header-right">
    <div class="right-upper"><?php echo "ようこそ".$users['first_name'] .$users['last_name'] . "さん"; ?></div>
    <div class="right-lower"><?php echo $users['last_login']; ?></div>
</div>

</header>

<div class="main">
    <table>
        <tr class="table-title">
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <div class="article">
            <?php
            #foreach文でデータベースより取得したデータを1行ずつループ処理（連想配列で取得したデータのうち、1行文が$rowに格納される）
                foreach ($posts as $row){
                    // var_dump($row);
                    echo "<tr>";
                    #連想配列形式の1行のデータから、キーを指定し、出力
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['title']}</td>";
                        if ($row['category_no'] == 1) {
                            echo "<td>食事</td>";
                        } elseif ($row['category_no'] == 2) {
                            echo "<td>旅行</td>";
                        } else {
                            echo "<td>その他</td>";
                        }
                        echo "<td>{$row['comment']}</td>";
                        echo "<td>{$row['created']}</td>";
                    "</tr>";
                }
            ?>
        </div>
    </table>
</div>

<footer>
    <div>Y&I Group.inc</div>
</footer>

</body>
</html>
