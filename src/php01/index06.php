<?php
// 繰り返し１−６　くり返し復習が必要！！１
for ($i = 0; $i < 4; $i++) {
    echo $i;
}
echo "<br />";
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . '<br />';
}
// １足してからエコ（表示）して下さい
$count = 0;
while ($count < 20) {
    $count += 1;
    echo $count .'<br />';
    
}
// break=条件を指示すると途中で処理が止まる
// エコした後（表示した後）に１足してください
$i = 0;
while ($i < 10) {
    if ($i == 5) {
        break;
    }
    echo $i . '<br />';
    $i++;
}

// continueの使い方=条件を指示したところがスキップ
$i = 0;
while ($i < 10) {
    if ($i ==5) {
        $i++;
        continue;
    }
    echo $i;
    $i++;
}
// continue と　breakの応用　問題　　間違え！！
// ifは何個も使える🙆‍♀️ということは複数の条件で使用できる
// $count = 0;
// while ($count <= 100) {
    // if ($count %= 0) {
        // $count++;
        // continue;
    // }
    // echo $count .'<br />';
    // $count++;
// }
// 
// 正しい答え
$count = 0;

while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}

$i = 0;
do {
  echo $i . '<br />';
  $i++;
} while ($i < 5);

$num = 0;
do {
    echo 'num = ' . $num . '<br />';
    $num++;
} while ($num < 3);

// 応用　問題
// 1️⃣定義 文字列には””
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz ="FizzBuzz";

for ($i =1; $i <= 50; $i++) {
    if ($i % 15 === 0) {
        echo $FizzBuzz;
    }   else if ($i % 3 === 0) {
        echo $Fizz;
    }   else if ($i % 5 === 0) {
        echo $Buzz;
    }   else {
        echo $i;
    }
}
echo '<br />';
// ⬆️for 外側＝行、⬇️for 内側＝列　下のコードは５行４列を五回（行）繰り返すという意味
for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 5; $j++) {
    echo "あ";
  }
  echo "<br />";
}