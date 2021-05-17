<?php 
	session_start();
	error_reporting(0);
	include('include/config.php');
	include('include/checklogin.php');
	check_login();

	$id = $_SESSION['cid'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Committees | Manage Unread Queries</title>
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

            <!-- end: TOP NAVBAR -->
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">Committee | Manage New Queries</h1>
							</div>
							<ol class="breadcrumb">
								<li>
							    	<span>Committee</span>
								</li>
								<li class="active">
									<span>New Queries</span>
								</li>
							</ol>
						</div>
					</section>
                    <!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
                    <div class="container-fluid container-fullw bg-white">
						<div class="row">
					    	<div class="col-md-12">
								<div class="card">
									<div class=".card-header bg-white">
										<h3 class="over-title margin-bottom-15">Manage <span class="text-bold">New Queries</span></h5>
									</div>
									<div class="card-body" style="padding: 25px;">
										<table class="table table-bordered table-hover" id="sample-table-1">
											<thead>
												<tr>
													<th>Module Name</th>
													<th class="hidden-xs">Syllabus Author</th>
													<th>Author Description</th>
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>
												<?php
													$sql1 = mysqli_query($conn,"SELECT * FROM syllabus WHERE Committee_ID = '$id' AND Approval_Status ='Pending Review'");
													
													while($row1=mysqli_fetch_assoc($sql1))
													{
														$AuthID = $row1['Author_ID'];
														$morris = mysqli_query($conn,"SELECT * FROM syllabus_author WHERE Author_ID = '$AuthID'");
														while($kingz=mysqli_fetch_assoc($morris))
														{
												?>

												<tr>
													<td class="hidden-xs"><?php echo $row1['Module_name'];?></td>
													<td><?php echo $kingz['Name'];?></td>
													<td><?php echo $kingz['Description'];?></td>
													
													<td>
														<div class="visible-md visible-lg hidden-sm hidden-xs">
															<a href="query-details.php?id=<?php echo $row1['Syllabus_ID'] ?>" class="btn btn-transparent btn-lg" title="View Details"><i class="fa fa-file"></i></a>
														</div>
														<div class="visible-xs visible-sm hidden-md hidden-lg">
															<div class="btn-group" dropdown is-open="status.isopen">
																<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
																	<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
																</button>
																<ul class="dropdown-menu pull-right dropdown-light" role="menu">
																	<li>
																		<a href="#">
																			View
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
												<?php
													}}
												?>
											</tbody>
										</table>
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
			<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){ $('#sample-table-1').DataTable(); });
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