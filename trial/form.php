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
                <option value="0">社長</option>
                <option value="1">鈴木</option>
                <option value="2">高橋</option>
                <option value="3">山田（営業）</option>
                <option value="4">中村</option>
                <option value="5">山田（総務）</option>
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