<?php

require_once 'utils.php';
require_once 'user_auto_login.php';


$user = getUser();


$newsStatement = getConnection()->prepare("select * from news order by id desc");
$newsStatement->execute();
$news = $newsStatement->fetchAll(PDO::FETCH_OBJ);


return view('index');