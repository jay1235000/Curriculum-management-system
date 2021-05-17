<!DOCHTML html>
<html>
	<head>
    	<title>CDMS | Login</title>
        <link href="../images/DocMS logo.jpg" rel="icon" type="images/jpg" />
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body class="login">

	<?php
		session_start();
		//var_dump($_POST);
		$msg = '';
		$css_class = '';

		if (isset($_POST['loginSubmit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
			$idlength = strlen($_POST['username']);
			if ($idlength == 6) {
				$pwlength = strlen($_POST['password']);
				//if ($pwlength >= 6) {
				if(preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/",$_POST['password'])){
					$username = $_POST['username'];
					$password = $_POST['password'];


					$conn = mysqli_connect("localhost", "root", "", "edms") or die ("unable to connect to database");
					$query = "SELECT * FROM members WHERE ID = '$username' AND Password = '$password'";
					$result = mysqli_query($conn, $query);
					

					
					if(mysqli_num_rows($result) == 1) {
						//capture the user's information
						$row=mysqli_fetch_assoc($result);

						if($row['Role'] == "Lecturer"){
							$_SESSION['aid'] = $row['Author_ID'];
							header("Location: lecturers/dashboard.php");
							exit();
						}
						if($row['Role'] == "Committee"){
							$_SESSION['cid'] = $row['Committee_ID'];
							$_SESSION['mid'] = $row['Member_ID'];
							header("Location: Committees/dashboard.php");
							exit();
						}
						if($row['Role'] == "Admin"){
							header("Location: Admin/dashboard.php");
							exit();
						}
					} else {
						$msg = 'Wrong username or password';
						$css_class="alert-danger";
					}
				} else {
					$msg = '</br>Wrong username or password';
					$css_class="alert-danger";
				}
			} else {
				$msg = '</br>Wrong username or password';
				$css_class="alert-danger";
			}
			// mysqli_close($conn);
		}

	?>

		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					<a href="../index.php"><h2 title="Redirect to Welcome Page">CDMS | Login</h2></a>
				</div>
				
				<div class="box-login">
					<form class="form-login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
						<fieldset>
							<legend>Sign in to your account</legend>
							<p>
								Please enter your name and password to log in.
								<?php if(!empty($msg)): ?>
									<div class="alert <?php echo $css_class; ?>">
										<h4 align="center"><?php echo $msg; ?></h4>
									</div>
								<?php endif; ?>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" value="" placeholder="Username" />
									<i class="fa fa-user"></i>
								</span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password" />
									<i class="fa fa-lock"></i>
								</span>
								<a href="forgot-password.php">Forgot Password?</a>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary pull-right" name="loginSubmit">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>
					
					<div class="copyright">
						<footer class="footer border-top">
							<div class="wrap">
								&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> CDMS</span>. <span>All rights reserved</span>
							</div>
						</footer>
					</div>
					
				</div>
			</div>
		</div>
		
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
</html>