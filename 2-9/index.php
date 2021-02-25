<?php

for ($num = 1; $num <= 100; $num++) {
  if ((($num % 3) === 0) && (($num % 5) === 0)) {
    echo "FizzBuzz!";
  } elseif (($num % 3) === 0) {
    echo "Fizz!";
  } elseif (($num % 5) === 0) {
    echo "Buzz!";
  } else {
    echo $num;
  }
  echo "<br>";
}

echo "<br><br>";

echo "・パフォーマンス";
echo "<br>";
echo "性能のこと。";

echo "<br><br>";
echo "・スロークエリ" . "<br>";
echo "処理速度の遅いSQLのこと。";

echo "<br><br>";
echo "・クエリログ" . "<br>";
echo "実行したSQLの全履歴。";
