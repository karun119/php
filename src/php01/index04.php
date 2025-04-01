<!-- 演算子とは
 算術演算子	四則演算や除算、剰余などを行う
代入演算子	変数の値を別の変数に代入する
比較演算子	2つの値を比較する
論理演算子	真偽値を返す
加算子/減算子	インクリメントやデクリメントを行う -->
<!-- Q-->
 <?php
 $a = 15;
 $b = 3;
 $c = 10;

 echo $a += $b;
 echo '<br ?>';
 echo $a -= $b;
 echo '<br ?>';
 echo $a *= $b;
 echo '<br ?>';
 echo $a /= $b;
 echo '<br ?>';
 echo $a %= $c;


echo '<br ?>';
$a = 15;
$b = 3;
$c = 10;
$d = 5;

echo $a /= $d;
echo '<br ?>';
echo $b *= $d;
echo '<br ?>';

$a = 20;
$b = 5;

echo ($a > $b);
echo '<br ?>';
//$a xor $b..意味どちらか一方が TRUE（FALSE） の場合にTRUE
// ??	$a ?? $b	$a がnullや未定義の場合、$bを返しそれ以外の場合は$aを返す
// Q

$a = 20;
$b = 5;

echo ($a > 10 && $a <30);
echo '<br ?>';

$a = 10;
$b = 10;
$c = 5;
$d = 5;

$a = $b = 10;
$c = $d = 5;

echo ++$a;
echo '<br ?>';
echo $b++;
echo '<br ?>';
echo --$c;
echo '<br ?>';
echo $d--;

