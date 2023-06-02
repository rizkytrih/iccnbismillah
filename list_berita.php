<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS Plugin -->
    <link href="../plugins/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/quill/quill.snow.css" rel="stylesheet" type="text/css" />

    <!-- CSS Aplikasi -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    <?php include 'header/header.php';
    include 'header/koneksi.php';

    // Mengambil data berita
    $query = mysqli_query($connection, "SELECT * FROM berita ORDER BY tgl_posting DESC");
    $news = mysqli_fetch_all($query, MYSQLI_ASSOC);

    ?>
    <style>
        .entry-header {
            overflow: hidden;
            /* Mengatasi float dari elemen sebelumnya */
        }

        .fixed-article {
            height: 540px;
            /* Atur ketinggian sesuai kebutuhan */
        }

        .entry-footer {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-top: 10px;
        }

        .button-wrapper {
            width: 100%;
            text-align: left;
        }
    </style>
</head>

<body>
    <!-- Header / Bagian Atas -->
    	<!-- Page Heading -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1>Berita</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->


    <!-- Konten Utama -->
    <div class="main" role="main">
        <div class="container">
            <div class="spacer-lg"></div>
            <div class="row">
                <div class="content col-md-9 col-md-offset-0">
                    <div class="container">
                        <!-- Bagian Berita -->
                        <div class="row">
                            <?php foreach ($news as $index => $row) { ?>
                                <div class="col-md-4">
                                    <div class="project-item<?php if ($index == 0)
                                        echo " active"; ?>">
                                        <!-- Artikel (Format Standar) -->
                                        <article class="entry entry__standard entry__small entry__single fixed-article">
                                            <figure class="alignnone entry-thumb">
                                                <a href="berita.php?id=<?php echo $row['id_berita']; ?>">
                                                    <img class="img-fluid" src="gambar/<?php echo $row['gambar'] ?>"
                                                        alt="gambar" style="width: 400px; height: 300px;" />
                                                </a>
                                            </figure>
                                            <header class="entry-header entry-header__small">
                                                <h3 style="color: black;"><a style="color: black;"
                                                        href="berita.php?id=<?php echo $row['id_berita']; ?>"><?php echo $row['judul'] ?></a></h3>
                                                <div class="entry-meta">
                                                    <span class="entry-date">
                                                        <?php echo $row['tgl_posting'] ?>
                                                    </span>
                                                    <span class="entry-comments"><a href="#">0 Komentar</a></span>
                                                    <span class="entry-category">di <a href="#">Berita Terbaru</a></span>

                                                    <span class="entry-author">oleh <a href="#">Fisher</a></span>
                                                </div>
                                                <div class="excerpt">
                                                    <?php echo substr($row['teks_berita'], 0, 180); ?>...
                                                    <a href="berita.php?id=<?php echo $row['id_berita']; ?>">(Baca Selengkapnya)</a>
                                                </div>
                                            </header>
                                            <!--
                                    <footer class="entry-footer">
                                        <div class="button-wrapper">
                                            <a href="berita.php?id=<?php echo $row['id_berita']; ?>" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                                        </div>
                                    </footer>-->
                                        </article>

                                        <!-- Artikel (Format Standar) / End -->
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <!-- Bagian Berita / End -->
                        <ul class="pagination-custom list-unstyled list-inline">
								<li><a href="#" class="btn btn-sm btn-primary">1</a></li>
								<li><a href="#" class="btn btn-sm btn-default">2</a></li>
								<li><a href="#" class="btn btn-sm btn-default">3</a></li>
								<li><a href="#" class="btn btn-sm btn-default">&raquo;</a></li>
							</ul>
                    </div>
                </div>
                <aside class="sidebar col-md-3 col-md-pull-9 col-bordered">
                    <!-- Widget :: Artikel Terbaru -->
                </aside>
            </div>
            <!-- Page Content / End -->
        </div>
        <div class="spacer-lg"></div>

        <?php include 'footer/footer.php'; ?>

    </div>
    <!-- Main / End -->
    </div>
    </div>

    <!-- Berkas JavaScript -->
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
    <!-- jQuery REVOLUTION Slider -->
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
                soloArrowLeftHOffset: 20,
                soloArrowRightHOffset: 20,
                navigationType: "bullet",
                navigationArrows: "solo",
                navigationStyle: "round"
            });
        });
    </script>
</body>

</html>