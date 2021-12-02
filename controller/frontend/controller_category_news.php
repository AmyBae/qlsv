<?php 
	class controller_catgory_news{
		public $model;
		public function __construct(){
			$this->model = new model();
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			//lay tat ca cac ban, co phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 4;
			//tinh so trang
			$total = $this->model->num_rows("select pk_news_id from tbl_news where fk_category_news_id=$id");
			//tinh so trang (su dung ham ceil de lay tran)
			//sotrang = tongsobanghi/sobanghitrenmottrang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai truyen tu url
			$page = isset($_GET["p"])&&($_GET["p"]>0)?($_GET["p"]-1):0;
			//truy van lay tu ban ghi nao
			//tubanghi = $page*sobanghitrentrang
			$from = $page * $record_per_page;
			$arr = $this->model->get_all("select * from tbl_news where fk_category_news_id=$id order by pk_news_id desc limit $from,$record_per_page");
			//load view
			include "view/frontend/view_category_news.php";
		}
	}
	new controller_catgory_news();
 ?>