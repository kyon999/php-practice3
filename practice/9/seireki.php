<?php

$data1 = '2017/11/04';
$data2 = '2017/3/8';
$data3 = '2017年11月4日';
$pattern = '/^(\d{4})\/(\d{1,2})\/(\d{1,2})$/u';

$result1 = preg_match($pattern, $data1);
$result2 = preg_match($pattern, $data2);
$result3 = preg_match($pattern, $data3);

var_dump($result1);
var_dump($result2);
var_dump($result3);