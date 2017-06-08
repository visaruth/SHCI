<?php
  function comment($name,$comment){
    echo '<div class="media">
        <div class="media-left">
          <img src="../public/images/pro.png" class="media-object" style="width:60px">
        </div>
        <div class="media-body">
          <h4 class="media-heading">'.$name.'</h4>
          <p>'.$comment.'</p>
        </div>
      </div><hr>';
  }
 ?>
