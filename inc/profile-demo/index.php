<?php get_header(); ?>

<style>
    td {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
        font-weight: bold !important;

    }

    table {
        /*border: 1px solid #ded6d6;*/
        margin-bottom: 0 !important;
    }

    h4 {
        /*border: 1px solid #ded6d6;*/
        padding: 2%;
        margin-bottom: 0;
    }

    .small-text {
        font-size: 0.8rem;
        font-weight: bold;
    }

    .tittle-text {
        font-size: 1rem;
        font-weight: bold;
    }

    .navbar-padding {
        padding-left: 4%;
        padding-right: 4%;
    }

    .margin-rigth-min {
        margin-right: 3%;
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
        margin-left: 3%;
    }

    #contenedor {
        /*margin: 30px 250px;*/
        margin: auto;
        display: flex;
        justify-content: center;
        margin-top: 2rem;
        
    }

    #replica {
        margin: auto;
        display: flex;
        justify-content: center;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    #row_content {
        background: #F9F5F1;
        height: 50px;
        align-items: center;
        font-size: 0.8rem;
        font-weight: bold;

    }

    #contenedor_derecho {
        font-size: 0.8rem;
        text-align: left;
        line-height: 1.3rem;
    }

    .properties {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-bottom: 15px;
    }


    .action_btn_table{
        display:flex;
        align-items: flex-end;    
        justify-content: flex-end;
        height: 70px;

    }
    .action_btn{
        /* margin: 10px; */
        width: 2rem;
    }
    #last_container{
        /*margin: 20%;*/
        display: flex;
        justify-content: center ;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    .imagen{
        margin-right: 1rem;
        margin-left: 1rem;
    }
    h3{
        margin-bottom: 1.5rem;
        margin-left: 1rem;
    }
    .user_edit{
        background-color: white;
        border-radius: 2rem;
        position: absolute;
        top: 60%;
        right: 0%;
    }
    .column{
        width:100%;
        height: 100%;
    }
    .tittle-text{
        margin-left: 1rem;
    }

    .card{
        box-shadow: 0 0px 0px 0;
    }

    .container2 {
        border-top: 1px solid #ded6d6;
        border-bottom: 1px solid #ded6d6;
        padding: 1rem 0;
    }

    .profile-content {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    b {
        font-weight: bold;
    }

    .btn-custom {
        border-radius: 2rem;
        border: 1px solid #ded6d6;
        box-shadow: 0 1px 2px 0;
        background-color: white;
        margin-right: 1rem;
    }

</style>


<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-light white lighten-1 navbar-padding">
<img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Logo.jpg" alt="">
    <a class="navbar-brand tittle-text" href="#"><b>STONE JOURNEY</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><b class="small-text">CLIENTS</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b class="small-text">PROPERTIES</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b class="small-text">DOCUMENTS</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b class="small-text">MILESTONES</b></a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#"><b class="small-text">STONE JOURNEY</b></a>-->
<!--            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="#"><b class="small-text">CONTACTS</b></a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#"><b class="small-text">MY PROFILE</b></a>-->
<!--            </li>-->
        </ul>
        <div>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <!--                <li class="nav-item active">-->

            <!--                </li>-->

            <li class="nav-item avatar">
                <a class="nav-link p-0" href="#">
                    <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/face.jpg"
                         class="rounded-circle z-depth-0"
                         alt="avatar image" height="35">
                    <b class="small-text">Ana Magallanes</b>
                </a>
            </li>
        </ul>
    </div>
    </div>
</nav>
<!--/.Navbar -->

<div class="container row" id="contenedor">

    <div class="container col-md-3" >
        <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg" alt="">
        <div>
            <h4><b>Kelly Slater</b></h4>
            <h6><b>+351 9339948</b></h6>
            <h6><b>Kelly@wsl.com</b></h6>
        </div>
    </div>

    <div class="container col-md-9" id="contenedor_derecho">
        <div class="row" id="row_content">
            <div class="col-md-4 ">
                <i class="far fa-user-circle"></i>
                PROFILE
            </div>
            <div class="col-md-4 ">
                <i class="fas fa-building"></i>
                PROPERTIES
            </div>
            <div class="col-md-4 ">
                <i class="fas fa-file-contract"></i>
                REPRESENTATIVES
            </div>
        </div>
        <d class="row profile-content">
            <div class="col-md-4 column">
                <b>Name:</b> Kelly <br>
                <b>Lastname:</b> Slater <br>
                <b>Password:**********</b> <br>
                <b>Telephone:</b> +351 9339948 <br>
                <b>Nationality:</b> United States <br>
                <b>Birthday:</b> 21/10 <br>
                <b>Company:</b> Empire Holding

            </div>
            <div class="col-md-4 column">
                <b>Properties:</b> Rossio, Vila Maria Pia <br>
                <b>Account Manager:</b> Mariana Vozone <br>
                <b>Comission:</b> <br>
                <b>Discount:</b> Yes <br>
                <!-- radio button "yes"-->
<!--                <div class="custom-control custom-radio custom-control-inline">-->
<!--                    <input type="radio" class="custom-control-input" id="defaultInline1"-->
<!--                           name="inlineDefaultRadiosExample">-->
<!--                    <label class="custom-control-label" for="defaultInline1">Yes</label>-->
<!--                </div>-->
<!---->
                <!-- radio button "no"-->
<!--                <div class="custom-control custom-radio custom-control-inline">-->
<!--                    <input type="radio" class="custom-control-input" id="defaultInline2"-->
<!--                           name="inlineDefaultRadiosExample">-->
<!--                    <label class="custom-control-label" for="defaultInline2">No</label>-->
<!--                </div>-->
<!--                <br>-->

                <b>Extra Works: </b> Yes <br>
                <!-- radio button "yes"-->
<!--                <div class="custom-control custom-radio custom-control-inline">-->
<!--                    <input type="radio" class="custom-control-input" id="defaultInline1"-->
<!--                           name="inlineDefaultRadiosExample">-->
<!--                    <label class="custom-control-label" for="defaultInline1">Yes</label>-->
<!--                </div>-->

                <!-- radio button "no"-->
<!--                <div class="custom-control custom-radio custom-control-inline">-->
<!--                    <input type="radio" class="custom-control-input" id="defaultInline2"-->
<!--                           name="inlineDefaultRadiosExample">-->
<!--                    <label class="custom-control-label" for="defaultInline2">No</label>-->
<!--                </div>-->
<!--                <br>-->

                <b>purpose: </b> Golden Visa <br>
                <!-- radio button "investment"-->
<!--                <div class="custom-control custom-radio custom-control-inline">-->
<!--                    <input type="radio" class="custom-control-input" id="defaultInline1"-->
<!--                           name="inlineDefaultRadiosExample">-->
<!--                    <label class="custom-control-label" for="defaultInline1">Investment</label>-->
<!--                </div>-->

                <!-- radio button "Golden Visa"-->
<!--                <div class="custom-control custom-radio custom-control-inline">-->
<!--                    <input type="radio" class="custom-control-input" id="defaultInline2"-->
<!--                           name="inlineDefaultRadiosExample">-->
<!--                    <label class="custom-control-label" for="defaultInline2">Golden Visa</label>-->
<!--                </div>-->

                <!-- radio button "Live"-->
<!--                <div class="custom-control custom-radio custom-control-inline">-->
<!--                    <input type="radio" class="custom-control-input" id="defaultInline3"-->
<!--                           name="inlineDefaultRadiosExample">-->
<!--                    <label class="custom-control-label" for="defaultInline3">Live</label>-->
<!--                </div>-->
<!--                <br>-->

            </div>

            <div class="col-md-4 column">
                <b>Legal Representative:</b> Marco Coelho <br>
                <b>Email:</b> mcoelho@gmail.com <br>
                <b>Phone:</b> +351 93399448 <br> <br>
                <b>Agent Representative:</b> Heidi Coelho <br>
                <b>Email:</b> mcoelho@gmail.com <br>
                <b>Phone:</b> +351 93399448
            </div>
    </div>
</div>
</div>
<div class="container row container2" id="replica">
    <div class="container col-md-4" id="contenedor_1">
        <div>
            <h3><b>PROPERTIES</b></h3>
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" alt="">
                    <b>Rossio 93</b>
                </div>
                <!-- Card image -->
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
                     alt="Card image cap">

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title"><a>Beauty in Motion</a></h4>
                    <!-- Text -->
                    <p class="card-text">Located Between the Romantic Avenida da Liberdade and the Charming Downtown</p>

                </div>
            </div>
        </div>
    </div>
    <div class="container col-md-8" id="contenedor_2">

        <div class="properties">
            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" class="imagen" alt="">
            <b>Rossio 93</b>
            <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" class="imagen" alt="">
            <b>Vila Maria Pia</b>
        </div>

        <!-- Card -->
        <div class="card card-cascade wider reverse">

            <!-- Card image -->
            <div class="view view-cascade overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                     alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!-- Card content -->
            <div class="card-body ">

                <!-- Title -->
                <h4 class="card-title"><strong>Rossio 93</strong></h4>
                <!-- Subtitle -->
                <h6 class="card-subtitle">Praca da Figueira</h6>
            </div>
        </div>
    </div>
</div>
<div class="container" id="last_container">
<!--    <div class="row" style="margin-top: 3%;">-->
        <div class="col-md-6" id="table2">

            <h4><b>MILESTONES</b></h4>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"><b></b></th>
                    <th scope="col"><b>NAME</b></th>
                    <th scope="col"><b>OWNER</b></th>
                    <th scope="col"><b>DATE</b></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><i class="fas fa-file-invoice-dollar fa-2x"></i></td>
                    <td>Payment Summons</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="fas fa-file-signature fa-2x"></i></td>
                    <td>Promissory Contract Payment</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="fas fa-file-invoice fa-2x"></i></td>
                    <td>Reservation Fee Reinforcement</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="fas fa-file-image fa-2x"></i></td>
                    <td>Reservation Form</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="fas fa-images fa-2x"></i></td>
                    <td>Welcome letter</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>

                </tbody>
            </table>
            <div class="action_btn_table">
                <a class="btn-floating btn-lg btn-custom"><i class="far fa-calendar-alt"></i></a>
                <a class="btn-floating btn-lg btn-custom"><i class="far fa-list-alt"></i></a>
                <a class="btn-floating btn-lg btn-custom"><i class="fas fa-plus"></i></a>
<!--            <i class="far fa-calendar-alt action_btn fa-2x"></i>-->
<!--            <i class="far fa-list-alt action_btn fa-2x"></i>-->
<!--            <i class="fas fa-plus action_btn fa-2x"></i>-->
            </div>

<!--            <div>-->
<!--                <div class="row justify-content-end margin-rigth-min">-->
<!--                    <div class="col-xs-4" style="padding: 0 !important;">-->
<!--                        <button type="button" class="btn btn-blue-grey btn-sm">VIEW ALL MILESTONES</button>-->
<!--                    </div>-->
<!--                    <div class="col-xs-4" style="padding: 0 !important;">-->
<!--                        <button type="button" class="btn btn-blue-grey btn-sm">CREATE NEW MILESTONE</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>


        <div class="col-md-6" id="table1">

            <h4><b>DOCUMENTS</b></h4>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"><b>TYPE</b></th>
                    <th scope="col"><b>NAME</b></th>
                    <th scope="col"><b>OWNER</b></th>
                    <th scope="col"><b>DATE</b></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><i class="far fa-file-alt fa-2x"></i></td>
                    <td>Floor plan</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="far fa-file fa-2x"></i></td>
                    <td>Document</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="far fa-images fa-2x"></i></td>
                    <td>Photo Gallery</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="far fa-file-image fa-2x"></i></td>
                    <td>Photo</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="far fa-file-image fa-2x"></i></td>
                    <td>Photo</td>
                    <td>Public</td>
                    <td>20/02/2020</td>
                </tr>
                </tbody>
            </table>
            <div class="action_btn_table ">
                <a class="btn-floating btn-lg btn-custom"><i class="far fa-calendar-alt"></i></a>
                <a class="btn-floating btn-lg btn-custom"><i class="far fa-list-alt"></i></a>
                <a class="btn-floating btn-lg btn-custom"><i class="fas fa-plus"></i></a>
<!--            <i class="far fa-calendar-alt action_btn fa-2x"></i>-->
<!--            <i class="far fa-list-alt action_btn fa-2x"></i>-->
<!--            <i class="fas fa-plus action_btn fa-2x"></i>-->
            </div>
<!--            <div>-->
<!--                <div class="row justify-content-end margin-rigth-min">-->
<!--                    <div class="col-xs-4" style="padding: 0 !important;">-->
<!--                        <button type="button" class="btn btn-blue-grey btn-sm">VIEW ALL DOCUMENTS</button>-->
<!--                    </div>-->
<!--                    <div class="col-xs-4" style="padding: 0 !important;">-->
<!--                        <button type="button" class="btn btn-blue-grey btn-sm">CREATE NEW DOCUMENT</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        
       
        
<!--    </div>-->
</div>
	<?php get_footer(); ?>
