<?php
  if(isset($_GET['com']) && isset($_GET['name']) && isset($_GET['id']) ){

    require 'connect.php';
    $sql='INSERT INTO `comment`(`comment`, `name`, `pid`) VALUES ("'.$_GET['com'].'","'.$_GET['name'].'","'.$_GET['id'].'")';
    echo $sql;
    $result = mysqli_query($conn, $sql);
  }else{

  }
 ?>
