<?php get_header(); ?>

<style>

@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

    .container-custom {
        display: flex;

        flex-direction:row;
        padding: 0;
    }

    /* .container-child-right {
        margin: 0.5rem 0 0.5rem 0.5rem;
        height: 100px;
        display:flex;
        align-items:center;
    }
    .container-child-left {
        margin: 0.5rem 0.5rem 0.5rem 0;
        height: 100px;
        display:flex;
        align-items:center; */
    }
    #background_1{
        height:200px;
        display:flex;
        align-items:center;
        padding:24px 30px;
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
        background-color:#f4f1ee;
            /* background-image: url("https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/fondo.jpg"); */
            /* background-size: cover; */
            /* background-attachment: fixed    ; */
            /* background-repeat:no-repeat; */
            /* background-position:center center; */
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
              /* padding-left:1rem; */
            }
        }
        @media(max-width:1300px){
            #imagen{
                padding-left:1rem;
            }
            .navbar .collapse{
                padding-right:1rem;
            }
        }
        @media(max-width:650px){
            #background_1{
                padding:10px 10px;
                height: auto;
            }
            #background_1 h3{
                font-size:30px;
                /* text-align:center; */
            }
            #background_1 p{
                /* text-align:center; */
            }
            /* .background_1-button .button{
                display:flex;
                justify-content:center; */
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
        }
        #background_2{
            background:white;
            height:80px;
            display:flex;
            align-items:center;
            /* padding-bottom:0! important; */
            justify-content:space-between;
            padding:16px 30px 0px 30px!important;

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
        .button{
            color:white;
            background:#947956;
        }
        .second_nav{
            display:flex;
            list-style:none;
        }
        .second_nav .second_nav-item{
            color:black;
            font-weight:bold;
            padding:10px 50px;
        }
        .second_nav .search{
            color:#9e9fa0;
            border-bottom:1px solid #9e9fa0;
            padding-left:100px;
        }
        .cards_container{
            display:flex;
            margin-top:30px;
            justify-content:space-between;

        }
        .card-icon-title{
            display:flex;
            align-items:center;
            padding:20px;
        }
        .card-icon-title h4{
            padding-left:10px;
            padding-top:10px;
        }
        .card{
            margin:20px;
        }
        @media(max-width:910px){
            .cards_container{
                flex-direction:column;
            }
            .second_nav{
                display:none;
            }
            .card{
                
            }

        }
        /* .background_1-button{
            display:flex;
        } */
        .cards_container .card h4{
            font-weight:bold;
        }
        .cards_container .card .card-text strong{
            font-weight:bold;
            color:black;
        }
        #background_1 h4{
            font-size:52px;
        }
        #background_1 p{
            font-size:24px;
            line-height:30px;
        }
        .card .card-body .card-text{
            font-size:16px;
        }

</style>

<link href="http://allfont.es/allfont.css?fonts=roboto-light" rel="stylesheet" type="text/css" />
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

<div class="row mt-3 container-box" >
    <div class="mt-5 py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" id="container__center">

            <h4>Properties</h4>
            <p>From this section you will be able to create and manage your properties.</p>
            <div class="background_1-button">
            <button type="button" class="btn button">CREATE PROPERTY</button>
            </div>

        </section>
        <!--Section: Content-->


    </div>
</div>

<!--<div class="container">-->
    <div class="row mt-3 container-box">
        <div class="py-3 z-depth-1 col "id="background_2">
            <!-- <section class="px-md-2 mx-md-2 dark-grey-text"> -->
                <!-- <div class="background_2-content"> -->
                    <p><strong>Filter by:</strong> Name</p>
                    <ul class="second_nav">
                        <li><a class="second_nav-item" href="#">Grid</a></li>
                        <li><a class="second_nav-item" href="#">Map</a></li>
                        <li><a class="second_nav-item" href="#">List</a></li>
                        <li><a class="search" href="#">search</a></li>
                    </ul>
                <!-- </div> -->
                    <!-- <form class="form-inline md-form form-sm mt-0">
                    <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                        aria-label="Search">
                    </form> -->
                <!-- </div> -->

            <!-- </section> -->
        </div>
<div class="cards_container">
            <!-- Card -->
<div class="card">
<div class="card-icon-title">
        <img src="http://localhost/wordpress/wp-content/uploads/2020/01/building1.jpg" alt="">
        <h4>Rossio 93</h4>
    </div>
<!-- Card image -->
<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

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
<div class="card-icon-title">
        <img src="http://localhost/wordpress/wp-content/uploads/2020/01/building1.jpg" alt="">
        <h4>Vila Maria Pia</h4>
    </div>
  <!-- Card image -->
  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

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
<div class="card">
    <div class="card-icon-title">
        <img src="http://localhost/wordpress/wp-content/uploads/2020/01/building1.jpg" alt="">
        <h4>Augusta 170</h4>
    </div>
  <!-- Card image -->
  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

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

       



	<?php get_footer(); ?>
