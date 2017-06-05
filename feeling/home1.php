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

      <?php listpro1('Cool Milk Cookie','ลูกอมที่มีความอ่อนหวานและความอ่อนโยนจากคาราเมล จะช...',
      '../public/images/Milk Caramel_3.jpg',1,"ป๊อปคอร์น Sweet 'n'...",'ความหวานพิเศษจากข้าวโพดคั่วเนยคาราเมลกับถั่ววานิลล...',"../public/images/Sweet 'n' Cheesy_2.jpg",2);
        listpro2('Goldfish Crackers','แครกเกอร์รูปปลาที่ทำให้หลายครอบครัวต้องยิ้มเมื่อใด...','../public/images/Goldfish Crackers_2.jpg',3,
      'Fresh Yatsuhashi Mochi Matcha','ขนมโมจิเค้กข้าวขนาดพอดีคำ มีกลิ่นหอมละมุน...','../public/images/Fresh Yatsuhashi Mochi Matcha_1.jpg',4);
      listpro1('Tostitos Original','ขนมขบเคี้ยวที่คุณสามารถทานในช่วงเวลาไหนก็ได้ ไม่ว่...',
    '../public/images/Tostitos Original_2.jpg',5,'Kyoto Ippin Kuzumochi',
  'ขนม Kuzumochi รสชาติต้นตำรับที่ทำขึ้นผ่านการตรวจสอ...','../public/images/Kyoto Ippin Kuzumochi_1.jpg',6);
      listpro2('ทาร์ตเค้ก Naruto Kintoki','ขนมทาร์ตเค้กมันฝรั่งหวานจากจังหวัดโทะกุชิมะ รสชาติ...','../public/images/Naruto Kintoki Sweet Potato Tart Cake_2.jpg',7,
    'Osaka Banana no Koibito','ขนม Manju นี้จะให้ความเอร็ดอร่อยทั้งสี รูปร่างและร...','../public/images/Osaka Banana no Koibito_1.jpg',8);
       ?>
      <div class="section text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ul class="pagination" >
                <li class="disabled">
                  <a >Prev</a>
                </li>
                <li class="active">
                  <a href="<?php echo $link;?>/feeling/home1.php" >1</a>
                </li>
                <li >
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
