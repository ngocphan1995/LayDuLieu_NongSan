<?php
include_once 'connect.php';
include_once 'simple_html_dom.php';
$html=  file_get_html('http://xttm.mard.gov.vn/Site/vi-VN/189/189/Default.aspx');
$stmt = $conn->prepare("INSERT INTO sanpham(TenMatHang,HinhThuc, Gia, LoaiMatHang,Tinh,NgayCapNhat) values (:tenmh,:hinhthuc, :gia, :loaimh,:tinh,(select curdate()))");
$stmt->bindParam(':tenmh', $tenmh);
$stmt->bindParam(':hinhthuc', $hinhthuc);
$stmt->bindParam(':gia', $gia);
$stmt->bindParam(':loaimh', $loaimh);
$stmt->bindParam(':tinh', $tinh);
$tables=$html->find('table .baocao',3);
    $rows=$tables->find('tr');
    foreach (array_slice($rows,1) as $arow) {
        $tenmh=  html_entity_decode($arow->find('td',0)->plaintext);
		$gia= html_entity_decode($arow->find('td',2)->plaintext);
                $tinh= html_entity_decode($arow->find('td',1)->plaintext);
                $str=explode('(', $gia);
                $gia1=$str[1];
                $str=explode(')', $gia1);
                $hinhthuc=$str[0];
                $str=explode(' ', $gia);
                $gia=$str[0];
        $sql="SELECT * FROM `sanpham` where ngaycapnhat = (select curdate())";
        $sth=$conn->query($sql);
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $sp=$sth->fetch();
        $i=0;$j=0;
        if($sp!=NULL)
        {
        while($sp)
        {
          //  print_r($sp);
          //  echo $tinh_vn;die();
            if(trim($sp->TenMatHang)===trim($tenmh)&&$sp->Gia!=$gia&&$sp->Tinh== $tinh)
                   
            {
               $sth = $conn->prepare('update `sanpham` set Gia = :gia where TenMatHang = :tenmh');
               $sth->execute(array(
                    ':gia' => $gia,
                    ':tenmh' => $tenmh
));
          // echo"0k";   
            }
           
            if(trim($sp->TenMatHang)===trim($tenmh)&& trim($sp->Tinh)===trim($tinh))
            {
                $i++;
            }
             //echo "||".trim($sp->TenMatHang)."VÀ VÀ".trim($tenmh)."||";
           $sp=$sth->fetch();
        }
        //echo "i=".$i."; ";//die();
        if($i==0)
        {
            $loaimh="Khác";
            $stmt->execute();
        }
        }  
    }
?>