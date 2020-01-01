<?php
$time = date('G');

if($time < 12){
    echo '午前です。';
    echo $time;
}elseif($time >=12){
    echo '午後です。';
}