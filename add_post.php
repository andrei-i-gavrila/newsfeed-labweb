<?php

require_once 'utils.php';
require_once 'user_auto_login.php';


$user = getUser();
if ($user == null) {
    return redirect_with_error('/index.php', "Not logged in");
}

$title = $_POST['title'];
$body = $_POST['body'];

$insertStatement = getConnection()->prepare('insert into news(title, body) values (:title, :body)');
$insertStatement->execute(compact('title', 'body'));

return redirect_with_success('/index.php', 'Added');