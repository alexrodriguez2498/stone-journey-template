<?php get_header(); ?>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

    #background_1 {

        align-items: center;
        padding: 15px 15px;
    }

    body {
        background-image: url("https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/P1_Quarto_white-scaled.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        /* background-opacity:0.5; */
        font-family: "roboto", serif;
    }

    #background_2 {
        padding: 8px 30px 10px 30px !important;
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
        padding: .7rem .7rem 0;
    }

    .card {
        margin: 20px;
    }


    #background_1 p {
        font-size: 1.2rem;
        line-height: 2rem !important;
    }

    .card .card-body .card-text {
        font-size: 1rem;
    }

    #dropdownMenu1 {
        box-shadow: 0 0 0 0;
        margin: 0;
        padding-top: 0;
    }

    @media (max-width: 915px) {
        .card {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
    }

    .dropdown .dropdown-menu .dropdown-item:hover {
        background: #f9f8f6 !important;
        color: #000 !important;
        box-shadow: none;
    }

    @media (min-width: 900px) and (max-width: 995px) {
        .tittleCardCustom {
            font-size: 1.2rem !important;
        }
    }

    .nav-item-selected-custom {
        border-bottom: 2px solid #967c5c;
        height: fit-content;
        padding-bottom: 10px;
    }

    .last_container_table {
        border: 1px solid #dee2e6;
        background: #ffffff;
        padding: 1rem;
        padding-bottom: 0 !important;
    }

    .last_container_table table tbody tr td {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    #seach {
        border-bottom: 1px solid #947956 !important;
        box-shadow: 0 1px 0 0 #947956 !important;
    }

    #seach:focus {
        border-bottom: 1px solid #947956 !important;
        box-shadow: 0 1px 0 0 #947956 !important;
    }




    b {
        font-weight: bold;
        color: black;
    }

    .cards_container {
        display: flex;
        /*margin-top: 30px;*/
        justify-content: space-between;
    }



    .card-footer div {
        color: white;
    }


    .dropdown-main {
        display: none !important;
    }

    @media (max-width: 490px) {
        .second_nav_custom_two{
            width: 40%;
        }
    }

    @media (max-width: 767px) {
        .second_nav_custom_one {
            padding-left: .2rem;
        }
        #background_2 {
            padding-left: 0 !important;
        }

        .dropdown-main {
            display: flex !important;
        }
    }
    ul li a i{
        color:#947956;
    }
    #navbarDropdownMenuLink1{
        color:#947356;
    }

    .card_custom {
        margin: 20px !important;
    }

    @media (max-width: 915px) {
        .card_custom {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
        .cards_container{
            flex-direction:column;
        }
    }

    #background_1 {
        background: white;
    }
    .cards_container .card .card-text strong {
        font-weight: bold;
        color: black;
    }
    .cards_container .card h4 {
        font-weight: bold;
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


</style>

<div class="row container box-center container-box py-3 background-white"
     style="margin-top: 2rem; padding-bottom: 0 !important;">
	<div class="py-4 z-depth-1 col justify-content-between" . style="border-bottom: 2px solid #8c6f49; display: flex">
		<section class="px-md-2 mx-md-2 dark-grey-text w-100 d-flex align-items-center">
			<h2 class="h2 pl-3">Payment Summons - Rossio 93 </h2>
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

<div class="row mt-4 container box-center container-box container-box second-row background-none">
	<div class="py-3 z-depth-1 col " id="background_2" style="background: white !important; padding: 0 !important;">

		<div class="row container box-center container-box" style="margin-top: 2rem;">
			<div class=" col-md-2 pt-4 pb-0 px-0   ">
				<section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
					<img class="w-100" src="https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/Aungusta170_ima.jpg "
					     alt="">
				</section>
			</div>
			<div class=" col-md-10 py-4 border-bottom ">
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
						<b>Segment:</b> 2019     <br>
						<b>Ocurrance Date:</b> 20/02/2020
					</p>
				</section>
			</div>
			<div class=" col-sm-6 pt-0" >
				<section class="px-md-2 mx-md-2 dark-grey-text" style="width: 100%;">
					<p style="line-height:2rem;">
						<b>Addresse:</b> Ana Humble <br>
						<b>Units:</b> 1A <br>
						<b>Category:</b> General

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
<div class="row mt-4 container box-center container-box  half_container background-none"
     style=" margin-top: .5rem !important;">
	<div class="py-3 z-depth-1 col " id="background_2" style="background: white !important;">


		<div class="row justify-content-between" style="height:45px;">
			<div class="d-flex" style="margin-left: 1rem;">

				<ul class="second_nav second_nav_custom_one pt-2">
                    <p class="d-none d-md-block pt-2" >
                        <b>Filter by</b>
                    </p>
                    <!--                    <i class="fas fa-filter d-block d-md-none" style="padding:.7rem; margin-top: .3rem;"></i>-->

                    <a class="fas fa-filter d-block d-md-none p-2 mt-2" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"></a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Proyect Status</a>
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Architech</a>
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Location</a>
                        <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Name</a>
                    </div>

                    <div class="dropdown d-none d-md-block" style="line-height: 2.3rem;">

                        <!--Trigger-->
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" style="padding-left: 5px; padding-top:14px;">
                        </button>

                        <!--Menu-->
                        <div class="dropdown-menu dropdown-menu-right  p-0">
                            <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Proyect Status</a>
                            <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Architech</a>
                            <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Location</a>
                            <a class="dropdown-item" style="padding-left:1.5rem;" href="#">Name</a>
                        </div>
                    </div>

					<li id="tabMilestones" class="nav-item nav-item-selected-custom" onclick="clickFiles()">
						<a class="nav-link second_nav-item d-none d-md-block" >Files</a>
						<a class="nav-link second_nav-item d-block d-md-none" ><i class="fas fa-flag"></i></a>
					</li>


				</ul>
			</div>

			<!--/Dropdown primary-->
			<ul class="second_nav second_nav_custom_one second_nav_custom_two">

				<form class="form-inline">
					<div class="md-form my-0" style="padding-bottom:16px;">
						<input id="seach" class="form-control mr-sm-2" type="text" placeholder="Search"
						       aria-label="Search">
					</div>
				</form>
			</ul>
		</div>


		<!-- </section> -->
	</div>
</div>
<div class="mt-2 last_container_table p-4 container container-box box-center z-depth-1 w-100 d-none d-md-block" style="width: 100%; margin-top: .5rem !important;" id="tableDocuments">
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
			<td class="td_icon"><i class="fas fa-file-invoice-dollar fa-2x"></i></td>
			<td>Payment Summons</td>
			<td>20/02/2020</td>
			<td>20/02/2020</td>
			<td class="d-flex justify-content-between ">Word Document
				<div class="nav-item dropdown d-flex align-items-center ">

					<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false"></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item">Edit Property</a>
						<a class="dropdown-item" href="#">Delete</a>
					</div>

			</td>

		</tr>
		<tr>
			<td class="td_icon"><i class="fas fa-file-signature fa-2x"></i></td>
			<td>Promissory Contract Payment</td>
			<td>20/02/2020</td>
			<td>20/02/2020</td>
			<td class="d-flex justify-content-between ">Word Document
				<div class="nav-item dropdown d-flex align-items-center ">

					<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false"></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item">Edit Property</a>
						<a class="dropdown-item" href="#">Delete</a>
					</div>

			</td>
		</tr>
		<tr>
			<td class="td_icon"><i class="fas fa-file-invoice fa-2x"></i></td>
			<td>Reservation Fee Reinforcement</td>
			<td>20/02/2020</td>
			<td>20/02/2020</td>
			<td class="d-flex justify-content-between ">PDF Document
				<div class="nav-item dropdown d-flex align-items-center ">

					<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false"></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item">Edit Property</a>
						<a class="dropdown-item" href="#">Delete</a>
					</div>

			</td>
		</tr>
		<tr>
			<td class="td_icon"><i class="fas fa-file-image fa-2x"></i></td>
			<td>Reservation Form</td>
			<td>20/02/2020</td>
			<td>20/02/2020</td>
			<td class="d-flex justify-content-between ">JPEG Image
				<div class="nav-item dropdown d-flex align-items-center ">

					<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false"></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item">Edit Property</a>
						<a class="dropdown-item" href="#">Delete</a>
					</div>

			</td>
		</tr>
		<tr>
			<td class="td_icon"><i class="fas fa-images fa-2x"></i></td>
			<td>Welcome letter</td>
			<td>20/02/2020</td>
			<td>20/02/2020</td>
			<td class="d-flex justify-content-between ">PDF Document
				<div class="nav-item dropdown d-flex align-items-center ">

					<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false"></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item">Edit Property</a>
						<a class="dropdown-item" href="#">Delete</a>
					</div>

			</td>
		</tr>
		<tr>
			<td class="td_icon"><i class="fas fa-file-invoice-dollar fa-2x"></i></td>
			<td>Payment Summons</td>
			<td>20/02/2020</td>
			<td>20/02/2020</td>
			<td class="d-flex justify-content-between ">PDF Document
				<div class="nav-item dropdown d-flex align-items-center ">

					<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false"></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item">Edit Property</a>
						<a class="dropdown-item" href="#">Delete</a>
					</div>

			</td>

		</tr>
		<tr>
			<td class="td_icon"><i class="fas fa-file-signature fa-2x"></i></td>
			<td>Promissory Contract Payment</td>
			<td>20/02/2020</td>
			<td>20/02/2020</td>
			<td class="d-flex justify-content-between ">PDF Document
				<div class="nav-item dropdown d-flex align-items-center ">

					<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false"></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item">Edit Property</a>
						<a class="dropdown-item" href="#">Delete</a>
					</div>

			</td>
		</tr>
		<tr>
			<td class="td_icon"><i class="fas fa-file-invoice fa-2x"></i></td>
			<td>Reservation Fee Reinforcement</td>
			<td>20/02/2020</td>
			<td>20/02/2020</td>
			<td class="d-flex justify-content-between ">Html
				<div class="nav-item dropdown d-flex align-items-center ">

					<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false"></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item">Edit Property</a>
						<a class="dropdown-item" href="#">Delete</a>
					</div>

			</td>
		</tr>
		<tr>
			<td class="td_icon"><i class="fas fa-file-image fa-2x"></i></td>
			<td>Reservation Form</td>
			<td>20/02/2020</td>
			<td>20/02/2020</td>
			<td class="d-flex justify-content-between ">JPEG Image
				<div class="nav-item dropdown d-flex align-items-center ">

					<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false"></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item">Edit Property</a>
						<a class="dropdown-item" href="#">Delete</a>
					</div>

			</td>
		</tr>
		<tr>
			<td class="td_icon"><i class="fas fa-images fa-2x"></i></td>
			<td>Welcome letter</td>
			<td>20/02/2020</td>
			<td>20/02/2020</td>
			<td class="d-flex justify-content-between ">MP4 Video
				<div class="nav-item dropdown d-flex align-items-center ">

					<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false"></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item">Edit Property</a>
						<a class="dropdown-item" href="#">Delete</a>
					</div>

			</td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b></b></td>
			<td><b></b></td>
			<td><b></b></td>
			<td><b></b></td>




		</tr>


		</tbody>
	</table>
	<div class="table-footer d-flex justify-content-between align-items-center">
		<button type="button" class="btn btn-sm button z-depth-1 add-button"
		        style="margin-left:1rem; margin-top: -1rem;">CREATE DOCUMENTS
		</button>
		<nav aria-label="Page navigation example">
			<ul class="pagination pagination-sm pg-blue ">
				<li class="page-item ">
					<a class="page-link" tabindex="-1">Previous</a>
				</li>
				<li class="page-item" style="padding-right:10px;"><a class="page-link"
				                                                     style="background:#947956a1;color:white;">1</a>
				</li>
				<li class="page-item active">
					<a class="page-link" style="background:#947956;">2 <span class="sr-only">(current)</span></a>
				</li>
				<li class="page-item ">
					<a class="page-link">Next</a>
				</li>
			</ul>
		</nav>
	</div>
</div>

<div class="d-block d-md-none w-100" id="tableDocumentsMobile">
	<div class="card card_custom">
		<div class="card-body d-flex" style="padding:1rem;">
			<!-- card content -->
			<div class="mobile-card-icon" style="    padding: 0.5rem 1rem 1rem;">
				<i class="fas fa-file-invoice-dollar fa-3x"></i>
			</div>
			<div class="mobile-card-content" style="width:100%;">
				<h5 class="card-title d-flex justify-content-between mb-0"><b>Payment Summons</b>
					<div class="nav-item dropdown">
						<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
						   data-toggle="dropdown"
						   aria-haspopup="true" aria-expanded="false"></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item">Edit Property</a>
							<a class="dropdown-item" href="#">Delete</a>
						</div>
					</div>
				</h5>
				<p class="card-text" style="margin:0;"> Ana Hurnble<br>20/02/2020
				</p>
			</div>

		</div>

	</div>

	<div class="card card_custom">
		<div class="card-body d-flex" style="padding:1rem;">
			<!-- card content -->
			<div class="mobile-card-icon" style="    padding: 0.5rem 1rem 1rem;">
				<i class="fas fa-file-signature fa-3x"></i>
			</div>
			<div class="mobile-card-content" style="width:100%;">
				<h5 class="card-title d-flex justify-content-between mb-0"><b>Promissory Contract Payment</b>
					<div class="nav-item dropdown">
						<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
						   data-toggle="dropdown"
						   aria-haspopup="true" aria-expanded="false"></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item">Edit Property</a>
							<a class="dropdown-item" href="#">Delete</a>
						</div>
					</div>
				</h5>
				<p class="card-text" style="margin:0;">Ana Hurnble<br>20/02/2020
				</p>
			</div>

		</div>

	</div>

	<div class="card card_custom">
		<div class="card-body d-flex" style="padding:1rem;">
			<!-- card content -->
			<div class="mobile-card-icon" style="    padding: 0.5rem 1rem 1rem;">
				<i class="fas fa-file-invoice fa-3x"></i>
			</div>
			<div class="mobile-card-content" style="width:100%;">
				<h5 class="card-title d-flex justify-content-between mb-0"><b>Reservation Fee Reinforcement</b>
					<div class="nav-item dropdown">
						<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
						   data-toggle="dropdown"
						   aria-haspopup="true" aria-expanded="false"></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item">Edit Property</a>
							<a class="dropdown-item" href="#">Delete</a>
						</div>
					</div>
				</h5>
				<p class="card-text" style="margin:0;">Ana Hurnble<br>20/02/2020
				</p>
			</div>

		</div>

	</div>

	<div class="card card_custom">
		<div class="card-body d-flex" style="padding:1rem;">
			<!-- card content -->
			<div class="mobile-card-icon" style="    padding: 0.5rem 1rem 1rem;">
				<i class="fas fa-file-image fa-3x"></i>
			</div>
			<div class="mobile-card-content" style="width:100%;">
				<h5 class="card-title d-flex justify-content-between mb-0"><b>Reservation Form</b>
					<div class="nav-item dropdown">
						<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
						   data-toggle="dropdown"
						   aria-haspopup="true" aria-expanded="false"></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item">Edit Property</a>
							<a class="dropdown-item" href="#">Delete</a>
						</div>
					</div>
				</h5>
				<p class="card-text" style="margin:0;">Ana Hurnble<br>20/02/2020
				</p>
			</div>

		</div>

	</div>

	<div class="card card_custom">
		<div class="card-body d-flex" style="padding:1rem;">
			<!-- card content -->
			<div class="mobile-card-icon" style="    padding: 0.5rem 1rem 1rem;">
				<i class="fas fa-images fa-3x"></i>
			</div>
			<div class="mobile-card-content" style="width:100%;">
				<h5 class="card-title d-flex justify-content-between mb-0"><b>Reservation Form</b>
					<div class="nav-item dropdown">
						<a class="nav-link fas fa-ellipsis-v main_color" id="navbarDropdownMenuLink"
						   data-toggle="dropdown"
						   aria-haspopup="true" aria-expanded="false"></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item">Edit Property</a>
							<a class="dropdown-item" href="#">Delete</a>
						</div>
					</div>
				</h5>
				<p class="card-text" style="margin:0;">Ana Hurnble<br>20/02/2020
				</p>
			</div>

		</div>

	</div>
</div>

<?php get_footer(); ?>
