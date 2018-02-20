<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>About Us - VATFRANCE</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/skin.less" rel="stylesheet/less">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<div id="wrapper">
			<!--Header Section Start Here -->
			<?php
			include_once ("includes/header.php");
			?>
			<!-- Header Section End Here -->
			<!-- site content -->
			<div id="main">
			
				<div class="content-wrapper" id="page-info">
					<div class="container">
						<!-- Our Story Section Start Here -->
						<section class="our-story row">
							<div class="col-xs-12">
								<header class="story-heading section-header">
									<h2>What is VATFrance? <strong>Read how it started!</strong></h2>
								</header>
								<div class="row">
									<div class="col-xs-12 col-sm-5">
										<section class="slider-wrap flex-slide flexslider">
											<ul class="slides">
											<li>
												<img src="assets/img/img-slide-01.jpg" alt="">
											</li>
											<li>
												<img src="assets/img/img-slide-02.jpg" alt="">
											</li>
											</ul>
										</section>
									</div>
									<div class="col-xs-12 col-sm-7">
										<strong class="article-sammury">
											
										VATFrance is the home of France on VATSIM, A network international for French or visiting virtual Air Traffic Controllers and virtual Pilots,
										transitioning or arriving into French airspace. Our Controllers regularly cover France on our vast majority of airfields in both French
										and English language.
											
										</strong>
										<p>
										Created in December of 2006, the VATFrance Association replacing vACC France. The team created around Patrick Fuchez (alias Fufu), national Events
										are oriented in diverse ways such as training sessions for new Pilots/ATC, VFR/IFR Groupflights and other surprises! Of course events with other
										vACCs around us.

										</p>
										<p>
										Organizations such as CyberAvia, Helicopters AVIS, Taxiways, XPlane and a bunch of others, evolve regularly at VATFrance, creating members to exchange
										friendly and instructive info between pilots, and also with air traffic controllers looking above you, even virtually!			
									</div>
								</div>
							</div>
						</section>
						<!-- Our Story Section Start Here -->

					</div>

					<!-- Helping Section Start here-->
					<section class="helping-child parallax">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-7 col-md-5">
									<h2 class="h1">Want to contact the <strong class="border-none">Staff?</strong></h2>
									<p>Click the button below to get in contact with VATFrance staff members.</p>
									<a data-toggle="modal" href="" class="btn btn-theme">Connect with us!</a>
								</div>
							</div>
						</div>
					</section>
					<!-- Helping Section Start here-->



				</div>

			</div>
			<!-- site content ends -->

			<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
			<!--Footer Section End Here -->
		</div>
		<!-- donation form popup -->

		<div class="modal donate-form">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>You are donating to. <strong>Example Causes name</strong></h2>
						</header>
					</div>
					<div class="modal-body">
						<form role="form">

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label>How much would you like to donate ?</label>

										<div class="choose-pricing">
											<div class="btn-group">
												<button type="button" class="btn btn-default active">
													$12
												</button>
												<button type="button" class="btn btn-default">
													$22
												</button>
												<button type="button" class="btn btn-default">
													$32
												</button>

												<input type="text" placeholder="Custom" class="inpt-first form-control">

											</div>
										</div>
									</div>

								</div>
							</div>

							<div class="row display">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<div class="dropdown">
											<button class="btn btn-width dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
												<small> Donation Type</small>
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
												<li role="presentation">
													<a role="menuitem" tabindex="-1" href="#">Every Monthly (Recurring)</a>
												</li>
												<li role="presentation">
													<a role="menuitem" tabindex="-1" href="#">One Time Donation</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="name">Name<span>*</span></label>
										<input type="text" class="form-control" id="name">
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="last-name">Last Name<span>*</span></label>
										<input type="text" class="form-control" id="last-name">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="name">Email<span>*</span></label>
										<input type="text" class="form-control" id="email">
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="phone">Phone<span>*</span></label>
										<input type="text" class="form-control" id="phone">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="message">Address<span>*</span></label>
										<textarea class="form-control" id="message"></textarea>
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="add-note">Additional Note</label>
										<textarea class="form-control" id="add-note"></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<input type="submit" value="DONATE" class="btn btn-default pull-right">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<p class="forms-notes">
											Note: Lorem ipsum dolor sit amet
										</p>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		<!-- donation form popup -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/less.js"></script>
		<!-- Bootstrap Js--> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.easing.min.js"></script>
		<!--Main Slider Js-->
		<script src="assets/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
		<script src="assets/revolution-slider/js/jquery.themepunch.revolution.js"></script>
		<!--Main Slider Js End -->
		<script src="assets/js/jquery.flexslider.js"></script>
		<script src="assets/js/site.js"></script>
	</body>
</html>