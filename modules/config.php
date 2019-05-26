<?php
$tenmaychu='localhost';
$taikhoan='root';
$matkhau='12345';
$csdl='webtintuc';
$connect=mysqli_connect($tenmaychu,$taikhoan,$matkhau);
mysqli_select_db($connect,$csdl);
?>