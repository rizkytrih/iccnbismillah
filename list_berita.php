<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Plugins css -->
    <link href="../plugins/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/quill/quill.snow.css" rel="stylesheet" type="text/css" />


    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    <?php include 'header/header.php';
    include 'header/koneksi.php'; ?>
</head>

<body>
    <!-- Header / End -->

    <!-- Main -->
    <div class="main" role="main">


        <div class="container">
            <div class="spacer-lg"></div>
            <div class="row">
                <div class="content col-md-7 col-md-offset-0">
                    <div class="container">
                        <!-- World News Category -->

                        <h2>Berita</h2>
                        <div class="row">
                            <?php
                            $counter = 1;
                            $query = mysqli_query($connection, "SELECT * FROM berita ORDER BY tgl_posting DESC");
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <div class="project-item<?php if ($counter <= 1) {
                                    echo " active";
                                } ?>">
                                    <div class="col-md-4">
                                        <!-- Post (Standard Format) -->

                                        <article class="entry entry__standard entry__small entry__single">
                                            <figure class="alignnone entry-thumb">

                                                <a href="berita.php?id=<?php echo $row['id_berita']; ?>"><img
                                                        class="img-fluid" src="gambar/<?php echo $row['gambar'] ?>"
                                                        alt="gambar" style="width:400px; height:300px;" /></a>
                                            </figure>
                                            <header class="entry-header entry-header__small">
                                                <h2><a href="berita.php?id=<?php echo $row['id_berita']; ?>"><?php echo $row['judul'] ?></a></h2>
                                                <div class="entry-meta">
                                                    <span class="entry-date">
                                                        <?php echo $row['tgl_posting'] ?>
                                                    </span>
                                                    <span class="entry-comments"><a href="#">0 Comments</a></span>
                                                    <span class="entry-category">in <a href="#">Latest News</a></span>
                                                    <span class="entry-author">by <a href="#">Dan Fisher</a></span>
                                                </div>
                                            </header>


                                        </article>

                                        <!-- Post (Standard Format) / End -->
                                    </div>
                                    <?php
                                    $counter++;
                            }
                            ?>
                            </div>

                            <div class="spacer"></div>

                            <div class="spacer"></div>
                            <!-- World News Category / End -->
                            <div class="spacer-lg"></div>

                            <ul class="pagination-custom list-unstyled list-inline">
                                <li><a href="#" class="btn btn-sm btn-primary">1</a></li>
                                <li><a href="#" class="btn btn-sm btn-default">2</a></li>
                                <li><a href="#" class="btn btn-sm btn-default">3</a></li>
                                <li><a href="#" class="btn btn-sm btn-default">&raquo;</a></li>
                            </ul>

                        </div>
                        <aside class="sidebar col-md-3 col-md-pull-9 col-bordered">
                            <!-- Widget :: Latest Posts -->
                            <div>

                            </div>
                        </aside>
                    </div>
                </div>
                </section>
                <!-- Page Content / End -->
            </div>
            <div class="spacer-lg"></div>

            <?php include 'footer/footer.php'; ?>

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