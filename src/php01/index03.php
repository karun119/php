<!--  ⭐️変数のルール
    ・英大文字小文字小文字（a-z もしくはA-Z
    数字（先頭には使えない-
    ._underスコア -->
    <?php
    $item = "JavaScript";
    $item = "PHP";
    echo $item;
    /*変数には1つのデータしか入れることができません。
    プログラムは上から下に流れるので、後から代入したデータが先に代入されたデータを上書きしてしまいます
    。*/
    echo '<br />';
    $item = "JavaScript";
    echo $item;


// ⭐️定数。。。税率のように固定の値を表現する時に使います。
    // 変数のようにプログラムの最中で書き換えられてしまう心配がないため、プログラム内で固定値を設定する際に使用されます。
    // 定数名は、＄つけない！大文字で書くのがルール！
    // 定数名をクォーテーションで囲むと 構文エラー（Syntax Error） になります
    const FELANGUAGE = "Vue.js";
    echo FELANGUAGE;

// ⭐️データ型。。。大きく分けて３種類（）スカラー型、複合型、特殊型

// ！スカラー型（論理型（bool、boolean）、整数型（int、integer）、
// 浮動小数点数（float、double））、文字列型（string））

// 文字列（string)...""または’’で括られている必要がある
// 例。。。。$item = "php";

// ⭐️整数（integer）インテジャーint....整数は、0、1、-1、100 といった数字のこと。
// ' 'や" " " 要らない！！
// 例。。。$item = 123;

// ！複合型。。。スカラー型とは対照的に、複数の値をまとめて扱う型の分類です
// 複合型2種類（🔴配列型　array 複数のデータの集合、
// 🔴オブジェクト型　object　データと手続きの集合
// ⭐️配列型　。。。連想配列や多次元配列、値が1つもない空配列も配列型

/*⭐️オブジェクト型。。。データと手続きをまとめたもので、
クラスをnewして作ったインスタンスはオブジェクト型に*/

// !特殊型....スカラー型でも複合型でもない特殊な型の分類
// ⭐️リソース型	resource	外部リソースへの参照。
// ⭐️ヌル型	null	値を持たないことを表す。

// Q
echo '<br />';

$int = 20;
echo $int;
echo '<br />';
$string = 'こんにちは';
echo $string;

// 連結演算子
$name1 = "Sato" . "Taro";
$name2 = "Tanaka";
$last_name = "Yamada";
$first_name = "Saburo";

echo $name1;
echo "<br />";
echo $name2 . "Jiro";
echo "<br />";
echo $last_name . $first_name;
echo '<br />';

$name = 'Tanaka';
$last_name = 'Yamada';
$first_name = 'Saburo';

echo $name . 'Jiro';
echo '<br />';
echo $last_name . $first_name;
echo '<br />';
