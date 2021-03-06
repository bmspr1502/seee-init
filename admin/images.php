<?php
session_start();
if(isset($_SESSION['user']) && $_SESSION['user']=='admin'){
    include "DB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Images - ADMIN CONSOLE - SEEE - CEG</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/seee250x250.png" rel="icon">
    <link href="assets/img/seee250x250.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Arsha - v2.3.0
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="../index.php"><img src="assets/img/logo.jpg" alt="" class="img-fluid">  SEEE - CEG - ADMIN CONSOLE</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="#editImages">Edit Images</a></li>
                <li><a href="console.php">Edit Content</a></li>
                <li><a href="impulse.php">Edit Impulse</a></li>
                <!--li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="drop-down"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="drop-down"><a href="#">Deep Drop Down</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li -->

            </ul>
        </nav><!--

        .nav-menu -->


        <a href="logout.php" class="get-started-btn">Sign Out</a>

    </div>
</header><!-- End Header -->

<main id="main">

    <!--======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <h2>Edit Images</h2 >


        </div>
    </section>  <!--End Breadcrumbs -->

    <section class="inner-page" id="editImages">
        <!--======= About Us images ======= -->
        <div class="container">
            <h2>About Us Gallery</h2>


            <div id="aboutusimagesShow" class="row">

            </div>

            <form>
                <div class="form-group">
                    <label for="image"><h4>Insert your image</h4></label>
                    <input id="aboutusimagesFile" type="file" name="image" class="form-control-file" required>
                    <input id="aboutusimagesCaptions" type="text" name="imageCaptions" placeholder="Enter the image caption" class="form-control">
                </div>

                <button id="aboutusimagesButton" onclick="addImages('aboutusimages','aboutus')" type="button" class=" btn btn-success" >+ADD IMAGE</button>
            </form>
        </div>

        <!--======= HOBBEEE Club images ======= -->
        <div class="container mt-4">
            <h2>HOBBEEE CLUB Gallery</h2>


            <div id="hobbeeeimagesShow" class="row">

            </div>

            <form>
                <div class="form-group">
                    <label for="image"><h4>Insert your image</h4></label>
                    <input id="hobbeeeimagesFile" type="file" name="image" class="form-control-file" required>
                    <input id="hobbeeeimagesCaptions" type="text" name="imageCaptions" placeholder="Enter the image caption" class="form-control">
                </div>

                <button id="hobbeeeimagesButton" onclick="addImages('hobbeeeimages', 'hobbeee')" type="button" class=" btn btn-success" >+ADD IMAGE</button>
            </form>
        </div>

        <!--======= Waves images ======= -->
        <div class="container mt-4">
            <h2>Waves Gallery</h2>


            <div id="wavesimagesShow" class="row">

            </div>

            <form>
                <div class="form-group">
                    <label for="image"><h4>Insert your image</h4></label>
                    <input id="wavesimagesFile" type="file" name="image" class="form-control-file" required>
                    <input id="wavesimagesCaptions" type="text" name="imageCaptions" placeholder="Enter the image caption" class="form-control">
                </div>

                <button id="wavesimagesButton" onclick="addImages('portfolioimages','waves')" type="button" class=" btn btn-success" >+ADD IMAGE</button>
            </form>
        </div>

        <!--======= Ripples images ======= -->
        <div class="container mt-4">
            <h2>Ripples Gallery</h2>
            <div id="ripplesimagesShow" class="row">

            </div>
            <form>
                <div class="form-group">
                    <label for="image"><h4>Insert your image</h4></label>
                    <input id="ripplesimagesFile" type="file" name="image" class="form-control-file" required>
                    <input id="ripplesimagesCaptions" type="text" name="imageCaptions" placeholder="Enter the image caption" class="form-control">
                </div>

                <button id="ripplesimagesButton" onclick="addImages('portfolioimages','ripples')" type="button" class=" btn btn-success" >+ADD IMAGE</button>
            </form>
        </div>

        <!--======= Fresher's day images ======= -->
        <div class="container mt-4">
            <h2>Fresher's Day Gallery</h2>
            <div id="freshersimagesShow" class="row">

            </div>
            <form>
                <div class="form-group">
                    <label for="image"><h4>Insert your image</h4></label>
                    <input id="freshersimagesFile" type="file" name="image" class="form-control-file" required>
                    <input id="freshersimagesCaptions" type="text" name="imageCaptions" placeholder="Enter the image caption" class="form-control">
                </div>

                <button id="freshersimagesButton" onclick="addImages('portfolioimages','freshers')" type="button" class=" btn btn-success" >+ADD IMAGE</button>
            </form>
        </div>

        <!--======= Teacher's Day images ======= -->
        <div class="container mt-4">
            <h2>Teacher's Day Gallery</h2>
            <div id="teachersimagesShow" class="row">

            </div>
            <form>
                <div class="form-group">
                    <label for="image"><h4>Insert your image</h4></label>
                    <input id="teachersimagesFile" type="file" name="image" class="form-control-file" required>
                    <input id="teachersimagesCaptions" type="text" name="imageCaptions" placeholder="Enter the image caption" class="form-control">
                </div>

                <button id="teachersimagesButton" onclick="addImages('portfolioimages','teachers')" type="button" class=" btn btn-success" >+ADD IMAGE</button>
            </form>
        </div>

        <!--======= Inauguration images ======= -->
        <div class="container mt-4">
            <h2>Inauguration Gallery</h2>
            <div id="inaugimagesShow" class="row">

            </div>
            <form>
                <div class="form-group">
                    <label for="image"><h4>Insert your image</h4></label>
                    <input id="inaugimagesFile" type="file" name="image" class="form-control-file" required>
                    <input id="inaugimagesCaptions" type="text" name="imageCaptions" placeholder="Enter the image caption" class="form-control">
                </div>

                <button id="inaugimagesButton" onclick="addImages('portfolioimages','inaug')" type="button" class=" btn btn-success" >+ADD IMAGE</button>
            </form>
        </div>

    </section>

</main ><!-- End #main -->

<!-- ======= Footer ======= -->
<!-- footer id="footer">

   <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Arsha</h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer --><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script type="text/javascript">
    function loadImages(table){
        $.post('showTableImage.php',{
            table: table
        },function (data){
            $("#"+table+"Show").html(data);
        });
    }

    function loadPortfolioImages(type){
        $.post('showPortfolioImage.php',{
            table: 'portfolioimages',
            imgtype: type
        },function (data){
            $("#"+type+"imagesShow").html(data);
        });
    }

    function deleteImage(id, name, table, type){
        $.post('deleteImage.php', {
            table:table,
            id: id,
            imageName: name
        }, function (result){
            alert(result);
            if(type==='aboutus' || type==='hobbeee')
                loadImages(table);
            else{
                loadPortfolioImages(type);
            }
        });


    }

    function addImages(table, imgtype){
        var fd = new FormData();
        if(!$("#"+imgtype+"imagesFile").val()){
            alert("Please Select an Image!");
        }else {

            var files = $("#"+imgtype+"imagesFile")[0].files[0];
            var imageCaption = $("#"+imgtype+"imagesCaptions").val();
            fd.append('image', files);

            $.ajax({
                url: 'imageAdd.php?' + 'imageCaption=' + imageCaption +'&table=' + table +'&imgtype='+imgtype,
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                    if(imgtype==='aboutus' || imgtype==='hobbeee')
                        loadImages(table);
                    else{
                        loadPortfolioImages(imgtype);
                    }
                }
            })
        }
    }
    $(document).ready(function (){
        loadImages('aboutusimages');
        loadImages('hobbeeeimages');
        loadPortfolioImages('waves');
        loadPortfolioImages('ripples');
        loadPortfolioImages('freshers');
        loadPortfolioImages('teachers');
        loadPortfolioImages('inaug');
    });
</script>

</body>

</html>
<?php
}
else{
    echo '<script>
                alert("NOT Logged in");
                window.location.href="index.php";
                </script>';
}