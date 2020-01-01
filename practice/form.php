<?php
$user = array(
    0 => array(
        'id' => '1',
        'name' => '社長',
        'team' => '社長',
        'pass' => '1234'
    ),
    1 => array(
        'id' => '2',
        'name' => '鈴木さん',
        'team' => '営業チーム',
        'pass' => '1111'
    ),
    2 => array(
        'id' => '3',
        'name' => '高橋さん',
        'team' => '経理チーム',
        'pass' => '2222'
    ),
    3 => array(
        'id' => '4',
        'name' => '山田さん',
        'team' => '営業チーム',
        'pass' => '3333'
    ),
    4 => array(
        'id' => '5',
        'name' => '中村さん',
        'team' => '経理チーム',
        'pass' => '4444'
    ),
    5 => array(
        'id' => '6',
        'name' => '山田さん',
        'team' => '総務チーム',
        'pass' => '5555'
    )
);
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <h1>ログイン</h1>
    <form action="task.php" method="POST">
    <label for="name">名前</label>
    <select name="id">
    <?php foreach($user as $var){ ?>
        <option value="<?php echo $var['id'] ?>"><?php echo $var['name'] ?></option>
    <?php } ?>

    </select>
    <br>
    <label for="pass">パスワード</label>
    <input type="text" name="pass">
    <br>
    <input type="submit">
    </form>
</body>
</html>