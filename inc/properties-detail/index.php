<?php get_header(); ?>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

    .container-custom {
        display: flex;

        flex-direction:row;
        padding: 0;
    }

    .container-child-right {
        margin: 0.5rem 0 0.5rem 0.5rem;
        height: 100px;
        display:flex;
        align-items:center;
    }
    .container-child-left {
        margin: 0.5rem 0.5rem 0.5rem 0;
        height: 100px;
        display:flex;
        align-items:center;
    }
   
    #container__center h3{
        font-size:45px;
        font-weight:400;
    }
    #container__center p{
        font-size:22px;
    }
    #imagen{
        /*height: 25px;*/
        width: 6rem;
    }
    .tittle-text {
        font-size:18px;
        letter-spacing:1px;
        font-weight:400;
        color:#947956;
    }

    @media(max-width: 576px) {
        .container-custom {
            flex-direction:column;
        }
    }

    /*@media(min-width: 577px) {*/
    /*    .container-left{*/
    /*        margin-right: 0.5rem;*/
    /*    }*/

    /*    .container-right{*/
    /*        margin-left: 0.5rem;*/
    /*    }*/

    .container-box {
        margin-right: 2rem;
        margin-left: 2rem;
    }
    body{
            /* background-image: url("https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/fondo.jpg");
            background-size: cover;
            background-attachment: fixed    ;
            background-repeat:no-repeat;
            background-position:center center; */
            font-family:"roboto";
                }
        /*@media(max-width:576px){*/
        /*    body{*/
        /*        background-image: url("https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/fondo_3.jpg");*/
        /*    }*/
        /*}*/
        @media(max-width:425px){
            .container-box{
                display: flex;
                flex-direction: column;
            }
            #background_3{
                margin-left:0;
            }
            #background_5{
                margin-left:0;
            }
            /*                                                                     revisar lo que esta encerrado */
            #background_1 h3{
                font-size:16px;
            }
            .container-box-2{
                margin-top:0;
            }
        }
        /*                                                                          revisar lo que esta encerrado */
        @media(min-width:1300px){
            .container-box{
                margin: auto 15%;
            }
            .navbar-collapse{
                margin-right: 14%;
            }
            #imagen{
              margin-left:14%;
          }

        }
        @media(max-width:650px){
            #background_1{
                padding:10px 10px;
                height: auto;
            }
            #background_1 h3{
                font-size:30px;
                text-align:center;
            }
            #background_1 p{
                text-align:center;
            }
        }

        #search_icon {
            color: #8c704a;
        }

        @media(min-width:991px){
            #search_icon{
                display: none;
            }
        }
      

    .navbar-brand{
        margin-left:1rem;
    }
    .navbar-collapse a{
        margin:0 20px;
    }
    .avatar a{
        margin:0;
    }
    .navbar .nav-bold{
        font-weight:bold;
    }
    

        html{
            height:100%;
        }
        .customize-support{
            height:100%;
        }
        #background_1{
            background:white;
            height:200px;
            display:grid;
            /* align-items:center; */
            padding:24px 30px;
            /* width:70px;
            margin:10px;
        } */
        grid-template-columns:2fr 10fr;
        }
        #background_2{
            background:white;

        }
        #background_3{
            background:white;

        }
        #background_4{
            background:white;

        }
        #background_5{
            background:white;

        }

        .small-text {
            font-size: 0.75rem;
            font-weight: bold;
        }
</style>
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

    .row_content {
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
    .td_icon{
        text-align:end;
    }
    .th_special{
        padding-right:10rem;
    }
    .middle_container{
        display:flex;
        align-items:center;
    }
    .middle_container ul{
        display:flex;
        align-items:center;
    }
    .middle_container ul li{
        margin:1rem 4rem 0 4rem;
        align-items:center;
        display:flex;
    }
    .middle_container ul li:nth-child(3){
        border-bottom:1px solid black;
    }
    .end_container{
        display:flex;
        justify-content:flex-end;
    }
    #td-special-2{
        text-align:end;
        padding-top:3rem !important;
    }
    #last_container{
        border-right:1px solid #dee2e6;
        border-bottom:1px solid #dee2e6;
        border-left:1px solid #dee2e6;
        padding:2rem;
    }
    .images_container{
        display:grid;
        grid-template:250px 250px/ repeat(5, 1fr);

    }

</style>


<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-light white lighten-1 navbar-padding">

    <img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/Logo.png" id="imagen" alt="">
<!--    <a class="navbar-brand tittle-text" href="#"><b>STONE   </b></a>-->

    <div>
        <i class="fas fa-search" id="search_icon"></i>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
                aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link nav-bold" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Properties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Milestones</a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#"><b class="small-text">STONE JOURNEY</b></a>-->
<!--            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="#">Documents</a>
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
                    <b class="small-text">Ana Magalhaes</b>
                </a>
            </li>
        </ul>
    </div>
    </div>
</nav>
<!--/.Navbar -->

<div class="container row" id="contenedor">

    <div class="container col-md-3 profile" >
<!-- Card -->
<div class="card">

  <!-- Card image -->
  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title"><a>Rossio 93</a></h4>
    <!-- Text -->
    <p class="card-text">Beauty in motion</p>

  </div>

</div>
<!-- Card -->
    </div>

    <div class="container col-md-9" id="contenedor_derecho">
        <div class="row row_content">
            <div class="col ">

                <i class="fas fa-building"></i>
                PROPERTIES
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
<div class="container row_content middle_container">
    <ul>
        <li>Clients</li>
        <li>Milestones</li>
        <li>Documents</li>
    </ul>
</div>
<div class="container" id="last_container">
<table class="table">
<tr>
                    <th scope="col"><b></b></th>
                    <th scope="col"><b>Name</b></th>
                    <th scope th_special="col"><b>Owner</b></th>
                    <th scope th_special="col"><b>Category</b></th>
                    <th scope="col"><b>Date</b></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="td_icon"><i class="fas fa-file-invoice-dollar fa-2x"></i></td>
                    <td>Payment Summons</td>
                    <td>Private</td>
                    <td>Financial</td>
                    <td>20/02/2020</td>
                    
                </tr>
                <tr>
                    <td class="td_icon"><i class="fas fa-file-signature fa-2x"></i></td>
                    <td>Promissory Contract Payment</td>
                    <td>Private</td>
                    <td>Legal</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td class="td_icon"><i class="fas fa-file-invoice fa-2x"></i></td>
                    <td>Reservation Fee Reinforcement</td>
                    <td>Private</td>
                    <td>Financial</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td class="td_icon"><i class="fas fa-file-image fa-2x"></i></td>
                    <td>Reservation Form</td>
                    <td>Private</td>
                    <td>Legal</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td class="td_icon"><i class="fas fa-images fa-2x"></i></td>
                    <td>Welcome letter</td>
                    <td>Private</td>
                    <td>General</td>
                    <td>20/02/2020</td>
                </tr>
                <tr>
                    <td><b></b></td>
                    <td><b></b></td>
                    <td><b></b></td>
                    <td><b></b></td>
                    <td id="td-special-2"> 
                    New document
                    <i class="fas fa-plus"></i>
                    </td>
                </tr>
              
                </tr>
                <thead>
                </tbody>
                <tr>
                </div>

        <div class="container images_container">
        <div class="image_content">contenido #1</div>
        <div class="image_content">contenido #2</div>
        <div class="image_content">contenido #3</div>
        <div class="image_content">contenido #4</div>
        <div class="image_content">contenido #5</div>
        <div class="image_content">contenido #6</div>
        <div class="image_content">contenido #7</div>
        <div class="image_content">contenido #8</div>
        </div>
  
	<?php get_footer(); ?>
