<?php
  if(isset($_GET['id'])&&isset($_GET['rate'])){
    require 'connect.php';
    $sql = 'INSERT INTO `rating`(`pid`, `rate`) VALUES ('.$_GET['id'].','.$_GET['rate'].')';
    $result = mysqli_query($conn, $sql);
  }else{

  }
 ?>
