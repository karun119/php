<?php
// １ー７　関数　関数を定義→渡された値（引数）を指示通りに処理し結果を返してくれる箱。
// 処理の材料の値を引数（パラメータ）といい、結果を戻り値（返り値）

// 関数には大きく２種類！1️⃣内部関数（ビルトイン関数）、＝PHP にあらかじめ用意されている関数
// var_dump （ヴァーダンプ）デバッグやエラー修正、変数の内容の理解、データの検証や 
// arrayアレイ） 複数の値を1つの変数にまとめるデータ構造

// 2️⃣ユーザー定義関数
// 内部関数とは違い、自分でオリジナルな処理をまとめてひとつの関数として定義する事ができます。 ユーザー定義関数の中では、内部関数など PHP のプログラムとして有効なものを使用することができます。

function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);

echo "<br />";
// 引数と戻り値なし　引数＝（）の部分　
// 戻り値のない return は省略可能です。

function outputHello()
{
  echo "Hello world";
}

outputHello();
echo "<br />";

// 引数と戻り値あり
function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 4);
echo $total;
echo "<br />";

function text2($number1,$number2)
{
    $value = $number1 + $number2;
    return $value;
}
$total = text2(2, 3);
echo $total;
// 同じ関数名を定義することは出来ない。呼び出しは⭕️
// text 1 text2など名前を変える方法と
// 既にある関数名に追加する方法がある→$total1 = text(2, 4);echo $total1;下に$total2 = text(2, 3);echo $total2;

echo "<br />";
function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo $total . "点なので合格です";
    }   else {
        echo $total . "点なので不合格です";
    }
}
echo (exam(80, 60, 90));

echo "<br />";
function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTriangleArea($base, $height)
{
    return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}
echo getSquareArea(5, 5) . "<br />";
echo getTriangleArea(7, 8) . "<br />";
echo getTrapezoidArea(4, 5, 4);
// PHPでは "\n" を使っても、ブラウザでは改行されない！
// なぜなら、HTMLでは "\n" は無視されるから。
// コマンドライン（CLI）なら "\n" が有効