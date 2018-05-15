<?php

require_once 'utils.php';

$username = $_POST['username'];
$password = $_POST['password'];

$database = getConnection();

$passwordStatement = $database->prepare('select password from users where username = :username');
$passwordStatement->execute(compact('username'));
$passwordField = $passwordStatement->fetchObject();

if (!$passwordField) {
    return redirect_with_error("/login.php", "Invalid username/password");
}

$correct = password_verify($password, $passwordField->password);
if (!$correct) {
    return redirect_with_error("/login.php", "Invalid username/password");
}

$token = bin2hex(openssl_random_pseudo_bytes(16));

$storeTokenStatement = $database->prepare('update users set token = :token where username = :username');
$storeTokenStatement->execute(compact('username', 'token'));
if ($storeTokenStatement->rowCount() == 0) {
    return redirect_with_error("/login.php", "Cannot login atm");
}

setcookie('token', $token, time()+36000);
return redirect("/index.php");
