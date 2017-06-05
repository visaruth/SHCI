<?php
if(isset ( $_GET["id"] )&&isset ( $_GET["type"] )){
  require 'connect.php';
  $sql = 'SELECT * FROM picture where pid = "'.$_GET["id"].'" && type = "'.$_GET["type"].'"';
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
