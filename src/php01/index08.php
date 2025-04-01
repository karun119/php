<?php
// 1-8 配列と連想配列
/*var_dump。。。。文字列は　string,数字はintで表示される
''のような空文字も文字列型となります＝string(0) ""*/
    // foreach 文　＝フォーイーチぶん

    // PHP で配列のループ処理の場合に添字＝そえじを取得する方法
    // 配列の要素を識別する番号やキー のこと


$nam = array(4, 10, 15);
var_dump($nam);

echo $nam[1];
echo "<br />";
$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);
var_dump($people);
echo "<br />";

$people = [
    'person1' => 'Taro',
    'person2' => 'Jiro',
];
echo $people['person1'];

$people = [
    [
        'last_name' => '山田',
        'first_name' => '太郎',
        'age' => 29,
        'gender' => '男性'
    ],
    [
        'last_name' => '鈴木',
        'first_name' => '次郎',
        'age' => 25,
        'gender' => '男性'
    ],
    [
        'last_name' => '佐藤',
        'first_name' => '花子',
        'age' => 20,
        'gender' => '女性'
    ]
    ];
    echo $people[0]['last_name'];
    echo "<br />";
    $people = array('Taro', 'Jiro', 'Saburo');

    foreach ($people as $person) {
        echo $person;
        echo '<br />';
    }
    $people = array(
        'person1' => 'Taro',
        'person2' => 'Jiro',
        'person3' => 'Saburo',
    );
    foreach ($people as $person => $name) {
        print $person . "は" . $name . "です" . '<br />';
    }
/*問題
    $people = [
        [
            "name" => "Taro",
            "value" => "(25歳men)"
        ],
        [
            "name" => "Jiro",
            "value" => "(20歳men)"
        ],
        [
            "name" => "hanako",
            "value" =>"(16歳women)"
        ]
        ];
        foreach ($people as $name => $value) {
            echo $name , $value . '<br />';
        }
*/

// 回答

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
