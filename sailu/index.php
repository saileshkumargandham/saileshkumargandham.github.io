<?php
include_once('connection.php');
$result = mysqli_query($con,"select * from index_page where row_no='1' ");
$row = $result->fetch_assoc();
$homegallery = mysqli_query($con,"select * from home_posts where row_no='1' ");
$homegposts = $homegallery->fetch_assoc();
$link= mysqli_query($con,"select * from youtube_link");
$youtube_link = $link->fetch_assoc();
$latestnews= mysqli_query($con,"select * from latestnews");
$latestnew_data = $latestnews->fetch_assoc();
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
		<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">

		<style>
			@media only screen and (max-width: 600px) {
  a.name {
    font-size: 30px;
  }

  a.name1 {
    font-size: 14px;
  }
}
		</style>

  <!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>
		<div class="body">

			<header id="header" class="header-narrow header-semi-transparent header-transparent-sticky-deactive header-transparent-bottom-border" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}">
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
										<div class="header-nav-main header-nav-main-no-arrows header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a href="index.php">
															Home
														</a>

													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="70" href="about.html">About</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="70" href="posts.php">Posts</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="70" href="gallery.php">Gallery</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="70" href="contact.php">Contact Us</a>
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
			<div role="main" class="main" id="home">



				<div class="slider-container rev_slider_wrapper" style="height: 1000px;">

					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'sliderLayout': 'fullscreen', 'fullScreenOffset': '0', 'responsiveLevels': [4096,1200,992,500]}">


						<ul>

							<li data-transition="fade">
								<img src="img/poster.jpg"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="rev-slidebg">




										<div class="tp-caption"
									data-x="center" data-hoffset="-290"
									data-y="center" data-voffset="170"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slide-title-border.png" alt=""></div>



                                <div class="tp-caption main-label"
                                    data-x="center" data-hoffset="0"
                                    data-y="center" data-voffset="170"
                                    data-start="1500"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:[100%];s:500;"
                                    data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;"><a class="name">Grandhi Srinivas</a></div>


									<div class="tp-caption"
									data-x="center" data-hoffset="300"
									data-y="center" data-voffset="170"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slide-title-border.png" alt=""></div>

                                <div class="tp-caption bottom-label"
                                    data-x="center" data-hoffset="0"
                                    data-y="center" data-voffset="230"
                                    data-start="2000"
                                    data-fontsize="['20','20','20','30']"
                                    style="z-index: 5"
                                    data-transform_in="y:[100%];opacity:0;s:500;"><a class="name1">MLA Bhimavaram consitutency.</a></div>


							</li>
						</ul>
					</div>
				</div>

				<div>

				<p></p><p></p>
			</div>
<div class="container">

<div class="col-md-2 col-sm-2" style="font-weight: bold; text-align: center; font-size: 16px; color: red; min-height: 45px;">LATEST NEWS:</div>
<div id="carouselContent" class="carousel slide" data-ride="carousel">

<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<div class="item"><b>👉<?php echo $latestnew_data['latestnews'] ?><b></div>
</div>
</div>
<!--a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
	 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	 <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
	 <span class="carousel-control-next-icon" aria-hidden="true"></span>
	 <span class="sr-only">Next</span>
</a-->
</div>

</div>


				<div class="container">



					<div class="row mt-5 counters counters-text-dark">
						<div class="col-lg-3 col-sm-6">
							<div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<i class="fas fa-user"></i>
								<strong data-to="8000" data-append="+">0</strong>
								<label>Majority	</label>
								<p class="text-color-primary mb-5">That much strong</p>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
								<i class="fas fa-home"></i>
								<strong data-to="16" data-append="+">0</strong>
								<label>villages reprensting</label>
								<p class="text-color-primary mb-5">Many more to come</p>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900">
								<i class="fas fa-thumbs-up"></i>
								<strong data-to="70000" data-append="+">0</strong>
								<label>votes in elections</label>
								<p class="text-color-primary mb-5">voters trust</p>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1200">
								<i class="far fa-clock"></i>
								<strong data-to="16" data-append="+">0</strong>
								<label>years of political journey</label>
								<p class="text-color-primary mb-5">serving people</p>
							</div>
						</div>
					</div>

				</div>

				<div class="container">

					<div class="row">
						<div class="col-lg-12 text-center mb-5">
							<h4 class="heading-primary alternative-font mt-5 pt-5">About &nbsp;<strong class="custom-underline">GRANDHI SRINIVAS </strong></h4>
						</div>
					</div>

				</div>
				<section class="section section-default section-with-mockup mb-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">

								<div class="feature-box feature-box-style-2 reverse mt-5 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
									<div class="feature-box-icon">
										<i class="fas fa-handshake"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">MEMBER OF THE LEGISLATIVE<BR> ASSEMBLY</h4>
										<p class="mb-4">.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<img src="img/about/g2.jpg" class="img-fluid mockup-landing-page mb-5 appear-animation" alt="image" data-appear-animation="zoomIn" data-appear-animation-delay="300">
							</div>
							<div class="col-lg-4">

								<div class="feature-box feature-box-style-2 mt-5 appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="600">
									<div class="feature-box-icon">
										<i class="fas fa-heart"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2">REPRESENTING BHIMAVARAM CONSTITUTENCY</h4>
										<p class="mb-4"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="col-lg-12 text-center">
					<div class="container">

						<div class="col-lg-12 text-center mb-5">
							<h4 class="heading-primary alternative-font mt-5 pt-5">&nbsp;<strong class="custom-underline">Todays posts</strong></h4>
						</div>
					</div>
					<p class="lead"><span class="alternative-font text-4">All about government schemes</span></p>

				</div>

				<div class="container">

					<div class="row pt-2">
						<div class="col">

							<ul class="nav nav-pills sort-source mb-3 pb-2" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
								<li class="nav-item" data-option-value="*"><a class="nav-link" href="#"></a></li>

							</ul>

							<div class="sort-destination-loader sort-destination-loader-showing">
								<div class="row mb-4 pt-1 portfolio-list sort-destination" data-sort-id="portfolio">
									<div class="col-md-6 col-lg-4 isotope-item mb-4 pre-construction">
										<a href="">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span>
													<img src="admin/images/<?php echo $row['post1']; ?>" class="img-fluid" alt="">

												</span>
											</span>
										</a>

									</div>
									<div class="col-md-6 col-lg-4 isotope-item mb-4 pre-construction">
										<a href="">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span>
													<img src="admin/images/<?php echo $row['post2']; ?>" class="img-fluid" alt="">

												</span>
											</span>
										</a>

									</div>
									<div class="col-md-6 col-lg-4 isotope-item mb-4 pre-construction">
										<a href="">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span>
													<img src="admin/images/<?php echo $row['post3']; ?>" class="img-fluid" alt="">

												</span>
											</span>
										</a>

									</div>
									<div class="col-md-6 col-lg-4 isotope-item mb-4 pre-construction">
										<a href="">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span>
													<img src="admin/images/<?php echo $row['post4']; ?>" class="img-fluid" alt="">

												</span>
											</span>
										</a>

									</div>
									<div class="col-md-6 col-lg-4 isotope-item mb-4 pre-construction">
										<a href="">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span>
													<img src="admin/images/<?php echo $row['post5']; ?>" class="img-fluid" alt="">

												</span>
											</span>
										</a>

									</div>
									<div class="col-md-6 col-lg-4 isotope-item mb-4 pre-construction">
										<a href="">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span>
													<img src="admin/images/<?php echo $row['post6']; ?>" class="img-fluid" alt="">

												</span>
											</span>
										</a>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>



				</section>

				<div class="col-lg-6"  style="float:none;margin:auto;">
					<div class="row">
						<div class="col-lg-12 text-center mb-5">
							<h4 class="heading-primary alternative-font mt-5 pt-5">&nbsp;<strong class="custom-underline">Press Meets</strong></h4>
						</div>
					</div>
					<div class="embed-responsive-borders">
						<div class="embed-responsive embed-responsive-16by9">

							<iframe frameborder="0" allowfullscreen="" src="<?php echo $youtube_link['link']; ?>"></iframe>
						</div>
					</div>
				</div>


<br>
<br>



				<!-----gallery---->

				<div class="col-lg-12 text-center mb-5">
					<h4 class="heading-primary alternative-font mt-5 pt-5">&nbsp;<strong class="custom-underline">Gallery</strong></h4>
				</div>

				<section class="section section-default mt-0 mb-5">

					<div class="home-concept mt-5">

						<div class="container">


							<div class="row portfolio-list lightbox m-0" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">


								<div class="col-12 col-sm-6 col-lg-3">
									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-centered-icons">
											<span class="thumb-info-wrapper">
												<img src="admin/images/<?php echo $homegposts['post1']; ?>" class="img-fluid" alt="">
												<span class="thumb-info-action">
													<a href="admin/images/<?php echo $homegposts['post1']; ?>" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search-plus"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>
								</div>

								<div class="col-12 col-sm-6 col-lg-3">
									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-centered-icons">
											<span class="thumb-info-wrapper">
												<img src="admin/images/<?php echo $homegposts['post2']; ?>" class="img-fluid" alt="">
												<span class="thumb-info-action">
													<a href="admin/images/<?php echo $homegposts['post2']; ?>"" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search-plus"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-3">
									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-centered-icons">
											<span class="thumb-info-wrapper">
												<img src="admin/images/<?php echo $homegposts['post3']; ?>"  class="img-fluid" alt="">
												<span class="thumb-info-action">
													<a href="admin/images/<?php echo $homegposts['post3']; ?>" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search-plus"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-3">
									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-centered-icons">
											<span class="thumb-info-wrapper">
												<img src="admin/images/<?php echo $homegposts['post4']; ?>" class="img-fluid" alt="">
												<span class="thumb-info-action">
													<a href="admin/images/<?php echo $homegposts['post4']; ?>" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search-plus"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>
								</div>

							</div>

						</div>
					</div>

				</section>

			</div>
			<!--thanks for visiting-->
			<div class="container">

				<div class="row">
					<div class="col-lg-12 text-center">
						<hr>
						<h2><span class="alternative-font text-3 mt-5">Thanks for visiting</span></h2>
					</div>
				</div>

			</div>
 <!--footer-->
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
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong>near new busstand ,Bhimavaram</p></li>
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
								<p>© Copyright <script>document.write(new Date().getFullYear());</script>.<br>  Developed by sailesh kumar Gandham & Ramineni Eswarrao.</p>
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
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="js/views/view.home.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.demos.js"></script>



	</body>
</html>
