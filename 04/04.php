<?php

//課題１
function multipl($num){
  return 2 * $num;

}

echo multipl(3);


//課題２
function sum($a, $b){
  return $a + $b;
}

echo sum(5, 10);

//課題３($arrという配列の仮引数を持ち、数値が入った配列array(1,3,5,7,9)を渡すとその要素を全てかけた結果を返す関数)

function arr($arr){
$result = $arr[0];

for($i = 0; $i < count($arr); $i ++){
$result *= $arr[$i];
}
return $result;
}
echo arr(array(1, 3, 5, 7));


//課題４(配列の中で一番大きい値を返す)

function arr4($arr4){
sort($arr4);
$max_number = $arr4[0];
$result = 0;
$i = 1;


foreach($arr4 as $a){
  if($arr4[$i] < $a){
    $max_number = $a;
  } else {
    $max_number == $max_number;
  }
} return $max_number;
}
echo arr4(array(7, 5, 3, 9));

//ビルトイン関数の用途、使い方
/* 1.strip_tags
文字列からHTMLおよびPHPタグを取り除く
*/
echo strip_tags("sometimes the right path is<font color = red> NOT </font>
 most difficult one.");

/* 2.array_push
配列の要素を追加する。添字が文字列の時は、配列を追加すると添字（キー）は０から始まる
*/
$b = array(1, 2, 3);
array_push($b, 4, 5);
print_r($b);

/* 3.array_merge
配列の要素の最後に一つまたは複数の配列を結合する
*/
$array1 = [1, 2, 3];
$array2 = [33, 34, 35];

$arraym = array_merge($array1, $array2);

print_r($arraym);

/* 4.time, mktime
time・・・現在の日時のUNIXスタンプを表示
mktime・・・指定した日時のUNIXスタンプを表示

UNIXスタンプ・・・コンピューターのシステム時刻の一種で、協定世界時（UTC）
での1970年1月1日（午前0時0分0秒）からの経過時間を指す
*/

echo time();

/* 5.date
サーバーの現在時刻を表示する。
*/

$time = date("Y年m月j日 Ah:i");
print $time;

?>
