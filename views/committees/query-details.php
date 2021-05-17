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
        <title>Committees | Query Details</title>
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
		<div id="dom-target" style="display: none">
			<?php
				$kingz = mysqli_query($conn,"SELECT Link_to_syllabus FROM syllabus WHERE Syllabus_ID = ".$_GET['id']."");
				$row = mysqli_fetch_assoc($kingz);
				$link = $row['Link_to_syllabus'];

				echo $link;
			?>
		</div>
		
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
									<h1 class="mainTitle">Committees | Query Details</h1>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Committees</span>
									</li>
									<li class="active">
										<span>Query Details</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-6" id="window">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Query Details</span></h5>
									<table class="table table-hover" id="sample-table-1">
		
										<tbody>

											<tr>
												<th>Syllabus Preview</th>
												<td>
													<div id="my_pdf_viewer">
														<div class="navigation_controls">
															<button id="go_previous">
																<i class="fa fa-arrow-circle-left"></i> Prev Page
															</button>
															<input id="current_page" value="1" type="number"/>
															<button id="go_next">
																Next Page <i class="fa fa-arrow-circle-right"></i>
															</button>
														</div>
														<div id="zoom_controls">
															<button id="zoom_in"><i class="fa fa-search-plus"></i></button>
															<button id="zoom_out"><i class="fa fa-search-minus"></i></button>
														</div>
														<div id="canvas_container">
															<canvas id="pdf_renderer"></canvas>
														</div>
													</div>
													
												<td>
												
											</tr>
											<tr>
												<th>Download</th>
												<td><a title="Download Syllabus" href="../lecturers/<?php echo $link ?>" download>Download Syllabus...</a></td>
											</tr>

											<form name="query" method="post">
												<tr>
													<th>Append Status</th>
													<td>
														<select class="form-control" id="status" name="status">
															<option disabled selected>Select Status</option>
															<option value="">Pending Review</option>
															<option value="">Being Reviewed</option>
															<option value="">Approved</option>
															<option value="">Denied</option>
														</select>
													</td>
												</tr>
												<tr>
													<th>Committee Remark</th>
													<td><textarea name="remark" class="form-control" ></textarea></td>
												</tr>
												<tr style="align:center;">
													<td>&nbsp;</td>
													<td>
														<button type="submit" class="btn btn-danger pull-left" name="refusebtn">
															Refuse <i class="fa fa-times-circle"></i>
														</button>
													</td>
													<td>
														<a href="#reviewer" data-toggle="tab" title="Start Approval Process" class="btn btn-success pull-left" id="approvebtn" name="approvebtn">
															Approve Process <i class="fa fa-check-circle"></i>
														</a>
													</td>
												</tr>
											</form>
											
										</tbody>
									</table>
								</div>
							</div>
							<div class="row">
								<form name="checklist" method="post" action="">
									<div class="tab-content">
										<div class="col-md-6 tab-pane" id="reviewer">
											<div class="card">
												<div class="card-header">
													<h3 class="card-title">Reviewer Details</h3>
												</div>
												<div class="card-body" style="padding:25px;">
													<div class="form-group">
														<label for="name">What is your name? </label>
														<input class="form-control" name="name" id="name" placeholder="John Doe" required/>
													</div>
													<div class="form-group">
														<label for="school">Which school are you affiliated? </label>
														<input class="form-control" name="school" id="school" placeholder="SCIT, SOE..."/>
													</div>
													<div class="form-group">
														<label for="position">What is you position/capacity? </label>
														<input class="form-control" name="position" id="position" />
													</div>
												</div>
												<div class="footer">
													<div class="form-group" align="center">
														<a href="#syllabus" class="btn btn-o btn-primary" data-toggle="tab"> Next</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 tab-pane" id="syllabus">
											<div class="card">
												<div class="card-header">
													<h3 class="card-title">Syllabus Under Review</h3>
												</div>
												<div class="card-body" style="padding:25px;">
													<div class="form-group">
														<label for="modname">Module Title</label>
														<input class="form-control" name="modname" id="modname" placeholder="john doe" required/>
													</div>
													<div class="form-group">
														<label for="modcode">Module Code </label>
														<input class="form-control" name="modcode" id="modcode" placeholder="IDK HERE..."/>
													</div>
													<br />
													<p class="muted-text">
														PREMLIMIARIES - Does the syllabus under review consist of the following: 
													</p>
													<table>
														<tr class="form-group">
															<td></td>
															<td colspan="2">Yes</td>
															<td colspan="2">No</td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">College/Faculty</td>
															<td colspan="2"><input type="checkbox" id="yes1" name="yes1" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no1" name="no1" value="No"></td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">School Department</td>
															<td colspan="2"><input type="checkbox" id="yes2" name="yes2" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no2" name="no2" value="No"></td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">Course of Study</td>
															<td colspan="2"><input type="checkbox" id="yes2" name="yes2" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no2" name="no2" value="No"></td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">Module Title</td>
															<td colspan="2"><input type="checkbox" id="yes2" name="yes2" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no2" name="no2" value="No"></td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">Module Code</td>
															<td colspan="2"><input type="checkbox" id="yes2" name="yes2" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no2" name="no2" value="No"></td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">Credit Value</td>
															<td colspan="2"><input type="checkbox" id="yes2" name="yes2" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no2" name="no2" value="No"></td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">Prerequisite</td>
															<td colspan="2"><input type="checkbox" id="yes2" name="yes2" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no2" name="no2" value="No"></td>
														</tr>
													</table>
													<br />
												</div>
												<div class="footer">
													<div class="form-group" align="center">
														<a href="#reviewer" class="btn btn-o btn-primary" data-toggle="tab"> Back</a>
														<a href="#format" class="btn btn-o btn-primary" data-toggle="tab"> Next</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 tab-pane" id="format">
											<div class="card">
												<div class="card-header">
													<h3 class="card-title">Formatting & Module Description</h3>
												</div>
												<div class="card-body" style="padding:25px;">
													<p class="muted-text">
														MODULE DESCRIPTION
														<br />
														<br />
														A brief statement providing and overview of the module, the learning outcomes expected
														and the relationship between this module and the overall course aims. NOTE: This module 
														description will be put on the University website, in the Faculty brochure and in the University
														Prospectus. Thereforem it should be a clear description of the intent of the module in no more
														than 50 words.
													</p>
													<hr />
													<div class="form-group">
														<label for="">All relevant Headings & subheadings</label>
														<br/><br />
														<label for="yes8">Yes</label>
														<input type="checkbox" id="yes8" name="yes8" value="Yes">
														<label for="no8">No</label>
														<input type="checkbox" id="no8" name="no8" value="No">
													</div>
													<div class="form-group">
														<label for="hcomments">Comments on headings etc.</label>
														<textarea class="form-control" name="hcomments" id="hcomments"></textarea>
													</div>
													<div class="form-group">
														<label for="">Correct numbering on sections</label>
														<br/><br />
														<label for="yes9">Yes</label>
														<input type="checkbox" id="yes9" name="yes9" value="Yes">
														<label for="no9">No</label>
														<input type="checkbox" id="no9" name="no9" value="No">
													</div>
													<div class="form-group">
														<label for="scomments">Comments on section numbers</label>
														<textarea class="form-control" name="scomments" id="scomments"></textarea>
													</div>
													<div class="form-group">
														<label for="">Standard font throughout</label>
														<br/><br />
														<label for="yes10">Yes</label>
														<input type="checkbox" id="yes10" name="yes10" value="Yes">
														<label for="no10">No</label>
														<input type="checkbox" id="no10" name="no10" value="No">
													</div>
													<div class="form-group">
														<label for="fcomments">Comments on font standardization</label>
														<textarea class="form-control" name="fcomments" id="fcomments"></textarea>
													</div>
													<div class="form-group">
														<label for="">Includes footer & revision date</label>
														<br/><br />
														<label for="yes11">Yes</label>
														<input type="checkbox" id="yes11" name="yes11" value="Yes">
														<label for="no11">No</label>
														<input type="checkbox" id="no11" name="no11" value="No">
													</div>
													<div class="form-group">
														<label for="fdcomments">Comments on footer & date revision</label>
														<textarea class="form-control" name="fdcomments" id="fdcomments"></textarea>
													</div>
													<div class="form-group">
														<label for="">Module description in keeping with guidelines on template</label>
														<br/><br />
														<label for="yes12">Yes</label>
														<input type="checkbox" id="yes12" name="yes12" value="Yes">
														<label for="no12">No</label>
														<input type="checkbox" id="no12" name="no12" value="No">
													</div>
													<div class="form-group">
														<label for="mdcomments">Comments on module description</label>
														<textarea class="form-control" name="mdcomments" id="mdcomments"></textarea>
													</div>
												</div>
												<div class="footer">
													<div class="form-group" align="center">
														<a href="#syllabus" class="btn btn-o btn-primary" data-toggle="tab"> Back</a>
														<a href="#context" class="btn btn-o btn-primary" data-toggle="tab"> Next</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 tab-pane" id="context">
											<div class="card">
												<div class="card-header">
													<h3 class="card-title">Module Content & Context</h3>
												</div>
												<div class="card-body" style="padding:25px;">
													<p class="muted-text">
														This section should detail the specific content to be covered and the context in which it will
														be taught.
														<br />
														<br />
														For each topic or unit, the time to be spent is to be specified. The indicated amount of time
														allocated for all sections/topics/units should equal the number of contact hours available in
														the course (No contact hours times 13 weeks). The amount of time also influences the weight 
														assigned in assessment activities or examination questions.
													</p>
													<hr />
													<div class="form-group">
														<label for="">Used Sub-headings where Appropriate</label>
														<br/><br />
														<label for="yes13">Yes</label>
														<input type="checkbox" id="yes13" name="yes13" value="Yes">
														<label for="no13">No</label>
														<input type="checkbox" id="no13" name="no13" value="No">
													</div>
													<div class="form-group">
														<label for="ascomments">Comments on appropriate subheadings</label>
														<textarea class="form-control" name="ascomments" id="ascomments"></textarea>
													</div>
													<div class="form-group">
														<label for="">Content Maps onto objectives</label>
														<br/><br />
														<label for="yes14">Yes</label>
														<input type="checkbox" id="yes14" name="yes14" value="Yes">
														<label for="no14">No</label>
														<input type="checkbox" id="no14" name="no14" value="No">
													</div>
													<div class="form-group">
														<label for="omcomments">Comments on objectives mapping</label>
														<textarea class="form-control" name="omcomments" id="omcomments"></textarea>
													</div>
												</div>
												<div class="footer">
													<div class="form-group" align="center">
														<a href="#format" class="btn btn-o btn-primary" data-toggle="tab"> Back</a>
														<a href="#objective" class="btn btn-o btn-primary" data-toggle="tab"> Next</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 tab-pane" id="objective">
											<div class="card">
												<div class="card-header">
													<h3 class="card-title">Module Objectives</h3>
												</div>
												<div class="card-body" style="padding:25px;">
													<p class="muted-text">
														The competencies and standards that need to be achieved are listed.
														Approach two is preferred. For further details, please refer to the
														template.
													</p>
													<hr />
													<div class="form-group">
														<label for="">General Objectives placed before specific objectives</label>
														<br/><br />
														<label for="yes15">Yes</label>
														<input type="checkbox" id="yes15" name="yes15" value="Yes">
														<label for="no15">No</label>
														<input type="checkbox" id="no15" name="no15" value="No">
													</div>
													<div class="form-group">
														<label for="omcomments">Comments on general objectives placement</label>
														<textarea class="form-control" name="omcomments" id="omcomments"></textarea>
													</div>
													<div class="form-group">
														<label for="">General Objectives written in broad/non-specific terms</label>
														<br/><br />
														<label for="yes16">Yes</label>
														<input type="checkbox" id="yes16" name="yes16" value="Yes">
														<label for="no16">No</label>
														<input type="checkbox" id="no16" name="no16" value="No">
													</div>
													<div class="form-group">
														<label for="omcomments">Comments on general objectives writing</label>
														<textarea class="form-control" name="omcomments" id="omcomments"></textarea>
													</div>
													<div class="form-group">
														<label for="">Specific Objectives are measurable/quantifiable</label>
														<br/><br />
														<label for="yes16">Yes</label>
														<input type="checkbox" id="yes16" name="yes16" value="Yes">
														<label for="no16">No</label>
														<input type="checkbox" id="no16" name="no16" value="No">
													</div>
													<div class="form-group">
														<label for="omcomments">Comments on objective measurement</label>
														<textarea class="form-control" name="omcomments" id="omcomments"></textarea>
													</div>
													<div class="form-group">
														<label for="">Objectives are too much</label>
														<br/><br />
														<label for="yes16">Yes</label>
														<input type="checkbox" id="yes16" name="yes16" value="Yes">
														<label for="no16">No</label>
														<input type="checkbox" id="no16" name="no16" value="No">
													</div>
													<div class="form-group">
														<label for="omcomments">Comments on why the objectives are excessive</label>
														<textarea class="form-control" name="omcomments" id="omcomments"></textarea>
													</div>
												</div>
												<div class="footer">
													<div class="form-group" align="center">
														<a href="#context" class="btn btn-o btn-primary" data-toggle="tab"> Back</a>
														<a href="#approaches" class="btn btn-o btn-primary" data-toggle="tab"> Next</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 tab-pane" id="approaches">
											<div class="card">
												<div class="card-header">
													<h3 class="card-title">Learning and Teaching Approaches</h3>
												</div>
												<div class="card-body" style="padding:25px;">
													<p class="muted-text">
														The specific strategies to be used to enable students to achieve the stated
														outcomes should be described. NOTE: The strategies should be clearly described
														in relation to each learning objective - not merely a shopping list of possible
														approaches. A short paragraph describing the learning approaches for various
														units is most helpful in understanding the approaches to be used. By selecting
														yes you are saying that each approach is adequately described.
													</p>
													<hr />
													<table>
														<tr class="form-group">
															<td></td>
															<td colspan="2">Yes</td>
															<td colspan="2">No</td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">Lecture</td>
															<td colspan="2"><input type="checkbox" id="yes1" name="yes1" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no1" name="no1" value="No"></td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">Tutorial</td>
															<td colspan="2"><input type="checkbox" id="yes2" name="yes2" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no2" name="no2" value="No"></td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">Lab (if applicable)</td>
															<td colspan="2"><input type="checkbox" id="yes2" name="yes2" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no2" name="no2" value="No"></td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">Supervised Practical (if applicable)</td>
															<td colspan="2"><input type="checkbox" id="yes2" name="yes2" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no2" name="no2" value="No"></td>
														</tr>
														<tr class="form-group">
															<td style="padding:10px;">Unsupervised (if applicable)</td>
															<td colspan="2"><input type="checkbox" id="yes2" name="yes2" value="Yes"></td>
															<td colspan="2"><input type="checkbox" id="no2" name="no2" value="No"></td>
														</tr>
													</table>
													<br />
													<div class="form-group">
														<label for="omcomments">Comments on the Teaching Approaches</label>
														<textarea class="form-control" name="omcomments" id="omcomments"></textarea>
													</div>
												</div>
												<div class="footer">
													<div class="form-group" align="center">
														<a href="#objective" class="btn btn-o btn-primary" data-toggle="tab"> Back</a>
														<a href="#procedures" class="btn btn-o btn-primary" data-toggle="tab"> Next</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 tab-pane" id="procedures">
											<div class="card">
												<div class="card-header">
													<h3 class="card-title">Assessment Procedures</h3>
												</div>
												<div class="card-body" style="padding:25px;">
													<p class="muted-text">
														The methods and the numbe of pieces of assessment to be used and the rationale for
														using them should be described. The assessments should be linked to learning
														outcomes and weightings ascribed. Not merely a list of possibilites.
													</p>
													<hr />
													<div class="form-group">
														<label for="">
															Number and form of assessments in keeping with the type of module
															amd the percentage of coursework in relation to the final grade
														</label>
														<br/><br />
														<label for="yes14">Yes</label>
														<input type="checkbox" id="yes14" name="yes14" value="Yes">
														<label for="no14">No</label>
														<input type="checkbox" id="no14" name="no14" value="No">
													</div>
													<div class="form-group">
														<label for="omcomments">Comments about the Assessment Percentage in relation Final Grade</label>
														<textarea class="form-control" name="omcomments" id="omcomments"></textarea>
													</div>
												</div>
												<div class="footer">
													<div class="form-group" align="center">
														<a href="#approaches" class="btn btn-o btn-primary" data-toggle="tab"> Back</a>
														<a href="#" class="btn btn-o btn-primary" data-toggle="tab"> Next</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								<form>
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
		<!--PDF VIEWER JAVASCRIPT-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>
		<!-- <script type="text/javascript" src="assets/pdf_viewer.js"></script> -->
		<script>
			var test = '<?= $link?>';
			const url = '../lecturers/'+test;
			//alert(url);

			var myState = {
				pdf: null,
				currentPage: 1,
				zoom: 1
			}
			pdfjsLib.getDocument(url).then((pdf)=> {
				myState.pdf = pdf;
				render();
			});

			function render(){
				myState.pdf.getPage(myState.currentPage).then((page) => {
					var canvas = document.getElementById("pdf_renderer");
					var ctx = canvas.getContext('2d');

					var viewport = page.getViewport(myState.zoom);

					canvas.width = viewport.width;
					canvas.height = viewport.height;

					page.render({
						canvasContext: ctx,
						viewport: viewport
					});
				});
			}

			document.getElementById('go_previous').addEventListener('click', (e) => {
				if(myState.pdf == null || myState.currentPage == 1) 
				return;
				myState.currentPage -= 1;
				document.getElementById("current_page").value = myState.currentPage;
				render();
			});

			document.getElementById('go_next').addEventListener('click', (e) => {
				if(myState.pdf == null || myState.currentPage > myState.pdf._pdfInfo.numPages) 
				return;
				myState.currentPage += 1;
				document.getElementById("current_page").value = myState.currentPage;
				render();
			});

			document.getElementById('current_page').addEventListener('keypress', (e) => {
				if(myState.pdf == null) return;
			
				// Get key code
				var code = (e.keyCode ? e.keyCode : e.which);
			
				// If key code matches that of the Enter key
				if(code == 13) {
					var desiredPage = 
					document.getElementById('current_page').valueAsNumber;
									
					if(desiredPage >= 1 && desiredPage <= myState.pdf._pdfInfo.numPages) {
						myState.currentPage = desiredPage;
						document.getElementById("current_page").value = desiredPage;
						render();
					}
				}
			});

			document.getElementById('zoom_in').addEventListener('click', (e) => {
				if(myState.pdf == null) return;
				myState.zoom += 0.5;
				render();
			});

			document.getElementById('zoom_out').addEventListener('click', (e) => {
				if(myState.pdf == null) return;
				myState.zoom -= 0.5;
				render();
			});
		</script>
		<script>
			//hide approval form
			document.getElementById("form").style.display = "none";

			//onclick call Approve() function
			document.getElementById("approvebtn").addEventListener("click", Approve);

			function Approve(){
				//display approval form
				document.getElementById("form").style.display = "block";
				
				document.getElementById("window").removeClass("col-md-12");
				document.getElementById("window").addClass("col-md-6");
			}
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