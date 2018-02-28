<!DOCTYPE html>  
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/plugins/images/favicon.png">
        <title>WEBANE  INDONESIA</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="<?php echo base_url(); ?>assets/css/colors/megna.css" id="theme"  rel="stylesheet">
    </head>
    <body>
        <!-- Preloader -->

        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <section id="wrapper" class="login-register">

            <div class="login-box">
                <div class="white-box">
                    <a href="javascript:void(0)" class="text-center db"><img src="<?php echo base_url(); ?>assets/plugins/images/eliteadmin-logo-dark.png" alt="Home" /><br/><img src="<?php echo base_url(); ?>assets/plugins/images/eliteadmin-text-dark.png" alt="Home" /></a>  

                    <form class="form-horizontal" id="recoverform" action="index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                    <form action="<?= site_url('login/cek_login') ?>" id="form-login" method="post" accept-charset="utf-8">
                        <?php
                        if (validation_errors()) {
                            echo "<div><br> <text style='color : red'>" . validation_errors() . "</div>";
                        }
                        if ($this->session->flashdata('pesan_error')) {
                            echo "<center><br><text style='color : red'>" . $this->session->flashdata('pesan_error') . "</center>";
                        }
                        ?>
                        <div class="form-group m-t-40">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Remember me </label>
                                </div>
                                <a href="#" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot ?</a> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <p>Don't have an account? <a href="<?php echo base_url(); ?>daftar" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/tether.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

        <!--slimscroll JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
        <!--Style Switcher -->
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    </body>
</html>
