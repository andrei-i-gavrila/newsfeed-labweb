<?php $user = getUser(); ?>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
</head>
<body>
<div class="container">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/index.php">
                Home
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <?php if (isset($user) and $user != null) { ?>
                    <a href="add.php" class="navbar-item">Add news</a>
                <?php } ?>
            </div>
            <div class="navbar-end">
                <?php if (!isset($user) or $user == null) { ?>
                    <a href="/register.php" class="navbar-item">Click here to register</a>
                    <a href="/login.php" class="navbar-item">Click here to login</a>
                <?php } else {?>
                    <a href="/logout.php" class="navbar-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
                <?php } ?>
            </div>
        </div>
    </nav>
