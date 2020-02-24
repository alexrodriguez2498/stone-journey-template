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
        padding: .7rem .7rem 0;
    }

    .card {
        margin: 20px;
    }

    /* @media (max-width: 938px) {

        .second_nav .second_nav-item {
            display: none;
        }

        .cards_container {
            flex-direction: column;
        }
    } */

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
        color: black;
    }

    .cards_container {
        display: flex;
        /*margin-top: 30px;*/
        justify-content: space-between;
    }

    .card-footer {
        justify-content: space-between;
        background: #947956;

    }

    .card-footer div {
        color: white;
    }



    @media (max-width: 490px) {
        .second_nav_custom_one {
            padding-left: .2rem;
        }

        .second_nav_custom_two{
            width: 40%;
        }
    }
</style>

<div class="row container box-center container-box py-3 d-flex"
     style="margin-top: 1rem !important; border-bottom: 2px solid #8c6f49; padding-bottom: .5rem !important;">

    <section class="px-md-2 mx-md-2 dark-grey-text w-100 d-flex align-items-center">
        <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg"alt="">
        <h3 class="h3 pl-3">Rossio 93 <h3 class="h3 d-none d-md-block"> - Beauty in motion</h3></h3>
    </section>
</div>

<div class="row container box-center container-box d-flex">

    <div class="row w-100" style="margin-top: 1rem;">
        <div class="col-sm-2 pb-0 d-none d-md-block" id="background_1">


            <!--Section: Content-->
            <section class="px-md-2 mx-md-2 dark-grey-text w-100">

                <img class="w-100" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png "
                     alt="">

            </section>
            <!--Section: Content-->

        </div>
        <div class="col-sm-10 border-bottom pb-0  d-flex d-none d-md-block" id="background_1">


            <!--Section: Content-->
        
            <p class="d-none d-md-block" style="line-height:3rem;"><b>Architech:</b> Intergaup. <br>
                <b>Adress:</b> Praca do Rossio, 93, Baixa, Lisboa, Portugal <br>
                <b>Location:</b> <u>www.googlemaps.com/rossio93</u></p>


            <!--Section: Content-->

        </div>
        <div class="col-sm-10 pb-0  d-flex" id="background_1">


            <!--Section: Content-->
            <div class="row d-block d-md-none">
            <div class="col-4">
                <p> <b>Adress:</b></p>
            </div>
            <div class="col-12">
               <p>Praca do Rossio, 93, Baixa, Lisboa, Portugal </p> 
            </div>
            <div class="col-4">
                <p> <b>Location:</b> </p>
            </div>
            <div class="col-12">
                <p><u>www.googlemaps.com/rossio93</u></p>
            </div>
            <div class="col-4">
                <p><b>About</b></p>
            </div>
            <div class="col-12">
                <p>in the myriad lights and wonders of the city, the
                charming and centrally-located Rossio 93 is home to a shining jewel: a re-imagined classic. </p>
            </div>
            <div class="col-4">
                <p><b>Info</b></p>
            </div>
            <div class="col-12">
                <p style="line-height:2rem;">
                    <b>Architech:</b> Intergaup  <br>
                    <b>Foreseen conclusion:</b> 2019 <br>
                    <b>Uses:</b> Residential and Retail <br>
                    <b>Website:</b> https://www.rossio93.pt <br>
                    <b>Status:</b> In development <br>
                    <b>Estimated date for beginning of construction:</b> Sep 12, 2020 <br>
                    <b>Estimated Delivery Date:</b> Sep 12, 2020 <br>
                    <b>Number of Sellable Units:</b> 14
                    </p>
            </div>
  
        </div>
    </div>
</div>
<div class="row container box-center container-box" style="margin-top: 2rem;">

    <div class=" col pb-0 pt-5 d-none d-md-block" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">


            <p class="border-bottom pb-4"><b>About the property:</b> in the myriad lights and wonders of the city, the
                charming and centrally-located Rossio 93 is home to a shining jewel: a re-imagined classic.</p>

        </section>
        <!--Section: Content-->

    </div>
</div>
<div class="row container box-center container-box " style="margin-top: 2rem;">
    <div class=" col-sm-12 col-md-6 pt-0 d-none d-md-block" id="background_1">


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
    <div class="col-sm-12 col-md-6 pt-0 d-none d-md-block" id="background_1">


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

                <ul class="second_nav second_nav_custom_one">
                    <p class="d-none d-md-block" style="padding-top:10px;"><b>Filter by</b></p>
                    <i class="fas fa-filter d-block d-md-none" style="padding:.7rem;"></i>
                    <div class="dropdown d-none d-md-block" style="line-height: 2.3rem;">

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
                    <li id="tabClients" class="nav-item nav-item-selected-custom" onclick="clickClients()">
                        <a class="nav-link second_nav-item d-none d-md-block" href="#">Clients</a>
                        <a class="nav-link second_nav-item d-block d-md-none" href="#"><i class="far fa-user-circle"></i></a>
                    </li>
                    <li id="tabDocuments" class="nav-item" onclick="clickDocuments()">
                        <a class="nav-link second_nav-item d-none d-md-block" href="#">Documents</a>
                        <a class="nav-link second_nav-item d-block d-md-none" href="#"><i class="far fa-file-alt"></i></a>
                    </li>
                    <li id="tabMilestones" class="nav-item" onclick="clickMilestones()">
                        <a class="nav-link second_nav-item d-none d-md-block" href="#">Milestones</a>
                        <a class="nav-link second_nav-item d-block d-md-none" href="#"><i class="fas fa-flag"></i></a>
                    </li>
                </ul>
            </div>

            <!--/Dropdown primary-->
            <ul class="second_nav second_nav_custom_one second_nav_custom_two">

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

<div class=" container container-box box-center mt-2 last_container_table w-100 d-none d-md-block" style="width: 100%; margin-top: .5rem !important;" id="tableClients">
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
    <div class="table-footer d-flex justify-content-between align-items-center">
        <button type="button" class="btn btn-sm button z-depth-1 add-button"
                style="margin-left:1rem; margin-top: -1rem;">CREATE CLIENTS
        </button>
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

<div class="d-block d-md-none w-100" id="tableClientsMobile">
    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/face.jpg" alt="">
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Hans Vollenwider</b> <br> +123 456 789<br>
                    ana@cto.com </p> <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

               
                    
            </div>

        </div>

    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/face.jpg" alt="">
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Peter Thomas</b> <br> +123 456 789<br>
                    ana@cto.com </p>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

             
            </div>

        </div>

    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/face.jpg" alt="">
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Ana Peter</b> <br> +123 456 789<br>
                    ana@cto.com </p> <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

               
            </div>

        </div>

    </div>
    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/face.jpg" alt="">
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Paul Armand</b> <br> +123 456 789<br>
                    ana@cto.com </p>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

               
            </div>

        </div>

    </div>


    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/face.jpg" alt="">
            </div>
            <div class="mobile-card-content" style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Helen Darko</b> <br> +123 456 789<br>
                    ana@cto.com </p>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

            </div>

        </div>

    </div>
    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/face.jpg" alt="">
            </div>
            <div class="mobile-card-content" style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Federico Silva</b> <br> +123 456 789<br>
                    ana@cto.com </p>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

            </div>

        </div>

    </div>
</div>



<div class="container container-box box-center mt-2 last_container_table w-100 d-none d-md-block" style="width: 100%; margin-top: .5rem !important;" id="tableDocuments">
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

<div class="d-block d-md-none w-100" id="tableDocumentsMobile">
    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
            <i class="fas fa-file-invoice-dollar fa-2x"></i>
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Payment Summons</b> <br> Ana Humble<br>
                    20/02/2020  </p> <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

               
                    
            </div>

        </div>

    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
            <i class="fas fa-file-signature fa-2x"></i>
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Promissory Contract Payment</b> <br> Ana Humble <br> 20/02/2020</p>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

             
            </div>

        </div>

    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
            <i class="fas fa-file-invoice fa-2x"></i>   
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Reservation Fee Reinforcement</b> <br> Ana Humble <br> 20/02/2020</p> <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

               
            </div>

        </div>

    </div>
    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
            <i class="fas fa-file-image fa-2x"></i>
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Reservation Fee Reinforcement</b> <br> Ana Humble <br> 20/02/2020</p>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

               
            </div>

        </div>

    </div>


    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
            <i class="fas fa-images fa-2x"></i>
            </div>
            <div class="mobile-card-content" style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Reservation Fee Reinforcement</b> <br> Ana Humble <br> 20/02/2020</p>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

            </div>

        </div>

    </div>
  </div>
</div>


<div class=" container container-box box-center mt-2 last_container_table w-100 d-none d-md-block" style="width: 100%; margin-top: .5rem !important;" id="tableMilestoness">
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

<div class="d-block d-md-none w-100" id="tableMilestonesMobile">

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt="">
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Payment Summons</b> <br> Ana Humble<br>
                    20/02/2020  </p> <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

               
                    
            </div>

        </div>

    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt="">
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Promissory Contract Payment</b> <br> Ana Humble <br> 20/02/2020</p>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

             
            </div>

        </div>

    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" alt="">
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Reservation Fee Reinforcement</b> <br> Ana Humble <br> 20/02/2020</p> <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

               
            </div>

        </div>

    </div>
    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt="">
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Reservation Fee Reinforcement</b> <br> Ana Humble <br> 20/02/2020</p>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

               
            </div>

        </div>

    </div>


    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt="">
            </div>
            <div class="mobile-card-content" style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Reservation Fee Reinforcement</b> <br> Ana Humble <br> 20/02/2020</p>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

            </div>

        </div>

    </div>
    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <img width="60px" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt="">
            </div>
            <div class="mobile-card-content" style="width:100%;">
                <h5 class="card-title d-flex justify-content-between mb-0"><p><b>Welcome Letter</b> <br> Ana Humble <br> 20/02/2020</p>  <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div> </h5>

            </div>

        </div>

    </div>
</div>


<div class="container container-box box-center clients-container"
     style="margin-top:2rem !important; margin-bottom: 10rem !important; background: none;">
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


<script>
    document.getElementById('tableDocuments').style.cssText = 'display:none !important';
    document.getElementById('tableMilestoness').style.cssText = 'display:none !important';

    function clickClients() {
        document.getElementById('tableDocuments').style.cssText = 'display:none !important';
        document.getElementById('tableMilestoness').style.cssText = 'display:none !important';
        document.getElementById('tableClients').style.display = 'flex';


        document.getElementById('tabDocuments').classList.remove("nav-item-selected-custom");
        document.getElementById('tabMilestones').classList.remove("nav-item-selected-custom");
        document.getElementById('tabClients').classList.add("nav-item-selected-custom");
    }

    function clickDocuments() {
        document.getElementById('tableClients').style.cssText = 'display:none !important';
        document.getElementById('tableMilestoness').style.cssText = 'display:none !important';
        document.getElementById('tableDocuments').style.display = 'flex';


        document.getElementById('tabClients').classList.remove("nav-item-selected-custom");
        document.getElementById('tabMilestones').classList.remove("nav-item-selected-custom");
        document.getElementById('tabDocuments').classList.add("nav-item-selected-custom");
    }

    function clickMilestones() {
        document.getElementById('tableClients').style.cssText = 'display:none !important';
        document.getElementById('tableDocuments').style.cssText = 'display:none !important';
        document.getElementById('tableMilestoness').style.display = 'flex';


        document.getElementById('tabClients').classList.remove("nav-item-selected-custom");
        document.getElementById('tabDocuments').classList.remove("nav-item-selected-custom");
        document.getElementById('tabMilestones').classList.add("nav-item-selected-custom");
    }
</script>

<!-- /documents-table-container -->
<?php get_footer(); ?>
