<?php 
	session_start();
	error_reporting(0);
	include('include/config.php');
	include('include/checklogin.php');
	check_login();

	//Find out which committee user belongs to
	$id = $_SESSION['cid'];
	
	//Display syllabi available at each committee level
	$selQuery = "SELECT Syllabus_ID, Module_code, Module_name, Years_outdated, Approval_Status FROM syllabus WHERE Years_outdated >= 3";
	$view = mysqli_query($conn, $selQuery);
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Committees | Outdated Syllabi</title>
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
		<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<div id="app">		
			<?php include('include/sidebar.php');?>
			<div class="app-content">
				<?php include('include/header.php');?>
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Committees | Outdated Syllabi</h1>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Committees</span>
									</li>
									<li class="active">
										<span>Outdated Syllabi</span>
									</li>
								</ol>
							</div>
						</section>
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-12">
									<div class="card">
										<div class="card-header bg-white">
											<h3 class="card-title">Outdated <span class="text-bold">Syllabi</span></h3>
										</div>
										<div class="card-body" style="padding: 25px;">
											<table id="mylist" class="table table-bordered table-hover">
												<thead>
													<tr>
														<th>Name</th>
														<th>Code</th>
														<th>Years Outdated</th>
														<th>Current Status</th>
														<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<?php 
															
															//$cnt = 1;
															while($rows = mysqli_fetch_assoc($view)) {
																echo "<tr>
																<td class="."hidden-xs".">".$rows['Module_name']."</td>
																<td>".$rows['Module_code']."</td>
																<td>".$rows['Years_outdated']."</td>
																<td>".$rows['Approval_Status']."</td>
																<td>
																	<a href='edit-syllabus.php?id=echo ".$rows['Syllabus_ID']."' title='Change Syllabus Added'><i class='fa fa-edit'></i></a> || 
																	<a href='view-syllabus.php?id=echo ".$rows['Syllabus_ID']."' title='View Syllabus'><i class='fa fa-eye'></i></a> ||
																	<a href='#' title='Delete Syllabus'><i class='fa fa-trash'></i></a>
																</td>
		
																</tr>";
																//$cnt=$cnt+1;
															}
						
															mysqli_close($conn);
														?>
													</tbody>
													<tfooter>
														<tr>
															<th>Name</th>
															<th>Code</th>
															<th>Years Outdated</th>
															<th>Current Status</th>
															<th>Action</th>
														</tr>
													</tfooter>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- start: FOOTER -->
				<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
				<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){ $('#mylist').DataTable(); });
		</script>
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
