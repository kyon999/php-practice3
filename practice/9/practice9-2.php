<?php

$str1 = '今日はくもりです。';
$str2 = '明日は快晴でしょう。';

//preg_match()を使い結果を取り出す。

$result1 = preg_match('/でしょう。$/', $str1);
$result2 = preg_match('/でしょう。$/', $str2);

var_dump($result1);
var_dump($result2);
