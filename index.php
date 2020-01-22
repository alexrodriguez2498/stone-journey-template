<?php get_header(); ?>

<style>
    td {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
        font-weight: bold !important;

    }

    table {
        border: 1px solid #ded6d6;
        margin-bottom: 0 !important;
    }

    h4 {
        border: 1px solid #ded6d6;
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
    }

    #row_content {
        background: #F9F5F1;
    }

    #contenedor_derecho {
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    }

    .properties {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }
    #table1{
        box-shadow:0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    }
    #table2{
        box-shadow:0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    }

</style>


<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-light white lighten-1 navbar-padding">
    <a class="navbar-brand tittle-text" href="#"><b>STONE JOURNEY</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
        <ul class="navbar-nav mr-auto">
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
            <li class="nav-item">
                <a class="nav-link" href="#"><b class="small-text">STONE JOURNEY</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b class="small-text">CONTACTS</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b class="small-text">MY PROFILE</b></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <!--                <li class="nav-item active">-->

            <!--                </li>-->

            <li class="nav-item avatar">
                <a class="nav-link p-0" href="#">
                    <img src="http://localhost/wordpress/wp-content/uploads/2020/01/face.jpg"
                         class="rounded-circle z-depth-0"
                         alt="avatar image" height="35">
                    <b class="small-text">Ana Magallanes</b>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->

<div class="container row" id="contenedor">

    <div class="container col-md-3" >
        <i class="far fa-user-circle" id="icon_user"></i>
        <h4><b>Kelly Slater</b></h4> <br>
        <h6><b>+351 9339948</b></h6>
        <h6><b>Kelly@wsl.com</b></h6>
        <i class="fas fa-user-circle"></i>

    </div>

    <div class="container col-md-9" id="contenedor_derecho">
        <div class="row" id="row_content">
            <div class="col-md-4">
                <i class="fas fa-user-circle"></i>
                profile
            </div>
            <div class="col-md-4">
                <i class="fas fa-building"></i>
                properties
            </div>
            <div class="col-md-4">
                <i class="fas fa-file-contract"></i>
                representatives
            </div>
        </div>
        <d class="row">
            <div class="col-md-4">
                <b>Name:</b> Kelly <br>
                <b>Lastname:</b> Slater <br>
                <b>Password:**********</b> <br>
                <b>Telephone:</b> +351 9339948 <br>
                <b>Nationality:</b> United States <br>
                <b>Birthday:</b> 21/10 <br>
                <b>Company:</b> Empire Holding

            </div>
            <div class="col-md-4">
                <b>Properties:</b> Rossio, Vila Maria Pia <br>
                <b>Account Manager:</b> Mariana Vozone <br>
                <b>Comission:</b> <br>
                <b>Discount </b>
                <!-- radio button "yes"-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="defaultInline1"
                           name="inlineDefaultRadiosExample">
                    <label class="custom-control-label" for="defaultInline1">Yes</label>
                </div>

                <!-- radio button "no"-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="defaultInline2"
                           name="inlineDefaultRadiosExample">
                    <label class="custom-control-label" for="defaultInline2">No</label>
                </div>
                <br>

                <b>Extra Works</b>
                <!-- radio button "yes"-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="defaultInline1"
                           name="inlineDefaultRadiosExample">
                    <label class="custom-control-label" for="defaultInline1">Yes</label>
                </div>

                <!-- radio button "no"-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="defaultInline2"
                           name="inlineDefaultRadiosExample">
                    <label class="custom-control-label" for="defaultInline2">No</label>
                </div>
                <br>

                <b>purpose</b>
                <!-- radio button "investment"-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="defaultInline1"
                           name="inlineDefaultRadiosExample">
                    <label class="custom-control-label" for="defaultInline1">Investment</label>
                </div>

                <!-- radio button "Golden Visa"-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="defaultInline2"
                           name="inlineDefaultRadiosExample">
                    <label class="custom-control-label" for="defaultInline2">Golden Visa</label>
                </div>

                <!-- radio button "Live"-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="defaultInline3"
                           name="inlineDefaultRadiosExample">
                    <label class="custom-control-label" for="defaultInline3">Live</label>
                </div>
                <br>

            </div>

            <div class="col-md-4">
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
<div class="container row" id="replica">
    <div class="container col-md-4" id="contenedor_1">
        <div>
            <h3><b>properties</b></h3>
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <img src="http://localhost/wordpress/wp-content/uploads/2020/01/building1.jpg" alt="">
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
            <img src="http://localhost/wordpress/wp-content/uploads/2020/01/building1.jpg" alt="">
            <b>Rossio 93</b>
            <img src="http://localhost/wordpress/wp-content/uploads/2020/01/building1.jpg" alt="">
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


    <div class="row" style="margin: 3%;">
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
                    <td><i class="fas fa-file-invoice-dollar"></i></td>
                    <td>Payment Summons</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="fas fa-file-signature"></i></td>
                    <td>Promissory Contract Payment</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="fas fa-file-invoice"></i></td>
                    <td>Reservation Fee Reinforcement</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="fas fa-file-image"></i></td>
                    <td>Reservation Form</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="fas fa-images"></i></td>
                    <td>Welcome letter</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>

                </tbody>
            </table>

            <div style="border: 1px solid #ded6d6;">
                <div class="row justify-content-end margin-rigth-min">
                    <div class="col-xs-4" style="padding: 0 !important;">
                        <button type="button" class="btn btn-blue-grey btn-sm">VIEW ALL MILESTONES</button>
                    </div>
                    <div class="col-xs-4" style="padding: 0 !important;">
                        <button type="button" class="btn btn-blue-grey btn-sm">CREATE NEW MILESTONE</button>
                    </div>
                </div>
            </div>
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
                    <td><i class="far fa-file-alt"></i></td>
                    <td>Floor plan</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="far fa-file"></i></td>
                    <td>Document</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="far fa-images"></i></td>
                    <td>Photo Gallery</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="far fa-file-image"></i></td>
                    <td>Photo</td>
                    <td>Private</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><i class="far fa-file-image"></i></td>
                    <td>Photo</td>
                    <td>Public</td>
                    <td>20/02/2020</td>
                </tr>

                </tbody>
            </table>

            <div style="border: 1px solid #ded6d6;">
                <div class="row justify-content-end margin-rigth-min">
                    <div class="col-xs-4" style="padding: 0 !important;">
                        <button type="button" class="btn btn-blue-grey btn-sm">VIEW ALL DOCUMENTS</button>
                    </div>
                    <div class="col-xs-4" style="padding: 0 !important;">
                        <button type="button" class="btn btn-blue-grey btn-sm">CREATE NEW DOCUMENT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php get_footer(); ?>
