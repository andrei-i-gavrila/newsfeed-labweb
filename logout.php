<?php
require_once 'utils.php';
require_once 'user_auto_login.php';

if (getUser() == null) {
    return redirect('/index.php');
}


setcookie('token', '', -1);
getConnection()
    ->prepare('update users set token = NULL where username = :username')
    ->execute(['username' => getUser()->username]);

return redirect('/index.php');