<?php

$dsn = 'mysql:dbname=sample;host=db;charset=utf8';
$user = 'user';
$password = 'userpass';

try{

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT name, age FROM user ORDER BY age DESC";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $data = array();
    $count = $stmt->rowCount();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
    echo '接続に成功しました';

}catch (PDOException $e){
    print($e->getMessage());
    die();

}
var_dump($count);
var_dump($data);