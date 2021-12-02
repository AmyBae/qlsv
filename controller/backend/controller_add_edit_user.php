<?php 
	class controller_add_edit_user{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----------
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_user&act=do_edit&id=$id";
					//lay mot ban ghi tuong ung voi id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_user where us_id = $id");
					//load view
					include "view/backend/view_add_edit_user.php";
				break;
				case "do_edit":
					//$c_fullname = $_POST["c_fullname"];
					$us_password = $_POST["us_password"];
					//update ban ghi tuong ung voi id truyen vao
					//$this->model->execute("update tbl_user set c_fullname='$c_fullname' where us_id=$id");
					//neu user thay doi password
					if($us_password != ""){
						$us_password = md5($us_password);
						//update ban ghi tuong ung voi id truyen vao
						$this->model->execute("update tbl_user set us_password='$us_password' where us_id=$id");
					}
					//quay tro lai trang user
					header("location:admin.php?controller=user");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_user&act=do_add";
					//load view
					include "view/backend/view_add_edit_user.php";
				break;
				case "do_add":
					//$c_fullname = $_POST["c_fullname"];
					$us_password = $_POST["us_password"];
					$us_name = $_POST["us_name"];
					$us_password = md5($us_password);
					//insert ban ghi
					$this->model->execute("insert into tbl_user(us_name,us_password) values('$us_name','$us_password')");
					//quay tro lai trang user
					header("location:admin.php?controller=user");
				break;
			}
			//-----------
		}
	}
	new controller_add_edit_user();
 ?>