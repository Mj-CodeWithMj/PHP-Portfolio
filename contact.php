<!DOCTYPE html>
<html>
<head>
	<?php
  include("headerlink.php"); 
  ?>
	<title></title>
</head>
<body>
	  <!-- navbar start -->
  <?php
  include("navbar.php"); 
  ?>
  <!-- navbar end -->
    <!-- contact us section start -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-md-12">
            <h1>Contact us</h1>
          </div>
          <div class="col-lg-8 col-sm-8 col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d364.1097093932801!2d73.61766497403559!3d22.765852698423735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39609a575a328083%3A0x27e25c9640abf4de!2sRoyal%20Apartment!5e0!3m2!1sen!2sin!4v1696183689699!5m2!1sen!2sin" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="info mt-4" data-aos="flip-up" data-aos-delay="100" data-aos-duration="600">
              <i class="fa fa-map-marker"></i>
                <div class="info_inner">
                  <h4>Location</h4>
                  <p>Flat no 6 royal tower Godhra,389001</p>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4" data-aos="flip-up" data-aos-delay="200" data-aos-duration="700">
                <div class="info">
                  <i class="fa fa-envelope"></i>
                    <div class="info_inner">
                      <h4>Email</h4>
                      <p>murtuzaj52@gmail.com</p>
                    </div>  
                </div>
              </div>
              <div class="col-lg-6 ">
                <div class="info w-100 mt-4" data-aos="flip-up" data-aos-delay="200" data-aos-duration="700">
                  <i class="fa fa-phone"></i>
                    <div class="info_inner">
                      <h4>Call</h4>
                      <p>+91 96645 83180</p>
                    </div>
                </div>    
              </div>
          </div>
            <form class="email_form mt-4"  method="post" enctype="multipart/form-data" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="800">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" id="name" class="form-control" placeholder=" Enter Your Name">
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" name="email" id="email" class="form-control" placeholder=" Enter Your Email">
                </div>
              </div>
                <div class="form-group">
                  <input type="text" name="subject" id="subject" class="form-control" placeholder=" Enter Your Subject">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" rows="5" class="form-control" placeholder=" Enter Your Message"></textarea>
                </div>
                <div class="text-center">
                  <button type="submit">Send Message</button>
                </div>  
            </form>            
<!-- =======================================================================================
                                      php start 
=========================================================================================== -->
      <?php

       if($_POST)
       {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $con=mysqli_connect("localhost","root","","portfolio");
        $con->query("INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");


       }

      ?>
<!-- ==========================================================================================
                                      php end 
=========================================================================================== -->   
        </div>
      </div>
    </section>
    <!-- contact us section end -->
    <hr>
     <!-- footer start -->
    <?php
    include("footer.php");
    ?>
    <!-- footer end -->
    
    <!-- footerlink start -->
    <?php 
    include("footerlink.php");
    ?>
    <!-- footerlink end -->
</body>
</html>