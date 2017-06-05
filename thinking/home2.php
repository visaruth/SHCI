<?php
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
.imgshow{
  height: 200px;
  width: 200px;
  border: 1px solid #ddd;
}
.product{
  height: 350px;
}.product:hover{
  cursor: hand;
  opacity: 0.5;
}
</style>
<body>

  <?php
    require '../api/nav.php';
    require '../api/before.php';

   ?>
   <div class="carousel slide" id="fullcarousel-example" data-interval="false" data-ride="carousel" >
     <?php require '../api/promof.php'; ?>
    <?php
      require '../api/tpro.php';
      listpro('/public/images/2.jpg','ขนมถั่วลิสง Bamba','มันฝรั่งแท้ทอดกรอบ ชนิดไขมันต่ำ จะกินเยอะแค่ไหน...',13,
      '/public/images/3.jpg','ขนมถั่วลิสง Bamba','ไม่มีใครจะไม่รู้จักBamba ขนมถั่วลิสง ที่นิยมในหมูเ...',14,
      '/public/images/4.jpg','ตอร์ตียาแผ่นทอด รสมะนาว','ขนมข้าวโพดทอด สไตล์เม็กซิโก รสมะนาว รสชาติแปลกใ...',15,
      '/public/images/5.jpg','Mott’s เจลลี่ รสเบอร์รี่','เจลลี่ รสเบอร์รี่ ทำจากน้ำผลไม้แท้ มีประโยชน์ต่อสุ...',16);

      listpro('/public/images/6.jpg','SUNCHIPS ขนมธัญพืช รสดั้งเดิม','ขนมเพรทเซลจิ๋ว รสดั้งเดิม ไร้ไขมัน อร่อย กินเพลิน...',17,
      '/public/images/7.jpg','ขนมเพรทเซลจิ๋ว Roldgold รสดั้งเดิม','ขนม Kuzumochi รสชาติต้นตำรับที่ทำขึ้นผ่านการตรวจสอ...',18,
      '/public/images/8.jpg','Stacy’s ขนมมันฝรั่งทอด','ขนมมันฝรั่งแท้ทอดกรอบ หั่นสไลด์ หยิบง่าย กินง่าย...',19,
      '/public/images/9.jpg','Cracker Jack ป๊อปคอร์น รสคาราเมล และถั่ว','อร่อยเพลินกับป๊อปคอร์นหอมกลิ่นคาราเมล...',20);

      listpro('/public/images/10.jpg','ISLENO ขนมกล้วยทอด รสดั้งเดิม','กล้วยแผ่นทอด กินง่ายสะดวกสบาย เหมือนกินกล้วยจาก...',21,
      '/public/images/11.jpg','ขนมธัญพืชทอด SABRITONES รสพริกและมะนาว','ขนมธัญพืชทอดกรอบ รสจี๊ดจ๊าด ถูกปากคนไทยแน่นอน ด...',22,
      '/public/images/12.jpg','SANTITAS ตอร์ตียาข้าวโพดทอด รส Sazonados','ขนมตอร์ตียาทำจากแป้งข้าวโพด สไตล์เม็กซิกันรสชา...',23,
      '','','',0);
     ?>
    <div class="section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="pagination">
                      <li >
                        <a >Prev</a>
                      </li>
                      <li >
                        <a href="<?php echo $link;?>/thinking/home1.php" >1</a>
                      </li>
                      <li class="active" >
                        <a href="<?php echo $link;?>/thinking/home2.php">2</a>
                      </li>
                      <li class="disabled">
                        <a href="<?php echo $link;?>/thinking/home2.php">Next</a>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
  function link(id){
    window.location = '<?php echo $link; ?>/thinking/product.php?id='+id;
  }
</script>
</html>
