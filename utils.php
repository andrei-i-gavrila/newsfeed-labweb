<?php

session_start();

function view($viewName)
{
    require 'views/start_view.php';
    require "views/$viewName.php";
    require 'views/end_view.php';

    return true;
}

function error($errorMessage)
{
    if (!isset($_SESSION['errors'])) {
        $_SESSION['errors'] = [];
    }
    $_SESSION['errors'][] = $errorMessage;
}

function message($message)
{
    if (!isset($_SESSION['messages'])) {
        $_SESSION['messages'] = [];
    }
    $_SESSION['messages'][] = $message;
}


function redirect_with_error($location, $error)
{
    error($error);
    return redirect($location);
}


function redirect_with_success($location, $message)
{
    message($message);
    return redirect($location);
}

function redirect($location)
{
    header("Location: $location");
    return true;
}

$__database = null;

function getConnection()
{
    global $__database;

    if ($__database == null) {
        $__database = new PDO('mysql:host=localhost;dbname=newsfeed', 'root', 'root', [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
    }
    return $__database;
}

function dd($expression)
{
    echo json_encode($expression);
    die();
}

function json($expression)
{
    header('Content-type: application/json; charset=UTF-8');
    echo json_encode($expression);
    return true;
}

function stripHtml($input)
{
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

function logDatabase($table, $operation, $id = null)
{
    getConnection()
        ->prepare("insert into logs(table_name, row_id, operation_type) values ('{$table}', :id, '{$operation}')")
        ->execute(['id' => $id ?? getConnection()->lastInsertId()]);

}