<?php
session_start();

$_SESSION["authenticated"] ??= false;
$_SESSION["login_error_count"] ??= 0;
$_SESSION["login_error_message"] ??= "";

if ($_SESSION["authenticated"]) {
    header("Location: /welcome.php", true, 307);
    exit;
}

if (is_null($_SESSION["login_error_count"])) {
    $_SESSION["login_error_count"] = 0;
}
if (is_null($_SESSION["login_error_message"])) {
    $_SESSION["login_error_message"] = "";
}
?>

<html lang="ja">
<head>
    <title>ログイン</title>
</head>
<body>
<h1>ログイン</h1>
<?php
if (!empty($_SESSION["login_error_message"])) {
    echo "<p>" . $_SESSION["login_error_message"] . "</p>";
}
?>
<form>
    <label for="login-id">ID</label>
    <input type="text"
           id="login-id"
           name="login_id"
           value=""
           required><br>

    <label for="login-password">パスワード</label>
    <input type="password"
           id="login-password"
           name="login_password"
           value=""
           required><br>

    <input type="submit"
           value="ログイン"
           id="login-submit"
           formmethod="post"
           formaction="/login.php">
</form>
</body>
</html>
