<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>PHP Quick Screening Assessment</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/sticky-footer-navbar.css">

    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>

    <?php
    if (isset($this->js)) {
        foreach ($this->js as $js) {
            echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
        }
    }
    ?>

</head>

<body>
<?php Session::init(); ?>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">PHP Quick Screening Assessment</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-item nav-link active" href="<?php echo URL; ?>index">Index</a>
                </li>
                <li class="nav-item">
                    <?php if (Session::get('loggedIn') == true): ?>
                        <a class="nav-item nav-link" href="<?php echo URL; ?>campaigns/logout">Logout</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main role="main" class="container">