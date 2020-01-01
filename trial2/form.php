<?php
require_once('./functions.php');
$errs = [];
$name = [];
$dbh = get_db_connect();

$name = select_name($dbh);


?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>(株)クリエイト 業務管理システム</h1>
        <form action="task.php" method="POST">
            <p>名前を選択してください</p>
            <label for="lf_name">名前</label>
            <select name="id" id="lf_name">
            <?php foreach($name as $key =>$var): ?>
                <option value="<?php echo $key; ?>"><?php echo $var['name'] ?></option>
            <?php endforeach; ?>
            </select>
            <br>
            <p>パスワードを入力してください</p>
            <label for="lf_passwd">パスワード</label>
            <input type="text" name="pass" id="lf_passwd">
            <br>
            <input type="submit" value="ログイン">
        </form>
    </body>
</html>