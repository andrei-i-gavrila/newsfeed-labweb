<?php
require_once 'utils.php';

$__user = null;

function getUser()
{
    global $__user;

    if ($__user == null and isset($_COOKIE['token'])) {
        $token = $_COOKIE['token'];
        $userStatement = getConnection()->prepare('select * from users where token = :token limit 1');
        $userStatement->execute(compact('token'));
        $userObject = $userStatement->fetchObject();
        if (!$userObject) {
            setcookie('token', '', -1);
            return null;
        }
        $__user = $userObject;
    }

    return $__user;
}