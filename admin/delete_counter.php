<?php 
  
    $id=$_GET['course'];
    $con=mysqli_connect("localhost","root","","portfolio");
    $data=$con->query("delete from counter where id=$id");

    echo "<script>window.location.href='manage_counter.php';</script>";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

</body>
</html>