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

    .second_nav .second_nav-item-decoration {
        color: black;
        font-weight: bold;
        border-bottom: 1px solid black;
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

    /*.card {*/
    /*    margin: 20px;*/
    /*    width: 15rem;*/
    /*    height: 22rem;*/
    /*}*/

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

        .clients-container .card {
            /*width: 15rem;*/
            height: 22rem;
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
    .card-title{
        font-size:20px;
        font-weight:bold;
        margin-bottom:0;
    }
    .card-text{
        font-size:14px;
        line-height:1.25rem;
    }
    .card-body{
        padding:1rem;
    }
    .card-img-top{
        height:13rem;
    }

    /*@media (max-width: 915px) {*/
    /*    .card {*/
    /*        margin-left: 0 !important;*/
    /*        margin-right: 0 !important;*/
    /*    }*/
    /*}*/

</style>

<link href="http://allfont.es/allfont.css?fonts=roboto-light" rel="stylesheet" type="text/css"/>

<div class="row container-box" style="margin-top: 2rem;">
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" id="container__center" style="width: 100%;">

            <h3>Clients</h3>
            <p>From this section you can quickly acces your clients. You can easily find them, filter them by property,
                nationality or type of investment.</p>
            <div class="row justify-content-end background_1-button">
                <button type="button" class="btn button">ADD CLIENT</button>
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
                <li><a class="second_nav-item-decoration" href="#">Grid</a></li>
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
</div>
<div class="container-box clients-container"style="margin-top:2rem;">
<div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-5">
  <div class="col mb-4">
    <div class="card h-100">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title"><strong>Sofia Muller</strong></h4>
        <!--Text-->
        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

      </div>

    </div>
    <!-- Card -->
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title"><strong>Ana Peter</strong></h4>
        <!--Text-->
        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

      </div>

    </div>
    <!-- Card -->
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title"><strong>Carlos Newman</strong></h4>
        <!--Text-->
        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

      </div>

    </div>
    <!-- Card -->
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title"><strong>Maria Jones</strong></h4>
        <!--Text-->
        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

      </div>

    </div>
    <!-- Card -->
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title"><strong>Hans Vollenwider</strong></h4>
        <!--Text-->
        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

      </div>

    </div>
    <!-- Card -->
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title"><strong>Arthur Les Jardins</strong></h4>
        <!--Text-->
        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

      </div>

    </div>
    <!-- Card -->
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title"><strong>Peter Thomas</strong></h4>
        <!--Text-->
        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

      </div>

    </div>
    <!-- Card -->
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title"><strong>Cristian ALder</strong></h4>
        <!--Text-->
        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

      </div>

    </div>
    <!-- Card -->
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title"><strong>Federico Da Silva</strong></h4>
        <!--Text-->
        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

      </div>

    </div>
    <!-- Card -->
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body">

        <!--Title-->
        <h4 class="card-title"><strong>Carlota De la Fuente</strong></h4>
        <!--Text-->
        <p class="card-text">+351 93399448 <br>Rossio 93 <br>ana@cto.com</p>

      </div>

    </div>
    <!-- Card -->
  </div>
</div>
</div>


        <?php get_footer(); ?>
