<?php 
	//start session
	session_start();
	//load file config
	include "config.php";
	//load file model
	include "model/model.php";
	//lay bien controller truyen tu url
	$controller = isset($_GET["controller"])?$_GET["controller"]:"home";
	//gan cac thanh phan de $controller thanh duong dan vat ly (la duong dan file controller)
	$controller = "controller/frontend/controller_$controller.php";
	include "view/frontend/master.php";
 ?>