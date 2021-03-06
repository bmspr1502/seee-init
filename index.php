﻿<?php
include "admin/DB.php";
$sql = "SELECT * FROM content";
$result = $con->query($sql);
$data = $result->fetch_assoc();

$query = "SELECT * FROM aboutusimages";
$aboutusimgresult = $con->query($query);

$query = "SELECT * FROM hobbeeeimages";
$hobbeeeimgresult = $con->query($query);

$query = "SELECT * FROM portfolioimages";
$galleryimgresult = $con->query($query);

$con->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SEEE - CEG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="admin/assets/img/seee250x250.png" rel="icon">
  <link href="admin/assets/img/seee250x250.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="admin/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="admin/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="admin/assets/css/style.css" rel="stylesheet">
  <style>
  /* Make the image fully responsive */
  .carousel{
    max-width: 500px;
    max-height: 600px;
  }
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>

  <!-- =======================================================
  * Template Name: Arsha - v2.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header <img src="admin/assets/img/logo.jpg" alt="" class="img-fluid">  ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">SEEE</a></h1>
      
      <!-- Uncomment below if you prefer to use an image logo -->
       <!--<a href="index.php" class="logo mr-auto"><img src="admin/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li class="drop-down"><a href="#events">Events</a>
            <ul>
              <li><a href="#waves">Waves</a></li>
              <li><a href="#ripples">Ripples</a></li>
              <li class="drop-down"><a href="#otherevents">Others</a>
                <ul>
                  <li><a href="#freshersday">Fresher's Day</a></li>
                  <li><a href="#teachersday">Teachers' Day</a></li>
                  <li><a href="#inauguration">Inauguration</a></li>
                </ul>
              </li>
              
            </ul>
          </li>
          <li><a href="#hobbeee">HOBBEEE Club</a></li>
          <!--li><a href="#services">Services</a></li -->
          <li><a href="#portfolio">Gallery</a></li>
          <li><a href="#alumni">Alumni</a></li>
          <li><a href="#academics">Academics</a></li>
          <li class="drop-down"><a href="#impulse">Impulse</a>
            <ul>
                <li><a href="#magazines"> Magazines </a></li>
                <li><a href="#articles">Articles</a>  </li>
                <li><a href="#facts">Facts</a>  </li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>SEEE - CEG</h1>
          <h2>Society of Electrical and Electronics Engineers<br> College of Engineering, Guindy</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="admin/assets/img/SEEElogo.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  <main id="main">

    <section id="announcements" class="cliens section-bg">
        <div class="container">
            <?php
            echo $data['Announcements'];
            ?>
        </div>
    </section>
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-12">
              <?php
              echo $data['AboutUs'];
              ?>
            
            <div id="home_demo" class="mx-auto carousel slide" data-ride="carousel">
                <!-- <h5>' . $row['imageCaption'] . '</h5> -->
                <!-- The slideshow -->
                <div class="carousel-inner" id="home_carousel">
                  <?php
                  if($aboutusimgresult->num_rows > 0) {
                      $i = 1;
                      while ($row = $aboutusimgresult->fetch_assoc()) {
                          if ($i == 1) {
                              echo '<div class="carousel-item active"> ';
                          } else {
                              echo '<div class="carousel-item">';
                          }
                          echo '<img src="admin/assets/img/aboutusimages/' . $row['imageName'] . '" alt="Los Angeles"> 
                            <div class="carousel-caption">
                            
                            </div>
                            </div>';
                          $i++;
                      }
                  }else{
                      echo "<h2>SORRY NO PICS</h2>";
                  }

                  ?>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#home_demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#home_demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>

              </div>

           
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->


    <!-- ======= Events Section ======= -->
    <section id="events" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
        </div>

        <div class="row">
          <div id="waves" class="col-xl-6 col-lg-6 d-flex align-items-stretch mt-4 " data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4><a href="#waves">Waves</a></h4>
                <?php
                echo $data['Waves'];
                ?>
            </div>
          </div>

          <div id="ripples" class="col-xl-6 col-lg-6 d-flex align-items-stretch mt-4 " data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h4><a href="#ripples">Ripples</a></h4>
                <?php
                echo $data['Ripples'];
                ?>
            </div>
          </div>
      </div>
          <div class="section-title  mt-4" id="otherevents">
            <h2>Other Events</h2>
          </div>

          <div class="row">
          <div id="freshersday" class="col-xl-4 col-lg-6 d-flex align-items-stretch mt-4 " data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              
              <h4><a href="#freshersday">Fresher's Day</a></h4>
                <?php
                echo $data['FreshersDay'];
                ?>
            </div>
          </div>

          <div id="teachersday" class="col-xl-4 col-lg-6 d-flex align-items-stretch mt-4 " data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              
              <h4><a href="#teachersday">Teachers' Day</a></h4>
                <?php
                echo $data['TeachersDay'];
                ?>
            </div>
          </div>
          <div id="inauguration" class="col-xl-4 col-lg-6 d-flex align-items-stretch mt-4 " data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              
              <h4><a href="#inauguration">Inauguration</a></h4>
                <?php
                echo $data['Inauguration'];
                ?>
            </div>
          </div>
          

      

        </div>

      </div>
      

    </section><!-- End Services Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="hobbeee" class="pricing">
   
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>HOBBEEE CLUB</h2>
          </div>
          <div class="col-lg-12">
              <?php
              echo $data['Hobbeee'];
              ?>
            <br>

            <div id="hobbeee_demo" class="mx-auto carousel slide" data-ride="carousel">

             
              <!-- The slideshow -->
              <!-- <h3>' . $row['imageCaption'] . '</h3> -->
              <div class="carousel-inner" id="hobbeee_carousel">
                  <?php
                  if($hobbeeeimgresult->num_rows > 0) {
                      $i = 1;
                      while ($row = $hobbeeeimgresult->fetch_assoc()) {
                          if ($i == 1) {
                              echo '<div class="carousel-item active"> ';
                          } else {
                              echo '<div class="carousel-item">';
                          }
                          echo '<img src="admin/assets/img/hobbeeeimages/' . $row['imageName'] . '" alt="Los Angeles"> 
                            <div class="carousel-caption">
                            
                            </div>
                            </div>';
                          $i++;
                      }
                  }else{
                      echo "<h2>SORRY NO PICS</h2>";
                  }

                  ?>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#hobbeee_demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#hobbeee_demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div>

        </div>

       
      </div>
    </section>
    <!-- End HOBBEEE Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
        </div>

        <ul id="portfolio-flters" class="text-center justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-waves">Waves</li>
          <li data-filter=".filter-ripples">Ripples</li>
          <li data-filter=".filter-freshers">Fresher's Day</li>
          <li data-filter=".filter-teachers">Teachers' Day</li>
          <li data-filter=".filter-inaug">Inauguration</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php

            if ($galleryimgresult->num_rows > 0) {
                $i = 1;
                while ($row = $galleryimgresult->fetch_assoc()) {

                    echo '<div class="col-lg-4 col-md-6 portfolio-item filter-'.$row['imageType'] .'">
                <div class="portfolio-img"><img src="admin/assets/img/portfolioimages/'. $row['imageName'] .'" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <h4>'. $row['imageCaption'] .'</h4>
                  <p>'.$row['imageType'] .'</p>
                  <a href="admin/assets/img/portfolioimages/'. $row['imageName'] .'" data-gall="portfolioGallery" class="venobox preview-link" title="'. $row['imageCaption'] .'"><i class="bx bx-plus"></i></a>
                </div>
              </div>';
                    $i++;
                }
            } else {
                echo "<h2>SORRY NO PICS</h2>";
            }

/*
            for($i=1; $i<=6; $i++){
              ?>

              <div class="col-lg-4 col-md-6 portfolio-item filter-ripples">
                <div class="portfolio-img"><img src="admin/assets/img/ripples/ripples<?php echo $i;?>.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <h4>ripples<?php echo $i;?></h4>
                  <p>ripples</p>
                  <a href="admin/assets/img/ripples/ripples<?php echo $i;?>.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="ripples<?php echo $i;?>"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-fresher">
                <div class="portfolio-img"><img src="admin/assets/img/freshers/freshers<?php echo $i;?>.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <a href="admin/assets/img/freshers/freshers<?php echo $i;?>.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-teacher">
                <div class="portfolio-img"><img src="admin/assets/img/teachersday/teachers<?php echo $i;?>.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <a href="admin/assets/img/teachersday/teachers<?php echo $i;?>.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-inaug">
                <div class="portfolio-img"><img src="admin/assets/img/inaug/Inauguration<?php echo $i;?>.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <a href="admin/assets/img/inaug/Inauguration<?php echo $i;?>.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              <?php
            }
*/
            ?>
      
        </div>

      </div>
    </section>
    <!-- End Gallery Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Register as Alumni</h3>
                <p >Were you a part of our EEE family in CEG? Sign up as an alumni and get to know about the lastest happenings in our department.</p>
          </div>
          
          <div class="col-lg-3 cta-btn-container text-center">
          <center><a class="cta-btn align-middle" href="https://docs.google.com/forms/d/e/1FAIpQLSdfneIG2RCvnbjmvfqzYeDUp7i4MGcVMTYhopWmur92fcQBaQ/viewform" target="_Blank">Register As Alumni</a></center>
          </div>

        </div>

      </div>
    </section>
    <!-- End Cta Section -->

    
    <!-- ======= Alumni Section ======= -->
    <section id="alumni" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Notable Alumni</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 mt-4 d-flex align-items-stretch">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-info ml-n4 ">
                  <div class="img"><img src="admin/assets/img/alumni/lalitha.jpg"  width="100%" class="img-fluid" alt=""></div>

                  <h4>A LALITHA</h4>
                <p  >A Lalitha is remembered as the first woman electrical engineer of India.<br>
                  She completed her intermediate exam with first class from Queen Mary's College, Chennai and joined the College of Engineering Guindy, University of Madras, Chennai, in 1939 to pursue electrical engineering.
                   <br>After graduating in 1944, Lalitha assisted her father in his research and joined the Central Standard Organisation, Simla for a brief time. In 1953, she became an associate member of the Council of the Institution of Electrical Engineers (IEE) and a full member in 1966. In 1964, she became the first and the only woman engineer from India to attend the First International Conference of Women Engineers and Scientists (ICWES), New York.</p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 d-flex align-items-stretch">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="member-info ml-n4">
                  <div class="img"><img src="admin/assets/img/alumni/Ram1.jpg"  width="100%" class="img-fluid" alt=""></div>

                  <h4>Ram Krishna Baliga</h4>
                <!-- span>Product Manager</span -->
                <p>Ram Krishna Baliga is regarded as the father of the Electronic City in Bangalore, India. He completed his B.E. (Elec) Honors in College of Engineering Guindy. He is known for envisioning the Electronic City in Bangalore and other similar cities in Karnataka in 1975. As the Chairman and Managing Director of Hindustan Teleprinters Ltd (1984-86), he successfully introduced Electronic Teleprinters in India. As Chief Engineer of Bharat Electronics, he was responsible for developing the integrated residential colony of the company which consisted of the more than 1400 houses including places of worship of different religions.</p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 d-flex align-items-stretch">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="member-info ml-n4">
                  <div class="img"><img src="admin/assets/img/alumni/Gopal.jpg"  width="100%" class="img-fluid" alt=""></div>

                  <h4>Gopalaswami Parthasarathy</h4>
                <!-- span>CTO</span -->
                <p>Gopalaswami Parthasarathy, popularly known as G. Parthasarathy is an Indian diplomat and author. He graduated with a B.E. degree in Electrical Engineering from the College of Engineering Guindy. He started his career as a commissioned officer in the Indian Army and subsequently, he joined the Indian Foreign Service. He was Ambassador of India to Myanmar, (1992–95), High Commissioner of India to Australia (1995–98), High Commissioner of India to Pakistan (1998-00) and High Commissioner of India to Cyprus (1990–92). Later he was the spokesperson of the Ministry of External Affairs and the Prime Minister's Office.</p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 d-flex align-items-stretch">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">

              <div class="member-info ml-n4">
                  <div class="img"><img src="admin/assets/img/alumni/Dhiraj.jpg" width="100%" class="img-fluid" alt=""></div>

                  <h4>Dhiraj C Rajaram</h4>
                <!-- span>Accountant</span -->
                <p> Dhiraj C Rajaram is an Indian entrepreneur and the founder, chairman and CEO of Mu Sigma, a provider of analytics and decision sciences solutions. Rajaram completed his bachelor's degree in Electrical Engineering from College of Engineering Guindy, M.S. in computer engineering from Wayne State University, Michigan and MBA from The University of Chicago Booth School of Business. After completing his education, Rajaram worked as a management consultant at PricewaterhouseCoopers (PwC) and Booz Allen Hamilton in the US. In 2012 he was awarded the "Entrepreneur Of The Year India" award in the services sector by Ernst & Young - India. In early 2014, Rajaram was awarded the Young Turks award at the CNBC-TV18 India Business Leader Awards.</p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 d-flex align-items-stretch">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="500">
              <div class="member-info ml-n4">
                  <div class="img"><img src="admin/assets/img/alumni/veeraraghavan.jpg" width="100%" class="img-fluid" alt=""></div>

                  <h4>P.S. Veeraraghavan</h4>
                <!-- span>Accountant</span -->
                <p>P.S. Veeraraghavan is a well-known space scientist and rocket technologist of India. He received his bachelor's degree in Electrical Engineering from College of Engineering Guindy in 1969. He has served as the Director of Vikram Sarabhai Space Centre and as the Director of ISRO Inertial Systems Unit (IISU) in Kerala. He is one of the most senior scientists at Indian Space Research Organization (ISRO) and is known for his contributions to launch vehicle technology, especially in the areas of integration, checkout and Inertial Systems Unit of ISROs launch vehicles. Presently, he is holding the honorary position of Prof. Vikram Sarabhai Distinguished Professor in VSSC, ISRO since January 2013.</p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 d-flex align-items-stretch">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="600">

                <div class="member-info ml-n4">
                    <div class="img"><img src="admin/assets/img/alumni/srinath.jpg"  width="100%" class="img-fluid" alt=""></div>

                    <h4>Srinath Ravichandran</h4>
                <!-- span>Accountant</span -->
                <p>Srinath Ravichandran is the co-founder and CEO of AgniKul Cosmos. He is an Electrical Engineering Graduate from the College of Engineering Guindy, Anna University. He worked in ABB in India before going for a Master's degree in Financial Engineering at Columbia University, New York. He worked in the financial services industry in New York for a few years before his love for aerospace took him to Los Angeles. He also enrolled for a master's programme in aerospace engineering at the University of Illinois, Urbana -Champaign.</p>
                <!-- div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div -->
              </div>
            </div>
          </div>

        

        </div>

      </div>
    </section>
    <!-- End Alumni Section -->

    <!-- ======= academics Section ======= -->
    <section id="academics" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Academics</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Study Materials</h3>
                <?php
                echo $data['StudyMaterials'];
                ?>
            </div>
          </div>

          <div class="col-lg-6 mt-4 " data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <h3>Placement guides</h3>
                <?php
                echo $data['PlacementGuides'];
                ?>
            </div>
          </div>

         
        </div>

      </div>
    </section>
    <!-- End Academics Section -->

    <!-- IMPULSE SECTION -->

    <section id="impulse" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Impulse</h2>
        </div>

        <div class="container" id="magazines">
          <h3>Magazines</h3>
          <p><?php
              echo $data['Magazines'];
              ?></p>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100" id="magazinesShow">
          
        </div>

        <div class="container mt-4" id="articles">
          <h3>Articles</h3>
          <p><?php
              echo $data['Articles'];
              ?></p>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100" id="articlesShow">
            


          
        </div>

        <div class="container mt-4" id="facts">
          <h3>Facts</h3>
          <p><?php
              echo $data['Facts'];
              ?></p>
          
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100" id="factsShow">

        </div>

      </div>
    </section><!-- End Team Section -->

   

    <!-- ======= Contact Section ======= -->
      
      <section id="contact" class="portfolio">
          <div class="container" data-aos="fade-up">
              <div class="section-title">
                  <h2>Staff Coordinators</h2>
              </div>
              <center>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                  <div class="col-lg-4 col-md-4 portfolio-item">
                      <div class="portfolio-img"><img src="admin/assets/img/people/staff_1.jpg" class="img-fluid" alt=""></div>
                      <div class="portfolio-info">
                          <h4>H.O.D</h4>
                          <a href="admin/assets/img/people/staff_1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="HOD"><i class="bx bx-plus"></i></a>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-4 portfolio-item">
                      <div class="portfolio-img"><img src="admin/assets/img/people/staff_2.jpg" class="img-fluid" alt=""></div>
                      <div class="portfolio-info">
                          <h4>Student Advisor</h4>
                          <a href="admin/assets/img/people/staff_2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Student Advisor"><i class="bx bx-plus"></i></a>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-4 portfolio-item">
                      <div class="portfolio-img"><img src="admin/assets/img/people/staff_3.jpg" class="img-fluid" alt=""></div>
                      <div class="portfolio-info">
                          <h4>Treasurer</h4>
                          <a href="admin/assets/img/people/staff_3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Treasurer"><i class="bx bx-plus"></i></a>
                      </div>
                  </div>


                 


              </div>
              <div class="section-title">
                  <h2>Office bearers</h2>
              </div>
              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                  <div class="col-lg-3 col-md-4 portfolio-item">
                      <div class="portfolio-img"><img src="admin/assets/img/people/pres.jpg" class="img-fluid" alt=""></div>
                      <div class="portfolio-info">
                          <h4>President</h4>
                          <a href="admin/assets/img/people/pres.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Office Bearers"><i class="bx bx-plus"></i></a>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-4 portfolio-item">
                      <div class="portfolio-img"><img src="admin/assets/img/people/vp.jpg" class="img-fluid" alt=""></div>
                      <div class="portfolio-info">
                          <h4>Vice President</h4>
                          <a href="admin/assets/img/people/vp.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Office Bearers"><i class="bx bx-plus"></i></a>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-4 portfolio-item">
                      <div class="portfolio-img"><img src="admin/assets/img/people/lvp.jpg" class="img-fluid" alt=""></div>
                      <div class="portfolio-info">
                          <h4>Vice President</h4>
                          <a href="admin/assets/img/people/lvp.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Office Bearers"><i class="bx bx-plus"></i></a>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-4 portfolio-item">
                      <div class="portfolio-img"><img src="admin/assets/img/people/tres1.jpg" class="img-fluid" alt=""></div>
                      <div class="portfolio-info">
                          <h4>Treasurer</h4>
                          <a href="admin/assets/img/people/tres1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Office Bearers"><i class="bx bx-plus"></i></a>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-4 portfolio-item">
                      <div class="portfolio-img"><img src="admin/assets/img/people/tres2.jpg" class="img-fluid" alt=""></div>
                      <div class="portfolio-info">
                          <h4>Treasurer</h4>
                          <a href="admin/assets/img/people/tres2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Office Bearers"><i class="bx bx-plus"></i></a>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-4 portfolio-item">
                      <div class="portfolio-img"><img src="admin/assets/img/people/gs.jpg" class="img-fluid" alt=""></div>
                      <div class="portfolio-info">
                          <h4>General Secretary</h4>
                          <a href="admin/assets/img/people/gs.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Office Bearers"><i class="bx bx-plus"></i></a>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-4 portfolio-item">
                      <div class="portfolio-img"><img src="admin/assets/img/people/js.jpg" class="img-fluid" alt=""></div>
                      <div class="portfolio-info">
                          <h4>Joint Secretary</h4>
                          <a href="admin/assets/img/people/js.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Office Bearers"><i class="bx bx-plus"></i></a>
                      </div>
                  </div>
                </center>

              </div>
          </div>

      </section>

      <!-- 
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
              <h2>Contact</h2>
          </div>
        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section --> 

    <!-- End contact -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!--
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>We would like to here from you !</h4>
            <p>Write us</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  -->
  
    <div class="footer-newsletter">
     <!--  <div class="container">
        <div class="row"> -->
          <center>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SEEE</h3>
            <p>CEG, Anna University,<br> Chennai.<br><br>
              <strong>Phone:</strong> +91 95002 68452<br>
              <strong>Email:</strong> <a href="mailto: cegseee@gmail.com" >cegseee@gmail.com</a><br>
            </p>
              <a href="https://www.facebook.com/wavesceg" target="_Blank"class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/waves_ceg/" target="_Blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
              <a href="https://www.linkedin.com/company/society-of-electrical-and-electronics-engineers/mycompany/" target="_Blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
          </center>
          
          <!--<div class="col-lg-3 col-md-6 footer-links">
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
        -->
        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
          <h6>Developed by <strong><span><a href="https://www.linkedin.com/in/viswa-prasad/" target="_blank">Viswaprasad</a>  & <a href="https://www.linkedin.com/in/pranava-raman-bms/" target="_blank">Pranava Raman BMS</a></span></strong></h6>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
  <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="admin/assets/vendor/php-email-form/validate.js"></script>
  <script src="admin/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="admin/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="admin/assets/vendor/venobox/venobox.min.js"></script>
  <script src="admin/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="admin/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="admin/assets/js/main.js"></script>

    <script>
        function loadImpulse(imgtype){
            $.post('admin/showImpulseData.php', {
                type: imgtype,
                access: 'user'
            },function (data){
                $("#"+imgtype+"Show").html(data);
            });
        }

        $(document).ready(function(){
            loadImpulse('magazines');
            loadImpulse('articles');
            loadImpulse('facts');
        });
    </script>
  

</body>

</html>