<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" name="viewport"/>
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>

    <link href="http://allfont.es/allfont.css?fonts=roboto-light" rel="stylesheet" type="text/css"/>
</head>
<body>

<style>

    #imagen {
        /*height: 25px;*/
        width: 6rem;
    }

    .small-text {
        font-size: 0.75rem;
        font-weight: bold;
    }

    .navbar {
        padding: 1rem 1rem;
    }

    .navbar-collapse a {
        margin: 0 20px;
    }

    .avatar a {
        margin: 0;
    }

    .navbar .nav-bold {
        font-weight: bold;
    }

</style>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-light white lighten-1 navbar-padding z-depth-1 pb-0">

    <div class="container box-center">
        <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/Logo.png" id="imagen" class="pb"
             style="padding-bottom:16px; alt=">

        <div style="margin-top: -0.3rem;">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-555"
                    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" style="color: #8c704a;"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav ml-auto">
                <?php
                if (strpos($_SERVER['REQUEST_URI'], 'main') !== false) {
                    echo '<li class="nav-item" style="border-bottom:1.5px solid #8f734e;">
                <a class="nav-link pb-24" style="color:#8f734e;" href="main">Dashboard</a>
            </li> ';
                } else {
                    echo '<li class="nav-item" >
                <a class="nav-link" style="padding-bottom:24px;" href="main">Dashboard</a>
            </li>';
                }
                ?>

                <?php
                if (strpos($_SERVER['REQUEST_URI'], 'properties') !== false) {
                    echo '<li class="nav-item" style="border-bottom:1.5px solid #8f734e;">
                <a class="nav-link pb-24" style="color:#8f734e;" href="properties">Properties</a>
            </li> ';
                } else {
                    echo '<li class="nav-item" >
                <a class="nav-link" style="padding-bottom:24px;" href="properties">Properties</a>
            </li>';
                }
                ?>

                <?php
                if (strpos($_SERVER['REQUEST_URI'], 'clients') !== false) {
                    echo '<li class="nav-item" style="border-bottom:1.5px solid #8f734e;">
                <a class="nav-link pb-24" style="color:#8f734e;" href="clients">Clients</a>
            </li> ';
                } else {
                    echo '<li class="nav-item" >
                <a class="nav-link" style="padding-bottom:24px;" href="clients">Clients</a>
            </li>';
                }
                ?>

                <?php
                if (strpos($_SERVER['REQUEST_URI'], 'milestones') !== false) {
                    echo '<li class="nav-item" style="border-bottom:1.5px solid #8f734e;">
                <a class="nav-link pb-24" style="color:#8f734e;" href="milestones">Milestones</a>
            </li> ';
                } else {
                    echo '<li class="nav-item" >
                <a class="nav-link" style="padding-bottom:24px;" href="milestones">Milestones</a>
            </li>';
                }
                ?>

                <?php
                if (strpos($_SERVER['REQUEST_URI'], 'documents') !== false) {
                    echo '<li class="nav-item" style="border-bottom:1.5px solid #8f734e;">
                <a class="nav-link pb-24" style="color:#8f734e;" href="documents">Documents</a>
            </li> ';
                } else {
                    echo '<li class="nav-item" >
                <a class="nav-link" style="padding-bottom:24px;" href="documents">Documents</a>
            </li>';
                }
                ?>
            </ul>
            <div>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item avatar" style="margin-left: 20px; padding-bottom:16px;">
                        <a class="nav-link p-0" href="#">
                            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/face.jpg"
                                 class="rounded-circle z-depth-0"
                                 alt="avatar image" height="35">
                            <b class="small-text">Ana Magalhaes</b>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" style="margin:0;"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</nav>
<!--/.Navbar -->