<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Conexos - Instalaciones eléctricas del noroeste srl</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/logo.jpeg" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">

            <!-- Top Bar Start -->
            <?php
                include './topbar.php';
            ?>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <?php
            include './navbar.php';
            ?>
            <!-- Nav Bar End -->


            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Imagelogo.jpeg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Somos</p>
                            <h1 class="animated fadeInLeft">Instalaciones eléctricas del noroeste srl</h1>
                            <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/Imagelogo.jpeg"  alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Estamos en </p>
                            <h1 class="animated fadeInLeft">Salta capital</h1>
                            <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/Imagelogo.jpeg"  alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Tenemos sucursal en</p>
                            <h1 class="animated fadeInLeft">Juju</h1>
                            <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Ver obras</a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->


            <!-- Feature Start-->
            <?php
                include './feature.php';
            ?>
            <!-- Feature End-->

            <!-- About Start -->
            <?php
                include './about-start.php';
            ?>

            <!-- Fact Start -->
            <?php
                include './fact.php';
            ?>
            <!-- Fact End -->


            <!-- Service Start -->
            <?php
                include './service-description.php';
            ?>
            <!-- Service End -->

            <!-- Team Start -->
            <?php
                include './team-start.php';
            ?>
            <!-- Team End -->

            <!-- Testimonial Start -->
            <?php
                include './customers.php';
            ?>
            <!-- Testimonial End -->


            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Nuestros proyectos</p>
                        <h2>Nuestros proyectos</h2>
                    </div>
                    <?php
                    include ('./proyectos.php');
                    ?>
                </div>
            </div>
            <!-- Blog End -->


            <!-- Footer Start -->
            <?php
            include './footer.php';
            ?>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
