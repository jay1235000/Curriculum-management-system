<!DOCTYPE html>
<?php
	session_start();
	error_reporting(0);
	include('include/config.php');
	include('include/checklogin.php');
	check_login();
?>

<html lang="en">
	<head>
		<title>Lecturer  | Change Password</title>
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
		<script type="text/javascript">
			function valid()
			{
				if(document.chngpwd.cpass.value=="")
				{
				alert("Current Password Filed is Empty !!");
				document.chngpwd.cpass.focus();
				return false;
				}
				else if(document.chngpwd.npass.value=="")
				{
					alert("New Password Filed is Empty !!");
					document.chngpwd.npass.focus();
					return false;
				}
				else if(document.chngpwd.cfpass.value=="")
				{
					alert("Confirm Password Filed is Empty !!");
					document.chngpwd.cfpass.focus();
					return false;
				}
				else if(document.chngpwd.npass.value!= document.chngpwd.cfpass.value)
				{
					alert("Password and Confirm Password Field do not match  !!");
					document.chngpwd.cfpass.focus();
					return false;
				}
				return true;
			}
		</script>

	</head>
	<body>

	<?php

	//var_dump($_POST);
	$err = '';
	$msg = '';

	if (isset($_POST['submit']) && !empty($_POST['cpass']) && !empty($_POST['npass']) && !empty($_POST['cfpass'])) {
    	$clength = strlen($_POST['cpass']);
    	$nlength = strlen($_POST['npass']);
    	$cflength = strlen($_POST['cfpass']);
    	$cpass = $_POST['cpass'];
    	$npass = $_POST['npass'];
    	$cfpass = $_POST['cfpass'];
    	$id = $_SESSION['id'];

    	if ($clength >= 6) {
        	if ($nlength >= 6) {
           		if ($cflength >= 6) {
                	if ($npass == $cfpass) {
                   
                    	$conn = mysqli_connect("localhost", "root", "", "edms") or die ("unable to connect to database");
            	    	$query = "SELECT Member_ID, Password, Profile_Picture, Name FROM members WHERE Password = '$cpass' AND Member_ID = '$id'";
            	    	$result = mysqli_query($conn, $query);

                    	if(mysqli_num_rows($result) == 1) {
                        
                        	$updatequery = "UPDATE members SET Password = '$npass' WHERE Member_ID = '$id'";
                        	mysqli_query($conn, $updatequery)or die ("could not connect");
                        	$msg = 'Password Updated';

                    	} else {
                        	$err = 'Invalid entry';
                    	}
                	} else {
                    	$err = 'Invalid entry';
                	}
            	} else {
                	$err = 'Invalid entry';
            	}
        	} else {
            	$err = 'Invalid entry';
        	}

    	} else {
        	$err = 'Invalid entry';
    	}
		
	}
	?>		

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
									<h1 class="mainTitle">Lecturer | Change Password</h1>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Lecturer</span>
									</li>
									<li class="active">
										<span>Change Password</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Change Password</h5>
													<h4 style = "color:red"><?php echo $err; ?></h4>
													<h4 style = "color:blue"><?php echo $msg; ?></h4>
												</div>
												<div class="panel-body">
													
													<form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" name="chngpwd" method="post" >
														<div class="form-group">
															<label for="exampleInputEmail1">
																Current Password
															</label>
															<input type="password" name="cpass" class="form-control"  placeholder="Enter Current Password">
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																New Password
															</label>
															<input type="password" name="npass" class="form-control"  placeholder="New Password">
														</div>
														
														<div class="form-group">
															<label for="exampleInputPassword1">
																Confirm Password
															</label>
															<input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password">
														</div>
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									
								</div>
							</div>
						
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
			<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
			<?php include('include/setting.php');?>
			<>
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
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
