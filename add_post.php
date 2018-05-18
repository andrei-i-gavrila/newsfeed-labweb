<?php

require_once 'utils.php';
require_once 'user_auto_login.php';


$user = getUser();
if ($user == null) {
    return redirect_with_error('/index.php', "Not logged in");
}

$title = stripHtml($_POST['title']);
$body = stripHtml($_POST['body']);
$category = stripHtml($_POST['category']);

$producer = $user->id;
$published_at = stripHtml($_POST['date']);

$insertStatement = getConnection()->prepare('insert into news(title, body, category, producer, published_at) values (:title, :body, :category, :producer, :published_at)');
$insertStatement->execute(compact('title', 'body', 'category', 'producer', 'published_at'));

if ($insertStatement->rowCount() == 0) {
    return redirect_with_error("/add.php", "Error while saving");
}
logDatabase("news", 'insert');

return redirect_with_success('/index.php', 'Added');