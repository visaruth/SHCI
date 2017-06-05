<?php
  require '../api/connect.php';
  require '../api/before.php';
  session_start();
 ?>
<html><head>
    <meta charset="utf-8"><title>ร้านขนม</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../assets/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <link href="../assets/fonts/font.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/buy.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../public/images/brand.png" />
    <style type="text/css">

      input[type=number] {
            float: left;
            width: 70px;
            height: 35px;
            padding: 0;
            font-size: 2em;
            text-transform: uppercase;
            text-align: center;
            color: #fff;
            border: 2px #fff solid;
            background: none;
            outline: none;
            pointer-events: none;
          }

          span.spinner {
            position: absolute;
            height: 40px;
            user-select: none;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            -webkit-touch-callout: none;
          }

          span.spinner > .sub,
          span.spinner > .add {
            float: left;
            display: block;
            width: 35px;
            height: 35px;
            text-align: center;
            font-family: Lato;
            font-weight: 700;
            font-size: 2em;
            line-height: 33px;
            color: #fff;
            border: 2px #fff solid;
            border-right: 0;
            border-radius: 2px 0 0 2px;
            cursor: pointer;
            transition: 0.1s linear;
            -o-transition: 0.1s linear;
            -ms-transition: 0.1s linear;
            -moz-transition: 0.1s linear;
            -webkit-transition: 0.1s linear;
          }

          span.spinner > .add {
            top: 0;
            border: 2px #fff solid;
            border-left: 0;
            border-radius: 0 2px 2px 0;
          }

          span.spinner > .sub:hover,
          span.spinner > .add:hover {
            background: #000;
            color: #fff;
          }
           input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
           -webkit-appearance: none;
          }
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
    </style>
  </head><body>
    <?php
      require '../api/nav.php';
     ?>
    <?php
      require '../api/feelbasket.php';
      $price = 0;
      if(!isset($_SESSION['id'])){
        $_SESSION['id'] = null;
      }
      if(count($_SESSION['id'])==0){
        echo '<center>
        <h1>ยังไม่มีสินค้า</h1>
        </center>';
      }else{
        for($i=0;$i<count($_SESSION['id']);$i++)
    	   {
    		     if($i%2==0){
               bas1($_SESSION['id'][$i]);
             }else{
               bas2($_SESSION['id'][$i]);
             }
             $price = $_SESSION['price'][$i]+$price;
    	   }
      }

     ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-right">
            <h1>ราคารวมทั้งสิ้น <?php echo $price;?> บาท</h1>
            <a class="btn btn-info btn-lg buybtn"  onclick="window.location = '<?php echo $link; ?>/api/clear.php';">ชำระเงิน</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="mymodal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h2 class="modal-title">สถานะการชำระเงิน</h2>
          </div>
          <div class="modal-body">
            <p class="lead">ชำระเงินเรียบร้อยแล้ว</p>
          </div>
          <div class="modal-footer">
            <a class="btn btn-info" data-dismiss="modal">ตกลง</a>
          </div>
        </div>
      </div>
    </div>
    <script>
      (function($) {
        $.fn.spinner = function() {
        this.each(function() {
        var el = $(this);

        // add elements
        el.wrap('<span class="spinner"></span>');
        el.before('<span class="sub">-</span>');
        el.after('<span class="add">+</span>');

        // substract
        el.parent().on('click', '.sub', function () {
        if (el.val() > parseInt(el.attr('min')))
        el.val( function(i, oldval) { return --oldval; });
        });

        // increment
        el.parent().on('click', '.add', function () {
        if (el.val() < parseInt(el.attr('max')))
        el.val( function(i, oldval) { return ++oldval; });
        });
            });
        };
        })(jQuery);

        $('input[type=number]').spinner();
    </script>


</body></html>
