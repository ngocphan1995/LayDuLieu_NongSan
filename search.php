<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="india, travel, adventure, bookmarking"/>
        <meta name="description" content="This is site ment for indian travellers." />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <title>Lấy link</title>
    </head>
    <body>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
        <script src="bieudo/morris.js" type="text/javascript"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
        <link href="bieudo/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
        <link href="bieudo/morris.css" rel="stylesheet" type="text/css"/>
        <script src="bieudo/example.js" type="text/javascript"></script>
        <script language="javascript">
function check() {
   var form = document.getElementById("frm");
   var ngay = parseInt(form.ngaybd.value);
   var thang = parseInt(form.thangbd.value);
   var nam = parseInt(form.nambd.value);
   var thangs = [31,28,31,30,31,30,31,31,30,31,30,31];
   if ((nam%4==0) || (nam%100==0 && nam%400==0)) thangs[1]=29;
   
   if (ngay > thangs[thang-1]) {alert("ngay khong hop le"); return false;
       
   var ngay = parseInt(form.ngaybd.value);
   var thang = parseInt(form.thangbd.value);
   var nam = parseInt(form.nambd.value);
   var thangs = [31,28,31,30,31,30,31,31,30,31,30,31];
   if ((nam%4==0) || (nam%100==0 && nam%400==0)) thangs[1]=29;
   
   if (ngay > thangs[thang-1]) {alert("ngay khong hop le"); return false;
        }
  return true;
}
</script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <h6><a href="index.php">Quay lại</a></h6>
        <form id="frm"  method="post" onsubmit="return check();">
            <div class="row">
                <div class="col-md-3">Nhập tên sản phẩm </div>
                <div class="col-md-4"><input type="text" class="form-control" name="search"></div>


                <div class="col-md-5">
                    <select name="tinh">
                        <option value="0">Chọn Tỉnh</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Thái Nguyên">Thái Nguyên</option>
                        <option value="Hưng Yên">Hưng Yên</option>
                        <option value="An Giang">An Giang </option>
                        <option value="Tiền Giang">Tiền Giang</option>
                    </select>
                </div>
                 </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-5">
                    <span>Từ ngày:</span>
                <select id="ngaybd" name='ngaybd'>
                    <option value = 0 > Ngày </option>
                <?php
                for ($i = 1; $i <= 31; $i++)
                    echo "<option value = $i > $i </option>"
                    ?>
            </select>
            <select id="thangbd" name='thangbd'>
                <option value = 0 > Tháng </option>
                <?php
                for ($i = 1; $i <= 12; $i++)
                {$i=  str_pad ($i,2,'0',STR_PAD_LEFT);
                echo "<option value = $i > $i </option>";}
                    ?>
            </select>
            <select id="nambd" name='nambd'>
                <option value = 0 > Năm </option>
                <?php
                for ($i = 1990; $i <= date('Y'); $i++)
                    echo "<option value = $i > $i </option>"
                    ?>
            </select>
                </div>
                <div class="col-md-5"><span>Đến ngày:</span>
                <select id="ngaykt" name='ngaykt'>
                    <option value = 0 > Ngày </option>
                <?php
                for ($i = 1; $i <= 31; $i++)
                    echo "<option value = $i > $i </option>"
                    ?>
            </select>
            <select id="thangkt" name='thangkt'>
                <option value = 0 > Tháng </option>
                <?php
                for ($i = 1; $i <= 12; $i++)
                {$i=  str_pad ($i,2,'0',STR_PAD_LEFT);
                echo "<option value = $i > $i </option>";}
                    ?>
            </select>
            <select id="namkt" name='namkt'>
                <option value = 0 > Năm </option>
                <?php
                for ($i = 1990; $i <= date('Y'); $i++)
                    echo "<option value = $i > $i </option>"
                    ?>
            </select>
                </div>
           </div>

            <div class="col-md-1" style="margin-top:5px;padding: 20px">
                <input type="submit" value="Tìm kiếm" name="timkiem" id="timkiem">
            </div>
        </form>
        <?php
        /* while($sp)
          {
          $gia=$sp->Gia;
          echo "giá của sản phẩm".$sp->TenMatHang."là:".$gia."thời gian cập nhật".$sp->NgayCapNhat."tỉnh:".$sp->Tinh."<br/>";

          } */
       
        ?>

        <?php
        $tensp = "";
        if (isset($_POST["timkiem"])) {
            $tensp = $_POST["search"];

            $tinh = $_POST["tinh"];
            //thoigian
            $ngaybd=$_REQUEST['ngaybd'];
        $thangbd=$_REQUEST['thangbd'];
        //$thangbd=;
        $nambd=$_REQUEST['nambd'];
        $ngaykt=$_REQUEST['ngaykt'];
        $thangkt=$_REQUEST['thangkt'];
        $namkt=$_REQUEST['namkt'];
        if($ngaybd!='0'&&$thangbd!='0'&&$nambd!='0'&&$ngaykt!='0'&&$thangkt!='0'&&$namkt!='0')
        {
        $thoigianbd= implode('-', array(
        $nambd,
        $thangbd,
        $ngaybd,
));
        $thoigiankt= implode('-', array(
        $namkt,
        $thangkt,
        $ngaykt,
));
        
        if ($tensp != "") {
            include_once 'connect.php';
            $sql = "SELECT * FROM `sanpham` where (`NgayCapNhat` BETWEEN '$thoigianbd' AND '$thoigiankt') and TenMatHang like '%$tensp%' and Tinh like '%$tinh%'";
            $sth = $conn->query($sql);
            $sth->setFetchMode(PDO::FETCH_OBJ);

            $sp = $sth->fetch();
           // echo"sp:".$sp;die();
            if ($sp != NULL) {
                ?>
                <br/>
                <h4 style="text-align: center">Biểu đồ cho <?php echo $sp->TenMatHang ?> tại tỉnh <?php echo $sp->Tinh ?> </h4>
                <div id="myfirstchart" style="height: 250px;"></div>
                <pre id="code" class="prettyprint linenums">
        new Morris.Line({
          // ID of the element in which to draw the chart.
          element: 'myfirstchart',
          // Chart data records -- each entry in this array corresponds to a point on
          // the chart.

          data: [
                    <?php while ($sp) {
                        ?>
                { year: '<?php echo $sp->NgayCapNhat ?>', value: <?php echo $sp->Gia ?> },
                        <?php $sp = $sth->fetch();
                    } ?>
         ],
          // The name of the data record attribute that contains x-values.
          xkey: 'year',
          // A list of names of data record attributes that contain y-values.
          ykeys: ['value'],
          // Labels for the ykeys -- will be displayed when you hover over the
          // chart.
          labels: ['Value']
        });
                </pre>
                <?php
                } else
                    echo "Không có sản phẩm nào";
            }
        }
        
        else
        {
        if ($tensp != "") {
            include_once 'connect.php';
            $sql = "SELECT * FROM `sanpham` where TenMatHang like '%$tensp%' and Tinh like '%$tinh%'";
            $sth = $conn->query($sql);
            $sth->setFetchMode(PDO::FETCH_OBJ);

            $sp = $sth->fetch();
            
            if ($sp != NULL) {
                ?>
                <br/>
                <h4 style="text-align: center">Biểu đồ cho <?php echo $sp->TenMatHang ?> tại tỉnh <?php echo $sp->Tinh ?> </h4>
                <div id="myfirstchart" style="height: 250px;"></div>
                <pre id="code" class="prettyprint linenums">
        new Morris.Line({
          // ID of the element in which to draw the chart.
          element: 'myfirstchart',
          // Chart data records -- each entry in this array corresponds to a point on
          // the chart.

          data: [
                    <?php while ($sp) {
                        ?>
                { year: '<?php echo $sp->NgayCapNhat ?>', value: <?php echo $sp->Gia ?> },
                        <?php $sp = $sth->fetch();
                    } ?>
         ],
          // The name of the data record attribute that contains x-values.
          xkey: 'year',
          // A list of names of data record attributes that contain y-values.
          ykeys: ['value'],
          // Labels for the ykeys -- will be displayed when you hover over the
          // chart.
          labels: ['Value']
        });
                </pre>
                <?php
                } else
                    echo "Không có sản phẩm nào";
            }
        }
            }
            ?>

    </body>	
</html> 

