<?php
//POSTされてきたデータを取得する
$user_name = $_POST['user_name'];
$hobby = $_POST['hobby'];
?>

<html>
    <head>
        <meta charset="UTF-8">
</head>
<body>
    <h1>登録ページ</h1>
    <!-- HTMLの中にechoプログラムを埋め込みましょう。 -->
    <p>こんにちは<?php echo $user_name;?>さん</p>
    <p>趣味は<?php echo $hobby;?>ですね</p>
</body>
</html>
