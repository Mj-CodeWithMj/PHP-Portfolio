<?php
    

    $id=$_GET['course'];
    $con=mysqli_connect("localhost","root","","portfolio");
    $data=$con->query("select * from counter where id=$id");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
   include("headerlink.php");
  ?>
  <title>Add Counter</title>
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
              <h4>Edit Counter</h4>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Counter</li>
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

<?php 

    if($row=$data->fetch_object())
    {


?>                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add Clinet Counter</label>
                    <input type="text" name="clinet" class="form-control" 
                    id="clinet" placeholder="Enter clinet Counter" 
                    value="<?php echo $row->clinet;   ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add Project Counter</label>
                    <input type="text" name="project" class="form-control" 
                    id="project" placeholder="Enter project Counter" 
                    value="<?php echo $row->project;   ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add Working Time Counter</label>
                    <input type="text" name="time" class="form-control" 
                    id="time" placeholder="Enter Working Time" 
                    value="<?php echo $row->time;    ?>">
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit Counter</button>
                  </div>
<?php  

    }

?>                   
            </form>
<!-- ========================================================================
                                      php start 
  =========================================================================== -->
      <?php

       if($_POST)
       {
        
        /*$ext = strtolower(pathinfo($_FILES["add_image"]["name"],PATHINFO_EXTENSION));
        $name=uniqid();
        $name=$name.".".$ext;
        move_uploaded_file($_FILES["add_image"]["tmp_name"], "add_image/$name");*/
         

        $clinet=$_POST['clinet'];
        $project=$_POST['project'];
        $time=$_POST['time'];
        

        $con=mysqli_connect("localhost","root","","portfolio");
        $con->query("update counter set clinet='$clinet', project='$project', 
                time='$time', where id=$id");

          /*if($con)
              {
                echo "<script> alert ('Data Insert Succesfully') </script>";
              }*/


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
   <!--======================================================================================= 
                                    main_content end 
  ======================================================================================= -->


  <!--======================================================================================= 
                                    footer start 
  ======================================================================================= -->
 <?php 
 include("footer.php");
 ?>
 <!--======================================================================================= 
                                    footer end 
  ======================================================================================= -->
</div>
<!-- ./wrapper -->
<!-- ======================================================================================= 
                                         footerlink start 
  ======================================================================================= -->
<?php 
 include("footerlink.php");
?>
</body>
</html>
