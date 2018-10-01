<?php

//課題１
function multipl($num){
  return 2 * $num;

}

echo multipl(3);

//りんごジュースだけしか売ってない自販機
function vending($price){
$juice_name = "りんごジュース";

  if($price >= 120){
    return $juice_name . "をお買い上げありがとうございます！";
  } else {
    return $juice_name . "のお金が不足しています！";
  }
}

echo vending(90);

//課題２
function sum($a, $b){
  return $a + $b;
}

echo sum(5, 10);

//課題３($arrという配列の仮引数を持ち、数値が入った配列array(1,3,5,7,9)を渡すとその要素を全てかけた結果を返す関数)
function all_mult($arr1){

  list($val1, $val2, $val3, $val4) = $arr1;
  return $val1 * $val2 * $val3 * $val4;
}

echo all_mult(array(1, 3, 5, 7));

//課題４(配列の中で一番大きい値を返す)
/*
function max_array($arr){
  return max($arr);

}

echo max_array(array(1, 4, 8, 34));

//ん？max関数使ったらダメなやつ？
*/

?>
