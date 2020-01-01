<?php
$login_id = $_POST['id'];
$login_pass = $_POST['pass'];

$users = array(
    'admin' => array(
        'id' => '1',
        'name' => '社長',
        'team' => '社長',
        'pass' => '1234'
    ),
    'user1' => array(
        'id' => '2',
        'name' => '鈴木さん',
        'team' => '営業チーム',
        'pass' => '1111'
    ),
    'user2' => array(
        'id' => '3',
        'name' => '高橋さん',
        'team' => '経理チーム',
        'pass' => '2222'
    ),
    'user3' => array(
        'id' => '4',
        'name' => '山田さん',
        'team' => '営業チーム',
        'pass' => '3333'
    ),
    'user4' => array(
        'id' => '5',
        'name' => '中村さん',
        'team' => '経理チーム',
        'pass' => '4444'
    ),
    'user5' => array(
        'id' => '6',
        'name' => '山田さん',
        'team' => '総務チーム',
        'pass' => '5555'
    )   
);
$tasks = array(
    'user1' => array(
        'task_name' => '鈴木さん',
        'task' => array('A社訪問','B社資料送付')
    ),
    'user2' => array(
        'task_name' => '高橋さん',
        'task' => array('帳簿処理','請求書発行')
    ),
    'user3' => array(
        'task_name' => '山田さん',
        'task' => array('C社訪問','D社資料送付','E社資料送付')
    ),
    'user4' => array(
        'task_name' => '中村さん',
        'task' => array('請求書発行','先月の締め')
    ),
    'user5' => array(
        'task_name' => '山田さん',
        'task' => array('求人開始','退職予定者の処理作業')
    )
    
);
?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <h1>タスクページ</h1>
    <?php
    foreach($users as $key => $user){
        if($user['id'] === $login_id && $user['pass'] === $login_pass){ ?>
            <p><?php echo 'あなたの名前は'.$user['name']; ?></p>
            <?php if($login_id === '1'){ 
                foreach($tasks as $all_user){ ?>
                    <?php echo $all_user['task_name']; 
                    foreach($all_user['task'] as $user_task){ ?>
                    <p><?php echo $user_task; ?></p>
                <?php }
                }
            }else{ ?>
                        <p><?php echo $user['name']; ?>
                        <?php foreach($task['$key'] as $user_task){ ?>
                            <p><?php echo $user_task; ?></p>
                        <?php }
                    
                 
            }
        }elseif($user['id'] === $login_id && $user['pass'] !== $login_pass){ ?>
            <p>パスワードが間違っています</p>
        <?php 
            
        }
    } ?>
    
</body>
</html>