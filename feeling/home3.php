<?php
require '../api/fpro.php';
require '../api/before.php';
 ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ร้านขนม</title>
    <script type="text/javascript" src="../assets/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/angular.min.js"></script>
    <link href="../assets/fonts/font.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/home.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../public/images/brand.png" />
  </head>
  <style>
  @font-face {
      font-family: 'thai_sans_literegular';
      src: url('<?php echo $link;?>/assets/fonts/thaisanslite_r1-webfont.woff2') format('woff2'),
           url('<?php echo $link;?>/assets/fonts/thaisanslite_r1-webfont.woff') format('woff');
      font-weight: normal;
      font-style: normal;

  }
    body,h1,h2,h3,h4,h5,p{
        font-family: 'thai_sans_literegular';
      }
      .imgshow{
        height: 160px;
        width: 160px;
      }
      .product{
        height: 250px;
      }
      .product:hover{
        cursor: hand;
        opacity: 0.5;
      }
  </style>
  <body>
    <?php require '../api/nav.php'; ?>
    <div class="carousel slide" id="fullcarousel-example" data-interval="false" data-ride="carousel" >
      <?php require '../api/promof.php'; ?>
    <div id="main" ng-app="app" ng-controller="myApp">

      <?php
      listpro1('SUNCHIPS ขนมธัญพืช รสดั้งเดิม','ขนมธัญพืช ดีต่อสุขภาพ ประกอบไปด้วยธัญพืชนานาชนิ...','../public/images/6.1.jpg',17,
      'ขนมเพรทเซลจิ๋ว Roldgold รสดั้งเดิม','ขนมเพรทเซลจิ๋ว รสดั้งเดิม ไร้ไขมัน อร่อย กินเพลิน...','../public/images/7.2.jpg',18);
      listpro2('Stacy’s ขนมมันฝรั่งทอด','ขนมมันฝรั่งแท้ทอดกรอบ หั่นสไลด์ หยิบง่าย กินง่าย...','../public/images/8.1.jpg',19,
      'Cracker Jack ป๊อปคอร์น รสคาราเมล และถั่ว','อร่อยเพลินกับป๊อปคอร์นหอมกลิ่นคาราเมลหวานกลมกล...','../public/images/9.1.jpg',20);
      listpro1('ISLENO ขนมกล้วยทอด รสดั้งเดิม','กล้วยแผ่นทอด กินง่ายสะดวกสบายเหมือนกินกล้วยจาก...','../public/images/10.1.jpg',21,
      'SABRITONES รสพริกและมะนาว','ขนมธัญพืชทอดกรอบ รสจี๊ดจ๊าด ถูกปากคนไทยแน่นอน ด...','../public/images/11.3.jpg',22);
       ?>
      <div class="section text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ul class="pagination" >
                <li >
                  <a href="<?php echo $link;?>/feeling/home2.php">Prev</a>
                </li>
                <li >
                  <a href="<?php echo $link;?>/feeling/home1.php" >1</a>
                </li>
                <li >
                  <a href="<?php echo $link;?>/feeling/home2.php">2</a>
                </li>
                <li class="active">
                  <a href="<?php echo $link;?>/feeling/home3.php"  >3</a>
                </li>
                <li class="disabled" >
                  <a>Next</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
