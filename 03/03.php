<?php

//課題１
$name = "相沢彩香";

if($name = "相沢彩香"){
  echo "私は" . $name . "です。";
} else {
  echo "あなたの名前ではありません。";
}

//課題２
$total = "0";

for($i = 0; $i <= 10000; $i++){
    $total += $i;
}

echo $total;

//課題３
$fruits = array("りんご", "ぶどう", "みかん", "マンゴー", "なし");

foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}

//課題４

//for文の始めの値を定義する
$start = 1;
//for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <= 100; $i++){
  //５で割り切れたらカッコ内実行
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  };
}
?>
