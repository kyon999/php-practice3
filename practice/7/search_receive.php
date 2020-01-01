<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
}
$data = [];
$dsn = 'mysql:dbname=sample;host=db;charset=utf8';
$user = 'user';
$password = 'userpass';

try{

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT id, name FROM user WHERE name LIKE :name";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name', '%'.$name.'%',PDO::PARAM_STR);
    $stmt->execute();

    $count = $stmt->rowCount();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
    echo '処理が終了しました';

}catch (PDOException $e){
    print($e->getMessage());
    die();

}
?>
<html>
<body>
    <h1>会員データ一覧</h1>
    <p><?php echo $count; ?>件見つかりました。</p>
    <p>検索名は「<?php echo $name; ?>」</p>
    <table border=1>
    <tr><th>id</th><th>名前</th></tr>
    <?php foreach ($data as $row): ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
</body></html>