<?php get_header(); ?>

<style>

    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

    body {
        background-image: url("https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/P1_Quarto_white-scaled.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        /* background-opacity:0.5; */
        font-family: "roboto";
    }
    .container-box {
        margin-right: 2rem;
        margin-left: 2rem;
    }
                                                                                                         /* TOP SECTION */
    #background_1 {
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
    #background_1 {
        background: white;
    }
    #background_2 {
        background: white;
        align-items: center;
        justify-content: space-between;
        padding: 16px 30px 0px 30px !important;
    }
    
    #background_1 h4 {
        font-size: 52px;
    }

    #background_1 p {
        font-size: 24px;
        line-height: 30px;
    }
    #background_5 {
        background: white;

    }
    .button {
            color: white;
            background: #947956;
        }
                                                                                                    /* END OF TOP SECTION */

   
                                                                                                    /* MEDIA SECTION */

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
        #background_1 h3 {
            font-size: 16px;
        }
    }
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
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }
        #background_1 h3 {
            font-size: 30px;
        }
    }
    @media (max-width: 910px) {
        .second_nav {
            display: none;
        }
         .card {
            height: 22rem;
        }
    }
                                                                                            /* END OF MEDIA SECTION */

                                                                                            /* MIDDLE NAV SECTION */
    #dropdownMenu1 {
        box-shadow: 0 0 0 0;
        margin: 0;
        padding-top: 0;

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
                                                                                        /* END OF MIDDLE NAV SECTION */

                                                                                        /* CARDS SECTION */
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
        padding:0.5rem;
    }
    .card-img-top{
        height:auto;
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
                                                                                        /* END OF CARDS SECTION */
</style>

<div class="row container-box" style="margin-top: 2rem;">
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" id="container__center" style="width: 100%;">

            <h3>Clients</h3>
            <p>From this section you can quickly acces your clients. You can easily find them, filter them by property,
                nationality or type of investment.</p>
            <div class="row justify-content-end background_1-button">
                <button type="button" class="btn button z-depth-1 add-button">ADD CLIENT</button>
            </div>

        </section>

    </div>
</div>

<!--<div class="container">-->
<div class="row mt-4 container-box half_container">
    <div class="py-3 z-depth-1 col " id="background_2">

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
    </div>
</div>
<div class="container-box clients-container"style="margin-top:2rem;">
<div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-5">
  <div class="col mb-4">
    <div class="card h-100 z-depth-1">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
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
    <div class="card h-100 z-depth-1">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
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
    <div class="card h-100 z-depth-1">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Card image cap">
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
    <div class="card h-100 z-depth-1">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Card image cap">
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
    <div class="card h-100 z-depth-1">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Card image cap">
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
    <div class="card h-100 z-depth-1">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
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
    <div class="card h-100 z-depth-1">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
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
    <div class="card h-100 z-depth-1">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Card image cap">
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
    <div class="card h-100 z-depth-1">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Card image cap">
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
    <div class="card h-100 z-depth-1">
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Card image cap">
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
