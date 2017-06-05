<?php
require 'before.php';
session_start();
session_unset();
session_destroy();
if($_SERVER['REQUEST_URI'] == '/SelectedTopicInHCI/feeling/basket.php'){
  echo ' <script> alert("ชำระเงินเรียบร้อย"); window.location = "'.$link.'/feeling/basket.php"; </script>';
}else{
  echo ' <script> alert("ชำระเงินเรียบร้อย"); window.location = "'.$link.'/thinking/basket.php"; </script>';
}

?>
