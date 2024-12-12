<?php
session_start();

$correct_id = "taro";
$correct_hashed_password = password_hash("pw", PASSWORD_DEFAULT);

$id = $_POST["login_id"];
$password = $_POST["login_password"];

// ログインID/PWのエラーメッセージ
$errors = [];

// ログインIDが違う
if ($id !== $correct_id) {
    $errors["login_id"]["message"] = "wrong login id.";
}

// ログインパスワードが違う
if (!password_verify($password, $correct_hashed_password)) {
    $errors["login_password"]["message"] = "wrong login password.";
}

if (empty($errors)) {
    $_SESSION["login_error_count"] = 0;
    $_SESSION["login_error_message"] = "";
    $_SESSION["authenticated"] = true;
    header("Location: /welcome.php", true, 307);
} else {
    $_SESSION["login_error_count"] += 1;
    $_SESSION["login_error_message"] = "ログインID、またはパスワードが違います";
    header("Location: /index.php");
}
exit;
