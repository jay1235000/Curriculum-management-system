
<header class="navbar navbar-default navbar-static-top">
	<!-- start: NAVBAR HEADER -->
	<div class="navbar-header">
		<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
			<i class="ti-align-justify"></i>
		</a>
		<a class="navbar-brand" href="dashboard.php">
			<h2 style="padding-top:20% ">CDMS</h2>
		</a>
		<a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
			<i class="ti-align-justify"></i>
		</a>
		<a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<i class="ti-view-grid"></i>
		</a>
	</div>
	<!-- end: NAVBAR HEADER -->
	<!-- start: NAVBAR COLLAPSE -->
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-right">
			<!-- start: Notification DROPDOWN -->
			<li class="dropdown" style="padding-top:2% ">
				<!--<h2>E-Document Management System</h2>-->
				<a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true">
					<span style="font-size: 30px;" class="ti-bell">
						<i class="badge badge-light">5</i>
					</span>
				</a>
				<ul class="dropdown-menu dropdown-light">
					<li>
						<a href="#" class="dropdown-item">
							<small><i>February 01, 2021</i></small><br />
							Testing out this notification post.
						</a>
					</li>
					<li class="dropdown-divider"></li>
					<li>
						<a href="#" class="dropdown-item">
							<small><i>February 01, 2021</i></small><br />
							Testing out this notification post.
						</a>
					</li>
				</ul>
			</li>
			<li></li>
			<li class="dropdown current-user">
				<a href class="dropdown-toggle" data-toggle="dropdown">
					<img src="assets/images/images.jpg" > <span class="username">
					<i class="ti-angle-down"></i></i></span>
				</a>
				<ul class="dropdown-menu dropdown-light">
					<li>
						<a href="profile.php">
							My Profile
						</a>
					</li>
					<li>
						<a href="change-password.php">
							Change Password
						</a>
					</li>
					<li>
						<a href="logout.php">
							Log Out
						</a>
					</li>
				</ul>
			</li>
			<!-- end: USER OPTIONS DROPDOWN -->
		</ul>
		<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
		<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
			<div class="arrow-left"></div>
			<div class="arrow-right"></div>
		</div>
		<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
	</div>
	<!-- end: NAVBAR COLLAPSE -->
</header>
