@extends('layoutpart.masterlayout')
@section('title')
Home
@endsection
@section('mainbody')
<section class="body">
	<!-- start: header -->
	<header class="header">
		<div class="logo-container">
			<a href="../1.7.0" class="logo">
				<img src="assets/images/logo.png" width="75" height="35" alt="Porto Admin" />
			</a>
			<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
				<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>
	
		<!-- start: search & user box -->
		<div class="header-right">
	
			<ul class="notifications">
				<li>
					<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
						<i class="fa fa-envelope"></i>
						<span class="badge">4</span>
					</a>
	
					<div class="dropdown-menu notification-menu">
						<div class="notification-title">
							<span class="pull-right label label-default">230</span>
							Messages
						</div>
	
						<div class="content">
							<ul>
								<li>
									<a href="#" class="clearfix">
										<figure class="image">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
										</figure>
										<span class="title">Joseph Doe</span>
										<span class="message">Lorem ipsum dolor sit.</span>
									</a>
								</li>
								<li>
									<a href="#" class="clearfix">
										<figure class="image">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
										</figure>
										<span class="title">Joseph Junior</span>
										<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
									</a>
								</li>
								<li>
									<a href="#" class="clearfix">
										<figure class="image">
											<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
										</figure>
										<span class="title">Joe Junior</span>
										<span class="message">Lorem ipsum dolor sit.</span>
									</a>
								</li>
								<li>
									<a href="#" class="clearfix">
										<figure class="image">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
										</figure>
										<span class="title">Joseph Junior</span>
										<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
									</a>
								</li>
							</ul>
	
							<hr />
	
							<div class="text-right">
								<a href="#" class="view-more">View All</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
	
			<span class="separator"></span>
	
			<div id="userbox" class="userbox">
				<a href="#" data-toggle="dropdown">
					<figure class="profile-picture">
						<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
					</figure>
					<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
						<span class="name">John Doe Junior</span>
						<span class="role">administrator</span>
					</div>
	
					<i class="fa custom-caret"></i>
				</a>
	
				<div class="dropdown-menu">
					<ul class="list-unstyled">
						<li class="divider"></li>
						<li>
							<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
						</li>
						<li>
							<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
						</li>
						<li>
							<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end: search & user box -->
	</header>
	<!-- end: header -->
	<div class="inner-wrapper">
		<section class="section">
						<div class="container container-with-sidebar">
							<div class="row">
								<ul class="sample-item-list sample-item-list-loaded m-none p-none">
									<div class="isotope-item col-sm-6 col-md-4">
										<div class="thumbnail bg-none b-none mb-xlg">
											<div class="thumb-preview shadow-style-1">
												<a class="thumb-image" href="layouts-default.html">
													<img src="assets/images/previews/preview-default.jpg" class="img-responsive" alt="">
												</a>
											</div>
											<h5 class="pt-xs mg-title text-weight-semibold text-dark center text-uppercase">Default</h5>
										</div>
									</div>
								</ul>
							</div>
						</div>
		</section>
	</div>
</section>
@endsection