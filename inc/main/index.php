<?php get_header(); ?>

<style>

    .container-custom {
        display: flex;

        flex-direction:row;
        padding: 0;
    }

    .container-child-right {
        margin: 0.5rem 0 0.5rem 0.5rem;
    }
    .container-child-left {
        margin: 0.5rem 0.5rem 0.5rem 0;
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

</style>


<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-light white lighten-1 navbar-padding">
<img src="http://localhost/wordpress/wp-content/uploads/2020/01/logo.jpg" alt="">
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
                    <img src="http://localhost/wordpress/wp-content/uploads/2020/01/face.jpg"
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

<div class="row mt-3 container-box">
    <div class="mt-5 py-4 z-depth-1 col">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text">

            <h3>Welcome Mariana</h3>
            <h5>This is your <b>Stone Journey Dashboard,</b> from here you can manage your Properties, Clients, Milestones and Documents.</h5>

        </section>
        <!--Section: Content-->


    </div>
</div>

<!--<div class="container">-->
    <div class="row mt-3 container-box">
        <div class="py-3 z-depth-1 col container-child-left">
            <section class="px-md-2 mx-md-2 dark-grey-text">

                <h4>Properties</h4>

            </section>
        </div>

        <div class=" py-3 z-depth-1 col container-child-right">
            <section class="px-md-2 mx-md-2 dark-grey-text">

                <h4>Clients&nbsp;&nbsp;&nbsp;</h4>

            </section>
        </div>
    </div>
    <div class="row mt-3 container-box">
        <div class="py-3 z-depth-1 col container-child-left">
            <section class="px-md-2 mx-md-2 dark-grey-text">

                <h4>Milestones</h4>

            </section>
        </div>

        <div class=" py-3 z-depth-1 col container-child-right">
            <section class="px-md-2 mx-md-2 dark-grey-text">

                <h4>Documents</h4>

            </section>
        </div>
    </div>
<!--</div>-->



	<?php get_footer(); ?>
