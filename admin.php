<?php 
	//start session
	session_start();
	//load file config
	include "config.php";
	//load file model
	include "model/model.php";
	//kiem tra, neu user chua dang nhap thi hien thi MVC login, neu user da dang nhap thi hien thi view master.php
	if(isset($_SESSION["us_name"]) == false)
		include "controller/backend/controller_login.php";
	else{
		//lay bien controller truyen tu url
		$controller = isset($_GET["controller"])?$_GET["controller"]:"";
		//gan cac thanh phan de $controller thanh duong dan vat ly (la duong dan file controller)
		$controller = "controller/backend/controller_$controller.php";
		include "view/backend/master.php";
	}
 ?>