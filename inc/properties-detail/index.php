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
        padding-bottom: 1rem;
        margin-bottom: 1rem;
        line-height: 2rem;
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
    }

    .middle_container ul {
        display: flex;
        align-items: center;
    }

    .middle_container ul li {
        margin: 1rem 4rem 0 4rem;
        align-items: center;
        display: flex;
    }

    .middle_container ul li:nth-child(3) {
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
    }

    .images_container {
        display: grid;
        grid-template: 250px 250px/ repeat(5, 1fr);

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
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
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
            <div class="col d-flex ">

                <i class="fas fa-building"></i>
                <p>Property information</p>
            </div>
        </div>
        <div class="row profile-content">
            <div class="col-md-6 column">
                <b>Property Name:</b> Kelly <br>
                <b>Address:</b> Praca do Rossio, 93, Baixa, Lisboa, Portugal. <br>
                <b>Location:</b> <u>www.googlemaps.com/rossio93</u> <br>
                <b>About the property:</b> in the myriad of lights and wonders <br>
                of the city, the charming and centrally-located Roddio 93 <br>
                is home to a shining jewel: a re-imaginated classic. <br>
                <b>Architect:</b> <b>Intergaup</b> <br>
                <b>Foreseen conclusion::</b> 2019 <br>
                <b>Users:</b> Residential and Retail <br>
                <b>Website:</b> https://www.rossio93.pt


            </div>

            <div class="col-md-6 column">
                <b>Status:</b> In development <br>
                <b>Estimated date for beginning of construction:</b> Sep 12, 2020 <br>
                <b>Estimated Delivery Date:</b> Sep 12, 2020 <br>
                <b>Number of Sellable Units:</b> 14 <br>
                <b>Complention Bar % (Similar to a loading bar) <br>
                    Upload gallery Images <br>
                    Upload Documents</b>
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
        <thead>
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

        </tbody>
    </table>
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
