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

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

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
						<li><a href="<?php base_url()?>welcome">Home</a></li>
						<li  class="colorlib-active"><a href="<?php base_url()?>wisata">Wisata Nabire</a></li>
						<li><a href="<?php base_url()?>about">Tentang Kami</a></li>
						<li><a href="<?php base_url()?>blog">Seputar Nabire</a></li>
						<li><a href="<?php base_url()?>contact">Contact</a></li>
					</ul>
				</nav>

				<div class="colorlib-footer">
				<ul>
						<li><a href="#"><i class="icon-facebook2"></i></a></li>
						<li><a href="#"><i class="icon-twitter2"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
						<li><a href="#"><i class="icon-linkedin2"></i></a></li>
					</ul>
				</div>

			</aside>

			<div id="colorlib-main">
				<div class="colorlib-work">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">Dinas Pariwisata Kab.Nabire</span>
								<h2 class="colorlib-heading">Daftar Wisata Kab.nabire</h2>
							</div>
						</div>
						<div class="row row-bottom-padded-md">
							<?php
							if (empty($wisata))
							{
								echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
							}else
							{
								 foreach ($wisata as $isi)
							{
							?>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="project" style="background-image: url(<?php echo base_url()?>assets/awal/images/<?php echo $isi->gambar;?>);">
									<div class="desc">
										<div class="con">
											<h3><a href="work.html"><?php echo $isi->nama_wisata;?></a></h3>
											<span><?php echo $isi->keterangan;?></span>
											<p class="icon">
												<span><a href="#"><i class="icon-share3"></i></a></span>
												<span><a href="#"><i class="icon-eye"></i> 100</a></span>
												<span><a href="#"><i class="icon-heart"></i> 49</a></span>
											</p>
										</div>
									</div>
								</div>
							</div>
							<?php
							 }}
							 ?>
						</div>
						<div class="row">
							<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
								<ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div id="get-in-touch" class="colorlib-bg-color">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<h2>Get in Touch!</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<p class="colorlib-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								<p><a href="#" class="btn btn-primary btn-learn">Contact me!</a></p>
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
