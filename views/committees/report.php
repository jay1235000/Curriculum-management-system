<?php
    session_start();
    error_reporting(0);
    include('include/config.php');
    include('include/checklogin.php');
    check_login();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Committee | Report</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="../../images/DocMS logo.jpg" rel="icon" type="images/jpg" />
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
    </head>
    <body>
        <div id="app">
            <?php include('include/sidebar.php');?>
            <div class="app-content">
                <?php include('include/header.php');?>
                <div class="main-content">
                    <div class="wrap-content container" id="container">
                        <!-- start: PAGE TITLE-->
                        <section id="page-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1 class="mainTitle">Committee | Report</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Committee</span>
                                    </li>
                                    <li class="active">
                                        <span>Report</span>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <section class="content">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-2 pull-right">
										<form action="" method="post">
											<button type="submit" title="Generate & Download" name="generateSubmit" style="background-color: green;color: white;padding: 8px;border-radius: 5px;">
												<i class="fa fa-download"></i>
												Generate Report
											</button>
										</form>
									</div>
								</div>
								<br />
								
							<div>
						</section>
                        <div class="container-fluid container-fullw bg-white">
                            <p class="text-center">Display Reports here...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: FOOTER -->
            <?php include('include/footer.php');?>
        <!-- end: FOOTER -->

        <!-- start: SETTINGS-->
            <?php include('include/setting.php'); ?>
        <!-- end: SETTINGS-->

        <!-- start: MAIN JAVASCRIPTS -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="vendor/modernizr/modernizr.js"></script>
            <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
            <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->

        <!-- start: CLIP-TWO JAVASCRIPTS-->
            <script src="assets/js/main.js"></script>
		    <!-- start: JavaScript Event Handlers for this page -->
		        <script src="assets/js/form-elements.js"></script>
                <script>
                    jQuery(document).ready(function() {
                        Main.init();
                        FormElements.init();
                    });
                </script>
		    <!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
    </body>
</html>