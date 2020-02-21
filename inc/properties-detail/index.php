<?php get_header(); ?>

<style>

    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

    #background_1 {

        align-items: center;
        padding: 15px 15px;
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

    #background_2 {
        padding: 8px 30px 10px 30px !important;
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

    .card {
        margin: 20px;
    }

    @media (max-width: 938px) {

        .second_nav .second_nav-item {
            display: none;
        }
        .cards_container{
            flex-direction:column;
        }
    }

    #background_1 p {
        font-size: 1.43rem;
        line-height: 30px;
    }

    .card .card-body .card-text {
        font-size: 1rem;
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
        background: #ffffff;
        padding: 1rem;
        padding-bottom: 0 !important;
    }

    .last_container_table table tbody tr td {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    #seach {
        border-bottom: 1px solid #947956 !important;
        box-shadow: 0 1px 0 0 #947956 !important;
    }

    #seach:focus {
        border-bottom: 1px solid #947956 !important;
        box-shadow: 0 1px 0 0 #947956 !important;
    }

    .images_container {
        display: grid;
        grid-template: 250px / repeat(6, 1fr);
        padding-top: 1rem;
        grid-gap: 0 5px;
        padding-left: 0;
        padding-right: 0;
        margin-top: 30px;
        margin-bottom: 40px;
    }

    .images_container .image_content {
        background-image: url('https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    b {
        font-weight: bold;
        color:black;
    }
    .cards_container {
        display: flex;
        /*margin-top: 30px;*/
        justify-content: space-between;
    }
    .card-footer{
        justify-content:space-between;
        background:#947956;
    
    }
    .card-footer div{
        color:white;
    }
</style>

<div class="row container box-center container-box py-3 d-flex"
     style="margin-top: 1rem !important; border-bottom: 2px solid #8c6f49; padding-bottom: .5rem !important;">

    <section class="px-md-2 mx-md-2 dark-grey-text w-100">
        <h3 class="h3">Rossio 93 - Beauty in motion</h3>
    </section>
</div>

<div class="row container box-center container-box d-flex">

    <div class="row w-100" style="margin-top: 1rem;">
        <div class="col-sm-2 pb-0" id="background_1">


            <!--Section: Content-->
            <section class="px-md-2 mx-md-2 dark-grey-text w-100">

                <img class="w-100" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg"
                     alt="">

            </section>
            <!--Section: Content-->

        </div>
        <div class="col-sm-10 border-bottom pb-0  d-flex" id="background_1">


            <!--Section: Content-->


            <p style="line-height:3rem;"><b>Architech:</b> Intergaup. <br>
                <b>Adress:</b> Praca do Rossio, 93, Baixa, Lisboa, Portugal <br>
                <b>Location:</b> <u>www.googlemaps.com/rossio93</u></p>


            <!--Section: Content-->

        </div>
    </div>
</div>
<div class="row container box-center container-box" style="margin-top: 2rem;">

    <div class=" col pb-0 pt-5" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">


            <p class="border-bottom pb-4"><b>About the property:</b> in the myriad lights and wonders of the city, the
                charming and centrally-located Rossio 93 is home to a shining jewel: a re-imagined classic.</p>

        </section>
        <!--Section: Content-->

    </div>
</div>
<div class="row container box-center container-box " style="margin-top: 2rem;">
    <div class=" col-sm-12 col-md-6 pt-0" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">

            <p style="line-height:3rem;">
                <b>Foreseen conclusion:</b> 2019 <br>
                <b>Uses:</b> Residential and Retail <br>
                <b>Website:</b> https://www.rossio93.pt <br>
                <b>Status:</b> In development
            </p>


        </section>
        <!--Section: Content-->

    </div>
    <div class="col-sm-12 col-md-6 pt-0" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">

            <p style="line-height:3rem;">
                <b>Estimated date for beginning of construction:</b> Sep 12, 2020 <br>
                <b>Estimated Delivery Date:</b> Sep 12, 2020 <br>
                <b>Number of Sellable Units:</b> 14
            </p>

        </section>
        <!--Section: Content-->

    </div>

</div>


<!--<div class="container">-->
<div class="row mt-4 container box-center container-box container-box half_container"
     style="padding:0; margin-top: 1.5rem !important;">
    <div class="py-3  col " id="background_2">


        <div class="row justify-content-between" style="height:45px;">
            <div class="d-flex" style="margin-left: 1rem;">

                <ul class="second_nav">
                    <p style="padding-top:10px;"><b>Filter by</b></p>
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
                    <li id="tabGrid" class="nav-item nav-item-selected-custom">
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
                        <input id="seach" class="form-control mr-sm-2" type="text" placeholder="Search"
                               aria-label="Search">
                    </div>
                </form>
            </ul>
        </div>


        <!-- </section> -->
    </div>
</div>
<div class=" container container-box box-center mt-2 last_container_table w-100 d-none d-md-block"
     style="width: 100%; margin-top: .5rem !important;" id="table">
    <table class="table" style="margin-bottom: 0 !important;">
        <thead>
        <tr>
            <th scope="col"><b></b></th>
            <th scope="col"><b>NAME</b></th>
            <th scope="col"><b>PROPERTY</b></th>
            <th scope="col"><b>OWNER</b></th>
            <th scope="col"><b>ADDRESSEE</b></th>
            <th scope="col"><b>UNIT</b></th>
            <th scope="col"><b>CATEGORY</b>
            <th scope="col"><b>DATE</b>
            <th scope="col"><b></b></th>
        </th>


        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                                     alt=""></td>
            <td class="td_text">Payment Summons</td>
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">  
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>            
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">   
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>        
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item">Edit Property</a>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
            </td>
       
        <tr>
            <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"
                                     alt=""></td>
            <td class="td_text">Payment Summons</td>
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">  
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>            
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">   
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>        
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td class="td_text">Rossio</td>
            <td class="td_text">Private</td>
            <td class="td_text">Ana Humble</td>
            <td class="td_text">A1</td>
            <td class="td_text">General</td>
            <td class="td_text">20/02/2020</td>
            <td class="d-flex td_text align-items-center justify-content-end">
                <div class="footer-details-2 ">
                    5   
                    <i class="fas fa-file-signature"></i>
                    2
                    <i class="fas fa-file-pdf"></i>
                </div>
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
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>

        </tr>


        </tbody>

    </table>
    <div class="table-footer d-flex justify-content-end align-items-center">
      
        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-sm pg-blue ">
                <li class="page-item ">
                    <a class="page-link" tabindex="-1">Previous</a>
                </li>
                <li class="page-item" style="padding-right:10px;"><a class="page-link"
                                                                     style="background:#947956a1;color:white;">1</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" style="background:#947956" ;>2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item ">
                    <a class="page-link">Next</a>
                </li>
            </ul>
        </nav>
    </div>
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

                                                               <!-- documents-table-container -->
<div class="container container-box box-center p-0">
    <div class="container d-none d-md-block" id="last_container"style="background:white; padding-top:1rem; margin-top:2rem;     margin-left: 0; margin-right: 0; max-width: 100%; -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><b></b></th>
                <th scope="col"><b>Name</b></th>
                <th scope="col"><b>Adressee</b></th>
                <th scope="col"><b>Milestone</b></th>
                <th scope="col"><b>Category</b></th>
                <th scope="col"><b>Date</b></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="td_icon"><i class="fas fa-file-invoice-dollar fa-2x"></i></td>
                <td>Payment Summons</td>
                <td>Rossio</td>
                <td>Payment Summons</td>
                <td>Financial</td>
                <td>20/02/2020</td>

            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-file-signature fa-2x"></i></td>
                <td>Promissory Contract Payment</td>
                <td>Rossio</td>
                <td>Promissory Contract Payment</td>
                <td>Legal</td>
                <td>20/02/2020</td>
            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-file-invoice fa-2x"></i></td>
                <td>Reservation Fee Reinforcement</td>
                <td>Rossio</td>
                <td>Reservation Fee Reinforcement</td>
                <td>Financial</td>
                <td>20/02/2020</td>
            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-file-image fa-2x"></i></td>
                <td>Reservation Form</td>
                <td>Rossio</td>
                <td>Reservation Form</td>
                <td>Legal</td>
                <td>20/02/2020</td>
            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-images fa-2x"></i></td>
                <td>Welcome letter</td>
                <td>Rossio, Ana Humble</td>
                <td>Welcome letter</td>
                <td>General</td>
                <td>20/02/2020</td>
            </tr>
        

            </tbody>
        </table>
    </div>

    <div class="container d-block d-md-none" id="ultimate_container" style="background:transparemt; padding-top:1rem;     margin-left: 0; margin-right: 0; max-width: 100%; padding-left: 0;
        padding-right: 0;">

        <div class="card ">
            <div class="card-body d-flex" style="padding:1rem;">
                                                    <!-- card content -->
                <div class="mobile-card-icon" style="padding:1rem; padding-top:1rem; padding-right:2rem;">
                    <i class="fas fa-file-invoice-dollar fa-3x"></i>
                </div>
                <div class="mobile-card-content"style="width:100%;">
                    <h5 class="card-title"><b>Payment Summons</b> <i class="fas fa-ellipsis-v"></i></h5>
                    <p class="card-text"style="margin:0;"> <b>20/02/2020</b> <br>Rossio <br>
                                        Payment Summons <br>
                                        Fiancial</p>
                </div>
        
            </div>
    
        </div>

        <div class="card ">
            <div class="card-body d-flex" style="padding:1rem;">
                                            <!-- card content -->
                <div class="mobile-card-icon" style="padding:1rem; padding-top:1rem; padding-right:2rem;">
                    <i class="fas fa-file-signature fa-3x"></i>
                </div>
                <div class="mobile-card-content"style="width:100%;">
                    <h5 class="card-title"><b>Promissory Contract Payment</b> <i class="fas fa-ellipsis-v"></i></h5>
                    <p class="card-text"style="margin:0;"><b>20/02/2020</b> <br>Rossio <br>
                                        Payment Summons <br>
                                        Fiancial  </p>
                </div>
        
            </div>

        </div>

        <div class="card ">
            <div class="card-body d-flex" style="padding:1rem;">
                                                    <!-- card content -->
                <div class="mobile-card-icon" style="padding:1rem; padding-top:1rem; padding-right:2rem;">
                    <i class="fas fa-file-invoice fa-3x"></i>
                </div>
                <div class="mobile-card-content"style="width:100%;">
                    <h5 class="card-title"><b>Reservation Fee Reinforcement</b> <i class="fas fa-ellipsis-v"></i></h5>
                    <p class="card-text"style="margin:0;"><b>20/02/2020</b> <br>Rossio <br>
                                        Payment Summons <br>
                                        Fiancial</p>
                </div>
            
            </div>

        </div>
    
        <div class="card ">
            <div class="card-body d-flex" style="padding:1rem;">
                                                    <!-- card content -->
                <div class="mobile-card-icon" style="padding:1rem; padding-top:1rem; padding-right:2rem;">
                    <i class="fas fa-file-image fa-3x"></i>
                </div>
                <div class="mobile-card-content"style="width:100%;">
                    <h5 class="card-title"><b>Reservation Form</b> <i class="fas fa-ellipsis-v"></i></h5>
                    <p class="card-text"style="margin:0;"><b>20/02/2020</b> <br>Rossio <br>
                                        Payment Summons <br>
                                        Fiancial  </p>
                </div>
            
            </div>

        </div>

        <div class="card ">
            <div class="card-body d-flex" style="padding:1rem;">
                                                    <!-- card content -->
                <div class="mobile-card-icon" style="padding:1rem; padding-top:1rem; padding-right:2rem;">
                    <i class="fas fa-images fa-3x"></i>
                </div>
                <div class="mobile-card-content"style="width:100%;">
                    <h5 class="card-title"><b>Reservation Form</b> <i class="fas fa-ellipsis-v"></i></h5>
                    <p class="card-text"style="margin:0;"><b>20/02/2020</b> <br>Rossio <br>
                                        Payment Summons <br>
                                        Fiancial</p>
                </div>
                
            </div>

        </div>

    </div>
</div>
                                                                  <!-- milestones-cards-container -->
    <div class="container container-box box-center">
    <div class="cards_container mt-2" style="width: 100%; margin-top:1.5rem!important;">
        <!-- Card -->
        <div class="card card-one">
           
            <!-- Card image -->
            <img class="card-img-top" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/rossio_ima.jpg"
                 alt="Card image cap">

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>Welcome letter</a></h4>
                <!-- Text -->
                <p class="card-text"><b>Property:</b> Rossio <br>
                    <b>Adressee:</b> Ana Humble <br>
                    <b>Unit:</b> A1 <br>
                    <b>Category:</b> General</p>


            </div>
            <div class="card-footer text-muted d-flex mt-4">
            <div class="footer-details-1">
            16/06/2020    
            </div>

            <div class="footer-details-2 ">
            5   
            <i class="fas fa-file-signature"></i>
            2
            <i class="fas fa-file-pdf"></i>
            </div>
            </div>
            

        </div>
        
        <!-- Card -->
        <!-- Card -->
        <div class="card">
            
            <!-- Card image -->
            <img class="card-img-top"
                 src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/VilaMAria_ima.jpg"
                 alt="Card image cap">

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>Promissory Contract</a></h4>
                <!-- Text -->
                <p class="card-text"><b>Property:</b> Rossio <br>
                    <b>Adressee:</b> Ana Humble <br>
                    <b>Unit:</b> A1 <br>
                    <b>Category:</b> General</p>


            </div>
             <!-- Card footer -->
            <div class="card-footer text-muted d-flex mt-4">
            <div class="footer-details-1">
            16/06/2020    
            </div>

            <div class="footer-details-2 ">
            5   
            <i class="fas fa-file-signature"></i>
            2
            <i class="fas fa-file-pdf"></i>
            </div>
            </div>
            

        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card card-three">
           
            <!-- Card image -->
            <img class="card-img-top"
                 src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/Aungusta170_ima.jpg"
                 alt="Card image cap">

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>Final Floor Plan 1A</a></h4>
                <!-- Text -->
                <p class="card-text"><b>Property:</b> Rossio <br>
                    <b>Adressee:</b> Ana Humble <br>
                    <b>Unit:</b> A1 <br>
                    <b>Category:</b> General</p>


            </div>
            <div class="card-footer text-muted d-flex mt-4">
            <div class="footer-details-1">
            16/06/2020    
            </div>

            <div class="footer-details-2 ">
            5   
            <i class="fas fa-file-signature"></i>
            2
            <i class="fas fa-file-pdf"></i>
            </div>
            </div>
            

        </div>

        </div>
        
        <!-- Card -->
    </div>
    </div>
                                                                  <!--/ milestones-cards-container -->
<!--<div class="container container-box box-center "-->
<!--     style="margin-bottom: 10rem !important;     margin-top: 2rem !important;">-->
<!--    <div class="mdb-lightbox">-->
<!---->
<!--        <figure class="col-sm-6 col-md-2">-->
<!--            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg" alt="placeholder"-->
<!--                 class="img-fluid">-->
<!--            </a>-->
<!--        </figure>-->
<!---->
<!--        <figure class="col-sm-6 col-md-2">-->
<!--            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg" alt="placeholder"-->
<!--                 class="img-fluid"/>-->
<!--            </a>-->
<!--        </figure>-->
<!---->
<!--        <figure class="col-sm-6 col-md-2">-->
<!--            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg" alt="placeholder"-->
<!--                 class="img-fluid"/>-->
<!--            </a>-->
<!--        </figure>-->
<!---->
<!--        <figure class="col-sm-6 col-md-2">-->
<!--            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg" alt="placeholder"-->
<!--                 class="img-fluid"/>-->
<!--            </a>-->
<!--        </figure>-->
<!---->
<!--        <figure class="col-sm-6 col-md-2">-->
<!--            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg" alt="placeholder"-->
<!--                 class="img-fluid"/>-->
<!--            </a>-->
<!--        </figure>-->
<!---->
<!--        <figure class="col-sm-6 col-md-2">-->
<!--            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg" alt="placeholder"-->
<!--                 class="img-fluid"/>-->
<!--            </a>-->
<!--        </figure>-->
<!---->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->
<div class="container container-box box-center clients-container" style="margin-top:2rem !important; margin-bottom: 10rem !important; background: none;">
    <div class="row row-cols-3 row-cols-sm-4 row-cols-lg-5 row-cols-xl-6">
        <div class="col mb-4" style="padding: 0;">
            <div class="card h-100 z-depth-1" style="margin: 0 .5rem 0 0;">
                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top"
                         src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                         alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Card -->
        </div>
        <div class="col mb-4" style="padding: 0;">
            <div class="card h-100 z-depth-1" style="margin: 0 .5rem 0 0;">
                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top"
                         src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                         alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Card -->
        </div>
        <div class="col mb-4" style="padding: 0;">
            <div class="card h-100 z-depth-1" style="margin: 0 .5rem 0 0;">
                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top"
                         src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                         alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Card -->
        </div>
        <div class="col mb-4" style="padding: 0;">
            <div class="card h-100 z-depth-1" style="margin: 0 .5rem 0 0;">
                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top"
                         src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                         alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Card -->
        </div>
        <div class="col mb-4" style="padding: 0;">
            <div class="card h-100 z-depth-1" style="margin: 0 .5rem 0 0;">
                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top"
                         src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                         alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Card -->
        </div>
        <div class="col mb-4" style="padding: 0;">
            <div class="card h-100 z-depth-1" style="margin: 0 .5rem 0 0;">
                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top"
                         src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                         alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Card -->
        </div>
    </div>
</div>
 
                                                                          <!-- /documents-table-container -->
<?php get_footer(); ?>
