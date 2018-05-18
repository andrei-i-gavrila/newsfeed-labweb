<?php

require_once 'utils.php';
require_once 'user_auto_login.php';

$category = $_GET['category'] . "%";
$published_at = $_GET['date'];

$statement = getConnection()->prepare("select news.id, news.title, news.body, news.category, news.published_at, users.username as author from news inner join users on users.id = news.producer where (category like :category or :category = '') and (published_at = :published_at or :published_at = '')");
$statement->execute(compact('category', 'published_at'));

$news = $statement->fetchAll(PDO::FETCH_OBJ);

$user = getUser();

if ($user) {
    foreach ($news as $post) {
        $post->editable = ($user->username == $post->author);
    }
}

return json($news);