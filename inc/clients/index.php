<?php get_header(); ?>

<style>

    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

    body {
        background-image: url("https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/P1_Quarto_white-scaled.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        /* background-opacity:0.5; */
        font-family: "roboto";
    }

    .container-box {
        margin-right: 2rem;
        margin-left: 2rem;
    }

    /* TOP SECTION */
    #background_1 {
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

    #background_1 {
        background: white;
    }

    #background_2 {
        background: white;
        align-items: center;
        justify-content: space-between;
        padding: 8px 30px 10px 30px !important;

    }

    #background_1 h4 {
        font-size: 52px;
    }

    #background_1 p {
        font-size: 24px;
        line-height: 30px;
    }

    #background_5 {
        background: white;

    }

    .button {
        color: white;
        background: #947956;
    }

    /* END OF TOP SECTION */


    /* MEDIA SECTION */

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

        #background_1 h3 {
            font-size: 16px;
        }
    }

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
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        #background_1 h3 {
            font-size: 30px;
        }
    }

    @media (max-width: 910px) {
        .second_nav {
            display: none;
        }
    }

    /* END OF MEDIA SECTION */

    /* MIDDLE NAV SECTION */
    #dropdownMenu1 {
        box-shadow: 0 0 0 0;
        margin: 0;
        padding-top: 0;

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

    .second_nav .second_nav-item-decoration {
        color: black;
        font-weight: bold;
        border-bottom: 1px solid black;
    }

    /* END OF MIDDLE NAV SECTION */

    /* CARDS SECTION */
    .card-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 0;
    }

    .card-text {
        font-size: 14px;
        line-height: 1.25rem;
    }

    .card-body {
        padding: 0.5rem;
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





    .card_custom {
        margin: 20px !important;
    }

    @media (max-width: 915px) {
        .card_custom {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
    }

    .second_nav {
        display: flex;
        list-style: none;
    }

    .second_nav_icon {
        display: none;
        padding: .5rem;
        color: #947956;
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

    @media (max-width: 470px) {
        #searchContainer {
            width: 40%;
            padding-left: 0;
        }
    }

    @media (max-width: 910px) {

        .second_nav {
            display: none;
        }

        .second_nav_icon {
            display: flex;
        }

    }

    @media (min-width: 911px) {

        .second_nav_icon {
            display: none !important;
        }

    }

    .half_container {
        justify-content: center;
    }

    .dropdown .dropdown-menu .dropdown-item:hover {
        background: #f9f8f6 !important;
        color: #000 !important;
        box-shadow: none;
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

    .icon_size_custom {
        font-size: 1.4rem !important;
        height: fit-content;
        line-height: inherit;
    }
    /* END OF CARDS SECTION */
</style>

<div class="row container box-center container-box py-3 background-none" style="margin-top: 2rem;">
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" id="container__center" style="width: 100%;">

            <h3>Clients</h3>
            <p>Find and manage your asigned clients, in a quick and easy way. Yo
            u can also create a new client.</p>
            <div class="row background_1-button">
                <button type="button" class="btn button z-depth-1 add-button">ADD CLIENT</button>
            </div>

        </section>

    </div>
</div>

<!--<div class="container">-->
<div class="row mt-4 container box-center container-box container-box half_container background-none" style="margin-bottom: 10rem !important;">
    <div class="py-3 z-depth-1 col " id="background_2">
  


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
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Proyect Status</a>
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
            <ul class="d-flex " id="searchContainer">
                <form class="form-inline d-none d-lg-block">
                    <div class="md-form my-0" style="padding-bottom:16px;">
                        <input id="seach" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
                <!--                    <i class="fas fa-th-large fa-2x second_nav_icon" style="padding: .5rem; color: #947956;"></i>-->
            </ul>

            <i id="iconGrid" class="fas fa-th-large fa-2x second_nav_icon icon_size_custom" onclick="clickGrid()"></i>
            <i id="iconTable" class="fas fa-list fa-2x second_nav_icon icon_size_custom" onclick="clickTable()"></i>

        </div>

     
    </div>
    <div class="cards_container mt-3" style="width: 100%;" id="grid">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-5">
            <div class="col mb-4">
                <div class="card h-100 z-depth-1">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title d-flex align-items-center justify-content-between"><strong>Sofia Muller</strong>
                            <div class="nav-item dropdown d-flex">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" style="padding-right: 0 !important;"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                        </h4>
                        <!--Text-->
                        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <div class="card h-100 z-depth-1">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title d-flex align-items-center justify-content-between"><strong>Ana Peter</strong>
                            <div class="nav-item dropdown d-flex">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" style="padding-right: 0 !important;"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                        </h4>
                        <!--Text-->
                        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <div class="card h-100 z-depth-1">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title d-flex align-items-center justify-content-between"><strong>Carlos Newman</strong>
                            <div class="nav-item dropdown d-flex">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" style="padding-right: 0 !important;"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                        </h4>
                        <!--Text-->
                        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <div class="card h-100 z-depth-1">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title d-flex align-items-center justify-content-between"><strong>Maria Jones</strong>
                            <div class="nav-item dropdown d-flex">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" style="padding-right: 0 !important;"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                        </h4>
                        <!--Text-->
                        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <div class="card h-100 z-depth-1">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title d-flex align-items-center justify-content-between"><strong>Hans Vollenwider</strong>
                            <div class="nav-item dropdown d-flex">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" style="padding-right: 0 !important;"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                        </h4>
                        <!--Text-->
                        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <div class="card h-100 z-depth-1">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title d-flex align-items-center justify-content-between"><strong>Arthur Les Jardins</strong>
                            <div class="nav-item dropdown d-flex">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" style="padding-right: 0 !important;"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                        </h4>
                        <!--Text-->
                        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <div class="card h-100 z-depth-1">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title d-flex align-items-center justify-content-between"><strong>Peter Thomas</strong>
                            <div class="nav-item dropdown d-flex">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" style="padding-right: 0 !important;"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                        </h4>
                        <!--Text-->
                        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <div class="card h-100 z-depth-1">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title d-flex align-items-center justify-content-between"><strong>Cristian ALder</strong>
                            <div class="nav-item dropdown d-flex">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" style="padding-right: 0 !important;"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                        </h4>
                        <!--Text-->
                        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <div class="card h-100 z-depth-1">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title d-flex align-items-center justify-content-between"><strong>Federico Da Silva</strong>
                            <div class="nav-item dropdown d-flex">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" style="padding-right: 0 !important;"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                        </h4>
                        <!--Text-->
                        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <div class="card h-100 z-depth-1">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title d-flex align-items-center justify-content-between"><strong>Carlota De la Fuente</strong>
                            <div class="nav-item dropdown d-flex">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" style="padding-right: 0 !important;"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                        </h4>
                        <!--Text-->
                        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

                    </div>

                </div>
                <!-- Card -->
            </div>
        </div>

    </div>

    <div class=" d-none d-md-block mt-3 last_container_table w-100" style="width: 100%;" id="table">
        <table class="table" style="margin-bottom: 0 !important;">
            <thead>
            <tr>
                <th scope="col"><b></b></th>
                <th scope="col"><b>NAME</b></th>
                <th scope="col"><b>EMAIL</b></th>
                <th scope="col"><b>PROPERTY</b></th>
                <th scope="col"><b>PHONE</b></th>
                <th scope="col"><b>NATIONALITY</b></th>
                <th scope="col"><b>LEGAL REPRESENTATIVE</b></th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                                         alt=""></td>
                <td class="td_text">Ms. Layne Beachley</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rossio 93</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Ana Flores
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>

            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Gerry Lopez</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Vila Maria Pia</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">English</td>
                <td class="d-flex td_text justify-content-between">Jose Lamergo
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Rabbit Kekai</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rosa</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">American</td>
                <td class="d-flex td_text justify-content-between">Rita Rufia
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Kelly Slater</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Santa Justa 60</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Spanish</td>
                <td class="d-flex td_text justify-content-between">Danny Ocean
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                                         alt=""></td>
                <td class="td_text">Ms. Carissa Moore</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Jardim da Gloria</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Oscar Barreto
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>

            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                                         alt=""></td>
                <td class="td_text">Ms. Layne Beachley</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rossio 93</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Ana Flores
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>

            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Gerry Lopez</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Vila Maria Pia</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">English</td>
                <td class="d-flex td_text justify-content-between">Jose Lamergo
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Rabbit Kekai</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rosa</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">American</td>
                <td class="d-flex td_text justify-content-between">Rita Rufia
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Kelly Slater</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Santa Justa 60</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Spanish</td>
                <td class="d-flex td_text justify-content-between">Danny Ocean
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                                         alt=""></td>
                <td class="td_text">Ms. Carissa Moore</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Jardim da Gloria</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Oscar Barreto
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                                         alt=""></td>
                <td class="td_text">Ms. Layne Beachley</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rossio 93</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Ana Flores
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>

            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Gerry Lopez</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Vila Maria Pia</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">English</td>
                <td class="d-flex td_text justify-content-between">Jose Lamergo
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Rabbit Kekai</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rosa</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">American</td>
                <td class="d-flex td_text justify-content-between">Rita Rufia
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Kelly Slater</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Santa Justa 60</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Spanish</td>
                <td class="d-flex td_text justify-content-between">Danny Ocean
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                                         alt=""></td>
                <td class="td_text">Ms. Carissa Moore</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Jardim da Gloria</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Oscar Barreto
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>

            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                                         alt=""></td>
                <td class="td_text">Ms. Layne Beachley</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rossio 93</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Ana Flores
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>

            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Gerry Lopez</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Vila Maria Pia</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">English</td>
                <td class="d-flex td_text justify-content-between">Jose Lamergo
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Rabbit Kekai</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rosa</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">American</td>
                <td class="d-flex td_text justify-content-between">Rita Rufia
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                                         alt=""></td>
                <td class="td_text">Mr. Kelly Slater</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Santa Justa 60</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Spanish</td>
                <td class="d-flex td_text justify-content-between">Danny Ocean
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                                         alt=""></td>
                <td class="td_text">Ms. Carissa Moore</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Jardim da Gloria</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Oscar Barreto
                    <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                </td>
            </tr>
            <tr>
                <td><b></b></td>
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

    <div class="d-block d-md-none w-100" id="table2">
        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                    <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                         alt="">
                </div>
                <div class="mobile-card-content" style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Ms. Layne Beachley</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                    </h5>

                    <p class="card-text" style="margin:0;">

                        +123 456 789<br>
                        Rossio 93 <br>
                        email@email.com<br>

                    </p>
                </div>

            </div>
        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                    <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                         alt="">
                </div>
                <div class="mobile-card-content" style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Mr. Gerry Lopez</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                    </h5>

                    <p class="card-text" style="margin:0;">

                        +123 456 789<br>
                        Vila Maria Pia <br>
                        email@email.com<br>

                    </p>
                </div>

            </div>
        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                    <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg"
                         alt="">
                </div>
                <div class="mobile-card-content" style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Mr. Rabbit Kekai</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                    </h5>

                    <p class="card-text" style="margin:0;">

                        +123 456 789<br>
                        Rosa <br>
                        email@email.com<br>

                    </p>
                </div>
            </div>
        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                    <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                         alt="">
                </div>
                <div class="mobile-card-content" style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Mr. Kelly Slater</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                    </h5>

                    <p class="card-text" style="margin:0;">

                        +123 456 789<br>
                        Santa Justa 60 <br>
                        email@email.com<br>

                    </p>
                </div>

            </div>
        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                    <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                         alt="">
                </div>
                <div class="mobile-card-content" style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Ms. Carissa Moore</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                    </h5>

                    <p class="card-text" style="margin:0;">

                        +123 456 789<br>
                        Jardim da Gloria <br>
                        email@email.com<br>

                    </p>
                </div>

            </div>

        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                    <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                         alt="">
                </div>
                <div class="mobile-card-content" style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Ms. Layne Beachley</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                    </h5>

                    <p class="card-text" style="margin:0;">

                        +123 456 789<br>
                        Rossio 93 <br>
                        email@email.com<br>

                    </p>
                </div>

            </div>
        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                    <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                         alt="">
                </div>
                <div class="mobile-card-content" style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Mr. Gerry Lopez</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                    </h5>

                    <p class="card-text" style="margin:0;">

                        +123 456 789<br>
                        Vila Maria Pia <br>
                        email@email.com<br>

                    </p>
                </div>

            </div>
        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                    <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg"
                         alt="">
                </div>
                <div class="mobile-card-content" style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Mr. Rabbit Kekai</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                    </h5>

                    <p class="card-text" style="margin:0;">

                        +123 456 789<br>
                        Rosa <br>
                        email@email.com<br>

                    </p>
                </div>
            </div>
        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                    <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                         alt="">
                </div>
                <div class="mobile-card-content" style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Mr. Kelly Slater </b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                    </h5>

                    <p class="card-text" style="margin:0;">

                        +123 456 789<br>
                        Santa Justa 60 <br>
                        email@email.com<br>

                    </p>
                </div>

            </div>
        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="    padding: 0.5rem 1rem 1rem;">
                    <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg"
                         alt="">
                </div>
                <div class="mobile-card-content" style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b> Ms. Carissa Moore </b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                    </h5>

                    <p class="card-text" style="margin:0;">

                        +123 456 789<br>
                        Jardim da Gloria <br>
                        email@email.com<br>

                    </p>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
    document.getElementById('table').style.cssText = 'display:none !important';
    document.getElementById('table2').style.cssText = 'display:none !important';
    document.getElementById('iconGrid').style.cssText = 'display:none !important';

    function clickGrid() {
        document.getElementById('table').style.cssText = 'display:none !important';
        document.getElementById('table2').style.cssText = 'display:none !important';
        document.getElementById('iconGrid').style.cssText = 'display:none !important';
        document.getElementById('grid').style.display = 'flex';
        document.getElementById('iconTable').style.display = 'flex';


        document.getElementById('tabList').classList.remove("nav-item-selected-custom");
        document.getElementById('tabGrid').classList.add("nav-item-selected-custom");
    }

    function clickTable() {
        document.getElementById('grid').style.display = 'none';
        document.getElementById('iconTable').style.display = 'none';
        document.getElementById('table').style.display = 'flex';
        document.getElementById('table2').style.display = 'flex';
        document.getElementById('iconGrid').style.display = 'flex';

        document.getElementById('tabGrid').classList.remove("nav-item-selected-custom");
        document.getElementById('tabList').classList.add("nav-item-selected-custom");
    }
</script>

<?php get_footer(); ?>
