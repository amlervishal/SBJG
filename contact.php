<?php
    $email_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != ''){
       
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            // sumbit the form

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userMobile = $_POST['mobile'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "contactus@sbjgroup.com";
            $headers = 'From: idastrachan@sbjgroup.com'. "\r\n";
            $emailSubject = "SBJG ENQUIRY FORM: ". $messageSubject;
            $body = "";


            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Mobile: ".$userMobile. "\r\n";
            $body .= "Subject: ".$messageSubject. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            mail($to, $emailSubject, $body, $headers);
            
            $email_sent = true;
        }
        else{
            $invalid_class_name = "form-invalid";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>SBJ Group</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="One page parallax responsive HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/SBJG_logo/favicon.png" />

  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/css/lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body id="body">
 

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
	<!-- logo -->
  <div class="container text-center">
    <a class="navbar-brand2 logo" href="index.html">
      <img loading="lazy" class="logo-default img2 text-center" src="images/SBJG_logo/LOGO-01.png" alt="logo" />
      <img loading="lazy" class="logo-white img2" src="images/SBJG_logo/LOGO-01.png" alt="logo" />
    </a>
  </div>
	<!-- /logo -->  

    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-center p-0">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-icon-black"></span>
      </button>
	<!-- Navbar center element is used after the navbar-collapse.. add justify-content-center remove all mx or ml auto-->
      <div class="collapse navbar-collapse justify-content-center" id="navigation">
        <ul class="navbar-nav text-center">
          <li class="nav-item">
            <a class="nav-link-dark" href="about.html">About</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link-dark" href="projects.html">Projects</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link-dark" href="team.html">Team</a>
          </li>
		  <li class="nav-item ">
            <a class="nav-link-dark" href="awards.html">Awards</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link-dark" href="press.html">Press</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link-dark" href="contact.php">Contact</a>
          </li>
          
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->
<!-- Page Content -->
<section class="section-projects"></section><hr class="hr-st">
<section class="section-awards" id="portfolio">
	<div class="container-fluid">
    <div class="row my-5">
      
        <div class="col-sm-6 title mx-3">
          <h1 class="page-title">Contact Us</h1> <hr>
          <h3>SBJ Group </h3> <hr>
          <h6>381 Park Avenue South <br> New York, NY 10016</h6> <hr>
          
          <div class="dbox w-100 d-flex align-items-center">
            <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-phone"><img class="social-icon" src="images/SBJG_logo/phone-call.png" alt=""></span>
            </div>
            <div class="text pl-3">
            <p><span>Contact:</span> <a class="promptfont" href="tel://1234567920">+1 212.421.3712</a></p>
            <!-- <p><span>Contact:</span> <a class="promptfont" href="tel://1234567920">+1 212.421.8471</a></p> -->
            </div>
            </div> <hr>

            <div class="dbox w-100 d-flex align-items-center">
              <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-phone"><img class="social-icon" src="images/SBJG_logo/email.png" alt=""></span>
              </div>
              <div class="text pl-3">
              <p><a class="promptfont" href="mailto:contactus@sbjgroup.com">contactus@sbjgroup.com</a></p>
           
              </div>
              </div> <hr>

              <h6><a class="promptfont" href="careers.php">Careers</a></h6>
        </div>

        <div class="col-sm title my-auto text-center">
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d899.3098619664788!2d-73.98457179961713!3d40.742380326682564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a7726919f9%3A0x333e5602afff8c1c!2s381%20Park%20Ave%20S%2C%20New%20York%2C%20NY%2010016!5e0!3m2!1sen!2sus!4v1675120709987!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

      
        </div>
	 <!-- end row -->
	</div> 
  <hr>
 
</section>
<hr>
<section class="form-section">
  <div class="container">
      <div>
          <h5 class="text-center form-title">Get in touch.</h5>
          <p class="text-center">Have a question. Ask us. Our team will get back to you.</p>
      </div>
     
      <div class="admission-form d-flex justify-content-center">
      <form action="contact.php" method="POST" class="form">
          <div class="form-group">
              <label for="name" class="form-label">Your Name </label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
          </div>
          <div class="form-group">
              <label for="email" class="form-label  <?= $invalid_class_name ?? "" ?>">Your Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
          </div>
          <div class="form-group">
              <label for="mobile" class="form-label ">Contact Number</label>
              <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" tabindex="3" required>
          </div>
          <div class="form-group">
              <label for="subject" class="form-label ">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Enquiry" tabindex="4" required>
          </div>
          <div class="form-group">
              <label for="message" class="form-label ">Message</label>
              <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="5"></textarea>
          </div>
          <div class="text-center my-2">
              <button type="submit" class="btn btn-dark">Send Message!</button>
          </div>
          <?php
              if($email_sent):
          ?>
              <h3>Thank you, We will be in touch soon</h3>
          <?php
              endif;
          ?>
     </div>

      </form>
  </div>
</section>
<!-- Page Content-->

<!-- FOOTER -->
<footer id="footer" class="bg-one">
	<div class="comtainer-fluid fixed-bottom footer-bottom">
	
		<div class="list1">
			<ul class="text-center">
				<li class="list-group-item-0"><img class="social-icon" src="images/SBJ Images/linkedin.png" alt=""></li>
				<li class="list-group-item-0"><img class="social-icon" src="images/SBJ Images/instagram.png" alt=""></li>
				<li class="list-group-item-0"><img class="social-icon" src="images/SBJ Images/facebook.png" alt=""></li>
			  </ul>
		</div>
		<div class="">
			<h6 class="text-center">Copyright 2023. All rights reserved. Designed and Developed by <a href="index.html">SBJ GROUP</a></h6>
		</div>
			
	</div>

</footer> <!-- end footer -->


<!-- end Footer Area
========================================== -->
<!-- 
    Essential Scripts
    =====================================-->
<!-- Main jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap4 -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Parallax -->
<script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
<!-- lightbox -->
<script src="plugins/lightbox2/js/lightbox.min.js"></script>
<!-- Owl Carousel -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Smooth Scroll js -->
<script src="plugins/smooth-scroll/smooth-scroll.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Custom js -->
<script src="js/script.js"></script>



</body>

</html>