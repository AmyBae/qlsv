<?php 
	class controller_add_edit_news{
		public $model;
		public function __construct(){
			$this->model = new model();
			//----------
			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_news&act=do_edit&id=$id";
					//lay 1 ban ghi co id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_news where pk_news_id=$id");
					//load view
					include "view/backend/view_add_edit_news.php";
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_hotnews = isset($_POST["c_hotnews"])?1:0;
					$fk_category_news_id = $_POST["fk_category_news_id"];
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_news set c_name='$c_name',c_description='$c_description',c_content='$c_content',c_hotnews=$c_hotnews,fk_category_news_id=$fk_category_news_id where pk_news_id=$id");
					//------------
					//neu user chon anh thi thuc hien upload
					if($_FILES["c_img"]["name"] != ""){
						//--------------------
						//lay anh cu de xoa di
						$old_img = $this->model->get_a_record("select c_img from tbl_news where pk_news_id=$id");
						if(file_exists("public/upload/news/".$old_img->c_img))
							unlink("public/upload/news/".$old_img->c_img);
						//--------------------
						$tmp_name = $_FILES["c_img"]["tmp_name"];
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($tmp_name, "public/upload/news/$c_img");
						//update truong c_img
						$this->model->execute("update tbl_news set c_img='$c_img' where pk_news_id=$id");
					}
					//------------
					header("location:admin.php?controller=news");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_news&act=do_add";
					//load view
					include "view/backend/view_add_edit_news.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_hotnews = isset($_POST["c_hotnews"])?1:0;
					$fk_category_news_id = $_POST["fk_category_news_id"];
					$c_img = "";
					//neu user chon anh de upload thi thuc hien upload anh
					if($_FILES["c_img"]["name"] != ""){
						$c_img = time().$_FILES["c_img"]["name"];
						$tmp_name = $_FILES["c_img"]["tmp_name"];
						//upload anh
						move_uploaded_file($tmp_name, "public/upload/news/$c_img");
					}
					//insert ban ghi
					$this->model->execute("insert into tbl_news(c_name,c_description,c_content,c_img,c_hotnews,fk_category_news_id) values('$c_name','$c_description','$c_content','$c_img',$c_hotnews,$fk_category_news_id)");
					header("location:admin.php?controller=news");
				break;
			}
			//----------
		}
	}
	new controller_add_edit_news();
 ?>