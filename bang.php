<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="india, travel, adventure, bookmarking"/>
	<meta name="description" content="This is site ment for indian travellers." />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<title>Lấy link</title>
</head>
<?php
$sql="SELECT *,DATE_FORMAT(NgayCapNhat,'%d-%m-20%y') as ngaycapnhat FROM `sanpham` order by NgayCapNhat desc";
$sth=$conn->query($sql);
$sth->setFetchMode(PDO::FETCH_OBJ);
/*$sp=$sth->fetch();
print_r($sp);die();*/
$i=1;
?>
<body>
    <div class="link"style="width: 800px;margin: auto;text-align: center">
    <h1 style="text-align: center">Bảng sản phẩm</h1>
    <table border="1" cellpadding="0" cellpadding="0">
        <tr>
            <th>STT</th>
            <th>Tên Mặt Hàng</th>
            <th>Hình Thức</th>
            <th>Giá(VNĐ)</th>
            <th>Loại Mặt Hàng</th>
            <th>Tỉnh</th>
            <th>Ngày Cập Nhật</th>
        </tr>
        <?php  while($sp=$sth->fetch()) {?>
        <tr>
            <td><?=$i?></td>
            <td><?=$sp->TenMatHang?></td>
            <td><?=$sp->HinhThuc?></td>
            <td><?=$sp->Gia?></td>
            <td><?=$sp->LoaiMatHang?></td>
            <td><?=$sp->Tinh?></td>
            <td><?=$sp->ngaycapnhat?></td>
        </tr>
        <?php $i++;}?>
    </table>
    </div>
</body>	
</html>