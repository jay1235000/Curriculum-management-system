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
        <title>Lecturer | Profile</title>
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
        <style>
			.btn-tool{background:0 0;color:#adb5bd;font-size:.875rem;margin:-.75rem 0;padding:.25rem .5rem}
			.btn-group.show .btn-tool,.btn-tool:hover{color:#495057}.btn-tool:focus,.show .btn-tool{box-shadow:none!important}
			.user-block .description{color:#6c757d;font-size:13px;margin-top:-3px}
			.user-block.user-block-sm img{width:1.875rem;height:1.875rem}
			.user-block.user-block-sm .comment,.user-block.user-block-sm .description,.user-block.user-block-sm .username{margin-left:40px}
			.user-block.user-block-sm .username{font-size:14px}
			.img-lg,.img-md,.img-sm{float:left}
			.img-sm{height:1.875rem;width:1.875rem}.img-sm+.img-push{margin-left:2.5rem}
			.img-md{width:3.75rem;height:3.75rem}.img-md+.img-push{margin-left:4.375rem}
			.img-lg{width:6.25rem;height:6.25rem}.img-lg+.img-push{margin-left:6.875rem}
			.img-bordered{border:3px solid #adb5bd;padding:3px}
			.img-bordered-sm{border:2px solid #adb5bd;padding:2px}.img-rounded{border-radius:.25rem}.img-circle{border-radius:50%}
			.img-size-32,.img-size-50,.img-size-64{height:auto}.img-size-64{width:64px}.img-size-50{width:50px}.img-size-32{width:32px}
			.size-32,.size-40,.size-50{display:block;text-align:center}.size-32{height:32px;line-height:32px;width:32px}
			.size-40{height:40px;line-height:40px;width:40px}.size-50{height:50px;line-height:50px;width:50px}
			.attachment-block{background:#f8f9fa;border:1px solid rgba(0,0,0,.125);margin-bottom:10px;padding:5px}
			.attachment-block .attachment-img{float:left;height:auto;max-height:100px;max-width:100px}
			.attachment-block .attachment-pushed{margin-left:110px}.attachment-block .attachment-heading{margin:0}
			.attachment-block .attachment-text{color:#495057}.card>.loading-img,.card>.overlay,.info-box>.loading-img,.info-box>.overlay,.overlay-wrapper>.loading-img,.overlay-wrapper>.overlay,.small-box>.loading-img,.small-box>.overlay{height:100%;left:0;position:absolute;top:0;width:100%}.card .overlay,.info-box .overlay,.overlay-wrapper .overlay,.small-box .overlay{border-radius:.25rem;-ms-flex-align:center;align-items:center;background:rgba(255,255,255,.7);display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;z-index:50}.card .overlay>.fa,.card .overlay>.fab,.card .overlay>.far,.card .overlay>.fas,.card .overlay>.glyphicon,.card .overlay>.ion,.info-box .overlay>.fa,.info-box .overlay>.fab,.info-box .overlay>.far,.info-box .overlay>.fas,.info-box .overlay>.glyphicon,.info-box .overlay>.ion,.overlay-wrapper .overlay>.fa,.overlay-wrapper .overlay>.fab,.overlay-wrapper .overlay>.far,.overlay-wrapper .overlay>.fas,.overlay-wrapper .overlay>.glyphicon,.overlay-wrapper .overlay>.ion,.small-box .overlay>.fa,.small-box .overlay>.fab,.small-box .overlay>.far,.small-box .overlay>.fas,.small-box .overlay>.glyphicon,.small-box .overlay>.ion{color:#343a40}.card .overlay.dark,.info-box .overlay.dark,.overlay-wrapper .overlay.dark,.small-box .overlay.dark{background:rgba(0,0,0,.5)}

			strong, b,label{
				font-weight: 800;
				color: black;
			}
            .profile-user-img{
                border:3px solid #adb5bd;margin:0 auto;padding:3px;width:100px
            }
            .profile-username{
                font-size:21px;margin-top:5px
            }
            .img-fluid{max-width:100%;height:auto}
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

		<?php

		$msg = '';
		$err = '';

		if (isset($_POST['settingssubmit']) && !empty($_POST['inputName']) && !empty($_POST['inputEmail']) && !empty($_POST['inputOccupation']) && !empty($_POST['inputLocation']) && !empty($_POST['inputSkills']) && !empty($_POST['inputExperience']) && !empty($_POST['inputNote'])) {
			if (preg_match("/^[a-zA-Z-' ]*$/",$_POST['inputName'])) {
				if (filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL)) {
					if (preg_match("/^[a-zA-Z-' ]*$/",$_POST['inputNote'])) {
						$id = $_SESSION['aid'];
						$name = $_POST['inputName'];
						$email = $_POST['inputEmail'];
						$address = $_POST['inputLocation'];
						$note = $_POST['inputNote'];
						$skills = $_POST['inputSkills'];
						$position = $_POST['inputOccupation'];
						$education = $_POST['inputExperience'];
						$updatequery = "UPDATE syllabus_author SET Name = '$name', Email = '$email', Address = '$address', Note = '$note', Skill = '$skills', Position = '$position', Education = '$education'  WHERE Author_ID = '$id'";
						mysqli_query($conn, $updatequery)or die ("could not connect");
						$msg = 'Profile Updated';
					} else {
						$err = 'no special characters allowed for notes';
					}	
				} else{
					$err = 'invalid email';
				} 
			} else {
				$err = 'no special characters allowed for name';
			}
		} 
	
		?>

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
									<h1 class="mainTitle">Lecturer | Profile</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Lecturer</span>
									</li>
									<li class="active">
										<span>Profile</span>
									</li>
								</ol>
								<h4 style = "color:blue"><?php echo $msg; ?></h4>
								<h4 style = "color:red"><?php echo $err; ?></h4>
							</div>
						</section>
                        <!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw">
                            <div class="row">
                                <div class="col-md-3">
									<?php 
										$id = $_SESSION['aid'];
										$sql1 = mysqli_query($conn,"SELECT * FROM syllabus_author WHERE Author_ID = '$id'");
										while($row1 = mysqli_fetch_assoc($sql1))
										{

												
									?>
										<div class="card bg-white card-outline-primary">
											<br />
											<div class="card-body box-profile">
												<div class="text-center">
													<img style="width: 100px;" class="profile-user-img img-fluid img-circle"
														src="assets\images\images.jpg"
														alt="User profile picture">
												</div>
												
												<h3 style="color:black;" class="profile-username text-center"><?php echo $row1['Name'];?></h3>

												<p style="font-size: 16px;" class="text-muted text-center"><?php echo $row1['Position'];?></p>

												<ul class="list-group list-group-unbordered mb-3">
													<li class="list-group-item">
														<b>Total syllabi</b> <a style="color:black;font-size: 14px;font-family:Times New Roman, Times, serif;" class="pull-right">1,322</a>
													</li>
													<li class="list-group-item">
														<b>Current Syllabi</b> <a style="color:black;font-size: 14px;font-family:Times New Roman, Times, serif;" class="pull-right">543</a>
													</li>
													<li class="list-group-item">
														<b>Out to Date</b> <a  style="color:black;font-size: 14px;font-family:Times New Roman, Times, serif;"class="pull-right">13,287</a>
													</li>
												</ul>
											</div>
										</div>
										<br />
										<div class="card bg-white">
											<div class="card-header card-primary">
												<h3 style="font-size: 17px;color:white;" class="card-title">About Me</h3>
											</div>
											<div class="card-body" style="padding: 16px;">
												<strong>  <i style="font-size: 17px;" class="fa fa-at mr-1"></i> Email</strong>

												<p style="font-size:15px;font-family:Times New Roman, Times, serif;" class="text-muted">
													<?php echo $row1['Email']; ?>
												</p>

												<hr>

												<strong>  <i style="font-size: 17px;" class="fa fa-book mr-1"></i> Education</strong>

												<p style="font-size:15px;font-family:Times New Roman, Times, serif;" class="text-muted">
													<?php echo $row1['Education']; ?>
												</p>

												<hr>

												<strong><i style="font-size: 17px;color:orange;" class="fa fa-map-marker mr-1"></i> Location</strong>

												<p style="font-size:15px;font-family:Times New Roman, Times, serif;" class="text-muted"><?php echo $row1['Address']; ?></p>

												<hr>

												<strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

												<p style="font-size:15px;font-family:Times New Roman, Times, serif;" class="text-muted">
													<span class="tag tag-info"><?php echo $row1['Skill']; ?></span>
												</p>

												<hr>

												<strong><i class="fa fa-file mr-1"></i> Notes</strong>

												<p style="font-size:15px;font-family:Times New Roman, Times, serif;" class="text-muted"><?php echo $row1['Note']; ?></p>
											</div>
										</div>
									<?php } ?>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card bg-white">
                                            <div class="card-header p-2 bg-white">
                                                <ul class="nav nav-pills">
                                                    <li class="nav-item"><a style="font-size:18px;" class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                                                    <li class="nav-item"><a style="font-size:18px;" class="nav-link" href="#setting" data-toggle="tab">Settings</a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <div class="active tab-pane" id="activity">
														<!-- Post -->
                                                        <div class="post">
															<div class="user-block">
																<img class="img-circle img-bordered-sm" style="width: 25px;" src="assets\images\images.jpg" alt="user image">
																<span class="username">
																	<a href="#">SCC member.</a>
																	<a href="#" class="pull-right btn-tool"><i class="fa fa-times"></i></a>
																</span>
																<span class="description">Posted - 7:30 PM today</span>
															</div>
															<!-- /.user-block -->
															<br />
															<p>
																Lorem ipsum represents a long-held tradition for designers,
																typographers and the like. Some people hate it and argue for
																its demise, but others ignore the hate as they create awesome
																tools to help create filler text for everyone from bacon lovers
																to Charlie Sheen fans.
															</p>
															<hr />
                                                        </div>
                                                        <!-- /.post -->

														<!-- Post -->
                                                        <div class="post">
															<div class="user-block">
																<img class="img-circle img-bordered-sm" style="width: 25px;" src="assets\images\images.jpg" alt="user image">
																<span class="username">
																	<a href="#">SCC member.</a>
																	<a href="#" class="pull-right btn-tool"><i class="fa fa-times"></i></a>
																</span>
																<span class="description">Posted - 7:30 PM today</span>
															</div>
															<!-- /.user-block -->
															<br />
															<p>
																Lorem ipsum represents a long-held tradition for designers,
																typographers and the like. Some people hate it and argue for
																its demise, but others ignore the hate as they create awesome
																tools to help create filler text for everyone from bacon lovers
																to Charlie Sheen fans.
															</p>
															<hr />
                                                        </div>
                                                        <!-- /.post -->

                                                        <!-- Post -->
                                                        <div class="post">
															<div class="user-block">
																<img class="img-circle img-bordered-sm" style="width: 25px;" src="assets\images\images.jpg" alt="user image">
																<span class="username">
																	<a href="#">SCC member.</a>
																	<a href="#" class="pull-right btn-tool"><i class="fa fa-times"></i></a>
																</span>
																<span class="description">Posted - 7:30 PM today</span>
															</div>
															<!-- /.user-block -->
															<br />
															<p>
																Lorem ipsum represents a long-held tradition for designers,
																typographers and the like. Some people hate it and argue for
																its demise, but others ignore the hate as they create awesome
																tools to help create filler text for everyone from bacon lovers
																to Charlie Sheen fans.
															</p>
															<hr />
                                                        </div>
                                                        <!-- /.post -->

                                                        <!-- Post -->
                                                        <div class="post clearfix">
															<div class="user-block">
																<img class="img-circle img-bordered-sm" style="width: 25px;" src="assets\images\images.jpg" alt="User Image">
																<span class="username">
																	<a href="#">SCC member.</a>
																	<a href="#" class="pull-right btn-tool"><i class="fa fa-times"></i></a>
																</span>
																<span class="description">Posted - 3 days ago</span>
															</div>
															<!-- /.user-block -->
															<br />
															<p>
																Lorem ipsum represents a long-held tradition for designers,
																typographers and the like. Some people hate it and argue for
																its demise, but others ignore the hate as they create awesome
																tools to help create filler text for everyone from bacon lovers
																to Charlie Sheen fans.
															</p>
															<hr />
                                                        </div>
                                                        <!-- /.post -->

                                                        <!-- Post -->
                                                        <div class="post">
															<div class="user-block">
																<img class="img-circle img-bordered-sm" style="width: 25px;" src="assets\images\images.jpg" alt="User Image">
																<span class="username">
																	<a href="#">SCC member.</a>
																	<a href="#" class="pull-right btn-tool"><i class="fa fa-times"></i></a>
																</span>
																<span class="description">Posted - 5 days ago</span>
															</div>
															<!-- /.user-block -->
															<br />
															<p>
																Lorem ipsum represents a long-held tradition for designers,
																typographers and the like. Some people hate it and argue for
																its demise, but others ignore the hate as they create awesome
																tools to help create filler text for everyone from bacon lovers
																to Charlie Sheen fans.
															</p>
															<!-- /.row -->

                                                        
                                                        </div>
                                                        <!-- /.post -->
                                                    </div>
                                                    <div class="tab-pane" id="setting">
                                                        <form class="form-horizontal" role="form" name="" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
														
															<div class="form-group row">
																<label for="inputName" class="col-sm-2 col-form-label">Name</label>
																<div class="col-sm-10">
																<input style="color:black;font-size: 16px;font-family:Times New Roman, Times, serif;" type="text" class="form-control" id="inputName" name="inputName" placeholder="Name">
																</div>
															</div>
															<div class="form-group row">
																<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
																<div class="col-sm-10">
																<input style="color:black;font-size: 16px;font-family:Times New Roman, Times, serif;" type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
																</div>
															</div>
															<div class="form-group row">
																<label for="inputName2" class="col-sm-2 col-form-label">Position</label>
																<div class="col-sm-10">
																<input style="color:black;font-size: 16px;font-family:Times New Roman, Times, serif;" type="text" class="form-control" id="inputOccupation" name="inputOccupation" placeholder="Occupation">
																</div>
															</div>
															<div class="form-group row">
																<label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
																<div class="col-sm-10">
																<input style="color:black;font-size: 16px;font-family:Times New Roman, Times, serif;" type="text" class="form-control" id="inputLocation" name="inputLocation" placeholder="Location">
																</div>
															</div>
															<div class="form-group row">
																<label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
																<div class="col-sm-10">
																<input style="color:black;font-size: 16px;font-family:Times New Roman, Times, serif;" type="text" class="form-control" id="inputSkills" name="inputSkills" placeholder="Skills">
																</div>
															</div>
															<div class="form-group row">
																<label for="inputExperience" class="col-sm-2 col-form-label">Education</label>
																<div class="col-sm-10">
																<textarea style="color:black;font-size: 16px;font-family:Times New Roman, Times, serif;" class="form-control" id="inputExperience" name="inputExperience" placeholder="Education"></textarea>
																</div>
															</div>
															<div class="form-group row">
																<label for="inputExperience" class="col-sm-2 col-form-label">Notes</label>
																<div class="col-sm-10">
																<textarea style="color:black;font-size: 16px;font-family:Times New Roman, Times, serif;" class="form-control" id="inputNote" name="inputNote" placeholder="Notes"></textarea>
																</div>
															</div>
															
															<div class="form-group row">
																<div class="offset-sm-2 col-sm-10">
																<button type="submit" name="settingssubmit" class="btn btn-danger">Submit</button>
																</div>
															</div>
                                                        </form>
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
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
    </body>
</html>