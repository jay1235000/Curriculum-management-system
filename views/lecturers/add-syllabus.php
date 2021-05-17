<?php
	session_start();
	error_reporting(0);
	include('include/config.php');
	include('include/checklogin.php');
	check_login();
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Lecturer | Add Syllabus</title>
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
		<link href="vendor/jquery-ui/jquery-ui-1.10.1.custom.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<link rel="stylesheet" href="assets/pdf_viewer.css" >
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
		</style>
	
	</head>
	<body>

	<?php
	
		$msg = '';
		$err = '';
		// connect to the database
		$conn = mysqli_connect('localhost', 'root', '', 'edms');
		//var_dump($_SESSION);

		// Uploads files
		if (isset($_POST['submit']) && !empty($_POST['modname']) && !empty($_POST['modcode']) && !empty($_POST['sylauthor']) && !empty($_POST['years']) && !empty($_POST['syllevel']) && !empty($_POST['faculty']) && !empty($_POST['schools']) && !empty($_POST['major'])) { // if save button on the form is clicked
		
			$codeformat = "^[A-Z]+[0-9]^";
			if(preg_match($codeformat, $_POST['modcode'])) {
			
				$authId = $_SESSION['Aid'];
				$modname = $_POST['modname'];
				$modcode = $_POST['modcode'];
				$temp = $_POST['years'];
				$syllevel = $_POST['syllevel'];
				$faculty = $_POST['faculty'];
				$schools = $_POST['schools'];
				$major = $_POST['major'];
			
				$year = new DateTime($temp);
				$today = new DateTime('today');
				$obj = date_diff($year, $today, FALSE);
				$years = $obj->y;

				//File directory
				$target_dir = "syllabus_folder/";
				$target_file = $target_dir.basename($_FILES["upload"]["name"]);

				//move file to folder
				if(move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
					//save link in database
					//include("include/config.php"); //connect to database

					$sql = "INSERT INTO syllabus (Author_ID, Module_name, Module_code, Link_to_syllabus,  Years_outdated, Level, faculty, schools, major) VALUES ('$authId', '$modname', '$modcode', '$target_file', '$years', '$syllevel', '$faculty', '$schools', '$major')";
			
					mysqli_query($conn, $sql) or die("Could not insert info.".mysqli_error($conn));

					//close connection
					mysqli_close($conn);
					$msg = 'Syllabus added succesfully ';

				} else {
					$err = 'File could not be uploaded';
				}
			} else {
				$err = 'Invalid module code';
			}   
		} 
    

	?>		

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
									<h1 class="mainTitle">Syllabus | Add Syllabus</h1>
								</div>
								<ol class="breadcrumb">
									<li>
									<span>Syllabus</span>
									</li>
									<li class="active">
									<span>Add Syllabus</span>
									</li>
								</ol>
								<h4 style = "color:red"><?php echo $err; ?></h4>
								<h4 style = "color:blue"><?php echo $msg; ?></h4>
							</div>
						</section>
						<div class="container-fluid container-fullw ">
							<form enctype="multipart/form-data" role="form" name="" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
								<div class="row">
									<div class="col-md-6">
										<div class="card">
											<div class="card-header bg-white">
												<h3 class="card-title">General Info.</h3>
											</div>
											<div class="card-body" style="padding:25px;">
												<div class="form-group">
													<label for="faculty">
														Faculty /College
													</label>
													<select class="form-control" id="faculty" name="faculty" style="overflow:auto;">
														<option selected disabled>Select Faculty</option>
														<?php
															//require 'data.php';
															$query = "SELECT * FROM faculty";
															$result = $conn->query($query);
															if ($result->num_rows > 0) {
																while ($row = $result->fetch_assoc()) {
																	echo "<option value='{$row["Faculty_ID"]}'>{$row['Name']}</option>";
																}
															}else{
																echo "<option value=''>Faculty not available</option>"; 
															}
														?>
													</select>
												</div>
												<div class="form-group">
													<label for="schools">
														School /Department
													</label>
													<select class="form-control" id="schools" name="schools">
														
													</select>
												</div>
												<div class="form-group">
													<label for="major">
														Subject Leader Division <i>(which MAJOR)</i>
													</label>
													<select class="form-control" id="major" name="major">
														
													<select>
													
												</div>
											</div>
										</div>
										<br />
										<div class="card">
											<div class="card-header bg-white">
												<h3 class="card-title">Upload</h3>
												<span><i>Please attach a copy of the syllabus below</i></span>
											</div>
											<div class="card-body" style="padding:25px;">
												<div class="form-group">
													<label for="upload">
														Upload Syllabus
													</label>
													<input type="file" id="upload" name="upload" title="Upload Syllabus" accept="application/pdf" />
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="card">
											<div class="card-header bg-white">
												<h3 class="card-title">Syllabi Info.</h3>
											</div>
											<div class="card-body" style="padding:25px;">
												<div class="form-group">
													<label for="modname">
														Module Name
													</label>
													<input type="text" id="modname" name="modname" value="" class="form-control"  placeholder="Enter Module Name" required="true">
												</div>
												<div class="form-group">
													<label for="modcode">
														Module Code
													</label>
													<input type="text" id="modcode" name="modcode" class="form-control" value="" placeholder="Enter Module Code" required="true">
												</div>
												<div class="form-group">
													<label for="sylauthor">
														Syllabus Owner
													</label>
													<input type="text" id="sylauthor" name="sylauthor" class="form-control" value="" placeholder="Enter Lecturer Name" required="true">
												</div>
												<div class="form-group">
													<label for="years">
														Last Approval Date
													</label>
													<input type="Date" id="years" name="years" class="form-control" value="" placeholder="Enter Years" required="true" min="1">
												</div>
												<div class="form-group">
													<label for="syllevel">
														Level
													</label>
													<input type="number" id="syllevel" name="syllevel" class="form-control" value="" placeholder="Enter Level" required="true" min="1">
												</div>
											</div>
										</div>
									</div>
								</div>
								<br />
								<div class="row">
									<div class="col-md-12" align="right">
										<div class="form-group">
											<button class="btn btn-o btn-primary" type="submit" name="syllabus_save">Upload</button>
										</div>
									</div>
								</div>
							</form>
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
		<script src="assets/js/modal-preview.js"></script>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
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
		<!--PDF VIEWER JAVASCRIPT-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>
		<script src="assets/pdf_viewer.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		
		<!-- start: CLIP-TWO JAVASCRIPTS -->
			<script src="assets/js/main.js"></script>
			<!-- start: JavaScript Event Handlers for this page -->
				<script src="assets/js/form-elements.js"></script>
				<script>
					var today = new Date();
					var dd = today.getDate();
					var mm = today.getMonth()+1; // January is 0
					var yyyy = today.getFullYear();
					if(dd<10){
						dd = '0'+dd //append a "0" before values 1-9
					}
					if(mm<10){
						mm= '0'+mm //append a "0" before values 1-9
					}
					today = yyyy +'-'+mm+'-'+dd; //append year, month and day together
					document.getElementById("years").setAttribute("max", today); //set the max attribute of Date input to current date

				</script>
				
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
<script type="text/javascript">
	$(document).ready(function(){
		// Country dependent ajax
		$("#faculty").on("change",function(){
			//var facultyId = $(this).val();
			var facultyId = $(this).val();
			if (facultyId) {
				$.ajax({
					url :"include/data.php",
					type:"POST",
					cache:false,
					data:{facultyId:facultyId},
					success:function(data){
						$("#schools").html(data);
						$('#major').html('<option value="">Select Subject Leader Division</option>');
					}
				});
			}else{
				$('#schools').html('<option value="">School NOT Available</option>');
            	$('#major').html('<option value="">Subject Leader NOT Available</option>');
			}
		});
					

		// state dependent ajax
		$("#schools").on("change", function(){
			var schoolId = $(this).val();
			if (schoolId) {
				$.ajax({
					url :"include/data.php",
					type:"POST",
					cache:false,
					data:{schoolId:schoolId},
					success:function(data){
					$("#major").html(data);
				}
			});
		}else{
            $('#major').html('<option value="">Major NOT Available</option>');
		} 
	});
});
</script>