<?php
function html_escape($word){
    return htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
}
function get_post($key){
    if(isset($_POST[$key])){
        $var = trim($_POST[$key]);
        return $var;
    }
}
function check_words($word, $length){
    if(mb_strlen($word) === 0){
        return FALSE;
    }elseif(mb_strlen($word) > $length){
        return FALSE;
    }else{
        return TRUE;
    }
}
function get_db_connect(){

    try{
        $dsn = 'mysql:dbname=sample;host=db;charset=utf8';
        $user = 'user';
        $password = 'userpass';

        $dbh = new PDO($dsn, $user, $password);
        //PDO  PHPがもともと用意しているもの。new インスタンス化。わからなくてもいい
    }catch (PDOException $e){
        echo($e->getMessage());
        die();
    }
    //try catch この段階で何かおかしいのがあれば、エラーをおこして終了してくれる

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //定型分のようなもの、まずはコピペでいい
    return $dbh;
}

function insert_comment($dbh, $name, $comment){

    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO board (name, comment, created) VALUE (:name, :comment, '{$date}')";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
    if(!$stmt->execute()){
        return 'データの書き込みに失敗しました。';
    }
}

function select_name($dbh){
    $data = [];
    $sql = "SELECT name FROM user01";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
    return $data;
}

function select_user($dbh, $id){
    $user = [];
    $sql = "SELECT name, team, pass FROM user01 WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $user = $row;
    }
    return $user;
}

function select_task($dbh, $id){
    $task = [];
    $sql = "SELECT user01.name, task.task_name, task.delivery FROM user01 inner join task user01.id = task.user_id WHERE user01.id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $task = $row;
    }
    return $task;
}
{
    # code...
}