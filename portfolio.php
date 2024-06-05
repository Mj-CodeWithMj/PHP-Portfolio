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
    <!-- certificate and other image section start -->
    <section id="certi">
      <div class="container">
        <div class="row">
          <h1 class="align-item-center text-center" data-aos="fade-in" data-aos-delay="50" data-aos-duration="500">Certificate's</h1>
<?php 

    $con=mysqli_connect("localhost","root","","portfolio");
    $data=$con->query("select * from portfolio");

    while($row=$data->fetch_object())
    {

?>          
        <img src="admin/add_image/<?php echo $row->add_image;  ?>" alt="certificate image" data-aos="flip-left" data-aos-delay="200" data-aos-duration="700">
          
<?php 
    }
?>              
        </div>
      </div>
    </section>
    <hr>
    <section id="certi1">
      <div class="container">
        <div class="row">
            <h1 class="align-item-center text-center" data-aos="fade-in" data-aos-delay="50" data-aos-duration="500">Own Gallery</h1>
<?php 

    $con=mysqli_connect("localhost","root","","portfolio");
    $data=$con->query("select * from portfolio_one");

    while($row=$data->fetch_object())
    {

?>            
          <img class="ownimg" src="admin/own_image/<?php echo $row->own_image;  ?>" alt="own image" data-aos="flip-left" data-aos-delay="100" data-aos-duration="600">
<?php 
    }
?>            
        </div>
      </div>
    </section>
    <!-- certificate and other image section end -->
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