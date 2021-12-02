<?php 
	class controller_news{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----------
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "delete":
					//--------------------
					//lay anh cu de xoa di
					$old_img = $this->model->get_a_record("select c_img from tbl_news where pk_news_id=$id");
					if(file_exists("public/upload/news/".$old_img->c_img))
						unlink("public/upload/news/".$old_img->c_img);
					//--------------------
					//xoa ban ghi co id truyen vao
					$this->model->execute("delete from tbl_news where pk_news_id=$id");
					//quay tro lai trang news
					header("location:admin.php?controller=news");
				break;
			}
			//-----------
			//lay tat ca cac ban, co phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 15;
			//tinh so trang
			$total = $this->model->num_rows("select pk_news_id from tbl_news");
			//tinh so trang (su dung ham ceil de lay tran)
			//sotrang = tongsobanghi/sobanghitrenmottrang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai truyen tu url
			$page = isset($_GET["p"])&&($_GET["p"]>0)?($_GET["p"]-1):0;
			//truy van lay tu ban ghi nao
			//tubanghi = $page*sobanghitrentrang
			$from = $page * $record_per_page;
			$arr = $this->model->get_all("select * from tbl_news order by pk_news_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/view_news.php";
		}
	}
	new controller_news();
 ?>