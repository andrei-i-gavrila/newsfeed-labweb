<?php

require_once 'utils.php';
require_once 'user_auto_login.php';

$user = getUser();
if ($user == null) {
    return redirect_with_error('/index.php', "Not logged in");
}

return view('add');