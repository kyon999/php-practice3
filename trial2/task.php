<?php

$users = array(
    'admin' => array(
        'id' => 0,
        'name' => '社長',
        'team' => '社長',
        'pass' => '1234'
    ),
    'user1' => array(
        'id' => 1,
        'name' => '鈴木',
        'team' => '営業',
        'pass' => '1111'
    ),
    'user2' => array(
        'id' => 2,
        'name' => '高橋',
        'team' => '経理',
        'pass' => '2222'
    ),
    'user3' => array(
        'id' => 3,
        'name' => '山田',
        'team' => '営業',
        'pass' => '3333'
    ),
    'user4' => array(
        'id' => 4,
        'name' => '中村',
        'team' => '経理',
        'pass' => '4444'
    ),
    'user5' => array(
        'id' => 5,
        'name' => '山田',
        'team' => '総務',
        'pass' => '5555'
    )
);

$tasks = array(
    'user1' => array(
        'name' => '鈴木',
        'team' => '営業',
        'task' => array('A社訪問','B社資料送付')
    ),
    'user2' => array(
        'name' => '高橋',
        'team' => '経理',
        'task' => array('帳簿処理','請求書発行')
    ),
    'user3' => array(
        'name' => '山田',
        'team' => '営業',
        'task' => array('C社訪問','D社資料送付','E社資料送付')
    ),
    'user4' => array(
        'name' => '中村',
        'team' => '経理',
        'task' => array('請求書発行','先月の締め')
    ),
    'user5' => array(
        'name' => '山田',
        'team' => '総務',
        'task' => array('求人開始','退職予定者の処理作業')
    )
);

$id = $_POST['id'];
$pass = $_POST['pass'];

require_once('./functions.php');

$dbh = get_db_connect();

$user = select_user($dbh, $id);
$task = select_task($dbh, $id);
?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>業務管理システム</h1>

    <?php

    foreach($users as $key => $user){
        if($pass == $user['pass']) {
            if($id==0) { ?>
                <p>社員名：<?php echo $user['name'];?></p>
                <p>チーム：<?php echo $user['team'];?></p>
                <?php
                //ここでuser01とtaskの全ての情報を撮ってくる
                foreach($tasks as $all_usertask){
                    print $all_usertask['name'];
                    print ":";
                    print $all_usertask['team'];
                    print "<br>";
                    foreach($all_usertask['task'] as $usertask){ //ネストしすぎ！本来であればfunctionで切り出したりしよう！（６章までの内容縛りなのでこのままにしてます）
                        print $usertask;
                        print "<br>";
                    }
                }
            }else { ?>
                <p>社員名：<?php echo $user['name'];?></p>
                <p>チーム：<?php echo $user['team'];?></p>
                <p>タスク一覧</p>
                <?php
                foreach($task[$key]['task'] as $task){
                    print $task;
                    print "<br>";
                }
            }
        }elseif($pass != $user['pass']) {
            print "パスワードが違います。";
        }
    }

    ?>
    
    <form action="" method="POST">
    <p>タスク名*<input type="text" name="task">(50文字まで)</p>
    <p>完了予定日*<input type="date" name="delivery"></p>
    <input type="submit" value="書き込む">
    </form>


</body>
</html>