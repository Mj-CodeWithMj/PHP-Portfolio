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
    <!-- hero section start -->
    <section id="hero" class="d-flex align-item-left">
        <div class="container text-left cmain" data-aos="fade-right" data-aos-delay="50" data-aos-duration="600">
          <h1>Hello
            <i class="fa fa-hand-peace-o"></i> its Me,</h1>  
          <h2>Murtuza Jamali,</h2>
            <h2>A web devloper with great skill's.</h2>
        </div>
        <div class="container" data-aos="fade-left" data-aos-delay="50" data-aos-duration="600">
            <img src="image/bg_own.jpeg">
        </div>
    </section>
    <!-- hero section end -->
    <!-- About section start -->
    <section class="about" id="about">
      <div class="container">
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100" data-aos-duration="600">
            <h2>
                A WEB DEVLOPER & PROGRAMER
            </h2>
            <p data-aos="fade-right" data-aos-delay="300" data-aos-duration="700">
                Welcome to my digital playground! I'm Murtuza Jamali, a dedicated web designer with a keen eye for aesthetics and a passion for creating seamless online experiences. 
            </p>
            <p data-aos="fade-right" data-aos-delay="500" data-aos-duration="800">
               Whether you're an entrepreneur looking to establish your online presence or a company aiming to revamp your website, you're in the right place. Let's embark on a journey to transform your ideas into visually stunning and highly functional websites.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-4-lg">
            <p data-aos="fade-left" data-aos-delay="200" data-aos-duration="600">
              I eat, sleep, and breathe web design. With a background in Master in Computer Application, I have honed my skills to blend creativity with technical proficiency. My design philosophy is simple: clean, user-friendly interfaces that leave a lasting impression. I believe that every website should not only look amazing but also offer intuitive navigation and exceptional performance.
            </p>
            <img src="image/about_own.jpg" alt="murtuza jamali" data-aos="fade-left" data-aos-delay="400" data-aos-duration="700">
            <p data-aos="fade-left" data-aos-delay="500" data-aos-duration="800">
              Beyond the world of pixels and codes, I find inspiration in art, nature, and the ever-evolving digital landscape. I thrive on challenges and am constantly pushing my creative boundaries to deliver designs that resonate with your audience.
            </p>
              <a href="about.php" class="btn_get_started" data-aos="fade-left" data-aos-delay="500" data-aos-duration="800">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- About section end  -->
        <!-- counter section start  -->
    <section class="counter" id="counter">
      <div class="container">
        <div class="row counters">        
          <div class="col-lg-3 col-6 text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="600">
            <span>20+</span>
            <p>Clients</p>
          </div>
          <div class="col-lg-3 col-6 text-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="650">
            <span>20+</span>
            <p>Projects</p>
          </div>
          <div class="col-lg-3 col-6 text-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
            <span>10 Hours</span>
            <p>Working Time</p>
          </div>
          <div class="col-lg-3 col-6 text-center" data-aos="fade-up" data-aos-delay="400" data-aos-duration="750">
            <span>24/7</span>
            <p>Available for Clients</p>
          </div>
        </div>
      </div>
    </section>
    <!-- counter section end  -->
    <!-- clients section  start -->
      <section class="work">
        <div class="container text-center" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="800">
            <h1>CURRENTLY WORKING WITH</h1>
            <p>STILL UPGRADING SKILL'S TO MAKE SELF MORE BETTER</p>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-item-center text-center" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="850">
              <img src="image/bootstrap.png" class="img-fluid" alt="HtmlImage">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-item-center text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="900">
              <img src="image/html5.png" class="img-fluid" alt="CssImage">
            </div>  
            <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-item-center text-center" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="950">
              <img src="image/css3.png" class="img-fluid" alt="BostrapeImage">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-item-center text-center" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">
              <img src="image/js.png" class="img-fluid" alt="JsImage">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-item-center text-center" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1050">
              <img src="image/react.png" class="img-fluid" alt="PhpImage">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 d-flex align-item-center text-center" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="1100">
              <img src="image/vscode.png" class="img-fluid" alt="PythonImage">
            </div>
          </div>
        </div>    
      </section>
    <!-- clients section  end -->
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