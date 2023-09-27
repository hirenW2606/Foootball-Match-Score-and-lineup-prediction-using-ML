<?php
		
		
	/*	if(isset($_POST['submit']))
			{
				 $a=$_POST['a'];
                $b=$_POST['b'];
                	
        $myfile = fopen("o_ten.txt", "w") or die("Unable to open file!");
        $txt = "A_".$a."B_".$b."C_" ;
        fwrite($myfile, $txt);
        fclose($myfile); 
		}

$gk='a';
$def1='b';
$def2='c';
$def3='d';
$def4='e';
$mid1='f';
$mid2='g';
$mid3='h';
$mid4='i';
$fwd1='j';
$fwd2='k'; */


header( "refresh:10" );
$zr1 = '';
$zr2 = '';
$zr3 = '';
$zr4 = '';
$zr5 = '';
$zr6 = '';
$zr7 = '';
$zr8 = '';
$zr9 = '';
$zr10 = '';
$zr11 = '';


$myfile = fopen("o_ten.txt", "r") or die("Unable to open file!");
$output1 = fread($myfile,filesize("o_ten.txt"));
echo $output1;
//echo "<br>";
fclose($myfile);
if ($output1== '.') {
	//echo "<br>";
	//echo "Processing...";
	$zr1 = '.';
	$zr2 = '.';
	$zr3 = '.';
	$zr4 = '.';
	$zr4 = '.';
	$zr5 = '.';
	$zr6 = '.';
	$zr7 = '.';
	$zr8 = '.';
	$zr9 = '.';
	$zr10 = '.';
	$zr11 = '.';


	
}
else{
	$pos_1 = strpos($output1,'A_');
	$pos_2 = strpos($output1,'B_');
	$pos_3 = strpos($output1,'C_');
	$pos_4 = strpos($output1,'D_');
	$pos_5 = strpos($output1,'E_');
	$pos_6 = strpos($output1,'F_');
	$pos_7 = strpos($output1,'G_');
	$pos_8 = strpos($output1,'H_');
	$pos_9 = strpos($output1,'I_');
	$pos_10 = strpos($output1,'J_');
	$pos_11 = strpos($output1,'K_');
	$pos_12 = strpos($output1,'L_');	


	
	$zr1 = substr($output1,$pos_1+2,$pos_2-$pos_1-2);
	$zr2 = substr($output1,$pos_2+2,$pos_3-$pos_2-2);
	$zr3 = substr($output1,$pos_3+2,$pos_4-$pos_3-2);
	$zr4 = substr($output1,$pos_4+2,$pos_5-$pos_4-2);
	$zr5 = substr($output1,$pos_5+2,$pos_6-$pos_5-2);
	$zr6 = substr($output1,$pos_6+2,$pos_7-$pos_6-2);
	$zr7 = substr($output1,$pos_7+2,$pos_8-$pos_7-2);
	$zr8 = substr($output1,$pos_8+2,$pos_9-$pos_8-2);
	$zr9 = substr($output1,$pos_9+2,$pos_10-$pos_9-2);
	$zr10 = substr($output1,$pos_10+2,$pos_11-$pos_10-2);
	$zr11 = substr($output1,$pos_11+2,$pos_12-$pos_11-2);
	
	//echo $pos_1;
	//echo $pos_2;
	//echo $pos_3;
	
}

$gk=$zr1;
$def1=$zr2;
$def2=$zr3;
$def3=$zr4;
$def4=$zr5;
$mid1=$zr6;
$mid2=$zr7;
$mid3=$zr8;
$mid4=$zr9;
$fwd1=$zr10;
$fwd2=$zr11;


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
	
	.f{
    		font-family: "Roboto", sans-serif;
	}
	
	 td {
		 	padding: 10px;
  			text-align: left;
	}
		
		th {
			
			padding: 10px;
  			text-align: left;
			border-bottom: 1px solid #ddd;
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
          
          <li class="drop-down"><a href="#">Result</a>
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
          <h2>LineUp</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Lineup</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->
	  
	 
	<section  > 
		<center>
			<table>
				<table style =width:30%>
					<thead>
    					<tr>
        <th scope=”col”><h2><b>Position</b></h2></th>
		<th scope=”col”><h2><b>Player</b></h2></th>
    					</tr>
    				</thead>
    <tbody>
        <tr>
            <td scope="row">Goal Keeper</td>
			<td><B> <?php echo $gk ?></B> </td>
            
        </tr>
        <tr>
            <td scope="row">Defender</td>
             <td><B><?php echo $def1 ?></B> </td>

            
        </tr>
		<tr>
            <td scope="row">Defender</td>
            <td><B><?php echo $def2 ?></B> </td>
			
            
        </tr><tr>
            <td scope="row">Defender</td>
            <td><B><?php echo $def3 ?></B> </td>
            
            
        </tr><tr>
            <td scope="row">Defender</td>
            <td><B><?php echo $def4 ?> </B></td>
            <td></td>
            
        </tr>
        <tr>
            <td scope="row">Midfeilder</td>
            <td><B><?php echo $mid1 ?></B> </td>
            
            
        </tr>
		<tr>
            <td scope="row">Midfeilder</td>
			<td><B> <?php echo $mid2 ?> </B></td>
            
            
        </tr><tr>
            <td scope="row">Midfeilder</td>
            <td><B><?php echo $mid3 ?> </B></td>
            
        </tr><tr>
            <td scope="row">Midfeilder</td>
            <td><B><?php echo $mid4 ?> </B></td>
            
        </tr>
		<tr>
            <td scope="row">Forward</td>
            <td><B><?php echo $fwd1 ?></B> </td>
            
            
        </tr><tr>
            <td scope="row">Forward</td>
            <td><B><?php echo $fwd2 ?> </B></td>
        </tr>
     </tbody>
				</table>
			</table>
		</center>
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
            <p>Contact us </p>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>Xavier Institute of Engineering
				Opposite S.L.Raheja Hospital,
				Mahim Causeway, Mahim (West),
				Mumbai - 400016, Maharashtra <br><br>
              <strong>Phone:</strong> +91 8655220060<br>
			  <strong>Phone:</strong> +91 8286869497<br>
              <strong>Email:</strong> hirenwaghela21@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Us</h3>
            <p>The Premier League is the organising body of the Premier League with responsibility for the competition, its Rule Book and the centralised broadcast and other commercial rights. </p>
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
        &copy; Copyright <strong><span>FP</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a>Hiren Waghela, Manoharreddy Moku, Kedar Rane</a>
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