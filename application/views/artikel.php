<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Balay Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet"> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/awal/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/awal/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/awal/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/awal/css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/awal/fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/awal/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/awal/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/awal/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url()?>assets/awal/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url()?>assets/awal/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<body>
		<div id="colorlib-page">
			<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
			<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
				<h1 id="colorlib-logo"><a href="index.html">Balay</a></h1>
				<nav id="colorlib-main-menu" role="navigation">
					<ul>
						<li><a href="<?php echo base_url()?>welcome">Home</a></li>
						<li><a href="<?php echo base_url()?>wisata">Wisata Nabire</a></li>
						<li><a href="<?php echo base_url()?>about">Tentang Kami</a></li>
						<li class="colorlib-active"><a href="<?php echo base_url()?>blog">Seputar Nabire</a></li>
						<li><a href="<?php echo base_url()?>contact">Contact</a></li>
					</ul>
				</nav>

			</aside>

			<div id="colorlib-main">

				<div class="colorlib-about">
					<div class="colorlib-narrow-content">
						<div class="row row-bottom-padded-md">
							<?php
							if (empty($post))
							{
								echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
							}else
							{
								 foreach ($post as $isi)
							{
							?>

							<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
								<div class="about-desc">
									<span class="heading-meta">Seputar Nabire</span>
									<span><small><?php echo $isi->created_at;?></small></span>

									<h2 class="colorlib-heading"><?php echo $isi->judul;?></h2>
									<?php echo $isi->artikel;?>
									</div>

							</div>
							<?php
							 }}
							 ?>
						</div>

					</div>
				</div>


				<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
					<div class="overlay"></div>
					<div class="colorlib-narrow-content">
						<div class="row">
						</div>
						<div class="row">
							<div class="col-md-6 text-center animate-box">
								<span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
								<span class="colorlib-counter js-counter" data-from="0" data-to="<?php echo $jml_artikel;?>" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label"><a href="<?php echo base_url()?>wisata">Artikel</a></span>
							</div>
							<div class="col-md-6 text-center animate-box">
								<span class="icon"><i class="flaticon-skyline"></i></span>

								<span class="colorlib-counter js-counter" data-from="0" data-to="<?php echo $jml_wisata;?>" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label"><a href="<?php echo base_url()?>wisata">Wisata</a></span>
							</div>

						</div>
					</div>
				</div>

				<div id="get-in-touch" class="colorlib-bg-color">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<h2>For more information ?</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<p class="colorlib-lead">don't hesitate to contact us</p>
								<p><a href="<?php echo base_url()?>contact" class="btn btn-primary btn-learn">Contact us!</a></p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- jQuery -->
	<script src="<?php echo base_url()?>assets/awal/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url()?>assets/awal/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url()?>assets/awal/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url()?>assets/awal/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url()?>assets/awal/js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="<?php echo base_url()?>assets/awal/js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo base_url()?>assets/awal/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="<?php echo base_url()?>assets/awal/js/jquery.countTo.js"></script>


	<!-- MAIN JS -->
	<script src="<?php echo base_url()?>assets/awal/js/main.js"></script>

	</body>
</html>
