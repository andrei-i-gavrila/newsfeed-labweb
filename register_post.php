<?php

require_once 'utils.php';

$username = stripHtml($_POST['username']);
$password = stripHtml($_POST['password']);
$password_confirmation = $_POST['password_confirmation'];

if ($password !== $password_confirmation) {
    redirect_with_error("/register.php", "Passwords don't match");
}

$database = getConnection();

$existsStatement = $database->prepare('select count(*) as "exists" from users where username = :username');
$existsStatement->execute(compact('username'));
if ($existsStatement->fetchObject()->exists) {
    return redirect_with_error("/register.php", "Username taken. Try again");
}

$password = password_hash($password, PASSWORD_BCRYPT);
$insertStatement = $database->prepare("insert into users(username, password) values (:username, :password)");
if (!$insertStatement->execute(compact('username', 'password'))) {
    return redirect_with_error("/register.php", "Cannot insert :-?");
}

logDatabase("users", 'insert');

return redirect_with_success("/login.php", "Successfully registered. Now you should login");
