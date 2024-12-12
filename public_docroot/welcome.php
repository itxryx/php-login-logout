<?php
session_start();
$id = $_POST["login_id"] ?? "";

if (!$_SESSION["authenticated"]) {
    header("Location: /index.php", true, 307);
    exit;
}
?>

<html lang="ja">
<head>
    <title>ようこそ</title>
</head>
<body>
<h1>ようこそ <?php echo $id ?> さん</h1>
<a href="logout.php">ログアウトする</a>
</body>
</html>
