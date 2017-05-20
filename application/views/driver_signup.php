<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Driver - Signup Page</title>


    <link href="<?php echo base_url()?>assets/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/public/css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/public/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/public/css/style.css" rel="stylesheet">


</head>
<body class="no-skin-config landing-page">

<section class="animated fadeInDown">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">

                <div class="ibox-content">
                    <h2>
                        Driver sign up form
                    </h2>
                    <p>
                        Please fill out information below.
                    </p>
                    <?php echo form_open_multipart("welcome/d_signup",array('id'=>'form','class'=>'wizard-big')); ?>
                        <h1>Account</h1>
                        <fieldset>
                            <h2>Account Information</h2>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input id="email" name="email" type="email" class="form-control required email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input id="password" name="password" type="password" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password *</label>
                                        <input id="confirm" name="confirm" type="password" class="form-control required">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <div style="margin-top: 20px">
                                            <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                        <h1>Profile</h1>
                        <fieldset>
                            <h2>Profile Information</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First name *</label>
                                        <input id="name" name="name" type="text" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label>Last name *</label>
                                        <input id="surname" name="surname" type="text" class="form-control required">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Phone number *</label>
                                        <input id="phone" name="phone" type="text" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label>Address *</label>
                                        <input id="address" name="address" type="text" class="form-control required">
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h1>Continue</h1>
                        <fieldset>

                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Age *</label>

                                        <div class="col-sm-8"><select class="form-control m-b" name="age">
                                                <option>19-30</option>
                                                <option>31-45</option>
                                                <option>>46</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Gender *</label>

                                        <div class="col-sm-8">
                                            <select class="form-control m-b" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Your transport *</label>

                                        <div class="col-sm-8">
                                            <select class="form-control m-b" name="transport">
                                                <option>Car</option>
                                                <option>motorcycle</option>
                                                <option>Van</option>
                                                <option>Truck</option>
                                                <option>Lorry</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">License *</label>
                                        <div class="col-sm-8">
                                            <input class="form-control required" type="file" name="license">
                                        </div>

                                    </div>
                                    <div>
                                    </div>
                                </div>

                        </fieldset>

                        <h1>Finish</h1>
                        <fieldset>
                            <h2>Terms and Conditions</h2>
                            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                        </fieldset>
                    <?php echo form_close();?>
                    <p class="m-t text-center"> <small>Go Builders &copy; 2017</small> </p>

                </div>
            </div>
        </div>

    </div>
    </div>
</section>

<!-- Mainly scripts -->
<script src="<?php echo base_url()?>assets/public/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url()?>assets/public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url()?>assets/public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url()?>assets/public/js/inspinia.js"></script>
<script src="<?php echo base_url()?>assets/public/js/plugins/pace/pace.min.js"></script>
<script src="<?php echo base_url()?>assets/public/js/plugins/wow/wow.min.js"></script>

<!-- Steps -->
<script src="<?php echo base_url()?>assets/public/js/plugins/steps/jquery.steps.min.js"></script>

<!-- Jquery Validate -->
<script src="<?php echo base_url()?>assets/public/js/plugins/validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/public/js/custom-driver-sign-up.js"></script>
</body>
</html>
