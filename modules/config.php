<?php
	$tenmaychu='localhost';
	$taikhoan='root';
	$matkhau='';
	$csdl='webtintuc';
	$connect=mysqli_connect($tenmaychu,$taikhoan,$matkhau)or die('Connect fail');
	mysqli_select_db($connect,$csdl);
?>