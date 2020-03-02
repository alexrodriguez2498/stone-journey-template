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
        font-size: 1.2rem;
    }

    p b {
        font-weight: bold;
    }
    b{
        font-weight: bold   ;
    }

    @media (max-width:576px){
        .second-row section p{
            margin: 0;
        }
        .second-row{
            border-bottom:none!important;
        }
        .third-row{
            padding-top: 0px!important;
            padding-bottom:2rem;
        }
        .third-row p{
            margin:0;
        }
    }
    .first-row .col-6{
        border-bottom:  1px solid #967c5c;
    }

</style>

<div class="row container box-center container-box py-3 background-white"
     style="margin-top: 2rem; padding-bottom: 0 !important;">
    <div class="py-4 z-depth-1 col justify-content-between" . style="border-bottom: 2px solid #8c6f49; display: flex">
        <section class="px-md-2 mx-md-2 dark-grey-text w-100 d-flex align-items-center">
            <h2 class="h2 pl-3">Payment Summons </h2>
        </section>

        <div class="nav-item dropdown dropdown-main">
            <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item">Edit Property</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4 container box-center container-box container-box half_container background-none">
    <div class="py-3 z-depth-1 col " id="background_2" style="background: white !important; padding: 0 !important;">
        <div class="row first-row d-block d-sm-none container container-box box-center py-3 pl-4">
            <div class="col-sm-3 col-6" >
                <b> Rossio 93</b>
            </div>
        </div>
        <div class="row container box-center container-box" style="margin-top: 2rem;">
            <div class=" col py-4 border-bottom ">
                <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
                    <p><b>Description:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at convallis
                        nisi.
                        Etiam sed magna vel felis gravida convallis. Donec ultricies tellus non ligula facilisis
                        tristique id in enim.
                        In a tristique lacus. In porttitor eros at tellus finibus scelerisque. Morbi vitae neque eu
                        nulla hendrerit finibus vestibulum at nulla.
                        Donec vehicula porta ultrices. Cras at massa in tortor placerat interdum.</p>
                </section>
            </div>

        </div>
        <div class="row container box-center border-bottom container-box pt-4 second-row" style="margin-top: 2rem;">
            <div class=" col-sm-6 pt-0 " >
                <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
                    <p style="line-height:2rem;">

                        <b>Owner:</b> Private <br>
                        <b>Category:</b> Legal <br>
                        <b><Address></Address>:</b> Rossio 93
                    </p>
                </section>
            </div>
            <div class=" col-sm-6 pt-0" >
                <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
                    <p style="line-height:2rem;">
                        <b>Date:</b> 20/02/2020 <br>
                        <b>Property:</b> Rossio 93 <br>
                        <b>Segment:</b> None

                    </p>
                </section>
            </div>
        </div>
        <div class="row container box-center border-bottom container-box pt-4 third-row" style="margin-top: 2rem;">
            <div class=" col-sm-6 pt-0 " id="background_1">
                <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
                    <p style="line-height:2rem;">

                        <b>Milestone:</b> Private
                    </p>
                </section>
            </div>
            <div class=" col-sm-6 pt-0 " id="background_1">
                <section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
                    <p style="line-height:2rem;">
                        <b>Current:</b>

                    </p>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4 container box-center container-box  d-none d-sm-block background-none"
     style=" margin-top: .5rem !important;">
    <div class="py-3 z-depth-1 col " id="background_2" style="background: white !important;">

        <table class="table">
            <thead>
            <tr>
                <th scope="col"><b></b></th>
                <th scope="col"><b>NAME</b></th>
                <th scope="col"><b>MODIFIED</b></th>
                <th scope="col"><b>RECENT ACTIVITY</b></th>
                <th scope="col"><b>TYPE</b></th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border-bottom text-center"><i class="fas fa-file-invoice-dollar fa-2x"></i></td>
                <td class="border-bottom">Payment Summons</td>
                <td class="border-bottom">20/02/2020</td>
                <td class="border-bottom">20/02/2020</td>
                <td class="d-flex justify-content-between border-bottom">Word Document
                    <div class="nav-item dropdown d-flex align-items-center ">

                        <a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">Edit Property</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>

                </td>

            </tr>


            </tbody>
        </table>


        <!-- </section> -->
    </div>
</div>
<div class="row mt-4 container box-center container-box  d-block d-sm-none background-none"
     style=" margin-top: .5rem !important;">    <div class="card ">
        <div class="card-body d-flex" style="padding:1rem;">
            <!-- card content -->
            <div class="mobile-card-icon" style="padding: 0.5rem 1rem 1rem;">
                <i class="fas fa-file-invoice-dollar fa-2x pr-3"></i>
            </div>
            <div class="mobile-card-content" style="width:100%;">
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
</div>


<?php get_footer(); ?>
