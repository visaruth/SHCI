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
      }.product:hover{
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
      listpro1('Sanin 20th Century Pear Jelly','ความสดใหม่ของลูกแพร์ศตวรรษที่ 20 ได้แปลงโฉมกลายเป็...','../public/images/Sanin 20th Century Pear Jelly_1.jpg',9,
    'Milk Boro','ขนมรสนมBoro สำหรับคนทุกเพศทุกวัยทานได้ตั้งแต่เด็กจ...','../public/images/Milk Boro_1.jpg',10);
      listpro2('Kyoto Ramune','ลูกอมที่จะละลายในปาก แล้วให้รสเปรี้ยวหวานที่น่าหลง...','../public/images/Kyoto Ramune_1.jpg',11,
    'Knabber Esspapier รสสตอเบอร์รี่','ขนมกระดาษยอดฮิตสำหรับเด็กทุกเพศทุกวัย ใคร ๆ ก็ชอบ...','../public/images/1.2.jpg',12);
      listpro1('มันฝรั่งแผ่นทอดไขมันต่ำ Ruffles','มันฝรั่งแท้ทอดกรอบ ชนิดไขมันต่ำจะกินเยอะแค่ไหน...','../public/images/2.1.jpg',13,
    'ขนมถั่วลิสง Bamba','ไม่มีใครจะไม่รู้จักBamba ขนมถั่วลิสง ที่นิยมในหมูเ...','../public/images/3.1.jpg',14);
      listpro2('ตอร์ตียาแผ่นทอด รสมะนาว','ขนมข้าวโพดทอด สไตล์เม็กซิโก รสมะนาวรสชาติแปลกใ...','../public/images/4.1.jpg',15,
    'Mott’s เจลลี่ รสเบอร์รี่','เจลลี่ รสเบอร์รี่ ทำจากน้ำผลไม้แท้ มีประโยชน์ต่อสุ...','../public/images/5.1.jpg',16);
       ?>
      <div class="section text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ul class="pagination" >
                <li>
                  <a href="<?php echo $link;?>/feeling/home1.php">Prev</a>
                </li>
                <li >
                  <a href="<?php echo $link;?>/feeling/home1.php" >1</a>
                </li>
                <li class="active">
                  <a href="<?php echo $link;?>/feeling/home2.php">2</a>
                </li>
                <li >
                  <a href="<?php echo $link;?>/feeling/home3.php"  >3</a>
                </li>
                <li  >
                  <a href="<?php echo $link;?>/feeling/home2.php">Next</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
