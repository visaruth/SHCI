<?php
  require '../api/connect.php';
  if(!isset($_GET['id'])){
    header( 'Location : http://localhost/SelectedTopicInHCI/thinking/home.php');
    exit(0);
  }
 ?>
<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ร้านขนม</title>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="../public/images/brand.png" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">

        google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

        var data = google.visualization.arrayToDataTable([
          <?php
            $sqlc = 'SELECT CEIL(rate) AS rate FROM rating where pid='.$_GET['id'];
            $resultc = mysqli_query($conn, $sqlc);
            $one = 0;
            $two = 0;
            $three = 0;
            $four = 0;
            $five = 0;
            while($rowc = mysqli_fetch_assoc($resultc)) {
                  if($rowc['rate']==1) $one++;
                  if($rowc['rate']==2) $two++;
                  if($rowc['rate']==3) $three++;
                  if($rowc['rate']==4) $four++;
                  if($rowc['rate']==5) $five++;
            }
           ?>
          ['คน', 'จำนวน',],
          ['ให้ดาว 5', <?php echo $five;?>],
          ['ให้ดาว 4', <?php echo $four;?>],
          ['ให้ดาว 3', <?php echo $three;?>],
          ['ให้ดาว 2', <?php echo $two;?>],
          ['ให้ดาว 1', <?php echo $one;?>]
        ]);

        var options = {
          title: 'คะแนนความพึงพอใจ',
          chartArea: {width: '50%'},
          hAxis: {
            title: 'จำนวนคน',
            minValue: 0
          },
          vAxis: {
            title: 'จำนวนดาว'
          }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

        chart.draw(data, options);

          }
        </script>
        <style type="text/css">
          .imgshow{
            height: 50px;
          width: 50px;
          }
            .container2 {
                width: 600px;
                margin: 0 auto;
                padding: 0px;
                padding-bottom: 40px;
                font-family: 'Calibri', 'CalibriRegular', Verdana, Arial, Helvetica, sans-serif;
                }
                .gallery {
                }
                .gallery .previews, .gallery .full, .gallery .desc {
                float: left;
                margin-right: 10px;
                }
                .gallery .desc, .gallery .full {
                width: 500px;
                font-size: 12px;
                }
                .gallery .desc h2 {
                margin-top: 0;
                }
                .gallery .previews a {
                display: block;
                margin-bottom: 10px;
                }
                .gallery .full, .gallery .full img {
                height: 400px;
                }
                .gallery .previews a, .gallery .full {
                border: 4px solid #eee;
                }
                .gallery .previews a:hover, .gallery .previews a.selected {
                border: 4px solid #777;
                }
                .gallery .full img:hover {
                cursor: pointer;
                }
                .clearfix:after {
                content: ".";
                visibility: hidden;
                display: block;
                height: 0;
                clear: both;
                }

                .accordion {
                 margin: 0 0 30px;
                 border-top: 1px solid #DDD;
                 border-radius: 4px;
                }

                .accordion dt {
                 border-bottom: 3px solid #f1f2f3;
                 background: #7f7f7f;
                 color: #FFF;
                }

                .accordion dd {
                 display: none;
                 padding: 20px;
                 width: 100%;
                 margin-left: 0;
                 border-bottom: 1px solid #DDD;
                 background: #FFF;
                 height: 320px;
                }

                .accordion dt {
                 cursor: pointer;
                 padding: 8px 15px;
                 margin: 0;
                }

                .accordion dt:before {
                 content: "\25B6";
                 padding-right: 5px;
                 transition: all .3s linear;
                 -webkit-transform: rotate(0deg);
                 -moz-transform: rotate(0deg);
                 transform: rotate(0deg);
                }

                .accordion dt:hover:before {
                 -webkit-transform: rotate(90deg);
                 -moz-transform: rotate(90deg);
                 transform: rotate(90deg);
                }

                .accordion dt.accordion-active:before {
                 content: "\25B6";
                 padding-right: 5px;
                 -webkit-transform: rotate(90deg);
                 -moz-transform: rotate(90deg);
                }

                .accordion dt.accordion-active:hover {
                 cursor: default;
                }


                .tabs-left, .tabs-right {
                  border-bottom: none;
                  padding-top: 2px;
                }
                .tabs-left {
                  border-right: 1px solid #ddd;

                }
                .tabs-right {
                  border-left: 1px solid #ddd;
                }
                .tabs-left>li, .tabs-right>li {
                  float: none;
                  margin-bottom: 2px;


                }
                .tabs-left>li {
                  margin-right: -1px;

                }
                .tabs-right>li {
                  margin-left: -1px;
                }
                .tabs-left>li.active>a,
                .tabs-left>li.active>a:hover,
                .tabs-left>li.active>a:focus {
                  border-bottom-color: #ddd;
                  border-right-color: transparent;
                  background-color: #e5e5e5;
                  color: #000;
                }

                .tabs-right>li.active>a,
                .tabs-right>li.active>a:hover,
                .tabs-right>li.active>a:focus {
                  border-bottom: 1px solid #ddd;
                  border-left-color: transparent;

                }
                .tabs-left>li>a {
                  border-radius: 4px 0 0 4px;
                  margin-right: 0;
                  display:block;



                }
                .tabs-right>li>a {
                  border-radius: 0 4px 4px 0;
                  margin-right: 0;
                }
                .vertical-text {
                  margin-top:50px;
                  border: none;
                  position: relative;
                }
                .vertical-text>li {
                  height: 20px;
                  width: 120px;
                  margin-bottom: 100px;

                }
                .vertical-text>li>a {
                  border-bottom: 1px solid #ddd;
                  border-right-color: transparent;
                  text-align: center;
                  border-radius: 4px 4px 0px 0px;

                }
                .vertical-text>li.active>a,
                .vertical-text>li.active>a:hover,
                .vertical-text>li.active>a:focus {
                  border-bottom-color: transparent;
                  border-right-color: #ddd;
                  border-left-color: #ddd;

                }
                .vertical-text.tabs-left {
                  left: -50px;

                }
                .vertical-text.tabs-right {
                  right: -50px;
                }
                .vertical-text.tabs-right>li {
                  -webkit-transform: rotate(90deg);
                  -moz-transform: rotate(90deg);
                  -ms-transform: rotate(90deg);
                  -o-transform: rotate(90deg);
                  transform: rotate(90deg);
                }
                .vertical-text.tabs-left>li {
                  -webkit-transform: rotate(-90deg);
                  -moz-transform: rotate(-90deg);
                  -ms-transform: rotate(-90deg);
                  -o-transform: rotate(-90deg);
                  transform: rotate(-90deg);

                }
        </style>
    </head><body>
        <?php
          require '../api/nav.php';
          require '../api/before.php';
         $sql1 = 'SELECT * FROM product where pid = "'.$_GET['id'].'"';
         $result1 = mysqli_query($conn, $sql1);
         $row1 = mysqli_fetch_assoc($result1);
         ?>
        <div class="section" style="padding-bottom: 0">
            <div class="container">
              <h1><?php echo $row1['name']; ?></h1>
              <br />
                <div class="row">
                    <div class="col-md-6">
                        <div class="container2 clearfix">
                            <div class="gallery">
                                <div class="previews">
                                  <?php
                                    $sql = 'SELECT * from picture where pid="'.$_GET['id'].'" && type = "t"';
                                    $result = mysqli_query($conn, $sql);
                                    $count = $result->num_rows - 1;
                                    $row = mysqli_fetch_assoc($result);
                                    $firstPic = $row['picloc'];
                                    $sql2 = 'SELECT * from picture where pid="'.$_GET['id'].'" && type = "f"';
                                    $result2 = mysqli_query($conn, $sql2);
                                    $count2 = $result2->num_rows;
                                   ?>
                                   <a href="#" class="selected"  data-full="..<?php echo $row['picloc'] ?>"><img style="width:50; height:50;" src="..<?php echo $row['picloc'] ?>"></a>
                                   <?php
                                   for($i = 0;$i<$count;$i++){
                                     $row = mysqli_fetch_assoc($result);
                                     echo '<a href="#" data-full="..'.$row['picloc'].'"><img style="width:50; height:50;" src="..'.$row['picloc'].'"></a>';
                                   }
                                   for($i = 0;$i<$count2;$i++){
                                     $row2 = mysqli_fetch_assoc($result2);
                                     echo '<a href="#" data-full="..'.$row2['picloc'].'"><img style="width:50; height:50;" src="..'.$row2['picloc'].'"></a>';
                                   }
                                    ?>
                                </div>
                                <div class="full">
                                    <img style="width:390; height:390;" src="..<?php echo $firstPic; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <dl class="accordion">
                            <dt>ข้อมูลโภชนาการ</dt>
                            <dd><?php echo $row1['detail']; ?></dd>
                            <dt>คำโฆษณา</dt>
                            <dd><?php echo $row1['caption']; ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="section text-right" style="padding: 0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <h3>ราคา <?php echo $row1['price']; ?> บาท</h3>
                        <a class="btn btn-default btn-lg" onclick="buy(<?php echo $row1['pid']; ?>,<?php echo $row1['price']; ?>);">ใส่ตะกร้า<i class="fa fa-fw fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3" style="padding-right: 0;">
                        <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left">
                            <li class="active">
                                <a href="#home" data-toggle="tab">กราฟ</a>
                            </li>
                            <li>
                                <a href="#profile" data-toggle="tab">คะเเนน</a>
                            </li>
                            <li>
                                <a href="#messages" data-toggle="tab">ความคิดเห็น</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                              <center>
                                <div id="chart_div"></div>
                              </center>
                            </div>
                            <div class="tab-pane" id="profile">คะแนนเฉลี่ยความพึงพอใจ <br /><div id="rateYo">
                                </div><input type="hidden" value="1" name="rateyoid" id="rateyoid"></div>
                            <div class="tab-pane" id="messages">
                                 <center>
                                    <div class="fb-comments" ></div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fb-root"></div>
        <script>
        $("#rateYo").rateYo({
         <?php
          $sql3 = 'SELECT Avg(`rate`) AS avg  FROM `rating` WHERE pid='.$_GET['id'];
          $result3 = mysqli_query($conn, $sql3);
          $row3 = mysqli_fetch_assoc($result3);
          if($row3['avg']==null){
            echo 'rating : 0';
          }else{

            echo 'rating:'.$row3['avg'];
          }  ?>
        }).on("rateyo.set", function (e, data) {
          $.ajax({
          url: '<?php echo $link;?>/api/sendrate.php?id=<?php echo$_GET['id'];?>&rate=' + data.rating
          }).done(function() {
          });
        alert("The rating is set to " + data.rating + "!");
        document.getElementById("rateyoid").value = data.rating;
        });
        function buy(id,p){
          $.ajax({
        url: '<?php echo $link;?>/api/buy.php?id='+id+'&price='+p
        }).done(function() {
        alert('สำเร็จ');
        });
        }
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.9";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script>
            $(document).ready(function(){

              $('a').click(function(){
              var largeImage = $(this).attr('data-full');
              $('.selected').removeClass();
              $(this).addClass('selected');
              $('.full img').hide();
              $('.full img').attr('src', largeImage);
              $('.full img').fadeIn();
              });

              $('.full img').on('click', function(){
              var modalImage = $(this).attr('src');
              $.fancybox.open(modalImage);
              });

              });
        </script>
        <script>
            (function($) {
              var allPanels = $('.accordion > dd').hide();
              $('.accordion > dd:first-of-type').show();
              $('.accordion > dt:first-of-type').addClass('accordion-active');
              jQuery('.accordion > dt').on('click', function() {
              $this = $(this);
              $target = $this.next();
              if(!$this.hasClass('accordion-active')){
              $this.parent().children('dd').slideUp();

              jQuery('.accordion > dt').removeClass('accordion-active');
              $this.addClass('accordion-active');
              $target.addClass('active').slideDown();

              }

              return false;
              });

              })(jQuery);
        </script>


</body></html>
