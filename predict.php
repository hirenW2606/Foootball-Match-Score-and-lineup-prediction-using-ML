<?php
if(isset($_POST['submit'])){
	$ateam=$_POST['ateam'];
	$bteam=$_POST['bteam'];
	$hst=$_POST['hst'];
	$ast=$_POST['ast'];
	$hc=$_POST['hc'];
	$ac=$_POST['ac'];
	$myfile = fopen("o_match.txt", "w") or die("Unable to open file!");
	$txt = "A_".$ateam."B_".$bteam."C_".$hst."D_".$ast."E_".$hc."F_".$ac."G_";
	fwrite($myfile, $txt);
	fclose($myfile);
	?>
                    <script type="text/javascript">
                       
                        window.location="./viewpredict.php";
                    </script>

                    <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About - Moderna Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 <style>
	.but
	 {
		 background: #68A4C4;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
	 }
	
	</style>	
	
	
  <!-- =======================================================
  * Template Name: Moderna - v2.0.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html">FOOT<span >B</span>ALL</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a href="#">Contact</a></li>
          
          <li class="drop-down"><a href="team.html">Result</a>
            <ul>
              <li><a href="predict.php">Predict</a></li>
              <!--<li class="drop-down"><a href="#">Result</a>
                <ul>
                  <li><a href="#">Predict</a></li>
                  <li><a href="#">LineUp</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>-->
              <li><a href="lineup.php">LineUp</a></li>
             
            </ul>
          </li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Predict</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Predict</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

   
	  <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
		<form method="POST">
        <div class="row">



          <div class="col-lg-12">
            
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <select class="form-control" type="text" name="ateam" id="ateam" > 
					  <option value="null" disable selected>Team</option>
					  <option value="Arsenal"> Arsenal</option>
					  <option value="Aston Villa"> Aston Villa</option>
					  <option value="Bournemouth">Bournemouth</option>
					  <option value="Brighton"> Brighton </option>
					  <option value="Burnley"> Burnley</option>
					  <option value="Chelsea"> Chelsea</option>
					  <option value="Crystalpalace"> Crystalpalace</option>
					  <option value="Everton"> Everton</option>
					  <option value="Leicester City"> Leicester City </option>
					  <option value="Liverpool"> Liverpool</option>
					  <option value="Mancity"> Mancity</option>
					  <option value="Manchester united"> Manchester united</option>
					  <option value="Newcastle united"> Newcastle united </option>
					  <option value="Norwich city"> Norwich city</option>
					  <option value="Southampton"> Southampton </option>
					  <option value="Stoke city"> Stoke city </option>
					  <option value="Sunderland"> Sunderland </option>
					  <option value="Tottenham"> Tottenham </option>
					  <option value="Watford"> Watford </option>
					  <option value="Westham"> Westham </option>
				  </select>
					
                 
                </div>
                <div class="col-md-6 form-group">
                  <select class="form-control" type="text" name="bteam"  id="bteam"  > 
					  <option value="null" disable selected>Team</option>
					  <option value="Arsenal"> Arsenal</option>
					  <option value="Aston Villa"> Aston Villa</option>
					  <option value="Bournemouth">Bournemouth</option>
					  <option value="Brighton"> Brighton </option>
					  <option value="Burnley"> Burnley</option>
					  <option value="Chelsea"> Chelsea</option>
					  <option value="Crystalpalace"> Crystalpalace</option>
					  <option value="Everton"> Everton</option>
					  <option value="Leicester City"> Leicester City </option>
					  <option value="Liverpool"> Liverpool</option>
					  <option value="Mancity"> Mancity</option>
					  <option value="Manchester united"> Manchester united</option>
					  <option value="Newcastle united"> Newcastle united </option>
					  <option value="Norwich city"> Norwich city</option>
					  <option value="Southampton"> Southampton </option>
					  <option value="Stoke city"> Stoke city </option>
					  <option value="Sunderland"> Sunderland </option>
					  <option value="Tottenham"> Tottenham </option>
					  <option value="Watford"> Watford </option>
					  <option value="Westham"> Westham </option>
				  </select>
                  
                </div>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="hst" id="hst"  placeholder=" Home Team Shots on Target"  />
                
              </div>
				
				 <div class="form-group">
                	<input type="number" class="form-control" name="ast" id="ast" placeholder=" Away Team Shots on Target"  />
             
				</div>
				
				<div class="form-group">
                	<input type="number" class="form-control" name="hc" id="hc" placeholder=" Home Team Corners"  />
                
              	</div>
				
				<div class="form-group">
                	<input type="number" class="form-control" name="ac" id="ac" placeholder=" Away Team Corners"  />
                
              	</div>
				
              
              <div class="text-center">
				  <input class="but" type="submit" name="submit" value="Predict" />
				</div>
            
          </div>

        </div>
		  </form>
      </div>
    </section>
	 
	  

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">20</span>
            <p>Teams</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">500</span>
            <p>Players</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">16000</span>
            <p>Supportors</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2</span>
            <p>Days a Week</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

  

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p></p>
          </div>
          <div class="col-lg-6">
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

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Moderna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>