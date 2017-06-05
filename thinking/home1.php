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
      listpro('/public/images/Milk Caramel_1.jpg','Cool Milk Cookie','ลูกอมที่มีความอ่อนหวานและความอ่อนโยนจากคาราเมล จะช...',1,
      '/public/images/Sweet \'n\' Cheesy_1.jpg','Sweet \'n\' Cheesy Caramel Cheddar Cheese','ความหวานพิเศษจากข้าวโพดคั่วเนยคาราเมลกับถั่ววานิลล...',2,
      '/public/images/Goldfish Crackers_1.jpg','Goldfish Crackers','แครกเกอร์รูปปลาที่ทำให้หลายครอบครัวต้องยิ้มเมื่อได..',3,
      '/public/images/Fresh Yatsuhashi Mochi Matcha_2.jpg','Fresh Yatsuhashi Mochi Matcha','ขนมโมจิเค้กข้าวขนาดพอดีคำ มีกลิ่นหอมละมุนของชาเขีย...',4);

      listpro('/public/images/Tostitos Original_1.jpg','Tostitos Original','ขนมขบเคี้ยวที่คุณสามารถทานในช่วงเวลาไหนก็ได้ ไม่ว่...',5,
      '/public/images/Kyoto Ippin Kuzumochi_2.jpg','Kyoto Ippin Kuzumochi','ขนม Kuzumochi รสชาติต้นตำรับที่ทำขึ้นผ่านการตรวจสอ...',6,
      '/public/images/Naruto Kintoki Sweet Potato Tart Cake_1.jpg','ทาร์ตเค้ก Naruto Kintoki','ขนมทาร์ตเค้กมันฝรั่งหวานจากจังหวัดโทะกุชิมะ รสชาติ...',7,
      '/public/images/Osaka Banana no Koibito_2.jpg','Osaka Banana no Koibito','ขนม Manju นี้จะให้ความเอร็ดอร่อยทั้งสี รูปร่างและร...',8);

      listpro('/public/images/Sanin 20th Century Pear Jelly_2.jpg','Sanin 20th Century Pear Jelly','ความสดใหม่ของลูกแพร์ศตวรรษที่ 20 ได้แปลงโฉมกลายเป็...',9,
      '/public/images/Milk Boro_2.jpg','Milk Boro','ขนมรสนมBoro สำหรับคนทุกเพศทุกวัยทานได้ตั้งแต่เด็กจ...',10,
      '/public/images/Kyoto Ramune_2.jpg','Kyoto Ramune','ลูกอมที่จะละลายในปาก แล้วให้รสเปรี้ยวหวานที่น่าหลง...',11,
      '/public/images/1.jpg','Knabber Esspapier รสสตอเบอร์รี่','ขนมกระดาษยอดฮิตสำหรับเด็กทุกเพศทุกวัย ใคร ๆ ก็ชอบ...',12);
     ?>

    <div class="section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="pagination">
                      <li class="disabled">
                        <a >Prev</a>
                      </li>
                      <li class="active" >
                        <a href="<?php echo $link;?>/thinking/home1.php" >1</a>
                      </li>
                      <li >
                        <a href="<?php echo $link;?>/thinking/home2.php">2</a>
                      </li>
                      <li >
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
