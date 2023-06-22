<?php


// ファイルに書き込み
$name = $_POST['name'];
$nenrei = $_POST['nenrei'];
$birthPlace = $_POST['birthPlace'];
$email = $_POST['email'];
$password = $_POST['password'];

$data = $name . "\n". $nenrei . "\n". $birthPlace . "\n". $email . "\n". $password . "\n" ;

file_put_contents('data/data.txt', $data, FILE_APPEND)



//文字作成

?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みありがとうございます。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
