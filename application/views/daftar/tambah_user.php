<!DOCTYPE html>  
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/plugins/images/favicon.png">
        <title>Registrasi User</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="<?php echo base_url(); ?>assets/css/colors/megna.css" id="theme"  rel="stylesheet">

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-19175540-9', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <section id="wrapper" class="login-register">
            <div class="login-box">
                <div class="white-box">
                    <form action="<?= site_url($this->uri->uri_string()) ?>" class="form-horizontal form-material" id="loginform" method="POST">
                        <h5 class="box-title m-b-20">Registrasi User</h5>
                        <?php
                        if (validation_errors()) {
                            echo "<div><br> <text style='color : red'>" . validation_errors() . "</div>";
                        }
                        if ($this->session->flashdata('pesan_error')) {
                            echo "<center><br><text style='color : red'>" . $this->session->flashdata('pesan_error') . "</center>";
                        }
                        ?>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" name="id_user_lokal" placeholder="Id User Lokal">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" name="nama" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="username" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password1" required="" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
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
