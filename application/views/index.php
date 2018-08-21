<!DOCTYPE HTML>
<html>
	<?php include 'head.php';?>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="index.html">Nabire</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li  class="colorlib-active"><a href="<?php echo base_url()?>welcome">Home</a></li>
					<li><a href="<?php echo base_url();?>wisata">Wisata Nabire</a></li>
					<li><a href="<?php echo base_url();?>about">Tentang Kami</a></li>
					<li><a href="<?php echo base_url();?>blog">Seputar Nabire</a></li>
					<li><a href="<?php echo base_url();?>contact">Contact</a></li>
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
			<aside id="colorlib-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
						<?php
						if (empty($wisata))
						{
							echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
						}else
						{
							 foreach ($wisata as $isi)
						{
						?>
				   	<li style="background-image: url(<?php echo base_url()?>assets/awal/images/<?php echo $isi->gambar; ?>);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1><?php echo $isi->nama_wisata; ?></h1>
						   					<h2><?php echo word_limiter($isi->keterangan,20);?></h2>
												<p><a href="<?php echo base_url()?>wisata/content/<?php echo $isi->uri?>" class="btn btn-primary btn-learn">more... <i class="icon-arrow-right3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
						<?php
						 }}
						 ?>
				  	</ul>
			  	</div>
			</aside>



			<div class="colorlib-services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">

							<h2 class="colorlib-heading">Kata Sambutan</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-12">
									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">

										<div class="colorlib-text">
											<h3>Bupati kab.Nabire</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
										</div>
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">

										<div class="colorlib-text">
											<h3>Kepala Dinas Kebudayaan dan Pariwsata</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
										</div>
									</div>



								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<a class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<div class="services-img" style="background-image: url(<?php echo base_url()?>assets/awal/images/services-1.jpg)"></div>
										<div class="desc">
											<h3>Bupati kab.Nabire</h3>
										</div>
									</a>
									<a class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<div class="services-img" style="background-image: url(<?php echo base_url()?>assets/awal/images/services-2.jpg)"></div>
										<div class="desc">
											<h3>Kepala Dinas Kebudayaan dan Pariwsata</h3>
										</div>
									</a>

								</div>

							</div>
						</div>
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
							<span class="colorlib-counter-label"><a href="<?php echo base_url()?>blog">Artikel</a></span>
						</div>
						<div class="col-md-6 text-center animate-box">
							<span class="icon"><i class="flaticon-skyline"></i></span>

							<span class="colorlib-counter js-counter" data-from="0" data-to="<?php echo $jml_wisata;?>" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label"><a href="<?php echo base_url()?>wisata">Wisata</a></span>
						</div>

					</div>
				</div>
			</div>

			<div class="colorlib-work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Dinas Pariwisata Kab.Nabire</span>
							<h2 class="colorlib-heading">Daftar Wisata Kab.nabire</h2>
						</div>
					</div>
					<div class="row row-bottom-padded-md">
						<?php foreach ($data->result() as $isi) :?>
						<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(<?php echo base_url()?>assets/awal/images/<?php echo $isi->gambar;?>);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html"><?php echo $isi->nama_wisata;?></a></h3>
										<span><?php echo word_limiter($isi->keterangan,20);?></span>
										<p class="icon">
											<span><a href="<?php echo base_url()?>wisata/content/<?php echo $isi->uri?>"><i class="icon-eye"></i> More...</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<div class="row">

							<?php echo $pagination; ?>

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
