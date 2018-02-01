<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/plugins/images/favicon.png">
        <title>Webane Indonesia</title>


        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>assets/css/popup.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="<?php echo base_url(); ?>assets/css/colors/megna.css" id="theme" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
<!--        <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.3.min.js"></script>-->

        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
        <!--alerts CSS -->      
        <link href="<?php echo base_url(); ?>assets/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
        <!-- Menu CSS -->
        <link href="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!-- morris CSS -->
        <link href="<?php echo base_url(); ?>assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="<?php echo base_url(); ?>assets/css/colors/megna.css" id="theme" rel="stylesheet">

        <!-- color CSS -->
<!--        <script src="<?php echo base_url(); ?>assets/jquery.min.js"></script>-->
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery.autocomplete.js'></script>
        <link href='<?php echo base_url(); ?>assets/js/jquery.autocomplete.css' rel='stylesheet' />
        <script type='text/javascript'>
            var site = "<?php echo site_url(); ?>";
            $(function () {
                $('.Topography').autocomplete({
                    // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                    serviceUrl: site + '/autocomplete/topography',
                    // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                    onSelect: function (suggestion) {
                        $('#nama_kanker').val('' + suggestion.Topography);
                        $('#ID_Topography').val('' + suggestion.ID_Topography);
                    }
                });
            });
            var site = "<?php echo site_url(); ?>";
            $(function () {
                $('.Morphology').autocomplete({
                    // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                    serviceUrl: site + '/autocomplete/Morphology',
                    // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                    onSelect: function (suggestion) {
                        $('#ID_Morphology').val('' + suggestion.ID_Morphology);
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $("#provinsi").change(function () {
                    var url = "<?php echo site_url('autocomplete/add_ajax_kab'); ?>/" + $(this).val();
                    $('#kabupaten').load(url);
                    return false;
                })

                $("#kabupaten").change(function () {
                    var url = "<?php echo site_url('autocomplete/add_ajax_kec'); ?>/" + $(this).val();
                    $('#kecamatan').load(url);
                    return false;
                })

                $("#kecamatan").change(function () {
                    var url = "<?php echo site_url('autocomplete/add_ajax_des'); ?>/" + $(this).val();
                    $('#desa').load(url);
                    return false;
                })


                $("#provinsi1").change(function () {
                    var url = "<?php echo site_url('autocomplete/add_ajax_kab'); ?>/" + $(this).val();
                    $('#kabupaten1').load(url);
                    return false;
                })

                $("#kabupaten1").change(function () {
                    var url = "<?php echo site_url('autocomplete/add_ajax_kec'); ?>/" + $(this).val();
                    $('#kecamatan1').load(url);
                    return false;
                })

                $("#kecamatan1").change(function () {
                    var url = "<?php echo site_url('autocomplete/add_ajax_des'); ?>/" + $(this).val();
                    $('#desa1').load(url);
                    return false;
                })
            }

            );
        </script>

    </head>

    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                    <div class="top-left-part"><a class="logo" href="<?php echo base_url(); ?>Dashboard"><b><img src="<?php echo base_url(); ?>assets/plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><strong>Webane</strong></span></a></div>
                    <ul class="nav navbar-top-links navbar-left hidden-xs">
                        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>

                    </ul>
                </div>
            </nav>
            <!-- Left navbar-header -->
            <div class="navbar-default sidebar" role="navigation" id="main">
                <div class="sidebar-nav navbar-collapse slimscrollsidebar">

                    <?php
                    // Tampilan Menu Admin
                    if ($this->session->userdata('hak_akses') == 1) {
                        ?>
                        <ul class="nav" id="side-menu">
                            <li id="menu1" class="user-pro">
                                <a href="#" class="waves-effect"><img src="<?php echo base_url(); ?>assets/plugins/images/users/d1.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"><text style="color: yellow"> <b> <?= $this->session->userdata('nama') ?> </b><span class="fa arrow"></span></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li><a href="<?= site_url("profile") ?>"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>                                    
                                </ul>
                            </li>
                            <li> <a href="<?= site_url('Dashboard') ?>" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>


                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Data Pasien <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="<?= site_url('Pasien/addPasien') ?>">ADD Data Pasien</a> </li>
                                    <li> <a href="<?= site_url('Pasien') ?>">All Database</a> </li>

                                </ul>
                            </li>

                            <li> <a href="javascript:void(0);" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu"> Setting <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="javascript:void(0);" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw" ></i> <span class="hide-menu"> Database Tumor <span class="fa arrow"></span></span></a>
                                        <ul class="nav nav-second-level">
                                            <li> <a href="<?= site_url('Tumor/Topography') ?>">Topography</a> </li>
                                            <li> <a href="<?= site_url('Tumor/Morphology') ?>">Morphology</a> </li>
                                            <li> <a href="<?= site_url('Tumor/BasicDiagnosis') ?>">diagnosis Cancer</a> </li>
                                            <li> <a href="<?= site_url('Tumor/Diseasetreatment') ?>">disease before treatment</text></a> </li>
                                            <li> <a href="<?= site_url('Tumor/TeatmentReporting') ?>">Treatment at reporting</a> </li>
                                            <li> <a href="<?= site_url('Tumor/Behaviour') ?>">Behaviour</a> </li>
                                            <li> <a href="<?= site_url('Tumor/Distantmetastastases') ?>">Distant metastastases</a> </li>
                                            <li> <a href="<?= site_url('Tumor/Grade') ?>">Grade</a> </li>
                                            <li> <a href="<?= site_url('Tumor/Stage') ?>">Stage</a> </li>
                                            <li> <a href="<?= site_url('Tumor/Laterality') ?>">Laterality</a> </li>
                                            <li> <a href="<?= site_url('Tumor/Immunohistokimia') ?>">Immunohistokimia</a> </li>
                                            <li> <a href="<?= site_url('Tumor/Hybridization') ?>">In Situ Hybridization</a> </li>
                                            <li> <a href="<?= site_url('Tumor/Biopsy') ?>">Type of biopsy</a> </li>
                                            <li> <a href="<?= site_url('Tumor/Sublocation') ?>">Sublocation of Breast Tumor</a> </li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw" ></i> <span class="hide-menu"> Database Wilayah <span class="fa arrow"></span></span></a>

                                        <ul class="nav nav-second-level">
                                            <li> <a href="<?= site_url('Wilayah') ?>">Provinsi</a> </li>
                                            <li> <a href="<?= site_url('Wilayah/Kabupaten') ?>">Kabupaten</a> </li>
                                        </ul>

                                    </li>
                                </ul>
                            </li>

                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Reports <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="Dashboard">Export Page</a></li>
                                    <li> <a href="Dashboard">Export Data</a></li>
                                </ul>
                            </li>


                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> User <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="<?= site_url('user') ?>">Data User</a> </li>
                                    <li> <a href='<?= site_url('user/tambah_user') ?>'>Tambah User</a> </li>
                                </ul>
                            </li>

                        </ul>
                    <?php } ?>
                    <?php
                    // Tampilan Menu Tamu
                    if ($this->session->userdata('hak_akses') == 2) {
                        ?>
                        <ul class="nav" id="side-menu">
                            <li id="menu1" class="user-pro">
                                <a href="#" class="waves-effect"><img src="<?php echo base_url(); ?>assets/plugins/images/users/d1.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"><text style="color: yellow"> <b> <?= $this->session->userdata('nama') ?> </b><span class="fa arrow"></span></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li><a href="<?= site_url("profile") ?>"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>                                    
                                </ul>
                            </li>
                            <li> <a href="<?= site_url('Dashboard') ?>" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>


                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Data Pasien <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="<?= site_url('Pasien/addPasien') ?>">Add Data Pasien</a> </li>
                                    <li> <a href="add-patient.html">All Database Lokal</a> </li>
                                </ul>
                            </li>


                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Reports <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="Dashboard">Export Page</a></li>
                                    <li> <a href="Dashboard">Export Data</a></li>
                                </ul>
                            </li>

                        </ul>
                    <?php } ?>

                    <?php
                    // Tampilan Menu Tamu
                    if ($this->session->userdata('hak_akses') == 3) {
                        ?>
                        <ul class="nav" id="side-menu">
                            <li id="menu1" class="user-pro">
                                <a href="#" class="waves-effect"><img src="<?php echo base_url(); ?>assets/plugins/images/users/d1.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> <text style="color: yellow"> <b> <?= $this->session->userdata('nama') ?> </b><span class="fa arrow"></span></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li><a href="<?= site_url("profile") ?>"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>                                    
                                </ul>
                            </li>
                            <li> <a href="<?= site_url('Dashboard') ?>" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Data Pasien <span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="<?= site_url('Pasien/addPasien') ?>">Add Data Pasien</a> </li>

                                </ul>
                            </li>
                        </ul>
                    <?php } ?>
                    <br>
                    <li ><a href="<?= site_url('login/logout') ?>" class="waves-effect"><i class="icon-logout fa-fw"></i><text style="color: #cc0000"> <b>  <span class="hide-menu"> Log out</span></b></a></li>
                </div>
            </div>
            <div id="page-wrapper">
                <style type="text/css">
                    #main {
                        background-color: #000\9;
                    }
                    #menu1{
                        background-color: #cc66ff;
                    }
                </style>    
                <div class="container-fluid" >
                    <div class="row bg-title" >
                        <div  class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Hospital Dashboard</h4>
                        </div>
                    </div>

                    <?php
                    if (isset($isi)) {
                        $this->load->view($isi);
                    }
                    ?>


                    <!-- /.row -->
                    <!-- .right-sidebar -->

                    <!-- /.right-sidebar -->
                </div>
                <!-- /.container-fluid -->
                <footer  class="footer text-center"><text style="color: #ff6600"><b> 2018 &copy;  Web</b><text style="color: #33cc00"><b>ane Indonesia</b> </text> </footer>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->

        <!-- Editable -->
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery-datatables-editable/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/tiny-editable/mindmup-editabletable.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/tiny-editable/numeric-input-example.js"></script>


        <!-- Menu Plugin JavaScript -->
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!--slimscroll JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <!--Morris JavaScript -->
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/morrisjs/morris.js"></script>
        <!-- Sparkline chart JavaScript -->
        <!-- Sparkline chart JavaScript -->
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!-- jQuery peity -->
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/peity/jquery.peity.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/peity/jquery.peity.init.js"></script>


        <!-- Custom Theme JavaScript -->
<!--        <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>-->
        <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dashboard1.js"></script>
        <!--Style Switcher -->
        <script src="<?php echo base_url(); ?>assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    </body>

</html>
