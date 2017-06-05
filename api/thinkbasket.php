<?php
  function basket($id){
    require 'connect.php';
    $sql = 'SELECT * FROM product where pid = "'.$id.'"';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $sql2 = 'SELECT * FROM picture where pid = "'.$id.'" && type = "t"';
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    echo '<div class="col-md-4 block" style="width: 350px;height: 400px;">
    <center>
    <img src="..'.$row2['picloc'].'" class="imgshow">
    </center>
    <h2>'.$row['name'].'</h2>
    <p>'.$row['price'].' บาท</p>
    <center>
          <input type="number" min="1" max="100" value="1" style="">
    </center>
    </div>';
  }
 ?>
