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

    <title>User - Signup Page</title>


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
                        User sign up form
                    </h2>
                    <p>
                        Please fill out information below.
                    </p>

                    <form id="form" action="<?php echo base_url()?>u_signup" class="wizard-big" method="post">
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
                                        <label>NRIC/Passport *</label>
                                        <input id="nric" name="nric" type="text" class="form-control required">
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h1>Continue</h1>
                        <fieldset>

                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3">

                                    <div class="form-group">
                                        <label class="col-sm-6 control-label">Perferred language *</label>

                                        <div class="col-sm-6">
                                            <select class="form-control m-b" name="language">
                                                <option>English</option>
                                                <option>Malay</option>
                                                <option>Chinese</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-6 control-label">Are you an online dealer? *</label>

                                        <div class="col-sm-6"><select class="form-control m-b" name="">
                                                <option>No</option>
                                                <option>Yes</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-6 control-label">If Yes, what product category are you selling?</label>

                                        <div class="col-sm-6">
                                            <input id="category" name="category" type="text" class="form-control">
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </fieldset>

                        <h1>Finish</h1>
                        <fieldset>
                            <h2>Terms and Conditions</h2>
                            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                        </fieldset>
                    </form>
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
