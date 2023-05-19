<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header/header.php';
include 'header/koneksi.php';
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk mengupdate jumlah view
$updateQuery = mysqli_query($connection, "UPDATE berita SET dilihat = dilihat + 1 WHERE id_berita='$id'");
if ($updateQuery) {
	// Jika berhasil diupdate, ambil kembali data berita setelah penambahan view
	$query = mysqli_query($connection, "SELECT * FROM berita JOIN admin ON admin.id_admin = berita.id_admin WHERE id_berita='$id'");
	$d = mysqli_fetch_assoc($query);

} else {
  // Jika query gagal dijalankan, tampilkan pesan error
  die("Gagal mengupdate jumlah view...");
}

// buat query untuk ambil data dari database
$query= mysqli_query($connection, "SELECT * FROM berita JOIN admin ON admin.id_admin = berita.id_admin WHERE id_berita='$id'");
$d = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>



	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Post | Responsive HTML5 Template</title>
	<meta name="description" content="Stability - Responsive HTML5 Template - 1.8.1">
	<meta name="author" content="http://themeforest.net/user/dan_fisher">
	

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Google Web Fonts
	================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Anton|Muli:300,400,400italic,300italic|Oswald' rel='stylesheet' type='text/css'>

	<!-- CSS
	================================================== -->
	<!-- Base + Vendors CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
	<link rel="stylesheet" href="vendor/mediaelement/mediaelementplayer.css" />

	<!-- Theme CSS-->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="css/skins/red.css">

	<!-- Custom CSS-->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr.js"></script>

	<!--[if lt IE 9]>
		
		<script src="vendor/respond.min.js"></script>
	<![endif]-->

	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->
	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
</head>
<body>

	<div class="site-wrapper">

		<!-- Main -->
		<div class="main" role="main">

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">

					<div class="row">
						<div class="content col-md-8">

							<!-- Post (Standard Format) -->
							<article class="entry entry__standard entry__with-icon">
								<div class="entry-icon visible-md visible-lg">
									<i class="fa fa-file"></i>
								</div>
								<header class="entry-header">
									<h2><?php echo $d['judul']; ?></h2>
									<div class="entry-meta">
										<span class="entry-date"><?php echo $d['tgl_posting']; ?></span>
										<span class="entry-comments"><a href="#"><?php echo $d['dilihat']; ?> Views</a></span>
										<span class="entry-category">in <a href="#">Berita</a></span>
										<span class="entry-author">by <a href="#"><?php echo $d['nama_lengkap']; ?></a></span>
									</div>
								</header>
								<figure class="alignnone entry-thumb">
									<img src="gambar/<?php echo $d['gambar'] ?>" alt="">
								</figure>
								<div class="entry-content">
									<?php echo $d['teks_berita']; ?>
								</div>
							</article>
							<!-- Post (Standard Format) / End -->


							<!-- Comments -->
							<div class="comments-wrapper">
								<h3>Comments (5)</h3>
								<ol class="commentlist">
									<li class="comment">
										<div class="comment-wrapper">
											<div class="comment-author vcard">
												<img src="http://placehold.it/70x70" alt="" class="gravatar">
												<h5>John Doe</h5>
												<span class="says">says:</span>
												<div class="comment-meta">
													<a href="#">October 27, 2013 5:45pm</a>
													<a href="#" class="comment-edit-link"></a>
												</div>
											</div>
											<div class="comment-reply">
												<a href="#" class="btn btn-sm btn-default"><i class="fa fa-reply"></i> Reply</a>
											</div>
											<div class="comment-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet venenatis orci, ut tempus ipsum. Donec sit amet massa et dui ultricies eleifend. Curabitur at nibh ante.
											</div>
										</div>

										<ul class="children">
											<li class="comment">
												<div class="comment-wrapper">
													<div class="comment-author vcard">
														<img src="http://placehold.it/70x70" alt="" class="gravatar">
														<h5>Jane Doe</h5>
														<span class="says">says:</span>
														<div class="comment-meta">
															<a href="#">October 27, 2013 5:45pm</a>
															<a href="#" class="comment-edit-link"></a>
														</div>
													</div>
													<div class="comment-reply">
														<a href="#" class="btn btn-sm btn-default"><i class="fa fa-reply"></i> Reply</a>
													</div>
													<div class="comment-body">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet venenatis orci, ut tempus ipsum. Donec sit amet massa et dui ultricies eleifend. 
													</div>
												</div>
											</li>
											<li class="comment bypostauthor">
												<div class="comment-wrapper">
													<div class="comment-author vcard">
														<img src="http://placehold.it/70x70" alt="" class="gravatar">
														<h5>Timothy White</h5>
														<span class="says">says:</span>
														<div class="comment-meta">
															<a href="#">October 27, 2013 5:45pm</a>
															<a href="#" class="comment-edit-link"></a>
														</div>
													</div>
													<div class="comment-reply">
														<a href="#" class="btn btn-sm btn-default"><i class="fa fa-reply"></i> Reply</a>
													</div>
													<div class="comment-body">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet venenatis orci, ut tempus ipsum. Donec sit amet massa et dui ultricies eleifend. 
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li class="comment">
										<div class="comment-wrapper">
											<div class="comment-author vcard">
												<img src="http://placehold.it/70x70" alt="" class="gravatar">
												<h5>John Black</h5>
												<span class="says">says:</span>
												<div class="comment-meta">
													<a href="#">October 27, 2013 5:45pm</a>
													<a href="#" class="comment-edit-link"></a>
												</div>
											</div>
											<div class="comment-reply">
												<a href="#" class="btn btn-sm btn-default"><i class="fa fa-reply"></i> Reply</a>
											</div>
											<div class="comment-body">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet venenatis orci, ut tempus ipsum. Donec sit amet massa et dui ultricies eleifend. Curabitur at nibh ante.
											</div>
										</div>
									</li>
								</ol>
							</div>
							<!-- Comments / End -->

							<!-- Comments Form -->
							<div id="respond" class="comment-respond">
								<h3 class="reply-title">Leave a reply</h3>
								<p class="comment-notes text-muted"><i>Your email address will not be published. Required fields are marked <span class="required">*</span></i></p>

								<form action="#" method="POST" role="form">
								
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Name <span class="required">*</span></label>
												<input type="text" class="form-control" id="">
											</div>
											
											<div class="form-group">
												<label for="">Email <span class="required">*</span></label>
												<input type="email" class="form-control" id="">
											</div>
											
											<div class="form-group">
												<label for="">Website</label>
												<input type="url" class="form-control" id="">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="">Comment</label>
										<textarea cols="30" rows="10" class="form-control"></textarea>
									</div>
								
									<button type="submit" class="btn btn-primary">Send Comment</button>
								</form>
							</div>
							<!-- Comments Form / End -->
							
						</div>

						<aside class="sidebar col-md-3 col-md-offset-1 col-bordered">
							
							<hr class="visible-sm visible-xs lg">

							<!-- Widget :: Categories -->
							<div class="widget_categories widget widget__sidebar">
								<h3 class="widget-title">Categories</h3>
								<div class="widget-content">
									<ul>
										<li><a href="#">Web Design</a> (3)</li>
										<li><a href="#">Illustration</a> (10)</li>
										<li><a href="#">Logo Design</a> (12)</li>
										<li><a href="#">Branding &amp; Identity</a> (8)</li>
										<li><a href="#">WordPress</a> (3)</li>
										<li><a href="#">HTML5 &amp; CSS3</a> (5)</li>
										<li><a href="#">PHP/MySQl</a> (3)</li>
									</ul>
								</div>
							</div>
							<!-- /Widget :: Categories -->

							<!-- Widget :: Tags Cloud -->
							<div class="widget_tag_cloud widget widget__sidebar">
								<h3 class="widget-title">Tags</h3>
								<div class="widget-content">
									<div class="tagcloud">
										<a href="#">wordpress</a>
										<a href="#">development</a>
										<a href="#">php</a>
										<a href="#">css3</a>
										<a href="#">html5</a>
										<a href="#">bootstrap</a>
										<a href="#">programming</a>
										<a href="#">web design</a>
									</div>
								</div>
							</div>
							<!-- /Widget :: Tags Cloud -->

							<!-- Widget :: Latest Posts -->
							<div class="latest-posts-widget widget widget__sidebar">
								<h3 class="widget-title">Latest Posts</h3>
								<div class="widget-content">
									<ul class="latest-posts-list">
										<li>
											<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60"></a></figure>
											<span class="date">24/07/2013</span>
											<h5 class="title"><a href="#">Duis placerat rhoncus arcu, sit amet aliquam leo</a></h5>
										</li>
										<li>
											<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60"></a></figure>
											<span class="date">16/07/2013</span>
											<h5 class="title"><a href="#">Mauris in arcu aliq, elementum nibh nec</a></h5>
										</li>
										<li>
											<figure class="thumbnail"><a href="#"><img src="http://placehold.it/60x60"></a></figure>
											<span class="date">14/07/2013</span>
											<h5 class="title"><a href="#">Vestibulum in ligula rutrum faucibus interdum</a></h5>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Widget :: Latest Posts -->
						</aside>
					</div>

				</div>
			</section>
			<!-- Page Content / End -->

			<?php include 'footer/footer.php';?>
			
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

	<script src="js/custom.js"></script>


	
</body>
</html>