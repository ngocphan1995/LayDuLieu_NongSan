<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="india, travel, adventure, bookmarking"/>
	<meta name="description" content="This is site ment for indian travellers." />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<title>Lấy link</title>
<?php
include_once 'connect.php';
/*function remove_unicode($str){    if ($str == '')        return false;    $str = trim($str);    $chars = array(            'a'=>array(                    'ấ',                    'ầ',                    'ẩ',                    'ẫ',                    'ậ',                    'Ấ',                    'Ầ',                    'Ẩ',                    'Ẫ',                    'Ậ',                    'ắ',                    'ằ',                    'ẳ',                    'ẵ',                    'ặ',                    'Ắ',                    'Ằ',                    'Ẳ',                    'Ẵ',                    'Ặ',                    'á',                    'à',                    'ả',                    'ã',                    'ạ',                    'â',                    'ă',                    'Á',                    'À',                    'Ả',                    'Ã',                    'Ạ',                    'Â',                    'Ă'            ),            'e'=>array(                    'ế',                    'ề',                    'ể',                    'ễ',                    'ệ',                    'Ế',                    'Ề',                    'Ể',                    'Ễ',                    'Ệ',                    'é',                    'è',                    'ẻ',                    'ẽ',                    'ẹ',                    'ê',                    'É',                    'È',                    'Ẻ',                    'Ẽ',                    'Ẹ',                    'Ê'            ),            'i'=>array(                    'í',                    'ì',                    'ỉ',                    'ĩ',                    'ị',                    'Í',                    'Ì',                    'Ỉ',                    'Ĩ',                    'Ị',                    'î'            ),            'o'=>array(                    'ố',                    'ồ',                    'ổ',                    'ỗ',                    'ộ',                    'Ố',                    'Ồ',                    'Ổ',                    'Ô',                    'Ộ',                    'ớ',                    'ờ',                    'ở',                    'ỡ',                    'ợ',                    'Ớ',                    'Ờ',                    'Ở',                    'Ỡ',                    'Ợ',                    'ó',                    'ò',                    'ỏ',                    'õ',                    'ọ',                    'ô',                    'ơ',                    'Ó',                    'Ò',                    'Ỏ',                    'Õ',                    'Ọ',                    'Ô',                    'Ơ'            ),            'u'=>array(                    'ứ',                    'ừ',                    'ử',                    'ữ',                    'ự',                    'Ứ',                    'Ừ',                    'Ử',                    'Ữ',                    'Ự',                    'ú',                    'ù',                    'ủ',                    'ũ',                    'ụ',                    'ư',                    'Ú',                    'Ù',                    'Ủ',                    'Ũ',                    'Ụ',                    'Ư'            ),            'y'=>array(                    'ý',                    'ỳ',                    'ỷ',                    'ỹ',                    'ỵ',                    'Ý',                    'Ỳ',                    'Ỷ',                    'Ỹ',                    'Ỵ'            ),            'd'=>array(                    'đ',                    'Đ'            ),            ''=>array(                    '/',                    '\\',                    ',',                    '.',                    '"',                    '\"',                    '-',                    "&quot;",                    '*',                    '{',                    '}',                    '<',                    '>',                    '(',                    ')',                    '&lt;',                    '&gt;',                    '?',                    "'",                    "\'",                    '~',                    '#',                    '^',                    '“',                    '”',                    ':',                    ';',                    '&',                    '&amp;',                    '+',                    '=',                    '%',                    '$',                    '@',                    '!',                    "'"            ),            'pc'=>array(                    '%'            ),            '-'=>array(                    ' ',                    '%20',                    '_'            )    );    foreach ($chars as $key=>$arr)        foreach ($arr as $val)            $str = str_replace($val, $key, $str);
    return $str;}
$str='Ngày';
$str= remove_unicode($str) ;
echo"$str";die();*/
$thongbao="";
if(isset($_POST["btn_link"]))
{
include_once'laylink.php';
include_once'laylink2.php';
$thongbao="Lấy dữ liệu thành công";

}

?>
	
</head>
<body>
    <div class="link"style="width: 600px;margin: auto">
        <h3 style="color:red;text-align: center"><?php echo $thongbao?></h3>
        <h6><a href="search.php">Tìm kiếm sản phẩm</a></h6>
    <h1 style="text-align: center">Lấy link</h1>
    <form id="form_link" action="" method="post">
    <div class="row" >
        <div class="col-md-5">
            <select name="nhomhang">
                <option value="0">Nhóm hàng</option>
                <option value="nong-san">Nông Sản</option>
                <option value="thuc-pham">Thực Phẩm</option>
                <option value="kim-khi">Kim Khí</option>
                <option value="vat-lieu-xay-dung">Vật Liệu Xây Dựng </option>
                <option value="nang-luong">Năng Lượng</option>
            </select>
        </div>
    <div class="col-md-5"><select name="tinh">
                <option value="0">Chọn Tỉnh</option>
                <option value="ha-noi">Hà Nội</option>
                <option value="thai-nguyen">Thái Nguyên</option>
                <option value="hung-yen">Hưng Yên</option>
                <option value="an-giang">An Giang </option>
                <option value="tien-giang">Tiền Giang</option>
            </select></div>
    <div class="row">
        <input type="submit" id="btn_link" name="btn_link" class="btn-default" value="Update">
    </div>
    </div>
     </form>
    </div>
    <?php
    include_once'bang.php';
    ?>
</body>	
</html>