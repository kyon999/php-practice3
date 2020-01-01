<?php

$dsn = 'mysql:dbname=sample;host=db;charset=utf8';
$user = 'user';
$password = 'userpass';

try{

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    echo '接続に成功しました';

}catch (PDOException $e){
    print($e->getMessage());
    die();

}