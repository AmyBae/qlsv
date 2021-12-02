<?php 
	class controller_login{
		public $model;
		public function __construct(){
			//khoi tao bien $model la object cua class model
			$this->model = new model();
			//-----------
			//khi user an nut submit
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$us_name = $_POST["us_name"];
				$us_password = $_POST["us_password"];
				$us_password = md5($us_password);
				//kiem tra xem user co nam trong table tbl_user khong
				//lay 1 ban ghi
				$check = $this->model->get_a_record("select us_name, us_password from tbl_user where us_name='$us_name'");				
				if(isset($check->us_name)){
					//kiem tra password
					if($check->us_password == $us_password){
						//dang nhap thanh cong
						$_SESSION["us_name"] = $us_name;
						//quay tro lai trang admin
						header("location:admin.php");
					}else
						header("location:admin.php");
				}else
					header("location:admin.php");
			}
			//-----------
			//load view
			include "view/backend/view_login.php";
		}
	}
	new controller_login();
 ?>