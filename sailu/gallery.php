<?php
include_once('connection.php');
$result = mysqli_query($con,"select * from gallery ORDER BY time DESC");
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

		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

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

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>

								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>Gallery</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<!--div class="row">
						<div class="col">
							<div class="portfolio-title">
								<div class="row">
									<div class="portfolio-nav-all col-lg-1">
										<a href="gallery.html" data-tooltip data-original-title="Gallery"><i class="fas fa-th"></i></a>
									</div>
									<div class="col-lg-10 text-center">
										<h2 class="mb-0">Gallery</h2>
									</div>

								</div>
							</div>

							<hr class="tall">
						</div>

					</div-->

					<div class="row portfolio-list lightbox m-0" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
						<?php
									if ($result->num_rows > 0)
									{
										while($row = $result->fetch_assoc())
									{
									$a=$row['name'];
									?>

						<div class="col-12 col-sm-6 col-lg-3">
							<div class="portfolio-item">
								<span class="thumb-info thumb-info-lighten thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="admin/gallery_posts/<?php echo $a; ?>" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<a href="admin/gallery_posts/<?php echo $a; ?>" class="lightbox-portfolio">
												<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search-plus"></i></span>
											</a>
										</span>
									</span>
								</span>
							</div>
						</div>
						<?php
									}
									}
						?>


					</div>




				</div>

			</div>


			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Contact us</span>
						</div>
						<div class="col-lg-3">
							<div class="newsletter">
								<h4>Reach us at</h4>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
								width="80%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-3">
							<h4>Latest Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 2}">
								<p>loading...</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> near new busstand ,Bhimavaram</p></li>
									<li><p><i class="fas fa-phone"></i> <strong>Phone:</strong>+91 9912104449</p></li>
									<li><p><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">grandhisrinivasbvrm@gmail.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="https://www.facebook.com/search/top/?q=grandhi%20srinivas" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="https://twitter.com/MLABvrm?s=08" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons"><a href="https://www.instagram.com/grandhisrinivas99/" target="_blank" title="Linkedin"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">

							<div class="col-lg-12 text-center">
								<p><b>© Copyright <script>document.write(new Date().getFullYear());</script>.<br> Developed by sailesh kumar Gandham & Ramineni Eswarrao.<b></p>
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

		<script src="js/theme.js"></script>

		<script src="js/custom.js"></script>

		<script src="js/theme.init.js"></script>



	</body>
</html>
