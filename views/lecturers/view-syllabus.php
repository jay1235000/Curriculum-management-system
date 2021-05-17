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
    <title>Lecturers | Manage Syllabus</title>
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
                <div class="main-content" >
                    <div class="wrap-content container" id="container">
                        <!-- start: PAGE TITLE -->
                        <section id="page-title">
                            <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Lecturer | Manage Syllabus</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                <span>Lecturer</span>
                                </li>
                                <li class="active">
                                <span>Manage Syllabus</span>
                                </li>
                            </ol>
                            </div>
                        </section>
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Syllabus</span></h5>
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
												<td>
                                                    <a title='Download Syllabus' href="../lecturers/<?php echo $link ?>" download>
                                                            Download Syllabus...
                                                    </a>
                                                    
                                                </td>
											</tr>	
											
										</tbody>
									</table>
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
            </div>
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
		<!--PDF VIEWER JAVASCRIPT-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			var test = '<?= $link?>';
			const url = '../lecturers/'+test;
			//alert(test);

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
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
    </body>
</html>