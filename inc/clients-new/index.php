<?php get_header(); ?>

<style>

    body {
        background-image: url("https://stonejstaging.wpengine.com/wp-content/uploads/2020/02/P1_Quarto_white-scaled.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        /* background-opacity:0.5; */
        font-family: "roboto";
    }

    /*.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {*/
    /*    border-color: #8f734e !important;*/
    /*    background-color: #8f734e !important;*/
    /*}*/

    .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
        background-color: #8f734e;
        border-radius: 50rem;
    }
    .footer-form{
        padding-right:1rem;
    }
    
    .rbr, .formmiddle{
        padding-left:3rem;
    }
  

</style>

<div class="row container box-center container-box py-3" style="margin-bottom: 10rem !important;">
    <div class="py-4 z-depth-1 col" id="background_1">


        <!--Section: Content-->
        <section class="px-md-2 mx-md-2 dark-grey-text" id="container__center" style="width: 100%;">
        <h3 class="font-weight-bold">Add New Client</h3>
            <div class="row">
                    <div class="col-md-4 col-sm-12">
                    <div class="md-form">
                        <input type="text" id="name" class="form-control">
                        <label for="name">Name</label>
                    </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                    <div class="md-form">
                        <input type="text" id="last-name" class="form-control">
                        <label for="name">Last Name</label>
                    </div>
                    </div>
            </div>

            <div class="row">
                <div class="col-md-4 d-flex align-items-center ">
                    <h5 class="pr-4">Password</h5>
                    <button type="button" class="btn btn-default btn-sm"style="background:#947956 !important;">GENERATE PASSWORD</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="md-form ">
                        <input type="text" id="address" class="form-control">
                        <label for="address">Address</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                <select class="mdb-select md-form">
                        <option value="" disabled selected>Nationality</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
                <div class="col-md-3 offset-md-1">
                <div class="md-form">
                        <input type="text" id="purpose" class="form-control">
                        <label for="name">Purpose</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                <div class="md-form">
                        <input type="text" id="telephone" class="form-control">
                        <label for="name">Telephone</label>
                    </div>
                </div>
                <div class="col-md-4 ">
                <div class="md-form">
                        <input type="text" id="birthday" class="form-control">
                        <label for="name">Birthday</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <select class="mdb-select md-form">
                        <option value="" disabled selected>City</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="md-form">
                        <input type="text" id="company" class="form-control">
                        <label for="name">Company</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <select class="mdb-select md-form">
                        <option value="" disabled selected>Property</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
                <div class="col-md-2 offset-md-1 ">
                <select class="mdb-select md-form">
                        <option value="" disabled selected>Units</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <select class="mdb-select md-form">
                        <option value="" disabled selected>Account Manager</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h5>Discount:</h5>
                    <div class="radio-buttons d-flex align-items*center">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample9" name="groupOfDefaultRadiosRight">
                    <label class="custom-control-label" for="defaultGroupExample9">Yes</label>
                    </div>
                    <select class="mdb-select md-form formmiddle">
                        <option value="" disabled selected></option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <div class="custom-control custom-radio rbr">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample9" name="groupOfDefaultRadiosRight">
                    <label class="custom-control-label" for="defaultGroupExample9">No</label>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <h5>Extra Works:</h5>
                    <div class="radio-buttons d-flex align-items*center">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample9" name="groupOfDefaultRadiosRight">
                    <label class="custom-control-label" for="defaultGroupExample9">Yes</label>
                    </div>
                   
                    <div class="custom-control custom-radio rbr">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample9" name="groupOfDefaultRadiosRight">
                    <label class="custom-control-label" for="defaultGroupExample9">No</label>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                <div class="md-form">
                        <input type="text" id="asking-price" class="form-control">
                        <label for="name">Asking Price</label>
                    </div>
                </div>
                <div class="col-md-3 ">
                <div class="md-form">
                        <input type="text" id="closing-price" class="form-control">
                        <label for="name">Closing Price</label>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                <div class="md-form">
                        <input type="text" id="legal-representative" class="form-control">
                        <label for="name">Legal Representative</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="md-form">
                        <input type="text" id="email" class="form-control">
                        <label for="name">Email</label>
                    </div>
                </div>
                <div class="col-md-3 ">
                <div class="md-form">
                        <input type="text" id="phone" class="form-control">
                        <label for="name">Phone</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="md-form">
                        <input type="text" id="agent-representative" class="form-control">
                        <label for="name">Agent Representative</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="md-form">
                        <input type="text" id="email2" class="form-control">
                        <label for="name">Email</label>
                    </div>
                </div>
                <div class="col-md-3 ">
                <div class="md-form">
                        <input type="text" id="phone2" class="form-control">
                        <label for="name">Phone</label>
                    </div>
                </div>
            </div>
       
            <div class="row">
                <div class="col d-flex">
                    <div class="footer-form">
                        <h5>Main Image</h5>
                        <button type="button" class="btn btn-default btn-sm"style="background:#947956 !important;width:8rem;">Upload</button>
                    </div>
                    <div class="md-form">
                        <input type="text" id="form10" class="form-control">
                        <label for="form10">Choose your file</label>
                    </div>
                </div>
    
            </div>
            <div class="row">
                <div class="col d-flex">
                    <div class="footer-form">
                        <h5>Documents</h5>
                        <button type="button" class="btn btn-default btn-sm"style="background:#947956 !important;width:8rem;">Upload</button>
                    </div>
                    <div class="md-form">
                        <input type="text" id="form13" class="form-control">
                        <label for="name">Choose your file</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" style="background:#947956 !important;width:12rem;">Save</button>
                </div>
            </div>
               

        </section>
        <!--Section: Content-->

    </div>
</div>

<?php get_footer(); ?>
