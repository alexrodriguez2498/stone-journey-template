<?php get_header(); ?>

<style>

    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

    #background_1 {
        /*height: 200px;*/
        /*display: flex;*/
        align-items: center;
        padding: 24px 30px;
    }

    #container__center h3 {
        font-size: 45px;
        font-weight: 400;
    }

    #container__center p {
        font-size: 22px;
    }

    .container-box {
        margin-right: 2rem;
        margin-left: 2rem;
    }

    body {
        background-color: #f4f1ee;
        font-family: "roboto";
    }

    @media (max-width: 425px) {
        .container-box {
            display: flex;
            flex-direction: column;
        }

        #background_3 {
            margin-left: 0;
        }

        #background_5 {
            margin-left: 0;
        }

        /*                                                                     revisar lo que esta encerrado */
        #background_1 h3 {
            font-size: 16px;
        }

        .container-box-2 {
            margin-top: 0;
        }
    }

    /*                                                                          revisar lo que esta encerrado */
    @media (min-width: 1300px) {
        .container-box {
            margin: auto 15%;
        }
    }

    @media (max-width: 650px) {
        #background_1 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            height: auto;
        }

        #background_1 h3 {
            font-size: 30px;
        }

        #background_1 p {
        }
    }

    #background_1 {
        background: white;
    }

    #background_2 {
        background: white;
        /*display: flex;*/
        align-items: center;
        /* padding-bottom:0! important; */
        justify-content: space-between;
        padding: 16px 30px 0px 30px !important;

    }

    #background_3 {
        background: white;

    }

    #background_4 {
        background: white;

    }

    #background_5 {
        background: white;

    }

    .button {
        color: white;
        background: #947956;
    }

    .second_nav {
        display: flex;
        list-style: none;
    }

    .second_nav .second_nav-item {
        color: black;
        font-weight: bold;
        padding: 10px 50px;
    }

    .second_nav .search {
        color: #9e9fa0;
        border-bottom: 1px solid #9e9fa0;
        padding-left: 100px;
    }

    .cards_container {
        display: flex;
        /*margin-top: 30px;*/
        justify-content: space-between;

    }

    .card-icon-title {
        display: flex;
        align-items: center;
        padding: 20px;
    }

    .card-icon-title h4 {
        padding-left: 10px;
        padding-top: 10px;
    }

    .card {
        margin: 20px;
    }

    .card-one {
        margin-left: 0 !important;
    }

    .card-three {
        margin-right: 0 !important;
    }

    @media (max-width: 910px) {
        .cards_container {
            flex-direction: column;
        }

        .second_nav {
            display: none;
        }

        .card {

        }

    }

    /* .background_1-button{
        display:flex;
    } */
    .cards_container .card h4 {
        font-weight: bold;
    }

    .cards_container .card .card-text strong {
        font-weight: bold;
        color: black;
    }

    #background_1 h4 {
        font-size: 52px;
    }

    #background_1 p {
        font-size: 24px;
        line-height: 30px;
    }

    .card .card-body .card-text {
        font-size: 16px;
    }

    .half_container {
        justify-content: center;
    }

    #dropdownMenu1 {
        box-shadow: 0 0 0 0;
        margin: 0;
        padding-top: 0;

    }

    @media (max-width: 915px) {
        .card {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
    }

</style>

<link href="http://allfont.es/allfont.css?fonts=roboto-light" rel="stylesheet" type="text/css"/>

<div class="row container-box" style="margin-top: 2rem;">
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" id="container__center" style="width: 100%;">

            <h3>Properties</h3>
            <p>From this section you will be able to create and manage your properties.</p>
            <div class="row justify-content-end background_1-button">
                <button type="button" class="btn button">CREATE PROPERTY</button>
            </div>

        </section>
        <!--Section: Content-->


    </div>
</div>

<!--<div class="container">-->
<div class="row mt-4 container-box half_container">
    <div class="py-3 z-depth-1 col " id="background_2">
        <!-- <section class="px-md-2 mx-md-2 dark-grey-text"> -->
        <!-- <div class="background_2-content"> -->
        <!--Dropdown primary-->

        <div class="row justify-content-between">
            <div style=" display: flex;">
                <p><strong>Filter by:</strong></p>
                <div class="dropdown" style="line-height: 2.3rem;">

                    <!--Trigger-->
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="padding-left: 1rem;"> Name
                    </button>

                    <!--Menu-->
                    <div class="dropdown-menu dropdown-primary">
                        <a class="dropdown-item" href="#">Name</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!--/Dropdown primary-->
            <ul class="second_nav">
                <li><a class="second_nav-item" href="#">Grid</a></li>
                <li><a class="second_nav-item" href="#">Map</a></li>
                <li><a class="second_nav-item" href="#">List</a></li>
                <li><a class="search" href="#">search</a></li>
            </ul>
        </div>

        <!-- </div> -->
        <!-- <form class="form-inline md-form form-sm mt-0">
        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
            aria-label="Search">
        </form> -->
        <!-- </div> -->

        <!-- </section> -->
    </div>
    <div class="cards_container mt-2" style="width: 100%;">
        <!-- Card -->
        <div class="card card-one">
            <div class="card-icon-title">
                <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" alt="">
                <h4>Rossio 93</h4>
            </div>
            <!-- Card image -->
            <img class="card-img-top" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/rossio_ima.jpg"
                 alt="Card image cap">

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>Beauty in Motion</a></h4>
                <!-- Text -->
                <p class="card-text"><strong>Proyect status:</strong> On development <br>
                    <strong>Architech:</strong> DNSJ. Arq <br>
                    <strong>Location:</strong> Lisboa</p>


            </div>

        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card">
            <div class="card-icon-title">
                <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt="">
                <h4>Vila Maria Pia</h4>
            </div>
            <!-- Card image -->
            <img class="card-img-top"
                 src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/VilaMAria_ima.jpg"
                 alt="Card image cap">

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>Majesty by the Sea</a></h4>
                <!-- Text -->
                <p class="card-text"><strong>Proyect status:</strong> On development <br>
                    <strong>Architech:</strong> DNSJ. Arq <br>
                    <strong>Location:</strong> Lisboa</p>


            </div>

        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card card-three">
            <div class="card-icon-title">
                <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt="">
                <h4>Augusta 170</h4>
            </div>
            <!-- Card image -->
            <img class="card-img-top"
                 src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/Aungusta170_ima.jpg"
                 alt="Card image cap">

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>Made by History</a></h4>
                <!-- Text -->
                <p class="card-text"><strong>Proyect status:</strong> On development <br>
                    <strong>Architech:</strong> DNSJ. Arq <br>
                    <strong>Location:</strong> Rua Augusta n° 170, Lisboa.</p>


            </div>

        </div>
        <!-- Card -->
    </div>


    <?php get_footer(); ?>
