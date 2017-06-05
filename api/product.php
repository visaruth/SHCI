<?php
require 'connect.php';
$sql = 'SELECT * FROM product';
$result = mysqli_query($conn, $sql);
$json = array();
$i = 0;
while($row = mysqli_fetch_assoc($result)) {
        $json[] = array('name' => $row['name'] ,
        'caption' => $row['caption'],
        'detail' => $row['detail']);
}
  echo json_encode($json);
 ?>
