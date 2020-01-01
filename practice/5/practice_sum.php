<?php
$i = 1;
$sum = 0;

while($i <= 100){
    if($i % 7 === 0){
        $sum += $i;
    }
    $i++;
}
echo '1~100までの7の倍数の合計は'.$sum;
?>
