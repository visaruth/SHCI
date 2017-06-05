<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand">
        <img height="20" alt="Brand" src="../public/images/brand.png">
      </a>
      <a class="navbar-brand" href="home1.php">ร้านขนม</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse" id="navbar-ex-collapse">
      <ul class="nav navbar-nav navbar-right">
          <li <?php if($_SERVER['REQUEST_URI']=='/SelectedTopicInHCI/feeling/home1.php'||
          $_SERVER['REQUEST_URI']=='/SelectedTopicInHCI/feeling/home2.php'||
          $_SERVER['REQUEST_URI']=='/SelectedTopicInHCI/feeling/home3.php'||
          $_SERVER['REQUEST_URI']=='/SelectedTopicInHCI/thinking/home1.php'||
          $_SERVER['REQUEST_URI']=='/SelectedTopicInHCI/thinking/home2.php'||
          $_SERVER['REQUEST_URI']=='/SelectedTopicInHCI/thinking/home3.php') echo'class="active"'; ?>>
              <a href="home1.php"><i class="fa fa-fw fa-home"></i>หน้าหลัก</a>
          </li>
          <li <?php if($_SERVER['REQUEST_URI']=='/SelectedTopicInHCI/feeling/basket.php'||
          $_SERVER['REQUEST_URI']=='/SelectedTopicInHCI/thinking/basket.php') echo'class="active"'; ?>>
              <a href="basket.php"><i class="fa fa-fw fa-shopping-cart"></i>ตะกร้า</a>
          </li>
      </ul>
    </div>
  </div>
</div>
