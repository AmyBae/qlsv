<?php 
	$hostname = "localhost";
	$user = "root";
	$password = "";
	$database = "qlsv";
	$db = mysqli_connect($hostname,$user,$password,$database);
	mysqli_set_charset($db,"UTF8");
	//Kiểm tra kết nối
	if ($db->connect_error) {
		die('kết nối không thành công ' . $db->connect_error);
	}
	
 ?>