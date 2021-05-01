<?php
include_once('connection.php');
$result = mysqli_query($con,"select * from post ORDER BY time DESC");
 ?>

<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Grandhi Srinivas</title>

		<meta name="keywords" content="mlabhimavaram,bhimavaram,grandhi,grandhisrinivas,mlagrandhisrinivas,grandhisrinivasmla" />
		<meta name="description" content="GRANDHI SRINIVAS ">
		<meta name="author" content="sailesh">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/flag.png" type="image/x-icon" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
		<link rel="stylesheet" href="vendor/nivo-slider/nivo-slider.css">
		<link rel="stylesheet" href="vendor/nivo-slider/default/default.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-construction.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/skin-construction.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body data-spy="scroll" data-target="#sidebar" data-offset="120">

		<div class="body">
			<header id="header" class="header-narrow header-semi-transparent-light" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
                    <a href="index.php">
                      <img alt="image" width="42" height="40" src="img/flag.png">
                    </a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-stripe">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a class="nav-link" href="index.php">
															Home
														</a>
													</li>
													<li>
														<a class="nav-link" href="about.html">
															About
														</a>
													</li>
													<li class="dropdown">
														<a class="nav-link" href="posts.php">
															Posts
														</a>

													</li>
													<li>
														<a class="nav-link" href="gallery.php">
															Gallery
														</a>
													</li>
													<li>
														<a class="nav-link" href="contact.php">
															Contact
														</a>
													</li>

												</ul>
											</nav>
										</div>

										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				<section class="section section-tertiary section-no-border pb-3 mt-0">
					<div class="container">
						<div class="row justify-content-end mt-4">
							<div class="col-lg-10 pt-4 mt-4 text-right">
							<h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary"></h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row pt-2">
						<div class="col">

							<ul class="nav nav-pills sort-source mb-3 pb-2" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
								<li class="nav-item active" data-option-value="*"><a class="nav-link active" href="#">All Posts</a></li>
															</ul>

							<div class="sort-destination-loader sort-destination-loader-showing">
								<div class="row mb-4 pt-1 portfolio-list sort-destination" data-sort-id="portfolio">
									<?php
									if ($result->num_rows > 0)
									{
										while($row = $result->fetch_assoc())
									{
									$a=$row['image'];
									?>

									<div class="col-md-6 col-lg-4 isotope-item mb-4 pre-construction">
										<a href="">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span>
													<img src="admin/posts/<?php echo $a; ?>" class="img-fluid" alt="">

												</span>
											</span>
										</a>

									</div>
									<?php
									}
									}
									?>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<footer id="footer">
				<div class="container">


					<div class="footer-copyright">
						<div class="row">
							<div class="col-lg-12 text-center">
								<p><b>© Copyright 2020.<br> Developed by sailesh kumar Gandham & Ramineni Eswarrao.<b></p>
							</div>
						</div>
					</div>

				</div>
			</footer>

		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="vendor/nivo-slider/jquery.nivo.slider.min.js"></script>
		<script src="js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-construction.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>
