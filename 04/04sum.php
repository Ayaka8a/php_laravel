<?php
/* // １〜１０までを足した値を返す関数
function sum(){

  //result は結果を保存する変数
  $result = 0;
  $max = 10;

  //$i は　１　から始まり　$max　より大きくなるまでループする
  for($i = 1; $i <= $max; $i++){
    $result += $i;
  }

  //$resultを結果として返す
  return $result;

}
//ここまでだとただ関数を定義しただけのため、実行結果に何も返されない

//関数を実行する
echo sum();
*/

#仮引数を持たせたsum関数

function sum($max){
  $result = 0;

  //$iは　１　から始まり、$max より大きくなるまでループする
  for($i = 1; $i <= $max; $i++){
    $result += $i;
  }
  //$resultを結果として返す
  return $result;
}

//関数を実行する（引数を指定する=$maxに入る数字を教えてあげる）
echo sum(100);

?>
