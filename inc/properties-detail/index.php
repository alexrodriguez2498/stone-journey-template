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
    .images_container {
        display: grid;
        grid-template: 250px 250px/ repeat(6, 1fr);
        padding-top:1rem;
        grid-gap: 0 5px;
        padding-left:0;
        padding-right:0;
        margin-top:30px;
        margin-bottom:40px;
    }
    .images_container .image_content {
        background-image:url('https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }

</style>

<link href="http://allfont.es/allfont.css?fonts=roboto-light" rel="stylesheet" type="text/css"/>

<div class="row container box-center container-box py-3" style="margin-top: 2rem;">
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">

        <h2>Rossio 93 - Beauty in motion</h2>

        </section>
        <!--Section: Content-->
 
    </div>
  
</div>

<div class="row container box-center container-box py-3" style="margin-top: 2rem;">
    <div class="py-4 z-depth-1 col-md-2" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">

        <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg" alt="">

        </section>
        <!--Section: Content-->
 
    </div>
    <div class="py-4 z-depth-1 col-md-10" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">

        <p> <b>Architech:</b> Intergaup <br>
            <b>Adress:</b> Praca do Rossio, 93, Baixa, Lisboa, Portugal <br>
            <b>Location:</b> <u>www.googlemaps.com/rossio93</u></p>

        </section>
        <!--Section: Content-->

        </div>
</div>
<div class="row container box-center container-box py-3" style="margin-top: 2rem;">
  
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text"  style="width: 100%;">

        
        <p><b>About the property:</b> in the myriad lights and wonders of the city, the charming and centrally-located Rossio 93 is home to a shining jewel: a re-imagined classic.</p>

        </section>
        <!--Section: Content-->

        </div>
</div>
<div class="row container box-center container-box py-3" style="margin-top: 2rem;">
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text"  style="width: 100%;">

        <p style="line-height:2rem;">
            <b>Foreseen conclusion:</b> 2019 <br>
            <b>Uses:</b> Residential and Retail <br>
            <b>Website:</b> https://www.rossio93.pt <br>
            <b>Status:</b> In development
        </p>


        </section>
        <!--Section: Content-->
 
    </div>
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text"  style="width: 100%;">

        <p style="line-height:2rem;">
            <b>Estimated date for beginning of construction:</b> Sep 12, 2020 <br>
            <b>Estimated Delivery Date:</b> Sep 12, 2020 <br>
            <b>Number of Sellable Units:</b> 14
        </p>
      
        </section>
        <!--Section: Content-->

        </div>
</div>

<!--<div class="container">-->
<div class="row mt-4 container box-center container-box container-box half_container" style="margin-bottom: 10rem !important;">
    <div class="py-3 z-depth-1 col " id="background_2">
        <!-- <section class="px-md-2 mx-md-2 dark-grey-text"> -->
        <!-- <div class="background_2-content"> -->
        <!--Dropdown primary-->


        <div class="row justify-content-between" style="height:45px;">
            <div class="d-flex" style="margin-left: 1rem;">
               
                <ul class="second_nav">
                    <li id="tabGrid" class="nav-item nav-item-selected-custom" onclick="clickGrid()">
                        <a class="nav-link second_nav-item" href="#">Clients</a>
                    </li>
                    <li id="tabList" class="nav-item">
                        <a class="nav-link second_nav-item" href="#">Milestones</a>
                    </li>
                    <li id="tabList" class="nav-item">
                        <a class="nav-link second_nav-item" href="#">Documents</a>
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


    <div class=" mt-2 last_container_table w-100" style="width: 100%;" id="table">
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
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt=""></td>
                <td class="td_text">Ms. Layne Beachley</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rossio 93</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Ana Flores  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>

            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt=""></td>
                <td class="td_text">Mr. Gerry Lopez</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Vila Maria Pia</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">English</td>
                <td class="d-flex td_text justify-content-between">Jose Lamergo  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" alt=""></td>
                <td class="td_text">Mr. Rabbit Kekai</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rosa</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">American</td>
                <td class="d-flex td_text justify-content-between">Rita Rufia  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt=""></td>
                <td class="td_text">Mr. Kelly Slater</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Santa Justa 60</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Spanish</td>
                <td class="d-flex td_text justify-content-between">Danny Ocean  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt=""></td>
                <td class="td_text">Ms. Carissa Moore</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Jardim da Gloria</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Oscar Barreto  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
            </tr>
            
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt=""></td>
                <td class="td_text">Ms. Layne Beachley</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rossio 93</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Ana Flores  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>

            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt=""></td>
                <td class="td_text">Mr. Gerry Lopez</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Vila Maria Pia</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">English</td>
                <td class="d-flex td_text justify-content-between">Jose Lamergo  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" alt=""></td>
                <td class="td_text">Mr. Rabbit Kekai</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Rosa</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">American</td>
                <td class="d-flex td_text justify-content-between">Rita Rufia  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt=""></td>
                <td class="td_text">Mr. Kelly Slater</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Santa Justa 60</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Spanish</td>
                <td class="d-flex td_text justify-content-between">Danny Ocean  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
            </tr>
            <tr>
                <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt=""></td>
                <td class="td_text">Ms. Carissa Moore</td>
                <td class="td_text">email@email.com</td>
                <td class="td_text">Jardim da Gloria</td>
                <td class="td_text">+123 456 789</td>
                <td class="td_text">Portuguese</td>
                <td class="d-flex td_text justify-content-between"> Oscar Barreto  <div class="nav-item dropdown">
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
                <td><b></b></td>
               
                   
                        </ul>
                    </nav>

            </tr>
                
            </tbody>
           
        </table>
        <div class="table-footer">
        <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-sm pg-blue justify-content-end align-items-center">
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
                            <button type="button" class="btn button z-depth-1 add-button" style="margin-left:1rem;">CREATE PROPERTY </button>
    </div>
    </div>
    </div>
    <div class="container container-box box-center images_container">
    <div class="image_content">contenido #1</div>
    <div class="image_content">contenido #2</div>
    <div class="image_content">contenido #3</div>
    <div class="image_content">contenido #4</div>
    <div class="image_content">contenido #5</div>
    <div class="image_content">contenido #6</div>
    </div>


    




<?php get_footer(); ?>
