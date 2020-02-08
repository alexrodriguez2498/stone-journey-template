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

    @media(min-width:1300px){
        .navbar-collapse{
            margin-right: 15%;
        }
        #imagen{
            margin-left:15%;
        }

    }
    @media(max-width:1300px){
        #imagen{
            padding-left:1rem;
        }
        .navbar .collapse{
            padding-right:1rem;
        }
    }
</style>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-light white lighten-1 navbar-padding">

    <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/Logo.png" id="imagen" alt="">

    <div>
        <i class="fas fa-search" id="search_icon"></i>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
                aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-ellipsis-v"></i>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link nav-bold" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Properties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Milestones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Documents</a>
            </li>
        </ul>
        <div>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item avatar" style="margin-left: 20px;">
                    <a class="nav-link p-0" href="#">
                        <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/face.jpg"
                             class="rounded-circle z-depth-0"
                             alt="avatar image" height="35">
                        <b class="small-text">Ana Magalhaes</b>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--/.Navbar -->