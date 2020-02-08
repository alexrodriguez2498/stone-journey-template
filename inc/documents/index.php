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
    .card-title{
        display:flex;
        justify-content:space-between;
    }

</style>

<link href="http://allfont.es/allfont.css?fonts=roboto-light" rel="stylesheet" type="text/css"/>

<div class="row container-box" style="margin-top: 2rem;">
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" id="container__center" style="width: 100%;">

            <h3>Documents</h3>
            <p>This is your <strong>Stone Journey Dashboard</strong>, from here you can manage your Properties, Clients, Milestones and Documents</p>
            <div class="row justify-content-end background_1-button">
                <button type="button" class="btn button">ADD DOCUMENT</button>
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

<div class="container d-block d-md-none" id="ultimate_container" style="background:#f4f1ee; padding-top:1rem;     margin-left: 0; margin-right: 0; max-width: 100%; padding-left: 0;
    padding-right: 0;">

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
                                                <!-- card content -->
            <div class="mobile-card-icon" style="padding:1rem; padding-top:2rem; padding-right:2rem;">
                <i class="fas fa-file-invoice-dollar fa-2x"></i>
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title"><b>Payment Summons</b> <i class="fas fa-ellipsis-v"></i></h5>
                <p class="card-text"style="margin:0;"> <strong>20/02/2020</strong> <br>Rossio <br>
                                    Payment Summons <br>
                                    Fiancial</p>
            </div>
    
        </div>
  
    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
                                         <!-- card content -->
            <div class="mobile-card-icon" style="padding:1rem; padding-top:2rem; padding-right:2rem;">
                <i class="fas fa-file-signature fa-2x"></i>
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title"><b>Promissory Contract Payment</b> <i class="fas fa-ellipsis-v"></i></h5>
                <p class="card-text"style="margin:0;"><strong>20/02/2020</strong> <br>Rossio <br>
                                    Payment Summons <br>
                                    Fiancial  </p>
            </div>
    
        </div>

    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
                                                <!-- card content -->
            <div class="mobile-card-icon" style="padding:1rem; padding-top:2rem; padding-right:2rem;">
                <i class="fas fa-file-invoice fa-2x"></i>
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title"><b>Reservation Fee Reinforcement</b> <i class="fas fa-ellipsis-v"></i></h5>
                <p class="card-text"style="margin:0;"><strong>20/02/2020</strong> <br>Rossio <br>
                                    Payment Summons <br>
                                    Fiancial</p>
            </div>
        
        </div>

    </div>
  
    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
                                                <!-- card content -->
            <div class="mobile-card-icon" style="padding:1rem; padding-top:2rem; padding-right:2rem;">
                <i class="fas fa-file-image fa-2x"></i>
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title"><b>Reservation Form</b> <i class="fas fa-ellipsis-v"></i></h5>
                <p class="card-text"style="margin:0;"><strong>20/02/2020</strong> <br>Rossio <br>
                                    Payment Summons <br>
                                    Fiancial  </p>
            </div>
        
        </div>

    </div>

    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
                                                <!-- card content -->
            <div class="mobile-card-icon" style="padding:1rem; padding-top:2rem; padding-right:2rem;">
                <i class="fas fa-images fa-2x"></i>
            </div>
            <div class="mobile-card-content"style="width:100%;">
                <h5 class="card-title"><b>Reservation Form</b> <i class="fas fa-ellipsis-v"></i></h5>
                <p class="card-text"style="margin:0;"><strong>20/02/2020</strong> <br>Rossio <br>
                                    Payment Summons <br>
                                    Fiancial</p>
            </div>
            
        </div>

    </div>

</div>
  
    <?php get_footer(); ?>
