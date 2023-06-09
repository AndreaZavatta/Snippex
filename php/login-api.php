<?php
require_once "bootstrap.php";
global $dbh;

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $user = $_POST["username"];
    $password = $_POST["password"];
    $password_hash = $dbh->getHashPasswordFromUsername($user);
    if (count($password_hash) > 0 && password_verify($password, $password_hash[0]["Password"])) {
        $_SESSION["LoggedUser"] = $user;
    } else {
        http_response_code(404);
    }
} else {
    http_response_code(404);
}
exit();
?>
