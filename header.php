<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Learn_to_fly
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-lg-flex justify-content-between align-items-center py-3 px-sm-3">
					<!-- logo -->
					<div id="logo">
						<h1><a href="index.html"><span class="fa fa-linode mr-2"></span>Startup</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.html" class="active">Home</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="pricing.html">Pricing</a></li>
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="#services" class="drop-text">Services</a></li>
										<li><a href="faq.html" class="drop-text">Faq's</a></li>
										<li><a href="404.html" class="drop-text">404</a></li>
										<li><a href="#stats" class="drop-text">Statistics</a></li>
										<li><a href="about.html" class="drop-text">Why Choose Us?</a></li>
										<li><a href="about.html" class="drop-text">Our Team</a></li>
										<li><a href="#partners" class="drop-text">Partners</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
					<div class="d-flex mt-lg-1 mt-sm-2 mt-3 justify-content-center">
						<!-- search -->
						<div class="search-w3layouts mr-3">
							<form action="#" method="post" class="search-bottom-wthree d-flex">
								<input class="search" type="search" placeholder="Search Here..." required="">
								<button class="form-control btn" type="submit"><span class="fa fa-search"></span></button>
							</form>
						</div>
						<!-- //search -->
						<!-- download -->
						<a class="dwn-w3ls btn" href="http://w3layouts.com/" target="_blank">
							<span class="fa fa-cloud-download"></span>
						</a>
						<!-- //download -->
					</div>
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt position-relative">
			<div class="container">
				<div class="d-md-flex">
					<div class="w3ls_banner_txt">
						<h3 class="w3ls_pvt-title">Business <br><span>Startup</span></h3>
						<p class="text-sty-banner">Sed ut perspiciatis unde omnis iste natus doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
						<a href="about.html" class="btn button-style mt-md-5 mt-4">Read More</a>
					</div>
					<div class="banner-img">
						<img src="images/banner.png" alt="" class="img-fluid">
					</div>
				</div>
			</div>
			<!-- animations effects -->
			<div class="icon-effects-w3l">
				<img src="images/shape1.png" alt="" class="img-fluid shape-wthree shape-w3-one">
				<img src="images/shape2.png" alt="" class="img-fluid shape-wthree shape-w3-two">
				<img src="images/shape3.png" alt="" class="img-fluid shape-wthree shape-w3-three">
				<img src="images/shape5.png" alt="" class="img-fluid shape-wthree shape-w3-four">
				<img src="images/shape4.png" alt="" class="img-fluid shape-wthree shape-w3-five">
				<img src="images/shape6.png" alt="" class="img-fluid shape-wthree shape-w3-six">
			</div>
			<!-- //animations effects -->
		</div>
		<!-- //banner -->
	</div>

	<div id="content" class="site-content">
