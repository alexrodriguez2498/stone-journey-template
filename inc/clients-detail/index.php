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
        font-size: 1.2rem;
        line-height: 2rem !important;
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


    .dropdown-main {
        display: none !important;
    }

    @media (max-width: 490px) {
        .second_nav_custom_two{
            width: 40%;
        }
    }

    @media (max-width: 767px) {
        .second_nav_custom_one {
            padding-left: .2rem;
        }
        #background_2 {
            padding-left: 0 !important;
        }

        .dropdown-main {
            display: flex !important;
        }
    }
    ul li a i{
        color:#947956;
    }
    #navbarDropdownMenuLink1{
        color:#947356;
    }

    .card_custom {
        margin: 20px !important;
    }

    @media (max-width: 915px) {
        .card_custom {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
        .cards_container{
            flex-direction:column;
        }
    }

    #background_1 {
        background: white;
    }
    .cards_container .card .card-text strong {
        font-weight: bold;
        color: black;
    }
    .cards_container .card h4 {
        font-weight: bold;
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
</style>

<!--<div class="row container box-center container-box py-3"-->
<!--     style="margin-top: 1rem !important; border-bottom: 2px solid #8c6f49; padding-bottom: .5rem !important;">-->
<div class="row container box-center container-box py-3 background-none" style="margin-top: 2rem; padding-bottom: 0 !important;">
    <div class="py-4 z-depth-1 col justify-content-between" id="background_1" style="border-bottom: 2px solid #8c6f49; display: flex">
        <section class="px-md-2 mx-md-2 dark-grey-text w-100 d-flex align-items-center">
            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/face.jpg"alt="">
            <h3 class="h3 pl-3">Kelly Slater</h3>
        </section>

        <div class="nav-item dropdown dropdown-main">
            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item">Edit Property</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div> </div>
    </div>
</div>

<!--<div class="row container box-center container-box d-flex">-->
<div class="row mt-4 container box-center container-box container-box half_container background-none">
    <div class="py-3 z-depth-1 col " id="background_2" style="background: white !important; padding: 0 !important;">
        <div class="row w-100" style="margin-top: 1rem;">
            <div class="col-sm-2 pb-0 d-none d-md-block" id="background_1">
                <section class="px-md-2 mx-md-2 dark-grey-text w-100">
                    <img class="w-100" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/Aungusta170_ima.jpg "
                         alt="">
                </section>
            </div>
            <div class="col-sm-4 pb-0 border-bottom d-flex d-none d-md-block" >
                <p class="d-none d-md-block" style="line-height:2rem; font-size:1.2rem;">
                            <b>Telephone:</b> +351 93399448  <br>
                            <b>Nationality:</b> United States <br>
                            <b>Company:</b> Empire Holding <br>
                            <b>Email:</b> mcoelho@gmail.com <br>
                            </p>
            </div>
            <div class="col-sm-4 pb-0 border-bottom d-flex d-none d-md-block" style="padding-left: 2.5rem;">
                <p class="d-none d-md-block" style="line-height:2rem; font-size:1.2rem;">
                           
                            <b>Birthday:</b> 21/10 <br>
                            <b>Password: ****************</b>  <br>
                            <b>Extra Works:</b> Yes <br>
                            <b>Porpuse:</b> Golden Visa
                            </p>
            </div>
            <div class="col-sm-10 pb-0  d-flex" id="background_1" style="margin-left: 1rem !important;">
                <div class="row d-block d-md-none">
                    <div class="col-4">
                        <p> <b  style="border-bottom:2px solid #8c6f49;">Profile</b></p>
                    </div>
                    <div class="col-12">
                        <p>
                            <b>Telephone:</b> +351 93399448  <br>
                            <b>Nationality:</b> United States <br>
                            <b>Company:</b> Empire Holding <br>
                            <b>Email:</b> mcoelho@gmail.com <br>
                            <b>Birthday:</b> 21/10 <br>
                            <b>Password: ****************       </b>   
                        </p>
                    </div>
                    <div class="col-4">
                        <p> <b  style="border-bottom:2px solid #8c6f49;">Representatives</b> </p>
                    </div>
                    <div class="col-12">
                        <p>
                            <b>Legal Representative:</b> Marco Coelho  <br>
                            <b>Email:</b> mcoelho@gmail.com <br>
                            <b>Phone:</b> +351 93399448 <br>
                            <b>Agent Representative:</b> Heidi Coelho <br>
                            <b>Email:</b> mcoelho@gmail.com <br>
                            <b>Phone:</b> +351 93399448
                        </p>
                    </div>
                    <div class="col-6">
                        <p><b style="border-bottom:2px solid #8c6f49;">  Properties Info</b></p>
                    </div>
                    <div class="col-12">
                        <p>
                            <b>Extra Works:</b> Yes <br>
                            <b>Porpuse:</b> Golden Visa <br>
                            <b>Comission:</b> 10% <br>
                            <b>Observation:</b> None <br>
                            <b>Discount:</b> Yes <br>
                            <b>Observation:</b> None
                        </p>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="row container box-center container-box" style="margin-top: 2rem;">
            <div class=" col-sm-6 pb-0 d-none border-bottom d-md-block" id="background_1">
                <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
                    <p><b>Properties:</b> Rossio, Vila Maria Pia </p>
                </section>
            </div>
            <div class=" col-sm-6 pb-0 d-none border-bottom d-md-block" id="background_1">
                <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
                    <p><b>Account Manager:</b> Mariana Vozone</p>
                </section>
            </div>
        </div>
        <div class="row container box-center border-bottom container-box pt-4" style="margin-top: 2rem;">
            <div class=" col-sm-6 pt-0 d-none d-md-block" id="background_1">
                <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
                    <p style="line-height:3rem;">
                           
                            <b>Agent Representative:</b> Heidi Coelho <br>
                            <b>Email:</b> mcoelho@gmail.com <br>
                            <b>Phone:</b> +351 93399448
                    </p>
                </section>
            </div>
            <div class=" col-sm-6 pt-0 d-none d-md-block" id="background_1">
                <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
                    <p style="line-height:3rem;">
                            <b>Legal Representative:</b> Marco Coelho  <br>
                            <b>Email:</b> mcoelho@gmail.com <br>
                            <b>Phone:</b> +351 93399448 
                            
                    </p>
                </section>
            </div>
        </div>
        <div class="row container box-center container-box pt-4">
            <div class="col-sm-6 pt-0 d-none d-md-block" id="background_1">
                <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
                    <p style="line-height:3rem;">
                           
                            <b>Comission:</b> 10% <br>
                            <b>Observation:</b> None <br>   
                            <b>Discount:</b> Yes <br>
                            <b>Observation:</b> None
                    </p>
                </section>
            </div>
            <div class="col-sm-6 pt-0 d-none d-md-block" id="background_1">
                <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
                    <p style="line-height:3rem;">
                           
                            <b>Asking Price:</b> <br>
                            <b>Closing Price:</b>  
                           
                    </p>
                </section>
            </div>
        </div>
    </div>
</div>

<!--<div class="container">-->
<div class="row mt-4 container box-center container-box container-box half_container background-none"
     style=" margin-top: .5rem !important;">
    <div class="py-3 z-depth-1 col " id="background_2" style="background: white !important;">


        <div class="row justify-content-between" style="height:45px;">
            <div class="d-flex" style="margin-left: 1rem;">

                <ul class="second_nav second_nav_custom_one">
                    <p class="d-none d-md-block" style="padding-top:10px;"><b>Filter by</b></p>
                    <!--                    <i class="fas fa-filter d-block d-md-none" style="padding:.7rem; margin-top: .3rem;"></i>-->

                    <a class="fas fa-filter d-block d-md-none" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" style="padding:.7rem; margin-top: .3rem;"></a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Proyect Status</a>
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Architech</a>
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Location</a>
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Name</a>
                    </div>

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
                        <!-- <li id="tabClients" class="nav-item " onclick="clickClients()">
                            <a class="nav-link second_nav-item d-none d-md-block" >Clients</a>
                            <a class="nav-link second_nav-item d-block d-md-none" ><i class="far fa-user-circle"></i></a>
                        </li> -->

                    <li id="tabMilestones" class="nav-item nav-item-selected-custom" onclick="clickMilestones()">
                        <a class="nav-link second_nav-item d-none d-md-block" >Milestones</a>
                        <a class="nav-link second_nav-item d-block d-md-none" ><i class="fas fa-flag"></i></a>
                    </li>

                    <li id="tabDocuments" class="nav-item" onclick="clickDocuments()">
                        <a class="nav-link second_nav-item d-none d-md-block" >Documents</a>
                        <a class="nav-link second_nav-item d-block d-md-none" ><i class="far fa-file-alt"></i></a>
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

    <div class="mt-2 last_container_table w-100 d-none d-md-block" style="width: 100%; margin-top: .5rem !important;" id="tableDocuments">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><b></b></th>
                <th scope="col"><b>NAME</b></th>
                <th scope="col"><b>OWNER</b></th>
                <th scope="col"><b>CATEGORY</b></th>
                <th scope="col"><b>DATE</b></th>
              
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="td_icon"><i class="fas fa-file-invoice-dollar fa-2x"></i></td>
                <td>Payment Summons</td>
                <td>Private</td>
                <td>Legal</td>
                <td class="d-flex justify-content-between ">20/02/2020
                <div class="nav-item dropdown d-flex align-items-center ">
                      
                      <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"></a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item">Edit Property</a>
                          <a class="dropdown-item" href="#">Delete</a>
                      </div>
              
                </td>

            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-file-signature fa-2x"></i></td>
                <td>Promissory Contract Payment</td>
                <td>Private</td>
                <td>Financial</td>
                <td class="d-flex justify-content-between ">20/02/2020
                <div class="nav-item dropdown d-flex align-items-center ">
                      
                      <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"></a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item">Edit Property</a>
                          <a class="dropdown-item" href="#">Delete</a>
                      </div>
              
                </td>
            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-file-invoice fa-2x"></i></td>
                <td>Reservation Fee Reinforcement</td>
                <td>Private</td>
                <td>Legal</td>
                <td class="d-flex justify-content-between ">20/02/2020
                <div class="nav-item dropdown d-flex align-items-center ">
                      
                      <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"></a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item">Edit Property</a>
                          <a class="dropdown-item" href="#">Delete</a>
                      </div>
              
                </td>
            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-file-image fa-2x"></i></td>
                <td>Reservation Form</td>
                <td>Private</td>
                <td>Legal</td>
                <td class="d-flex justify-content-between ">20/02/2020
                <div class="nav-item dropdown d-flex align-items-center ">
                      
                      <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"></a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item">Edit Property</a>
                          <a class="dropdown-item" href="#">Delete</a>
                      </div>
              
                </td>
            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-images fa-2x"></i></td>
                <td>Welcome letter</td>
                <td>Private</td>
                <td>General</td>
                <td class="d-flex justify-content-between ">20/02/2020
                <div class="nav-item dropdown d-flex align-items-center ">
                      
                      <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"></a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item">Edit Property</a>
                          <a class="dropdown-item" href="#">Delete</a>
                      </div>
              
                </td>
            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-file-invoice-dollar fa-2x"></i></td>
                <td>Payment Summons</td>
                <td>Private</td>
                <td>Legal</td>
                <td class="d-flex justify-content-between ">20/02/2020
                <div class="nav-item dropdown d-flex align-items-center ">
                      
                      <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"></a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item">Edit Property</a>
                          <a class="dropdown-item" href="#">Delete</a>
                      </div>
              
                </td>

            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-file-signature fa-2x"></i></td>
                <td>Promissory Contract Payment</td>
                <td>Private</td>
                <td>Financial</td>
                <td class="d-flex justify-content-between ">20/02/2020
                <div class="nav-item dropdown d-flex align-items-center ">
                      
                      <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"></a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item">Edit Property</a>
                          <a class="dropdown-item" href="#">Delete</a>
                      </div>
              
                </td>
            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-file-invoice fa-2x"></i></td>
                <td>Reservation Fee Reinforcement</td>
                <td>Private</td>
                <td>Legal</td>
                <td class="d-flex justify-content-between ">20/02/2020
                <div class="nav-item dropdown d-flex align-items-center ">
                      
                      <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"></a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item">Edit Property</a>
                          <a class="dropdown-item" href="#">Delete</a>
                      </div>
              
                </td>
            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-file-image fa-2x"></i></td>
                <td>Reservation Form</td>
                <td>Private</td>
                <td>Legal</td>
                <td class="d-flex justify-content-between ">20/02/2020
                <div class="nav-item dropdown d-flex align-items-center ">
                      
                      <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"></a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item">Edit Property</a>
                          <a class="dropdown-item" href="#">Delete</a>
                      </div>
              
                </td>
            </tr>
            <tr>
                <td class="td_icon"><i class="fas fa-images fa-2x"></i></td>
                <td>Welcome letter</td>
                <td>Private</td>
                <td>General</td>
                <td class="d-flex justify-content-between ">20/02/2020
                <div class="nav-item dropdown d-flex align-items-center ">
                      
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
                
                
            

            </tr>


            </tbody>
        </table>
        <div class="table-footer d-flex justify-content-between align-items-center">
            <button type="button" class="btn btn-sm button z-depth-1 add-button"
                    style="margin-left:1rem; margin-top: -1rem;">CREATE DOCUMENTS
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

    <div class="d-block d-md-none w-100" id="tableDocumentsMobile">
        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="    padding: 0.5rem 1rem 1rem;">
                    <i class="fas fa-file-invoice-dollar fa-3x"></i>
                </div>
                <div class="mobile-card-content"style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Payment Summons</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </h5>
                    <p class="card-text"style="margin:0;"> Ana Hurnble<br>20/02/2020
                    </p>
                </div>

            </div>

        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="    padding: 0.5rem 1rem 1rem;">
                    <i class="fas fa-file-signature fa-3x"></i>
                </div>
                <div class="mobile-card-content"style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Promissory Contract Payment</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </h5>
                    <p class="card-text"style="margin:0;">Ana Hurnble<br>20/02/2020
                    </p>
                </div>

            </div>

        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="    padding: 0.5rem 1rem 1rem;">
                    <i class="fas fa-file-invoice fa-3x"></i>
                </div>
                <div class="mobile-card-content"style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Reservation Fee Reinforcement</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </h5>
                    <p class="card-text"style="margin:0;">Ana Hurnble<br>20/02/2020
                    </p>
                </div>

            </div>

        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="    padding: 0.5rem 1rem 1rem;">
                    <i class="fas fa-file-image fa-3x"></i>
                </div>
                <div class="mobile-card-content"style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Reservation Form</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </h5>
                    <p class="card-text"style="margin:0;">Ana Hurnble<br>20/02/2020
                    </p>
                </div>

            </div>

        </div>

        <div class="card card_custom">
            <div class="card-body d-flex" style="padding:1rem;">
                <!-- card content -->
                <div class="mobile-card-icon" style="    padding: 0.5rem 1rem 1rem;">
                    <i class="fas fa-images fa-3x"></i>
                </div>
                <div class="mobile-card-content"style="width:100%;">
                    <h5 class="card-title d-flex justify-content-between mb-0"><b>Reservation Form</b>
                        <div class="nav-item dropdown">
                            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item">Edit Property</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </h5>
                    <p class="card-text"style="margin:0;">Ana Hurnble<br>20/02/2020
                    </p>
                </div>

            </div>

        </div>
    </div>


    <div class="mt-2 last_container_table w-100 d-none d-md-block" style="width: 100%; margin-top: .5rem !important;" id="tableMilestoness">
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
                <td class="td_text">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
                       
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td class="td_text align-items-center">
                         5
                        <i class="fas fa-file-signature"></i></td>
                <td class="d-flex td_text align-items-center justify-content-end">
                    <div class="footer-details-2 ">
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
                <td><b></b></td>


            </tr>


            </tbody>

        </table>
        <div class="table-footer d-flex justify-content-between align-items-center">
            <button type="button" class="btn btn-sm button z-depth-1 add-button"
                    style="margin-left:1rem; margin-top: -1rem;">CREATE MILESTONES
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
</div>

<div class="cards_container container container-box box-center mt-2 mb-5 " style="width: 100%;background:transparent!important;     margin-bottom: 10rem !important;" id="grid">
        <!-- Card -->
        <div class="card card-one">
            <div class="card-icon-title d-flex justify-content-between">
                <div class="card-title-right d-flex ">
                    <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" alt="">
                    <h4 class="tittleCardCustom">Rossio 93 </h4>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
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
    

    </div>


<script>
    document.getElementById('tableDocuments').style.cssText = 'display:none !important';
    document.getElementById('tableMilestoness').style.cssText = 'flex';
    document.getElementById('tableDocumentsMobile').style.cssText = 'display:none !important';
    document.getElementById('tableMilestonesMobile').style.cssText = 'flex';

    function clickDocuments() {
        document.getElementById('tableMilestoness').style.cssText = 'display:none !important';
        document.getElementById('tableDocuments').style.display = 'flex';

        document.getElementById('tableMilestonesMobile').style.cssText = 'display:none !important';
        document.getElementById('tableDocumentsMobile').style.display = 'flex';


        document.getElementById('tabMilestones').classList.remove("nav-item-selected-custom");
        document.getElementById('tabDocuments').classList.add("nav-item-selected-custom");
    }

    function clickMilestones() {
        document.getElementById('tableDocuments').style.cssText = 'display:none !important';
        document.getElementById('tableMilestoness').style.display = 'flex';

        document.getElementById('tableDocumentsMobile').style.cssText = 'display:none !important';
        document.getElementById('tableMilestonesMobile').style.display = 'flex';


        document.getElementById('tabDocuments').classList.remove("nav-item-selected-custom");
        document.getElementById('tabMilestones').classList.add("nav-item-selected-custom");
    }
</script>

<!-- /documents-table-container -->
<?php get_footer(); ?>
