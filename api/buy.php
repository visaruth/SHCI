<?php
session_start();
  require 'connect.php';
  if(isset($_GET['id'])&&isset($_GET['price'])){

        $_SESSION['id'];
        $_SESSION['price'];
      $_SESSION['id'][]=$_GET['id'];
      $_SESSION['price'][] = $_GET['price']; 
  }else{
    for($i=0;$i<count($_SESSION['id']);$i++)
	{
		echo $_SESSION['id'][$i];
	}
  }
 ?>
