<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
<!--    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximun-scale=1.0; user-scalable=0;">-->
    <meta  content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"  name="viewport"/>
<!--    <meta http-equiv="x-ua-compatible" content="ie=edge">-->
    <title>
        <?php bloginfo( 'name'); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

    body{
        font-family:"roboto";
    }

    #imagen{
        /*height: 25px;*/
        width: 6rem;
    }

    #search_icon {
        color: #8c704a;
        padding-bottom:1rem;
    }

    .small-text {
        font-size: 0.75rem;
        font-weight: bold;
    }

    .navbar {
        padding: 1rem 1rem;
    }
    .navbar-collapse a{
        margin:0 20px;
    }
    .avatar a{
        margin:0;
    }
    .navbar .nav-bold{
        font-weight:bold;
    }

    html{
        height:100%;
    }

    @media(min-width:991px){
        #search_icon{
            display: none;
        }
    }

    .z-depth-1, .chip:active {
        -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.08), 0 2px 10px 0 rgba(0, 0, 0, 0.06) !important;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.08), 0 2px 10px 0 rgba(0, 0, 0, 0.06) !important;
    }
    .dropdown-item:hover{
        background:#f9f8f6!important;
        color: #000 !important;
        box-shadow: none;
    }
    .navbar .dropdown .dropdown-menu .dropdown-item:hover{
        background:#f9f8f6!important;
        color: #000 !important;
        box-shadow: none;
         }



    /*.box-center {*/
    /*    max-width: 1440px !important;*/
    /*    margin: auto !important;*/
    /*}*/
    /*.container-box {*/
    /*    margin-right: 2rem;*/
    /*    margin-left: 2rem;*/
    /*}*/

</style>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-light white lighten-1 navbar-padding z-depth-1 pb-0">

    <div class="container box-center">
        <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/Logo.png" id="imagen" style="padding-bottom:16px; alt=">

        <div style="margin-top: -0.3rem;">
            <i class="fas fa-search" id="search_icon"></i>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
                    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" style="color: #8c704a;"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav ml-auto">
                <?php
                if (strpos($_SERVER['REQUEST_URI'], 'main') !== false) {
                    echo '<li class="nav-item" style="border-bottom:1.5px solid #8f734e;">
                <a class="nav-link pb-24" style="color:#8f734e;" href="#">Dashboard</a>
            </li> ';
                } else {
                    echo '<li class="nav-item" >
                <a class="nav-link" style="padding-bottom:24px;" href="#">Dashboard</a>
            </li>';
                }
                ?>

                <?php
                if (strpos($_SERVER['REQUEST_URI'], 'properties') !== false) {
                    echo '<li class="nav-item" style="border-bottom:1.5px solid #8f734e;">
                <a class="nav-link pb-24" style="color:#8f734e;" href="#">Properties</a>
            </li> ';
                } else {
                    echo '<li class="nav-item" >
                <a class="nav-link" style="padding-bottom:24px;" href="#">Properties</a>
            </li>';
                }
                ?>

                <?php
                if (strpos($_SERVER['REQUEST_URI'], 'clients') !== false) {
                    echo '<li class="nav-item" style="border-bottom:1.5px solid #8f734e;">
                <a class="nav-link pb-24" style="color:#8f734e;" href="#">Clients</a>
            </li> ';
                } else {
                    echo '<li class="nav-item" >
                <a class="nav-link" style="padding-bottom:24px;" href="#">Clients</a>
            </li>';
                }
                ?>

                <?php
                if (strpos($_SERVER['REQUEST_URI'], 'milestones') !== false) {
                    echo '<li class="nav-item" style="border-bottom:1.5px solid #8f734e;">
                <a class="nav-link pb-24" style="color:#8f734e;" href="#">Milestones</a>
            </li> ';
                } else {
                    echo '<li class="nav-item" >
                <a class="nav-link" style="padding-bottom:24px;" href="#">Milestones</a>
            </li>';
                }
                ?>

                <?php
                if (strpos($_SERVER['REQUEST_URI'], 'documents') !== false) {
                    echo '<li class="nav-item" style="border-bottom:1.5px solid #8f734e;">
                <a class="nav-link pb-24" style="color:#8f734e;" href="#">Documents</a>
            </li> ';
                } else {
                    echo '<li class="nav-item" >
                <a class="nav-link" style="padding-bottom:24px;" href="#">Documents</a>
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
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" style="margin:0;" data-toggle="dropdown"
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