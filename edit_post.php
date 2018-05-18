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
$id = $_POST['id'];
$producer = $user->id;
$published_at = stripHtml($_POST['date']);

$updateStatement = getConnection()->prepare('update news set title = :title, body = :body, category = :category, producer = :producer, published_at = :published_at where id = :id');
$updateStatement->execute(compact('title', 'body', 'category', 'producer', 'published_at', 'id'));

if ($updateStatement->rowCount() == 0) {
    return redirect_with_error("/edit.php?id=${$id}", "Error while saving");
}

return redirect_with_success('/index.php', 'Edited');