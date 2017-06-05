<?php
  function listpro($im1,$t1,$d1,$id1,$im2,$t2,$d2,$id2,$im3,$t3,$d3,$id3,$im4,$t4,$d4,$id4){
    echo '<div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 product" onclick="link('.$id1.');">
                <center>
                <img class="imgshow" src="..'.$im1.'" >
                </center>
                    <h2 class="text-center">'.$t1.'</h2>
                    <p>'.$d1.'</p>
                </div>
                <div class="col-md-3 product" onclick="link('.$id2.');"><center>
                <img class="imgshow" src="..'.$im2.'" >
                </center>
                    <h2 class="text-center">'.$t2.'</h2>
                    <p>'.$d2.'</p>
                </div>
                <div class="col-md-3 product" onclick="link('.$id3.');"><center>
                </center> <img class="imgshow" src="..'.$im3.'" >
                </center>
                    <h2 class="text-center">'.$t3.'</h2>
                    <p>'.$d3.'</p>
                </div>';
              if($id4!=0){
                echo '<div class="col-md-3 product" onclick="link('.$id4.');"><center>
                <img class="imgshow" src="..'.$im4.'" >
                </center>
                    <h2 class="text-center">'.$t4.'</h2>
                    <p>'.$d4.'</p>
                </div>';
              }
            echo '</div>
        </div>
    </div>';
  }
 ?>
