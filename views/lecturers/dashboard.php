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
        <title>Lecturers | Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="../../images/DocMS logo.jpg" rel="icon" type="images/jpg" />
		
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

		<!--Bootstrap-->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"/>
		<!--Font Awesome-->
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css"/>
		<!--Themify Icons-->
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css"/>
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen"/>
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen"/>
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen"/>
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen"/>
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen"/>
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen"/>
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen"/>
		<link rel="stylesheet" href="assets/css/styles.css"/>
		<link rel="stylesheet" href="assets/css/plugins.css"/>
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<style>
			.card{
				position: relative;
				display: -webkit-box;
				display: -webkit-flex;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
				-webkit-flex-direction: column;
				-ms-flex-direction: column;
				flex-direction: column;
				background-color: #fff;
				border: 1px solid rgba(0, 0, 0, 0.125);
				border-radius: 0.25rem;
			}
			.card-block{
				-webkit-box-flex: 1;
				-webkit-flex: 1 1 auto;
				-ms-fle: 1 1 auto;
				flex: 1 1 auto;
				padding: 1.25rem;
			}
			.card-title{
				margin-bottom: 0.75rem;
			}
			.card-subtitle{
				margin-top: -0.375rem;
				margin-bottom: 0;
			}
			.card-text:last-child{
				margin-bottom: 0;
			}
			.card-link:hover{
				text-decoration: none;
			}
			.card-link + .card-link{
				margin-left: 1.25rem;
			}
			.card > .list-group:first-child .list-group-item:first-child{
				border-top-right-radius: 0.25rem;
				border-top-left-radius: 0.25rem;
			}
			.card > .list-group:last-child .list-group-item:last-child{
				border-bottom-right-radius: 0.25rem;
				border-bottom-left-radius: 0.25rem;
			}
			.card-header{
				padding: 0.75rem 1.25rem;
				margin-bottom: 0;
				background-color: #f7f7f9;
				border-bottom: 1px solid rgba(0, 0, 0, 0.125);
			}
			.card-header:first-child{
				border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
			}
			.card-footer{
				padding: 0.75rem 1.25rem;
				background-color:  #f7f7f9;
				border-top: 1px solid rgba(0, 0, 0, 0.125);
			}
			.card-footer:last-child{
				border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
			}
			.card-header-tabs{
				margin-right: -0.625rem;
				margin-bottom: -0.75;
				margin-left: -0.625rem;
				border-bottom: 0;
			}
			.card-header-pills{
				margin-right: -0.625rem;
				margin-left: -0.625rem;
			}
			.card-primary{
				background-color: #0275d8;
				border-color: #0275d8;
			}
			.card-primary .card-header,
			.card-primary .card-footer{
				background-color: transparent;
			}
			.card-success{
				background-color: #5cb85c;
				border-color: #5cb85c;
			}
			.card-success .card-header,
			.card-success .card-footer{
				background-color: transparent;
			}
			.card-info{
				background-color: #5bc0de;
				border-color: #5bc0de;
			}
			.card-info .card-header,
			.card-info .card-footer{
				background-color: 
			}
			.card-warning{
				background-color: #f0ad4e;
				border-color: #f0ad4e;
			}
			.card-warning .card-header,
			.card-warning .card-footer{
				background-color: transparent;
			}
			.card-danger{
				background-color: #d9534f;
				border-color: #d9534f;
			}
			.card-danger .card-header,
			.card-danger .card-footer{
				background-color: transparent;
			}
			.card-outline-primary{
				background-color: transparent;
				border-color: #0275d8;
			}
			.card-outline-secondary{
				background-color: transparent;
				border-color: #ccc;
			}
			.card-outline-info{
				background-color: transparent;
				border-color: #5bc0de'
			}
			.card-outline-success{
				background-color: transparent;
				border-color: #5cb85c;
			}
			.card-outline-warning{
				background-color: transparent;
				border-color: #f0ad4e;
			}
			.card-outline-danger{
				background-color: transparent;
				border-color: #d9534f;
			}
			.card-inverse{
				color: rgba(255, 255, 255, 0.65);
			}
			.card-inverse .card-header,
			.card-inverse .card-footer,
			.card-inverse .card-title,
			.card-inverse .card-blockquote{
				color: #fff;
			}
			.card-inverse .card-link,
			.card-inverse .card-text,
			.card-inverse .card-subtitle,
			.card-inverse .card-blockquote .blockquote-footer{
				color: rgba(255, 255, 255, 0.65);
			}
			.card-inverse .card-link:focus,
			.card-inverse .card-link:hover{
				color: #fff;
			}
			.card-blockquote{
				padding: 0;
				margin-bottom: 0;
				border-left: 0;
			}
			.card-img{
				border-radius: calc(0.25rem - 1px);
			}
			.card-img-overlay{
				position: absolute;
				top: 0;
				right: 0;
				bottom: 0;
				left: 0;
				padding: 1.25rem;
			}
			.card-img-top{
				border-top-right-radius: calc(0.25rem - 1px);
				border-top-left-radius: calc(0.25rem - 1px);
			}
			.card-img-bottom{
				border-bottom-right-radius: calc(o.25rem - 1px);
				border-bottom-left-radius: calc(0.25rem - 1px);
			}
			@media(min-width: 576px){
				.card-deck{
					display: -webkit-box;
					display: -webkit-flex;
					display: -ms-flexbox;
					display: flex;
					-webkit-flex-flow: row wrap;
					-ms-flex-flow: row wrap;
					flex-flow: row wrap;
				}
				.card-deck .card{
					display: -webkit-box;
					display: -webkit-flex;
					display: -ms-flexbox;
					display: flex;
					-webkit-box-flex: 1;
					-webkit-flex: 1 0 0%;
					-ms-flex: 1 0 0%;
					flex: 1 0 0%;
					-webkit-box-orient: vertical;
					-webkit-box-direction: normal;
					-webkit-flex-direction: column;
					-ms-flex-direction: column;
					flex-direction: column;
				}
				.card-deck .card:not(:first-child){
					margin-left: 15px;
				}
				.card-deck .card:not(:last-child){
					margin-right: 15px;
				}
			}
			@media (min-width: 576){
				.card-group{
					display: -webkit-box;
					display: -webkit-flex;
					display: -ms-flexbox;
					display: flex;
					-webkit-flex-flow: row wrap;
					-ms-flex-flow: row wrap;
					flex-flow: row wrap;
				}
				.card-group .card + .card{
					margin-left: 0;
					margin-left: 0;
				}
				.card-group .card:first-child{
					border-bottom-right-radius: 0;
					border-top-right-radius: 0;
				}
				.card-group .card:first-child .card-img-top{
					border-top-right-radius: 0;
				}
				.card-group .card:first-child .card-img-bottom{
					border-bottom-right-radius: 0;
				}
				.card-group .card:last-child{
					border-bottom-left-radius: 0;
					border-top-left-radius: 0;
				}
				.card-group .card:last-child .card-img-top{
					border-top-left-radius: 0;
				}
				.card-group .card:last-child .card-img-bottom{
					border-bottom-left-radius: 0;
				}
				.card-group .card:not(:first-child):not(:last-child){
					border-radius: 0;
				}
				.card-group .card:not(:first-child):not(:last-child) .card-img-top,
				.card-group .card:not(:first-child):not(:last-child) .card-img-bottom{
					border-radius: 0;
				}
			}
			@media (min-width: 576px){
				.card-columns{
					-webkit-column-count: 3;
					-moz-column-count: 3;
					column-count: 3;
					-webkit-column-gap: 1.25rem;
					-moz-column-gap: 1.25rem;
					column-gap: 1.25rem;
				}
				.card-columns .card{
					display: inline-block;
					width: 100%;
					margin-bottom: 0.75rem;
				}
			}
			#go-to:hover{
				background-color: grey;
				cursor: pointer;
			}
		</style>
    </head>
    <body>
    <div id="app">		
			<?php include('include/sidebar.php');?>
			<div class="app-content">
				<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Lecturers | Dashboard</h1>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Lecturer</span>
									</li>
									<li class="active">
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
						<section class="content">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-2 pull-right">
										<form action="" method="post">
											<button class="bg-success" type="submit" title="Generate & Download" name="generateSubmit" style="color: white;padding: 8px;border-radius: 5px;">
												<i class="fa fa-download"></i> 
												Generate Report
											</button>
										</form>
									</div>
								</div>
								<br />
								<div class="row">
									<div class="col-sm-4">
										<div class="panel panel-white bg-danger" style="background-color:border-radius: 6px;">
											<div class="panel-body">
												<a href="manage-syllabus.php">
													<div class="pull-left">
														<small class="StepTitle" style="color:white;font-size: 14px;">Total Syllabi</small>
														<br />
														<i class="fa fa-bar-chart" style="color:white;font-size:15px;"></i>
															
													</div>
													<div class="pull-right">
														<?php 
															$id = $_SESSION['aid'];
															$query = "SELECT * FROM syllabus WHERE Author_ID = '$id'";
															$result = mysqli_query($conn, $query);

															$row = mysqli_num_rows($result);
															echo "<span style='color:white;font-size: 35px;'><b>$row</b></span>"
														?>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="panel panel-white bg-info" style="border-radius: 6px;">
											<div class="panel-body">
												<a href="manage-syllabus.php">
													<div class="pull-left">
														<small class="StepTitle " style="color:white;font-size: 14px;">Out dated</small>
														<br />
														<i class="fa fa-bar-chart" style="color:white;font-size:15px;"></i>
															
													</div>
													<div class="pull-right">
														<?php 
															$id = $_SESSION['aid'];
															$query = "SELECT * FROM syllabus WHERE Author_ID = '$id' AND Years_outdated >=3";
															$result = mysqli_query($conn, $query);

															$row = mysqli_num_rows($result);
															echo "<span style='color:white;font-size: 35px;'><b>$row</b></span>"
														?>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="panel panel-white bg-success" style="border-radius: 6px;">
											<div class="panel-body">
												<a href="manage-syllabus.php">
													<div class="pull-left">
														<small class="StepTitle" style="color:white;font-size:14px;">Up to date</small>
														<br />
														<i class="fa fa-bar-chart" style="color:white;font-size:15px;"></i>
													</div>
													<div class="pull-right">
														<?php 
															$id = $_SESSION['aid'];
															$query = "SELECT * FROM syllabus WHERE Author_ID = '$id' AND Years_outdated <3";
															$result = mysqli_query($conn, $query);

															$row = mysqli_num_rows($result);
															echo "<span style='color:white;font-size: 35px;'><b>$row</b></span>"
														?>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							<div>
						</section>
						<!-- end: PAGE TITLE -->
						
						<!--<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-sm-6">
									<div class="panel panel-white">
										<div class="panel-body">
											<input type="text" value="75" class="dial" >
										</div>
									</div>
								</div>
								<div class="col-sm-6"></div>
							</div>
						</div>-->
					</div>
				</div>
			<!-- start: FOOTER -->
			<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
			<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
    </body>
</html>