<?php

require_once 'utils.php';
require_once 'user_auto_login.php';

$user = getUser();
if ($user == null) {
    return redirect_with_error('/index.php', "Not logged in");
}

if (!isset($_GET['id'])) {
    return redirect_with_error('/index.php', 'Nothing to edit');
}

$id = $_GET['id'];
$producer = $user->id;
$statement = getConnection()->prepare('select * from news where id = :id and producer = :producer');
$statement->execute(compact('id', 'producer'));

$post = $statement->fetchObject();

if (!$post) {
    return redirect_with_error('/index.php', "You are not allowed to edit that");
}

return view('edit');