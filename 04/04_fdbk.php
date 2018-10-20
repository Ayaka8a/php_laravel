<?php
function arr4($arr4){
sort($arr4);
$max_number = $arr4[0];
$i = 1;


foreach($arr4 as $a){
  if($arr4[$i] < $a){
    $max_number = $a;
  }
} return $max_number;
}
echo arr4(array(7, 5, 3, 9));

?>
