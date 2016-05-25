<?php

include_once 'simple_html_dom.php';
$nhomhang = $_POST["nhomhang"];
$tinh = $_POST["tinh"];
$link = 'http://vietbao.vn/vn/gia-ca-thi-truong/' . $nhomhang . '/khu-vuc-' . $tinh;
$html = file_get_html($link);
$stmt = $conn->prepare("INSERT INTO sanpham(TenMatHang,HinhThuc, Gia, LoaiMatHang,Tinh,NgayCapNhat) values (:tenmh,:hinhthuc, :gia, :loaimh,:tinh,(select curdate()))");
$stmt->bindParam(':tenmh', $tenmh);
$stmt->bindParam(':hinhthuc', $hinhthuc);
$stmt->bindParam(':gia', $gia);
$stmt->bindParam(':loaimh', $loaimh);
$stmt->bindParam(':tinh', $tinh);
$loaimh = $html->find('div.title-price', 0)->plaintext;
$tables = $html->find('table.tbl-list', 0);
$rows = $tables->find('tr');
foreach (array_slice($rows, 1) as $arow) {
    $tenmh = html_entity_decode($arow->find('td', 1)->plaintext);
    $str = explode('(', $tenmh);
    // $hinhthuc=str_replace( ')', '', $str[1] );
    if ($arow->find('td  strong a small', 0)) {
        $hinhthuc = html_entity_decode($arow->find('td  strong a small', 0)->plaintext);
        $hinhthuc = str_replace('(', '', $hinhthuc);
        $hinhthuc = str_replace(')', '', $hinhthuc);
    } else {
        $hinhthuc = "chưa cập nhật";
    }
    $date = getdate();
    $date = $date["mday"] . "/" . $date["mon"] . "/" . $date["year"];
    $tenmh = $str[0];
    $gia = html_entity_decode($arow->find('td', 4)->plaintext);
    $gia = str_replace( '.', '', $gia );
    $tinh = html_entity_decode($arow->find('td', 3)->plaintext);
    //echo $date;
    $sth = $conn->query("SELECT * FROM `sanpham` where ngaycapnhat= (select curdate())");
    //$sth->bindParam(':date', $date);
    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sp = $sth->fetch();
    $i = 0;
    $j = 0;
    // print_r($sp);
    if ($sp != NULL) {
        while ($sp) {
            if ($sp->TenMatHang == $tenmh && $sp->HinhThuc == $hinhthuc && $sp->Gia != $gia && $sp->Tinh == $tinh && $sp->ngaycapnhat = $date) {
                $sth = $conn->prepare('update `sanpham` set Gia = :gia where TenMatHang = :tenmh');
                $sth->execute(array(
                    ':gia' => $gia,
                    ':tenmh' => $tenmh
                ));
                $i++;
            }
            if ($sp->TenMatHang == $tenmh && $sp->HinhThuc == $hinhthuc && $sp->Gia == $gia && $sp->Tinh == $tinh) {
                $j++;
            }
            $sp = $sth->fetch();
        }
        if ($i == 0 && $j == 0) {
            $stmt->execute();
        }
    } else {
        $stmt->execute();
    }
}
?>
