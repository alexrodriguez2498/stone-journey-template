<?php get_header(); ?>

<style>

    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

    #background_1 {
        /*height: 200px;*/
        /*display: flex;*/
        align-items: center;
        padding: 15px 15px;
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
        background-image: url("https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/P1_Quarto_white-scaled.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        /* background-opacity:0.5; */
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
    @media (min-width: 1440px) {
        .container-box {
            margin: auto 15%;
        }
    }

    @media (max-width: 650px) {
        #background_1 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            height: auto;
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
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
        padding: 8px 30px 10px 30px !important;

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
        padding: 10px 100px;
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

    .card-body {
        padding: 1rem;
    }

    .card-img-top {
        height: auto;
    }

    .col mb-4 {
        height: fit-content;
    }

    @media (max-width: 450px) {
        .card-title {
            font-size: 1rem !important;
        }

        .card-text {
            font-size: 0.75rem !important;
            line-height: initial;
        }

        #background_1 p {
            font-size: 1rem !important;
            line-height: initial;
        }

        .add-button {
            padding: 0.5rem 1rem !important;
        }
    }

    /* footer{
        position:fixed;
        width:100%;
    } */
    .middle-nav a {
        color: black;
    }

    .middle-nav .nav-space {
        padding: 0 100px;
    }

    .middle-nav {
        box-sizing: border-box !important;
    }

    .dropdown .dropdown-menu .dropdown-item:hover {
        background: #f9f8f6 !important;
        color: #000 !important;
        box-shadow: none;
    }

    @media (min-width: 900px) and (max-width: 995px) {
        .tittleCardCustom {
            font-size: 1.2rem !important;
        }
    }

    footer {
        width: 100%;
    }

    .nav-item-selected-custom {
        border-bottom: 1.5px solid #967c5c;
        height: fit-content;
        padding-bottom: 10px;
    }
    .last_container_table {
        border: 1px solid #dee2e6;
        background:#ffffff;
        padding: 1rem;
        padding-bottom: 0 !important;
    }
    .last_container_table table tbody tr td{
        padding-top:0.5rem;
        padding-bottom:0.5rem;
    }
  
    #seach {
        border-bottom: 1px solid #947956 !important;
        box-shadow: 0 1px 0 0 #947956 !important;
    }

    #seach:focus {
        border-bottom: 1px solid #947956 !important;
        box-shadow: 0 1px 0 0 #947956 !important;
    }
    .mobile-card-content strong{
        font-weight:900;
    }

</style>

<link href="http://allfont.es/allfont.css?fonts=roboto-light" rel="stylesheet" type="text/css"/>

<div class="row container-box" style="margin-top: 2rem;">
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" id="container__center" style="width: 100%;">

            <h3>Properties</h3>
            <p>From this section you will be able to create and manage your properties.</p>
            <div class="row  background_1-button">
                <button type="button" class="btn button z-depth-1 add-button" style="margin-left:1rem;">CREATE
                    PROPERTY
                </button>
            </div>

        </section>
        <!--Section: Content-->
 
    </div>
</div>

<!--<div class="container">-->
<div class="row mt-4 container-box half_container" style="margin-bottom: 10rem;">
    <div class="py-3 z-depth-1 col " id="background_2">
        <!-- <section class="px-md-2 mx-md-2 dark-grey-text"> -->
        <!-- <div class="background_2-content"> -->
        <!--Dropdown primary-->


        <div class="row justify-content-between" style="height:45px;">
            <div class="d-flex" style="margin-left: 1rem;">
                <p style="padding-top:10px;"><strong>Filter by</strong></p>
                <div class="dropdown" style="line-height: 2.3rem;">

                    <!--Trigger-->
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="padding-left: 5px; padding-top:14px;">
                    </button>

                    <!--Menu-->
                    <div class="dropdown-menu dropdown-menu-right  p-0">
                        <a class="dropdown-item">Proyect Status</a>
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Architech</a>
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Location</a>
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Name</a>
                    </div>
                </div>
                <ul class="second_nav">
                    <li id="tabGrid" class="nav-item nav-item-selected-custom" onclick="clickGrid()">
                        <a class="nav-link second_nav-item" href="#">Grid</a>
                    </li>
                    <li id="tabList" class="nav-item" onclick="clickTable()">
                        <a class="nav-link second_nav-item" href="#">List</a>
                    </li>

                </ul>
            </div>

            <!--/Dropdown primary-->
            <ul class="second_nav">

                <form class="form-inline">
                    <div class="md-form my-0" style="padding-bottom:16px;">
                        <input id="seach" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
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
    <div class="cards_container mt-2" style="width: 100%;" id="grid">
        <!-- Card -->
        <div class="card card-one">
            <div class="card-icon-title d-flex justify-content-between">
                <div class="card-title-right d-flex ">
                    <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" alt="">
                    <h4 class="tittleCardCustom">Rossio 93 </h4>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item">Edit Property</a>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>
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
            <div class="card-icon-title d-flex justify-content-between">
                <div class="card-title-right d-flex ">
                    <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt="">
                    <h4 class="tittleCardCustom">Vila Maria Pia</h4>
                </div>
                <div class="nav-item dropdown align-self-right">
                    <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item">Edit Property</a>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>
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
            <div class="card-icon-title d-flex justify-content-between">
                <div class="card-title-right d-flex ">
                    <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt="">
                    <h4 class="tittleCardCustom">Augusta 170</h4>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item">Edit Property</a>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>
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

    <div class=" d-none d-md-block mt-2 last_container_table" style="width: 100%;" id="table">
        <table class="table" style="margin-bottom: 0 !important;">
            <thead>
            <tr>
                <th scope="col"><b></b></th>
                <th scope="col"><b>PROPERTY</b></th>
                <th scope="col"><b>ARCHITECH</b></th>
                <th scope="col"><b>ADRESS</b></th>
                <th scope="col"><b>LOCATION</b></th>
                <th scope="col"><b>STATUS</b></th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt=""></td>
                <td class="td_text">Rossio</td>
                <td class="td_text">DNSJ Arc</td>
                <td class="td_text">Rossio</td>
                <td class="td_text">Lisboa</td>
                <td class="d-flex td_text justify-content-between"> On Development  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>

            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt=""></td>
                <td class="td_text">Vila Maria Pia</td>
                <td class="td_text">DNSJ Arc</td>
                <td class="td_text">Vila Maria Pia</td>
                <td class="td_text">Estpril</td>
                <td class="d-flex td_text justify-content-between"> On Development  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" alt=""></td>
                <td class="td_text">Augusta 170</td>
                <td class="td_text">DNSJ Arc</td>
                <td class="td_text">Augusta 170</td>
                <td class="td_text">Lisboa</td>
                <td class="d-flex td_text justify-content-between"> On Development  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt=""></td>
                <td class="td_text">Santa Isabel</td>
                <td class="td_text">DNSJ Arc</td>
                <td class="td_text">Santa Isabel</td>
                <td class="td_text">Lisboa</td>
                <td class="d-flex td_text justify-content-between"> On Development  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt=""></td>
                <td>Santa Justa</td>
                <td>DNSJ Arc</td>
                <td>Santa Justa</td>
                <td>Lisboa</td>
                <td class="d-flex td_text justify-content-between"> On Development  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
            </tr>
            <tr>
                <td><b></b></td>
                <td><b></b></td>
                <td><b></b></td>
                <td><b></b></td>
                <td><b></b></td>

                <td id="td-special-2 d-flex ">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-sm pg-blue justify-content-end">
                            <li class="page-item ">
                                <a class="page-link" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"style="padding-right:10px;"><a class="page-link"style="background:#947956a1;color:white;">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" style="background:#947956";>2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link">Next</a>
                            </li>
                        </ul>
                    </nav>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="container-box d-block d-md-none" >

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
                                                <!-- card content -->
            <div class="mobile-card-icon" style="padding:1rem; padding-top:1rem; padding-right:2rem;">
            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt="">
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><b>Rossio</b>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>
                
                <p class="card-text"style="margin:0;"> <strong>ARQCHITECH: </strong> DNSJ Arc <br>
                                    <strong>ADRESS: </strong> Rossio<br>
                                    <strong>LOCATION: </strong> Lisboa  <br>
                                    <strong>STATUS: </strong> On Development</p>
            </div>
    
        </div>
  
    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
                                         <!-- card content -->
         <div class="mobile-card-icon" style="padding:1rem; padding-top:1rem; padding-right:2rem;">
         <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt="">
        </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><b>Vila Maria Pia</b>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>
                
                <p class="card-text"style="margin:0;"> <strong>ARQCHITECH: </strong> DNSJ Arc <br>
                                    <strong>ADRESS: </strong> Vila Maria Pia<br>
                                    <strong>LOCATION: </strong> Estpril  <br>
                                    <strong>STATUS: </strong> On Development</p>
            </div>
    
        </div>
  
    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
                                                <!-- card content -->
        <div class="mobile-card-icon" style="padding:1rem; padding-top:1rem; padding-right:2rem;">
        <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" alt="">
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><b>Augusta 170</b>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>
                
                <p class="card-text"style="margin:0;"> <strong>ARQCHITECH: </strong> DNSJ Arc <br>
                                    <strong>ADRESS: </strong> Augusta 170<br>
                                    <strong>LOCATION: </strong> Lisboa  <br>
                                    <strong>STATUS: </strong> On Development</p>
            </div>
    
        </div>
  
    </div>
    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
                                                <!-- card content -->
         <div class="mobile-card-icon" style="padding:1rem; padding-top:1rem; padding-right:2rem;">
            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt="">
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><b>Santa Isable</b>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>
                
                <p class="card-text"style="margin:0;"> <strong>ARQCHITECH: </strong> DNSJ Arc <br>
                                    <strong>ADRESS: </strong> Santa Isabel<br>
                                    <strong>LOCATION: </strong> Lisboa  <br>
                                    <strong>STATUS: </strong> On Development</p>
            </div>
    
        </div>
  
    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
                                                <!-- card content -->   
         <div class="mobile-card-icon" style="padding:1rem; padding-top:1rem; padding-right:2rem;">
         <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt="">
         </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><b>Santa Justa</b>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>
                
                <p class="card-text"style="margin:0;"> <strong>ARQCHITECH: </strong> DNSJ Arc <br>
                                    <strong>ADRESS: </strong> Sanya Justa<br>
                                    <strong>LOCATION: </strong> Lisboa  <br>
                                    <strong>STATUS: </strong> On Development</p>
            </div>
    
        </div>
  
    </div>

<script>
    document.getElementById('table').style.display = 'none';

    function clickGrid() {
        document.getElementById('table').style.display = 'none';
        document.getElementById('grid').style.display = 'flex';


        document.getElementById('tabList').classList.remove("nav-item-selected-custom");
        document.getElementById('tabGrid').classList.add("nav-item-selected-custom");
    }

    function clickTable() {
        document.getElementById('grid').style.display = 'none';
        document.getElementById('table').style.display = 'flex';

        document.getElementById('tabGrid').classList.remove("nav-item-selected-custom");
        document.getElementById('tabList').classList.add("nav-item-selected-custom");
    }
</script>


<?php get_footer(); ?>
