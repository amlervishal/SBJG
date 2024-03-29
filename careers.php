<?php
    $email_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != ''){
       
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            // sumbit the form

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userMobile = $_POST['mobile'];
            $messageSubject = $_POST['subject'];
            $resume = $_POST['resume'];
            $portfolio = $_POST['portfolio'];
            $message = $_POST['message'];
          

            $to = "careers@sbjgroup.com";
            $headers = 'From: contactus@sbjgroup.com'. "\r\n";
            $emailSubject = "SBJG ENQUIRY FORM: ". $messageSubject;
            $body = "";


            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Mobile: ".$userMobile. "\r\n";
            $body .= "Subject: ".$messageSubject. "\r\n";
            $body .= "Resume: ".$resume. "\r\n";
            $body .= "Portfolio: ".$portfolio. "\r\n";
            $body .= "Cover: ".$message. "\r\n";

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
  <title>SBJ Group | Architects & Interior Designers</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  
  

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/SBJG_logo/favicon-03.svg" />

  <!-- CSS
  ================================================== -->
  
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

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PR0X3EVGD1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PR0X3EVGD1');
</script>

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
      <img loading="lazy" class="logo-default img2 text-center" src="images/SBJG_logo/LOGO-100.svg" alt="logo" />
      <img loading="lazy" class="logo-white img2" src="images/SBJG_logo/LOGO-100.svg" alt="logo" />
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
            <a class="nav-link-dark" href="contact.html">Contact</a>
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

<section class="form-section">
  <div class="container">
      <div>
          <h5 class="text-center titlefont2">We're always looking for great talent to join our team.</h5>
          <p class="text-center">Please fill out the form below and share a link your resume and portfolio.</p>
      </div>
     
      <div class="admission-form d-flex justify-content-center">
      <form action="contact.html" method="POST" class="form">
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
              <label for="resume" class="form-label ">Resume-Link</label>
              <input type="text" class="form-control" id="resume" name="cv-link" placeholder="CV-link" tabindex="5" required>
          </div>

          <div class="form-group">
              <label for="portfolio" class="form-label ">Portfolio-Link</label>
              <input type="text" class="form-control" id="portfolio" name="portfolio" placeholder="Portfolio-link" tabindex="5" required>
          </div>

          <div class="form-group">
              <label for="subject" class="form-label ">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Enquiry" tabindex="6" required>
          </div>

          <div class="form-group">
              <label for="message" class="form-label ">Cover Letter</label>
              <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Cover Letter.." tabindex="7"></textarea>
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

     <div class = "container text-center mt-5" > SBJ GROUP is an Equal Opportunity Employer. SBJ GROUP will provide equal opportunity to all individuals without regard to race, color, religion, sex, sexual orientation, gender identity, national origin, disability, or veteran status.</div>

      </form>
  </div>
</section>
<!-- Page Content-->

<!-- FOOTER -->
<footer id="footer" class="bg-one">
	<div class="comtainer-fluid fixed-bottom footer-bottom">
	
		<div class="list1">
			<ul class="text-center">
				<li class="list-group-item-0"><a href="https://www.linkedin.com/company/stephen-b-jacobs-group/" target="_blank"><img class="social-icon" src="images/SBJ Images/linkedin.png" alt=""></a></li>
				<li class="list-group-item-0"><a href="https://instagram.com/sbj_group?igshid=MzRlODBiNWFlZA==" target="_blank"><img class="social-icon" src="images/SBJ Images/instagram.png" alt=""></a></li>
				<li class="list-group-item-0"><a href="https://www.facebook.com/SBJGroupArch/" target="_blank"><img class="social-icon" src="images/SBJ Images/facebook.png" alt=""></a></li>
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