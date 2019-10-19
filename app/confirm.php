<?php
//POSTされてきたデータを取得する?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <h1>受信ページ</h1>
    <p>あなたの名前は　さんです。</p>
    <p>趣味は　です。</p>
    <p>こちらの情報でよろしいですか？</p>
    <form action="complete.php" method="POST">
    <input type="submit" value="登録">
    </form>
</body>
</html>

<?php
//POSTされてきたデータを取得する
$user_name = $_POST['user_name'];
$hobby = $_POST['hobby'];
?>