<!DOCTYPE html>
<html lang="en">

<head>

	<?php include 'header/header.php';
	include 'header/koneksi.php'; ?>
</head>

<body>
	<!-- Header / End -->

	<!-- Main -->
	<div class="main" role="main">

		<!-- SLIDERNYO -->
		<?php include 'header/slider.php'; ?>

		<!-- Page Content -->
		<section class="page-content">
			<div class="container">
				<div class="title-accent">
					<h3>Berita Terupdate</h3>
				</div>
				<div class="prev-next-holder text-right">
					<a class="prev-btn" id="carousel-prev-alt"><i class="fa fa-angle-left"></i></a>
					<a class="next-btn" id="carousel-next-alt"><i class="fa fa-angle-right"></i></a>
				</div>
				<div class="row">
					<div class="owl-carousel owl-carousel__posts owl-carousel-3">
						<?php
						$counter = 1;
						$query = mysqli_query($connection, "SELECT * FROM berita ORDER BY tgl_posting DESC");
						while ($row = mysqli_fetch_array($query)) {
							?>
							<div class="project-item<?php if ($counter <= 1) {
								echo " active";
							} ?>">
								<div class="project-item-inner">
									<figure class="alignnone project-img">
										<img class="img-fluid" src="gambar/<?php echo $row['gambar'] ?>" alt="gambar"
											style="width:600px; height:250px;" />
										<div class="overlay">
											<a href="berita.php?id=<?php echo $row['id_berita']; ?>" class="dlink"><i
													class="fa fa-link"></i></a>
										</div>
									</figure>
									<div class="project-desc">
										<div class="meta">
											<a href="#" class="comments">
												<i class="fa fa-comments"></i>
												<?php echo $row['dilihat'] ?>
											</a>
											<span class="date">
												<?php echo $row['tgl_posting'] ?>
											</span>
										</div>
										<h4 class="title"><a href="#">
												<?php echo $row['judul'] ?>
											</a></h4>
									</div>
								</div>
							</div>
							<?php
							$counter++;
						}
						?>
					</div>
				</div>



				<hr class="lg">

				<div class="row">
					<div class="content col-md-8 col-md-offset-1 col-md-push-3">

						<!-- World News Category -->
						<h2>Artikel</h2>
						<div class="prev-next-holder text-right">
							<div>
								<h6> <a href="artikel.php"> Lihat Seluruh Artikel</a></h6>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<!-- Post (Standard Format) -->
								<article class="entry entry__standard entry__small entry__single">
									<figure class="alignnone entry-thumb">
										<a href="#"><img src="http://placehold.it/350x220" alt=""></a>
									</figure>
									<header class="entry-header entry-header__small">
										<h2><a href="blog-post.html">Artikel 1</a></h2>
										<div class="entry-meta">
											<span class="entry-date">24/12/2013</span>
											<span class="entry-comments"><a href="#">0 Comments</a></span>
											<span class="entry-category">in <a href="#">Latest News</a></span>
											<span class="entry-author">by <a href="#">Dan Fisher</a></span>
										</div>
									</header>

									<div class="excerpt">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi
										malesuada vestibulum.
									</div>
									<footer class="entry-footer">
										<a href="artikel.php" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
									</footer>
								</article>
								<!-- Post (Standard Format) / End -->
							</div>
							<div class="col-md-6">
								<!-- Post (Standard Format) -->
								<article class="entry entry__standard entry__small entry__single">
									<figure class="alignnone entry-thumb">
										<a href="#"><img src="http://placehold.it/350x220" alt=""></a>
									</figure>
									<header class="entry-header entry-header__small">
										<h2><a href="blog-post.html">Artikel 2</a></h2>
										<div class="entry-meta">
											<span class="entry-date">24/12/2013</span>
											<span class="entry-comments"><a href="#">0 Comments</a></span>
											<span class="entry-category">in <a href="#">Latest News</a></span>
											<span class="entry-author">by <a href="#">Dan Fisher</a></span>
										</div>
									</header>

									<div class="excerpt">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi
										malesuada vestibulum.
									</div>
									<footer class="entry-footer">
										<a href="artikel.php" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
									</footer>
								</article>
								<!-- Post (Standard Format) / End -->
							</div>
						</div>
						<div class="spacer"></div>
						<div class="row">
							<div class="col-md-6">
								<!-- Post (Standard Format) -->
								<article class="entry entry__standard entry__small entry__single">
									<figure class="alignnone entry-thumb">
										<a href="#"><img src="http://placehold.it/350x220" alt=""></a>
									</figure>
									<header class="entry-header entry-header__small">
										<h2><a href="blog-post.html">Artikel 3</a></h2>
										<div class="entry-meta">
											<span class="entry-date">24/12/2013</span>
											<span class="entry-comments"><a href="#">0 Comments</a></span>
											<span class="entry-category">in <a href="#">Latest News</a></span>
											<span class="entry-author">by <a href="#">Dan Fisher</a></span>
										</div>
									</header>

									<div class="excerpt">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi
										malesuada vestibulum.
									</div>
									<footer class="entry-footer">
										<a href="artikel.php" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
									</footer>
								</article>
								<!-- Post (Standard Format) / End -->
							</div>
							<div class="col-md-6">
								<!-- Post (Standard Format) -->
								<article class="entry entry__standard entry__small entry__single">
									<figure class="alignnone entry-thumb">
										<a href="#"><img src="http://placehold.it/350x220" alt=""></a>
									</figure>
									<header class="entry-header entry-header__small">
										<h2><a href="blog-post.html">Artikel 4</a></h2>
										<div class="entry-meta">
											<span class="entry-date">24/12/2013</span>
											<span class="entry-comments"><a href="#">0 Comments</a></span>
											<span class="entry-category">in <a href="#">Latest News</a></span>
											<span class="entry-author">by <a href="#">Dan Fisher</a></span>
										</div>
									</header>

									<div class="excerpt">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi
										malesuada vestibulum.
									</div>
									<footer class="entry-footer">
										<a href="artikel.php" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
									</footer>
								</article>
								<!-- Post (Standard Format) / End -->
							</div>
						</div>
						<div class="spacer"></div>

						<!-- World News Category / End -->
						<div class="spacer-lg"></div>
						<!-- Widget :: Latest Posts 
						<ul class="pagination-custom list-unstyled list-inline">
							<li><a href="#" class="btn btn-sm btn-primary">1</a></li>
							<li><a href="artikel.php" class="btn btn-sm btn-default">2</a></li>
							<li><a href="#" class="btn btn-sm btn-default">3</a></li>
							<li><a href="#" class="btn btn-sm btn-default">&raquo;</a></li>
						</ul>
						-->
					</div>
					<aside class="sidebar col-md-3 col-md-pull-9 col-bordered">
						<!-- Widget :: Latest Posts -->
						<div>
							<?php
							include 'Calendar.php';
							$calendar = new Calendar('2023-05-12');
							$calendar->add_event('Birthday', '2023-05-03', 1, 'green');
							$calendar->add_event('Doctors', '2023-05-04', 1, 'red');
							$calendar->add_event('Holiday', '2023-05-16', 7);
							?>
							<!DOCTYPE html>
							<html>

							<head>
								<meta charset="utf-8">
								<title>Event Calendar</title>
								<link href="style.css" rel="stylesheet" type="text/css">
								<link href="calendar.css" rel="stylesheet" type="text/css">
							</head>

							<body>
								<nav class="navtop">
									<div>
										<h1>Event Calendar</h1>
									</div>
								</nav>
								<div class="content home">
									<?= $calendar ?>
								</div>
							</body>

							</html>
						</div>
					</aside>
				</div>
			</div>
		</section>
		<!-- Page Content / End -->

		<!-- Social Links -->
		<div class="social-links-section social-links-section__dark icons-rounded">
			<div class="container">
				<ul>
					<li>
						<a href="#"><i class="fa fa-facebook fa-lg"></i>
							<h5>Facebook</h5>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-twitter fa-lg"></i>
							<h5>Twitter</h5>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-instagram fa-lg"></i>
							<h5>Instagram</h5>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-dribbble fa-lg"></i>
							<h5>Dribbble</h5>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-pinterest fa-lg"></i>
							<h5>Pinterest</h5>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-yelp fa-lg"></i>
							<h5>Yelp</h5>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- Social Links / End -->

		<!-- Footer -->
		<footer class="footer" id="footer">
			<div class="footer-widgets">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-md-9">
							<!-- Widget :: Text Widget -->
							<div class="widget_text widget widget__footer">
								<h3 class="widget-title">About Us</h3>
								<div class="widget-content">
									<p>Mauris et vulputate est. Integer viverra nunc vitae facilisis cursus. Quisque ac
										ultricies quam, a molestie leo. Nulla convallis turpis id vulputate aliquam.
										Nulla facilisi. Nam tincidunt odio dignissim dui lobortis adipiscing.</p>

									<p>Nullam volutpat quis sem id iaculis. Fusce interdum, quam ac aliquam vulputate,
										orci nisl imperdiet turpis, non posuere massa ipsum et lorem. Pellentesque
										facilisis, orci nec gravida accumsan, massa elit hendrerit lacus, tortor.</p>

									<a href="#" class="btn btn-primary">Learn More</a>
								</div>
							</div>
							<!-- /Widget :: Text Widget -->
						</div>
						<div class="col-sm-4 col-md-3">
							<!-- Widget :: Contacts Info -->
							<div class="contacts-widget widget widget__footer">
								<h3 class="widget-title">Contact Us</h3>
								<div class="widget-content">
									<ul class="contacts-info-list">
										<li>
											<i class="fa fa-map-marker"></i>
											<div class="info-item">
												Stability LTD., Old Town Avenue, New York, USA 23000
											</div>
										</li>
										<li>
											<i class="fa fa-phone"></i>
											<div class="info-item">
												+1700 124-5678<br>
												+1700 124-5678
											</div>
										</li>
										<li>
											<i class="fa fa-envelope"></i>
											<span class="info-item">
												<a href="mailto:info@dan-fisher.com">info@dan-fisher.com</a>
											</span>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Widget :: Contacts Info -->
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-4">
							Copyright &copy; 2023 <a href="index.html">ICCN</a> &nbsp;| &nbsp;All Rights Reserved
						</div>
						<div class="col-sm-6 col-md-8">
							<div class="social-links-wrapper">
								<span class="social-links-txt">Connect with us</span>
								<ul class="social-links social-links__dark">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer / End -->

	</div>
	<!-- Main / End -->
	</div>





	<!-- Javascript Files
	================================================== -->
	<script src="vendor/jquery-1.11.0.min.js"></script>
	<script src="vendor/jquery-migrate-1.2.1.min.js"></script>
	<script src="vendor/bootstrap.min.js"></script>
	<script src="vendor/headhesive.min.js"></script>
	<script src="vendor/fhmm.js"></script>
	<script src="vendor/jquery.flickrfeed.js"></script>
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
	<script src="vendor/isotope/jquery.imagesloaded.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendor/jquery.fitvids.js"></script>
	<script src="vendor/jquery.appear.js"></script>
	<script src="vendor/jquery.stellar.min.js"></script>
	<script src="vendor/snap.svg-min.js"></script>
	<script src="vendor/mediaelement/mediaelement-and-player.min.js"></script>
	<script src="vendor/jquery.twitter.js"></script>
	<script src="vendor/circliful/js/jquery.circliful.min.js"></script>

	<script src="js/custom.js"></script>


	<!-- jQuery REVOLUTION Slider  -->
	<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script>
		jQuery(document).ready(function () {
			jQuery('.tp-banner').revolution({
				dottedOverlay: "filled",
				delay: 6000,
				startwidth: 1140,
				startheight: 556,
				hideThumbs: 10,
				fullWidth: "on",
				forceFullWidth: "off",
				hideCaptionAtLimit: 480,
				//navigationType: "none",
				soloArrowLeftHOffset: 20,
				soloArrowRightHOffset: 20,
				navigationType: "bullet",
				navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none
				navigationStyle: "round"  // round, square, navbar, round-old, square-old, navbar-old
			});
		});
	</script>


</body>

</html>