<?php $user = getUser(); ?>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-calendar@1.3.0/dist/bulma-calendar.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-item" href="/index.php">
                Home
            </a>
        </div>
        <div class="navbar-menu">
            <?php if (isset($user) and $user != null) { ?>
                <a href="add.php" class="navbar-item">Add news</a>
            <?php } ?>
            <?php  global $showSearch; if (isset($showSearch)) { ?>
            <form onsubmit="getNews()" class="navbar-item is-expanded is-marginless">
                <div class="field has-addons column is-paddingless">
                    <div class="has-icons-left control is-expanded">
                        <input id="category" class="input" type="text" placeholder="Filter by category">
                        <span class="icon is-small is-left"><i class="fas fa-search"></i></span>
                    </div>
                    <div class="control has-icons-left">
                        <input id="dateFilter" class="input date" type="text" title="Date Filter" placeholder="When">
                        <span class="icon is-small is-left"><i class="fas fa-calendar"></i></span>

                    </div>
                    <div class="control">
                        <button type="submit" class="button is-primary">
                            <span>Search</span>
                        </button>
                    </div>
                </div>
            </form>
            <?php } ?>
            <div class="navbar-end">
                <?php if (!isset($user) or $user == null) { ?>
                    <a href="/register.php" class="navbar-item">Click here to register</a>
                    <a href="/login.php" class="navbar-item">Click here to login</a>
                <?php } else { ?>
                    <a href="/logout.php" class="navbar-item">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span>Logout</span>
                    </a>
                <?php } ?>
            </div>

        </div>
    </nav>
    <br>
    <?php if (isset($_SESSION['errors'])) {
        foreach ($_SESSION['errors'] as $error) {
            echo '<div class="notification is-danger"><button class="delete"></button>' . $error . '</div>';
        }
        unset($_SESSION['errors']);
    } ?>

    <?php if (isset($_SESSION['messages'])) {
        foreach ($_SESSION['messages'] as $message) {
            echo '<div class="notification is-success"><button class="delete"></button>' . $message . '</div>';
        }
        unset($_SESSION['messages']);
    } ?>
    <div class="columns is-centered">
