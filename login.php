<?php
require_once 'utils.php';
require_once 'user_auto_login.php';

if (getUser() != null) {
    return redirect('/index.php');
}



return view('login');