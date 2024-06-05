<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
   include("headerlink.php");
  ?>
  <title>Manage Counter</title>
</head>
<body class="hold-transition sidebar-mini ">
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
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Counter</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Manage Counter</li>
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
        <div class="row">
          <div class="col-12">
               <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Counter Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr no</th>
                    <th>Clinet Counter</th>
                    <th>Project Counter</th>
                    <th>Working Time Counter</th>
                    <th>Action</th>
                  </tr>
                  </thead>
<!-- ========================================================================
                                      php start 
  =========================================================================== -->  
  <?php 


     $con=mysqli_connect("localhost","root","","portfolio");
     $data=$con->query("select * from counter");

     while($row=$data->fetch_object())
     {

    ?>
      <tbody>
        <tr>
          <td><?php echo $row->id;      ?></td>
          <td><?php echo $row->clinet;   ?></td>
          <td><?php echo $row->project;   ?></td>
          <td><?php echo $row->time;    ?></td>
          <td class="text-left"><a href="delete_counter.php?course=<?php echo $row->id; ?>">
          <i class="fa fa-trash" aria-hidden="true" style="size: 20px;"></i></a>/
          <a href="edit_counter.php?course=<?php echo $row->id;?>">
          <i class="fa fa-edit"></i></a></td>
        </tr>
        </tbody>
    <?php

     }


    ?>                
                  
                
                  
<!-- ========================================================================
                                      php start 
  =========================================================================== -->                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- col -->
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
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
  