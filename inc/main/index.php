<?php get_header(); ?>

<style>

    .container-custom {
        display: flex;

        flex-direction:row;
        padding: 0;
    }

    @media(max-width: 576px) {
        .container-custom {
            flex-direction:column;
        }
    }

    @media(min-width: 577px) {
        .container-left{
            margin-right: 0.5rem;
        }

        .container-right{
            margin-left: 0.5rem;
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

<div class="container mt-5 py-4 z-depth-1">


    <!--Section: Content-->
    <section class="px-md-2 mx-md-2 dark-grey-text">

        <h3 class="font-weight-bold">Welcome Mariana</h3>
        <span>This is your <b>Stone Journey Dashboard,</b> from here you can manage your Properties, Clients, Milestones and Documents.</span>

    </section>
    <!--Section: Content-->


</div>

<div class="container container-custom">
    <div class=" mt-3 py-3 z-depth-1 col-md-6 col-xs-12 container-left">
        <section class="px-md-2 mx-md-2 dark-grey-text">

            <h4>Properties</h4>

        </section>
    </div>

    <div class=" mt-3 py-3 z-depth-1 col-md-6 col-xs-12 container-right">
        <section class="px-md-2 mx-md-2 dark-grey-text">

            <h4>Properties</h4>

        </section>
    </div>
</div>

	<?php get_footer(); ?>
