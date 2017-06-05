<?php
require 'before.php';
function listpro1($p1,$d1,$im1,$id,$p2,$d2,$im2,$id2){
  echo '<div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="section section-info product" onclick="window.location = \'http://' . $_SERVER['SERVER_NAME'].'/SelectedTopicInHCI/feeling/product.php?id='.$id.'\';">
            <div class="container">
              <div class="col-md-2">
                <img src="'.$im1.'" class="imgshow">
              </div>
              <div class="col-md-3 text-left">
                <h1>'.$p1.'</h1>
                <h5>'.$d1.'</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="section section-primary product" onclick="window.location = \'http://' . $_SERVER['SERVER_NAME'].'/SelectedTopicInHCI/feeling/product.php?id='.$id2.'\';">
            <div class="container">
              <div class="col-md-3 text-right">
                <h1>'.$p2.'</h1>
                <h5>'.$d2.'</h5>
              </div>
              <div class="col-md-2">
                <img src="'.$im2.'" class="imgshow">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>';
}
function listpro2($p1,$d1,$im1,$id,$p2,$d2,$im2,$id2){
  echo '<div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section section-primary product" onclick="window.location = \'http://' . $_SERVER['SERVER_NAME'].'/SelectedTopicInHCI/feeling/product.php?id='.$id.'\';">
            <div class="container">
              <div class="col-md-3 text-right">
                <h1>'.$p1.'</h1>
                <h5>'.$d1.'</h5>
              </div>
              <div class="col-md-2">
                <img src="'.$im1.'" class="imgshow">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="section section-info product" onclick="window.location = \'http://' . $_SERVER['SERVER_NAME'].'/SelectedTopicInHCI/feeling/product.php?id='.$id2.'\';">
            <div class="container">
              <div class="col-md-2">
                <img src="'.$im2.'" class="imgshow">
              </div>
              <div class="col-md-3 text-left">
                <h1>'.$p2.'</h1>
                <h5>'.$d2.'</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>';
}
 ?>
