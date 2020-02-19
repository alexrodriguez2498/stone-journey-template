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


    /*.navbar-padding {*/
    /*    padding-left: 4%;*/
    /*    padding-right: 4%;*/
    /*}*/


    #contenedor {
        margin: auto;
        display: flex;
        justify-content: center;
        margin-top: 2rem;

    }

    .row_content {
        height: 50px;
        align-items: center;
        font-size: 0.8rem;
        font-weight: bold;
        border-right: 1px solid #dee2e6;
        border-left: 1px solid #dee2e6;
        border-top: 1px solid #dee2e6;
    }

    #contenedor_derecho {
        font-size: 0.8rem;
        text-align: left;
        line-height: 1.3rem;
    }

    h3 {
        margin-bottom: 1.5rem;
        margin-left: 1rem;
    }

    .column {
        width: 100%;
        height: 100%;
    }

    .card {
        box-shadow: 0 0px 0px 0;
        height: 19rem;
        border: 1px solid #dee2e6;
    }

    .profile-content {
        padding-top: 1rem;
        padding-bottom:1.85rem;
        margin-bottom: 1rem;
        line-height: 1.85rem;
        border-right: 1px solid #dee2e6;
        border-left: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6;
    }


    b {
        font-weight: bold;
    }

    .td_icon {
        text-align: end;
    }

    .middle_container {
        display: flex;
        align-items: center;
        padding-bottom:2rem;
        padding-top:2rem;
        margin-top:30px;
    }

    .middle_container ul {
        display: flex;
        align-items: center;
        margin:0;
        padding:0;
 
    }

    .middle_container ul li {
        margin:2rem 1.5rem;
        align-items: center;
        display: flex;
    }

    .middle_container ul li .special {
        border-bottom: 1px solid black;
    }

    #td-special-2 {
        text-align: end;
        padding-top: 3rem !important;
    }

    #last_container {
        border-right: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6;
        border-left: 1px solid #dee2e6;
        padding: 2rem;
        padding-top:0;
    }

    .images_container {
        display: grid;
        grid-template: 250px 250px/ repeat(5, 1fr);
        padding-top:1rem;
        grid-gap:5px;
        padding-left:0;
        padding-right:0;
        margin-top:30px;
        margin-bottom:40px;

    }
    .images_container .image_content {
        background-image:url('https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/profile_woman.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }

    .card-title {
        margin-bottom: 0;
        padding: 0;
    }


</style>

<div class="container row" id="contenedor">

    <div class="container col-md-3 profile">
        <!-- Card -->
        <div class="card">

            <!-- Card image -->
            <img class="card-img-top" style="height:12rem;" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
                 alt="Card image cap">

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
            <div class="col d-flex align-items-center">

                <i class="fas fa-building fa-3x" style=></i>
                <h3> <b>Property information</b> </h3>
            </div>
        </div>
        <div class="row profile-content">
            <div class="col-md-6 column">
                <b>Property Name:</b> Kelly <br>
                <b>Architect:</b> <b>Intergaup</b> <br> 
                <b>Address:</b> Praca do Rossio, 93, Baixa, Lisboa, Portugal. <br>
                <b>Location:</b> <u>www.googlemaps.com/rossio93</u> <br>
                <b>About the property:</b> in the myriad of lights and wonders <br>
                of the city, the charming and centrally-located Roddio 93 <br>
                is home to a shining jewel: a re-imaginated classic. <br>
               


            </div>

            <div class="col-md-6 column">
                <b>Foreseen conclusion::</b> 2019 <br>
                <b>Users:</b> Residential and Retail <br>
                <b>Website:</b> https://www.rossio93.pt <br>
                <b>Status:</b> In development <br>
                <b>Estimated date for beginning of construction:</b> Sep 12, 2020 <br>
                <b>Estimated Delivery Date:</b> Sep 12, 2020 <br>
                <b>Number of Sellable Units:</b> 14 <br>
                
        </div>
    </div>
</div>
<div class="container row_content middle_container">
    <ul>
        <li><h4><b>Clients</b></h4></li>
        <li><h4><b class="special">Milestones</b></h4></li>
        <li><h4><b>Documents</b></h4></li>
    </ul>
</div>
<div class="container" id="last_container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col"><b></b></th>
            <th scope="col"><b>NAME</b></th>
            <th scope="col"><b>PROPERTY</b></th>
            <th scope="col"><b>OWNER</b></th>
            <th scope="col"><b>ADDRESSEE</b></th>
            <th scope="col"><b>UNIT</b></th>
            <th scope="col"><b>CATEGORY</b></th>
            <th scope="col"><b>DATE</b></th>
            <th scope="col"><b></b></th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt=""></td>
            <td>Payment Summons</td>
            <td>Rossio</td>
            <td>Private</td>
            <td>Ana Humble</td>
            <td>A1</td>
            <td>General</td>
            <td>20/02/2020</td>
            <td class="d-flex align-items-center"> <div class="footer-details-2 ">
            5   
            <i class="fas fa-file-signature"></i>
            2
            <i class="fas fa-file-pdf"></i>
            </div>
            <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>

        </tr>
        <tr>
            <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt=""></td>
            <td>Promissory Contract Payment</td>
            <td>Rossio</td>
            <td>Private</td>
            <td>Ana Humble</td>
            <td>A1</td>
            <td>General</td>
            <td>20/02/2020</td>
            <td class="d-flex align-items-center"> <div class="footer-details-2 ">
            5   
            <i class="fas fa-file-signature"></i>
            2
            <i class="fas fa-file-pdf"></i>
            </div>
            <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
        </tr>
        <tr>
            <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building1.jpg" alt=""></td>
            <td>Reservation Fee Reinforcement</td>
            <td>Rossio</td>
            <td>Private</td>
            <td>Ana Humble</td>
            <td>A1</td>
            <td>General</td>
            <td>20/02/2020</td>
            <td class="d-flex align-items-center"> <div class="footer-details-2 ">
            5   
            <i class="fas fa-file-signature"></i>
            2
            <i class="fas fa-file-pdf"></i>
            </div>
            <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
        </tr>
        <tr>
            <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building5.jpg" alt=""></td>
            <td>Reservation Form</td>
            <td>Rossio</td>
            <td>Private</td>
            <td>Ana Humble</td>
            <td>A1</td>
            <td>General</td>
            <td>20/02/2020</td>
            <td class="d-flex align-items-center"> <div class="footer-details-2 ">
            5   
            <i class="fas fa-file-signature"></i>
            2
            <i class="fas fa-file-pdf"></i>
            </div>
            <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
        </tr>
        <tr>
            <td class="td_icon"><img src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/01/Building2.jpg" alt=""></td>
            <td>Welcome letter</td>
            <td>Rossio</td>
            <td>Private</td>
            <td>Ana Humble</td>
            <td>A1</td>
            <td>General</td>
            <td>20/02/2020</td>
            <td class="d-flex align-items-center"> <div class="footer-details-2 ">
            5   
            <i class="fas fa-file-signature"></i>
            2
            <i class="fas fa-file-pdf"></i>
            </div>
            <div class="nav-item dropdown">
                        <a class="nav-link fas fa-ellipsis-v" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div></td>
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
            <td></td>
        </tr>

        </tbody>
    </table>
    <div class="d-flex justify-content-end"> 
        <button type="button" class="btn btn-blue-grey"style="background:#979797 !important;">VIEW ALL MILESTONES</button>
        <button type="button" class="btn btn-blue-grey"style="background:#979797 !important;">CREATE NEW PROPERTY</button>
</div>
            
           
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

<div class="container p-0 map_container">
<!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
      alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Rossio 93</h4>
    <!-- Text -->
    <p class="card-text">Praca da Figueira</p>
    

  </div>

</div>
<!-- Card --></div>

<?php get_footer(); ?>
