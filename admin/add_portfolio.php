<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
   include("headerlink.php");
  ?>
  <title>Add Portfolio</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!--======================================================================================= 
                                         Navbar start 
  ======================================================================================= -->
  <?php 
   include("navbar.php");
  ?>
<!--======================================================================================= 
                                         Navbar end 
  ======================================================================================= -->

  <!--======================================================================================= 
                                    Sidebar/mainbar start 
  ======================================================================================= -->
  <?php 
   include("sidebar.php");
  ?>
 <!--======================================================================================= 
                                    Sidebar/mainbar end 
  ======================================================================================= -->

  <!--======================================================================================= 
                                    main_content start 
  ======================================================================================= -->
  <div class="content-wrapper" id="maincon">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 title1">
          <div class="col-sm-6">
              <h4>Add Portfolio</h4>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Portfolio</li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row form"> 
          <div class="col-lg-10">
            <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputFile">Add Certificate's Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="add_image" class="custom-file-input" id="add_image">
                        <label class="custom-file-label" for="exampleInputFile">Add Image</label>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                  <input type="submit" name="submit" value="Add Portfolio" class="btn btn-primary">
                  </div>
            </form>
<!-- ========================================================================
                                      php start 
  =========================================================================== -->
      <?php 

if($_POST)
{


  $ext = strtolower(pathinfo($_FILES["add_image"]["name"],PATHINFO_EXTENSION));
  $name=uniqid();
  $name=$name.".".$ext;
  move_uploaded_file($_FILES["add_image"]["tmp_name"], "add_image/$name");

 

  $con=mysqli_connect("localhost","root","","portfolio");
        $con->query("INSERT INTO `portfolio`(`add_image`) VALUES ('$name')");

}
?>
  <!--========================================================================
                                      php end 
  =========================================================================== -->
          </div> 
        </div>
        <!-- Main row -->
      </div>
      <!-- container-fluid -->
    </section>
    <!-- content -->
  </div>
  <!-- content-wrapper -->
    <!-- ======================================================================= 
                                    main_content end 
    ========================================================================= -->


  <!-- ========================================================================= 
                                    footer start 
  =========================================================================== -->
 <?php 
 include("footer.php");
 ?>
 <!-- ========================================================================== 
                                    footer end 
 ============================================================================ -->
</div>
<!-- ./wrapper -->
<!-- =========================================================================== 
                                         footerlink start 
 =========================================================================== -->

<?php 
 include("footerlink.php");
?>
</body>
</html>
