<?php
if(isset ($_GET["fid"]) && isset ($_GET["sid"])){
  require 'connect.php';
  $sql = 'SELECT * FROM product';
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)) {
          $json[] = array('msg' => 'success',
            'location' => 'http://localhost/SelectedTopicInHCI'.$row['picloc']);
  }
}
else{
  $json = array('msg' => 'error');
}
echo json_encode($json);
?>
