<?php 
	class controller_add_edit_student{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----------
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			$key = isset($_GET["key"]) ? $_GET["key"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_student&act=do_edit&key=$key";
					//lay mot ban ghi tuong ung voi id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_student where st_id = $key");
					//load view
					include "view/backend/view_add_edit_student.php";
				break;
				case "do_edit":
					$ma_sv = $_POST["ma_sv"];
					$st_name = $_POST["st_name"];
					$st_sex = $_POST["st_sex"];
					$st_db = $_POST["st_db"];
					$st_hometown = $_POST["st_hometown"];
					$cl_id = $_POST["cl_id"];
					//update ban ghi tuong ung voi id truyen vao
					$this->model->execute("update tbl_student set ma_sv='$ma_sv', st_name='$st_name', st_sex='$st_sex', st_db='$st_db', st_hometown='$st_hometown', cl_id='$cl_id' where st_id=$key");
					
					//quay tro lai trang student
					header("location:admin.php?controller=student");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_student&act=do_add";
					//load view
					include "view/backend/view_add_edit_student.php";
				break;
				case "do_add":
					$ma_sv = $_POST["ma_sv"];
					$st_name = $_POST["st_name"];
					$st_sex = $_POST["st_sex"];
					$st_db = $_POST["st_db"];
					$st_hometown = $_POST["st_hometown"];
					$cl_id = $_POST["cl_id"];
					//insert ban ghi
					$this->model->execute("insert into tbl_student(ma_sv,st_name,st_sex,st_db,st_hometown,cl_id) values('$ma_sv','$st_name','$st_sex','$st_db','$st_hometown','$cl_id')");
					//quay tro lai trang student
					header("location:admin.php?controller=student");
				break;
			}
			//-----------
		}
	}
	new controller_add_edit_student();
 ?>