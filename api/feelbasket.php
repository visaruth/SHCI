<?php

  function bas1($id){
    require 'connect.php';
    $sql = 'SELECT * FROM product where pid = "'.$id.'"';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $sql2 = 'SELECT * FROM picture where pid = "'.$id.'" && type = "f"';
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    echo '<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="padding: 0">
            <div class="section section-info product">
              <div class="container">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-3">
                    <img src="..'.$row2['picloc'].'" class="imgshow">
                  </div>
                  <div class="col-md-4">
                    <h1>'.$row['name'].'</h1>
                    <h3>'.$row['price'].' บาท</h3>
                  </div>
                  <div class="col-md-4" style="padding: 50px 0;">
                    <center>
                      <input type="number" min="1" max="100" value="1" style="">
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
  }
  function bas2($id){
    require 'connect.php';
    $sql = 'SELECT * FROM product where pid = "'.$id.'"';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $sql2 = 'SELECT * FROM picture where pid = "'.$id.'"';
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    echo '<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="padding: 0">
            <div class="section section-primary product">
              <div class="container">
                <div class="row">
                  <div class="col-md-4 text-left" style="padding: 50px 0;">
                    <center>
                      <input type="number" min="1" max="100" value="1" style="">
                    </center>
                  </div>
                  <div class="col-md-4 text-right">
                    <h1>'.$row['name'].'</h1>
                    <h3>'.$row['price'].' บาท</h3>
                  </div>
                  <div class="col-md-3 text-right">
                    <img src="..'.$row2['picloc'].'" class="imgshow">
                  </div>
                  <div class="col-md-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
  }
 ?>
